<div>
    <div>
        <div
            wire:key="beranda-page-root"
            x-data="{ showScrollHint: false, showScrollTop: false }"
            x-init="$nextTick(() => { showScrollHint = window.scrollY <= 10; showScrollTop = window.scrollY > 250 })"
            @scroll.window.passive="showScrollHint = window.scrollY <= 10; showScrollTop = window.scrollY > 250"
            class="relative mx-0 w-full min-w-0 max-w-none overflow-x-clip bg-white font-[Plus_Jakarta_Sans,Arial,sans-serif] text-[#20132F] antialiased">

            @php
            $programs = [
            ['nama' => 'PPLG', 'gambar' => 'logo-pplg.png', 'alt' => 'Logo PPLG'],
            ['nama' => 'DKV', 'gambar' => 'logo-dkv.png', 'alt' => 'Logo DKV'],
            ['nama' => 'ANIMASI', 'gambar' => 'logo-animasi.png', 'alt' => 'Logo Animasi'],
            ['nama' => 'TKJ', 'gambar' => 'logo-tkj.png', 'alt' => 'Logo TKJ'],
            ];

            $berita = [
            [
            'tanggal' => '22 Juli 2024',
            'judul' => 'WORKSHOP PENGUATAN KELEMBAGAAN BKK SMK 4 TARAKAN',
            'deskripsi' => 'SMK 4 Tarakan mengadakan workshop penguatan kelembagaan BKK, mengundang narasumber dari dinas tenaga kerja dan perindustrian oleh Bapak M. Taufik, S.Hut., M.A.P.',
            'gambar' => 'berita-workshop.png',
            ],
            [
            'tanggal' => '18 Mei 2024',
            'judul' => 'HUT SMK NEGERI 4 TARAKAN YANG KE-4 TAHUN',
            'deskripsi' => 'Perayaan ulang tahun ke-4 SMK Negeri 4 Tarakan pada 18 Mei 2024 berlangsung meriah dengan berbagai lomba antarguru, staf tata usaha, dan siswa. Acara ditutup dengan pemotongan tumpeng sebagai simbol rasa syukur dan harapan untuk kemajuan sekolah di masa depan.',
            'gambar' => 'berita-hut.png',
            ],
            [
            'tanggal' => '5 Mei 2024',
            'judul' => 'PENGUMUMAN KELULUSAN SISWA KELAS XII SMKN 4 TARAKAN TAHUN PELAJARAN 2023/2024',
            'deskripsi' => 'Dengan bangga dan rahmat Tuhan Yang Maha Kuasa, pihak SMK Negeri 4 Tarakan menyampaikan hasil rapat pleno dewan guru terkait kelulusan kelas 12 angkatan ke-II tahun pelajaran 2023/2024.',
            'gambar' => 'berita-kelulusan.png',
            ],
            ];
            $prestasi = [
            [
            'tahun' => 'Tahun 2023',
            'warna' => 'gold',
            'judul' => 'Prestasi LKS Tingkat Provinsi Tahun 2024',
            'deskripsi' => 'LKS (Lomba Kompetensi Siswa) Tingkat Provinsi Tahun 2024 merupakan ajang kompetisi untuk menguji keterampilan, kreativitas, dan kompetensi siswa SMK sesuai bidang keahliannya.',
            ],
            [
            'tahun' => 'Tahun 2023',
            'warna' => 'purple',
            'judul' => 'Prestasi O2SN Tahun 2024',
            'deskripsi' => 'O2SN (Olimpiade Olahraga Siswa Nasional) Tahun 2024 merupakan ajang kompetisi olahraga bagi siswa untuk mengembangkan bakat, kemampuan, dan sportivitas tingkat kota.',
            ],
            [
            'tahun' => 'Tahun 2024',
            'warna' => 'green',
            'judul' => 'Prestasi FLS2N Tahun 2024',
            'deskripsi' => 'FLS2N merupakan ajang kompetisi seni bagi siswa untuk mengembangkan kreativitas, bakat, dan potensi di bidang seni. Pada tahun 2024 di tingkat kota.',
            ],
            ];
            $statistik = [
            [
            'key' => 'daily',
            'label' => 'HARI INI (DAILY)',
            'angka' => '1,842',
            'perubahan' => '+14.2%',
            'catatan' => 'vs kemarin',
            'detail_label' => 'Tayangan Halaman:',
            'detail' => '4,920',
            ],
            [
            'key' => 'weekly',
            'label' => 'MINGGU INI',
            'angka' => '12,580',
            'perubahan' => '+8.7%',
            'catatan' => 'pertumbuhan',
            'detail_label' => 'Rata-rata/Hari:',
            'detail' => '1,797',
            ],
            [
            'key' => 'monthly',
            'label' => 'BULAN INI',
            'angka' => '48,230',
            'perubahan' => '',
            'catatan' => 'Puncak: Gelombang PPDB & UKK',
            'detail_label' => 'Target Bulanan:',
            'detail' => '107% Tercapai',
            ],
            [
            'key' => 'total',
            'label' => 'TOTAL KUMULATIF',
            'angka' => '348,720',
            'perubahan' => '',
            'catatan' => 'Sejak Revitalisasi Portal IT',
            'detail_label' => 'Status Server:',
            'detail' => '99.98% Uptime',
            ],
            ];
            @endphp

            {{-- ======================================================
            HOMEPAGE HERO + STUDY PROGRAMS
======================================================= --}}
            <section class="relative isolate w-full overflow-hidden bg-[#49108B] bg-[url('/images/beranda/hero-sekolah.png')] bg-cover bg-center text-white before:absolute before:inset-0 before:bg-[linear-gradient(105deg,rgba(42,9,62,0.94)_0%,rgba(79,35,145,0.88)_52%,rgba(139,70,214,0.82)_100%)]">
                <div class="relative z-10 mx-auto w-full max-w-[1600px] px-4 sm:px-6 lg:px-12">
                    {{-- SCHOOL IDENTITY AND ACCREDITATION --}}
                    <div class="grid grid-cols-1 items-start gap-6 py-9 sm:py-12 xl:grid-cols-[minmax(0,1fr)_auto] xl:gap-x-10 xl:gap-y-0 xl:py-14">
                        <div class="order-2 grid min-w-0 grid-cols-1 items-start gap-6 sm:grid-cols-[clamp(120px,18vw,210px)_minmax(0,1fr)] sm:gap-x-7 sm:gap-y-5 xl:order-1">
                            <img
                                src="{{ asset('images/logo-smkn4.png') }}"
                                alt="Logo SMK Negeri 4 Tarakan"
                                class="mx-auto h-24 w-24 shrink-0 object-contain drop-shadow-lg sm:mx-0 sm:h-[clamp(130px,17vw,210px)] sm:w-[clamp(130px,17vw,210px)] lg:h-[230px] lg:w-[230px]"
                                onerror="this.onerror=null;this.src='{{ asset('images/beranda/logo-smkn4.png') }}';">

                            <div class="w-full min-w-0 max-w-[980px] text-center sm:text-left">
                                <p class="mb-3 text-[15px] font-semibold uppercase tracking-wide text-white/95 sm:mb-4 sm:text-base lg:text-lg">
                                    SELAMAT DATANG DI WEBSITE RESMI
                                </p>
                                <h1 class="m-0 text-[clamp(2.125rem,5vw,4rem)] font-black uppercase leading-[1.08] tracking-tight">
                                    SMK NEGERI 4
                                    <span class="mt-1 block text-[#FDC003]">
                                        TARAKAN
                                    </span>
                                </h1>
                                <p class="mt-3 text-lg font-semibold italic leading-relaxed text-white sm:mt-4 sm:text-xl lg:text-2xl">
                                    “Unggul dalam Mutu, Tinggi dalam Prestasi, Taklukkan Dunia dengan IT”
                                </p>
                                <p class="mt-4 text-justify text-base font-medium leading-[1.85] text-white/95 sm:mt-5 sm:text-lg lg:text-xl">
                                    Mempersiapkan generasi emas vokasi di Kalimantan Utara dengan kurikulum industri teknologi mutakhir, karakter tangguh, serta dedikasi nyata bagi kemajuan bangsa.
                                </p>

                                {{-- NAVIGATION BUTTONS --}}
                                <div class="mt-6 flex flex-col justify-center gap-3 min-[420px]:flex-row min-[420px]:flex-wrap min-[420px]:justify-center sm:justify-start sm:gap-4">
                                    <a href="{{ url('/spmb') }}"
                                        class="inline-flex min-h-12 w-full items-center justify-center gap-2 rounded-[10px] border border-yellow-500 bg-[#FDC003] px-5 text-center text-base font-bold text-[#351A43] shadow-md transition duration-200 hover:-translate-y-0.5 hover:bg-yellow-400 min-[420px]:w-auto sm:min-w-[210px] sm:min-h-14 sm:text-base">

                                        <svg class="h-5 w-5 shrink-0 sm:h-[22px] sm:w-[22px]"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            aria-hidden="true">
                                            <path d="M4 5h11v14H4z" />
                                            <path d="M8 9h3M8 13h3M18 8h2v11h-6" />
                                            <path d="m17 4 3 3-3 3" />
                                        </svg>
                                        Informasi SPMB
                                    </a>

                                    <a href="{{ url('/visi-misi') }}"
                                        class="inline-flex min-h-12 w-full items-center justify-center gap-2 rounded-[10px] border border-white/40 bg-white/15 px-5 text-center text-base font-bold text-white shadow-md transition duration-200 hover:-translate-y-0.5 hover:bg-white/25 min-[420px]:w-auto sm:min-w-[210px] sm:min-h-14 sm:text-base">

                                        <svg class="h-5 w-5 shrink-0 sm:h-[22px] sm:w-[22px]"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            aria-hidden="true">
                                            <circle cx="12" cy="12" r="9" />
                                            <path d="m10 8 6 4-6 4V8Z" />
                                        </svg>
                                        Profil Sekolah
                                    </a>
                                </div>
                            </div>
                        </div>

                        {{-- ACCREDITATION BADGE - RIGHT COLUMN --}}
                        <div class="order-1 flex justify-end xl:order-2">
                            <span class="inline-flex min-h-10 items-center gap-2 rounded-full border-2 border-[#7E30E1] bg-white px-4 py-2 text-[15px] font-extrabold uppercase tracking-wide text-[#49108B] sm:text-base shadow-lg transition duration-300 hover:scale-105 hover:shadow-xl max-[420px]:gap-1.5 max-[420px]:px-3 sm:min-h-11 sm:gap-2.5 sm:px-5 sm:text-base lg:min-h-12 lg:gap-3 lg:px-6 lg:text-lg">

                                <svg class="h-5 w-5 shrink-0 text-[#7E30E1] sm:h-6 sm:w-6 lg:h-7 lg:w-7"
                                    viewBox="0 0 32 32"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                    aria-hidden="true">
                                    <path d="M9 18.5V29L16 25.4L23 29V18.5" fill="#7E30E1" />
                                    <path d="M16 2.5L18.5 4.7L21.9 4.3L23.2 7.5L26.4 9.1L25.8 12.5L27.6 15.5L25.3 18.1L25 21.6L21.6 22.5L18.9 24.8L16 23.1L13.1 24.8L10.4 22.5L7 21.6L6.7 18.1L4.4 15.5L6.2 12.5L5.6 9.1L8.8 7.5L10.1 4.3L13.5 4.7L16 2.5Z" fill="#7E30E1" />
                                    <path d="M16 7.1L18.1 11.3L22.7 12L19.4 15.2L20.2 19.8L16 17.6L11.8 19.8L12.6 15.2L9.3 12L13.9 11.3L16 7.1Z" fill="#F3F8FF" />
                                </svg>

                                <span class="whitespace-nowrap">
                                    AKREDITASI BAIK SEKALI
                                </span>
                            </span>
                        </div>
                    </div>

                    <div class="border-t border-white/30"></div>

                    {{-- STUDY PROGRAM LOGOS --}}
                    <div class="grid grid-cols-2 items-center gap-x-5 gap-y-5 py-7 sm:grid-cols-4 sm:gap-6 sm:py-8 lg:gap-8">
                        @foreach ($programs as $program)
                        <div class="flex h-28 min-w-0 items-center justify-center sm:h-36 lg:h-44">
                            <img
                                src="{{ asset('images/beranda/' . $program['gambar']) }}"
                                alt="{{ $program['alt'] }}"
                                class="h-full w-full max-w-[220px] object-contain drop-shadow-md transition duration-200 hover:-translate-y-1"
                                loading="eager">
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>

            <button
                type="button"
                x-show="showScrollHint"
                x-transition:enter="transition-opacity ease-out duration-300"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition-opacity ease-in duration-200"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                @click="document.getElementById('sejarah')?.scrollIntoView({ behavior: 'smooth', block: 'start' })"
                aria-label="Gulir ke bawah"
                title="Gulir ke bawah"
                class="group fixed bottom-7 left-1/2 z-[60] flex h-16 w-16 -translate-x-1/2 cursor-pointer items-center justify-center rounded-full border-[2.5px] border-[#FDC003] bg-gradient-to-br from-[#8B43EA] to-[#49108B] text-white shadow-[0_6px_24px_rgba(73,16,139,0.45)] ring-4 ring-white/20 transition-all duration-300 hover:scale-110 hover:shadow-[0_8px_28px_rgba(73,16,139,0.55)] focus:outline-none focus-visible:ring-4 focus-visible:ring-[#FDC003]/50 sm:h-[76px] sm:w-[76px]">
                <svg
                    class="h-8 w-8 animate-bounce text-white sm:h-10 sm:w-10"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2.2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    aria-hidden="true">
                    <path d="M12 4v15" />
                    <path d="m6 13 6 6 6-6" />
                </svg>
            </button>

            {{-- SCROLL TO TOP BUTTON --}}
            <button
                type="button"
                x-show="showScrollTop"
                x-transition:enter="transition-opacity ease-out duration-300"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition-opacity ease-in duration-200"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                @click="window.scrollTo({ top: 0, behavior: 'smooth' })"
                aria-label="Kembali ke atas"
                title="Kembali ke atas"
                class="group fixed bottom-5 right-4 z-[60] flex h-12 w-12 cursor-pointer items-center justify-center rounded-full border-2 border-[#FDC003] bg-gradient-to-br from-[#8B43EA] to-[#49108B] text-white shadow-[0_6px_22px_rgba(73,16,139,0.4)] ring-4 ring-white/20 transition-all duration-300 hover:scale-110 hover:shadow-[0_8px_26px_rgba(73,16,139,0.5)] focus:outline-none focus-visible:ring-4 focus-visible:ring-[#FDC003]/50 sm:bottom-7 sm:right-7 sm:h-14 sm:w-14">
                <svg
                    class="h-6 w-6 text-white transition-transform duration-300 group-hover:-translate-y-0.5 sm:h-7 sm:w-7"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2.4"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    aria-hidden="true">
                    <path d="M12 20V4" />
                    <path d="m6 10 6-6 6 6" />
                </svg>
            </button>

            {{-- ======================================================
            SEJARAH SINGKAT KAMI
======================================================= --}}
            <section class="bg-white py-14 sm:py-16 lg:py-20" id="sejarah">
                <div class="mx-auto w-full max-w-[1600px] min-w-0 px-[clamp(16px,4vw,64px)]">
                    <div class="grid grid-cols-1 items-center gap-10 lg:grid-cols-[minmax(0,0.9fr)_minmax(0,1.1fr)] xl:gap-12">
                        <div class="relative aspect-[4/3] w-full min-w-0 before:absolute before:-left-3 before:-top-3 before:z-0 before:h-20 before:w-20 before:rounded-[18px] before:bg-[#EDE3F8] after:absolute after:-bottom-3 after:-right-3 after:z-0 after:h-16 after:w-24 after:rounded-[20px] after:bg-[#FCEAC8] sm:before:-left-4 sm:before:-top-4 sm:before:h-24 sm:before:w-24 sm:after:-bottom-4 sm:after:-right-4 sm:after:h-20 sm:after:w-28">
                            <img
                                src="{{ asset('images/beranda/sejarah-sekolah.png') }}"
                                alt="Kegiatan murid SMK Negeri 4 Tarakan"
                                class="absolute inset-0 z-[1] h-full w-full rounded-[17px] border-[5px] border-white object-cover object-center shadow-xl"
                                loading="lazy">
                        </div>
                        <div class="w-full min-w-0">
                            <h2 class="m-0 text-[clamp(1.875rem,3vw,2.5rem)] font-black leading-[1.15] tracking-tight text-[#21132F]">
                                Sejarah Singkat Kami
                            </h2>
                            <p class="mt-4 text-base leading-[1.85] break-words text-justify text-slate-600 sm:text-[17px] lg:text-lg">
                                SMK Negeri 4 Tarakan merupakan sekolah kejuruan negeri yang resmi
                                didirikan pada tahun 2020 berdasarkan Surat Keputusan Pendirian
                                dan Izin Operasional dari Pemerintah Daerah Setempat.
                            </p>
                            <p class="mt-4 text-base leading-[1.85] break-words text-justify text-slate-600 sm:text-[17px] lg:text-lg">
                                Pendirian sekolah ini dilandasi komitmen mulia untuk mengantisipasi
                                lonjakan lulusan SMP di Kota Tarakan sekaligus mewujudkan visi besar
                                sebagai pengembangan talenta teknologi informasi di Provinsi
                                Kalimantan Utara.
                            </p>
                            <p class="mt-4 text-base leading-[1.85] break-words text-justify text-slate-600 sm:text-[17px] lg:text-lg">
                                Dengan mengintegrasikan sarana laboratorium komputer modern,
                                kurikulum adaptif industri 4.0, dan tenaga pendidik bersertifikasi
                                profesional, SMK Negeri 4 Tarakan bertransformasi menjadi kawah
                                candradimuka bagi generasi penerus bangsa yang siap bersaing di
                                kancah nasional maupun internasional.
                            </p>

                            <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-3 sm:grid-cols-2 lg:grid-cols-1 xl:grid-cols-2">
                                <div class="flex min-w-0 items-start gap-2 text-base font-semibold leading-7 text-[#3F3549]">

                                    <svg class="h-[clamp(14px,1.2vw,22px)] w-[clamp(14px,1.2vw,22px)] shrink-0 text-amber-500" viewBox="0 0 24 24" fill="currentColor">
                                        <circle cx="12" cy="12" r="11" />
                                        <path d="m7 12 3 3 7-7" fill="none"
                                            stroke="#FFFFFF" stroke-width="2.2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    Kurikulum Berbasis Proyek (PBL)
                                </div>

                                <div class="flex min-w-0 items-start gap-2 text-base font-semibold leading-7 text-[#3F3549]">
                                    <svg class="h-[clamp(14px,1.2vw,22px)] w-[clamp(14px,1.2vw,22px)] shrink-0 text-amber-500" viewBox="0 0 24 24" fill="currentColor">
                                        <circle cx="12" cy="12" r="11" />
                                        <path d="m7 12 3 3 7-7" fill="none"
                                            stroke="#FFFFFF" stroke-width="2.2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    Kerjasama Magang Industri BUMN & Swasta
                                </div>

                                <div class="flex min-w-0 items-start gap-2 text-base font-semibold leading-7 text-[#3F3549]">
                                    <svg class="h-[clamp(14px,1.2vw,22px)] w-[clamp(14px,1.2vw,22px)] shrink-0 text-amber-500" viewBox="0 0 24 24" fill="currentColor">
                                        <circle cx="12" cy="12" r="11" />
                                        <path d="m7 12 3 3 7-7" fill="none"
                                            stroke="#FFFFFF" stroke-width="2.2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    Fasilitas Lab Multimedia & Jaringan Terkini
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- ======================================================
            KEPALA SEKOLAH
======================================================= --}}
            <section class="border-y border-[#E9E2F1] bg-[#F7F3FC] px-0 py-14 sm:py-16 lg:py-20" id="kepala-sekolah">
                <div class="mx-auto w-full max-w-[1600px] min-w-0 px-[clamp(16px,4vw,64px)]">
                    <h2 class="mb-8 flex items-center gap-3 text-[clamp(1.875rem,3vw,2.5rem)] font-black leading-[1.15] tracking-tight text-[#49108B] before:h-7 before:w-[6px] before:shrink-0 before:rounded-lg before:bg-yellow-400 before:content-['']">
                        Kepala Sekolah
                    </h2>
                    <div class="grid w-full grid-cols-1 items-start gap-8 lg:grid-cols-[minmax(0,1.05fr)_minmax(0,.95fr)] xl:gap-12">
                        <figure class="relative isolate aspect-[4/3] w-full min-w-0 overflow-hidden rounded-[24px] border-2 border-purple-200 bg-[#49108B] shadow-md sm:aspect-[16/11] lg:aspect-[4/3]">
                            <img
                                src="{{ asset('images/beranda/kepala-sekolah.png') }}"
                                alt="Kepala SMK Negeri 4 Tarakan"
                                class="absolute inset-0 h-full w-full object-cover object-center"
                                loading="lazy">

                            <figcaption class="absolute inset-x-0 bottom-0 bg-[linear-gradient(0deg,rgba(55,9,90,0.98)_0%,rgba(91,24,139,0.91)_48%,rgba(126,34,206,0.08)_100%)] px-4 pb-4 pt-16 text-white sm:px-6 sm:pb-5 sm:pt-20">
                                <strong class="block max-w-full break-words text-2xl font-extrabold leading-tight sm:text-[28px] lg:text-[30px]">Aliyas Imran, S.Pd.</strong>
                                <span class="mt-1.5 block break-words text-lg font-semibold leading-7 text-white [overflow-wrap:anywhere] sm:text-xl">NIP. 198012182005021002</span>
                                <span class="mt-1 block max-w-full break-words text-base leading-6 text-purple-100 sm:text-lg">Dinas Pendidikan dan Kebudayaan Prov. Kalimantan Utara</span>
                            </figcaption>
                        </figure>

                        <div class="w-full min-w-0">
                            <blockquote class="w-full rounded-r-2xl border-l-4 border-purple-600 bg-white px-5 py-5 text-[17px] font-semibold italic leading-[1.8] text-justify text-[#313047] sm:px-6 sm:text-lg sm:leading-[1.85] lg:text-xl">
                                “Setiap anak memiliki potensi untuk bersinar, tugas kami adalah
                                membimbingnya tumbuh menjadi generasi berkarakter, berprestasi,
                                dan mampu mengukir masa depan yang membanggakan.”
                            </blockquote>
                            <p class="mt-5 break-words text-base leading-[1.85] text-justify text-slate-600 sm:text-[17px] lg:text-lg">
                                Kami menyambut seluruh murid, orang tua, alumni, dan masyarakat
                                untuk mengenal lebih dekat SMK Negeri 4 Tarakan. Dengan komitmen
                                menghadirkan pendidikan berkualitas melalui bidang PPLG, TKJ,
                                DKV, dan Animasi, kami berupaya membekali setiap murid dengan
                                ilmu, keterampilan, dan karakter agar mampu meraih cita-cita
                                serta menghadapi tantangan masa depan.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            {{-- ======================================================
            BERITA TERKINI
======================================================= --}}
            <section class="bg-white py-14 sm:py-16 lg:py-20" id="berita">
                <div class="mx-auto w-full max-w-[1600px] min-w-0 px-[clamp(16px,4vw,64px)]">
                    <div class="ml-[2px] max-[760px]:ml-0">
                        <h2 class="m-0 text-[clamp(1.875rem,3vw,2.5rem)] font-black leading-[1.15] tracking-tight text-[#21132F]">
                            Berita Terkini
                        </h2>
                        <p class="mt-3 text-base leading-[1.75] text-slate-600 sm:text-[17px] lg:text-lg">
                            Informasi agenda dan kegiatan edukatif seputar SMKN 4 Tarakan
                        </p>
                    </div>

                    <div class="mt-8 grid w-full grid-cols-1 items-stretch gap-5 md:grid-cols-2 xl:grid-cols-3">
                        @foreach ($berita as $item)
                        <article class="group flex h-full min-h-0 w-full min-w-0 flex-col overflow-hidden rounded-2xl border border-[#E7E0EF] bg-white shadow-sm transition duration-200 hover:-translate-y-1 hover:shadow-xl">
                            <img
                                src="{{ asset('images/beranda/' . $item['gambar']) }}"
                                alt="{{ $item['judul'] }}"
                                class="aspect-[16/10] w-full max-w-full shrink-0 bg-purple-50 object-cover"
                                loading="lazy">

                            <div class="flex flex-1 flex-col px-5 pb-5 pt-5 sm:px-6">
                                <div class="flex min-w-0 flex-wrap items-center gap-2 text-[15px] font-semibold leading-6 text-slate-600 sm:text-base">
                                    <svg class="h-[clamp(14px,1.2vw,22px)] w-[clamp(14px,1.2vw,22px)] shrink-0" viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="1.8"
                                        stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <circle cx="12" cy="12" r="9" />
                                        <path d="M12 7v5l3 2" />
                                    </svg>
                                    {{ $item['tanggal'] }}
                                </div>

                                <h3 class="mt-4 break-words text-lg font-extrabold uppercase leading-[1.45] text-[#21132F] [overflow-wrap:anywhere] sm:text-xl">
                                    {{ $item['judul'] }}
                                </h3>

                                <p class="my-4 mb-5 text-base leading-[1.85] break-words text-justify text-slate-600 sm:text-[17px] lg:text-lg">
                                    {{ $item['deskripsi'] }}
                                </p>

                                <a href="#berita" class="mt-auto flex items-center gap-2 border-t border-[#EDF0F5] pt-4 text-base font-extrabold leading-7 text-[#49108B]">
                                    Baca Selengkapnya
                                    <svg class="h-[clamp(14px,1.2vw,22px)] w-[clamp(14px,1.2vw,22px)] shrink-0" viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M5 12h14M13 6l6 6-6 6" />
                                    </svg>
                                </a>
                            </div>
                        </article>
                        @endforeach
                    </div>
                </div>
            </section>

            {{-- ======================================================
            PIALA DAN PENGHARGAAN
======================================================= --}}
            <section class="relative z-[1] mt-0 border-t border-[#E9E2F1] bg-[#F7F3FC] px-0 py-14 sm:py-16 lg:py-20" id="prestasi">
                <div class="mx-auto w-full max-w-[1600px] min-w-0 px-[clamp(16px,4vw,64px)]">
                    <div class="mx-auto max-w-[760px] text-center max-[760px]:text-left">
                        <h2 class="m-0 text-[clamp(1.875rem,3vw,2.5rem)] font-black leading-[1.15] tracking-tight text-[#21132F]">
                            Prestasi dan Penghargaan
                        </h2>

                        <p class="mt-3 text-base leading-[1.75] text-slate-600 sm:text-[17px] lg:text-lg">
                            Bukti nyata dedikasi dan keterampilan siswa di berbagai ajang kompetisi kejuruan
                        </p>
                    </div>

                    <div class="mt-8 grid w-full grid-cols-1 items-stretch gap-5 md:grid-cols-2 xl:grid-cols-3">
                        @foreach ($prestasi as $item)
                        <article class="h-full min-h-0 w-full min-w-0 rounded-[15px] border border-[#E7E0EF] bg-white p-5 shadow-sm sm:p-6">
                            <span class="inline-flex min-h-6 items-center rounded px-2 py-1 text-[15px] font-bold leading-5 sm:text-base {{ match($item['warna']) { 'gold' => 'bg-amber-100 text-amber-800', 'purple' => 'bg-purple-100 text-purple-800', 'green' => 'bg-emerald-100 text-emerald-700', default => 'bg-slate-100 text-slate-700' } }}">
                                {{ $item['tahun'] }}
                            </span>

                            <h3 class="mt-5 break-words text-lg font-extrabold leading-[1.45] text-[#251532] [overflow-wrap:anywhere] sm:text-xl">
                                {{ $item['judul'] }}
                            </h3>

                            <p class="mt-4 text-base leading-[1.85] break-words text-justify text-slate-600 sm:text-[17px] lg:text-lg">
                                {{ $item['deskripsi'] }}
                            </p>
                        </article>
                        @endforeach
                    </div>
                </div>
            </section>

            {{-- ======================================================
            INFORMASI PENGUNJUNG
======================================================= --}}
            <section class="w-full border-t border-[#E9E2F1] bg-white py-14 sm:py-16 lg:py-20" id="statistik">
                <div class="mx-auto w-full max-w-[1600px] min-w-0 px-[clamp(16px,4vw,64px)]">
                    <div class="mx-auto max-w-[760px] text-center">
                        <p class="text-base leading-[1.75] text-slate-600 sm:text-[17px] lg:text-lg">
                            Website resmi SMK Negeri 4 Tarakan telah dikunjungi oleh
                        </p>

                        <div class="mt-5 text-[clamp(2.75rem,8vw,5.5rem)] font-black leading-[1.1] tracking-tight text-[#7E30E1] tabular-nums">
                            {{ number_format((int) str_replace(',', '', $statistik[3]['angka']), 0, ',', '.') }}
                        </div>

                        <p class="mt-2 text-xl font-extrabold text-[#49108B] sm:text-2xl">
                            Pengunjung
                        </p>

                        <p class="mt-4 text-base leading-7 text-slate-600 sm:text-lg">
                            Terima kasih telah mengunjungi website resmi kami.
                        </p>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>