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
    <div id="mainCon">
        <?php include_once(_HEADER);?>
        <h1>내 정보</h1>
        <div id="contents">
            <span> 아이디 : </span><?php echo $this->userInfo["u_id"];?>
            <br>
            <span> 이름 : </span><?php echo $this->userInfo["u_name"];?>
            <br>
            <div id="btnCon">
                <button type="button" id="btn2" onclick="location.href='/user/edit'">비밀번호 수정</button>
                <button type="button" id="btn3" onclick="location.href='/user/withdrawal'">회원탈퇴</button>
            </div>
        </div>
    </div>
    <?php include_once(_FOOTER);?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>