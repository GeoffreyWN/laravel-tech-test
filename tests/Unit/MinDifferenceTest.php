<?php

namespace Tests\Unit;

use App\Services\MinDifference;
use PHPUnit\Framework\TestCase;

class MinDifferenceTest extends TestCase
{
    /**
     * test
     * @dataProvider provider
     */
    public function test_min_difference_class($arr, $diff): void
    {
        $this->assertEquals($diff, MinDifference::compute($arr));
    }

    public function provider()
    {
        return [
            [[3, 1, 2, 4, 3], 1],
            [[3, 1, 1, 1], 0],
            [[2, 1, 1], 0]
        ];
    }
}
