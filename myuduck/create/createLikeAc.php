<?php
include "../connect/connect.php";

$sql = "CREATE TABLE likeActor (";
$sql .= "likeActorId INT(10) UNSIGNED AUTO_INCREMENT,";
$sql .= "likeActorIdNum INT(10) NOT NULL,";
$sql .= "youId varchar(10) NOT NULL,";
$sql .= "likeACImg VARCHAR(255),";
$sql .= "likeACName VARCHAR(255),";
$sql .= "likeStatus INT(1) DEFAULT 1,";
$sql .= "PRIMARY KEY (likeActorId),";
$sql .= "FOREIGN KEY (youId) REFERENCES myuduck(youId) ON DELETE CASCADE";
$sql .= ") CHARACTER SET utf8";

$result = $connect->query($sql);

if ($result) {
    echo "Create Tables Complete";
} else {
    echo "Create Tables False";
}
