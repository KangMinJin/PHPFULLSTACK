function chkDuplicationId() {
    const id = document.querySelector("#id");
    const idSpan = document.getElementById("errMsgId");
    
    const url="/api/user?id=" + id.value;

    // 빈 문자열 서버로 넘어가는것 방지
    if (id.value === "") {
        idSpan.innerHTML = "";
        idSpan.removeAttribute('style');
        idSpan.innerHTML = "아이디를 입력해주세요.";
        id.focus();
        return false; // 빈 문자열('')도 그냥 서버로 값이 넘어가기때문에 return false 해줘서 서버로 전송 못 하게 한다!
    }
    // TODO : onchange로 실시간 유효성 검사!
    // API
    fetch(url)
    .then(data => {
        if (data.status !== 200) {
            throw new Error(data.status + ' : API Response Error');
        }
        return data.json();
    })
    .then(apiData => {
        console.log(apiData);
        if (apiData["flg"] === "1") {
            idSpan.innerHTML = "";
            idSpan.removeAttribute('style');
            idSpan.innerHTML = apiData["msg"];
        } else {
            idSpan.innerHTML = "";
            idSpan.innerHTML = apiData["msg"];
            idSpan.style.color = '#000'; // 에러메세지가 아니므로 색깔을 #000 으로 줌.
        }
    });

}