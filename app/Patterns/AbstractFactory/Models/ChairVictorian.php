<?php

namespace App\Patterns\AbstractFactory\Models;

use App\Patterns\AbstractFactory\Interfaces\ChairInterface;

class ChairVictorian implements ChairInterface
{
    public function getInfo(): string
    {
        return __CLASS__;
    }
}