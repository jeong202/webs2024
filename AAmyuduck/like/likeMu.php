<?php
include "../connect/connect.php";
include "../connect/session.php";

// 필요한 POST 데이터가 모두 제공되었는지 확인
if (isset($_POST['likeMusicalIdNum'], $_POST['likemuImg'], $_POST['likemuName'], $_POST['likemuPlace'], $_POST['isClicked'])) {
    $likeMusicalIdNum = $_POST['likeMusicalIdNum'];
    $likemuImg = $_POST['likemuImg'];
    $likemuName = $_POST['likemuName'];
    $likemuPlace = $_POST['likemuPlace'];
    $isClicked = $_POST['isClicked'];

    // 사용자가 로그인되어 있는지 확인
    if (isset($_SESSION['youId']) && !empty($_SESSION['youId'])) {
        $youId = $_SESSION['youId'];

        // 찜하기 또는 찜 취소 작업 수행
        $response = array();
        $sql = "";

        // 이미 해당 조건의 레코드가 있는지 확인
        $checkSql = "SELECT * FROM likeMusical WHERE likeMusicalIdNum = '$likeMusicalIdNum' AND youId = '$youId'";
        $checkResult = $connect->query($checkSql);
        $count = $checkResult->num_rows;
        echo "count", $count;

        if ($count > 0) {
            // 이미 레코드가 있는 경우
            $row = $checkResult->fetch_assoc();
            if ($row['likeStatus']) {
                // 찜 취소 - 테이블에서 레코드 삭제
                $sql = "UPDATE likeMusical SET likeStatus = 0 WHERE likeMusicalIdNum = '$likeMusicalIdNum' AND youId = '$youId' AND likeStatus = 1";
            } else {
                // 찜하기 - 테이블에 정보 업데이트
                $sql = "UPDATE likeMusical SET likeStatus = 1 WHERE likeMusicalIdNum = '$likeMusicalIdNum' AND youId = '$youId' AND likeStatus = 0";
            }
        } else {
            // 레코드가 없는 경우
            if ($isClicked) {
                // 찜하기 - 테이블에 정보 추가
                $sql = "INSERT INTO likeMusical (likeMusicalIdNum, youId, likemuImg, likemuName, likemuPlace, likeStatus) VALUES ('$likeMusicalIdNum', '$youId', '$likemuImg', '$likemuName',' $likemuPlace', 1)";
            }
        }

        $result = $connect->query($sql);

        if ($result) {
            $response = array(
                'status' => 'success',
                'message' => $isClicked ? '찜하기 성공' : '찜 취소 성공'
            );
        } else {
            $response = array(
                'status' => 'error',
                'message' => $isClicked ? '찜하기 실패: ' . $connect->error : '찜 취소 실패: ' . $connect->error
            );
        }
    } else {
        $response = array(
            'status' => 'error',
            'message' => '로그인이 필요합니다.'
        );
    }
} 
else {
    $response = array(
        'status' => 'error',
        'message' => '올바르지 않은 요청입니다.'
    );
}

// JSON으로 응답 전송
echo json_encode($response);
exit;
?>