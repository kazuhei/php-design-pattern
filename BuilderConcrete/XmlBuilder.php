<?php

namespace BuilderConcrete;

use Builder\Builder;

class XmlBuilder extends Builder
{
    private $xml;

    public function makeTitle(String $title)
    {
        $this->xml .= "<xml>";
        $this->xml .= "<title>$title</title>";
    }

    public function makeString(String $string)
    {
        $this->xml .= "<string>$string</string>";
    }

    public function makeItems(array $items)
    {
        $this->xml .= "<item>$items</item>";
    }

    public function close()
    {
        $this->xml .= "</xml>";
    }

    /**
     * @return mixed
     */
    public function getXml()
    {
        return $this->xml;
    }
}
