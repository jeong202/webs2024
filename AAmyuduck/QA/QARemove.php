<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    $boardID = $_GET['boardID'];
    $youId = $_SESSION['youId'];

    // 게시글 소유자 확인
    $sql = "SELECT youId FROM QAboard WHERE boardID = {$boardID}";
    $result = $connect -> query($sql);

    if($result){
        $info = $result -> fetch_array(MYSQLI_ASSOC);
        $boardOwnerID = $info['youId'];

        // 로그인 memberID와 게시글 memberID 일치 여부
        if($youId == $boardOwnerID || $youId == "admin"){
            $sql = "DELETE FROM QAboard WHERE boardID = {$boardID}";
            $connect -> query($sql);
            echo "<script>alert('게시글이 삭제 되었습니다.');</script>";
            echo "<script>window.location.href = 'QA.php';</script>";
        } else {
            echo "<script>alert('게시글 소유자만 삭제 할 수 있습니다.');</script>";
            echo "<script>window.location.href = 'QA.php';</script>";
        }
    } else {
        echo "<script>alert('관리자에게 문의해주세요!');</script>";
        echo "<script>window.location.href = 'QA.php';</script>";
    }
?>