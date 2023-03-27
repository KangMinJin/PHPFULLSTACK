<?php
    // 배열은 한 곳에 값을 여러개를 저장하기 위해서 쓴다. -> 파이썬에선 리스트
    $week = array("Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat");
    // print $week[0];

    // $sun = "Sun";
    // $mon = "Mon";
    // $tue = "Tue";
    // $wed = "Wed";
    $week2 = array($week[1], $week[3], $week[0], $week[2]);
    // 배열 안에 변수를 넣을 수 있다. 이런식으로 다른 배열의 값을 가져올 수 있다.
    // echo $week2[3];
    // print_r($week2);
    // 배열을 모두 출력 하려면 print_r($배열);
    // $arr_mult_type = array("aaa", 1, 3.14, "a");
    // 멀티타입 배열.
    // var_dump($arr_mult_type);
    // var_dump를 쓰면 배열안의 모든 내용과 모든 속성을 보여준다.
    
    // ***연상 배열*** 현업에선 이걸 주로 쓴다.
    $arr_asso = array("key1" => "val1"
                    ,"key2" => "val2"
                    ,"key3" => "val3"
                    ,"key4" => "val4");
    // echo $arr_asso["key2"];
    // key를 "문자열"로 적어줬으면 똑같이 "문자열"로 적어준다.
    // var_dump($arr_asso);

    // 다차원 배열
    $arr_temp = array(
                    array(1,2,3,4)
                    ,array(5,6,7,8)
                );
    // 2차원 배열
    // echo $arr_temp[1][3];
    $arr_temp = array(
                    array(1,2,3,4)
                    ,array(5,6,7,8)
                    ,array(
                        array(9,10,11)
                    )
                );
    // echo $arr_temp[2][0][1];
    // 3번째 배열의 첫째 줄 두번째.
    $arr_temp_1 = $arr_temp[0];
    // 첫번째 배열을 모두 가져온다.
    // var_dump($arr_temp_1);
    // 첫번째 배열 모두 확인.
    $arr_temp_2 = $arr_temp[1];
    // var_dump($arr_temp_2);
    $arr_temp_3 = $arr_temp[2][0];
    // 세번째 배열안의 첫번째 배열을 모두 가져온다.
    // var_dump($arr_temp_3[1]);
    // 세번째 배열의 두번째를 가져온다.
    $arr_temp_3 = $arr_temp[2];
    // 세번째 배열을 모두 가져온다.
    // var_dump($arr_temp_3);
    $arr_temp_3_c = array(
                        array(9,10,11)
                    );
    
    // 배열의 원소 삭제 : unset($배열[삭제하고 싶은 원소의 key])
    $arr_week = array("Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat");
    unset($arr_week[1]);
    print_r($arr_week);
    // unset으로 삭제하면 그 원소의 key도 같이 사라진다.
    // 삭제된 값의 key는 재정렬되지 않는다. [1] Mon을 삭제했다고 해서
    // Tue의 키값이 1이 되진 않는다. Tue에 주어진 키[2]그대로.
    
?>