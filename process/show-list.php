<?php
    // Showing 3 thumbnail admin list
    $show_admin = $con->prepare("SELECT * FROM data_user LIMIT 3");
    $show_admin->execute();
    // Showing All admin list
    $show_all_admin = $con->prepare("SELECT * FROM data_user");
    $show_all_admin->execute();
?>