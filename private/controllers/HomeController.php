<?php
/**
 * Created by PhpStorm.
 * User: hensikt
 * Date: 2019-05-24
 * Time: 08:46
 */

class HomeController {

    function homepage(){

        require __DIR__ . "/../includes/functions.php";
        require __DIR__ . "/../models/models.php";
        require __DIR__ . "/../views/header.php";
        require __DIR__ . "/../views/homepage.php";
        require __DIR__ . "/../views/footer.php";

    }

}