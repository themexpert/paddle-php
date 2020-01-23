<?php

namespace ThemesGrove\Paddle;

define("PADDLE_ROOT_URL", "https://vendors.paddle.com/");
define('PADDLE_GENERATE_PAY_LINK_URL', PADDLE_ROOT_URL . 'api/2.0/product/generate_pay_link');
define('PADDLE_CREATE_SUBSCRIPTION_PLAN_URL', PADDLE_ROOT_URL . 'api/2.0/subscription/plans_create');

class Paddle
{
    private static $config;

    public function __construct($config)
    {
        self::setApiCredentials($config['paddle_vendor_id'], $config['paddle_auth_code'], $config['paddle_public_key']);
    }

    private static function setApiCredentials($vendorId, $authCode, $publicKey = ''): bool
    {
        self::$config['paddle_vendor_id']   = isset($vendorId) ? (int) trim($vendorId)  : null;
        self::$config['paddle_auth_code']   = isset($authCode) ? trim($authCode)        : null;
        self::$config['paddle_public_key']  = isset($publicKey) ? trim($publicKey)      : null;

        return true;
    }

    private static function getApiCredentials(): array
    {
        if (empty(self::$config['paddle_vendor_id']) || empty(self::$config['paddle_auth_code'])) {
            die('You must enter your Vendor ID and Auth Codes.');
        }

        return array(
            'paddle_vendor_id'  => self::$config['paddle_vendor_id'],
            'paddle_auth_code'  => self::$config['paddle_auth_code'],
            'paddle_public_key' => self::$config['paddle_public_key'],
        );
    }

    public static function proceedPayment($purchaseData)
    {
        $credentials = self::getApiCredentials();

        $bodyData = array(
            'vendor_id' => $credentials['paddle_vendor_id'],
            'vendor_auth_code' => $credentials['paddle_auth_code'],
        );

        $bodyData = array_merge($bodyData, $purchaseData);

        return self::sendHttpRequest(PADDLE_GENERATE_PAY_LINK_URL, "POST", $bodyData);
    }

    private static function sendHttpRequest($url, $method = "POST", $bodyData, $config = array())
    {
        // Check if cURL is not enabled
        !extension_loaded('curl') ? die('You must enable cURL to the server.') : '';

        $url = Util\Util::utf8($url);

        // Initialize cURL
        $curl = curl_init();

        // Set data to cURL
        // TODO: Set config data
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => strtoupper($method),
            CURLOPT_POSTFIELDS => json_encode($bodyData),
            CURLOPT_HTTPHEADER => array(
                "content-type: application/json"
            ),
        ));

        // Get cURL responce
        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        return $err ?
            'cURL Error: ' . $err :
            $response;
    }

    public function __distrust()
    {
        unset(self::$config);
    }
}