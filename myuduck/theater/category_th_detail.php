<?php
include "../connect/connect.php";
include "../connect/session.php";

// echo "<pre>";
// var_dump($_SESSION);
// echo "</pre>";

$theaterId = $_GET['theaterId'];
$youId = $_SESSION['youId'];

$sql = "SELECT * FROM theater WHERE theaterId = $theaterId";
$result = $connect->query($sql);

$theaterAllInfo = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $theaterId = $row['theaterId'];
        $thLogo = $row['thLogo'];
        $thName = $row['thName'];
        $thAddress = $row['thAddress'];
        $thCall = $row['thCall'];
        $thHomepage = $row['thHomepage'];
        $thTransport = $row['thTransport'];
        $thSeatImg = $row['thSeatImg'];
        $thPerform = $row['thPerform'];


        $thPerform = json_decode($row['thPerform'], true);

        $theaterAllInfo[] = array(
            'theaterId' => $theaterId,
            'thLogo' => $thLogo,
            'thName' => $thName,
            'thAddress' => $thAddress,
            'thCall' => $thCall,
            'thHomepage' => $thHomepage,
            'thTransport' => $thTransport,
            'thSeatImg' => $thSeatImg,
            'thPerform' => $thPerform
        );
    }
}

$loggedIn = isset($_SESSION['youId']) ? true : false;

// db 같은 내용이 있는 경우 확인하기 위함
$likeSql = "SELECT * FROM likeTheater WHERE likeTheaterIdNum = '$theaterId' AND youId = '$youId' AND likeStatus = 1 ";
$likeResult = $connect->query($likeSql);
$count = $likeResult->num_rows;
// echo $count;
?>
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/commons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">



    <title>극장 카테고리</title>
    <style>
    </style>
</head>

<body>
    <?php include "../include/header.php" ?>
    <!-- //header -->

    <main>
        <div class="theater__inners">
            <div class="theater__info">
                <div class="th__detail_info">
                    <div class="theater_detail">
                        <div class="logo_img">
                            
                            <img src=<?= $thLogo ?> alt="<?= $thName ?>">
                        </div>
                        <div class="theater__detail__title">
                            <h2 class="logo"><?= $thName ?></h2>
                            <div class="logo_cont">
                                <div class="theater__address">주소 : <span><?= $thAddress ?></span></div>
                                <div class="theater__callnumber">전 화 : <span><?= $thCall ?></span></div>
                                <div class="theater__homepage"><a href="<?= $thHomepage ?>">공식 홈페이지 바로가기</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="theater__detail__info container">
                    <h1>공연장 정보 <span>theater information</span></h1>
                    <div class="theater__detail__cont">
                        <section class="theater_transport">
                            <div class="main_theater_title">
                                <h3>오시는 길</h3>
                            </div>
                            <div class="transport_info">
                                <?= $thTransport ?>
                            </div>
                        </section>
                        <section class="theater_seat_info">

                            <div class="main_theater_title">
                                <h3>좌석 정보</h3>
                            </div>
                            <div class="seat_img">
                                <img src=<?= $thSeatImg ?> alt="좌석 정보">
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- //main-->

    <?php include "../include/footer.php" ?>
    <!-- //footer -->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1/bundled/lenis.min.js"></script>
    <script src="../script/commons.js"></script>

    <script>
    </script>
    <script>
        window.addEventListener('load', getInitialLikeStatus);

        const likeButton = document.querySelector(".logo_img .like-button");
        let checkcount = <?= $count ?>;

        likeButton.addEventListener('click', function () {
            if(<?= $loggedIn ? 'true' : 'false' ?>){
                if (!likeButton.disabled) {
                    likeButton.disabled = true;

                    const isClicked = likeButton.classList.contains('clicked');

                    if (checkcount > 0) {
                        likeButton.classList.remove('clicked');
                        this.innerHTML = '☆ 찜버튼';
                        sendLikeData(true);
                        checkcount = 0;
                    } else {
                        likeButton.classList.add('clicked');
                        this.innerHTML = '★ 찜버튼';
                        sendLikeData(true);
                        checkcount = 1;
                    }

                    // 이미 AJAX 요청 이후에 getInitialLikeStatus를 호출하므로 여기서는 호출하지 않아도 됩니다.
                } 
            } else {
                    alert("로그인을 해주세요.");
                    window.location.href = '../login/login.php';
                }
        });

        function sendLikeData(isClicked) {
            const likeTheaterIdNum = <?= $theaterId ?>;
            const likethLogo = '<?= $thLogo ?>';
            const likethName = '<?= $thName ?>';

            $.ajax({
                type: 'POST',
                url: '../like/likeTh.php',
                data: {
                    likeTheaterIdNum: likeTheaterIdNum,
                    likethLogo: likethLogo,
                    likethName: likethName,
                    isClicked: isClicked
                },
                success: function (response) {
                    console.log(response);

                    if (response.status === 'success') {
                        // AJAX 응답을 성공적으로 처리
                    } else {
                        // 에러 응답을 처리
                    }

                    likeButton.disabled = false;
                    getInitialLikeStatus();  // like 상태를 업데이트한 후에 getInitialLikeStatus를 호출합니다.
                },
                error: function (xhr, status, error) {
                    console.error('AJAX 요청 실패:', error);
                    likeButton.disabled = false;
                }
            });
        }

        function getInitialLikeStatus() {
            $.ajax({
                type: 'POST',
                url: '../like/likeThStatus.php',
                data: {
                    likeTheaterId: <?= $theaterId ?>
                },
                success: function (response) {
                    console.log(response);

                    if (response.status === 'success') {
                        const initialLikeStatus = response.initialLikeStatus;

                        if (initialLikeStatus && initialLikeStatus.likeStatus === '1') {
                            likeButton.classList.add('clicked');
                            likeButton.innerHTML = '★ 찜버튼';
                            checkcount = 1;
                        } else {
                            likeButton.classList.remove('clicked');
                            likeButton.innerHTML = '☆ 찜버튼';
                            checkcount = 0;
                        }
                    } else {
                        // 에러 응답을 처리
                    }
                },
                error: function (xhr, status, error) {
                    console.error('AJAX 요청 실패:', error);
                }
            });
        }
        
    </script>

</body>

</html>