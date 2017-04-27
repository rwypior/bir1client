<?php

namespace RWypior\Regon\Model;

use RWypior\Regon\Model\Details\Address;
use RWypior\Regon\Model\Details\Contact;
use RWypior\Regon\Model\Details\General;
use RWypior\Regon\Model\Details\Legal;

class Report
{
    /** @var Address $address */
    protected $address;

    /** @var Address $correspondenceAddress */
    protected $correspondenceAddress;

    /** @var Contact $contact */
    protected $contact;

    /** @var General $general */
    protected $general;

    /** @var Legal $legal */
    protected $legal;

    public function __construct(Address $address, Address $correspondenceAddress, Contact $contact, General $general, Legal $legal)
    {
        $this->address = $address;
        $this->correspondenceAddress = $correspondenceAddress;
        $this->contact = $contact;
        $this->general = $general;
        $this->legal = $legal;
    }

    /**
     * @return Address
     */
    public function getAddress(): Address
    {
        return $this->address;
    }

    /**
     * @param Address $address
     * @return Report
     */
    public function setAddress(Address $address): Report
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return Address
     */
    public function getCorrespondenceAddress(): Address
    {
        return $this->correspondenceAddress;
    }

    /**
     * @param Address $correspondenceAddress
     * @return Report
     */
    public function setCorrespondenceAddress(Address $correspondenceAddress): Report
    {
        $this->correspondenceAddress = $correspondenceAddress;
        return $this;
    }

    /**
     * @return Contact
     */
    public function getContact(): Contact
    {
        return $this->contact;
    }

    /**
     * @param Contact $contact
     * @return Report
     */
    public function setContact(Contact $contact): Report
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * @return General
     */
    public function getGeneral(): General
    {
        return $this->general;
    }

    /**
     * @param General $general
     * @return Report
     */
    public function setGeneral(General $general): Report
    {
        $this->general = $general;
        return $this;
    }

    /**
     * @return Legal
     */
    public function getLegal(): Legal
    {
        return $this->legal;
    }

    /**
     * @param Legal $legal
     * @return Report
     */
    public function setLegal(Legal $legal): Report
    {
        $this->legal = $legal;
        return $this;
    }

}