<?php

namespace App\Services\DB;

class EasyRecord
{
    protected static $tableName;
    protected static $fields = [];
    protected $data;

    public static function connect()
    {
        return DataBase::connect();
    }
    public static function create(array $data) : ?array
    {

        if (empty($data)) return null;
        return $data;
    }

    public static function find(int $id) : null|array|self
    {
        $table = static::$tableName;
        $sql = "SELECT * FROM {$table} WHERE id = {$id}";
        return self::connect()->query($sql)->fetch(\PDO::FETCH_ASSOC);
    }

    public static function all($order = "DESC") : null|array|self|\App\Services\Collections\Collection
    {
        $table = static::$tableName;
        $sql = "SELECT * FROM {$table}";
        return self::connect()->query($sql)->fetchAll(\PDO::FETCH_ASSOC);
    }



}