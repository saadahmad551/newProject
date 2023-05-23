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

Route::get('permissions', function () {
    return view('Perimisions');
});


Route::get('userlist', function () {
    return view('UserList');
});

Route::get('viewuser', function () {
    return view('ViewUser');
});

Route::get('viewrole', function () {
    return view('ViewRole');
});

Route::get('rolelist', function () {
    return view('RoleList');
});


Route::get('/dashboard', function () {
    return view('Dashboard');
});


Route::get('sign-up', function () {
    return view('sign-up');
});



Route::get('/Fleet', function () {
    return view('Fleet');
});


Route::get('Fleet_detail', function () {
    return view('Fleet_detail');
    
});


Route::get('add_Fleet', function () {
    return view('add_Fleet');
});


Route::get('ViewFleet', function () {
    return view('ViewFleet');
});
//Route::group(['prefix' => '/test'], function () {
//    return view('test');
//
//});
