<?php
include "../connect/connect.php";
include "../connect/session.php";

// echo "<pre>";
// var_dump($_SESSION);
// echo "</pre>";

//총 페이지 갯수
$sql = "SELECT count(boardID) FROM QAboard";
$result = $connect->query($sql);

$boardTotalCount = $result->fetch_array(MYSQLI_ASSOC);
$boardTotalCount = $boardTotalCount['count(boardID)'];
?>



<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">

    <title>문의하기</title>
    <style>
    </style>
</head>

<body>
    <?php include "../include/header.php" ?>
    <!-- //header -->
    
    <main>
        <div class='boardwrap'>
            <img src="../assets/img/QA.jpg" alt="이미지" class="intro__img">
            <div class="board">
                <div class="board__search">
                    <div class="board__searchT1">
                        <span>문의하기</span><span class="en">Q&A</span>
                        <div class="num">
                            * 총 <em><?= $boardTotalCount ?></em>건의 게시물이 등록되어 있습니다.
                        </div>
                    </div>
                    <div class="board__searchT2">
                    <form action="QASearch.php" name="QASearch" method="get">
                        <fieldset>
                            <legend class="blind">게시판 검색 영역</legend>
                            <input type="search" name="searchKeword" id="searchKeword" placeholder="검색어를 입력하세요!"
                                required>
                            <select name="searchOption" id="searchOption">
                                <option value="title">제목</option>
                                <option value="content">내용</option>
                                <option value="name">등록자</option>
                            </select>
                            <button type="submit">검색</button>
                            <a href="QAWrite.php">글쓰기</a>
                        </fieldset>
                        </form>
                    </div>
                </div>
                <div class="tableWrap">
                    <div class="board__table">
                        <table>
                            <colgroup>
                                <col style="width: 10%;">
                                <col style="width: 10%;">
                                <col style="width: 15%;">
                                <col style="width: 7%;">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th>번호</th>
                                    <th>제목</th>
                                    <th>등록자</th>
                                    <th>등록일</th>
                                    <th>조회수</th>
                                </tr>
                            </thead>
                            <tbody>
<?php
if (isset($_GET['page'])) {
    $page = (int) $_GET['page'];
} else {
    $page = 1;
}

$viewNum = 10;
$viewLimit = ($viewNum * $page) - $viewNum;

//1~10  LIMIT 0,  10  --> page1 ($viewNum * 1) - $viewNum
//11~20 LIMIT 10, 10  --> page2 ($viewNum * 2) - $viewNum
//21~30 LIMIT 20, 10  --> page3 ($viewNum * 3) - $viewNum
//31~40 LIMIT 30, 10  --> page4 ($viewNum * 4) - $viewNum

$sql = "SELECT b.boardID, b.boardTitle, m.youId, b.regTime, b.boardView FROM QAboard b JOIN myuduck m ON(b.youId = m.youId) ORDER BY boardID DESC LIMIT {$viewLimit}, {$viewNum}";
//ON(b.memberID = m.memberID) board 테이블과 members 테이블, 두 테이블의 memberID 값이 일치하는 레코드들을 하나로 합칠 수 있습니다.
//JOIN 작업에서 어떤 조건 아래에서 두 테이블을 결합할지를 나타내는 부분으로 여기서는 memberID를 기준으로 사용했습니다 
//b와 m이라는 별칭을 사용해 SQL 문에서 각 테이블에 접근할 때 b와 m 별칭을 사용할 수 있습니다.

$result = $connect->query($sql);

if ($result) {
    $count = $result->num_rows;

    if ($count > 0) {
        for ($i = 0; $i < $count; $i++) {
            $info = $result->fetch_array(MYSQLI_ASSOC);

            echo "<tr>";
            echo "<td>" . $info['boardID'] . "</td>";
            echo "<td><a href='QAView.php?boardID={$info['boardID']}'>" . $info['boardTitle'] . "</a></td>";
            echo "<td>" . $info['youId'] . "</td>";
            echo "<td>" . date('Y-m-d', $info['regTime']) . "</td>";
            echo "<td>" . $info['boardView'] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='5'>게시글이 없습니다.</td></tr>";
    }
} else {
    echo "관리자에게 문의해주세요!!";
}
?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="board__pages">
                <ul>
                    <li class="first"><a href="#">처음으로</a></li>
                    <li class="prev"><a href="#">이전</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">6</a></li>
                    <li><a href="#">7</a></li>
                    <li class="next"><a href="#">다음</a></li>
                    <li class="last"><a href="#">마지막으로</a></li>
                </ul>
            </div>
        </div>  
    </main>
    <!-- //main-->

    <?php include "../include/footer.php" ?>
    <!-- //footer -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../script/commons.js"></script>
<!-- <script src="../script/checkBox.js"></script> -->
</body>


</html>