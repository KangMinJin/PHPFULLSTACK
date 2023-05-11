<?php
$user_id ="php506";
$user_pw = "506";

// Session 명 지정, 지정하지 않으면 "PHPSESSID"로 자동지정된다.(보안성저하)
session_name("kim");
// Session 시작
session_start();

// -----------------------------
// 유저 인증작업 필요, 지금은 생략
// -----------------------------

// session에 데이터 저장
$_SESSION["id"] = $user_id;
$_SESSION["del"] = "delete";

?>