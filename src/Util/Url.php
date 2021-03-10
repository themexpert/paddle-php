<?php

namespace ThemeXpert\Paddle\Util;
use ThemeXpert\Paddle\Paddle;

class Url
{
    public static function getUrl($base, $version = '2.0', $path)
    {
        return "{$base}/api/{$version}/${path}";
    }

    public static function checkoutUrl($path, $version = '2.0')
    {
        return static::getUrl(Paddle::getCheckoutURL(), $version, $path);
    }

    public static function vendorUrl($path, $version = '2.0')
    {
        return static::getUrl(Paddle::getVendorURL(), $version, $path);
    }
}
