<?php

namespace App\Services\HomeWork\IteratorLessons;

use Exception;
use JetBrains\PhpStorm\Internal\TentativeType;
use Traversable;

class Collection implements \IteratorAggregate
{
    private array $data;
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function getIterator(): Traversable
    {
        return new \ArrayIterator($this->data);
    }

    public function getRecursiveIterator()
    {
        return new MyRecurciveIterator($this->data);
    }
}