<?php

namespace App\Patterns\DependencyInjection;

class Model2DependInj implements DependInj
{

    public function getInfo()
    {
        return "hello world";
    }
}