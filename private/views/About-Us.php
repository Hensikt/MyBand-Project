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
    <?php Contact(); ?>
</div>