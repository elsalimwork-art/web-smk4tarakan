<?php

use App\Livewire\BerandaPage;
use App\Livewire\SpmbPage;
use Illuminate\Support\Facades\Route;

Route::get('/', BerandaPage::class)->name('beranda');
Route::get('/spmb', SpmbPage::class)->name('spmb');

Route::view('/kontak', 'kontak')->name('kontak');

Route::view('/visi-misi', 'visi-misi')->name('visi-misi');

Route::view('/makna-logo', 'makna-logo')->name('makna-logo');

Route::view('/program-keahlian', 'program-keahlian')
    ->name('program-keahlian');