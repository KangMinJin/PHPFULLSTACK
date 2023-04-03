<?php

    // --------------------------------
    // 함수명   : my_db_conn
    // 기능     : DB Connect
    // 파라미터 : PDO   &$param_conn
    // 리턴     : 없음
    // --------------------------------
    function my_db_conn( &$param_conn ) // &레퍼런스 참조를 해야 넣을 변수 안에 함수 안의 처리가 저장이 된다
    {
        $db_host        = "localhost";  // host
        $db_user        = "root";       // user
        $db_pw          = "root506";    // password
        $db_name        = "employees";  // DB name
        $db_charset     = "utf8mb4" ;   // charset
        $db_dns         = "mysql:host=".$db_host.";dbname=".$db_name.";charset=".$db_charset;
        $db_option      =
            array(
                PDO::ATTR_EMULATE_PREPARES      => false // DB의 Prepared Statement 기능을 사용하도록 설정
                ,PDO::ATTR_ERRMODE              => PDO::ERRMODE_EXCEPTION // PDO Exception 을 Throws하도록 설정
                ,PDO::ATTR_DEFAULT_FETCH_MODE   => PDO::FETCH_ASSOC // 연상배열로 Fetch를 하도록 설정
            );

        // PDO Class 로 DB 연동
        $param_conn = new PDO( $db_dns, $db_user, $db_pw, $db_option );
    }

?>