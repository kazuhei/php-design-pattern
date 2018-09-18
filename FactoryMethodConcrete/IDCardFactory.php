<?php

namespace FactoryMethodConcrete;

use FactoryMethod\Factory;
use FactoryMethod\Product;

class IDCardFactory extends Factory
{
    private $owners = [];

    protected function createProduct(string $owner): Product
    {
        return new IDCard($owner);
    }

    protected function registerProduct(Product $product)
    {
        if ($product instanceof IDCard) {
            $this->owners[] = $product->getOwner();
            return ;
        }

        throw new \Exception();
    }

    public function getOwners()
    {
        return $this->owners;
    }
}
