<?php

require_once 'PaddleGateway.php';

use ThemesGrove\PaddleGateway\PaddleGateway;

$config = array(
    'paddle_vendor_id'  => 'my_id',
    'paddle_auth_code'  => 'paddle_auth_code',
    'paddle_public_key' => 'paddle_public_key',
);

$paymentData = array (
    'test'  => 123, 
);

$paddleGateway = new PaddleGateway($config);
print_r($paddleGateway->proceedPayment($paymentData));