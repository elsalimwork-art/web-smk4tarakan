<?php

use App\Livewire\ContactPage;
use App\Livewire\EmployeeDetailPage;
use App\Livewire\HomePage;
use App\Livewire\ManagementPage;
use App\Livewire\NewsPage;
use App\Livewire\SpmbPage;
use Illuminate\Support\Facades\Route;
use App\Livewire\Agenda;
use App\Livewire\NewsDetailPage;

Route::get('/', HomePage::class)->name('home');

Route::get('/spmb', SpmbPage::class)->name('spmb');

Route::get('/kontak', ContactPage::class)->name('contact');

Route::get('/', HomePage::class)->name('beranda');

Route::get('/manajemen', ManagementPage::class)->name('management');

Route::get('/manajemen/pegawai/{id}', EmployeeDetailPage::class)
    ->whereNumber('id')
    ->name('employee-detail');

Route::get('/berita', NewsPage::class)
    ->name('news');

Route::get('/berita/detail/{slug}', NewsDetailPage::class)
    ->where('slug', '[A-Za-z0-9\-]+')
    ->name('news.detail');

Route::view('/visi-misi', 'visi-misi')->name('visi-misi');

Route::view('/makna-logo', 'makna-logo')->name('makna-logo');

Route::view('/program-keahlian', 'program-keahlian')
    ->name('program-keahlian');

Route::view('/profil-sekolah', 'profil-sekolah')
    ->name('profil-sekolah');

Route::get('/agenda', Agenda::class)->name('agenda.index');
