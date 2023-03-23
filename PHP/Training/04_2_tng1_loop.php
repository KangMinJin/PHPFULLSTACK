<?php
// 1. 반복문을 이용해서 아래와 같이 출력해 주세요
// 갯수는 내가 입력한 갯수만큼!
// *
// **
// ***
// ****
// *****

// $num = 6;
// for ($star=1; $star <= $num; $star++) { 
//     for ($i=1; $i <= $star; $i++) { 
//         echo "*";
//     }
//     // 일단 바깥 for문 실행 후 안의 for문 실행. $i <= $star 조건을 넘으면 탈출.
//     // 다시 바깥 for문 실행 후 안의 for문 초기화된 후 또 $i <= $star 조건을 넘으면 탈출.
//     // 이 일련의 과정을 바깥 for문의 $star <= $num 조건을 넘을때까지 반복.
//     echo "\n";
// }
$num = 6;
for ($star=1; $star <= $num; $star++) { 
    for ($i=1; $i <= $star; $i++) { 
        echo "*";
    }
    echo "\n";
}
// 거꾸로
$num = 6;
for ($star=$num; $star >= 0; $star--) { 
    for ($i=1; $i <= $star; $i++) { 
        echo "*";
    }
    echo "\n";
}

?>