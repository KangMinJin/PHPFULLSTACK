<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ApiUserController extends Controller
{
    public function userget($email) {
        $arr = [
            'code' => '0'
            ,'msg' => ''
        ];

        $user = DB::select('select name, email from users where email = ? and delete_flg = ?', [$email, '0']);

        if ($user) {
            $arr['code'] = '0';
            $arr['msg'] = 'Success Get User';
            $arr['data'] = $user[0];
        } else {
            $arr['code'] = 'E01';
            $arr['msg'] = 'No Data';
        }
        return $arr;
    }

    public function userpost(Request $req) {
        $arr = [
            'code' => '0'
            ,'msg' => ''
        ];

        $result = DB::insert('insert into users (name, email, password) values (?, ?, ?)'
        , [$req->name
            ,$req->email
            ,Hash::make($req->password)
        ]);

        if ($result) {
            $arr['code'] = '0';
            $arr['msg'] = 'Success Registration';
            $arr['data'] = [$req->email];
        } else {
            $arr['code'] = 'E01';
            $arr['msg'] = 'Faild Registration';
        }
        return $arr;
    }

    public function userput(Request $req, $email) {
        $arr = [
            'code' => '0'
            ,'msg' => ''
        ];
        $result = DB::update('update users set name = ? where email = ?', [$req->name, $email]);

        if ($result) {
            $arr['code'] = '0';
            $arr['msg'] = 'Success Update';
            $arr['data'] = [$req->name];
        } else {
            $arr['code'] = 'E01';
            $arr['msg'] = 'Faild Update';
        }
        return $arr;
    }

    public function userdelete($email) {
        $arr = [
            'code' => '0'
            ,'msg' => ''
        ];

        $date = Carbon::now();

        $result = DB::update('update users set deleted_at = ?, delete_flg = ? where email = ?'
        , [
            $date
            ,'1'
            ,$email
        ]);

        if ($result) {
            $arr['code'] = '0';
            $arr['msg'] = 'Success Delete';
            $arr['data'] = ['deleted_at' => $date, 'email' => $email];
        } else {
            $arr['code'] = 'E01';
            $arr['msg'] = 'Faild Delete';
        }
        return $arr;
    }
}
