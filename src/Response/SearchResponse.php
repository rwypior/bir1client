<?php

namespace RWypior\Regon\Response;

use RWypior\Regon\Model\SearchResult;
use RWypior\Regon\ResponseInterface;

class SearchResponse implements ResponseInterface
{
    protected $searchResult;

    public function __construct($data)
    {
        $this->searchResult = [];

        if ($data->DaneSzukajResult)
        {
            $xml = new \SimpleXMLElement($data->DaneSzukajResult);

            foreach($xml->xpath('//root/dane') as $set)
            {
                $entries = [];
                foreach($set->children() as $entry)
                    $entries[$entry->getName()] = $entry->__toString();

                $searchResult = new SearchResult();

                $searchResult->setRegon($entries['Regon'] ?? NULL);
                $searchResult->setName($entries['Nazwa'] ?? NULL);
                $searchResult->setVoivodeship($entries['Wojewodztwo'] ?? NULL);
                $searchResult->setRegion($entries['Powiat'] ?? NULL);
                $searchResult->setCommunity($entries['Gmina'] ?? NULL);
                $searchResult->setLocality($entries['Miejscowosc'] ?? NULL);
                $searchResult->setPostalCode($entries['KodPocztowy'] ?? NULL);
                $searchResult->setStreet($entries['Ulica'] ?? NULL);
                $searchResult->setType($entries['Typ'] ?? NULL);
                $searchResult->setSilosId($entries['SilosID'] ?? NULL);

                $this->searchResult[] = $searchResult;
            }
        }
    }

    /**
     * @return SearchResult[]
     */
    public function getSearchResult(): array
    {
        return $this->searchResult;
    }

}