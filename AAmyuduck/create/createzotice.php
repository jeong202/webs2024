<?php
    include "../connect/connect.php";

    $sql = "CREATE TABLE noticeboard(";
    $sql .= "noticeID int(10) unsigned NOT NULL auto_increment,";
    $sql .= "youId varchar(10) NOT NULL,";
    $sql .= "noticeTitle varchar(100) NOT NULL,";
    $sql .= "noticeContents longtext NOT NULL,";
    $sql .= "noticeView int(10) NOT NULL,";
    $sql .= "regTime int(20) NOT NULL,";
    $sql .= "PRIMARY KEY(noticeID)";
    $sql .= ") charset=utf8";

    $result = $connect->query($sql);

    if($result){
        echo "공지사항 테이블 생성 완료";
    } else {
        echo "공지사항 테이블 생성 실패";
    }
?>