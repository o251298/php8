<?php

namespace App\Services\DB;
use PDOException;

class DataBase
{
    private static string $dsn = "mysql:host=db;dbname=php_8";
    protected object $resource;

    public function __construct(object $db)
    {
        $this->resource = $db;
    }

    public static function connect() : \PDO | null
    {
        try {
            $db = new \PDO(static::$dsn, 'root', 'o251298');
            return $db;
        } catch (PDOException $exception){
            echo $exception->getMessage();
            return null;
        }
    }
}