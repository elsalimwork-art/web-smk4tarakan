
{{-- ======================================================
     01. KOP ATAS BERITA
======================================================= --}}
<header
    class="relative isolate min-h-[220px] w-full overflow-hidden
           rounded-[18px] border border-white/20
           px-6 pb-8 pt-9 text-white
           shadow-[0_12px_22px_rgba(73,16,139,0.20)]
           sm:px-8 xl:h-[258px] xl:min-h-[258px]
           xl:px-[40px] xl:pt-[42px] xl:pb-0"
    style="background:linear-gradient(90deg,#2B1745 0%,#49108B 50%,#7E30E1 100%);"
>

    {{-- ORNAMEN KIRI --}}
    <svg
        class="pointer-events-none absolute -left-[49px] -top-[30px]
               -z-10 h-[220px] w-[155px] opacity-30"
        viewBox="0 0 155 220"
        fill="none"
        aria-hidden="true"
    >
        <circle cx="53" cy="61" r="91" stroke="#FDC003" stroke-width="3" />
        <circle cx="53" cy="61" r="67" stroke="#FDC003" stroke-width="3" />
        <circle cx="53" cy="61" r="8.5" fill="#FDC003" />
        <path d="M-12 79C30 79 69 101 87 151"
              stroke="#FDC003" stroke-width="3" />
    </svg>

    {{-- CAHAYA KANAN --}}
    <div
        class="pointer-events-none absolute -right-16 -top-16 -z-10
               h-64 w-64 rounded-full bg-[#FDC003]/10 blur-3xl"
    ></div>

    {{-- ORNAMEN DAYAK KANAN --}}
    <img
        src="{{ asset('images/ornamen_dayak_kop_bersih.png') }}"
        alt=""
        aria-hidden="true"
        class="pointer-events-none absolute right-[25px] top-1/2
               hidden h-[255px] w-auto
               -translate-y-1/2 object-contain
               opacity-[0.32] sm:block"
    />

    {{-- ISI BANNER --}}
    <div class="relative z-10 max-w-[895px] sm:max-w-[calc(100%-170px)]">

        {{-- JUDUL BERITA --}}
        <h1
            class="max-w-[895px] text-[30px] font-extrabold
                   leading-[1.15] tracking-[-1.2px] text-white
                   sm:text-[38px] xl:whitespace-nowrap
                   xl:text-[48px] xl:leading-[48px]"
        >
            Berita SMK Negeri 4 Tarakan
        </h1>

        {{-- DESKRIPSI BERITA --}}
        <p
            class="mt-[12px] max-w-[790px] text-[13px]
                   font-normal leading-6 text-white/90
                   sm:text-[14px] xl:text-[15px]"
        >
            Pusat informasi terbaru mengenai kegiatan, prestasi,
            pengumuman, dan berbagai perkembangan SMK Negeri 4 Tarakan.
        </p>

        {{-- BADGE IDENTITAS --}}
        <div class="mt-[25px] flex flex-wrap items-center gap-2.5">

            {{-- NPSN --}}
            <div
                class="inline-flex h-[30px] items-center gap-[7px]
                       rounded-full border border-white/20
                       bg-white/10 px-3 backdrop-blur-sm"
            >
                <svg
                    class="h-[14px] w-[14px] shrink-0 text-[#FDC003]"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.8"
                    stroke-linecap="round"
                    stroke-linejoin="round"
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
                       bg-white/10 px-3 backdrop-blur-sm"
            >
                <svg
                    class="h-[14px] w-[14px] shrink-0 text-[#FDC003]"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.8"
                    stroke-linecap="round"
                    stroke-linejoin="round"
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
                    <rect x="2.5" y="4" width="13.5" height="11" rx="1.5"/>
                    <path d="M6.5 19.5h5.5m-2.75-4.5v4.5"/>
                    <rect x="17.5" y="7.5" width="4" height="9" rx="1"/>
                    <path d="M19 14.2h1"/>
                </svg>

                <span class="whitespace-nowrap text-[11px] font-semibold leading-none text-white/95">
                    PPLG · TKJ · DKV · Animasi
                </span>
            </div>

        </div>
    </div>
</header>
