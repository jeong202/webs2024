<?php
include "../connect/connect.php";
include "../connect/session.php";

// echo "<pre>";
// var_dump($_SESSION);
// echo "</pre>";

$memberIdnum = $_SESSION['myuduckId'];

$sql = "SELECT * FROM myuduck WHERE myuduckId = '$memberIdnum'";
$result = $connect->query($sql);

$info = $result->fetch_array(MYSQLI_ASSOC);
$addressAll = $info['youAddress'];
$addressNum = substr($addressAll, 0, 5);
$address = substr($addressAll, 5);
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
                <h2 class="mypage_info_title">회원 정보 수정</h2>
                <div class="mypage_info_form">
                    <form action="mypage_info_Save.php" name="mypage_info_Save" method="post" onsubmit="return mypage_inofChecks();">
                        <fieldset>
                            <legend class="blind">회원 정보 수정</legend>
                            <div class="readonly">
                                <label for="youId" class="required">아이디</label>
                                <input type="text" name="youId" id="youId" placeholder="아이디" class="input__style" value="<?= $info['youId'] ?>" readonly>
                            </div>
                            <p class="msg" id="youIdComment"></p>
                            <div>
                                <label for="youPass" class="required"><em> * </em>비밀번호</label>
                                <input type="password" name="youPass" id="youPass" placeholder="비밀번호" class="input__style">
                                <p class="msg" id="youPassComment"></p>
                            </div>
                            <div>
                                <label for="youPassC" class="required"><em> * </em>비밀번호 확인</label>
                                <input type="password" name="youPassC" id="youPassC" placeholder="비밀번호 확인" class="input__style">
                                <p class="msg" id="youPassCComment"></p>
                            </div>
                            <div>
                                <label for="youName" class="required"><em> * </em>이름</label>
                                <input type="text" name="youName" id="youName" placeholder="이름" value="<?= $info['youName'] ?>" class="input__style">
                                <p class="msg" id="youNameComment"></p>
                            </div>
                            <div class="address">
                                <label for="youAddress1" class="required">주소</label>
                                <div class="check">
                                    <input type="text" id="youAddress1" name="youAddress1" placeholder="우편번호" value="<?= $addressNum ?>" class="input__style">
                                    <div class="btn" id="addressCheck">주소 찾기</div>
                                </div>
                                <label for="youAddress2" class="required blind">주소</label>
                                <input type="text" id="youAddress2" name="youAddress2" placeholder="주소" value="<?= $address ?>" class="input__style">
                                <label for="youAddress3" class="required blind">상세 주소</label>
                                <input type="text" id="youAddress3" name="youAddress3" placeholder="상세 주소" class="input__style">
                                <p class="msg" id="youAddressComment"></p>
                            </div>
                            <label for="youEmail" class="required"><em> * </em>이메일</label>
                            <div class="readonly">
                                <input type="email" name="youEmail" id="youEmail" placeholder="이메일을 입력하세요" value="<?= $_SESSION['youEmail'] ?>" class="input__style" readonly>
                            </div>
                            <p class="msg" id="youEmailComment"></p>
                            <p class="msg" id="youEmailComment"></p>
                            <div>
                                <label for="youPhone" class="required "><em> * </em>연락처</label>
                                <input type="text" id="youPhone" name="youPhone" placeholder="연락처를 적어주세요!" value="<?= $_SESSION['youPhone'] ?>" class="input__style">
                                <p class="msg" id="youPhoneComment"></p>
                            </div>
                            <button type="submit" id="submitBtn" class="mypage_info_btn btn-style3">회원 정보 수정</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
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
    <script src="../script/mypage_info.js"></script>
</body>

</html>