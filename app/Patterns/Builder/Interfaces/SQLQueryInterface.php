<?php

namespace App\Patterns\Builder\Interfaces;

interface SQLQueryInterface
{
    public function select(string $table, array $fields) : SQLQueryInterface;
    public function where(string $field, string $value, string $operator = "=") : SQLQueryInterface;
    public function limit(int $start, int $end) : SQLQueryInterface;
    public function get() : string;
}