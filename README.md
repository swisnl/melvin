# NDW Melvin API client

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Buy us a tree][ico-treeware]][link-treeware]
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]
[![Made by SWIS][ico-swis]][link-swis]

This is a (slightly opinionated) client for the [Melvin](https://melvin.ndw.nu) API by NDW. Please note that the Melvin API requires authentication, and we can't provide you with credentials.

## Install

Via Composer

``` bash
$ composer require swisnl/melvin
```

N.B. Make sure you have installed a PSR-18 HTTP Client and PSR-17 HTTP Factories before you install this package or install one at the same time e.g. `composer require swisnl/json-api-client guzzlehttp/guzzle:^7.3`.

### HTTP Client

We are decoupled from any HTTP messaging client with the help of [PSR-18 HTTP Client](https://www.php-fig.org/psr/psr-18/) and [PSR-17 HTTP Factories](https://www.php-fig.org/psr/psr-17/).
This requires an extra package providing [psr/http-client-implementation](https://packagist.org/providers/psr/http-client-implementation) and [psr/http-factory-implementation](https://packagist.org/providers/psr/http-factory-implementation).
To use Guzzle 7, for example, simply require `guzzlehttp/guzzle`:

``` bash
composer require guzzlehttp/guzzle:^7.3
```

## Usage

``` php
use Swis\Melvin\Client;
use Swis\Melvin\SituationFilterParameters;

$client = Client::create('username', 'password');
$params = (new SituationFilterParameters())->setAreaIds([409]);

$situations = $client->situations()->export($params);

foreach ($situations as $situation) {
  // Do stuff with the situation
}
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email security@swis.nl instead of using the issue tracker.

## Credits

- [Jasper Zonneveld][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

This package is [Treeware](https://treeware.earth). If you use it in production, then we ask that you [**buy the world a tree**][link-treeware] to thank us for our work. By contributing to the Treeware forest you’ll be creating employment for local families and restoring wildlife habitats.

## SWIS :heart: Open Source

[SWIS][link-swis] is a web agency from Leiden, the Netherlands. We love working with open source software. 

[ico-version]: https://img.shields.io/packagist/v/swisnl/melvin.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-treeware]: https://img.shields.io/badge/Treeware-%F0%9F%8C%B3-lightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/com/swisnl/melvin/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/swisnl/melvin.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/swisnl/melvin.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/swisnl/melvin.svg?style=flat-square
[ico-swis]: https://img.shields.io/badge/%F0%9F%9A%80-made%20by%20SWIS-%23D9021B.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/swisnl/melvin
[link-travis]: https://travis-ci.com/github/swisnl/melvin
[link-scrutinizer]: https://scrutinizer-ci.com/g/swisnl/melvin/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/swisnl/melvin
[link-downloads]: https://packagist.org/packages/swisnl/melvin
[link-treeware]: https://plant.treeware.earth/swisnl/melvin
[link-author]: https://github.com/swisnl
[link-contributors]: ../../contributors
[link-swis]: https://www.swis.nl
