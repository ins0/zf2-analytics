# ZF2-Analytics Module
ZF2 Module wrapper for the google-measurement-php-client library

## Requirements

- [google-measurement-php-client](https://github.com/ins0/google-measurement-php-client)

## Installation

### Install via Composer
In the `require` key of `composer.json` file add the following

    "ins0/zf2-analytics": "1.0.*"

Or

```sh
php composer.phar require ins0/zf2-analytics:1.*
```

Copy-paste the `zf2-analytics.global.php.dist` file to your `autoload` folder, and enable the module by adding
`Zf2Analytics` to your `application.config.php` file.

## Usage
```php
use Racecore\GATracking\GATracking;

$analytics = $serviceLocator->get(GATracking::class);
```