<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class isLeapYearTest extends TestCase
{
    public function positiveDataProvider()
    {
        return [
            [2000],
            [2004],
            [2008],
            [2012],
            [2014],
        ];
    }

    /**
     * @param $year
     *
     * @dataProvider positiveDataProvider
     */
    public function testPositive($year)
    {
        $result = isLeapYear($year);
        $this->assertTrue($result);
    }
}