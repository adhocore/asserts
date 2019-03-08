<?php

/*
 * This file is part of the ASSERTS package.
 *
 * (c) Jitendra Adhikari <jiten.adhikary@gmail.com>
 *     <https://github.com/adhocore>
 *
 * Licensed under MIT license.
 */

namespace Ahc\Asserts\Test;

use Ahc\Asserts\Asserts;
use PHPUnit\Framework\TestCase;

class AssertsTest extends TestCase
{
    use Asserts;

    public function testAssertJsonSubset()
    {
        $expected = [
            'key1' => 'value1',
        ];

        $actual = [
            'key1' => 'value1',
            'key2' => 'value2',
        ];

        $this->assertJsonSubset($expected, $actual);
    }

    public function testAssertJsonSubsets()
    {
        $expected = [
            'key1' => 'value1',
        ];

        $expected2 = [
            'key2' => 'value2',
        ];

        $actual = [
            'key1' => 'value1',
            'key2' => 'value2',
        ];

        $this->assertJsonSubsets($expected, $expected2, $actual);
    }

    public function testAssertFloatEquals()
    {
        $expected = 5.6;

        $actual = 2.8 + 2.8;

        $this->assertFloatEquals($expected, $actual);
    }

    public function testAssertArrayHasKeys()
    {
        $expectedKeys = ['key1', 'key2'];

        $array = [
            'key1' => 'value1',
            'key2' => 'value2',
        ];

        $this->assertArrayHasKeys($expectedKeys, $array);
    }

    public function testAssertAll()
    {
        $expectations = [
            'equals'      => 1,
            'lessThan'    => 10,
            'greaterThan' => 0,
        ];

        $actual = 1;

        $this->assertAll($expectations, $actual);
    }
}
