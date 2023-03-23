<?php
    // 1. while문
    // while( 조건 )
    // {
    //     반복하고 싶은 처리
    // }
    // $i = 0;
    // while( $i < 10 )
    // {
    //     echo $i++."\n";
    // }
    // $dan = 2;
    // $gugu = 1;
    // echo "구구단을 외워 봅시다 ".$dan."단!\n";
    // while($gugu < 10 )
    // {
    //     $result = $dan." * ".$gugu." = ".$dan * $gugu."\n";
    //     echo $result;
    //     $gugu++;
    // }

    // $dan = 2;
    // $gugu = 1;
    // echo "구구단을 외워 봅시다 ".$dan."단!\n";
    // while( $dan < 10 )
    // {
    //     while( $gugu < 10 )
    // {
    //     $result = $dan." * ".$gugu." = ".$dan * $gugu."\n";
    //     echo $result;
    //     $gugu++;
    // }
    // }

    // $dan = 2;
    // $gugu = 1;
    // $max_dan = 19;
    // while($dan <= $max_dan)
    // {
    //     echo "\n구구단을 외워 봅시다 ",$dan,"단!\n";
    //     $gugu = 1;
    //     while($gugu <= $max_dan)
    //     {
    //         $result = $dan." * ".$gugu." = ".$dan * $gugu."\n";
    //         echo $result;
    //         ++$gugu;
    //     }
    //     ++$dan;
        
    // }


    // 2. do while문
    // do{
    //     반복 할 처리
    // }
    // while(조건);
    
    // $i = 0;
    // do{
    //     echo $i, " do while";
    // }
    // while ($i === 1);
    // while문과의 차이는 처리 먼저 한 후 조건을 본다.
    // while ($i === 1)
    // {
    //     echo $i, " while";
    // }

    // 3. for문
    // for (시작할 위치; 조건1 ; $i++) { 
    //     # code...
    // }
    // for ($i=2; $i <= 9 ; $i++) { 
    //     echo $i, "단\n";
    // }

    for ($dan=2; $dan <=9; $dan++)
    { 
        echo "\n구구단을 외워 봅시다 ",$dan,"단!\n";
        for($num=1; $num <=9; $num++)
        {
            $result = $dan." * ". $num." = ".$dan * $num."\n";
            echo $result;
        }
    }
    // for문은 시작값(시작값 자체가 초기화)이 있기 때문에
    // while처럼 변수를 초기화하지 않아도 된다.
?>