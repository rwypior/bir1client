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
    protected $createdDate;
    protected $activityStartDate;
    protected $regonEntryDate;
    protected $activitySuspensionDate;
    protected $activityResumeDate;
    protected $changeDate;
    protected $activityStopDate;
    protected $regonRemoveDate;

    public static function getDictionary($prefix)
    {
        return [
            "{$prefix}_regon14" => 'regon',
            "{$prefix}_nip" => 'nip',
            "{$prefix}_nazwa" => 'name',
            "{$prefix}_nazwaSkrocona" => 'shortName',
            "{$prefix}_numerWrejestrzeEwidencji" => 'registryNumber',
            "{$prefix}_dataPowstania" => 'createdDate',
            "{$prefix}_dataRozpoczeciaDzialalnosci" => 'activityStartDate',
            "{$prefix}_dataWpisuDoREGON" => 'regonEntryDate',
            "{$prefix}_dataZawieszeniaDzialalnosci" => 'activitySuspensionDate',
            "{$prefix}_dataWznowieniaDzialalnosci" => 'activityResumeDate',
            "{$prefix}_dataZaistnieniaZmiany" => 'changeDate',
            "{$prefix}_dataZakonczeniaDzialalnosci" => 'activityStopDate',
            "{$prefix}_dataSkresleniazRegon" => 'regonRemoveDate',
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

    /**
     * @return mixed
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * @param mixed $createdDate
     * @return General
     */
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getActivityStartDate()
    {
        return $this->activityStartDate;
    }

    /**
     * @param mixed $activityStartDate
     * @return General
     */
    public function setActivityStartDate($activityStartDate)
    {
        $this->activityStartDate = $activityStartDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRegonEntryDate()
    {
        return $this->regonEntryDate;
    }

    /**
     * @param mixed $regonEntryDate
     * @return General
     */
    public function setRegonEntryDate($regonEntryDate)
    {
        $this->regonEntryDate = $regonEntryDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getActivitySuspensionDate()
    {
        return $this->activitySuspensionDate;
    }

    /**
     * @param mixed $activitySuspensionDate
     * @return General
     */
    public function setActivitySuspensionDate($activitySuspensionDate)
    {
        $this->activitySuspensionDate = $activitySuspensionDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getActivityResumeDate()
    {
        return $this->activityResumeDate;
    }

    /**
     * @param mixed $activityResumeDate
     * @return General
     */
    public function setActivityResumeDate($activityResumeDate)
    {
        $this->activityResumeDate = $activityResumeDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getChangeDate()
    {
        return $this->changeDate;
    }

    /**
     * @param mixed $changeDate
     * @return General
     */
    public function setChangeDate($changeDate)
    {
        $this->changeDate = $changeDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getActivityStopDate()
    {
        return $this->activityStopDate;
    }

    /**
     * @param mixed $activityStopDate
     * @return General
     */
    public function setActivityStopDate($activityStopDate)
    {
        $this->activityStopDate = $activityStopDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRegonRemoveDate()
    {
        return $this->regonRemoveDate;
    }

    /**
     * @param mixed $regonRemoveDate
     * @return General
     */
    public function setRegonRemoveDate($regonRemoveDate)
    {
        $this->regonRemoveDate = $regonRemoveDate;
        return $this;
    }
    
}