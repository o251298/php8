<?php

namespace App\Patterns\Factory\Models;

use App\Patterns\Factory\Interfaces\Transport;

class Air implements Transport
{

    public function delivery() : string
    {
        return "I delivery by air";
    }
}