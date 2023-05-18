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
    <div class="logoBox"><a href="/shop/main"><img src="/application/view/img/IRZR.png" id="irzrLogo" alt="IRZR"></a></div>
    <div class="loginBox">
        <form action="/user/login" method="post" id="formBox">
            <input type="text" name="id" class="inp" placeholder="아이디" maxlength="12">
            <br>
            <!--  TODO : 비밀번호 보여주는 눈모양 아이콘 -->
            <input type="password" name="pw" class="inp" placeholder="비밀번호" maxlength="20">
            <i class="fa fa-eye fa-lg"></i>
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
    <?php include_once(_FOOTER);?>
</body>
</html>