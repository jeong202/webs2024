$(function () {
    슬라이드
    let currentIndex = 0;
    $(".imageWrap").append($(".image").first().clone(true));

    setInterval(() => {
        currentIndex++;
        $(".imageWrap").animate({ marginTop: -400 * currentIndex + "px" }, 600);

        if (currentIndex == 3) {
            setTimeout(() => {
                $(".imageWrap").animate({ marginTop: 0 }, 0);
                currentIndex = 0;
            }, 600);
        }
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