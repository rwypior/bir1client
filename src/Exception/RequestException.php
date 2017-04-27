<?php

namespace RWypior\Regon\Exception;

use Throwable;

class RequestException extends \Exception
{
    protected $soapRequest;
    protected $soapResponse;

    public function __construct($message = "", $code = 0, Throwable $previous = null, $soapRequest = '', $soapResponse = '')
    {
        parent::__construct($message, $code, $previous);

        $this->soapRequest = $soapRequest;
        $this->soapResponse = $soapResponse;
    }

    /**
     * @return string
     */
    public function getSoapRequest()
    {
        return $this->soapRequest;
    }

    /**
     * @param string $soapRequest
     */
    public function setSoapRequest($soapRequest)
    {
        $this->soapRequest = $soapRequest;
    }

    /**
     * @return string
     */
    public function getSoapResponse()
    {
        return $this->soapResponse;
    }

    /**
     * @param string $soapResponse
     */
    public function setSoapResponse($soapResponse)
    {
        $this->soapResponse = $soapResponse;
    }
}