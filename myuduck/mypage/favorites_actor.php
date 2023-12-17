<?php
include "../connect/connect.php";
include "../connect/session.php";
include "../connect/sessionCheck.php";

$loginId = $_SESSION['youId'];

// 배우 찜목록
// $likeactorlist = array();

// $ACsql = "SELECT * FROM likeActor WHERE likeStatus = 1  AND youId = $loginId ORDER BY likeActorId ASC";
// $ACresult = $connect->query($ACsql);
$likeactorlist = array();

$ACsql = "SELECT * FROM likeActor WHERE likeStatus = 1 AND youId = ? ORDER BY likeActorId ASC";

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
                    <h3>배우 찜 목록</h3>
                    <div class="favorites_cont_list scroll__style">
                        <?php for ($i = 0; $i < count($likeactorlist); $i++) {
                            if ($likeactorlist[$i]['likeACStatus'] == 1) { ?>
                                <div class="favorites_cont-card">
                                    <a href="../actor/category_ac_detail.php?actorId=<?= $likeactorlist[$i]['likeActorIdNum'] ?>" class="favorites_cont_img"><img src="<?= $likeactorlist[$i]['likeACImg']?>" alt="<?= $likeactorlist[$i]['likeACName']?>"></a>
                                    <p><a href="../actor/category_ac_detail.php?actorId=<?= $likeactorlist[$i]['likeActorIdNum'] ?>" class="favorites_cont_title"><?= $likeactorlist[$i]['likeACName']?></a></p>
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