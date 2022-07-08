<?php

namespace App\Services\Collections;

use Exception;
use JetBrains\PhpStorm\Internal\TentativeType;
use Traversable;

class Collection implements \IteratorAggregate
{
    protected $data;
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function getIterator(): Traversable
    {
        return new \ArrayIterator($this->data);
    }

    public function get(): Traversable
    {
        return new \ArrayIterator($this->data);
    }
}