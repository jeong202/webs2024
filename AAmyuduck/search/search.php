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
            <div class="search_logo">
                <img src="../assets/img/duck_all_search.png" alt="오페라글래스낀뮤덕로고">
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
        </div>
    </main>
    <!-- //main -->

    <?php include "../include/footer.php" ?>
    <!-- //footer -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../script/commons.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $("#searchButton").click(function() {
            if ($("#searchKeyword").val() == "") {
                // alert("검색어를 작성해주세요.");
                $("#searchKeyword").focus();
            } else {
                const searchKeyword = $("#searchKeyword").val();
                const searchOption = $("#searchOption").val();
                alert(searchKeyword)
                $.ajax({
                    url: "search_musical.php",
                    method: "GET",
                    dataType: "json",
                    data: {
                        searchKeyword: searchKeyword,
                        searchOption: searchOption
                    },
                    success: function(results) {
                        displayResults(results);
                    },
                });
            }
        });

        function displayResults(results) {
            console.log(results);
            const resultContainer = $(".search_result_inner");
            resultContainer.empty();

            results.forEach(function(result) {
                const muNameKo = result.muNameKo;
                const muPlace = result.muPlace;

                const resultItem = $(
                    "<div class='imgcontainer'><a href='#'><img src='" + result.muImage + "' alt=''></a><div class='text'><div class='t1'>" + muNameKo + "</div><div class='t2'>" + muPlace + "</div></div></div>");

                resultContainer.append(resultItem);
            });
        }
    </script>
</body>

</html>