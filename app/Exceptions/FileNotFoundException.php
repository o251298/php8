<?php

namespace App\Exceptions;

use App\Exceptions\Interfaces\IFilesystemException;

class FileNotFoundException extends FilesystemException implements IFilesystemException
{
    const NAME = __CLASS__;

}