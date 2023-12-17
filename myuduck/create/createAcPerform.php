<?php
include "../connect/connect.php";

$sql = "CREATE TABLE ac_perform (";
$sql .= "performId int(10) unsigned auto_increment,";
$sql .= "actorId int(10) unsigned,";
$sql .= "acPerformName varchar(100) NOT NULL,";
$sql .= "acPerformDate varchar(50) NOT NULL,";
$sql .= "acPerformPlace varchar(100) NOT NULL,";
$sql .= "acPerformRole varchar(100) NOT NULL,";

$sql .= "PRIMARY KEY (performId),";
$sql .= "FOREIGN KEY (actorId) REFERENCES actor(actorId)";
$sql .= ") charset=utf8";

$result = $connect->query($sql);

if($result){
    echo "Create ac_perform Table Complete";
} else {
    echo "Create ac_perform Table False";
}
?>