<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class GetHourQuarterTest extends TestCase
{
    public function positiveDataProvider()
    {
        return [
            [1, 'First'],
            [16, 'Second'],
            [35, 'Third'],
            [51, 'Fourth'],
            [-10, 'Enter a number from 0 to 59'],
        ];
    }

    /**
     * @param $num
     * @param $expected
     *
     * @dataProvider positiveDataProvider
     */
    public function testPositive($num, $expected)
    {
        $result = getHourQuarter($num);
        $this->assertEquals($expected, $result);
    }
}