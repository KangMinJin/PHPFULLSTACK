<?php
    // 1. Post Method로 사용자가 입력한 데이터를  HTTP Request한다.
    // 2. 입력한 데이터의 상세 내역은 아래와 같다.
    //  2-1. Key : id, pw, name, birth_date
    // 3. 유저가 입력하지 않은 데이터도 함께 전송
    //  3-1. key : h_page, val : h1
    // echo를 이용해서 각각의 데이터를 출력하라
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST METHOD</title>
</head>
<body>
    <form method="post" action="20_2_tng1_http_post_method.php">
        <label for="id">ID : </label>
        <input type="text" name="id" id="id" required>
        <br>
        <label for="pw">PW : </label>
        <input type="password" name="pw" id="pw" required>
        <br>
        <label for="name">이름 : </label>
        <input type="text" name="name" id="name" required>
        <br>
        <label for="date">생일 : </label>
        <input type="date" name="date" id="date" required>
        <br>
        <input type="hidden" name="h_page" value="h1"> <!-- hidden은 사용자가 입력하지않은 데이터를 전송할 때 쓴다. (사용자에겐 보이지 않음!) -->
        <br>
        <button type="submit">submit</button>
        <br>
    </form>
</body>
</html>
<?php
    $arr_result = $_POST;
    foreach ($arr_result as $key => $val) //foreach문은 배열에 값이 없으면 그냥 안 돌고 끝이기 때문에 에러가 나지 않는다. if문 작성 필요 없음!
    {
        echo $key." : ".$val."<br>"; // 개행을 할 때 브라우저에서 확인해야 할 때는 <br>을 써서 개행을 해 준다
    }
?>