<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class ConcatenationTest extends TestCase
{
    public function positiveDataProvider()
    {
        return [
          ['Hello', 'World', 'Hello world'],
        ];
    }

    /**
     * @dataProvider positiveDataProvider
     */
    public function testPositive($firstString, $secondString, $expected)
    {
        $result = concatenation($firstString, $secondString);
        $this->assertEquals($expected, $result);
    }
}