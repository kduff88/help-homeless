<?php

return [
    'config' => [
        'app_id' => env('FB_SECRET_KEY', null),
        'app_secret' => env('FB_APP_ID', null),
        'default_graph_version' => env('FACEBOOK_DEFAULT_GRAPH_VERSION', 'v2.8'),
    ],
];