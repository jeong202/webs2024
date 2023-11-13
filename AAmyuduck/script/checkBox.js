
document.getElementById("agreeCheck1").addEventListener("change", () => {
    const agreeCheck1 = document.getElementById("agreeCheck1");
    const agreeCheck2 = document.getElementById("agreeCheck2");
    const agreeCheck3 = document.getElementById("agreeCheck3");
    const agreeCheck4 = document.getElementById("agreeCheck4");

    if (agreeCheck1.checked) {
        agreeCheck2.checked = true;
        agreeCheck3.checked = true;
        agreeCheck4.checked = true;
    }
})

document.getElementById("agreeButton").addEventListener("click", () => {
    if (document.getElementById("agreeCheck1").checked) {
        window.location.href = "joinInsert.php";
    } else {
        if (agreeCheck2.checked && agreeCheck3.checked && agreeCheck4.checked) {
            window.location.href = "joinInsert.php";
        } else {
            alert("이용약관 및 개인정보 취급방침을 동의해주세요!");
        }
    }

})

document.getElementById("cancelButton").addEventListener("click", () => {
    alert("취소되었습니다.")
    window.location.href = "../main/main.php";
})
