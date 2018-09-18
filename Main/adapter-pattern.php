<?php

namespace Main;


use AdapterConcrete\PrintBanner;

require_once "../vendor/autoload.php";

$printer = new PrintBanner('こんにちは');
$printer->printWeak();
$printer->printStrong();
