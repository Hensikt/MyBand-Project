<?php
$connection = dbConnect();
?>
<div class="Ab-location">

</div>
<div class="About-Us main">
    <h2 class="title">About Us</h2>
     <p class="description"><?php echo get_info(1) ?></p>
</div>
<div class="Ab-contact">
    <?php
    $sql = "SELECT * FROM `about` ORDER BY `id`";
    $stmt = $connection->query($sql);
    foreach ($stmt as $record) {
        echo "<div class='Contact-container'>" .
             "<div class='Conctact-information'>" .
             "<p class='C-info'>" . " Name: " . $record['name'] . "<br>"
              . " E-mail: " . $record['email'] . "<br>"
              . " Phonenumber: " . $record['number'] . "<br>"
              . " Own Website: " . "<a href='". $record['website'] . "'>". $record['website'] ."</a>". "</p>" .
             "</div>" .
             "</div>";
    }
    ?>
</div>