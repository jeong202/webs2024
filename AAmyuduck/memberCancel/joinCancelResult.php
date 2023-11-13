<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    // echo "<pre>";
    // var_dump($_SESSION);
    // echo "</pre>";
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
    <main>
        <div class="joinResultWrap">
            <div class="message1">회원 탈퇴가 완료되었습니다!</div>
            <div class="img blue"></div>
            <div class="message2">다시 만나는 날까지 안녕..</div>
            <div class="movehome">
                <a href="#">메인페이지로가기</a>
            </div>
        </div>
    </main>
    </main>
    <!-- //main-->

    <?php include "../include/footer.php"?>
    <!-- //footer -->

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../script/commons.js"></script>
</body>


</html>