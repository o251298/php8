<?php

namespace App\Services\Iterators;

use Traversable;
use App\Services\Iterators\FLDirectoryIterator;

class FileSystemDirectory implements \IteratorAggregate
{
    public $path;

    public function __construct($path)
    {
        $this->path = $path;
    }

    public function getIterator(): Traversable
    {
        return new FLDirectoryIterator($this);
    }
}