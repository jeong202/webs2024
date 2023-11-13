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
    <link rel="stylesheet" href="../assets/css/commons2.css">

    <title>MYUDUCK</title>
    <style>
    </style>
</head>

<body>
    <?php include "../include/header.php"?>
    <!-- //header -->


    <main id="parallax_cont">
        <section id="section1" class="parallax_item">
            <span class="parallax_item_num">01</span>
            <div class="parallax_item_img"></div>
            <div class="parallax_text">
                <div class="parallax_item_title">빨래</div>
                <p class="parallax_item_desc">서울살이 5년차, 나영. 집세와 나이는 늘어가지만 꿈은 닳아 지워진 지 오래다.<br>
                    작가가 되고 싶었던 꿈과는 달리, 나영의 직업은 서점 직원.</p>
            </div>
        </section>
        <!-- //section1 -->

        <section id="section2" class="parallax_item">
            <span class="parallax_item_num">02</span>
            <div class="parallax_item_img"></div>
            <div class="parallax_text">
                <div class="parallax_item_title">프랑켄슈타인</div>
                <p class="parallax_item_desc">만약 신이 없다면 누가 이 세상을 이런 지옥으로 만들 수 있었을까?"<br><br>
                    19세기 유럽, 나폴레옹 전쟁 당시 스위스 제네바 출신의 과학자 빅터 프랑켄슈타인은<br>
                    전쟁터에서 '죽지 않는 군인'에 대한 연구를 진행하던 중 신체접합술의 귀재 앙리 뒤프레를 만나게 된다.</p>
            </div>

        </section>
        <!-- //section2 -->

        <section id="section3" class="parallax_item">
            <span class="parallax_item_num">03</span>
            <div class="parallax_item_img"></div>
            <div class="parallax_text">
                <div class="parallax_item_title">더데빌</div>
                <p class="parallax_item_desc">"빛과 어둠은 항상 함께이니... 빛도 어둠도 인간의 선택"<br><br>
                    시대와 국경을 초월하는 '유혹'과 '선택'</p>
            </div>
        </section>
        <!-- //section3 -->

        <section id="section4" class="parallax_item">
            <span class="parallax_item_num">04</span>
            <div class="parallax_item_img"></div>
            <div class="parallax_text">
                <div class="parallax_item_title">레베카</div>
                <p class="parallax_item_desc">"내게 드 윈터 부인은 이 세상 하나뿐인데!"<br><br>
                    불의의 사고로 아내 레베카를 잃고 힘든 나날을 보내고 있는 막심 드 윈터,<br>
                    그는 몬테카를로 여행 중 우연히 '나'를 만나 사랑에 빠지게 된다.<br>
                    행복한 결혼식을 올린 두 사람은 막심의 저택인 맨덜리에서 함께 생활하게 되는데···</p>
            </div>

        </section>
        <!-- //section4 -->

        <section id="section5" class="parallax_item">
            <span class="parallax_item_num">05</span>
            <div class="parallax_item_img"></div>
            <div class="parallax_text">
                <div class="parallax_item_title">팬텀</div>
                <p class="parallax_item_desc">세상이 무너진 이 순간, 너의 음악이 되리라!<br><br>
                    19세기 말 파리 오페라극장, 천재적인 재능을 가졌으나 흉측한 얼굴 탓에 오페라극장 지하에서 유령처럼 숨어 지내는 에릭.<br>
                    우연히 천상의 목소리를 가진 크리스틴 다에의 노랫소리를 듣고 단번에 매료된 그는<br>
                    크리스틴을 오페라극장의 새로운 디바로 만들기로 결심하고 매일 밤 몰래 비밀스러운 레슨을 시작한다.
                </p>
            </div>

        </section>
        <!-- //section5 -->
    </main>
    <!-- //main-->

    <?php include "../include/footer.php"?>
    <!-- //footer -->

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../script/commons.js"></script>
    <script src="../script/checkBox.js"></script>
</body>


</html>