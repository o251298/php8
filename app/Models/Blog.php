<?php

namespace App\Models;

use App\Patterns\Builder\QueryBuilder\MySqlBuilder;

class Blog
{
    protected static $table = 'users';
    protected static $fields = ['email', 'username'];

    public static function query() : MySqlBuilder
    {
        return (new MySqlBuilder(self::$table, self::$fields));
    }
}