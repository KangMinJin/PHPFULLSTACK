<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class BoardController extends Controller
{
    public function list () {
        $result = DB::select("select * from boards where delete_flg = '0'");
        
        return view('list')->with('list', $result);
    }

    public function write() {
        return view('write');
    }

    public function store(Request $req) {
        $req->validate([
            'title' => 'required'
            ,'content' => 'required'
        ]);
        $date = Carbon::now();
        DB::insert('insert into boards (title, content, created_at, updated_at, write_user_id)
        values (?, ?, ?, ?, ?)', [$req->title, $req->content, $date, $date, 1]);
        return redirect()->route('board.list');
    }
}
