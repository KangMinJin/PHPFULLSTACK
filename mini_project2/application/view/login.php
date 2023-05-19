<?php
    if ($_POST != null) {
        $inpPost = $_POST;
    }
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="/application/view/css/common.css">
    <title>IRZR - 로그인</title>
</head>
<body>
    <div id="con">
        <div class="logoBox"><a href="/shop/main"><img src="/application/view/img/IRZR.png" id="irzrLogo" alt="IRZR"></a></div>
        <h2>로그인</h2>
        <div class="loginBox">
            <form action="/user/login" method="post" id="formBox">
                <input type="text" name="id" class="inp" placeholder="아이디" maxlength="12" value=<?php echo $_POST != null? $inpPost["id"] : ""; ?>>
                <br>
                <input type="password" name="pw" class="inp" placeholder="비밀번호" maxlength="20">
                <br>
                <br>
                <button type="submit" id="btn1">로그인</button>
                <br>
                <p  class="warnMsg"><?php echo isset($this->errMsg) ? $this->errMsg : ""; ?></p>
                <br>
            </form>
        </div>
        <div class="loginBox2">
            <a href="/user/regist" class="link">회원가입</a>
            <span> | </span>
            <a href="" class="link">아이디 찾기</a>
            <span> | </span>
            <a href="" class="link">비밀번호 찾기</a>
        </div>
    </div>
    <?php include_once(_FOOTER);?>
</body>
</html>