## adhocore/asserts

[![Latest Version](https://img.shields.io/github/release/adhocore/asserts.svg?style=flat-square)](https://github.com/adhocore/asserts/releases)
[![Travis Build](https://img.shields.io/travis/com/adhocore/asserts.svg?branch=master&style=flat-square)](https://travis-ci.com/adhocore/asserts?branch=master)
[![Scrutinizer CI](https://img.shields.io/scrutinizer/g/adhocore/asserts.svg?style=flat-square)](https://scrutinizer-ci.com/g/adhocore/asserts/?branch=master)
[![Codecov branch](https://img.shields.io/codecov/c/github/adhocore/asserts/master.svg?style=flat-square)](https://codecov.io/gh/adhocore/asserts)
[![StyleCI](https://styleci.io/repos/169276368/shield)](https://styleci.io/repos/169276368)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](./LICENSE)


## Installation
```bash
composer require --dev adhocore/asserts
```

## Usage
```php
use Ahc\Asserts\Asserts;
use PHPUnit\Framework\TestCase;

class MyTest extends Testcase
{
    use Asserts;

    public function testSomething()
    {
        $this->assertJsonSubset($expectedSubset, $actualJson);

        $this->assertJsonSubsets($expectedSubset1, $expectedSubset2, ... , $actualJson);

        $this->assertFloatEquals($expected = 1.66666666, $actual = 1.666666689, $precision = 4);

        $this->assertArrayHasKeys($expected = ['a', 'b'], $actual = ['a' => 1, 'b' => 2]);

        $this->assertIsAssocArray(['key' => 'value']);

        $this->assertIsNotAssocArray([1, 2, 3, 4, 5]);

        $this->assertFileIsExecutable('/bin/sh');

        $this->assertFileIsNotExecutable('/bin/not-found');

        $this->assertAll(
            $expectations = [
                'equals' => 1,
                'lessThan' => 10,
                'greaterThan' => 0,
            ],
            $actual = 1,
            $messages = [
                'greaterThan' => 'Should be postitive number',
            ]
        );
    }
}
```

## Contributing

Please check [the guide](./CONTRIBUTING.md)

## LICENSE

> &copy; [MIT](./LICENSE) | 2019, Jitendra Adhikari
