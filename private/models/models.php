<?php
/**
 * Created by PhpStorm.
 * User: hensikt
 * Date: 2019-05-22
 * Time: 13:37
 */
function open_connection()
{
    // Connection to the database: localhost
    $config = require __DIR__ . '../includes/config.example.php';
    $connection = new PDO("mysql:host=" . $config['db_host'] . ";dbname=" . $config['db_name'], $config['db_user'], $config['db_password']);

    return $connection;
}

function close_connection(&$connection)
{
    $connection = null;
}
