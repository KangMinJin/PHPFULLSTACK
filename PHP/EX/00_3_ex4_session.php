<?php
session_name("kim");
session_start();

var_dump($_SESSION);
var_dump($_COOKIE); // 세션id가 쿠키에 자동저장된다
var_dump("세션ID : ".session_id()); // sessionID를 반환
?>