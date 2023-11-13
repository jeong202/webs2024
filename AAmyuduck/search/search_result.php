<?php
include "../connect/connect.php";


?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/commons2.css">

    <title>MYUDUCK</title>
    <style>
    </style>
</head>

<body>
    <?php include "../include/header.php" ?>
    <!-- //header -->

    <main id="search">
        <div class="search_inner container">
            <div class="search_result_logo">
                <img src="../assets/img/redduck.jpg" alt="오페라글래스낀뮤덕로고">
            </div>
            <form action="search_result.php" name="search_result" method="get">
                <fieldset class="all_search">
                    <legend class="blind">검색 영역</legend>
                    <input type="search" name="searchKeyword" id="searchKeyword" placeholder="검색어를 입력하세요." required>
                    <select name="searchOption" id="searchOption">
                        <option value="all">전체</option>
                        <option value="theater">극장</option>
                        <option value="musical">뮤지컬</option>
                        <option value="actor">배우</option>
                    </select>
                    <button type="submit" id="searchButton">검색</button>
                </fieldset>
            </form>
            <div class="category">
                <span><a href="theater.html">극장</a></span>
                <span><a href="musical.html">뮤지컬</a></span>
                <span><a href="actor.html">배우</a></span>
            </div>
            <div class="search_result">
                <h2><span>뮤지컬</span> 검색결과</h2>
                <div class="search_result_inner">
                    <div class="result_img">
                        <?php
                        error_reporting(E_ALL);
                        ini_set('display_errors', 1);
 
                        // $jsonData = file_get_contents("../json/mu_data.json");
                        // $data = json_decode($jsonData, true);

                        if (isset($_GET['searchKeyword']) && isset($_GET['searchOption'])) {
                            $searchKeyword = $connect->real_escape_string(trim($_GET['searchKeyword']));
                            $searchOption = $connect->real_escape_string(trim($_GET['searchOption']));

                            // 띄어쓰기 제거 및 소문자 변환
                            $cleanedSearchKeyword = strtolower(str_replace(" ", "", $searchKeyword));



                            if ($searchOption === 'musical' || $searchOption === 'all') {
                                $filteredResults = array();
                                $resultsDisplayed = false;

                                // 한글로 검색
                                $sqlKorean = "SELECT muNameKo, muPlace, muImg FROM musical WHERE REPLACE(LOWER(muNameKo), ' ', '') LIKE '%$cleanedSearchKeyword%'";
                                $resultKorean = $connect->query($sqlKorean);

                                // 영어로 검색
                                $sqlEnglish = "SELECT muNameEn, muPlace, muImg FROM musical WHERE REPLACE(LOWER(muNameEn), ' ', '') LIKE '%$cleanedSearchKeyword%'";
                                $resultEnglish = $connect->query($sqlEnglish);

                                $displayedMuNameEn = false; // 영어 결과 표시 플래그
                                $koreanResults = array(); // 한글 검색 결과 저장 배열
                                $englishResults = array(); // 영어 검색 결과 저장 배열

                                while ($row = $resultKorean->fetch_assoc()) {
                                    $filteredResults[] = $row;
                                }

                                while ($row = $resultEnglish->fetch_assoc()) {
                                    $filteredResults[] = $row;
                                }

                                if (empty($filteredResults)) {
                                    echo '<div class="no_result"><p>' . "검색 결과가 없습니다." . '</p><img src="../assets/img/blueduck.png" alt="검색결과 없음 이미지"></div>';
                                } else {
                                    foreach ($filteredResults as $row) {
                                        $muPlace = $row['muPlace'];
                                        $imagePath = $row['muImg'];

                                        if ($searchOption === 'all' || $searchOption === 'musical') {
                                            $displayedMuNameEn = true;

                                            if (isset($row['muNameEn'])) {
                                                $muNameEn = $row['muNameEn'];
                                                echo '<div class="imgcontainer">';
                                                echo '<a href="#"><img src="' . $imagePath . '" alt=""></a>';
                                                echo '<div class="text">';
                                                echo '<div class="t1">' . $muNameEn . '</div>'; // 영어 결과의 경우 muNameEn 사용
                                                echo '<div class="t2">' . $muPlace . '</div>';
                                                echo '</div>';
                                                echo '</div>';
                                            } else {
                                                $muNameEn = ''; // muNameEn 값이 없는 경우 빈 문자열로 설정
                                                $muNameKo = $row['muNameKo'];
                                                echo '<div class="imgcontainer">';
                                                echo '<a href="#"><img src="' . $imagePath . '" alt=""></a>';
                                                echo '<div class="text">';
                                                echo '<div class="t1">' . $muNameKo . '</div>'; // 한글 결과의 경우 muNameKo 사용
                                                echo '<div class="t2">' . $muPlace . '</div>';
                                                echo '</div>';
                                                echo '</div>';
                                            }
                                        }
                                    }
                                }
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <!-- //main -->

    <?php include "../include/footer.php" ?>
    <!-- //footer -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../script/commons.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // $("#searchButton").click(function() {
        //     if ($("#searchKeyword").val() == "") {
        //         alert("검색어를 작성해주세요.");
        //         $("#searchKeyword").focus();
        //     } else {
        //         const searchKeyword = $("#searchKeyword").val();
        //         const searchOption = $("#searchOption").val(); // searchOption 변수 추가
        //         alert(searchKeyword)
        //         $.ajax({
        //             url: "search_musical.php",
        //             method: "GET",
        //             dataType: "json",
        //             data: {
        //                 searchKeyword: searchKeyword,
        //                 searchOption: searchOption
        //             },
        //             success: function(results) {
        //                 displayResults(results, searchOption); // searchOption 변수를 displayResults 함수로 전달
        //             },
        //         });
        //     }
        // });

        // JSON 데이터를 화면에 표시하는 JavaScript 함수
        // function displayResults(results, searchOption) {
        //     console.log(results);
        //     const resultContainer = $(".search_result_inner");
        //     resultContainer.empty();

        //     results.forEach(function(result) {
        //         const muNameKo = result.muNameKo;
        //         const muNameEn = result.muNameEn;
        //         const muPlace = result.muPlace;
        //         let t1Content = ""; // t1 내용 초기화

        //         if (searchOption === 'musical' || searchOption === 'all') {
        //             t1Content = muNameKo; // 한글 결과 표시
        //         } else {
        //             t1Content = muNameEn; // 영어 결과 표시
        //         }

        //         const resultItem = $(
        //             "<div class='imgcontainer'><a href='#'><img src='" + result.muImage + "' alt=''></a><div class='text'><div class='t1'>" + t1Content + "</div><div class='t2'>" + muPlace + "</div></div></div>");

        //         resultContainer.append(resultItem);
        //     });
        // }
    </script>
</body>

</html>