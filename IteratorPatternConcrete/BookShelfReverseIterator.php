<?php

namespace IteratorPatternConcrete;

use IteratorPattern\IteratorInterface;

class BookShelfReverseIterator implements IteratorInterface
{
    private $bookShelf;
    private $index;

    public function __construct(BookShelf $bookShelf)
    {
        $this->bookShelf = $bookShelf;
        $this->index = $bookShelf->length() - 1;
    }

    public function hasNext(): bool
    {
        return $this->index >= 0;
    }

    public function next()
    {
        $book = $this->bookShelf->getBookAt($this->index);
        $this->index--;

        return $book;
    }
}
