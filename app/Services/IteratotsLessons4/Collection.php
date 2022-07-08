<?php

namespace App\Services\IteratotsLessons4;
use Traversable;

class Collection implements \IteratorAggregate
{

    public function __construct(private array $items = [])
    {
    }

    public function getItems() : array
    {
        return $this->items;
    }
    public function setItems($val) : void
    {
        $this->getItems($val);
    }

    public function getIterator(): Traversable
    {
        return new ItemInterator($this);
    }
}