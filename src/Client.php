<?php

namespace RWypior\Regon;

use RWypior\Regon\Exception\RequestException;
use RWypior\Regon\Exception\ResponseException;
use RWypior\Regon\Response\LoginResponse;

class Client
{
    const WSDL = 'https://wyszukiwarkaregontest.stat.gov.pl/wsBIR/wsdl/UslugaBIRzewnPubl.xsd';

    protected $sessionId = NULL;

    public $printRequests = false;

    protected function getHeaders(RequestInterface $request)
    {
        return [
            new \SoapHeader('http://www.w3.org/2005/08/addressing', 'Action', $request->getAction()),
            new \SoapHeader('http://www.w3.org/2005/08/addressing', 'To', 'https://wyszukiwarkaregontest.stat.gov.pl/wsBIR/UslugaBIRzewnPubl.svc')
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

        return new ExtSoapClient(self::WSDL, $allOptions);
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
     * @param RequestInterface $request
     * @return ResponseInterface
     * @throws RequestException
     * @throws ResponseException
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