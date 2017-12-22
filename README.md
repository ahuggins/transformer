Transformer
=================

Transformer was created by, and is maintained by [Andrew Huggins](https://github.com/). Feel free to check out the [change log](CHANGELOG.md), [releases](https://github.com/ptondereau/laravel-packme/releases), [license](LICENSE), and [contribution guidelines](CONTRIBUTING.md).

## Installation

Either [PHP](https://php.net) 5.5+ or [HHVM](http://hhvm.com) 3.6+ are required.

To get the latest version of Transformer, simply require the project using [Composer](https://getcomposer.org):

```bash
$ composer require ahuggins/transformer
```

## Configuration

Transformer provides a configuration example.

So you can test publishing assets with:

```bash
$ php artisan vendor:publish --provider="Ahuggins\Transformer\{{ package }}ServiceProvider"
```

This will create a `config/transformer` file in your app that you can modify to set your configuration. Also, make sure you check for changes to the original config file in this package between releases.

## Usage

Usage

##### Further Information

There are other classes in this package that are not documented here. This is because they are not intended for public use and are used internally by this package.

## License

Transformer is licensed under [The MIT License (MIT)](LICENSE).