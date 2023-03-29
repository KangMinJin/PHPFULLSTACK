<?php
    // min, max, floor, round, ceil, rand
    // echo floor(3.14)."\n"; //소수점 버림
    // echo ceil(3.14)."\n"; //소수점 올림
    // echo round(3.14)."\n"; //소수점 반올림
    // echo max(array(3,1,5,6,8))."\n";
    // echo min(array(3,1,5,6,8))."\n";
    // echo rand(0,7)."\n";

    // 날짜 관련 함수
    // echo date('Y-M-D H:i:s a')."\n"; // 대문자와 소문자 포맷이 다름...!
    // echo date('ymdHi l')."\n"; //모두 소문자로 하면 위와 결과가 다르다!

    // echo 10000000000000000000;

    // 난수 함수
    // echo mt_rand(0, 3); // rand() 보다 난수 생성목적으로 더 좋음!

    // 운영체제 / php버전 상수
    // echo PHP_OS."\n";
    // echo PHP_VERSION."\n";
    // var_dump($GLOBALS);
    // var_dump(phpinfo());

    // 상수 변언 (명명 규칙 : 상수명은 꼭 대문자로 작성한다. 대문자로 작성하면 상수인걸 알아보기 쉽다!!! 개발자들간의 암묵적 약속)
    define("INT_ONE", 1);
    // 상수는 변수와 달리 값이 변하지 않는 것이다.
    echo INT_ONE;
    // 실수를 줄이기 위해 상수로 선언하여 사용한다. 변수로 선언하면 바뀔 수 있기 때문.
?>