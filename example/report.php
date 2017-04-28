<?php

ini_set('display_errors', true);

include('../vendor/autoload.php');

$regon = new \RWypior\Regon\Client(\RWypior\Regon\Client::SERVICE_TYPE_PROD);

$regon->sendRequest(new \RWypior\Regon\Request\LoginRequest('a137213445434e769901'));

try {
    $request = new \RWypior\Regon\Request\ReportRequest('361695494', 'P', '6', \RWypior\Regon\Request\ReportRequest::REPORT_TYPE_ACTIVITY);
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