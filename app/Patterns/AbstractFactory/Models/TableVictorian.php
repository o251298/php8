<?php

namespace App\Patterns\AbstractFactory\Models;

use App\Patterns\AbstractFactory\Interfaces\TableInterface;

class TableVictorian implements TableInterface
{
    public function getInfo(): string
    {
        return __CLASS__;
    }
}