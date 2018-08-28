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
    return '<h3>Landon App Page</h3>';
    // return view('welcome');
});

Route::get('/about', function () {
    $response_arr = [];
    $response_arr['author'] = 'BP';
    $response_arr['version'] = '0.1.1';

    return $response_arr;
    // return '<h3>About</h3>';
});

Route::get('/home', function () {
    $data = [];
    $data['version'] = '0.1.1';
    return view('welcome', $data);
});

Route::get('/di', 'ClientController@di');

Route::get('/facades/db', function () {
    return DB::select('SELECT * FROM table');
});

Route::get('/facades/encrypt', function () {
    return Crypt::encrypt('123456789');
});

Route::get('/facades/decrypt', function () {
    return Crypt::decrypt('eyJpdiI6IkE1ektKMGlvMWl1aGgrMENOeVRZZ0E9PSIsInZhbHVlIjoiODIwT0h5djhGdkM3bXZUUGJvK0NTaHQ4TTZtaHNQRFNGaHJkOTFXOUxMZz0iLCJtYWMiOiJjNWZhODdhYzMxYjllYmE5ZWMzNTcxMjI5OWYzMTViM2QwMDFjN2VmZmY3OGM3OTllZTVkZTUyOTkxODQzMjM0In0=');
});
