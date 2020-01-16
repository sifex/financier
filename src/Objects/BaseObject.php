<?php


namespace Sifex\Financier\Objects;


class BaseObject
{
    /**
     * @return array
     */
    public function toArray() : array
    {
        return get_object_vars($this);
    }
}
