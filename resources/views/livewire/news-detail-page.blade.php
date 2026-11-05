<div>
    <div class="min-h-screen w-full bg-[#F7F3FC] font-[Plus_Jakarta_Sans,Arial,sans-serif] text-[#20132F] antialiased">
        <main class="mx-auto w-full max-w-[1600px] px-4 py-6 sm:px-6 sm:py-8 lg:px-8 lg:py-10">

            @php
            // DATA DUMMY: slug dari card berita menentukan artikel yang ditampilkan.
            $slug = request()->route('slug') ?? request('slug', 'pengumuman-kelulusan');

            $beritaBySlug = [
            'pengumuman-kelulusan' => [
            'slug' => 'pengumuman-kelulusan',
            'image' => 'images/berita/kelulusan.jpg',
            'alt' => 'Dokumentasi pengumuman kelulusan siswa',
            'fallback_title' => 'Dokumentasi Kelulusan',
            'caption' => 'Dokumentasi informasi kelulusan SMK Negeri 4 Tarakan.',
            'category' => 'Agenda',
            'date' => '23 JANUARI 2027',
            'date_iso' => '2027-01-23',
            'title' => 'Pengumuman Kelulusan Siswa Kelas XII SMKN 4 Tarakan Tahun Pelajaran 2023/2024',
            'excerpt' => 'Pengumuman kelulusan siswa kelas XII SMK Negeri 4 Tarakan Tahun Pelajaran 2023/2024 sebagai informasi resmi bagi peserta didik.',
            'author' => 'Humas SMK Negeri 4 Tarakan',
            'content' => [
            [
            'heading' => null,
            'paragraphs' => [
            'SMK Negeri 4 Tarakan menyampaikan informasi mengenai kelulusan peserta didik kelas XII Tahun Pelajaran 2023/2024. Informasi ini ditujukan kepada seluruh peserta didik dan orang tua/wali sebagai pemberitahuan resmi dari pihak sekolah.',
            'Peserta didik diharapkan mencermati informasi yang disampaikan melalui kanal komunikasi resmi sekolah serta mengikuti arahan lebih lanjut dari wali kelas dan pihak sekolah.',
            ],
            ],
            [
            'heading' => 'Informasi bagi peserta didik',
            'paragraphs' => [
            'Untuk memperoleh keterangan lebih lanjut, peserta didik dapat menghubungi wali kelas atau datang ke sekolah melalui prosedur layanan informasi yang berlaku. Pastikan setiap informasi yang diterima bersumber dari kanal resmi SMK Negeri 4 Tarakan.',
            'Sekolah mengimbau seluruh peserta didik untuk tetap menjaga ketertiban, merayakan pencapaian dengan kegiatan yang positif, serta menjaga nama baik diri sendiri, keluarga, dan almamater.',
            ],
            ],
            [
            'heading' => 'Penutup',
            'paragraphs' => [
            'Demikian informasi ini disampaikan. Terima kasih atas perhatian dan kerja sama seluruh peserta didik, orang tua/wali, serta seluruh warga sekolah.',
            ],
            ],
            ],
            ],
            'kerja-sama-telkom-aws' => [
            'slug' => 'kerja-sama-telkom-aws',
            'image' => 'images/berita/kerja-sama.jpg',
            'alt' => 'Kolaborasi SMKN 4 Tarakan dengan Telkom Indonesia dan AWS Academy',
            'fallback_title' => 'Kolaborasi & Kemitraan',
            'caption' => 'Ilustrasi kegiatan kolaborasi dan kemitraan sekolah.',
            'category' => 'Prestasi',
            'date' => '23 JANUARI 2027',
            'date_iso' => '2027-01-23',
            'title' => 'SMKN 4 Tarakan Gandeng Telkom Indonesia dan AWS Academy untuk Sertifikasi Cloud & Cybersecurity',
            'excerpt' => 'Kolaborasi strategis demi melahirkan 150 tenaga tersertifikasi internasional di bidang rekayasa jaringan awan dan mitigasi peretasan.',
            'author' => 'Humas SMK Negeri 4 Tarakan',
            'content' => [
            [
            'heading' => null,
            'paragraphs' => [
            'SMK Negeri 4 Tarakan mengembangkan kerja sama dengan Telkom Indonesia dan AWS Academy sebagai bagian dari penguatan kompetensi peserta didik di bidang teknologi informasi.',
            'Kolaborasi ini diarahkan untuk memperluas kesempatan belajar, memperkenalkan kebutuhan industri, serta memberikan wawasan mengenai teknologi cloud dan cybersecurity.',
            ],
            ],
            [
            'heading' => 'Penguatan kompetensi digital',
            'paragraphs' => [
            'Melalui kegiatan pembelajaran dan pengembangan kompetensi, peserta didik diharapkan memperoleh pengalaman yang relevan dengan perkembangan teknologi dan kebutuhan dunia kerja.',
            'Program sertifikasi menjadi salah satu upaya untuk mendorong peserta didik meningkatkan kemampuan, membangun portofolio, dan mempersiapkan diri menghadapi peluang karier di bidang teknologi.',
            ],
            ],
            [
            'heading' => 'Komitmen sekolah',
            'paragraphs' => [
            'SMK Negeri 4 Tarakan terus mendorong kolaborasi dengan berbagai mitra untuk menghadirkan pembelajaran yang relevan, aplikatif, dan berorientasi pada pengembangan kompetensi peserta didik.',
            ],
            ],
            ],
            ],
            'penerimaan-peserta-didik-baru' => [
            'slug' => 'penerimaan-peserta-didik-baru',
            'image' => 'images/berita/ppdb.jpg',
            'alt' => 'Informasi penerimaan peserta didik baru SMK Negeri 4 Tarakan',
            'fallback_title' => 'Penerimaan Peserta Didik',
            'caption' => 'Informasi penerimaan peserta didik baru SMK Negeri 4 Tarakan.',
            'category' => 'Agenda',
            'date' => '23 JANUARI 2027',
            'date_iso' => '2027-01-23',
            'title' => 'Penerimaan Peserta Didik Baru SMK Negeri 4 Tarakan Tahun Ajaran 2023/2024',
            'excerpt' => 'Penerimaan Peserta Didik Baru (PPDB) SMK Negeri 4 Tarakan Tahun Ajaran 2023/2024 menjadi kesempatan bagi calon peserta didik untuk bergabung.',
            'author' => 'Humas SMK Negeri 4 Tarakan',
            'content' => [
            [
            'heading' => null,
            'paragraphs' => [
            'SMK Negeri 4 Tarakan membuka informasi penerimaan peserta didik baru sebagai panduan awal bagi calon peserta didik dan orang tua/wali yang ingin mengetahui proses pendaftaran.',
            'Calon peserta didik diharapkan memperhatikan informasi mengenai persyaratan, jadwal, jalur pendaftaran, serta tahapan seleksi yang diumumkan melalui kanal resmi sekolah.',
            ],
            ],
            [
            'heading' => 'Persiapan pendaftaran',
            'paragraphs' => [
            'Sebelum melakukan pendaftaran, calon peserta didik dapat menyiapkan dokumen administrasi yang diperlukan dan memastikan seluruh data yang diberikan telah sesuai.',
            'Informasi teknis mengenai proses penerimaan dapat dikonfirmasi kepada panitia melalui layanan informasi resmi SMK Negeri 4 Tarakan.',
            ],
            ],
            [
            'heading' => 'Informasi lebih lanjut',
            'paragraphs' => [
            'Pantau pengumuman resmi sekolah untuk memperoleh pembaruan terkait proses penerimaan peserta didik baru. Sekolah berharap proses ini dapat berjalan tertib dan memberikan informasi yang jelas bagi calon peserta didik.',
            ],
            ],
            ],
            ],
            ];

            // Jika slug tidak dikenal, tampilkan berita pertama sebagai fallback.
            $beritaDetail = $beritaBySlug[$slug] ?? reset($beritaBySlug);
            $beritaTerkait = [];
            foreach ($beritaBySlug as $berita) {
            if ($berita['slug'] !== $beritaDetail['slug']) {
            $beritaTerkait[] = [
            'slug' => $berita['slug'],
            'image' => $berita['image'],
            'alt' => $berita['alt'],
            'category' => $berita['category'],
            'date' => $berita['date'],
            'date_iso' => $berita['date_iso'],
            'title' => $berita['title'],
            'excerpt' => $berita['excerpt'],
            'url' => url('/berita/detail/' . $berita['slug']),
            ];
            }
            }
            @endphp

            <div class="grid grid-cols-1 items-start gap-5 md:gap-6 lg:grid-cols-[minmax(0,1fr)_320px] lg:gap-7 xl:grid-cols-[minmax(0,1fr)_350px]">
                <div class="min-w-0">
                    <div class="mb-4 flex w-full items-center sm:mb-5">
                        <a
                            href="{{ url('/berita') }}"
                            aria-label="Kembali ke daftar berita"
                            class="group inline-flex min-h-11 max-w-full items-center justify-center gap-2 rounded-lg border border-[#E7DDF1] bg-white px-4 py-2.5 text-sm font-bold leading-5 text-[#49108B] shadow-sm transition duration-200 hover:border-[#CDB5E5] hover:bg-[#FBF9FE] focus:outline-none focus-visible:ring-4 focus-visible:ring-[#7E30E1]/20 sm:min-h-12 sm:px-5 sm:text-base">
                            <svg class="h-5 w-5 shrink-0 transition-transform duration-200 group-hover:-translate-x-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="m15 18-6-6 6-6M9 12h12" />
                            </svg>
                            <span class="whitespace-normal">Kembali ke Daftar Berita</span>
                        </a>
                    </div>

                    <article class="min-w-0 overflow-hidden rounded-2xl border border-[#E7E0EF] bg-white shadow-sm">
                        <div class="p-5 sm:p-7 lg:p-8 xl:p-9">
                            <div class="mb-4 flex flex-wrap items-center gap-x-4 gap-y-2 sm:mb-5">
                                <span class="inline-flex w-fit items-center rounded-full border border-[#DCCAF0] bg-[#F3ECFA] px-3.5 py-1.5 text-xs font-extrabold leading-5 text-[#49108B] sm:text-sm">
                                    {{ $beritaDetail['category'] }}
                                </span>
                                <span class="inline-flex min-w-0 items-center gap-1.5 text-xs font-semibold leading-5 text-slate-500 sm:text-sm">
                                    <svg class="h-4 w-4 shrink-0 text-[#7E30E1]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <rect x="3" y="5" width="18" height="16" rx="2" />
                                        <path d="M16 3v4M8 3v4M3 10h18" />
                                    </svg>
                                    <time datetime="{{ $beritaDetail['date_iso'] }}">{{ $beritaDetail['date'] }}</time>
                                </span>
                            </div>
                            <h1 class="break-words text-2xl font-black leading-[1.2] tracking-tight text-[#20132F] sm:text-3xl sm:leading-[1.25] lg:text-4xl">
                                {{ $beritaDetail['title'] }}
                            </h1>
                            <p class="mt-4 break-words text-justify text-base leading-7 text-slate-600 sm:mt-5 sm:text-lg sm:leading-8">
                                {{ $beritaDetail['excerpt'] }}
                            </p>
                            <div class="mt-5 flex flex-wrap items-center gap-3 border-y border-[#EEE8F4] py-4 sm:mt-6 sm:py-5">
                                <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full border border-[#DCCAF0] bg-[#F3ECFA] text-[#6B2DB3]">
                                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <circle cx="12" cy="8" r="3.5" />
                                        <path d="M5 20a7 7 0 0 1 14 0" />
                                    </svg>
                                </span>
                                <div class="min-w-0">
                                    <p class="text-xs font-medium text-slate-500 sm:text-sm">Dipublikasikan oleh</p>
                                    <p class="break-words text-sm font-extrabold text-[#2B1745] sm:text-base">{{ $beritaDetail['author'] }}</p>
                                </div>
                            </div>
                            <figure class="mt-5 sm:mt-7">
                                <div class="group relative aspect-[16/9] w-full overflow-hidden rounded-xl border border-[#E7E0EF] bg-gradient-to-br from-[#EDE3F8] to-[#DCCAF0] sm:rounded-2xl">
                                    <img src="{{ asset($beritaDetail['image']) }}"
                                        alt="{{ $beritaDetail['alt'] }}"
                                        loading="eager"
                                        onerror="this.onerror=null;this.classList.add('hidden');this.nextElementSibling.classList.remove('hidden');this.nextElementSibling.style.display='flex';"
                                        class="h-full w-full object-cover transition duration-500 group-hover:scale-[1.015]">
                                    <div class="absolute inset-0 hidden items-center justify-center overflow-hidden bg-gradient-to-br from-[#F8F5FB] via-[#EFE6F8] to-[#E2D2F1] p-5 text-center">
                                        <div class="pointer-events-none absolute -right-10 -top-12 h-36 w-36 rounded-full border-[18px] border-[#7E30E1]/10"></div>
                                        <div class="pointer-events-none absolute -bottom-16 -left-10 h-40 w-40 rounded-full border-[20px] border-[#49108B]/10"></div>
                                        <div class="relative flex max-w-[280px] flex-col items-center">
                                            <span class="mb-3 flex h-16 w-16 items-center justify-center rounded-2xl border border-[#DCCAF0] bg-white/90 text-[#6B2DB3] shadow-sm sm:h-[76px] sm:w-[76px]">
                                                <svg class="h-8 w-8 sm:h-10 sm:w-10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                                    <path d="M6 3.75h8l4 4V20a.75.75 0 0 1-.75.75h-10.5A.75.75 0 0 1 6 20V3.75Z" />
                                                    <path d="M14 3.75v4.5h4M9 12h6M9 15.5h6" />
                                                </svg>
                                            </span>
                                            <span class="text-xs font-extrabold uppercase tracking-[0.18em] text-[#7E30E1] sm:text-sm">SMK Negeri 4 Tarakan</span>
                                            <span class="mt-1 text-base font-black leading-snug text-[#2B1745] sm:text-lg">{{ $beritaDetail['fallback_title'] }}</span>
                                            <span class="mt-2 text-xs font-medium text-slate-500 sm:text-sm">Informasi dan kegiatan sekolah</span>
                                        </div>
                                    </div>
                                </div>
                                <figcaption class="mt-2.5 text-center text-xs leading-5 text-slate-500 sm:text-sm">
                                    {{ $beritaDetail['caption'] }}
                                </figcaption>
                            </figure>
                            <div class="mt-7 space-y-6 sm:mt-9 sm:space-y-7">
                                @foreach ($beritaDetail['content'] as $section)
                                <section class="min-w-0">
                                    @if (!empty($section['heading']))
                                    <h2 class="mb-3 text-xl font-extrabold leading-snug text-[#2B1745] sm:mb-4 sm:text-2xl">
                                        {{ $section['heading'] }}
                                    </h2>
                                    @endif
                                    <div class="space-y-4 text-base leading-8 text-slate-700 sm:text-lg sm:leading-9">
                                        @foreach ($section['paragraphs'] as $paragraph)
                                        <p class="break-words text-justify">{{ $paragraph }}</p>
                                        @endforeach
                                    </div>
                                </section>
                                @endforeach
                            </div>
                        </div>
                    </article>
                </div>

                <aside class="min-w-0 space-y-5">
                    <section class="overflow-hidden rounded-2xl border border-[#E7E0EF] bg-white shadow-sm">
                        <div class="border-b border-[#E7E0EF] px-5 py-4 sm:px-6">
                            <h2 class="text-lg font-black text-[#20132F] sm:text-xl">Berita Terkait</h2>
                            <p class="mt-1 text-sm leading-6 text-slate-500">Informasi lainnya dari sekolah</p>
                        </div>
                        <div class="divide-y divide-[#EEE8F4]">
                            @foreach ($beritaTerkait as $item)
                            <a href="{{ $item['url'] }}" aria-label="Baca berita: {{ $item['title'] }}" class="group flex min-w-0 gap-3 p-4 transition-colors hover:bg-[#FBF9FE] focus:outline-none focus-visible:ring-4 focus-visible:ring-inset focus-visible:ring-[#7E30E1]/20 sm:p-5">
                                <div class="relative h-[84px] w-[104px] shrink-0 overflow-hidden rounded-lg bg-gradient-to-br from-[#EDE3F8] to-[#DCCAF0] sm:h-[92px] sm:w-[116px]">
                                    <img src="{{ asset($item['image']) }}"
                                        alt="{{ $item['alt'] }}"
                                        loading="lazy"
                                        onerror="this.onerror=null;this.classList.add('hidden');this.nextElementSibling.classList.remove('hidden');this.nextElementSibling.style.display='flex';"
                                        class="h-full w-full object-cover transition duration-300 group-hover:scale-105">
                                    <div class="absolute inset-0 hidden items-center justify-center bg-gradient-to-br from-[#F8F5FB] to-[#E2D2F1] text-[#6B2DB3]">
                                        <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                            <path d="M6 3.75h8l4 4V20H6z" />
                                            <path d="M14 3.75v4.5h4M9 12h6M9 15.5h6" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="min-w-0 flex-1">
                                    <div class="mb-1.5 flex flex-wrap items-center gap-x-2 gap-y-1">
                                        <span class="text-[10px] font-extrabold uppercase tracking-wide text-[#6B2DB3] sm:text-[11px]">{{ $item['category'] }}</span>
                                        <time datetime="{{ $item['date_iso'] }}" class="text-[10px] font-semibold text-slate-400 sm:text-[11px]">{{ $item['date'] }}</time>
                                    </div>
                                    <h3 class="line-clamp-3 break-words text-sm font-extrabold leading-5 text-[#20132F] transition-colors group-hover:text-[#6B2DB3] sm:text-[15px]">
                                        {{ $item['title'] }}
                                    </h3>
                                    <p class="mt-1.5 line-clamp-2 break-words text-xs leading-5 text-slate-500 sm:text-sm">
                                        {{ $item['excerpt'] }}
                                    </p>
                                    <span class="mt-2 inline-flex items-center gap-1 text-xs font-extrabold text-[#49108B] transition-colors group-hover:text-[#7E30E1]">
                                        Baca berita
                                        <svg class="h-3.5 w-3.5 transition-transform group-hover:translate-x-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                            <path d="M5 12h14M13 6l6 6-6 6" />
                                        </svg>
                                    </span>
                                </div>
                            </a>
                            @endforeach
                        </div>
                        <div class="border-t border-[#E7E0EF] p-4 sm:p-5">
                            <a href="{{ url('/berita') }}" class="inline-flex min-h-10 w-full items-center justify-center gap-2 rounded-xl bg-[#49108B] px-4 py-2.5 text-sm font-extrabold text-white transition-colors hover:bg-[#6B2DB3] focus:outline-none focus-visible:ring-4 focus-visible:ring-[#7E30E1]/25 sm:text-base">
                                Lihat Semua Berita
                                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <path d="M5 12h14M13 6l6 6-6 6" />
                                </svg>
                            </a>
                        </div>
                    </section>

                    <section class="rounded-2xl border border-[#E7E0EF] bg-white p-5 shadow-sm sm:p-6">
                        <div class="flex items-start gap-3">
                            <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl border border-[#DCCAF0] bg-[#F3ECFA] text-[#6B2DB3]">
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <path d="M4 21h16M6 21V5.5L12 3l6 2.5V21M9 8h.01M15 8h.01M9 12h.01M15 12h.01M10 21v-4h4v4" />
                                </svg>
                            </span>
                            <div class="min-w-0">
                                <h2 class="text-base font-extrabold text-[#20132F]">SMK Negeri 4 Tarakan</h2>
                                <p class="mt-1 text-sm leading-6 text-slate-600">Terus ikuti informasi, agenda, dan berbagai kegiatan terbaru dari sekolah.</p>
                            </div>
                        </div>
                    </section>
                </aside>
            </div>
        </main>
    </div>