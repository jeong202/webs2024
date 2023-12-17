<?php
    include "../connect/connect.php";

    $sql = "create table myuduck(";
    $sql .= "myuduckId int(10) unsigned auto_increment,";
    $sql .= "youId varchar(10) NOT NULL,";
    $sql .= "youPass varchar(40) NOT NULL,";
    $sql .= "youName varchar(10) NOT NULL,";
    $sql .= "youAddress varchar(255) DEFAULT NULL,";
    $sql .= "youEmail varchar(40) DEFAULT NULL,";
    $sql .= "youPhone varchar(40) NOT NULL,";
    $sql .= "youDelete int(10) DEFAULT 1,";
    $sql .= "regTime int(20) NOT NULL,";
    $sql .= "PRIMARY KEY(myuduckId)";
    $sql .= ") charset=utf8";
    
    $result = $connect -> query($sql);

    // if($result){
    //     echo "Create Tables Complete";
    // } else {
    //     echo "Create Tables False";
    // }
?>