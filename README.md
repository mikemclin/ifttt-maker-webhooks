# IFTTT Maker Webhooks Notification Channel for Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/laravel-notification-channels/ifttt-maker-webhooks.svg?style=flat-square)](https://packagist.org/packages/laravel-notification-channels/ifttt-maker-webhooks)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/laravel-notification-channels/ifttt-maker-webhooks/master.svg?style=flat-square)](https://travis-ci.org/laravel-notification-channels/ifttt-maker-webhooks)
[![StyleCI](https://styleci.io/repos/86947296/shield)](https://styleci.io/repos/86947296)
[![SensioLabsInsight](https://img.shields.io/sensiolabs/i/:sensio_labs_id.svg?style=flat-square)](https://insight.sensiolabs.com/projects/:sensio_labs_id)
[![Quality Score](https://img.shields.io/scrutinizer/g/laravel-notification-channels/ifttt-maker-webhooks.svg?style=flat-square)](https://scrutinizer-ci.com/g/laravel-notification-channels/ifttt-maker-webhooks)
[![Code Coverage](https://img.shields.io/scrutinizer/coverage/g/laravel-notification-channels/ifttt-maker-webhooks/master.svg?style=flat-square)](https://scrutinizer-ci.com/g/laravel-notification-channels/ifttt-maker-webhooks/?branch=master)
[![Total Downloads](https://img.shields.io/packagist/dt/laravel-notification-channels/ifttt-maker-webhooks.svg?style=flat-square)](https://packagist.org/packages/laravel-notification-channels/ifttt-maker-webhooks)

This package makes it easy to send notifications using [IFTTT Maker Webkooks](https://ifttt.com/maker_webhooks) with Laravel 5.3+.

IFTTT users build Applets (recipes), which are comprised of a Trigger and an Action (cause and effect).  Through the IFTTT Maker Webhooks service, users will be able to use your Laravel Notifications as triggers to perform a multitude of actions on the IFTTT service.

## Contents

- [Installation](#installation)
	- [Setting up the IFTTT Maker Webkooks service](#setting-up-the-IFTTT Maker Webkooks-service)
- [Usage](#usage)
	- [Available Message methods](#available-message-methods)
- [Changelog](#changelog)
- [Testing](#testing)
- [Security](#security)
- [Contributing](#contributing)
- [Credits](#credits)
- [License](#license)


## Installation

You can install the package via composer:

```bash
composer require laravel-notification-channels/ifttt-maker-webhooks
```

You must install the service provider:

```php
// config/app.php
'providers' => [
    ...
    NotificationChannels\IftttMakerWebhooks\IftttMakerWebhooksServiceProvider::class,
],
```

### Setting up the IFTTT Maker Webkooks service

Optionally include a few steps how users can set up the service.

## Usage

Some code examples, make it clear how to use the package

### Available methods

A list of all available options

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Security

If you discover any security related issues, please email mclinmike@gmail.com instead of using the issue tracker.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [Mike McLin](https://github.com/mikemclin)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
