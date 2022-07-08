<?php

namespace App\Patterns\HomeWork\Factory;

class ConcrectClassX extends Creator
{

    public function createModel() : Model
    {
       return new ModelX();
    }
}