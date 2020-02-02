<?php

namespace ThemesGrove\Paddle\Checkout;

use ThemesGrove\Paddle\ApiResource;
use ThemesGrove\Paddle\HttpClient\CurlClient;
use ThemesGrove\Paddle\Paddle;
use ThemesGrove\Paddle\Util\Util;

class User extends ApiResource
{
    const CLASS_URL = 'user';

    public static $credentials = array();

    public static function init()
    {
        self::$credentials = Paddle::getApiCredentials();
    }

    public static function history(string $email, string $product_id): string
    {
        self::init();

        $email = Util::filterValidEmail($email);

        $url = self::checkoutUrl(self::CLASS_URL) . '/' . 'history' . '?vendor_id=' . self::$credentials['vendor_id'] . '&product_id=' . $product_id . '&email=' . $email;

        return CurlClient::sendHttpRequest($url, 'GET');
    }
}