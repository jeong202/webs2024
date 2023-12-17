<?php
include "../connect/connect.php";

$sql = "CREATE TABLE likeTheater (";
$sql .= "likeTheaterId INT(10) UNSIGNED AUTO_INCREMENT,";
$sql .= "likeTheaterIdNum INT(10) NOT NULL,";
$sql .= "youId varchar(10) NOT NULL,";
$sql .= "likethLogo VARCHAR(255),";
$sql .= "likethName VARCHAR(255),";
$sql .= "likeStatus INT(1) DEFAULT 1,";
$sql .= "PRIMARY KEY (likeTheaterId),";
$sql .= "FOREIGN KEY (youId) REFERENCES myuduck(youId) ON DELETE CASCADE";
$sql .= ") CHARACTER SET utf8";

$result = $connect->query($sql);

if ($result) {
    echo "Create Tables Complete";
} else {
    echo "Create Tables False";
}
?>