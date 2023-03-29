<?php
    $arr = array(5, 10, 7, 3, 1);
    foreach ($arr as $key => $val) 
    {
        // echo $key." > ".$val."\n";
    }

    for ($i=0; $i < count($arr); $i++)
    { 
        echo $i." > ".$arr[$i]."\n";
    }
?>