$(function () {
    // 이미지 슬라이드 (위아래)
    let currentIndex = 0;   //현재 이미지 설정
    $(".sliderWrap").append($(".slider").first().clone(true)); //첫번째 이미지를 복사해서 마지막에 추가

    setInterval(function(){     //3초에 한번씩 실행
        currentIndex++;     //현재 이미지를 1씩 증가
        $(".sliderWrap").animate({marginTop: -300 * currentIndex + "px"}, 600);

        if(currentIndex == 3){  //마지막 이미지가 됐을 때
            setTimeout(function(){  //한번만 실행
                $(".sliderWrap").animate({marginTop:0}, 0); //애니메이션을 정지(초기화)
                currentIndex = 0;   //현재 이미지를 초기화
            }, 700);
        }
    }, 3000);

    // 메뉴 : 하나씩 나오기
    $(".nav > ul > li").mouseover(function () {
        $(this).find(".submenu").stop().slideDown(200);
    });
    $(".nav > ul > li").mouseout(function () {
        $(this).find(".submenu").stop().slideUp(200);
    });

    // 탭 메뉴
    const tabBtn = $(".info-menu > a");     //탭 버튼 설정 공지사항,갤러리
    const tabCont = $(".info-cont > div");  //탭 콘텐츠 설정 공지사항,갤러리
    tabCont.hide().eq(0).show();        //탭 콘텐츠를 숨기고 첫 번째 콘텐츠만 보여줌

    tabBtn.on("click", function () {      //버튼을 클릭하면
        const index = $(this).index();      //클릭한 버튼의 번호를 저장

        $(this).addClass("active").siblings().removeClass("active");    //클릭한 버튼에 클래스를 추가하고 나머지는 제거함
        tabCont.eq(index).show().siblings().hide();             //클릭한 버튼 순서에 맞는 콘텐츠에 클래스를 추가하고 나머지는 숨김
    });
    // 팝업
    $(".popup-btn").click(function () {   //팝업 버튼 클릭
        $(".popup-view").show();    //팝업 나타나기
    });
    $(".popup-close").click(function () {     //팝업 닫기 버튼 클릭
        $(".popup-view").hide();   //팝업 숨기기
    });
});

