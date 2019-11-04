<?php

$config = [
    'DB_HOST' => 'localhost',
    'DB_NAME' => 'portfolio',
    'DB_USER' => 'root',
    'DB_PASSWORD' => '',
    'ROOT' => dirname(dirname(__DIR__)),
    'PRIVATE' => dirname(__DIR__),
    'BASE_URL' => '/public',
    'WEBROOT' => dirname(dirname(__DIR__)) . '/public'
];

return $config;
