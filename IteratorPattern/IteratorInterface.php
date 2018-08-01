<?php

namespace IteratorPattern;

interface IteratorInterface
{
    public function hasNext(): bool;

    public function next();
}
