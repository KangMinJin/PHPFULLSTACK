<?php
    // 전역 변수 global
    function fnc_add()
    {
        global $global_int_a; // 함수 밖에서 참조하려는 변수(전역변수)를 함수 안에서 선언한다
        $global_int_a = $global_int_a + 10;
        
        return $global_int_a;
    }

    $global_int_a = 10; // 전역변수 값 초기화

    // echo fnc_add();

    // 정적 변수 static
    function fnc_add_1()
        {
            static $i = 1; // static 선언하면 메모리에 값을 계속 보존. 처음 선언했던 값에 증감...도 보존
            // echo $i."\n";
            $i++;
        }
        for ($i=0; $i < 3; $i++) // function안의 $i와 for 안의 $i는 같지 않다! 저장되는 메모리가 다르다!!!
        { 
            fnc_add_1();
        }

    // call by value
    // function fnc_val( $int_a, $int_b )
    // {
    //     $int_a = 3;
    //     $int_b = 4;
    //     echo "function => ", $int_a, " ", $int_b, "\n";
    // }
    // $int_a = 1;
    // $int_b = 2;
    // fnc_val( 5, 6 );

    // echo $int_a, " ", $int_b;

    // call by reference
    function fnc_val( &$a, &$b ) // &를 붙이면 들어오는 값의 메모리 주소를 참조하겠다는 의미
    {
        $a = 3;
        $b = 4;
    }
    $int_a = 1;
    $int_b = 2;
    fnc_val($int_a, $int_b); //함수 내의 $a, $b 앞에 &가 붙어서 함수 내의 $a, $b가 $int_a, $int_b가 저장된 메모리의 주소를 참조(공유?)하게 된다.

    echo $int_a, " ", $int_b;
?>