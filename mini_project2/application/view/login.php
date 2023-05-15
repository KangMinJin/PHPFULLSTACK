<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/application/view/css/common.css">
    <title>IRZR - 로그인</title>
</head>
<body>
    <div class="logoBox"><a href="/shop/main"><img src="/application/view/img/IRZR.png" id="irzrLogo" alt="IRZR"></a></div>
    <div class="loginBox">
        <form action="/user/login" method="post" id="formBox">
            <input type="text" name="id" class="inp" id="id" placeholder="아이디">
            <br>
            <input type="password" name="pw" id="pw" class="inp" placeholder="비밀번호">
            <br>
            <br>
            <button type="submit" id="btn1">로그인</button>
            <br>
            <p class="loginwarn"><?php echo isset($this->errMsg) ? $this->errMsg : ""; ?></p>
            <br>
        </form>
    </div>
    <div class="loginBox2">
        <a href="/user/join" class="link">회원가입</a>
        <span> | </span>
        <a href="" class="link">아이디 찾기</a>
        <span> | </span>
        <a href="" class="link">비밀번호 찾기</a>
    </div>
</body>
</html>