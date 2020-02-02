<?php

namespace ThemeXpert\Paddle;

define("PADDLE_VENDOR_URL", "https://vendors.paddle.com");
define("PADDLE_CHECKOUT_URL", "https://checkout.paddle.com");

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
            'vendor_id'  => self::$vendorId,
            'vendor_auth_code'  => self::$authCode,
            // 'paddle_public_key' => self::$publicKey,
        );
    }

    public function __distrust()
    {
        self::unSetApiCredentials();
    }
}
