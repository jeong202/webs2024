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

    <main>
        <div class="categorieWrap">
            <div class="desc1">
                <div class="mu__container">
                    <div class="poster">
                        <div>
                            <?php if ($count > 0) { ?>
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
                    </div>
                </div>
            </div>
            
            <div class="title">
                공연 정보 <span>Musical information</span>
            </div>

            <div class="desc2Wrap container">
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
    <!-- <script src="../script/star.js"></script> -->

    <script>
        // 찜하기
        window.addEventListener('load', getInitialLikeStatus);

        const likeButton = document.querySelector(".like-button");
        let checkcount = <?= $count ?>;

        likeButton.addEventListener('click', function() {
            // if(<?= $loggedIn ? 'true' : 'false' ?>){
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
            // } else {
            //     alert("로그인을 해주세요.");
            //     window.location.href = '../login/login.php';
            // }
        });

        function sendLikeData(isClicked) {
            const likeMusicalIdNum = <?= $musicalId ?>;
            const likemuImg = '<?= $muImg ?>';
            const likemuName = '<?= $muNameKo ?>';
            const likemuPlace = '<?= $muPlace ?>';

            $.ajax({
                type: 'POST',
                url: '../like/likeMu.php',
                data: {
                    likeMusicalIdNum: likeMusicalIdNum,
                    likemuImg: likemuImg,
                    likemuName: likemuName,
                    likemuPlace: likemuPlace,
                    isClicked: isClicked
                },
                success: function(response) {
                    console.log(response);

                    if (response.status === 'success') {
                        // AJAX 응답을 성공적으로 처리
                    } else {
                        // 에러 응답을 처리
                    }

                    likeButton.disabled = false;
                    getInitialLikeStatus(); // like 상태를 업데이트한 후에 getInitialLikeStatus를 호출합니다.
                },
                error: function(xhr, status, error) {
                    console.error('AJAX 요청 실패:', error);
                    likeButton.disabled = false;
                }
            });
        }

        function getInitialLikeStatus() {
            $.ajax({
                type: 'POST',
                url: '../like/likeMuStatus.php',
                data: {
                    likeMusicalIdNum: <?= $musicalId ?>
                },
                success: function(response) {
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
                error: function(xhr, status, error) {
                    console.error('AJAX 요청 실패:', error);
                }
            });
        }
    </script>
</body>

</html>