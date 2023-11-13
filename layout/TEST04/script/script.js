$(function () {
    //슬라이드 : 페이드 효과
    let currentIndex = 0;   //현재 이미지 설정

    setInterval(function () {     //3초에 한번씩 실행
        let nextIndex = (currentIndex + 1) % 3;     //다음 이미지 설정 : 120120120

        $(".slider").eq(currentIndex).fadeOut(1200);    //첫 번재 이미지 안보이게 함
        $(".slider").eq(nextIndex).fadeIn(1800);    //두번째 이미지 보이게 함

        currentIndex = nextIndex;   //두번재 값을 현재 인덱스에 저장
    }, 3000);

    // 메뉴
    $(".nav > ul > li").mouseover(function () {
        $(this).find(".submenu").stop().slideDown();
    });
    $(".nav > ul > li").mouseout(function () {
        $(this).find(".submenu").stop().slideUp();
    });

    // 팝업
    $(".popup-btn").click(function () {
        $(".popup-view").show();
    });
    $(".popup-close").click(function () {
        $(".popup-view").hide();
    });
});