<?php

namespace App\Services\HomeWork\IteratorLessons;

class TestInsensitiveArray extends InsensitiveArray
{
    public function log($str)
    {
        return $str;
    }
}