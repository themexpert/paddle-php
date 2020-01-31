<?php

namespace ThemesGrove\Paddle\Checkout;

use ThemesGrove\Paddle\ApiResource;
use ThemesGrove\Paddle\HttpClient\CurlClient;
use ThemesGrove\Paddle\Util\Util;

class Order extends ApiResource
{
    const CLASS_URL = 'order';

    public static function details(string $checkoutId, string $callbackUrl): string
    {
        $callbackUrl = Util::filterValidUrl($callbackUrl);

        $url = self::checkoutUrl(self::CLASS_URL, '1.0') . '?checkout_id=' . $checkoutId . '&callback=' . $callbackUrl;

        return CurlClient::sendHttpRequest($url, 'GET');
    }
}