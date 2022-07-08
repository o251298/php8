<?php

namespace App\Patterns\Builder;

use App\Patterns\Builder\Interfaces\SQLQueryInterface;

class UserModel
{
    public static function query() : SQLQueryInterface
    {
        return (new ActiveListen());
    }
}