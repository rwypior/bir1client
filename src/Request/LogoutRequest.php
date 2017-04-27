<?php

namespace RWypior\Regon\Request;

use RWypior\Regon\RequestInterface;
use RWypior\Regon\Response\LogoutResponse;

class LogoutRequest implements RequestInterface
{
    protected $sessid;

    public function __construct(string $sessid)
    {
        $this->sessid = $sessid;
    }

    public function getExpectedResponse()
    {
        return LogoutResponse::class;
    }

    public function getAction()
    {
        return 'http://CIS/BIR/PUBL/2014/07/IUslugaBIRzewnPubl/Wyloguj';
    }

    public function getMethodName()
    {
        return 'Wyloguj';
    }

    public function toArray()
    {
        return [
            'pIdentyfikatorSesji' => $this->sessid
        ];
    }
}