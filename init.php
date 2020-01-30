<?php

// Paddle
require(dirname(__FILE__) . '/lib/Paddle.php');

// HttpClient
require(dirname(__FILE__) . '/lib/HttpClient/ClientInterface.php');
require(dirname(__FILE__) . '/lib/HttpClient/CurlClient.php');

// Utilities
require(dirname(__FILE__) . '/lib/Util/Util.php');
require(dirname(__FILE__) . '/lib/Util/ErrorCodes.php');
require(dirname(__FILE__) . '/lib/Util/Currency.php');
require(dirname(__FILE__) . '/lib/Util/Price.php');

// API operations
require(dirname(__FILE__) . '/lib/traits/ApiOperations/Create.php');

// API Exceptions
require(dirname(__FILE__) . '/lib/Exception/ArgumentException.php');

// API Resources
require(dirname(__FILE__) . '/lib/ApiResource.php');
require(dirname(__FILE__) . '/lib/Paddle/Product/PayLink.php');
require(dirname(__FILE__) . '/lib/Paddle/Product/Product.php');
require(dirname(__FILE__) . '/lib/Paddle/Product/Coupon.php');