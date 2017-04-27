<?php
/**
 * Created by PhpStorm.
 * User: robertwypior
 * Date: 26/04/2017
 * Time: 11:34
 */

namespace RWypior\Regon\Model\Details;


class Legal extends DetailModel
{
    protected $symbols;

    protected $legalForm;
    protected $detailLegalForm;
    protected $financialForm;
    protected $ownerForm;
    protected $foundingBody;
    protected $registryAuthority;
    protected $recordRegistryType;

    protected $localUnits;

    public static function getDictionary($prefix)
    {
        return [
            "{$prefix}_podstawowaFormaPrawna_Nazwa" => 'legalForm',
            "{$prefix}_szczegolnaFormaPrawna_Nazwa" => 'detailLegalForm',
            "{$prefix}_formaFinansowania_Nazwa" => 'financialForm',
            "{$prefix}_formaWlasnosci_Nazwa" => 'ownerForm',
            "{$prefix}_organZalozycielski_Nazwa" => 'foundingBody',
            "{$prefix}_organRejestrowy_Nazwa" => 'registryAuthority',
            "{$prefix}_rodzajRejestruEwidencji_Nazwa" => 'recordRegistryType',
            "{$prefix}_jednostekLokalnych" => 'localUnits'
        ];
    }

    public static function createFromArray(array $source, $prefix)
    {
        $legal = parent::createFromArray($source, $prefix);

        $legal->symbols = LegalSymbols::createFromArray($source, $prefix);

        return $legal;
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
     * @return Legal
     */
    public function setSymbols($symbols)
    {
        $this->symbols = $symbols;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLegalForm()
    {
        return $this->legalForm;
    }

    /**
     * @param mixed $legalForm
     * @return Legal
     */
    public function setLegalForm($legalForm)
    {
        $this->legalForm = $legalForm;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDetailLegalForm()
    {
        return $this->detailLegalForm;
    }

    /**
     * @param mixed $detailLegalForm
     * @return Legal
     */
    public function setDetailLegalForm($detailLegalForm)
    {
        $this->detailLegalForm = $detailLegalForm;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFinancialForm()
    {
        return $this->financialForm;
    }

    /**
     * @param mixed $financialForm
     * @return Legal
     */
    public function setFinancialForm($financialForm)
    {
        $this->financialForm = $financialForm;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOwnerForm()
    {
        return $this->ownerForm;
    }

    /**
     * @param mixed $ownerForm
     * @return Legal
     */
    public function setOwnerForm($ownerForm)
    {
        $this->ownerForm = $ownerForm;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFoundingBody()
    {
        return $this->foundingBody;
    }

    /**
     * @param mixed $foundingBody
     * @return Legal
     */
    public function setFoundingBody($foundingBody)
    {
        $this->foundingBody = $foundingBody;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRegistryAuthority()
    {
        return $this->registryAuthority;
    }

    /**
     * @param mixed $registryAuthority
     * @return Legal
     */
    public function setRegistryAuthority($registryAuthority)
    {
        $this->registryAuthority = $registryAuthority;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRecordRegistryType()
    {
        return $this->recordRegistryType;
    }

    /**
     * @param mixed $recordRegistryType
     * @return Legal
     */
    public function setRecordRegistryType($recordRegistryType)
    {
        $this->recordRegistryType = $recordRegistryType;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLocalUnits()
    {
        return $this->localUnits;
    }

    /**
     * @param mixed $localUnits
     * @return Legal
     */
    public function setLocalUnits($localUnits)
    {
        $this->localUnits = $localUnits;
        return $this;
    }

}