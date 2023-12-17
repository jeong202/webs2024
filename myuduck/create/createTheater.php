<?php
include "../connect/connect.php";

$sql = "CREATE TABLE theater (";
$sql .= "theaterId INT(10) UNSIGNED AUTO_INCREMENT,";
$sql .= "thLogo VARCHAR(255),";
$sql .= "thName VARCHAR(255),";
$sql .= "thAddress VARCHAR(255),";
$sql .= "thCall VARCHAR(20),";
$sql .= "thHomepage VARCHAR(255),";
$sql .= "thTransport TEXT,";
$sql .= "thSeatImg VARCHAR(255),";
$sql .= "thPerform VARCHAR(255),";
$sql .= "PRIMARY KEY (theaterId)";
$sql .= ") CHARACTER SET utf8";

$result = $connect->query($sql);

if ($result) {
    echo "Create Tables Complete";
} else {
    echo "Create Tables False";
}
?>