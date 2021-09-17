# Laravel MailerLite Wrapper

[![Latest Version on Packagist](https://img.shields.io/packagist/v/rankfoundry/laravel-mailerlite.svg?style=flat-square)](https://packagist.org/packages/rankfoundry/laravel-mailerlite)
[![Total Downloads](https://img.shields.io/packagist/dt/rankfoundry/laravel-mailerlite.svg?style=flat-square)](https://packagist.org/packages/rankfoundry/laravel-mailerlite)


**A Laravel wrapper for MailerLite API.**

## Install

Via Composer

``` bash
$ composer require rankfoundry/laravel-mailerlite
```


## Configuration

Laravel MailerLite requires connection configuration. To get started, you'll need to publish all vendor assets:

```bash
$ php artisan vendor:publish --provider="RankFoundry\MailerLite\MailerLiteProvider"
```

This will create a `config/mailerlite.php` file in your app that you can modify to set your configuration. 

You are free to change the configuration file as needed, but the default expected values are below:

```php
API_KEY=
```


## Usage
See documention for params and others at [MailerLite docs](https://developers.mailerlite.com/docs)
