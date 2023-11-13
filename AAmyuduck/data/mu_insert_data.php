<?php
include "../connect/connect.php";

$jsonData = '[
    {
        "muNameKo": "오페라의 유령",
        "muNameEn": "The Phantom of the Opera",
        "muPlace": "샤롯데씨어터",
        "muDate": "2023"
    },
    {
        "muNameKo": "드라큘라",
        "muNameEn": "Dracula",
        "muPlace": "샤롯데씨어터",
        "muDate": "2023"
    },
    {
        "muNameKo": "맥베스",
        "muNameEn": "MacBeth",
        "muPlace": "세종문화회관",
        "muDate": "2023"
    },
    {
        "muNameKo": "레미제라블",
        "muNameEn": "Les Misérables",
        "muPlace": "블루스퀘어",
        "muDate": "2023"
    },
    {
        "muNameKo": "레베카",
        "muNameEn": "Rebecca",
        "muPlace": "블루스퀘어",
        "muDate": "2023"
    },
    {
        "muNameKo": "일 테노레",
        "muNameEn": "IL TENORE",
        "muPlace": "예술의전당",
        "muDate": "2023"
    },
    {
        "muNameKo": "몬테크리스토",
        "muNameEn": "Montecristo",
        "muPlace": "충무아트센터",
        "muDate": "2023"
    },
    {
        "muNameKo": "신비아파트 〈붉은 눈의 저주〉",
        "muPlace": "유니버설아트센터",
        "muDate": "2023"
    },
    {
        "muNameKo": "시스터 액트",
        "muNameEn": "Sister Act",
        "muPlace": "디큐브 링크아트센터",
        "muDate": "2023"
    },
    {
        "muNameKo": "삼총사",
        "muNameEn": "The Three Musketeers",
        "muPlace": "한전아트센터",
        "muDate": "2023"
    },







    {
        "muNameKo": "헤드윅",
        "muNameEn": "Hedwig and the Angry Inch",
        "muPlace": "충무아트센터",
        "muDate": "2021"
    },
    {
        "muNameKo": "맨 오브 라만차",
        "muNameEn": "Man of La Mancha",
        "muPlace": "충무아트센터",
        "muDate": "2021"
    },
    {
        "muNameKo": "킹키부츠",
        "muNameEn": "Kinky Boots",
        "muPlace": "충무아트센터",
        "muDate": "2022"
    },
    {
        "muNameKo": "지킬 앤 하이드",
        "muNameEn": "Jekyll and Hyde",
        "muPlace": "샤롯데씨어터",
        "muDate": "2021"
    },
    {
        "muNameKo": "시크릿쥬쥬 별의여신 시즌3 <마지막 콘서트>",
        "muPlace": "이화여자대학교 삼성홀",
        "muDate": "2022"
    },
    {
        "muNameKo": "아이스크림 왕국의 뽀로로와 친구들",
        "muPlace": "유니버설아트센터",
        "muDate": "2021"
    },
    {
        "muNameKo": "데스노트",
        "muNameEn": "Death Note",
        "muPlace": "샤롯데씨어터",
        "muDate": "2023"
    },
    {
        "muNameKo": "엑스칼리버",
        "muNameEn": "Xcalibur",
        "muPlace": "세종문화회관",
        "muDate": "2022"
    }
]';

$data = json_decode($jsonData, true);

foreach ($data as $item) {
    $muNameKo = $item['muNameKo'];
    $muNameEn = isset($item['muNameEn']) ? $item['muNameEn'] : '';
    $muPlace = $item['muPlace'];
    $muDate = $item['muDate'];

    // 중복 확인을 위한 SQL 쿼리
    $checkDuplicateQuery = "SELECT COUNT(*) as count FROM musical WHERE muNameKo = '$muNameKo'";
    $result = $connect->query($checkDuplicateQuery);

    if ($result) {
        $row = $result->fetch_assoc();
        $count = $row['count'];

        if ($count > 0) {
            // 중복 데이터가 이미 존재함
            echo "중복된 데이터가 이미 존재합니다. 중복을 허용하지 않습니다.";
        } else {
            // 중복 데이터가 없으므로 데이터를 삽입 또는 업데이트
            // 이미지 파일 경로 생성 및 데이터베이스 삽입 또는 업데이트 코드
            $imageFileName = 'ca_mu_img' . (array_search($item, $data) + 1) . '.jpg';
            $imagePath = '../assets/img/musical/' . $imageFileName;

            if (file_exists($imagePath)) {
                $sql = "INSERT INTO musical (muNameKo, muNameEn, muPlace, muDate, muImg) VALUES ('$muNameKo', '$muNameEn', '$muPlace', '$muDate', '$imagePath') ON DUPLICATE KEY UPDATE muNameKo = VALUES(muNameKo), muNameEn = VALUES(muNameEn), muPlace = VALUES(muPlace), muDate = VALUES(muDate), muImg = VALUES(muImg);";
            } else {
                echo "오류: 이미지 파일이 존재하지 않습니다. 경로를 확인하세요.";
            }

            if ($connect->query($sql) === TRUE) {
                echo "데이터가 성공적으로 입력되었습니다.<br>";
            } else {
                echo "오류: " . $sql . "<br>" . $connect->error;
            }
        }
    } else {
        echo "중복 확인 쿼리를 실행할 수 없습니다.";
    }
}
