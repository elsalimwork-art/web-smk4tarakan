
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#35164f">

    <title>Berita | SMK Negeri 4 Tarakan</title>

    <!-- FONT PLUS JAKARTA SANS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        /* =========================================
           1. ROOT DAN PENGATURAN DASAR
        ========================================= */

        :root {
            --b4-purple-deep: #35164f;
            --b4-purple: #5c188f;
            --b4-purple-light: #8135b5;
            --b4-magenta: #c45abe;
            --b4-yellow: #f5a20a;

            --b4-ink: #19142d;
            --b4-body: #4d5e76;
            --b4-muted: #748197;
            --b4-line: #e1e7f0;
            --b4-white: #ffffff;
            --b4-bg: #fff8ff;

            --b4-shadow: 0 12px 35px rgba(53, 22, 79, 0.08);
            --b4-radius: 20px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: var(--b4-bg);
            color: var(--b4-ink);
            line-height: 1.6;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        img {
            display: block;
            max-width: 100%;
        }

        .b4-container {
            width: min(1200px, calc(100% - 40px));
            margin: auto;
        }


        /* =========================================
           2. HEADER BERITA
        ========================================= */

        .b4-news-page {
            padding: 42px 0 80px;
            min-height: 100vh;
        }

        .b4-news-hero {
            position: relative;
            overflow: hidden;
            padding: 65px 60px;
            border-radius: 28px;
            color: var(--b4-white);
            background: linear-gradient(
                115deg,
                #2B1745 0%,
                #49108B 50%,
                #7E30E1 100%
            );
            box-shadow: 0 15px 40px rgba(92, 24, 143, 0.18);
        }

        .b4-news-hero::before {
            content: "";
            position: absolute;
            width: 270px;
            height: 270px;
            right: -65px;
            top: -100px;
            border: 1px solid rgba(255,255,255,0.2);
            border-radius: 50%;
        }

        .b4-news-hero::after {
            content: "";
            position: absolute;
            width: 200px;
            height: 200px;
            right: -25px;
            top: -60px;
            border: 1px solid rgba(255,255,255,0.2);
            border-radius: 50%;
        }

        .b4-hero-decoration {
            position: absolute;
            width: 230px;
            height: 230px;
            right: 180px;
            bottom: -160px;
            border-radius: 50%;
            background: rgba(255,255,255,0.06);
        }

        .b4-news-hero-content {
            position: relative;
            z-index: 2;
            max-width: 720px;
        }

        .b4-hero-label {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            padding: 9px 17px;
            margin-bottom: 22px;
            border: 1px solid rgba(255,255,255,0.2);
            border-radius: 50px;
            background: rgba(255,255,255,0.1);
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 0.5px;
        }

        .b4-hero-label svg {
            width: 17px;
            height: 17px;
            color: var(--b4-yellow);
        }

        .b4-news-hero h1 {
            font-size: clamp(30px, 4vw, 46px);
            line-height: 1.2;
            font-weight: 800;
            letter-spacing: -1.5px;
            margin-bottom: 18px;
        }

        .b4-news-hero p {
            max-width: 610px;
            color: rgba(255,255,255,0.85);
            font-size: 15px;
            line-height: 1.9;
        }

        .b4-school-info {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 25px;
        }

        .b4-school-info span {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 9px 13px;
            border: 1px solid rgba(255,255,255,0.2);
            border-radius: 50px;
            background: rgba(255,255,255,0.1);
            font-size: 11px;
            font-weight: 600;
        }

        .b4-school-info i {
            color: #ffd166;
            font-style: normal;
            font-size: 14px;
        }

        .b4-hero-icon {
            position: absolute;
            right: 65px;
            top: 50%;
            transform: translateY(-50%);
            width: 175px;
            height: 175px;
            color: rgba(255,255,255,0.19);
        }


        /* =========================================
           3. JUDUL DAFTAR BERITA
        ========================================= */

        .b4-news-heading {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 15px;
            margin: 48px 0 25px;
        }

        .b4-news-heading h2 {
            font-size: 25px;
            font-weight: 800;
            color: var(--b4-purple-deep);
            margin-bottom: 5px;
        }

        .b4-news-heading p {
            color: var(--b4-muted);
            font-size: 13px;
        }

        .b4-news-heading-label {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            padding: 11px 17px;
            border-radius: 50px;
            color: var(--b4-purple);
            background: #f0e5fa;
            font-size: 12px;
            font-weight: 700;
        }


        /* =========================================
           4. GRID KARTU BERITA
        ========================================= */

        .b4-news-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 25px;
        }

        .b4-news-card {
            display: flex;
            flex-direction: column;
            overflow: hidden;
            min-width: 0;
            background: var(--b4-white);
            border: 1px solid #eee5f5;
            border-radius: var(--b4-radius);
            box-shadow: 0 5px 20px rgba(53,22,79,0.04);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .b4-news-card:hover {
            transform: translateY(-6px);
            box-shadow: var(--b4-shadow);
        }

        .b4-news-image {
            position: relative;
            height: 215px;
            overflow: hidden;
            background: #eadcf5;
        }

        .b4-news-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .b4-news-card:hover .b4-news-image img {
            transform: scale(1.06);
        }

        .b4-news-date {
            position: absolute;
            bottom: 13px;
            left: 13px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 12px;
            border-radius: 8px;
            color: white;
            background: rgba(25,20,45,0.75);
            font-size: 10px;
            font-weight: 600;
            backdrop-filter: blur(5px);
        }

        .b4-news-date svg {
            width: 15px;
            height: 15px;
            color: #ffd166;
        }


        /* =========================================
           5. ISI KARTU BERITA
        ========================================= */

        .b4-news-content {
            display: flex;
            flex-direction: column;
            flex: 1;
            padding: 21px;
        }

        .b4-news-category {
            display: inline-block;
            align-self: flex-start;
            padding: 6px 12px;
            margin-bottom: 13px;
            border-radius: 50px;
            color: var(--b4-purple);
            background: #f0e5fa;
            font-size: 10px;
            font-weight: 700;
        }

        .b4-news-content h3 {
            color: var(--b4-ink);
            font-size: 15px;
            line-height: 1.65;
            font-weight: 800;
            margin-bottom: 11px;
            transition: color 0.2s ease;
        }

        .b4-news-card:hover .b4-news-content h3 {
            color: var(--b4-purple);
        }

        .b4-news-description {
            display: -webkit-box;
            overflow: hidden;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 3;
            color: var(--b4-muted);
            font-size: 12px;
            line-height: 1.8;
            margin-bottom: 20px;
        }

        .b4-news-footer {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 10px;
            margin-top: auto;
            padding-top: 16px;
            border-top: 1px solid var(--b4-line);
        }

        .b4-read-more {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: var(--b4-purple);
            font-size: 12px;
            font-weight: 800;
            transition: gap 0.2s ease, color 0.2s ease;
        }

        .b4-read-more:hover {
            gap: 13px;
            color: var(--b4-magenta);
        }

        .b4-read-more svg {
            width: 16px;
            height: 16px;
        }


        /* =========================================
           6. FOOTER
        ========================================= */

        .b4-news-footer-page {
            margin-top: 55px;
            padding: 23px;
            border-top: 1px solid var(--b4-line);
            text-align: center;
            color: var(--b4-muted);
            font-size: 11px;
        }

        .b4-news-footer-page strong {
            color: var(--b4-purple);
        }


        /* =========================================
           7. RESPONSIVE TABLET
        ========================================= */

        @media (max-width: 1050px) {
            .b4-news-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .b4-hero-icon {
                right: 30px;
                width: 135px;
                height: 135px;
            }

            .b4-news-hero-content {
                max-width: 75%;
            }
        }


        /* =========================================
           8. RESPONSIVE HP
        ========================================= */

        @media (max-width: 760px) {
            .b4-news-page {
                padding: 25px 0 55px;
            }

            .b4-news-hero {
                padding: 42px 27px;
                border-radius: 22px;
            }

            .b4-news-hero-content {
                max-width: 100%;
            }

            .b4-hero-icon {
                display: none;
            }

            .b4-news-hero h1 {
                font-size: 32px;
            }

            .b4-news-hero p {
                font-size: 13px;
            }

            .b4-school-info {
                gap: 8px;
            }

            .b4-school-info span {
                font-size: 10px;
            }

            .b4-news-heading {
                margin-top: 35px;
            }

            .b4-news-heading h2 {
                font-size: 21px;
            }

            .b4-news-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 16px;
            }

            .b4-news-image {
                height: 175px;
            }

            .b4-news-content {
                padding: 16px;
            }

            .b4-news-content h3 {
                font-size: 13px;
            }

            .b4-news-description {
                font-size: 11px;
            }
        }

        @media (max-width: 480px) {
            .b4-container {
                width: min(100% - 28px, 1200px);
            }

            .b4-news-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .b4-news-image {
                height: 210px;
            }

            .b4-news-hero {
                padding: 35px 22px;
            }

            .b4-news-hero h1 {
                font-size: 28px;
            }

            .b4-school-info span {
                font-size: 9px;
            }

            .b4-news-heading {
                align-items: flex-start;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            *,
            *::before,
            *::after {
                scroll-behavior: auto !important;
                transition-duration: 0.01ms !important;
            }
        }

    </style>
</head>


<body>

    @php
        $berita = [
            [
                'tanggal' => '20 Januari 2024',
                'kategori' => 'Pengumuman',
                'judul' => 'PENGUMUMAN KELULUSAN SISWA KELAS XII SMKN 4 TARAKAN TAHUN PELAJARAN 2023/2024',
                'deskripsi' => 'Pengumuman kelulusan siswa kelas XII SMK Negeri 4 Tarakan Tahun Pelajaran 2023/2024 sebagai informasi resmi bagi peserta didik.',
                'gambar' => 'images/berita/kelulusan.jpg',
                'slug' => 'pengumuman-kelulusan-siswa-kelas-xii'
            ],
            [
                'tanggal' => '20 Januari 2024',
                'kategori' => 'Kerja Sama',
                'judul' => 'SMKN 4 Tarakan Gandeng Telkom Indonesia dan AWS Academy untuk Sertifikasi Cloud & Cybersecurity',
                'deskripsi' => 'Kolaborasi strategis demi melahirkan 150 tenaga tersertifikasi internasional di bidang rekayasa jaringan awan dan mitigasi peretasan.',
                'gambar' => 'images/berita/kerja-sama.jpg',
                'slug' => 'kerja-sama-telkom-dan-aws-academy'
            ],
            [
                'tanggal' => '20 Januari 2024',
                'kategori' => 'Penerimaan Siswa',
                'judul' => 'Penerimaan Peserta Didik Baru SMK Negeri 4 Tarakan Tahun Ajaran 2023/2024',
                'deskripsi' => 'Penerimaan Peserta Didik Baru (PPDB) SMK Negeri 4 Tarakan Tahun Ajaran 2023/2024 menjadi kesempatan bagi calon peserta didik untuk bergabung.',
                'gambar' => 'images/berita/ppdb.jpg',
                'slug' => 'penerimaan-peserta-didik-baru'
            ],
        ];
    @endphp


    <!-- =========================================
         HEADER / BANNER BERITA
    ========================================== -->

    <main class="b4-news-page">
        <div class="b4-container">

            <section class="b4-news-hero">

                <div class="b4-hero-decoration"></div>

                <div class="b4-news-hero-content">

                    <div class="b4-hero-label">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h11l5 5v9a2 2 0 01-2 2z"/>
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17 20v-8H7v8M7 4v4h8"/>
                        </svg>
                        PUSAT INFORMASI SEKOLAH
                    </div>

                    <h1>Pusat Informasi & Berita</h1>

                    <p>
                        Temukan informasi terbaru seputar kegiatan sekolah,
                        prestasi siswa, pengumuman, dan berbagai perkembangan
                        SMK Negeri 4 Tarakan.
                    </p>

                    <div class="b4-school-info">

                        <span>
                            <i>✦</i>
                            NPSN: 70007255
                        </span>

                        <span>
                            <i>♧</i>
                            Sekolah Menengah Kejuruan
                        </span>

                        <span>
                            <i>▣</i>
                            PPLG · TKJ · DKV · Animasi
                        </span>

                    </div>

                </div>

                <!-- IKON DEKORASI -->
                <svg class="b4-hero-icon"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 100 100"
                    stroke="currentColor" stroke-width="1.5">

                    <path d="M50 5L88 28V72L50 95L12 72V28L50 5Z"/>
                    <path d="M50 16L78 33V67L50 84L22 67V33L50 16Z"/>
                    <circle cx="50" cy="35" r="8"/>
                    <circle cx="28" cy="48" r="5"/>
                    <circle cx="72" cy="48" r="5"/>
                    <path d="M50 43C35 48 35 65 50 76C65 65 65 48 50 43Z"/>
                    <path d="M33 48L43 43M67 48L57 43"/>

                </svg>

            </section>


            <!-- =========================================
                 JUDUL DAFTAR BERITA
            ========================================== -->

            <section class="b4-news-heading">

                <div>
                    <h2>Berita Terbaru</h2>
                    <p>Informasi dan kegiatan SMK Negeri 4 Tarakan</p>
                </div>

                <div class="b4-news-heading-label">
                    <span>▣</span>
                    Informasi Sekolah
                </div>

            </section>


            <!-- =========================================
                 GRID KARTU BERITA
            ========================================== -->

            <section class="b4-news-grid">

                @foreach ($berita as $item)

                    <article class="b4-news-card"
                        wire:key="berita-{{ $loop->index }}">

                        <!-- GAMBAR BERITA -->
                        <div class="b4-news-image">

                            <img
                                src="{{ asset($item['gambar']) }}"
                                alt="{{ $item['judul'] }}"
                                onerror="this.onerror=null;this.src='{{ asset('images/beranda/gedung-sekolah.png') }}';"
                            >

                            <!-- TANGGAL -->
                            <div class="b4-news-date">

                                <svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M8 7V3m8 4V3M4 11h16M5 5h14a1 1 0 011-1h14a1 1 0 011 1v14H4V6a1 1 0 011-1z"/>
                                </svg>

                                {{ $item['tanggal'] }}

                            </div>

                        </div>


                        <!-- KONTEN BERITA -->
                        <div class="b4-news-content">

                            <span class="b4-news-category">
                                {{ $item['kategori'] }}
                            </span>

                            <h3>
                                {{ $item['judul'] }}
                            </h3>

                            <p class="b4-news-description">
                                {{ $item['deskripsi'] }}
                            </p>

                            <div class="b4-news-footer">

                                <a
                                    href="{{ url('/berita/' . $item['slug']) }}"
                                    class="b4-read-more">

                                    Baca Selengkapnya

                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M5 12h14m-6-6l6 6-6 6"/>
                                    </svg>

                                </a>

                            </div>

                        </div>

                    </article>

                @endforeach

            </section>


            <!-- =========================================
                 FOOTER
            ========================================== -->

            <footer class="b4-news-footer-page">
                <p>
                    © {{ date('Y') }}
                    <strong>SMK Negeri 4 Tarakan</strong>.
                    Semua Hak Dilindungi.
                </p>
            </footer>

        </div>
    </main>

</body>
</html>
