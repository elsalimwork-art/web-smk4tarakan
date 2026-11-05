<div>
    <div class="min-h-screen w-full bg-[#F7F3FC] font-[Plus_Jakarta_Sans,Arial,sans-serif] text-[#20132F] antialiased">
        @php
            /*
             * DATA AGENDA / KONTEN MEDIA SOSIAL
             * Tambahkan URL postingan dari platform mana pun pada array ini.
             * Sistem mendeteksi platform umum secara otomatis.
             * Jika platform lain memerlukan URL embed khusus, isi field 'embed_url'.
             * Preview caption bawaan hanya akan muncul jika disediakan oleh embed resminya.
             */
            $agendaKonten = [
                [
                    'href' => 'https://www.instagram.com/p/DfA4XvGS_Go/?utm_source=ig_web_copy_link&obrf=MzRlODBiNWFlZA==&srtk=MzRlODBiNWFlZA==',
                    'title' => 'Hari Sumpah Pemuda',
                    'category' => 'Agenda',
                ],
                [
                    'href' => 'https://www.instagram.com/reel/DcaAmNoRJe1/?utm_source=ig_web_copy_link&srtk=MzRlODBiNWFlZA==',
                    'title' => 'Kegiatan memperingati maulid nabi',
                    'category' => 'Agenda',
                ],
                [
                    'href' => 'https://www.instagram.com/p/DbHiJiXmOoV/?utm_source=ig_web_copy_link&srtk=MzRlODBiNWFlZA==',
                    'title' => 'Upacara bendera memperingati hari anak nasional ke-42 tahun',
                    'category' => 'Agenda',
                ],
                [
                    'href' => 'https://www.instagram.com/p/DcKWGONGfTP/?utm_source=ig_web_copy_link&srtk=MzRlODBiNWFlZA==',
                    'title' => 'Kegiatan lomba 17 agustus',
                    'category' => 'Agenda',
                ],
                [
                    'href' => 'https://www.instagram.com/p/DamRN8OGOrr/?utm_source=ig_web_copy_link&vrfl=MzRlODBiNWFlZA==&srtk=MzRlODBiNWFlZA==',
                    'title' => 'Kegiatan MPLS',
                    'category' => 'Agenda',
                ],
                [
                    'href' => 'https://vt.tiktok.com/ZSpYjSKE5/',
                    'title' => 'Publikasi Agenda Sekolah 6',
                    'category' => 'Agenda',
                ],

                [
                    'href' => 'https://vt.tiktok.com/ZSpYj6ox3/',
                    'title' => 'Publikasi Agenda Sekolah 7',
                    'category' => 'Agenda',
                ],

                [
                    'href' => 'https://vt.tiktok.com/ZSpYj2CeT/',
                    'title' => 'Publikasi Agenda Sekolah 8',
                    'category' => 'Agenda',
                ],

                [
                    'href' => 'https://vt.tiktok.com/ZSpYjyntp/',
                    'title' => 'Publikasi Agenda Sekolah 9',
                    'category' => 'Agenda',
                ],
                [
                    'href' => 'https://www.tiktok.com/@officialsmkn4trk/video/7508593057810369800',
                    'title' => 'Sosialisasi SPMB',
                    'category' => 'Agenda',
                ],
            ];

            $agendaKonten = collect($agendaKonten)
                ->filter(function ($item) {
                    $href = trim($item['href'] ?? '');
                    if (!filter_var($href, FILTER_VALIDATE_URL)) return false;
                    $parts = parse_url($href);
                    return in_array(strtolower($parts['scheme'] ?? ''), ['http', 'https'], true)
                        && !empty($parts['host']);
                })
                ->map(function ($item) {
                    $href = trim($item['href']);
                    $parts = parse_url($href);
                    $host = strtolower(preg_replace('/^www\./', '', $parts['host'] ?? ''));
                    $path = $parts['path'] ?? '/';
                    $query = [];
                    parse_str($parts['query'] ?? '', $query);
                    $isHost = fn ($domain) => $host === $domain || str_ends_with($host, '.' . $domain);

                    $item['href'] = $href;
                    $item['title'] = $item['title'] ?? 'Publikasi Kegiatan Sekolah';
                    $item['category'] = $item['category'] ?? 'Agenda Sekolah';
                    $item['date'] = $item['date'] ?? null;
                    // Caption manual universal: dipakai untuk semua sumber, tanpa membatasi platform.
$customPlatform = $item['platform'] ?? 'Konten Online';
                    $item['platform'] = $customPlatform;
                    $item['embed_type'] = 'link';
                    $item['embed_permalink'] = $href;
                    $customEmbedUrl = trim($item['embed_url'] ?? '');
                    $item['embed_url'] = null;

                    // Embed URL khusus dari pengelola dapat dipakai untuk platform lain.
                    if ($customEmbedUrl && filter_var($customEmbedUrl, FILTER_VALIDATE_URL)
                        && strtolower(parse_url($customEmbedUrl, PHP_URL_SCHEME) ?? '') === 'https') {
                        $item['platform'] = $customPlatform;
                        $item['embed_type'] = 'iframe';
                        $item['embed_url'] = $customEmbedUrl;
                    } elseif ($isHost('instagram.com')) {
                        $item['platform'] = 'Instagram';
                        $item['embed_type'] = 'instagram';
                        $item['embed_permalink'] = preg_replace('/\?.*$/', '', $href);
                        $item['embed_permalink'] = rtrim($item['embed_permalink'], '/') . '/';
                    } elseif ($isHost('tiktok.com')) {
                        $item['platform'] = 'TikTok';
                        if (preg_match('~/video/(\d+)~', $path, $match)) {
                            $item['embed_type'] = 'iframe';
                            $item['embed_url'] = 'https://www.tiktok.com/player/v1/' . $match[1];
                        }
                    } elseif ($isHost('youtube.com') || $host === 'youtu.be') {
                        $item['platform'] = 'YouTube';
                        $videoId = $query['v'] ?? null;
                        if ($host === 'youtu.be') {
                            $videoId = trim($path, '/');
                        } elseif (preg_match('~/(?:shorts|embed|live)/([A-Za-z0-9_-]{6,})~', $path, $match)) {
                            $videoId = $match[1];
                        }
                        if ($videoId && preg_match('/^[A-Za-z0-9_-]{6,}$/', $videoId)) {
                            $item['embed_type'] = 'iframe';
                            $item['embed_url'] = 'https://www.youtube-nocookie.com/embed/' . $videoId;
                        }
                    } elseif ($isHost('facebook.com') || $isHost('fb.watch')) {
                        $item['platform'] = 'Facebook';
                        if ($isHost('facebook.com')) {
                            $plugin = preg_match('~/(?:reel|watch)/~', $path) ? 'video' : 'post';
                            $item['embed_type'] = 'iframe';
                            $item['embed_url'] = 'https://www.facebook.com/plugins/' . $plugin . '.php?href=' . urlencode($href) . '&show_text=true&width=500';
                        }
                    } elseif ($isHost('threads.com') || $isHost('threads.net')) {
                        $item['platform'] = 'Threads';
                        $item['embed_type'] = 'threads';
                    } elseif ($isHost('x.com') || $isHost('twitter.com')) {
                        $item['platform'] = 'X';
                        if (preg_match('~/status/(\d+)~', $path)) {
                            $item['embed_type'] = 'x';
                        }
                    } elseif ($isHost('vimeo.com')) {
                        $item['platform'] = 'Vimeo';
                        if (preg_match('~/(\d+)~', $path, $match)) {
                            $item['embed_type'] = 'iframe';
                            $item['embed_url'] = 'https://player.vimeo.com/video/' . $match[1];
                        }
                    } elseif ($isHost('dailymotion.com') || $host === 'dai.ly') {
                        $item['platform'] = 'Dailymotion';
                        if (preg_match('~/(?:video/)?([A-Za-z0-9]+)~', trim($path, '/'), $match)) {
                            $item['embed_type'] = 'iframe';
                            $item['embed_url'] = 'https://www.dailymotion.com/embed/video/' . $match[1];
                        }
                    } elseif ($isHost('open.spotify.com')) {
                        $item['platform'] = 'Spotify';
                        if (preg_match('~/(track|album|playlist|episode|show)/([A-Za-z0-9]+)~', $path, $match)) {
                            $item['embed_type'] = 'iframe';
                            $item['embed_url'] = 'https://open.spotify.com/embed/' . $match[1] . '/' . $match[2];
                        }
                    } elseif ($isHost('pinterest.com') || $isHost('pin.it')) {
                        $item['platform'] = 'Pinterest';
                        if (preg_match('~/pin/(\d+)~', $path, $match)) {
                            $item['embed_type'] = 'iframe';
                            $item['embed_url'] = 'https://assets.pinterest.com/ext/embed.html?id=' . $match[1];
                        }
                    }

                    // Embed URL manual harus https agar aman untuk iframe.
                    if (!empty($item['embed_url'])) {
                        $embedParts = parse_url($item['embed_url']);
                        if (strtolower($embedParts['scheme'] ?? '') !== 'https' || empty($embedParts['host'])) {
                            $item['embed_url'] = null;
                            $item['embed_type'] = 'link';
                        }
                    }

                    return $item;
                })
                ->values();
        @endphp

        <main class="mx-auto w-full max-w-[1600px] px-4 py-6 sm:px-6 sm:py-8 lg:px-8 lg:py-10">
            {{-- PAGE TITLE BANNER: KONSISTEN DENGAN HALAMAN MANAJEMEN --}}
            <section class="relative isolate mb-7 overflow-hidden rounded-[24px] border border-white/15 bg-gradient-to-br from-[#2B1745] via-[#49108B] to-[#7E30E1] text-white shadow-[0_14px_36px_rgba(73,16,139,0.22)] sm:mb-9">
                {{-- ORNAMEN LINGKARAN AKSEN EMAS --}}
                <svg class="pointer-events-none absolute -left-20 -top-24 h-[260px] w-[260px] text-[#FDC003]/25 sm:-left-16 sm:-top-28 sm:h-[320px] sm:w-[320px]" viewBox="0 0 320 320" fill="none" aria-hidden="true">
                    <circle cx="90" cy="105" r="92" stroke="currentColor" stroke-width="3" />
                    <circle cx="90" cy="105" r="125" stroke="currentColor" stroke-width="3" />
                    <circle cx="90" cy="105" r="158" stroke="currentColor" stroke-width="3" />
                    <circle cx="26" cy="105" r="13" fill="currentColor" />
                </svg>

                {{-- ORNAMEN MOTIF REGIONAL --}}
                <svg class="pointer-events-none absolute right-[4%] top-1/2 hidden h-[82%] max-h-[310px] w-[150px] -translate-y-1/2 text-[#FDC003]/25 sm:block sm:w-[170px] lg:right-[7%] lg:w-[190px]" viewBox="0 0 200 310" fill="none" aria-hidden="true">
                    <path d="M100 7 169 83v144l-69 76-69-76V83L100 7Z" stroke="currentColor" stroke-width="4" />
                    <path d="M100 26 151 89v132l-51 56-51-56V89l51-63Z" stroke="currentColor" stroke-width="2.5" />
                    <path d="M100 63c-22-26-49-18-39 4 5 11 17 13 22 24-18-9-35-2-31 13 3 11 18 14 27 4 8-9 9-24 21-34 12 10 13 25 21 34 9 10 24 7 27-4 4-15-13-22-31-13 5-11 17-13 22-24 10-22-17-30-39-4Z" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M100 112c-15-17-31-9-23 7 5 10 18 13 23 26 5-13 18-16 23-26 8-16-8-24-23-7Z" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M100 163c-20-19-42-12-35 7 4 12 22 15 35 31 13-16 31-19 35-31 7-19-15-26-35-7Z" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M74 47c-13 8-19 18-20 31m72-31c13 8 19 18 20 31M74 263c-13-8-19-18-20-31m72 31c13-8 19-18 20-31" stroke="currentColor" stroke-width="3" stroke-linecap="round" />
                    <path d="M100 87v137M68 137c11 7 20 11 32 11s21-4 32-11" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                </svg>

                <div class="relative z-10 w-full px-5 py-8 sm:px-7 sm:py-10 lg:px-9 lg:py-12 xl:px-10 xl:py-14">
                    <div class="max-w-[1050px] sm:pr-28 lg:pr-36">
                        <h1 class="max-w-[950px] text-[clamp(2.25rem,5vw,4.25rem)] font-black leading-[1.08] tracking-tight text-white">Agenda Sekolah</h1>
                        <p class="mt-4 max-w-[900px] text-lg leading-[1.75] text-white/90 sm:mt-5 sm:text-xl lg:text-[22px]">
                            Informasi agenda, aktivitas, dan dokumentasi kegiatan SMK Negeri 4 Tarakan sebagai bagian dari publikasi dan aktivitas sekolah.
                        </p>
                    </div>
                </div>
            </section>

            {{-- SECTION HEADING: TANPA SUBJUDUL AGENDA & PUBLIKASI --}}
            <div class="mb-6 flex flex-col gap-2 sm:mb-7 sm:flex-row sm:items-end sm:justify-between">
                <div>
                    <h2 class="text-3xl font-black tracking-tight text-[#20132F] sm:text-4xl">INFORMASI TERBARU</h2>
                </div>
                @if ($agendaKonten->isNotEmpty())
                    <p class="text-base font-extrabold uppercase tracking-[0.08em] text-[#49108B] sm:text-lg">{{ $agendaKonten->count() }} PUBLIKASI</p>
                @endif
            </div>

            @if ($agendaKonten->isNotEmpty())
                <div class="grid grid-cols-1 items-stretch gap-5 md:grid-cols-2 xl:grid-cols-3 2xl:gap-7">
                    @foreach ($agendaKonten as $item)
                        <article class="agenda-card group flex h-full min-w-0 flex-col overflow-hidden rounded-2xl border border-[#E7E0EF] bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#B99AD9] hover:shadow-[0_14px_32px_rgba(73,16,139,0.14)]">
                            {{-- HEADER CARD: PLATFORM, TANGGAL, DAN JUDUL SEPERTI STRUKTUR SEBELUMNYA --}}
                            <div class="agenda-card-header flex flex-col border-b border-[#EEE8F4] px-5 py-4 sm:px-6 sm:py-5">
                                <div class="flex min-h-6 flex-wrap items-center justify-between gap-x-3 gap-y-2">
                                    <span class="inline-flex min-w-0 items-center gap-2 text-sm font-extrabold text-[#6B2DB3]">
                                        @if ($item['platform'] === 'Instagram')
                                            <svg class="h-5 w-5 shrink-0 text-[#C13584]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-label="Instagram"><rect x="3" y="3" width="18" height="18" rx="5"></rect><circle cx="12" cy="12" r="4"></circle><circle cx="17.5" cy="6.5" r=".8" fill="currentColor" stroke="none"></circle></svg>
                                        @elseif ($item['platform'] === 'TikTok')
                                            <svg class="h-5 w-5 shrink-0 text-[#111827]" viewBox="0 0 24 24" fill="currentColor" aria-label="TikTok"><path d="M19.6 7.1a5.7 5.7 0 0 1-3.5-1.2v8.2a6.1 6.1 0 1 1-5.3-6.05v3.2a2.9 2.9 0 1 0 2.1 2.8V2.5h3.2c.2 2.2 1.5 4 3.5 4.7v-.1Z"></path></svg>
                                        @elseif ($item['platform'] === 'YouTube')
                                            <svg class="h-5 w-5 shrink-0 text-[#E11D48]" viewBox="0 0 24 24" fill="currentColor" aria-label="YouTube"><path d="M23.5 6.2a3 3 0 0 0-2.1-2.1C19.5 3.6 12 3.6 12 3.6s-7.5 0-9.4.5A3 3 0 0 0 .5 6.2 31 31 0 0 0 0 12a31 31 0 0 0 .5 5.8 3 3 0 0 0 2.1 2.1c1.9.5 9.4.5 9.4.5s7.5 0 9.4-.5a3 3 0 0 0 2.1-2.1A31 31 0 0 0 24 12a31 31 0 0 0-.5-5.8ZM9.6 15.6V8.4l6.2 3.6-6.2 3.6Z"></path></svg>
                                        @else
                                            <svg class="h-5 w-5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="9"></circle><path d="M3 12h18M12 3a15 15 0 0 1 0 18M12 3a15 15 0 0 0 0 18"></path></svg>
                                        @endif
                                        <span class="truncate">{{ $item['platform'] }}</span>
                                    </span>
                                    @if (!empty($item['date']))
                                        <time class="shrink-0 text-xs font-semibold text-slate-400 sm:text-sm">{{ $item['date'] }}</time>
                                    @endif
                                </div>
                                <h3 class="mt-3 min-h-[3rem] break-words text-lg font-extrabold leading-6 text-[#20132F] transition-colors duration-200 group-hover:text-[#49108B] sm:text-xl">{{ $item['title'] }}</h3>
                            </div>

                            {{-- PREVIEW KONTEN: KEMBALI KE AREA PREVIEW VERTIKAL SEPERTI CARD SEBELUMNYA --}}
                            <div class="agenda-content-preview flex h-[440px] min-w-0 items-start justify-center overflow-y-auto overflow-x-hidden bg-[#FBF9FE] p-2 sm:h-[480px] sm:p-3">
                                @if ($item['embed_type'] === 'instagram')
                                    <blockquote class="instagram-media !m-0 !w-full !max-w-full" data-instgrm-captioned data-instgrm-permalink="{{ $item['embed_permalink'] }}" data-instgrm-version="14" style="background:#fff;border:0;border-radius:10px;margin:0 auto;max-width:540px;min-width:0;padding:0;width:100%;">
                                        <div class="p-5 text-center text-sm text-slate-500">Memuat konten Instagram… <a href="{{ $item['href'] }}" target="_blank" rel="noopener noreferrer" class="mt-2 block font-bold text-[#49108B]">Buka konten</a></div>
                                    </blockquote>
                                @elseif ($item['embed_type'] === 'x')
                                    <blockquote class="twitter-tweet" data-dnt="true"><a href="{{ $item['href'] }}">Lihat postingan di X</a></blockquote>
                                @elseif ($item['embed_type'] === 'threads')
                                    <blockquote class="text-post-media" data-text-post-permalink="{{ $item['href'] }}" data-text-post-version="0">
                                        <a href="{{ $item['href'] }}">Lihat postingan di Threads</a>
                                    </blockquote>
                                @elseif ($item['embed_type'] === 'iframe' && $item['embed_url'])
                                    <iframe
                                        src="{{ $item['embed_url'] }}"
                                        title="{{ $item['title'] }} - {{ $item['platform'] }}"
                                        class="agenda-embed-iframe w-full max-w-full rounded-lg border-0"
                                        style="height: {{ in_array($item['platform'], ['YouTube', 'Vimeo', 'Dailymotion']) ? '230px' : '460px' }}; min-height: {{ in_array($item['platform'], ['YouTube', 'Vimeo', 'Dailymotion']) ? '230px' : '420px' }}; aspect-ratio: {{ in_array($item['platform'], ['YouTube', 'Vimeo', 'Dailymotion']) ? '16 / 9' : '4 / 5' }};"
                                        loading="lazy"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen
                                        referrerpolicy="strict-origin-when-cross-origin"></iframe>
                                @else
                                    <div class="flex min-h-[250px] w-full flex-col items-center justify-center rounded-xl border border-dashed border-[#DCCAF0] bg-white px-5 py-8 text-center sm:min-h-[300px]">
                                        <span class="flex h-14 w-14 items-center justify-center rounded-2xl border border-[#DCCAF0] bg-[#F3ECFA] text-[#6B2DB3]">
                                            <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path></svg>
                                        </span>
                                        <p class="mt-4 text-sm font-extrabold text-[#2B1745]">Pratinjau tidak tersedia</p>
                                        <p class="mt-1 max-w-xs text-xs leading-5 text-slate-500">Platform ini belum menyediakan embed otomatis di halaman. Konten tetap dapat dibuka melalui tautan aslinya.</p>
                                    </div>
                                @endif
                            </div>

                            {{-- FOOTER: TOMBOL BUKA KONTEN SEPERTI STRUKTUR SEBELUMNYA --}}
                            <div class="agenda-card-footer mt-auto border-t border-[#EEE8F4] p-5 sm:p-6">
                                <a href="{{ $item['href'] }}" target="_blank" rel="noopener noreferrer" class="inline-flex min-h-11 w-full items-center justify-center gap-2 rounded-xl bg-[#49108B] px-4 py-2.5 text-sm font-extrabold text-white transition-colors hover:bg-[#6B2DB3] focus:outline-none focus-visible:ring-4 focus-visible:ring-[#7E30E1]/25 sm:text-base">
                                    Buka Konten Asli
                                    <svg class="h-4 w-4 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14 3h7v7M10 14 21 3"></path><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path></svg>
                                </a>
                            </div>
                        </article>
                    @endforeach
                </div>
            @else
                <section class="rounded-2xl border border-dashed border-[#DCCAF0] bg-white px-5 py-12 text-center shadow-sm sm:px-8 sm:py-16">
                    <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl border border-[#DCCAF0] bg-[#F3ECFA] text-[#6B2DB3]">
                        <svg class="h-8 w-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16v12H5.5L4 18V4Z"></path><path d="M8 8h8M8 12h5"></path></svg>
                    </div>
                    <h3 class="mt-5 text-lg font-black text-[#2B1745] sm:text-xl">Agenda Segera Hadir</h3>
                    <p class="mx-auto mt-2 max-w-lg text-sm leading-7 text-slate-500 sm:text-base">Dokumentasi agenda dan kegiatan sekolah akan ditampilkan di halaman ini. Tambahkan tautan konten dari akun media sosial pada daftar data agenda untuk mulai menampilkannya.</p>
                </section>
            @endif
        </main>
    </div>

    {{-- Script embed resmi platform tertentu. --}}
    @once
        <script async src="https://www.instagram.com/embed.js" onload="window.instgrm?.Embeds?.process?.()"></script>
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8" onload="window.twttr?.widgets?.load?.()"></script>
        <script async src="https://www.threads.net/embed.js"></script>
    @endonce

    {{-- Pastikan embed diproses ulang saat halaman/component dimuat melalui Livewire. --}}
    @script
        <script>
            (() => {
                const processAgendaEmbeds = () => {
                    window.instgrm?.Embeds?.process?.();
                    window.twttr?.widgets?.load?.();
                };

                // Proses pertama setelah markup komponen tersedia.
                requestAnimationFrame(processAgendaEmbeds);

                // Diperlukan saat navigasi Livewire mengganti isi halaman tanpa full reload.
                document.addEventListener('livewire:navigated', () => {
                    requestAnimationFrame(processAgendaEmbeds);
                });
            })();
        </script>
    @endscript

    <style>
        /* Frame preview memakai rasio 4:3 seperti area foto pada card Manajemen. */
        .agenda-card {
            min-width: 0;
        }

        .agenda-content-preview {
            isolation: isolate;
            scrollbar-width: thin;
            scrollbar-color: #DCCAF0 transparent;
        }

        .agenda-content-preview > blockquote,
        .agenda-content-preview > iframe,
        .agenda-content-preview .instagram-media,
        .agenda-content-preview .twitter-tweet,
        .agenda-content-preview .text-post-media {
            width: 100% !important;
            max-width: 540px !important;
            min-width: 0 !important;
            margin-left: auto !important;
            margin-right: auto !important;
        }

        .agenda-content-preview iframe {
            max-width: 100%;
        }

        @media (max-width: 639px) {
            .agenda-content-preview {
                aspect-ratio: 4 / 3;
            }
        }
    </style>
</div>
