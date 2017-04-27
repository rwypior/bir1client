<?php

namespace RWypior\Regon\Exception;

use Throwable;

class ResponseException extends \Exception
{
    protected $response;

    public function __construct($message = "", $code = 0, Throwable $previous = null, $response)
    {
        parent::__construct($message, $code, $previous);

        $this->response = $response;
    }

    /**
     * @return mixed
     */
    public function getResponse()
    {
        return $this->response;
    }

}