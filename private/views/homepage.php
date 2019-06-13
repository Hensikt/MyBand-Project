<?php
/**
 * Created by PhpStorm.
 * User: hensikt
 * Date: 2019-05-17
 * Time: 09:14
 */

$connection = dbConnect();
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
        <div class="Slideshow-container">
            <?php
            $sql = "SELECT * FROM `fotos` ORDER BY `id`";
            $stmt = $connection->query($sql);
            foreach ($stmt as $record) {
                echo "<div class='mySlides fade'>" .
                    "<img src='images/" . $record['name'] ."'>" .
                    "<div class='text'>" . $record['text'] .
                    "</div>" .
                    "<div class='desc'>" . $record['About'] . "<a href='#'>" ." Lees meer ". "</a>" .
                    "</div>" .
                    "</div>";
            }
            ?>
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
