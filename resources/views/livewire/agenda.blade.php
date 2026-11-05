
<div>
    <link rel="stylesheet" href="{{ asset('css/agenda.css') }}">

    {{-- HEADER AGENDA --}}
    
{{-- =====================================================
     01. KOP ATAS AGENDA
====================================================== --}}
<header class="relative isolate min-h-[260px] w-full overflow-hidden
    rounded-[22px] border border-white/20
    px-6 pb-8 pt-10 text-white
    shadow-[0_12px_22px_rgba(73,16,139,0.20)]
    sm:px-8 xl:h-[323px] xl:min-h-[323px]
    xl:px-[50px] xl:pt-[48px] xl:pb-0"
    style="background:linear-gradient(105deg,#2B1745 0%,#49108B 48%,#7E30E1 100%);">

    {{-- ORNAMEN LINGKARAN KIRI --}}
    <svg class="pointer-events-none absolute -left-[50px] -top-[65px]
        -z-10 h-[220px] w-[170px] opacity-40"
        viewBox="0 0 170 220" fill="none" aria-hidden="true">

        <circle cx="52" cy="105" r="115" stroke="#FDC003" stroke-width="3"/>
        <circle cx="52" cy="105" r="84" stroke="#FDC003" stroke-width="3"/>
        <circle cx="52" cy="105" r="9" fill="#FDC003"/>
        <path d="M-20 120C30 120 70 145 90 190"
            stroke="#FDC003" stroke-width="3"/>
    </svg>

    {{-- CAHAYA KANAN --}}
    <div class="pointer-events-none absolute -right-16 -top-16 -z-10
        h-72 w-72 rounded-full bg-[#FDC003]/10 blur-3xl">
    </div>

    {{-- ORNAMEN DAYAK KANAN --}}
    <img src="{{ asset('images/ornamen_dayak_kop_bersih.png') }}"
        alt="" aria-hidden="true"
        class="pointer-events-none absolute right-[25px] top-1/2
        hidden h-[310px] w-[125px]
        -translate-y-1/2 object-contain
        opacity-[0.38] sm:block" />

    {{-- KONTEN KOP --}}
    <div class="relative z-10 max-w-full sm:max-w-[calc(100%-145px)]">

        {{-- JUDUL AGENDA --}}
        <h1 class="text-[32px] font-extrabold
            leading-[1.15] tracking-[-1.2px] text-white
            sm:text-[42px]
            xl:whitespace-nowrap xl:text-[60px]
            xl:leading-[1.2] xl:tracking-[-1.8px]">
            Agenda SMK Negeri 4 Tarakan
        </h1>

        {{-- DESKRIPSI AGENDA --}}
        <p class="mt-[12px] max-w-[1000px] text-[13px]
            font-normal leading-6 text-white/90
            sm:text-[16px] xl:text-[18px] xl:leading-[29px]">
            Temukan berbagai informasi kegiatan dan agenda resmi
            SMK Negeri 4 Tarakan sebagai bagian dari aktivitas
            pendidikan, pengembangan kompetensi, dan prestasi siswa.
        </p>

        {{-- BADGE IDENTITAS --}}
        <div class="mt-[28px] flex flex-wrap items-center gap-2.5">

            {{-- NPSN --}}
            <div class="inline-flex h-[37px] items-center gap-[8px]
                rounded-full border border-white/20
                bg-white/10 px-4 backdrop-blur-sm">

                <svg class="h-[15px] w-[15px] shrink-0 text-[#FDC003]"
                    viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.8"
                    stroke-linecap="round" stroke-linejoin="round">

                    <path d="M12 2.8 14.2 4l2.5-.4 1.2 2.3 2.5 1-.2 2.6 1.4 2.2-1.4 2.2.2 2.6-2.5 1-1.2 2.3-2.5-.4-2.2 1.2-2.2-1.2-2.5.4-1.2-2.3-2.5-1 .2-2.6L2.4 12l1.4-2.2-.2-2.6 2.5-1 1.2-2.3 2.5.4L12 2.8Z"/>
                    <path d="m9 12 2 2 4-4"/>
                </svg>

                <span class="whitespace-nowrap text-[13px] font-semibold text-white/95">
                    NPSN: 70007255
                </span>
            </div>

            {{-- STATUS SEKOLAH --}}
            <div class="inline-flex h-[37px] items-center gap-[8px]
                rounded-full border border-white/20
                bg-white/10 px-4 backdrop-blur-sm">

                <svg class="h-[15px] w-[15px] shrink-0 text-[#FDC003]"
                    viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.8"
                    stroke-linecap="round" stroke-linejoin="round">

                    <circle cx="12" cy="8" r="5.5"/>
                    <path d="m9 7.7 2 2 4-4"/>
                    <path d="m8.5 12.5-1 8 4.5-2.5 4.5 2.5-1-8"/>
                </svg>

                <span class="whitespace-nowrap text-[13px] font-semibold text-white/95">
                    Sekolah Menengah Kejuruan
                </span>
            </div>

            {{-- PROGRAM KEAHLIAN --}}
            <div class="inline-flex h-[37px] items-center gap-[8px]
                rounded-full border border-white/20
                bg-white/10 px-4 backdrop-blur-sm">

                <svg class="h-[15px] w-[15px] shrink-0 text-[#67D7F5]"
                    viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.8"
                    stroke-linecap="round" stroke-linejoin="round">

                    <rect x="2.5" y="4" width="13.5" height="11" rx="1.5"/>
                    <path d="M6.5 19.5h5.5m-2.75-4.5v4.5"/>
                    <rect x="17.5" y="7.5" width="4" height="9" rx="1"/>
                    <path d="M19 14.2h1"/>
                </svg>

                <span class="whitespace-nowrap text-[13px] font-semibold text-white/95">
                    PPLG · TKJ · DKV · Animasi
                </span>
            </div>

        </div>
    </div>
</header>



    {{-- DAFTAR AGENDA --}}
    <section class="agenda-section" id="daftar-agenda">

        <div class="agenda-section-container">

            <div class="agenda-heading">
                <div>
                    <span class="section-label">
                        <span></span>
                        INFORMASI AGENDA
                    </span>

                    <h2>Agenda Kegiatan Sekolah</h2>

                    <p>
                        Ikuti informasi terbaru mengenai berbagai kegiatan
                        dan aktivitas di SMK Negeri 4 Tarakan.
                    </p>
                </div>
            </div>


            {{-- PENCARIAN DAN FILTER --}}
            <div class="agenda-filter">

                <div class="agenda-search">
                    <span>⌕</span>
                    <input
                        type="text"
                        wire:model.live="search"
                        placeholder="Cari agenda kegiatan..."
                    >
                </div>

                <div class="agenda-categories">
                    <button
                        type="button"
                        wire:click="$set('kategori', 'Semua')"
                        class="{{ $kategori === 'Semua' ? 'active' : '' }}"
                    >
                        Semua
                    </button>

                    <button
                        type="button"
                        wire:click="$set('kategori', 'Akademik')"
                        class="{{ $kategori === 'Akademik' ? 'active' : '' }}"
                    >
                        Akademik
                    </button>

                    <button
                        type="button"
                        wire:click="$set('kategori', 'Kesiswaan')"
                        class="{{ $kategori === 'Kesiswaan' ? 'active' : '' }}"
                    >
                        Kesiswaan
                    </button>

                    <button
                        type="button"
                        wire:click="$set('kategori', 'Sekolah')"
                        class="{{ $kategori === 'Sekolah' ? 'active' : '' }}"
                    >
                        Sekolah
                    </button>
                </div>

            </div>


            {{-- KARTU AGENDA --}}
            <div class="agenda-grid">

                @forelse ($agenda as $item)

                    <article class="agenda-card">

                        <div class="agenda-card-image">
                            <img
                                src="{{ asset($item['gambar']) }}"
                                alt="{{ $item['judul'] }}"
                                onerror="this.style.display='none'"
                            >

                            <span class="agenda-card-category">
                                {{ $item['kategori'] }}
                            </span>

                            <div class="agenda-date">
                                <strong>{{ $item['tanggal'] }}</strong>
                                <span>{{ $item['bulan'] }}</span>
                            </div>
                        </div>

                        <div class="agenda-card-content">

                            <div class="agenda-card-meta">
                                <span>◷ {{ $item['waktu'] }}</span>
                                <span>📍 {{ $item['lokasi'] }}</span>
                            </div>

                            <h3>{{ $item['judul'] }}</h3>

                            <p>{{ $item['deskripsi'] }}</p>

                            <div class="agenda-card-footer">
                                <span class="agenda-status">
                                    <span></span>
                                    {{ $item['status'] }}
                                </span>

                                <a href="{{ url('/agenda/' . $item['slug']) }}">
                                    Lihat Detail
                                    <span>→</span>
                                </a>
                            </div>

                        </div>
                    </article>

                @empty

                    <div class="agenda-empty">
                        <div>⌕</div>
                        <h3>Agenda Tidak Ditemukan</h3>
                        <p>
                            Belum ada agenda yang sesuai dengan pencarian
                            atau kategori yang dipilih.
                        </p>
                    </div>

                @endforelse

            </div>

        </div>
    </section>
</div>
