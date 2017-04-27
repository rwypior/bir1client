<?php
/**
 * Created by PhpStorm.
 * User: robertwypior
 * Date: 26/04/2017
 * Time: 11:33
 */

namespace RWypior\Regon\Model\Details;


class Address extends DetailModel
{
    protected $symbols;

    protected $postalCode;
    protected $propertyNumber;
    protected $flatNumber;
    protected $atypicalLocality;
    protected $country;
    protected $voivodeship;
    protected $region;
    protected $community;
    protected $locality;
    protected $postalLocality;
    protected $street;

    public static function getDictionary($prefix)
    {
        return [
            "{$prefix}Kraj_Nazwa" => 'country',
            "{$prefix}Wojewodztwo_Nazwa" => 'voivodeship',
            "{$prefix}Powiat_Nazwa" => 'region',
            "{$prefix}Gmina_Nazwa" => 'community',
            "{$prefix}MiejscowoscPoczty_Nazwa" => 'postalLocality',
            "{$prefix}Miejscowosc_Nazwa" => 'locality',
            "{$prefix}Ulica_Nazwa" => 'street',
            "{$prefix}NietypoweMiejsceLokalizacji" => 'atypicalLocality',
            "{$prefix}KodPocztowy" => 'postalCode',
            "{$prefix}NumerNieruchomosci" => 'propertyNumber',
            "{$prefix}NumerLokalu" => 'flatNumber',
        ];
    }

    public static function createFromArray(array $source, $prefix)
    {
        $address = parent::createFromArray($source, $prefix);

        $address->symbols = AddressSymbols::createFromArray($source, $prefix);

        return $address;
    }

    /**
     * @return mixed
     */
    public function getSymbols()
    {
        return $this->symbols;
    }

    /**
     * @param mixed $symbols
     * @return Address
     */
    public function setSymbols($symbols)
    {
        $this->symbols = $symbols;
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
     * @return Address
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPropertyNumber()
    {
        return $this->propertyNumber;
    }

    /**
     * @param mixed $propertyNumber
     * @return Address
     */
    public function setPropertyNumber($propertyNumber)
    {
        $this->propertyNumber = $propertyNumber;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFlatNumber()
    {
        return $this->flatNumber;
    }

    /**
     * @param mixed $flatNumber
     * @return Address
     */
    public function setFlatNumber($flatNumber)
    {
        $this->flatNumber = $flatNumber;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAtypicalLocality()
    {
        return $this->atypicalLocality;
    }

    /**
     * @param mixed $atypicalLocality
     * @return Address
     */
    public function setAtypicalLocality($atypicalLocality)
    {
        $this->atypicalLocality = $atypicalLocality;
        return $this;
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
     * @return Address
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
     * @return Address
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
     * @return Address
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
     * @return Address
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
     * @return Address
     */
    public function setLocality($locality)
    {
        $this->locality = $locality;
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
     * @return Address
     */
    public function setPostalLocality($postalLocality)
    {
        $this->postalLocality = $postalLocality;
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
     * @return Address
     */
    public function setStreet($street)
    {
        $this->street = $street;
        return $this;
    }

}