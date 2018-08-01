<?php

namespace Main;

use IteratorPatternConcrete\Book;
use IteratorPatternConcrete\BookShelf;

require_once "vendor/autoload.php";

$bookShelf = new BookShelf([
    new Book('インフラの教科書'),
    new Book('プリンシプルオブプログラミング'),
    new Book('ネットワークはなぜつながるのか')
]);

$iterator = $bookShelf->iterator();

while ($iterator->hasNext()) {
    $book =  $iterator->next();
    echo $book->getName() . "\n";
}
