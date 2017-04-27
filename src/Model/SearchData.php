<?php

namespace RWypior\Regon\Model;

class SearchData
{
    const SEPARATOR = ',';
    const REGON_SIZE_9 = 9;
    const REGON_SIZE_14 = 14;

    protected $regon = NULL;
    protected $nip = NULL;
    protected $krs = NULL;

    protected $regonSize = self::REGON_SIZE_9;

    private function translateEntryName($name, $value)
    {
        $result = ucfirst($name);

        if (is_array($value))
        {
            $result .= 'y';

            if ($name == 'regon')
                $result .= $this->regonSize . 'zn';
        }

        return $result;
    }

    public function toString()
    {
        $criteria = ['regon', 'nip', 'krs'];

        $result = [];
        foreach($criteria as $crit)
        {
            $entry = $this->$crit;

            if ($entry)
            {
                $value = $entry;
                $name = $this->translateEntryName($crit, $value);

                if (is_array($value))
                {
                    $value = implode(self::SEPARATOR, $value);
                }

                $result[$name] = $value;
            }
        }

        return $result;
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
     */
    public function setRegon($regon)
    {
        $this->regon = $regon;
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
     */
    public function setNip($nip)
    {
        $this->nip = $nip;
    }

    /**
     * @return mixed
     */
    public function getKrs()
    {
        return $this->krs;
    }

    /**
     * @param mixed $krs
     */
    public function setKrs($krs)
    {
        $this->krs = $krs;
    }

}