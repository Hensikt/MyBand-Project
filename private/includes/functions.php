<?php
//function url_to($path)
//{
//    return HOME_URL . $path;
//}
function dbConnect($config)
{
    // laad de instellingen.
    $config = require '../includes/config.example.php';

    try {
        $dsn = "mysql:host=" . $config['DB_HOST'] . ';dbname=' . $config['DB_NAME'];
        $database = new PDO($dsn, $config['DB_USER'], $config['DB_PASSWORD']);
        $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $database->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $database;

    } catch (PDOException $fout) {
        echo "Database connectie fout: " . $fout->getMessage();
        exit;
    }

}