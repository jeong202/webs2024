<?php
    include "../connect/connect.php";
    include "../connect/session.php";
 
    $youId = mysqli_real_escape_string($connect, $_POST['youId']);
    $youPass = mysqli_real_escape_string($connect, $_POST['youPass']);
    $youName = mysqli_real_escape_string($connect, $_POST['youName']);
    $youAddress1 = mysqli_real_escape_string($connect, $_POST['youAddress1']);
    $youAddress2 = mysqli_real_escape_string($connect, $_POST['youAddress2']);
    $youAddress3 = mysqli_real_escape_string($connect, $_POST['youAddress3']);
    $youPhone = mysqli_real_escape_string($connect, $_POST['youPhone']);
    $regTime = time();
 
    $myuduckSql = "UPDATE myuduck SET youPass = '$youPass', youName = '$youName', youAddress = '$youAddress1 $youAddress2 $youAddress3', youPhone = '$youPhone', regTime = '$regTime' WHERE youId = '$youId' AND youDelete = '1'";
    $commentSql = "UPDATE QAcomment SET commentPass = '$youPass' WHERE youId = '$youId'";
 
    if($connect -> query($myuduckSql) === TRUE && $connect -> query($commentSql) === TRUE){
        echo "<script>alert('회원정보가 수정되었습니다.');</script>";
        $_SESSION['youName'] = $youName;
        $_SESSION['youPass'] = $youPass;
        $_SESSION['youPhone'] = $youPhone;
 
        echo "<script>window.location.href='./mypage.php';</script>";
    } else {
        echo "<script>alert('관리자에게 문의하세요');</script>";
    }
 
    mysqli_close($connect);
?>