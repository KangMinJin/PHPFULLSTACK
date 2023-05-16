<?php
namespace application\model;

class UserModel extends Model {
    public function getUser($arrUserInfo, $pwFlg = true) {
        $sql =
            " SELECT * "
            ." FROM "
            ."  user_info "
            ." WHERE "
            ."  u_id = :id "
            ;
        
        // pw 추가할 경우 - 동적쿼리
        if ($pwFlg) {
            $sql .= "  and u_pw = :pw ";
        }
        
        $prepare = [
            ":id"   => $arrUserInfo["id"]
        ];
        
        // pw 추가할 경우 - 동적쿼리
        if ($pwFlg) {
            $prepare[":pw"] = $arrUserInfo["pw"];
        }

        try {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($prepare);
            $result = $stmt->fetchAll();
        } catch (Exception $e) {
            echo "UserModel -> getUser Error : ".$e->getMessage();
            exit();
        }

        return $result;
    }

    // Insert User
    public function insertUser($arrUserInfo) {
        $sql =
            " INSERT INTO user_info ( "
            ."  u_id "
            ."  ,u_pw "
            ."  ,u_name "
            ." ) "
            ." VALUES ( "
            ."  :u_id "
            ."  ,:u_pw "
            ."  ,:u_name "
            ." ) "
            ;
        $prepare = [
            ":u_id"   => $arrUserInfo["id"]
            ,":u_pw"  => $arrUserInfo["pw"]
            ,":u_name"  => $arrUserInfo["name"]
        ];
        try {
            $stmt = $this->conn->prepare($sql);
            $result = $stmt->execute($prepare); // execute의 리턴값은 boolean형
            return $result;
        } catch (Exception $e) {
            return false;
        }
    }
}
?>