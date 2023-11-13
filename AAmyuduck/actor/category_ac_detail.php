<?php
include "../connect/connect.php";

// URL에서 actorId를 가져옴
$actorId = $_GET['actorId'];

// 해당 actorId에 대한 배우 정보 가져오기
$sql = "SELECT * FROM actor WHERE actorId = $actorId";
$result = $connect->query($sql);

$actorsWithPerformances = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $actorId = $row['actorId'];
        $acNameKo = $row['acNameKo'];
        $acNameEn = $row['acNameEn'];
        $acOccupation = $row['acOccupation'];
        $acDOB = $row['acDOB'];
        $acImg = $row['acImg'];
        $acImgDetail = $row['acImgDetail'];

        // 연극 정보 가져오기
        $sql2 = "SELECT * FROM ac_perform WHERE actorId = $actorId";
        $result2 = $connect->query($sql2);
        $performances = array();

        if ($result2->num_rows > 0) {
            while ($row2 = $result2->fetch_assoc()) {
                $acPerformName = $row2['acPerformName'];
                $acPerformDate = $row2['acPerformDate'];
                $acPerformPlace = $row2['acPerformPlace'];
                $acPerformRole = $row2['acPerformRole'];

                $sql3 = "SELECT muImg FROM musical WHERE muNameKo = '$acPerformName'";
                $result3 = $connect->query($sql3);
                $muImg = '';

                if ($result3->num_rows > 0) {
                    $row3 = $result3->fetch_assoc();
                    $muImg = $row3['muImg'];
                }

                // 연도만 추출
                preg_match('/\d{4}/', $acPerformDate, $matches);
                $year = $matches[0];

                // 배우와 연극 정보를 배열에 추가
                $performances[] = array(
                    'acPerformName' => $acPerformName,
                    'acPerformDate' => $acPerformDate,
                    'acPerformPlace' => $acPerformPlace,
                    'acPerformRole' => $acPerformRole,
                    'muImg' => $muImg,
                );
            }
        }

        $actorData = array(
            'actorId' => $actorId,
            'acNameKo' => $acNameKo,
            'acNameEn' => $acNameEn,
            'acOccupation' => $acOccupation,
            'acDOB' => $acDOB,
            'acImg' => $acImg,
            'acImgDetail' => $acImgDetail,
            'performances' => $performances
        );

        $actorsWithPerformances[] = $actorData;
    }
}
?>
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MYUDUCK</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/commons2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>

<body>
    <?php include "../include/header.php" ?>

    <!-- //header -->


    <div class="dtail_fix_image">
        <img src="../assets/img/detail_image.jpg" alt="이미지" class="intro_img">
        <div class="intro_actor">

            <div class="image_wrap">
                <div>
                    <button class="like-button">☆ 찜버튼</button>
                </div>
                <img src="<?= $acImgDetail ?>" alt="<?= $acNameKo ?>상세 사진">
            </div>
            <div class="intro_info">
                <div class="name">
                    <h1><?= $acNameKo ?></h1>
                    <h1><?= $acNameEn ?></h1>
                </div>
                <p class="occupation">직업 : <?= $acOccupation ?></p>
                <p class="birthdate">생년월일 : <?= $acDOB ?></p>

                <div class="rating">
                    <span class="rating_result">
                    </span>
                    <i class="rating_star far fa-star"></i>
                    <i class="rating_star far fa-star"></i>
                    <i class="rating_star far fa-star"></i>
                    <i class="rating_star far fa-star"></i>
                    <i class="rating_star far fa-star"></i>
                </div>
                <!-- <a href="https://www.instagram.com/actor.zooooo/" class="sns"><img src="../assets/img/instar.svg" alt="">배우 인스타 바로가기</a> -->
            </div>
        </div>
    </div>

    <main id="category_ac_wrap">
        <div class="category_ac_inner">
            <div class="main_actor container">
                <h3>배우 정보 <span>Actor information</span></h3>
                <div class="main_actor_title">
                    <h4>현재 출연작 & 출연 예정작</h4>
                </div>
                <div class="recent_work">
                    <?php foreach ($actorData['performances'] as $performance) : ?>
                        <div class="work-card">
                            <div class="ac_img_wrap">
                                <img src=<?= $performance['muImg'] ?> alt="<?= $performance['acPerformName'] ?> 이미지">
                            </div>
                            <div class="ac_text_wrap">
                                <h3 class="ac_musical"><?= $performance['acPerformName'] ?></h3>
                                <p class="ac_date"><?= $performance['acPerformDate'] ?></p>
                                <p class="ac_theater"><?= $performance['acPerformPlace'] ?></p>
                                <p class="ac_role"><?= $performance['acPerformRole'] ?></p>
                            </div>
                        </div>
                    <?php endforeach ?>
                    <!-- //work-card -->
                </div>
            </div>
        </div>
    </main>



    <?php include "../include/footer.php" ?>
    <!-- //footer -->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="../script/star.js"></script>
    <script>

    </script>
</body>

</html>