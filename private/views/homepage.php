<?php
/**
 * Created by PhpStorm.
 * User: hensikt
 * Date: 2019-05-17
 * Time: 09:14
 */

open_connection();
?>
<div class="container">
    <div class="intro">
        <div class="tekst">
            <h1>Pantheons</h1>
            <p>Vroeger waren er meer religies dan we nu hebben, op deze pagina vindt u de grootste en belangrijkste van de geschiedenis.</p>
        </div>
    </div>
</div>
<div class="About-Us">
    <h2>About Me</h2>
    <p>I am a Student that made this page for a school <br> project where you had to chose a subject and <br>make a page out of it where you
        display <br> information about your subject,<br> i chose for the acient Pantheons becuase <br> i read a lot of mythologie in my free time.</p>
</div>
<div class="CYP">
<!--    <form action="">-->
<!--        <select name="Pantheons" id="pant">-->
<!--            <option value="Aztec">Aztec</option>-->
<!--            <option value="Celtic">Celtic</option>-->
<!--            <option value="Egyptian">Egyptian</option>-->
<!--            <option value="Greek">Greek</option>-->
<!--            <option value="Hindu">Hindu</option>-->
<!--            <option value="Incan">Incan</option>-->
<!--            <option value="Maya">Maya</option>-->
<!--            <option value="Norse">Norse</option>-->
<!--            <option value="Rigvedic">Rigvedic</option>-->
<!--        </select>-->

        <div class="Slideshow-container">
            <div class="mySlides">
                <img src="images/aztec.png">
                <div class="text">Aztec</div>
            </div>

            <div class="mySlides fade">
                <img src="images/Celtic.jpg" style="width:100%">
                <div class="text">Celtic</div>
            </div>

            <div class="mySlides fade">
                <img src="images/Egyptian.jpg" style="width:100%">
                <div class="text">Egyptian</div>
            </div>
			
			<div class="mySlides fade">
				<img src="images/Greek.jpg" style="width:100%">
				<div class="text">Greek</div>
			</div>
			
			<div class="mySlides fade">
				<img src="images/Hindu.jpg" style="width:100%">
				<div class="text">Hindu</div>
			</div>
			
			<div class="mySlides fade">
				<img src="images/Incan.jpg" style="width:100%">
				<div class="text">Incan</div>
			</div>
			
			<div class="mySlides fade">
				<img src="images/Maya.jpg" style="width:100%">
				<div class="text">Maya</div>
			</div>
			
			<div class="mySlides fade">
				<img src="images/Norse.jpg" style="width:100%">
				<div class="text">Norse</div>
			</div>
			
			<div class="mySlides fade">
				<img src="images/Rigvedic.jpg" style="width:100%">
				<div class="text">Rigvedic</div>
			</div>

            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>

        <!-- Dots/circles -->
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
            <span class="dot" onclick="currentSlide(5)"></span>
            <span class="dot" onclick="currentSlide(6)"></span>
            <span class="dot" onclick="currentSlide(7)"></span>
            <span class="dot" onclick="currentSlide(8)"></span>
            <span class="dot" onclick="currentSlide(9)"></span>
        </div>
        </div>
    </form>

</div>
