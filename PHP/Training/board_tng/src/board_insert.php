<?php
    define( "SRC_ROOT",$_SERVER["DOCUMENT_ROOT"]."/board_tng/src/");
    define( "DB_COMMON", SRC_ROOT."db_common.php");
    define( "HEADER", SRC_ROOT."board_header.php");

    include_once(DB_COMMON);

    if ( $_POST != null )
    {
        $arr_post = $_POST;
        insert_board_info( $arr_result );
    };
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSERT</title>
</head>
<body>
    <form method="post" action="board_insert.php">
        <label for="b_title">제목</label>
        <input type="text" name="board_title" id="b_title" required>
        <label for="b_contents">내용</label>
        <textarea name="board_contents" id="b_contents" rows="10" required></textarea>
        <button type="submit">작성</button>
        <button type="button" onclick>취소</button>
    </form>
</body>
</html>
<!-- xcopy D:\Students\KMJ\workspace\PHPFULLSTACK\PHP\Training\board_tng C:\Apache24\htdocs\board_tng /E /H /F /Y -->