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
    <?php include "../include/header.php" ?>
    <!-- //header -->


    <main id="mypage_wrap">
        <div class="mypage_inner container">
            <div class="mypage_side_img"></div>
            <div class="mypage_info">
                <div class="my_profile">
                    <h3>내 프로필</h3>
                    <div class="my_info">
                        <p class="my_id"><img src="../assets/img/ID.jpg" alt="ID" aria-hidden="true">아이디 :
                            <span><?= $_SESSION['youId'] ?></span>
                        </p>
                        <p><img src="../assets/img/PA.jpg" alt="PA" aria-hidden="true">비밀번호 확인 및 수정은 아래의 회원정보수정을 눌러주세요
                        </p>
                        <p class="my_name"><img src="../assets/img/Nam.jpg" alt="ID" aria-hidden="true">이름 :
                            <span><?= $_SESSION['youName'] ?></span>
                        </p>
                        <p class="my_email"><img src="../assets/img/Email.jpg" alt="ID" aria-hidden="true">아이디 :
                            <span><?= $_SESSION['youEmail'] ?></span>
                        </p>
                        <div class="button">
                            <a href="./mypage_info.php">회원정보수정</a>
                        </div>
                    </div>
                </div>
                <div class="my_favorites">
                    <h3>즐겨찾기 목록</h3>
                    <div class="favorites_list">
                        <div class="favorites-card">
                            <a href="#"><img src="../assets/img/my_page01.jpg" alt="my_page01"></a>
                            <!-- php엔 이런식으로 <img src="" alt="my_page01"> -->
                            <p><a href="#" class="my_mu_title">위키드</a></p>
                            <p><a href="#" class="my_mu_theater">블루스퀘어</a></p>
                        </div>
                        <div class="favorites-card">
                            <a href="#"><img src="../assets/img/my_page01.jpg" alt="my_page01"></a>
                            <!-- php엔 이런식으로 <img src="" alt="my_page01"> -->
                            <p><a href="#" class="my_mu_title">위키드</a></p>
                            <p><a href="#" class="my_mu_theater">블루스퀘어</a></p>
                        </div>
                        <div class="favorites-card">
                            <a href="#"><img src="../assets/img/my_page01.jpg" alt="my_page01"></a>
                            <!-- php엔 이런식으로 <img src="" alt="my_page01"> -->
                            <p><a href="#" class="my_mu_title">위키드</a></p>
                            <p><a href="#" class="my_mu_theater">블루스퀘어</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- //main-->

    <?php include "../include/footer.php" ?>
    <!-- //footer -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../script/commons.js"></script>
</body>

</html>