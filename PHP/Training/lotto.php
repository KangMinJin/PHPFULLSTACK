<?php
    // echo mt_rand(1,45)." ";
    
    $lotto_arr = range(1, 45);
    shuffle($lotto_arr);
    $sel1 = array_rand($lotto_arr);
    $sel2 = array_rand($lotto_arr);
    $sel3 = array_rand($lotto_arr);
    $sel4 = array_rand($lotto_arr);
    $sel5 = array_rand($lotto_arr);
    $sel6 = array_rand($lotto_arr);
    // var_dump($lotto_arr);
    // for
    echo $sel1." ".$sel2." ".$sel3." ".$sel4." ".$sel5." ".$sel6;

    // for ($i=1;$i <= 6;$i++)
    // {
    //     ;
    //     if()
    // }
    // var_dump($lotto_arr);
?>