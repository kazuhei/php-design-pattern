<?php

namespace Main;

use BuilderConcrete\Director;
use BuilderConcrete\HtmlBuilder;
use BuilderConcrete\TextBuilder;
use BuilderConcrete\XmlBuilder;

require_once "../vendor/autoload.php";

if (count($argv) !== 2) {
    echo "ビルダーの種類を指定してください。";
    echo "php builder-pattern.php ビルダーの種類";
    exit();
}

if ($argv[1] === "plain") {
    $textBuilder = new TextBuilder();
    $director = new Director($textBuilder);
    $director->build();
    echo $textBuilder->getResult();
} elseif ($argv[1] === "html") {
    $htmlBuilder = new HtmlBuilder();
    $director = new Director($htmlBuilder);
    $director->build();
    echo $htmlBuilder->getResult() . "が作成されました。";
} elseif ($argv[1] === "xml") {
    $xmlBuilder = new XmlBuilder();
    $director = new Director($xmlBuilder);
    $director->build();
    echo $xmlBuilder->getXml();
} else {
    exit();
}

