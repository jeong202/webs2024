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


    <main>
        <section class="join__inner3">
            <h2 class="blind">회원가입</h2>
            <div class="join__from2 container2">
                <h3>회원가입 <span>Sing up</span></h3>
                <form action="joinResult.php" name="joinResult" method="post" onsubmit="return joinChecks();">
                    <fieldset>
                        <legend class="blind">회원가입 영역</legend>
                        <div class="check">
                            <label for="youId" class="required blind">아이디</label>
                            <input type="text" name="youId" id="youId" placeholder="아이디" class="input__style">
                            <div class="btn" onclick="idChecking()">아이디 중복 검사</div>
                        </div>
                        <p class="msg" id="youIdComment"></p>
                        <div>
                            <label for="youPass" class="required blind">비밀번호</label>
                            <input type="password" name="youPass" id="youPass" placeholder="비밀번호" class="input__style">
                            <p class="msg" id="youPassComment"></p>
                        </div>
                        <div>
                            <label for="youPassC" class="required blind">비밀번호 확인</label>
                            <input type="password" name="youPassC" id="youPassC" placeholder="비밀번호 확인" class="input__style">
                            <p class="msg" id="youPassCComment"></p>
                        </div>
                        <div>
                            <label for="youName" class="required">이름 *</label>
                            <input type="text" name="youName" id="youName" placeholder="이름을 입력하세요" class="input__style">
                            <p class="msg" id="youNameComment"></p>
                        </div>
                        <div class="join">
                            <label for="youAddress1" class="required">주소</label>
                            <div class="check">
                                <input type="text" id="youAddress1" name="youAddress1" placeholder="우편번호" class="input__style">
                                <div class="btn" id="addressCheck">주소 찾기</div>
                            </div>
                            <label for="youAddress2" class="required blind">주소</label>
                            <input type="text" id="youAddress2" name="youAddress2" placeholder="주소" class="input__style">
                            <label for="youAddress3" class="required blind">상세 주소</label>
                            <input type="text" id="youAddress3" name="youAddress3" placeholder="상세 주소" class="input__style">
                            <p class="msg" id="youAddressComment"></p>
                        </div>
                        <label for="youEmail" class="required">이메일 *</label>
                        <div class="check">
                            <input type="email" name="youEmail" id="youEmail" placeholder="이메일을 입력하세요" class="input__style">
                            <div class="btn" onclick="emailChecking()">이메일 중복 검사</div>
                        </div>
                        <p class="msg" id="youEmailComment"></p>
                        <p class="msg" id="youEmailComment"></p>
                        <div>
                            <label for="youPhone" class="required blind">연락처</label>
                            <input type="text" id="youPhone" name="youPhone" placeholder="연락처를 적어주세요!" class="input__style">
                            <p class="msg" id="youPhoneComment"></p>
                        </div>
                        <button type="submit" id="submitBtn" class="join_btn btn-style3">회원가입 완료</button>
                    </fieldset>
                </form>
            </div>

        </section>

    </main>
    <!-- //main-->

    <?php include "../include/footer.php" ?>
    <!-- //footer -->

    <div id="layer">
        <img src="//t1.daumcdn.net/postcode/resource/images/close.png" id="btnCloseLayer" alt="닫기 버튼">
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1/bundled/lenis.min.js"></script>
    <script src="../script/commons.js"></script>
    <script src="../script/join.js"></script>
</body>

</html>