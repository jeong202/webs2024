<?php
include "../connect/connect.php";
include "../connect/session.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 여기서 GET 메서드일 때 초기 좋아요 상태를 처리하는 로직을 작성합니다.

    $loggedIn = isset($_SESSION['youId']) ? true : false;

    if ($loggedIn) {
        $youId = $_SESSION['youId'];
        $likeActorIdNum = $_POST['likeActorId'];

        $initialLikeStatusQuery = "SELECT * FROM likeActor WHERE youId = '$youId' AND likeActorIdNum = $likeActorIdNum";
        $initialLikeStatusResult = $connect->query($initialLikeStatusQuery);

        if ($initialLikeStatusResult && $initialLikeStatusResult->num_rows > 0) {
            $initialLikeStatus = $initialLikeStatusResult->fetch_assoc();
            echo json_encode(['status' => 'success', 'initialLikeStatus' => $initialLikeStatus], JSON_UNESCAPED_UNICODE);
        } else {
            echo json_encode(['status' => 'success', 'initialLikeStatus' => null], JSON_UNESCAPED_UNICODE);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => '로그인이 필요합니다.'], JSON_UNESCAPED_UNICODE);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => '잘못된 요청입니다.'], JSON_UNESCAPED_UNICODE);
}
?>