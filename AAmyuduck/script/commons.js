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


