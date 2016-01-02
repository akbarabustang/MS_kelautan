<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/app/layout', function () {
    return view('app.layout.main');
});

Route::get('/app/layout/master/pembudidaya', function () {
    return view('app.master.pembudidaya');
});

Route::get('/app/layout/master/nelayan', function () {
    return view('app.master.nelayan');
});

Route::get('/app/layout/master/pengolah', function () {
    return view('app.master.pengolah');
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


