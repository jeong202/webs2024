<?php
// include "../connect/connect.php";

$sql = "CREATE TABLE rating (";
$sql .= "id int(11) NOT NULL AUTO_INCREMENT,";
$sql .= "php int(11) NOT NULL,";
$sql .= "asp int(11) NOT NULL,";
$sql .= "jsp int(11) NOT NULL,";
$sql .= "PRIMARY KEY (id)";
$sql .= ") ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1";

$result = $connect->query($sql);

if($result){
    echo "Create Tables Complete";
} else {
    echo "Create Tables False";
}
?>