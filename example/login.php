<?php

ini_set('display_errors', true);

include('../vendor/autoload.php');

$regon = new \RWypior\Regon\Client(\RWypior\Regon\Client::SERVICE_TYPE_PROD);
$regon->printRequests = false;

try {
    $loginRequest = new \RWypior\Regon\Request\LoginRequest('apikey');
    /** @var \RWypior\Regon\Response\LoginResponse $response */
    $response = $regon->sendRequest($loginRequest);

    var_dump($response);

    $logoutRequest = new \RWypior\Regon\Request\LogoutRequest($regon->getSessionId());
    /** @var \RWypior\Regon\Response\LogoutResponse $response */
    $response = $regon->sendRequest($logoutRequest);

    var_dump($response);
}
catch(\Exception $ex)
{
    print_r($ex);
}
