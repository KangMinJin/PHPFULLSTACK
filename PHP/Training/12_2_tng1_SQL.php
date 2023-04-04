<?php

    // 작성한 my_db_conn 함수를 이용해서 아래 데이터를 출력하라
    include_once("../EX/12_2_ex2_fnc_db_conn.php");
    
    // $obj_conn = null;
    // my_db_conn( $obj_conn );
    
    // // 1. 전체 월급의 평균
    // $sql = 
    //     " SELECT "
    //     ."  AVG(salary) "
    //     ." FROM "
    //     ."  salaries "
    //     ." WHERE "
    //     ."  to_date >= NOW() ";
        
    //     $stmt = $obj_conn->query( $sql ); // prepare statement 쓸 일이 없으므로 prepare함수 말고 query함수 쓴다
    //     $result = $stmt->fetchAll();
        
    //     var_dump( $result );
    //     $obj_conn = null;
        

        // 2. 새로운 사원 정보를 employees 테이블에 등록하라
        // $sql =
        //     " INSERT INTO employees( "
        //     ."  emp_no "
        //     ."  ,birth_date "
        //     ."  ,first_name "
        //     ."  ,last_name "
        //     ."  ,gender "
        //     ."  ,hire_date "
        //     ."  ,sup_no "
        //     ." ) "
        //     ." VALUES( "
        //     ."  :emp_no "
        //     ."  ,:birth_date "
        //     ."  ,:first_name "
        //     ."  ,:last_name "
        //     ."  ,:gender "
        //     ."  ,:hire_date "
        //     ."  ,:sup_no"
        //     ."  )";
    // $arr_prepare =
    //    array(
    //      ":emp_no" => 500001
    //      ,":birth_date" => "19990101" // 날짜는 보통 문자열로 많이 넣음-> 숫자로만 하면 헷갈린다
    //      ,":first_name" => "rara"
    //      ,":last_name" => "lololo"
    //      ,":gender" => "F"
    //      ,":hire_date" => "20230403"
    //      ,":sup_no" => null
    //  );
    // $obj_conn = null; // 변수는 항상 선언하고 사용해주는것이 좋다 (실수 방지 위해서!)
    // my_db_conn( $obj_conn );
    // $stmt = $obj_conn->prepare( $sql );
    // $stmt->execute( $arr_prepare );
    
    // $obj_conn->commit();
    // $obj_conn = null; // 썼으면 PDO 접속을 끊는다!

    // 3. 2에서 등록한 사원의 이름을 이름은 "길동", 성은 "홍"으로 변경하라
    // $sql =
        // " UPDATE employees "
        // ." SET "
        // ."  first_name = :first_name "
        // ."  ,last_name = :last_name "
        // ." WHERE "
        // ."  emp_no = :emp_no ";

    // $arr_prepare =
    //     array(
    //         ":first_name" => "길동"
    //         ,":last_name" => "홍"
    //         ,":emp_no" => 500001
    //     );

    // $obj_conn = null; // 변수는 항상 선언하고 사용해주는것이 좋다 (실수 방지 위해서!)
    // my_db_conn( $obj_conn );
    // $stmt = $obj_conn->prepare( $sql );
    // $stmt->execute( $arr_prepare );
    
    // $obj_conn->commit();
    // $obj_conn = null; // 썼으면 PDO 접속을 끊는다!
    
    
    // 4. 2에서 등록한 사원 정보를 삭제하라
    // $sql_delete =
    // " DELETE FROM employees "
        // ." WHERE "
        // ."  emp_no = :emp_no ";
        // $arr_prepare =
        //     array(
            //         ":emp_no" => 500001
            //     );
            
    // $obj_conn = null;
    // my_db_conn( $obj_conn );
    // $stmt = $obj_conn->prepare( $sql_delete );
    // $stmt->execute( $arr_prepare );
    // $obj_conn->commit();
    // $obj_conn = null;
    ?>