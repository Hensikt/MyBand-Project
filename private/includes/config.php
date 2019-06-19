<?php

$config = [
    'DB_HOST' => 'localhost',
    'DB_NAME' => 'thePantheons',
    'DB_USER' => 'root',
    'DB_PASSWORD' => '',
//    'DB_HOST' => '127.0.0.1',
//    'DB_NAME' => 'c3655thePantheons',
//    'DB_USER' => 'c3655Hensikt',
//    'DB_PASSWORD' => '#AB2sqZpaXqS',
    'ROOT' => dirname(dirname(__DIR__)),
    'PRIVATE' => dirname(__DIR__),
    'WEBROOT' => dirname(dirname(__DIR__)) . '/public'
];

return $config;
