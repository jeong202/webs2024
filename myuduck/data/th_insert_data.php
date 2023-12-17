<?php
include "../connect/connect.php";

$jsonData = '[
    {
        "thLogo": "../assets/img/theater/theater01.jpg",
        "thName": "샤롯데씨어터",
        "thAddress": "서울특별시 송파구 올림픽로 240",
        "thCall": "1644-0078",
        "thHomepage": "https://www.charlottetheater.co.kr/",
        "thTransport": "지하철로 오시는 길\n2호선, 8호선 잠실역 3번출구로 나오셔서, 롯데호텔 정문을 지나 5m전방 (도보로 5분소요)\n\n버스로 오시는 길\n잠실역 4번출구/ 잠실 롯데 백화점앞지선버스 2225,3217,3312,3313,3314,3315,3414,3415\n간선버스 301, 360, 632, 730\n공항버스 4,600,606\n\n잠실역 5번출구/ 잠실 5단지 앞 (롯데백화점 맞은편)\n지선버스 2225,3217,3312,3313,3314,3315,3411,3412,3414,3415\n간선버스 301,360,362,730\n공항버스 4,600,606\n\n잠실역 6번출구/ 잠실 5단지 앞지선버스\n2225,2311,2412,3215,3312\n간선버스 302,303\n광역버스 9202,9203,9403\n\n잠실역 7번출구/ 롯데캐슬 앞지선\n버스 2225,2412,2315,2316,3312,3411,3412,3413\n간선버스 302.303.361\n광역버스 9202,9203,9403",
        "thSeatImg": "../assets/img/theater/thSeatImg01.jpg",
        "thPerform": [
            "데스노트(2023)",
            "스위니토드(2023)",
            "미세스다웃파이어(2022)"
        ]
    },
    {
        "thLogo": "../assets/img/theater/theater02.jpg",
        "thName": "세종문화회관",
        "thAddress": "서울특별시 종로구 세종대로 175",
        "thCall": "02-399-1000",
        "thHomepage": "https://www.sejongpac.or.kr/portal/main/main.do",
        "thTransport": "지하철 이용안내\n1호선\n종각역 하차 →1번 출구로 나와서 광화문 방향 350M 지점\n\n3호선\n경복궁역 하차 →6번 출구에서 세종대로 방향\n\n5호선\n광화문역 하차→1, 8번 출구\n7번 출구로 나와서 광화문 방향으로 200M 지점\n\n버스 이용안내\n세종문화회관\nB간선 / 401, 406, 700, 703, 704\nG지선 / 1711, 7016, 7018, 7022\nR광역 / 5000A, 5000B, 5005, 5500-2, 9000, 9000-1, 9200, 9401, 970\nB기타 / (마을) 종로09, 종로11 (공항) 6005\n\nKT 광화문지사\nB간선 / 109, 606, 708\nG지선 / 1020, 1711, 7016, 7018, 7212\nR기타 / (마을) 종로09, 종로11, 종로03\n\n광화문(01120 가변)\nB간선 / 600, 602\nG지선 / 7019\nB기타 / (경기일반) 790, 1002\n(경기좌석) 1004, 9710, 9710-1, 8600, 8601, 9710, 9709,\n\n광화문(01009, 01010 중앙차로)\nB간선 / 103, 150, 160, 260, 270, 271, 273, 370, 470, 601, 702A, 702B, 705, 720, 721, 741\nR광역 / 9701\nB기타 /(심야) N26, N37 (공항) 6002",
        "thSeatImg": "../assets/img/theater/thSeatImg02.jpg",
        "thPerform": [
            "드리머스(2023)",
            "래빗 <잊혀진 암호명>(2023)",
            "맥베스(2023)"
        ]
    },
    {
        "thLogo": "../assets/img/theater/theater03.jpg",
        "thName": "예술의전당",
        "thAddress": "서울특별시 서초구 남부순환로 2406 예술의전당",
        "thCall": "1668-1352",
        "thHomepage": "https://www.sac.or.kr/site/main/home",
        "thTransport": "지하철\n\n3호선\n남부터미널역 5번 출구\n1 도보이동 (약 5~10분 소요)\n2 마을버스 22번(초록색)을 타고 두 정거장 이동\n\n2호선\n서초역 3번 출구\n1 마을버스 11번(초록색)을 타고 네 정거장 이동\n2 도보이동 (약 20~25분 소요)\n\n4호선\n사당역 1번 출구\n1 마을버스 17번(초록색)을 타고 16개 정거장 이동\n\n버스\n\n간선\n406, 405\n\n지선\n5413\n\n직행\n1500-2, 1553\n\n마을\n서초11, 서초17, 서초22",
        "thSeatImg": "../assets/img/theater/thSeatImg03.jpg",
        "thPerform": [
            "일 테노레(2023)",  
            "그날들(2023)",
            "베토벤(2023)"
        ]
    },
    {
        "thLogo": "../assets/img/theater/theater04.jpg",
        "thName": "블루스퀘어",
        "thAddress": "서울특별시 용산구 한남동 이태원로 294",
        "thCall": "1544-1591",
        "thHomepage": "http://www.bluesquare.kr/",
        "thTransport": "지하철 이용 시 : 6호선 한강진역의 2번 출구와 3번 출구 사이 지하철역 연결통로 이용\n버스 이용 시 : \n<한강진역> 하차 (1번 출구 방면) - 지선 : 8620 (주말맞춤버스) - 간선 : 110A, 405\n<한강진역> 하차 (2번 출구 방면) - 지선 : 0018, 8620 (주말맞춤버스) - 간선 : 110B, 405 - 순환 : 03\n<시립한남직업학교> 하차 - 지선 : 0018, 3011, 6211 - 간선 : 110B, 142, 144, 402, 407, 420\n※ 강북방면에서 남산1호터널(고가도로)을 대중 교통편으로 이용하시는 분들은 순천향대학병원(구 단국대학교) 정류장에서 하차하셔서 한강진역 방향으로 10분정도 도보로 이용하셔야 합니다.",
        "thSeatImg": "../assets/img/theater/thSeatImg04.jpg",
        "thPerform": [
            "레미제라블(2023)",
            "레베카(2023)",
            "시카고(2023)"
        ]
    },
    {
        "thLogo": "../assets/img/theater/theater05.jpg",
        "thName": "LG아트센터서울",
        "thAddress": "서울특별시 강서구 마곡중앙로 136",
        "thCall": "1661-0017",
        "thHomepage": "https://www.lgart.com/home/ko/main",
        "thTransport": "지하철\n9호선/공항철도마곡나루역 3번/4번 출구 (지하 직접 연결)\n5호선마곡역 3번 출구에서 700M, 도보 10분\n\n버스\n지선버스6642, 6645, 6648\n간선버스N65\n마을버스강서07",
        "thSeatImg": "../assets/img/theater/thSeatImg05.jpg",
        "thPerform": [
            "벤허(2023)",
            "영웅(2022)",
            "하데스타운(2021)"
        ]
    },
    {
        "thLogo": "../assets/img/theater/theater06.jpg",
        "thName": "충무아트센터",
        "thAddress": "서울특별시 중구 퇴계로 387 6층",
        "thCall": "02-2230-6600",
        "thHomepage": "https://www.caci.or.kr/caci/main/intro.do",
        "thTransport": "지하철 이용시 : 6호선 신당역 9번 출입구로 나와서 동대문역사문화공원 방향으로 50m\n2호선 신당역 1번 출입구로 나와서 동대문역사문화공원 방향으로 150m\n2호선 동대문역사문화공원 2번 출입구로 나와서 신당사거리 방향으로 300m\n4호선 동대문역사문화공원역 2번 출입구로 나와서 신당사거리 방향으로 300m\n5호선 동대문역사문화공원역 2번 출입구로 나와서 신당사거리 방향으로 300m\n\n버스 이용시 : B간선버스 142, 147, 263, 302, 371번 탑승 후 신당동 4거리(중부소방서)에서 하차\nG지선버스 1017, 2012, 2014, 2233, 0211번 탑승 후 신당동 4거리(중부소방서)에서 하차",
        "thSeatImg": "../assets/img/theater/thSeatImg06.jpg",
        "thPerform": [
            "몬테크리스토(2023)",
            "리진 <빛의 여인>(2023)",
            "멤피스(2023)"
        ]
    },
    {
        "thLogo": "../assets/img/theater/theater07.jpg",
        "thName": "디큐브링크아트센터",
        "thAddress": "서울특별시 구로구 경인로 662",
        "thCall": "02-2211-3000",
        "thHomepage": "http://www.d3art.co.kr/",
        "thTransport": "지하철 이용하실 때\n1,2호선 신도림역 하차(1번 출구와 지하도로 연결)\n김포국제공항에서 오실 때 : 5호선 김포공항역 > 까치산역에서 2호선 환승 > 신도림역 하차\n인천국제공항에서 오실 때 : 공항철도 인천국제공항역 > 홍대입구에서 2호선 환승 > 신도림역 하차\n\n버스 이용하실 때\n<신도림역 1번 출구 하차 시>\n영등포/구로 방향 : 10, 83, 88, 510, 11-1, 11-2(일반), 320, 301(좌석), 503, 670, 260, 160, 600(간선), 6515, 5714, 6512, 6513, 6637, 6640, 5615(지선)\n목동 방향 : 6648, 6649(지선), 구로09(마을)\n<신도림역 2번 출구 하차 시>\n5619, 5626, 6411, 6650, 6651, 금천07, 영등포01\n※ 버스에서 하차하신 후 지하도를 통하여 신도림역 1번 출구로 나오시면 바로 연결되어 있습니다.",
        "thSeatImg": "../assets/img/theater/thSeatImg07.jpg",
        "thPerform": [
            "시스터 액트(2023)",
            "번개맨 <전설의 시작>(2023)",
            "신비아파트 <붉은 눈의 저주>(2023)"
        ]
    },
    {
        "thLogo": "../assets/img/theater/theater08.jpg",
        "thName": "국립극장(해오름극장)",
        "thAddress": "서울특별시 중구 장충단로 59",
        "thCall": "02-2280-4114",
        "thHomepage": "https://www.ntok.go.kr/kr/Main/Index",
        "thTransport": "셔틀버스 이용안내\n[공연 전]\n타는 곳 : 동대입구역(3호선) 6번 출구 남산순환버스 정류장 앞\n운행구간 : 동대입구역(3호선) → 국립극장\n운행시간 : 매회 공연 1시간 전부터 20분 전까지 10분~15분 간격 탄력적 운행 (관람 탑승객의 수요 고려)\n예) 19:30 공연일 경우 버스출발시간 : 18:30, 18:40~45, 18:50~55, 19:00~05, 19:10\n\n[공연 후]\n타는 곳 : 하늘극장 앞 셔틀버스 승강장\n운행구간 : 국립극장 → 동대입구역(3호선) 1번출구 → 동대문역사문화공원역(2/4/5호선) 1번출구 광희사거리 앞\n운행시간 : 공연 종료 후\n\n[지하철 이용안내]\n3 3호선 동대입구역 하차 : 동대입구역(3호선) 6번 출구 남산순환버스 정류장 앞\n3 4 3, 4호선 충무로역 하차 : 충무로역(3호선) 2번 출구(대한극장 앞) 01번 남산순환버스 이용\n2 4 5 2, 4, 5호선 동대문역사문화공원역 하차 : 8번 출구 420번(파랑 간선버스) 이용\n6 6호선 한강진역 하차 : 2번 출구에서 서울중부기술교육원,블루스퀘어 정류소로 이동 420번(파랑 간선버스) 이용\n\n[순환/시내버스 이용안내]\n순환 순환버스 : 01\n간선 간선버스 : 420, 144, 301\n지선 지선버스 : 2012, 7011",
        "thSeatImg": "../assets/img/theater/thSeatImg08.jpg",
        "thPerform": [
            "데뷔를 대비하라(2023)",
            "합★체(2023)",
            "알로하, 나의 엄마들(2023)"
        ]
    },
    {
        "thLogo": "../assets/img/theater/theater09.jpg",
        "thName": "유니버설아트센터",
        "thAddress": "서울특별시 광진구 천호대로 664",
        "thCall": "070-7124-1740",
        "thHomepage": "http://www.uac.co.kr/",
        "thTransport": "버스 : 어린이대공원후문 하차\n지선 2221, 2232, 3215, 303\n간선 130, 300, 370\n광역 9301, 9403\n\n지하철 : 5호선 아차산역 유니버설아트센터 방면 4번 출구",
        "thSeatImg": "../assets/img/theater/thSeatImg09.jpg",
        "thPerform": [
            "꼬마버스 타요 <용감한 구조대 레스큐 타요>(2023)",
            "미니특공대 브이레인저스(2023)",
            "번개맨 〈전설의 시작〉(2023)"
        ]
    },
    {
        "thLogo": "../assets/img/theater/theater10.jpg",
        "thName": "한전아트센터",
        "thAddress": "서울특별시 서초구 서초동 1355",
        "thCall": "02-2105-8133",
        "thHomepage": "https://home.kepco.co.kr/kepco/AR/main.do?menuCd=FN10",
        "thTransport": "지하철 : 양재역 하차\n지하철 3호선 양재역 1번 출구로 나와서 남부터미널 방향으로 200m 내려오다가 스타벅스와 하나은행 건물 사이길로 우회전 후 150m 직진 좌측 한전아트센터 도착\n버스 : 서초구청 앞 하차\n- 파랑(간선) : 서초17, 서초19, 서초20\n- 초록(지선) : 3412\n양재역 하차\n- 파랑(간선) : 140, 407, 462, 470, 471, 402, 402(심) ,641\n- 초록(지선) : 3412, 3423 4312, 4422, 4424, 4430, 4432, 4433, 강남02, 서초08, 서초09, 서초18, 서초20\n- 빨강(광역) : 1550, 9100, 9200, 9300, 9404, 9408, 9409, 9411, 9411(심), 9503, 9700, 9711\n마을버스 : 서초19번 배차간격(15~20분)\n양재역 6번 출구로 나와서 마을버스 정류장에서 승차 > 영동중 후문 하차(5~7분 소요)\n서초21번 배차간격(7~15분)\n양재역 4번 출구로 나와서 마을버스 정류장에서 승차 > 영동중 후문 하차(5~7분 소요)",
        "thSeatImg": "../assets/img/theater/thSeatImg10.jpg",
        "thPerform": [
            "겨울 나그네(2023)",
            "삼총사(2023)",
            "할란카운티(2023)"
        ]
    },
    {
        "thLogo": "../assets/img/theater/theater11.jpg",
        "thName": "우리금융아트홀",
        "thAddress": "서울특별시 송파구 오륜동 올림픽로 424",
        "thCall": "02-410-1652",
        "thHomepage": "https://www.ksponco.or.kr/olympicpark/menu.es?mid=a20301031100",
        "thTransport": "지하철 : 5호선, 올림픽공원역 3번출구\n\n버스 : 초록색(지선) 3216, 3412, 3413, 3414\n경기버스 30, 30-5",
        "thSeatImg": "../assets/img/theater/thSeatImg11.jpg",
        "thPerform": [
            "태권, 날아올라(2023)",
            "친구의 전설(2023)",
            "산타와 빈양말(2023)"
        ]
    }
]';

$data = json_decode($jsonData, true);

if (json_last_error() !== JSON_ERROR_NONE) {
    die("JSON 디코딩 오류: " . json_last_error_msg());
}

foreach ($data as $item) {
    $thName = mysqli_real_escape_string($connect, $item['thName']);
    $thAddress = mysqli_real_escape_string($connect, $item['thAddress']);
    $thCall = mysqli_real_escape_string($connect, $item['thCall']);
    $thHomepage = mysqli_real_escape_string($connect, $item['thHomepage']);
    $thTransport = mysqli_real_escape_string($connect, $item['thTransport']);

    $thPerform = mysqli_real_escape_string($connect, json_encode($item['thPerform'], JSON_UNESCAPED_UNICODE));


    $thLogo = mysqli_real_escape_string($connect, $item['thLogo']);
    $thSeatImg = mysqli_real_escape_string($connect, $item['thSeatImg']);

    $sql = "INSERT INTO theater (thName, thAddress, thCall, thHomepage, thTransport, thPerform, thLogo, thSeatImg) VALUES ('$thName', '$thAddress', '$thCall', '$thHomepage', '$thTransport', '$thPerform', '$thLogo', '$thSeatImg')";

    if ($connect->query($sql) === TRUE) {
        echo "데이터가 성공적으로 입력되었습니다.<br>";
    } else {
        echo "오류: " . $sql . "<br>" . $connect->error;
    }
}

$connect->close();
?>