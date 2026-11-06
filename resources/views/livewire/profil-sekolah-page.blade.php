@php
    /*
    |--------------------------------------------------------------------------
    | DATA IDENTITAS SEKOLAH
    |--------------------------------------------------------------------------
    */
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

    /*
    |--------------------------------------------------------------------------
    | DATA CAROUSEL FASILITAS
    |--------------------------------------------------------------------------
    */
    $jumlahSlide = max(1, (int) ceil(count($fasilitas) / 2));
    $fasilitasTampil = array_slice($fasilitas, $facilitySlide * 2, 2);
@endphp


<div class="relative isolate min-h-screen w-full overflow-x-hidden bg-[#F7F3FC] text-[#20132F]"
    style="font-family:'Plus Jakarta Sans Variable','Plus Jakarta Sans',sans-serif;">

    {{-- =====================================================
         BACKGROUND MOTIF DAYAK EMAS
         Latar belakang seluruh halaman Profil Sekolah
    ====================================================== --}}
    <div aria-hidden="true" class="pointer-events-none absolute inset-0 z-0 opacity-[0.07]"
        style="
            background-image: url('{{ asset('images/banner-motif-dayak-emas-transparan.png') }}');
            background-repeat: repeat-y;
            background-position: center top;
            background-size: 100% auto;
        ">
    </div>

    <main class="relative z-10 mx-auto w-full max-w-[1240px] px-3 py-4 sm:px-5 sm:py-5 xl:px-0">

        {{-- ======================================================
             01. KOP ATAS - MOTIF DAYAK EMAS FULL BACKGROUND
        ======================================================= --}}
        <header
            class="relative isolate min-h-[220px] w-full overflow-hidden
                   rounded-[18px] border border-white/20
                   px-6 pb-8 pt-9 text-white
                   shadow-[0_12px_22px_rgba(73,16,139,0.20)]
                   sm:px-8 xl:h-[258px] xl:min-h-[258px]
                   xl:px-[40px] xl:pt-[42px] xl:pb-0"
            style="background:linear-gradient(90deg,#2B1745 0%,#49108B 50%,#7E30E1 100%);">

            {{-- MOTIF DAYAK EMAS MEMENUHI SELURUH KOP --}}
            <img src="{{ asset('images/banner-motif-dayak-emas-transparan.png') }}" alt="" aria-hidden="true"
                class="pointer-events-none absolute inset-0 z-0
                       h-full w-full object-cover opacity-[0.05]" />

            {{-- ISI BANNER --}}
            <div class="relative z-10 max-w-[895px] sm:max-w-[calc(100%-170px)]">

                <h1
                    class="max-w-[895px] text-[30px] font-extrabold
                           leading-[1.15] tracking-[-1.2px] text-white
                           sm:text-[38px] xl:whitespace-nowrap
                           xl:text-[48px] xl:leading-[48px]">
                    Profil SMK Negeri 4 Tarakan
                </h1>

                <p
                    class="mt-[12px] max-w-[790px] text-[13px]
                           font-normal leading-6 text-white/90
                           sm:text-[14px] xl:text-[15px]">
                    Mewujudkan generasi berkarakter, berprestasi, dan unggul dalam teknologi informasi
                    berlandaskan budaya bangsa, melalui pendidikan vokasi yang mengembangkan
                    kompetensi, kreativitas, dan kesiapan menghadapi dunia kerja.
                </p>

                {{-- BADGE IDENTITAS --}}
                <div class="mt-[25px] flex flex-wrap items-center gap-2.5">

                    {{-- NPSN --}}
                    <div
                        class="inline-flex h-[30px] items-center gap-[7px]
                               rounded-full border border-white/20
                               bg-white/10 px-3 backdrop-blur-sm">
                        <svg class="h-[14px] w-[14px] shrink-0 text-[#FDC003]" viewBox="0 0 24 24" fill="none"
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
                               bg-white/10 px-3 backdrop-blur-sm">
                        <svg class="h-[14px] w-[14px] shrink-0 text-[#FDC003]" viewBox="0 0 24 24" fill="none"
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


        {{-- ======================================================
             02. LAYOUT SIDEBAR DAN KONTEN
        ======================================================= --}}
        <div
            class="mx-auto mt-[18px] grid w-full grid-cols-1 items-start
                   gap-4 lg:grid-cols-[minmax(260px,343px)_minmax(0,1fr)]
                   lg:gap-6 xl:max-w-[1215px]
                   xl:grid-cols-[343px_minmax(0,840px)] xl:gap-8">

            {{-- ==================================================
                 KOLOM KIRI - TEMPLATE MAKNA LOGO
            =================================================== --}}
            <aside class="min-w-0 space-y-4">

                {{-- A. NAVIGASI TENTANG SEKOLAH --}}
                <nav
                    class="h-fit w-full overflow-hidden rounded-[12px]
                           border border-[#E7E0EF] bg-white
                           py-5 pl-5 pr-0
                           shadow-[0_5px_14px_rgba(73,16,139,0.075)]">

                    <div class="flex items-center gap-3 pr-4">

                        <div class="flex h-8 w-8 shrink-0 items-center
                                   justify-center rounded-[14px] text-[#FDC003]"
                            style="background:linear-gradient(135deg,#49108B,#7E30E1);">
                            <svg class="h-[18px] w-[18px]" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M3 10h18L12 4 3 10Z" />
                                <path d="M5 10v9M9 10v9M15 10v9M19 10v9" />
                                <path d="M3 19h18M2 22h20" />
                            </svg>
                        </div>

                        <div>
                            <h2 class="text-[16px] font-extrabold leading-6 text-[#49108B]">
                                Tentang Sekolah
                            </h2>

                            <p class="text-[11px] font-normal leading-[16.5px] text-[#64748B]">
                                Direktori Resmi SMKN 4 Tarakan
                            </p>
                        </div>
                    </div>

                    <div class="mr-4 mt-[14px] h-px bg-[#E7E0EF]"></div>

                    <div class="mt-3 flex flex-col gap-[2px]">

                        {{-- PROFIL SEKOLAH AKTIF --}}
                        <a href="{{ url('/profil-sekolah') }}" aria-current="page"
                            class="flex h-[48px] w-full items-center gap-3
                                   rounded-[12px] px-3 py-[10px] text-white
                                   shadow-[0_4px_10px_rgba(73,16,139,0.25)]"
                            style="background:linear-gradient(100deg,#49108B,#7E30E1);">
                            <svg class="h-[16px] w-[17px] shrink-0 text-[#FDC003]" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"
                                aria-hidden="true">
                                <rect x="4" y="4" width="16" height="16" rx="2" />
                                <circle cx="10" cy="10" r="2" />
                                <path d="M7.2 16c.6-2 1.8-3 3.3-3s2.7 1 3.3 3M16 9h2" />
                            </svg>

                            <span class="flex-1 text-[14px] font-bold leading-6">
                                Profil Sekolah
                            </span>
                        </a>

                        {{-- VISI & MISI --}}
                        <a href="{{ url('/visi-misi') }}"
                            class="flex h-[44px] w-full items-center gap-3
                                   rounded-l-[8px] px-[14px] py-[10px]
                                   text-[#20132F] transition hover:bg-[#F7F3FC]">
                            <svg class="h-[16px] w-[17px] shrink-0 text-[#7E30E1]" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"
                                aria-hidden="true">
                                <path d="M5 3v18" />
                                <path d="M5 4h14l-4 4 4 4H5" />
                            </svg>

                            <span class="flex-1 text-[14px] font-semibold leading-6">
                                Visi &amp; Misi
                            </span>

                            <svg class="mr-3 h-2 w-[5px] shrink-0 text-[#7E30E1]" viewBox="0 0 5 8" fill="none"
                                aria-hidden="true">
                                <path d="m1 1 3 3-3 3" stroke="currentColor" stroke-width="1.3"
                                    stroke-linecap="round" />
                            </svg>
                        </a>

                        {{-- MAKNA LOGO --}}
                        <a href="{{ url('/makna-logo') }}"
                            class="flex h-[44px] w-full items-center gap-3
                                   rounded-l-[8px] px-[14px] py-[10px]
                                   text-[#20132F] transition hover:bg-[#F7F3FC]">
                            <svg class="h-[16px] w-[17px] shrink-0 text-[#7E30E1]" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                stroke-linejoin="round" aria-hidden="true">
                                <path d="M12 3 14.5 8l6 .8-4.4 4.2 1.1 6-5.2-2.9-5.2 2.9 1.1-6-4.4-4.2 6-.8L12 3Z" />
                            </svg>

                            <span class="flex-1 text-[14px] font-semibold leading-6">
                                Makna Logo
                            </span>

                            <svg class="mr-3 h-2 w-[5px] shrink-0 text-[#7E30E1]" viewBox="0 0 5 8" fill="none"
                                aria-hidden="true">
                                <path d="m1 1 3 3-3 3" stroke="currentColor" stroke-width="1.3"
                                    stroke-linecap="round" />
                            </svg>
                        </a>

                        {{-- PROGRAM KEAHLIAN --}}
                        <a href="{{ url('/program-keahlian') }}"
                            class="flex h-[44px] w-full items-center gap-3
                                   rounded-l-[8px] px-[14px] py-[10px]
                                   text-[#20132F] transition hover:bg-[#F7F3FC]">
                            <svg class="h-[16px] w-[17px] shrink-0 text-[#7E30E1]" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                stroke-linejoin="round" aria-hidden="true">
                                <rect x="3" y="4" width="18" height="14" rx="2" />
                                <path d="M2 21h20l-2-3H4l-2 3Z" />
                            </svg>

                            <span class="flex-1 text-[14px] font-semibold leading-6">
                                Program Keahlian
                            </span>

                            <svg class="mr-3 h-2 w-[5px] shrink-0 text-[#7E30E1]" viewBox="0 0 5 8" fill="none"
                                aria-hidden="true">
                                <path d="m1 1 3 3-3 3" stroke="currentColor" stroke-width="1.3"
                                    stroke-linecap="round" />
                            </svg>
                        </a>

                        {{-- PRESTASI SISWA --}}
                        <a href="{{ url('/prestasi-siswa') }}"
                            class="flex h-[44px] w-full items-center gap-3
                                   rounded-l-[8px] px-[14px] py-[10px]
                                   text-[#20132F] transition hover:bg-[#F7F3FC]">
                            <svg class="h-[16px] w-[17px] shrink-0 text-[#7E30E1]" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                stroke-linejoin="round" aria-hidden="true">
                                <path d="M8 4h8v5a4 4 0 0 1-8 0V4Z" />
                                <path d="M8 6H4v2a4 4 0 0 0 4 4" />
                                <path d="M16 6h4v2a4 4 0 0 1-4 4" />
                                <path d="M12 13v5m-4 3h8" />
                            </svg>

                            <span class="flex-1 text-[14px] font-semibold leading-6">
                                Prestasi Siswa
                            </span>

                            <svg class="mr-3 h-2 w-[5px] shrink-0 text-[#7E30E1]" viewBox="0 0 5 8" fill="none"
                                aria-hidden="true">
                                <path d="m1 1 3 3-3 3" stroke="currentColor" stroke-width="1.3"
                                    stroke-linecap="round" />
                            </svg>
                        </a>

                    </div>
                </nav>


                {{-- B. PILAR BUDAYA DAN POTENSI LOKAL --}}
                <section id="profil-sekolah"
                    class="relative isolate min-h-[256.5px] w-full overflow-hidden
                           rounded-[20px] border border-[#E7E0EF]
                           bg-white px-4 pb-4 pt-6
                           shadow-[0_5px_14px_rgba(73,16,139,0.055)]">
                    <div class="relative z-10">

                        <div class="flex items-center gap-3">

                            {{-- IKON BUNGA --}}
                            <div class="flex h-8 w-8 shrink-0 items-center
                                       justify-center rounded-[14px]"
                                style="background:linear-gradient(135deg,#FDC003,#EAB308);">
                                <svg class="h-[19px] w-[19px]" viewBox="0 0 24 24" fill="#49108B"
                                    aria-hidden="true">
                                    <circle cx="12" cy="5" r="3.1" />
                                    <circle cx="18.2" cy="9.5" r="3.1" />
                                    <circle cx="15.8" cy="16.2" r="3.1" />
                                    <circle cx="8.2" cy="16.2" r="3.1" />
                                    <circle cx="5.8" cy="9.5" r="3.1" />
                                    <circle cx="12" cy="11" r="2.2" fill="#FDC003" />
                                </svg>
                            </div>

                            <div class="min-w-0">
                                <h2 class="text-[14px] font-extrabold leading-5 text-[#49108B]">
                                    Pilar Budaya dan Potensi Lokal
                                </h2>

                                <p class="mt-0.5 text-[10px] font-bold leading-[15px] text-[#7E30E1]">
                                    BUDAYA NUSANTARA &amp; KREATIVITAS DIGITAL
                                </p>
                            </div>
                        </div>

                        <div class="my-3 h-[2px] w-full"
                            style="background:linear-gradient(90deg,#49108B 0%,#7E30E1 32%,#FDC003 65%,rgba(253,192,3,0) 100%);">
                        </div>

                        <p class="text-[12px] font-normal leading-[19.5px] text-[#64748B]">
                            SMK Negeri 4 Tarakan tumbuh di tengah keberagaman
                            budaya masyarakat Tarakan, Kalimantan Utara.
                            Potensi budaya lokal yang dipadukan dengan kreativitas
                            dan teknologi digital menjadi inspirasi bagi murid
                            untuk menghasilkan karya inovatif tanpa melupakan
                            nilai-nilai budaya bangsa.
                        </p>

                        <div class="relative mt-3 flex items-center gap-2">

                            <svg class="h-[14px] w-[12px] shrink-0 text-[#7E30E1]" viewBox="0 0 16 20" fill="none"
                                stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                stroke-linejoin="round" aria-hidden="true">
                                <path d="M8 1 14 3.5v6c0 4.5-2.5 7.2-6 9.5-3.5-2.3-6-5-6-9.5v-6L8 1Z" />
                            </svg>

                            <span class="text-[11px] font-bold leading-[16.5px] text-[#49108B]">
                                Berkarakter, Berbudaya, Unggul dalam IT
                            </span>
                        </div>

                    </div>

                    {{-- WATERMARK ORNAMEN DAYAK --}}
                    <img src="{{ asset('images/ornamen_dayak_vektor.svg') }}" alt="" aria-hidden="true"
                        class="pointer-events-none absolute bottom-[-50px] right-[-3px]
                               z-0 h-[185px] w-[135px] object-contain
                               opacity-[0.12] select-none" />
                </section>


                {{-- C. IDENTITAS SATUAN --}}
                <section
                    class="min-h-[470px] w-full rounded-[20px]
                           border border-[#E7E0EF] bg-white
                           px-4 pb-4 pt-7
                           shadow-[0_5px_14px_rgba(73,16,139,0.055)]">

                    <div class="flex items-center justify-between gap-2">

                        <h2
                            class="flex items-center gap-2 text-[14px]
                                   font-extrabold leading-5 text-[#49108B]">
                            <svg class="h-[17px] w-[17px] shrink-0 text-[#7E30E1]" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                <rect x="3" y="5" width="18" height="14" rx="2" />
                                <circle cx="9" cy="10" r="2" />
                                <path d="M5.7 16c.6-1.8 1.7-2.7 3.3-2.7s2.7.9 3.3 2.7M15 9h3M15 12h3M15 15h3" />
                            </svg>

                            Identitas Satuan
                        </h2>

                        {{-- AKREDITASI --}}
                        <span
                            class="inline-flex h-[22.5px] shrink-0 items-center
                                   justify-center gap-[6px] rounded-[10px]
                                   border border-[#FDC003] bg-[#FDC003]/20 px-2">
                            <svg class="h-[11px] w-[11px] shrink-0 text-[#854D0E]" viewBox="0 0 24 24"
                                fill="currentColor" aria-hidden="true">
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
                                       border border-[#E7E0EF]
                                       bg-[#F7F3FC] px-3 py-2.5">
                                <span class="text-[12px] font-normal leading-[1.6] text-[#64748B]">
                                    {{ $item['label'] }}
                                </span>

                                <div class="flex min-w-0 justify-end">

                                    @if ($item['type'] === 'npsn')
                                        <span class="text-right text-[13px] font-bold leading-[1.5] text-[#7E30E1]">
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
                                                   text-[12px] font-bold leading-[1.5] text-[#49108B]">
                                            {{ $item['value'] }}
                                        </span>
                                    @endif

                                </div>
                            </div>
                        @endforeach

                    </div>
                </section>

            </aside>


            {{-- ==================================================
                 KOLOM KANAN - KONTEN PROFIL SEKOLAH
            =================================================== --}}
            <div class="min-w-0 space-y-3">

                {{-- D. SEKILAS PROFIL SEKOLAH --}}
                <section
                    class="w-full overflow-hidden rounded-[20px]
                           border border-[#E9D5FF]/60 bg-white
                           p-5 shadow-[0_5px_15px_rgba(59,7,100,0.065)]
                           sm:p-6 xl:p-[22px]">

                    {{-- FOTO UTAMA / HERO --}}
                    <div
                        class="group relative h-[240px] w-full overflow-hidden
                               rounded-[17px] bg-[#4A0E4E]
                               shadow-[0_4px_10px_rgba(59,7,100,0.18)]
                               sm:h-[270px] xl:h-[286px]">
                        <img src="{{ asset('images/profil-sekolah/gedung-smkn4-tarakan.png') }}"
                            alt="Gedung SMK Negeri 4 Tarakan dan murid di halaman sekolah"
                            class="absolute inset-0 h-full w-full object-cover object-center" fetchpriority="high">

                        {{-- OVERLAY UNGU DI BAGIAN BAWAH FOTO --}}
                        <div
                            class="absolute inset-0 bg-gradient-to-t
                                   from-[#3B0764]/95 via-[#4A0E4E]/35 to-transparent">
                        </div>

                        <div class="absolute bottom-0 left-0 right-0 p-4 sm:p-5">

                            <span
                                class="inline-flex min-h-[23px] items-center rounded-full
                                       bg-[#FACC15] px-3 py-1
                                       text-[10px] font-bold leading-4 text-[#4A0E4E]
                                       shadow-[0_2px_7px_rgba(0,0,0,0.12)]">
                                Pendidikan Berkualitas, Generasi Berdaya Saing
                            </span>

                            <h2
                                class="mt-2 text-[19px] font-extrabold leading-[1.25]
                                       tracking-[-0.4px] text-white sm:text-[22px]">
                                Melangkah Maju Bersama Teknologi
                            </h2>

                            <p
                                class="mt-1 max-w-[650px] text-[10px] font-medium
                                       leading-[15px] text-white/95 sm:text-[11px]">
                                SMK Negeri 4 Tarakan menghadirkan pendidikan kejuruan yang mendorong siswa
                                untuk terus berkembang, berinovasi, dan mengikuti kemajuan teknologi.
                            </p>
                        </div>
                    </div>


                    {{-- SEKILAS PANDANG --}}
                    <div class="mt-5">

                        <h2
                            class="flex items-center gap-2 text-[18px]
                                   font-extrabold leading-6 tracking-[-0.3px] text-[#49108B]">
                            <span class="h-[17px] w-[5px] shrink-0 rounded-full bg-[#C026D3]"></span>
                            Sekilas Pandang
                        </h2>

                        <div
                            class="mt-2.5 space-y-3.5 px-1 text-[12px]
                                   font-normal leading-[1.75] text-[#475569] sm:px-2 sm:text-[13px]">
                            <p class="indent-6">
                                SMK Negeri 4 Tarakan merupakan sekolah menengah kejuruan negeri yang berlokasi di
                                Kota Tarakan, Provinsi Kalimantan Utara. Sekolah ini berkomitmen menyelenggarakan
                                pendidikan vokasi yang berkualitas dengan berfokus pada pengembangan kompetensi di
                                bidang teknologi informasi dan industri kreatif.
                            </p>

                            <p class="indent-6">
                                SMK Negeri 4 Tarakan memiliki empat konsentrasi keahlian, yaitu
                                <strong class="font-extrabold text-[#334155]">
                                    Rekayasa Perangkat Lunak (RPL), Teknik Komputer dan Jaringan (TKJ), Desain
                                    Komunikasi Visual (DKV), dan Animasi.
                                </strong>
                                Melalui pembelajaran yang adaptif, berbasis proyek, serta selaras dengan kebutuhan
                                dunia usaha dan dunia industri, sekolah mendorong murid untuk mengembangkan
                                keterampilan, kreativitas, karakter, dan kemampuan beradaptasi terhadap perkembangan
                                teknologi.
                            </p>

                            <p class="indent-6">
                                Berlandaskan visi “Terbentuknya Murid Berkarakter, Berprestasi dan Unggul dalam IT
                                berlandaskan Budaya Bangsa,” SMK Negeri 4 Tarakan berupaya menghasilkan lulusan yang
                                kompeten, berkarakter, mandiri, siap kerja, dan mampu bersaing di tingkat global.
                            </p>
                        </div>

                        <p
                            class="mt-4 text-center text-[12px] font-extrabold
                                   leading-5 text-[#334155] sm:text-[13px]">
                            Unggul dalam Mutu, Tinggi dalam Prestasi, Taklukkan Dunia dengan IT.
                        </p>
                    </div>
                </section>


                {{-- E. TIGA PILAR PEMBELAJARAN UNGGUL --}}
                <section
                    class="w-full overflow-hidden rounded-[20px]
                           border border-[#E9D5FF]/60 bg-white
                           px-5 pb-5 pt-6 shadow-[0_5px_15px_rgba(59,7,100,0.055)]
                           sm:px-6 sm:pt-6">

                    <div>
                        <h2
                            class="flex items-center gap-2 text-[18px]
                                   font-extrabold leading-6 tracking-[-0.3px] text-[#49108B]">
                            <span class="h-[17px] w-[5px] shrink-0 rounded-full bg-[#C026D3]"></span>
                            Tiga Pilar Pembelajaran Unggul
                        </h2>

                        <p class="mt-1.5 text-[11px] font-normal leading-[18px] text-[#64748B] sm:text-[12px]">
                            Membangun kompetensi, kreativitas, dan karakter murid melalui pembelajaran bermakna
                            yang selaras dengan perkembangan teknologi dan kebutuhan dunia kerja.
                        </p>
                    </div>


                    <div class="mt-5 grid grid-cols-1 gap-3 sm:grid-cols-3">

                        {{-- PILAR 1 --}}
                        <article
                            class="flex min-w-0 flex-col rounded-[17px]
                                   border border-[#E9D5FF] bg-[#FCF9FF]
                                   px-4 pb-4 pt-4">
                            <div
                                class="flex h-[58px] w-[58px] items-center justify-center
                                       rounded-[16px] bg-[#9333EA]">
                                <svg class="h-[36px] w-[36px]" viewBox="0 0 48 48" fill="none" stroke="#FACC15"
                                    stroke-width="2.1" stroke-linecap="round" stroke-linejoin="round"
                                    aria-hidden="true">
                                    <path
                                        d="M23.8 14.2C18.5 10.3 11.7 10.6 6.5 13v24.1c6-2.5 12.4-2.3 17.3 1.9V14.2Z" />
                                    <path
                                        d="M24.2 14.2c5.3-3.9 12.1-3.6 17.3-1.2v24.1c-6-2.5-12.4-2.3-17.3 1.9V14.2Z" />
                                    <path d="M24 14v25" />
                                    <path d="M31 10.5c2.2-1.7 4.7-2.4 7.5-2.3v23.4" opacity=".9" />
                                </svg>
                            </div>

                            <h3
                                class="mt-4 text-[15px] font-extrabold leading-[1.45]
                                       tracking-[-0.2px] text-[#4A1D72]">
                                1. Pembelajaran Mendalam
                            </h3>

                            <p
                                class="mt-3 flex-1 text-[11px] font-normal
                                       leading-[1.7] text-[#64748B] sm:text-[12px]">
                                Mengutamakan pemahaman konsep, berpikir kritis, analitis, dan reflektif,
                                serta menghubungkan teori dengan praktik nyata.
                            </p>

                            <div class="mt-4 border-t border-[#E9D5FF] pt-3">
                                <span
                                    class="inline-flex items-center gap-2 text-[10px]
                                           font-extrabold leading-4 text-[#9333EA] sm:text-[11px]">
                                    <svg class="h-[17px] w-[17px] shrink-0 text-[#0EA5E9]" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="1.8"
                                        stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <path
                                            d="M12 2.8 14 4l2.5-.2 1.1 2.2 2.3 1-.2 2.5 1.2 2.5-1.2 2.2.2 2.5-2.3 1-1.1 2.2-2.5-.2-2 1.2-2-1.2-2.5.2-1.1-2.2-2.3-1 .2-2.5-1.2-2.2 1.2-2.5-.2-2.5 2.3-1 1.1-2.2 2.5.2 2-1.2Z" />
                                        <path d="m8.5 12 2.2 2.2 4.8-5" />
                                    </svg>

                                    Pemahaman &amp; Penalaran
                                </span>
                            </div>
                        </article>


                        {{-- PILAR 2 --}}
                        <article
                            class="flex min-w-0 flex-col rounded-[17px]
                                   border border-[#E9D5FF] bg-[#FCF9FF]
                                   px-4 pb-4 pt-4">
                            <div
                                class="flex h-[58px] w-[58px] items-center justify-center
                                       rounded-[16px] bg-[#FACC15]">
                                <svg class="h-[35px] w-[35px]" viewBox="0 0 48 48" fill="none" stroke="#4A0E4E"
                                    stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"
                                    aria-hidden="true">
                                    <path d="M9 14h29v21H9z" />
                                    <path d="M14 14V9h24v5" />
                                    <path d="M16 21h7v10h-7z" />
                                    <path d="M28 21h6v10h-6z" />
                                    <circle cx="31" cy="26" r="1" fill="#4A0E4E" stroke="none" />
                                    <path d="M12 35h23" />
                                </svg>
                            </div>

                            <h3
                                class="mt-4 text-[15px] font-extrabold leading-[1.45]
                                       tracking-[-0.2px] text-[#9A5B13]">
                                2. Pembelajaran Berbasis Proyek
                            </h3>

                            <p
                                class="mt-3 flex-1 text-[11px] font-normal
                                       leading-[1.7] text-[#64748B] sm:text-[12px]">
                                Mengembangkan kreativitas, kolaborasi, komunikasi, dan kemampuan memecahkan
                                masalah melalui proyek yang relevan dengan bidang keahlian.
                            </p>

                            <div class="mt-4 border-t border-[#E9D5FF] pt-3">
                                <span
                                    class="inline-flex items-center gap-2 text-[10px]
                                           font-extrabold leading-4 text-[#9A5B13] sm:text-[11px]">
                                    <svg class="h-[17px] w-[17px] shrink-0 text-[#EAB308]" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="1.8"
                                        stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <path
                                            d="M12 2.8 14 4l2.5-.2 1.1 2.2 2.3 1-.2 2.5 1.2 2.5-1.2 2.2.2 2.5-2.3 1-1.1 2.2-2.5-.2-2 1.2-2-1.2-2.5.2-1.1-2.2-2.3-1 .2-2.5-1.2-2.2 1.2-2.5-.2-2.5 2.3-1 1.1-2.2 2.5.2 2-1.2Z" />
                                        <path d="m8.5 12 2.2 2.2 4.8-5" />
                                    </svg>

                                    Kreatif &amp; Kolaboratif
                                </span>
                            </div>
                        </article>


                        {{-- PILAR 3 --}}
                        <article
                            class="flex min-w-0 flex-col rounded-[17px]
                                   border border-[#E9D5FF] bg-[#FCF9FF]
                                   px-4 pb-4 pt-4">
                            <div
                                class="flex h-[58px] w-[58px] items-center justify-center
                                       rounded-[16px] bg-[#C026D3]">
                                <svg class="h-[36px] w-[36px]" viewBox="0 0 48 48" fill="none" stroke="white"
                                    stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"
                                    aria-hidden="true">
                                    <path d="m11 12 9 9-3 3-9-9c-2-2-2-5 0-7l3 4Z" />
                                    <path d="m37 36-9-9 3-3 9 9c2 2 2 5 0 7l-3-4Z" />
                                    <path d="m37 12-9 9 3 3 9-9c2-2 2-5 0-7l-3 4Z" />
                                    <path d="m11 36 9-9-3-3-9 9c-2 2-2 5 0 7l3-4Z" />
                                    <path d="M24 5v5M24 38v5M5 24h5M38 24h5" />
                                    <path d="m17 17 3 3m8 8 3 3m0-14-3 3m-8 8-3 3" opacity=".9" />
                                </svg>
                            </div>

                            <h3
                                class="mt-4 text-[15px] font-extrabold leading-[1.45]
                                       tracking-[-0.2px] text-[#A21CAF]">
                                3. Integrasi dengan Dunia Industri
                            </h3>

                            <p
                                class="mt-3 flex-1 text-[11px] font-normal
                                       leading-[1.7] text-[#64748B] sm:text-[12px]">
                                Menyelaraskan proyek dan pembelajaran dengan kebutuhan dunia usaha,
                                dunia industri, dan dunia kerja di bidang teknologi informasi
                                serta industri kreatif.
                            </p>

                            <div class="mt-4 border-t border-[#E9D5FF] pt-3">
                                <span
                                    class="inline-flex items-center gap-2 text-[10px]
                                           font-extrabold leading-4 text-[#A21CAF] sm:text-[11px]">
                                    <svg class="h-[17px] w-[17px] shrink-0 text-[#A855F7]" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="1.8"
                                        stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <path
                                            d="M12 2.8 14 4l2.5-.2 1.1 2.2 2.3 1-.2 2.5 1.2 2.5-1.2 2.2.2 2.5-2.3 1-1.1 2.2-2.5-.2-2 1.2-2-1.2-2.5.2-1.1-2.2-2.3-1 .2-2.5-1.2-2.2 1.2-2.5-.2-2.5 2.3-1 1.1-2.2 2.5.2 2-1.2Z" />
                                        <path d="m8.5 12 2.2 2.2 4.8-5" />
                                    </svg>

                                    Relevan dengan Dunia Kerja
                                </span>
                            </div>
                        </article>

                    </div>
                </section>


                {{-- F. SARANA DAN PRASARANA - CAROUSEL LIVEWIRE --}}
                <section class="w-full pt-1" aria-label="Sarana dan Prasarana Pembelajaran">

                    <div class="mb-3 flex items-center justify-between gap-3">

                        <h2
                            class="flex min-w-0 items-center gap-2 text-[17px]
                                   font-extrabold leading-6 tracking-[-0.3px] text-[#49108B] sm:text-[18px]">
                            <span class="h-[17px] w-[5px] shrink-0 rounded-full bg-[#A855F7]"></span>
                            Sarana dan Prasarana Pembelajaran
                        </h2>

                        <div class="flex shrink-0 items-center gap-2">

                            {{-- TOMBOL SEBELUMNYA --}}
                            <button type="button" wire:click="slideSebelumnya" wire:loading.attr="disabled"
                                aria-label="Lihat fasilitas sebelumnya"
                                class="flex h-[38px] w-[38px] items-center justify-center
                                       rounded-full border border-[#F0E7F8] bg-white
                                       text-[#7E22CE] shadow-[0_3px_8px_rgba(59,7,100,0.10)]
                                       transition hover:-translate-y-0.5 hover:bg-[#F8F0FF]
                                       disabled:opacity-50">
                                <svg class="h-[18px] w-[18px]" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" aria-hidden="true">
                                    <path d="M19 12H5M12 19l-7-7 7-7" />
                                </svg>
                            </button>

                            {{-- TOMBOL BERIKUTNYA --}}
                            <button type="button" wire:click="slideBerikutnya" wire:loading.attr="disabled"
                                aria-label="Lihat fasilitas berikutnya"
                                class="flex h-[38px] w-[38px] items-center justify-center
                                       rounded-full border border-[#F0E7F8] bg-white
                                       text-[#7E22CE] shadow-[0_3px_8px_rgba(59,7,100,0.10)]
                                       transition hover:-translate-y-0.5 hover:bg-[#F8F0FF]
                                       disabled:opacity-50">
                                <svg class="h-[18px] w-[18px]" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" aria-hidden="true">
                                    <path d="M5 12h14M12 5l7 7-7 7" />
                                </svg>
                            </button>

                        </div>
                    </div>


                    {{-- DUA KARTU FASILITAS AKTIF --}}
                    <div class="grid grid-cols-1 gap-3 sm:grid-cols-2">

                        @foreach ($fasilitasTampil as $fasilitasItem)
                            <article wire:key="fasilitas-{{ $facilitySlide }}-{{ $loop->index }}"
                                class="min-w-0 overflow-hidden rounded-[18px]
                                       border border-[#E9D5FF] bg-white
                                       shadow-[0_3px_9px_rgba(59,7,100,0.055)]">

                                <div class="h-[165px] w-full overflow-hidden bg-[#F3E8FF] sm:h-[145px] xl:h-[155px]">
                                    <img src="{{ asset($fasilitasItem['gambar']) }}"
                                        alt="{{ $fasilitasItem['alt'] }}" loading="lazy"
                                        class="h-full w-full object-cover object-center transition duration-300 hover:scale-[1.025]">
                                </div>

                                <div class="px-3.5 pb-3.5 pt-3">

                                    <h3
                                        class="inline-flex max-w-full rounded-[7px]
                                               border border-[#E9D5FF]/60 bg-[#F7F0FF]
                                               px-2 py-1 text-[11px] font-extrabold
                                               leading-[16px] text-[#49108B] sm:text-[12px]">
                                        {{ $fasilitasItem['judul'] }}
                                    </h3>

                                    <p
                                        class="mt-2 text-[10px] font-normal
                                               leading-[16px] text-[#64748B] sm:text-[10.5px]">
                                        {{ $fasilitasItem['deskripsi'] }}
                                    </p>
                                </div>
                            </article>
                        @endforeach

                    </div>


                    {{-- INDIKATOR SLIDE --}}
                    <div class="mt-4 flex items-center justify-center gap-2" aria-label="Halaman fasilitas">
                        @for ($dot = 0; $dot < $jumlahSlide; $dot++)
                            <button type="button" wire:click="pilihSlide({{ $dot }})"
                                wire:loading.attr="disabled" aria-label="Buka halaman fasilitas {{ $dot + 1 }}"
                                aria-current="{{ $facilitySlide === $dot ? 'true' : 'false' }}"
                                class="h-[9px] rounded-full transition-all duration-200
                                       {{ $facilitySlide === $dot ? 'w-[25px] bg-[#9333EA]' : 'w-[9px] bg-[#DCE7FF] hover:bg-[#C4B5FD]' }}"></button>
                        @endfor
                    </div>

                </section>

            </div>
        </div>
    </main>
</div>
