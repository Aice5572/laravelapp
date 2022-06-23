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

Route::get('/hello2/{msg?}' , function ($msg='なんもねーよ') {

$html = <<<E0F
<html>
<head>
<title>ドラゴンボール</title>
<style>
body {font-size:16pt; color:#999; background-color:#17e6c3; }
h1{ font-size:100pt; text-align:right; color:#ffd700;
    margin:-40px 0px -50px 0px; }
p1{ text-aligin:center; color:#ff1a1a;
     }
</style>
</head>
<body>
    <h1>Kamehame-Ha</h1>
    <p1>{$msg}</p1>
    <p>界王拳10倍だ～</p>    
</body>
</html>
E0F;

     return $html;
});

Route::get('hello', 'App\Http\Controllers\hellocontroller@index' );
Route::get('hello/other','App\Http\Controllers\hellocontroller@other' );

Route::get('Fight','App\Http\Controllers\FightController@index');