<?php
    // 두 매개변수의 차를 구하는 함수를 구현해 주세요.
    function fnc_minus ($int_a, $int_b)
    {
        // $result = $int_a - $int_b;
        // return $result;

        return $int_a - $int_b;
        // 이런식으로 한 줄로 줄일 수 도 있다.
    }

    // 두 매개변수를 나누는 함수를 구현해 주세요.
    function fnc_div ($int_a, $int_b)
    {
        $result = $int_a / $int_b;

        return $result;
    }

    // 곱하기
    function fnc_multi ($int_a, $int_b)
    {
        $result = $int_a * $int_b;

        return $result;
    }

    // 각각의 결과 출력
    // echo fnc_minus(4,5),"\n";
    // echo fnc_div(4,5),"\n";
    // echo fnc_multi(4,5),"\n";

    // 빼기, 곱하기, 나누기 순으로 가변파라미터함수로 구현하라
    // function fnc_args_minus()
    // {
    //     $args = func_get_args();
    //     foreach ($args as $key => $val) {
    //         if($key===0){
    //             $minus = $val;
    //         }
    //         else {
    //             $minus -= $val;
    //         }
    //     }
    //     return $minus;
    // }

    function fnc_args_multi()
    {
        $args = func_get_args();
        foreach ($args as $key => $val) {
            if($key===0){
                $multi = $val;
            }
            else {
                $multi *= $val;
            }
        }
        return $multi;
    }
    function fnc_args_div()
    {
        $args = func_get_args();
        foreach ($args as $key => $val) {
            if($key===0){
                $div = $val;
            }
            else {
                $div /= $val;
            }
        }
        return $div;
    }
    // $val 값은 입력하는것에 따라 중복될 수도 있으므로
    // $val 값으로 if문 쓰지 말고 고유한 $key값으로 쓰는게 좋다.

    // if문 안 쓰고 다른 방법으로.
    // function fnc_args_minus()
    // {
    //     $args = func_get_args();
    //     $minus = $args[0]*2;
    //     foreach ($args as $val) {
    //         $minus -= $val;
    //     }
    //     return $minus;
    // }

    // function fnc_args_multi()
    // {
    //     $args = func_get_args();
    //     $multi = $args[0]/$args[0];
    //     foreach ($args as $val) {
    //         $multi *= $val;
    //     }
    //     return $multi;
    // }

    // function fnc_args_div()
    // {
    //     $args = func_get_args();
    //     $div = $args[0]*$args[0];
    //     foreach ($args as $val) {
    //         $div /= $val;
    //     }
    //     return $div;
    // }
    
    // null값 이용해서 만들기.
    function fnc_args_minus()
    {
        $args = func_get_args();
        $minus = null;
        foreach ($args as $val) {
            if(is_null($minus)){
                $minus = $val;
            }
            else {
                $minus -= $val;
            }
        }
        return $minus;
    }
    
    echo fnc_args_minus(10, 2 ,5),"\n";
    echo fnc_args_multi(10, 2, 5),"\n";
    echo fnc_args_div(10, 2, 5),"\n";

?>