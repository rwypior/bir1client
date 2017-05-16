<?php

namespace RWypior\Regon\Response;

use RWypior\Regon\Model\Factory\ReportFactory;
use RWypior\Regon\Model\Report;
use RWypior\Regon\Model\SearchResult;
use RWypior\Regon\ResponseInterface;

class ReportPhysicalResponse extends ReportResponse
{
    protected function getPrefix()
    {
        return 'fiz';
    }
}