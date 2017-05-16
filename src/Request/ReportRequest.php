<?php

namespace RWypior\Regon\Request;

use RWypior\Regon\Exception\ClientException;
use RWypior\Regon\Model\ActivityReport;
use RWypior\Regon\RequestInterface;
use RWypior\Regon\Response\ActivityReportPhysicalResponse;
use RWypior\Regon\Response\ActivityReportResponse;
use RWypior\Regon\Response\ReportPhysicalResponse;
use RWypior\Regon\Response\ReportResponse;

class ReportRequest implements RequestInterface
{
    const REPORT_TYPE_GENERAL = 1;
    const REPORT_TYPE_ACTIVITY = 2;
    const REPORT_TYPE_UNITS = 3;
    const REPORT_TYPE_PARTNERS = 4;

    const REPORT_NAME_LEGAL = 'PublDaneRaportPrawna';
    const REPORT_NAME_ACTIVITY_LEGAL = 'PublDaneRaportDzialalnosciPrawnej';
    const REPORT_NAME_ACTIVITY_LEGAL_LOCAL = 'PublDaneRaportDzialalnosciLokalnejPrawnej';
    const REPORT_NAME_ACTIVITY_PHYSICAL = 'PublDaneRaportDzialalnosciFizycznej';
    const REPORT_NAME_ACTIVITY_PHYSICAL_LOCAL = 'PublDaneRaportDzialalnosciLokalnejFizycznej';
    const REPORT_NAME_ACTIVITY_PHYSICAL_CEIDG = 'PublDaneRaportDzialalnoscFizycznejCeidg';
    const REPORT_NAME_ACTIVITY_PHYSICAL_AGRICULTURE = 'PublDaneRaportDzialalnoscFizycznejRolnicza';
    const REPORT_NAME_ACTIVITY_PHYSICAL_OTHER = 'PublDaneRaportDzialalnoscFizycznejPozostala';
    const REPORT_NAME_ACTIVITY_PHYSICAL_KRUPGN = 'PublDaneRaportDzialalnoscFizycznejWKrupgn';
    const REPORT_NAME_LEGAL_LOCAL = 'PublDaneRaportLokalnaPrawnej';
    const REPORT_NAME_PHYSICAL_LOCAL = 'PublDaneRaportLokalnaFizycznej';

    protected $regon;
    protected $reportName;
    protected $reportType;
    protected $type;

    public function __construct(string $regon, string $type, string $silosId, int $reportType = self::REPORT_TYPE_GENERAL)
    {
        $this->type = $type;
        $this->regon = $regon;
        $this->reportName = self::getReportName($type, $silosId, $reportType);
        $this->reportType = $reportType;
    }

    /**
     * Get report name by given type and silos ID
     * @param string $type type
     * @param string $silosId SILOS ID
     * @param int $reportType report type from REPORT_NAME_* consts
     * @return null|string name or null when not found
     */
    public static function getReportName(string $type, string $silosId, int $reportType)
    {
        if ($reportType == self::REPORT_TYPE_ACTIVITY)
        {
            if ($type == 'P')
                return self::REPORT_NAME_ACTIVITY_LEGAL;

            if ($type == 'LP')
                return self::REPORT_NAME_ACTIVITY_LEGAL_LOCAL;

            if ($type == 'F')
                return self::REPORT_NAME_ACTIVITY_PHYSICAL;

            if ($type == 'LF')
                return self::REPORT_NAME_ACTIVITY_PHYSICAL_LOCAL;
        }

        if ($type == 'P')
            return self::REPORT_NAME_LEGAL;

        if ($type == 'F')
        {
            if ($silosId == 1)
                return self::REPORT_NAME_ACTIVITY_PHYSICAL_CEIDG;
            else if ($silosId == 2)
                return self::REPORT_NAME_ACTIVITY_PHYSICAL_AGRICULTURE;
            else if ($silosId == 3)
                return self::REPORT_NAME_ACTIVITY_PHYSICAL_OTHER;
            else if ($silosId == 4)
                return self::REPORT_NAME_ACTIVITY_PHYSICAL_KRUPGN;
        }

        if ($type == 'LP')
            return self::REPORT_NAME_LEGAL_LOCAL;

        if ($type == 'LF')
            return self::REPORT_NAME_PHYSICAL_LOCAL;

        return NULL;
    }

    public function getExpectedResponse()
    {
        if ($this->type == 'P')
        {
            if ($this->reportType == self::REPORT_TYPE_ACTIVITY)
                return ActivityReportResponse::class;

            return ReportResponse::class;
        }

        if ($this->type == 'F')
        {
            if ($this->reportType == self::REPORT_TYPE_ACTIVITY)
                return ActivityReportPhysicalResponse::class;

            return ReportPhysicalResponse::class;
        }

        throw new ClientException("Unrecognized company type \"{$this->type}\"");
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