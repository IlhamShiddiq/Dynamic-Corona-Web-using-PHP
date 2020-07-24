<?php

    try {
        $con = new PDO("mysql:host=localhost;dbname=corona_web_db", "root", "");
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e){
        echo $e->getMessage();
    }

    // Hosting
    // try {
    //     $con = new PDO("mysql:host=localhost;dbname=id14449555_corona_web_db", "id14449555_corona", "}uQoCyu6?_)bXgH3");
    //     $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // } catch(PDOException $e){
    //     echo $e->getMessage();
    // }

?>