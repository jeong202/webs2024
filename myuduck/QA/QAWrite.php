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
                        <span>문의작성</span><span class="en">Q&A</span>
                    </div>
                    <div class="board__write">
                        <form action="QAWriteSave.php" name="QAWriteSave" method="post">
                            <fieldset>
                                <legend class="blind">게시글 작성하기</legend>
                                <div>
                                    <label for="boardTitle">제목<span>Title</span></label>
                                    <div class="line1"></div>
                                    <input type="text" id="boardTitle" name="boardTitle" class="input__style">
                                </div>
                                <div>
                                    <label for="boardContents">내용<span>Message</span></label>
                                    <div class="line2"></div>
                                    <textarea name="boardContents" id="boardContents" placeholder='내용을 입력해 주세요'
                                rows="20"></textarea>
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

    <?php include "../include/footer.php" ?>
    <!-- //footer -->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../script/commons.js"></script>
    <!-- <script src="../script/checkBox.js"></script> -->
</body>


</html>