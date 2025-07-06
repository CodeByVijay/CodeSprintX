<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Razorpay Keys
    |--------------------------------------------------------------------------
    |
    | The Razorpay publishable key and secret key give you access to Razorpay's
    | API. The "publishable" key is typically used when interacting with
    | Razorpay.js while the "secret" key allows you to perform more sensitive
    | operations such as charging customers or handling webhooks.
    |
    */

    'key_id' => env('RAZORPAY_KEY_ID', ''),
    'key_secret' => env('RAZORPAY_KEY_SECRET', ''),

    /*
    |--------------------------------------------------------------------------
    | Webhook Secret
    |--------------------------------------------------------------------------
    |
    | This secret is used to verify that webhook calls came from Razorpay.
    |
    */
    'webhook_secret' => env('RAZORPAY_WEBHOOK_SECRET', ''),

    /*
    |--------------------------------------------------------------------------
    | Currency
    |--------------------------------------------------------------------------
    |
    | This is the default currency that will be used when generating charges
    | from your application.
    |
    */
    'currency' => env('RAZORPAY_CURRENCY', 'INR'),
];
