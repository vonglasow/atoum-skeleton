<?php

namespace Skeleton;

class Skeleton
{
    public function addABrain(Brain $brain)
    {
        return $brain->howManyEyes();
    }

    public function useAnotherClass(Head $head)
    {
        return $head->howManyEyes();
    }
}
