<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    // echo "<pre>";
    // var_dump($_SESSION);
    // echo "</pre>";
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
</head>

<body>
    <?php include "../include/header.php" ?>
    <!-- //header -->

    <main>
        <div class="boardWrap">
            <img src="../assets/img/QA.jpg" alt="이미지" class="intro__img">

            <div class="board__write container">
                <div class="board__search">
                    <div class="board__T1">
                        <span>후기작성</span><span class="en">Review</span>
                    </div>
                </div>
                <form action="QAWriteSave.php" name="QAWriteSave" method="post">
                    <fieldset>
                        <legend class="blind">게시글 작성하기</legend>
                        <div>
                            <label for="boardTitle" class="boardTitle">제목<span class="ent">Title</span></label>
                            <div class="line1"></div>
                            <input type="text" id="boardTitle" name="boardTitle" placeholder='글 제목을 입력해주세요'>
                        </div>
                        <div>
                            <label for="boardContents" class="boardContents">내용<span class="ent">Message</span></label>
                            <div class="line2"></div>
                            <textarea name="boardContents" id="boardContents" placeholder='내용을 입력해 주세요' rows="20"></textarea>
                        </div>
                        <div class="board__btns">
                            <button type="submit" class="btn">작성완료</button>
                        </div>
                    </fieldset>
                </form>
            </div>

        </div>
    </main>
    <!-- //main-->

    <?php include "../include/footer.php"?>
    <!-- //footer -->

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="../script/commons.js"></script>

</html>