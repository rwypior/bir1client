<?php
/**
 * Created by PhpStorm.
 * User: robertwypior
 * Date: 26/04/2017
 * Time: 11:34
 */

namespace RWypior\Regon\Model\Details;


class LegalSymbols extends DetailModel
{
    protected $legalForm;
    protected $detailLegalForm;
    protected $financialForm;
    protected $ownerForm;
    protected $foundingBody;
    protected $registryAuthority;
    protected $recordRegistryType;

    public static function getDictionary($prefix)
    {
        return [
            "{$prefix}_podstawowaFormaPrawna_Symbol" => 'legalForm',
            "{$prefix}_szczegolnaFormaPrawna_Symbol" => 'detailLegalForm',
            "{$prefix}_formaFinansowania_Symbol" => 'financialForm',
            "{$prefix}_formaWlasnosci_Symbol" => 'ownerForm',
            "{$prefix}_organZalozycielski_Symbol" => 'foundingBody',
            "{$prefix}_organRejestrowy_Symbol" => 'registryAuthority',
            "{$prefix}_rodzajRejestruEwidencji_Symbol" => 'recordRegistryType'
        ];
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

}