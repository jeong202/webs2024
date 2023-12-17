document.getElementById("passBtn").addEventListener("click", (e) => {
    const youName = document.querySelector("#youName").value;
    const youId = document.querySelector("#youId").value;
    const youEmail = document.querySelector("#youEmail").value;

    if (youName.length == 0 && youId.length == 0 && youEmail.length == 0) {
        e.preventDefault()
        alert("이름과 아이디, 이메일을 확인해주세요.")
    } else {
        document.forms["find_Pass"].submit();
    }
})