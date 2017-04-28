<?php

namespace RWypior\Regon\Response;

use RWypior\Regon\Model\Factory\ReportFactory;
use RWypior\Regon\Model\Report;
use RWypior\Regon\Model\SearchResult;
use RWypior\Regon\ResponseInterface;

class ReportResponse implements ResponseInterface
{
    protected $data;

    public function __construct($data)
    {
        $reports = [];

        if ($data->DanePobierzPelnyRaportResult)
        {
            $xml = new \SimpleXMLElement($data->DanePobierzPelnyRaportResult);

            foreach($xml->xpath('//root/dane') as $set)
            {
                $entries = [];
                foreach($set->children() as $entry)
                    $entries[$entry->getName()] = $entry->__toString();

                $reports[] = ReportFactory::createFromArray($entries);
            }

            $this->data = $reports;
        }
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param array $data
     * @return ReportResponse
     */
    public function setData(array $data): ReportResponse
    {
        $this->data = $data;
        return $this;
    }

}