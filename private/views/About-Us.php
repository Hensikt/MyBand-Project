<?php
$connection = dbConnect();
?>
<div class="Ab-location">

</div>
<div class="About-Us main">

</div>
<div class="Ab-contact">
    <?php
    $sql = "SELECT * FROM `about` ORDER BY `id`";
    $stmt = $connection->query($sql);
    foreach ($stmt as $record) {
        echo "<div class='Contact-container'>" .
             "<div class='Conctact-information'>" .
             "<p class='C-info'   >" . " Name: " . $record['name'] . "<br>"
              . " E-mail: " . $record['email'] . "<br>"
              . " Phonenumber: " . $record['number'] . "<br>"
              . " Own Website: " . "<a href='http://bjornemmaneel.nl/'>". $record['website'] ."</a>". "</p>" .
             "</div>" .
             "</div>";
    }
    ?>
</div>