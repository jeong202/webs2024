<?php
include "../connect/connect.php";
include "../connect/session.php";
include "../connect/sessionCheck.php";

$loginId = $_SESSION['youId'];

// 뮤지컬 찜목록
// $likemusiclist = array();

// $MUsql = "SELECT * FROM likeMusical WHERE likeStatus = 1 AND youId = $loginId ORDER BY likeMusicalId ASC";
// $MUresult = $connect->query($MUsql);

$likemusiclist = array();

$MUsql = "SELECT * FROM likeMusical WHERE likeStatus = 1  AND youId = ? ORDER BY likeMusicalId ASC";

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

        // 데이터 배열 추가
        $likemusiclist[] = array(
            'likeMusicalIdNum' => $likeMusicalIdNum,
            'youId' => $youId,
            'likemuImg' => $likemuImg,
            'likemuName' => $likemuName,
            'likemuPlace' => $likemuPlace,
            'likemuStatus' => $likemuStatus
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
                <div class="my_favorites_cont">
                    <h3>뮤지컬 찜 목록</h3>
                    <div class="favorites_cont_list scroll__style">             
                        <?php for ($i = 0; $i < count($likemusiclist); $i++) {
                            if ($likemusiclist[$i]['likemuStatus'] == 1) { ?>
                                <div class="favorites_cont-card">
                                    <a href="../musical/category_mu_detail.php?musicalId=<?= $likemusiclist[$i]['likeMusicalIdNum'] ?>" class="favorites_cont_img"><img src="<?= $likemusiclist[$i]['likemuImg']?>" alt="<?= $likemusiclist[$i]['likemuName']?>"></a>
                                    <p><a href="../musical/category_mu_detail.php?musicalId=<?= $likemusiclist[$i]['likeMusicalIdNum'] ?>" class="favorites_cont_title"><?= $likemusiclist[$i]['likemuName']?></a></p>
                                    <p><a href="../musical/category_mu_detail.php?musicalId=<?= $likemusiclist[$i]['likeMusicalIdNum'] ?>" class="favorites_cont_theater"><?= $likemusiclist[$i]['likemuPlace']?></a></p>
                                </div>
                            <?php } ?>
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