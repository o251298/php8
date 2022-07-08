<?php

namespace App\Services\Directory;

use App\Exceptions\FilesystemException;

class MyDirectory
{
    protected $handle;
    protected $files = [];

    public function __construct(protected string $path)
    {
        $this->handle = dir($this->path);
        if ($this->handle == null) {throw new FilesystemException("Directory not found");};
    }

    public function __destruct()
    {
        $this->close();
    }

    public function read()
    {
        while ($file = $this->handle->read())
        {
            if (file_exists($this->path . "/" . $file))
            {
                $this->files[] = $file;
            }
        }
    }

    protected function close()
    {
        return $this->handle->close();
    }

    public function getFiles() : array
    {
        return $this->files;
    }


}