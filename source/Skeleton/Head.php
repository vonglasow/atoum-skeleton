<?php

namespace Skeleton;

class Head
{
    public function howManyEyes()
    {
        return rand(1, 10);
    }

    public function fluent() : self
    {
        return $this;
    }
}
