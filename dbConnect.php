<?php

    try {
        $con = new PDO("mysql:host=localhost;dbname=corona_web_db", "root", "");
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e){
        echo $e->getMessage();
    }
?>