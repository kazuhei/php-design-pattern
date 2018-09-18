<?php

namespace Main;

use IteratorPatternConcrete\Book;
use IteratorPatternConcrete\BookShelf;

require_once "../vendor/autoload.php";

$bookShelf = new BookShelf([
    new Book('A.インフラの教科書'),
    new Book('B.プリンシプルオブプログラミング'),
    new Book('C.ネットワークはなぜつながるのか'),
    new Book('D.デザインパターン入門')
]);

$iterator = $bookShelf->iterator();

while ($iterator->hasNext()) {
    $book =  $iterator->next();
    echo $book->getName() . "\n";
}
