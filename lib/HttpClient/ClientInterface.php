<?php

namespace ThemesGrove\Paddle\HttpClient;

interface ClientInterface
{
    public static function sendHttpRequest($url, $method, $bodyData, $config = array());
}
