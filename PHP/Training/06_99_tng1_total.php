<?php
    // 1. 배열의 길이를 반환하는 my_len()함수를 만드시오. count()사용 X

    $arr_base = array(1,2,3,4,5);

    // function my_len(&$arr_len) //call by reference &이거 쓰는게 리소스적으로 좋다고 한다...나중엔 이유를 알겠지
    // {   $result = 0;
    //     foreach($arr_len as $val)
    //     {
    //         $result += 1;
    //     }
    //     return $result;

    // }

function my_len(&$arr)
{   $result = 0;
    foreach ($arr as $val) {
        $result++; // +=1 이 아닌 이렇게도 쓸 수있다.(증감연산자)
    }
    return $result;
}

    // echo my_len($arr_base);

    // 별찍기를 함수로 만들어라...
    function star($star)
    {   
        for ($i=0; $i < $star; $i++) 
        { 
            echo "*";
        }
        echo"\n";
    }
    // star(1);
    // star(2);
    // star(3);
    // star(4);
    // star(5);// 함수 안에 echo 들어가있으니 echo를 앞에 붙일 필요가 없다.
    function star_rect($star)
    {   
        for($i=0; $i < $star; $i++)
        {
            star($star);
        }
    }

    function star_tri($star)
    {
        for($i=1; $i <= $star; $i++)
        {
            star($i); //star()안에 $star_tri가 받는 변수인 $star뿐만 아니라 for문의 매개변수(parameter)인 $i도 넣을 수 있다.
        }
    }

    function star_tri_rev($star)
    {
        for($i=$star; $i > 0 ; $i--)
        {
            star($i);
        }
    }

    star_tri(5);
    star_tri_rev(5);
?>