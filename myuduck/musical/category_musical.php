<?php
include "../connect/connect.php";
include "../connect/session.php";

$muCategory = array();

// 뮤지컬 테이블 정보 가져오기
$sql = "SELECT * FROM musical ORDER BY musicalId DESC";
$result = $connect->query($sql);


if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $musicalId = $row['musicalId'];
        $muNameKo = $row['muNameKo'];
        $muPlace = $row['muPlace'];
        $muImg = $row['muImg'];

        $muCategory[] = array(
            'musicalId' => $musicalId,
            'muNameKo' => $muNameKo,
            'muPlace' => $muPlace,
            'muImg' => $muImg,
        );
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/commons.css">
    <link rel="icon" href="../assets/img/favicon.png" type="image/x-icon">

    <title>MYUDUCK</title>
</head>

<body>
    <?php include "../include/header.php" ?>
    <!-- //header -->


    <main>
        <div class="categorieWrap">
            <img src="../assets/img/category_musical.png" alt="이미지" class="intro__img">
            <div class="container">
                <div class="ca__inner1">
                    <div class="title">
                        뮤지컬
                    </div>
                </div>
                <div class="ca__inner2">
                    <div class="ca__imgs">
                        <?php foreach ($muCategory as $muInfo) : ?>
                            <div class="img1 imgcontainer">
                                <a href="http://jhyjhy968.dothome.co.kr/myuduck/musical/category_mu_detail.php?musicalId=<?php echo $muInfo['musicalId']; ?>"><img src="<?php echo $muInfo['muImg']; ?>" alt="<?php echo $muInfo['muNameKo']; ?>"></a>
                                <div class="text">
                                    <div class="t1"><?php echo $muInfo['muNameKo']; ?></div>
                                    <div class="t2"><?php echo $muInfo['muPlace']; ?></div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include "../include/footer.php" ?>
    <!-- //footer -->

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1/bundled/lenis.min.js"></script>
<script src="../script/commons.js"></script>
<script>



</script>

</html>