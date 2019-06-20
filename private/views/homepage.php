<?php
/**
 * Created by PhpStorm.
 * User: hensikt
 * Date: 2019-05-17
 * Time: 09:14
 */
?>

<div class="container">
    <div class="intro">
        <div class="tekst">
            <h1>Pantheons</h1>
            <p>Vroeger waren er meer religies dan we nu hebben. Op deze pagina vindt u de grootste en belangrijkste van de geschiedenis.</p>
        </div>
    </div>
</div>
<div class="About-Us">
    <h2>About Me</h2>
    <p>I am a student that made this page for a school <br> project where you had to chose a subject and <br>make a page out of it where you
        display <br> information about your subject.<br> I chose for the ancient Pantheons because <br> I read a lot of mythologie in my free time.</p>
</div>
<div class="CYP">
        <div class="Slideshow-container">
            <?php slideShow(); ?>

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

<!--  Verander in database lees meer naar Read more.  -->
