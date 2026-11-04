<?php

use App\Livewire\ContactPage;
use App\Livewire\HomePage;
use App\Livewire\ManagementPage;
use App\Livewire\SpmbPage;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePage::class)->name('home');
Route::get('/spmb', SpmbPage::class)->name('spmb');
Route::get('/kontak', ContactPage::class)->name('contact');
Route::get('/manajemen', ManagementPage::class)->name('management');
Route::view('/visi-misi', 'visi-misi')->name('visi-misi');

Route::view('/makna-logo', 'makna-logo')->name('makna-logo');

Route::view('/program-keahlian', 'program-keahlian')
    ->name('program-keahlian');

Route::get('/berita', function () {
    return view('berita');
})->name('berita');