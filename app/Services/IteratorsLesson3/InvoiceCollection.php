<?php

namespace App\Services\IteratorsLesson3;


class InvoiceCollection implements \Iterator
{
    private array $invoices;
    private $position = 0;
    public function __construct(array $invoices)
    {
        $this->invoices = $invoices;
    }

    public function current()
    {
        return $this->invoices[$this->position];
    }

    public function next(): void
    {
        ++$this->position;
    }

    public function key(): mixed
    {
        return $this->position;
    }

    public function valid(): bool
    {
        return isset($this->invoices[$this->position]);
    }

    public function rewind(): void
    {
        $this->position = 0;
    }
}