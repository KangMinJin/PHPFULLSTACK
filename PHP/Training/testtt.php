<?php
// for($i=2; $i < 10; $i++)
// {
//     $gugu =  $i."단\n";
//     for($j=1; $j < 10; $j++)
//     {
//         $num = $i." * ".$j." = ".$i*$j."\n";
//         for($l=1;$l<10;$l++)
//         {
//             $num_1 = $num;
//         }
//     }
//     $gugudan = $gugu.$num;
//     echo $gugudan;
// }

// $arr_gugu = array();
// for($i=2; $i < 10; $i++)
// {
// array_push($arr_gugu, $i."단");
// for($j=1; $j < 10; $j++)
// {
//     array_push($arr_gugu, $i." * ".$j." = ".$i*$j);
// }
// }
// $arr_gugu = implode("\n",$arr_gugu);
// echo $arr_gugu;

$gugu= "";
for($i=2; $i < 10; $i++)
{
    $gugu .=  $i."단\n";
    for($j=1; $j < 10; $j++)
    {
        $gugu .= $i." * ".$j." = ".$i*$j."\n";
    }
}
echo $gugu;

// var_dump($arr_gugu);
// echo $a = "1";
// echo $a=$a."2";
// function arr_make()
// {
//     $arr_gugu = func_get_args();
// }
?>