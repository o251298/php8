<?php

namespace App\Services\IteratorsLesson1;

use Traversable;

class Collection implements \IteratorAggregate
{
    private $items = [];
    public function addItem($item)
    {
        return $this->items[] = $item;
    }

    public function getItems()
    {
        return $this->items;
    }
    public function getIterator(): Traversable
    {
        return new ItemIterator($this);
    }

    public function getReversIterator(): Traversable
    {
        return new ItemIterator($this, true);
    }
}