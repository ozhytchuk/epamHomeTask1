<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class BonusTaskTest extends TestCase
{
    public function positiveDataProvider()
    {
        return [
            ['AD', 'BC'],
            ['gf', 'FG'],
            ['zz1', ''],
            ['ZzZz', 'ffPFF'],
            [null, ''],
        ];
    }

    /**
     * @dataProvider positiveDataProvider
     */
    public function testPositive($firstString, $secondString)
    {
        $result = asciiCode($firstString, $secondString);
        $this->assertTrue($result);
    }
}