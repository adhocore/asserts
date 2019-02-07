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
    public function assertJsonSubset($expected, $actual, string $message = null)
    {
        $actual   = \json_encode($actual);
        $expected = \json_encode($expected);

        $this->assertContains($expected, $actual, "$message$expected doesnot contain $actual");
    }

    public function assertJsonSubsets($expected, /* more expected ...*/ $actual)
    {
        $expected = \func_get_args();
        $actual   = \array_pop($expected);

        foreach ($expected as $i => $expect) {
            $this->assertJsonSubset($expect, $actual, "Data set #$i: ");
        }
    }
}