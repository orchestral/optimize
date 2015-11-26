Optimize Component for Orchestra Platform
==============

[![Join the chat at https://gitter.im/orchestral/platform](https://badges.gitter.im/Join%20Chat.svg)](https://gitter.im/orchestral/platform?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)

Optimization tool for Orchestra Platform, which work based on `php artisan optimize`.

[![Latest Stable Version](https://img.shields.io/github/release/orchestral/optimize.svg?style=flat-square)](https://packagist.org/packages/orchestra/optimize)
[![Total Downloads](https://img.shields.io/packagist/dt/orchestra/optimize.svg?style=flat-square)](https://packagist.org/packages/orchestra/optimize)
[![MIT License](https://img.shields.io/packagist/l/orchestra/optimize.svg?style=flat-square)](https://packagist.org/packages/orchestra/optimize)
[![Build Status](https://img.shields.io/travis/orchestral/optimize/master.svg?style=flat-square)](https://travis-ci.org/orchestral/optimize)
[![Coverage Status](https://img.shields.io/coveralls/orchestral/optimize/master.svg?style=flat-square)](https://coveralls.io/r/orchestral/optimize?branch=master)
[![Scrutinizer Quality Score](https://img.shields.io/scrutinizer/g/orchestral/optimize/master.svg?style=flat-square)](https://scrutinizer-ci.com/g/orchestral/optimize/)

## Table of Content

* [Installation](#installation)
* [Configuration](#configuration)

## Installation

To install through composer, simply put the following in your `composer.json` file:

```json
{
    "require": {
        "orchestra/optimize": "~3.0"
    }
}
```

And then run `composer install` from the terminal.

### Quick Installation

Above installation can also be simplify by using the following command:

    composer require "orchestra/optimize=~3.0"

## Configuration

Add following service providers in `config/app.php`.

```php
'providers' => [

    // ...

    Orchestra\Optimize\OptimizeServiceProvider::class,
],
```
