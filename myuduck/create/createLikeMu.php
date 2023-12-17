<?php
include "../connect/connect.php";

$sql = "CREATE TABLE likeMusical (";
$sql .= "likeMusicalId INT(10) UNSIGNED AUTO_INCREMENT,";
$sql .= "likeMusicalIdNum INT(10) NOT NULL,";
$sql .= "youId varchar(10) NOT NULL,";
$sql .= "likemuImg VARCHAR(255),";
$sql .= "likemuName VARCHAR(255),";
$sql .= "likemuPlace varchar(50) NOT NULL,";
$sql .= "likeStatus INT(1) DEFAULT 1,";
$sql .= "PRIMARY KEY (likeMusicalId),";
$sql .= "FOREIGN KEY (youId) REFERENCES myuduck(youId) ON DELETE CASCADE";
$sql .= ") CHARACTER SET utf8";

$result = $connect->query($sql);

if ($result) {
    echo "Create Tables Complete";
} else {
    echo "Create Tables False";
}
?>