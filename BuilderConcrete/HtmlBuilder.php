<?php

namespace BuilderConcrete;

use Builder\Builder;

class HtmlBuilder extends Builder
{
    private $filename = "";
    private $writer;

    public function makeTitle(String $title)
    {
        $this->filename = $title . ".html";
        $this->writer = fopen($this->filename, "w");

        fwrite($this->writer, "<html><head><title>$title</title></head><body>");
        fwrite($this->writer, "<h1>$title</h1>");
    }

    public function makeString(String $string)
    {
        fwrite($this->writer, "<p>$string</p>");
    }

    public function makeItems(array $items)
    {
        fwrite($this->writer, "<ul>");
        foreach ($items as $item) {
            fwrite($this->writer, "<li>$item</li>");
        }
        fwrite($this->writer, "</ul>");
    }

    public function close()
    {
        fwrite($this->writer, "</body></html>");
        fclose($this->writer);
    }

    public function getResult(): string
    {
        return $this->filename;
    }
}
