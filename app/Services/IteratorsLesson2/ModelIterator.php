<?php

namespace App\Services\IteratorsLesson2;

class ModelIterator implements \Iterator
{

    private $position = 0;

    public function __construct(private object $source)
    {
    }

    public function rewind(): void
    {
        $this->position = 0;
    }
    public function current(): mixed
    {
        return $this->source->getStack([$this->position]);
    }
    public function next(): void
    {
        $this->position++;
    }
    public function valid(): bool
    {
        return isset($this->source->getStack()[$this->position]);
    }
    public function key(): mixed
    {
        return $this->position;
    }
}