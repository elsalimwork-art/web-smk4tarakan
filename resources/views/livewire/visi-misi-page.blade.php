@php
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
            'value' =>
                'Jl. Kusuma Bangsa, RT 31 No. 41, Kelurahan Pamusian, Tarakan Tengah, Kota Tarakan, Kalimantan Utara',
            'type' => 'normal',
        ],
    ];

    $nilaiUtama = [
        [
            'icon' => 'professional',
            'judul' => 'Profesionalisme',
            'deskripsi' =>
                'Menjunjung tinggi kedisiplinan, tanggung jawab, integritas, dan standar kerja dalam setiap kegiatan pembelajaran maupun pekerjaan.',
        ],
        [
            'icon' => 'innovation',
            'judul' => 'Inovatif',
            'deskripsi' =>
                'Mengembangkan kreativitas dan memanfaatkan teknologi untuk menghasilkan ide, karya, serta solusi yang bermanfaat.',
        ],
        [
            'icon' => 'national',
            'judul' => 'Nasionalis',
            'deskripsi' =>
                'Menumbuhkan rasa cinta tanah air, menghargai keberagaman, dan menjaga budaya bangsa serta kearifan lokal.',
        ],
    ];

    $nilaiTambahan = [
        [
            'icon' => 'responsive',
            'judul' => 'Tanggap',
            'deskripsi' =>
                'Responsif terhadap permasalahan, kebutuhan masyarakat, perkembangan teknologi, serta perubahan kebutuhan industri.',
        ],
        [
            'icon' => 'independent',
            'judul' => 'Mandiri',
            'deskripsi' =>
                'Memiliki inisiatif, mampu mengelola waktu, bertanggung jawab atas tugas, dan menyelesaikan pekerjaan tanpa selalu bergantung pada orang lain.',
        ],
        [
            'icon' => 'adaptive',
            'judul' => 'Adaptif',
            'deskripsi' =>
                'Mampu menyesuaikan diri dengan perkembangan teknologi informasi, metode pembelajaran, serta dinamika dunia kerja.',
        ],
        [
            'icon' => 'religious',
            'judul' => 'Religius',
            'deskripsi' =>
                'Berlandaskan keimanan dan ketakwaan, menjunjung akhlak mulia, kejujuran, serta sikap saling menghormati.',
        ],
    ];

    $implementasi = [
        [
            'nomor' => '01',
            'judul' => 'Penyelarasan Kurikulum Berbasis Kebutuhan Industri Digital',
            'deskripsi' =>
                'Mengembangkan pembelajaran yang relevan dengan kebutuhan industri melalui materi terkini, studi kasus, praktik, dan proyek sesuai kompetensi RPL, TKJ, DKV, serta Animasi.',
            'tag' => ['Industry-Based Learning', 'Kurikulum Digital', 'Project-Based Learning'],
        ],
        [
            'nomor' => '02',
            'judul' => 'Pengembangan Sarana Prasarana dan Teaching Factory',
            'deskripsi' =>
                'Meningkatkan pemanfaatan laboratorium komputer, perangkat jaringan, perangkat desain, dan perangkat lunak pendukung untuk menciptakan pengalaman belajar berbasis praktik dan simulasi pekerjaan nyata.',
            'tag' => ['Smart Learning Lab', 'Teaching Factory', 'Digital Workspace'],
        ],
        [
            'nomor' => '03',
            'judul' => 'Pembinaan Karakter, Etika Profesi, dan Technopreneurship',
            'deskripsi' =>
                'Membentuk murid yang jujur, disiplin, mandiri, mampu bekerja sama, dan memahami etika digital sekaligus mendorong pengembangan produk teknologi dan karya kreatif yang memiliki nilai ekonomi.',
            'tag' => ['Integritas Digital', 'Teamwork', 'Startup Development'],
        ],
        [
            'nomor' => '04',
            'judul' => 'Peningkatan Kualitas Pendidik dan Kompetensi Profesional',
            'deskripsi' =>
                'Mendorong guru mengikuti pelatihan, berbagi praktik baik, memperbarui penguasaan teknologi, serta mengembangkan kompetensi dan sertifikasi yang relevan dengan bidang keahlian masing-masing.',
            'tag' => ['Teacher Upskilling', 'Sertifikasi Kompetensi', 'Knowledge Sharing'],
        ],
        [
            'nomor' => '05',
            'judul' => 'Perluasan Kemitraan Strategis dengan Dunia Usaha dan Industri',
            'deskripsi' =>
                'Memperkuat kerja sama melalui praktik kerja lapangan, kunjungan industri, kelas praktisi, proyek kolaboratif, dan pengembangan portofolio untuk meningkatkan kesiapan kerja lulusan.',
            'tag' => ['Mitra DUDI', 'Industry Collaboration', 'Career Readiness'],
        ],
    ];
@endphp

<div class="min-h-screen w-full overflow-x-hidden bg-[#FCF7FF] text-[#3B0764]"
    style="font-family:'Plus Jakarta Sans Variable','Plus Jakarta Sans',sans-serif;">

    <main class="mx-auto w-full max-w-[1240px] px-3 py-4 sm:px-5 sm:py-5 xl:px-0">

        {{-- 01. KOP ATAS: MENGIKUTI DESAIN PROGRAM KEAHLIAN --}}
        {{-- =====================================================

             01. KOP ATAS

        ====================================================== --}}

        <header
            class="relative isolate min-h-[220px] w-full overflow-hidden

                   rounded-[18px] border border-[#D8B4FE]/30

                   px-6 pb-8 pt-9 text-white

                   shadow-[0_12px_22px_rgba(74,14,78,0.18)]

                   sm:px-8 xl:h-[258px] xl:min-h-[258px]

                   xl:px-[40px] xl:pt-[42px] xl:pb-0"
            style="background:linear-gradient(90deg,#4A0E4E 0%,#7E22CE 50%,#C026D3 100%);">

            {{-- ORNAMEN KIRI --}}

            <svg class="pointer-events-none absolute -left-[49px] -top-[30px]

                        -z-10 h-[220px] w-[155px] opacity-30"
                viewBox="0 0 155 220" fill="none" aria-hidden="true">

                <circle cx="53" cy="61" r="91" stroke="#D8B4FE" stroke-width="3" />

                <circle cx="53" cy="61" r="67" stroke="#D8B4FE" stroke-width="3" />

                <circle cx="53" cy="61" r="8.5" fill="#D8B4FE" />

                <path d="M-12 79C30 79 69 101 87 151" stroke="#D8B4FE" stroke-width="3" />

            </svg>

            {{-- CAHAYA KANAN --}}

            <div
                class="absolute -right-16 -top-16 -z-10 h-64 w-64

                        rounded-full bg-white/[0.07] blur-3xl">

            </div>

            {{-- ORNAMEN GEOMETRIS KANAN --}}

            {{-- ORNAMEN DAYAK KANAN --}}
            {{-- ORNAMEN DAYAK KANAN --}}
            <img src="{{ asset('images/ornamen_dayak_kop_bersih.png') }}" alt="" aria-hidden="true"
                class="pointer-events-none absolute right-[100px] top-1/2
           hidden h-[250px] w-auto
           -translate-y-1/2 object-contain
           opacity-[0.32] sm:block" />

            <div class="relative z-10 max-w-[895px] sm:max-w-[calc(100%-170px)]">

                <h1
                    class="max-w-[895px] text-[30px] font-extrabold

                           leading-[1.15] tracking-[-1.2px] text-white

                           sm:text-[38px] xl:whitespace-nowrap

                           xl:text-[48px] xl:leading-[48px]">

                    Visi &amp; Misi SMK Negeri 4 Tarakan

                </h1>

                <p
                    class="mt-[12px] max-w-[790px] text-[13px]

                          font-normal leading-6 text-[#F3E8FF]

                          sm:text-[14px] xl:text-[15px]">
                    Mengenal visi dan misi SMKN 4 Tarakan dalam membentuk
                    murid berkarakter, berprestasi, dan unggul dalam
                    teknologi informasi.
                </p>

                {{-- BADGE IDENTITAS --}}

                <div class="mt-[25px] flex flex-wrap items-center gap-2.5">

                    {{-- NPSN --}}

                    <div
                        class="inline-flex h-[30px] items-center gap-[7px]

                                rounded-full border border-white/20

                                bg-white/[0.10] px-3 backdrop-blur-sm">

                        <svg class="block h-[14px] w-[14px] shrink-0 text-[#FACC15]" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"
                            aria-hidden="true">

                            <path
                                d="M12 2.8 14.2 4l2.5-.4 1.2 2.3 2.5 1-.2 2.6 1.4 2.2-1.4 2.2.2 2.6-2.5 1-1.2 2.3-2.5-.4-2.2 1.2-2.2-1.2-2.5.4-1.2-2.3-2.5-1 .2-2.6L2.4 12l1.4-2.2-.2-2.6 2.5-1 1.2-2.3 2.5.4L12 2.8Z" />

                            <path d="m9 12 2 2 4-4" />

                        </svg>

                        <span class="whitespace-nowrap text-[11px] font-semibold leading-none text-white/95">

                            NPSN: 70007255

                        </span>

                    </div>

                    {{-- STATUS SEKOLAH --}}

                    <div
                        class="inline-flex h-[30px] items-center gap-[7px]

                                rounded-full border border-white/20

                                bg-white/[0.10] px-3 backdrop-blur-sm">

                        <svg class="block h-[14px] w-[14px] shrink-0 text-[#FACC15]" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"
                            aria-hidden="true">

                            <circle cx="12" cy="8" r="5.5" />

                            <path d="m9 7.7 2 2 4-4" />

                            <path d="m8.5 12.5-1 8 4.5-2.5 4.5 2.5-1-8" />

                        </svg>

                        <span class="whitespace-nowrap text-[11px] font-semibold leading-none text-white/95">

                            Sekolah Menengah Kejuruan

                        </span>

                    </div>

                    {{-- KONSENTRASI KEAHLIAN --}}

                    <div
                        class="inline-flex h-[30px] items-center gap-[7px]

                                rounded-full border border-white/20

                                bg-white/[0.10] px-3 backdrop-blur-sm">

                        <svg class="block h-[14px] w-[14px] shrink-0 text-[#67D7F5]" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"
                            aria-hidden="true">

                            <rect x="2.5" y="4" width="13.5" height="11" rx="1.5" />

                            <path d="M6.5 19.5h5.5m-2.75-4.5v4.5" />

                            <rect x="17.5" y="7.5" width="4" height="9" rx="1" />

                            <path d="M19 14.2h1" />

                        </svg>

                        <span class="whitespace-nowrap text-[11px] font-semibold leading-none text-white/95">

                            PPLG · TKJ · DKV · Animasi

                        </span>

                    </div>

                </div>

            </div>

        </header>

        {{-- 02. LAYOUT UTAMA --}}
        <div
            class="mx-auto mt-[18px] grid grid-cols-1 items-start
                    gap-4 lg:grid-cols-[minmax(260px,343px)_minmax(0,1fr)]
                    lg:gap-6 xl:w-[1215px]
                    xl:grid-cols-[343px_840px] xl:gap-8">

            {{-- KOLOM KIRI --}}
            <aside class="min-w-0 space-y-4">

                {{-- A. NAVIGASI TENTANG SEKOLAH --}}
                <nav
                    class="h-fit w-full overflow-hidden rounded-[12px]
                            border border-[#E9D5FF]/75 bg-white py-5 pl-5 pr-0
                            shadow-[0_5px_14px_rgba(59,7,100,0.075)]">

                    <div class="flex items-center gap-3 pr-4">
                        <div class="flex h-8 w-8 shrink-0 items-center justify-center
                                    rounded-[14px] text-[#FACC15]"
                            style="background:linear-gradient(135deg,#7E22CE,#C026D3);">
                            <svg class="h-[18px] w-[18px]" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M3 10h18L12 4 3 10Z" />
                                <path d="M5 10v9M9 10v9M15 10v9M19 10v9" />
                                <path d="M3 19h18M2 22h20" />
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-[16px] font-extrabold leading-6 text-[#3B0764]">
                                Tentang Sekolah
                            </h2>
                            <p class="text-[11px] font-normal leading-[16.5px] text-[#64748B]">
                                Direktori Resmi SMKN 4 Tarakan
                            </p>
                        </div>
                    </div>

                    <div class="mr-4 mt-[14px] h-px bg-[#F3E8FF]"></div>

                    <div class="mt-3 flex flex-col gap-[2px]">

                        {{-- PROFIL SEKOLAH --}}
                        <a href="#profil-sekolah"
                            class="flex h-[44px] w-full items-center gap-3 rounded-l-[8px]
                                  px-[14px] py-[10px] text-[#4B444F]
                                  transition hover:bg-[#F3E8FF]">
                            <svg class="h-[16px] w-[17px] shrink-0 text-[#7C7480]" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="4" y="4" width="16" height="16" rx="2" />
                                <circle cx="10" cy="10" r="2" />
                                <path d="M7.2 16c.6-2 1.8-3 3.3-3s2.7 1 3.3 3M16 9h2" />
                            </svg>
                            <span class="flex-1 text-[14px] font-semibold leading-6">Profil Sekolah</span>
                            <svg class="mr-3 h-2 w-[5px] shrink-0 text-[#7C7480]" viewBox="0 0 5 8" fill="none">
                                <path d="m1 1 3 3-3 3" stroke="currentColor" stroke-width="1.3"
                                    stroke-linecap="round" />
                            </svg>
                        </a>

                        {{-- VISI & MISI AKTIF --}}
                        <a href="#visi" aria-current="page"
                            class="flex h-[48px] w-full items-center gap-3 rounded-[12px]
                                  px-3 py-[10px] text-white
                                  shadow-[0_4px_10px_rgba(126,34,206,0.25)]"
                            style="background:linear-gradient(100deg,#9333EA,#8B5CF6);">
                            <svg class="h-[16px] w-[14px] shrink-0 text-[#FDC003]" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M5 3v18" />
                                <path d="M5 4h14l-4 4 4 4H5" />
                            </svg>
                            <span class="flex-1 text-[14px] font-bold leading-6">Visi &amp; Misi</span>
                        </a>

                        {{-- MAKNA LOGO --}}
                        <a href="#nilai"
                            class="flex h-[44px] w-full items-center gap-3 rounded-l-[8px]
                                  px-[14px] py-[10px] text-[#4B444F]
                                  transition hover:bg-[#F3E8FF]">
                            <svg class="h-[16px] w-[17px] shrink-0 text-[#7C7480]" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M12 3 21 8v8l-9 5-9-5V8l9-5Z" />
                                <circle cx="12" cy="12" r="3" />
                            </svg>
                            <span class="flex-1 text-[14px] font-semibold leading-6">Makna Logo</span>
                            <svg class="mr-3 h-2 w-[5px] shrink-0 text-[#7C7480]" viewBox="0 0 5 8" fill="none">
                                <path d="m1 1 3 3-3 3" stroke="currentColor" stroke-width="1.3"
                                    stroke-linecap="round" />
                            </svg>
                        </a>

                        {{-- PROGRAM KEAHLIAN --}}
                        <a href="#implementasi"
                            class="flex h-[44px] w-full items-center gap-3 rounded-l-[8px]
                                  px-[14px] py-[10px] text-[#4B444F]
                                  transition hover:bg-[#F3E8FF]">
                            <svg class="h-[16px] w-[17px] shrink-0 text-[#7C7480]" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                stroke-linejoin="round">
                                <rect x="3" y="4" width="18" height="14" rx="2" />
                                <path d="M2 21h20l-2-3H4l-2 3Z" />
                            </svg>
                            <span class="flex-1 text-[14px] font-semibold leading-6">Program Keahlian</span>
                            <svg class="mr-3 h-2 w-[5px] shrink-0 text-[#7C7480]" viewBox="0 0 5 8" fill="none">
                                <path d="m1 1 3 3-3 3" stroke="currentColor" stroke-width="1.3"
                                    stroke-linecap="round" />
                            </svg>
                        </a>

                        {{-- PRESTASI SISWA --}}
                        <a href="#implementasi"
                            class="flex h-[44px] w-full items-center gap-3 rounded-l-[8px]
                                  px-[14px] py-[10px] text-[#4B444F]
                                  transition hover:bg-[#F3E8FF]">
                            <svg class="h-[16px] w-[17px] shrink-0 text-[#7C7480]" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M8 4h8v5a4 4 0 0 1-8 0V4Z" />
                                <path d="M8 6H4v2a4 4 0 0 0 4 4M16 6h4v2a4 4 0 0 1-4 4" />
                                <path d="M12 13v5m-4 3h8" />
                            </svg>
                            <span class="flex-1 text-[14px] font-semibold leading-6">Prestasi Siswa</span>
                            <svg class="mr-3 h-2 w-[5px] shrink-0 text-[#7C7480]" viewBox="0 0 5 8" fill="none">
                                <path d="m1 1 3 3-3 3" stroke="currentColor" stroke-width="1.3"
                                    stroke-linecap="round" />
                            </svg>
                        </a>
                    </div>
                </nav>

                {{-- B. PILAR BUDAYA DAN POTENSI LOKAL: MENGIKUTI DESAIN PROGRAM KEAHLIAN --}}
                <section id="profil-sekolah"
                    class="relative min-h-[256.5px] w-full overflow-hidden
                                rounded-[20px] border border-[#E9D5FF]/90
                                bg-white px-4 pb-4 pt-6
                                shadow-[0_5px_14px_rgba(59,7,100,0.055)]">

                    <div class="flex items-center gap-3">
                        <div class="flex h-8 w-8 shrink-0 items-center justify-center
                                    rounded-[14px]"
                            style="background:linear-gradient(135deg,#FACC15,#EAB308);">
                            <svg class="h-[19px] w-[19px]" viewBox="0 0 24 24" fill="#4A0E4E" aria-hidden="true">
                                <circle cx="12" cy="5" r="3.1" />
                                <circle cx="18.2" cy="9.5" r="3.1" />
                                <circle cx="15.8" cy="16.2" r="3.1" />
                                <circle cx="8.2" cy="16.2" r="3.1" />
                                <circle cx="5.8" cy="9.5" r="3.1" />
                                <circle cx="12" cy="11" r="2.2" fill="#FACC15" />
                            </svg>
                        </div>

                        <div class="min-w-0">
                            <h2 class="text-[14px] font-extrabold leading-5 text-[#3B0764]">
                                Pilar Budaya dan Potensi Lokal
                            </h2>
                            <p class="mt-0.5 text-[10px] font-bold leading-[15px] text-[#A855F7]">
                                BUDAYA NUSANTARA &amp; KREATIVITAS DIGITAL
                            </p>
                        </div>
                    </div>

                    <div class="my-3 h-[2px] w-full"
                        style="background:linear-gradient(90deg,#9333EA 0%,#C026D3 32%,#FACC15 65%,rgba(250,204,21,0) 100%);">
                    </div>

                    <p class="text-[12px] font-normal leading-[19.5px] text-[#475569]">
                        SMK Negeri 4 Tarakan tumbuh di tengah keberagaman
                        budaya masyarakat Tarakan, Kalimantan Utara.
                        Potensi budaya lokal yang dipadukan dengan kreativitas
                        dan teknologi digital menjadi inspirasi bagi murid
                        untuk menghasilkan karya inovatif tanpa melupakan
                        nilai-nilai budaya bangsa.
                    </p>

                    <div class="relative z-10 mt-3 flex items-center gap-2">
                        <svg class="h-[14px] w-[12px] shrink-0 text-[#C026D3]" viewBox="0 0 16 20" fill="none"
                            stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M8 1 14 3.5v6c0 4.5-2.5 7.2-6 9.5-3.5-2.3-6-5-6-9.5v-6L8 1Z" />
                        </svg>
                        <span class="text-[11px] font-bold leading-[16.5px] text-[#7E22CE]">
                            Berkarakter, Berbudaya, Unggul dalam IT
                        </span>
                    </div>

                    {{-- WATERMARK --}}
                    {{-- WATERMARK ORNAMEN DAYAK --}}
                    <img src="{{ asset('images/ornamen_dayak_vektor.svg') }}" alt="" aria-hidden="true"
                        class="pointer-events-none absolute bottom-[-50px] right-[-3px]
           h-[185px] w-[135px] object-contain
           opacity-[0.12] select-none" />
                </section>

                {{-- C. IDENTITAS SATUAN: DESAIN PROGRAM KEAHLIAN, DATA TETAP VISI & MISI --}}
                <section
                    class="min-h-[470px] w-full rounded-[20px]
                                border border-[#E9D5FF]/80 bg-white
                                px-4 pb-4 pt-7
                                shadow-[0_5px_14px_rgba(59,7,100,0.055)]">

                    <div class="flex items-center justify-between gap-2">
                        <h2
                            class="flex items-center gap-2 text-[14px]
                                   font-extrabold leading-5 text-[#3B0764]">
                            <svg class="h-[17px] w-[17px] shrink-0 text-[#9333EA]" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.8">
                                <rect x="3" y="5" width="18" height="14" rx="2" />
                                <circle cx="9" cy="10" r="2" />
                                <path d="M5.7 16c.6-1.8 1.7-2.7 3.3-2.7s2.7.9 3.3 2.7M15 9h3M15 12h3M15 15h3" />
                            </svg>
                            Identitas Satuan
                        </h2>

                        {{-- DATA AKREDITASI TETAP B SESUAI FILE VISI & MISI --}}
                        <span
                            class="inline-flex h-[22.5px] shrink-0 items-center
                                     justify-center gap-[6px] rounded-[10px]
                                     border border-[#FACC15] bg-[#FACC15]/20 px-2">
                            <svg class="h-[11px] w-[11px] shrink-0 text-[#854D0E]" viewBox="0 0 24 24"
                                fill="currentColor">
                                <path d="m12 2 3.1 6.3 6.9 1-5 4.9 1.2 6.8-6.2-3.3-6.2 3.3L7 14.2 2 9.3l6.9-1L12 2Z" />
                            </svg>
                            <span class="whitespace-nowrap text-[11px] font-extrabold leading-[16.5px] text-[#854D0E]">
                                Akreditasi B
                            </span>
                        </span>
                    </div>

                    <div class="mt-3 space-y-[6px]">
                        @foreach ($identitas as $item)
                            <div
                                class="grid grid-cols-[minmax(0,0.85fr)_minmax(0,1.15fr)]
                                        items-center gap-2 rounded-[24px]
                                        border border-[#F3E8FF]/70
                                        bg-[#FAF5FF]/70 px-3 py-2.5">
                                <span class="text-[12px] font-normal leading-[1.6] text-[#64748B]">
                                    {{ $item['label'] }}
                                </span>

                                <div class="flex min-w-0 justify-end">
                                    @if ($item['type'] === 'npsn')
                                        <span class="text-right text-[13px] font-bold leading-[1.5] text-[#7E22CE]">
                                            {{ $item['value'] }}
                                        </span>
                                    @elseif ($item['type'] === 'program')
                                        <span
                                            class="inline-flex max-w-full items-center justify-center
                                                     rounded-[7px] border border-[#BAE6FD]
                                                     bg-[#F0F9FF] px-2 py-[3px]
                                                     text-center text-[11px] font-bold leading-4 text-[#7E22CE]">
                                            {{ $item['value'] }}
                                        </span>
                                    @else
                                        <span
                                            class="max-w-full break-words text-right
                                                     text-[12px] font-bold leading-[1.5] text-[#3B0764]">
                                            {{ $item['value'] }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                </section>
            </aside>


            {{-- KOLOM KANAN --}}
            <div class="min-w-0 space-y-0">

                {{-- 03. PEDOMAN UTAMA --}}
                <section id="visi"
                    class="w-full overflow-hidden rounded-[12px]
                                border border-[#E9D5FF]/40 bg-white
                                px-5 pb-7 pt-6
                                shadow-[0_5px_15px_rgba(59,7,100,0.065)]
                                sm:px-7 sm:pt-7 xl:px-8 xl:pt-8">

                    {{-- LABEL PEDOMAN --}}
                    <span
                        class="inline-flex h-[32px] w-[177px]
                                 items-center justify-center rounded-[20px]
                                 bg-[#EFDBFF] px-3 py-1">
                        <span
                            class="whitespace-nowrap text-[16px]
                                     font-bold leading-6 tracking-[0.8px] text-[#2B034F]">
                            PEDOMAN UTAMA
                        </span>
                    </span>

                    {{-- VISI SEKOLAH --}}
                    <h2 class="mt-3 text-[16px] font-extrabold leading-6 text-[#3B0764]">
                        Visi Sekolah
                    </h2>

                    {{-- KUTIPAN VISI --}}
                    <div
                        class="mt-2 rounded-[8px] border border-[#E9D5FF]/50
                                bg-[#FAF5FF] px-4 py-3.5">
                        <p class="text-[13px] italic font-normal leading-[1.7] text-[#3B0764]">
                            “Terbentuknya Murid Berkarakter, Berprestasi
                            dan Unggul dalam IT berlandaskan Budaya Bangsa.”
                        </p>
                    </div>

                    {{-- DUA KARTU MISI BESAR --}}
                    <div class="mt-4 grid grid-cols-1 gap-4 sm:grid-cols-2">

                        <article
                            class="rounded-[8px]
                                        border border-[#E9D5FF]/30
                                        bg-[#F3E8FF] p-5">
                            <h3 class="text-[16px] font-bold leading-6 text-[#2B034F]">
                                Pembentukan Karakter
                            </h3>
                            <p class="mt-2 text-[13px] leading-[20px] text-[#4B444F]">
                                Menyelenggarakan pendidikan yang membentuk murid
                                berakhlak mulia, berkarakter, serta memiliki
                                keseimbangan antara soft skills, hard skills,
                                dan budaya positif.
                            </p>
                        </article>

                        <article
                            class="rounded-[8px]
                                        border border-[#E9D5FF]/30
                                        bg-[#F3E8FF] p-5">
                            <h3 class="text-[16px] font-bold leading-6 text-[#2B034F]">
                                Pengembangan Kompetensi IT
                            </h3>
                            <p class="mt-2 text-[13px] leading-[20px] text-[#4B444F]">
                                Mengembangkan kompetensi murid dalam bidang
                                teknologi informasi dan komunikasi.
                            </p>
                        </article>
                    </div>

                    {{-- TIGA KARTU MISI --}}
                    <div
                        class="mt-4 grid grid-cols-1 gap-4
                                sm:grid-cols-2 xl:grid-cols-3">

                        <article
                            class="rounded-[8px]
                                        border border-[#E9D5FF]/30
                                        bg-[#F3E8FF] p-4">
                            <h3 class="text-[14px] font-bold leading-[1.5] text-[#2B034F]">
                                Link and Match Industri
                            </h3>
                            <p class="mt-2 text-[12px] leading-[19px] text-[#4B444F]">
                                Membekali murid dengan keterampilan kerja nyata
                                melalui program link and match.
                            </p>
                        </article>

                        <article
                            class="rounded-[8px]
                                        border border-[#E9D5FF]/30
                                        bg-[#F3E8FF] p-4">
                            <h3 class="text-[14px] font-bold leading-[1.5] text-[#2B034F]">
                                Jiwa Wirausaha
                            </h3>
                            <p class="mt-2 text-[12px] leading-[19px] text-[#4B444F]">
                                Berakhlak mulia, bernalar kritis, mandiri,
                                dan menjunjung gotong royong.
                            </p>
                        </article>

                        <article
                            class="rounded-[8px]
                                        border border-[#E9D5FF]/30
                                        bg-[#F3E8FF] p-4">
                            <h3 class="text-[14px] font-bold leading-[1.5] text-[#2B034F]">
                                Lulusan Berdaya Saing Global
                            </h3>
                            <p class="mt-2 text-[12px] leading-[19px] text-[#4B444F]">
                                Menghasilkan lulusan yang berkompeten,
                                berdaya saing global, dan siap kerja.
                            </p>
                        </article>
                    </div>
                </section>

                {{-- 04. NILAI FILOSOFIS SATUAN --}}
                <section id="nilai"
                    class="w-full rounded-b-[12px]
                                border-x border-b border-[#E9D5FF]/40
                                bg-[#F4EBF9] px-5 pb-5 pt-7
                                sm:px-7 xl:px-8">

                    <h2 class="text-[14px] font-extrabold leading-5 tracking-[0.02em] text-[#2B034F]">
                        NILAI FILOSOFIS SATUAN
                    </h2>

                    <p class="mt-1.5 text-[12px] font-normal leading-[18px] text-[#2B034F]">
                        Tata Nilai Budaya Kerja SMK Negeri 4 Tarakan
                    </p>

                    <p
                        class="mt-1.5 max-w-[760px] text-[12px]
                              italic font-normal leading-[19.5px] text-[#6B6070]">
                        Nilai-nilai utama yang menjadi landasan dalam
                        membentuk murid berkarakter, unggul dalam teknologi
                        informasi, profesional, dan siap menghadapi dunia kerja.
                    </p>

                    {{-- BARIS PERTAMA: 3 KARTU --}}
                    <div class="mt-5 grid grid-cols-1 gap-3 sm:grid-cols-3">
                        @foreach ($nilaiUtama as $nilai)
                            <article
                                class="flex min-w-0 flex-col
                                            rounded-[9px] border border-[#E9D5FF]/50
                                            bg-white p-4">

                                {{-- IKON --}}
                                <div class="mx-auto flex h-[38px] w-[38px]
                                            shrink-0 items-center justify-center
                                            rounded-full text-white
                                            shadow-[0_3px_8px_rgba(126,34,206,0.22)]"
                                    style="background:linear-gradient(135deg,#9333EA 0%,#C026D3 100%);">
                                    <svg class="h-[19px] w-[19px]" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                        stroke-linejoin="round">

                                        @if ($nilai['icon'] === 'professional')
                                            <path d="M12 3 19 6v5c0 4.7-3 7.8-7 10-4-2.2-7-5.3-7-10V6l7-3Z" />
                                            <path d="m8.8 12 2.1 2.1 4.4-4.5" />
                                        @elseif ($nilai['icon'] === 'innovation')
                                            <path d="M9 18h6M10 22h4" />
                                            <path
                                                d="M8.5 14.5A6.5 6.5 0 1 1 15.5 14.5c-.8.7-1.2 1.5-1.3 2.5h-4.4c-.1-1-.5-1.8-1.3-2.5Z" />
                                            <path d="M12 2v1.5M4.9 5l.9.9M19.1 5l-.9.9" />
                                        @elseif ($nilai['icon'] === 'national')
                                            <path d="M5 21V3" />
                                            <path d="M5 4c4-2 8 3 14 0v10c-6 3-10-2-14 0" />
                                        @endif
                                    </svg>
                                </div>

                                {{-- JUDUL RATA TENGAH --}}
                                <h3
                                    class="mt-2.5 text-[14px] font-bold
                                           leading-5 text-center text-[#2B034F]">
                                    {{ $nilai['judul'] }}
                                </h3>

                                {{-- ISI RATA KIRI --}}
                                <p
                                    class="mt-2 text-left text-[12px]
                                          font-normal leading-[19.5px] text-[#64748B]">
                                    {{ $nilai['deskripsi'] }}
                                </p>
                            </article>
                        @endforeach
                    </div>

                    {{-- BARIS KEDUA: 4 KARTU --}}
                    <div class="mt-3 grid grid-cols-2 gap-3 xl:grid-cols-4">
                        @foreach ($nilaiTambahan as $nilai)
                            <article
                                class="flex min-w-0 flex-col
                                            rounded-[9px] border border-[#E9D5FF]/50
                                            bg-white p-3.5">

                                {{-- IKON --}}
                                <div class="mx-auto flex h-[36px] w-[36px]
                                            shrink-0 items-center justify-center
                                            rounded-full text-white
                                            shadow-[0_3px_8px_rgba(126,34,206,0.22)]"
                                    style="background:linear-gradient(135deg,#9333EA 0%,#C026D3 100%);">
                                    <svg class="h-[18px] w-[18px]" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                        stroke-linejoin="round">

                                        @if ($nilai['icon'] === 'responsive')
                                            <path d="m13 2-9 12h7l-1 8 10-13h-7l1-7Z" />
                                        @elseif ($nilai['icon'] === 'independent')
                                            <circle cx="12" cy="12" r="9" />
                                            <circle cx="12" cy="12" r="5" />
                                            <circle cx="12" cy="12" r="1" />
                                        @elseif ($nilai['icon'] === 'adaptive')
                                            <path d="M20 7v5h-5" />
                                            <path d="M4 17v-5h5" />
                                            <path d="M5.5 9A7.5 7.5 0 0 1 18 6l2 6" />
                                            <path d="M18.5 15A7.5 7.5 0 0 1 6 18l-2-6" />
                                        @elseif ($nilai['icon'] === 'religious')
                                            <path d="M12 21V11" />
                                            <path d="M12 13c-2-4-6-4-7-8 5 0 7 3 7 8Z" />
                                            <path d="M12 16c2-4 6-4 7-8-5 0-7 3-7 8Z" />
                                            <path d="M9 21h6" />
                                        @endif
                                    </svg>
                                </div>

                                {{-- JUDUL RATA TENGAH --}}
                                <h3
                                    class="mt-2.5 text-[13px] font-bold
                                           leading-5 text-center text-[#2B034F]">
                                    {{ $nilai['judul'] }}
                                </h3>

                                {{-- ISI RATA KIRI --}}
                                <p
                                    class="mt-2 text-left text-[12px]
                                          font-normal leading-[19.5px] text-[#64748B]">
                                    {{ $nilai['deskripsi'] }}
                                </p>
                            </article>
                        @endforeach
                    </div>
                </section>

                {{-- 05. LANGKAH KONKRET IMPLEMENTASI NILAI --}}
                <section id="implementasi" class="pt-3">

                    <h2
                        class="mb-3 text-[13px] font-extrabold
                               leading-5 tracking-[0.025em] text-[#854D0E]">
                        LANGKAH KONKRET (IMPLEMENTASI NILAI)
                    </h2>

                    <div class="space-y-3">
                        @foreach ($implementasi as $item)
                            <article
                                class="flex items-start gap-3
                                       rounded-[9px] border border-[#E9D5FF]/60
                                       bg-white p-3.5
                                       shadow-[0_2px_7px_rgba(59,7,100,0.035)]
                                       transition duration-200
                                       hover:border-[#7E22CE]/30 hover:shadow-sm">

                                {{-- NOMOR --}}
                                <span
                                    class="flex h-[34px] w-[34px] shrink-0
                                           items-center justify-center rounded-[8px]
                                           text-[11px] font-extrabold text-white
                                           shadow-[0_4px_9px_rgba(126,34,206,0.22)]"
                                    style="background:linear-gradient(135deg,#9333EA,#C026D3);">
                                    {{ $item['nomor'] }}
                                </span>

                                {{-- KONTEN --}}
                                <div class="min-w-0 flex-1">
                                    <h3
                                        class="text-[12px] font-bold
                                               leading-[18px] text-[#3B0764]">
                                        {{ $item['judul'] }}
                                    </h3>

                                    <p
                                        class="mt-1 text-[11px]
                                              leading-[18px] text-[#64748B]">
                                        {{ $item['deskripsi'] }}
                                    </p>

                                    {{-- TAG --}}
                                    <div class="mt-2 flex flex-wrap gap-1.5">
                                        @foreach ($item['tag'] as $tag)
                                            <span
                                                class="inline-flex min-h-[22px]
                                                       items-center rounded-full
                                                       border border-[#E9D5FF]/50
                                                       bg-[#F3E8FF] px-2.5 py-1
                                                       text-[10px] font-medium
                                                       leading-4 text-[#6B4D7D]">
                                                {{ $tag }}
                                            </span>
                                        @endforeach
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </section>
            </div>
        </div>
    </main>
</div>
