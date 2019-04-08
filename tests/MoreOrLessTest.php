<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class moreOrLessTest extends TestCase
{
    public function positiveDataProvider()
    {
        return [
            [1],
            [2],
            [3],
            [4],
        ];
    }

    /**
     * @param $num
     *
     * @dataProvider positiveDataProvider
     */
    public function testPositive($num)
    {
        $result = moreOrLess($num);
        $this->assertTrue($result);
    }
}