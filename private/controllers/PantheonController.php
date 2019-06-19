<?php
/**
 * Created by PhpStorm.
 * User: hensikt
 * Date: 2019-06-18
 * Time: 11:10
 */

class PantheonController{

    function Pantheons(){

        include __DIR__ . "/../includes/functions.php";
        include __DIR__ . "/../views/header-s.php";
        include __DIR__ . "/../views/pantheon.php";
        include __DIR__ . "/../views/footer.php";
    }

}