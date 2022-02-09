<?php
require __DIR__ . '/vendor/autoload.php';

use Automattic\WooCommerce\Client;

$woocommerce = new Client(
    'http://localhost:8080/wordpress',
    'ck_816e0f36a4b2126133e4a295dbe59c3f26a4fd0e',
    'cs_df4b20da228b0f2f07ad80eac4882a314b552202',
    [
        'wp_api' => true,
        'version' => 'wc/v3',
        'query_string_auth' => true // Force Basic Authentication as query string true and using under HTTPS
    ]
);
?>