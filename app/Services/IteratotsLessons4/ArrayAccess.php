<?php

namespace App\Services\IteratotsLessons4;

use JetBrains\PhpStorm\Internal\LanguageLevelTypeAware;
use JetBrains\PhpStorm\Internal\TentativeType;

class ArrayAccess implements \ArrayAccess
{
    public $stack = [];


    public function offsetExists(mixed $offset): bool
    {
        return isset($this->$stack[$offset]);
    }

    public function offsetGet(mixed $offset): mixed
    {
        return $this->stack[$offset];
    }

    public function offsetSet(mixed $offset, mixed $value): void
    {
        $this->stack[$offset] = $value;
    }

    public function offsetUnset(mixed $offset): void
    {
        $this->stack[$offset];
    }
}