<?php
    // 파일명 : gugudan.txt
    // 파일 위치 : sam
    // 2단
    // 2 * 1 = 2
    // 이런식으로 9단까지
    // $f_gugudan = fopen("../EX/sam/gugudan.txt", "a");

    // for($i=2; $i < 10; $i++)
    // {
    // fputs($f_gugudan, $i."단\n");
    // for($j=1; $j < 10; $j++)
    // {
    //     fputs($f_gugudan, $i." * ".$j." = ".$i*$j."\n"); // fputs 반복해서 파일에 계속 집어넣는다
    // }
    // }
    
    // 배열로 만들어서 fputs 한번만.
    // for($i=2; $i < 10; $i++)
    // {
    //     $arr_gugu[] = $i."단"; // array_push() 보다 $arr[]= $i 이게 더 좋음. $arr[]은 배열 미리 선언 안 해도 사용 가능하다.
    // for($j=1; $j < 10; $j++)
    // {
    //     $arr_gugu[] = $i." * ".$j." = ".$i*$j;
    // }
    // }
    // $arr_gugu = implode("\n",$arr_gugu); // 배열을 문자열로 만들어준다.
    // fputs($f_gugudan,$arr_gugu) ;

    // string으로 만들어서 한번에. (배열을 굳이 안 만드니까 이게 효율이 더 좋을듯)
    // $gugu=""; // 선언을 안 했다고 warning 뜨니까 텅 빈 변수를 선언해준다
    // for($i=2; $i < 10; $i++)
    // {
    //     $gugu .=  $i."단\n"; // $a .= "1"은 $a = $a."1" 과 똑같다 (대입연산자) -> 변수에 계속 문자열을 추가 할 수있다!
    //     for($j=1; $j < 10; $j++)
    //     {
    //         $result .= $i." * ".$j." = ".$i*$j."\n";
    //         $print_gugu = $result;
    //     }
    // }
    // function gugudan($param_gugu) // 원하는 단만  파일에 넣는 함수
    // {
    //     $gugu=""; // 결과값이 문자열이 나올 예정이므로 null이 아닌 ""로 빈 변수를 선언한다 숫자는 숫자로 선언해준다
    //     $gugu .=  $param_gugu."단\n";
    //     for($j=1; $j < 10; $j++)
    //     {
    //         $gugu .= $param_gugu." * ".$j." = ".$param_gugu*$j."\n";
    //         $print_gugu = $gugu;
    //     }
    //     return $print_gugu;
    // }
    // fputs($f_gugudan, gugudan(8));
    // fclose($f_gugudan); // fclose 안 해주면 서버에서 계속 켜져있으므로

    // food.txt 에 원하는 문자열부터 문자 추가하기
    // 국밥과 크림우동 사이에 스테이크 껴넣기
    // 파일을 새로쓰기 해서 하나하나 다 써넣는 방법
    // $f_food = fopen("../EX/sam/food.txt", "w");
    // fputs($f_food,"김밥\n");
    // fputs($f_food,"샌드위치\n");
    // fputs($f_food,"백반\n");
    // fputs($f_food,"국밥\n");
    // fputs($f_food,"스테이크\n");
    // fputs($f_food,"크림우동\n");
    // fputs($f_food,"연어초밥\n");
    // fputs($f_food,"탕수육\n");
    // fputs($f_food,"돈까스");
    // fclose($f_food);

    // $f_food = fopen("../EX/sam/food.txt", "a+");
    // print fgets($f_food);
    // print fgets($f_food);
    // print fgets($f_food);
    // print fgets($f_food);
    
    // // fputs($f_food,"\n스테이크");
    // fclose($f_food);
    // 김밥
    // 샌드위치
    // 백반
    // 국밥
    // 크림우동
    // 연어초밥
    // 탕수육
    // 돈까스

    // food.txt 에 원하는 문자열부터 문자 추가하기
    // 국밥과 크림우동 사이에 스테이크 껴넣기
    // $f_food = file("../EX/sam/food2.txt");
    // $print_food = "";
    // foreach ($f_food as $val)
    // {
    //     if ($val === "국밥\n")
    //     {
    //         $print_food .=$val."스테이크\n";
    //     }
    //     else 
    //     {
    //         $print_food .= $val;
    //     }
    // }
    // $f_food = fopen("../EX/sam/food2.txt", "w");
    // fputs($f_food, $print_food);
    // fclose($f_food);


?>