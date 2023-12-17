<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    unset($_SESSION['myuduckId']);
    unset($_SESSION['youId']);
    unset($_SESSION['youName']);
    unset($_SESSION['youPass']);
    unset($_SESSION['youEmail']);
    unset($_SESSION['youPhone']);

    echo "<script>window.location.href='../main/main.php';</script>";
    exit();
?>