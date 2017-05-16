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
        $underscore = '';
        if ($prefix == 'fiz')
            $underscore = '_';

        $report = new ActivityReport(
            $source["{$prefix}_pkd{$underscore}Kod"],
            $source["{$prefix}_pkd{$underscore}Nazwa"],
            $source["{$prefix}_pkd{$underscore}Przewazajace"] == 1
        );

        return $report;
    }
}