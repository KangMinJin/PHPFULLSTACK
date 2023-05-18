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
    <link rel="stylesheet" href="/application/view/css/common.css">
    <title>IRZR - 회원가입</title>
</head>
<body>
    <div class="logoBox"><a href="/shop/main"><img src="/application/view/img/IRZR.png" id="irzrLogo" alt="IRZR"></a></div>
    <h1>회원가입</h1>
    <div class="loginBox">
        <form action="/user/regist" method="post">
            <input type="text" placeholder="아이디(5~12글자)" name="id" class="inp" id="id" onkeyup="chkId();" maxlength="12" value=<?php echo $_POST != null? $inpPosts["id"] : ""; ?>>
            <!-- 중복체크 버튼 눌러서 체크하는게 아닌 입력하는 동안에도 체크될 수 있게 onkeyup 사용함 -->
            <!-- <button type="button" id="idDuplChk" onclick="chkDuplicationId();">중복체크</button> -->
            <span class="warnMsg" id="errMsgId">
            <!-- 아이디 에러 출력 -->
            <?php if (isset($this->arrError["id"])) {
                echo $this->arrError["id"];
            }?>
            </span>
            <br>
            <input type="password" placeholder="비밀번호(대소문자,숫자,특수문자 포함 8~20글자)" name="pw" class="inp" id="pw" onkeyup="chkPw();" maxlength="20">
            <span class="warnMsg" id="errMsgPw">
            <!-- 비밀번호 에러 출력 -->
            <?php if (isset($this->arrError["pw"])) {
                echo $this->arrError["pw"];
            }?>
            </span>
            <br>
            <input type="password" placeholder="비밀번호 확인" name="pwChk" class="inp" id="pwChk" onkeyup="chkSamePw();" maxlength="20">
            <span class="warnMsg" id="errMsgPwChk">
            <!-- 비밀번호 불일치 에러 출력 -->
            <?php if (isset($this->arrError["pwChk"])) {
                echo $this->arrError["pwChk"];
            }?>
            </span>
            <br>
            <input type="text" placeholder="이름(최대 30글자)" name="name" class="inp" id="name" onkeyup="chkName();" maxlength="30" value=<?php echo $_POST != null? $inpPosts["name"] : ""; ?>>
            <span class="warnMsg" id="errMsgName">
            <!-- 이름 에러 출력 -->
            <?php if (isset($this->arrError["name"])) {
                echo $this->arrError["name"];
            }?>
            </span>
            <br>
            <br>
            <button type="submit" id="btn1">회원가입</button>
        </form>
    </div>
    <?php include_once(_FOOTER);?>
    <script src="/application/view/js/common.js"></script>
</body>
</html>