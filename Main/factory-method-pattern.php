<?php

namespace Main;

use FactoryMethodConcrete\IDCardFactory;

require_once "../vendor/autoload.php";

$factory = new IDCardFactory();
$product1 = $factory->create('結城浩');
$product2 = $factory->create('あらい');
$product3 = $factory->create('すずき');

$product1->take();
$product2->take();
$product3->take();
