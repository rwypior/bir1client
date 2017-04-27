<?php

ini_set('display_errors', true);

include('../vendor/autoload.php');

$regon = new \RWypior\Regon\Client();

$regon->sendRequest(new \RWypior\Regon\Request\LoginRequest('apikey'));

try {
    $request = new \RWypior\Regon\Request\ReportRequest('regon1', 'P', '6');
    $response = $regon->sendRequest($request);
    var_dump($response);
}
catch(\RWypior\Regon\Exception\RequestException $ex)
{
    var_dump($ex);
    var_dump($ex->getSoapRequest());
    var_dump($ex->getSoapResponse());
}

$regon->sendRequest(new \RWypior\Regon\Request\LogoutRequest($regon->getSessionId()));