document.getElementById("agreeCheck1").addEventListener("change", () => {
    const agreeCheck1 = document.getElementById("agreeCheck1");
    const agreeCheck2 = document.getElementById("agreeCheck2");
    const agreeCheck3 = document.getElementById("agreeCheck3");
    const agreeCheck4 = document.getElementById("agreeCheck4");

    if (agreeCheck1.checked) {
        // "agreeCheck1"이 체크되면 나머지 체크박스도 모두 체크
        agreeCheck2.checked = true;
        agreeCheck3.checked = true;
        agreeCheck4.checked = true;
    } else {
        // "agreeCheck1"이 체크 해제되면 나머지 체크박스도 모두 체크 해제
        agreeCheck2.checked = false;
        agreeCheck3.checked = false;
        agreeCheck4.checked = false;
    }
});

// "agreeCheck2", "agreeCheck3", "agreeCheck4" 중 하나라도 체크가 해제되면 "agreeCheck1"도 해제되게 함
const handleAgreeCheckChange = () => {
    const agreeCheck1 = document.getElementById("agreeCheck1");
    const agreeCheck2 = document.getElementById("agreeCheck2");
    const agreeCheck3 = document.getElementById("agreeCheck3");
    const agreeCheck4 = document.getElementById("agreeCheck4");

    if (!agreeCheck2.checked || !agreeCheck3.checked || !agreeCheck4.checked) {

        agreeCheck1.checked = false;
    }
};

document.getElementById("agreeCheck2").addEventListener("change", handleAgreeCheckChange);
document.getElementById("agreeCheck3").addEventListener("change", handleAgreeCheckChange);
document.getElementById("agreeCheck4").addEventListener("change", handleAgreeCheckChange);

document.getElementById("agreeButton").addEventListener("click", () => {
    const agreeCheck1 = document.getElementById("agreeCheck1");
    const agreeCheck2 = document.getElementById("agreeCheck2");
    const agreeCheck3 = document.getElementById("agreeCheck3");
    const agreeCheck4 = document.getElementById("agreeCheck4");

    if (agreeCheck1.checked || (agreeCheck2.checked && agreeCheck3.checked && agreeCheck4.checked)) {
        window.location.href = "joinInsert.php";
    } else {
        alert("이용약관 및 개인정보 취급방침을 동의해주세요!");
    }
});

document.getElementById("cancelButton").addEventListener("click", () => {
    alert("취소되었습니다.");
    window.location.href = "../main/main.php";
});