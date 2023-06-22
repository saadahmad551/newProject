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


Route::get('/Fleet_detail', function () {
    return view('Fleet_detail');
    
});


Route::get('add_Fleet', function () {
    return view('add_Fleet');
});


Route::get('ViewFleet', function () {
    return view('ViewFleet');
});

Route::get('vehicles_types', function () {
    return view('vehicles_types');
});


Route::get('/vehicles_make', function () {
    return view('vehicles_make');
});


Route::get('/vehicles_model', function () {
    return view('vehicles_model');
});


Route::get('vehicles_Fuels', function () {
    return view('vehicles_Fuels');
});


Route::get('vehicles_mentainance', function () {
    return view('vehicles_mentainance');
});


Route::get('Driver', function () {
    return view('Driver');
});


Route::get('Driver_timeline', function () {
    return view('Driver_timeline');
});


Route::get('Driver_Detail', function () {
    return view('Driver_Detail');
});


Route::get('Driver_Detail_LOG', function () {
    return view('Driver_Detail_LOG');
});




//Route::group(['prefix' => '/test'], function () {
//    return view('test');
//
//});
