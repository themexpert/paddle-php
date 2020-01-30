<?php

require_once 'init.php';

use ThemesGrove\Paddle\Paddle;
use ThemesGrove\Paddle\Product\PayLink;

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

$paddle = new Paddle();
$paddle::setApiCredentials('107514', '2bf8057aadd52aa08be1dd5ebf060dea16cc1d60f99ba712c6');


echo PayLink::create($paymentData);