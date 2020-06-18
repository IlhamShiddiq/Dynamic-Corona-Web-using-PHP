<?php

    require "../dbConnect.php";

    if(isset($_POST['submit-prov'])){
        $id = $_POST['prov'];

        header("Location: ../admin-page.php?id_prov=$id");
    }

    if(isset($_POST['delete'])){
        $id = $_POST['id'];
        $prov = $_GET['id_prov'];
        $del = $con->prepare("DELETE FROM data_hospital WHERE id_hospital=:id");
        $del->bindParam(':id', $id);
        $del->execute();

        header("Location: ../admin-page.php?id_prov=$prov&success=yes&type=success&act=Data berhasil dihapus");        
    }

    if(isset($_POST['edit'])){
        $id = $_POST['id'];
        $prov = $_GET['id_prov'];
        $hospital = $_POST['hospital'];
        $address = $_POST['address'];
        $del = $con->prepare("UPDATE data_hospital SET hospital_name=:name, address_telp=:add WHERE id_hospital=:id");
        $del->bindParam(':name', $hospital);
        $del->bindParam(':add', $address);
        $del->bindParam(':id', $id);
        $del->execute();

        header("Location: ../admin-page.php?id_prov=$prov&success=yes&type=success&act=Data berhasil diedit");        
    }

    if(isset($_POST['add'])){
        $prov = $_GET['id_prov'];
        $hospital = $_POST['hospital'];
        $address = $_POST['address'];
        $id_prov = $_POST['prov'];

        // Buat Id Baru
        $ambilid = $con->prepare("SELECT id_hospital FROM data_hospital ORDER BY id_hospital DESC LIMIT 1");
        $ambilid->execute();
        $row = $ambilid->fetch(PDO::FETCH_ASSOC);   
        $angka = $row['id_hospital']+1;
        $idbaru = $angka;

        $del = $con->prepare("INSERT INTO data_hospital VALUES(:prov, :id, :hosp, :add)");
        $del->bindParam(':prov', $id_prov);
        $del->bindParam(':id', $idbaru);
        $del->bindParam(':hosp', $hospital);
        $del->bindParam(':add', $address);
        $del->execute();

        header("Location: ../admin-page.php?id_prov=$prov&success=yes&type=success&act=Data berhasil ditambah");        
    }
?>