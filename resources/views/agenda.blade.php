
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#35164f">

    <title>Agenda | SMK Negeri 4 Tarakan</title>

    <!-- FONT PLUS JAKARTA SANS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
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
           1. HEADER / KOP AGENDA
        ========================================= */

        .b4-agenda-page {
            padding: 22px 0 80px;
            min-height: 100vh;
        }

        .b4-agenda-hero {
            position: relative;
            isolation: isolate;
            overflow: hidden;
            min-height: 323px;
            padding: 48px 50px;
            border-radius: 22px;
            border: 1px solid rgba(255,255,255,0.15);
            color: var(--b4-white);

            background: linear-gradient(
                105deg,
                #2B1745 0%,
                #49108B 48%,
                #7E30E1 100%
            );

            box-shadow: 0 15px 40px rgba(92, 24, 143, 0.18);
        }

        .b4-agenda-hero::before {
            content: "";
            position: absolute;
            z-index: -1;
            width: 230px;
            height: 230px;
            left: -140px;
            top: -75px;
            border: 3px solid rgba(253, 192, 3, 0.45);
            border-radius: 50%;
        }

        .b4-agenda-hero::after {
            content: "";
            position: absolute;
            z-index: -1;
            width: 170px;
            height: 170px;
            left: -82px;
            top: -46px;
            border: 3px solid rgba(253, 192, 3, 0.45);
            border-radius: 50%;
        }

        .b4-agenda-decoration {
            position: absolute;
            z-index: -1;
            width: 280px;
            height: 280px;
            right: -100px;
            top: -100px;
            border-radius: 50%;
            background: rgba(255,255,255,0.06);
            filter: blur(15px);
        }

        .b4-agenda-hero-content {
            position: relative;
            z-index: 2;
            max-width: calc(100% - 145px);
        }

        .b4-agenda-hero h1 {
            max-width: 1100px;
            font-size: clamp(34px, 4vw, 60px);
            line-height: 1.2;
            font-weight: 800;
            letter-spacing: -1.8px;
            margin-bottom: 10px;
            color: #ffffff;
        }

        .b4-agenda-hero p {
            max-width: 1000px;
            color: rgba(255,255,255,0.90);
            font-size: 18px;
            line-height: 1.65;
        }

        .b4-school-info {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 10px;
            margin-top: 28px;
        }

        .b4-school-info span {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            min-height: 37px;
            padding: 8px 15px;
            border: 1px solid rgba(255,255,255,0.2);
            border-radius: 50px;
            background: rgba(255,255,255,0.10);
            font-size: 12px;
            font-weight: 600;
            color: rgba(255,255,255,0.95);
            backdrop-filter: blur(5px);
        }

        .b4-school-info i {
            color: #ffd166;
            font-style: normal;
            font-size: 15px;
        }

        .b4-school-info .b4-badge-blue {
            color: #67D7F5;
        }

        .b4-agenda-icon {
            position: absolute;
            z-index: 1;
            right: 25px;
            top: 50%;
            transform: translateY(-50%);
            width: 125px;
            height: 310px;
            object-fit: contain;
            opacity: 0.38;
            pointer-events: none;
        }

        /* =========================================
           2. JUDUL DAFTAR AGENDA
        ========================================= */

        .b4-agenda-heading {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 15px;
            margin: 48px 0 25px;
        }

        .b4-agenda-heading h2 {
            font-size: 25px;
            font-weight: 800;
            color: var(--b4-purple-deep);
            margin-bottom: 5px;
        }

        .b4-agenda-heading p {
            color: var(--b4-muted);
            font-size: 13px;
        }

        .b4-agenda-heading-label {
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
           3. GRID KARTU AGENDA
        ========================================= */

        .b4-agenda-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 25px;
        }

        .b4-agenda-card {
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

        .b4-agenda-card:hover {
            transform: translateY(-6px);
            box-shadow: var(--b4-shadow);
        }

        .b4-agenda-image {
            position: relative;
            height: 215px;
            overflow: hidden;
            background: #eadcf5;
        }

        .b4-agenda-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .b4-agenda-card:hover .b4-agenda-image img {
            transform: scale(1.06);
        }

        .b4-agenda-date {
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

        .b4-agenda-date svg {
            width: 15px;
            height: 15px;
            color: #ffd166;
        }

        /* =========================================
           4. ISI KARTU AGENDA
        ========================================= */

        .b4-agenda-content {
            display: flex;
            flex-direction: column;
            flex: 1;
            padding: 21px;
        }

        .b4-agenda-category {
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

        .b4-agenda-content h3 {
            color: var(--b4-ink);
            font-size: 15px;
            line-height: 1.65;
            font-weight: 800;
            margin-bottom: 11px;
            transition: color 0.2s ease;
        }

        .b4-agenda-card:hover .b4-agenda-content h3 {
            color: var(--b4-purple);
        }

        .b4-agenda-description {
            display: -webkit-box;
            overflow: hidden;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 3;
            color: var(--b4-muted);
            font-size: 12px;
            line-height: 1.8;
            margin-bottom: 17px;
        }

        .b4-agenda-meta {
            display: flex;
            flex-direction: column;
            gap: 9px;
            margin-bottom: 17px;
        }

        .b4-agenda-meta-item {
            display: flex;
            align-items: center;
            gap: 9px;
            color: var(--b4-body);
            font-size: 11px;
            font-weight: 600;
        }

        .b4-agenda-meta-item svg {
            width: 15px;
            height: 15px;
            flex-shrink: 0;
            color: var(--b4-purple-light);
        }

        .b4-agenda-footer {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 10px;
            margin-top: auto;
            padding-top: 16px;
            border-top: 1px solid var(--b4-line);
        }

        .b4-agenda-status {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            color: #16845b;
            font-size: 10px;
            font-weight: 700;
        }

        .b4-agenda-status::before {
            content: "";
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: #20b77a;
        }

        .b4-agenda-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: var(--b4-purple);
            font-size: 12px;
            font-weight: 800;
            transition: gap 0.2s ease, color 0.2s ease;
        }

        .b4-agenda-link:hover {
            gap: 13px;
            color: var(--b4-magenta);
        }

        .b4-agenda-link svg {
            width: 16px;
            height: 16px;
        }

        /* =========================================
           5. KONDISI AGENDA KOSONG
        ========================================= */

        .b4-agenda-empty {
            grid-column: 1 / -1;
            padding: 55px 20px;
            text-align: center;
            background: white;
            border: 1px dashed #d9c4e8;
            border-radius: var(--b4-radius);
        }

        .b4-agenda-empty svg {
            width: 50px;
            height: 50px;
            margin: 0 auto 15px;
            color: var(--b4-purple-light);
        }

        .b4-agenda-empty h3 {
            color: var(--b4-purple-deep);
            font-size: 17px;
            margin-bottom: 7px;
        }

        .b4-agenda-empty p {
            color: var(--b4-muted);
            font-size: 12px;
        }

        /* =========================================
           6. FOOTER
        ========================================= */

        .b4-agenda-footer-page {
            margin-top: 55px;
            padding: 23px;
            border-top: 1px solid var(--b4-line);
            text-align: center;
            color: var(--b4-muted);
            font-size: 11px;
        }

        .b4-agenda-footer-page strong {
            color: var(--b4-purple);
        }

        /* =========================================
           7. RESPONSIVE TABLET
        ========================================= */

        @media (max-width: 1050px) {
            .b4-container {
                width: min(100% - 40px, 1200px);
            }

            .b4-agenda-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .b4-agenda-hero {
                min-height: 290px;
                padding: 42px 35px;
            }

            .b4-agenda-icon {
                right: 15px;
                width: 105px;
                height: 260px;
            }

            .b4-agenda-hero-content {
                max-width: calc(100% - 115px);
            }

            .b4-agenda-hero h1 {
                font-size: 42px;
            }

            .b4-agenda-hero p {
                font-size: 15px;
            }
        }

        /* =========================================
           8. RESPONSIVE HP
        ========================================= */

        @media (max-width: 760px) {
            .b4-agenda-page {
                padding: 25px 0 55px;
            }

            .b4-agenda-hero {
                min-height: auto;
                padding: 42px 27px;
                border-radius: 22px;
            }

            .b4-agenda-hero-content {
                max-width: 100%;
            }

            .b4-agenda-icon {
                display: none;
            }

            .b4-agenda-hero h1 {
                font-size: 35px;
                letter-spacing: -1px;
            }

            .b4-agenda-hero p {
                font-size: 14px;
                line-height: 1.8;
            }

            .b4-school-info {
                gap: 8px;
                margin-top: 22px;
            }

            .b4-school-info span {
                min-height: 33px;
                padding: 7px 11px;
                font-size: 10px;
            }

            .b4-agenda-heading {
                margin-top: 35px;
            }

            .b4-agenda-heading h2 {
                font-size: 21px;
            }

            .b4-agenda-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 16px;
            }

            .b4-agenda-image {
                height: 175px;
            }

            .b4-agenda-content {
                padding: 16px;
            }

            .b4-agenda-content h3 {
                font-size: 13px;
            }

            .b4-agenda-description {
                font-size: 11px;
            }
        }

        /* =========================================
           9. RESPONSIVE LAYAR KECIL
        ========================================= */

        @media (max-width: 480px) {
            .b4-container {
                width: calc(100% - 28px);
            }

            .b4-agenda-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .b4-agenda-image {
                height: 210px;
            }

            .b4-agenda-hero {
                padding: 35px 22px;
            }

            .b4-agenda-hero h1 {
                font-size: 29px;
            }

            .b4-school-info span {
                font-size: 10px;
            }

            .b4-agenda-heading {
                align-items: flex-start;
            }
        }

        /* =========================================
           10. PENGATURAN ANIMASI
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

    <!-- =========================================
         HEADER / KOP AGENDA
    ========================================== -->

    <main class="b4-agenda-page">

        <div class="b4-container">

            <section class="b4-agenda-hero">

                <div class="b4-agenda-decoration"></div>

                <div class="b4-agenda-hero-content">

                    <h1>
                        Agenda SMK Negeri 4 Tarakan
                    </h1>

                    <p>
                        Pusat informasi jadwal kegiatan, acara sekolah,
                        agenda akademik, dan berbagai kegiatan SMK Negeri 4 Tarakan.
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
                            <i class="b4-badge-blue">▣</i>
                            PPLG · TKJ · DKV · Animasi
                        </span>

                    </div>

                </div>

                <img
                    src="{{ asset('images/ornamen_dayak_kop_bersih.png') }}"
                    alt=""
                    aria-hidden="true"
                    class="b4-agenda-icon"
                />

            </section>

            <!-- JUDUL DAFTAR AGENDA -->

            <section class="b4-agenda-heading">

                <div>
                    <h2>Agenda Terbaru</h2>
                    <p>Jadwal kegiatan dan acara SMK Negeri 4 Tarakan</p>
                </div>

                <div class="b4-agenda-heading-label">
                    <span>▣</span>
                    Kalender Kegiatan Sekolah
                </div>

            </section>

            <!-- GRID KARTU AGENDA -->

            <section class="b4-agenda-grid">

                @forelse ($agenda as $item)

                    <article class="b4-agenda-card"
                        wire:key="agenda-{{ $loop->index }}">

                        <!-- GAMBAR AGENDA -->

                        <div class="b4-agenda-image">

                            <img
                                src="{{ asset($item['gambar']) }}"
                                alt="{{ $item['judul'] }}"
                                onerror="this.onerror=null;this.src='{{ asset('images/beranda/gedung-sekolah.png') }}';"
                            >

                            <!-- TANGGAL -->

                            <div class="b4-agenda-date">

                                <svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="2">

                                    <rect x="3" y="5" width="18" height="16" rx="2"/>
                                    <path stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M16 3v4M8 3v4M3 10h18"/>

                                </svg>

                                {{ $item['tanggal'] }}

                            </div>

                        </div>

                        <!-- KONTEN AGENDA -->

                        <div class="b4-agenda-content">

                            <span class="b4-agenda-category">
                                {{ $item['kategori'] }}
                            </span>

                            <h3>
                                {{ $item['judul'] }}
                            </h3>

                            <p class="b4-agenda-description">
                                {{ $item['deskripsi'] }}
                            </p>

                            <!-- WAKTU DAN LOKASI -->

                            <div class="b4-agenda-meta">

                                <div class="b4-agenda-meta-item">

                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                        stroke-width="2">

                                        <circle cx="12" cy="12" r="9"/>
                                        <path stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M12 7v5l3 2"/>

                                    </svg>

                                    {{ $item['waktu'] }}

                                </div>

                                <div class="b4-agenda-meta-item">

                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                        stroke-width="2">

                                        <path stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M20 10c0 5-8 11-8 11S4 15 4 10a8 8 0 1 1 16 0Z"/>

                                        <circle cx="12" cy="10" r="2.5"/>

                                    </svg>

                                    {{ $item['lokasi'] }}

                                </div>

                            </div>

                            <!-- FOOTER KARTU -->

                            <div class="b4-agenda-footer">

                                <span class="b4-agenda-status">
                                    {{ $item['status'] }}
                                </span>

                                <a
                                    href="{{ url('/agenda/' . $item['slug']) }}"
                                    class="b4-agenda-link">

                                    Detail Agenda

                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                        stroke-width="2">

                                        <path stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M5 12h14m-6-6l6 6-6 6"/>

                                    </svg>

                                </a>

                            </div>

                        </div>

                    </article>

                @empty

                    <div class="b4-agenda-empty">

                        <svg xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="1.5">

                            <rect x="3" y="4" width="18" height="17" rx="2"/>
                            <path stroke-linecap="round"
                                d="M16 2v4M8 2v4M3 9h18"/>
                            <path stroke-linecap="round"
                                d="m9 14 2 2 4-4"/>

                        </svg>

                        <h3>Belum Ada Agenda</h3>

                        <p>
                            Saat ini belum ada jadwal kegiatan yang tersedia.
                            Silakan kunjungi kembali halaman ini.
                        </p>

                    </div>

                @endforelse

            </section>

            <!-- FOOTER -->

            <footer class="b4-agenda-footer-page">

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
