<?php

namespace App\Services\Iterators;

class FLDirectoryIterator implements \Iterator
{
    private $source;
    private $d = null;
    private $cur = false;
    public function __construct($source)
    {
        $this->source = $source;
        $this->d = opendir($source->path);
        $this->rewind();
    }

    public function current(): mixed
    {
        $path = $this->source->path . '/' . $this->cur;
        return is_dir($path) ? new FileSystemDirectory($path) : new FileSystemFile($path);
    }
    public function key(): mixed
    {
        return $this->cur;
    }
    public function next(): void
    {
        $this->cur = readdir($this->d);
    }
    public function valid(): bool
    {
        return $this->cur !== false;
    }
    public function rewind(): void
    {
        rewinddir($this->d);
        $this->cur = readdir($this->d);
    }

}