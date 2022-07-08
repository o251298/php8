<?php

namespace App\Patterns\Factory\Models;

use App\Patterns\Factory\Interfaces\Transport;

class Ship implements Transport
{

    public function delivery() : string
    {
        return "i delivery by sea";
    }
}