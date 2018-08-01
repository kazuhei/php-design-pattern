<?php

namespace IteratorPatternConcrete;

use IteratorPattern\AggregateInterface;
use IteratorPattern\IteratorInterface;

class BookShelf implements AggregateInterface
{
    private $books;

    public function __construct(array $books)
    {
        $this->books = $books;
    }

    public function iterator(): IteratorInterface
    {
        return new BookShelfIterator($this);
    }

    public function getBookAt(int $index): Book
    {
        return $this->books[$index];
    }

    public function length(): int
    {
        return count($this->books);
    }
}
