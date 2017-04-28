<?php

namespace RWypior\Regon\Model;

class ActivityReport
{
    protected $code;
    protected $name;
    protected $isMain;

    public function __construct($code, $name, $isMain)
    {
        $this->code = $code;
        $this->name = $name;
        $this->isMain = $isMain;
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getIsMain()
    {
        return $this->isMain;
    }

}