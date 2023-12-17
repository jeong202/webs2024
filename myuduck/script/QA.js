// 얼굴 표정 랜덤으로 들어가기
const avataImages = [
    "AngrywithFang.svg",
    "Awe.svg",
    "Blank.svg",
    "Calm.svg",
    "Cheek.svg",
    "ConcernedFear.svg",
    "Concerned.svg",
    "Contempt.svg",
    "Cute.svg",
    "Cyclops.svg",
    "Driven.svg",
    "EatingHappy.svg",
    "Explaining.svg",
    "EyesClosed.svg",
    "Fear.svg",
    "Hectic.svg",
    "LovingGrin1.svg",
    "LovingGrin2.svg",
    "Monster.svg",
    "Old.svg",
    "Rage.svg",
    "Serious.svg",
    "SmileBig.svg",
    "SmileLOL.svg",
    "SmileTeeth Gap.svg",
    "Smile.svg",
    "Solemn.svg",
    "Suspicious.svg",
    "Tired.svg",
    "VeryAngry.svg",
]
const commentViews = document.querySelectorAll(".comment__view");
commentViews.forEach((view, i) => {
    const avata = view.querySelector(".avata");
    const rand = avataImages[Math.floor(Math.random() * (avataImages.length - 1))];

    console.log(rand);
    avata.style.backgroundImage = `url(../assets/face/${rand})`;
});

let commentId = "";

// 댓글 쓰기 버튼
$("#commentWriteBtn").click(function () {
    if ($("#commentWrite").val() == "") {
        alert("댓글을 작성해주세요.");
        $("#commentWriteBtn").focus();
    } else {
        $.ajax({
            url: "QACommentWrite.php",
            method: "POST",
            dataType: "json",
            data: {
                "boardID": <?=$boardID?>,
                "youId": $("#commentName").val(),
                "name": $("#commentName").val(),
                "pass": $("#commentPass").val(),
                "msg": $("#commentWrite").val()
            },
            success: function (data) {
                if (data && data.success) {
                    console.log("댓글이 성공적으로 등록되었습니다.");
                    location.reload();
                } else {
                    console.log("댓글 등록 중 오류가 발생했습니다.");
                }
            },
            error: function (request, status, error) {
                console.log("request: ", request);
                console.log("status: ", status);
                console.log("error: ", error);
            }
        })
    }
});

// 댓글 삭제 버튼
$(".comment__view .delete").click(function (e) {
    e.preventDefault();
    $("#popupDelete").removeClass("none");
    commentId = $(this).data("comment-id");
    console.log("commentId:", commentId);
});

// 댓글 삭제 버튼 --> 취소 버튼
$("#commentDeleteCancel").click(function () {
    $("#popupDelete").addClass("none");
});

// 댓글 삭제 버튼 --> 삭제 버튼
$("#commentDeleteButton").click(function () {
    if ($("#commentDeletePass").val() == "") {
        alert("댓글 작성시 비밀번호를 작성해주세요!");
        $("#commentDeletePass").focus();
    } else {
        $.ajax({
            url: "QACommentDelete.php",
            method: "POST",
            dataType: "json",
            data: {
                "commentPass": $("#commentDeletePass").val(),
                "commentId": commentId,
            },
            success: function (data) {
                console.log("data : ", data);
                if (data.result == "bad") {
                    alert("비밀번호가 일치하지 않습니다.");
                } else {
                    alert("댓글이 삭제되었습니다.");
                }
                location.reload();
            },
            error: function (request, status, error) {
                console.log("request" + request);
                console.log("status" + status);
                console.log("error" + error);
            }
        })
    }
});

// 댓글 수정 버튼
$(".comment__view .modify").click(function (e) {
    e.preventDefault();
    $("#popupModify").removeClass("none");
    commentId = $(this).data("comment-id");
    console.log("commentId:", commentId);
    let commentMsg = $(this).closest(".comment__view").find("p").text();
    $("#commentModifyMsg").val(commentMsg)
});

// 댓글 수정 버튼 --> 취소 버튼
$("#commentModifyCancel").click(function () {
    $("#popupModify").addClass("none");
});

// 댓글 수정 버튼 --> 수정 버튼
$("#commentModifyButton").click(function () {
    if ($("#commentModifyPass").val() == "") {
        alert("댓글 작성시 비밀번호를 작성해주세요!");
        $("#commentModifyPass").focus();
    } else {
        $.ajax({
            url: "QACommentModify.php",
            method: "POST",
            dataType: "json",
            data: {
                "commentMsg": $("#commentModifyMsg").val(),
                "commentPass": $("#commentModifyPass").val(),
                "commentId": commentId,
            },
            success: function (data) {
                console.log(data);
                if (data.result == "bad") {
                    alert("비밀번호가 일치하지 않습니다.");
                } else {
                    alert("댓글이 수정되었습니다.");
                }
                location.reload();
            },
            error: function (request, status, error) {
                console.log("request" + request);
                console.log("status" + status);
                console.log("error" + error);
            }
        })
    }
});