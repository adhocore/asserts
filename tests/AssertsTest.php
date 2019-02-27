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
}
