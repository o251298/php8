<?php

namespace App\Exceptions;

use App\Exceptions\Interfaces\IFilesystemException;

class FilesystemException extends \Exception implements IFilesystemException
{
    const NAME = __CLASS__;

    public function getName()
    {
        return static::NAME;
    }
}