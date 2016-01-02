<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/app/layout', function () {
    return view('app.main');
});

Route::get('/app/layout/master/pembudidaya', function () {
    return view('app.pembudidaya');
});

Route::get('/app/layout/master/nelayan', function () {
    return view('app.nelayan');
});

Route::get('/app/layout/master/pengolah', function () {
    return view('app.pengolah');
});

Route::get('/app/master', function () {
    return view('app.master');
});

Route::get('/app/pengaturan', function () {
    return view('app.pengaturan');
});

Route::get('/app/login', function () {
    return view('app.login');
});

Route::group(['middleware' => ['web']], function () {
    //
});


