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
        <form action="/user/join" method="post">
            <input type="text" placeholder="아이디" name="id" class="inp" >
            <br>
            <input type="password" placeholder="비밀번호" name="pw" class="inp" id="pw">
            <br>
            <input type="password" placeholder="비밀번호 확인" name="pwChk" class="inp" id="pw">
            <br>
            <br>
            <p class="loginwarn"><?php echo isset($this->errMsg) ? $this->errMsg : ""; ?></p>
            <br>
            <button type="submit" id="btn1">회원가입</button>
        </form>
    </div>
</body>
</html>