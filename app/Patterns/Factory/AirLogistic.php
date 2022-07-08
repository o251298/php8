<?php

namespace App\Patterns\Factory;
use App\Patterns\Factory\Interfaces\Transport;
use App\Patterns\Factory\Models\Air;

class AirLogistic extends Logistic
{

    public function createTransport(): Transport
    {
        return new Air();
    }
}