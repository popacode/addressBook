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


Route::get('/', function () {
    return view('index');
});
*/


Route::get('/', 'Controller@getData');

Route::post('/insert','Controller@insert');

Route::get('/database', function() {
    $users = App\User::all();
    return view('pages.messages.database', ['users' => $users]);
});

Route::get('/delete/{id}', 'Controller@delete');

Route::get('/edit/{id}', 'Controller@edit');

Route::patch('/update/{id}', 'Controller@update');