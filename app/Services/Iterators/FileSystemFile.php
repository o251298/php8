<?php

namespace App\Services\Iterators;

class FileSystemFile
{
    public $path;
    public function __construct($path)
    {
        $this->path = $path;
    }

    public function getSize()
    {
        return filesize($this->path);
    }
}