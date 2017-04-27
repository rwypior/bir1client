<?php

namespace RWypior\Regon\Request;

use RWypior\Regon\RequestInterface;
use RWypior\Regon\Response\LoginResponse;

class LoginRequest implements RequestInterface
{
    protected $apikey;

    public function __construct(string $apikey)
    {
        $this->apikey = $apikey;
    }

    public function getExpectedResponse()
    {
        return LoginResponse::class;
    }

    public function getAction()
    {
        return 'http://CIS/BIR/PUBL/2014/07/IUslugaBIRzewnPubl/Zaloguj';
    }

    public function getMethodName()
    {
        return 'Zaloguj';
    }

    public function toArray()
    {
        return [
            'pKluczUzytkownika' => $this->apikey
        ];
    }
}