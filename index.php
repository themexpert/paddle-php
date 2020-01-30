<?php

require_once 'init.php';

use ThemesGrove\Paddle\Paddle;
use ThemesGrove\Paddle\Product\Coupon;
use ThemesGrove\Paddle\Product\PayLink;
use ThemesGrove\Paddle\Product\Product;
use ThemesGrove\Paddle\Util\Currency;
use ThemesGrove\Paddle\Util\Price;

$paymentData = array(
    'product_id' => 123, // from paddle product_id, for paylink leave it empty
    'title' => 'string',
    'webhook_url' => 'string',
    'prices' => array(
        0 => 'string',
    ),
    'recurring_prices' => array(
        0 => 'string',
    ),
    'trial_days' => 123,
    'custom_message' => 'string',
    'coupon_code' => 'string',
    'discountable' => 1,
    'image_url' => 'string',
    'return_url' => 'string',
    'quantity_variable' => 1,
    'quantity' => 123,
    'expires' => 'string (date)',
    'affiliates' => array(
        0 => 'string',
    ),
    'recurring_affiliate_limit' => 123,
    'marketing_consent' => 'string',
    'customer_email' => 'string (email)',
    'customer_country' => 'string',
    'customer_postcode' => 'string',
    'passthrough' => 'string',
    'vat_number' => 'string',
    'vat_company_name' => 'string',
    'vat_street' => 'string',
    'vat_city' => 'string',
    'vat_state' => 'string',
    'vat_country' => 'string',
    'vat_postcode' => 'string',
);

$couponData = array(
    'coupon_code' => 'string',
    'coupon_prefix' => 'string',
    'num_coupons' => 123,
    'description' => 'string',
    'coupon_type' => 'product',
    'product_ids' => 'string',
    'discount_type' => 'flat',
    'discount_amount' => 123,
    'currency' => 'string',
    'allowed_uses' => 123,
    'expires' => 'string (date)',
    'recurring' => 0,
    'minimum_threshold' => 123,
    'group' => 'string',
);

$deleteCouponData = array(
    'coupon_code' => 'abcd',
    'product_id' => 123
);

$updateCouponData = array(
    'new_coupon_code' => 'string',
    'new_group' => 'string',
    'product_ids' => 'string',
    'expires' => 'string (date)',
    'allowed_uses' => 123,
    'currency' => 'string',
    'minimum_threshold' => 123,
    'discount_amount' => 123,
    'recurring' => 0,
);

$paddle = new Paddle();
$paddle::setApiCredentials('107514', '2bf8057aadd52aa08be1dd5ebf060dea16cc1d60f99ba712c6');


// echo PayLink::create($paymentData);
// echo Product::list();
// echo Coupon::list(123);

// echo Coupon::create($couponData);
// echo Coupon::delete($deleteCouponData);

echo Coupon::update(111, 'string', $updateCouponData);