<?php

use App\Livewire\ContactPage;
use App\Livewire\EmployeeDetailPage;
use App\Livewire\HomePage;
use App\Livewire\ManagementPage;
use App\Livewire\SpmbPage;
use Illuminate\Support\Facades\Route;

// HALAMAN UTAMA
Route::get('/', HomePage::class)->name('home');

// SPMB
Route::get('/spmb', SpmbPage::class)->name('spmb');

// KONTAK
Route::get('/kontak', ContactPage::class)->name('contact');

// MANAJEMEN
Route::get('/manajemen', ManagementPage::class)->name('management');
Route::get('/manajemen/pegawai/{id}', EmployeeDetailPage::class)
    ->whereNumber('id')
    ->name('employee-detail');
Route::view('/visi-misi', 'visi-misi')->name('visi-misi');

// MAKNA LOGO
Route::view('/makna-logo', 'makna-logo')->name('makna-logo');

// PROGRAM KEAHLIAN
Route::view('/program-keahlian', 'program-keahlian')
    ->name('program-keahlian');

// PROFIL SEKOLAH
Route::view('/profil-sekolah', 'profil-sekolah')
    ->name('profil-sekolah');

// BERITA
Route::view('/berita', 'berita')
    ->name('berita');