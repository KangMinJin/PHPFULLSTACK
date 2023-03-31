<?php
    // 사번이 10005 이하인 사원의 사번, 이름 (성, 이름), 성별, 생일 출력하라.
    $dbc = mysqli_connect("localhost", "root", "root506", "employees", 3306);
    $sql = 
            "
            SELECT
                emp_no
                ,CONCAT(last_name,' ', first_name) fullname
                ,gender
                ,birth_date
            FROM
                employees
            WHERE
                emp_no <= 10005;
            "; // 이렇게 쓰면 밑에 간단하게 쓸 수 있다 + 위처럼 쿼리문의 가독성이 좋다
    $result_query = mysqli_query($dbc, $sql);
    // while($temp_row = mysqli_fetch_assoc($result_query))
    // {
    //     var_dump($temp_row);
    // }
    $result_temp = "";
    // while($temp_row = mysqli_fetch_assoc($result_query))
    // {
    //     $result_temp .= implode(" ",$temp_row)."\n";
    //     $result_temp .="\n";
    // }

    // 에러를 먼저 체크하는 방법
    // if(mysqli_num_rows($result_query) === 0) // mysqli_num_row($배열) DB에서 가져온 데이터의 행의 수를 세주는 힘수
    // {
    //     echo "출력할 데이터가 존재하지 않습니다.";
    // }
    // else 
    // {
    //     while($temp_row = mysqli_fetch_assoc($result_query))
    // {
    //     $result_temp .= implode(" ",$temp_row)."\n";
    //     $result_temp .="\n";
    // }
    // }

    // 플래그를 사용하여 에러를 나중에 체크하는 방법
    $flg_cnt = false;
    while($temp_row = mysqli_fetch_assoc($result_query))
    {
        $result_temp .= implode(" ",$temp_row)."\n";
        $result_temp .="\n";
        $flg_cnt = true;
    }
    if(!$flg_cnt)
    {
        echo "데이터가 0건 입니다.";
    }
    // while($temp_row = mysqli_fetch_assoc($result_query))
    // {   
    //     foreach ($temp_row as $key => $val)
    //     {
            
    //         $result_temp .= $key." : ".$val."\n";
    //     }
    //     $result_temp .="\n";
    // }
    echo $result_temp;
    mysqli_close($dbc);
?>