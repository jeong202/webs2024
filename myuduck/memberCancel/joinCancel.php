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
        <section class="join__inner2">
            <h2 class="blind">회원탈퇴</h2>
            <div class="join__from2 container2">
                <h3>회원탈퇴<span>withdrawal from membership</span></h3>
                <form action="joinCancelCheck.php" name="joinCancelCheck" method="post">
                    <fieldset>
                        <div>
                            <label for="youPass" class="required blind">비밀번호</label>
                            <input type="password" name="youPass" id="youPass" placeholder="비밀번호" class="input__style">
                        </div>
                        <div>
                            <label for="youPassC" class="required blind">비밀번호 확인</label>
                            <input type="password" name="youPassC" id="youPassC" placeholder="비밀번호 확인"
                                class="input__style">
                        </div>
                        <div class="cancel__btn">
                            <button type="submit" id="memberShipCancel" class="btn-style3">탈퇴하기</button>
                            <button type="button" id="cancelButton" class="deletebtn btn-style4">취소</button>
                        </div>
                    </fieldset>
                </form>
            </div>

        </section>

    </main>
    <!-- //main-->

    <?php include "../include/footer.php"?>
    <!-- //footer -->

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1/bundled/lenis.min.js"></script>
    <script src="../script/commons.js"></script>
    <script src="../script/cancel.js"></script>
</body>
</html>