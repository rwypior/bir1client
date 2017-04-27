<?php
/**
 * Created by PhpStorm.
 * User: robertwypior
 * Date: 26/04/2017
 * Time: 11:33
 */

namespace RWypior\Regon\Model\Details;


class Contact extends DetailModel
{
    protected $phone;
    protected $internalPhone;
    protected $fax;
    protected $email;
    protected $website;
    protected $email2;

    public static function getDictionary($prefix)
    {
        return [
            "{$prefix}_numerTelefonu" => 'phone',
            "{$prefix}_numerWewnetrznyTelefonu" => 'internalPhone',
            "{$prefix}_numerFaksu" => 'fax',
            "{$prefix}_adresEmail" => 'email',
            "{$prefix}_adresStronyinternetowej" => 'website',
            "{$prefix}_adresEmail2" => 'email2',
        ];
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     * @return Contact
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInternalPhone()
    {
        return $this->internalPhone;
    }

    /**
     * @param mixed $internalPhone
     * @return Contact
     */
    public function setInternalPhone($internalPhone)
    {
        $this->internalPhone = $internalPhone;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * @param mixed $fax
     * @return Contact
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     * @return Contact
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * @param mixed $website
     * @return Contact
     */
    public function setWebsite($website)
    {
        $this->website = $website;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail2()
    {
        return $this->email2;
    }

    /**
     * @param mixed $email2
     * @return Contact
     */
    public function setEmail2($email2)
    {
        $this->email2 = $email2;
        return $this;
    }

}