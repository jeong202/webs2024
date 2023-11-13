<?php
 include "../connect/connect.php";
 include "../connect/session.php";
 

//  if (isset($_POST['boardId'])) {
    $boardID = $_POST['boardID'];
    $youId = $_POST['youId'];
    $commentName = $_POST['name'];
    $commentPass = $_POST['pass'];
    $commentMsg = $_POST['msg'];
    $regTime = time();

    
    // echo $youId, $boardID, $commentName,  $commentPass, $commentMsg, "tkqj";

    $sql = "INSERT INTO QAcomment(youId, boardId, commentName, commentPass, commentMsg, commentDelete, regTime) VALUES('$youId', '$boardID', '$commentName', '$commentPass', '$commentMsg', 1, '$regTime')";
    $result = $connect->query($sql);


    if ($result) {
        $response = array("success" => true, "message" => "댓글이 성공적으로 등록되었습니다.");
        echo json_encode($response);
    } else {
        $response = array("success" => false, "message" => "댓글 등록 중 오류가 발생했습니다: " . $connect->error);
        echo json_encode($response);
    }
// }

?>