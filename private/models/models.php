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
    $config = require __DIR__ . '/../includes/config.php';
    $connection = new PDO("mysql:host=" . $config['DB_HOST'] . ";dbname=" . $config['DB_NAME'], $config['DB_USER'], $config['DB_PASSWORD']);

    return $connection;
}

function close_connection($connection)
{
    $connection = null;
}
