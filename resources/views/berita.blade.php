
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#35164f">

    <title>Berita | SMK Negeri 4 Tarakan</title>

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
            width: min(1500px, calc(100% - 60px));
            margin: auto;
        }

        /* =========================================
           2. HEADER / KOP BERITA
           MODEL KOP MAKNA LOGO
        ========================================= */

        .b4-news-page {
            padding: 22px 0 80px;
            min-height: 100vh;
        }

        .b4-news-hero {
            position: relative;
            isolation: isolate;
            overflow: hidden;

            width: 100%;
            min-height: 220px;
            padding: 36px 24px 32px;

            border-radius: 18px;
            border: 1px solid rgba(255,255,255,0.20);

            color: var(--b4-white);

            background: linear-gradient(
                90deg,
                #2B1745 0%,
                #49108B 50%,
                #7E30E1 100%
            );

            box-shadow: 0 12px 22px rgba(73,16,139,0.20);
        }

        /* ORNAMEN LINGKARAN KIRI */

        .b4-ornament-left {
            position: absolute;
            z-index: -1;
            top: -30px;
            left: -49px;
            width: 155px;
            height: 220px;
            opacity: .30;
            pointer-events: none;
        }

        /* CAHAYA KANAN */

        .b4-hero-decoration {
            position: absolute;
            z-index: -1;
            width: 256px;
            height: 256px;
            right: -64px;
            top: -64px;
            border-radius: 50%;
            background: rgba(253,192,3,.10);
            filter: blur(45px);
            pointer-events: none;
        }

        /* KONTEN KOP */

        .b4-news-hero-content {
            position: relative;
            z-index: 2;
            max-width: 895px;
        }

        /* JUDUL KOP */

        .b4-news-hero h1 {
            max-width: 895px;
            margin: 0;

            color: #ffffff;
            font-size: 30px;
            font-weight: 800;
            line-height: 1.15;
            letter-spacing: -1.2px;
        }

        /* DESKRIPSI KOP */

        .b4-news-hero-content > p {
            max-width: 790px;
            margin-top: 12px;

            color: rgba(255,255,255,0.90);
            font-size: 13px;
            font-weight: 400;
            line-height: 24px;
        }

        /* BADGE IDENTITAS SEKOLAH */

        .b4-school-info {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 10px;
            margin-top: 25px;
        }

        .b4-school-info span {
            display: inline-flex;
            align-items: center;
            gap: 7px;

            height: 30px;
            padding: 0 12px;

            border: 1px solid rgba(255,255,255,0.20);
            border-radius: 50px;

            background: rgba(255,255,255,0.10);

            color: rgba(255,255,255,0.95);
            font-size: 11px;
            font-weight: 600;
            line-height: 1;
            white-space: nowrap;

            backdrop-filter: blur(5px);
        }

        .b4-school-info svg {
            width: 14px;
            height: 14px;
            flex-shrink: 0;
        }

        .b4-school-info .b4-badge-yellow {
            color: #FDC003;
        }

        .b4-school-info .b4-badge-blue {
            color: #67D7F5;
        }

        /* ORNAMEN DAYAK KANAN */

        .b4-hero-icon {
            position: absolute;
            z-index: 1;
            right: 25px;
            top: 50%;

            display: none;

            width: auto;
            height: 255px;

            object-fit: contain;
            opacity: 0.32;

            transform: translateY(-50%);
            pointer-events: none;
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

        @media (min-width: 640px) {

            .b4-news-hero {
                padding: 36px 32px 32px;
            }

            .b4-news-hero-content {
                max-width: calc(100% - 170px);
            }

            .b4-news-hero h1 {
                font-size: 38px;
            }

            .b4-news-hero-content > p {
                font-size: 14px;
            }

            .b4-hero-icon {
                display: block;
            }
        }

        @media (max-width: 1050px) {

            .b4-container {
                width: min(100% - 40px, 1200px);
            }

            .b4-news-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        /* =========================================
           8. RESPONSIVE DESKTOP BESAR
        ========================================= */

        @media (min-width: 1200px) {

            .b4-news-hero {
                height: 258px;
                min-height: 258px;
                padding: 42px 40px 0;
            }

            .b4-news-hero h1 {
                font-size: 48px;
                line-height: 48px;
                white-space: nowrap;
            }

            .b4-news-hero-content > p {
                font-size: 15px;
            }
        }

        /* =========================================
           9. RESPONSIVE HP
        ========================================= */

        @media (max-width: 760px) {

            .b4-news-page {
                padding: 25px 0 55px;
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

            .b4-news-heading {
                margin-top: 35px;
            }

            .b4-news-heading h2 {
                font-size: 21px;
            }
        }

        @media (max-width: 639px) {

            .b4-news-hero {
                min-height: 220px;
                padding: 36px 24px 32px;
            }

            .b4-news-hero-content {
                max-width: 100%;
            }

            .b4-hero-icon {
                display: none;
            }

            .b4-news-hero h1 {
                font-size: 30px;
                letter-spacing: -1.2px;
            }

            .b4-news-hero-content > p {
                font-size: 13px;
                line-height: 24px;
            }

            .b4-school-info {
                gap: 8px;
            }
        }

        /* =========================================
           10. RESPONSIVE LAYAR KECIL
        ========================================= */

        @media (max-width: 480px) {

            .b4-container {
                width: calc(100% - 28px);
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
                font-size: 29px;
            }

            .b4-school-info span {
                font-size: 10px;
            }

            .b4-news-heading {
                align-items: flex-start;
            }
        }

        /* =========================================
           11. PENGATURAN ANIMASI
        ========================================= */

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

    <main class="b4-news-page">

        <div class="b4-container">

            <!-- =========================================
                 HEADER / KOP BERITA
                 MODEL KOP MAKNA LOGO
            ========================================== -->

            <header class="b4-news-hero">

                {{-- ORNAMEN LINGKARAN KIRI --}}
                <svg
                    class="b4-ornament-left"
                    viewBox="0 0 155 220"
                    fill="none"
                    aria-hidden="true"
                >
                    <circle cx="53" cy="61" r="91"
                        stroke="#FDC003" stroke-width="3"/>

                    <circle cx="53" cy="61" r="67"
                        stroke="#FDC003" stroke-width="3"/>

                    <circle cx="53" cy="61" r="8.5"
                        fill="#FDC003"/>

                    <path
                        d="M-12 79C30 79 69 101 87 151"
                        stroke="#FDC003"
                        stroke-width="3"
                    />
                </svg>

                {{-- CAHAYA KANAN --}}
                <div class="b4-hero-decoration"></div>

                {{-- ORNAMEN DAYAK KANAN --}}
                <img
                    src="{{ asset('images/ornamen_dayak_kop_bersih.png') }}"
                    alt=""
                    aria-hidden="true"
                    class="b4-hero-icon"
                />

                {{-- KONTEN KOP --}}
                <div class="b4-news-hero-content">

                    <h1>
                        Berita SMK Negeri 4 Tarakan
                    </h1>

                    <p>
                        Pusat informasi terbaru mengenai kegiatan, prestasi,
                        pengumuman, dan berbagai perkembangan SMK Negeri 4 Tarakan.
                    </p>

                    {{-- BADGE IDENTITAS SEKOLAH --}}
                    <div class="b4-school-info">

                        {{-- NPSN --}}
                        <span>
                            <svg
                                class="b4-badge-yellow"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            >
                                <path d="M12 2.8 14.2 4l2.5-.4 1.2 2.3 2.5 1-.2 2.6 1.4 2.2-1.4 2.2.2 2.6-2.5 1-1.2 2.3-2.5-.4-2.2 1.2-2.2-1.2-2.5.4-1.2-2.3-2.5-1 .2-2.6L2.4 12l1.4-2.2-.2-2.6 2.5-1 1.2-2.3 2.5.4L12 2.8Z"/>
                                <path d="m9 12 2 2 4-4"/>
                            </svg>

                            NPSN: 70007255
                        </span>

                        {{-- STATUS SEKOLAH --}}
                        <span>
                            <svg
                                class="b4-badge-yellow"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            >
                                <circle cx="12" cy="8" r="5.5"/>
                                <path d="m9 7.7 2 2 4-4"/>
                                <path d="m8.5 12.5-1 8 4.5-2.5 4.5 2.5-1-8"/>
                            </svg>

                            Sekolah Menengah Kejuruan
                        </span>

                        {{-- PROGRAM KEAHLIAN --}}
                        <span>
                            <svg
                                class="b4-badge-blue"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            >
                                <rect x="2.5" y="4" width="13.5" height="11" rx="1.5"/>
                                <path d="M6.5 19.5h5.5m-2.75-4.5v4.5"/>
                                <rect x="17.5" y="7.5" width="4" height="9" rx="1"/>
                                <path d="M19 14.2h1"/>
                            </svg>

                            PPLG · TKJ · DKV · Animasi
                        </span>

                    </div>

                </div>

            </header>


            <!-- =========================================
                 JUDUL DAFTAR BERITA
            ========================================== -->

            <section class="b4-news-heading">

                <div>
                    <h2>Berita Terbaru</h2>
                    <p>Informasi dan kegiatan SMK Negeri 4 Tarakan</p>
                </div>
            </section>


            <!-- =========================================
                 GRID KARTU BERITA
            ========================================== -->

            <section class="b4-news-grid">

                @foreach ($berita as $item)

                    <article class="b4-news-card">

                        {{-- GAMBAR BERITA --}}
                        <div class="b4-news-image">

                            <img
                                src="{{ asset($item['gambar']) }}"
                                alt="{{ $item['judul'] }}"
                                onerror="this.onerror=null;this.src='{{ asset('images/beranda/gedung-sekolah.png') }}';"
                            >

                            {{-- TANGGAL --}}
                            <div class="b4-news-date">

                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="2"
                                >
                                    <rect x="3" y="5" width="18" height="16" rx="2"/>
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M16 3v4M8 3v4M3 10h18"
                                    />
                                </svg>

                                {{ $item['tanggal'] }}

                            </div>

                        </div>


                        {{-- KONTEN BERITA --}}
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
                                    class="b4-read-more"
                                >
                                    Baca Selengkapnya

                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                        stroke-width="2"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M5 12h14m-6-6l6 6-6 6"
                                        />
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
