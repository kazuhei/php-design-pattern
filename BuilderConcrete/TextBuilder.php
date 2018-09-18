<?php

namespace BuilderConcrete;

use Builder\Builder;

class TextBuilder extends Builder
{
    private $string = "";

    public function makeTitle(String $title)
    {
        $this->string .= "=======================\n";
        $this->string .= "[$title]\n";
        $this->string .= "\n";
    }

    public function makeString(String $string)
    {
        $this->string .= "■$string\n";
        $this->string .= "\n";
    }

    public function makeItems(array $items)
    {
        foreach ($items as $item) {
            $this->string .= "・$item\n";
        }
        $this->string .= "\n";
    }

    public function close()
    {
        $this->string .= "=======================\n";
    }

    public function getResult(): string
    {
        return $this->string;
    }
}
