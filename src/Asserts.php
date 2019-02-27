<?php

/*
 * This file is part of the ASSERTS package.
 *
 * (c) Jitendra Adhikari <jiten.adhikary@gmail.com>
 *     <https://github.com/adhocore>
 *
 * Licensed under MIT license.
 */

namespace Ahc\Asserts;

trait Asserts
{
    const DEFAULT_PRECISION = 6;

    public function assertJsonSubset($expected, $actual, string $message = null)
    {
        $actual   = \json_encode($actual);
        $expected = \json_encode($expected);
        $expected = \trim($expected, '{}');

        $this->assertContains($expected, $actual, "$message$actual doesnot contain $expected");
    }

    public function assertJsonSubsets($expected, /* more expected ...*/ $actual)
    {
        $expected = \func_get_args();
        $actual   = \array_pop($expected);

        foreach ($expected as $i => $expect) {
            $this->assertJsonSubset($expect, $actual, "Data set #$i: ");
        }
    }

    public function assertFloatEquals(float $expected, float $actual, int $precision = null, string $message = null)
    {
        $precision = $precision ?? static::DEFAULT_PRECISION;

        if (\function_exists('bccomp')) {
            $this->assertSame(0, \bccomp($expected, $actual, $precision), $message);

            return;
        }

        $expected  = \round($expected, $precision);
        $actual    = \round($actual, $precision);

        $this->assertEquals($expected, $actual, $message, \pow(10, 0 - \abs($precision)));
    }

    public function assertArrayHasKeys(array $expectedKeys, array $actualArray, string $message = null)
    {
        foreach ($expectedKeys as $key) {
            $this->assertArrayHasKey($key, $actualArray, $message);
        }
    }
}
