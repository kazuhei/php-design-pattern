<?php

namespace FactoryMethod;

abstract class Factory
{
    public final function create(string $owner): Product
    {
        $p = $this->createProduct($owner);
        $this->registerProduct($p);
        return $p;
    }

    protected abstract function createProduct(string $owner): Product;

    protected abstract function registerProduct(Product $product);
}
