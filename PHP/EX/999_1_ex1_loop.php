<?php

    /**************************
    파일명 : 
    시스템명 :
    이력
        v001 : new - 1(사번)
        v002 : fnc_print_str 수정 - 1(사번)
    ***************************/
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

    function make_star_tri( $num )
    {
        for ($i=0; $i < $num ; $i++) { 
            
            for ($j=0; $j <= $i ; $j++) { 
                echo "*";
            }
            echo "\n";
        }
    }
    // make_star_tri(5);

    //--------------------
    // 함수명   : fnc_print_str
    // 기능     : 사용자가 원하는 문자로 원하는 횟수만큼 출력하는 함수
    // 파라미터 : INT $param_num (사용자가 원하는 횟수)
    //           STR $param_str (사용자가 원하는 문자)
    //--------------------

    // function fnc_print_tri( $param_num ) // v002 del
    function fnc_print_str( $param_num, $param_str = "%") // v002 add
    {                                               // 파라미터가 안 넘어왔을 때 셋팅해주는 값. 첫번째값은 무조건 받아야함..(순서 달라지면 에러터짐)
        for ($i=0; $i < $param_num ; $i++) { 
            // echo "*"; // v002 del
            echo $param_str; // v002 add
        }
        echo "\n";
    }

    // fnc_print_str(6, "*");

    // star_line(1);
    // star_line(2);
    // star_line(3);
    // star_line(4);
    // star_line(5);
//     function make_tri( $param_str, $param_num )
//     {
//         for ($i=0; $i < $param_num; $i++) { 
//             echo $param_str;
//         }
//         echo "\n";
//     }
//     make_tri("ㄱ", 5);

    // reference 참조
    function fnc_reference2 ( &$param_str )
    {
        echo "2번 : ".$param_str."\n";
        $param_str = "fnc_reference2에서 값 변경";
        echo "3번 : ".$param_str."\n";
    }
    $str = "aaa";
    // echo "1번 : ".$str."\n";
    // fnc_reference2( $str );
    // echo "4번 : ".$str."\n";


    // function fnc_str_modify( &$param_str, $param_modify )
    // {
    //     $param_str = $param_modify;
    //     return $param_str;
    // }
    // $str = "안녕하세요\n";
    // echo $str;
    // $str_m = "졸려요";
    // fnc_str_modify( $str, $str_m );
    // echo $str;

    // 출력 예상
    // 1번 : aaa
    // 2번 : aaa
    // 3번 : fnc_reference2에서 값 변경
    // 4번 : fnc_reference2에서 값 변경

    // ------------- Class -------------
    class Food
    {
        // 접근 제어 지시자
        // public    : 어디서든(class 밖에서도) 접근 가능 
        // private   : 해당 class 내에서만 접근 가능
        // protected : 해당 class와 상속 class 내에서만 접근 가능

        // 멤버 변수
        protected $str_name; // 멤버변수는 보통 private
        protected $int_price;

        // 메소드
        public function __construct( $param_name, $param_price ) // 생성자 - 초기값 셋팅할때 사용?
        {
            $this->str_name = $param_name; // $this 포인터는 이 클래스 내의 요소를 선택할 수 있게 한다!
            $this->int_price = $param_price;
        }

        public function fnc_print_food() // getter
        {
            $str = $this->str_name." : ".$this->int_price."원\n";
            echo $str;
        }

        public function fnc_set_price( $param_price ) // setter
        {
            $this->int_price = $param_price;
        }
    }

    // $obj_food = new Food( "탕수육", 10000 );
    // $obj_food->fnc_print_food(); // getter 이용해서 출력
    // Food Class의 멤버변수 $int_price의 값을 12000으로 바꾸어주세요
    // $obj_food->fnc_set_price( 12000 ); // 값을 12000원으로 셋팅
    // $obj_food->fnc_print_food();

    // 상속 : 부모 클래스의 객체들을 자식 클래스가 상속받아 사용할 수 있다.
    class KoreanFood extends Food // Food Class를 상속받은 KoreanFood Class
    {
        protected $side_dish;

        public function __construct( $param_name, $param_price, $param_side_dish )
        {
            $this->str_name = $param_name;
            $this->int_price = $param_price;
            $this->side_dish = $param_side_dish;
        }

        // 오버라이딩 : 부모 클래스에서 정의된 메소드를 자식 클래스에서 재정의
        public function fnc_print_food()
        {
            // $str = $this->str_name." : ".$this->int_price."원\n반찬 : ".$this->side_dish."\n";
            parent::fnc_print_food(); // 위처럼 모두 다 쓰지 말고 parent::함수();를 해서 실행하고
            $str = "반찬 : ".$this->side_dish."\n"; // 그 뒤에 붙을 문장 출력
            echo $str;
        }
    }
    // $obj_korean_food = new KoreanFood( "치킨", 20000, "치킨무" );
    // $obj_korean_food->fnc_print_food(); // 부모 클래스의 메소드를 갖다쓸 수 있다 - 이것이 상속

    class People
    {
        protected $name;

        public function set_name( $param_name )
        {
            $this->name = $param_name;
        }
        public function people_print()
        {
            echo "이름 : ".$this->name."\n";
        }
    }
    // $obj_pp = new People;
    // $obj_pp->set_name("냠냐미");
    // $obj_pp->people_print();

    class Student extends People
    {
        private $id;

        // public function __construct( $param_name, $param_id )
        // {
        //     $this->name = $param_name;
        //     $this->id = $param_id;
        // }
        public function set_id( $param_id )
        {
            $this->id = $param_id;
        }
        public function student_print()
        {
            // $str = "학생 ID : ".$this->id." 이름 : ".$this->name;
            echo "학생 ID : ".$this->id."  ";
            parent::people_print();
        }
    }

    $obj_st = new Student;
    $obj_st->set_name("냠냠쓰");
    $obj_st->set_id(123456);
    $obj_st->student_print();
?>