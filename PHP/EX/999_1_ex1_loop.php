<?php
    // 1. while + if 조합
    // $i = 0;
    // while( $i <= 4 )
    // {
    //     if( $i === 1 )
    //     {
    //         echo "1입니다.";
    //     }
    //     else if( $i === 4 )
    //     {
    //         echo "4입니다.";
    //     }
    //     ++$i;
    // }

    // foreach + if 조합
    // $arr_asso = array( "a" => 1, "b" => 2, "c" => 3 );
    // var_dump($arr_asso);
    // foreach ($arr_asso as $key => $val)
    // {
    //     if ( $key === "c" || $val === 2 )
    //     {
    //         echo "if";
    //     }
    // }

    // 이중 루프
    // $gugu = "";
    // for ($dan=2; $dan <= 9 ; $dan++)
    // {
    //     $gugu .=$dan." 단\n";
    //     for ($num=1; $num <= 9 ; $num++) { 
    //         $gugu.= $dan." x ".$num." = ".$dan*$num."\n";
    //     }
    // }

    // $gugu = "";
    // $dan = 2;
    // while ($dan <= 9)
    // {
    //     $gugu .= $dan." 단\n";
    //     $num = 1;
    //     while ($num <= 9)
    //     {
    //         $gugu .= $dan." x ".$num." = ".$dan*$num."\n";
    //         ++$num;
    //     }
    //     ++$dan;
    // }
    // echo $gugu;

    // 1 ~ 100 숫자 중에 짝수의 합을 구하라

    // while 로 만들기
    // $a = 1;
    // $even_sum = 0;
    // while ($a <= 100)
    // {
    //     if( $a%2 === 0 )
    //     {
    //         $even_sum += $a;
    //     }
    //     ++$a;
    // }

    // for로 만들기
    // $even_sum = 0;
    // for ($i = 1; $i <= 100 ; $i++)
    // { 
    //     if ( $i%2 === 0)
    //     {
    //         $even_sum += $i;
    //     }
    // }

    // for문으로 if문 안 쓰고 만들기
    // $even_sum = 0;
    // for ($i = 2; $i <= 100 ; $i += 2) // $i + 2 는 작동 안 함 $i += 2 라고 써줘야 2가 더해진다
    // { 
    //     $even_sum += $i;
    // }

    // $sum = 0;
    // for ($i=1; $i * 2 <= 100 ; $i++) { 
    //     $sum += $i *2;
    // }
    // echo "1 ~ 100 까지의 짝수의 합은 ".$even_sum."입니다.";

    // $arr_test = 
    // array(
    //     "a" => 1
    //     ,"b" => 2
    //     ,"info" =>
    //         array(
    //             "info_a" => 3
    //             ,"info_b" => 4
    //             ,"info_c" =>
    //                 array(
    //                     "f_1" => 5
    //                     ,"f_2" => 7
    //                 )
    //         )
    // );
    
    // 위 배열에서 값 3, 7을 뽑아내라
    // echo $arr_test["info"]["info_a"]." ".$arr_test["info"]["info_c"]["f_2"];
    
    // $arr_test = 
    // array(
    //     1
    //     ,2
    //     ,array(
    //             3
    //             ,4
    //             ,array(
    //                     5
    //                     ,7
    //                 )
    //         )
    // );
    // echo $arr_test[2][2][0]; // 위 배열에서 5뽑아내기

    // 함수명   : fnc_sum
    // 기능     : 파라미터를 더한 값을 리턴
    // 파라미터 : INT $param_a
    //           INT $param_b
    // 리턴값   : INT $sum; 

    // function fnc_sum( $param_a, $param_b )
    // {
    //     $sum = $param_a + $param_b;
    //     return $sum;
    // }
    // echo fnc_sum( 3, 4 );

    // 가변 파라미터로 만들기
    function fnc_sum2( ...$param_numbers )
    {
        // $sum = 0;
        // foreach ( $param_numbers as $val )
        // {
        //     $sum += $val;
        // };
        return array_sum( $param_numbers ); // 위의 연산을 함수 하나로 합치면 이렇게 된다
    }
    // echo fnc_sum2(3,4,7,10);

    // 전역변수
    function fnc_global()
    {
        global $global_i;
        $global_i = 0;
    }
    
    // $global_i = 5;
    // fnc_global();
    
    // echo $global_i;

    // 정적변수
    // function fnc_static()
    // {
    //     static $static_i = 0;
    //     echo $static_i."\n";
    //     $static_i++;
    // }
    // fnc_static();
    // fnc_static();
    // fnc_static(); // 메모리상에 static은 안 사라지고 계속 남아있다. 함수를 다시 사용해도 초기화 되지 않는다

    // call by reference
    function fnc_reference( &$param_str ) // &$파라미터 라고 써놓으면 $변수의 주소를 그대로 쓴다는 의미
    {
        $param_str = "fnc_reference"; // 메모리를 같이 쓰므로 이 데이터가 그대로 들어간다
    }
    $str = "aaa";
    fnc_reference( $str );
    // echo $str;

    // 구구단 만드는 함수
    // function gugudan( $dan )
    // {
    //     $gugu = "";
    //     $gugu .= $dan."단\n";
    //     for ($num = 1; $num <= 9 ; $num++) { 
    //         $gugu .= $dan." x ".$num." = ".$dan*$num."\n";
    //     }
    //     return $gugu;
    // }
    // echo gugudan(2);

    function make_tri( $num )
    {
        for ($i=0; $i < $num ; $i++) { 
            
            for ($j=0; $j <= $i ; $j++) { 
                echo "*";
            }
            echo "\n";
        }
    }
    // make_tri(5);

    function star_line( $num )
    {
        for ($i=0; $i < $num ; $i++) { 
            echo "*";
        }
        echo "\n";
    }

    star_line(1);
    star_line(2);
    star_line(3);
    star_line(4);
    star_line(5);
?>