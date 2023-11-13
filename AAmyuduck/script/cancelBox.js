document.getElementById("agreeButton").addEventListener("click", () => {
    if (document.getElementById("agreeCheck").checked) {
        window.location.href = "joinCancel.php";
    } else {
        alert("이용약관 및 안내사항에 동의해주세요.")
    }
})

document.getElementById("cancelButton").addEventListener("click", () => {
    alert("취소되었습니다.")
    window.location.href = "../main/main.php";
})