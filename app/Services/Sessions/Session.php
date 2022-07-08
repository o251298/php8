<?php

namespace App\Services\Sessions;

class Session
{
    private $key;

    public function __construct($key)
    {
        $this->key = $key;
    }

    public function create($val) : void
    {
        $_SESSION[$this->key] = $val;
    }

    public function get() : string|array|int|float|object
    {
        return $_SESSION[$this->key];
    }

    public function check() : bool
    {
        if (isset($_SESSION[$this->key])) return true;
        return false;
    }

    public function delete() :void
    {
        unset($_SESSION[$this->key]);
    }
}