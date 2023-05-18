<?php
namespace application\controller;

class UserController extends Controller {
    public function loginGet() {
        return "login"._EXTENSION_PHP;
    }

    public function loginPost() {
        $result = $this->model->getUser($_POST);// $model은 protected기 때문에 this로 사용 가능
        $this->model->close(); // DB 파기

        // 유저 유무 체크
        if (count($result) === 0) {
            $errMsg = "입력하신 회원 정보가 존재하지 않습니다.";
            $this->addDynamicProperty("errMsg", $errMsg);
            // 로그인 페이지로 이동
            return "login"._EXTENSION_PHP;
        }

        // * php에서 대소문자 비교하기 (BINARY 사용 안 하는 방법..하지만 전 BINARY사용 할래요...)
        // if($result[0]["u_pw"] === $_POST["pw"]) {
        //      session에 User ID 저정
        //     $_SESSION[_STR_LOGIN_ID] = $_POST["id"];
        //      리스트 페이지 리턴
        //     return _BASE_REDIRECT."/shop/main";
        // }

        // session에 User ID 저정
        $_SESSION[_STR_LOGIN_ID] = $_POST["id"];
        // 리스트 페이지 리턴
        return _BASE_REDIRECT."/shop/main";
    }

    // 로그아웃 메소드
    public function logoutGet() {
        session_unset();
        session_destroy();
        // 메인 페이지 리턴
        return "main"._EXTENSION_PHP;
    }

    public function registGet () {
        return "regist"._EXTENSION_PHP;
    }
    
    public function registPost () {
        // 유효성 체크
        $arrPost = $_POST;
        $arrChkErr = []; // 에러 메세지 담을 배열

        // 아이디 글자수 체크
        if (mb_strlen($arrPost["id"]) < 5 || mb_strlen($arrPost["id"]) > 12 ) { // DB에 제한되어 있는 길이만큼 아이디 길이 설정 체크
            $arrChkErr["id"] = "아이디는 5~12글자로 입력해 주세요.";
        }

        // 아이디 중복 체크
        $result = $this->model->getUser($arrPost, false);
        if (count($result) !== 0) {
            $arrChkErr["id"] = "사용중인 아이디입니다.";
            $arrPost["id"] = "";
        }

        // 아이디 영문대소문자 숫자 특수문자 체크(추가 예정)
        $pattern = "/[^a-zA-Z0-9_]/"; // * 영어대소문자, 숫자, '_' 정규식 ('^'가 붙으면 부정 -> 영어대소문자, 숫자, _ 이외의 문자가 들어가면 체크된다!)

        if (preg_match($pattern, $arrPost["id"]) !== 0) {
            $arrChkErr["id"] = "아이디는 영어 대소문자, 숫자, _ 만 사용할 수 있습니다.";
            $arrPost["id"] = "";
        }

        // 패스워드 영문대소문자 숫자 특수문자 체크(추가 예정)
        // * 영어대소문자, 숫자, 특수문자가 각각 하나씩 들어가고 길이가 8~20이어야하는 정규식
        $pwPattern = "/^(?=.*[a-z]{1})(?=.*[A-Z]{1})(?=.*[!@#$%^*+=-]{1})(?=.*[0-9]{1}).{8,20}$/";
        if (preg_match($pwPattern, $arrPost["pw"]) === 0) {
            $arrChkErr["pw"] = "비밀번호는 영어 대소문자, 숫자, 특수문자를<br>각각 하나 이상 사용하여 작성해주세요.";
        }
        
        // 패스워드 글자수 체크
        if (mb_strlen($arrPost["pw"]) < 8 || mb_strlen($arrPost["pw"]) > 20) {
            $arrChkErr["pw"] = "비밀번호는 8~20글자로 입력해 주세요.";
        }

        
        // 비밀번호 재입력 일치체크
        if ($arrPost["pw"] !== $arrPost["pwChk"]) {
            $arrChkErr["pwChk"] = "비밀번호가 일치하지 않습니다.";
        }

        // 이름 글자수 체크
        if (mb_strlen($arrPost["name"]) === 0 || mb_strlen($arrPost["name"]) > 30 ) { // DB에 제한되어 있는 길이만큼 아이디 길이 설정 체크
            $arrChkErr["name"] = "이름은 30글자 이하로 입력해 주세요.";
        }

        // 유효성체크 에러일 경우
        if (!empty($arrChkErr)) {
            // 에러메세지 셋팅
            $this->addDynamicProperty("arrError", $arrChkErr);
            return "regist"._EXTENSION_PHP;
        }
        // *Transaction Start
        $this->model->beginTransaction();
        
        // User Insert
        if(!$this->model->insertUser($arrPost)) {
            $this->model->rollback(); // 예외처리 롤백
            echo "User Regist ERROR";
            exit();
        }
        
        $this->model->commit(); // 정상처리 커밋
        
        // *Transaction END
        
        // 로그인 페이지로 이동
        return _BASE_REDIRECT."/user/login";
        
        }
        
        // 마이페이지
        public function accountGet () {
            $id = ["id" => $_SESSION[_STR_LOGIN_ID]];
            $result = $this->model->getUser($id, false);
            $this->addDynamicProperty("userInfo", $result[0]);
            return "account"._EXTENSION_PHP;
        }
        
        // 수정 페이지
        public function editGet() {
            $id = ["id" => $_SESSION[_STR_LOGIN_ID]];
            $result = $this->model->getUser($id, false);
            $this->addDynamicProperty("userInfo", $result[0]);
            return "edit"._EXTENSION_PHP;
        }
        
        
        
        
        
        // ! -------------------------------
        public function editPost() {
            $arrPost = $_POST;
            $arrPost["id"] = $_SESSION[_STR_LOGIN_ID];
            $arrChkErr = []; // 에러 메세지 담을 배열
            
            // 패스워드 영문대소문자 숫자 특수문자 체크(추가 예정)
            // * 영어대소문자, 숫자, 특수문자가 각각 하나씩 들어가고 길이가 8~20이어야하는 정규식
            $pwPattern = "/^(?=.*[a-z]{1})(?=.*[A-Z]{1})(?=.*[!@#$%^*+=-]{1})(?=.*[0-9]{1}).{8,20}$/";
            if (preg_match($pwPattern, $arrPost["pw"]) === 0) {
                $arrChkErr["pw"] = "비밀번호는 영어 대소문자, 숫자, 특수문자를<br>각각 하나 이상 사용하여 작성해주세요.";
            }
            
            // 패스워드 글자수 체크
            if (mb_strlen($arrPost["pw"]) < 8 || mb_strlen($arrPost["pw"]) > 20) {
                $arrChkErr["pw"] = "비밀번호는 8~20글자로 입력해 주세요.";
            }
            
            // 비밀번호와 비밀번호 체크
            if ($arrPost["pw"] !== $arrPost["pwChk"]) {
                $arrChkErr["pwChk"] = "비밀번호가 일치하지 않습니다.";
            }
            
            // 유효성체크 에러일 경우
            if (!empty($arrChkErr)) {
                // 에러메세지 셋팅
                $this->addDynamicProperty("arrError", $arrChkErr);
                return "edit"._EXTENSION_PHP;
            }
            
            // *Transaction Start
            $this->model->beginTransaction();
            // User Insert
            if(!$this->model->updateUser($arrPost)) {
                $this->model->rollback(); // 예외처리 롤백
                echo "User Edit ERROR";
                exit();
            }
            
            $this->model->commit(); // 정상처리 커밋
            return _BASE_REDIRECT."/user/account";
            // *Transaction END
        }
        
        function withdrawalGet() {
            return "withdrawal"._EXTENSION_PHP;
        }
        
        // 회원탈퇴
        function withdrawalPost() {
            $arrPost = $_POST;
            $arrPost["id"] = $_SESSION[_STR_LOGIN_ID];
            $arrChkErr = []; // 에러 메세지 담을 배열

            $result = $this->model->getUser($arrPost,false);

            if ($arrPost["pw"] !== $result[0]["u_pw"]) {
                $arrChkErr["pw"] = "비밀번호가 일치하지 않습니다.";
                $this->addDynamicProperty("arrError", $arrChkErr);
                return "withdrawal"._EXTENSION_PHP;
            }
            $this->model->beginTransaction();

            if(!$this->model->updateDelFlg($arrPost)) {
                $this->model->rollback(); // 예외처리 롤백
                echo "User Delete ERROR";
                exit();
            }
            
            // 세션 파기
            session_unset();
            session_destroy();
            $this->model->commit(); // 정상처리 커밋
            return "main"._EXTENSION_PHP;
            // 메인 페이지 리턴
        }
    }
?>