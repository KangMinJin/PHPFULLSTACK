<?php
    // 음식 종류 5개 이상을 배열로 만들어라.
    $food = array("돈까스","김밥","우동","라면"
                ,"떡볶이","짜장면","짬뽕");
                // 백엔드에서 문자열을 감싸는 따옴표는 쌍따옴표("")가 좋다.
    $lunch = rand(0, 6); // 밑에 바로 쓰는게 아니라 이런식으로 변수 지정해서 사용하기도 가능.
    // print "오늘의 점심은 ".$food[$lunch]."입니다.";
    // array 출력 할 때 $변수[rand(배열 시작, 배열 끝)]으로 적어주면 무작위로 값 출력 가능.

    // 키는 요리명, 값은 주재료 하나로 이루어진 배열을 만드시오. 배열 길이는 4
    $cook = array("우동" => "우동면","김치찌개" => "김치"
                    ,"김밥" => "밥","제육볶음" => "돼지고기");
                                                // 세미콜론 좀...빼먹지 말길...ㅜㅜ
    // echo $cook["김밥"];

    $ran_h = array("한식 : 찌개","한식 : 덮밥","한식 : 국수");
    $ran_j = array("중식 : 짜장면","중식 : 짬뽕","중식 : 마라탕");
    $ran_y = array("양식 : 파스타","양식 : 필라프","양식 : 스테이크");
    $han = $ran_h[rand(0,2)];
    $joog = $ran_j[rand(0,2)];
    $yang = $ran_y[rand(0,2)];
    $cook = array($han, $joog, $yang);
    $lunch = $cook[rand(0,2)];
    // echo "오늘의 점심은 ".$lunch."입니다";

    // 키:우동 원소를 삭제하시오.
    $cook_del = array(
                    "우동" => "우동면"
                    ,"김치찌개" => "김치"
                    ,"김밥" => "밥"
                    ,"제육볶음" => "돼지고기"
                );
    // unset($cook_del["우동"]);
    // var_dump($cook_del);

    // foreach문을 이용해서 키가 "삭제"인 요소를 제거하시오.
    // if문 사용, unset("삭제") 사용X. 키가 "삭제" 이외는 "키 : 값" 포맷으로 출력.
    // $cook_total = array(
    //     "된장찌개" => "파"
    //     ,"볶음밥" => "양파"
    //     ,"삭제" => "값값"
    //     ,"김치" => "마늘"
    //     ,"비빔밥" => "참기름"
    // );
    // foreach($cook_total as $key => $val)
    // {
    //     if($key != "삭제") // !=는 리소스 많이 사용하는듯?
    //     {
    //         echo $key." : ".$val."\n";
    //     }
    //     else
    //     {
    //         unset($cook_total[$key]);
    //     }
    // }
    // var_dump($cook_total);

    // 앞에거 반대로. != 보다 이게(===) 더 효율이 좋은듯?
    $cook_total = array(
        "된장찌개" => "파"
        ,"볶음밥" => "양파"
        ,"삭제" => "값값"
        ,"김치" => "마늘"
        ,"비빔밥" => "참기름"
    );
    foreach($cook_total as $key => $val)
    {
        if($key === "삭제")
        {
            unset($cook_total[$key]);
        }
        else
        {
            echo $key." : ".$val."\n";
        }
    }
    var_dump($cook_total);
?>