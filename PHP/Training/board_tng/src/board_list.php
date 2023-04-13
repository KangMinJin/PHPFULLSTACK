<?php
    define( "SRC_ROOT",$_SERVER["DOCUMENT_ROOT"]."/board_tng/src/");
    define( "DB_COMMON", SRC_ROOT."db_common.php");
    include_once("DB_COMMON");
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo select_board_info(5) ?>
</body>
</html>