<?php
include "../connect/connect.php";
include "../connect/session.php";


$musicalId = isset($_GET['musicalId']) ? $_GET['musicalId'] : die('musicalId is not defined');

$sql = "SELECT * FROM musical WHERE musicalId = $musicalId";
$result = $connect->query($sql);

$musicalId = $_GET['musicalId'];
$youId = $_SESSION['youId'];

$musicalAllInfo = array();

if (!$result) {
    die("Query failed: " . $connect->error);
}


if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $musicalId = $row['musicalId'];
        $muNameKo = $row['muNameKo'];
        $muPlace = $row['muPlace'];
        $muDate = $row['muDate'];
        $muTime = $row['muTime'];
        $muAge = $row['muAge'];
        $muImg = $row['muImg'];
        $muDetailImg = $row['muDetailImg'];

        // $musicalAllInfo[] = array(
        //     'musicalId' => $musicalId,
        //     'muNameKo' => $muNameKo,
        //     'muPlace' => $muPlace,
        //     'muImg' => $muImg,
        // );
    }
}

$loggedIn = isset($_SESSION['youId']) ? true : false;

// db 같은 내용이 있는 경우 확인하기 위함
$likeSql = "SELECT * FROM likeMusical WHERE likeMusicalIdNum = '$musicalId' AND youId = '$youId' AND likeStatus = 1";
$likeResult = $connect->query($likeSql);
$count = $likeResult->num_rows;
// echo $count;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/commons2.css">
    <link rel="icon" href="../assets/img/favicon.png" type="image/x-icon">

    <!-- rating -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <title>MYUDUCK</title>
</head>

<body>
    <?php include "../include/header.php" ?>
    <!-- //header -->

    <main id="mu_de">
        <div class="categorieWrap">
            <div class="desc1">
                <div class="mu__container">
                    <div class="poster">
                        <div>
                            
                            <?php if ($count > 0){ ?>
                                <button class="like-button clicked">
                                    ★ 찜버튼
                                </button>
                                <?php } else { ?>
                                    <button class="like-button clicked">
                                        ☆ 찜버튼
                                    </button>
                                <?php } ?>

                        </div>
                        <img src="<?= $muImg ?>" alt="<?= $muNameKo ?> 포스터">
                    </div>
                    <div class="ts">
                        <div class="d1t1">뮤지컬 〈<?= $muNameKo ?>〉</div>
                        <div class="d1t2">
                            장소 : <?= $muPlace ?><br>
                            공연기간 : <?= $muDate ?><br>
                            공연시간 : <?= $muTime ?><br>
                            관람연령 : <?= $muAge ?>
                        </div>
                        <div class="rating mt20">
                            <span class="rating_result"></span>
                            <i class="rating_star far fa-star"></i>
                            <i class="rating_star far fa-star"></i>
                            <i class="rating_star far fa-star"></i>
                            <i class="rating_star far fa-star"></i>
                            <i class="rating_star far fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="title">
                공연 정보 <span>Musical information</span>
            </div>

            <div class="desc2Wrap container mb100">
                <div class="info">
                    <div class="d2t2">
                        <div>공연안내</div>
                        <div class="line2"></div>
                    </div>
                    <div class="infoimg">
                        <img src="<?= $muDetailImg ?>" alt="<?= $muNameKo ?> 상세 이미지">
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
    <script src="../script/star.js"></script>
</body>

</html>