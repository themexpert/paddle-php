<?php

namespace ThemesGrove\Paddle\Alert;

use ThemesGrove\Paddle\ApiResource;
use ThemesGrove\Paddle\HttpClient\CurlClient;
use ThemesGrove\Paddle\Paddle;

class Webhook extends ApiResource
{
    const CLASS_URL = 'alert';

    public static $credentials = array();

    public static function init()
    {
        self::$credentials = Paddle::getApiCredentials();
    }

    public static function history(array $bodyData): string
    {
        return self::list($bodyData);
    }

    public static function list(array $bodyData): string
    {
        self::init();

        $url = self::vendorUrl(self::CLASS_URL . '/' . 'webhooks');

        $bodyData = array_merge(self::$credentials, $bodyData);

        return CurlClient::sendHttpRequest($url, 'POST', $bodyData);
    }
}