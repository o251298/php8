<?php

namespace App\Services\IteratorsLesson2\FilterIterator;

use Iterator;
use JetBrains\PhpStorm\Internal\TentativeType;

class FilterCollection extends \FilterIterator
{
    protected $expected;
    protected $iterator;
    public function __construct(Iterator $iterator, $expected)
    {
        parent::__construct($iterator);
        $this->expected = $expected;
        $this->iterator = $iterator;
    }

    public function accept(): bool
    {

        if (in_array($this->expected, $this->current())) return true;
        return false;
    }
}