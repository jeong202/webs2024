<?php
   include "../connect/connect.php";
   include "../connect/session.php";

   $commentPass = $_POST['commentPass'];
   $commentId = $_POST['commentId'];
   $youId = $_SESSION['youId'];

   $sql = "SELECT commentPass FROM QAcomment WHERE commentPass = '$commentPass' AND commentId = '$commentId'";
   $result = $connect -> query($sql);

//    if($result -> num_rows == 0 || $youId !== "admin"){
//        $jsonResult = "bad";
//    } else {
//        // $updateSql = "DELETE FROM blogComment WHERE commentId = '$commentId'"
//        $updateSql = "UPDATE QAcomment SET commentDelete = '0' WHERE commentId = '$commentId'";
//        $connect -> query($updateSql);
//        $jsonResult = "good";
//    }

    if ($result->num_rows > 0 || $youId === "admin") {
        // $updateSql = "DELETE FROM blogComment WHERE commentId = '$commentId'"
        $updateSql = "UPDATE QAcomment SET commentDelete = '0' WHERE commentId = '$commentId'";
        $connect->query($updateSql);
        $jsonResult = "good";
    } else {
        $jsonResult = "bad";
    }
   echo json_encode(array("result" => $jsonResult));
?>