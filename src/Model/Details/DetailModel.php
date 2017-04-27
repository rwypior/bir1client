<?php

namespace RWypior\Regon\Model\Details;

abstract class DetailModel
{
    public abstract static function getDictionary($prefix);

    public static function createFromArray(array $source, $prefix)
    {
        $contact = new static();

        $dict = static::getDictionary($prefix);
        foreach($dict as $name => $field)
        {
            $value = $source[$name];
            $contact->$field = $value;
        }

        return $contact;
    }
}