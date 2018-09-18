<?php

namespace Builder;

abstract class Builder
{
    public abstract function makeTitle(String $title);

    public abstract function makeString(String $string);

    public abstract function makeItems(array $items);

    public abstract function close();
}
