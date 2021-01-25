<?php

return [

   #--- agregar este bloque
'facebook'=> [
'client_id' => env('FACEBOOK_CLIENT_ID', '231141055149945'),
'client_secret' =>
env('FACEBOOK_CLIENT_SECRET',
'231141055149945'),
'redirect' =>
env('FACEBOOK_REDIRECT',
http://localhost:8000/login/facebook/callback')
],





   
    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

];
