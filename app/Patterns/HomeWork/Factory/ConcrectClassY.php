<?php

namespace App\Patterns\HomeWork\Factory;

class ConcrectClassY extends Creator
{

    public function createModel() : Model
    {
        return new ModelY();
    }
}