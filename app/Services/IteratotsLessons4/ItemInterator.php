<?php

namespace App\Services\IteratotsLessons4;

use JetBrains\PhpStorm\Internal\TentativeType;

class ItemInterator implements \Iterator
{
    private $position;
    public function __construct(public Collection $collection)
    {
        $this->position = 0;
    }

    public function current(): mixed
    {
        return $this->collection->getItems()[$this->key()];
    }

    public function next(): void
    {
        $this->position++;
    }

    public function key(): mixed
    {
        return $this->position;
    }

    public function valid(): bool
    {
        return isset($this->collection->getItems()[$this->position]);
    }

    public function rewind(): void
    {
        $this->position = 0;
    }
}