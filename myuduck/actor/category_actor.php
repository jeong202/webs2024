<?php
include "../connect/connect.php";
include "../connect/session.php";

// 배우와 연극 정보를 저장할 배열 초기화
$actorsWithPerformances = array();

// 배우 테이블 정보 가져오기
$sql = "SELECT * FROM actor ORDER BY actorId ASC";
$result = $connect->query($sql);

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

                // 연도만 추출
                preg_match('/\d{4}/', $acPerformDate, $matches);
                $year = $matches[0];

                // 배우와 연극 정보를 배열에 추가
                $performances[] = "$acPerformName($year)";
            }
        }

        // 배우 정보와 연극 정보를 묶어서 배열에 저장
        $actorsWithPerformances[] = array(
            'actorId' => $actorId,
            'acNameKo' => $acNameKo,
            'acNameEn' => $acNameEn,
            'acOccupation' => $acOccupation,
            'acDOB' => $acDOB,
            'performances' => $performances,
            'acImg' => $acImg,
            'acImgDetail' => $acImgDetail
        );
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
    <link rel="icon" href="../assets/img/favicon.png" type="image/x-icon">
    <style>

    </style>
</head>

<body>
    <?php include "../include/header.php" ?>
    <!-- //header -->


    <div class="fix_image">
        <img src="../assets/img/category_musical.png" alt="이미지" class="intro_img">
    </div>

    <main id="category_wrap">
        <div class="category_inner container">
            <h1>뮤지컬 배우</h1>
            <div class="actor_list">
                <div class="actor_header">
                    <span class="actor">배우</span><span class="occupation">직업</span><span class="recent-performance">최근 공연</span>
                </div>
                <div class="actor_main">
                    <?php foreach ($actorsWithPerformances as $actorInfo) : ?>
                        <div class="actor-card">
                            <div class="info_actor">
                                <a href="category_ac_detail.php?actorId=<?= $actorInfo['actorId'] ?>">
                                    <img src="<?= $actorInfo['acImg'] ?>" alt="<?= $actorInfo['acNameKo'] ?> 사진">
                                </a>
                                <h2><a href="category_ac_detail.php?actorId=<?= $actorInfo['actorId'] ?>"><?= $actorInfo['acNameKo'] ?></a></h2>
                            </div>
                            <div class="info_occupation">
                                <p><?= $actorInfo['acOccupation'] ?></p>
                            </div>
                            <div class="info_perform">
                                <p><?= implode('<br>', $actorInfo['performances']) ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </main>

    <?php include "../include/footer.php" ?>
    <!-- //footer -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../script/commons.js"></script>
    <script>

    </script>
</body>

</html>