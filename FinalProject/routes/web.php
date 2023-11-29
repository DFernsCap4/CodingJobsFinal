<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/dany", function(){
    return view("dany");
});

Route::get('/otherRoute',function(){
    return view('otherRoute');
});

Route::get('/oneMoreRoute',function(){
    return view('oneMoreRoute');
});

Route::get('/mai',function(){
    return view('mai');
});



Route::view('/hithere', 'hithere');

/* Laura's Routes */
Route::get('/laura',function(){
    return view('laura');
});
/* End Laura's Routes */
Route::get('/depression',function(){
    return view('depression');
});

/* Marcia's Routes */
Route::get('/marcia',function(){
    return view('marcia');
});
/* End Marcia's Routes */
