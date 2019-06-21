<?php
/**
 * Created by PhpStorm.
 * User: hensikt
 * Date: 2019-06-18
 * Time: 11:10
 */

class PantheonController{

    function Pantheons(){

        require __DIR__ . "/../includes/functions.php";
        require __DIR__ . "/../models/models.php";
        require __DIR__ . "/../views/header-s.php";
        require __DIR__ . "/../views/pantheon.php";
        require __DIR__ . "/../views/footer.php";
    }

}