<?php
    // 문자열 합치기.
    $str_1 = "aaa";
    $str_2 = "bbb";

    $str_sum = $str_1 . $str_2 . $str_1;
    // echo $str_sum;

    // 대소문자 변환
    $str_en = "abcd efgh";
    // echo strtolower($str_en)."\n"; // 소문자로 변환
    // echo strtoupper($str_en)."\n"; // 대문자로 변환
    // 맨 앞글자면 대문자로 변환
    // echo ucfirst($str_en)."\n";
    // 각 단어의 맨 앞글자만 대문자로 변환
    // echo ucwords($str_en)."\n";

    // URL 관련 함수
    $url = "https://www.google.com/search?gs_ssp=eJzj4tTP1TcwMU02T1JgNGB0YPBiS8_PT89JBQBASQXT&q=google&oq=%ED%95%B4%E3%85%90&aqs=chrome.1.69i57j46i131i199i433i465i512j0i131i433i512l3j0i512j0i131i433i512l3.1182j0j7&sourceid=chrome&ie=UTF-8";

    $arr_url = parse_url($url); //url을 분할해준다. 정보 확인하기 좋음
    // var_dump($arr_url);

    parse_str($arr_url["query"], $arr_parse);// 더 쪼개준다.

    var_dump($arr_parse);


?>