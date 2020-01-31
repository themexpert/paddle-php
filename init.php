<?php

// Paddle
require(dirname(__FILE__) . '/src/Paddle.php');

// HttpClient
require(dirname(__FILE__) . '/src/HttpClient/ClientInterface.php');
require(dirname(__FILE__) . '/src/HttpClient/CurlClient.php');

// Utilities
require(dirname(__FILE__) . '/src/Util/Util.php');
require(dirname(__FILE__) . '/src/Util/ErrorCodes.php');
require(dirname(__FILE__) . '/src/Util/Currency.php');
require(dirname(__FILE__) . '/src/Util/Price.php');

// API Exceptions
require(dirname(__FILE__) . '/src/Exception/ArgumentException.php');

// API Resources
require(dirname(__FILE__) . '/src/ApiResource.php');
require(dirname(__FILE__) . '/src/Paddle/Product/PayLink.php');
require(dirname(__FILE__) . '/src/Paddle/Product/Product.php');
require(dirname(__FILE__) . '/src/Paddle/Product/Coupon.php');