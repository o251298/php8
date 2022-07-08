<?php

namespace App\String;

class StringHelper
{
    public static function toUpper(string $string) : string
    {
        return strtoupper($string);
    }

    public static function getSmallString(string $string) : string
    {
        return substr($string, 0, 10) . " ...";
    }
}