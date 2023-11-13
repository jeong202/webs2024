<?php
include "../connect/connect.php";

$theaterId = $_GET['theaterId'];

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
                            <div>
                                <button class="like-button">☆ 찜버튼</button>
                            </div>
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
                            <div class="rating mt20">
                                <span class="rating_result">
                                </span>
                                <i class="rating_star far fa-star"></i>
                                <i class="rating_star far fa-star"></i>
                                <i class="rating_star far fa-star"></i>
                                <i class="rating_star far fa-star"></i>
                                <i class="rating_star far fa-star"></i>
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
    <script src="../script/commons.js"></script>
    <script src="../script/checkBox.js"></script>
    <script src="../script/star.js"></script>

    <script>
        //별점기능
        const ratingStars = [...document.getElementsByClassName("rating_star")];
        const ratingResult = document.querySelector(".rating_result");

        printRatingResult(ratingResult);

        function executeRating(stars, result) {
            const starClassActive = "rating_star fas fa-star";
            const starClassUnactive = "rating_star far fa-star";
            const starsLength = stars.length;
            let i;
            stars.map((star) => {
                star.onclick = () => {
                    i = stars.indexOf(star);

                    if (star.className.indexOf(starClassUnactive) !== -1) {
                        printRatingResult(result, i + 1);
                        for (i; i >= 0; --i) stars[i].className = starClassActive;
                    } else {
                        printRatingResult(result, i);
                        for (i; i < starsLength; ++i) stars[i].className = starClassUnactive;
                    }
                };
            });
        }

        function printRatingResult(result, num = 0) {
            result.textContent = `${num}/5`;
        }

        executeRating(ratingStars, ratingResult);

        //찜버튼
        const likeButton = document.querySelector('.like-button');

        likeButton.addEventListener('click', function() {
            this.classList.toggle('clicked');

            if (this.classList.contains('clicked')) {
                this.innerHTML = '★ 찜버튼';
            } else {
                this.innerHTML = '☆ 찜버튼';
            }
        });
    </script>

</body>

</html>