<?php
function homepage_action()
{
    // Model
    $streetnames = get_latest_streetnames(10);

    // View
    include "../private/views/header.php";
    include "../private/views/homepage.php";
    include "../private/views/footer.php";
}
