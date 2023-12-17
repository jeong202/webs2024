<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    $noticeID = $_GET['noticeID'];
    $youId = $_SESSION['youName'];

    // 게시글 소유자 확인
    $sql = "SELECT youId FROM noticeboard WHERE noticeID = {$noticeID}";
    $result = $connect -> query($sql);

    if($result){
        $info = $result -> fetch_array(MYSQLI_ASSOC);
        $boardOwnerID = $info['youId'];

        // 로그인 memberID와 게시글 memberID 일치 여부
        if($youId == $boardOwnerID){
            $sql = "DELETE FROM noticeboard WHERE noticeID = {$noticeID}";
            $connect -> query($sql);
            echo "<script>alert('게시글이 삭제 되었습니다.');</script>";
            echo "<script>window.location.href = 'notice.php';</script>";
        } else {
            echo "<script>alert('게시글 소유자만 삭제 할 수 있습니다.');</script>";
            echo "<script>window.location.href = 'notice.php';</script>";
        }
    } else {
        echo "<script>alert('관리자에게 문의해주세요!');</script>";
        echo "<script>window.location.href = 'notice.php';</script>";
    }
?>