<?php

return[

    'client_id'=> env('PAYPAL_CLIENT_ID'),
    'secret'=> env('PAYPAL_SECRET'),

    'setings' => [
        'modo' => env('PAYPAL_MODE','sandbox'),
        'htto.ConnectionTimeOut' => 30,
        'log.LogEnable'=>true,
        'log.FileName'=> storage_path('/logs/paypal.log'),
        'log.LogLevel'=> 'ERROR'
        ]
    ];
