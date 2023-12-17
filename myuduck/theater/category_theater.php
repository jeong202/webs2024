<?php
include "../connect/connect.php";
include "../connect/session.php";

// echo "<pre>";
// var_dump($_SESSION);
// echo "</pre>";

$theaterId = $_GET['theaterId'];

$sql = "SELECT * FROM theater ORDER BY theaterId ASC";
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
// echo '<pre>';
// print_r($theaterAllInfo);
// echo '</pre>';

?>
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/commons.css">
    <link rel="icon" href="../assets/img/favicon.png" type="image/x-icon">

    <title>뮤지컬 카테고리</title>
    <style>
    </style>
</head>

<body>

    <?php include "../include/header.php" ?>
    <!-- //header -->

    <main>
        <div class="theater__ineer container">
            <h1>공연장</h1>
            <div class="mapwrap">
                <div id="map"></div>
            </div>
            <div class="theater__info">
                <div class="theater__link">
                    <ul>
                        <?php foreach ($theaterAllInfo as $thInfo) : ?>
                            <li>
                                <a href="#"><img class="im<?= $thInfo['theaterId'] ?>" src="<?= $thInfo['thLogo'] ?>" alt="<?= $thInfo['thName'] ?>"></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="theater__list">
                    <table class="list__cont">
                        <tr class="list_cont_header">
                            <th class="rounded-left"><span>공연장</span></th>
                            <th class="rounded-center"><span>장소</span></th>
                            <th class="rounded-right"><span>최근 주요 작품</span></th>
                        </tr>
                        <?php foreach ($theaterAllInfo as $thInfo) : ?>
                            <tr class="th_info ca1">
                                <td class="img_name">
                                    <a href="category_th_detail.php?theaterId=<?= $thInfo['theaterId'] ?>">
                                        <img src="<?= $thInfo['thLogo'] ?>" alt="<?= $thInfo['thName'] ?> 로고">
                                    </a>
                                    <a href="category_th_detail.php?theaterId=<?= $thInfo['theaterId'] ?>"><span><?= $thInfo['thName'] ?></span></a>
                                </td>
                                <td class="theater__location">
                                    <?php
                                    $address = $thInfo['thAddress'];
                                    $pattern = '/서울특별시\s*(\S+구)/';
                                    preg_match($pattern, $address, $matches);
                                    echo '<span>' . $matches[1] . '</span>';
                                    ?>
                                </td>
                                <td class="theater__musical">
                                    <ul>
                                        <?php foreach ($thInfo['thPerform'] as $performance) : ?>
                                            <li><?= $performance ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </td>
                            </tr>
                        <?php endforeach; ?>


                    </table>
                </div>
            </div>
        </div>
    </main>
    <!-- //main-->

    <?php include "../include/footer.php" ?>
    <!-- //footer -->

    <script src="//dapi.kakao.com/v2/maps/sdk.js?appkey=7b2abc1a5bd9d4d76409a078f6cdf032"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1/bundled/lenis.min.js"></script>
    <script src="../script/commons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <script src="../script/map.js"></script>
    <script>
        function handleLinkClick(thName) {
            // category_th_detail.php 페이지로 이동
            window.location.href = "http://http://jhyjhy968.dothome.co.kr/AAmyuduck/html/category_theater.php#";

            // 클릭한 a 링크에 대한 정보를 localStorage에 저장
            localStorage.setItem("thName", thName);
        }
    </script>
</body>

</html>