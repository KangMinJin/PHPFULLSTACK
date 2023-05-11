<?php
session_name("kim");
session_start();

// Session 파기
// session_destroy();

// Session 정보 삭제(정보만 삭제하는것이지 세션이 파기되지는 않음)
session_unset(); // Session 전체 정보 삭제
// unset($_SESSION["del"]); // Session 특정요소를 삭제
var_dump($_SESSION);
?>