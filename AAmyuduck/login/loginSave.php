<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    $youId = $_POST['youId'];
    $youPass = $_POST['youPass'];

    $loginSql = "SELECT myuduckId, youId, youPass, youName, youEmail, youPhone FROM myuduck WHERE youId='$youId' AND youPass='$youPass' AND youDelete=1";
    $result = $connect -> query($loginSql);

    // echo $loginSql;

    if($result){
        $count = $result -> num_rows;

        echo $count;

        if($count == 0){
            //로그인 실패
            echo "<script>alert('아이디와 비밀번호가 틀렸습니다. 다시 한번 입력해주세요.');</script>";
            echo "<script>window.location.href='login.php';</script>";
        } else {
            //로그인 성공
            $myuduckId = $result-> fetch_array(MYSQLI_ASSOC);

            //세션설정
            $_SESSION['myuduckId'] = $myuduckId['myuduckId'];
            $_SESSION['youId'] = $myuduckId['youId'];
            $_SESSION['youEmail'] = $myuduckId['youEmail'];
            $_SESSION['youPhone'] = $myuduckId['youPhone'];
            $_SESSION['youPass'] = $myuduckId['youPass'];


            echo "<script>window.location.href='../main/main.php';</script>";
        }
    }
?>
