<?php

return [
    'template' => [
        ':view'             => ':action_view',
        'footer'            => TEMPLATE_PATH . 'footer.php'
    ],
    'header_resources' => [
        'css' => [
            'normalize'         => CSS . 'normalize.css',
            'fawsome'           => CSS . 'fontawsome.min.css',
            'gicons'            => CSS . 'googleicons.css',
            'thefont'           => 'https://fonts.googleapis.com/css?family=Cairo:200,300,400,600,700,900&amp;subset=arabic',
            'main'              => CSS . 'main.' . $_SESSION['lang'] . '.min.css'
        ],
        'js' => [
            'modernizr'         => JS . 'vendor/modernizr-3.5.0.min.js'
        ]
    ],
    'footer_resources' => [
        'jquery'                => JS . 'vendor/jquery-3.2.1.min.js',
        'hammer'                => JS . 'hammer.js',
        'main'                  => JS . 'main.min.js'
    ]
];