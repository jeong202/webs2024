<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    $youName = $_POST['youName'];
    $youEmail = $_POST['youEmail'];
    $youId = $_POST['youId'];

    $findPwSql = "SELECT * FROM myuduck WHERE youName = '$youName' AND youEmail = '$youEmail' AND youId = '$youId'";
    $findPwResult = $connect -> query($findPwSql);

    echo $findPwSql;

    if($findPwResult){
        $count = $findPwResult -> num_rows;
        
        echo $count;

        if($count == 0) {
            echo "<script>alert('이름과 이메일, 아이디를 다시 한 번 확인해주세요.');</script>";
            echo "<script>window.location.href='pass_find.php';</script>";
        } else {
            $myuduckId = $findPwResult -> fetch_array(MYSQLI_ASSOC);

            $_SESSION['youPass'] = $myuduckId['youPass'];

            echo "<script>window.location.href='find_pw_Result.php';</script>";
        }
    }

?>