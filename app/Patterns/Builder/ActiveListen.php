<?php

namespace App\Patterns\Builder;

class ActiveListen extends SQLBuilder
{
    public function __construct()
    {
        return parent::__construct();
    }

    public function toArray(): array
    {
        $sqlString = $this->get();
        $db = \App\Services\DB\DataBase::connect();
        $statement = $db->query($sqlString);
        return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function toJson() : string
    {
        $sqlString = $this->get();
        $db = \App\Services\DB\DataBase::connect();
        $statement = $db->query($sqlString);
        return json_encode($statement->fetchAll(\PDO::FETCH_ASSOC));
    }
}