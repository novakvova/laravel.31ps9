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

use Illuminate\Support\Facades\DB;

//Route::get('/', function () {
//
//    //phpinfo();
//    $count = DB::table('users')->count();
//    dump($count);
//    exit();
//    return view('welcome');
//});

Route::view('/{path?}', 'app');

// Route::get('/', function () {

//    phpinfo();
//    $count = DB::table('users')->count();
//    dump($count);
//    exit();
//    return view('welcome');
// });


