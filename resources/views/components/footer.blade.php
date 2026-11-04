<div>
    <footer class="relative w-full overflow-hidden border-t border-[#7E30E1]/50 bg-[#241039] text-[#F3F8FF]">
        @php
        $footerLinks = [
        ['label' => 'Beranda', 'url' => '/'],
        ['label' => 'Tentang Sekolah', 'url' => '/visi-misi'],
        ['label' => 'Kompetensi Keahlian', 'url' => '/program-keahlian'],
        ['label' => 'Pendaftaran SPMB', 'url' => '/spmb'],
        ['label' => 'Berita', 'url' => '/berita'],
        ['label' => 'Agenda', 'url' => '/agenda'],
        ];

        $footerPrograms = [
        'Pengembangan Perangkat Lunak dan Gim',
        'Teknik Komputer dan Jaringan',
        'Desain Komunikasi Visual',
        'Animasi',
        ];
        @endphp

        <div class="mx-auto w-full max-w-[1440px] px-5 py-12 sm:px-8 sm:py-14 lg:px-10 lg:py-16">
            {{-- FOOTER MAIN CONTENT --}}
            <div class="grid grid-cols-1 gap-x-10 gap-y-10 sm:grid-cols-2 xl:grid-cols-[minmax(0,1.35fr)_minmax(150px,0.75fr)_minmax(0,1fr)_minmax(0,1fr)] xl:gap-x-12">
                {{-- SCHOOL IDENTITY --}}
                <div class="min-w-0">
                    <div class="grid grid-cols-[68px_minmax(0,1fr)] items-start gap-x-4 gap-y-4 sm:grid-cols-[76px_minmax(0,1fr)] lg:grid-cols-[84px_minmax(0,1fr)]">
                        {{-- SCHOOL LOGO --}}
                        <img
                            src="{{ asset('images/logo-smkn4.png') }}"
                            alt="Logo SMK Negeri 4 Tarakan"
                            class="relative row-span-3 -translate-y-4 self-start
                            h-[68px] w-[68px] shrink-0 object-contain
                            drop-shadow-[0_3px_8px_rgba(0,0,0,0.25)]
                            sm:h-[76px] sm:w-[76px] sm:-translate-y-5
                            lg:h-[84px] lg:w-[84px] lg:-translate-y-5"
                            loading="lazy">

                        {{-- SCHOOL IDENTITY --}}
                        <a
                            href="{{ url('/') }}"
                            class="flex min-w-0 flex-col justify-center rounded-lg focus:outline-none focus-visible:ring-2 focus-visible:ring-[#FDC003]">
                            <strong class="block break-words text-base font-extrabold leading-tight tracking-tight text-white sm:text-lg lg:text-xl">
                                SMK NEGERI 4 TARAKAN
                            </strong>
                            <span class="mt-1.5 block text-sm leading-5 text-[#C7B9D8] sm:text-base">
                                Kalimantan Utara
                                <span class="px-1 text-[#FDC003]">•</span>
                                NPSN: 70007255
                            </span>
                        </a>

                        {{-- SCHOOL DESCRIPTION --}}
                        <p class="min-w-0 text-[15px] leading-[1.8] text-[#C7B9D8] sm:text-base">
                            Lembaga pendidikan kejuruan yang berfokus pada teknologi dan informasi. Berkomitmen membentuk lulusan kompeten, berbudi pekerti luhur, dan siap kerja di era transformasi digital.
                        </p>

                        {{-- SOCIAL MEDIA --}}
                        <div class="flex min-w-0 flex-wrap items-center gap-2.5">
                            {{-- Facebook --}}
                            <a href="https://www.facebook.com/Smkn4tarakanofficial/"
                                aria-label="Facebook SMK Negeri 4 Tarakan"
                                title="Facebook"
                                class="flex h-10 w-10 items-center justify-center rounded-xl border border-white/10 bg-white/[0.07] text-[#D7CBE4] transition hover:-translate-y-0.5 hover:bg-[#7E30E1] hover:text-white">
                                <svg viewBox="0 0 24 24" class="h-[18px] w-[18px] fill-current" aria-hidden="true">
                                    <path d="M13.4 21v-8.2h2.8l.4-3.2h-3.2V7.5c0-.9.3-1.5 1.6-1.5h1.7V3.1c-.3 0-1.3-.1-2.5-.1-2.5 0-4.2 1.5-4.2 4.3v2.3H7.2v3.2H10V21h3.4Z" />
                                </svg>
                            </a>

                            {{-- Instagram --}}
                            <a href="https://www.instagram.com/officialsmkn4tarakan/"
                                aria-label="Instagram SMK Negeri 4 Tarakan"
                                title="Instagram"
                                class="flex h-10 w-10 items-center justify-center rounded-xl border border-white/10 bg-white/[0.07] text-[#D7CBE4] transition hover:-translate-y-0.5 hover:bg-[#7E30E1] hover:text-white">
                                <svg viewBox="0 0 24 24" class="h-[18px] w-[18px] fill-none stroke-current" stroke-width="1.8" aria-hidden="true">
                                    <rect x="3.2" y="3.2" width="17.6" height="17.6" rx="5" />
                                    <circle cx="12" cy="12" r="4.1" />
                                    <circle cx="17.7" cy="6.5" r="1" class="fill-current stroke-none" />
                                </svg>
                            </a>

                            {{-- YouTube --}}
                            <a href="https://www.youtube.com/@smkn4tarakankaltara280"
                                aria-label="YouTube SMK Negeri 4 Tarakan"
                                title="YouTube"
                                class="flex h-10 w-10 items-center justify-center rounded-xl border border-white/10 bg-white/[0.07] text-[#D7CBE4] transition hover:-translate-y-0.5 hover:bg-[#7E30E1] hover:text-white">
                                <svg viewBox="0 0 24 24" class="h-[19px] w-[19px] fill-current" aria-hidden="true">
                                    <path d="M23.2 7a3 3 0 0 0-2.1-2.1C19.2 4.4 12 4.4 12 4.4s-7.2 0-9.1.5A3 3 0 0 0 .8 7 31 31 0 0 0 .3 12a31 31 0 0 0 .5 5 3 3 0 0 0 2.1 2.1c1.9.5 9.1.5 9.1.5s7.2 0 9.1-.5a3 3 0 0 0 2.1-2.1 31 31 0 0 0 .5-5 31 31 0 0 0-.5-5ZM9.7 15.5v-7l6 3.5-6 3.5Z" />
                                </svg>
                            </a>

                            {{-- TikTok --}}
                            <a href="https://www.tiktok.com/@officialsmkn4trk?is_from_webapp=1&sender_device=pc"
                                aria-label="TikTok SMK Negeri 4 Tarakan"
                                title="TikTok"
                                class="flex h-10 w-10 items-center justify-center rounded-xl border border-white/10 bg-white/[0.07] text-[#D7CBE4] transition hover:-translate-y-0.5 hover:bg-[#7E30E1] hover:text-white">
                                <svg viewBox="0 0 24 24" class="h-[18px] w-[18px] fill-current" aria-hidden="true">
                                    <path d="M19.6 7.2a6.7 6.7 0 0 1-4.1-1.4v8.1a6.1 6.1 0 1 1-5.3-6.1v3.3a2.9 2.9 0 1 0 2.1 2.8V2.5h3.2c.2 2 1.7 3.7 4.1 4v.7Z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- IMPORTANT LINKS --}}
                <div class="min-w-0">
                    <h2 class="mb-5 text-sm font-extrabold uppercase tracking-[0.08em] text-white sm:text-[15px]">
                        Tautan Penting
                    </h2>
                    <ul class="space-y-2.5">
                        @foreach ($footerLinks as $link)
                        <li>
                            <a href="{{ url($link['url']) }}" class="inline-flex text-[15px] leading-6 text-[#C7B9D8] transition-colors hover:text-[#FDC003] focus:outline-none focus-visible:text-[#FDC003] sm:text-base">
                                {{ $link['label'] }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>

                {{-- STUDY PROGRAMS --}}
                <div class="min-w-0">
                    <h2 class="mb-5 text-sm font-extrabold uppercase tracking-[0.08em] text-white sm:text-[15px]">
                        Program Keahlian
                    </h2>
                    <ul class="space-y-2.5">
                        @foreach ($footerPrograms as $program)
                        <li>
                            <a href="{{ url('/program-keahlian') }}" class="inline-flex max-w-full text-[15px] leading-6 text-[#C7B9D8] transition-colors hover:text-[#FDC003] focus:outline-none focus-visible:text-[#FDC003] sm:text-base">
                                {{ $program }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>

                {{-- CONTACT INFORMATION --}}
                <div class="min-w-0">
                    <h2 class="mb-5 text-sm font-extrabold uppercase tracking-[0.08em] text-white sm:text-[15px]">
                        Kontak &amp; Informasi
                    </h2>
                    <address class="space-y-3 text-[15px] not-italic leading-[1.7] text-[#C7B9D8] sm:text-base">
                        <p>
                            Jl. P. Diponegoro, Sebengkok, Kec. Tarakan Tengah, Kota Tarakan, Kalimantan Utara 77114
                        </p>
                        <p>
                            <a href="tel:+625512034981" class="transition-colors hover:text-[#FDC003]">Telp. (0551) 2034981</a>
                        </p>
                        <p>
                            <a href="mailto:info@smkn4tarakan.sch.id" class="break-all transition-colors hover:text-[#FDC003]">info@smkn4tarakan.sch.id</a>
                        </p>
                        <p>
                            Senin - Jumat: 07.15 - 16.00 WITA
                        </p>
                    </address>
                </div>
            </div>

            {{-- FOOTER BOTTOM --}}
            <div class="mt-10 border-t border-white/15 pt-6 sm:mt-12 sm:pt-7">
                <div class="flex flex-col gap-3 text-[13px] leading-6 text-[#AFA0C1] sm:text-sm md:flex-row md:items-center md:justify-between">
                    <p>
                        &copy; {{ date('Y') }} SMK Negeri 4 Tarakan <span class="px-1 text-[#FDC003]">•</span> Hak Cipta Dilindungi Undang-Undang.
                    </p>
                    <p class="md:text-right">
                        Tarakan, Kalimantan Utara, Indonesia
                    </p>
                </div>
            </div>
        </div>
    </footer>
</div>