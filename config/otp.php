<?php
return [
    'api_key' => env('OTP_KEY', ' 4'),
    'otp_url' => env('OTP_URL', 'https://sms.mram.com.bd/smsapi'),
    'senderid' => env('OTP_SENDER_ID', '8809601002803'),
    'type' => env('OTP_TYPE', 'text/unicode'),
];
