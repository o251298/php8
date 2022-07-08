<?php

namespace App\Services\IteratorsLesson2;



class RModelCollection implements \Iterator
{
    private array $data;
    private bool $recursive;
    private int $position;
    public function __construct(array $data, bool $recursive = false)
    {
        $this->data = $data;
        $this->recursive = $recursive;
    }

    public function current()
    {
        return $this->data[$this->position];
    }

    public function next(): void
    {
        $this->position = $this->position + ($this->recursive ? - 1 : 1);
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
        $this->position = $this->recursive ? count($this->data) - 1 : 0;
    }
}