<?php


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/app/index', function () {
    return view('app.beranda.index');
});

Route::get('app', 'BerandaController@index');

Route::get('/app/pembudidaya', function () {
    return view('app.pembudidaya.index');
});

Route::get('/app/nelayan', function () {
    return view('app.nelayan.index');
});

Route::get('/app/pengolah', function () {
    return view('app.pengolah.index');
});

Route::get('/app/master/bantuan', function () {
    return view('app.master.bantuan');
});

Route::get('/app/master/jabatan', function () {
    return view('app.master.jabatan');
});

Route::get('/app/master/jenis-usaha', function () {
    return view('app.master.jenis-usaha');
});

Route::get('/app/master/sarana-pembudidaya', function () {
    return view('app.master.sarana-pembudidaya');
});

Route::get('/app/pengaturan', function () {
    return view('app.pengaturan.index');
});

Route::get('/app/login', function () {
    return view('app.login.index');
});

Route::group(['middleware' => ['web']], function () {
    //
});


