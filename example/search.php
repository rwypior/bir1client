<?php

ini_set('display_errors', true);

include('../vendor/autoload.php');

$regon = new \RWypior\Regon\Client(\RWypior\Regon\Client::SERVICE_TYPE_PROD);
$regon->printRequests = false;

$regon->sendRequest(new \RWypior\Regon\Request\LoginRequest('apikey'));

$searchData = new \RWypior\Regon\Model\SearchData();
$searchData->setRegon(['regon', 'regon2']);

try {
    $request = new \RWypior\Regon\Request\SearchRequest($searchData);
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