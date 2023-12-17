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
    <section class="find__inner">
            <h2 class="blind">아이디 찾기</h2>
            <div class="find__from container2">
                <h3>비밀번호 찾기<span>Find PASSWORD</span></h3>
                <span>비밀번호는 이름, 가입한 아이디, 이메일을 통해 찾으실 수 있습니다.</span>
                <form action="find_Pass.php" name="find" method="post">
                    <fieldset>
                        <div>
                            <label for="youName" class="required blind">이름</label>
                            <input type="text" name="youName" id="youName" placeholder="이름" class="input__style" required>
                        </div>
                        <div>
                            <label for="youId" class="required blind">아이디</label>
                            <input type="text" name="youId" id="youId" placeholder="아이디" class="input__style" required>
                        </div>
                        <div>
                            <label for="youEmail" class="required blind">이메일</label>
                            <input type="email" name="youEmail" id="youEmail" placeholder="이메일을 입력하세요" class="input__style" required>
                        </div>
                            <button type="submit" id="passBtn" class="btn-style3">찾기</button>
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
    <script src="../script/passfind.js"></script>
</body>
</html>