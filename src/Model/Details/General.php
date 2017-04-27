<?php
/**
 * Created by PhpStorm.
 * User: robertwypior
 * Date: 26/04/2017
 * Time: 11:30
 */

namespace RWypior\Regon\Model\Details;


class General extends DetailModel
{
    protected $regon;
    protected $nip;
    protected $name;
    protected $shortName;
    protected $registryNumber;

    public static function getDictionary($prefix)
    {
        return [
            "{$prefix}_regon14" => 'regon',
            "{$prefix}_nip" => 'nip',
            "{$prefix}_nazwa" => 'name',
            "{$prefix}_nazwaSkrocona" => 'shortName',
            "{$prefix}_numerWrejestrzeEwidencji" => 'registryNumber'
        ];
    }

    /**
     * @return mixed
     */
    public function getRegon()
    {
        return $this->regon;
    }

    /**
     * @param mixed $regon
     * @return General
     */
    public function setRegon($regon)
    {
        $this->regon = $regon;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNip()
    {
        return $this->nip;
    }

    /**
     * @param mixed $nip
     * @return General
     */
    public function setNip($nip)
    {
        $this->nip = $nip;
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
     * @return General
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getShortName()
    {
        return $this->shortName;
    }

    /**
     * @param mixed $shortName
     * @return General
     */
    public function setShortName($shortName)
    {
        $this->shortName = $shortName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRegistryNumber()
    {
        return $this->registryNumber;
    }

    /**
     * @param mixed $registryNumber
     * @return General
     */
    public function setRegistryNumber($registryNumber)
    {
        $this->registryNumber = $registryNumber;
        return $this;
    }

}