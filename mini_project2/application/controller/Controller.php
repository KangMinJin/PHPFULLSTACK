<?php
namespace application\controller;

use application\util\UrlUtil;
use \AllowDynamicProperties;

#[AllowDynamicProperties] // 필드에 선언되어있지 않은 속성들을 처리 중간중간에 추가해준다.
class Controller {
    protected $model;
    private static $modelList = [];
    private static $arrNeedAuth = ["user/account"];

    // 생성자
    public function __construct($identityName, $action){
        // session start
        if(!isset($_SESSION)) {
            session_start();
        }
        
        // 유저 로그인 및 권한 체크
        $this->chkAuthorization();

        // model 호출
        $this->model = $this->getModel($identityName);

        // 해당 controller 메소드 호출
        $view = $this->$action();// $this->loginGet();

        if (empty($view)) {
            echo "해당 컨트롤러에 메소드가 없습니다. : ".$action;
            exit();
        }

        // view 호출
        require_once $this->getView($view);
    }

    // model 호출하고 결과를 리턴
    protected function getModel($identityName) {
        // model 생성 체크
        if (!in_array($identityName, self::$modelList)) { // UserController가 호출했으므로 $modelList가 private라서 self로 사용 -> private는 외부에서 접근이 불가능 하기 때문에.
            $modelName = UrlUtil::replaceSlashToBackslash(_PATH_MODEL.$identityName._BASE_FILENAME_MODEL); // -> application\model\.User.Model
            self::$modelList[$identityName] = new $modelName(); // model class 호출
        }
        return self::$modelList[$identityName];
    }

    // 파라미터를 확인해서 해당하는 view를 리턴하거나, redirect
    protected function getView($view) {
        // view 체크
        if (strpos($view, _BASE_REDIRECT) === 0) {
            header($view);
            exit();
        }
        
        return _PATH_VIEW.$view; // application/view/login.php
    }

    // 동적 속성(Dynamic Property)를 셋팅하는 메소드
    protected function addDynamicProperty($key, $val) {
        $this->$key = $val;
    }

    // 유저 권한 체크 메소드
    protected function chkAuthorization() {
        $urlPath = UrlUtil::getUrl();
        foreach (self::$arrNeedAuth as $authPath) {
            if (!isset($_SESSION[_STR_LOGIN_ID]) && strpos($urlPath, $authPath) === 0) {
                header(_BASE_REDIRECT."/user/login");
                exit();
            }
        }
    }
}
?>