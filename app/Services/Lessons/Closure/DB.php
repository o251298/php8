<?php

namespace App\Services\Lessons\Closure;

class DB
{
    protected array $tables = [];
    protected string $table;
    protected array $fields;

    public function select(string $table, callable $callback)
    {
        $this->tables[$table] = $callback->bindTo($this, __CLASS__);
    }

    public function selectResult(string $table)
    {
        $this->tables[$table]();
        $fields = implode(' ,', $this->fields);
        $sql = "SELECT {$fields} FROM $this->table";
        echo $sql;
    }
}