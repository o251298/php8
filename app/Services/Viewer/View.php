<?php

namespace App\Services\Viewer;

class View
{
    protected $title = "Заголовок";
    protected $content = "Содержание страницы";
    /**
     * @var array $pages
     * this array is callable
     */
    protected $pages = [];

    public function addPage(string $page, callable $callback)
    {
        $this->pages[$page] = $callback->bindTo($this, __CLASS__);
    }

    public function render($page)
    {
        $this->pages[$page]();
        $html = <<<HTML
$this->title
$this->content
HTML;
        echo $html;
    }
}