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
            $sql .= "  and BINARY u_pw = :pw "
                    ."   and del_flg = '0' "; // BINARY를 추가해주면 대소문자 구분해서 select한다.
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
            ":u_id"    => $arrUserInfo["id"]
            ,":u_pw"   => $arrUserInfo["pw"]
            ,":u_name" => $arrUserInfo["name"]
        ];
        try {
            $stmt = $this->conn->prepare($sql);
            $result = $stmt->execute($prepare); // execute의 리턴값은 boolean형
            return $result;
        } catch (Exception $e) {
            return false;
        }
    }
    
    // Update User
    public function updateUser($arrUserInfo) {
        $sql =
            " UPDATE user_info "
            ." SET "
            ."  u_pw = :u_pw "
            ." WHERE "
            ."  u_id = :u_id "
            ;
        $prepare = [
            ":u_id"  => $arrUserInfo["id"]
            ,":u_pw" => $arrUserInfo["pw"]
        ];
        try {
            $stmt = $this->conn->prepare($sql);
            $result = $stmt->execute($prepare); // execute의 리턴값은 boolean형
            return $result;
        } catch (Exception $e) {
            return false;
        }
    }

    // Update Del_Flg
    public function updateDelFlg ($arrUserInfo) {
        $sql =
            " UPDATE user_info "
            ." SET "
            ."  del_flg = '1' "
            ." WHERE "
            ."  u_id = :u_id "
            ."  and u_pw = :u_pw "
            ;
        $prepare = [
            ":u_id"  => $arrUserInfo["id"]
            ,":u_pw" => $arrUserInfo["pw"]
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