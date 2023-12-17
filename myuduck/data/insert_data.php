<?php
include "../connect/connect.php";

$jsonData = '[
    {
        "muNameKo": "빨래",
        "muPlace": "샤롯데씨어터",
        "muDate": "2023"
    },
    {
        "muNameKo": "오페라의 유령",
        "muNameEn": "The Phantom of the Opera",
        "muPlace": "샤롯데씨어터",
        "muDate": "2023"
    },
    {
        "muNameKo": "레미제라블",
        "muNameEn": "Les Miserables",
        "muPlace": "블루스퀘어",
        "muDate": "2023"
    },
    {
        "muNameKo": "웃는 남자",
        "muPlace": "예술의전당",
        "muDate": "2023"
    },
    {
        "muNameKo": "더 데빌",
        "muNameEn": "The devil",
        "muPlace": "충무아트센터",
        "muDate": "2022"
    },
    {
        "muNameKo": "프랑켄슈타인",
        "muNameEn": "Frankenstein",
        "muPlace": "블루스퀘어",
        "muDate": "2021"
    }
]';

$data = json_decode($jsonData, true);

foreach ($data as $item) {
    $muNameKo = $item['muNameKo'];
    $muNameEn = isset($item['muNameEn']) ? $item['muNameEn'] : '';
    $muPlace = $item['muPlace'];
    $muDate = $item['muDate'];
    $unique_identifier = $muNameKo . '_' . $muDate;

    $sql = "INSERT INTO musical (muNameKo, muNameEn, muPlace, muDate, unique_identifier) VALUES ('$muNameKo', '$muNameEn', '$muPlace', '$muDate', '$unique_identifier') ON DUPLICATE KEY UPDATE muNameKo = VALUES(muNameKo), muNameEn = VALUES(muNameEn), muPlace = VALUES(muPlace), muDate = VALUES(muDate);";

    if ($connect->query($sql) === TRUE) {
        echo "데이터가 성공적으로 입력되었습니다.<br>";
    } else {
        echo "오류: " . $sql . "<br>" . $connect->error;
    }
}

$connect->close();
?>