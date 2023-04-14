<?php
    define( "SRC_ROOT",$_SERVER["DOCUMENT_ROOT"]."/board_tng/src/");
    define( "DB_COMMON", SRC_ROOT."db_common.php");
    define( "HEADER", SRC_ROOT."board_header.php");
    include_once(DB_COMMON);
    $result_detail = detail_board_info();
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DETAIL</title>
</head>
<body>
    <?php
    
    ?>
</body>
</html>