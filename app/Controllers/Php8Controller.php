<?php


namespace App\Controllers;


use App\Services\Php\Php_8_0;

class Php8Controller
{
    public function index()
    {
        echo "<pre>";
        var_dump(Php_8_0::getArguments(arg3:'agr3', arg2:'agr2', arg1:'agr1'));
        echo "</pre>";
    }
}