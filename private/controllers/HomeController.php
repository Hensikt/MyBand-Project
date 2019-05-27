<?php
/**
 * Created by PhpStorm.
 * User: hensikt
 * Date: 2019-05-24
 * Time: 08:46
 */
class HomeController {

    function homepage(){

        include __DIR__ . "/../views/header.php";
        include __DIR__ . "/../views/homepage.php";
        include __DIR__ . "/../views/footer.php";

    }

}