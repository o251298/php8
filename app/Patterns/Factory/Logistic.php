<?php

namespace App\Patterns\Factory;

use App\Patterns\Factory\Interfaces\Transport;

abstract class Logistic
{
    abstract public function createTransport() : Transport;
}