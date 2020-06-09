<?php
    require "../dbConnect.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    $check = $con->prepare("SELECT * FROM data_user WHERE username=:uname AND password=:pass");
    $check->bindParam(':uname', $username);
    $check->bindParam(':pass', $password);
    $check->execute();

    if($check->rowCount() == 1){
        header("Location: ../admin-page.html");
    } else {
        header("Location: ../admin-login.php?failed_request_data=yes");
    }
?>