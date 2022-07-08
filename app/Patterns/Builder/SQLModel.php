<?php

namespace App\Patterns\Builder;

class SQLModel
{
    public string $type;
    public string $base;
    public array $where;
    public string $limit;
}