<?php
include "../connect/connect.php";

$sql = "CREATE TABLE actor (";
$sql .= "actorId int(10) unsigned auto_increment,";
$sql .= "acNameKo varchar(100) NOT NULL,";
$sql .= "acNameEn varchar(100) NOT NULL,";
$sql .= "acOccupation varchar(50) NOT NULL,";
$sql .= "acDOB varchar(20) NOT NULL,";

$sql .= "PRIMARY KEY (actorId)";
$sql .= ") charset=utf8";



$sqlAlter = "ALTER TABLE actor ";
$sqlAlter .= "ADD acImg VARCHAR(255) NOT NULL, ";
$sqlAlter .= "ADD acImgDetail VARCHAR(255) NOT NULL";

// 기존 테이블 생성 쿼리
$result = $connect->query($sql);

if($result){
    echo "Create Actor Table Complete";
} else {
    echo "Create Actor Table False";
}

// 열 추가 쿼리
$resultAlter = $connect->query($sqlAlter);

if($resultAlter){
    echo "Create Actor Table Complete";
} else {
    echo "Create Actor Table False";
}

// mysql에서 실행하려면!

// ALTER TABLE actor
// ADD acImg VARCHAR(255) NOT NULL,
// ADD acImgDetail VARCHAR(255) NOT NULL;
