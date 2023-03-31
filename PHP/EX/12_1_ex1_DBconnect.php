<?php
    // DB 연결
    $dbc = mysqli_connect( "localhost", "root", "root506", "employees", 3306 ); // (주소, 이름, 비번, 테이블이름, 포트번호)
    
    // var_dump($dbc);

    // 쿼리 요청
    $result_query = mysqli_query( $dbc, "SELECT emp_no, first_name FROM employees LIMIT 5;"); // 쿼리문을 mysqli_query($DB변수, "쿼리문;"); <- 쿼리문에 ; 세미콜론 잊으면 안된다!

    // while ($temp_row = mysqli_fetch_row( $result_query )) // row는 key값을 디폴트로 가져온다
    // {
    //     var_dump($temp_row);
    // }
    while ($temp_row = mysqli_fetch_assoc( $result_query )) // assoc는 key값을 연상배열로 가져온다
    {
        var_dump($temp_row); // $변수[칼럼명]하면 칼럼명에 있는 값만 가져온다. $변수만 하면 키와 값까지 다 가져온다
    }
    // $result_row = mysqli_fetch_row( $result_query );
    // var_dump($result_row);
    // $result_row = mysqli_fetch_row( $result_query );
    // var_dump($result_row);

    // var_dump($result_query);

    mysqli_close($dbc); // 파일 열 때처럼 연결하면 끊어줘야한다
?>