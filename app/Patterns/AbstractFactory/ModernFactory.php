<?php

namespace App\Patterns\AbstractFactory;

use App\Patterns\AbstractFactory\Interfaces\AbstractFactory;
use App\Patterns\AbstractFactory\Interfaces\ChairInterface;
use App\Patterns\AbstractFactory\Interfaces\TableInterface;
use App\Patterns\AbstractFactory\Models\ChairModern;
use App\Patterns\AbstractFactory\Models\TableModern;

class ModernFactory implements AbstractFactory
{

    public function createChair(): ChairInterface
    {
        return new ChairModern();
    }

    public function createTable(): TableInterface
    {
        return new TableModern();
    }
}