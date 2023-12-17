<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    $youName = $_POST['youName'];
    $youEmail = $_POST['youEmail'];

    $findIdSql = "SELECT * FROM myuduck WHERE youName = '$youName' AND youEmail = '$youEmail'";
    $findIdResult = $connect -> query($findIdSql);

    // echo $findIdSql;

    if($findIdResult){
        $count = $findIdResult -> num_rows;

        echo $count;

        if($count == 0){
            echo "<script>alert('이름과 이메일을 다시 한 번 확인해주세요.');</script>";
            echo "<script>window.location.href='id_findme.php';</script>";
        } else {
            $myuduckId = $findIdResult -> fetch_array(MYSQLI_ASSOC);

            $_SESSION['youId'] = $myuduckId['youId'];

            echo "<script>window.location.href='find_Id_Result.php';</script>";
        }
    }
?>