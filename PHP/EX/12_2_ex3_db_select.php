<?php
    include_once("./12_2_ex2_fnc_db_conn.php"); // 다른 파일에서 함수 불러오기 위해서 inclde_once 사용. include 중복 피하기 위해서 include_once


    $obj_conn = null; // PDO Class &레퍼런스 참조를 해야 $obj_conn 안에 함수 안의 처리가 저장이 된다

    // DB Connect
    my_db_conn( $obj_conn );

    $sql =
        " SELECT "
        ."  * "
        ." FROM "
        ."  employees "
        ." LIMIT :limit_start ";

    $arr_prepare =
        array(
            ":limit_start" => 5
        );

    $stmt = $obj_conn->prepare( $sql );
    $stmt->execute( $arr_prepare );
    $result = $stmt->fetchAll();

    var_dump( $result );

    $obj_conn = null; // DB Connection 파기
?>