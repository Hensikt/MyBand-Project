<?php
require  __DIR__ . '/../includes/functions.php';
$connection = dbConnect();
?>
<!DOCTYPE html>
<html lang="nl" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Bjørn Emmaneel">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" href="<?php echo url_to('/css/master.css')?>">
    <title>Mt Pantheon</title>
</head>
<body>
<div class="nav-container">
    <nav class="navbar">
        <div class="navbar-items">
            <div class="navbar-img">
                <img src="#" alt="#">
            </div>
            <div class="navbar-input">
                <input class="navbar-search" type="text" placeholder="Search bar">
            </div>
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="header.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pantheons</a>
                </li>
                <li class="nav-item login">
                    <a class="nav-link" href="#">Login</a>
                </li>
            </ul>
        </div>
    </nav>
</div>