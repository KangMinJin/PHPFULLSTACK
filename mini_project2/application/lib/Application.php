<?php
// class파일명은 카멜기법으로 작성.
namespace application\lib; // class 이름이 겹칠수 있으니 주소로 특정하게 만들어줌
// new application\lib\Application(); 이렇게!
use application\util\UrlUtil;
class Application // 파일명과 같게 간다!(Java 처럼)
{
    // 생성자
    public function __construct() {
        $arrPath = UrlUtil::getUrlArrPath(); // 접속 url을 배열로 획득
        $identityName = empty($arrPath[0]) ? "User" : ucfirst($arrPath[0]);
        $action = (empty($arrPath[1]) ? "login": $arrPath[1]).ucfirst(strtolower($_SERVER["REQUEST_METHOD"]));
        
        $controllerPath = _PATH_CONTROLLER.$identityName._BASE_FILENAME_CONTROLLER._EXTENSION_PHP;
        if (!file_exists($controllerPath)) {
            echo "해당 컨트롤러 파일이 없습니다. : ".$controllerPath;
            exit();
        }
        
        // 해당 Controller 호출
        $controllerName = UrlUtil::replaceSlashToBackslash(_PATH_CONTROLLER.$identityName._BASE_FILENAME_CONTROLLER);
        new $controllerName($identityName, $action);
    }
}


?>