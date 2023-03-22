<?php
// 성적
// 범위 :
//     100 = A+
//     90~99 = A
//     80~89 = B
//     70~79 = C
//     60~69 = D
//     60미만 = F
// switch로 작성.
$score = 80;
$t1 = '당신의 점수는 ';
$t2 = '점 입니다. ';
$warn = '잘못된 값을 입력 했습니다.';
switch ($score) {
    case $score <=100 && $score >=0:
        switch ($score) {
            case 100:
                $grade = '<A+>';
                break;
            case $score >= 90:
                $grade = '<A>';
                break;
            case $score >= 80:
                $grade = '<B>';
                break;
            case $score >= 70:
                $grade = '<C>';
                break;
            case $score >= 60:
                $grade = '<D>';
                break;
        default:
                $grade = '<F>';
                break;
        }
        echo $t1.$score.$t2.$grade;
        break;
default:
    echo $warn;
    break;
}
?>