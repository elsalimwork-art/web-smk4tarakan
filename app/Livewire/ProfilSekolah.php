<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class ProfilSekolah extends Component
{
    /**
     * Dua kartu fasilitas ditampilkan pada setiap halaman carousel.
     */
    public int $facilitySlide = 0;

    public array $fasilitas = [
        [
            'judul' => 'Lab Pengembangan Perangkat Lunak dan Gim',
            'deskripsi' => 'Dilengkapi dual-monitor development rig, server pengujian lokal, koneksi fiber optic dedicated, dan repositori kolaborasi kode berbasis Git.',
            'gambar' => 'images/profil-sekolah/lab-pengembangan-perangkat-lunak-gim.png',
            'alt' => 'Laboratorium Pengembangan Perangkat Lunak dan Gim',
        ],
        [
            'judul' => 'Lab Cetak Desain Komunikasi Visual',
            'deskripsi' => 'Fasilitas terpadu produksi visual: bilik podcast kedap suara, pencahayaan studio siaran, rendering 3D, serta perancangan aset grafis interaktif.',
            'gambar' => 'images/profil-sekolah/lab-cetak-desain-komunikasi-visual.png',
            'alt' => 'Kegiatan pembelajaran di fasilitas Desain Komunikasi Visual',
        ],
        [
            'judul' => 'Lab Desain Grafis',
            'deskripsi' => 'Dilengkapi dual-monitor development rig, server pengujian lokal, koneksi fiber optic dedicated, dan repositori kolaborasi kode berbasis Git.',
            'gambar' => 'images/profil-sekolah/lab-desain-grafis.png',
            'alt' => 'Laboratorium Desain Grafis',
        ],
        [
            'judul' => 'Lab 2D Desain Komunikasi Visual',
            'deskripsi' => 'Fasilitas terpadu produksi visual: bilik podcast kedap suara, pencahayaan studio siaran, rendering 3D, serta perancangan aset grafis interaktif.',
            'gambar' => 'images/profil-sekolah/lab-2d-desain-komunikasi-visual.png',
            'alt' => 'Kegiatan pembelajaran 2D Desain Komunikasi Visual',
        ],
        [
            'judul' => 'Lab 1 Teknik Komputer dan Jaringan',
            'deskripsi' => 'Dilengkapi dual-monitor development rig, server pengujian lokal, koneksi fiber optic dedicated, dan repositori kolaborasi kode berbasis Git.',
            'gambar' => 'images/profil-sekolah/lab-1-teknik-komputer-jaringan.png',
            'alt' => 'Laboratorium 1 Teknik Komputer dan Jaringan',
        ],
        [
            'judul' => 'Lab Desain 3D',
            'deskripsi' => 'Fasilitas terpadu produksi visual: bilik podcast kedap suara, pencahayaan studio siaran, rendering 3D, serta perancangan aset grafis interaktif.',
            'gambar' => 'images/profil-sekolah/lab-desain-3d.png',
            'alt' => 'Laboratorium Desain 3D',
        ],
        [
            'judul' => 'Lab 2 Teknik Komputer dan Jaringan',
            'deskripsi' => 'Dilengkapi dual-monitor development rig, server pengujian lokal, koneksi fiber optic dedicated, dan repositori kolaborasi kode berbasis Git.',
            'gambar' => 'images/profil-sekolah/lab-2-teknik-komputer-jaringan.png',
            'alt' => 'Laboratorium 2 Teknik Komputer dan Jaringan',
        ],
        [
            'judul' => 'Lab Fotografi Desain Komunikasi Visual',
            'deskripsi' => 'Fasilitas terpadu produksi visual: bilik podcast kedap suara, pencahayaan studio siaran, rendering 3D, serta perancangan aset grafis interaktif.',
            'gambar' => 'images/profil-sekolah/lab-fotografi-desain-komunikasi-visual.png',
            'alt' => 'Fasilitas Fotografi Desain Komunikasi Visual',
        ],
    ];

    public function slideBerikutnya(): void
    {
        $jumlahSlide = max(1, (int) ceil(count($this->fasilitas) / 2));

        $this->facilitySlide = ($this->facilitySlide + 1) % $jumlahSlide;
    }

    public function slideSebelumnya(): void
    {
        $jumlahSlide = max(1, (int) ceil(count($this->fasilitas) / 2));

        $this->facilitySlide = ($this->facilitySlide - 1 + $jumlahSlide) % $jumlahSlide;
    }

    public function pilihSlide(int $slide): void
    {
        $jumlahSlide = max(1, (int) ceil(count($this->fasilitas) / 2));

        $this->facilitySlide = max(0, min($slide, $jumlahSlide - 1));
    }

    public function render(): View
    {
        return view('livewire.profil-sekolah-page');
    }
}