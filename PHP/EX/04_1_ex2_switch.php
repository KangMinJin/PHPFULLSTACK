<?php

    // $val = 1;

    // switch ($val) {
    //     case 0:
    //         echo "숫자 0입니다.";
    //         break;
    //     case 1:
    //         echo "숫자 1입니다.";
    //         break;
    //     default:
    //         echo "디폴트입니다.";
    //         break;
    // }
// if문과 비슷. 사용 빈도는 if 압승. 값이 고정되어있는곳..?엔 if문 보다좋다.
$u_sum = ["♠K","♠5"];
foreach ($u_sum as $key => $value)
{
    var_dump($u_sum[ $key ] = intval($u_sum[ $key ]));
}
?>