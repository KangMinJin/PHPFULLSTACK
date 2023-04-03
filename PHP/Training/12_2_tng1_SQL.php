<?php
    // 작성한 my_db_conn 함수를 이용해서 아래 데이터를 출력하라
    include_once("../EX/12_2_ex2_fnc_db_conn.php");
    
    $obj_conn = null;
    my_db_conn($obj_conn);
    
    // 1. 전체 월급의 평균
    $sql_sal_avg = 
        " SELECT "
        ." AVG(salary) "
        ." FROM "
        ." salaries";
        
        $stmt = $obj_conn->prepare( $sql_sal_avg );
        $stmt->execute();
        $result = $stmt->fetchAll();
        
        var_dump($result);
        

        // 2. 새로운 사원 정보를 employees 테이블에 등록하라
        // $sql_new_emp =
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
        //     ."  500001 "
        //     ."  ,19990101 "
        //     ."  ,'rara' "
    //     ."  ,'lololo' "
    //     ."  ,'F' "
    //     ."  ,20230403 "
    //     ."  ,NULL"
    //     ."  )";
    
    // $stmt = $obj_conn->prepare( $sql_new_emp );
    // $result_new_emp = $stmt->execute();
    
    // $obj_conn->commit();
    // 3. 2에서 등록한 사원의 이름을 이름은 "길동", 성은 "홍"으로 변경하라
    // $sql_update =
    // " UPDATE employees "
    // ."  SET "
    // ."  first_name = '길동' "
    // ."  ,last_name = '홍' "
    // ." WHERE "
    // ."  emp_no = 500001";

    // $stmt = $obj_conn->prepare( $sql_update );
    // $stmt->execute();
    
    // $obj_conn->commit();
    
    
    // 4. 2에서 등록한 사원 정보를 삭제하라
    // $sql_delete =
    // " DELETE "
    // ."  FROM employees "
    // ." WHERE "
    // ."  emp_no = 500001 ";

    // $stmt = $obj_conn->prepare( $sql_delete );
    // $stmt->execute();
    // $obj_conn->commit();
    $obj_conn = null;
    ?>