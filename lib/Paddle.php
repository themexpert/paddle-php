<?php

namespace ThemesGrove\Paddle;

use ThemesGrove\Paddle\HttpClient\CurlClient;

define("PADDLE_ROOT_URL", "https://vendors.paddle.com/");
define("API_ROOT_URL", PADDLE_ROOT_URL . "api/2.0/");
define("PADDLE_CREATE_SUBSCRIPTION_PLAN_URL", API_ROOT_URL . "subscription/plans_create");

class Paddle
{
    /**
     * Your Paddle Vendor/Account ID
     * @var string
     */
    private static $vendorId;

    /**
     * Your Paddle Code/Token
     * @var string
     */
    private static $authCode;

    /**
     * Your Paddle Public Key
     * @var string
     */
    private static $publicKey;

    public function __construct($vendorId = null, $authCode = null, $publicKey = null)
    {
        if ($vendorId && $authCode) {
            self::setApiCredentials($vendorId, $authCode, $publicKey);
        }
    }

    public static function setApiCredentials($vendorId, $authCode, $publicKey = null): bool
    {
        self::$vendorId   = (int) trim($vendorId)   ?? null;
        self::$authCode   = trim($authCode)         ?? null;
        // self::$publicKey  = trim($publicKey)        ?? null;

        return true;
    }

    public static function unSetApiCredentials(): bool
    {
        unset(self::$vendorId);
        unset(self::$authCode);
        // unset(self::$publicKey);

        return true;
    }

    public static function getApiCredentials(): array
    {
        if (empty(self::$vendorId) || empty(self::$authCode)) {
            // TODO: Add Exception
            die('You must enter your Vendor ID and Auth Codes.');
        }

        return array(
            'paddle_vendor_id'  => self::$vendorId,
            'paddle_auth_code'  => self::$authCode,
            // 'paddle_public_key' => self::$publicKey,
        );
    }

    public function __distrust()
    {
        self::unSetApiCredentials();
    }
}