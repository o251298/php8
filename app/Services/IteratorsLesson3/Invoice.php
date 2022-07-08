<?php

namespace App\Services\IteratorsLesson3;

class Invoice
{
    public string $id;
    public float $amount;

    public function __construct($amount)
    {
        $this->id = random_int(1, 99999);
        $this->amount = $amount;
    }
}