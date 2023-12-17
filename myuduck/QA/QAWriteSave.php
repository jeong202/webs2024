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
<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    
    $boardTitle = $_POST['boardTitle'];
    $boardContents = $_POST['boardContents'];
    $boardView = 1;
    $regTime = time();
    $memberID = $_SESSION['youId'];

    echo  $boardTitle, $boardContents, $memberID;

    //제목이나 콘텐츠 내용이 없으면 게시글 등록 X

    // 세션을 통해 사용자가 로그인되어 있는지 확인
    if(!isset($_SESSION['youId'])) {
        echo "<script>alert('로그인 후에 게시글을 작성할 수 있습니다.');</script>";
        echo "<script>window.history.back();</script>";
    } else {
        //데이터 입력 여부
        if(empty($boardTitle) || empty($boardContents)){
            echo "<script>alert('제목과 내용을 모두 입력해주세요.');</script>";
            echo "<script>window.history.back();</script>";
        } else {
             // 비어 있지 않다면 데이터베이스에 추가
            $boardTitle = $connect -> real_escape_string($boardTitle);
            $boardContents = $connect -> real_escape_string($boardContents);
        
            $sql = "INSERT INTO QAboard(youId, boardTitle, boardContents, boardView, regTime) VALUES('$memberID', '$boardTitle','$boardContents', '$boardView', '$regTime')";
            $connect -> query($sql);
            
            echo "<script>alert('게시글이 작성되었습니다.');</script>";
            echo '<script>window.location.href = "QA.php";</script>';
        }
    }
?>
   
</body>


</html>