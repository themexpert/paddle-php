<?php

namespace ThemesGrove\Paddle\Product;

use ThemesGrove\Paddle\ApiResource;
use ThemesGrove\Paddle\HttpClient\CurlClient;
use ThemesGrove\Paddle\Paddle;

class Product extends ApiResource
{
    const CLASS_URL = 'product';

    public static $credentials = array();

    public static function init()
    {
        self::$credentials = Paddle::getApiCredentials();
    }

    public static function list()
    {
        self::init();

        $url = self::requestUrl() . '/' . 'get_products';

        $bodyData = self::$credentials;

        return CurlClient::sendHttpRequest($url, 'POST', $bodyData);
    }
}