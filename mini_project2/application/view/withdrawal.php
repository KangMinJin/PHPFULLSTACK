
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/application/view/css/common.css">
    <title>IRZR - 회원탈퇴</title>
</head>
<body>
    <div id="mainCon">
        <?php include_once(_HEADER);?>
        <h1>회원탈퇴</h1>
        <div id="contents">
            <form action="/user/withdrawal" method="post" id="whdwlForm">
                <h4>회원탈퇴에 동의하시면 비밀번호를 입력해주세요.</h4>
                <br>
                <input type="password" name="pw" id="pw" placeholder="비밀번호" maxlength="20">
                <span class="warnMsg" id="errMsgPw">
                    <!-- 비밀번호 에러 출력 -->
                    <?php if (isset($this->arrError["pw"])) {
                        echo $this->arrError["pw"];
                    }?>
                </span>
                <br>
                <div id="btnCon">
                    <button type="submit" id="btn4">회원탈퇴</button>
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