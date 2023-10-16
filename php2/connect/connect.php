<?php
    $host = "localhost";
    $user = "kiwowki";
    $pw = "rkdtjr00!!";
    $db = "kiwowki";
    
    $connect = new mysqli($host, $user, $pw, $db);
    $connect -> set_charset("utf-8");

    // if(mysqli_connect_errno()){
    //     echo "DATABASE Connect False";
    // } else {
    //     echo "DATABASE Connect True";
    // }
?>