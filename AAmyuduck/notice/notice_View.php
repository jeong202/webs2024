<?php
include "../connect/connect.php";
include "../connect/session.php";

if (isset($_SESSION['youName'])) {
    $youId = $_SESSION['youName'];
    $youPass = $_SESSION['youPass'];
} else {
    $youId = '';
    $youPass = '';
}
// echo "<pre>";
// var_dump($_SESSION);
// echo "</pre>";

if (isset($_GET['noticeID'])) {
    $noticeID = $_GET['noticeID'];
} else {
    Header("Location: notice.php");
}


// 이전글 가져오기
$prevQASql = "SELECT * FROM noticeboard WHERE noticeID < '$noticeID' ORDER BY noticeID DESC LIMIT 1";
$prevQAResult = $connect->query($prevQASql);
$prevQAInfo = $prevQAResult->fetch_array(MYSQLI_ASSOC);

// 다음글 가져오기
$nextQASql = "SELECT * FROM noticeboard WHERE noticeID > '$noticeID' ORDER BY noticeID ASC LIMIT 1";
$nextQAResult = $connect->query($nextQASql);
$nextQAInfo = $nextQAResult->fetch_array(MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/commons3.css">

    <title>MYUDUCK</title>
</head>

<body>
    <?php include "../include/header.php" ?>
    <!-- //header -->

    <main id="main" role="main">
        <div class="boardWrap">
            <img src="../assets/img/QA.jpg" alt="이미지" class="intro__img">
            <section class="board__inner container">
                <div class="board__search">
                    <div class="board_view_T">
                        <span>공지사항</span><span class="en">announcement</span>
                    </div>
                </div>
                <div class="board__wrap">
                    <div class="board__view">
                        <table>
                            <colgroup>
                                <col style="width: 20%">
                                <col style="width: 80%">
                            </colgroup>
                            <tbody>
                                <?php
                                $boardID = $_GET['noticeID'];

                                // 보드 뷰 + 1
                                $sql = "UPDATE noticeboard SET noticeview = noticeview + 1 WHERE noticeID = {$noticeID}";
                                $connect->query($sql);

                                $sql = "SELECT n.noticeTitle, m.youName, m.youId, n.regTime, n.noticeView, n.noticeContents FROM noticeboard n JOIN myuduck m ON(n.youId = m.youName) WHERE n.noticeID = {$noticeID}";
                                $result = $connect->query($sql);

                                if ($result) {
                                    $info = $result->fetch_array(MYSQLI_ASSOC);

                                    echo "<tr><th>제목</th><td>" . $info['noticeTitle'] . "</td></tr>";
                                    echo "<tr><th>등록자</th><td>" . $info['youName'] . "</td></tr>";
                                    echo "<tr><th>등록일</th><td>" . date('Y-m-d', $info['regTime']) . "</td></tr>";
                                    echo "<tr><th>조회수</th><td>" . $info['noticeView'] . "</td></tr>";
                                    echo "<tr><th>내용</th><td>" . $info['noticeContents'] . "</td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="viewbtns__wrap">
                    <?php if (($_SESSION['youName']) ==  $info['youName']) { ?>
                        <div class="board__btns viewbtns">
                            <a href="notice.php" class="viewbtn">목록</a>
                            <a href="notice_Remove.php?noticeID=<?= $_GET['noticeID'] ?>" class="viewbtn" onclick="return confirm('정말 삭제하시겠습니까?')">삭제</a>
                        </div>
                    <?php } else { ?>
                        <div class="board__btns viewbtns">
                            <a href="notice.php" class="viewbtn">목록</a>
                        </div>
                    <?php } ?>
                </div>
                <div class="board__viewpages2">
                    <h4 class="blind">이전글/다음글 가기</h4>
                    <!-- <a href="#" class="prev">이전글</a>
                    <a href="#" class="next">다음글</a> -->
                    <?php if (!empty($prevQAInfo)) { ?>
                        <a href="notice_View.php?noticeID=<?= $prevQAInfo['noticeID']; ?>" class="prev">
                        <strong>이전글</strong> <?= substr($prevQAInfo['noticeTitle'], 0, 20); ?>...
                        </a>
                    <?php } else { ?>
                        <span class="prev">이전글이 없습니다.</span>
                    <?php } ?>

                    <?php if (!empty($nextQAInfo)) { ?>
                        <a href="notice_View.php?noticeID=<?= $nextQAInfo['noticeID']; ?>" class="next">
                        <strong>다음글</strong> <?= substr($nextQAInfo['noticeTitle'], 0, 20); ?>...
                        </a>
                    <?php } else { ?>
                        <span class="next">다음글이 없습니다.</span>
                    <?php } ?>
                </div>


            </section>

        </div>
    </main>
    <!-- //main -->

    <?php include "../include/footer.php" ?>
    <!-- //footer -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1/bundled/lenis.min.js"></script>
    <script src="../script/commons.js"></script>


</body>

</html>