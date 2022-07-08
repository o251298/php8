<?php

namespace App\Services\HomeWork\IteratorLessons;


class InsensitiveArray implements \ArrayAccess
{

    private $obj = [];


    public function offsetExists($offset)
    {
        return isset($this->obj[$offset]);
    }

    public function offsetGet($offset)
    {
        return $this->obj[$offset];
    }

    public function offsetSet($offset, $value)
    {
        $this->obj[$offset] = $value;
    }

    public function offsetUnset($offset)
    {
        unset($this->obj[$offset]);
    }
}