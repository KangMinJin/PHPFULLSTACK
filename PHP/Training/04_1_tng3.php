<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="pl_ans"></label>
        <input type="number" id="pl_ans" name="pl_ans">
        <input type="submit">
    </form>
</body>
</html>

<?php
    $pl_ans = $_POST['pl_ans']; // 유저 입력값
    $com = rand(0, 2);
    if($pl_ans <= 2 && $pl_ans >= 0)
    {
        if($pl_ans == 0)
    {
        echo "당신은 가위를 냈습니다.<br>";
    }
    else if($pl_ans == 1)
    {
        echo "당신은 바위를 냈습니다.<br>";
    }
    else if($pl_ans == 2)
    {
        echo "당신은 보를 냈습니다.<br>";
    }
    
    if($com == 0)
    {
        echo "컴퓨터는 가위를 냈습니다.<br>";
    }
    else if($com == 1)
    {
        echo "컴퓨터는 바위를 냈습니다.<br>";
    }
    else if ($com == 2)
    {
        echo "컴퓨터는 보를 냈습니다.<br>";
    }
    }
    else
    {
        echo "잘못된 입력입니다.";
    }

    if($pl_ans ==0 && $com == 2 || $pl_ans ==1 && $com == 0 || $pl_ans ==2 && $com == 1)
    {
        echo "당신이 이겼습니다!";
    }
    else if($pl_ans == 0 && $com == 1 || $pl_ans ==1 && $com == 2 || $pl_ans ==2 && $com == 0)
    {
        echo "컴퓨터가 이겼습니다!";
    }
    else if($pl_ans == $com)
    {
        echo "비겼습니다. 다시 한 번!";
    }

?>