<?php

namespace App\Services\HomeWork\IteratorLessons;

use JetBrains\PhpStorm\Internal\TentativeType;

class MyRecurciveIterator implements \Iterator
{
    protected array $data;
    private $position;

    public function __construct(array $data)
    {
        $this->data = $data;
    }


    public function current()
    {
        return $this->data[$this->position];
    }

    public function next(): void
    {
        $this->position = $this->position - 1;
    }

    public function key(): mixed
    {
        return $this->position;
    }

    public function valid(): bool
    {
        return isset($this->data[$this->position]);
    }

    public function rewind(): void
    {
        $this->position = count($this->data) - 1;
    }
}