<?php


namespace App\Controllers;


class Controller
{
    protected function render(string $view, array $arguments = [])
    {
        if (!$arguments) {
            foreach ($arguments as $key => $value)
            {
                $$key = $value;
            }
        }
        require_once '../views/' . $view . '.php';
    }
}