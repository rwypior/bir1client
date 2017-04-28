<?php

namespace RWypior\Regon\Response;

use RWypior\Regon\Model\Factory\ActivityReportFactory;

class ActivityReportResponse extends ReportResponse
{
    protected function getReportFactory()
    {
        return new ActivityReportFactory();
    }
}