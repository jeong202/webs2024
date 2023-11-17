<?php
include "../connect/connect.php";

$jsonData = '[
    {
        "muNameKo": "타이타닉",
        "muNameEn": "Titanic",
        "muPlace": "샤롯데씨어터",
        "muDate": "2017.11.08 ~ 2018.02.11",
        "muTime": "150분(인터미션 20분 포함)",
        "muAge": "만 7세이상"
    },
    {
        "muNameKo": "여신님이 보고 계셔",
        "muPlace": "의정부예술의전당 대극장",
        "muDate": "2018.05.12 ~ 2018.05.12",
        "muTime": "120분",
        "muAge": "만 11세이상"
    },
    {
        "muNameKo": "브로드웨이 42번가",
        "muNameEn": "42nd Street",
        "muPlace": "디큐브 링크아트센터",
        "muDate": "2017.08.05 ~2017.10.09",
        "muTime": "150분(인터미션 20분 포함)",
        "muAge": "만 7세이상"
    },
    {
        "muNameKo": "프리즌",
        "muNameEn": "Prison",
        "muPlace": "대학로 극장가게",
        "muDate": "2020.04.29 ~ 2021.03.31",
        "muTime": "100분",
        "muAge": "만 7세이상"
    },
    {
        "muNameKo": "몬테크리스토",
        "muNameEn": "Montecristo",
        "muPlace": "LG아트센터서울",
        "muDate": "2020.11.17 ~ 2021.03.28",
        "muTime": "160분(인터미션 20분 포함)",
        "muAge": "8세이상 관람가능"
    },
    {
        "muNameKo": "맨 오브 라만차",
        "muNameEn": "Man of La Mancha",
        "muPlace": "충무아트센터",
        "muDate": "2021.03.24 ~ 2021.05.16",
        "muTime": "170분(인터미션 20분 포함)",
        "muAge": "14세 이상 관람가"
    },
    {
        "muNameKo": "드라큘라",
        "muNameEn": "Dracula",
        "muPlace": "블루스퀘어",
        "muDate": "2021.05.20 ~ 2021.08.01",
        "muTime": "165분(인터미션 20분 포함)",
        "muAge": "14세 이상 관람가"
        
    },
    {
        "muNameKo": "1976 할란카운티",
        "muNameEn": "1976 Harlan County",
        "muPlace": "충무아트센터",
        "muDate": "2021.05.28 ~2021.07.04",
        "muTime": "165분(인터미션 15분 포함)",
        "muAge": "8세이상 관람가능"
    },
    {
        "muNameKo": "광화문 연가",
        "muPlace": "예술의전당",
        "muDate": "2021.07.16 ~ 2021.09.05",
        "muTime": "160분(인터미션 20분 포함)",
        "muAge": "8세이상 관람가능"
    },
    {
        "muNameKo": "헤드윅",
        "muNameEn": "Hedwig and the Angry Inch",
        "muPlace": "충무아트센터",
        "muDate": "2021.07.30 ~ 2021.10.31",
        "muTime": "2시간 15분 이상(인터미션없음)",
        "muAge": "16세 이상 관람 가능"
    },
    {
        "muNameKo": "하데스타운",
        "muNameEn": "Hadestown",
        "muPlace": "LG아트센터서울",
        "muDate": "2021.09.07 ~ 2022.02.27",
        "muTime": "155분(인터미션 20분 포함)",
        "muAge": "미취학아동입장불가"
    },
    {
        "muNameKo": "아이스크림 왕국의 뽀로로와 친구들",
        "muPlace": "유니버설아트센터",
        "muDate": "2021.10.02 ~ 2021.10.31",
        "muTime": "65분",
        "muAge": "20개월이상 관람가능"
    },
    {
        "muNameKo": "지킬 앤 하이드",
        "muNameEn": "Jekyll and Hyde",
        "muPlace": "샤롯데씨어터",
        "muDate": "2021.10.19 ~ 2022.05.08",
        "muTime": "170분(인터미션 20분 포함)",
        "muAge": "14세 이상 관람가"
    },
    {
        "muNameKo": "젠틀맨스 가이드",
        "muNameEn": "A Gentleman s Guide",
        "muPlace": "광림아트센터 BBCH홀",
        "muDate": "2021.11.13 ~ 2022.02.20",
        "muTime": "150분(인터미션 15분 포함)",
        "muAge": "중학생이상 관람가"
    },
    {
        "muNameKo": "레베카",
        "muNameEn": "Rebecca",
        "muPlace": "충무아트센터",
        "muDate": "2021.11.16 ~ 2022.02.28",
        "muTime": "170분(인터미션 20분 포함)",
        "muAge": "8세이상 관람가능"
    },
    {
        "muNameKo": "산타와 빈양말",
        "muPlace": "국립중앙박물관 극장용",
        "muDate": "2021.11.27 ~ 2021.12.31",
        "muTime": "70분",
        "muAge": "24개월이상 관람가능"
    },
    {
        "muNameKo": "엑스칼리버",
        "muNameEn": "Xcalibur",
        "muPlace": "세종문화회관",
        "muDate": "2022.01.29 ~ 2022.03.13",
        "muTime": "160분(인터미션 20분 포함)",
        "muAge": "초8세이상 관람가능"
    },
    {
        "muNameKo": "리지",
        "muNameEn": "Lizzie",
        "muPlace": "두산아트센터 연강홀",
        "muDate": "2022.03.24 ~ 2022.06.12",
        "muTime": "120분(인터미션 15분 포함)",
        "muAge": "고등학생이상 관람가"
    },
    {
        "muNameKo": "지붕위의 바이올린",
        "muNameEn": "Fiddler on the Roof",
        "muPlace": "세종문화회관",
        "muDate": "2022.04.22 ~ 2022.05.08",
        "muTime": "160분(인터미션 20분 포함)",
        "muAge": "만 7세이상"
    },
    {
        "muNameKo": "아이다",
        "muNameEn": "Aida",
        "muPlace": "블루스퀘어",
        "muDate": "2022.05.10 ~ 2022.08.07",
        "muTime": "160분(인터미션 20분 포함)",
        "muAge": "8세이상 관람가능"
    },

    {
        "muNameKo": "포미니츠",
        "muNameEn": "Four Minutes",
        "muPlace": "국립정동극장(서울)",
        "muDate": "2022.06.21 ~ 2022.08.14",
        "muTime": "110분",
        "muAge": "14세 이상 관람가"
    },    
    {
        "muNameKo": "태권, 날아올라",
        "muPlace": "국립중앙박물관 극장용",
        "muDate": "2022.06.12 ~ 2022.07.03",
        "muTime": "70분",
        "muAge": "48개월이상 관람가능"
    },
    {
        "muNameKo": "쉘터",
        "muNameEn": "Shelter",
        "muPlace": "노원문화예술회관 소공연장",
        "muDate": "2022.06.21 ~ 2022.06.22",
        "muTime": "110분(인터미션 15분 포함)",
        "muAge": "12세 이상"
    },
    {
        "muNameKo": "데스노트",
        "muNameEn": "Death Note",
        "muPlace": "예술의전당",
        "muDate": "2022.07.01 ~ 2022.08.14",
        "muTime": "160분(인터미션 20분 포함)",
        "muAge": "14세 이상 관람가"
    },
    {
        "muNameKo": "킹키부츠",
        "muNameEn": "Kinky Boots",
        "muPlace": "충무아트센터",
        "muDate": "2022.07.20 ~ 2022.10.23",
        "muTime": "155분(인터미션 20분 포함)",
        "muAge": "8세이상 관람가능"
    },
    {
        "muNameKo": "시크릿쥬쥬 별의여신 시즌3 <마지막 콘서트>",
        "muPlace": "이화여자대학교 삼성홀",
        "muDate": "2022.08.20 ~ 2022.08.28",
        "muTime": "70분",
        "muAge": "24개월이상 관람가능"
    },
    {
        "muNameKo": "엘리자벳",
        "muNameEn": "Elisabeth",
        "muPlace": "블루스퀘어",
        "muDate": "2022.08.30 ~ 2022.11.13",
        "muTime": "170분(인터미션 20분 포함)",
        "muAge": "8세이상 관람가능"
    },
    {
        "muNameKo": "안나 차이코프스키",
        "muNameEn": "Anna, Tchaikovsky",
        "muPlace": "유니플렉스 1관 (대극장)",
        "muDate": "2022.09.03 ~ 2022.10.30",
        "muTime": "120분",
        "muAge": "만 7세이상"
    },
    {
        "muNameKo": "삼총사",
        "muNameEn": "The Three Musketeers",
        "muPlace": "유니버설아트센터",
        "muDate": "2022.09.16 ~ 2023.11.06",
        "muTime": "150분(인터미션 20분 포함)",
        "muAge": "8세이상 관람가능"
    },
    {
        "muNameKo": "사랑의 불시착",
        "muNameEn": "Crash Landing On You",
        "muPlace": "coex 신한카드 artium",
        "muDate": "2022.09.16 ~ 2022.11.13",
        "muTime": "170분(인터미션 20분 포함)",
        "muAge": "8세이상 관람가능"
    },
    {
        "muNameKo": "인간의 법정",
        "muPlace": "아트원씨어터 2관",
        "muDate": "2022.09.28 ~ 2022.12.04",
        "muTime": "100분",
        "muAge": "17세 이상 관람가"
    },
    {
        "muNameKo": "지저스 크라이스트 수퍼스타",
        "muNameEn": "Jesus Christ Superstar",
        "muPlace": "광림아트센터 BBCH홀",
        "muDate": "2022.11.10 ~ 2023.01.15",
        "muTime": "135분(인터미션 20분 포함)",
        "muAge": "미취학아동입장불가"
    },
    {
        "muNameKo": "드라큘라",
        "muNameEn": "Dracula",
        "muPlace": "우리금융아트홀",
        "muDate": "2022.11.15 ~ 2023.01.15",
        "muTime": "150분(인터미션 20분 포함)",
        "muAge": "14세 이상 관람가"
        
    },
    {
        "muNameKo": "알로하, 나의 엄마들",
        "muPlace": "세종문화회관",
        "muDate": "2022.11.22 ~ 2022.12.11",
        "muTime": "165분(인터미션 15분 포함)",
        "muAge": "만 7세이상"
    },
    {
        "muNameKo": "스위니토드",
        "muNameEn": "Sweeney Todd",
        "muPlace": "샤롯데씨어터",
        "muDate": "2022.12.01 ~ 2023.03.05",
        "muTime": "170분(인터미션 20분 포함)",
        "muAge": "14세 이상 관람가"
    },
    {
        "muNameKo": "이프덴",
        "muNameEn": "If/Then",
        "muPlace": "홍익대 대학로 아트센터 대극장",
        "muDate": "2022.12.08 ~ 2023.02.26",
        "muTime": "165분(인터미션 15분 포함)",
        "muAge": "16세 이상 관람가"
    },
    {
        "muNameKo": "물랑루즈",
        "muNameEn": "Moulin Rouge!",
        "muPlace": "블루스퀘어",
        "muDate": "2022.12.16 ~ 2023.03.05",
        "muTime": "170분(인터미션 20분 포함)",
        "muAge": "14세 이상 관람가"
    },
    {
        "muNameKo": "루드윅<베토벤 더 피아노>",
        "muNameEn": "Ludwig<Beethoven The Piano>",
        "muPlace": "예스24스테이지",
        "muDate": "2022.12.20 ~ 023.03.12",
        "muTime": "110분",
        "muAge": "만 10세이상"
    },
    {
        "muNameKo": "영웅",
        "muNameEn": "Hero",
        "muPlace": "LG아트센터서울",
        "muDate": "2022.12.21 ~ 2023.02.28",
        "muTime": "160분(인터미션 20분 포함)",
        "muAge": "8세이상 관람가능"
    },
    {
        "muNameKo": "베토벤",
        "muNameEn": "Beethoven",
        "muPlace": "예술의전당",
        "muDate": "2023.01.12 ~ 2023.03.26",
        "muTime": "165분(인터미션 20분 포함)",
        "muAge": "8세이상 관람가능"
    },
    {
        "muNameKo": "은밀하게 위대하게<THE LAST>",
        "muNameEn": "Secretly Greatly<THE LAST>",
        "muPlace": "KT&G 상상마당 대치아트홀",
        "muDate": "2023.03.04 ~ 2023.05.07",
        "muTime": "145분(인터미션 15분 포함)",
        "muAge": "8세이상 관람가능"
    },
    {
        "muNameKo": "레드북",
        "muNameEn": "Redbook",
        "muPlace": "홍익대 대학로 아트센터 대극장",
        "muDate": "2023.03.14 ~ 2023.05.28",
        "muTime": "160분(인터미션 15분 포함)",
        "muAge": "중학생이상 관람가"
    },
    {
        "muNameKo": "맘마미아",
        "muNameEn": "Mamma Mia",
        "muPlace": "충무아트센터",
        "muDate": "2023.03.24 ~ 2023.06.25",
        "muTime": "160분(인터미션 20분 포함)",
        "muAge": "8세이상 관람가능"
    },
    {
        "muNameKo": "데스노트",
        "muNameEn": "Death Note",
        "muPlace": "샤롯데씨어터",
        "muDate": "2023.03.28 ~ 2023.06.18",
        "muTime": "170분(인터미션 20분 포함)",
        "muAge": "14세 이상 관람가"
    },
    {
        "muNameKo": "식스 더 뮤지컬",
        "muNameEn": "Six the Musical",
        "muPlace": "코엑스 신한카드 아티움",
        "muDate": "2023.03.31 ~ 2023.06.25",
        "muTime": "80분",
        "muAge": "중학생이상 관람가"
    },
    {
        "muNameKo": "베토벤 2",
        "muNameEn": "Beethoven 2",
        "muPlace": "세종문화회관",
        "muDate": "2023.04.14 ~ 2023.05.15",
        "muTime": "170분(인터미션 20분 포함)",
        "muAge": "8세이상 관람가능"
    },
    {
        "muNameKo": "쿠로이 저택엔 누가 살고 있을까?",
        "muPlace": "플러스씨어터",
        "muDate": "2023.05.02 ~ 2023.07.23",
        "muTime": "110분",
        "muAge": "8세이상 관람가능"
    },
    {
        "muNameKo": "드림하이",
        "muNameEn": "Dream High",
        "muPlace": "광림아트센터 BBCH홀",
        "muDate": "2023.05.13 ~ 2023.07.23",
        "muTime": "150분(인터미션 20분 포함)",
        "muAge": "8세이상 관람가능"
    },
    {
        "muNameKo": "할란카운티",
        "muNameEn": "Harlan County",
        "muPlace": "한전아트센터",
        "muDate": "2023.05.16 ~ 2023.07.16",
        "muTime": "160분(인터미션 20분 포함)",
        "muAge": "8세이상 관람가능"
    },
    {
        "muNameKo": "라흐 헤스트",
        "muNameEn": "L art reste",
        "muPlace": "드림아트센터",
        "muDate": "2023.06.13 ~2023.09.03",
        "muTime": "110분",
        "muAge": "중학생이상 관람가"
    },
    {
        "muNameKo": "모차르트!",
        "muNameEn": "MOZART!",
        "muPlace": "세종문화회관",
        "muDate": "2023.06.15 ~ 2023.08.22",
        "muTime": "175분(인터미션 20분 포함)",
        "muAge": "8세이상 관람가능"
    },
    {
        "muNameKo": "그날들",
        "muPlace": "예술의전당",
        "muDate": "2023.07.12 ~ 2023.09.03",
        "muTime": "165분(인터미션 20분 포함)",
        "muAge": "7세 이상 관람가능"
    },

    {
        "muNameKo": "오페라의 유령",
        "muNameEn": "The Phantom of the Opera",
        "muPlace": "샤롯데씨어터",
        "muDate": "2023.07.21 ~ 2023.11.19",
        "muTime": "150분(인터미션 20분 포함)",
        "muAge": "초등학생이상 관람가"
    },
    {
        "muNameKo": "헬로 카봇",
        "muNameEn": "Hello Carbot",
        "muPlace": "연세대학교 대강당",
        "muDate": "2023.08.01 ~ 2023.08.20",
        "muTime": "65분",
        "muAge": "24개월이상 관람가능"
    },
    {
        "muNameKo": "프리다",
        "muNameEn": "Frida",
        "muPlace": "coex 신한카드 artium",
        "muDate": "2023.08.01 ~ 2023.10.15",
        "muTime": "115분",
        "muAge": "14세 이상 관람가"
    },
    {
        "muNameKo": "사의찬미",
        "muNameEn": "Gloomyday",
        "muPlace": "롯데콘서트홀",
        "muDate": "2023.08.04 ~ 2023.08.06",
        "muTime": "120분",
        "muAge": "초등학생이상 관람가"
    },
    {
        "muNameKo": "레베카",
        "muNameEn": "Rebecca",
        "muPlace": "블루스퀘어",
        "muDate": "2023.08.19 ~ 2023.11.19",
        "muTime": "175분(인터미션 20분 포함)",
        "muAge": "8세이상 관람가능"
    },
    {
        "muNameKo": "타오르는 어둠 속에서",
        "muNameEn": "In the Burning Darkness",
        "muPlace": "링크아트센터 페이코홀",
        "muDate": "2023.08.26 ~ 2023.11.26",
        "muTime": "150분(인터미션 15분 포함)",
        "muAge": "중학생이상 관람가"
    },
    {
        "muNameKo": "22년 2개월",
        "muNameEn": "22 Years and 2 Months",
        "muPlace": "링크아트센터 벅스홀",
        "muDate": "2023.08.31 ~ 2023.11.05",
        "muTime": "140분(인터미션 15분 포함)",
        "muAge": "10세 이상 관람가"
    },
    {
        "muNameKo": "벤허",
        "muNameEn": "Ben Hur",
        "muPlace": "LG아트센터서울",
        "muDate": "2023.09.02 ~ 2023.11.19",
        "muTime": "150분(인터미션 20분 포함)",
        "muAge": "8세이상 관람가능"
    },
    {
        "muNameKo": "삼총사",
        "muNameEn": "The Three Musketeers",
        "muPlace": "한전아트센터",
        "muDate": "2023.09.15 ~ 2023.11.19",
        "muTime": "150분(인터미션 20분 포함)",
        "muAge": "만 7세이상"
    },
    {
        "muNameKo": "시스터즈",
        "muNameEn": "SheStars!",
        "muPlace": "홍익대 대학로 아트센터 대극장",
        "muDate": "2023.09.03 ~ 2023.11.12",
        "muTime": "110분",
        "muAge": "8세이상 관람가능"
    },
    {
        "muNameKo": "인사이드 윌리엄",
        "muNameEn": "Inside William",
        "muPlace": "아트원씨어터",
        "muDate": "2023.09.12 ~ 2023.12.03",
        "muTime": "100분",
        "muAge": "만 8세이상"
    },
    {
        "muNameKo": "렛미플라이",
        "muNameEn": "Let me fly",
        "muPlace": "예스24스테이지 1관",
        "muDate": "2023.09.26 ~ 2023.12.10",
        "muTime": "120분",
        "muAge": "만 7세이상"
    },
    {
        "muNameKo": "렌트",
        "muNameEn": "Rent",
        "muPlace": "코엑스 신한카드 아티움",
        "muDate": "2023.11.11 ~ 2024.02.25",
        "muTime": "160분(인터미션 20분 포함)",
        "muAge": "14세 이상 관람가"
    },
    
    {
        "muNameKo": "시스터 액트",
        "muNameEn": "Sister Act",
        "muPlace": "디큐브 링크아트센터",
        "muDate": "2023.11.21 ~ 2024.02.11",
        "muTime": "150분(인터미션 20분 포함)",
        "muAge": "8세이상 관람가능"
    },
    {
        "muNameKo": "몬테크리스토",
        "muNameEn": "Montecristo",
        "muPlace": "충무아트센터",
        "muDate": "2023.11.21 ~ 2024.02.25",
        "muTime": "165분(인터미션 20분 포함)",
        "muAge": "8세이상 관람가능"
    },
    {
        "muNameKo": "여신님이 보고 계셔",
        "muPlace": "마포아트센터",
        "muDate": "2023.11.24 ~ 2023.12.02",
        "muTime": "120분",
        "muAge": "만 10세이상"
    },
    {
        "muNameKo": "컴프롬어웨이",
        "muNameEn": "Come from away",
        "muPlace": "광림아트센터 BBCH홀",
        "muDate": "2023.11.28 ~ 2024.02.18",
        "muTime": "130분(인터미션 20분 포함)",
        "muAge": "7세 이상 관람가능"
    },
    {
        "muNameKo": "레미제라블",
        "muNameEn": "Les Misérables",
        "muPlace": "블루스퀘어",
        "muDate": "2023.11.30 ~ 2024.03.10",
        "muTime": "180분(인터미션 20분 포함)",
        "muAge": "초등학생이상 관람가"
    },
    {
        "muNameKo": "맥베스",
        "muNameEn": "MacBeth",
        "muPlace": "세종문화회관",
        "muDate": "2023.12.02 ~ 2023.12.30",
        "muTime": "110분",
        "muAge": "만 12세이상"
    },
    {
        "muNameKo": "드라큘라",
        "muNameEn": "Dracula",
        "muPlace": "샤롯데씨어터",
        "muDate": "2023.12.06 ~ 2024.03.03",
        "muTime": "165분(인터미션 20분 포함)",
        "muAge": "14세 이상 관람가"
    },
    {
        "muNameKo": "일 테노레",
        "muNameEn": "IL TENORE",
        "muPlace": "예술의전당",
        "muDate": "2023.12.19 ~ 2024.02.25",
        "muTime": "160분(인터미션 20분 포함)",
        "muAge": "7세 이상 관람가능"
    },
    {
        "muNameKo": "신비아파트 <붉은 눈의 저주>",
        "muPlace": "유니버설아트센터",
        "muDate": "2023.12.23 ~ 2024.01.07",
        "muTime": "70분",
        "muAge": "24개월 이상 관람가능"
    }
]';

$data = json_decode($jsonData, true, 512, JSON_UNESCAPED_UNICODE);

if (json_last_error() !== JSON_ERROR_NONE) {
    die("JSON 디코딩 오류: " . json_last_error_msg());
}

if (is_array($data) && !empty($data)) {
    foreach ($data as $item) {
        $muNameKo = $item['muNameKo'];
        $muNameEn = isset($item['muNameEn']) ? $item['muNameEn'] : '';
        $muPlace = $item['muPlace'];
        $muDate = $item['muDate'];
        $muTime = $item['muTime'];
        $muAge  = $item['muAge'];

        // 첫 번째 부분이 연도인지 확인 후 추출
        preg_match('/\b(\d{4})/', $muDate, $matches);
        $year = isset($matches[1]) ? $matches[1] : '';

        // 중복 확인을 위한 SQL 쿼리
        $checkDuplicateQuery = "SELECT COUNT(*) as count FROM musical WHERE muNameKo = '$muNameKo' AND muDate = '$muDate'";
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
                $cleanedMuNameKo = preg_replace('/[^a-zA-Z가-힣0-9]/u', '', $muNameKo);

                $imageFileName = $cleanedMuNameKo . "($year).jpg";
                $detailImageFileName = "mu_detail_" . $cleanedMuNameKo . "($year).jpg";

                $imagePath = '../assets/img/musical/' . $imageFileName;
                $detailImagePath = '../assets/img/musical/' . $detailImageFileName;

                if (file_exists($imagePath) && file_exists($detailImagePath)) {
                    $sql = "INSERT INTO musical (muNameKo, muNameEn, muPlace, muDate, muTime, muAge, muImg, muDetailImg) VALUES ('$muNameKo', '$muNameEn', '$muPlace', '$muDate', '$muTime', '$muAge', '$imagePath', '$detailImagePath') ON DUPLICATE KEY UPDATE muNameKo = VALUES(muNameKo), muNameEn = VALUES(muNameEn), muPlace = VALUES(muPlace), muDate = VALUES(muDate), muTime = VALUES(muTime), muAge = VALUES(muAge), muImg = VALUES(muImg), muDetailImg = VALUES(muDetailImg);";
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
} else {
    echo "데이터가 비어 있거나 올바른 형식이 아닙니다.";
}
