<?php
    // DB 연결
    $dbc = mysqli_connect( "localhost", "root", "root506", "employees", 3306 ); // (주소, 이름, 비번, 테이블이름, 포트번호)
    
    // var_dump($dbc);

    // 쿼리 요청
    // $result_query = mysqli_query( $dbc, "SELECT emp_no, first_name FROM employees LIMIT 5" ); // 쿼리문을 mysqli_query($DB변수, "쿼리문");

    // while ($temp_row = mysqli_fetch_row( $result_query )) // row는 key값을 디폴트로 가져온다
    // {
    //     var_dump($temp_row);
    // }
    $i1 = "F";
    $i2 = 10010;
    $i3 = 5;
    // Prepared Statement : 
    $stmt = $dbc->stmt_init(); // statement를 셋팅
    $stmt->prepare( " SELECT emp_no, first_name FROM employees WHERE gender = ? AND emp_no <= ? LIMIT ? " ); // DB에 질의 할 쿼리를 작성
    $stmt->bind_param( "sii", $i1, $i2, $i3 ); // Prepare 셋팅 (? 에 들어가는 값 셋팅. ?가 여러개 있으면 "sii" 이런식으로 덧붙여준다)
    $stmt->execute(); // DB에 쿼리 질의 실행

    // ----- 질의 결과를 지정한 변수에 담아 사용하는 방법 -----
    // $stmt->bind_result( $col1, $col2 ); // 질의 결과를 각 아규먼트에 저장하기 위한 셋팅 -> SELECT한 값 갯수 만큼 아규먼트 적어줘야한다
    // $stmt->fetch(); // bind_result에서 셋팅한 아규먼트에 값을 저장(한번 실행 될 때마다 한 레코드씩 저장)
    // var_dump( $col1, $col2 );

    // fetch를 루프로 돌려서 모든 질의 결과를 가져오는 방법
    // while( $stmt->fetch() )
    // {
    //     echo "$col1 $col2\n";
    // }

    // ----- 연상배열로 가져오는 방법 -----
    $result = $stmt->get_result(); // 질의 결과를 저장
    while( $row = $result->fetch_assoc() )
    {
        echo $row["emp_no"], " ", $row["first_name"], "\n";
    }

    // while ($temp_row = mysqli_fetch_assoc( $result_query )) // assoc는 key값을 연상배열로 가져온다
    // {
    //     var_dump($temp_row); // $변수[칼럼명]하면 칼럼명에 있는 값만 가져온다. $변수만 하면 키와 값까지 다 가져온다
    // }
    // $result_row = mysqli_fetch_row( $result_query );
    // var_dump($result_row);
    // $result_row = mysqli_fetch_row( $result_query );
    // var_dump($result_row);

    // var_dump($result_query);

    mysqli_close($dbc); // 파일 열 때처럼 연결하면 끊어줘야한다
?>