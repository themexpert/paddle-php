# PaddleGateway

PHP Library for Paddle Payment Gateway

## Install

Via Composer

``` bash
$ composer require themesgrove/paddlegateway
```

## Usage

``` php
$paddle = new Paddle();
$paddle::setApiCredentials('paddle_vendor_id', 'paddle_auth_code');

echo Product::list();
```

## Testing

``` bash
$ phpunit
```

## Credits

- [themesgrove](https://gitlab.com/themesgrove)
- [alaminfirdows](https://github.com/alaminfiedows)

