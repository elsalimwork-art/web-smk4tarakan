<div>
    <footer class="relative w-full overflow-hidden border-t border-[#7E30E1]/50 bg-[#2B1745] font-[Plus_Jakarta_Sans,Arial,sans-serif] text-[#F3F8FF] antialiased">
        @php
        $footerLinks = [
        ['label' => 'Beranda', 'url' => '/'],
        ['label' => 'Tentang Sekolah', 'url' => '/visi-misi'],
        ['label' => 'Manajemen', 'url' => '/manajemen'],
        ['label' => 'Informasi SPMB', 'url' => '/spmb'],
        ['label' => 'Berita', 'url' => '/berita'],
        ['label' => 'Agenda', 'url' => '/agenda'],
        ['label' => 'Kontak', 'url' => '/kontak'],
        ];

        $footerPrograms = [
        'Pengembangan Perangkat Lunak dan Gim',
        'Teknik Komputer dan Jaringan',
        'Desain Komunikasi Visual',
        'Animasi',
        ];
        @endphp

        <div class="mx-auto w-full max-w-[1600px] px-5 py-10 sm:px-7 sm:py-12 lg:px-10 lg:py-14">
            <div class="grid grid-cols-1 gap-x-8 gap-y-10 sm:grid-cols-2 sm:gap-y-10 xl:grid-cols-[1.2fr_0.8fr_1fr_1.2fr] xl:gap-x-10 2xl:gap-x-12">
                <div class="min-w-0">
                    <div class="flex min-w-0 items-center gap-4">
                        <img
                            src="{{ asset('images/logo-smkn4.png') }}"
                            alt="Logo SMK Negeri 4 Tarakan"
                            class="h-[68px] w-[68px] shrink-0 object-contain drop-shadow-[0_3px_8px_rgba(0,0,0,0.25)] sm:h-[76px] sm:w-[76px]"
                            loading="lazy">
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
                    </div>
                    <p class="mt-5 min-w-0 text-sm leading-7 text-[#C7B9D8] sm:text-base">
                        Lembaga pendidikan kejuruan yang berfokus pada teknologi dan informasi. Berkomitmen membentuk lulusan kompeten, berbudi pekerti luhur, dan siap kerja di era transformasi digital.
                    </p>
                    <div class="mt-5 flex min-w-0 flex-wrap items-center gap-2.5">
                            <a href="https://www.facebook.com/Smkn4tarakanofficial/"
                                aria-label="Facebook SMK Negeri 4 Tarakan"
                                title="Facebook"
                                class="flex h-10 w-10 items-center justify-center rounded-xl border border-white/10 bg-white/[0.07] text-[#D7CBE4] transition hover:-translate-y-0.5 hover:bg-[#7E30E1] hover:text-white">
                                <svg viewBox="0 0 24 24" class="h-[18px] w-[18px] fill-current" aria-hidden="true">
                                    <path d="M13.4 21v-8.2h2.8l.4-3.2h-3.2V7.5c0-.9.3-1.5 1.6-1.5h1.7V3.1c-.3 0-1.3-.1-2.5-.1-2.5 0-4.2 1.5-4.2 4.3v2.3H7.2v3.2H10V21h3.4Z" />
                                </svg>
                            </a>
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
                            <a href="https://www.youtube.com/@smkn4tarakankaltara280"
                                aria-label="YouTube SMK Negeri 4 Tarakan"
                                title="YouTube"
                                class="flex h-10 w-10 items-center justify-center rounded-xl border border-white/10 bg-white/[0.07] text-[#D7CBE4] transition hover:-translate-y-0.5 hover:bg-[#7E30E1] hover:text-white">
                                <svg viewBox="0 0 24 24" class="h-[19px] w-[19px] fill-current" aria-hidden="true">
                                    <path d="M23.2 7a3 3 0 0 0-2.1-2.1C19.2 4.4 12 4.4 12 4.4s-7.2 0-9.1.5A3 3 0 0 0 .8 7 31 31 0 0 0 .3 12a31 31 0 0 0 .5 5 3 3 0 0 0 2.1 2.1c1.9.5 9.1.5 9.1.5s7.2 0 9.1-.5a3 3 0 0 0 2.1-2.1 31 31 0 0 0 .5-5 31 31 0 0 0-.5-5ZM9.7 15.5v-7l6 3.5-6 3.5Z" />
                                </svg>
                            </a>
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

                <div class="min-w-0">
                    <h2 class="mb-4 text-sm font-extrabold uppercase tracking-[0.08em] text-white sm:mb-5 sm:text-base">
                        Tautan Penting
                    </h2>
                    <ul class="space-y-2">
                        @foreach ($footerLinks as $link)
                        <li>
                            <a href="{{ url($link['url']) }}" class="inline-flex text-sm leading-7 text-[#C7B9D8] transition-colors hover:text-[#FDC003] focus:outline-none focus-visible:text-[#FDC003] sm:text-base">
                                {{ $link['label'] }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <div class="min-w-0">
                    <h2 class="mb-4 text-sm font-extrabold uppercase tracking-[0.08em] text-white sm:mb-5 sm:text-base">
                        Program Keahlian
                    </h2>
                    <ul class="space-y-2">
                        @foreach ($footerPrograms as $program)
                        <li>
                            <a href="{{ url('/program-keahlian') }}" class="inline-flex max-w-full text-sm leading-7 text-[#C7B9D8] transition-colors hover:text-[#FDC003] focus:outline-none focus-visible:text-[#FDC003] sm:text-base">
                                {{ $program }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <div class="min-w-0">
                    <h2 class="mb-4 text-sm font-extrabold uppercase tracking-[0.08em] text-white sm:mb-5 sm:text-base">
                        Kontak &amp; Informasi
                    </h2>
                    <address class="space-y-4 text-sm not-italic leading-6 text-[#C7B9D8] sm:text-base sm:leading-7">
                        <p class="max-w-sm">
                            Jl. P. Diponegoro, Sebengkok, Kec. Tarakan Tengah, Kota Tarakan, Kalimantan Utara 77114
                        </p>
                        <p>
                            <a href="mailto:smknegeri4tarakan@gmail.com" class="break-all transition-colors hover:text-[#FDC003]">smknegeri4tarakan@gmail.com</a>
                        </p>
                        <div class="border-t border-white/10 pt-4">
                            <h3 class="mb-3 text-xs font-extrabold uppercase tracking-[0.08em] text-white/90 sm:text-sm">
                                Jam Pelayanan
                            </h3>
                            <div class="space-y-3">
                                <div class="min-w-0">
                                    <p class="font-bold text-white">Senin–Kamis</p>
                                    <p class="mt-0.5 text-[#C7B9D8]">07.15–16.00 WITA</p>
                                </div>
                                <div class="min-w-0">
                                    <p class="font-bold text-white">Jumat</p>
                                    <p class="mt-0.5 break-words text-[#C7B9D8]">07.15–11.30 dan 14.00–16.30 WITA</p>
                                </div>
                            </div>
                        </div>
                    </address>
                </div>
            </div>
            <div class="mt-8 border-t border-white/15 pt-5 sm:mt-10 sm:pt-6">
                <div class="grid grid-cols-1 gap-2 text-xs leading-6 text-[#AFA0C1] sm:gap-3 sm:text-sm md:grid-cols-3 md:items-center">
                    <p class="min-w-0">
                        &copy; {{ date('Y') }} SMK Negeri 4 Tarakan <span class="px-1 text-[#FDC003]">•</span> All Rights Reserved.
                    </p>
                    <p class="min-w-0 md:text-center">
                        Website developed by <a href="https://www.instagram.com/na_zzh/" target="_blank" rel="noopener noreferrer" title="Instagram @na_zzh" aria-label="Instagram @na_zzh - Nur Azizah, S.Kom." class="font-semibold text-[#F3F8FF] underline decoration-white/30 underline-offset-4 transition-colors hover:text-[#FDC003] hover:decoration-[#FDC003] focus:outline-none focus-visible:rounded focus-visible:ring-2 focus-visible:ring-[#FDC003]">Nur Azizah, S.Kom.</a>
                    </p>
                    <p class="min-w-0 md:text-right">
                        Tarakan, North Kalimantan, Indonesia
                    </p>
                </div>
            </div>
        </div>
    </footer>
</div>