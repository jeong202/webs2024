<?php
    include "../connect/connect.php";
    include "../connect/session.php";


?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/commons.css">

    <title>MYUDUCK</title>
    <style>
    </style>
</head>

<body>
    <?php include "../include/header.php"?>
    <!-- //header -->


    <main>
    <div class="joinResultWrap">
            <div class="message1">비밀번호 찾기 완료!</div>
            <div class="img red"></div>
            <div class="message2">회원가입 시 사용한 비밀번호는 <?=$_SESSION['youPass']?>입니다.</div>
            <div class="movehome">
                <a href="../login/login.php">로그인 화면으로 돌아가기</a>
            </div>
        </div>
    </main>
    <!-- //main-->

    <?php include "../include/footer.php"?>
    <!-- //footer -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1/bundled/lenis.min.js"></script>
    <script src="../script/commons.js"></script>
    <script>
        
    </script>
</body>
</html>