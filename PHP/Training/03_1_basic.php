<?php
    echo "점심메뉴\n";
    echo "탕수육 8,000\n";
    echo "짜장면 6,000\n";
    echo "짬뽕 6,000\n";


    echo "\n점심메뉴\n탕수육 8,000\n짜장면 6,000\n짬뽕 6,000\n";

    $lunch = "\n점심메뉴\n탕수육 8,000\n짜장면 6,000\n짬뽕 6,000\n";
    echo $lunch;

    $blank = " ";
    $br = "\n";
    $p_8000 = "8,000";
    $p_6000 = "6,000";
    $tang = "탕수육";
    $zza = "짜장면";
    $zzam = "짬뽕";
    $l_menu = "점심메뉴";

    // echo "\n점심메뉴\n탕수육 ", $T, "\n짜장면", $ZZ, "\n짬뽕 ", $ZZ;

    echo $br.$l_menu.$br;
    echo $tang.$blank.$p_8000.$br;
    echo $zza.$blank.$p_6000.$br;
    echo $zzam.$blank.$p_6000;
    // "." 으로 이어준다!
?>