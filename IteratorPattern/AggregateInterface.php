<?php

namespace IteratorPattern;

interface AggregateInterface
{
    public function iterator(): IteratorInterface;
}
