<?php

    print "안녕하세요.\n";

    //  \n을 넣어주면 개행이 들어간다 html에서 <br>과 같음.

    print ("안녕하세요~\n");

    echo "속이쓰립니다...\n";

    // var_dump( print "배고파..." );
    // var_dump()는 ()안에 들어가는 요소의 모든 내용을 다 보여준다.

    // print나 echo는 출력되는 문장엔 차이가 없지만
    // print는 연산이 들어가 리턴값(0이나 1)이 있어서 보통 echo 많이 사용.

    $test_num = '변수변수';
    // 변수 선언은 $를 붙이고 한다.

    // 네이밍 기법
    // 1. 카멜 기법 : 낙타의 등 처럼 단어와 단어 사이의 문자를 대문자로 작성하는 기법. ex) $testNum
    // 2. 스네이크 기법 : 뱀 처럼 단어와 단어 사이를 언더바로 이어주고 전부 소문자로 작성하는 기법. ex) $test_num
    // 3. 파스칼 기법 : 단어의 첫 글자와 단어와 단어 사이를 대문자로 작성하는 기법. ex) $TestNum

    echo $test_num;

?>