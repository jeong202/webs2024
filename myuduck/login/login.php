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


    <main>13480
    <section class="login_inner">
            <h2 class="blind">로그인</h2>
            <div class="login__from container2">
                <form action="loginSave.php" name="loginSave" method="post">
                    <h2>로그인<span>Login</span></h2>
                    <fieldset>
                        <div>
                            <label for="youId" class="required blind">아이디</label>
                            <input type="text" name="youId" id="youId" placeholder="아이디" class="input__style" required>
                        </div>
                        <div>
                            <label for="youPass" class="required blind">비밀번호</label>
                            <input type="password" name="youPass" id="youPass" placeholder="비밀번호" class="input__style" required>
                        </div>
                        <div class="check">
                            <label for="loginCheck1">
                                로그인 상태 유지
                                <input type="checkbox" name="loginCheck1" id="loginCheck1">
                                <span class="indicator"></span>
                            </label>
                        </div>
                        <button type="submit" id="loginBtn" class="btn-style3">로그인</button>
                        <div class="login__btn">
                            <a href="../join/joinAgree.php" class="joinbtn">회원가입</a>
                            <div class="findbtn">
                                <a href="../find/id_findme.php" class="idfindbtn">아이디 찾기</a>
                                <a href="../find/pass_find.php" class="passfindbtn">비밀번호 찾기</a>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </section>
    </main>
    <!-- //main-->

    <?php include "../include/footer.php"?>
    <!-- //footer -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1/bundled/lenis.min.js"></script>
    <script src="../script/commons.js"></script>
    <script src="../script/login.js"></script>
</body>
</html>