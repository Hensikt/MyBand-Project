<?php

class AboutUsController{

	function AboutUs(){

        include __DIR__ . "/../includes/functions.php";
        include __DIR__ . "/../models/models.php";
		include __DIR__ . "/../views/header.php";
		include __DIR__ . "/../views/About-Us.php";
		include __DIR__ . "/../views/footer.php";
		
	}
}