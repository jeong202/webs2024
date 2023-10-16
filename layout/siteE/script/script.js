$(function(){
    //이미지 슬라이드
    let currentIndex = 0;
    $(".sliderWrap").append($(".slider").first().clone(true));  //첫번째 이미지 복사

    setInterval(function(){
        currentIndex++;
        $(".sliderWrap").animate({marginLeft: -100 * currentIndex+"%"}, 600);   //반응형이라 %로 처리

        if(currentIndex == 3){
            setTimeout(function(){  // setTimeout은 한번만 실행
                $(".sliderWrap").animate({marginLeft: 0}, 0);
                currentIndex = 0;
            }, 600);
        }
    }, 3000);

    // 메뉴
    // CSS의 #header .nav에 위로 올라오게 처리
    $(".nav > ul > li").mouseover(function(){
        $(this).find(".submenu").stop().slideDown();
    });
    $(".nav > ul > li").mouseout(function(){
        $(this).find(".submenu").stop().slideUp();
    });

    // 팝업
    $(".popup-btn").click(function(){
        $(".popup-view").show();
    });
    $(".popup-close").click(function(){
        $(".popup-view").hide();
    });
});