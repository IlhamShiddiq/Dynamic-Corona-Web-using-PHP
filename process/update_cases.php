<?php
    require "../dbConnect.php";

    $today = date('Y-m-d');
    $check_date = $con->prepare("SELECT * FROM data_statistic WHERE date_confirmed=:date");
    $check_date->bindParam(':date', $today);
    $check_date->execute();

    $exists = $check_date->rowCount();
    if($exists == 0){
        $positive = $_POST['positive'];
        $recovered = $_POST['recovered'];
        $death = $_POST['death'];

        // Buat Id Baru
        $ambilid = $con->prepare("SELECT id_statistic FROM data_statistic ORDER BY id_statistic DESC LIMIT 1");
        $ambilid->execute();
        $row = $ambilid->fetch(PDO::FETCH_ASSOC);   

        if(empty($row)){
            $angka = 1;
        } else {
            $angka = preg_replace('/[^0-9]/', '', $row['id_statistic']);
            $angka = $angka+1;
        }
        $idbaru = "ST".$angka;
        
        // Insert Values
        $insert = $con->prepare("INSERT INTO data_statistic VALUES(:id, :pos, :dea, :hea, :today, CURRENT_TIME())");
        $insert->bindParam(':id', $idbaru);
        $insert->bindParam(':pos', $positive);
        $insert->bindParam(':hea', $recovered);
        $insert->bindParam(':dea', $death);
        $insert->bindParam(':today', $today);
        $insert->execute();

        header("Location: ../admin-page.php?act=Data Berhasil Ditambahkan&type=success&success=yes");
    } else {
        header("Location: ../admin-page.php?act=Tidak dapat menambah data lagi&type=danger&success=no");
    }
?>