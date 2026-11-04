<?php

namespace App\Livewire;

use Livewire\Component;

class ProgramKeahlian extends Component
{
    public string $activeProgram = 'pplg';

    /*
    |--------------------------------------------------------------------------
    | DATA MENU SIDEBAR
    |--------------------------------------------------------------------------
    */

    public array $menu = [
        [
            'label' => 'Profil Sekolah',
            'url' => '/profil-sekolah',
            'icon' => 'profile',
        ],
        [
            'label' => 'Visi & Misi',
            'url' => '/visi-misi',
            'icon' => 'flag',
        ],
        [
            'label' => 'Makna Logo',
            'url' => '/makna-logo',
            'icon' => 'logo',
        ],
        [
            'label' => 'Program Keahlian',
            'url' => '/program-keahlian',
            'icon' => 'laptop',
        ],
        [
            'label' => 'Prestasi Siswa',
            'url' => '/prestasi-siswa',
            'icon' => 'trophy',
        ],
    ];

    /*
    |--------------------------------------------------------------------------
    | DATA PROGRAM KEAHLIAN
    |--------------------------------------------------------------------------
    */

    public array $programs = [

        // PROGRAM TKJ
        'tkj' => [
            'nomor' => '01',
            'singkatan' => 'TKJ',
            'nama' => 'Teknik Komputer dan Jaringan (TKJ)',

            'deskripsi' => 'Konsentrasi keahlian Teknik Komputer dan Jaringan membekali murid dengan keterampilan merakit dan merawat komputer, memasang serta mengonfigurasi jaringan, mengelola server, dan menjaga keamanan jaringan. Murid juga mengembangkan kemampuan pemecahan masalah perangkat keras dan jaringan serta mempelajari perkembangan teknologi seperti cloud computing dan Internet of Things (IoT).',

            'label' => 'KOMPETENSI KUNCI:',

            'kompetensi' => [
                'Perawatan Komputer',
                'Virtualisasi & Cloud Computing',
                'Instalasi & Konfigurasi Jaringan',
                'Manajemen Server',
                'Keamanan Jaringan',
            ],

            'karier' => 'Network Administrator, IT Support, System Engineer, Teknisi Jaringan, dan Cyber Security Technician.',

            'foto' => 'images/program-keahlian/program-tkj.png',
            'foto_alt' => 'Kegiatan praktik Teknik Komputer dan Jaringan',
        ],


        // PROGRAM DKV
        'dkv' => [
            'nomor' => '02',
            'singkatan' => 'DKV',
            'nama' => 'Desain Komunikasi Visual (DKV)',

            'deskripsi' => 'Konsentrasi keahlian Desain Komunikasi Visual mengembangkan kreativitas dan kemampuan murid dalam bidang desain grafis, ilustrasi, tipografi, fotografi, videografi, serta media digital dan interaktif. Pembelajaran diarahkan agar murid mampu menghasilkan karya visual yang inovatif, memahami kebutuhan industri kreatif, dan mempersiapkan diri untuk berkarier atau berwirausaha di bidang desain.',

            'label' => 'KOMPETENSI KUNCI & TECH STACK:',

            'kompetensi' => [
                'Ilustrasi Digital',
                'Desain Grafis & Branding',
                'Fotografi & Videografi',
                'Software Desain Modern',
                'Desain Media Interaktif',
            ],

            'karier' => 'Graphic Designer, Creative Director, Illustrator, Branding Specialist, Content Creator, dan UI/UX Designer.',

            'foto' => 'images/program-keahlian/program-dkv.png',
            'foto_alt' => 'Kegiatan praktik Desain Komunikasi Visual',
        ],


        // PROGRAM ANIMASI
        'animasi' => [
            'nomor' => '03',
            'singkatan' => 'ANIMASI',
            'nama' => 'Animasi',

            'deskripsi' => 'Konsentrasi keahlian Animasi membekali murid dengan kemampuan membuat animasi 2D dan 3D, pemodelan, rendering, ilustrasi digital, serta pengembangan cerita visual. Murid diarahkan untuk mengembangkan kreativitas dan keterampilan teknis sesuai kebutuhan industri animasi, film, gim, dan media kreatif, sekaligus mempersiapkan diri untuk bekerja atau berwirausaha di bidang tersebut.',

            'label' => 'KOMPETENSI KUNCI:',

            'kompetensi' => [
                'Animasi 2D & 3D',
                'Visual Effects (VFX)',
                'Modeling 3D',
                'Ilustrasi Digital',
                'Storytelling Visual',
            ],

            'karier' => 'Animator 2D/3D, Game Artist, 3D Modeler, Motion Graphic Designer, dan VFX Artist.',

            'foto' => 'images/program-keahlian/program-animasi.png',
            'foto_alt' => 'Kegiatan pembelajaran dan praktik Animasi',
        ],


        // PROGRAM PPLG
        'pplg' => [
            'nomor' => '04',
            'singkatan' => 'PPLG',
            'nama' => 'Pengembangan Perangkat Lunak dan Gim (PPLG)',

            'deskripsi' => 'Konsentrasi keahlian Pengembangan Perangkat Lunak dan Gim membekali murid dengan kemampuan mengembangkan perangkat lunak dan aplikasi, mulai dari analisis kebutuhan, perancangan sistem, pemrograman, pengujian, hingga pemeliharaan aplikasi. Murid dipersiapkan untuk bekerja di bidang pengembangan perangkat lunak, menjadi wirausaha di bidang teknologi, maupun melanjutkan pendidikan ke jenjang yang lebih tinggi.',

            'label' => 'KOMPETENSI KUNCI:',

            'kompetensi' => [
                'Pemrograman Desktop',
                'Pengembangan Web & Mobile',
                'Basis Data',
                'Cloud & AI',
                'Analisis & Desain Sistem',
            ],

            'karier' => 'Programmer, Software Developer, Web/Mobile Developer, System Analyst, Database Administrator.',

            'foto' => 'images/program-keahlian/program-pplg.png',
            'foto_alt' => 'Kegiatan praktik Pengembangan Perangkat Lunak dan Gim',
        ],
    ];


    /*
    |--------------------------------------------------------------------------
    | FUNGSI PERGANTIAN PROGRAM
    |--------------------------------------------------------------------------
    */

    public function pilihProgram(string $program): void
    {
        if (array_key_exists($program, $this->programs)) {
            $this->activeProgram = $program;
        }
    }


    /*
    |--------------------------------------------------------------------------
    | TAMPILAN
    |--------------------------------------------------------------------------
    */

    public function render()
    {
        return view('livewire.program-keahlian-page');
    }
}
