<?php
include "../connect/connect.php";

$sql = "CREATE TABLE musical (";
$sql .= "musicalId int(10) unsigned auto_increment,";
$sql .= "muNameKo varchar(100) NOT NULL,";
$sql .= "muNameEn varchar(100) NOT NULL,";
$sql .= "muPlace varchar(50) NOT NULL,";
$sql .= "muDate varchar(50) NOT NULL,";
$sql .= "muTime varchar(50) NOT NULL,";
$sql .= "muAge varchar(50) NOT NULL,";
$sql .= "muImg varchar(255) NOT NULL,";
$sql .= "muDetailImg varchar(255) NOT NULL,";
$sql .= "PRIMARY KEY (musicalId)";
$sql .= ") charset=utf8";

$result = $connect->query($sql);

if($result){
    echo "Create Tables Complete";
} else {
    echo "Create Tables False";
}
?>