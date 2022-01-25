# Render Blade on the fly.

[![Tests](https://github.com/felixdorn/laravel-render-blade-string/actions/workflows/tests.yml/badge.svg?branch=master)](https://github.com/felixdorn/laravel-render-blade-string/actions/workflows/tests.yml)
[![Formats](https://github.com/felixdorn/laravel-render-blade-string/actions/workflows/formats.yml/badge.svg?branch=master)](https://github.com/felixdorn/laravel-render-blade-string/actions/workflows/formats.yml)
[![Version](https://poser.pugx.org/felixdorn/laravel-render-blade-string/version)](//packagist.org/packages/felixdorn/laravel-render-blade-string)
[![Total Downloads](https://poser.pugx.org/felixdorn/laravel-render-blade-string/downloads)](//packagist.org/packages/felixdorn/laravel-render-blade-string)
[![License](https://poser.pugx.org/felixdorn/laravel-render-blade-string/license)](//packagist.org/packages/felixdorn/laravel-render-blade-string)

## Installation

> Requires [PHP 8.0.0+](https://php.net/releases)

You can install the package via composer:

```bash
composer require felixdorn/laravel-render-blade-string
```

## Disclaimer

This function evaluates PHP code (using `eval()`). This should not be a security issue unless you write the following
code.

```php
__renderBlade($request->get('blade'));
```

The double underscores in the function name are here to remind you that this a somewhat **dirty hack** and you should try to avoid doing this as much as possible.

## Usage

```php
__renderBlade('@if ($something) Yo! @endif', [
    'something' => true
]);
```

## Testing

```bash
composer test
```

**Laravel Render Blade String** was created by **[Félix Dorn](https://twitter.com/afelixdorn)** under
the **[MIT license](https://opensource.org/licenses/MIT)**.
