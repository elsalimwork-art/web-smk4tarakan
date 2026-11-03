<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('announcementView');
});

Route::view('/spmb', 'spmb')->name('spmb');

Route::view('/kontak', 'kontak')->name('kontak');

Route::view('/visi-misi', 'visi-misi')->name('visi-misi');

Route::view('/makna-logo', 'makna-logo')->name('makna-logo');

Route::view('/beranda', 'beranda')->name('beranda');