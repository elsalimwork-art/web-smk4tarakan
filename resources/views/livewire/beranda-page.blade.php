
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
            'label' => 'HARI INI (DAILY)',
            'angka' => '1,842',
            'perubahan' => '+14.2%',
            'catatan' => 'vs kemarin',
            'detail_label' => 'Tayangan Halaman:',
            'detail' => '4,920',
        ],
        [
            'label' => 'MINGGU INI',
            'angka' => '12,580',
            'perubahan' => '+8.7%',
            'catatan' => 'pertumbuhan',
            'detail_label' => 'Rata-rata/Hari:',
            'detail' => '1,797',
        ],
        [
            'label' => 'BULAN INI',
            'angka' => '48,230',
            'perubahan' => '',
            'catatan' => 'Puncak: Gelombang PPDB & UKK',
            'detail_label' => 'Target Bulanan:',
            'detail' => '107% Tercapai',
        ],
        [
            'label' => 'TOTAL KUMULATIF',
            'angka' => '348,720',
            'perubahan' => '',
            'catatan' => 'Sejak Revitalisasi Portal IT',
            'detail_label' => 'Status Server:',
            'detail' => '99.98% Uptime',
        ],
    ];
@endphp

<style>
    /* ======================================================
       BERANDA SMK NEGERI 4 TARAKAN
       Font: Plus Jakarta Sans
       Navbar dan footer tidak ditampilkan.
    ====================================================== */

    .home-page {
        --home-purple: #7E30E1;
        --home-deep-purple: #49108B;
        --home-ink: #20132F;
        --home-muted: #64748B;
        --home-gold: #FDC003;

        width: 100%;
        max-width: 1341px;
        margin: 0 auto;
        overflow: hidden;
        color: var(--home-ink);
        background: #FFFFFF;
        font-family: 'Plus Jakarta Sans Variable', 'Plus Jakarta Sans', Arial, sans-serif;
    }

    .home-page *,
    .home-page *::before,
    .home-page *::after {
        box-sizing: border-box;
    }

    .home-page img {
        display: block;
        max-width: 100%;
    }

    .home-page a {
        color: inherit;
        text-decoration: none;
    }

    .home-container {
        width: min(1233px, calc(100% - 108px));
        margin-right: auto;
        margin-left: auto;
    }

    /* ======================================================
       01. HERO / BAGIAN ATAS
    ====================================================== */

    .home-hero {
        position: relative;
        width: 100%;
        height: 464px;
        overflow: hidden;
        isolation: isolate;
        color: #FFFFFF;
        background-color: #49108B;
        background-image:
            linear-gradient(
                105deg,
                rgba(42, 9, 62, .91) 0%,
                rgba(79, 35, 145, .76) 52%,
                rgba(139, 70, 214, .71) 100%
            ),
            url('/images/beranda/hero-sekolah.png');
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
    }

    .home-hero::before {
        position: absolute;
        z-index: -1;
        top: -180px;
        right: -130px;
        width: 650px;
        height: 650px;
        border: 2px solid rgba(226,190,255,.15);
        border-radius: 50%;
        box-shadow:
            0 0 0 45px rgba(226,190,255,.045),
            0 0 0 90px rgba(226,190,255,.03);
        content: '';
        pointer-events: none;
    }

    .home-hero::after {
        position: absolute;
        z-index: -1;
        inset: 0;
        background: linear-gradient(
            90deg,
            rgba(46,10,68,.22),
            transparent 75%
        );
        content: '';
        pointer-events: none;
    }

    .hero-inner {
        position: relative;
        width: min(1240px, calc(100% - 48px));
        height: 100%;
        margin: 0 auto;
    }

    /* LABEL KECIL KIRI ATAS */

    .hero-eyebrow {
        position: absolute;
        z-index: 2;
        top: 19px;
        left: 0;
        display: inline-flex;
        min-height: 28px;
        align-items: center;
        padding: 5px 13px;
        border: 1px solid rgba(255,255,255,.25);
        border-radius: 20px;
        background: rgba(255,255,255,.10);
        color: #F6EFFF;
        font-size: 11px;
        font-weight: 650;
        line-height: 1;
        letter-spacing: .035em;
        backdrop-filter: blur(7px);
    }

    /* AKREDITASI KANAN ATAS */

    .hero-accreditation {
        position: absolute;
        z-index: 3;
        top: 19px;
        right: 18px;
        display: inline-flex;
        min-height: 36px;
        align-items: center;
        gap: 9px;
        padding: 7px 15px;
        border: 1px solid #FDC003;
        border-radius: 22px;
        background: #FFF9E8;
        color: #FDC003;
        font-size: 17px;
        font-weight: 750;
        line-height: 1.2;
        white-space: nowrap;
        box-shadow: 0 3px 9px rgba(0,0,0,.08);
    }

    .hero-accreditation svg {
        display: block;
        width: 22px;
        height: 22px;
        flex: 0 0 22px;
        color: #FDC003;
    }

    /* LOGO SEKOLAH DAN JUDUL */

    .hero-main {
        position: absolute;
        z-index: 2;
        top: 60px;
        left: 48px;
        display: flex;
        align-items: flex-start;
        gap: 30px;
    }

    .hero-school-logo {
        display: block;
        width: 250px;
        height: 250px;
        flex: 0 0 250px;
        margin-top: -10px;
        object-fit: contain;
        filter: drop-shadow(0 7px 12px rgba(0,0,0,.2));
    }

    .hero-copy {
        min-width: 830px;
        max-width: 830px;
    }

    .hero-title {
        margin: 0;
        color: #FFFFFF;
        font-size: 60px;
        font-weight: 900;
        line-height: .99;
        letter-spacing: -1.8px;
        text-transform: uppercase;
    }

    .hero-title span {
        display: block;
        margin-top: 2px;
        color: #FDC003;
    }

    /* MOTTO SEKARANG DI BAWAH TARAKAN */

    .hero-motto {
        display: block;
        max-width: 780px;
        margin: 13px 0 0;
        padding: 0;
        border: 0;
        color: #FFFFFF;
        font-size: 19px;
        font-style: italic;
        font-weight: 650;
        line-height: 1.45;
        text-align: left;
    }

    /* DESKRIPSI BAGIAN BAWAH HERO */

    .hero-description {
        position: absolute;
        z-index: 2;
        left: 16px;
        bottom: 32px;
        width: 680px;
        max-width: calc(100% - 32px);
        margin: 0;
        color: rgba(255,255,255,.94);
        font-size: 16px;
        font-weight: 400;
        line-height: 1.55;
    }

    /* ======================================================
       02. TOMBOL DAN PROGRAM KEAHLIAN
    ====================================================== */

    .program-band {
        position: relative;
        z-index: 3;
        height: 371px;
        margin-top: 0;
        padding: 28px 37px 14px;
        background: linear-gradient(
            105deg,
            #32104F 0%,
            #7425A7 51%,
            #CE25D3 100%
        );
    }

    .program-action-row {
        display: flex;
        min-height: 84px;
        align-items: center;
        gap: 12px;
    }

    /* KEDUA TOMBOL UKURANNYA SAMA */

    .home-button {
        display: inline-flex;
        width: 226px;
        height: 56px;
        min-height: 56px;
        flex: 0 0 226px;
        align-items: center;
        justify-content: center;
        gap: 9px;
        padding: 0 14px;
        border-radius: 10px;
        font-family: inherit;
        font-size: 16px;
        font-weight: 600;
        line-height: 1;
        text-align: center;
        white-space: nowrap;
        transition: transform .2s ease, box-shadow .2s ease;
    }

    .home-button:hover {
        transform: translateY(-2px);
    }

    .home-button svg {
        display: block;
        width: 17px;
        height: 17px;
        flex: 0 0 17px;
    }

    .button-ppdb {
        border: 1px solid #EAB308;
        color: #351A43;
        background: #FDC003;
        box-shadow: 0 4px 11px rgba(21,8,34,.15);
    }

    .button-profil {
        border: 1px solid rgba(255,255,255,.28);
        color: #FFFFFF;
        background: rgba(255,255,255,.14);
        box-shadow: 0 4px 11px rgba(21,8,34,.09);
    }

    /* LOGO EMPAT PROGRAM */

    .program-logos {
        display: flex;
        height: 223px;
        align-items: center;
        justify-content: center;
        gap: 27px;
        margin-top: 22px;
    }

    .program-item {
        display: flex;
        height: 223px;
        flex: 0 0 auto;
        align-items: center;
        justify-content: center;
        padding: 0;
        border: 0;
        background: transparent;
    }

    .program-item img {
        display: block;
        width: auto;
        height: 223px;
        max-width: none;
        object-fit: contain;
        filter: drop-shadow(0 4px 8px rgba(0,0,0,.12));
        transition: transform .2s ease;
    }

    .program-item:hover img {
        transform: translateY(-3px);
    }

    /* ======================================================
       03. SEJARAH SINGKAT
    ====================================================== */

    .history-section {
        position: relative;
        z-index: 1;
        min-height: 642px;
        margin-top: -4px;
        padding: 103px 0 95px;
        background: #FFFFFF;
    }

    .history-grid {
        display: grid;
        grid-template-columns: 487px minmax(0,692px);
        align-items: center;
        gap: 46px;
    }

    .history-image-wrap {
        position: relative;
        width: 487px;
        height: 360px;
        min-width: 0;
    }

    .history-image-wrap::before {
        position: absolute;
        z-index: 0;
        top: -15px;
        left: -22px;
        width: 110px;
        height: 105px;
        border-radius: 18px;
        background: #EEE5FA;
        content: '';
    }

    .history-image-wrap::after {
        position: absolute;
        z-index: 0;
        right: -13px;
        bottom: -10px;
        width: 130px;
        height: 90px;
        border-radius: 20px;
        background: #FCEAC8;
        content: '';
    }

    .history-image {
        position: relative;
        z-index: 1;
        width: 487px;
        height: 360px;
        border: 5px solid #FFFFFF;
        border-radius: 17px;
        object-fit: cover;
        object-position: center 54%;
        box-shadow: 0 13px 28px rgba(31,16,48,.15);
    }

    .history-copy {
        width: 100%;
        min-width: 0;
    }

    .section-title {
        margin: 0;
        color: #21132F;
        font-size: 36px;
        font-weight: 900;
        line-height: 1.2;
        letter-spacing: -1px;
    }

    .history-copy p {
        margin: 20px 0 0;
        color: #475569;
        font-size: 16px;
        font-weight: 400;
        line-height: 26px;
    }

    .history-copy p + p {
        margin-top: 20px;
    }

    .history-features {
        display: grid;
        grid-template-columns: 1fr 1.2fr;
        column-gap: 17px;
        row-gap: 8px;
        margin-top: 26px;
    }

    .history-feature {
        display: flex;
        min-width: 0;
        align-items: center;
        gap: 8px;
        color: #3F3549;
        font-size: 14px;
        font-weight: 600;
        line-height: 18px;
    }

    .history-feature svg {
        width: 16px;
        height: 16px;
        flex: 0 0 16px;
        color: #F59E0B;
    }

    /* ======================================================
       04. KEPALA SEKOLAH
    ====================================================== */

    .principal-section {
        position: relative;
        z-index: 2;
        min-height: 476px;
        margin-top: -45px;
        padding: 42px 0 14px;
        border-top: 1px solid #E9E2F1;
        border-bottom: 1px solid #F1EAF7;
        background: #FFFFFF;
        box-shadow: 0 8px 25px rgba(59,7,100,.035);
    }

    .principal-heading {
        display: flex;
        align-items: center;
        gap: 10px;
        margin: 0 0 35px 28px;
        color: #49108B;
        font-size: 24px;
        font-weight: 900;
        line-height: 30px;
        letter-spacing: -.35px;
    }

    .principal-heading::before {
        width: 6px;
        height: 25px;
        flex: 0 0 6px;
        border-radius: 8px;
        background: #FACC15;
        content: '';
    }

    .principal-grid {
        display: grid;
        width: 921px;
        grid-template-columns: 495px 404px;
        align-items: center;
        gap: 22px;
        margin-left: 8px;
    }

    .principal-photo {
        position: relative;
        width: 495px;
        height: 356px;
        overflow: hidden;
        border: 2px solid #E9D5FF;
        border-radius: 16px;
        background: #F3E8FF;
        box-shadow: 0 6px 14px rgba(59,7,100,.12);
    }

    .principal-photo img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center 40%;
    }

    .principal-caption {
        position: absolute;
        right: 0;
        bottom: 0;
        left: 0;
        padding: 28px 17px 12px;
        color: #FFFFFF;
        background: linear-gradient(
            0deg,
            rgba(55,9,90,.96) 0%,
            rgba(126,34,206,.78) 58%,
            transparent 100%
        );
    }

    .principal-caption strong {
        display: block;
        font-size: 14px;
        font-weight: 850;
        line-height: 18px;
    }

    .principal-caption span {
        display: block;
        margin-top: 2px;
        color: #F3E8FF;
        font-size: 10px;
        line-height: 14px;
    }

    .principal-message {
        width: 404px;
        min-width: 0;
    }

    .principal-quote {
        width: 404px;
        min-height: 131px;
        margin: 0;
        padding: 12px 17px;
        border-left: 4px solid #9333EA;
        border-radius: 0 16px 16px 0;
        color: #313047;
        background: #FAF6FF;
        font-size: 16px;
        font-style: italic;
        font-weight: 600;
        line-height: 22px;
    }

    .principal-message p {
        margin: 20px 0 0;
        color: #475569;
        font-size: 16px;
        font-weight: 400;
        line-height: 22px;
    }

    /* ======================================================
       05. BERITA TERKINI
    ====================================================== */

    .news-section {
        min-height: 812px;
        padding: 84px 0 27px;
        background: #FFFFFF;
    }

    .news-heading {
        margin: 0 0 0 2px;
    }

    .news-heading .section-title {
        font-size: 36px;
        line-height: 43px;
    }

    .news-heading .section-subtitle {
        margin: 9px 0 0;
        color: #64748B;
        font-size: 16px;
        font-weight: 400;
        line-height: 20px;
    }

    .news-grid {
        display: grid;
        width: 1220px;
        grid-template-columns: repeat(3,minmax(0,1fr));
        align-items: stretch;
        gap: 20px;
        margin-top: 48px;
    }

    .news-card {
        display: flex;
        width: 100%;
        min-width: 0;
        min-height: 517px;
        flex-direction: column;
        overflow: hidden;
        border: 1px solid #E2E8F0;
        border-radius: 16px;
        background: #FFFFFF;
        box-shadow: 0 3px 7px rgba(15,23,42,.045);
        transition: transform .22s ease, box-shadow .22s ease;
    }

    .news-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 25px rgba(59,7,100,.09);
    }

    .news-image {
        width: 100%;
        height: 192px;
        flex: 0 0 192px;
        object-fit: cover;
        object-position: center;
        background: #F3E8FF;
    }

    .news-body {
        display: flex;
        min-height: 323px;
        flex: 1;
        flex-direction: column;
        padding: 21px 25px 18px;
    }

    .news-date {
        display: flex;
        align-items: center;
        gap: 7px;
        color: #64748B;
        font-size: 12px;
        font-weight: 600;
        line-height: 16px;
    }

    .news-date svg {
        width: 14px;
        height: 14px;
        flex: 0 0 14px;
        color: #F59E0B;
    }

    .news-title {
        margin: 17px 0 0;
        color: #21132F;
        font-size: 18px;
        font-weight: 850;
        line-height: 28px;
        text-transform: uppercase;
    }

    .news-description {
        margin: 16px 0 18px;
        color: #64748B;
        font-size: 14px;
        font-weight: 400;
        line-height: 19px;
    }

    .news-link {
        display: flex;
        align-items: center;
        gap: 8px;
        margin-top: auto;
        padding-top: 14px;
        border-top: 1px solid #EDF0F5;
        color: #49108B;
        font-size: 14px;
        font-weight: 750;
        line-height: 18px;
    }

    .news-link svg {
        width: 15px;
        height: 15px;
        flex: 0 0 15px;
        transition: transform .2s ease;
    }

    .news-card:hover .news-link svg {
        transform: translateX(4px);
    }

    /* ======================================================
       06. PIALA DAN PENGHARGAAN
    ====================================================== */

    .achievement-section {
        position: relative;
        z-index: 1;
        min-height: 478px;
        margin-top: -64px;
        padding: 80px 0 34px;
        background: #F7F9FC;
        border-top: 1px solid #EEF1F5;
    }

    .achievement-heading {
        max-width: 760px;
        margin: 0 auto;
        text-align: center;
    }

    .achievement-heading .section-title {
        font-size: 36px;
        line-height: 43px;
    }

    .achievement-heading .section-subtitle {
        margin: 9px 0 0;
        color: #64748B;
        font-size: 16px;
        font-weight: 400;
        line-height: 20px;
    }

    .achievement-grid {
        display: grid;
        width: 1220px;
        grid-template-columns: repeat(3,minmax(0,1fr));
        align-items: stretch;
        gap: 20px;
        margin-top: 52px;
    }

    .achievement-card {
        width: 100%;
        min-width: 0;
        height: 216px;
        padding: 27px 27px 20px;
        border: 1px solid #E2E8F0;
        border-radius: 15px;
        background: #FFFFFF;
        box-shadow: 0 3px 7px rgba(15,23,42,.035);
    }

    .year-pill {
        display: inline-flex;
        min-height: 18px;
        align-items: center;
        padding: 2px 7px;
        border-radius: 4px;
        font-size: 12px;
        font-weight: 750;
        line-height: 14px;
    }

    .year-pill.gold {
        color: #92400E;
        background: #FEF3C7;
    }

    .year-pill.purple {
        color: #6B21A8;
        background: #F3E8FF;
    }

    .year-pill.green {
        color: #047857;
        background: #D1FAE5;
    }

    .achievement-title {
        margin: 22px 0 0;
        color: #251532;
        font-size: 18px;
        font-weight: 850;
        line-height: 28px;
    }

    .achievement-description {
        margin: 14px 0 0;
        color: #64748B;
        font-size: 12px;
        font-weight: 400;
        line-height: 19px;
    }

    /* ======================================================
       07. STATISTIK PENGUNJUNG
    ====================================================== */

    .statistics-section {
        min-height: 251px;
        padding: 63px 0 45px;
        background: #F7F9FC;
    }

    .statistics-grid {
        display: grid;
        width: 1223px;
        grid-template-columns: repeat(5,minmax(0,1fr));
        align-items: stretch;
        gap: 12px;
        margin: 0 auto;
    }

    .stat-card {
        min-width: 0;
        height: 164px;
        padding: 16px 17px 12px;
        border: 1px solid #EDF0F5;
        border-radius: 14px;
        background: #FFFFFF;
        box-shadow: 0 3px 8px rgba(15,23,42,.035);
    }

    .stat-label {
        color: #6B6471;
        font-size: 11px;
        font-weight: 850;
        line-height: 15px;
        letter-spacing: .025em;
    }

    .stat-number {
        margin-top: 5px;
        color: #171D29;
        font-size: 24px;
        font-weight: 950;
        line-height: 29px;
        letter-spacing: -.6px;
    }

    .stat-card:nth-child(4) .stat-number {
        color: #2160BD;
    }

    .stat-change {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 6px;
        margin-top: 3px;
        color: #64748B;
        font-size: 11px;
        font-weight: 600;
        line-height: 15px;
    }

    .stat-change strong {
        padding: 2px 5px;
        border-radius: 4px;
        color: #059669;
        background: #ECFDF5;
        font-size: 11px;
        line-height: 14px;
    }

    .stat-detail {
        display: flex;
        min-height: 32px;
        align-items: center;
        justify-content: space-between;
        gap: 6px;
        margin-top: 14px;
        padding: 6px 8px;
        border-radius: 8px;
        color: #64748B;
        background: #F5F5FC;
        font-size: 11px;
        line-height: 14px;
    }

    .stat-detail strong {
        color: #1E293B;
        font-size: 11px;
        font-weight: 850;
        text-align: right;
    }

    .online-card {
        height: 182px;
        padding: 16px 18px;
        border-color: transparent;
        color: #FFFFFF;
        background: linear-gradient(
            145deg,
            #32104D 0%,
            #604C85 52%,
            #1F61B9 100%
        );
        box-shadow: 0 5px 13px rgba(49,16,77,.2);
    }

    .online-card .stat-label {
        color: #E9D5FF;
    }

    .online-number {
        margin-top: 13px;
        color: #FDE725;
        font-size: 48px;
        font-weight: 950;
        line-height: 53px;
    }

    .online-caption {
        margin-top: 5px;
        color: #F3E8FF;
        font-size: 11px;
        line-height: 16px;
    }

    /* ======================================================
       RESPONSIVE TABLET
    ====================================================== */

    @media (max-width: 1339px) and (min-width: 1101px) {
        .home-page {
            max-width: 100%;
        }

        .hero-main {
            left: 35px;
            gap: 22px;
        }

        .hero-school-logo {
            width: 190px;
            height: 190px;
            flex-basis: 190px;
        }

        .hero-title {
            font-size: clamp(46px,4.5vw,60px);
        }

        .hero-motto {
            font-size: 16px;
        }

        .program-band {
            padding-right: 24px;
            padding-left: 24px;
        }

        .program-logos {
            gap: clamp(12px,1.8vw,27px);
        }

        .program-item img {
            height: min(223px,17vw);
        }

        .history-grid {
            grid-template-columns: minmax(360px,.7fr) minmax(0,1fr);
            gap: 38px;
        }

        .history-image-wrap,
        .history-image {
            width: 100%;
        }

        .principal-grid {
            grid-template-columns: minmax(420px,495px) minmax(340px,404px);
            width: calc(100% - 40px);
        }

        .principal-photo,
        .principal-message,
        .principal-quote {
            width: 100%;
        }

        .news-grid,
        .achievement-grid,
        .statistics-grid {
            width: calc(100% - 108px);
        }
    }

    @media (max-width: 1100px) {
        .home-container,
        .news-grid,
        .achievement-grid,
        .statistics-grid {
            width: calc(100% - 48px);
        }

        .hero-main {
            left: 20px;
            gap: 15px;
        }

        .hero-school-logo {
            width: 165px;
            height: 165px;
            flex-basis: 165px;
        }

        .hero-title {
            font-size: clamp(42px,5.2vw,56px);
        }

        .hero-motto {
            max-width: 620px;
            font-size: 15px;
        }

        .hero-description {
            width: 560px;
        }

        .hero-accreditation {
            right: 10px;
            font-size: 13px;
        }

        .program-logos {
            gap: 16px;
        }

        .program-item img {
            height: 190px;
            max-width: 100%;
        }

        .history-grid {
            grid-template-columns: minmax(300px,.8fr) minmax(0,1.2fr);
            gap: 30px;
        }

        .history-image-wrap,
        .history-image {
            width: 100%;
        }

        .history-copy p {
            font-size: 14px;
            line-height: 23px;
        }

        .history-features {
            grid-template-columns: 1fr;
        }

        .principal-grid {
            width: calc(100% - 48px);
            grid-template-columns: minmax(0,1.1fr) minmax(0,.9fr);
            gap: 22px;
            margin: 0 auto;
        }

        .principal-photo,
        .principal-message,
        .principal-quote {
            width: 100%;
        }

        .principal-message p {
            font-size: 14px;
            line-height: 21px;
        }

        .news-grid,
        .achievement-grid {
            grid-template-columns: repeat(3,minmax(0,1fr));
            gap: 15px;
        }

        .news-body {
            padding-right: 16px;
            padding-left: 16px;
        }

        .news-title,
        .achievement-title {
            font-size: 15px;
            line-height: 23px;
        }

        .news-description {
            font-size: 12px;
            line-height: 18px;
        }

        .achievement-card {
            height: auto;
            min-height: 216px;
            padding-right: 17px;
            padding-left: 17px;
        }

        .statistics-grid {
            grid-template-columns: repeat(3,minmax(0,1fr));
        }
    }

    /* ======================================================
       RESPONSIVE MOBILE
    ====================================================== */

    @media (max-width: 760px) {
        .home-container,
        .news-grid,
        .achievement-grid,
        .statistics-grid {
            width: calc(100% - 32px);
        }

        .home-hero {
            height: 240px;
            background-size: cover;
            background-position: center center;
        }

        .home-hero::before {
            top: -105px;
            right: -175px;
            width: 350px;
            height: 350px;
            opacity: .35;
        }

        .hero-inner {
            width: calc(100% - 32px);
        }

        .hero-eyebrow {
            top: 10px;
            left: 0;
            min-height: 21px;
            padding: 3px 9px;
            font-size: 9px;
        }

        .hero-accreditation {
            top: 9px;
            right: 0;
            min-height: 25px;
            gap: 4px;
            padding: 4px 7px;
            font-size: 9px;
        }

        .hero-accreditation svg {
            width: 14px;
            height: 14px;
            flex-basis: 14px;
        }

        .hero-main {
            top: 48px;
            left: 0;
            gap: 10px;
        }

        .hero-school-logo {
            width: 65px;
            height: 65px;
            flex-basis: 65px;
            margin-top: 7px;
        }

        .hero-title {
            font-size: clamp(25px,7vw,40px);
            line-height: 1.02;
            letter-spacing: -1.2px;
        }

        .hero-motto {
            max-width: 100%;
            margin-top: 8px;
            font-size: 10px;
            line-height: 1.4;
        }

        .hero-description {
            bottom: 15px;
            left: 16px;
            width: calc(100% - 32px);
            font-size: 10px;
            line-height: 1.5;
        }

        .program-band {
            height: auto;
            min-height: 0;
            padding: 20px 16px 22px;
        }

        .program-action-row {
            height: auto;
            min-height: 0;
            display: flex;
            flex-wrap: wrap;
            gap: 9px;
        }

        .home-button {
            width: calc(50% - 5px);
            height: 46px;
            min-height: 46px;
            flex: 0 0 calc(50% - 5px);
            gap: 6px;
            padding: 0 7px;
            font-size: 10px;
        }

        .home-button svg {
            width: 14px;
            height: 14px;
            flex-basis: 14px;
        }

        .program-logos {
            height: auto;
            flex-wrap: wrap;
            gap: 12px 17px;
            margin-top: 21px;
        }

        .program-item {
            width: calc(50% - 9px);
            height: 112px;
        }

        .program-item img {
            width: 100%;
            height: 112px;
            max-width: 100%;
        }

        .history-section {
            min-height: 0;
            margin-top: 0;
            padding: 48px 0 52px;
        }

        .history-grid {
            grid-template-columns: 1fr;
            gap: 28px;
        }

        .history-image-wrap {
            width: 100%;
            height: 260px;
        }

        .history-image {
            width: 100%;
            height: 260px;
        }

        .section-title,
        .news-heading .section-title,
        .achievement-heading .section-title {
            font-size: 28px;
            line-height: 1.22;
        }

        .history-copy p {
            margin-top: 14px;
            font-size: 12px;
            line-height: 1.75;
        }

        .history-features {
            grid-template-columns: 1fr;
            row-gap: 10px;
            margin-top: 18px;
        }

        .history-feature {
            font-size: 11px;
        }

        .principal-section {
            min-height: 0;
            margin-top: 0;
            padding: 28px 0 32px;
        }

        .principal-heading {
            margin: 0 0 20px;
            font-size: 21px;
        }

        .principal-grid {
            width: calc(100% - 32px);
            grid-template-columns: 1fr;
            gap: 21px;
        }

        .principal-photo {
            width: 100%;
            height: 280px;
        }

        .principal-message,
        .principal-quote {
            width: 100%;
        }

        .principal-quote {
            min-height: 0;
            font-size: 13px;
            line-height: 1.65;
        }

        .principal-message p {
            font-size: 12px;
            line-height: 1.75;
        }

        .news-section {
            min-height: 0;
            padding: 48px 0 50px;
        }

        .news-heading {
            margin-left: 0;
        }

        .news-heading .section-subtitle,
        .achievement-heading .section-subtitle {
            font-size: 12px;
            line-height: 1.65;
        }

        .news-grid {
            grid-template-columns: 1fr;
            gap: 17px;
            margin-top: 24px;
        }

        .news-card {
            min-height: 0;
        }

        .news-image {
            height: 190px;
            flex-basis: 190px;
        }

        .news-body {
            min-height: 0;
            padding: 17px 17px 15px;
        }

        .news-title {
            font-size: 14px;
            line-height: 1.55;
        }

        .news-description {
            margin: 10px 0 15px;
            font-size: 11px;
            line-height: 1.7;
        }

        .news-link {
            font-size: 11px;
        }

        .achievement-section {
            min-height: 0;
            margin-top: 0;
            padding: 48px 0 35px;
        }

        .achievement-heading {
            text-align: left;
        }

        .achievement-grid {
            grid-template-columns: 1fr;
            gap: 13px;
            margin-top: 23px;
        }

        .achievement-card {
            min-height: 0;
            height: auto;
            padding: 19px;
        }

        .achievement-title {
            margin-top: 13px;
            font-size: 15px;
            line-height: 1.5;
        }

        .achievement-description {
            font-size: 11px;
            line-height: 1.7;
        }

        .statistics-section {
            min-height: 0;
            padding: 25px 0 30px;
        }

        .statistics-grid {
            grid-template-columns: repeat(2,minmax(0,1fr));
            gap: 10px;
        }

        .stat-card {
            height: 155px;
            padding: 13px;
        }

        .stat-label,
        .stat-change,
        .stat-detail,
        .stat-detail strong {
            font-size: 9px;
        }

        .stat-number {
            font-size: 22px;
        }

        .stat-card.online-card {
            grid-column: span 2;
            height: 145px;
        }

        .online-number {
            font-size: 42px;
        }
    }

    @media (max-width: 420px) {
        .hero-title {
            font-size: 28px;
        }

        .hero-motto {
            font-size: 9px;
        }

        .hero-school-logo {
            width: 57px;
            height: 57px;
            flex-basis: 57px;
        }
    }
</style>

<div class="home-page">

    {{-- ======================================================
         01. HERO BERANDA
    ======================================================= --}}
    <section class="home-hero">

        <div class="hero-inner">

            {{-- LABEL KIRI ATAS --}}
            <span class="hero-eyebrow">
                SELAMAT DATANG DI WEBSITE RESMI
            </span>

            {{-- AKREDITASI KANAN ATAS + IKON MEDALI --}}
            <span class="hero-accreditation">

                <svg viewBox="0 0 32 32"
                     fill="none"
                     xmlns="http://www.w3.org/2000/svg"
                     aria-hidden="true">

                    {{-- PITA MEDALI --}}
                    <path
                        d="M9 18.5V29L16 25.4L23 29V18.5"
                        fill="#FDC003"
                    />

                    {{-- LINGKARAN MEDALI --}}
                    <path
                        d="M16 2.5L18.5 4.7L21.9 4.3L23.2 7.5L26.4 9.1L25.8 12.5L27.6 15.5L25.3 18.1L25 21.6L21.6 22.5L18.9 24.8L16 23.1L13.1 24.8L10.4 22.5L7 21.6L6.7 18.1L4.4 15.5L6.2 12.5L5.6 9.1L8.8 7.5L10.1 4.3L13.5 4.7L16 2.5Z"
                        fill="#FDC003"
                    />

                    {{-- BINTANG DI TENGAH --}}
                    <path
                        d="M16 7.1L18.1 11.3L22.7 12L19.4 15.2L20.2 19.8L16 17.6L11.8 19.8L12.6 15.2L9.3 12L13.9 11.3L16 7.1Z"
                        fill="#854D0E"
                    />

                </svg>

                Akreditasi Baik Sekali
            </span>

            {{-- LOGO DAN JUDUL SEKOLAH --}}
            <div class="hero-main">

                <img
                    src="{{ asset('images/logo-smkn4.png') }}"
                    alt="Logo SMK Negeri 4 Tarakan"
                    class="hero-school-logo"
                    onerror="this.onerror=null;this.src='{{ asset('images/beranda/logo-smkn4.png') }}';"
                >

                <div class="hero-copy">

                    <h1 class="hero-title">
                        SMK NEGERI 4
                        <span>TARAKAN</span>
                    </h1>

                    {{-- MOTTO DI BAWAH TARAKAN --}}
                    <p class="hero-motto">
                        “Unggul dalam Mutu, Tinggi dalam Prestasi, Taklukkan Dunia dengan IT”
                    </p>

                </div>
            </div>

            {{-- DESKRIPSI --}}
            <p class="hero-description">
                Mempersiapkan generasi emas vokasi di Kalimantan Utara dengan kurikulum
                industri teknologi mutakhir, karakter tangguh, serta dedikasi nyata bagi
                kemajuan bangsa.
            </p>

        </div>
    </section>

    {{-- ======================================================
         02. TOMBOL DAN LOGO PROGRAM KEAHLIAN
    ======================================================= --}}
    <section class="program-band">

        <div class="program-action-row">

            <a href="{{ url('/spmb') }}" class="home-button button-ppdb">

                <svg viewBox="0 0 24 24"
                     fill="none"
                     stroke="currentColor"
                     stroke-width="2"
                     stroke-linecap="round"
                     stroke-linejoin="round"
                     aria-hidden="true">
                    <path d="M4 5h11v14H4z"/>
                    <path d="M8 9h3M8 13h3M18 8h2v11h-6"/>
                    <path d="m17 4 3 3-3 3"/>
                </svg>

                Informasi SPMB
            </a>

            <a href="{{ url('/visi-misi') }}" class="home-button button-profil">

                <svg viewBox="0 0 24 24"
                     fill="none"
                     stroke="currentColor"
                     stroke-width="2"
                     stroke-linecap="round"
                     stroke-linejoin="round"
                     aria-hidden="true">
                    <circle cx="12" cy="12" r="9"/>
                    <path d="m10 8 6 4-6 4V8Z"/>
                </svg>

                Profil Sekolah
            </a>

        </div>

        {{-- LOGO PROGRAM KEAHLIAN --}}
        <div class="program-logos">

            @foreach ($programs as $program)
                <div class="program-item">

                    <img
                        src="{{ asset('images/beranda/' . $program['gambar']) }}"
                        alt="{{ $program['alt'] }}"
                        loading="eager"
                    >

                </div>
            @endforeach

        </div>

    </section>

    {{-- ======================================================
         03. SEJARAH SINGKAT KAMI
    ======================================================= --}}
    <section class="history-section" id="sejarah">
        <div class="home-container">

            <div class="history-grid">

                <div class="history-image-wrap">

                    <img
                        src="{{ asset('images/beranda/sejarah-sekolah.png') }}"
                        alt="Kegiatan murid SMK Negeri 4 Tarakan"
                        class="history-image"
                        loading="lazy"
                    >

                </div>

                <div class="history-copy">

                    <h2 class="section-title">
                        Sejarah Singkat Kami!
                    </h2>

                    <p>
                        SMK Negeri 4 Tarakan merupakan sekolah kejuruan negeri yang resmi
                        didirikan pada tahun 2020 berdasarkan Surat Keputusan Pendirian
                        dan Izin Operasional dari Pemerintah Daerah Setempat.
                    </p>

                    <p>
                        Pendirian sekolah ini dilandasi komitmen mulia untuk mengantisipasi
                        lonjakan lulusan SMP di Kota Tarakan sekaligus mewujudkan visi besar
                        sebagai pengembangan talenta teknologi informasi di Provinsi
                        Kalimantan Utara.
                    </p>

                    <p>
                        Dengan mengintegrasikan sarana laboratorium komputer modern,
                        kurikulum adaptif industri 4.0, dan tenaga pendidik bersertifikasi
                        profesional, SMK Negeri 4 Tarakan bertransformasi menjadi kawah
                        candradimuka bagi generasi penerus bangsa yang siap bersaing di
                        kancah nasional maupun internasional.
                    </p>

                    <div class="history-features">

                        <div class="history-feature">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <circle cx="12" cy="12" r="11"/>
                                <path d="m7 12 3 3 7-7" fill="none"
                                      stroke="#FFFFFF" stroke-width="2.2"
                                      stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            Kurikulum Berbasis Proyek (PBL)
                        </div>

                        <div class="history-feature">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <circle cx="12" cy="12" r="11"/>
                                <path d="m7 12 3 3 7-7" fill="none"
                                      stroke="#FFFFFF" stroke-width="2.2"
                                      stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            Kerjasama Magang Industri BUMN &amp; Swasta
                        </div>

                        <div class="history-feature">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <circle cx="12" cy="12" r="11"/>
                                <path d="m7 12 3 3 7-7" fill="none"
                                      stroke="#FFFFFF" stroke-width="2.2"
                                      stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            Fasilitas Lab Multimedia &amp; Jaringan Terkini
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ======================================================
         04. KEPALA SEKOLAH
    ======================================================= --}}
    <section class="principal-section" id="kepala-sekolah">
        <div class="home-container">

            <h2 class="principal-heading">
                Kepala Sekolah
            </h2>

            <div class="principal-grid">

                <div class="principal-photo">

                    <img
                        src="{{ asset('images/beranda/kepala-sekolah.png') }}"
                        alt="Kepala SMK Negeri 4 Tarakan"
                        loading="lazy"
                    >

                    <div class="principal-caption">
                        <strong>Aliyas Imran, S.Pd.</strong>
                        <span>NIP. 198012182005021002</span>
                        <span>Dinas Pendidikan dan Kebudayaan Prov. Kalimantan Utara</span>
                    </div>

                </div>

                <div class="principal-message">

                    <blockquote class="principal-quote">
                        “Setiap anak memiliki potensi untuk bersinar, tugas kami adalah
                        membimbingnya tumbuh menjadi generasi berkarakter, berprestasi,
                        dan mampu mengukir masa depan yang membanggakan.”
                    </blockquote>

                    <p>
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
         05. BERITA TERKINI
    ======================================================= --}}
    <section class="news-section" id="berita">
        <div class="home-container">

            <div class="news-heading">

                <h2 class="section-title">
                    Berita Terkini
                </h2>

                <p class="section-subtitle">
                    Informasi agenda dan kegiatan edukatif seputar SMKN 4 Tarakan
                </p>

            </div>

            <div class="news-grid">

                @foreach ($berita as $item)
                    <article class="news-card">

                        <img
                            src="{{ asset('images/beranda/' . $item['gambar']) }}"
                            alt="{{ $item['judul'] }}"
                            class="news-image"
                            loading="lazy"
                        >

                        <div class="news-body">

                            <div class="news-date">

                                <svg viewBox="0 0 24 24"
                                     fill="none"
                                     stroke="currentColor"
                                     stroke-width="1.8"
                                     stroke-linecap="round"
                                     stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="9"/>
                                    <path d="M12 7v5l3 2"/>
                                </svg>

                                {{ $item['tanggal'] }}

                            </div>

                            <h3 class="news-title">
                                {{ $item['judul'] }}
                            </h3>

                            <p class="news-description">
                                {{ $item['deskripsi'] }}
                            </p>

                            <a href="#berita" class="news-link">

                                Baca Selengkapnya

                                <svg viewBox="0 0 24 24"
                                     fill="none"
                                     stroke="currentColor"
                                     stroke-width="2"
                                     stroke-linecap="round"
                                     stroke-linejoin="round">
                                    <path d="M5 12h14M13 6l6 6-6 6"/>
                                </svg>

                            </a>
                        </div>
                    </article>
                @endforeach

            </div>

        </div>
    </section>

    {{-- ======================================================
         06. PIALA DAN PENGHARGAAN
    ======================================================= --}}
    <section class="achievement-section" id="prestasi">
        <div class="home-container">

            <div class="achievement-heading">

                <h2 class="section-title">
                    Piala &amp; Penghargaan
                </h2>

                <p class="section-subtitle">
                    Bukti nyata dedikasi dan keterampilan siswa SMKN 4 Tarakan
                    di berbagai ajang kompetisi kejuruan.
                </p>

            </div>

            <div class="achievement-grid">

                @foreach ($prestasi as $item)
                    <article class="achievement-card">

                        <span class="year-pill {{ $item['warna'] }}">
                            {{ $item['tahun'] }}
                        </span>

                        <h3 class="achievement-title">
                            {{ $item['judul'] }}
                        </h3>

                        <p class="achievement-description">
                            {{ $item['deskripsi'] }}
                        </p>

                    </article>
                @endforeach

            </div>

        </div>
    </section>

    {{-- ======================================================
         07. STATISTIK PENGUNJUNG
    ======================================================= --}}
    <section class="statistics-section" id="statistik">
        <div class="statistics-grid">

            @foreach ($statistik as $item)
                <article class="stat-card">

                    <div class="stat-label">
                        {{ $item['label'] }}
                    </div>

                    <div class="stat-number">
                        {{ $item['angka'] }}
                    </div>

                    <div class="stat-change">

                        @if ($item['perubahan'])
                            <strong>
                                {{ $item['perubahan'] }}
                            </strong>
                        @endif

                        <span>
                            {{ $item['catatan'] }}
                        </span>

                    </div>

                    <div class="stat-detail">
                        <span>{{ $item['detail_label'] }}</span>
                        <strong>{{ $item['detail'] }}</strong>
                    </div>

                </article>
            @endforeach

            <article class="stat-card online-card">

                <div class="stat-label">
                    ONLINE SEKARANG
                </div>

                <div class="online-number">
                    47
                </div>

                <div class="online-caption">
                    User Aktif<br>
                    Berada di 14 laman berbeda saat ini.
                </div>

            </article>

        </div>
    </section>

</div>
