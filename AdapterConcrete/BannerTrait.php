<?php

namespace AdapterConcrete;

trait BannerTrait
{
    public function showWithParan()
    {
        echo "(" . $this->string . ")";
    }

    public function showWithAster()
    {
        echo "*" . $this->string . "*";
    }
}
