<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    $youPass = $_POST['youPass'];
    $myuduckId = $_SESSION['myuduckId'];

    $cancleSql = "SELECT youPass, youDelete FROM myuduck WHERE youPass='$youPass' AND myuduckId ='$myuduckId'";
    $canclResult = $connect -> query($cancleSql);

    // echo $cancleSql;

    if($canclResult){
        $count = $canclResult -> num_rows;

        // echo $count;

        if($count == 0){
            echo "<script>alert('비밀번호가 틀렸습니다. 다시 한번 입력해주세요.');</script>";
            echo "<script>window.location.href='joinCancel.php';</script>";
        } else {
            $cancleUpdate = "UPDATE myuduck SET youDelete=0 WHERE youDelete=1 AND youPass='$youPass' AND myuduckId ='$myuduckId'";
            $cancleUpdateResult = $connect -> query($cancleUpdate);

            // echo $cancleUpdate;
            
            // echo "<script>window.location.href='../login/logout.php';</script>";

            if ($cancleUpdateResult) {
                echo "<script>alert('회원 탈퇴가 정상적으로 처리되었습니다.');</script>";
                echo "<script>window.location.href='../main/main.php';</script>";
            } else {
                echo "<script>alert('회원 탈퇴 중 오류가 발생했습니다. 다시 시도해주세요.');</script>";
                echo "<script>window.location.href='joinCancel.php';</script>";
            }
        }
    } else {
        echo "<script>alert('오류가 발생했습니다. 다시 시도해주세요.');</script>";
        echo "<script>window.location.href='joinCancel.php';</script>";
    }
?>