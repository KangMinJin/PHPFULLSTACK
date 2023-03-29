<?php
// void 함수(리턴값 X)

function sum($n1,$n2)
{
    echo $n1 + $n2."\n";
    return;
}

sum(1, 2); // echo나 print를 사용하지 않아도 함수 안에 이미 echo나print가 있다.

// return 함수(리턴값 O)

function sum2($n1,$n2)
{
    return $n1 + $n2;
}

echo sum2(1, 2); // 함수 안에 echo나 print가 없으므로 호출할때 echo나print를 써준다.
?>