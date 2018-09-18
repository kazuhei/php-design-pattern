<?php

namespace FactoryMethodConcrete;

use FactoryMethod\Product;

class IDCard extends Product
{
    private $owner;

    public function __construct(string $owner)
    {
        echo $owner . "のカードを作ります。";
        $this->owner = $owner;
    }

    public function take()
    {
        echo $this->owner . "のカードを使います。";
    }

    public function getOwner(): string
    {
        return $this->owner;
    }
}
