<?php
include "../connect/connect.php";

$sql = "CREATE TABLE ratings(";
$sql .= "ratingId int(10) unsigned auto_increment,";
$sql .= "youId varchar(10) NOT NULL,";
$sql .= "musicalId int(10) NOT NULL,";
$sql .= "ratingNum int(10) NOT NULL,";
$sql .= "PRIMARY KEY(ratingId)";
$sql .= ") charset=utf8";

$result = $connect->query($sql);

if ($result) {
    echo "Create Table Complete";
} else {
    echo "Create Table Failed";
}
?>