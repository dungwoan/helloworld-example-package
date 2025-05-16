# Hello World Laravel Package

A simple Hello World package for Laravel applications.

## Installation

You can install the package via composer:

```bash
composer require example/helloworld
```

## Configuration

After installing the package, publish the configuration:

```bash
php artisan vendor:publish --tag=helloworld-config
```

## Assets

To publish the package assets:

```bash
php artisan vendor:publish --tag=helloworld-assets
```

## Usage

The package will automatically register its routes and views. You can access the Hello World page at `/service/helloworld`.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information. 