<?php
namespace application\util;

class UrlUtil {

    // $_GET["url"]을 분석해서 리턴
    public static function getUrl() {
        return isset($_GET["url"]) ? $_GET["url"] : "" ;
    }

    // URL을 "/"로 구분해서 벼열을 만들고 리턴
    public static function getUrlArrPath() {
        $url = UrlUtil::getUrl(); // static으로 선언된 프로퍼티는 new가 아닌 "::"를 붙여서 사용가능
        return $url !== "" ? explode("/", $url) : "" ;
    }

    // "/"를 "\"로 치환해주는 메소드
    public static function replaceSlashToBackslash($str) {
        return str_replace("/", "\\", $str);
    }
}
?>