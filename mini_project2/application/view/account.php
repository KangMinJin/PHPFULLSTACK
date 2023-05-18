<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/application/view/css/common.css">
    <title>IRZR - 마이페이지</title>
</head>
<body>
    <?php include_once(_HEADER);?>
    <h1>내 정보</h1>
    <span> 아이디 : </span><?php echo $this->userInfo["u_id"];?>
    <br>
    <span> 이름 : </span><?php echo $this->userInfo["u_name"];?>
    <br>
    <!-- <form action="/user/account" method="post">
        <label for="pw">비밀번호 : </label>
        <input type="password" name="pw" placeholder="비밀번호(8~20글자)" id="pw" value="<?php echo $this->userInfo["u_pw"];?>">
        <br>
        <label for="pwChk">비밀번호 확인 : </label>
        <input type="password" name="pw" placeholder="비밀번호 확인" id="pwChk" value="<?php echo $this->userInfo["u_pw"];?>">
        <br>
        <button type="submit">수정</button>
    </form> -->
    <button type="button" onclick="location.href='/user/edit'">비밀번호 수정</button>
    <button type="button" onclick="location.href='/user/withdrawal'">회원탈퇴</button>
    <?php include_once(_FOOTER);?>
</body>
</html>