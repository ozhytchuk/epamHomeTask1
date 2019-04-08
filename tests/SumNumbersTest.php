<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class sumNumbersTest extends TestCase
{
    public function positiveDataProvider()
    {
        return [
            ['385934'],
            ['133421'],
            ['137452'],
        ];
    }

    /**
     * @param $num
     *
     * @dataProvider positiveDataProvider
     */
    public function testPositive($num)
    {
        $result = sumNumbers($num);
        $this->assertTrue($result);
    }
}