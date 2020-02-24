<?php

namespace ThemeXpert\Paddle\Product;

use ThemeXpert\Paddle\ApiResource;
use ThemeXpert\Paddle\HttpClient\CurlClient;
use ThemeXpert\Paddle\Paddle;

class Payment extends ApiResource
{
    private static $classUrl = 'payment';

    public static $credentials = array();

    public static function init()
    {
        self::$credentials = Paddle::getApiCredentials();
    }

    public static function refund(string $orderId, float $amount, string $reason = ''): string
    {
        self::init();

        $url = self::vendorUrl(self::$classUrl . '/' . 'refund');

        $bodyData = array_merge(self::$credentials, ['order_id' => $orderId, 'amount' => $amount, 'reason' => $reason]);

        return CurlClient::sendHttpRequest($url, 'POST', $bodyData);
    }
}
