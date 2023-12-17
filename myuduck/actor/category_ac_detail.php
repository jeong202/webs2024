<?php
include "../connect/connect.php";
include "../connect/session.php";

// URL에서 actorId를 가져옴
$actorId = $_GET['actorId'];
$youId = $_SESSION['youId'];

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

                // muNameKo를 기반으로 musicalId와 muImg 가져오기
                $sql3 = "SELECT musicalId, muImg FROM musical WHERE muNameKo = '$acPerformName'";
                $result3 = $connect->query($sql3);
                $musicalData = $result3->fetch_assoc();

                $musicalId = $musicalData['musicalId'];
                $muImg = $musicalData['muImg'];

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
                    'musicalId' => $musicalId,
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

$loggedIn = isset($_SESSION['youId']) ? true : false;

// db 같은 내용이 있는 경우 확인하기 위함
$likeSql = "SELECT * FROM likeActor WHERE likeActorIdNum = '$actorId' AND youId = '$youId' AND likeStatus = 1 ";
$likeResult = $connect->query($likeSql);
$count = $likeResult->num_rows;
// echo $count;
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
        <img src="../assets/img/aaa.jpg" alt="이미지" class="intro_img">
        <div class="intro_actor">
            <div class="image_wrap">
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
                <img src="<?= $acImgDetail ?>" alt="<?= $acNameKo ?>상세 사진">
            </div>
            <div class="intro_info">
                <div class="name">
                    <h1><?= $acNameKo ?></h1>
                    <h1><?= $acNameEn ?></h1>
                </div>
                <p class="occupation">직업 : <?= $acOccupation ?></p>
                <p class="birthdate">생년월일 : <?= $acDOB ?></p>
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
                                <a href="../musical/category_mu_detail.php?musicalId=<?= $performance['musicalId'] ?>"><img src="<?= $performance['muImg'] ?>" alt="<?= $performance['acPerformName'] ?> 이미지"></a>
                            </div>
                            <div class="ac_text_wrap">
                                <h3 class="ac_musical"><a href="../musical/category_mu_detail.php?musicalId=<?= $performance['musicalId'] ?>"><?= $performance['acPerformName'] ?></a></h3>
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
    <script src="../script/commons.js"></script>
    <script>
        window.addEventListener('load', getInitialLikeStatus);

const likeButton = document.querySelector(".image_wrap .like-button");
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
    const likeActorIdNum = <?= $actorId ?>;
    const likeACImg = '<?= $acImgDetail ?>';
    const likeACName = '<?= $acNameKo ?>';

    $.ajax({
        type: 'POST',
        url: '../like/likeAc.php',
        data: {
            likeActorIdNum: likeActorIdNum,
            likeACImg: likeACImg,
            likeACName: likeACName,
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
        url: '../like/likeAcStatus.php',
        data: {
            likeActorId: <?= $actorId  ?>
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