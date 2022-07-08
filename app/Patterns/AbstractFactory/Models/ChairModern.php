<?php

namespace App\Patterns\AbstractFactory\Models;

use App\Patterns\AbstractFactory\Interfaces\ChairInterface;

class ChairModern implements ChairInterface
{

    public function getInfo(): string
    {
        return __CLASS__;
    }
}