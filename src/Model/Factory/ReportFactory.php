<?php

namespace RWypior\Regon\Model\Factory;

use RWypior\Regon\Model\Details\Address;
use RWypior\Regon\Model\Details\Contact;
use RWypior\Regon\Model\Details\General;
use RWypior\Regon\Model\Details\Legal;
use RWypior\Regon\Model\Report;

class ReportFactory
{
    /**
     * @param $source
     * @param string $prefix
     * @return Report
     */
    public static function createFromArray($source, string $prefix = 'praw')
    {
        $address = Address::createFromArray($source, $prefix . '_adSiedz');
        $corAddress = Address::createFromArray($source, $prefix . '_adKor');
        $contact = Contact::createFromArray($source, $prefix);
        $general = General::createFromArray($source, $prefix);
        $legal = Legal::createFromArray($source, $prefix);

        $report = new Report($address, $corAddress, $contact, $general, $legal);

        return $report;
    }
}