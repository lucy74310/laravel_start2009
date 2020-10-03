<?php

use Illuminate\Support\Facades\Route;

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

// 3.3 URL 파라미터
Route::get('/test1/{foo}', function ($foo) {
    return $foo;
});

Route::get('/test2/{foo?}', function ($foo = 'bar') {
    return $foo;
});

Route::pattern('foo3', '[0-9a-zA-Z]{3}');

Route::get('/test3/{foo3?}', function ($foo = 'foo3') {
    return $foo;
});

// foo3의 Pattern 에서 벗어나는 경우는 이 라우터 매핑을 탄다.
Route::get('/test3/{foo}', function ($foo) {
    return $foo . 'this is test3';
});

// 3.4 라우트 이름
Route::get('/test4', [
    'as' => 'test4',
    function () {
        return 'this is test4';
    }
]);


Route::get('/test5', function () {
   return redirect(route('test4'));
});

