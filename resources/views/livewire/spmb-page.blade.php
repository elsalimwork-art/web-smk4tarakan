<div class="min-h-screen w-full bg-[#FCF8FF] text-[#34223F]" style="font-family:'Inter Variable','Inter',sans-serif;">

    <main class="mx-auto w-full max-w-[1500px]
                 px-[clamp(16px,3.4vw,55px)] py-6 sm:py-7">

        {{-- =====================================================
             MAIN SPMB PANEL
        ====================================================== --}}
        <section
            class="relative isolate min-h-[680px] overflow-hidden
                   rounded-[20px] text-white
                   shadow-[0_12px_28px_rgba(45,12,55,0.16)]
                   lg:min-h-[736px]"
            style="background:linear-gradient(110deg,#50105F 0%,#7620C2 45%,#C323D0 100%);">


            {{-- DEKORASI CAHAYA --}}
            <div
                class="pointer-events-none absolute -right-20 -top-24
                        -z-10 h-80 w-80 rounded-full
                        bg-fuchsia-400/20 blur-3xl">
            </div>

            <div
                class="pointer-events-none absolute bottom-[-100px]
                        left-[28%] -z-10 h-72 w-72 rounded-full
                        bg-purple-400/15 blur-3xl">
            </div>


            {{-- =================================================
                 ORNAMEN TEKNOLOGI KANAN
            ================================================== --}}
            <img src="{{ asset('images/ornamen-spmb.png') }}" alt="" aria-hidden="true"
                class="pointer-events-none absolute right-[20px] top-1/2
           z-0 hidden h-[600px] w-[500px]
           -translate-y-1/2 object-contain
           opacity-[0.20] select-none lg:block" />


            {{-- =================================================
                 KONTEN UTAMA
            ================================================== --}}
            <div
                class="relative z-10 w-full
                        px-5 pb-9 pt-9
                        sm:px-8 sm:pb-10 sm:pt-11
                        lg:px-[48px] lg:pb-[55px] lg:pt-[57px]">


                {{-- LABEL TAHUN AJARAN --}}
                <div
                    class="inline-flex items-center gap-2
                           rounded-full border border-white/10
                           bg-white/15 px-3 py-1.5
                           text-[10px] font-extrabold
                           tracking-[0.04em] text-[#F1E85B]
                           sm:text-[11px]">

                    <svg class="h-[15px] w-[15px] shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">

                        <path
                            d="M12 3 14.5 5l3.2-.1.8 3.1 2.5 2-1.1 3 .4 3.2-3 1.2-1.6 2.8-3.3-.7-3.1 1-1.8-2.7-3-1-.1-3.3-1.8-2.6 1.8-2.6.1-3.3 3-1 1.8-2.7 3.1 1Z" />

                        <path d="m9 12 2 2 4-4" />

                    </svg>

                    SISTEM PENERIMAAN MURID BARU (SPMB) T.A 2025/2026

                </div>


                {{-- JUDUL UTAMA --}}
                <h1
                    class="mt-[17px] max-w-[850px]
                           text-[29px] font-extrabold
                           leading-[1.16] tracking-[-1.1px]
                           text-white
                           sm:text-[36px]
                           md:text-[40px]
                           lg:text-[44px]">

                    Sistem Penerimaan Murid Baru SMK
                    <span class="block">
                        Negeri 4 Tarakan
                    </span>

                </h1>


                {{-- GARIS KUNING --}}
                <div class="mt-[15px] h-[6px] w-[86px]
                            rounded-full bg-[#E5DE00]">
                </div>


                {{-- DESKRIPSI --}}
                <p
                    class="mt-[17px] max-w-[690px]
                           text-[13px] leading-[1.85]
                           text-white/90
                           sm:text-[14px]
                           lg:text-[16px] lg:leading-[1.7]">

                    Setiap tahun, SMKN 4 Tarakan menjadi saksi dari
                    antusiasme yang luar biasa saat penerimaan peserta
                    didik baru dimulai. Ribuan siswa bersemangat mengikuti
                    proses pendaftaran, mencerminkan minat mereka dalam
                    bidang kejuruan yang ditawarkan sekolah ini. Dengan
                    proses yang transparan dan adil, calon siswa diberi
                    kesempatan untuk menunjukkan potensi mereka. Para staf
                    dan guru dengan penuh semangat menyambut generasi baru
                    ini, siap memberikan pendidikan berkualitas dan
                    mempersiapkan mereka untuk masa depan yang cerah
                    di dunia kerja.

                </p>


                {{-- =================================================
                     BADGE INFORMASI
                ================================================== --}}
                <div class="mt-[20px] flex max-w-[850px]
                            flex-wrap items-center gap-2">

                    {{-- BADGE 1 --}}
                    <div
                        class="inline-flex items-center gap-[7px]
                                rounded-full border border-white/10
                                bg-white/15 px-3 py-1.5
                                text-[10px] font-semibold text-white
                                sm:text-[11px]">

                        <svg class="h-[14px] w-[14px] shrink-0 text-[#E5DE00]" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            aria-hidden="true">

                            <rect x="3" y="4" width="15" height="12" rx="2" />
                            <path d="M7 20h7M10 16v4" />
                            <path d="M18 8h3v11h-8" />

                        </svg>

                        100% Digital &amp; Transparan

                    </div>


                    {{-- BADGE 2 --}}
                    <div
                        class="inline-flex items-center gap-[7px]
                                rounded-full border border-white/10
                                bg-white/15 px-3 py-1.5
                                text-[10px] font-semibold text-white
                                sm:text-[11px]">

                        <svg class="h-[14px] w-[14px] shrink-0 text-[#E5DE00]" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            aria-hidden="true">

                            <circle cx="12" cy="8" r="6" />
                            <path d="m8.5 13-1 8 4.5-2.5 4.5 2.5-1-8" />
                            <path d="m9.5 8 1.6 1.6 3.4-3.4" />

                        </svg>

                        Akreditasi B Baik Sekali

                    </div>


                    {{-- BADGE 3 --}}
                    <div
                        class="inline-flex items-center gap-[7px]
                                rounded-full border border-white/10
                                bg-white/15 px-3 py-1.5
                                text-[10px] font-semibold text-white
                                sm:text-[11px]">

                        <svg class="h-[14px] w-[14px] shrink-0 text-[#E5DE00]" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            aria-hidden="true">

                            <circle cx="12" cy="5" r="2" />
                            <circle cx="6" cy="12" r="2" />
                            <circle cx="18" cy="12" r="2" />
                            <circle cx="9" cy="19" r="2" />
                            <circle cx="15" cy="19" r="2" />

                            <path d="m11 7-4 3M13 7l4 3M7 14l2 3M17 14l-2 3M8 12h8" />

                        </svg>

                        4 Konsentrasi Keahlian IT

                    </div>

                </div>


                {{-- =================================================
                     DUA TOMBOL UTAMA
                ================================================== --}}
                <div
                    class="mt-[25px] grid w-full max-w-[860px]
                           grid-cols-1 gap-3.5
                           lg:grid-cols-[1.23fr_1fr]">


                    {{-- PORTAL SPMB --}}
                    <a href="https://ppdb.kaltaraprov.go.id" target="_blank" rel="noopener noreferrer"
                        class="flex min-h-[52px] min-w-0
                               items-center justify-center gap-2.5
                               rounded-xl bg-[#E5DE00]
                               px-3 py-3
                               text-center text-[12px]
                               font-extrabold text-[#21112F]
                               shadow-[0_5px_12px_rgba(30,10,30,0.14)]
                               transition duration-200
                               hover:-translate-y-0.5 hover:bg-[#F4ED26]
                               sm:text-[14px] lg:whitespace-nowrap
                               lg:text-[16px]">

                        <svg class="h-[19px] w-[19px] shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">

                            <path d="M14 4h6v6" />
                            <path d="m20 4-10 10" />
                            <path d="M18 13v6a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h6" />

                        </svg>

                        <span>
                            Portal SPMB Kaltara (ppdb.kaltaraprov.go.id)
                        </span>

                    </a>


                    {{-- UNDUH JUKNIS --}}
                    <a href="#" onclick="return false;" aria-label="Unduh Juknis SPMB"
                        title="Tambahkan tautan Google Drive resmi di sini"
                        class="flex min-h-[52px] min-w-0
                               items-center justify-center gap-2.5
                               rounded-xl border border-white/10
                               bg-white/15 px-3 py-3
                               text-center text-[12px]
                               font-semibold text-white
                               transition duration-200
                               hover:bg-white/25
                               sm:text-[14px] lg:whitespace-nowrap
                               lg:text-[16px]">

                        <svg class="h-[19px] w-[19px] shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">

                            <path d="M14 3H6a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9Z" />
                            <path d="M14 3v6h6" />
                            <rect x="8" y="12" width="8" height="6" rx="1" />
                            <path d="M12 14v3m-1-1 1 1 1-1" />

                        </svg>

                        <span>
                            Unduh Juknis SPMB (Google Drive)
                        </span>

                    </a>

                </div>


                {{-- =================================================
                     CONTACT PERSON PANITIA
                ================================================== --}}
                <section class="mt-[27px] w-full max-w-[675px]">

                    {{-- JUDUL KONTAK --}}
                    <h2
                        class="flex items-center gap-2
                               text-[11px] font-extrabold
                               tracking-[0.045em] text-white
                               sm:text-[12px]">

                        <svg class="h-[21px] w-[21px] shrink-0 text-[#E5DE00]" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            aria-hidden="true">

                            <rect x="3" y="5" width="18" height="14" rx="2" />
                            <circle cx="9" cy="10" r="2" />
                            <path d="M5.5 16c.5-2 2-3 3.5-3s3 1 3.5 3M15 9h3M15 13h3" />

                        </svg>

                        CONTACT PERSON PANITIA SPMB

                    </h2>


                    {{-- KARTU KONTAK --}}
                    <div class="mt-3 grid grid-cols-1 gap-3 lg:grid-cols-2">


                        {{-- ELIS UTAMI --}}
                        <div
                            class="flex min-h-[65px] min-w-0
                                   items-center gap-2.5
                                   rounded-xl border border-white/60
                                   bg-[#FBF8FF] px-3.5 py-3
                                   text-[#49108B]
                                   shadow-[0_2px_7px_rgba(30,10,60,0.08)]">

                            {{-- AVATAR --}}
                            <div
                                class="flex h-[38px] w-[38px] shrink-0
                                       items-center justify-center
                                       rounded-full bg-[#9135E8] text-white">

                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"
                                    aria-hidden="true">

                                    <circle cx="12" cy="8" r="3" />
                                    <path d="M5.5 19c.5-3.5 2.8-5.5 6.5-5.5s6 2 6.5 5.5Z" />

                                </svg>

                            </div>


                            {{-- INFORMASI KONTAK --}}
                            <div class="min-w-0 flex-1">

                                <p
                                    class="text-[11px] font-bold text-[#49108B]
                                          sm:text-[12px]">

                                    Elis Utami, S. Kom

                                </p>

                                <p
                                    class="mt-[2px] text-[12px]
                                          font-semibold tracking-[0.01em]
                                          text-[#7E30E1]">

                                    0823-5170-5890

                                </p>

                            </div>


                            {{-- WHATSAPP --}}
                            <a href="https://wa.me/6282351705890" target="_blank" rel="noopener noreferrer"
                                aria-label="Hubungi Elis Utami melalui WhatsApp"
                                class="flex h-[34px] w-[34px] shrink-0
                                       items-center justify-center
                                       rounded-lg bg-[#07966F] text-white
                                       transition hover:bg-[#047857]">

                                <svg class="h-[19px] w-[19px]" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                    stroke-linejoin="round" aria-hidden="true">

                                    <path d="M21 11.5a8.4 8.4 0 0 1-.9 3.8
                                             8.5 8.5 0 0 1-7.6 4.7
                                             8.4 8.4 0 0 1-3.8-.9L3 21
                                             l1.9-5.7a8.4 8.4 0 0 1-.9-3.8
                                             A8.5 8.5 0 0 1 8.7 4
                                             a8.4 8.4 0 0 1 3.8-.9h.5
                                             a8.5 8.5 0 0 1 8 8v.4Z" />

                                    <path d="M9 9c.3 1.8 1.8 3.3 3.6 3.6" />

                                </svg>

                            </a>

                        </div>


                        {{-- RAIHAN LANGGENG --}}
                        <div
                            class="flex min-h-[65px] min-w-0
                                   items-center gap-2.5
                                   rounded-xl border border-white/60
                                   bg-[#FBF8FF] px-3.5 py-3
                                   text-[#49108B]
                                   shadow-[0_2px_7px_rgba(30,10,60,0.08)]">

                            {{-- AVATAR --}}
                            <div
                                class="flex h-[38px] w-[38px] shrink-0
                                       items-center justify-center
                                       rounded-full bg-[#9135E8] text-white">

                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"
                                    aria-hidden="true">

                                    <circle cx="12" cy="8" r="3" />
                                    <path d="M5.5 19c.5-3.5 2.8-5.5 6.5-5.5s6 2 6.5 5.5Z" />

                                </svg>

                            </div>


                            {{-- INFORMASI KONTAK --}}
                            <div class="min-w-0 flex-1">

                                <p
                                    class="text-[11px] font-bold text-[#49108B]
                                          sm:text-[12px]">

                                    Raihan Langgeng, S. Pd

                                </p>

                                <p
                                    class="mt-[2px] text-[12px]
                                          font-semibold tracking-[0.01em]
                                          text-[#7E30E1]">

                                    0822-5138-0253

                                </p>

                            </div>


                            {{-- WHATSAPP --}}
                            <a href="https://wa.me/6282251380253" target="_blank" rel="noopener noreferrer"
                                aria-label="Hubungi Raihan Langgeng melalui WhatsApp"
                                class="flex h-[34px] w-[34px] shrink-0
                                       items-center justify-center
                                       rounded-lg bg-[#07966F] text-white
                                       transition hover:bg-[#047857]">

                                <svg class="h-[19px] w-[19px]" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                    stroke-linejoin="round" aria-hidden="true">

                                    <path d="M21 11.5a8.4 8.4 0 0 1-.9 3.8
                                             8.5 8.5 0 0 1-7.6 4.7
                                             8.4 8.4 0 0 1-3.8-.9L3 21
                                             l1.9-5.7a8.4 8.4 0 0 1-.9-3.8
                                             A8.5 8.5 0 0 1 8.7 4
                                             a8.4 8.4 0 0 1 3.8-.9h.5
                                             a8.5 8.5 0 0 1 8 8v.4Z" />

                                    <path d="M9 9c.3 1.8 1.8 3.3 3.6 3.6" />

                                </svg>

                            </a>

                        </div>

                    </div>

                </section>

            </div>

        </section>

    </main>

</div>
