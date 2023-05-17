<?php
namespace application\controller;

class ApiController extends Controller {
    public function userGet() {
        $arrGet = $_GET;
        $arrData = [ "flg" => "0" ];
        // model 호출
        $this->model = $this->getModel("User");

        $result = $this->model->getUser($arrGet, false);

        // 유저 유무 체크
        // TODO : 중복체크도 아이디 유효성 검사 할 수 있게?
        if (count($result) !== 0) {
            $arrData["flg"] = "1";
            $arrData["msg"] = "사용중인 아이디입니다.";
        } else {
            $arrData["flg"] = "0";
            $arrData["msg"] = "사용가능한 아이디입니다.";
        }

        // 배열을 JSON으로 변경
        $json = json_encode($arrData);
        header('Content-type: application/json');
        echo $json;
        exit();
    }
}
?>