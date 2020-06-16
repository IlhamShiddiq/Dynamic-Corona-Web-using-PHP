<?php
    // Showing 3 thumbnail admin list
    $show_admin = $con->prepare("SELECT * FROM data_user LIMIT 3");
    $show_admin->execute();
    // Showing All admin list
    $show_all_admin = $con->prepare("SELECT * FROM data_user");
    $show_all_admin->execute();

    // Showing 3 thumbnail province list
    $show_province = $con->prepare("SELECT * FROM data_province ORDER BY no LIMIT 3");
    $show_province->execute();
    // Showing All province list
    $show_all_province = $con->prepare("SELECT * FROM data_province ORDER BY no");
    $show_all_province->execute();
?>