<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    if(isset($_GET['page'])){
        $page = (int) $_GET['page'];
    } else {
        $page = 1;
    }

    $searchKeword = $_GET['searchKeword'];
    $searchOption = $_GET['searchOption'];

    $searchKeword = $connect -> real_escape_string(trim($searchKeword));
    $searchOption = $connect -> real_escape_string(trim($searchOption));

    $sql = "SELECT n.noticeID, n.youId, n.noticeTitle, n.noticeContents, m.youName, n.regTime, n.noticeView FROM noticeboard n JOIN myuduck m ON(n.youId = m.youName) ";

    switch($searchOption){
        case "title":
            $sql .= "WHERE n.noticeTitle LIKE '%{$searchKeword}%' ORDER BY noticeID DESC";
            break;
        case "content":
            $sql .= "WHERE n.noticeContents LIKE '%{$searchKeword}%' ORDER BY noticeID DESC";
            break;
    }
    $result = $connect -> query($sql);

    $totalCount = $result -> num_rows;
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

    <main>

    <div class='boardwrap'>
            <img src="../assets/img/QA.jpg" alt="이미지" class="intro__img">
            <div class="board container">
                <div class="board__search">
                    <div class="board__searchT1">
                        <span>공지사항</span><span class="en">announcement</span>
                        <div class="num">
                            * 총 <em><?= $totalCount ?></em>건의 공지사항이 등록되어 있습니다.
                        </div>
                    </div>
                    <div class="board__searchT2">
                        <form action="notice_Search.php" name="noticeSearch" method="get">
                            <fieldset>
                                <legend class="blind">게시판 검색 영역</legend>
                                <input type="search" name="searchKeword" id="searchKeword" placeholder="검색어를 입력하세요!" required>
                                <select name="searchOption" id="searchOption">
                                    <option value="title">제목</option>
                                    <option value="content">내용</option>
                                </select>
                                <button type="submit">검색</button>
                                <?php if(($_SESSION['youId']) === 'admin')  {?>
                                <a href="#" class="writeBtn">글쓰기</a>
                                <?php } ?>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <div class="tableWrap">
                    <div class="board__table">
                        <table>
                            <colgroup>
                                <col style="width: 10%;">
                                <col>
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
<?php
    $viewNum = 10;
    $viewLimit = ($viewNum * $page) - $viewNum;

    $sql .= " LIMIT {$viewLimit}, {$viewNum}";
    $result = $connect -> query($sql);

    if($result){
        $count = $result -> num_rows;

        if($count > 0){
            for($i=0; $i<$count; $i++){
                $info = $result -> fetch_array(MYSQLI_ASSOC);

                echo "<tr>";
                echo "<td>" . $info['noticeID'] . "</td>";
                echo "<td><a href='notice_View.php?noticeID={$info['noticeID']}'>" . $info['noticeTitle'] . "</a></td>";
                echo "<td>" . $info['youName'] . "</td>";
                echo "<td>" . date('Y-m-d', $info['regTime']) . "</td>";
                echo "<td>" . $info['noticeView'] . "</td>";
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
<?php
    // 총 페이지 갯수
    $boardTotalCount = ceil($totalCount/$viewNum);

    // 1 2 3 4 5 6 [7] 8 9 10 11 12 13
    $pageView = 5;
    $startPage = $page - $pageView;
    $endPage = $page + $pageView;

    // 처음 페이지 초기화 / 마지막 페이지 초기화
    if($startPage < 1) $startPage = 1;
    if($endPage >= $boardTotalCount) $endPage = $boardTotalCount;

    // 처음으로/이전
    if($page != 1){
        $prevPage = $page -1;
        echo "<li class='first'><a href='notice_Search.php?page=1&searchKeyword={$searchKeyword}&searchOption={$searchOption}'>처음으로</a></li>";
        echo "<li class='prev'><a href='notice_Search.php?page={$prevPage}&searchKeyword={$searchKeyword}&searchOption={$searchOption}'>이전</a></li>";
    }
 
    // 페이지
    for($i=$startPage; $i<=$endPage; $i++){
        $active = "";
        if($i == $page) $active = "active";

        echo "<li class='{$active}'><a href='notice_Search.php?page={$i}&searchKeyword={$searchKeyword}&searchOption={$searchOption}'>$i</a></li>";
    }

    // 마지막으로/다음
    if($page != $boardTotalCount){
        $nextPage = $page + 1;
        echo "<li class='next'><a href='notice_Search.php?page={$nextPage}&searchKeyword={$searchKeyword}&searchOption={$searchOption}'>다음</a></li>";
        echo "<li class='last'><a href='notice_Search.php?page={$boardTotalCount}&searchKeyword={$searchKeyword}&searchOption={$searchOption}'>마지막으로</a></li>";
    }
?>
                </ul>
            </div>
        </div>

    </main>
    <!-- //main-->

    <?php include "../include/footer.php" ?>
    <!-- //footer -->

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1/bundled/lenis.min.js"></script>
    <script src="../script/commons.js"></script>
</body>

</html>