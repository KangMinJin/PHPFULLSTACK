<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request; // 자바에서 import 사용하듯 추가해줘야한다!

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// --------------------
// * 라우트 정의
// --------------------
// 문자열 리턴
Route::get('/hi', function () {
    return "졸려요.";
});

// 뷰 리턴(뷰 파일이 없으면 에러 발생, .env파일의 APP_DEBUG모드 설정이 false면 500에러, true면 에러의 상세정보 출력)
Route::get('/myview', function () {
    return view('myview');
});

// --------------------
// * HTTP 메소드 대응하는 라우터
// 여러 라우터에 해당될 경우 가장 마지막에 정의 된것이 실행
// --------------------

Route::get('/home', function() {
    return view('home');
});

// GET 요청에 대한 처리
Route::get('/method', function() {
    return 'GET Method';
});

// POST 요청에 대한 처리
Route::post('/method', function() {
    return 'POST Method';
});

// PUT 요청에 대한 처리
Route::put('/method', function () {
    return 'PUT Method';
});

// DELETE 요청에 대한 처리
Route::delete('/method', function () {
    return 'DELETE Mehtod';
});

// 모든(ANY) 요청에 대한 처리
Route::any('/method', function () {
    return 'ANY Method';
});

// 특정 여러 메소드 요청에 대한 처리
Route::match(['get', 'post'], '/method', function () {
    return 'MATCH Method';
});

// --------------------
// * 라우터에서 파라미터 제어
// --------------------
// 쿼리스트링으로 파라미터 획득
Route::get('/query', function (Request $request) {
    return $request->id.", ".$request->name;
});

// URL 세그먼트로 지정한 파라미터 획득
Route::get('/segment/{id}', function($id) { // 세그먼트는 안 적어주면 404에러 발생
    return 'segment ID : '.$id;
});

// URL 세그먼트로 지정 파라미터 획득 : 기본값 설정
Route::get('/segment2/{id?}', function($id = 'base') { // 아무것도 안 적으면 기본값인 base 그대로 출력.
    return 'segment2 ID : '.$id;
});

// Request로도 세그먼트 파라미터를 획득 가능, 세그먼트 파라미터가 없어도 404 에러 발생 X
// 하지만 기본값 셋팅은 여기선 불가능. Controller로 따로 지정해주어야함.
// Route::get('/segment2/{id?}', function(Request $request) {
//     return 'segment2 ID : '.$request->id;
// });

// --------------------
// * 라우트의 이름 지정
// --------------------
Route::get('/names/home', function() {
    return view('nameshome');
});

Route::get('/names', function() {
    return 'name.index !!!';
})->name('names.index');


// --------------------
// * 라우트 매칭 실패 시 대체 라우트 정의
//  fallback은 가장 마지막에 정의 -> 보통 에러처리를 가장 마지막에 정의하므로
// --------------------
Route::fallback(function() {
    return '잘못된 경로로 접속하셨습니다.';
});


// --------------------
// * 라우트의 그룹 및 공통경로 설정
// --------------------
// 공통 경로 (localhost/"users"/login, localhost/"users"/logout 이런식으로 공통경로 설정 가능)
Route::prefix('users')->group(function(){
    Route::get('/login', function() {
        return 'Login!!';
    })->name('users.login');
    Route::get('/logout', function() {
        return 'Logout!!';
    })->name('users.logout');
    Route::get('/registration', function() {
        return 'Registration!!';
    })->name('users.registration');
});

// --------------------
// * 서명 라우터
// --------------------
use Illuminate\Support\Facades\URL;
Route::get('/makesign', function () {
    // 일반 URL 링크 생성하기
    // $baseUrl = route('invitations', ['invitation' => 5816, 'group' =>678]);
    $baseUrl = route('sign');

    // 서명된 URL 링크 생성하기
    // $signUrl = URL::signedRoute('invitations', ['invitation' => 5816, 'group' =>678]);
    $signUrl = URL::signedRoute('sign');

    // * 유효기간이 있는 서명된 URL 링크 생성하기
    $limitSignUrl = URL::temporarySignedRoute('sign', now()->addSecond(10)); // 생성된 시간으로부터 10초동안 유효
    // return $baseUrl."<br><br>".$signUrl;
    return $baseUrl."<br><br>".$signUrl."<br><br>".$limitSignUrl;
});

// Route::get('/invitations/{invitation}/{group}', function() {
Route::get('/sign', function() {
    return "Sign";
})->name('sign')->middleware('signed');

// --------------------
// * 컨트롤러
// --------------------
// * 커멘드로 컨트롤러 생성 php artisan make:controller TestController
use App\Http\Controllers\TestController;
Route::get('/test', [TestController::class, 'index'])->name('tests.index');
// ! 컨트롤러와 그 안의 메소드 호출

// * php artisan make:controller TasksController --resource : 이 옵션을 주면 get post 구분할 필요도 없어진다!
use App\Http\Controllers\TasksController;
Route::resource('/tasks', TasksController::class);
/*
GET|HEAD        tasks .................... tasks.index › TasksController@index  
POST            tasks .................... tasks.store › TasksController@store  
GET|HEAD        tasks/create ............. tasks.create › TasksController@create  
GET|HEAD        tasks/{task} ............. tasks.show › TasksController@show  
PUT|PATCH       tasks/{task} ............. tasks.update › TasksController@update  
DELETE          tasks/{task} ............. tasks.destroy › TasksController@destroy  
GET|HEAD        tasks/{task}/edit ........ tasks.edit › TasksController@edit
*/

// --------------------
// * 컨트롤러
// --------------------
use App\Http\Controllers\BladeController;
Route::get('/blade', [BladeController::class, 'index'])->name('blade.index');

use App\Http\Controllers\BoardController;
// Route::get('/board', [BoardController::class, 'index'])->name('board.index');
// ! Controller 만들때 --resource 옵션을 줬으므로 위처럼 하나하나 쓰지 말고 아래와 같이 사용한다!
Route::resource('/board', BoardController::class);