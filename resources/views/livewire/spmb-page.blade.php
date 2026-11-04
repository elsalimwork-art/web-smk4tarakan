<div>
    @php
    // Calculate the current academic year using the July school-year boundary.
    $currentDate = now('Asia/Makassar');
    $academicYearStart = $currentDate->month >= 7
    ? $currentDate->year
    : $currentDate->year - 1;
    $academicYear = $academicYearStart . '/' . ($academicYearStart + 1);
    @endphp

    <div class="min-h-screen w-full bg-[#F7F3FC] font-[Plus_Jakarta_Sans,Arial,sans-serif] text-[#20132F] antialiased">
        <main class="mx-auto w-full max-w-[1600px] px-4 py-6 sm:px-6 sm:py-8 lg:px-8 lg:py-10">
            <section
                class="relative isolate overflow-hidden rounded-[24px] bg-gradient-to-br from-[#2B1745] via-[#49108B] to-[#7E30E1] text-white shadow-[0_14px_36px_rgba(73,16,139,0.20)]">

                <div class="pointer-events-none absolute -right-20 -top-24 z-0 h-80 w-80 rounded-full bg-[#FDC003]/10 blur-3xl"></div>
                <div class="pointer-events-none absolute -bottom-24 left-[28%] z-0 h-72 w-72 rounded-full bg-white/10 blur-3xl"></div>

                {{-- ORNAMEN TAMENG DAYAK --}}
                <img
                    src="{{ asset('images/ornamen_dayak_kop_bersih.png') }}"
                    alt=""
                    aria-hidden="true"
                    class="pointer-events-none absolute right-5 top-28 z-0 hidden h-[520px] w-[320px] object-contain opacity-20 xl:block">

                {{-- MAIN CONTENT --}}
                <div class="relative z-10 w-full px-5 py-8 sm:px-7 sm:py-10 lg:px-9 lg:py-12 xl:px-10 xl:py-14">

                    <div class="inline-flex max-w-full flex-wrap items-center gap-2 rounded-full border border-white/20 bg-white/10 px-3.5 py-2 text-xs font-extrabold tracking-wide text-[#FDC003] sm:px-4 sm:text-sm">
                        SISTEM PENERIMAAN MURID BARU (SPMB) T.A {{ $academicYear }}
                    </div>

                    <h1 class="mt-4 w-full max-w-none text-[clamp(2.25rem,5vw,4.25rem)] font-black leading-[1.08] tracking-tight text-white sm:mt-5">
                        Sistem Penerimaan Murid Baru
                        <span class="block">
                            SMK Negeri 4 Tarakan
                        </span>
                    </h1>

                    <div class="mt-5 h-1.5 w-20 rounded-full bg-[#FDC003] sm:w-[88px]"></div>

                    <p class="mt-4 w-full max-w-none text-justify text-lg leading-[1.75] text-white/90 sm:mt-5 sm:text-xl lg:text-[22px]">
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

                    {{-- INFORMATION BADGES --}}
                    <div class="mt-5 flex w-full max-w-none flex-wrap items-center gap-2.5">
                        <div class="inline-flex items-center gap-2 rounded-full border border-white/15 bg-white/10 px-3.5 py-2 text-sm font-semibold leading-6 text-white sm:text-base">
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

                        <div class="inline-flex items-center gap-2 rounded-full border border-white/15 bg-white/10 px-3.5 py-2 text-sm font-semibold leading-6 text-white sm:text-base">
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

                    <div class="mt-6 grid w-full max-w-none grid-cols-1 gap-3 sm:mt-7 sm:gap-4 md:grid-cols-[1.2fr_1fr]">
                        <a
                            href="https://ppdb.kaltaraprov.go.id"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="flex min-h-14 min-w-0 items-center justify-center gap-2.5 rounded-xl bg-[#FDC003] px-5 py-3.5 text-center text-base font-extrabold leading-6 text-[#351A43] shadow-md transition duration-200 hover:-translate-y-0.5 hover:bg-[#F9D13B] sm:min-h-[60px] sm:px-6 sm:text-lg">

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
                            class="flex min-h-14 min-w-0 items-center justify-center gap-2.5 rounded-xl border border-white/20 bg-white/10 px-5 py-3.5 text-center text-base font-bold leading-6 text-white transition duration-200 hover:bg-white/20 sm:min-h-[60px] sm:px-6 sm:text-lg">

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

                    <section class="mt-7 w-full max-w-none sm:mt-8">
                        <h2 class="flex items-center gap-2.5 text-lg font-extrabold tracking-tight text-white sm:text-xl">
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

                        <div class="mt-4 grid grid-cols-1 gap-3 sm:grid-cols-2 sm:gap-4">
                            <div class="flex min-h-[76px] min-w-0 items-center gap-3 rounded-2xl border border-[#E7E0EF] bg-[#F7F3FC] p-5 text-[#49108B] shadow-sm sm:p-7">
                                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-[#7E30E1] text-white">
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
                                    <p class="break-words text-base font-extrabold leading-6 text-[#49108B] sm:text-lg">
                                        Elis Utami, S. Kom
                                    </p>
                                    <p class="mt-1 text-base font-semibold leading-6 tracking-[0.01em] text-[#7E30E1] sm:text-lg">
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

                            <div class="flex min-h-[76px] min-w-0 items-center gap-3 rounded-2xl border border-[#E7E0EF] bg-[#F7F3FC] p-5 text-[#49108B] shadow-sm sm:p-7">
                                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-[#7E30E1] text-white">
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
                                    <p class="break-words text-base font-extrabold leading-6 text-[#49108B] sm:text-lg">
                                        Raihan Langgeng, S. Pd
                                    </p>
                                    <p class="mt-1 text-base font-semibold leading-6 tracking-[0.01em] text-[#7E30E1] sm:text-lg">
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
</div>