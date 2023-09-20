hljs.highlightAll();

//모달
const modalBtn = document.querySelector(".modal__btn"); // 클래스 이름에 .을 추가
const modalClose = document.querySelector(".modal__close"); // 클래스 이름에 .을 추가
const modalCont = document.querySelector(".modal__cont"); // 클래스 이름에 .을 추가

modalBtn.addEventListener("click", () => {
    modalCont.classList.add("show");
    modalCont.classList.remove("hide");
});

modalClose.addEventListener("click", () => {
    modalCont.classList.add("hide");
    modalCont.classList.remove("show"); // 모달을 닫을 때 추가적으로 hide 클래스를 제거해야 합니다.
});

//탭메뉴
const tabBtn = document.querySelectorAll(".modal__box .title .tabs > div");
const tabcont = document.querySelectorAll(".modal__box .title .cont > div");


tabBtn.forEach((element, index) =>{
    element.addEventListener("click", (e) => {
        e.preventDefault();

        tabBtn.forEach(li => li.classList.remove("active"));
        element.classList.add("active");

        tabcont.forEach(div => div.style.display = "none")
        tabCont[index].style.display = "block"

    })
})