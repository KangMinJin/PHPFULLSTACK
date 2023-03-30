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

    // var_dump($arr_parse);

    // 역순의 문자열
    $str_abcd = "abcd";
    // echo strrev($str_abcd); //한글은 안 됨...

    // *문자열 자르기
    $str_3 = "가나다라마";
    // echo mb_substr($str_3,2)."\n";
    // echo mb_substr($str_3,3,2)."\n";
    // echo mb_substr($str_3,1,3)."\n";
    // echo mb_substr($str_3,2,1)."\n";
    // echo mb_substr($str_3,-1)."\n"; // 음수도 사용 가능. 뒤에서부터 자른다

    // 문자열 자르기로 "PHP입니다."만 출력하시요.
    $str_tng = "안녕하세요. PHP입니다.";
    // echo mb_substr($str_tng, 7);
    // echo mb_substr($str_tng, -7);

    // 문자열 자르기로 "세요. P"만 출력하시오.
    // echo mb_substr($str_tng,3,5);
    // echo mb_substr($str_tng,-11,5);

    // 문자열 빈공간 지우기
    $str_trim = "   abcd      ";
    // echo trim($str_trim); // 개행도 빈공간으로 인식해서 지워진다
    // echo $str_trim;
    // echo "aaa";
    // echo rtrim($str_trim)."\n"; // 오른쪽 빈 공간 삭제
    // echo ltrim($str_trim)."\n"; //왼쪽 빈 공간 삭제

    // *문자열 길이를 구하는 함수
    $str_len = "가나다라";
    // echo mb_strlen($str_len);

    // *문자열 포맷에 따라 출력하는 함수
    // define("WELCOME", "안녕하세요. %s님.");
    // printf(WELCOME, "홍길동");


    // 기본 포맷 : ERROR(숫자) : XXX ERROR가 발생했습니다.
    // 에러 1 : 시스템 , 2 : 로그인 오류, 3 : 접속
    define("ERROR_MSG","ERROR (%d) : %s ERROR가 발생했습니다."); // 상수인 메세지 안에 개행 넣는 것 보단 echo로 따로 주는게 좋다.
    // printf(ERROR_MSG, 1, "시스템");
    // echo "\n";
    // printf(ERROR_MSG, 2, "로그인");
    // echo "\n";
    // printf(ERROR_MSG, 3, "접속");
    // define("ERROR","ERROR %s ERROR가 발생했습니다.\n");
    // $err_1 = "(1) : 시스템";
    // $err_2 = "(2) : 로그인"; // 이런식으로 변수 설정하는건 수정이 어려워 효율 닞다.
    // $err_3 = "(3) : 접속";
    // printf(ERROR,$err_1);
    // printf(ERROR,$err_2);
    // printf(ERROR,$err_3);

    // 문자열을 포맷별로 분리하는 함수
    $str_sscanf = "가나다라 50 abcd";
    sscanf($str_sscanf, "%s %d %s", $str_ko, $int_d, $str_en); // 문자열을 잘라서 각각 변수에 저장한다. 하지만 잘 안 씀
    // echo $str_ko,"\n",$int_d,"\n",$str_en;

    // 문자열 반복
    // echo str_repeat("가나", 3);

    // *문자열 특정 문자열로 분리하는 함수 : explode()
    $str_expl = "홍길동,27세,남자,의적,조선";
    $arr_expl = explode(",", $str_expl);
    // print_r($arr_expl);

    // *배열을 특정 문자열로 합치는 함수 : implode()
    $str_impl = implode(" / ",$arr_expl);
    echo $str_impl;
?>