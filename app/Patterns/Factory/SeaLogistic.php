<?php

namespace App\Patterns\Factory;
use App\Patterns\Factory\Interfaces\Transport;
use App\Patterns\Factory\Models\Ship;


class SeaLogistic extends Logistic
{

    public function createTransport(): Transport
    {
        return new Ship();
    }
}