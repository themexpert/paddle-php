<?php

namespace ThemesGrove\Paddle\Product;

use ThemesGrove\Paddle\ApiResource;
use ThemesGrove\Paddle\HttpClient\CurlClient;
use ThemesGrove\Paddle\Paddle;

class PayLink extends ApiResource
{
    const CLASS_URL = 'product';

    public static $credentials = array();

    public static function init()
    {
        self::$credentials = Paddle::getApiCredentials();
    }

    public static function create(array $purchaseData): string
    {
        self::init();

        $url = self::vendorUrl(self::CLASS_URL . '/' . 'generate_pay_link');

        $bodyData = array_merge(self::$credentials, $purchaseData);

        return CurlClient::sendHttpRequest($url, 'POST', $bodyData);
    }
}