<?php

ini_set('display_errors', true);

include('../vendor/autoload.php');

$regon = new \RWypior\Regon\Client(\RWypior\Regon\Client::SERVICE_TYPE_PROD);
$regon->printRequests = false;

$regon->sendRequest(new \RWypior\Regon\Request\LoginRequest('apikey'));

$nrregon = 'regon';
$searchData = new \RWypior\Regon\Model\SearchData();
$searchData->setRegon([$nrregon]);

try {
    $request = new \RWypior\Regon\Request\SearchRequest($searchData);
    /** @var \RWypior\Regon\Response\SearchResponse $response */
    $response = $regon->sendRequest($request);
    /** @var \RWypior\Regon\Model\SearchResult $result */
    $result = $response->getSearchResult()[0];

    var_dump($response);

    $type = $result->getType();
    $silos = $result->getSilosId();

    $reportType = \RWypior\Regon\Request\ReportRequest::REPORT_TYPE_GENERAL;

    $reportRequest = new \RWypior\Regon\Request\ReportRequest($nrregon, $type, $silos, $reportType);
    $reportResponse = $regon->sendRequest($reportRequest);

    var_dump($reportResponse);

    $reportType = \RWypior\Regon\Request\ReportRequest::REPORT_TYPE_ACTIVITY;

    $activityRequest = new \RWypior\Regon\Request\ReportRequest($nrregon, $type, $silos, $reportType);
    $activityResponse = $regon->sendRequest($activityRequest);

    var_dump($activityResponse);
}
catch(\RWypior\Regon\Exception\RequestException $ex)
{
    var_dump($ex);
    var_dump($ex->getSoapRequest());
    var_dump($ex->getSoapResponse());
}

$regon->sendRequest(new \RWypior\Regon\Request\LogoutRequest($regon->getSessionId()));