<?php
    //"I am always Hello." 라는 문장의 Hello를 Happy로 바꾸어서 출력하는 프로그램을 만드시오.
    
    // $iam = "I am always Hello.";
    // $iam = mb_substr($iam,0,12); // 이건...쓸모가 없다 실용성 0
    // printf($iam."%s","Happy.");

    $iam_3 = "I am always Hello."; // 위에거 개선판.
    $iam_3 = mb_substr($iam_3,0,strpos($iam_3,"Hello"));
    // printf($iam_3."%s","Happy."); //하지만 이것도 Hello부터 문장을 다 버리는거라서 실용성이란게...없을듯

    // 한 줄로 더 쉽게
    $iam_1 = "I am always Hello.";
    echo str_replace("Hello","Happy",$iam_1);

    $iam_2 = "I am always Hello.";
    $iam_2 = explode("Hello",$iam_2);
    // var_dump($iam_2);
    $iam_2 = implode("Happy",$iam_2);
    // echo $iam_2; // 이게 맞는듯...
    
    // 위의것을 함수로
    // 리턴값 : string $result_str
    $str_func = "Hello...I'm soHellotired...Hello";
    // function my_str_replace($str)
    // {
    //     $str_expl = explode("Hello", $str);
    //     $result_str = implode("Happy", $str_expl);
    //     return $result_str;
    // }
    // echo my_str_replace($str_func);

    // 위에 있는거 재사용성 개선 (이렇게하면 문장 내의 바꾸고 싶은 값 아무렇게나 지정 가능)
    function my_str_replace($str,$expl_1,$impl_1)
    {   
        $str_expl = explode($expl_1, $str);
        return implode($impl_1, $str_expl);
    }
    // echo my_str_replace($str_func,"so","Happy")
?>