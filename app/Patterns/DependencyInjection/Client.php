<?php

namespace App\Patterns\DependencyInjection;

class Client
{
    public function __construct(public DependInj $source)
    {
    }
    public function getInfo()
    {
        return $this->source->getInfo();
    }
}