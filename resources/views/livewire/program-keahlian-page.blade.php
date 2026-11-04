@php
    /*
    |--------------------------------------------------------------------------
    | DATA PROGRAM
    |--------------------------------------------------------------------------
    | Mendukung data foto dan deskripsi dari beberapa format nama sebelumnya.
    */

    $programData = $programs[$activeProgram] ?? [];

    $fotoDefault = [
        'tkj' => 'images/program-keahlian/program-tkj.png',
        'dkv' => 'images/program-keahlian/program-dkv.png',
        'animasi' => 'images/program-keahlian/program-animasi.png',
        'pplg' => 'images/program-keahlian/program-pplg.png',
    ];

    $rawFoto =
        $programData['foto'] ??
        ($programData['image'] ?? ($programData['gambar'] ?? ($fotoDefault[$activeProgram] ?? '')));

    $fotoUrl = preg_match('/^https?:\/\//i', $rawFoto)
        ? $rawFoto
        : asset(ltrim($rawFoto, '/'));

    $program = [
        'singkatan' => $programData['singkatan'] ?? ($programData['tab'] ?? strtoupper($activeProgram)),
        'nama' => $programData['nama'] ?? ($programData['title'] ?? ($programData['name'] ?? 'Program Keahlian')),
        'deskripsi' => $programData['deskripsi'] ?? ($programData['description'] ?? ''),
        'label' => $programData['label'] ?? ($programData['skills_label'] ?? 'KOMPETENSI KUNCI:'),
        'kompetensi' => $programData['kompetensi'] ?? ($programData['skills'] ?? []),
        'karier' => $programData['karier'] ?? ($programData['career'] ?? ''),
        'foto' => $fotoUrl,
        'foto_alt' => $programData['foto_alt'] ?? ($programData['image_alt'] ?? 'Dokumentasi program keahlian'),
    ];

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
@endphp

<div
    class="min-h-screen w-full overflow-x-hidden bg-[#FCF7FF] text-[#3B0764]"
    style="font-family:'Plus Jakarta Sans Variable','Plus Jakarta Sans',sans-serif;"
>
    <main class="mx-auto w-full max-w-[1240px] px-3 py-4 sm:px-5 sm:py-5 xl:px-0">

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
            style="background:linear-gradient(90deg,#4A0E4E 0%,#7E22CE 50%,#C026D3 100%);"
        >

            {{-- ORNAMEN KIRI --}}
            <svg
                class="pointer-events-none absolute -left-[49px] -top-[30px]
                       -z-10 h-[220px] w-[155px] opacity-30"
                viewBox="0 0 155 220"
                fill="none"
                aria-hidden="true"
            >
                <circle cx="53" cy="61" r="91" stroke="#D8B4FE" stroke-width="3" />
                <circle cx="53" cy="61" r="67" stroke="#D8B4FE" stroke-width="3" />
                <circle cx="53" cy="61" r="8.5" fill="#D8B4FE" />
                <path d="M-12 79C30 79 69 101 87 151" stroke="#D8B4FE" stroke-width="3" />
            </svg>

            {{-- CAHAYA KANAN --}}
            <div
                class="absolute -right-16 -top-16 -z-10 h-64 w-64
                       rounded-full bg-white/[0.07] blur-3xl"
            ></div>

            {{-- ORNAMEN GEOMETRIS KANAN --}}
            <svg
                class="pointer-events-none absolute right-[25px] top-1/2
                       hidden h-[255px] w-[250px]
                       -translate-y-1/2 opacity-[0.32] sm:block"
                viewBox="0 0 250 270"
                fill="none"
                aria-hidden="true"
            >
                <path d="M125 3 L235 69 V201 L125 267 L15 201 V69 Z" stroke="#D8B4FE" stroke-width="3.5" />
                <path d="M125 22 L214 76 V193 L125 247 L36 193 V76 Z" stroke="#D8B4FE" stroke-width="3" />
                <path d="M125 40 L193 82 V187 L125 228 L57 187 V82 Z" stroke="#D8B4FE" stroke-width="2" />
                <path d="M65 91 C76 49 101 30 125 20 C149 30 174 49 185 91" stroke="#D8B4FE" stroke-width="3" />
                <path d="M65 91 C85 108 103 114 125 119 C147 114 165 108 185 91" stroke="#D8B4FE" stroke-width="3" />
                <path d="M65 91 C83 120 103 135 125 147 C147 135 167 120 185 91" stroke="#D8B4FE" stroke-width="2.5" />
                <path
                    d="M125 119 C96 119 83 146 95 168 C103 182 116 193 125 205 C134 193 147 182 155 168 C167 146 154 119 125 119Z"
                    stroke="#D8B4FE"
                    stroke-width="3"
                />
                <path d="M125 155 C99 188 103 219 125 235 C147 219 151 188 125 155Z" stroke="#D8B4FE" stroke-width="3" />
                <circle cx="65" cy="91" r="11" fill="#C026D3" stroke="#D8B4FE" stroke-width="2" />
                <circle cx="185" cy="91" r="11" fill="#C026D3" stroke="#D8B4FE" stroke-width="2" />
                <circle cx="65" cy="185" r="11" fill="#C026D3" stroke="#D8B4FE" stroke-width="2" />
                <circle cx="185" cy="185" r="11" fill="#C026D3" stroke="#D8B4FE" stroke-width="2" />
            </svg>

            <div class="relative z-10 max-w-[895px] sm:max-w-[calc(100%-170px)]">

                <h1
                    class="max-w-[895px] text-[30px] font-extrabold
                           leading-[1.15] tracking-[-1.2px] text-white
                           sm:text-[38px] xl:whitespace-nowrap
                           xl:text-[48px] xl:leading-[48px]"
                >
                    Program Keahlian SMK Negeri 4 Tarakan
                </h1>

                <p
                    class="mt-[12px] max-w-[790px] text-[13px]
                           font-normal leading-6 text-[#F3E8FF]
                           sm:text-[14px] xl:text-[15px]"
                >
                    Kenali berbagai program keahlian yang berfokus pada penguasaan teknologi,
                    pengembangan kreativitas, dan keterampilan profesional sesuai kebutuhan
                    dunia industri.
                </p>

                {{-- BADGE IDENTITAS --}}
                <div class="mt-[25px] flex flex-wrap items-center gap-2.5">

                    {{-- NPSN --}}
                    <div
                        class="inline-flex h-[30px] items-center gap-[7px]
                               rounded-full border border-white/20
                               bg-white/[0.10] px-3 backdrop-blur-sm"
                    >
                        <svg
                            class="block h-[14px] w-[14px] shrink-0 text-[#FACC15]"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            aria-hidden="true"
                        >
                            <path d="M12 2.8 14.2 4l2.5-.4 1.2 2.3 2.5 1-.2 2.6 1.4 2.2-1.4 2.2.2 2.6-2.5 1-1.2 2.3-2.5-.4-2.2 1.2-2.2-1.2-2.5.4-1.2-2.3-2.5-1 .2-2.6L2.4 12l1.4-2.2-.2-2.6 2.5-1 1.2-2.3 2.5.4L12 2.8Z" />
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
                               bg-white/[0.10] px-3 backdrop-blur-sm"
                    >
                        <svg
                            class="block h-[14px] w-[14px] shrink-0 text-[#FACC15]"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            aria-hidden="true"
                        >
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
                               bg-white/[0.10] px-3 backdrop-blur-sm"
                    >
                        <svg
                            class="block h-[14px] w-[14px] shrink-0 text-[#67D7F5]"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            aria-hidden="true"
                        >
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


        {{-- =====================================================
             02. LAYOUT UTAMA
        ====================================================== --}}
        <div
            class="mx-auto mt-[18px] grid grid-cols-1 items-start
                   gap-4 lg:grid-cols-[minmax(260px,343px)_minmax(0,1fr)]
                   lg:gap-6 xl:w-[1215px]
                   xl:grid-cols-[343px_840px] xl:gap-8"
        >

            {{-- =================================================
                 KOLOM KIRI
            ================================================== --}}
            <aside class="min-w-0 space-y-4">

                {{-- A. NAVIGASI TENTANG SEKOLAH --}}
                <nav
                    class="h-fit w-full overflow-hidden
                           rounded-[12px] border border-[#E9D5FF]/75
                           bg-white py-5 pl-5 pr-0
                           shadow-[0_5px_14px_rgba(59,7,100,0.075)]"
                >
                    <div class="flex items-center gap-3 pr-4">

                        <div
                            class="flex h-8 w-8 shrink-0 items-center
                                   justify-center rounded-[14px] text-[#FACC15]"
                            style="background:linear-gradient(135deg,#7E22CE,#C026D3);"
                        >
                            <svg
                                class="h-[18px] w-[18px]"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                aria-hidden="true"
                            >
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

                        @foreach ($menu as $item)
                            <a
                                href="{{ url($item['url']) }}"
                                @if ($item['icon'] === 'laptop') aria-current="page" @endif
                                class="flex {{ $item['icon'] === 'laptop' ? 'h-[48px] rounded-[12px] px-3 text-white shadow-[0_4px_10px_rgba(126,34,206,0.25)]' : 'h-[44px] rounded-l-[8px] px-[14px] text-[#4B444F] hover:bg-[#F3E8FF]' }}
                                       w-full items-center gap-3 py-[10px] transition"
                                @if ($item['icon'] === 'laptop') style="background:linear-gradient(100deg,#9333EA,#8B5CF6);" @endif
                            >

                                {{-- IKON PROFIL --}}
                                @if ($item['icon'] === 'profile')
                                    <svg
                                        class="h-[16px] w-[17px] shrink-0 text-[#7C7480]"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="1.8"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    >
                                        <rect x="4" y="4" width="16" height="16" rx="2" />
                                        <circle cx="10" cy="10" r="2" />
                                        <path d="M7.2 16c.6-2 1.8-3 3.3-3s2.7 1 3.3 3M16 9h2" />
                                    </svg>

                                {{-- IKON VISI MISI --}}
                                @elseif ($item['icon'] === 'flag')
                                    <svg
                                        class="h-[16px] w-[14px] shrink-0 text-[#7C7480]"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="1.8"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    >
                                        <path d="M5 3v18" />
                                        <path d="M5 4h14l-4 4 4 4H5" />
                                    </svg>

                                {{-- IKON MAKNA LOGO --}}
                                @elseif ($item['icon'] === 'logo')
                                    <svg
                                        class="h-[16px] w-[17px] shrink-0 text-[#7C7480]"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="1.8"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    >
                                        <path d="M12 3 21 8v8l-9 5-9-5V8l9-5Z" />
                                        <circle cx="12" cy="12" r="3" />
                                    </svg>

                                {{-- IKON PROGRAM KEAHLIAN --}}
                                @elseif ($item['icon'] === 'laptop')
                                    <svg
                                        class="h-[16px] w-[17px] shrink-0 text-[#FDC003]"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="1.8"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    >
                                        <rect x="3" y="4" width="18" height="14" rx="2" />
                                        <path d="M2 21h20l-2-3H4l-2 3Z" />
                                    </svg>

                                {{-- IKON PRESTASI --}}
                                @else
                                    <svg
                                        class="h-[16px] w-[17px] shrink-0 text-[#7C7480]"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="1.8"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    >
                                        <path d="M8 4h8v5a4 4 0 0 1-8 0V4Z" />
                                        <path d="M8 6H4v2a4 4 0 0 0 4 4M16 6h4v2a4 4 0 0 1-4 4" />
                                        <path d="M12 13v5m-4 3h8" />
                                    </svg>
                                @endif

                                <span
                                    class="flex-1 text-[14px] {{ $item['icon'] === 'laptop' ? 'font-bold' : 'font-semibold' }} leading-6"
                                >
                                    {{ $item['label'] }}
                                </span>

                                @if ($item['icon'] !== 'laptop')
                                    <svg
                                        class="mr-3 h-2 w-[5px] shrink-0 text-[#7C7480]"
                                        viewBox="0 0 5 8"
                                        fill="none"
                                    >
                                        <path
                                            d="m1 1 3 3-3 3"
                                            stroke="currentColor"
                                            stroke-width="1.3"
                                            stroke-linecap="round"
                                        />
                                    </svg>
                                @endif

                            </a>
                        @endforeach

                    </div>
                </nav>


                {{-- B. PILAR BUDAYA DAN POTENSI LOKAL --}}
                <section
                    class="relative isolate min-h-[256.5px] w-full overflow-hidden
                           rounded-[20px] border border-[#E9D5FF]/90
                           bg-white px-4 pb-4 pt-6
                           shadow-[0_5px_14px_rgba(59,7,100,0.055)]"
                >

                    {{-- KONTEN PILAR BUDAYA --}}
                    <div class="relative z-10">

                        <div class="flex items-center gap-3">

                            {{-- ORNAMEN KAPSUL KUNING DAN MOTIF BUNGA --}}
                            <div
                                class="flex h-8 w-8 shrink-0 items-center justify-center
                                       rounded-[14px]"
                                style="background:linear-gradient(135deg,#FACC15,#EAB308);"
                            >
                                <svg
                                    class="h-[19px] w-[19px]"
                                    viewBox="0 0 24 24"
                                    fill="#4A0E4E"
                                    aria-hidden="true"
                                >
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

                        <div
                            class="my-3 h-[2px] w-full"
                            style="background:linear-gradient(90deg,#9333EA 0%,#C026D3 32%,#FACC15 65%,rgba(250,204,21,0) 100%);"
                        ></div>

                        <p class="text-[12px] font-normal leading-[19.5px] text-[#475569]">
                            SMK Negeri 4 Tarakan tumbuh di tengah keberagaman
                            budaya masyarakat Tarakan, Kalimantan Utara.
                            Potensi budaya lokal yang dipadukan dengan kreativitas
                            dan teknologi digital menjadi inspirasi bagi murid
                            untuk menghasilkan karya inovatif tanpa melupakan
                            nilai-nilai budaya bangsa.
                        </p>

                        <div class="relative mt-3 flex items-center gap-2">
                            <svg
                                class="h-[14px] w-[12px] shrink-0 text-[#C026D3]"
                                viewBox="0 0 16 20"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            >
                                <path d="M8 1 14 3.5v6c0 4.5-2.5 7.2-6 9.5-3.5-2.3-6-5-6-9.5v-6L8 1Z" />
                            </svg>

                            <span class="text-[11px] font-bold leading-[16.5px] text-[#7E22CE]">
                                Berkarakter, Berbudaya, Unggul dalam IT
                            </span>
                        </div>

                    </div>
                    {{-- PENUTUP KONTEN PILAR BUDAYA --}}

                    {{-- WATERMARK ORNAMEN DAYAK KALTARA --}}
                    <img
                        src="{{ asset('images/ornamen_dayak_vektor.svg') }}"
                        alt=""
                        aria-hidden="true"
                        class="pointer-events-none absolute bottom-[-50px] right-[-3px]
                               z-0 h-[185px] w-[135px]
                               object-contain opacity-[0.12] select-none"
                    />

                </section>
                {{-- PENUTUP PILAR BUDAYA --}}


                {{-- C. IDENTITAS SATUAN --}}
                <section
                    class="min-h-[470px] w-full rounded-[20px]
                           border border-[#E9D5FF]/80 bg-white
                           px-4 pb-4 pt-7
                           shadow-[0_5px_14px_rgba(59,7,100,0.055)]"
                >

                    <div class="flex items-center justify-between gap-2">

                        <h2
                            class="flex items-center gap-2 text-[14px]
                                   font-extrabold leading-5 text-[#3B0764]"
                        >
                            <svg
                                class="h-[17px] w-[17px] shrink-0 text-[#9333EA]"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                            >
                                <rect x="3" y="5" width="18" height="14" rx="2" />
                                <circle cx="9" cy="10" r="2" />
                                <path d="M5.7 16c.6-1.8 1.7-2.7 3.3-2.7s2.7.9 3.3 2.7M15 9h3M15 12h3M15 15h3" />
                            </svg>
                            Identitas Satuan
                        </h2>

                        <span
                            class="inline-flex h-[22.5px] shrink-0 items-center
                                   justify-center gap-[6px] rounded-[10px]
                                   border border-[#FACC15] bg-[#FACC15]/20 px-2"
                        >
                            <svg
                                class="h-[11px] w-[11px] shrink-0 text-[#854D0E]"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                                <path d="m12 2 3.1 6.3 6.9 1-5 4.9 1.2 6.8-6.2-3.3-6.2 3.3L7 14.2 2 9.3l6.9-1L12 2Z" />
                            </svg>

                            <span
                                class="whitespace-nowrap text-[11px] font-extrabold leading-[16.5px] text-[#854D0E]"
                            >
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
                                       bg-[#FAF5FF]/70 px-3 py-2.5"
                            >

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
                                                   text-center text-[11px] font-bold leading-4 text-[#7E22CE]"
                                        >
                                            {{ $item['value'] }}
                                        </span>

                                    @else
                                        <span
                                            class="max-w-full break-words text-right
                                                   text-[12px] font-bold leading-[1.5] text-[#3B0764]"
                                        >
                                            {{ $item['value'] }}
                                        </span>
                                    @endif

                                </div>
                            </div>
                        @endforeach

                    </div>
                </section>

            </aside>


            {{-- =====================================================
                 KOLOM KANAN
            ====================================================== --}}
            <div class="min-w-0 space-y-3">

                {{-- D. PILIHAN KONSENTRASI --}}
                <section
                    class="h-auto min-h-0 w-full overflow-hidden
                           rounded-[12px] border border-[#E9D5FF]/60
                           bg-white px-6 pb-3 pt-4
                           shadow-[0_2px_7px_rgba(59,7,100,0.055)]
                           sm:px-7"
                >

                    <div class="grid grid-cols-1 gap-2 sm:grid-cols-[minmax(0,1fr)_245px]">

                        <div class="min-w-0">

                            {{-- BADGE VOKASI --}}
                            <span
                                class="inline-flex h-[27px] w-fit items-center
                                       justify-center rounded-[7px]
                                       bg-[#EFDBFF] px-3"
                            >
                                <span class="whitespace-nowrap text-[12px] font-bold leading-none text-[#2B034F]">
                                    VOKASI TERAPAN KALTARA
                                </span>
                            </span>

                            {{-- JUDUL --}}
                            <h2 class="mt-1.5 text-[15px] font-extrabold leading-5 text-[#25212A]">
                                4 Konsentrasi Keahlian Unggulan SMKN 4 Tarakan
                            </h2>

                            {{-- TAB PROGRAM --}}
                            <div class="mt-3 flex flex-wrap items-center gap-2">

                                @foreach (['tkj', 'dkv', 'animasi', 'pplg'] as $key)
                                    <button
                                        type="button"
                                        wire:click="pilihProgram('{{ $key }}')"
                                        wire:loading.attr="disabled"
                                        wire:key="program-tab-{{ $key }}"
                                        aria-pressed="{{ $activeProgram === $key ? 'true' : 'false' }}"
                                        class="inline-flex h-[34px] items-center
                                               justify-center rounded-full border
                                               px-[17px] text-[12px] font-bold
                                               transition-all duration-200
                                               disabled:opacity-60
                                               {{ $activeProgram === $key
                                                   ? 'border-transparent bg-[#9333EA] text-white shadow-[0_4px_9px_rgba(126,34,206,0.27)]'
                                                   : 'border-[#E9D5FF] bg-[#F1E7F6] text-[#302A35] hover:bg-[#E9D5FF]' }}"
                                    >
                                        {{ $programs[$key]['singkatan'] ?? ($programs[$key]['tab'] ?? strtoupper($key)) }}
                                    </button>
                                @endforeach

                            </div>
                        </div>

                        {{-- DESKRIPSI SAMPING --}}
                        <p
                            class="max-w-[245px] self-center text-left
                                   text-[12px] font-normal leading-[19px]
                                   text-[#514B57] sm:text-right"
                        >
                            Dirancang untuk mencetak lulusan siap kerja,
                            berdaya saing global, dan berjiwa technopreneur.
                        </p>

                    </div>
                </section>


                {{-- E. DETAIL PROGRAM --}}
                <section
                    wire:key="detail-program-{{ $activeProgram }}"
                    class="mt-3 w-full overflow-hidden rounded-[12px]
                           border border-[#F0EAF2] bg-white p-4
                           shadow-[0_3px_8px_rgba(59,7,100,0.09)]
                           sm:p-5"
                >

                    <div
                        class="grid grid-cols-1 items-start gap-4
                               sm:grid-cols-[190px_minmax(0,1fr)]
                               sm:gap-4"
                    >

                        {{-- FOTO PROGRAM --}}
                        <div
                            class="relative h-[175px] w-full overflow-hidden
                                   rounded-[9px] bg-[#F3E8FF]
                                   shadow-[0_3px_8px_rgba(59,7,100,0.16)]
                                   sm:h-[175px] sm:w-[190px]"
                        >
                            <img
                                src="{{ $program['foto'] }}"
                                alt="{{ $program['foto_alt'] }}"
                                class="h-full w-full object-cover object-center"
                                loading="lazy"
                                onerror="this.style.display='none';this.nextElementSibling.classList.remove('hidden');"
                            >

                            {{-- FOTO PENGGANTI JIKA BELUM ADA --}}
                            <div
                                class="absolute inset-0 hidden flex-col
                                       items-center justify-center gap-2
                                       bg-gradient-to-br from-[#4A0E4E]
                                       via-[#7E22CE] to-[#C026D3]
                                       p-3 text-center"
                            >
                                <svg
                                    class="h-9 w-9 text-[#FACC15]"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                >
                                    <rect x="3" y="3" width="18" height="18" rx="3" />
                                    <circle cx="8.5" cy="8.5" r="1.5" />
                                    <path d="m21 15-5-5L5 21" />
                                </svg>

                                <span class="text-[11px] font-semibold text-white">
                                    Dokumentasi {{ $program['singkatan'] }}
                                </span>
                            </div>
                        </div>


                        {{-- DETAIL DI SEBELAH KANAN --}}
                        <div class="min-w-0">

                            {{-- JUDUL DAN IKON KHUSUS --}}
                            <div class="flex items-center gap-[11px]">

                                <span
                                    class="flex h-[34px] w-[34px] shrink-0
                                           items-center justify-center
                                           rounded-[8px] bg-[#F0DDFB]"
                                    aria-hidden="true"
                                >
                                    <svg
                                        class="h-[21px] w-[21px]"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="#211B2A"
                                        stroke-width="1.8"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    >

                                        {{-- ANIMASI --}}
                                        @if ($activeProgram === 'animasi')
                                            <path d="M5 6.5 C2.5 9.5 2.5 14.5 5 17.5" />
                                            <path d="M9 4.5 C5 8.5 5 15.5 9 19.5" />
                                            <circle cx="16" cy="12" r="5" />

                                        {{-- PPLG --}}
                                        @elseif ($activeProgram === 'pplg')
                                            <path d="M8 5 1 12 8 19" stroke-width="2.5" stroke-linecap="square" />
                                            <path d="M16 5 23 12 16 19" stroke-width="2.5" stroke-linecap="square" />

                                        {{-- TKJ --}}
                                        @elseif ($activeProgram === 'tkj')
                                            <path d="M5 5.5 Q5 4 6.5 4 H13" />
                                            <path d="M4 6 V16.5 Q4 18 6 18 H18 Q20 18 20 16 V11" />
                                            <path d="M8 18 V21 M16 18 V21 M6 21 H18" />
                                            <path d="M14 3.5 A7 7 0 0 1 21 10.5" />
                                            <path d="M14.5 6.5 A4 4 0 0 1 18.5 10.5" />
                                            <circle cx="15.8" cy="10.5" r="0.8" fill="#211B2A" stroke="none" />

                                        {{-- DKV --}}
                                        @elseif ($activeProgram === 'dkv')
                                            <path d="M3.5 5.5 18 5 Q20 5 20 7 V18 Q20 20 18 20 H5 Q3 20 3 18 V7 Q3 5.5 3.5 5.5Z" />
                                            <path d="M5.5 14.5 Q8 11.5 9 13 T11.5 13" />
                                            <path d="M11 13 L18 5 Q19 4 20 5 L21.5 6.5 Q22.5 7.5 21 9 L14 16 L10 17 Z" />
                                            <path d="M17.5 6 L20.5 9" />
                                            <path d="M10 17 11 13" />
                                            <path d="M11 20 V22 M7 22 H17 L16 20" />
                                        @endif

                                    </svg>
                                </span>

                                <h2 class="text-[16px] font-extrabold leading-[23px] text-[#211B2A]">
                                    {{ $program['nama'] }}
                                </h2>
                            </div>


                            {{-- DESKRIPSI --}}
                            <p class="mt-2.5 text-[13px] font-normal leading-[22px] text-[#514B57]">
                                {{ $program['deskripsi'] }}
                            </p>


                            {{-- KOMPETENSI --}}
                            <h3
                                class="mt-4 text-[12px] font-extrabold
                                       leading-5 tracking-[0.4px]
                                       text-[#77717D]"
                            >
                                {{ $program['label'] }}
                            </h3>

                            <div class="mt-2 flex flex-wrap gap-1.5">

                                @foreach ($program['kompetensi'] as $kompetensi)
                                    <span
                                        class="inline-flex min-h-[30px]
                                               items-center justify-center
                                               rounded-[7px] bg-[#F3E8F8]
                                               px-2.5 py-1.5 text-[12px]
                                               font-normal leading-4
                                               text-[#443B49]"
                                    >
                                        {{ $kompetensi }}
                                    </span>
                                @endforeach

                            </div>


                            {{-- PROSPEK KARIER --}}
                            <div
                                class="mt-3 rounded-[8px]
                                       border border-[#F1E4F7]
                                       bg-[#F9EEFC] px-3.5 py-2.5"
                            >
                                <h3
                                    class="flex items-center gap-1.5
                                           text-[13px] font-extrabold
                                           leading-5 text-[#3B0764]"
                                >
                                    <svg
                                        class="h-[15px] w-[15px] shrink-0"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="1.8"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        aria-hidden="true"
                                    >
                                        <rect x="3" y="7" width="18" height="14" rx="2" />
                                        <path d="M8 7V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v3" />
                                        <path d="M3 12h18" />
                                        <path d="M10 12v2h4v-2" />
                                    </svg>

                                    Prospek Karir Utama
                                </h3>

                                <p class="mt-1 text-[12px] font-normal leading-[20px] text-[#625C67]">
                                    {{ $program['karier'] }}
                                </p>
                            </div>

                        </div>
                    </div>
                </section>

            </div>
        </div>
    </main>
</div>