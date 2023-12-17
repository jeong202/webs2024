<?php
include "../connect/connect.php";
include "../connect/session.php";
include "../connect/sessionCheck.php";

$loginId = $_SESSION['youId'];

$likeactorlist = array();

$ACsql = "SELECT * FROM likeActor WHERE likeStatus = 1 AND youId = ? ORDER BY likeActorId DESC LIMIT 3";

$stmt = $connect->prepare($ACsql);
$stmt->bind_param("s", $loginId);
$stmt->execute();
$ACresult = $stmt->get_result();



if ($ACresult->num_rows > 0) {
    while ($ACrow = $ACresult->fetch_assoc()) {
        $likeActorIdNum = $ACrow['likeActorIdNum'];
        $youId = $ACrow['youId'];
        $likeACImg = $ACrow['likeACImg'];
        $likeACName = $ACrow['likeACName'];
        $likeACStatus = $ACrow['likeStatus'];

        // 데이터 배열 추가
        $likeactorlist[] = array(
            'likeActorIdNum' => $likeActorIdNum,
            'youId' => $youId,
            'likeACImg' => $likeACImg,
            'likeACName' => $likeACName,
            'likeACStatus' => $likeACStatus
        );
    }
}

// 뮤지컬 찜목록

$likemusiclist = array();

// $MUsql = "SELECT * FROM likeMusical WHERE likeStatus = 1  AND youId = ? ORDER BY likeMusicalId DESC LIMIT 3";

$MUsql = "SELECT lm.*, t.theaterId 
          FROM likeMusical lm
          INNER JOIN theater t ON TRIM(lm.likemuPlace) = TRIM(t.thName)
          WHERE lm.likeStatus = 1 AND lm.youId = ? 
          ORDER BY lm.likeMusicalId DESC LIMIT 3";

$stmt = $connect->prepare($MUsql);
$stmt->bind_param("s", $loginId);
$stmt->execute();
$MUresult = $stmt->get_result();


if ($MUresult->num_rows > 0) {
    while ($MUrow = $MUresult->fetch_assoc()) {
        $likeMusicalIdNum = $MUrow['likeMusicalIdNum'];
        $youId = $MUrow['youId'];
        $likemuImg = $MUrow['likemuImg'];
        $likemuName = $MUrow['likemuName'];
        $likemuPlace = $MUrow['likemuPlace'];
        $likemuStatus = $MUrow['likeStatus'];
        $theaterId = $MUrow['theaterId']; // 추가된 부분

        // 데이터 배열 추가
        $likemusiclist[] = array(
            'likeMusicalIdNum' => $likeMusicalIdNum,
            'youId' => $youId,
            'likemuImg' => $likemuImg,
            'likemuName' => $likemuName,
            'likemuPlace' => $likemuPlace,
            'likemuStatus' => $likemuStatus,
            'theaterId' => $theaterId // 추가된 부분
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
                <div class="my_profile">
                    <h3>내 프로필</h3>
                    <div class="my_info">
                        <p class="my_id"><img src="../assets/img/ID.jpg" alt="ID" aria-hidden="true">아이디 :
                            <span><?= $_SESSION['youId'] ?></span>
                        </p>
                        <p><img src="../assets/img/PA.jpg" alt="PA" aria-hidden="true">비밀번호 확인 및 수정은 아래의 회원정보수정을 눌러주세요
                        </p>
                        <p class="my_name"><img src="../assets/img/Nam.jpg" alt="ID" aria-hidden="true">이름 :
                            <span><?= $_SESSION['youName'] ?></span>
                        </p>
                        <p class="my_email"><img src="../assets/img/Email.jpg" alt="ID" aria-hidden="true">이메일 :
                            <span><?= $_SESSION['youEmail'] ?></span>
                        </p>
                        <div class="button">
                            <a href="./mypage_info.php">회원정보수정</a>
                        </div>
                    </div>
                </div>
                <div class="my_favorites">
                    <h3>찜 목록</h3>
                    <div class="favorites_list">
                        <div class="favorites_list_info_title">
                            <a href="favorites_actor.php" class="favorites_list_title actor">배우 찜목록</a>
                            <a href="favorites_actor.php" class="favorites_list_more">+ 더보기</a>
                        </div>

                        <?php if ($ACresult->num_rows > 0) { ?>
                            <?php for ($i = 0; $i < count($likeactorlist); $i++) { ?>
                                <?php if ($likeactorlist[$i]['likeACStatus'] == 1) { ?>
                                    <div class="favorites-card">
                                        <a href="../actor/category_ac_detail.php?actorId=<?= $likeactorlist[$i]['likeActorIdNum'] ?>" class="favorites_img"><img src="<?= $likeactorlist[$i]['likeACImg'] ?>" alt="<?= $likeactorlist[$i]['likeACName'] ?>"></a>
                                        <p><a href="../actor/category_ac_detail.php?actorId=<?= $likeactorlist[$i]['likeActorIdNum'] ?>" class="my_ac_title"><?= $likeactorlist[$i]['likeACName'] ?></a></p>
                                    </div>
                                <?php } ?>
                            <?php } ?>
                        <?php } else { ?>
                            <span>배우 찜 목록이 비어있습니다.</span>
                        <?php } ?>

                    </div>
                    <div class="favorites_list">
                        <div class="favorites_list_info_title">
                            <a href="favorites_music.php" class="favorites_list_title music">뮤지컬 찜목록</a>
                            <a href="favorites_music.php" class="favorites_list_more">+ 더보기</a>
                        </div>

                        <?php if ($MUresult->num_rows > 0) { ?>
                            <?php for ($i = 0; $i < count($likemusiclist); $i++) { ?>
                                <?php if ($likemusiclist[$i]['likemuStatus'] == 1) { ?>
                                    <div class="favorites-card">
                                        <a href="../musical/category_mu_detail.php?musicalId=<?= $likemusiclist[$i]['likeMusicalIdNum'] ?>" class="favorites_img"><img src="<?= $likemusiclist[$i]['likemuImg'] ?>" alt="<?= $likemusiclist[$i]['likemuName'] ?>"></a>
                                        <p><a href="../musical/category_mu_detail.php?musicalId=<?= $likemusiclist[$i]['likeMusicalIdNum'] ?>" class="my_mu_title"><?= $likemusiclist[$i]['likemuName'] ?></a></p>
                                        <p><a href="../theater/category_th_detail.php?theaterId=<?= $likemusiclist[$i]['theaterId'] ?>" class="my_mu_theater"><?= $likemusiclist[$i]['likemuPlace'] ?></a></p>
                                    </div>
                                <?php } ?>
                            <?php } ?>
                        <?php } else { ?>
                            <span>뮤지컬 찜 목록이 비어있습니다.</span>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- //main-->

    <?php include "../include/footer.php" ?>
    <!-- //footer -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1/bundled/lenis.min.js"></script>
    <script src="../script/commons.js"></script>
</body>

</html>