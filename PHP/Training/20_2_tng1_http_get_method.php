<?php
    // 1. Get Method로 사용자가 입력한 데이터를  HTTP Request한다.
    // 2. 입력한 데이터의 상세 내역은 아래와 같다.
    // 2-1. Key : id, pw, name, birth_date
    // echo를 이용해서 각각의 데이터를 출력하라
    
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET METHOD</title>
    <style>
        /* *{
            margin: 0;
            box-sizing: border-box;
        }
        .con{
            width: 400px;
            height: 500px;
            border: 1px solid black;
            margin: auto;
            margin-top : 200px;
            text-align: center;
            padding: 100px 50px;
        }
        h1{
            margin-bottom:20px;
        } */
    </style>
</head>
<body>
    <div class=con>
        <!-- <h1>회원가입</h1> -->
        <form method="get" action="20_2_tng1_http_get_method.php">
            <label for="id">ID : </label>
            <input type="text" name="id" id="id" required>
            <br>
            <label for="pw">PW : </label>
            <input type="password" name="pw" id="pw" required> <!-- 비밀번호는 type을 password로 준다! -->
            <br>
            <label for="name">NAME : </label>
            <input type="text" name="name" id="name" required>
            <br>
            <label for="birth_date">BIRTH DATE : </label>
            <input type="date" name="birth_date" id="birth_date" required>
            <br>
            <br>
            <button type="submit">SUBMIT</button>
            <br>
        </form>
    </div>
</body>
</html>
<?php
    $arr_result = $_GET;
        echo "<br>";
        // echo "ID : ".$arr_result["id"]."<br>";
        // echo "PW : ".$arr_result["pw"]."<br>";
        // echo "NAME : ".$arr_result["name"]."<br>";
        // echo "BIRTH DATE : ".$arr_result["birth_date"]."<br>"; // foreach로 작성 시 한줄로 줄일 수 있다 foreach문은 배열에 값이 없으면 그냥 안 돌고 끝이기 때문에 에러가 나지 않는다. if문 작성 필요 없음!
        foreach( $arr_result as $key => $val )
        {
            echo $key." : ".$val."<br>";
        }
?>