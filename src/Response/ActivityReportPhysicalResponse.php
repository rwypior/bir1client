<?php

namespace RWypior\Regon\Response;

use RWypior\Regon\Model\Factory\ActivityReportFactory;

class ActivityReportPhysicalResponse extends ReportResponse
{
    protected function getPrefix()
    {
        return 'fiz';
    }

    protected function getReportFactory()
    {
        return new ActivityReportFactory();
    }
}