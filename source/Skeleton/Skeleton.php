<?php

namespace Skeleton;

class Skeleton
{
    public function useAnotherClass(Head $head)
    {
        return $head->howManyEyes();
    }

    public function getClass()
    {
        return (string) $this;
    }

    public function __toString()
    {
        return __CLASS__;
    }

    public function countArray()
    {
        return count(array(1, 2, 3, 4));
    }

    public function conditional($isExpired, $countInProgress, $countToCome)
    {
        return !(($isExpired && 0 <= ($countInProgress + $countToCome))
                || (0 <= ($countInProgress + $countToCome) - 1));
    }

    public function implodeArray($array)
    {
        if (!is_array($array)) {
            throw new \Exception('Must be an array');
        }

        return implode(',', $array);
    }
}
