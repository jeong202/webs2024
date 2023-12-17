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
        <!-- join__inner -->
        <section class="join__inner2">
            <h2 class="blind">이용약관</h2>
            <div class="join__agree__cancel container2">
                <div class="agree__box">
                    <h3>회원탈퇴<span>Withdrawal From Membership</span></h3>
                    <span>
                        회원 탈퇴하기에 앞서 안내사항을 반드시 확인해주세요.
                    </span>
                    <div class="scroll2 scroll__style">**회원탈퇴 동의 약관**

                        본 약관은 [회사명] (이하 "회사"라 함)의 웹사이트 또는 애플리케이션을 통해 회원 가입한 개인 또는 법인 회원 (이하 "회원"이라 함)이 회사와의 서비스 이용 및 계정
                        탈퇴와 관련하여 준수해야 하는 조건과 규정을 규정합니다. 이 약관에 동의함으로써 회원은 회사의 정책과 규칙을 이해하고 수용함을 확인합니다.

                        <span>**1. 탈퇴 절차**</span>

                        1.1 회원탈퇴를 원하는 회원은 웹사이트 또는 애플리케이션 내에서 "회원탈퇴" 또는 유사한 옵션을 선택합니다.
                        1.2 회원탈퇴 절차를 시작하면, 회원은 본인 확인 절차를 거치게 됩니다.
                        1.3 본인 확인이 완료되면, 회원은 회원탈퇴 절차를 계속 진행합니다.
                        1.4 회사는 회원탈퇴 절차 동안 필요한 추가 정보나 동의 사항을 요청할 수 있습니다.

                        <span>**2. 정보 보관 및 삭제**</span>

                        2.1 회원탈퇴가 완료되면, 회원 계정 및 관련 정보는 영구적으로 삭제됩니다. 이로써 회원의 개인 정보는 더 이상 회사에서 보유되지 않습니다.
                        2.2 회사는 회원탈퇴 절차 진행 중에 일부 정보를 보존할 수 있습니다. 이 정보는 법적 의무 준수, 분쟁 해결, 사기 예방 및 기타 목적으로 사용될 수 있습니다.
                        2.3 회원탈퇴 이후에도 회사의 개인 정보 보호 정책이 적용되며, 탈퇴 전의 정보 처리에 관한 정보는 해당 정책을 따릅니다.

                        <span>**3. 책임과 제한**</span>

                        3.1 회원탈퇴 동의로, 회원은 본 약관에 명시된 내용을 이해하고 동의함을 확인합니다. 회원탈퇴로 인한 손해나 어떠한 책임도 회사에게 지시 않음을 인정합니다.
                        3.2 회원탈퇴 이후에도 관련 법률 및 규정을 준수할 책임은 회원에게 있습니다.

                        본 약관은 [약관 동의 날짜]에 발효되며, 회사는 이를 변경할 권리를 갖습니다. 변경된 약관은 회사의 웹사이트 또는 애플리케이션을 통해 공지됩니다. 변경된 약관에 동의하지
                        않는 경우, 회원은 회원탈퇴를 선택할 수 있습니다.
                    </div>
                    <div class="check">
                        <label for="agreeCheck">
                            안내사항을 모두 확인하였으며, 이에 동의합니다.
                            <input type="checkbox" name="agreeCheck" id="agreeCheck">
                            <span class="indicator"></span>
                        </label>
                    </div>
                </div>
                <div class="agree__btn">
                    <button id="cancelButton" class="joindrop btn-style">닫기</button>
                    <button id="agreeButton" class="join_btn btn-style2">확인</button>
                </div>
            </div>
        </section>


    </main>
    <!-- //main-->

    <?php include "../include/footer.php"?>
    <!-- //footer -->

    
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1/bundled/lenis.min.js"></script>
    <script src="../script/commons.js"></script>
    <script src="../script/cancelBox.js"></script>
</body>
</html>