document.getElementById("memberShipCancel").addEventListener("click", (e) => {
    const youPass = document.querySelector("#youPass").value;
    const youPassC = document.querySelector("#youPassC").value;

    if (youPass.length == 0 && youPassC.length == 0) {
        e.preventDefault()
        alert("비밀번호를 입력해주세요.")
    } else {
        if (youPass === youPassC) {
            document.forms["joinCancelCheck"].submit();
        } else {
            e.preventDefault()
            alert("두개의 비밀번호가 일치하지 않습니다. 다시 확인해주세요.")
        }
    }
})

document.getElementById("cancelButton").addEventListener("click", () => {
    alert("취소되었습니다.")
    window.location.href = "../main/main.php";
})