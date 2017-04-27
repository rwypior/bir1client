<?php

namespace RWypior\Regon;

class ExtSoapClient extends \SoapClient
{
    /**
     * @inheritdoc
     */
    public function __doRequest($request, $location, $action, $version, $one_way = 0)
    {
        $response = parent::__doRequest($request, $location, $action, $version, $one_way);
        $response = stristr(stristr($response, "<s:"), "</s:Envelope>", true) . "</s:Envelope>";
        return $response;
    }
}