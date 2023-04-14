<?php
    define( "SRC_ROOT",$_SERVER["DOCUMENT_ROOT"]."/board_tng/src/");
    define( "DB_COMMON", SRC_ROOT."db_common.php");
    define( "HEADER", SRC_ROOT."board_header.php");
    include_once(DB_COMMON);
    
    $result = select_all_board_info();
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="common.css">
</head>
<body>
    <?php include_once(HEADER);?>
        <div class=con>
            <table>
                <thead>
                    <th>글 번호</th>
                    <th>게시물 제목</th>
                    <th>작성 날짜</th>
                </thead>
                <tbody>
                    <?php foreach ($result as $val)
                    {
                    ?>
                        <tr>
                            <td class="b_no">
                                <?php echo $val["board_no"]; ?>
                            </td>
                            <td>
                                <?php echo $val["board_title"]; ?>
                            </td>
                            <td class="b_date">
                                <?php echo $val["board_write_date"]; ?>
                            </td>
                            </tr>
            
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    <?php 
        // $result = select_board_info();
        // print_r($result);
        // foreach ($result as $key => $value) {
        //     // echo $result['board_no'].' '.$result['board_title'].' '.$result['board_write_date'].'<br>';
        // }
        // echo rowCount($result);
        //foreach ($result as $val) // 이중배열이므로 $val에 board_info의 정보가 담겨있다. array[0]( array( ['board_no'] => 1 ) ) 이런식으로 담겨있기에 $val['board_no'] 라고 써야 board_no값 받을 수 있다...
            //{
            //    echo $val["board_no"]." ".$val["board_title"]." ".$val["board_write_date"]."<br>";
            //}
        ?>
</body>
</html>