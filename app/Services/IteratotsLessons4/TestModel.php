<?php

namespace App\Services\IteratotsLessons4;

class TestModel
{
    public function __construct(public string $name, public string $age, public int $id)
    {
    }

    public function test(){
        return $this->name;
    }
}