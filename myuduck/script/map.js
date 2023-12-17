const lat = 37.52936860672154;
const lng = 126.97968758669053;

var mapContainer = document.getElementById('map'), // 지도를 표시할 div 지도영역 
    mapOption = {
        center: new kakao.maps.LatLng(lat, lng), // 지도의 중심좌표 - 극장들 중심점
        level: 8 // 지도의 확대 레벨
    };

// 지도를 표시할 div와  지도 옵션으로  지도를 생성합니다
var map = new kakao.maps.Map(mapContainer, mapOption);

var positions = [
    {
        title: '<div style="padding:5px;font-size:0.9rem;color:#000;">샤롯데씨어터 </div>',
        latlng: new kakao.maps.LatLng(37.5106382034046, 127.09973091097557)
    },
    {
        title: '<div style="padding:5px;font-size:0.9rem;color:#000;">세종문화회관대극장</div>',
        latlng: new kakao.maps.LatLng(37.57284911374645, 126.97606675637715)
    },
    {
        title: '<div style="padding:5px;font-size:0.9rem;color:#000;">예술의전당</div>',
        latlng: new kakao.maps.LatLng(37.47920078526139, 127.01182306850005)
    },
    {
        title: '<div style="padding:5px;font-size:0.9rem;color:#000;">블루스퀘어</div>',
        latlng: new kakao.maps.LatLng(37.5408300635196, 127.00254873216088)
    },
    {
        title: '<div style="padding:5px;font-size:0.9rem;color:#000;">LG아트센터 서울</div>',
        latlng: new kakao.maps.LatLng(37.565423217153246, 126.82923265234695)
    },

    {
        title: '<div style="padding:5px;font-size:0.9rem;color:#000;">충무아트센터</div>',
        latlng: new kakao.maps.LatLng(37.565937720203344, 127.01483061850412)
    },
    {
        title: '<div style="padding:5px;font-size:0.9rem;color:#000;">디큐브 링크아트센터</div>',
        latlng: new kakao.maps.LatLng(37.50910375324034, 126.88958852343029)
    },
    {
        title: '<div style="padding:5px;font-size:0.9rem;color:#000;">국립극장(해오름극장)</div>',
        latlng: new kakao.maps.LatLng(37.55231557549587, 126.99972556608888)
    },
    {
        title: '<div style="padding:5px;font-size:0.9rem;color:#000;">유니버설아트센터</div>',
        latlng: new kakao.maps.LatLng(37.55088400219826, 127.08797559593665)
    },
    {
        title: '<div style="padding:5px;font-size:0.9rem;color:#000;">한전아트센터</div>',
        latlng: new kakao.maps.LatLng(37.48586986943118, 127.02866564516378)
    },
    {
        title: '<div style="padding:5px;font-size:0.9rem;color:#000;">우리금융아트홀 </div>',
        latlng: new kakao.maps.LatLng(37.51667563625578, 127.12502856944614)
    },
];

for (let i = 0; i < positions.length; i++) {
    // 마커를 생성합니다
    var marker = new kakao.maps.Marker({
        map: map,
        position: positions[i].latlng
    });

    var infowindow = new kakao.maps.InfoWindow({
        content: positions[i].title   // 인포윈도우에 표시할 내용
    });

    // 마커에 이벤트를 등록합니다
    // 이벤트 리스너로는 클로저를 만들어 등록합니다 
    // 클로저를 만들어 주지 않으면 마지막 마커에만 이벤트가 등록됩니다

    // 마커에 마우스오버하면 makeOverListener() 실행
    kakao.maps.event.addListener(marker, 'mouseover', makeOverListener(map, marker, infowindow));
    // 마커에서 마우스아웃하면 makeOutListener() 실행
    kakao.maps.event.addListener(marker, 'mouseout', makeOutListener(infowindow));
}

// 인포윈도우를 표시하는 클로저를 만드는 함수입니다 
function makeOverListener(map, marker, infowindow) {
    return function () {
        infowindow.open(map, marker);
    };
}

// 인포윈도우를 닫는 클로저를 만드는 함수입니다 
function makeOutListener(infowindow) {
    return function () {
        infowindow.close();
    };
}

// 극장로고 클릭시 극장위치에 지도마크 표시 

const ZOOM_LEVEL = 3; // 클릭시 고정할 줌 레벨()

for (let i = 1; i <= positions.length; i++) {
    const logoimg = document.querySelector(`.im${i}`);
    logoimg.onclick = () => panTo(i);
}

function panTo(index) {
    const coordinates = positions[index - 1].latlng;
    // 지도 축소
    map.setLevel(ZOOM_LEVEL);
     // 이동 
    map.panTo(coordinates);
}