<?php

namespace App\Patterns\AbstractFactory\Interfaces;

interface AbstractFactory
{
    public function createChair() : ChairInterface;
    public function createTable() : TableInterface;
}