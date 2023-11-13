<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    $sql = "CREATE TABLE QAcomment (";
    $sql .= "commentId int(10) unsigned auto_increment,";
    $sql .= "youId varchar(10) NOT NULL,"; // 데이터 형식 변경
    $sql .= "boardId int(10) unsigned,";
    $sql .= "commentName varchar(20) NOT NULL,";
    $sql .= "commentPass varchar(20) NOT NULL,";
    $sql .= "commentMsg varchar(225) NOT NULL,";
    $sql .= "commentDelete int(11) NOT NULL,";
    $sql .= "regTime int(20) NOT NULL,";
    $sql .= "PRIMARY KEY (CommentId)";
    $sql .= ") charset=utf8";

    $result = $connect->query($sql);

    if ($result) {
        echo "Create Table Complete";
    } else {
        echo "Create Table Failed: " . $connect->error; // 오류 메시지 출력
    }
?>