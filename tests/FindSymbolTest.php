<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class FindSymbolTest extends TestCase
{
    public function positiveDataProvider()
    {
        return [
            ['hello', 'heo'],
        ];
    }

    /**
     * @dataProvider positiveDataProvider
     */
    public function testPositive($string, $expected)
    {
        $result = findSymbol($string);
        $this->assertEquals($expected, $result);
    }
}