<?php
    // 1. 산술 연산자
    // echo "더하기 : 1 + 1 = ", 1 + 1;
    // echo "\n빼기 : 1 - 1 = ", 1 - 1;
    // echo "\n곱하기 : 2 * 3 = ", 2 * 3;
    // echo "\n나누기 : 10 / 2 = ", 10 / 2;
    // echo "\n나머지 : 9 % 7 = ", 9 % 7;

    // echo "\n연산 순서 : 10 - 5 * 8 = ", 10 - 5 * 8;
    // echo "\n\n";
    // 2.증가/감소 연산자
    // 우선 사용하기 위해서 변수에 담아야 한다.
    // $num1 = 1;
    // $num2 = 1;

    // echo $num1++, "\n";
    // echo $num1;
    // echo "\n\n";
    // 3. 산술 대입 연산자
    // $num3 = 1;
    // $num3 = $num3 +1;
    // $num4 = 1;
    // $num4 += 1;
    // $num4 -= 1;
    // $num4 *= 1;
    // $num4 /= 1;
    // $num4 %= 1;
    // echo $num3, " ", $num4;

    // $tng_num = 10;
    // // $tng_num 에 10을 더해라.
    // echo "$tng_num + 10 = ", $tng_num + 10, "\n";
    // // $tng_num 를 5로 나눠라.
    // echo "$tng_num / 5 = ", $tng_num / 5, "\n";
    // // $tng_num 에 4를 빼라.
    // echo "$tng_num - 4 = ", $tng_num - 4, "\n";
    // // $tng_num 를 7로 나눈 나머지를 구하라.
    // echo "$tng_num % 7 = ", $tng_num % 7, "\n";
    // // $tng_num 에 3을 곱하라.
    // echo "$tng_num * 3 = ", $tng_num * 3,"\n\n";

    // 여기부턴 산술 대입 연산자로.
    // $tng_num 에 10을 더해라.
    // echo "$tng_num += 10 : ", $tng_num += 10, "\n";
    // // $tng_num 를 5로 나눠라.
    // echo "$tng_num /= 5 : ", $tng_num /= 5, "\n";
    // // $tng_num 에 4를 빼라.
    // echo "$tng_num -= 4 : ", $tng_num -= 4, "\n";
    // // $tng_num 를 7로 나눈 나머지를 구하라.
    // echo "$tng_num %= 7 : ", $tng_num %= 7, "\n";
    // // $tng_num 에 3을 곱하라.
    // echo "$tng_num *= 3 : ", $tng_num *= 3, "\n";
    // 산술 연산자에는 변수에 =을 써서 계산하지 않기 때문에 그대로 휘발. ex) $tng_num + 10
    // 산술 대입 연산자는 변수에 =을 써서 계산하기 때문에 원래 값을 그대로 덮어쓴다. ex) tng_num = $tng_num + 10

    // $t1 = 0;
    // $t2 = $t1 + 1;
    // $t3 = 4;
    // $t3 = $t1 + $t2;

    // $t1 = 3;

    // echo $t1, " ", $t2, " ", $t3;

    // 4. 비교 연산자
    $t1 = 1;
    $t2 = '1';
    // var_dump(1 > 2);
    // var_dump(1 < 2);
    // var_dump(1 >= 1);
    // var_dump(1 <= 1);
    // var_dump($t1 == $t2);
    // var_dump($t1 === $t2);
    // == 는 느슨한 비교. 데이터 타입이 달라도 값이 같으면 True. === 는 완전한 비교. 데이터 타입까지 같아야 True.
    // var_dump($t1 != $t2);
    // var_dump($t1 !== $t2);
    // != 는 느슨한 비교. 데이터 타입이 달라도 값만 다르면 True. !== 는 완전한 비교. 데이터 타입까지 달라야 True.

    // 5. 논리 연산자
    // var_dump(1 == 1 && 2 == 3);
    // &&(AND) 논리 연산자는 두 값이 True 일때만 True.
    // var_dump(1 == 1 || 2 == 3);
    // ||(OR) 논리 연산자는 한 값이 True기만 해도 True. 두 값이 모두 False면 False.
    // var_dump(!(1 == 1));
    //  !(NOT) 논리 연산자는 결과를 뒤집는다. True면 False False면 True.
    $val = 999991;
    print $val."\n";
    $val++;
    $val = $val * 10;
    print $val."\n";

    // $a = 5;
    // $b = 4;
    // $c = $a * $b >> 2;
    // print 16 << 1;

    // echo 1 > 2 ? '참' : '거짓';
    // $x = -1;
    // echo $x >= 0 ? '+' : '-';
?>