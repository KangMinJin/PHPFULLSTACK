<?php
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
    $obj_conn = new PDO( $db_dns, $db_user, $db_pw, $db_option );
    // 사번 10001, 10002의 현재 연봉과 사번, 생일을 가져오는 쿼리 작성하시오
    // $sql =
    //     " SELECT " // 이렇게 작성하면 수정이 용이해진다
    //     ."  sal.salary "
    //     ."  ,emp.emp_no "
    //     ."  ,emp.birth_date "
    //     ."  FROM "
    //     ."  employees emp "
    //     ."  INNER JOIN salaries sal "
    //     ."      ON emp.emp_no = sal.emp_no "
    //     ."  WHERE "
    //     ."  ( "
    //     ."      emp.emp_no = :emp_no1 "
    //     ."      OR emp.emp_no = :emp_no2 "
    //     ."  ) "
    //     ."  AND sal.to_date >= NOW() ";

    // $arr_prepare =
    //     array(
    //         ":emp_no1" => 10001
    //         ,":emp_no2" => 10002
    //     );
    // $stmt = $obj_conn->prepare( $sql ); // Prepare Statement를 생성
    // $stmt->execute( $arr_prepare ); // 쿼리 실행
    // $result = $stmt->fetchAll(); // 쿼리 결과를 fetch
    // // print_r( $result );

    // foreach ( $result as $val )
    // {
    //     echo $val["salary"], "\n";
    // }

    // INSERT 예제
    $sql =
        " INSERT INTO departments( "
        ."  dept_no"
        ."  ,dept_name"
        ." ) "
        ." VALUES( "
        ."  :dept_no "
        ."  ,:dept_name "
        ." ) ";

    $arr_prepare =
        array
        (
            ":dept_no" => 'd011'
            ,":dept_name" => 'PHP풀스택'
        );
    $stmt = $obj_conn->prepare( $sql );
    $result = $stmt->execute( $arr_prepare );
    
    $obj_conn->commit(); // insert한 결과 저장을 위해 commit해준다
    // HeidiSQL로 들어가서 SELECT 해도 바로 안 뜨니까 FLUSH PRIVILEGES; -- DB를 최신상태로 Refrash 해주는 쿼리 실행하고 다시 SELECT하면 넣은 데이터가 보인다

    var_dump( $result );

    $obj_conn = null; // DB 파기

?>