<?php

namespace RWypior\Regon\Model\Factory;

use RWypior\Regon\Model\ActivityReport;

class ActivityReportFactory
{
    /**
     * @param $source
     * @param string $prefix
     * @return ActivityReport
     */
    public function createFromArray($source, string $prefix = 'praw')
    {
        $report = new ActivityReport(
            $source["{$prefix}_pkdKod"],
            $source["{$prefix}_pkdNazwa"],
            $source["{$prefix}_pkdPrzewazajace"] == 1
        );

        return $report;
    }
}