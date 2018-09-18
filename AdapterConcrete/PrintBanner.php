<?php

namespace AdapterConcrete;

use Adapter\PrintInterface;

class PrintBanner implements PrintInterface
{
    private $string;

    use BannerTrait;

    public function __construct(String $string)
    {
        $this->string = $string;
    }

    public function printWeak()
    {
        $this->showWithAster();
    }

    public function printStrong()
    {
        $this->showWithParan();
    }
}
