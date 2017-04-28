<?php

namespace RWypior\Regon;

use RWypior\Regon\Exception\ClientException;
use RWypior\Regon\Exception\RequestException;
use RWypior\Regon\Exception\ResponseException;
use RWypior\Regon\Response\LoginResponse;

class Client
{
    const WSDL = 'https://wyszukiwarkaregontest.stat.gov.pl/wsBIR/wsdl/UslugaBIRzewnPubl.xsd';

    const SERVICE_TEST = 'https://wyszukiwarkaregontest.stat.gov.pl/wsBIR/UslugaBIRzewnPubl.svc';
    const SERVICE_PROD = 'https://wyszukiwarkaregon.stat.gov.pl/wsBIR/UslugaBIRzewnPubl.svc';

    /** @const int SERVICE_TYPE_TEST test environment service */
    const SERVICE_TYPE_TEST = 1;

    /** @const int SERVICE_TYPE_PROD production environment service */
    const SERVICE_TYPE_PROD = 2;

    protected $sessionId = NULL;
    protected $serviceType;
    protected $service;

    public $printRequests = false;

    /**
     * @param int $serviceType service type to use, either SERVICE_TYPE_TEST or SERVICE_TYPE_PROD
     * @throws ClientException when $serviceType is invalid
     */
    public function __construct(int $serviceType = self::SERVICE_TYPE_TEST)
    {
        $this->serviceType = $serviceType;

        switch($this->serviceType)
        {
            case self::SERVICE_TYPE_TEST:
                $this->service = self::SERVICE_TEST;
                break;
            case self::SERVICE_TYPE_PROD:
                $this->service = self::SERVICE_PROD;
                break;
            default:
                throw new ClientException("Unrecognized service type \"$serviceType\"");
        }
    }

    protected function getHeaders(RequestInterface $request)
    {
        return [
            new \SoapHeader('http://www.w3.org/2005/08/addressing', 'Action', $request->getAction()),
            new \SoapHeader('http://www.w3.org/2005/08/addressing', 'To', $this->service)
        ];
    }

    protected function createClient(array $options = [])
    {
        $allOptions = array_merge(
            [
                'soap_version' => SOAP_1_2,
                'trace' => true
            ],
            $options
        );

        $client = new ExtSoapClient(self::WSDL, $allOptions);
        $client->__setLocation($this->service);

        return $client;
    }

    protected function getSoapOptions()
    {
        if ($this->sessionId)
        {
            return [
                'stream_context' => stream_context_create([
                    'http' => [
                        'header' => "sid: {$this->sessionId}"
                    ]
                ])
            ];
        }

        return [];
    }

    /**
     * @param RequestInterface $request request to send
     * @return ResponseInterface resulting response
     * @throws RequestException when sending request was impossible
     * @throws ResponseException when client was unable to read resulting response
     */
    public function sendRequest(RequestInterface $request)
    {
        $additionalOptions = $this->getSoapOptions();

        $soapClient = $this->createClient($additionalOptions);
        $soapClient->__setSoapHeaders($this->getHeaders($request));

        $expectedResponseClass = $request->getExpectedResponse();
        $methodName = $request->getMethodName();
        try {
            $result = $soapClient->$methodName($request->toArray());
        }
        catch(\SoapFault $ex)
        {
            throw new RequestException('Could not send request', $ex->getCode(), $ex, $soapClient->__getLastRequest(), $soapClient->__getLastResponse());
        }

        if ($this->printRequests)
        {
            print_r($soapClient->__getLastRequestHeaders());
            print_r($soapClient->__getLastRequest());
        }

        try {
            /** @var ResponseInterface $response */
            $response = new $expectedResponseClass($result);
        }
        catch (\Exception $ex)
        {
            throw new ResponseException('Could not read response', $ex->getCode(), $ex, $result);
        }

        if ($response instanceof LoginResponse)
            $this->sessionId = $response->getSessid();

        return $response;
    }

    /**
     * Get current session ID
     * @return string
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }
}