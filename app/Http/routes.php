<?php

Route::get('/', function () {
    return view('welcome');
});



// App
Route::group([ 'namespace' => 'App'], function(){
    
    Route::post('/app/login', 'LoginController@postLogin');
    Route::get('/app/login', 'LoginController@getLogin');
    Route::get('/app/logout', 'LoginController@logout');

});

Route::group(['middleware' => 'MustLogin', 'namespace' => 'App' ], function () {

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


    Route::get('/app/master/usaha', function () {
        return view('app.master.usaha');
    });

    Route::get('/app/pengaturan', function () {
        return view('app.pengaturan.index');
    });

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
            'getHapus'  => 'jabatan_hapus',
        ]);
    Route::controller('app/master/usaha', 'UsahaController',
        [
            'getIndex'  => 'usaha',
            'getTambah' => 'usaha_tambah',
            'getHapus'  => 'usaha_hapus',
        ]);
    Route::controller('app/master/sarana', 'SaranaController',
        [
            'getIndex'  => 'sarana',
            'getTambah' => 'sarana_tambah',
            'getHapus'  => 'sarana_hapus',
        ]);
});


