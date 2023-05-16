function chkDuplicationId() {
    const id = document.querySelector("#id");
    const idSpan = document.getElementById("errMsgId");
    const infoSpan = document.getElementById("infoId");
    
    const url="/api/user?id=" + id.value;

    if (id.value === "") {
        idSpan.innerHTML = "아이디를 입력해주세요.";
        id.focus();
        return false; // 빈 문자열('')도 그냥 서버로 값이 넘어가기때문에 return false 해줘서 서버로 전송 못 하게 한다!
    }
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
            infoSpan.innerHTML = "";
            idSpan.innerHTML = apiData["msg"];
            id.focus();
        } else {
            idSpan.innerHTML = "";
            infoSpan.innerHTML = apiData["msg"];
        }
    });

}