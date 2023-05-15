<?php
namespace application\controller;

class UserController extends Controller {
    public function loginGet() {
        return "login"._EXTENSION_PHP;
    }

    public function loginPost() {
        $result = $this->model->getUser($_POST);// $model은 protected기 때문에 this로 사용 가능
        // 유저 유무 체크
        if (count($result) === 0) {
            $errMsg = "입력하신 회원 정보가 존재하지 않습니다.";
            $this->addDynamicProperty("errMsg", $errMsg);
            // 로그인 페이지로 이동
            return "login"._EXTENSION_PHP;
        }
        // session에 User ID 저정
        $_SESSION[_STR_LOGIN_ID] = $_POST["id"];
        // 리스트 페이지 리턴
        return _BASE_REDIRECT."/shop/main";
    }

    // 로그아웃 메소드
    public function logoutGet() {
        session_unset();
        session_destroy();
        // 로그인 페이지 리턴
        return "main"._EXTENSION_PHP;
    }

    public function joinGet () {
        return "join"._EXTENSION_PHP;
    }

    public function joinPost () {
        if ($_POST["pw"] !== $_POST["pwChk"]) {
            $errMsg = "비밀번호가 일치하지 않습니다.";
            $this->addDynamicProperty("errMsg", $errMsg);
            // 로그인 페이지로 이동
            return "join"._EXTENSION_PHP;
        }
        $result = $this->model->joinUser($_POST);
        // if (count($result) === 0) {
        //     $errMsg = "입력하신 회원 정보가 존재하지 않습니다.";
        //     $this->addDynamicProperty("errMsg", $errMsg);
        //     // 로그인 페이지로 이동
        //     return "login"._EXTENSION_PHP;
        // }
        // session에 User ID 저정
        // $_SESSION[_STR_LOGIN_ID] = $_POST["id"];
        // 리스트 페이지 리턴
        return _BASE_REDIRECT."/shop/main";
    }
}
?>