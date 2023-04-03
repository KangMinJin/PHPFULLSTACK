<?php
    // 아래 쿼리로 결과를 출력하는 프로그램을 만드시오.

    // SELECT emp_no, salary FROM salarise WHERE to_date = ? AND salary >= ? ORDER BY salary DESC LIMIT ?
    // prepare 셋팅값 - to_date : 9999-01-01, salary : 50000, LIMIT : 5
    $sql = 
    "
            SELECT
            emp_no
            ,salary
            FROM
            salaries
            WHERE
            to_date = ?
            AND salary >= ?
            ORDER BY
            salary DESC
            LIMIT ?
            ";
            
    $date = 99990101;
    $sal = 50000;
    $lim = 5;
    
    $dbc = mysqli_connect( "localhost", "root", "root506", "employees", 3306 ); // DB 연결

    $stmt = $dbc->stmt_init(); // mysqli_stmt_prepare 를 사용하기 위한 객체를 초기화 하고 리턴해준다
    $stmt->prepare( $sql );
    $stmt->bind_param( "iii", $date, $sal, $lim ); // prepare statement의 값을 셋팅
    $stmt->execute(); // 쿼리를 실행

    $result = $stmt->get_result(); // DB의 쿼리 결과를 저장
    while( $row = $result->fetch_assoc() )
    {
        // print_r($row);
        echo "emp no : ".$row["emp_no"]." salary : ".$row["salary"]."\n";
    }
    // mysqli_close( $dbc );
    $dbc->close(); // 이 방법으로도 DB close 가능
?>