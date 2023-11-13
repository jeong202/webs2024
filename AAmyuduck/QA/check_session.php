<?php
session_start();

if (!isset($_SESSION['myuduckId'])) {
    echo "not_logged_in";
} else {
    // 로그인된 경우 추가 작업 수행
}
?>