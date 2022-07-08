<?php

namespace App\Services\Debugger;

use App\Exceptions\FileNotFoundException;
use App\Exceptions\TypeException;

class BasicDebugger
{
    protected static $stack = [];
    protected $f;
    protected $lines = [];
    protected function __construct(protected string $path, protected string $filename)
    {
        $this->open();
    }

    public static function create(string $path, string $filename) : object
    {
        if (isset(static::$stack[$filename])) return static::$stack[$filename];
        return static::$stack[$filename] = new static($path, $filename);
    }

    protected function open()
    {
        if (!is_dir(dirname($this->path))) {
            mkdir(dirname($this->path), 0777, true);
        }
        if (!$this->f = fopen($this->path, 'a+')) {
            throw new FileNotFoundException("Faild open file {$this->path}");
        }
    }

    public function save($data)
    {
        if (!is_string($data)) {throw new TypeException('$data must have string');}
        $this->lines[] = $data . PHP_EOL;
    }

    protected function close()
    {
        fputs($this->f, implode("\n", $this->lines));
        fclose($this->f);
    }

    public function __destruct()
    {
        $this->close();
    }
}