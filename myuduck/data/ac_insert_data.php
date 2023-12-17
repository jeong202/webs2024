<?php
include "../connect/connect.php";

$jsonData = '[
    {
        "acNameKo": "조승우",
        "acNameEn": "Cho Seung Woo",
        "acOccupation": "뮤지컬 배우",
        "acDOB": "1980.03.28",
        "acPerform": [
            {
                "acPerformName": "오페라의 유령",
                "acPerformDate": "2023.07.21 ~ 2023.11.19",
                "acPerformPlace": "샤롯데씨어터",
                "acPerformRole": "오페라의 유령 역"
            },
            {
                "acPerformName": "헤드윅",
                "acPerformDate": "2021.07.30 ~ 2021.10.31",
                "acPerformPlace": "충무아트센터",
                "acPerformRole": "헤드윅 역"
            },
            {
                "acPerformName": "맨 오브 라만차",
                "acPerformDate": "2021.02.02 ~ 2021.03.01",
                "acPerformPlace": "샤롯데씨어터",
                "acPerformRole": "세르반테스 / 돈키호테 역"
            }
        ]
    },
    {
        "acNameKo": "최재림",
        "acNameEn": "Choi Jae Rim",
        "acOccupation": "뮤지컬 배우",
        "acDOB": "1985.04.29",
        "acPerform": [
            {
                "acPerformName": "레미제라블",
                "acPerformDate": "2023.11.30 ~ 2024.03.10",
                "acPerformPlace": "블루스퀘어",
                "acPerformRole": "장발장 역"
            },
            {
                "acPerformName": "오페라의 유령",
                "acPerformDate": "2023.10.17 ~ 2023.10.18",
                "acPerformPlace": "샤롯데씨어터",
                "acPerformRole": "오페라의 유령 역"
            },
            {
                "acPerformName": "킹키부츠",
                "acPerformDate": "2022.07.20 ~ 2022.10.23",
                "acPerformPlace": "충무아트센터 대극장",
                "acPerformRole": "롤라 역"
            }
        ]
    },
    {
        "acNameKo": "전동석",
        "acNameEn": "Jeon Dong Suk",
        "acOccupation": "뮤지컬 배우",
        "acDOB": "1988.02.06",
        "acPerform": [
            {
                "acPerformName": "드라큘라",
                "acPerformDate": "2023.12.06 ~ 2023.03.03",
                "acPerformPlace": "샤롯데씨어터",
                "acPerformRole": "드라큘라 역"
            },
            {
                "acPerformName": "오페라의 유령",
                "acPerformDate": "2023.07.21 ~ 2023.11.19",
                "acPerformPlace": "샤롯데씨어터",
                "acPerformRole": "오페라의 유령 역"
            },
            {
                "acPerformName": "지킬 앤 하이드",
                "acPerformDate": "2021.10.19 ~ 2022.05.08",
                "acPerformPlace": "샤롯데씨어터",
                "acPerformRole": "지킬/하이드 역"
            }
        ]
    },
    {
        "acNameKo": "김민아",
        "acNameEn": "Kim Mina",
        "acOccupation": "뮤지컬 배우",
        "acDOB": "1997.11.03",
        "acPerform": [
            {
                "acPerformName": "신비아파트 <붉은 눈의 저주>",
                "acPerformDate": "2023.12.23 ~ 2024.01.07",
                "acPerformPlace": "유니버설아트센터",
                "acPerformRole": "구하리 역"
            },
            {
                "acPerformName": "시크릿쥬쥬 별의여신 시즌3 <마지막 콘서트>",
                "acPerformDate": "2022.08.20 ~ 2022.08.28",
                "acPerformPlace": "이화여자대학교 삼성홀",
                "acPerformRole": "신디 역"
            },
            {
                "acPerformName": "아이스크림 왕국의 뽀로로와 친구들",
                "acPerformDate": "2021.10.02 ~ 2021.10.31",
                "acPerformPlace": "유니버설아트센터",
                "acPerformRole": "아이스크림-여왕 역"
            }
        ]
    },
    {
        "acNameKo": "김준수",
        "acNameEn": "Kim Junsu",
        "acOccupation": "가수, 뮤지컬배우",
        "acDOB": "1987.01.01",
        "acPerform": [
            {
                "acPerformName": "드라큘라",
                "acPerformDate": "2023.12.06 ~ 2024.03.03",
                "acPerformPlace": "샤롯데씨어터",
                "acPerformRole": "드라큘라 역"
            },
            {
                "acPerformName": "데스노트",
                "acPerformDate": "2023.03.28 ~ 2023.06.18",
                "acPerformPlace": "샤롯데씨어터",
                "acPerformRole": "엘 역"
            },
            {
                "acPerformName": "엑스칼리버",
                "acPerformDate": "2022.01.29 ~ 2022.03.13",
                "acPerformPlace": "세종문화회관 대극장",
                "acPerformRole": "아더 역"
            }
        ]
    },
    {
        "acNameKo": "임혜영",
        "acNameEn": "Lim Hye Young",
        "acOccupation": "뮤지컬 배우",
        "acDOB": "1982.10.28",
        "acPerform": [
            {
                "acPerformName": "드라큘라",
                "acPerformDate": "2023.12.06 ~ 2024.03.03",
                "acPerformPlace": "샤롯데씨어터",
                "acPerformRole": "미나 역"
            },
            {
                "acPerformName": "사랑의 불시착",
                "acPerformDate": "2022.09.16 ~ 2022.11.13",
                "acPerformPlace": "코엑스 신한카드 아티움",
                "acPerformRole": "윤세리 역"
            },
            {
                "acPerformName": "레베카",
                "acPerformDate": "2021.11.16 ~ 2022.02.28",
                "acPerformPlace": "충무아트센터 대극장",
                "acPerformRole": "나 역"
            }
        ]
    },
    {
        "acNameKo": "한일경",
        "acNameEn": "Han Il kyung",
        "acOccupation": "뮤지컬 배우",
        "acDOB": "1981.11.25",
        "acPerform": [
            {
                "acPerformName": "맥베스",
                "acPerformDate": "2023.12.02 ~ 2023.12.30",
                "acPerformPlace": "세종문화회관",
                "acPerformRole": "맥베스 역"
            },
            {
                "acPerformName": "알로하, 나의 엄마들",
                "acPerformDate": "2022/11/22 ~ 2022/12/11",
                "acPerformPlace": "세종문화회관",
                "acPerformRole": "송화 할머니 역"
            },
            {
                "acPerformName": "지붕위의 바이올린",
                "acPerformDate": "2022/04/22 ~ 2022/05/08",
                "acPerformPlace": "세종문화회관",
                "acPerformRole": "피에드카 역"
            }
        ]
    },
    {
        "acNameKo": "성태준",
        "acNameEn": "Sung Tae Joon",
        "acOccupation": "뮤지컬 배우, 연극 배우",
        "acDOB": "1983.06.15",
        "acPerform": [
            {
                "acPerformName": "맥베스",
                "acPerformDate": "2023.12.02 ~ 2023.12.30",
                "acPerformPlace": "세종문화회관",
                "acPerformRole": "맥베스 역"
            },
            {
                "acPerformName": "여신님이 보고 계셔",
                "acPerformDate": "2023.11.24 ~ 2023.12.02",
                "acPerformPlace": "마포아트센터",
                "acPerformRole": "한영범 역"
            },
            {
                "acPerformName": "사의찬미",
                "acPerformDate": "2023.08.04 ~ 2023.08.06",
                "acPerformPlace": "롯데콘서트홀",
                "acPerformRole": "사내 역"
            }
        ]
    },
    {
        "acNameKo": "이아름솔",
        "acNameEn": "Lee Areumsol",
        "acOccupation": "뮤지컬 배우",
        "acDOB": "1991.08.18",
        "acPerform": [
            {
                "acPerformName": "맥베스",
                "acPerformDate": "2023.12.02 ~ 2023.12.30",
                "acPerformPlace": "세종문화회관",
                "acPerformRole": "맥버니 역"
            },
            {
                "acPerformName": "인사이드 윌리엄",
                "acPerformDate": "2023.09.12 ~ 2023.12.03",
                "acPerformPlace": "아트원씨어터",
                "acPerformRole": "줄리엣 역"
            },
            {
                "acPerformName": "프리다",
                "acPerformDate": "2023.08.01 ~ 2023.10.15",
                "acPerformPlace": "coex 신한카드 artium",
                "acPerformRole": "데스티노 역"
            }
        ]
    },
    {
        "acNameKo": "민우혁",
        "acNameEn": "Min Woohyuk",
        "acOccupation": "뮤지컬 배우",
        "acDOB": "1983.09.18",
        "acPerform": [
            {
                "acPerformName": "레미제라블",
                "acPerformDate": "2023.11.30 ~ 2024.03.10",
                "acPerformPlace": "블루스퀘어",
                "acPerformRole": "장발장 역"
            },
            {
                "acPerformName": "영웅",
                "acPerformDate": "2022.12.21 ~ 2023.02.28",
                "acPerformPlace": "LG아트센터서울",
                "acPerformRole": "안중근 역"
            },
            {
                "acPerformName": "사랑의 불시착",
                "acPerformDate": "2022.09.16 ~ 2022.11.13",
                "acPerformPlace": "coex 신한카드 artium",
                "acPerformRole": "리정혁 역"
            }
        ]
    },
    {
        "acNameKo": "김우형",
        "acNameEn": "Kim Woo Hyung",
        "acOccupation": "뮤지컬 배우",
        "acDOB": "1981.04.08",
        "acPerform": [
            {
                "acPerformName": "레미제라블",
                "acPerformDate": "2023.11.30 ~ 2024.03.10",
                "acPerformPlace": "블루스퀘어",
                "acPerformRole": "자베르 역"
            },
            {
                "acPerformName": "아이다",
                "acPerformDate": "2022.05.10 ~ 2022.08.07",
                "acPerformPlace": "블루스퀘어",
                "acPerformRole": "라다메스 역"
            },
            {
                "acPerformName": "하데스타운",
                "acPerformDate": "2021.09.07 ~ 2022.02.27",
                "acPerformPlace": "LG아트센터서울",
                "acPerformRole": "하데스 역"
            }
        ]
    },
    {
        "acNameKo": "린아",
        "acNameEn": "Lina",
        "acOccupation": "뮤지컬 배우, 가수",
        "acDOB": "1984.02.18",
        "acPerform": [
            {
                "acPerformName": "레미제라블",
                "acPerformDate": "2023.11.30 ~ 2024.03.10",
                "acPerformPlace": "블루스퀘어",
                "acPerformRole": "판틴 역"
            },
            {
                "acPerformName": "스위니토드",
                "acPerformDate": "2022.12.01 ~ 2023.03.05",
                "acPerformPlace": "샤롯데씨어터",
                "acPerformRole": "러빗 부인 역"
            },
            {
                "acPerformName": "몬테크리스토",
                "acPerformDate": "2020.11.17 ~ 2021.03.28",
                "acPerformPlace": "LG아트센터서울",
                "acPerformRole": "메르세데스 역"
            }
        ]
    },
    {
        "acNameKo": "테이",
        "acNameEn": "Tei",
        "acOccupation": "가수",
        "acDOB": "1983.04.04",
        "acPerform": [
            {
                "acPerformName": "레베카",
                "acPerformDate": "2023.08.19 ~ 2023.11.19",
                "acPerformPlace": "블루스퀘어",
                "acPerformRole": "막심 드 윈터 역"
            },
            {
                "acPerformName": "루드윅<베토벤 더 피아노>",
                "acPerformDate": "2022.12.20 ~ 023.03.12",
                "acPerformPlace": "예스24스테이지",
                "acPerformRole": "루드윅 역"
            },
            {
                "acPerformName": "드라큘라",
                "acPerformDate": "2022.11.15 ~ 2023.01.15",
                "acPerformPlace": "우리금융아트홀",
                "acPerformRole": "드라큘라 역"
            }
        ]
    },
    {
        "acNameKo": "장은아",
        "acNameEn": "JAS",
        "acOccupation": "뮤지컬 배우, 가수",
        "acDOB": "1983.01.12",
        "acPerform": [
            {
                "acPerformName": "레베카",
                "acPerformDate": "2023.08.19 ~ 2023.11.19",
                "acPerformPlace": "블루스퀘어",
                "acPerformRole": "댄버스 부인 역"
            },
            {
                "acPerformName": "데스노트",
                "acPerformDate": "2023.03.28 ~ 2023.06.18",
                "acPerformPlace": "샤롯데씨어터",
                "acPerformRole": "렘 역"
            },
            {
                "acPerformName": "지저스 크라이스트 수퍼스타",
                "acPerformDate": "2022.11.10 ~ 2023.01.15",
                "acPerformPlace": "광림아트센터 BBCH홀",
                "acPerformRole": "마리아 역"
            }
        ]
    },
    {
        "acNameKo": "윤석원",
        "acNameEn": "Yoon Seokwon",
        "acOccupation": "뮤지컬 배우",
        "acDOB": "1981.02.28",
        "acPerform": [
            {
                "acPerformName": "여신님이 보고 계셔",
                "acPerformDate": "2023.11.24 ~ 2023.12.02",
                "acPerformPlace": "마포아트센터 아트홀 맥",
                "acPerformRole": "이창섭 역"
            },
            {
                "acPerformName": "레베카",
                "acPerformDate": "2023.08.19 ~ 2023.11.19",
                "acPerformPlace": "블루스퀘어",
                "acPerformRole": "잭 파벨 역"
            },
            {
                "acPerformName": "라흐 헤스트",
                "acPerformDate": "2023.06.13 ~2023.09.03",
                "acPerformPlace": "드림아트센터",
                "acPerformRole": "환기 역"
            }
        ]
    },
    {
        "acNameKo": "서경수",
        "acNameEn": "Seo KyungSu",
        "acOccupation": "뮤지컬배우",
        "acDOB": "1989.01.01",
        "acPerform": [
            {
                "acPerformName": "일 테노레",
                "acPerformDate": "2023.12.19 ~ 2024.02.25",
                "acPerformPlace": "예술의전당",
                "acPerformRole": "윤이선 역"
            },
            {
                "acPerformName": "벤허",
                "acPerformDate": "2023.09.02 ~ 2023.11.19",
                "acPerformPlace": "LG아트센터서울",
                "acPerformRole": "메셀라 역"
            },
            {
                "acPerformName": "데스노트",
                "acPerformDate": "2023.07.26 ~ 2023.08.06",
                "acPerformPlace": "부산시민회관 대극장",
                "acPerformRole": "류크 역"
            }
        ]
    },
    {
        "acNameKo": "박지연",
        "acNameEn": "Park Jiyeon",
        "acOccupation": "뮤지컬배우",
        "acDOB": "1988.05.14",
        "acPerform": [
            {
                "acPerformName": "일 테노레",
                "acPerformDate": "2023.12.19 ~ 2024.02.25",
                "acPerformPlace": "예술의전당",
                "acPerformRole": "서진연 역"
            },
            {
                "acPerformName": "레베카",
                "acPerformDate": "2021.11.16 ~ 2022.02.28",
                "acPerformPlace": "충무아트센터",
                "acPerformRole": "나 역"
            },
            {
                "acPerformName": "드라큘라",
                "acPerformDate": "2021.05.20 ~ 2021.08.01",
                "acPerformPlace": "블루스퀘어",
                "acPerformRole": "미나 역"
            }
        ]
    },
    {
        "acNameKo": "전재홍",
        "acNameEn": "Jeon Jaehong",
        "acOccupation": "뮤지컬배우",
        "acDOB": "1981.09.06",
        "acPerform": [
            {
                "acPerformName": "일 테노레",
                "acPerformDate": "2023.12.19 ~ 2024.02.25",
                "acPerformPlace": "예술의전당",
                "acPerformRole": "이수한 역"
            },
            {
                "acPerformName": "타이타닉",
                "acPerformDate": "2017.11.08 ~ 2018.02.11",
                "acPerformPlace": "샤롯데씨어터",
                "acPerformRole": "에드가 빈 역"
            },
            {
                "acPerformName": "브로드웨이 42번가",
                "acPerformDate": "2017.08.05 ~2017.10.09",
                "acPerformPlace": "디큐브 링크아트센터",
                "acPerformRole": "빌리 로러 역"
            }
        ]
    },
    {
        "acNameKo": "허혜진",
        "acNameEn": "Heo Hyejin",
        "acOccupation": "뮤지컬배우",
        "acDOB": "1993.03.31",
        "acPerform": [
            {
                "acPerformName": "몬테크리스토",
                "acPerformDate": "2023.11.21 ~ 2024.02.25",
                "acPerformPlace": "충무아트센터",
                "acPerformRole": "메르세데스 역"
            },
            {
                "acPerformName": "프리다",
                "acPerformDate": "2023.08.01 ~ 2023.10.15",
                "acPerformPlace": "coex 신한카드 artium",
                "acPerformRole": "메모리아 역"
            },
            {
                "acPerformName": "모차르트!",
                "acPerformDate": "2023.06.15 ~ 2023.08.22",
                "acPerformPlace": "세종문화회관",
                "acPerformRole": "콘스탄체 베버"
            }
        ]
    },
    {
        "acNameKo": "강태을",
        "acNameEn": "Kang Taeeul",
        "acOccupation": "뮤지컬배우",
        "acDOB": "1980.06.04",
        "acPerform": [
            {
                "acPerformName": "몬테크리스토",
                "acPerformDate": "2023.11.21 ~ 2024.02.25",
                "acPerformPlace": "충무아트센터",
                "acPerformRole": "몬데고 역"
            },
            {
                "acPerformName": "엘리자벳",
                "acPerformDate": "2022.08.30 ~ 2022.11.13",
                "acPerformPlace": "블루스퀘어",
                "acPerformRole": "루이지 루케니 역"
            },
            {
                "acPerformName": "엑스칼리버",
                "acPerformDate": "2022.01.29 ~ 2022.03.13",
                "acPerformPlace": "세종문화회관",
                "acPerformRole": "렌슬럿"
            }
        ]
    },
    {
        "acNameKo": "김소향",
        "acNameEn": "Sophie Kim",
        "acOccupation": "뮤지컬배우",
        "acDOB": "1980.12.24",
        "acPerform": [
            {
                "acPerformName": "시스터 액트",
                "acPerformDate": "2023.11.21 ~ 2024.02.11",
                "acPerformPlace": "디큐브 링크아트센터",
                "acPerformRole": "메리 로버트 역"
            },
            {
                "acPerformName": "프리다",
                "acPerformDate": "2023.08.01 ~ 2023.10.15",
                "acPerformPlace": "coex 신한카드 artium",
                "acPerformRole": "프리다 역"
            },
            {
                "acPerformName": "모차르트!",
                "acPerformDate": "2023.06.15 ~ 2023.08.22",
                "acPerformPlace": "세종문화회관",
                "acPerformRole": "난넬 모차르트"
            }
        ]
    },
    {
        "acNameKo": "박시인",
        "acNameEn": "Park Siin",
        "acOccupation": "뮤지컬배우",
        "acDOB": "1992.08.18",
        "acPerform": [
            {
                "acPerformName": "시스터 액트",
                "acPerformDate": "2023.11.21 ~ 2024.02.11",
                "acPerformPlace": "디큐브 링크아트센터",
                "acPerformRole": "메리 셀린 역"
            },
            {
                "acPerformName": "프리다",
                "acPerformDate": "2023.08.01 ~ 2023.10.15",
                "acPerformPlace": "coex 신한카드 artium",
                "acPerformRole": "메모리아 역"
            },
            {
                "acPerformName": "쿠로이 저택엔 누가 살고 있을까?",
                "acPerformDate": "2023.05.02 ~ 2023.07.23",
                "acPerformPlace": "플러스씨어터",
                "acPerformRole": "가네코 역"
            }
        ]
    },
    {
        "acNameKo": "노지연",
        "acNameEn": "No Jiyeon",
        "acOccupation": "뮤지컬배우",
        "acDOB": "1990.01.08",
        "acPerform": [
            {
                "acPerformName": "시스터 액트",
                "acPerformDate": "2023.11.21 ~ 2024.02.11",
                "acPerformPlace": "디큐브 링크아트센터",
                "acPerformRole": "메리 제시카 역"
            },
            {
                "acPerformName": "레드북",
                "acPerformDate": "2023.03.14 ~ 2023.05.28",
                "acPerformPlace": "홍익대 대학로 아트센터 대극장",
                "acPerformRole": "코렐 외 역"
            },
            {
                "acPerformName": "포미니츠",
                "acPerformDate": "2022.06.21 ~ 2022.08.14",
                "acPerformPlace": "국립정동극장(서울)",
                "acPerformRole": "프랭키 역"
            }
        ]
    },
    {
        "acNameKo": "유태양",
        "acNameEn": "YOO TAE YANG",
        "acOccupation": "가수",
        "acDOB": "1997.02.28",
        "acPerform": [
            {
                "acPerformName": "삼총사",
                "acPerformDate": "2023.09.15 ~ 2023.11.19",
                "acPerformPlace": "한전아트센터",
                "acPerformRole": "달타냥 역"
            },
            {
                "acPerformName": "드림하이",
                "acPerformDate": "2023.05.13 ~ 2023.07.23",
                "acPerformPlace": "광림아트센터 BBCH홀",
                "acPerformRole": "송삼동 역"
            },
            {
                "acPerformName": "은밀하게 위대하게<THE LAST>",
                "acPerformDate": "2023.03.04 ~ 2023.05.07",
                "acPerformPlace": "KT\\uFF06G 상상마당 대치아트홀",
                "acPerformRole": "리해랑 역"
            }
        ]
    },
    {
        "acNameKo": "김형균",
        "acNameEn": "Kim Hyungkyun",
        "acOccupation": "뮤지컬배우",
        "acDOB": "1979.04.26",
        "acPerform": [
            {
                "acPerformName": "삼총사",
                "acPerformDate": "2023.09.15 ~ 2023.11.19",
                "acPerformPlace": "한전아트센터",
                "acPerformRole": "아토스 역"
            },
            {
                "acPerformName": "삼총사",
                "acPerformDate": "2022.09.16 ~ 2023.11.06",
                "acPerformPlace": "유니버설아트센터",
                "acPerformRole": "아토스 역"
            },
            {
                "acPerformName": "1976 할란카운티",
                "acPerformDate": "2021.05.28 ~2021.07.04",
                "acPerformPlace": "충무아트센터",
                "acPerformRole": "존 역"
            }
        ]
    },
    {
        "acNameKo": "김신의",
        "acNameEn": "Kim Sineui",
        "acOccupation": "뮤지컬배우",
        "acDOB": "1977.09.07",
        "acPerform": [
            {
                "acPerformName": "삼총사",
                "acPerformDate": "2023.09.15 ~ 2023.11.19",
                "acPerformPlace": "한전아트센터",
                "acPerformRole": "아라미스 역"
            },
            {
                "acPerformName": "삼총사",
                "acPerformDate": "2022.09.16 ~ 2023.11.06",
                "acPerformPlace": "유니버설아트센터",
                "acPerformRole": "아라미스 역"
            },
            {
                "acPerformName": "여신님이 보고 계셔",
                "acPerformDate": "2018/05/12 ~ 2018/05/12",
                "acPerformPlace": "의정부예술의전당 대극장",
                "acPerformRole": "한영범 역"
            }
        ]
    },
    {
        "acNameKo": "오만석",
        "acNameEn": "Oh Man Seok",
        "acOccupation": "뮤지컬배우, 연출, 연극배우",
        "acDOB": "1975.01.30",
        "acPerform": [
            {
                "acPerformName": "그날들",
                "acPerformDate": "2023.07.12 ~ 2023.09.03",
                "acPerformPlace": "예술의전당",
                "acPerformRole": "차정학 역"
            },
            {
                "acPerformName": "젠틀맨스 가이드",
                "acPerformDate": "2021.11.13 ~ 2022.02.20",
                "acPerformPlace": "광림아트센터 BBCH홀",
                "acPerformRole": "다이스퀴스 역"
            },
            {
                "acPerformName": "헤드윅",
                "acPerformDate": "2021.07.30 ~ 2021.10.31",
                "acPerformPlace": "충무아트센터",
                "acPerformRole": "헤드윅 역"
            }
        ]
    },
    {
        "acNameKo": "이규형",
        "acNameEn": "Lee Kyoo-hyung",
        "acOccupation": "뮤지컬배우, 배우",
        "acDOB": "1983.11.29",
        "acPerform": [
            {
                "acPerformName": "몬테크리스토",
                "acPerformDate": "2023.11.21 ~ 2024.02.25",
                "acPerformPlace": "충무아트센터",
                "acPerformRole": "에드몬드 단테스/몬테크리스토 백작 역"
            },
            {
                "acPerformName": "사의찬미 콘서트",
                "acPerformDate": "2023.08.04 ~ 2023.08.06",
                "acPerformPlace": "롯데콘서트홀",
                "acPerformRole": "사내 역"
            },
            {
                "acPerformName": "스위니토드",
                "acPerformDate": "2022.12.01 ~ 2023.03.05",
                "acPerformPlace": "샤롯데씨어터",
                "acPerformRole": "스위니토드 역"
            }
        ]
    },
    {
        "acNameKo": "이영미",
        "acNameEn": "Lee Yeong Mi",
        "acOccupation": "뮤지컬배우, 가수",
        "acDOB": "1974.11.15",
        "acPerform": [
            {
                "acPerformName": "타오르는 어둠 속에서",
                "acPerformDate": "2023.08.26 ~ 2023.11.26",
                "acPerformPlace": "링크아트센터 페이코홀",
                "acPerformRole": "도냐 페피따 역"
            },
            {
                "acPerformName": "데스노트",
                "acPerformDate": "2023.03.28 ~ 2023.06.18",
                "acPerformPlace": "샤롯데씨어터",
                "acPerformRole": "렘 역"
            },
            {
                "acPerformName": "리지",
                "acPerformDate": "2022.03.24 ~ 2022.06.12",
                "acPerformPlace": "두산아트센터 연강홀",
                "acPerformRole": "브리짓 설리번 역"
            }
        ]
    },
    {
        "acNameKo": "류정한",
        "acNameEn": "Ryu Jung-han",
        "acOccupation": "뮤지컬배우",
        "acDOB": "1971.01.10",
        "acPerform": [
            {
                "acPerformName": "레베카",
                "acPerformDate": "2023.08.19 ~ 2023.11.19",
                "acPerformPlace": "블루스퀘어",
                "acPerformRole": "막심 드 윈터 역"
            },
            {
                "acPerformName": "할란카운티",
                "acPerformDate": "2023.05.16 ~ 2023.07.16",
                "acPerformPlace": "한전아트센터",
                "acPerformRole": "존 역"
            },
	{
                "acPerformName": "맨 오브 라만차",
                "acPerformDate": "2021.02.02 ~ 2021.03.01",
                "acPerformPlace": "샤롯데씨어터",
                "acPerformRole": "세르반테스 / 돈키호테 역"
            }
        ]
    }
    ,{
        "acNameKo": "김지현",
        "acNameEn": "Kim Ji-hyun",
        "acOccupation": "연극배우, 뮤지컬배우",
        "acDOB": "1982.01.02",
        "acPerform": [
            {
                "acPerformName": "일 테노레",
                "acPerformDate": "2023.12.19 ~ 2024.02.25",
                "acPerformPlace": "예술의전당",
                "acPerformRole": "서진연 역"
            },
            {
                "acPerformName": "그날들",
                "acPerformDate": "예술의전당",
                "acPerformPlace": "2023.07.12 ~ 2023.09.03",
                "acPerformRole": "그녀 역"
            },
            {
                "acPerformName": "스위니토드",
                "acPerformDate": "2022.12.01 ~ 2023.03.05",
                "acPerformPlace": "샤롯데씨어터",
                "acPerformRole": "러빗 부인 역"
            }
        ]
    }
    ,{
        "acNameKo": "윤공주",
        "acNameEn": "Yoon Gong Joo",
        "acOccupation": "뮤지컬배우",
        "acDOB": "1981.05.20",
        "acPerform": [
            {
                "acPerformName": "렛미플라이",
                "acPerformDate": "2023.09.26 ~ 2023.12.10",
                "acPerformPlace": "예스24스테이지 1관",
                "acPerformRole": "선희 역"
            },
            {
                "acPerformName": "벤허",
                "acPerformDate": "2023.09.02 ~ 2023.11.19",
                "acPerformPlace": "LG아트센터서울",
                "acPerformRole": "에스더 역"
            },
            {
                "acPerformName": "베토벤 2",
                "acPerformDate": "2023.04.14 ~ 2023.05.15",
                "acPerformPlace": "세종문화회관",
                "acPerformRole": "안토니 브렌타노 역"
            }
        ]
    }
    ,{
        "acNameKo": "김호영",
        "acNameEn": "Kim Ho Young",
        "acOccupation": "뮤지컬배우",
        "acDOB": "1983.02.19",
        "acPerform": [
            {
                "acPerformName": "렌트",
                "acPerformDate": "2023.11.11 ~ 2024.02.25",
                "acPerformPlace": "코엑스 신한카드 아티움",
                "acPerformRole": "엔젤 역"
            },
            {
                "acPerformName": "킹키부츠",
                "acPerformDate": "2022.07.20 ~ 2022.10.23",
                "acPerformPlace": "충무아트센터 대극장",
                "acPerformRole": "찰리 역"
            },
            {
                "acPerformName": "광화문 연가",
                "acPerformDate": "2021.07.16 ~ 2021.09.05",
                "acPerformPlace": "예술의전당",
                "acPerformRole": "월하 역"
            }
        ]
    }
    ,{
        "acNameKo": "김성규",
        "acNameEn": "Kim Sung Kyu",
        "acOccupation": "가수, 뮤지컬배우",
        "acDOB": "1989.04.28",
        "acPerform": [
            {
                "acPerformName": "레드북",
                "acPerformDate": "2023.03.14 ~ 2023.05.28",
                "acPerformPlace": "홍익대 대학로 아트센터 대극장",
                "acPerformRole": "브라운 역"
            },
            {
                "acPerformName": "킹키부츠",
                "acPerformDate": "2022.07.20 ~ 2022.10.23",
                "acPerformPlace": "충무아트센터",
                "acPerformRole": "찰리 역"
            },
            {
                "acPerformName": "엑스칼리버",
                "acPerformDate": "2022.01.29 ~ 2022.03.13",
                "acPerformPlace": "세종문화회관",
                "acPerformRole": "아더 역"
            }
        ]
    }
    ,{
        "acNameKo": "김지우",
        "acNameEn": "Kim Ji Woo",
        "acOccupation": "뮤지컬배우",
        "acDOB": "1983.11.22",
        "acPerform": [
            {
                "acPerformName": "식스 더 뮤지컬",
                "acPerformDate": "2023.03.31 ~ 2023.06.25",
                "acPerformPlace": "코엑스 신한카드 아티움",
                "acPerformRole": "불린 역"
            },
            {
                "acPerformName": "물랑루즈",
                "acPerformDate": "2022.12.16 ~ 2023.03.05",
                "acPerformPlace": "블루스퀘어",
                "acPerformRole": "사틴 역"
            },
            {
                "acPerformName": "킹키부츠",
                "acPerformDate": "2022.07.20 ~ 2022.10.23",
                "acPerformPlace": "충무아트센터",
                "acPerformRole": "로렌 역"
            }
        ]
    }
    ,{
        "acNameKo": "박은태",
        "acNameEn": "Park Eun Tae",
        "acOccupation": "뮤지컬배우",
        "acDOB": "1981.06.14",
        "acPerform": [
            {
                "acPerformName": "일 테노레",
                "acPerformDate": "2023.12.19 ~ 2024.02.25",
                "acPerformPlace": "예술의전당",
                "acPerformRole": "윤이선 역"
            },
            {
                "acPerformName": "벤허",
                "acPerformDate": "2023.09.02 ~ 2023.11.19",
                "acPerformPlace": "LG아트센터서울",
                "acPerformRole": "유다 벤허 역"
            },
            {
                "acPerformName": "베토벤 2",
                "acPerformDate": "2023.04.14 ~ 2023.05.15",
                "acPerformPlace": "세종문화회관",
                "acPerformRole": "루드비히 반 베토벤 역"
            }
        ]
    }
    ,{
        "acNameKo": "카이",
        "acNameEn": "KAI",
        "acOccupation": "뮤지컬배우",
        "acDOB": "1981.12.05",
        "acPerform": [
            {
                "acPerformName": "레미제라블",
                "acPerformDate": "2023.11.30 ~ 2024.03.10",
                "acPerformPlace": "블루스퀘어",
                "acPerformRole": "자베르 역"
            },
            {
                "acPerformName": "베토벤 2",
                "acPerformDate": "2023.04.14 ~ 2023.05.15",
                "acPerformPlace": "세종문화회관",
                "acPerformRole": "루드비히 반 베토벤 역"
            },
            {
                "acPerformName": "베토벤",
                "acPerformDate": "2023.01.12 ~ 2023.03.26",
                "acPerformPlace": "예술의전당",
                "acPerformRole": "루드비히 반 베토벤 역"
            }
        ]
    }
    ,{
        "acNameKo": "선민",
        "acNameEn": "Sunmin",
        "acOccupation": "가수, 뮤지컬배우",
        "acDOB": "1987.06.04",
        "acPerform": [
            {
                "acPerformName": "몬테크리스토",
                "acPerformDate": "2023.11.21 ~ 2024.02.25",
                "acPerformPlace": "충무아트센터",
                "acPerformRole": "메르세데스 역"
            },
            {
                "acPerformName": "시스터즈",
                "acPerformDate": "2023.09.03 ~ 2023.11.12",
                "acPerformPlace": "홍익대 대학로 아트센터 대극장",
                "acPerformRole": "시스터 1 역"
            },
            {
                "acPerformName": "모차르트!",
                "acPerformDate": "2023.06.15 ~ 2023.08.22",
                "acPerformPlace": "세종문화회관",
                "acPerformRole": "콘스탄체 베버 역"
            }
        ]
    }
    ,{
        "acNameKo": "이새나",
        "acNameEn": "Lee Saena",
        "acOccupation": "뮤지컬배우",
        "acDOB": "1997.04.13",
        "acPerform": [
            {
                "acPerformName": "시크릿쥬쥬 별의여신",
                "acPerformDate": "2022.08.20 ~ 2022.08.28",
                "acPerformPlace": "이화여자대학교 삼성홀",
                "acPerformRole": "쥬쥬 역"
            },
            {
                "acPerformName": "태권, 날아올라",
                "acPerformDate": "2022.06.12 ~ 2022.07.03",
                "acPerformPlace": "국립중앙박물관 극장 용",
                "acPerformRole": "리포터 역"
            },
            {
                "acPerformName": "산타와 빈양말",
                "acPerformDate": "2021.11.27 ~ 2021.12.31",
                "acPerformPlace": "국립중앙박물관 극장 용",
                "acPerformRole": "메리 역"
            }
        ]
    }
    ,{
        "acNameKo": "송수빈",
        "acNameEn": "Song Subin",
        "acOccupation": "뮤지컬배우",
        "acDOB": "2000.11.23",
        "acPerform": [
            {
                "acPerformName": "시크릿쥬쥬 별의여신",
                "acPerformDate": "2022.08.20 ~ 2022.08.28",
                "acPerformPlace": "이화여자대학교 삼성홀",
                "acPerformRole": "마리 역"
            }
        ]
    }
    ,{
        "acNameKo": "강지연",
        "acNameEn": "Kang Jiyeon",
        "acOccupation": "뮤지컬배우",
        "acDOB": "1996.04.17",
        "acPerform": [
            {
                "acPerformName": "헬로 카봇",
                "acPerformDate": "2023.08.01 ~ 2023.08.20",
                "acPerformPlace": "연세대학교 대강당",
                "acPerformRole": "M라인 역"
            },
            {
                "acPerformName": "시크릿쥬쥬 별의여신",
                "acPerformDate": "2022.08.20 ~ 2022.08.28",
                "acPerformPlace": "이화여자대학교 삼성홀",
                "acPerformRole": "니키 역"
            },
            {
                "acPerformName": "프리즌",
                "acPerformDate": "2020.04.29 ~ 2021.03.31",
                "acPerformPlace": "룸씨어터",
                "acPerformRole": "교도관 역"
            }
        ]
    }
    ,{
        "acNameKo": "홍광호",
        "acNameEn": "Hong Kwang Ho",
        "acOccupation": "뮤지컬배우",
        "acDOB": "1982.04.06",
        "acPerform": [
            {
                "acPerformName": "일 테노레",
                "acPerformDate": "2023.12.19 ~ 2024.02.25",
                "acPerformPlace": "예술의전당",
                "acPerformRole": "윤이선 역"
            },
            {
                "acPerformName": "데스노트",
                "acPerformDate": "2023.03.28 ~ 2023.06.18",
                "acPerformPlace": "샤롯데씨어터",
                "acPerformRole": "야가미 라이토 역"
            },
            {
                "acPerformName": "물랑루즈",
                "acPerformDate": "2022.12.16 ~ 2023.03.05",
                "acPerformPlace": "블루스퀘어",
                "acPerformRole": "크리스티안 역"
            }
        ]
    }
    ,{
        "acNameKo": "김성철",
        "acNameEn": "Kim Sung-Cheol",
        "acOccupation": "뮤지컬배우",
        "acDOB": "1991.12.31",
        "acPerform": [
            {
                "acPerformName": "몬테크리스토",
                "acPerformDate": "2023.11.21 ~ 2024.02.25",
                "acPerformPlace": "충무아트센터",
                "acPerformRole": "에드몬드 단테스/몬테크리스토 백작 역"
            },
            {
                "acPerformName": "데스노트",
                "acPerformDate": "2023.03.28 ~ 2023.06.18",
                "acPerformPlace": "샤롯데씨어터",
                "acPerformRole": "엘 역"
            },
            {
                "acPerformName": "데스노트",
                "acPerformDate": "2022.07.01 ~ 2022.08.14",
                "acPerformPlace": "예술의전당",
                "acPerformRole": "엘 역"
            }
        ]
    }
    ,{
        "acNameKo": "류인아",
        "acNameEn": "Ryu In-A",
        "acOccupation": "뮤지컬배우",
        "acDOB": "1996.02.18",
        "acPerform": [
            {
                "acPerformName": "레미제라블",
                "acPerformDate": "2023.11.30 ~ 2024.03.10",
                "acPerformPlace": "블루스퀘어",
                "acPerformRole": "코제트 역"
            },
            {
                "acPerformName": "데스노트",
                "acPerformDate": "2023.03.28 ~ 2023.06.18",
                "acPerformPlace": "샤롯데씨어터",
                "acPerformRole": "아마네 미사 역"
            },
            {
                "acPerformName": "스위니토드",
                "acPerformDate": "2022.12.01 ~ 2023.03.05",
                "acPerformPlace": "샤롯데씨어터",
                "acPerformRole": "조안나 역"
            }
        ]
    }
    ,{
        "acNameKo": "이재환",
        "acNameEn": "Lee Jae Hwan",
        "acOccupation": "가수, 뮤지컬배우",
        "acDOB": "1992.04.06",
        "acPerform": [
            {
                "acPerformName": "22년 2개월",
                "acPerformDate": "2023.08.31 ~ 2023.11.05",
                "acPerformPlace": "링크아트센터 벅스홀",
                "acPerformRole": "박열 역"
            },
            {
                "acPerformName": "인간의 법정",
                "acPerformDate": "2022.09.28 ~ 2022.12.04",
                "acPerformPlace": "아트원씨어터 2관",
                "acPerformRole": "아오 역"
            },
            {
                "acPerformName": "엑스칼리버",
                "acPerformDate": "2022.01.29 ~ 2022.03.13",
                "acPerformPlace": "세종문화회관",
                "acPerformRole": "아더 역"
            }
        ]
    }
    ,{
        "acNameKo": "에녹",
        "acNameEn": "Enoch",
        "acOccupation": "뮤지컬배우",
        "acDOB": "1980.02.10",
        "acPerform": [
            {
                "acPerformName": "레베카",
                "acPerformDate": "2023.08.19 ~ 2023.11.19",
                "acPerformPlace": "블루스퀘어",
                "acPerformRole": "막심 드 윈터 역"
            },
            {
                "acPerformName": "이프덴",
                "acPerformDate": "2022.12.08 ~ 2023.02.26",
                "acPerformPlace": "홍익대 대학로 아트센터 대극장",
                "acPerformRole": "루카스 역"
            },
            {
                "acPerformName": "안나 차이코프스키",
                "acPerformDate": "2022.09.03 ~ 2022.10.30",
                "acPerformPlace": "유니플렉스 1관 (대극장)",
                "acPerformRole": "차이코프스키 역"
            }
        ]
    }
    ,{
        "acNameKo": "신영숙",
        "acNameEn": "Shin Young Sook",
        "acOccupation": "뮤지컬배우",
        "acDOB": "1975.11.26",
        "acPerform": [
            {
                "acPerformName": "컴프롬어웨이",
                "acPerformDate": "2023.11.28 ~ 2024.02.18",
                "acPerformPlace": "광림아트센터 BBCH홀",
                "acPerformRole": "비벌리 역"
            },
            {
                "acPerformName": "레베카",
                "acPerformDate": "2023.08.19 ~ 2023.11.19",
                "acPerformPlace": "블루스퀘어",
                "acPerformRole": "댄버스 부인 역"
            },
            {
                "acPerformName": "맘마미아",
                "acPerformDate": "2023.03.24 ~ 2023.06.25",
                "acPerformPlace": "충무아트센터",
                "acPerformRole": "도나 역"
            }
        ]
    }


]';

$data = json_decode($jsonData, true);

foreach ($data as $item) {
    $acNameKo = $item['acNameKo'];
    $acNameEn = $item['acNameEn'];
    $acOccupation = $item['acOccupation'];
    $acDOB = $item['acDOB'];
    $acPerforms = $item['acPerform'];

    // 이미지 파일 경로 설정
    $acImg = "../assets/img/actor/ac_" . ($acNameKo) . ".jpg";
    $acImgDetail = "../assets/img/actor/ac_detail_" . ($acNameKo) . ".jpg";


    // 배우 정보를 데이터베이스에 삽입 또는 업데이트
    $sql = "INSERT INTO actor (acNameKo, acNameEn, acOccupation, acDOB, acImg, acImgDetail) VALUES ('$acNameKo', '$acNameEn', '$acOccupation', '$acDOB', '$acImg', '$acImgDetail') ON DUPLICATE KEY UPDATE acNameKo = VALUES(acNameKo), acNameEn = VALUES(acNameEn), acOccupation = VALUES(acOccupation), acDOB = VALUES(acDOB), acImg = VALUES(acImg), acImgDetail = VALUES(acImgDetail)";

    if ($connect->query($sql) !== TRUE) {
        echo "오류: " . $sql . "<br>" . $connect->error;
    }


    $actorId = mysqli_insert_id($connect); // 삽입된 배우의 ID 가져오기


    // 배우의 연극 정보를 데이터베이스에 저장
    foreach ($acPerforms as $perform) {
        $acPerformName = $perform['acPerformName'];
        $acPerformDate = $perform['acPerformDate'];
        $acPerformPlace = $perform['acPerformPlace'];
        $acPerformRole = $perform['acPerformRole'];

        $sql = "INSERT INTO ac_perform (actorId, acPerformName, acPerformDate, acPerformPlace, acPerformRole) VALUES ($actorId, '$acPerformName', '$acPerformDate', '$acPerformPlace', '$acPerformRole');";

        if ($connect->query($sql) !== TRUE) {
            echo "오류: " . $sql . "<br>" . $connect->error;
        }
    }
}

$connect->close();
