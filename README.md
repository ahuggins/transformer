Transformer 
=================
### A Form generator for speed of getting things done 

Transformer was created by, and is maintained by [Andrew Huggins](https://github.com/). Feel free to check out the [change log](CHANGELOG.md), [releases](https://github.com/ptondereau/laravel-packme/releases), [license](LICENSE), and [contribution guidelines](CONTRIBUTING.md).

## Installation

To get the latest version of Transformer, simply require the project using [Composer](https://getcomposer.org):

```bash
$ composer require ahuggins/transformer
```

## Service Providers

For Laravel 5.5, you should be good since this uses Auto Package Discovery, but if you need it, use the following to add the ServiceProvider to your app.

Add the following to your `config/app.php` file in the Providers array

`Ahuggins\Transformer\TransformerServiceProvider`

## Usage

After the ServiceProvider is registered, you should now have a new command available in Artisan. `php artisan make:form {table}` this will generate a form for the given table and store it in `resources/views/forms/{table}/form.blade.php`. This may not be 100% usable as is, but you can easily copy/cut/paste fields if you need to, and it sure beats making yet another `<input type="text" name="something" />` field again.

##### Contributing

This is a pretty early draft of this, and I am open to changing how it works. I basically wanted to get this going since I have had the idea in my head for a few weeks or months now.

Simply fork and create a Pull Request for any feature/change you want and it will be reviewed.

##### Tests

As was a quick proof of concept, I did not write tests, which is going to be my first priority for this package.

## License

Transformer is licensed under [The MIT License (MIT)](LICENSE).
