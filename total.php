<?php
    require "dbConnect.php";

    $sql1 = $con->prepare("SELECT COUNT(*) AS j_hosp FROM data_hospital");
    $sql1->execute();
    $rec1 = $sql1->fetch(PDO::FETCH_ASSOC);
    $j_hosp = $rec1['j_hosp'];

    $sql2 = $con->prepare("SELECT COUNT(*) AS j_prov FROM data_province");
    $sql2->execute();
    $rec2 = $sql2->fetch(PDO::FETCH_ASSOC);
    $j_prov = $rec2['j_prov'];
?>