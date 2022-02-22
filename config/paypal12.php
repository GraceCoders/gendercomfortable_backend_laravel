<?php

return [
    'mode'    => env('PAYPAL_MODE', 'sandbox'),

    'sandbox' => [
        'client_id'         => "AW1iZz9u54jpC2pe0He4xRsAftbVvM9dtD5HbKUDy_8v6R5OJuruK4JUMmImDFPAECzRbGt77xLnrjLW",
        'client_secret'     => "ABNsmCTtqasi92BESYariCSJQh2ZA5p.jvxO-9dTGXnBXlX.70.zuzE7",
        'app_id'            => 'APP-80W284485P519543T',
    ],

    'live' => [
        'client_id'         => env('PAYPAL_LIVE_CLIENT_ID', ''),
        'client_secret'     => env('PAYPAL_LIVE_CLIENT_SECRET', ''),
        'app_id'            => '',
    ],

    'payment_action' => env('PAYPAL_PAYMENT_ACTION', 'Sale'),
    'currency'       => env('PAYPAL_CURRENCY', 'USD'),
    'notify_url'     => env('PAYPAL_NOTIFY_URL', ''),
    'locale'         => env('PAYPAL_LOCALE', 'en_US'),
    'validate_ssl'   => env('PAYPAL_VALIDATE_SSL', true),
];