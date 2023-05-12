<?php
// config 파일
require_once("application/lib/config.php");// 해당 파일을 불러오지 못하면 바로 fatal error
require_once("application/lib/autoload.php");// 해당 파일을 불러오지 못하면 바로 fatal error
// require_once() - 어느 파일에서 에러가 났는지 판별하기 쉬워진다


new application\lib\Application(); // Application 호출
?>