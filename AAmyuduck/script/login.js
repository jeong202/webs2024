document.getElementById("loginBtn").addEventListener("click", (e) => {
    const youId = document.querySelector("#youId").value;
    const youPass = document.querySelector("#youPass").value;

    if (youId.length == 0 && youPass.length == 0) {
        e.preventDefault()
        alert("아이디와 비밀번호를 확인해주세요.")
    } else {
        document.forms["loginSave"].submit();
    }
})