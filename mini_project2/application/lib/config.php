<?php
define("_ROOT", $_SERVER["DOCUMENT_ROOT"]);

// DB관련
define("_DB_HOST", "localhost");
define("_DB_USER", "root");
define("_DB_PASSWORD", "root506");
define("_DB_NAME", "minitwo");
define("_DB_CHARSET", "utf8mb4");

// 기타
define("_EXTENSION_PHP", ".php");

define("_PATH_CONTROLLER", "application/controller/");
define("_PATH_MODEL", "application/model/");
define("_PATH_VIEW", "application/view/");

define("_BASE_FILENAME_CONTROLLER", "Controller");
define("_BASE_FILENAME_MODEL", "Model");

define("_BASE_REDIRECT", "Location: ");

define("_STR_LOGIN_ID", "u_id");

define("_HEADER", _PATH_VIEW."header"._EXTENSION_PHP);
define("_FOOTER", _PATH_VIEW."footer"._EXTENSION_PHP);
?>