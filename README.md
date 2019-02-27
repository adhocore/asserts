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

class MyTest extends PHPUnit\Framework\Testcase
{
    use Asserts;

    public function testSomething()
    {
        $this->assertJsonSubset($expectedSubset, $actualJson);

        $this->assertJsonSubsets($expectedSubset1, $expectedSubset2, ... , $actualJson);
    }
}
```

## Contributing

Please check [the guide](./CONTRIBUTING.md)

## LICENSE

> &copy; [MIT](./LICENSE) | 2019, Jitendra Adhikari
