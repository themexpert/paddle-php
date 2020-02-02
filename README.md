# PaddleGateway

PHP Library for Paddle Payment Gateway

## Install

Via Composer

``` bash
$ composer require themexpert/paddle-php
```

## Usage

``` php
use ThemeXpert\Paddle\Paddle; 

$paddle = new Paddle();
$paddle::setApiCredentials('paddle_vendor_id', 'paddle_auth_code');

echo Product::list();
```

## Testing

``` bash
$ phpunit
```

## Credits

- [themexpert](https://github.com/themexpert)
- [alaminfirdows](https://github.com/alaminfiedows)

