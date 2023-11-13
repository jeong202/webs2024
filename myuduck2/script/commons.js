// 사이드바가 작동하면 화면 어두워짐
const navbarBurger = document.querySelector('.navbar_burger');
const navbarburgerback = document.querySelector('.navbar_burger_back');
const navbarMenu = document.querySelector('.navbar_menu');
const navbarOverlay = document.querySelector('.navbar_overlay');

navbarBurger.addEventListener('click', () => {
    navbarMenu.classList.toggle('active');
    navbarOverlay.classList.toggle('active');
});

navbarburgerback.addEventListener('click', () => {
    navbarMenu.classList.remove('active'); 
    navbarOverlay.classList.remove('active');
});

navbarOverlay.addEventListener('click', () => {
    navbarMenu.classList.remove('active');
    navbarOverlay.classList.remove('active');
});




// 서브메뉴 슬라이드업다운
$(".navbar_menu li").mouseover(function () {
    $(this).find(".submenu").stop().slideDown();
});
$(".navbar_menu li").mouseout(function () {
    $(this).find(".submenu").stop().slideUp();
});


 // 03. 스냅 고정 효과 만들기 (이런건 검색해서 찾아서 복사하셈)

 let panels = gsap.utils.toArray(".parallax_item");
 let tops = panels.map(panel => ScrollTrigger.create({ trigger: panel, start: "top top" }));

 panels.forEach((panel, i) => {
     ScrollTrigger.create({
         trigger: panel,
         start: () => panel.offsetHeight < window.innerHeight ? "top top" : "bottom bottom",
         pin: true,
         pinSpacing: false
     });
 });

 ScrollTrigger.create({
     snap: {
         snapTo: (progress, self) => {
             let panelStarts = tops.map(st => st.start),
                 snapScroll = gsap.utils.snap(panelStarts, self.scroll());
             return gsap.utils.normalize(0, ScrollTrigger.maxScroll(window), snapScroll);
         },
         duration: 0.5
     }
 });

 // 02. 여러개 이질감 표현하기
 gsap.utils.toArray(".parallax_item_desc").forEach(item => {
     gsap.to(item, {
         yPercent: -400,
         duration: 0.5,
         scrollTrigger: {
             trigger: item,
             start: "top bottom",
             end: "bottom top",
             markers: true,
             scrub: 0.5
         }
     })
 });