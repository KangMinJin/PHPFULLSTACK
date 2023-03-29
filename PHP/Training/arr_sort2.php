<?php
    $arr = array(5, 10, 7, 3, 1);
    $cnt = count($arr);
    // for($i=0,$i < $cnt; $i++;)
    // {
    //     if($arr[$i] > $arr[$i+1])
    //     {
    //         echo $arr[$i+1].$arr[$i];
    //     }
    // }
    
    // $temp = $arr[0];
    // $arr[0] = $arr[1]; // $배열[번호] 는 레퍼런스 참조.
    // $arr[1] = $temp;
    // print_r($arr);

    // for ($i=0; $i < $cnt ; $i++) 
    // { 
    //     if ($arr[$i] > $arr [$i+1])
    //     {
    //         $temp = $arr[$i];
    //         $arr[$i] = $arr[$i+1];
    //         $arr[$i+1] = $temp;
    //     }
    // }

    // function arr($arr){
    //     $cnt = count($arr);
    //         for ($i=0; $i < $cnt-1 ; $i++) 
    //         {   $temp = 0;
    //             if($arr[$i] > $arr [$i+1])
    //             {
    //                 $temp = $arr[$i];
    //                 $arr[$i] = $arr[$i+1];
    //                 $arr[$i+1] = $temp;
    //             }
    //         }
    // print_r($arr); // 버블소트 1번만 된다...
    // }
    // arr($arr);
    // for ($j=0; $j < $cnt; $j++) { 
    //     for ($i=0; $i < $cnt; $i++) 
    //         {   
    //             if($arr[$i] > $arr [$i+1])
    //             {
    //                 $temp = $arr[$i];
    //                 $arr[$i] = $arr[$i+1];
    //                 $arr[$i+1] = $temp;
    //             }
    //         }
    // }

    for ($ii = 1; $ii < $cnt; $ii++)
    {
        for ($i = $cnt; $i > $ii; $i--) // 비교연산을 줄이기 위해 $i--.$i--하면 비교횟수가 5번-4번-3번-2번-1번 이렇게 줄어들면서 비교한다.($i++은 cnt를 따로 설정하고 cnt--해줘야한다)
        {
            if ($arr[$i-1] < $arr[$i-2]){
                $temp = $arr[$i-1];
                $arr[$i-1] = $arr[$i-2];
                $arr[$i-2] = $temp;
            }
        }
    }
    print_r($arr);

    // 배열안의 최대 값 최소 겂을 출력해주는 함수를 각각 구현하시오.
    $arr = array(10, 2, 5, 1);
    // 최대 값
    function my_max($arr)
    {   
        $cnt = count($arr); //$cnt라는 변수는 더 사용할 일이 없으므로 굳이 변수로 치환하지 말고 for문 조건 안에 count($arr)로 쓰는게 메모리 낭비 적음.
        $max=$arr[0];
        for($i=1;$i < $cnt;$i++) // $max값에 이미 $i=0 값을 넣었으니 시작점을 $i=0이 아닌 $i=1로 하는게 더 효율적.(자기 자신과 비교할 필요가 없으니)
        {               
            if($arr[$i] > $max)
            {
                $max = $arr[$i];
            }
        }
        return $max;
    }
    echo my_max($arr)."\n";

    // 최소 값
    function my_min($arr)
    {   
        $cnt = count($arr);
        $min=$arr[0];
        for($i=1;$i < $cnt;$i++)
        {
            if($arr[$i] < $min)
            {
                $min = $arr[$i];
            }
        }
        return $min;
    }
    echo my_min($arr)."\n";
    // foreach로 구현. (하지만 foreach보다 for문이 효율이 더 높음.)
    // 최대 값
    function my_max_fe($arr)
    {
        $max = $arr[0];
        foreach ($arr as $val)
        {
            if($val > $max) 
            {
                $max = $val;
            }
        }
        return $max;
    }
    echo my_max_fe($arr)."\n";
    // 최소 값
    function my_min_fe($arr)
    {
        $min = $arr[0];
        foreach ($arr as $val)
        {
            if($val < $min) 
            {
                $min = $val;
            }
        }
        return $min;
    }
    echo my_min_fe($arr)."\n";

?>