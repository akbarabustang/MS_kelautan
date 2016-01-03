<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/app/beranda', function () {
    return view('app.beranda.index');
});

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

// App
Route::group(['namespace' => 'App' ], function () {
    Route::controller('app/master/bantuan', 'BantuanController',
        [
            'getIndex'  => 'bantuan',
            'getTambah'  => 'bantuan_tambah',
            'getHapus'  => 'bantuan_hapus',
        ]);
     Route::controller('app/master/jabatan', 'JabatanController',
        [
            'getIndex'  => 'jabatan',
            'getTambah'  => 'jabatan_tambah',
        ]);
     Route::controller('app/master/jenis-usaha', 'JenisusahaController',
        [
            'getIndex'  => 'jenis-usaha',
        ]);
});


