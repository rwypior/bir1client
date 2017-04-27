<?php

namespace RWypior\Regon\Request;

use RWypior\Regon\Model\SearchData;
use RWypior\Regon\RequestInterface;
use RWypior\Regon\Response\SearchResponse;

class SearchRequest implements RequestInterface
{
    protected $searchData;

    public function __construct(SearchData $searchData)
    {
        $this->searchData = $searchData;
    }

    public function getExpectedResponse()
    {
        return SearchResponse::class;
    }

    public function getAction()
    {
        return 'http://CIS/BIR/PUBL/2014/07/IUslugaBIRzewnPubl/DaneSzukaj';
    }

    public function getMethodName()
    {
        return 'DaneSzukaj';
    }

    public function toArray()
    {
        $sd = $this->searchData;
        return [
            'pParametryWyszukiwania' => $sd->toString()
        ];
    }
}