<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prestasi Siswa | SMKN 4 Tarakan</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="min-h-screen bg-[#F7F3FC]">
@php
    /* =========================================================
       IDENTITAS SEKOLAH
    ========================================================= */
    $identitas = [
        ['label' => 'NPSN', 'value' => '70007255', 'type' => 'npsn'],
        ['label' => 'Bentuk Pendidikan', 'value' => 'SMK (Sekolah Menengah Kejuruan)', 'type' => 'normal'],
        ['label' => 'Status Sekolah', 'value' => 'Negeri', 'type' => 'normal'],
        [
            'label' => 'Pengelola',
            'value' => 'Dinas Pendidikan dan Kebudayaan Provinsi Kalimantan Utara',
            'type' => 'normal',
        ],
        ['label' => 'Konsentrasi Keahlian', 'value' => 'PPLG · TKJ · DKV · Animasi', 'type' => 'program'],
        ['label' => 'Tanggal Pendirian', 'value' => '27 April 2020', 'type' => 'normal'],
        [
            'label' => 'Alamat Sekolah',
            'value' => 'Jl. Kusuma Bangsa, RT 31 No. 41, Kelurahan Pamusian, Tarakan Tengah, Kota Tarakan, Kalimantan Utara',
            'type' => 'normal',
        ],
    ];

    /* =========================================================
       DATA PRESTASI / INFORMASI
       Data awal diambil dari contoh card Berita yang diberikan.
       Kategori asli (Prestasi/Agenda) dipertahankan.
    ========================================================= */
    $prestasiBySlug = [
        'pengumuman-kelulusan' => [
            'slug' => 'pengumuman-kelulusan',
            'image' => 'images/berita/kelulusan.jpg',
            'alt' => 'Dokumentasi pengumuman kelulusan siswa',
            'fallback_title' => 'Dokumentasi Kelulusan',
            'caption' => 'Dokumentasi informasi kelulusan SMK Negeri 4 Tarakan.',
            'fallback_icon' => 'document',
            'category' => 'Agenda',
            'date' => '23 JANUARI 2027',
            'date_iso' => '2027-01-23',
            'title' => 'Pengumuman Kelulusan Siswa Kelas XII SMKN 4 Tarakan Tahun Pelajaran 2023/2024',
            'excerpt' => 'Pengumuman kelulusan siswa kelas XII SMK Negeri 4 Tarakan Tahun Pelajaran 2023/2024 sebagai informasi resmi bagi peserta didik.',
            'author' => 'Humas SMK Negeri 4 Tarakan',
            'content' => [
                [
                    'heading' => null,
                    'paragraphs' => [
                        'SMK Negeri 4 Tarakan menyampaikan informasi mengenai kelulusan peserta didik kelas XII Tahun Pelajaran 2023/2024. Informasi ini ditujukan kepada seluruh peserta didik dan orang tua/wali sebagai pemberitahuan resmi dari pihak sekolah.',
                        'Peserta didik diharapkan mencermati informasi yang disampaikan melalui kanal komunikasi resmi sekolah serta mengikuti arahan lebih lanjut dari wali kelas dan pihak sekolah.',
                    ],
                ],
                [
                    'heading' => 'Informasi bagi peserta didik',
                    'paragraphs' => [
                        'Untuk memperoleh keterangan lebih lanjut, peserta didik dapat menghubungi wali kelas atau datang ke sekolah melalui prosedur layanan informasi yang berlaku. Pastikan setiap informasi yang diterima bersumber dari kanal resmi SMK Negeri 4 Tarakan.',
                        'Sekolah mengimbau seluruh peserta didik untuk tetap menjaga ketertiban, merayakan pencapaian dengan kegiatan yang positif, serta menjaga nama baik diri sendiri, keluarga, dan almamater.',
                    ],
                ],
                [
                    'heading' => 'Penutup',
                    'paragraphs' => [
                        'Demikian informasi ini disampaikan. Terima kasih atas perhatian dan kerja sama seluruh peserta didik, orang tua/wali, serta seluruh warga sekolah.',
                    ],
                ],
            ],
        ],

        'kerja-sama-telkom-aws' => [
            'slug' => 'kerja-sama-telkom-aws',
            'image' => 'images/berita/kerja-sama.jpg',
            'alt' => 'Kolaborasi SMKN 4 Tarakan dengan Telkom Indonesia dan AWS Academy',
            'fallback_title' => 'Kolaborasi & Kemitraan',
            'caption' => 'Dokumentasi kegiatan kolaborasi dan kemitraan sekolah.',
            'fallback_icon' => 'layers',
            'category' => 'Prestasi',
            'date' => '23 JANUARI 2027',
            'date_iso' => '2027-01-23',
            'title' => 'SMKN 4 Tarakan Gandeng Telkom Indonesia dan AWS Academy untuk Sertifikasi Cloud & Cybersecurity',
            'excerpt' => 'Kolaborasi strategis demi melahirkan 150 tenaga tersertifikasi internasional di bidang rekayasa jaringan awan dan mitigasi peretasan.',
            'author' => 'Humas SMK Negeri 4 Tarakan',
            'content' => [
                [
                    'heading' => null,
                    'paragraphs' => [
                        'SMK Negeri 4 Tarakan mengembangkan kerja sama dengan Telkom Indonesia dan AWS Academy sebagai bagian dari penguatan kompetensi peserta didik di bidang teknologi informasi.',
                        'Kolaborasi ini diarahkan untuk memperluas kesempatan belajar, memperkenalkan kebutuhan industri, serta memberikan wawasan mengenai teknologi cloud dan cybersecurity.',
                    ],
                ],
                [
                    'heading' => 'Penguatan kompetensi digital',
                    'paragraphs' => [
                        'Melalui kegiatan pembelajaran dan pengembangan kompetensi, peserta didik diharapkan memperoleh pengalaman yang relevan dengan perkembangan teknologi dan kebutuhan dunia kerja.',
                        'Program sertifikasi menjadi salah satu upaya untuk mendorong peserta didik meningkatkan kemampuan, membangun portofolio, dan mempersiapkan diri menghadapi peluang karier di bidang teknologi.',
                    ],
                ],
                [
                    'heading' => 'Komitmen sekolah',
                    'paragraphs' => [
                        'SMK Negeri 4 Tarakan terus mendorong kolaborasi dengan berbagai mitra untuk menghadirkan pembelajaran yang relevan, aplikatif, dan berorientasi pada pengembangan kompetensi peserta didik.',
                    ],
                ],
            ],
        ],

        'penerimaan-peserta-didik-baru' => [
            'slug' => 'penerimaan-peserta-didik-baru',
            'image' => 'images/berita/ppdb.jpg',
            'alt' => 'Informasi penerimaan peserta didik baru SMK Negeri 4 Tarakan',
            'fallback_title' => 'Penerimaan Peserta Didik',
            'caption' => 'Informasi penerimaan peserta didik baru SMK Negeri 4 Tarakan.',
            'fallback_icon' => 'calendar',
            'category' => 'Agenda',
            'date' => '23 JANUARI 2027',
            'date_iso' => '2027-01-23',
            'title' => 'Penerimaan Peserta Didik Baru SMK Negeri 4 Tarakan Tahun Ajaran 2023/2024',
            'excerpt' => 'Penerimaan Peserta Didik Baru (PPDB) SMK Negeri 4 Tarakan Tahun Ajaran 2023/2024 menjadi kesempatan bagi calon peserta didik untuk bergabung.',
            'author' => 'Humas SMK Negeri 4 Tarakan',
            'content' => [
                [
                    'heading' => null,
                    'paragraphs' => [
                        'SMK Negeri 4 Tarakan membuka informasi penerimaan peserta didik baru sebagai panduan awal bagi calon peserta didik dan orang tua/wali yang ingin mengetahui proses pendaftaran.',
                        'Calon peserta didik diharapkan memperhatikan informasi mengenai persyaratan, jadwal, jalur pendaftaran, serta tahapan seleksi yang diumumkan melalui kanal resmi sekolah.',
                    ],
                ],
                [
                    'heading' => 'Persiapan pendaftaran',
                    'paragraphs' => [
                        'Sebelum melakukan pendaftaran, calon peserta didik dapat menyiapkan dokumen administrasi yang diperlukan dan memastikan seluruh data yang diberikan telah sesuai.',
                        'Informasi teknis mengenai proses penerimaan dapat dikonfirmasi kepada panitia melalui layanan informasi resmi SMK Negeri 4 Tarakan.',
                    ],
                ],
                [
                    'heading' => 'Informasi lebih lanjut',
                    'paragraphs' => [
                        'Pantau pengumuman resmi sekolah untuk memperoleh pembaruan terkait proses penerimaan peserta didik baru. Sekolah berharap proses ini dapat berjalan tertib dan memberikan informasi yang jelas bagi calon peserta didik.',
                    ],
                ],
            ],
        ],
    ];

    $slug = request()->route('slug');
    $isDetail = !empty($slug);
    $prestasiDetail = $isDetail ? ($prestasiBySlug[$slug] ?? null) : null;
@endphp

<div class="relative isolate min-h-screen w-full overflow-x-hidden bg-[#F7F3FC] text-[#20132F] antialiased"
    style="font-family:'Plus Jakarta Sans Variable','Plus Jakarta Sans',sans-serif;">

    {{-- BACKGROUND MOTIF DAYAK EMAS --}}
    <div aria-hidden="true" class="pointer-events-none absolute inset-0 z-0 opacity-[0.07]"
        style="
            background-image: url('{{ asset('images/banner-motif-dayak-emas-transparan.png') }}');
            background-repeat: repeat-y;
            background-position: center top;
            background-size: 100% auto;
        ">
    </div>

    <main class="relative z-10 mx-auto w-full max-w-[1240px] px-3 py-4 sm:px-5 sm:py-5 xl:px-0">

        {{-- =====================================================
             01. KOP ATAS — MENGIKUTI HALAMAN VISI & MISI
        ====================================================== --}}
        <header
            class="relative isolate min-h-[220px] w-full overflow-hidden rounded-[18px]
                   border border-white/20 px-6 pb-8 pt-9 text-white
                   shadow-[0_12px_22px_rgba(73,16,139,0.20)]
                   sm:px-8 xl:h-[258px] xl:min-h-[258px]
                   xl:px-[40px] xl:pt-[42px] xl:pb-0"
            style="background:linear-gradient(90deg,#2B1745 0%,#49108B 50%,#7E30E1 100%);">

            {{-- ORNAMEN KIRI --}}
            <svg class="pointer-events-none absolute -left-[49px] -top-[30px] -z-10 h-[220px] w-[155px] opacity-30"
                viewBox="0 0 155 220" fill="none" aria-hidden="true">
                <circle cx="53" cy="61" r="91" stroke="#FDC003" stroke-width="3" />
                <circle cx="53" cy="61" r="67" stroke="#FDC003" stroke-width="3" />
                <circle cx="53" cy="61" r="8.5" fill="#FDC003" />
                <path d="M-12 79C30 79 69 101 87 151" stroke="#FDC003" stroke-width="3" />
            </svg>

            {{-- CAHAYA KANAN --}}
            <div class="pointer-events-none absolute -right-16 -top-16 -z-10 h-64 w-64 rounded-full bg-[#FDC003]/10 blur-3xl"></div>

            {{-- ORNAMEN DAYAK KANAN --}}
            <img src="{{ asset('images/ornamen_dayak_kop_bersih.png') }}" alt="" aria-hidden="true"
                class="pointer-events-none absolute right-[200px] top-1/2 hidden h-[250px] w-auto
                       -translate-y-1/2 object-contain opacity-[0.32] sm:block" />

            {{-- KONTEN KOP --}}
            <div class="relative z-10 max-w-[895px] sm:max-w-[calc(100%-170px)]">
                <h1 class="max-w-[895px] text-[30px] font-extrabold leading-[1.15] tracking-[-1.2px] text-white
                           sm:text-[38px] xl:whitespace-nowrap xl:text-[48px] xl:leading-[48px]">
                    Prestasi Siswa SMK Negeri 4 Tarakan
                </h1>

                <p class="mt-[12px] max-w-[790px] text-[13px] font-normal leading-6 text-white/90 sm:text-[14px] xl:text-[15px]">
                    Dokumentasi pencapaian, kolaborasi, dan berbagai kegiatan yang mendukung pengembangan kompetensi
                    murid SMK Negeri 4 Tarakan.
                </p>

                {{-- BADGE IDENTITAS --}}
                <div class="mt-[25px] flex flex-wrap items-center gap-2.5">
                    {{-- NPSN --}}
                    <div class="inline-flex h-[30px] items-center gap-[7px] rounded-full border border-white/20 bg-white/10 px-3 backdrop-blur-sm">
                        <svg class="block h-[14px] w-[14px] shrink-0 text-[#FDC003]" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M12 2.8 14.2 4l2.5-.4 1.2 2.3 2.5 1-.2 2.6 1.4 2.2-1.4 2.2.2 2.6-2.5 1-1.2 2.3-2.5-.4-2.2 1.2-2.2-1.2-2.5.4-1.2-2.3-2.5-1 .2-2.6L2.4 12l1.4-2.2-.2-2.6 2.5-1 1.2-2.3 2.5.4L12 2.8Z" />
                            <path d="m9 12 2 2 4-4" />
                        </svg>
                        <span class="whitespace-nowrap text-[11px] font-semibold leading-none text-white/95">NPSN: 70007255</span>
                    </div>

                    {{-- STATUS SEKOLAH --}}
                    <div class="inline-flex h-[30px] items-center gap-[7px] rounded-full border border-white/20 bg-white/10 px-3 backdrop-blur-sm">
                        <svg class="block h-[14px] w-[14px] shrink-0 text-[#FDC003]" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <circle cx="12" cy="8" r="5.5" />
                            <path d="m9 7.7 2 2 4-4" />
                            <path d="m8.5 12.5-1 8 4.5-2.5 4.5 2.5-1-8" />
                        </svg>
                        <span class="whitespace-nowrap text-[11px] font-semibold leading-none text-white/95">Sekolah Menengah Kejuruan</span>
                    </div>

                    {{-- KONSENTRASI KEAHLIAN --}}
                    <div class="inline-flex h-[30px] items-center gap-[7px] rounded-full border border-white/20 bg-white/[0.10] px-3 backdrop-blur-sm">
                        <svg class="block h-[14px] w-[14px] shrink-0 text-[#67D7F5]" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <rect x="2.5" y="4" width="13.5" height="11" rx="1.5" />
                            <path d="M6.5 19.5h5.5m-2.75-4.5v4.5" />
                            <rect x="17.5" y="7.5" width="4" height="9" rx="1" />
                            <path d="M19 14.2h1" />
                        </svg>
                        <span class="whitespace-nowrap text-[11px] font-semibold leading-none text-white/95">PPLG · TKJ · DKV · Animasi</span>
                    </div>
                </div>
            </div>
        </header>

        {{-- =====================================================
             02. LAYOUT UTAMA — SIDEBAR + KONTEN
        ====================================================== --}}
        <div class="mx-auto mt-[18px] grid w-full grid-cols-1 items-start gap-4
                    lg:grid-cols-[minmax(260px,343px)_minmax(0,1fr)] lg:gap-6
                    xl:w-[1215px] xl:grid-cols-[343px_840px] xl:gap-8">

            {{-- =================================================
                 SIDEBAR KIRI — 3 PANEL
            ================================================== --}}
            <aside class="min-w-0 space-y-4">

                {{-- A. NAVIGASI TENTANG SEKOLAH --}}
                <nav class="h-fit w-full overflow-hidden rounded-[12px] border border-[#E7E0EF] bg-white
                            py-5 pl-5 pr-0 shadow-[0_5px_14px_rgba(73,16,139,0.075)]">
                    <div class="flex items-center gap-3 pr-4">
                        <div class="flex h-8 w-8 shrink-0 items-center justify-center rounded-[14px] text-[#FDC003]"
                            style="background:linear-gradient(135deg,#49108B,#7E30E1);">
                            <svg class="h-[18px] w-[18px]" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M3 10h18L12 4 3 10Z" />
                                <path d="M5 10v9M9 10v9M15 10v9M19 10v9" />
                                <path d="M3 19h18M2 22h20" />
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-[16px] font-extrabold leading-6 text-[#49108B]">Tentang Sekolah</h2>
                            <p class="text-[11px] font-normal leading-[16.5px] text-[#64748B]">Direktori Resmi SMKN 4 Tarakan</p>
                        </div>
                    </div>

                    <div class="mr-4 mt-[14px] h-px bg-[#E7E0EF]"></div>

                    <div class="mt-3 flex flex-col gap-[2px]">
                        {{-- PROFIL SEKOLAH --}}
                        <a href="{{ url('/profil-sekolah') }}"
                            class="flex h-[44px] w-full items-center gap-3 rounded-l-[8px] px-[14px] py-[10px]
                                   text-[#49108B] transition hover:bg-[#F7F3FC]">
                            <svg class="h-[16px] w-[17px] shrink-0 text-[#7E30E1]" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <rect x="4" y="4" width="16" height="16" rx="2" />
                                <circle cx="10" cy="10" r="2" />
                                <path d="M7.2 16c.6-2 1.8-3 3.3-3s2.7 1 3.3 3M16 9h2" />
                            </svg>
                            <span class="flex-1 text-[14px] font-semibold leading-6">Profil Sekolah</span>
                            <svg class="mr-3 h-2 w-[5px] shrink-0 text-[#7E30E1]" viewBox="0 0 5 8" fill="none" aria-hidden="true">
                                <path d="m1 1 3 3-3 3" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" />
                            </svg>
                        </a>

                        {{-- VISI & MISI --}}
                        <a href="{{ url('/visi-misi') }}"
                            class="flex h-[44px] w-full items-center gap-3 rounded-l-[8px] px-[14px] py-[10px]
                                   text-[#49108B] transition hover:bg-[#F7F3FC]">
                            <svg class="h-[16px] w-[14px] shrink-0 text-[#7E30E1]" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M5 3v18" />
                                <path d="M5 4h14l-4 4 4 4H5" />
                            </svg>
                            <span class="flex-1 text-[14px] font-semibold leading-6">Visi &amp; Misi</span>
                            <svg class="mr-3 h-2 w-[5px] shrink-0 text-[#7E30E1]" viewBox="0 0 5 8" fill="none" aria-hidden="true">
                                <path d="m1 1 3 3-3 3" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" />
                            </svg>
                        </a>

                        {{-- MAKNA LOGO --}}
                        <a href="{{ url('/makna-logo') }}"
                            class="flex h-[44px] w-full items-center gap-3 rounded-l-[8px] px-[14px] py-[10px]
                                   text-[#49108B] transition hover:bg-[#F7F3FC]">
                            <svg class="h-[16px] w-[17px] shrink-0 text-[#7E30E1]" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M12 3 14.5 8l6 .8-4.4 4.2 1.1 6-5.2-2.9-5.2 2.9 1.1-6-4.4-4.2 6-.8L12 3Z" />
                            </svg>
                            <span class="flex-1 text-[14px] font-semibold leading-6">Makna Logo</span>
                            <svg class="mr-3 h-2 w-[5px] shrink-0 text-[#7E30E1]" viewBox="0 0 5 8" fill="none" aria-hidden="true">
                                <path d="m1 1 3 3-3 3" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" />
                            </svg>
                        </a>

                        {{-- PROGRAM KEAHLIAN --}}
                        <a href="{{ url('/program-keahlian') }}"
                            class="flex h-[44px] w-full items-center gap-3 rounded-l-[8px] px-[14px] py-[10px]
                                   text-[#49108B] transition hover:bg-[#F7F3FC]">
                            <svg class="h-[16px] w-[17px] shrink-0 text-[#7E30E1]" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <rect x="3" y="4" width="18" height="14" rx="2" />
                                <path d="M2 21h20l-2-3H4l-2 3Z" />
                            </svg>
                            <span class="flex-1 text-[14px] font-semibold leading-6">Program Keahlian</span>
                            <svg class="mr-3 h-2 w-[5px] shrink-0 text-[#7E30E1]" viewBox="0 0 5 8" fill="none" aria-hidden="true">
                                <path d="m1 1 3 3-3 3" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" />
                            </svg>
                        </a>

                        {{-- PRESTASI SISWA AKTIF --}}
                        <a href="{{ url('/prestasi-siswa') }}" aria-current="page"
                            class="flex h-[48px] w-full items-center gap-3 rounded-[12px] px-3 py-[10px] text-white
                                   shadow-[0_4px_10px_rgba(73,16,139,0.25)]"
                            style="background:linear-gradient(100deg,#49108B,#7E30E1);">
                            <svg class="h-[16px] w-[17px] shrink-0 text-[#FDC003]" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M8 4h8v5a4 4 0 0 1-8 0V4Z" />
                                <path d="M8 6H4v2a4 4 0 0 0 4 4M16 6h4v2a4 4 0 0 1-4 4" />
                                <path d="M12 13v5m-4 3h8" />
                            </svg>
                            <span class="flex-1 text-[14px] font-bold leading-6">Prestasi Siswa</span>
                        </a>
                    </div>
                </nav>

                {{-- B. PILAR BUDAYA DAN POTENSI LOKAL --}}
                <section id="profil-sekolah"
                    class="relative min-h-[256.5px] w-full overflow-hidden rounded-[20px]
                           border border-[#E7E0EF] bg-white px-4 pb-4 pt-6
                           shadow-[0_5px_14px_rgba(73,16,139,0.055)]">
                    <div class="flex items-center gap-3">
                        <div class="flex h-8 w-8 shrink-0 items-center justify-center rounded-[14px]"
                            style="background:linear-gradient(135deg,#FDC003,#EAB308);">
                            <svg class="h-[19px] w-[19px]" viewBox="0 0 24 24" fill="#49108B" aria-hidden="true">
                                <circle cx="12" cy="5" r="3.1" />
                                <circle cx="18.2" cy="9.5" r="3.1" />
                                <circle cx="15.8" cy="16.2" r="3.1" />
                                <circle cx="8.2" cy="16.2" r="3.1" />
                                <circle cx="5.8" cy="9.5" r="3.1" />
                                <circle cx="12" cy="11" r="2.2" fill="#FDC003" />
                            </svg>
                        </div>
                        <div class="min-w-0">
                            <h2 class="text-[14px] font-extrabold leading-5 text-[#49108B]">Pilar Budaya dan Potensi Lokal</h2>
                            <p class="mt-0.5 text-[10px] font-bold leading-[15px] text-[#7E30E1]">BUDAYA NUSANTARA &amp; KREATIVITAS DIGITAL</p>
                        </div>
                    </div>

                    <div class="my-3 h-[2px] w-full"
                        style="background:linear-gradient(90deg,#49108B 0%,#7E30E1 32%,#FDC003 65%,rgba(253,192,3,0) 100%);"></div>

                    <p class="text-[12px] font-normal leading-[19.5px] text-[#64748B]">
                        SMK Negeri 4 Tarakan tumbuh di tengah keberagaman budaya masyarakat Tarakan, Kalimantan Utara.
                        Potensi budaya lokal yang dipadukan dengan kreativitas dan teknologi digital menjadi inspirasi
                        bagi murid untuk menghasilkan karya inovatif tanpa melupakan nilai-nilai budaya bangsa.
                    </p>

                    <div class="relative z-10 mt-3 flex items-center gap-2">
                        <svg class="h-[14px] w-[12px] shrink-0 text-[#7E30E1]" viewBox="0 0 16 20" fill="none"
                            stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M8 1 14 3.5v6c0 4.5-2.5 7.2-6 9.5-3.5-2.3-6-5-6-9.5v-6L8 1Z" />
                        </svg>
                        <span class="text-[11px] font-bold leading-[16.5px] text-[#49108B]">Berkarakter, Berbudaya, Unggul dalam IT</span>
                    </div>

                    {{-- WATERMARK ORNAMEN DAYAK --}}
                    <img src="{{ asset('images/ornamen_dayak_vektor.svg') }}" alt="" aria-hidden="true"
                        class="pointer-events-none absolute bottom-[-50px] right-[-3px] h-[185px] w-[135px]
                               select-none object-contain opacity-[0.12]" />
                </section>

                {{-- C. IDENTITAS SATUAN --}}
                <section class="min-h-[470px] w-full rounded-[20px] border border-[#E7E0EF] bg-white
                               px-4 pb-4 pt-7 shadow-[0_5px_14px_rgba(73,16,139,0.055)]">
                    <div class="flex items-center justify-between gap-2">
                        <h2 class="flex items-center gap-2 text-[14px] font-extrabold leading-5 text-[#49108B]">
                            <svg class="h-[17px] w-[17px] shrink-0 text-[#7E30E1]" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                <rect x="3" y="5" width="18" height="14" rx="2" />
                                <circle cx="9" cy="10" r="2" />
                                <path d="M5.7 16c.6-1.8 1.7-2.7 3.3-2.7s2.7.9 3.3 2.7M15 9h3M15 12h3M15 15h3" />
                            </svg>
                            Identitas Satuan
                        </h2>

                        {{-- AKREDITASI --}}
                        <span class="inline-flex h-[22.5px] shrink-0 items-center justify-center gap-[6px] rounded-[10px]
                                     border border-[#FDC003] bg-[#FDC003]/20 px-2">
                            <svg class="h-[11px] w-[11px] shrink-0 text-[#854D0E]" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                <path d="m12 2 3.1 6.3 6.9 1-5 4.9 1.2 6.8-6.2-3.3-6.2 3.3L7 14.2 2 9.3l6.9-1L12 2Z" />
                            </svg>
                            <span class="whitespace-nowrap text-[11px] font-extrabold leading-[16.5px] text-[#854D0E]">Akreditasi B</span>
                        </span>
                    </div>

                    <div class="mt-3 space-y-[6px]">
                        @foreach ($identitas as $item)
                            <div class="grid grid-cols-[minmax(0,0.85fr)_minmax(0,1.15fr)] items-center gap-2
                                        rounded-[24px] border border-[#E7E0EF] bg-[#F7F3FC] px-3 py-2.5">
                                <span class="text-[12px] font-normal leading-[1.6] text-[#64748B]">{{ $item['label'] }}</span>
                                <div class="flex min-w-0 justify-end">
                                    @if ($item['type'] === 'npsn')
                                        <span class="text-right text-[13px] font-bold leading-[1.5] text-[#7E30E1]">{{ $item['value'] }}</span>
                                    @elseif ($item['type'] === 'program')
                                        <span class="inline-flex max-w-full items-center justify-center rounded-[7px]
                                                     border border-[#BAE6FD] bg-[#F0F9FF] px-2 py-[3px]
                                                     text-center text-[11px] font-bold leading-4 text-[#7E22CE]">
                                            {{ $item['value'] }}
                                        </span>
                                    @else
                                        <span class="max-w-full break-words text-right text-[12px] font-bold leading-[1.5] text-[#49108B]">
                                            {{ $item['value'] }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                </section>
            </aside>

            {{-- =================================================
                 KOLOM KANAN — DAFTAR / DETAIL PRESTASI
            ================================================== --}}
            <div class="min-w-0">

                @if (!$isDetail)
                    {{-- ================= DAFTAR PRESTASI ================= --}}
                    <section class="w-full overflow-hidden rounded-[12px] border border-[#E7E0EF] bg-white
                                    px-5 pb-7 pt-6 shadow-[0_5px_15px_rgba(73,16,139,0.065)]
                                    sm:px-7 sm:pt-7 xl:px-8 xl:pt-8">
                        <div class="mb-6">
                            <span class="inline-flex min-h-[30px] items-center rounded-full bg-[#7E30E1]/10 px-3 py-1">
                                <span class="text-[12px] font-bold leading-5 tracking-[0.8px] text-[#49108B]">DOKUMENTASI SEKOLAH</span>
                            </span>
                            <h2 class="mt-3 text-[21px] font-extrabold leading-tight text-[#49108B] sm:text-[25px]">
                                Prestasi &amp; Kegiatan Siswa
                            </h2>
                            <p class="mt-2 max-w-[720px] text-[13px] leading-[21px] text-[#64748B] sm:text-[14px]">
                                Informasi pencapaian, agenda, dan kegiatan SMK Negeri 4 Tarakan. Tekan salah satu kartu
                                untuk membaca informasi selengkapnya.
                            </p>
                        </div>

                        {{-- 2 KOLOM, BARIS BERTAMBAH KE BAWAH --}}
                        <div class="grid grid-cols-1 items-stretch gap-4 sm:grid-cols-2 xl:gap-5">
                            @foreach ($prestasiBySlug as $item)
                                <a href="{{ route('prestasi-siswa.detail', ['slug' => $item['slug']]) }}"
                                    aria-label="Lihat detail: {{ $item['title'] }}"
                                    class="group flex min-w-0 flex-col overflow-hidden rounded-[12px]
                                           border border-[#E7E0EF] bg-white shadow-[0_3px_12px_rgba(73,16,139,0.055)]
                                           transition duration-300 hover:-translate-y-1 hover:border-[#B99AD9]
                                           hover:shadow-[0_14px_32px_rgba(73,16,139,0.14)]
                                           focus:outline-none focus-visible:ring-4 focus-visible:ring-[#7E30E1]/25">

                                    {{-- GAMBAR KARTU --}}
                                    <div class="relative aspect-[16/10] w-full overflow-hidden bg-gradient-to-br from-[#EDE3F8] to-[#DCCAF0]">
                                        <img src="{{ asset($item['image']) }}" alt="{{ $item['alt'] }}" loading="lazy"
                                            onerror="this.onerror=null;this.classList.add('hidden');this.nextElementSibling.classList.remove('hidden');this.nextElementSibling.style.display='flex';"
                                            class="h-full w-full object-cover transition duration-500 group-hover:scale-[1.035]">

                                        {{-- TAMPILAN PENGGANTI JIKA GAMBAR BELUM ADA --}}
                                        <div class="absolute inset-0 hidden items-center justify-center overflow-hidden
                                                    bg-gradient-to-br from-[#F8F5FB] via-[#EFE6F8] to-[#E2D2F1] p-5 text-center">
                                            <div class="pointer-events-none absolute -right-10 -top-12 h-36 w-36 rounded-full border-[18px] border-[#7E30E1]/10"></div>
                                            <div class="pointer-events-none absolute -bottom-16 -left-10 h-40 w-40 rounded-full border-[20px] border-[#49108B]/10"></div>
                                            <div class="relative flex max-w-[260px] flex-col items-center">
                                                <span class="mb-3 flex h-16 w-16 items-center justify-center rounded-2xl
                                                             border border-[#DCCAF0] bg-white/90 text-[#6B2DB3] shadow-sm sm:h-[76px] sm:w-[76px]">
                                                    <svg class="h-8 w-8 sm:h-10 sm:w-10" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                                        @if ($item['fallback_icon'] === 'document')
                                                            <path d="M6 3.75h8l4 4V20a.75.75 0 0 1-.75.75h-10.5A.75.75 0 0 1 6 20V3.75Z" />
                                                            <path d="M14 3.75v4.5h4M9 12h6M9 15.5h6" />
                                                        @elseif ($item['fallback_icon'] === 'layers')
                                                            <path d="M12 3 3.75 7.5 12 12l8.25-4.5L12 3Z" />
                                                            <path d="m3.75 12 8.25 4.5 8.25-4.5M3.75 16.5 12 21l8.25-4.5" />
                                                        @else
                                                            <path d="M4 5.5h16v13H4z" />
                                                            <path d="M8 9h8M8 12.5h8M8 16h5" />
                                                            <path d="M8 3v5M16 3v5" />
                                                        @endif
                                                    </svg>
                                                </span>
                                                <span class="text-xs font-extrabold uppercase tracking-[0.18em] text-[#7E30E1] sm:text-sm">
                                                    SMK Negeri 4 Tarakan
                                                </span>
                                                <span class="mt-1 text-base font-black leading-snug text-[#2B1745] sm:text-lg">
                                                    {{ $item['fallback_title'] }}
                                                </span>
                                                <span class="mt-2 text-xs font-medium text-slate-500 sm:text-sm">
                                                    Dokumentasi dan informasi sekolah
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- ISI KARTU --}}
                                    <div class="flex flex-1 flex-col p-4 sm:p-5">
                                        <div class="mb-3 flex flex-wrap items-center justify-between gap-x-2 gap-y-2">
                                            <span class="inline-flex w-fit items-center rounded-full border border-[#DCCAF0]
                                                         bg-[#F3ECFA] px-3 py-1 text-[11px] font-extrabold leading-5 text-[#49108B] sm:text-xs">
                                                {{ $item['category'] }}
                                            </span>
                                            <span class="inline-flex min-w-0 items-center gap-1.5 text-[10px] font-semibold leading-5 text-slate-500 sm:text-[11px]">
                                                <svg class="h-3.5 w-3.5 shrink-0 text-[#7E30E1]" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                                    <rect x="3" y="5" width="18" height="16" rx="2" />
                                                    <path d="M16 3v4M8 3v4M3 10h18" />
                                                </svg>
                                                <time datetime="{{ $item['date_iso'] }}" class="whitespace-nowrap">{{ $item['date'] }}</time>
                                            </span>
                                        </div>

                                        <h3 class="break-words text-[16px] font-extrabold leading-[1.4] text-[#20132F]
                                                   transition-colors duration-200 group-hover:text-[#6B2DB3] sm:text-[18px]">
                                            {{ $item['title'] }}
                                        </h3>

                                        <p class="mt-2.5 break-words text-justify text-[12px] leading-[20px] text-slate-600 sm:text-[13px] sm:leading-[22px]">
                                            {{ $item['excerpt'] }}
                                        </p>

                                        <div class="mt-auto border-t border-[#E7E0EF] pt-3.5">
                                            <span class="inline-flex min-h-9 items-center gap-2 text-[13px] font-extrabold leading-5 text-[#49108B]
                                                         transition-colors duration-200 group-hover:text-[#7E30E1]">
                                                Lihat Detail
                                                <svg class="h-4 w-4 shrink-0 transition-transform duration-200 group-hover:translate-x-1"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                                    <path d="M5 12h14M13 6l6 6-6 6" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </section>

                @elseif ($prestasiDetail)
                    {{-- ================= DETAIL PRESTASI ================= --}}
                    <div class="mb-4 flex w-full items-center sm:mb-5">
                        <a href="{{ url('/prestasi-siswa') }}" aria-label="Kembali ke daftar prestasi"
                            class="group inline-flex min-h-11 max-w-full items-center justify-center gap-2 rounded-lg
                                   border border-[#E7DDF1] bg-white px-4 py-2.5 text-sm font-bold leading-5 text-[#49108B]
                                   shadow-sm transition duration-200 hover:border-[#CDB5E5] hover:bg-[#FBF9FE]
                                   focus:outline-none focus-visible:ring-4 focus-visible:ring-[#7E30E1]/20 sm:min-h-12 sm:px-5 sm:text-base">
                            <svg class="h-5 w-5 shrink-0 transition-transform duration-200 group-hover:-translate-x-0.5"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9"
                                stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="m15 18-6-6 6-6M9 12h12" />
                            </svg>
                            <span class="whitespace-normal">Kembali ke Daftar Prestasi</span>
                        </a>
                    </div>

                    <article class="min-w-0 overflow-hidden rounded-[12px] border border-[#E7E0EF] bg-white
                                    shadow-[0_5px_15px_rgba(73,16,139,0.065)]">
                        <div class="p-5 sm:p-7 lg:p-8 xl:p-9">
                            <div class="mb-4 flex flex-wrap items-center gap-x-4 gap-y-2 sm:mb-5">
                                <span class="inline-flex w-fit items-center rounded-full border border-[#DCCAF0]
                                             bg-[#F3ECFA] px-3.5 py-1.5 text-xs font-extrabold leading-5 text-[#49108B] sm:text-sm">
                                    {{ $prestasiDetail['category'] }}
                                </span>
                                <span class="inline-flex min-w-0 items-center gap-1.5 text-xs font-semibold leading-5 text-slate-500 sm:text-sm">
                                    <svg class="h-4 w-4 shrink-0 text-[#7E30E1]" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <rect x="3" y="5" width="18" height="16" rx="2" />
                                        <path d="M16 3v4M8 3v4M3 10h18" />
                                    </svg>
                                    <time datetime="{{ $prestasiDetail['date_iso'] }}">{{ $prestasiDetail['date'] }}</time>
                                </span>
                            </div>

                            <h2 class="break-words text-2xl font-black leading-[1.2] tracking-tight text-[#20132F]
                                       sm:text-3xl sm:leading-[1.25] lg:text-4xl">
                                {{ $prestasiDetail['title'] }}
                            </h2>

                            <p class="mt-4 break-words text-justify text-base leading-7 text-slate-600 sm:mt-5 sm:text-lg sm:leading-8">
                                {{ $prestasiDetail['excerpt'] }}
                            </p>

                            <div class="mt-5 flex flex-wrap items-center gap-3 border-y border-[#EEE8F4] py-4 sm:mt-6 sm:py-5">
                                <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full
                                             border border-[#DCCAF0] bg-[#F3ECFA] text-[#6B2DB3]">
                                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <circle cx="12" cy="8" r="3.5" />
                                        <path d="M5 20a7 7 0 0 1 14 0" />
                                    </svg>
                                </span>
                                <div class="min-w-0">
                                    <p class="text-xs font-medium text-slate-500 sm:text-sm">Dipublikasikan oleh</p>
                                    <p class="break-words text-sm font-extrabold text-[#2B1745] sm:text-base">
                                        {{ $prestasiDetail['author'] }}
                                    </p>
                                </div>
                            </div>

                            {{-- GAMBAR DETAIL --}}
                            <figure class="mt-5 sm:mt-7">
                                <div class="group relative aspect-[16/9] w-full overflow-hidden rounded-xl border border-[#E7E0EF]
                                            bg-gradient-to-br from-[#EDE3F8] to-[#DCCAF0] sm:rounded-2xl">
                                    <img src="{{ asset($prestasiDetail['image']) }}" alt="{{ $prestasiDetail['alt'] }}" loading="eager"
                                        onerror="this.onerror=null;this.classList.add('hidden');this.nextElementSibling.classList.remove('hidden');this.nextElementSibling.style.display='flex';"
                                        class="h-full w-full object-cover transition duration-500 group-hover:scale-[1.015]">
                                    <div class="absolute inset-0 hidden items-center justify-center overflow-hidden
                                                bg-gradient-to-br from-[#F8F5FB] via-[#EFE6F8] to-[#E2D2F1] p-5 text-center">
                                        <div class="pointer-events-none absolute -right-10 -top-12 h-36 w-36 rounded-full border-[18px] border-[#7E30E1]/10"></div>
                                        <div class="pointer-events-none absolute -bottom-16 -left-10 h-40 w-40 rounded-full border-[20px] border-[#49108B]/10"></div>
                                        <div class="relative flex max-w-[280px] flex-col items-center">
                                            <span class="mb-3 flex h-16 w-16 items-center justify-center rounded-2xl
                                                         border border-[#DCCAF0] bg-white/90 text-[#6B2DB3] shadow-sm sm:h-[76px] sm:w-[76px]">
                                                <svg class="h-8 w-8 sm:h-10 sm:w-10" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                                    <path d="M6 3.75h8l4 4V20a.75.75 0 0 1-.75.75h-10.5A.75.75 0 0 1 6 20V3.75Z" />
                                                    <path d="M14 3.75v4.5h4M9 12h6M9 15.5h6" />
                                                </svg>
                                            </span>
                                            <span class="text-xs font-extrabold uppercase tracking-[0.18em] text-[#7E30E1] sm:text-sm">
                                                SMK Negeri 4 Tarakan
                                            </span>
                                            <span class="mt-1 text-base font-black leading-snug text-[#2B1745] sm:text-lg">
                                                {{ $prestasiDetail['fallback_title'] }}
                                            </span>
                                            <span class="mt-2 text-xs font-medium text-slate-500 sm:text-sm">Dokumentasi dan informasi sekolah</span>
                                        </div>
                                    </div>
                                </div>
                                <figcaption class="mt-2.5 text-center text-xs leading-5 text-slate-500 sm:text-sm">
                                    {{ $prestasiDetail['caption'] }}
                                </figcaption>
                            </figure>

                            {{-- ISI DETAIL --}}
                            <div class="mt-7 space-y-6 sm:mt-9 sm:space-y-7">
                                @foreach ($prestasiDetail['content'] as $section)
                                    <section class="min-w-0">
                                        @if (!empty($section['heading']))
                                            <h3 class="mb-3 text-xl font-extrabold leading-snug text-[#2B1745] sm:mb-4 sm:text-2xl">
                                                {{ $section['heading'] }}
                                            </h3>
                                        @endif
                                        <div class="space-y-4 text-base leading-8 text-slate-700 sm:text-lg sm:leading-9">
                                            @foreach ($section['paragraphs'] as $paragraph)
                                                <p class="break-words text-justify">{{ $paragraph }}</p>
                                            @endforeach
                                        </div>
                                    </section>
                                @endforeach
                            </div>

                            <div class="mt-8 border-t border-[#EEE8F4] pt-5">
                                <a href="{{ url('/prestasi-siswa') }}"
                                    class="inline-flex min-h-10 items-center gap-2 rounded-xl bg-[#49108B] px-5 py-2.5
                                           text-sm font-extrabold text-white transition-colors hover:bg-[#6B2DB3]
                                           focus:outline-none focus-visible:ring-4 focus-visible:ring-[#7E30E1]/25 sm:text-base">
                                    Kembali ke Prestasi Siswa
                                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <path d="M19 12H5m6 6-6-6 6-6" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </article>

                @else
                    {{-- SLUG TIDAK DITEMUKAN --}}
                    <section class="rounded-[12px] border border-[#E7E0EF] bg-white px-6 py-12 text-center shadow-sm">
                        <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-[#F3ECFA] text-[#6B2DB3]">
                            <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <circle cx="12" cy="12" r="9" />
                                <path d="M12 7v5m0 4h.01" />
                            </svg>
                        </div>
                        <h2 class="mt-4 text-xl font-extrabold text-[#49108B]">Informasi tidak ditemukan</h2>
                        <p class="mt-2 text-sm leading-6 text-slate-600">Detail prestasi atau kegiatan yang dipilih tidak tersedia.</p>
                        <a href="{{ url('/prestasi-siswa') }}"
                            class="mt-5 inline-flex items-center justify-center rounded-xl bg-[#49108B] px-5 py-2.5
                                   text-sm font-extrabold text-white transition hover:bg-[#6B2DB3]">
                            Kembali ke Prestasi Siswa
                        </a>
                    </section>
                @endif
            </div>
        </div>
    </main>
</div>

    @livewireScripts
</body>
</html>
