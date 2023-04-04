<?php
    include_once("../EX/12_2_ex2_fnc_db_conn.php");

    // 아래 쿼리를 이용하여 DB접속 > Data 획득 후 출력하라
    $sql1 =
        " SELECT "
        ."  * "
        ." FROM "
        ."  department ";
    $sql2 =
        " SELECT "
        ."  * "
        ." FROM "
        ."  dept_manager "
        ." LIMIT "
        ."  5 ";
    // try-catch로 에러 처리를 하라
    // 정상 종료일 때 "정상종료", 에러 날 경우는 해당 에러 메세지 출력
    try
    {
        $obj_conn = null;
        my_db_conn( $obj_conn );
        $stmt = $obj_conn->query( $sql1 );
        $result1 = $stmt->fetchAll();
        // print_r( $result1 ); // var_dump와 print_r 등등 유저에게 보여선 안 되는 부분까지 다 보여주기 때문에 사용을 피한다...출력되는거 보고 소스코드 안에서 주석처리를 하거나 지워야한다

        $stmt = $obj_conn->query( $sql2 );
        $result2 = $stmt->fetchAll();
        // print_r( $result2 );
        
        echo "\n정상 종료";
    }
    catch (Exception $e)
    {
        echo "---- ERROR ----\n";
        echo $e->getMessage();
        echo "\n---- ERROR ----\n";
    }
    finally
    {
        $obj_conn = null;
    }
?>