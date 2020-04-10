# Paddle PHP SDK

Paddle payment gateway PHP SKY cliend support API `v1` and `v2`.

Checkout the [Paddle WordPress Plugin](https://wpsmartpay.com/) built with this SDK support EDD and WooCommerce.

Paddle.com features supported:

- Create product while checkout and validate response
- Subscription creation
- Coupone management
- License management
- Transaction and pay slip generate
- Checkout API
- Webhook support

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

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Credit

Brought to you by [Team ThemeXpert](https://www.themexpert.com) with :heart: and :coffee:
