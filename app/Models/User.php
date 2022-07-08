<?php

namespace App\Models;
use App\Services\DB\ActiveRecord;


class User extends ActiveRecord
{
    protected static $tableName = "avto";
    protected static $fields = ['id', 'nusmber', 'region', 'mark'];

    public function strUp()
    {
        return strtoupper($this->mark);
    }

}