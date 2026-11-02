
@php
    $programs = [
        ['nama' => 'PPLG', 'gambar' => 'logo-pplg.png', 'alt' => 'Logo Pengembangan Perangkat Lunak dan Gim'],
        ['nama' => 'DKV', 'gambar' => 'logo-dkv.png', 'alt' => 'Logo Desain Komunikasi Visual'],
        ['nama' => 'ANIMASI', 'gambar' => 'logo-animasi.png', 'alt' => 'Logo Animasi'],
        ['nama' => 'TKJ', 'gambar' => 'logo-tkj.png', 'alt' => 'Logo Teknik Komputer dan Jaringan'],
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
    /* =========================================================
       BERANDA SMKN 4 TARAKAN
       Acuan ukuran: frame PDF Figma 1341 x 3995 px.
       Navbar dan footer tidak ditampilkan sesuai permintaan.
    ========================================================= */

    .home-page {
        --home-purple: #7E30E1;
        --home-deep-purple: #49108B;
        --home-ink: #20132F;
        --home-muted: #64748B;
        --home-gold: #FDC003;
        --home-line: #E2E8F0;

        width: 100%;
        max-width: 1341px;
        margin: 0 auto;
        overflow: hidden;
        color: var(--home-ink);
        background: #FFFFFF;
        font-family: 'Plus Jakarta Sans Variable', 'Plus Jakarta Sans', Arial, sans-serif;
    }

    .home-page,
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

    /* 01. HERO */

    .home-hero {
        position: relative;
        width: 100%;
        height: 410px;
        overflow: hidden;
        color: #FFFFFF;
        background-color: #49108B;
        background-image:
            linear-gradient(90deg,
                rgba(31, 8, 54, .88) 0%,
                rgba(82, 28, 139, .73) 54%,
                rgba(126, 34, 206, .61) 100%),
            url('/images/beranda/hero-sekolah.png');
        background-repeat: no-repeat;
        background-position: center;
        background-size: 100% 100%;
    }

    .home-hero::before {
        position: absolute;
        top: -260px;
        right: -125px;
        width: 690px;
        height: 690px;
        border: 2px solid rgba(226, 190, 255, .22);
        border-radius: 50%;
        box-shadow:
            0 0 0 42px rgba(226, 190, 255, .075),
            0 0 0 91px rgba(226, 190, 255, .055);
        content: '';
        pointer-events: none;
    }

    .home-hero::after {
        position: absolute;
        inset: 0;
        background: linear-gradient(0deg, rgba(32, 7, 53, .22), transparent 52%);
        content: '';
        pointer-events: none;
    }

    .hero-eyebrow {
        position: absolute;
        z-index: 2;
        top: 15px;
        left: 21px;
        display: inline-flex;
        min-height: 26px;
        align-items: center;
        padding: 5px 11px;
        border: 1px solid rgba(255,255,255,.23);
        border-radius: 20px;
        background: rgba(255,255,255,.13);
        color: #FFFFFF;
        font-size: 12px;
        font-weight: 750;
        letter-spacing: .035em;
        backdrop-filter: blur(8px);
    }

    .hero-accreditation {
        position: absolute;
        z-index: 2;
        top: 15px;
        right: 65px;
        display: inline-flex;
        min-height: 28px;
        align-items: center;
        gap: 7px;
        padding: 5px 12px;
        border: 1px solid rgba(253,224,71,.52);
        border-radius: 18px;
        background: #FFF9E8;
        color: #854D0E;
        font-size: 16px;
        font-weight: 800;
        line-height: 1;
        white-space: nowrap;
    }

    .hero-accreditation svg {
        width: 15px;
        height: 15px;
        flex: 0 0 15px;
        color: #D99B00;
    }

    .hero-main {
        position: absolute;
        z-index: 2;
        top: 48px;
        left: 33px;
        display: flex;
        align-items: flex-start;
        gap: 0;
    }

    .hero-school-logo {
        display: block;
        width: 224px;
        height: 224px;
        flex: 0 0 224px;
        margin-top: 6px;
        object-fit: contain;
        filter: drop-shadow(0 7px 12px rgba(0,0,0,.2));
    }

    .hero-copy {
        min-width: 0;
        max-width: 790px;
    }

    .hero-title {
        margin: 0;
        color: #FFFFFF;
        font-size: 60px;
        font-weight: 900;
        line-height: 1;
        letter-spacing: -1.8px;
        text-transform: uppercase;
    }

    .hero-title span {
        display: block;
        color: #ffcc00;
    }

    .hero-motto {
        border-left: 5px solid #FFD000;
        padding-left: 20px;
        margin-left: 15px;
        max-width: 660px;
        margin: 24px 0 0 3px;
        padding: 0;
        border: 0;
        color: #FFFFFF;
        font-size: 18px;
        font-style:italic;
        font-weight: 600;
        line-height: 13;
    }

    .hero-description {
        position: absolute;
        z-index: 2;
        top: 281px;
        left: 33px;
        width: 570px;
        max-width: calc(100% - 66px);
        margin: 0;
        color: rgba(255,255,255,.94);
        font-size: 16px;
        font-weight: 400;
        line-height: 1.34;
    }

    /* 02. TOMBOL DAN LOGO PROGRAM */

    .program-band {
        position: relative;
        z-index: 3;
        height: 371px;
        margin-top: -39px;
        padding: 24px 31px 14px;
        background: linear-gradient(105deg, #32104F 0%, #7425A7 51%, #CE25D3 100%);
    }

    .program-action-row {
        display: flex;
        height: 76px;
        align-items: center;
        gap: 10px;
    }

    .home-button {
        display: inline-flex;
        flex: 0 0 auto;
        align-items: center;
        justify-content: center;
        gap: 9px;
        border-radius: 10px;
        font-size: 16px;
        font-weight: 800;
        line-height: 1.2;
        transition: transform .2s ease, box-shadow .2s ease;
    }

    .home-button:hover {
        transform: translateY(-2px);
    }

    .home-button svg {
        width: 17px;
        height: 17px;
        flex: 0 0 17px;
    }

    .button-ppdb {
        width: 206px;
        height: 56px;
        border: 1px solid #EAB308;
        color: #351A43;
        background: linear-gradient(180deg, #FFD64A 0%, #FBBF24 100%);
        box-shadow: 0 7px 14px rgba(21,8,34,.17);
    }

    .button-profil {
        width: 206px;
        height: 56px;
        border: 1px solid rgba(255,255,255,.23);
        color: #FFFFFF;
        background: rgba(255,255,255,.14);
        box-shadow: 0 4px 11px rgba(21,8,34,.09);
    }

    .program-logos {
        display: flex;
        height: 223px;
        align-items: center;
        justify-content: center;
        gap: 27px;
        margin-top: 34px;
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

    /* 03. SEJARAH SINGKAT */

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
        grid-template-columns: 487px minmax(0, 692px);
        align-items: center;
        gap: 46px;
    }

    .history-image-wrap {
        position: relative;
        width: 487px;
        height: 360px;
        min-width: 0;
        padding: 0;
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

    /* 04. KEPALA SEKOLAH */

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
        background: linear-gradient(0deg, rgba(55,9,90,.96) 0%, rgba(126,34,206,.78) 58%, transparent 100%);
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

    /* 05. BERITA TERKINI */

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
        grid-template-columns: repeat(3, minmax(0, 1fr));
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

    /* 06. PIALA DAN PENGHARGAAN */

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
        grid-template-columns: repeat(3, minmax(0, 1fr));
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

    /* 07. STATISTIK PENGUNJUNG */

    .statistics-section {
        min-height: 251px;
        padding: 63px 0 0;
        background: #F7F9FC;
    }

    .statistics-grid {
        display: grid;
        width: 1223px;
        grid-template-columns: repeat(5, minmax(0, 1fr));
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
        background: linear-gradient(145deg, #32104D 0%, #604C85 52%, #1F61B9 100%);
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

    /* RESPONSIVE */

    @media (max-width: 1339px) and (min-width: 1101px) {
        .home-page {
            max-width: 100%;
        }

        .hero-title {
            font-size: clamp(46px, 4.5vw, 60px);
        }

        .program-band {
            padding-right: 24px;
            padding-left: 24px;
        }

        .program-logos {
            gap: clamp(12px, 1.8vw, 27px);
        }

        .program-item img {
            height: min(223px, 17vw);
        }

        .history-grid {
            grid-template-columns: minmax(360px, .7fr) minmax(0, 1fr);
            gap: 38px;
        }

        .history-image-wrap,
        .history-image {
            width: 100%;
        }

        .principal-grid {
            grid-template-columns: minmax(420px, 495px) minmax(340px, 404px);
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
            left: 24px;
        }

        .hero-school-logo {
            width: 185px;
            height: 185px;
            flex-basis: 185px;
        }

        .hero-title {
            font-size: clamp(42px, 5.2vw, 56px);
        }

        .hero-motto {
            font-size: 17px;
        }

        .hero-description {
            left: 24px;
            width: 560px;
        }

        .program-logos {
            gap: 16px;
        }

        .program-item img {
            height: 190px;
            max-width: 100%;
        }

        .history-grid {
            grid-template-columns: minmax(300px, .8fr) minmax(0, 1.2fr);
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
            grid-template-columns: minmax(0, 1.1fr) minmax(0, .9fr);
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
            grid-template-columns: repeat(3, minmax(0,1fr));
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
            grid-template-columns: repeat(3, minmax(0,1fr));
        }
    }

    @media (max-width: 760px) {
        .home-container,
        .news-grid,
        .achievement-grid,
        .statistics-grid {
            width: calc(100% - 32px);
        }

        .home-hero {
            height: 470px;
            background-size: cover;
            background-position: center;
        }

        .hero-eyebrow {
            top: 18px;
            left: 16px;
            max-width: 62%;
            font-size: 9px;
        }

        .hero-accreditation {
            top: 15px;
            right: 14px;
            max-width: 130px;
            font-size: 10px;
            white-space: normal;
        }

        .hero-main {
            top: 83px;
            left: 16px;
            gap: 12px;
        }

        .hero-school-logo {
            width: 76px;
            height: 76px;
            flex-basis: 76px;
            margin-top: 3px;
        }

        .hero-title {
            font-size: clamp(27px, 7.5vw, 42px);
            line-height: 1.03;
            letter-spacing: -1.1px;
        }

        .hero-motto {
            margin: 13px 0 0;
            font-size: 11px;
            line-height: 1.5;
        }

        .hero-description {
            top: 270px;
            left: 17px;
            width: calc(100% - 34px);
            max-width: none;
            font-size: 12px;
            line-height: 1.7;
        }

        .program-band {
            height: auto;
            min-height: 0;
            margin-top: -25px;
            padding: 20px 16px 22px;
        }

        .program-action-row {
            height: auto;
            flex-wrap: wrap;
            gap: 9px;
        }

        .button-ppdb,
        .button-profil {
            width: auto;
            min-width: 145px;
            height: 45px;
            padding: 10px 14px;
            font-size: 11px;
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
</style>

<div class="home-page">

    {{-- 01. HERO BERANDA --}}
    <section class="home-hero">

        <span class="hero-eyebrow">
            SELAMAT DATANG DI WEBSITE SAYA
        </span>

        <span class="hero-accreditation">
            <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                <path d="m12 2 3 6.2 6.8 1-4.9 4.8 1.2 6.8-6.1-3.3-6.1 3.3 1.2-6.8L2.2 9.2l6.8-1L12 2Z"/>
            </svg>
            Akreditasi Baik Sekali
        </span>

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
            </div>
            <div
                <p class="hero-motto">
                    “Unggul dalam Mutu, Tinggi dalam Prestasi, Taklukkan Dunia dengan IT”
                </p>
            </div>
        </div>

        <p class="hero-description">
            Mempersiapkan generasi emas vokasi di Kalimantan Utara dengan kurikulum
            industri teknologi mutakhir, karakter tangguh, serta dedikasi nyata bagi
            kemajuan bangsa.
        </p>
    </section>

    {{-- 02. TOMBOL DAN LOGO PROGRAM KEAHLIAN --}}
    <section class="program-band">

        <div class="program-action-row">

            <a href="{{ url('/spmb') }}" class="home-button button-ppdb">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     aria-hidden="true">
                    <path d="M4 5h11v14H4z"/>
                    <path d="M8 9h3M8 13h3M18 8h2v11h-6"/>
                    <path d="m17 4 3 3-3 3"/>
                </svg>
                Informasi SPMB
            </a>

            <a href="{{ url('/visi-misi') }}" class="home-button button-profil">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     aria-hidden="true">
                    <circle cx="12" cy="12" r="9"/>
                    <path d="m10 8 6 4-6 4V8Z"/>
                </svg>
                Profil Sekolah
            </a>
        </div>

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

    {{-- 03. SEJARAH SINGKAT KAMI --}}
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
                    <h2 class="section-title">Sejarah Singkat Kami!</h2>

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
                            <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                <circle cx="12" cy="12" r="11"/>
                                <path d="m7 12 3 3 7-7" fill="none" stroke="#FFFFFF"
                                      stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            Kurikulum Berbasis Proyek (PBL)
                        </div>

                        <div class="history-feature">
                            <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                <circle cx="12" cy="12" r="11"/>
                                <path d="m7 12 3 3 7-7" fill="none" stroke="#FFFFFF"
                                      stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            Kerjasama Magang Industri BUMN &amp; Swasta
                        </div>

                        <div class="history-feature">
                            <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                <circle cx="12" cy="12" r="11"/>
                                <path d="m7 12 3 3 7-7" fill="none" stroke="#FFFFFF"
                                      stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            Fasilitas Lab Multimedia &amp; Jaringan Terkini
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- 04. KEPALA SEKOLAH --}}
    <section class="principal-section" id="kepala-sekolah">
        <div class="home-container">

            <h2 class="principal-heading">Kepala Sekolah</h2>

            <div class="principal-grid">

                <div class="principal-photo">
                    <img
                        src="{{ asset('images/beranda/kepala-sekolah.png') }}"
                        alt="Kepala SMK Negeri 4 Tarakan, Aliyas Imran, S.Pd."
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

    {{-- 05. BERITA TERKINI --}}
    <section class="news-section" id="berita">
        <div class="home-container">

            <div class="news-heading">
                <h2 class="section-title">Berita Terkini</h2>

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
                                <svg viewBox="0 0 24 24" fill="none"
                                     stroke="currentColor" stroke-width="1.8"
                                     stroke-linecap="round" stroke-linejoin="round"
                                     aria-hidden="true">
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
                                <svg viewBox="0 0 24 24" fill="none"
                                     stroke="currentColor" stroke-width="2"
                                     stroke-linecap="round" stroke-linejoin="round"
                                     aria-hidden="true">
                                    <path d="M5 12h14M13 6l6 6-6 6"/>
                                </svg>
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>

        </div>
    </section>

    {{-- 06. PIALA DAN PENGHARGAAN --}}
    <section class="achievement-section" id="prestasi">
        <div class="home-container">

            <div class="achievement-heading">
                <h2 class="section-title">Piala &amp; Penghargaan</h2>

                <p class="section-subtitle">
                    Bukti nyata dedikasi dan keterampilan siswa SMKN 4 Tarakan di berbagai ajang kompetisi
                    kejuruan.
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

    {{-- 07. STATISTIK PENGUNJUNG --}}
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
                            <strong>{{ $item['perubahan'] }}</strong>
                        @endif

                        <span>{{ $item['catatan'] }}</span>
                    </div>

                    <div class="stat-detail">
                        <span>{{ $item['detail_label'] }}</span>
                        <strong>{{ $item['detail'] }}</strong>
                    </div>

                </article>
            @endforeach

            <article class="stat-card online-card">
                <div class="stat-label">ONLINE SEKARANG</div>
                <div class="online-number">47</div>

                <div class="online-caption">
                    User Aktif<br>
                    Berada di 14 laman berbeda saat ini.
                </div>
            </article>

        </div>
    </section>

</div>
