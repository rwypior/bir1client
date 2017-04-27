<?php

namespace RWypior\Regon\Model;

class SearchResult
{
    protected $regon;
    protected $name;
    protected $voivodeship;
    protected $region;
    protected $community;
    protected $locality;
    protected $postalCode;
    protected $street;
    protected $type;
    protected $silosId;

    /**
     * @return mixed
     */
    public function getRegon()
    {
        return $this->regon;
    }

    /**
     * @param mixed $regon
     * @return SearchResult
     */
    public function setRegon($regon)
    {
        $this->regon = $regon;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return SearchResult
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getVoivodeship()
    {
        return $this->voivodeship;
    }

    /**
     * @param mixed $voivodeship
     * @return SearchResult
     */
    public function setVoivodeship($voivodeship)
    {
        $this->voivodeship = $voivodeship;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @param mixed $region
     * @return SearchResult
     */
    public function setRegion($region)
    {
        $this->region = $region;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCommunity()
    {
        return $this->community;
    }

    /**
     * @param mixed $community
     * @return SearchResult
     */
    public function setCommunity($community)
    {
        $this->community = $community;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLocality()
    {
        return $this->locality;
    }

    /**
     * @param mixed $locality
     * @return SearchResult
     */
    public function setLocality($locality)
    {
        $this->locality = $locality;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * @param mixed $postalCode
     * @return SearchResult
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param mixed $street
     * @return SearchResult
     */
    public function setStreet($street)
    {
        $this->street = $street;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     * @return SearchResult
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSilosId()
    {
        return $this->silosId;
    }

    /**
     * @param mixed $silosId
     * @return SearchResult
     */
    public function setSilosId($silosId)
    {
        $this->silosId = $silosId;
        return $this;
    }
}