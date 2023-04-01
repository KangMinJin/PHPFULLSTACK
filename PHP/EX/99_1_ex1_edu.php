<?php
    // 콘솔에 출력
    // print "프린트\n\n";
    
    // echo "에코\n\n";
    
    // print_r(array(1,2,3));

    // var_dump(array(3,4,5));

    // // 변수 : 정보들을 저장하는 장소
    // $int_i = 1;
    // // $인트 = 2;// 절대 사용하면 안되는 변수명(영어, 숫자, '_' 만 사용할 것)

    // echo $int_i;

    // $sum = $int_i + 5;

    // 변수는 상수와 구분하기 위해서 소문자를 쓴다.
    // 스네이크 기법 : 뱀 처럼 단어와 단어 사이를 언더바로 이어주고 전부 소문자로 작성하는 기법. ex) $test_num, $arr_food - c, php, ruby 에서 주로 사용
    // 카멜 기법 : 영어만 사용하여 낙타의 등 처럼 단어와 단어 사이의 문자를 대문자로 작성하는 기법. ex) $testNum, $arrFood - Java 기반언어에서 주로 사용
    // 파스칼 기법 : 단어의 첫 글자와 단어와 단어 사이를 대문자로 작성하는 기법. ex) $TestNum, $ArrFood

    // 숫자 10을 변수 $i_ten 에 저장하고, 숫자 5, 8, 3을 앞과 같이 변수로 선언하고 연산하라.
    // 10 - 5 + 8 하고 3으로 나눈 나머지를 구하라.
    $i_ten = 10;
    $i_five = 5;
    $i_eight = 8;
    $i_three = 3;
    $result_i = ($i_ten - $i_five + $i_eight)%$i_three;

    $str_cal = "(".$i_ten." - ".$i_five." + ".$i_eight.")"." % ".$i_three." = ";
    
    // echo $str_cal.$result_i;

    // 증사 연산자, 감소 연산자
    $i_increase = 0;
    $i_decrease = 0;
    
    ++$i_increase; // 전위 증가 연산자
    $i_increase++; // 후위 증가 연산자
    --$i_decrease; // 전위 감소 연산자
    $i_decrease--; // 후위 감소 연산자
    // echo $i_increase;
    $i_increase = 0;

    // echo ++$i_increase; // 증가를 먼저 하고 출력, 처리하기 전에 증가
    // echo $i_increase++; // 출력을 먼저 하고 증가, 처리하고 난 후에 증가

    // echo $i_increase;

    // 대입 연산자
    $i = 0;
    $i = $i + 2;
    $i +=2; // 위의 것을 축약하여 적는 대입 연산자
    $i -=1;
    $i *=3;
    $i /= 4;
    $i = 6;
    $i %= 6;

    $str = "aa";
    $str = $str."bb";
    $str .= "bb"; // 문자열을 합치는 위의 축약형 대입 연산자
    // echo $str;

    // 비교 연산자
    // a < b : a가 b보다 작다, b가 a보다 크다 (미만, 초과)
    // a > b : a가 b보다 크다, b가 a보다 작다 (초과, 미만)

    // a <= b : a가 b보다 작거나 같다, b가 a보다 크거나 같다 (이하, 이상)
    // a >= b : a가 b보다 크거나 같다, b가 a보다 작거나 같다 (이상, 이하)

    // a == b : a와 b가 값이 같다 (값만 비교)
    // a === b : a와 b가 값과 데이터 형식까지 같다 (값과 타입까지 비교)

    // a != b : a와 b가 값이 다르다 (값만 비교)
    // a !== b : a와 b가 값과 데이터 형식이 다르다 (값과 타입까지 비교)

    $a = 1;
    $b = "1";

    // var_dump($a===$b); // 값은 같지만 타입이 다르기 때문에 false가 나온다
    // var_dump($a==$b); // 타입은 다르지만 값이 같기에 true가 나온다

    // var_dump($a!=$b); //  값만 비교하여 true인데 !가 붙어 false가 나온다
    // var_dump($a!==$b); // 값은 같지만 타입이 다르기 때문에 false 인데 !가 붙어 true가 된다

    // 컴퓨터에선 boolean을 false=0, true=1 로 읽어들이기 때문에 이런 느슨한 비교말고
    // var_dump(false==0); // true
    // var_dump(true==1); // true

    // // 데이터 형식까지 비교하는 완전한 비교를 쓴다. 데이터를 비교할 때에는 데이터 형식까지 비교해야 버그가 줄어든다!
    // var_dump(false===0); // false
    // var_dump(true===1); // false

    // 논리 연산자
    // $i = 1;
    // && (and 연산자) : &&로 연결된 모든 조건을 만족해야할 때 사용
    // var_dump( $i === 1 && $i <= 1 && $i > 0 );
    
    // || (or 연산자) : ||로 연결된 여러 조건 중 하나만 만족해도 될 때 사용. 모든 조건이 거짓일때 false
    // var_dump( $i === 2 || $i < 1 || $i < 0 );
    
    // ! (not 연산자) : 결과를 반전시킬 때 사용 true면 false, false면 true
    // var_dump( !($i === 1) );

    // 삼항 연산자 : 조건 ? 참일 경우 : 거짓일 경우
    // $i = 1;
    // $str = "";
    // $i < 0 ? $str = "000" : $str = "111";
    // echo $str;

    // 삼항 연산자를 이용해서 짝수 일때는 "짝수"를 출력 홀수 일때는 "홀수"를 출력하는 프로그램을 만들어라.
    // function even_odd($num)
    // {
    //     $result_num = "";
    //     $num % 2 === 0 ? $result_num = "짝수" : $result_num = "홀수";
    //     if ( $num === 0)
    //     {
    //         $result_num = "0입니다";
    //     }
    //     return $result_num;
    // }
    // echo even_odd(8);

    // if 문
    // $i = 8;
    // if( $i % 2 === 0 )
    // {
    //     echo "짝수";
    // }
    // else
    // {
    //     echo "홀수";
    // }

    // $i = 1;
    // if($i === "1" )
    // {
    //     echo "문자열 1입니다.";
    // }
    // else if( $i === 1 )
    // {
    //     echo "숫자 1입니다.";
    // }
    // else
    // {
    //     echo "1이 아닙니다.";
    // }
    
    // 과목의 종류는 국어, 영어, 수학, 과학
    // 평균 점수가 60점 이상이고, 각 과목별 점수가 40점 이상 일 때 "합격"을 출력
    // 그 외는 "불합격"을 출력하는 프로그램을 만드시오.
    // $sco_kr = 100;
    // $sco_en = 100;
    // $sco_math = 100;
    // $sco_sci = 10;
    // $sco_avg = ( $sco_kr + $sco_en + $sco_math + $sco_sci)/4;
    // $str_sco = "평균 ".$sco_avg."점 ";
    // if(
    //     $sco_avg >=60 || 
    //     (
    //         $sco_kr >= 40 && $sco_en >= 40
    //         && $sco_math >= 40 && $sco_sci >=40 // 평균 60점 이상이거나 전 과목 40점 이상일때 합격 으로 바꾸면 &&을 ||로 바꾸면 된다
    //     )
    // )
    // {
    //     // echo $str_sco."합격입니다.";
    // }
    // else
    // {
    //     // echo $str_sco."불합격입니다.";
    // }
    // array_values($arr_score)
    // function avg_score()
    // {
    //     $arr_score = func_get_args();
    //     $str_score = "평균 ".$avg_score."점 ";
    //     $avg_score = array_sum($arr_score)/count($arr_score);
    //     foreach ($arr_score as $score)
    //     {
    //         if( $score < 40 )
    //         {
    //             echo $str_score."불합격입니다.";
    //         }
    //     }
    // }
    // avg_score(20,50,60,100);

    // switch문
    // $str_loc 에 지역명을 저장하고, 서울일때는 "서울사람", 대구일때는 "대구사람",
    // 부산일때는 "부산사람", 그 외에는 "타지역 사람"을 출력하는 프로그램 작성하시오
    // $str_loc = "서울";
    // switch ($str_loc) {
    //     case "서울":
    //         echo "서울사람";
    //         break; // ***case마다 break 넣어주지 않으면 모두 다 실행이 된다
    //     case "대구":
    //         echo "대구사람";
    //         break;
    //     case "부산":
    //         echo "부산사람";
    //         break;
    //     default:
    //         echo "타지역사람";
    //         break;
    // }
    // function str_loc($loc)
    // {
    //     switch ($loc) {
    //         case "서울":
    //             echo "서울사람";
    //             break;
    //         case "대구":
    //             echo "대구사람";
    //             break;
    //         case "부산":
    //             echo "부산사람";
    //             break;
    //         default:
    //             echo "타지역사람";
    //             break;
    //     }
    //     // echo $loc."사는사람";
    // }
    // str_loc("대구");

    // 반복문 : while, do while, for, foreach

    $i = 1;
    // while : 조건을 먼저 체크하고 연산을 실행하는 루프
    // while( $i === 1 )
    // {
    //     echo $i;
    //     break; // 루프문 안에서 break를 쓰면 처리를 한 번만 하고 바로 루프를 빠져나온다
    // }

    // do-while : 연산을 무조건 한 번 실행하고 조건을 체크하는 루프
    // do
    // {
    //     echo $i;
    // }
    // while ( $i !== 1 );

    // for문 : 시작과 끝을 조건문으로 지정해주는 루프 (루프의 횟수를 지정 가능한 루프문)
    // for($i = 0; $i < 2; $i++)
    // {
    //     echo $i."\n";
    // }

    // 1 ~ 50 까지, 반복문을 이용해서 더하는 프로그램 작성하시오.
    // $num = 50;
    // $sum = 0;
    // for($i = 1; $i <= $num; $i++)
    // {
    //     $sum += $i;
    // }
    // echo $sum;

    // 위를 함수로 만들어라
    // function sum_num($num)
    // {   
    //     $sum = 0;
    //     for($i = 1; $i <= $num; $i++)
    //     {
    //         $sum += $i;
    //     }
    //     echo $sum;
    // }
    // sum_num(3);
    // $i = 1;
    // $result_sum = 0;
    // $num = 50;
    // while($i <= $num)
    // {
    //     $result_sum += $i;
    //     ++$i;
    // }
    // echo $result_sum;

    // 배열
    // $arr_i = array(1,2,3);
    // var_dump($arr_i);
    // echo $arr_i[1];
    // 연상 배열
    // 키값 : std_no, std_name, std_age, std_gender
    $arr_acc = array(
        "std_no" => 1
        ,"std_name" => "강민진"
        ,"std_age" => 30
        ,"std_gender" => "F" // ***key 값도 결국 문자열이니까 "key"잊지말자...!!
    );
    // echo $arr_acc["std_name"]; // 이름만 출력
    // print_r($arr_acc);

    // 다차원 배열
    // $arr_acc = array(
    //     "std_no" => 1
    //     ,"std_name" => "강민진"
    //     ,"std_age" => 30
    //     ,"std_gender" => "F"
    //     ,"std_secret_info"
    //         => array(
    //             "std_city_no" => 1212
    //             ,"std_addr" => "경북 칠곡군 왜관읍"
    //             ,"std_top_secret" => array( "std_top" => "??" )
    //         )
    // );
    // echo $arr_acc["std_age"];
    // echo $arr_acc["std_secret_info"]["std_addr"];
    // echo $arr_acc["std_secret_info"]["std_top_secret"]["std_top"];
    // print_r($arr_acc);

    // foreach문 : 배열을 루프해서 연산을 하고 싶을 때 사용
    // $arr_acc = array(
    //     "std_no" => 1
    //     ,"std_name" => "강민진"
    //     ,"std_age" => 30
    //     ,"std_gender" => "F"
    // );
    // foreach ( $arr_acc as $key => $val ) 
    // {
    //     echo $key." : ".$val."\n";
    // }
    // foreach를 써서 나이만 출력되게 프로그램 만드시오.
    $arr_acc = array(
        "std_no" => 1
        ,"std_name" => "강민진"
        ,"std_age" => 30
        ,"std_gender" => "F"
    );
    foreach ($arr_acc as $key => $val) {
        if($key === "std_age")
        {
            // echo $val;
        }
    }
    // foreach ($arr_acc as $key => $val) { // 현재 나이에 10을 빼서 배열에 넣어라
    //     if($key === "std_age")
    //     {
    //         $arr_acc[$key] -= 10; // 굳이 $val가져와서 다시 배열에 넣는것보단 걍 배열 값에서 빼서 넣으면 될 듯...
    //     }                         // 그리고 또 $key값을 가져왔으므로 굳이 $arr_acc["std_age"] 라고 줄 필요 없다...(매직넘버로 지정 nono)
    // }
    // print_r($arr_acc);

    // 위의 것들 함수로
    // function arr_std_age($arr)
    // {
    //     foreach ($arr as $key => $val) {
    //         if($key === "std_age")
    //         {
    //             echo $val;
    //         }
    //     }
    // }
    // function arr_std_age_plus($arr)
    // {
    //     foreach ($arr as $key => $val) {
    //         if($key === "std_age")
    //         {
    //             $arr[$key] -= 10;
    //             echo $plus_age;
    //         }
    //     }
    // }
    // arr_std_age_plus($arr_acc);

    // 함수를 사용하는 이유 : 재사용성 증가, 가독성 증가
    //--------------------------
    // 함수명   : clean_classroom
    // 기능     : 이름과 구역을 받아 청소 지정 문자열을 반환
    // 파라미터 : $param_name stirng
    //           $param_loc string
    // 리턴값   : $result_str string // ***함수를 만들면 이런식으로 설명을 적어주면 좋다.
    //--------------------------
    function clean_classroom( $param_name, $param_loc )
    {
        $result_str = $param_name."씨, ".$param_loc."을(를) 청소해주세요.\n";
        return $result_str;
    }

    // $result = clean_classroom("봉정", "책상");
    // echo $result;
    // clean_classroom("동호", "책상");
    // clean_classroom("미현", "책상");
    // clean_classroom("수지", "창문");
    // clean_classroom("성엽", "창문");
    // clean_classroom("진영", "창문");
    // clean_classroom("주영", "바닥");
    // clean_classroom("민진", "바닥");

    //--------------------------
    // 함수명   : my_sum_all
    // 기능     : 1부터 지정숫자까지의 합을 구해서 리턴
    // 파라미터 : $param_int int
    // 리턴값   : $result_int int
    //--------------------------

    function my_sum_all($param_int)
    {   
        $result_int = 0;
        for($i = 1; $i <= $param_int; $i++)
        {
            $result_int += $i;
        }
        return $result_int;
    }
    echo my_sum_all(5);
    
    // 위에서 while문으로 만들기

    // function my_sum_all($param_int)
    // {   
    //     $i = 1;
    //     $result_int = 0;
    //     while ($i <= $param_int)
    //     {
    //         $result_int += $i;
    //         ++$i; // **for문에선 조건문에 증감연산자 원래부터 있는데 while에는 이렇게 따로 써줘야한다
    //     }
    //     return $result_int;
    // }
    // echo my_sum_all(3)

?>