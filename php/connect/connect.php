<?php
    $host = "localhost";
    $user = "jhyjhy968";
    $pw = "dothome369582!";
    $db = "jhyjhy968";

    $connect = new mysqli($host, $user, $pw, $db);
    $connect -> set_charset("utf-8");

    // if(mysqli_connect_errno()){
    //     echo "DATABASE Connect False";
    // } else {
    //     echo "DATABASE Connect True";
    // }
?>