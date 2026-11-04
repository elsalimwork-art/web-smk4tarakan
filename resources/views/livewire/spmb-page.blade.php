@php
// Calculate the current academic year using the July school-year boundary.
$currentDate = now('Asia/Makassar');
$academicYearStart = $currentDate->month >= 7
? $currentDate->year
: $currentDate->year - 1;
$academicYear = $academicYearStart . '/' . ($academicYearStart + 1);
@endphp

<div class="min-h-screen w-full bg-[#F7F3FC] font-[Plus_Jakarta_Sans,Arial,sans-serif] text-[#20132F] antialiased">
    <main class="mx-auto w-full max-w-[1600px] px-[clamp(16px,4vw,64px)] py-6 sm:py-8 lg:py-10">

        {{-- =====================================================
        MAIN SPMB PANEL
====================================================== --}}
        <section
            class="relative isolate overflow-hidden rounded-[24px] bg-gradient-to-br from-[#2B1745] via-[#49108B] to-[#7E30E1] text-white shadow-[0_14px_36px_rgba(73,16,139,0.20)]">

            <div class="pointer-events-none absolute -right-20 -top-24 z-0 h-80 w-80 rounded-full bg-[#FDC003]/10 blur-3xl">
            </div>

            <div class="pointer-events-none absolute -bottom-24 left-[28%] z-0 h-72 w-72 rounded-full bg-white/10 blur-3xl">
            </div>

            <svg
                class="pointer-events-none absolute right-5 top-28 hidden h-[280px] w-[220px] opacity-20 xl:block"
                viewBox="0 0 240 310"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true">

                <path
                    d="M120 7 L223 66 L223 190 L120 249 L17 190 L17 66 Z"
                    stroke="#F0DE55"
                    stroke-width="3" />

                <path
                    d="M120 25 L205 74 L205 182 L120 231 L35 182 L35 74 Z"
                    stroke="#E5DE00"
                    stroke-width="2.5" />

                <path
                    d="M120 44 L187 82 L187 171 L120 209 L53 171 L53 82 Z"
                    stroke="#F1E85B"
                    stroke-width="2.5" />

                <path
                    d="M60 108 C83 124 101 132 120 140
                       C139 132 157 124 180 108"
                    stroke="#E5DE00"
                    stroke-width="3"
                    stroke-linecap="round" />

                <path
                    d="M60 184 C87 161 102 148 120 140
                       C138 148 153 161 180 184"
                    stroke="#E5DE00"
                    stroke-width="3"
                    stroke-linecap="round" />

                <path
                    d="M120 140
                       C95 158 98 181 110 203
                       C116 214 120 223 120 238
                       C120 223 124 214 130 203
                       C142 181 145 158 120 140Z"
                    stroke="#E5DE00"
                    stroke-width="3"
                    stroke-linejoin="round" />

                <circle cx="60" cy="108" r="10" fill="#E5DE00" />
                <circle cx="180" cy="108" r="10" fill="#E5DE00" />
                <circle cx="60" cy="184" r="10" fill="#E5DE00" />
                <circle cx="180" cy="184" r="10" fill="#E5DE00" />

                <circle cx="120" cy="140" r="5"
                    fill="#E5DE00" />
            </svg>

            {{-- =================================================
        MAIN CONTENT
================================================== --}}
            <div class="relative z-10 w-full px-5 py-8 sm:px-8 sm:py-10 lg:px-12 lg:py-14 xl:px-16">
                <div
                    class="inline-flex max-w-full flex-wrap items-center gap-2 rounded-full border border-white/20 bg-white/10 px-3.5 py-2 text-xs font-bold tracking-wide text-[#FDC003] sm:px-4 sm:text-sm">
                    SISTEM PENERIMAAN MURID BARU (SPMB) T.A {{ $academicYear }}
                </div>

                <h1
                    class="mt-5 w-full max-w-none text-[clamp(2rem,4.2vw,3.75rem)] font-black leading-[1.12] tracking-tight text-white">
                    Sistem Penerimaan Murid Baru

                    <span class="block">
                        SMK Negeri 4 Tarakan
                    </span>
                </h1>

                <div class="mt-5 h-1.5 w-20 rounded-full bg-[#FDC003] sm:w-[88px]">
                </div>

                <p
                    class="mt-5 w-full max-w-none text-justify text-base leading-[1.8] text-white/90 sm:text-[17px] lg:text-lg">
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
        INFORMATION BADGES
================================================== --}}
                <div class="mt-6 flex w-full max-w-none flex-wrap items-center gap-2.5">
                    <div class="inline-flex items-center gap-2 rounded-full border border-white/15 bg-white/10 px-3.5 py-2 text-sm font-semibold leading-5 text-white sm:text-[15px]">
                        <svg
                            class="h-4 w-4 shrink-0 text-[#FDC003]"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            aria-hidden="true">

                            <circle cx="12" cy="8" r="6" />
                            <path d="m8.5 13-1 8 4.5-2.5 4.5 2.5-1-8" />
                            <path d="m9.5 8 1.6 1.6 3.4-3.4" />
                        </svg>
                        Akreditasi B Baik Sekali
                    </div>

                    <div class="inline-flex items-center gap-2 rounded-full border border-white/15 bg-white/10 px-3.5 py-2 text-sm font-semibold leading-5 text-white sm:text-[15px]">
                        <svg
                            class="h-4 w-4 shrink-0 text-[#FDC003]"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
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
        PRIMARY ACTION BUTTONS
================================================== --}}
                <div
                    class="mt-7 grid w-full max-w-none grid-cols-1 gap-3 sm:gap-4 md:grid-cols-[1.2fr_1fr]">
                    <a
                        href="https://ppdb.kaltaraprov.go.id"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="flex min-h-14 min-w-0 items-center justify-center gap-2.5 rounded-xl bg-[#FDC003] px-4 py-3.5 text-center text-[15px] font-extrabold leading-[1.45] text-[#351A43] shadow-md transition duration-200 hover:-translate-y-0.5 hover:bg-[#F9D13B] sm:min-h-[60px] sm:px-5 sm:text-base">

                        <svg
                            class="h-[19px] w-[19px] shrink-0"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            aria-hidden="true">

                            <path d="M14 4h6v6" />
                            <path d="m20 4-10 10" />
                            <path d="M18 13v6a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h6" />

                        </svg>

                        <span class="min-w-0 break-words">
                            Portal SPMB Kaltara (ppdb.kaltaraprov.go.id)
                        </span>
                    </a>

                    <a
                        href="#"
                        onclick="return false;"
                        aria-label="Unduh Juknis SPMB"
                        title="Tambahkan tautan Google Drive resmi di sini"
                        class="flex min-h-14 min-w-0 items-center justify-center gap-2.5 rounded-xl border border-white/20 bg-white/10 px-4 py-3.5 text-center text-[15px] font-bold leading-[1.45] text-white transition duration-200 hover:bg-white/20 sm:min-h-[60px] sm:px-5 sm:text-base">

                        <svg
                            class="h-[19px] w-[19px] shrink-0"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            aria-hidden="true">

                            <path d="M14 3H6a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9Z" />
                            <path d="M14 3v6h6" />
                            <rect x="8" y="12" width="8" height="6" rx="1" />
                            <path d="M12 14v3m-1-1 1 1 1-1" />

                        </svg>

                        <span class="min-w-0 break-words">
                            Unduh Juknis SPMB (Google Drive)
                        </span>
                    </a>

                </div>

                {{-- =================================================
        SPMB COMMITTEE CONTACT PERSON
================================================== --}}
                <section class="mt-8 w-full max-w-none">
                    <h2
                        class="flex items-center gap-2.5 text-sm font-extrabold tracking-wide text-white sm:text-base">

                        <svg
                            class="h-6 w-6 shrink-0 text-[#FDC003]"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            aria-hidden="true">

                            <rect x="3" y="5" width="18" height="14" rx="2" />
                            <circle cx="9" cy="10" r="2" />
                            <path d="M5.5 16c.5-2 2-3 3.5-3s3 1 3.5 3M15 9h3M15 13h3" />

                        </svg>
                        SPMB COMMITTEE CONTACT PERSON
                    </h2>

                    <div class="mt-4 grid grid-cols-1 gap-3.5 sm:grid-cols-2">
                        <div
                            class="flex min-h-[76px] min-w-0 items-center gap-3 rounded-xl border border-[#E7E0EF] bg-[#F7F3FC] px-3.5 py-3.5 text-[#49108B] shadow-sm sm:px-4">
                            <div
                                class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-[#7E30E1] text-white">

                                <svg
                                    class="h-5 w-5"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1.7"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    aria-hidden="true">

                                    <circle cx="12" cy="8" r="3" />
                                    <path d="M5.5 19c.5-3.5 2.8-5.5 6.5-5.5s6 2 6.5 5.5Z" />
                                </svg>
                            </div>

                            <div class="min-w-0 flex-1">
                                <p class="break-words text-sm font-bold leading-5 text-[#49108B] sm:text-base">
                                    Elis Utami, S. Kom
                                </p>

                                <p class="mt-1 text-sm font-semibold leading-5 tracking-[0.01em] text-[#7E30E1] sm:text-base">
                                    0823-5170-5890
                                </p>
                            </div>

                            <a
                                href="https://wa.me/6282351705890"
                                target="_blank"
                                rel="noopener noreferrer"
                                aria-label="Hubungi Elis Utami melalui WhatsApp"
                                class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-[#07966F] text-white transition hover:bg-[#047857] focus:outline-none focus-visible:ring-2 focus-visible:ring-[#07966F] focus-visible:ring-offset-2">

                                <svg
                                    class="h-[19px] w-[19px]"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1.8"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    aria-hidden="true">

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

                        <div
                            class="flex min-h-[76px] min-w-0 items-center gap-3 rounded-xl border border-[#E7E0EF] bg-[#F7F3FC] px-3.5 py-3.5 text-[#49108B] shadow-sm sm:px-4">
                            <div
                                class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-[#7E30E1] text-white">

                                <svg
                                    class="h-5 w-5"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1.7"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    aria-hidden="true">

                                    <circle cx="12" cy="8" r="3" />
                                    <path d="M5.5 19c.5-3.5 2.8-5.5 6.5-5.5s6 2 6.5 5.5Z" />
                                </svg>
                            </div>

                            <div class="min-w-0 flex-1">
                                <p class="break-words text-sm font-bold leading-5 text-[#49108B] sm:text-base">
                                    Raihan Langgeng, S. Pd
                                </p>

                                <p class="mt-1 text-sm font-semibold leading-5 tracking-[0.01em] text-[#7E30E1] sm:text-base">
                                    0822-5138-0253
                                </p>
                            </div>

                            <a
                                href="https://wa.me/6282251380253"
                                target="_blank"
                                rel="noopener noreferrer"
                                aria-label="Hubungi Raihan Langgeng melalui WhatsApp"
                                class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-[#07966F] text-white transition hover:bg-[#047857] focus:outline-none focus-visible:ring-2 focus-visible:ring-[#07966F] focus-visible:ring-offset-2">

                                <svg
                                    class="h-[19px] w-[19px]"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1.8"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    aria-hidden="true">

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