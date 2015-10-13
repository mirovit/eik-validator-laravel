# About

This is Laravel 5 wrapper for this [validation class](https://github.com/mirovit/eik-validator).

# How to use?

Pull from [Composer](https://getcomposer.org/):

```
composer require mirovit/eik-validator-laravel
```

And add this to your `config/app.php` service providers:

```
'Mirovit\EIKValidator\EIKValidatorServiceProvider',
```

Now when creating validation rules, you can use two new rules `eik` and `bulstat` - they are aliases to one another.

# Contributing

If you'd like to contribute, feel free to send a pull request!