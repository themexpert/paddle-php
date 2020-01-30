<?php

namespace ThemesGrove\Paddle\Product;

use ThemesGrove\Paddle\ApiResource;
use ThemesGrove\Paddle\HttpClient\CurlClient;
use ThemesGrove\Paddle\Paddle;

class Coupon extends ApiResource
{
    const CLASS_URL = 'product';

    public static $credentials = array();

    public static function init()
    {
        self::$credentials = Paddle::getApiCredentials();
    }

    public static function create(array $couponData)
    {
        self::init();

        $url = self::requestUrl() . '/' . 'create_coupon';

        $bodyData = array_merge(self::$credentials, $couponData);

        return CurlClient::sendHttpRequest($url, 'POST', $bodyData);
    }

    public static function list(string $productId)
    {
        self::init();

        $url = self::requestUrl() . '/' . 'update_coupon';

        $bodyData = array_merge(self::$credentials, ['product_id' => $productId]);

        return CurlClient::sendHttpRequest($url, 'POST', $bodyData);
    }

    public static function update(string $couponCode, string $group, array $couponData)
    {
        self::init();

        $url = self::requestUrl() . '/' . 'delete_coupon';

        $bodyData = array_merge(self::$credentials, ['coupon_code' => $couponCode], ['group' => $group], $couponData);

        return CurlClient::sendHttpRequest($url, 'POST', $bodyData);
    }

    public static function delete(array $couponData)
    {
        self::init();

        $url = self::requestUrl() . '/' . 'delete_coupon';

        $bodyData = array_merge(self::$credentials, $couponData);

        return CurlClient::sendHttpRequest($url, 'POST', $bodyData);
    }
}