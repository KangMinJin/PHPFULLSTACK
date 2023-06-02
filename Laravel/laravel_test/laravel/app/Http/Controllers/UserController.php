<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function login() {
        return view('login');
    }
    public function loginpost(Request $req) {
        // Log
        Log::debug("Login Start", $req->only('email','password'));

        Log::debug("Validator Start");
        // 유효성 체크
        $data = $req->only('email', 'password');
        $validate = Validator::make($data, [
            'email' => 'required|email|max:30' // !악성유저가 DB에 설정된 길이 이상으로 넣을 경우 에러 터지니까 max치는 항상 줘야한다.
            ,'password' => 'required|between:3,30'
        ]);
        Log::debug("Validator End");

        if ($validate->fails()) { // ? fails() : Validator 실패하면 true를 반환한다.
            Log::debug("Validator Fails Start");
            return redirect()->back()->withErrors($validate);
        }

        // 유저 정보 습득
        $user = DB::select('select id, email, password from users where email = ?', [
            $req->email
        ]);
        // Log::debug("Select User", [$user[0]]); // * 2번째 파라미터가 무조건 배열이여야 하므로 배열로 만들어서 넣어준다.
        // if (!$user || !Hash::check($req->password, $user[0]->password)) {
        if (!$user || $req->password !== $user[0]->password) {
            return redirect()->back()->withErrors('아이디와 비밀번호를 확인해 주세요.');
        }

        // 유저인증 작업
        Auth::loginUsingId($user[0]->id);
        if (!Auth::check()) {
            Log::debug("유저인증 NG", [session()->all()]);
            return redirect()->back()->withErrors('인증처리 에러');
        } else {
            Log::debug("유저인증 OK", [session()->all()]); // * stdClass는 각각의 인덱스 배열에 레코드 하나하나가 연상배열로 들어있다! (fetchAll 생각!)
            return redirect('/');
        }

    }
}
