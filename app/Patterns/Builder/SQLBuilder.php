<?php

namespace App\Patterns\Builder;

use App\Patterns\Builder\Interfaces\SQLQueryInterface;

class SQLBuilder implements SQLQueryInterface
{

    protected SQLModel $query;
    public function __construct()
    {
        $this->reset();
    }

    protected function reset()
    {
        $this->query = new SQLModel();
    }

    public function select(string $table, array $fields): SQLQueryInterface
    {
        $this->reset();
        $this->query->type = "select";
        $this->query->base = "SELECT " . implode(', ', $fields) . " FROM {$table} ";
        return $this;
    }

    public function where(string $field, string $value, string $operator = "="): SQLQueryInterface
    {
        if (!in_array($this->query->type, ["select", "update", "delete"])) throw new \Exception("WHERE доступен долько в SELECT, UPDATE, DELETE");
        $this->query->where[] = "WHERE $field $operator '$value' ";
        return $this;
    }

    public function limit(int $start, int $end): SQLQueryInterface
    {
        if (!in_array($this->query->type, ["select"])) throw new \Exception("LIMIT должен быть только в SELECT");
        $this->query->limit = "LIMIT $start, $end";
        return $this;
    }

    public function get() : string
    {
        $sql = $this->query->base;
        if (!empty($this->query->where)) $sql .= implode(' AND ', $this->query->where);
        if (!empty($this->query->limit)) $sql .= $this->query->limit;
        $sql .= ';';
        return $sql;
    }
}