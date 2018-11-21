<?php

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


Route::get('/abc', function () {
    return view('abc');
});
Route::get('/xyz/{para?}',function ($para="testttt"){
    echo "phong2: ".$para;
})->where(['para'=>'[0-9]+']);
Route::get('NameRoute',['as'=>'MyRoutName',function (){
    echo 'xin chao ae ';
}]);
Route::get('NameRoute2',function (){
    return "Day la route ten 2";
})->name('MyrouteName2');
Route::get('GoiRoute',function (){
    return redirect()->route('MyrouteName2');
});
Route::group(['prefix'=>'mygroup'],function (){
   Route::get('User1',function (){
       echo "User1";
   }) ;
    Route::get('User2',function (){
        echo "User2";
    }) ;
    Route::get('User3',function (){
        echo "User3";
    }) ;
});

Route::get("GoiController","Mycontroller2@Xinchao");


Route::get("THamSo/{ten}","Mycontroller@KhoaHoc");

Route::get("TestRequest","Mycontroller@GetURL");

Route::post('PostData',['as'=>'PostData','uses'=>'Mycontroller@GetData']);
