<?php

namespace ThemesGrove\PaddleGateway;

define("PADDLE_ROOT_URL", "https://vendors.paddle.com/");
define('PADDLE_GENERATE_PAY_LINK_URL', PADDLE_ROOT_URL . 'api/2.0/product/generate_pay_link');
define('PADDLE_CREATE_SUBSCRIPTION_PLAN_URL', PADDLE_ROOT_URL . 'api/2.0/subscription/plans_create');
define('PADDLE_POPUP_CHECKOUT_URL', PADDLE_ROOT_URL . '//paddle.s3.amazonaws.com/checkout/checkout-woocommerce.js');

class PaddleGateway
{
    private static $config;

    public function __construct($config)
    {
        self::setApiCredentials($config['paddle_vendor_id'], $config['paddle_auth_code'], $config['paddle_public_key']);
        
        // print_r(self::getApiCredentials());
    }

    private function setApiCredentials($vendorId, $authCode, $publicKey): bool
    {
        self::$config['paddle_vendor_id']   = isset($vendorId) ? trim($vendorId)    : null;
        self::$config['paddle_auth_code']   = isset($authCode) ? trim($authCode)    : null;
        self::$config['paddle_public_key']  = isset($publicKey) ? trim($publicKey)  : null;
        return true;
    }

    private function getApiCredentials(): array
    {
        if (empty(self::$config['paddle_vendor_id']) || empty(self::$config['paddle_auth_code']) || empty(self::$config['paddle_public_key'])) {
            die('You must enter your Vendor ID, Auth Codes and Public Key');
        }

        return array(
            'paddle_vendor_id'  => self::$config['paddle_vendor_id'],
            'paddle_auth_code'  => self::$config['paddle_auth_code'],
            'paddle_public_key' => self::$config['paddle_public_key'],
        );
    }

    public function proceedPayment($purchaseData)
    {
        $apiCredentials = self::getApiCredentials();

        // $paymentPrice = number_format($purchase_data['price'], 2);
		// $payment_data = array(
		// 	'price'         => $paymentPrice,
		// 	'date'          => $purchase_data['date'],
		// 	'user_email'    => $purchase_data['user_email'],
		// 	'purchase_key'  => $purchase_data['purchase_key'],
		// 	'currency'      => edd_get_currency(),
		// 	'downloads'     => $purchase_data['downloads'],
		// 	'cart_details'  => $purchase_data['cart_details'],
		// 	'user_info'     => $purchase_data['user_info'],
		// 	'status'        => 'pending'
		// );

        // number_format($number, 2, '.', ',')
        
        // print_r($apiCredentials);
    }
}