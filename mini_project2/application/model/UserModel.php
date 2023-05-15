<?php
namespace application\model;

class UserModel extends Model {
    public function getUser($arrUserInfo) {
        $sql =
            " SELECT * "
            ." FROM "
            ."  user_info "
            ." WHERE "
            ."  u_id = :id "
            ."  and u_pw = :pw "
            ;
        $prepare = [
            ":id"   => $arrUserInfo["id"]
            ,":pw"  => $arrUserInfo["pw"]
        ];

        try {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($prepare);
            $result = $stmt->fetchAll();
        } catch (Exception $e) {
            echo "UserModel -> getUser Error : ".$e->getMessage();
            exit();
        } finally {
            $this->closeConn();
        }
        return $result;
    }
    public function joinUser($arrUserInfo) {
        $sql =
            " INSERT INTO user_info ( "
            ."  u_id "
            ."  ,u_pw "
            ." ) "
            ." VALUES ( "
            ."  :u_id "
            ."  ,:u_pw "
            ." ) "
            ;
        $prepare = [
            ":u_id"   => $arrUserInfo["id"]
            ,":u_pw"  => $arrUserInfo["pw"]
        ];
        try {
            $this->conn->beginTransaction();
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($prepare);
            $result = $stmt->rowCount();
            $this->conn->commit();
        } catch (Exception $e) {
            $this->conn->rollback();
            echo "UserModel -> getUser Error : ".$e->getMessage();
            exit();
        } finally {
            $this->closeConn();
        }
        return $result;
    }
}
?>