<?php

namespace BuilderConcrete;

use Builder\Builder;

class RecipeDirector
{
    private $builder;

    public function __construct(Builder $builder)
    {
        $this->builder = $builder;
    }

    public function build()
    {
        $this->builder->makeTitle("レシピ");
        $this->builder->makeString("材料");
        $this->builder->makeItems([
            "じゃがいも",
            "人参",
        ]);
        $this->builder->close();
    }
}
