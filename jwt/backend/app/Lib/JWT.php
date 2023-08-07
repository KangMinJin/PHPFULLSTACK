<?php
namespace App\Lib;

use Exception;
use Illuminate\Support\Facades\Log;
use Throwable;

class JWT{
    protected $alg = 'SHA256';
    protected $secret_key = 'php506';

    // 에러 메세지(보통은 설정파일에 따로 작성.)
    protected $error_base = [
        "E01" => "Not set Token",
        "E02" => "Unkown form Token",
        "E03" => "Unauthorazation Token",
        "E04" => "Expired",
        "E99" => "System Error"
    ];

    /* 
    JWT 생성
    */
    public function createJWT(Array $data){
        Log::debug("-------- create JWT start --------");
        
        // header 작성
        $header_json = json_encode([
            'alg' => $this->alg,
            'typ' => 'JWT'
        ]);
        $header = base64_encode($header_json);
        Log::debug("header : ".$header);
        
        // payload 작성
        $iat = time();
        $exp = $iat + 60;
        $payload_json = json_encode([
            'id' => $data['id'],
            'iat' => $iat,
            'exp' => $exp
        ]);
        $payload = base64_encode($payload_json);
        Log::debug("payload : ".$payload);
        
        // signature 작성
        $signature = hash($this->alg, $header.$payload.$this->secret_key);
        Log::debug("signature : ".$signature);

        Log::debug("--------- create JWT end ---------");
        return base64_encode($header.".".$payload.".".$signature);
    }
    
    public function chkToken($token){
        Log::debug("-------- chkToken Start --------");

        try {
            
            // 토큰 유무 체크
            if (empty($token)) {
                throw new Exception("E01");
            }

            // 토큰 디코딩
            $decode_token = base64_decode($token);
        
            // 토큰을 분리
            $arr_token = explode(".", $decode_token);
            
            // 토큰 형태 체크
            if (count($arr_token) !== 3) {
                throw new Exception("E02");
            }

            $header = $arr_token[0];
            $payload = $arr_token[1];
            $signature = $arr_token[2];
            
            // 토큰 유효기간 확인
            $arr_payload = json_decode(base64_decode($payload));
            if (time() > $arr_payload->exp) {
                throw new Exception("E04");
            }
        
            Log::debug("signature : ".$signature);

            // 검증용 signature 생성
            $verify = hash($this->alg, $header.$payload.$this->secret_key);
            if ($signature !== $verify) {
                throw new Throwable("E03");
            }
            Log::debug("verify : ".$verify);
        } 
        catch (Throwable $th) {
            // [
            //     "errflg" => "1"
            //     ,"error_info" => [
            //             "code" => "E01"
            //             ,"msg" => "Not set Token"
            //         ]
            // ];
            // 예외 코드 확인
            // $code = array_key_exists($th->getMessage(), $this->error_base) ? $th->getMessage() : "E99";

            // $error_info = [
            //     "code" => $code
            //     ,"msg" => $this->error_base[$code]
            // ];
            // Log::debug("Error : ".$code.$th->getMessage());
            // return $error_info;
            // return false;
            Log::debug($th->getMessage());
            return $this->create_error_info($th->getMessage());
        }
        finally{
            Log::debug("--------- chkToken End ---------");
        }
        return "";
    }

    /*
     * 메소드명 : create_error_info
     * 기능     : 에러정보 배열 작성
     * 파라미터 : String    $error_code
     * 리턴     : Array     $error_info
    */
    public function create_error_info($error_code){
        $code = array_key_exists($error_code, $this->error_base) ? $error_code : "E99";

            $error_info = [
                "code" => $code
                ,"msg" => $this->error_base[$code]
            ];
            Log::debug("Error : ".$code." error_code : ".$error_code);
            return $error_info;
    }
}

?>