<?php
    include "../connect/connect.php";

    $sql = "CREATE TABLE QAboard(";
    $sql .= "boardID int(10) unsigned NOT NULL auto_increment,";
    $sql .= "youId varchar(10) NOT NULL,";
    $sql .= "boardTitle varchar(100) NOT NULL,";
    $sql .= "boardContents longtext NOT NULL,";
    $sql .= "boardView int(10) NOT NULL,";
    $sql .= "regTime int(20) NOT NULL,";
    $sql .= "PRIMARY KEY(boardID)";
    $sql .= ") charset=utf8";

    $connect -> query($sql);
?>
