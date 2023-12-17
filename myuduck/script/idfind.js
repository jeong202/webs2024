document.getElementById("idBtn").addEventListener("click", (e) => {
    const youName = document.querySelector("#youName").value;
    const youEmail = document.querySelector("#youEmail").value;

    if (youName.length == 0 && youEmail.length == 0) {
        e.preventDefault()
        alert("이름과 이메일을 확인해주세요.")
    } else {
        document.forms["findme_Id"].submit();
    }
})