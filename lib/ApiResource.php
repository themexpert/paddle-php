<?php

namespace ThemesGrove\Paddle;

abstract class ApiResource
{
    public static function apiBaseUrl()
    {
        return API_ROOT_URL;
    }

    public static function classUrl()
    {
        return str_replace('.', '/', static::CLASS_URL);
    }

    public static function requestUrl()
    {
        return API_ROOT_URL . static::classUrl();
    }
}
