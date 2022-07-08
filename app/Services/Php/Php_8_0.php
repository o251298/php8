<?php


namespace App\Services\Php;


class Php_8_0
{

    public function __construct(public readonly int $id, private $country = null, private $lang = null)
    {
    }

    public static function getArguments(string|int $arg1 = 'agr1', string|int $arg2 = 'arg2', string|int $arg3 = 'arg3') : array|null
    {
        return func_get_args();
    }

    public static function testeMatch(string $arg) : bool
    {
        $result = match ($arg) {
            'hello' => true,
            default => false
        };
        return $result;
    }


    //$lang = $people?->getCountry();
    public function getCountry() : string|null
    {
        return $this->country;
    }

    public function getLang() : string|null
    {
        return $this->lang;
    }

    public function setCountry(string $val) : string
    {
        return $this->country = $val;
    }
    public function setLang(string $val) : string
    {
        return $this->lang = $val;
    }

}