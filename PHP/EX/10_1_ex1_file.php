<?php
    // 파일을 여는 방법 : fopen( 파일 위치, 파일 여는 방식 )
    // $f_food = fopen( "./sam/food.txt", "r" ); // "r"은 읽기 전용
    // $f_food = fopen( "./sam/food.txt", "w" ); // "w"는 쓰기 전용(파일이 존재하면 내용을 삭제, 파일이 존재하지 않으면 생성)-***파일 포인터가 시작부분부터 있어서 기존 내용이 덮어써져서 삭제된다.
    $f_food = fopen( "./sam/food.txt", "a" ); // "a"는 쓰기 전용(파일이 존재하지 않으면 파일을 생성)-***파일 포인터가 끝부분부터 있어서 w와 다르게 기존 내용 삭제 안 된다

    // var_dump($f_food);

    // 파일을 한 줄씩 읽어오는 방법 : fgets(open한 파일);
    // print fgets($f_food);
    // print fgets($f_food);
    // print fgets($f_food);
    // print fgets($f_food);
    // print fgets($f_food);
    // print fgets($f_food);

    // 위의 것을 간단하게!
    // while(!feof($f_food)) //while문은 (조건) 이 true일때만 실행이기 때문에 마지막 줄 전까지 false가 뜨기 때문에 !붙여서 true로 만들어줘서 while문을 돌리는 조건.
    // {
    //     print fgets($f_food);
    // }

    // while($line = fgets($f_food))
    // {
    //     print $line;
    // }

    // 파일에 내용 추가 : fputs(open한 파일, 추가할 내용);

    fputs($f_food,"\n돈까스1"); // 파일 포인터가 가르치는건 마지막 문단의 끝 점이기 때문에 개행을 자동으로 해 주지 않으니까 개행을 직접 넣어줘야 한다
    fputs($f_food,"\n돈까스2");
    fputs($f_food,"\n돈까스3");

    // 파일을 닫는 방법 : fclose(open한 파일);
    fclose($f_food);
?>