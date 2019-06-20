<?php
$connection = dbConnect();
?>
<div class="Ab-location">

</div>
<div class="About-Us main">
    <h2 class="title">About Me</h2>
     <p class="description"><?php echo get_info(1) ?></p>
</div>
<div class="Ab-contact">
    <?php Contact(); ?>
</div>


<!--Verander text: Student -> student, gods -> Gods met punt erachter, so -> So,-->