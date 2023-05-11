<?php
// Cookie 작성
setcookie("name", "Kim Mihyeon", time() + 30);
setcookie("age", "26", time() + 300);


// Cookie 바로 삭제하는 방법
setcookie("age","",0);
?>