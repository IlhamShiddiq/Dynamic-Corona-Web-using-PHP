<?php
    require "../dbConnect.php";

    $owner = $_POST['owner'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];

    if($password == $confirm){
        $check = $con->prepare("SELECT * FROM data_user WHERE username=:user");
        $check->bindParam(':user', $username);
        $check->execute();
        $exists = $check->rowCount();
        
        if($exists == 0){
            
            // Buat Id Baru
            $ambilid = $con->prepare("SELECT id_user FROM data_user ORDER BY id_user DESC LIMIT 1");
            $ambilid->execute();
            $row = $ambilid->fetch(PDO::FETCH_ASSOC);   

            if(empty($row)){
                $angka = 1;
            } else {
                $angka = preg_replace('/[^0-9]/', '', $row['id_user']);
                $angka = $angka+1;
            }
            $idbaru = "USR".$angka;

            // Insert value
            $insert = $con->prepare("INSERT INTO data_user VALUES(:id, :owner, :username, :password)");
            $insert->bindParam(':id', $idbaru);
            $insert->bindParam(':owner', $owner);
            $insert->bindParam(':username', $username);
            $insert->bindParam(':password', $password);
            $insert->execute();

            header("Location: ../admin-page.php?act=Data berhasil ditambah!&type=success&success_add=yes");            

        } else {
            header("Location: ../admin-page.php?act=Username tidak bisa digunakan!&type=danger&success_add=no");
        }
    } else {
        header("Location: ../admin-page.php?act=Password tidak match!&type=danger&success_add=no");
    }
?>  