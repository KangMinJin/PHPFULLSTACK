<?php
    if ($_POST != null) {
        $inpPosts = $_POST;
    }
?>
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
    <?php include_once(_HEADER);?>
        <h1>비밀번호 수정</h1>
        
        <form action="/user/edit" method="post">
            <label for="pw">비밀번호 : </label>
            <input type="password" name="pw" placeholder="비밀번호(8~20글자)" id="pw" onkeyup="chkPw();" maxlength="20" value=<?php echo $_POST != null? $inpPosts["pw"] : $this->userInfo["u_pw"];?>>
            <span class="warnMsg" id="errMsgPw">
            <!-- 비밀번호 에러 출력 -->
            <?php if (isset($this->arrError["pw"])) {
                echo $this->arrError["pw"];
            }?>
            </span>
            <br>
            <label for="pwChk">비밀번호 확인 : </label>
            <input type="password" name="pwChk" placeholder="비밀번호 확인" id="pwChk" onkeyup="chkSamePw();" maxlength="20" value=<?php echo $_POST != null? $inpPosts["pwChk"] : "";?>>
            <span class="warnMsg" id="errMsgPwChk">
            <!-- 비밀번호 불일치 에러 출력 -->
            <?php if (isset($this->arrError["pwChk"])) {
                echo $this->arrError["pwChk"];
            }?>
            </span>
            <br>
            <button type="submit">수정</button>
            <button type="button" onclick="location.href='/user/account'">취소</button>
        </form>
        <?php include_once(_FOOTER);?>
        <script src="/application/view/js/common.js"></script>
</body>
</html>