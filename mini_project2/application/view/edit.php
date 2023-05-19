<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/application/view/css/common.css">
    <title>IRZR - 비밀번호 수정</title>
</head>
<body>
    <div id="mainCon">
        <?php include_once(_HEADER);?>
        <h1>비밀번호 수정</h1>
        <div id="contents">
            <form action="/user/edit" method="post">
                <label for="originPw">기존 비밀번호 : </label>
                <input type="password" name="originPw" placeholder="기존 비밀번호" class="editInp" id="originPw" maxlength="20" onkeyup="chkOriginPw();">
                <span class="warnMsg" id="errMsgOriginPw">
                <!-- 비밀번호 에러 출력 -->
                <?php if (isset($this->arrError["originPw"])) {
                    echo $this->arrError["originPw"];
                }?>
                </span>
                <br>
                <span>비밀번호는 대소문자,숫자,특수문자 포함 8~20글자로 작성해주세요.</span>
                <br>
                <label for="pw">비밀번호 : </label>
                <input type="password" name="pw" placeholder="비밀번호(8~20글자)" class="editInp" id="pw" onkeyup="chkPw();" maxlength="20">
                <span class="warnMsg" id="errMsgPw">
                <!-- 비밀번호 에러 출력 -->
                <?php if (isset($this->arrError["pw"])) {
                    echo $this->arrError["pw"];
                }?>
                </span>
                <br>
                <label for="pwChk">비밀번호 확인 : </label>
                <input type="password" name="pwChk" placeholder="비밀번호 확인" class="editInp" id="pwChk" onkeyup="chkSamePw();" maxlength="20">
                <span class="warnMsg" id="errMsgPwChk">
                <!-- 비밀번호 불일치 에러 출력 -->
                <?php if (isset($this->arrError["pwChk"])) {
                    echo $this->arrError["pwChk"];
                }?>
                </span>
                <br>
                <div id="btnCon">
                    <button type="submit" id="btn2">수정</button>
                    <button type="button" id="btn3" onclick="location.href='/user/account'">취소</button>
                </div>
            </form>
        </div>
    </div>
        <?php include_once(_FOOTER);?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="/application/view/js/common.js"></script>
</body>
</html>