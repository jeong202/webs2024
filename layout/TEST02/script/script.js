$(function(){
    //이미지 슬라이드
    let currentIndex = 0;   //현재 이미지
    $(".sliderWrap").append($(".slider").first().clone(true));   
 
    setInterval(function(){
        currentIndex++;    //현재 이미지를 1씩 증가
        $(".sliderWrap").animate({marginLeft: -1200 * currentIndex}, 600);

        if(currentIndex == 3){  
            setTimeout(function(){
                $(".sliderWrap").animate({ marginLeft: 0},0);   //애니매에션 순간 멈추기(초기화)
                currentIndex = 0;
            }, 700);
        }
    }, 3000)
});



 // 메뉴 : 하나씩 나오기
 $(".nav > ul > li").mouseover(function () {
    $(this).find(".submenu").stop().slideDown(200);
});
$(".nav > ul > li").mouseout(function () {
    $(this).find(".submenu").stop().slideUp(200);
});

// 팝업
$(".popup-btn").click(function(){   //팝업 버튼 클릭
    $(".popup-view").show();    //팝업 나타나기
});
$(".popup-close").click(function(){     //팝업 닫기 버튼 클릭
    $(".popup-view").hide ();   //팝업 숨기기
});