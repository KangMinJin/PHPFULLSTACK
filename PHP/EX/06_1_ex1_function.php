<?php
    // 변수 a와 b를 더한 후 출력
    // $a = 2;
    // $b = 5;

    // $sum = $a + $b;

    // echo $sum;

    // function
    function fnc_add( $int_a, $int_b )
    {
        $sum = $int_a + $int_b;

        return $sum;
    }

    // fnc_add 함수 호출.
    $result_add = fnc_add(10, 9);
    // echo $result_add;

    // 가변 파라미터 함수 : 입력하는 값을 여러개 넣을 수 있다.
    function fnc_args_add()
    {   
        $args = func_get_args(); // 가변 파리미터 습득
        $sum = 0; // 더하기 결과 저장하는 변수

        // 더하기 실행하는 루프
        foreach ($args as $val) {
            $sum += $val;
        }
        return $sum;
    }

    // echo fnc_args_add(1, 2, 3, 4);

    // 재귀함수 recursive call
    // 팩토리얼 함수
    function rcc( $param_a )
    {
        if ($param_a === 1)
        {
            return 1;
        }
        return $param_a * rcc( $param_a - 1 );
    }

    echo rcc(4);
    //  4*(3*(2*1)) = 24
?>