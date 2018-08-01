<?php

namespace IteratorPatternConcrete;

use IteratorPattern\IteratorInterface;

class BookShelfIterator implements IteratorInterface
{
    private $bookShelf;
    private $index = 0;

    public function __construct(BookShelf $bookShelf)
    {
        $this->bookShelf = $bookShelf;
    }

    public function hasNext(): bool
    {
        return $this->index < $this->bookShelf->length();
    }

    public function next()
    {
        $book = $this->bookShelf->getBookAt($this->index);
        $this->index++;

        return $book;
    }
}
