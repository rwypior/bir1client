<?php
/**
 * Created by PhpStorm.
 * User: robertwypior
 * Date: 26/04/2017
 * Time: 11:33
 */

namespace RWypior\Regon\Model\Details;


class AddressSymbols extends DetailModel
{
    protected $country;
    protected $voivodeship;
    protected $region;
    protected $community;
    protected $postalLocality;
    protected $locality;
    protected $street;

    public static function getDictionary($prefix)
    {
        return [
            "{$prefix}Kraj_Symbol" => 'country',
            "{$prefix}Wojewodztwo_Symbol" => 'voivodeship',
            "{$prefix}Powiat_Symbol" => 'region',
            "{$prefix}Gmina_Symbol" => 'community',
            "{$prefix}MiejscowoscPoczty_Symbol" => 'postalLocality',
            "{$prefix}Miejscowosc_Symbol" => 'locality',
            "{$prefix}Ulica_Symbol" => 'street'
        ];
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     * @return AddressSymbols
     */
    public function setCountry($country)
    {
        $this->country = $country;
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
     * @return AddressSymbols
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
     * @return AddressSymbols
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
     * @return AddressSymbols
     */
    public function setCommunity($community)
    {
        $this->community = $community;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPostalLocality()
    {
        return $this->postalLocality;
    }

    /**
     * @param mixed $postalLocality
     * @return AddressSymbols
     */
    public function setPostalLocality($postalLocality)
    {
        $this->postalLocality = $postalLocality;
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
     * @return AddressSymbols
     */
    public function setLocality($locality)
    {
        $this->locality = $locality;
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
     * @return AddressSymbols
     */
    public function setStreet($street)
    {
        $this->street = $street;
        return $this;
    }

}