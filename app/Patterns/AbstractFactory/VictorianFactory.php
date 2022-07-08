<?php

namespace App\Patterns\AbstractFactory;

use App\Patterns\AbstractFactory\Interfaces\AbstractFactory;
use App\Patterns\AbstractFactory\Interfaces\ChairInterface;
use App\Patterns\AbstractFactory\Interfaces\TableInterface;
use App\Patterns\AbstractFactory\Models\ChairVictorian;
use App\Patterns\AbstractFactory\Models\TableVictorian;

class VictorianFactory implements AbstractFactory
{

    public function createChair(): ChairInterface
    {
        return new ChairVictorian();
    }

    public function createTable(): TableInterface
    {
        return new TableVictorian();
    }
}