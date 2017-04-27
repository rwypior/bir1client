<?php

namespace RWypior\Regon;

interface RequestInterface
{
    public function getAction();
    public function getExpectedResponse();
    public function getMethodName();
    public function toArray();
}