<?php

namespace RWypior\Regon\Request;

use RWypior\Regon\RequestInterface;
use RWypior\Regon\Response\ReportResponse;

class ReportRequest implements RequestInterface
{
    protected $regon;
    protected $reportName;

    public function __construct(string $regon, string $type, string $silosId)
    {
        $this->regon = $regon;
        $this->reportName = self::getReportName($type, $silosId);
    }

    /**
     * Get report name by given type and silos ID
     * @param string $type
     * @param string $silosId
     * @return null|string name or null when not found
     */
    public static function getReportName(string $type, string $silosId)
    {
        if ($type == 'P')
            return 'PublDaneRaportPrawna';

        if ($type == 'F')
        {
            if ($silosId == 1)
                return 'PublDaneRaportDzialalnoscFizycznejCeidg';
            else if ($silosId == 2)
                return 'PublDaneRaportDzialalnoscFizycznejRolnicza';
            else if ($silosId == 3)
                return 'PublDaneRaportDzialalnoscFizycznejPozostala';
            else if ($silosId == 4)
                return 'PublDaneRaportDzialalnoscFizycznejWKrupgn';
        }

        if ($type == 'LP')
            return 'PublDaneRaportLokalnaPrawnej';

        if ($type == 'LF')
            return 'PublDaneRaportLokalnaFizycznej';

        return NULL;
    }

    public function getExpectedResponse()
    {
        return ReportResponse::class;
    }

    public function getAction()
    {
        return 'http://CIS/BIR/PUBL/2014/07/IUslugaBIRzewnPubl/DanePobierzPelnyRaport';
    }

    public function getMethodName()
    {
        return 'DanePobierzPelnyRaport';
    }

    public function toArray()
    {
        return [
            'pRegon' => $this->regon,
            'pNazwaRaportu' => $this->reportName
        ];
    }
}