<?php

namespace RWypior\Regon\Response;

use RWypior\Regon\ResponseInterface;

class LoginResponse implements ResponseInterface
{
    protected $sessid;

    public function __construct($data)
    {
        $this->sessid = $data->ZalogujResult;
    }

    public function isSuccessful()
    {
        return (bool)$this->sessid;
    }

    /**
     * @return mixed
     */
    public function getSessid()
    {
        return $this->sessid;
    }

    /**
     * @param mixed $sessid
     */
    public function setSessid($sessid)
    {
        $this->sessid = $sessid;
    }

}