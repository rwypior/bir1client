<?php

namespace RWypior\Regon\Response;

use RWypior\Regon\ResponseInterface;

class LogoutResponse implements ResponseInterface
{
    protected $value;

    public function __construct($data)
    {
        $this->value = $data->WylogujResult;
    }

    public function isSuccessful()
    {
        return $this->value;
    }
}