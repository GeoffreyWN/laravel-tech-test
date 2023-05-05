<?php

namespace App\Services;

class MinDifference
{
    public static function compute($array)
    {
        [,$minDiff] = array_reduce($array, function ($carry, $item) use ($array) {
            [$index, $previousMin] = $carry;

            $right = array_sum(array_splice($array, $index));
            $left = array_sum(array_splice($array, 0, $index));

            $diff = abs($left - $right);

            return [++$index, min($diff,$previousMin)];
        }, [1, INF]);

        return $minDiff;
    }
}