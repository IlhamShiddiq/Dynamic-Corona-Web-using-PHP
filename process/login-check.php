<?php
    require "../dbConnect.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    $check = $con->prepare("SELECT * FROM data_user WHERE username=:uname AND password=:pass");
    $check->bindParam(':uname', $username);
    $check->bindParam(':pass', $password);
    $check->execute();

    $fetch = $check->fetch(PDO::FETCH_ASSOC);

    if($check->rowCount() == 1){
        session_start();
        $id = $fetch['id_user'];
        $_SESSION['id'] = $id;
        header("Location: ../admin-page.php");
    } else {
        header("Location: ../admin-login.php?failed_request_data=yes");
    }
?>