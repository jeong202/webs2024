let isIdCheck = false;
let isEmailCheck = false;

$("#youIdComment").hide();
function idChecking() {
    let youId = $("#youId").val();

    if (youId == null || youId == '') {
        $("#youIdComment").text("-> 아이디를 입력해주세요.")
        $("#youIdComment").show();
    } else {
        let getYouId = RegExp(/^(?=.*[A-Za-z\d])[A-Za-z\d]*$/);

        if (!getYouId.test($("#youId").val())) {
            $("#youIdComment").text("아이디는 영어와 숫자를 포함하여 4~20글자 이내로 작성해야 합니다.")
            $("#youId").val('')
            $("#youId").focus();
            $("#youIdComment").show();
            resetIdCheck();
            return false;
        } else {
            $("#youIdComment").text("멋진 아이디입니다.");
            $("#youIdComment").addClass("green");
        }

        $.ajax({
            type: "POST",
            url: "joinCheck.php",
            data: { "youId": youId, "type": "isIdCheck" },
            dataType: "json",
            success: function (data) {
                if (data.result == "good") {
                    $("#youIdComment").text("사용 가능한 아이디입니다.");
                    $("#youIdComment").show();
                    isIdCheck = true;
                } else {
                    $("#youIdComment").removeClass("green");
                    $("#youIdComment").text("이미 존재하는 아이디입니다.");
                    isIdCheck = false;
                    $("#youIdComment").show();
                }
            }
        })
    }
}

$("#youId").on("input", function () {
    resetIdCheck();
    $("#youIdComment").hide();
});

function emailChecking() {
    let youEmail = $("#youEmail").val();

    if (youEmail == null || youEmail == '') {
        $("#youEmailComment").text("-> 이메일을 입력해주세요.")
    } else {
        let getYouEmail = RegExp(/^[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([\-.]?[0-9a-zA-Z])*\.[a-zA-Z]{2,3}$/i);

        if (!getYouEmail.test($("#youEmail").val())) {
            $("#youEmailComment").text("이메일을 형식에 맞게 작성해주세요")
            $("#youEmail").val('')
            $("#youEmail").focus();
            return false;
        } else {
            $("#youEmailComment").text("사용 가능한 이메일입니다.");
            $("#youEmailComment").addClass("green");
        }

        $.ajax({
            type: "POST",
            url: "joinCheck.php",
            data: { "youEmail": youEmail, "type": "isEmailCheck" },
            dataType: "json",
            success: function (data) {
                if (data.result == "good") {
                    $("#youEmailComment").text("사용 가능한 이메일입니다.");
                    isEmailCheck = true;
                } else {
                    $("#youEmailComment").removeClass("green");
                    $("#youEmailComment").text("이미 존재하는 이메일입니다.");
                    isEmailCheck = false;
                }
            }
        })
    }
}

function resetIdCheck() {
    isIdCheck = false;
    $("#youIdComment").removeClass("green");
    $("#youIdComment").text("아이디 중복 검사를 다시 진행해주세요.");
}



function joinChecks() {
    if (!isIdCheck || !isEmailCheck) {
        alert("중복 검사를 먼저 진행해주세요");
        return false;
    }

    // 비밀번호
    if ($("#youPass").val() == '') {
        $("#youPassComment").text("비밀번호를 입력해 주세요");
        $("#youPass").focus();
        return false;
    } else {
        let getYouPass = $("#youPass").val();
        let getYouPassNum = getYouPass.search(/[0-9]/g);
        let getYouPassEng = getYouPass.search(/[a-z]/ig);
        let getYouPassSpe = getYouPass.search(/[`~!@@#$%^&*|₩₩₩'₩";:₩/?]/gi);

        if (getYouPass.length < 8 || getYouPass.length > 20) {
            $("#youPassComment").text("➟ 8자리 ~ 20자리 이내로 입력해주세요");
            return false;
        } else if (getYouPass.search(/\s/) != -1) {
            $("#youPassComment").text("➟ 비밀번호는 공백없이 입력해주세요!");
            return false;
        } else if (getYouPassNum < 0 || getYouPassEng < 0 || getYouPassSpe < 0) {
            $("#youPassComment").text("➟ 영문, 숫자, 특수문자를 혼합하여 입력해주세요!");
            return false;
        }
    }

    // 비밀번호 확인
    if ($("#youPassC").val() == '') {
        $("#youPassCComment").text("➟ 확인 비밀번호를 입력해주세요!");
        $("#youPassC").focus();
        return false;
    }

    // 비밀번호 동일 체크
    if ($("#youPass").val() !== $("#youPassC").val()) {
        $("#youPassCComment").text("➟ 비밀번호가 일치하지 않습니다.");
        $("#youPass").focus();
        return false;
    }

    // 이름 유효성 검사
    if ($("#youName").val() == '') {
        $("#youNameComment").text("이름을 적어주세요.");
        $("#youName").focus();
        return false;
    } else {
        let getYouName = RegExp(/^[가-힣]{2,5}$/);

        if (!getYouName.test($("#youName").val())) {
            $("#youNameComment").text("이름을 한글(2~5글자) 사용할 수 있습니다.");
            $("#youName").val('');
            $("#youName").focus();
            return false;
        }
    }

    // 연락처 
    let getYouPhonePattern = /^[0-9]{10,11}$/;
    let youPhoneValue = $("#youPhone").val();

    // 휴대폰 번호가 비어있지 않고, 패턴에 맞지 않을 경우에만 처리
    if (youPhoneValue.trim() !== "" && !getYouPhonePattern.test(youPhoneValue)) {
        $("#youPhoneComment").text("➟ 휴대폰 번호가 정확하지 않습니다. (하이픈 없이 숫자만 적어주세요!)");
        $("#youPhone").val('');
        $("#youPhone").focus();

        return false;
    }
}

// 우편번호 찾기 화면을 넣을 element
const layer = document.querySelector("#layer");
const searchIcon = document.querySelector("#addressCheck");
const layerCloseBtn = document.querySelector("#btnCloseLayer");

searchIcon.addEventListener('click', searchBtnClick);
layerCloseBtn.addEventListener('click', closeDaumPostcode);

function closeDaumPostcode() {
    // iframe을 넣은 element를 안보이게 한다.
    layer.style.display = 'none';
}

const themeObj = {
    //bgColor: "", //바탕 배경색
    searchBgColor: "#160A0C", //검색창 배경색
    //contentBgColor: "", //본문 배경색(검색결과,결과없음,첫화면,검색서제스트)
    //pageBgColor: "", //페이지 배경색
    //textColor: "", //기본 글자색
    queryTextColor: "#FFFFFF" //검색창 글자색
    //postcodeTextColor: "", //우편번호 글자색
    //emphTextColor: "", //강조 글자색
    //outlineColor: "", //테두리
};

function searchBtnClick() {
    new daum.Postcode({
        theme: themeObj,
        oncomplete: function (data) {
            // 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

            // 각 주소의 노출 규칙에 따라 주소를 조합한다.
            // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
            let addr = ''; // 주소 변수
            let extraAddr = ''; // 참고항목 변수

            //사용자가 선택한 주소 타입에 따라 해당 주소 값을 가져온다.
            if (data.userSelectedType === 'R') { // 사용자가 도로명 주소를 선택했을 경우
                addr = data.roadAddress;
            } else { // 사용자가 지번 주소를 선택했을 경우(J)
                addr = data.jibunAddress;
            }

            /*
            // 사용자가 선택한 주소가 도로명 타입일때 참고항목을 조합한다.
            if (data.userSelectedType === 'R') {
                // 법정동명이 있을 경우 추가한다. (법정리는 제외)
                // 법정동의 경우 마지막 문자가 "동/로/가"로 끝난다.
                if (data.bname !== '' && /[동|로|가]$/g.test(data.bname)) {
                    extraAddr += data.bname;
                }
                // 건물명이 있고, 공동주택일 경우 추가한다.
                if (data.buildingName !== '' && data.apartment === 'Y') {
                    extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
                }
                // 표시할 참고항목이 있을 경우, 괄호까지 추가한 최종 문자열을 만든다.
                if (extraAddr !== '') {
                    extraAddr = ' (' + extraAddr + ')';
                }
                // 조합된 참고항목을 해당 필드에 넣는다.
                document.getElementById("sample2_extraAddress").value = extraAddr;

            } else {
                document.getElementById("sample2_extraAddress").value = '';
            }
            */


            document.querySelector('#youAddress1').value = data.zonecode; // 우편번호
            document.querySelector("#youAddress2").value = addr; // 주소
            document.querySelector("#youAddress3").focus();

            // iframe을 넣은 element를 안보이게 한다.
            // (autoClose:false 기능을 이용한다면, 아래 코드를 제거해야 화면에서 사라지지 않는다.)
            layer.style.display = 'none';
        },
        width: '100%',
        height: '100%',
        maxSuggestItems: 5
    }).embed(layer);

    // iframe을 넣은 element를 보이게 한다.
    layer.style.display = 'block';

    // iframe을 넣은 element의 위치를 화면의 가운데로 이동시킨다.
    initLayerPosition();
}

// 브라우저의 크기 변경에 따라 레이어를 가운데로 이동시키고자 하실때에는
// resize이벤트나, orientationchange이벤트를 이용하여 값이 변경될때마다 아래 함수를 실행 시켜 주시거나,
// 직접 layer의 top,left값을 수정해 주시면 됩니다.
function initLayerPosition() {
    const width = 500; //우편번호서비스가 들어갈 element의 width
    const height = 500; //우편번호서비스가 들어갈 element의 height
    const borderWidth = 5; //샘플에서 사용하는 border의 두께

    // 위에서 선언한 값들을 실제 element에 넣는다.
    layer.style.width = width + 'px';
    layer.style.height = height + 'px';
    layer.style.border = borderWidth + 'px solid';
    // 실행되는 순간의 화면 너비와 높이 값을 가져와서 중앙에 뜰 수 있도록 위치를 계산한다.
    layer.style.left = (((window.innerWidth || document.documentElement.clientWidth) - width) / 2 - borderWidth) + 'px';
    layer.style.top = (((window.innerHeight || document.documentElement.clientHeight) - height) / 2 - borderWidth) + 'px';
}