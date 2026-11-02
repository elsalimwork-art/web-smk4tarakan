<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#35164f">
    <title>SMK Negeri 4 Tarakan</title>

    {{-- Font Inter sesuai karakter tipografi pada referensi desain. --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

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
            --b4-surface: #f7f9fc;
            --b4-white: #ffffff;
            --b4-radius: 17px;
            --b4-shadow: 0 2px 5px rgba(27, 30, 48, .07), 0 12px 28px rgba(34, 28, 58, .035);
        }

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            background: #ffffff;
            color: var(--b4-ink);
            font-family: 'Inter', 'Plus Jakarta Sans', Arial, sans-serif;
            -webkit-font-smoothing: antialiased;
            text-rendering: optimizeLegibility;
        }

        img {
            display: block;
            max-width: 100%;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        .b4-page {
            width: min(100%, 1341px);
            margin: 0 auto;
            padding: 80px 0 0;
            overflow: hidden;
            background: #ffffff;
        }

        .b4-hero {
            margin: 0 24px;
        }

        /* HERO: foto sekolah dengan lapisan gradasi ungu ke magenta. */
        .b4-hero-cover {
            position: relative;
            height: 370px;
            overflow: hidden;
            isolation: isolate;
            background-image:
                linear-gradient(105deg,
                    rgba(47, 19, 66, .88) 0%,
                    rgba(91, 40, 137, .69) 48%,
                    rgba(183, 73, 171, .69) 100%),
                url("{{ asset('images/beranda/gedung-sekolah.png') }}");
            background-size: cover;
            background-position: center 48%;
        }

        .b4-hero-eyebrow {
            position: absolute;
            z-index: 2;
            top: 13px;
            left: 14px;
            margin: 0;
            padding: 7px 14px;
            border: 1px solid rgba(255, 255, 255, .23);
            border-radius: 999px;
            background: rgba(255, 255, 255, .13);
            color: #ffffff;
            font-size: 10px;
            font-weight: 600;
            letter-spacing: .025em;
            line-height: 1;
            text-transform: uppercase;
        }

        .b4-accreditation {
            position: absolute;
            z-index: 2;
            top: 13px;
            right: 29px;
            display: inline-flex;
            align-items: center;
            gap: 7px;
            min-height: 25px;
            padding: 4px 12px;
            border-radius: 999px;
            background: rgba(255, 255, 255, .97);
            color: #e99a00;
            font-size: 14px;
            font-weight: 700;
            white-space: nowrap;
        }

        .b4-accreditation svg {
            width: 15px;
            height: 15px;
            flex: 0 0 auto;
        }

        .b4-hero-brand {
            display: flex;
            align-items: center;
            gap: 24px;
            padding: 58px 40px 0;
        }

        .b4-school-mark {
            width: 170px;
            height: 170px;
            flex: 0 0 170px;
            object-fit: contain;
            filter: drop-shadow(0 5px 8px rgba(20, 10, 35, .18));
        }

        .b4-hero-copy {
            min-width: 0;
            color: #ffffff;
        }

        .b4-hero-title {
            margin: 0;
            color: #ffffff;
            font-size: clamp(43px, 4.8vw, 62px);
            font-weight: 800;
            letter-spacing: -.055em;
            line-height: .96;
        }

        .b4-hero-title span {
            display: inline-block;
            margin-top: 4px;
            color: #ffb000;
        }

        .b4-hero-motto {
            max-width: 680px;
            margin: 16px 0 0;
            padding: 1px 0 1px 16px;
            border-left: 4px solid #ffb000;
            color: rgba(255, 255, 255, .96);
            font-size: 19px;
            font-style: italic;
            font-weight: 500;
            line-height: 1.48;
        }

        .b4-hero-summary {
            position: absolute;
            bottom: 17px;
            left: 12px;
            max-width: 605px;
            margin: 0;
            color: rgba(255, 255, 255, .84);
            font-size: 15px;
            font-weight: 400;
            line-height: 1.58;
        }

        /* Panel gradasi dan empat identitas program keahlian. */
        .b4-program-panel {
            display: flex;
            min-height: 370px;
            flex-direction: column;
            padding: 27px 21px 11px;
            background: linear-gradient(108deg, #2d1556 0%, #603184 51%, #cb62bf 100%);
        }

        .b4-hero-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 14px;
        }

        .b4-action {
            display: inline-flex;
            width: 202px;
            min-height: 52px;
            align-items: center;
            justify-content: center;
            gap: 9px;
            padding: 0 18px;
            border: 1px solid transparent;
            border-radius: 11px;
            font-size: 15px;
            font-weight: 650;
            line-height: 1.2;
            transition: transform .18s ease, box-shadow .18s ease, background .18s ease;
        }

        .b4-action:hover {
            transform: translateY(-2px);
        }

        .b4-action svg {
            width: 16px;
            height: 16px;
            flex: 0 0 auto;
        }

        .b4-action-primary {
            background: #f6a10a;
            color: #17121e;
            box-shadow: 0 6px 14px rgba(244, 154, 0, .18);
        }

        .b4-action-primary:hover {
            background: #ffb21b;
            box-shadow: 0 9px 18px rgba(244, 154, 0, .24);
        }

        .b4-action-secondary {
            border-color: rgba(255, 255, 255, .2);
            background: rgba(255, 255, 255, .12);
            color: #ffffff;
        }

        .b4-action-secondary:hover {
            background: rgba(255, 255, 255, .2);
        }

        .b4-program-logos {
            display: grid;
            flex: 1;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            align-items: end;
            justify-items: center;
            gap: 18px;
            padding: 28px 42px 0;
        }

        .b4-program-logo {
            display: flex;
            width: 100%;
            height: 225px;
            align-items: center;
            justify-content: center;
        }

        .b4-program-logo img {
            width: min(100%, 225px);
            height: 220px;
            object-fit: contain;
            filter: drop-shadow(0 2px 1px rgba(0, 0, 0, .12));
        }

        .b4-program-logo--tkj img {
            width: min(100%, 345px);
            height: 220px;
        }

        /* SEJARAH SINGKAT */
        .b4-history {
            display: grid;
            width: min(calc(100% - 106px), 1235px);
            grid-template-columns: minmax(0, 485px) minmax(0, 1fr);
            align-items: center;
            gap: 48px;
            margin: 100px auto 0;
        }

        .b4-history-visual {
            position: relative;
            min-width: 0;
            padding: 14px 0 0 0;
        }

        .b4-history-visual::before,
        .b4-history-visual::after {
            position: absolute;
            z-index: 0;
            width: 110px;
            height: 110px;
            border-radius: 23px;
            content: "";
        }

        .b4-history-visual::before {
            top: 0;
            left: -15px;
            background: #eee7fb;
        }

        .b4-history-visual::after {
            right: -15px;
            bottom: -13px;
            background: #f9e8c9;
        }

        .b4-history-photo {
            position: relative;
            z-index: 1;
            width: 100%;
            height: 360px;
            overflow: hidden;
            border: 4px solid #ffffff;
            border-radius: 16px;
            background: #e8edf4;
            box-shadow: 0 12px 25px rgba(24, 33, 52, .14);
        }

        .b4-history-photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center 30%;
        }

        .b4-history-copy h2 {
            margin: 0 0 18px;
            color: var(--b4-ink);
            font-size: 35px;
            font-weight: 800;
            letter-spacing: -.045em;
            line-height: 1.12;
        }

        .b4-history-copy p {
            margin: 0 0 15px;
            color: var(--b4-body);
            font-size: 15px;
            font-weight: 400;
            line-height: 1.72;
        }

        .b4-history-copy p:first-of-type {
            font-weight: 600;
        }

        .b4-features {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px 22px;
            margin: 26px 0 0;
            padding: 0;
            list-style: none;
        }

        .b4-features li {
            display: flex;
            align-items: flex-start;
            gap: 9px;
            color: #242c40;
            font-size: 13px;
            font-weight: 600;
            line-height: 1.45;
        }

        .b4-feature-check {
            display: inline-flex;
            width: 16px;
            height: 16px;
            flex: 0 0 16px;
            align-items: center;
            justify-content: center;
            margin-top: 1px;
            border-radius: 50%;
            background: #f5a20a;
            color: #ffffff;
        }

        .b4-feature-check svg {
            width: 10px;
            height: 10px;
        }

        /* PROFIL KEPALA SEKOLAH */
        .b4-principal {
            margin: 72px 24px 0;
            padding: 29px 40px 28px;
            border-top: 1px solid #e9edf3;
            background: #ffffff;
            box-shadow: 0 5px 18px rgba(49, 26, 80, .035);
        }

        .b4-section-label {
            display: flex;
            align-items: center;
            gap: 11px;
            margin: 0 0 31px;
            color: #4e1680;
            font-size: 25px;
            font-weight: 750;
            letter-spacing: -.025em;
            line-height: 1.2;
        }

        .b4-section-label::before {
            width: 7px;
            height: 25px;
            border-radius: 6px;
            background: #f5b600;
            content: "";
        }

        .b4-principal-grid {
            display: grid;
            grid-template-columns: minmax(0, 492px) minmax(0, 1fr);
            align-items: start;
            gap: 25px;
            padding: 0 0 0 0;
        }

        .b4-principal-photo {
            position: relative;
            height: 360px;
            overflow: hidden;
            border: 2px solid #e1c9fb;
            border-radius: 17px;
            background: #eee8f5;
            box-shadow: 0 3px 7px rgba(35, 20, 55, .13);
        }

        .b4-principal-photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center 43%;
        }

        .b4-principal-nameplate {
            position: absolute;
            right: 0;
            bottom: 0;
            left: 0;
            padding: 18px 16px 10px;
            background: linear-gradient(0deg, rgba(72, 17, 117, .98) 0%, rgba(126, 45, 176, .88) 68%, rgba(126, 45, 176, 0) 100%);
            color: #ffffff;
        }

        .b4-principal-nameplate strong {
            display: block;
            margin-bottom: 2px;
            font-size: 14px;
            font-weight: 750;
        }

        .b4-principal-nameplate span {
            display: block;
            font-size: 11px;
            font-weight: 600;
            line-height: 1.45;
        }

        .b4-principal-nameplate small {
            display: block;
            margin-top: 2px;
            font-size: 9px;
            line-height: 1.35;
        }

        .b4-principal-copy {
            max-width: 420px;
            padding-top: 16px;
        }

        .b4-principal-quote {
            margin: 0 0 14px;
            padding: 2px 16px 3px;
            border-left: 4px solid #923bdb;
            border-radius: 0 20px 20px 0;
            background: #fbf7ff;
            color: #222037;
            font-size: 17px;
            font-style: italic;
            font-weight: 500;
            line-height: 1.5;
        }

        .b4-principal-copy > p {
            margin: 0;
            color: var(--b4-body);
            font-size: 14px;
            line-height: 1.62;
        }

        /* BERITA TERKINI */
        .b4-news {
            width: min(calc(100% - 106px), 1235px);
            margin: 82px auto 28px;
        }

        .b4-news-heading {
            margin-bottom: 42px;
        }

        .b4-news-heading h2 {
            margin: 0 0 9px;
            color: var(--b4-ink);
            font-size: 35px;
            font-weight: 800;
            letter-spacing: -.045em;
            line-height: 1.15;
        }

        .b4-news-heading p {
            margin: 0;
            color: var(--b4-body);
            font-size: 15px;
            line-height: 1.5;
        }

        .b4-news-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            align-items: stretch;
            gap: 30px;
        }

        .b4-news-card {
            display: flex;
            min-width: 0;
            flex-direction: column;
            overflow: hidden;
            border: 1px solid #dce4ee;
            border-radius: 17px;
            background: #ffffff;
            box-shadow: 0 2px 3px rgba(26, 44, 70, .055);
            transition: transform .2s ease, box-shadow .2s ease;
        }

        .b4-news-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 25px rgba(27, 34, 58, .1);
        }

        .b4-news-image {
            width: 100%;
            height: 183px;
            overflow: hidden;
            background: #e8edf4;
        }

        .b4-news-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform .35s ease;
        }

        .b4-news-card:hover .b4-news-image img {
            transform: scale(1.035);
        }

        .b4-news-body {
            display: flex;
            flex: 1;
            flex-direction: column;
            padding: 19px 22px 16px;
        }

        .b4-news-date {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            margin: 0 0 12px;
            color: #8b98aa;
            font-size: 12px;
            font-weight: 500;
        }

        .b4-news-date svg {
            width: 13px;
            height: 13px;
            color: #f5a20a;
        }

        .b4-news-card h3 {
            margin: 0 0 12px;
            color: #1c1730;
            font-size: 16px;
            font-weight: 750;
            line-height: 1.5;
        }

        .b4-news-description {
            margin: 0 0 17px;
            color: #5b6980;
            font-size: 13px;
            line-height: 1.55;
        }

        .b4-news-link {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 10px;
            margin-top: auto;
            padding-top: 19px;
            border-top: 1px solid #edf0f5;
            color: #4e1680;
            font-size: 13px;
            font-weight: 700;
        }

        .b4-news-link svg {
            width: 15px;
            height: 15px;
            transition: transform .18s ease;
        }

        .b4-news-link:hover svg {
            transform: translateX(4px);
        }

        /* PIALA & PENGHARGAAN */
        .b4-awards {
            margin: 28px 24px 0;
            padding: 76px 30px 35px;
            background: #f7f9fc;
        }

        .b4-awards-heading {
            max-width: 800px;
            margin: 0 auto 48px;
            text-align: center;
        }

        .b4-awards-heading h2 {
            margin: 0 0 10px;
            color: var(--b4-ink);
            font-size: 35px;
            font-weight: 800;
            letter-spacing: -.045em;
            line-height: 1.15;
        }

        .b4-awards-heading p {
            margin: 0;
            color: var(--b4-body);
            font-size: 15px;
            line-height: 1.55;
        }

        .b4-awards-grid {
            display: grid;
            width: min(100%, 1158px);
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 24px;
            margin: 0 auto;
        }

        .b4-award-card {
            min-height: 202px;
            padding: 23px 23px 19px;
            border: 1px solid #dfe5ee;
            border-radius: 17px;
            background: #ffffff;
            box-shadow: 0 2px 3px rgba(25, 35, 57, .05);
        }

        .b4-award-year {
            display: inline-flex;
            align-items: center;
            min-height: 25px;
            margin-bottom: 19px;
            padding: 4px 10px;
            border-radius: 5px;
            color: #8c4a00;
            background: #fff1c7;
            font-size: 11px;
            font-weight: 650;
            line-height: 1;
        }

        .b4-award-card:nth-child(2) .b4-award-year {
            color: #6c2ca6;
            background: #f1e5ff;
        }

        .b4-award-card:nth-child(3) .b4-award-year {
            color: #08734d;
            background: #d8f7e9;
        }

        .b4-award-card h3 {
            margin: 0 0 11px;
            color: #1d1731;
            font-size: 16px;
            font-weight: 750;
            line-height: 1.45;
        }

        .b4-award-card p {
            margin: 0;
            color: #697891;
            font-size: 12px;
            line-height: 1.58;
        }

        /* STATISTIK KUNJUNGAN - angka mengikuti desain PDF, masih berupa konten statis. */
        .b4-statistics {
            margin: 0 24px;
            padding: 60px 30px 70px;
            border-top: 1px solid #e0e6ee;
            background: #f7f9fc;
        }

        .b4-statistics-grid {
            display: grid;
            width: min(100%, 1158px);
            grid-template-columns: repeat(5, minmax(0, 1fr));
            gap: 15px;
            margin: 0 auto;
        }

        .b4-stat-card {
            min-height: 154px;
            padding: 17px 16px 14px;
            border: 1px solid #edf0f4;
            border-radius: 14px;
            background: #ffffff;
            box-shadow: 0 2px 5px rgba(26, 37, 58, .045);
        }

        .b4-stat-label {
            display: block;
            margin-bottom: 10px;
            color: #424253;
            font-size: 10px;
            font-weight: 650;
            letter-spacing: .025em;
            line-height: 1.25;
            text-transform: uppercase;
        }

        .b4-stat-value {
            display: block;
            margin-bottom: 8px;
            color: #1a2230;
            font-size: 25px;
            font-weight: 800;
            letter-spacing: -.04em;
            line-height: 1;
            font-variant-numeric: tabular-nums;
        }

        .b4-stat-value--blue {
            color: #1760c5;
        }

        .b4-stat-note {
            min-height: 20px;
            margin: 0 0 13px;
            color: #50505f;
            font-size: 10px;
            line-height: 1.4;
        }

        .b4-stat-positive {
            display: inline-block;
            margin-right: 5px;
            padding: 3px 6px;
            border-radius: 5px;
            background: #e3fff2;
            color: #009b6b;
            font-size: 10px;
            font-weight: 750;
        }

        .b4-stat-footer {
            display: flex;
            min-height: 33px;
            align-items: center;
            justify-content: space-between;
            gap: 6px;
            padding: 7px 9px;
            border-radius: 8px;
            background: #f3f5ff;
            color: #4e5365;
            font-size: 10px;
            line-height: 1.25;
        }

        .b4-stat-footer strong {
            color: #1d2432;
            font-size: 11px;
            font-weight: 750;
            text-align: right;
            white-space: nowrap;
        }

        .b4-stat-footer .b4-green {
            color: #009b6b;
        }

        .b4-stat-footer .b4-blue {
            color: #1261d2;
        }

        .b4-stat-card--online {
            min-height: 170px;
            padding: 18px 16px 15px;
            border: 0;
            background: linear-gradient(145deg, #4d2b69 0%, #67518b 55%, #1760bd 100%);
            box-shadow: 0 3px 6px rgba(33, 27, 70, .2);
            color: #ffffff;
        }

        .b4-stat-card--online .b4-stat-label {
            color: rgba(255, 255, 255, .82);
        }

        .b4-online-row {
            display: flex;
            align-items: baseline;
            gap: 9px;
            margin: 0 0 8px;
        }

        .b4-stat-card--online .b4-stat-value {
            margin: 0;
            color: #ffed00;
            font-size: 46px;
        }

        .b4-online-row span {
            color: #ffffff;
            font-size: 11px;
            font-weight: 600;
        }

        .b4-stat-card--online p {
            margin: 0;
            color: rgba(255, 255, 255, .9);
            font-size: 10px;
            line-height: 1.45;
        }

        /* RESPONSIVE - susunan desktop diubah menjadi kolom pada layar lebih kecil. */
        @media (max-width: 1050px) {
            .b4-page {
                padding-top: 34px;
            }

            .b4-hero-cover {
                height: 390px;
            }

            .b4-hero-brand {
                padding-right: 24px;
                padding-left: 28px;
                gap: 18px;
            }

            .b4-school-mark {
                width: 145px;
                height: 145px;
                flex-basis: 145px;
            }

            .b4-hero-title {
                font-size: clamp(42px, 5.7vw, 58px);
            }

            .b4-program-logos {
                padding-right: 12px;
                padding-left: 12px;
                gap: 8px;
            }

            .b4-history {
                grid-template-columns: minmax(0, .9fr) minmax(0, 1.1fr);
                gap: 32px;
            }

            .b4-history-photo {
                height: 325px;
            }

            .b4-principal-grid {
                grid-template-columns: minmax(0, .95fr) minmax(0, 1fr);
            }

            .b4-news-grid {
                gap: 18px;
            }

            .b4-news-body {
                padding-right: 16px;
                padding-left: 16px;
            }

            .b4-statistics-grid {
                grid-template-columns: repeat(3, minmax(0, 1fr));
            }
        }

        @media (max-width: 760px) {
            .b4-desktop-break { display: none; }

            .b4-page {
                padding-top: 18px;
            }

            .b4-hero {
                margin: 0 14px;
            }

            .b4-hero-cover {
                height: auto;
                min-height: 480px;
                padding: 72px 22px 22px;
                background-position: center;
            }

            .b4-hero-eyebrow {
                top: 13px;
                left: 12px;
                font-size: 9px;
            }

            .b4-accreditation {
                top: 48px;
                right: auto;
                left: 12px;
                font-size: 12px;
            }

            .b4-hero-brand {
                align-items: flex-start;
                gap: 13px;
                padding: 0;
            }

            .b4-school-mark {
                width: 108px;
                height: 108px;
                flex-basis: 108px;
            }

            .b4-hero-title {
                font-size: clamp(34px, 7vw, 48px);
                letter-spacing: -.05em;
            }

            .b4-hero-motto {
                margin-top: 11px;
                padding-left: 11px;
                font-size: 14px;
                line-height: 1.45;
            }

            .b4-hero-summary {
                position: static;
                max-width: 100%;
                margin: 28px 0 0;
                font-size: 13px;
            }

            .b4-program-panel {
                min-height: auto;
                padding: 20px 16px 18px;
            }

            .b4-hero-actions {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 10px;
            }

            .b4-action {
                width: 100%;
                min-height: 48px;
                padding: 0 8px;
                font-size: 12px;
            }

            .b4-program-logos {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 12px;
                padding: 24px 4px 0;
            }

            .b4-program-logo {
                height: 145px;
            }

            .b4-program-logo img,
            .b4-program-logo--tkj img {
                width: min(100%, 150px);
                height: 140px;
            }

            .b4-history {
                width: calc(100% - 38px);
                grid-template-columns: 1fr;
                gap: 30px;
                margin-top: 66px;
            }

            .b4-history-photo {
                height: auto;
                aspect-ratio: 1.36 / 1;
            }

            .b4-history-copy h2,
            .b4-news-heading h2,
            .b4-awards-heading h2 {
                font-size: 29px;
            }

            .b4-history-copy p {
                font-size: 14px;
            }

            .b4-features {
                grid-template-columns: 1fr;
                gap: 12px;
            }

            .b4-principal {
                margin: 60px 14px 0;
                padding: 24px 18px;
            }

            .b4-section-label {
                margin-bottom: 22px;
                font-size: 22px;
            }

            .b4-principal-grid {
                grid-template-columns: 1fr;
                gap: 22px;
            }

            .b4-principal-photo {
                height: auto;
                aspect-ratio: 1.36 / 1;
            }

            .b4-principal-copy {
                max-width: none;
                padding-top: 0;
            }

            .b4-principal-quote {
                font-size: 15px;
            }

            .b4-news {
                width: calc(100% - 38px);
                margin-top: 62px;
            }

            .b4-news-heading {
                margin-bottom: 25px;
            }

            .b4-news-grid {
                grid-template-columns: 1fr;
                gap: 18px;
            }

            .b4-news-image {
                height: auto;
                aspect-ratio: 1.85 / 1;
            }

            .b4-news-body {
                padding: 17px 18px 15px;
            }

            .b4-awards {
                margin: 34px 14px 0;
                padding: 48px 18px 25px;
            }

            .b4-awards-heading {
                margin-bottom: 28px;
            }

            .b4-awards-grid {
                grid-template-columns: 1fr;
                gap: 15px;
            }

            .b4-award-card {
                min-height: 0;
                padding: 20px;
            }

            .b4-statistics {
                margin: 0 14px;
                padding: 28px 14px 35px;
            }

            .b4-statistics-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 11px;
            }

            .b4-stat-card {
                min-height: 146px;
                padding: 15px 12px;
            }

            .b4-stat-card--online {
                min-height: 146px;
            }

            .b4-stat-value {
                font-size: 22px;
            }

            .b4-stat-card--online .b4-stat-value {
                font-size: 39px;
            }
        }

        @media (max-width: 390px) {
            .b4-hero-brand {
                gap: 9px;
            }

            .b4-school-mark {
                width: 88px;
                height: 88px;
                flex-basis: 88px;
            }

            .b4-hero-title {
                font-size: 31px;
            }

            .b4-hero-motto {
                font-size: 12px;
            }

            .b4-hero-actions {
                grid-template-columns: 1fr;
            }

            .b4-statistics-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            html { scroll-behavior: auto; }
            *, *::before, *::after {
                transition-duration: .01ms !important;
                animation-duration: .01ms !important;
                animation-iteration-count: 1 !important;
            }
        }
    </style>
</head>
<body>
    <main class="b4-page">
        {{-- HERO --}}
        <section class="b4-hero" aria-label="Sambutan SMK Negeri 4 Tarakan">
            <div class="b4-hero-cover">
                <p class="b4-hero-eyebrow">SELAMAT DATANG DI WEBSITE RESMI</p>

                <div class="b4-accreditation" aria-label="Akreditas Baik Sekali">
                    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M12 2.8 14.2 4l2.5-.1 1.1 2.2 2.1 1.3-.4 2.5 1 2.3-1.6 1.9-.4 2.5-2.4.7-1.7 1.8-2.4-.8-2.4.8-1.7-1.8-2.4-.7-.4-2.5-1.6-1.9 1-2.3-.4-2.5 2.1-1.3 1.1-2.2 2.5.1L12 2.8Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/>
                        <path d="m9.2 12 1.8 1.8 3.9-4.1M9.1 17.2l-.7 4 3.6-1.8 3.6 1.8-.7-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span>Akreditas Baik Sekali</span>
                </div>

                <div class="b4-hero-brand">
                    <img class="b4-school-mark" src="{{ asset('images/beranda/logo-sekolah.png') }}" alt="Logo SMK Negeri 4 Tarakan">
                    <div class="b4-hero-copy">
                        <h1 class="b4-hero-title">SMK NEGERI 4<br><span>TARAKAN</span></h1>
                        <p class="b4-hero-motto">“Unggul dalam Mutu, Tinggi dalam Prestasi, Taklukkan Dunia dengan IT”</p>
                    </div>
                </div>

                <p class="b4-hero-summary">
                    Mempersiapkan generasi emas vokasi di Kalimantan Utara dengan kurikulum<br class="b4-desktop-break">
                    industri teknologi mutakhir, karakter tangguh, serta dedikasi nyata bagi<br class="b4-desktop-break">
                    kemajuan bangsa.
                </p>
            </div>

            <div class="b4-program-panel">
                <div class="b4-hero-actions">
                    <a class="b4-action b4-action-primary" href="{{ url('/spmb') }}">
                        <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path d="M14.5 3.5H6.8A1.8 1.8 0 0 0 5 5.3v13.4c0 1 .8 1.8 1.8 1.8h11.4c1 0 1.8-.8 1.8-1.8V11" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                            <path d="m13 11 6.8-6.8 2 2L15 13l-3 1 1-3Z" fill="currentColor"/>
                            <path d="M8 16h8M8 12h2" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/>
                        </svg>
                        <span>Informasi PPDB</span>
                    </a>
                    <a class="b4-action b4-action-secondary" href="#sejarah">
                        <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="1.8"/>
                            <path d="m14.9 8.8-1.8 6.1-6.1 1.8 1.8-6.1 6.1-1.8Z" fill="currentColor"/>
                        </svg>
                        <span>Profil Sekolah</span>
                    </a>
                </div>

                <div class="b4-program-logos" aria-label="Logo program keahlian">
                    <div class="b4-program-logo">
                        <img src="{{ asset('images/beranda/logo-rpl.png') }}" alt="Logo Rekayasa Perangkat Lunak">
                    </div>
                    <div class="b4-program-logo">
                        <img src="{{ asset('images/beranda/logo-dkv.png') }}" alt="Logo Desain Komunikasi Visual">
                    </div>
                    <div class="b4-program-logo">
                        <img src="{{ asset('images/beranda/logo-animasi.png') }}" alt="Logo Animasi">
                    </div>
                    <div class="b4-program-logo b4-program-logo--tkj">
                        <img src="{{ asset('images/beranda/logo-tkj.png') }}" alt="Logo Teknik Komputer dan Jaringan">
                    </div>
                </div>
            </div>
        </section>

        {{-- SEJARAH SINGKAT --}}
        <section class="b4-history" id="sejarah">
            <div class="b4-history-visual">
                <div class="b4-history-photo">
                    <img src="{{ asset('images/beranda/foto-sejarah.png') }}" alt="Barisan murid SMK Negeri 4 Tarakan">
                </div>
            </div>

            <div class="b4-history-copy">
                <h2>Sejarah Singkat Kami!</h2>
                <p>
                    SMK Negeri 4 Tarakan merupakan sekolah kejuruan negeri yang resmi didirikan pada tahun 2020
                    berdasarkan Surat Keputusan Pendirian dan Izin Operasional dari Pemerintah Daerah Setempat.
                </p>
                <p>
                    Pendirian sekolah ini dilandasi komitmen mulia untuk mengantisipasi lonjakan lulusan SMP di
                    Kota Tarakan sekaligus mewujudkan visi besar sebagai pengembangan talenta teknologi informasi
                    di provinsi Kalimantan Utara.
                </p>
                <p>
                    Dengan mengintegrasikan sarana laboratorium komputer modern, kurikulum adaptif industri 4.0,
                    dan tenaga pendidik bersertifikasi profesional, SMK Negeri 4 Tarakan bertransformasi menjadi
                    kawah candradimuka bagi generasi penerus bangsa yang siap bersaing di kancah nasional maupun
                    internasional.
                </p>

                <ul class="b4-features">
                    <li>
                        <span class="b4-feature-check" aria-hidden="true"><svg viewBox="0 0 12 12" fill="none"><path d="m2.2 6.1 2.1 2.1 5-5" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                        <span>Kurikulum Berbasis Proyek (PBL)</span>
                    </li>
                    <li>
                        <span class="b4-feature-check" aria-hidden="true"><svg viewBox="0 0 12 12" fill="none"><path d="m2.2 6.1 2.1 2.1 5-5" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                        <span>Kerjasama Magang Industri BUMN &amp; Swasta</span>
                    </li>
                    <li>
                        <span class="b4-feature-check" aria-hidden="true"><svg viewBox="0 0 12 12" fill="none"><path d="m2.2 6.1 2.1 2.1 5-5" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                        <span>Fasilitas Lab Multimedia &amp; Jaringan Terkini</span>
                    </li>
                </ul>
            </div>
        </section>

        {{-- KEPALA SEKOLAH --}}
        <section class="b4-principal" aria-labelledby="b4-principal-title">
            <h2 class="b4-section-label" id="b4-principal-title">Kepala Sekolah</h2>

            <div class="b4-principal-grid">
                <div class="b4-principal-photo">
                    <img src="{{ asset('images/beranda/foto-kepala-sekolah.png') }}" alt="Foto Kepala SMK Negeri 4 Tarakan, Aliyas Imran">
                    <div class="b4-principal-nameplate">
                        <strong>Aliyas Imran, S.Pd.</strong>
                        <span>NIP. 198012182005021002</span>
                        <small>Dinas Pendidikan dan Kebudayaan Prov. Kalimantan Utara</small>
                    </div>
                </div>

                <div class="b4-principal-copy">
                    <blockquote class="b4-principal-quote">
                        “Setiap anak memiliki potensi untuk bersinar, tugas kami adalah membimbingnya tumbuh
                        menjadi generasi berkarakter, berprestasi, dan mampu mengukir masa depan yang membanggakan.”
                    </blockquote>
                    <p>
                        Kami menyambut seluruh murid, orang tua, alumni, dan masyarakat untuk mengenal lebih dekat
                        SMK Negeri 4 Tarakan. Dengan komitmen menghadirkan pendidikan berkualitas melalui bidang
                        RPL, TKJ, DKV, dan Animasi, kami berupaya membekali setiap murid dengan ilmu, keterampilan,
                        dan karakter agar mampu meraih cita-cita serta menghadapi tantangan masa depan.
                    </p>
                </div>
            </div>
        </section>

        {{-- BERITA TERKINI --}}
        <section class="b4-news" id="berita">
            <div class="b4-news-heading">
                <h2>Berita Terkini</h2>
                <p>Informasi agenda dan kegiatan edukatif seputar SMKN 4 Tarakan</p>
            </div>

            <div class="b4-news-grid">
                <article class="b4-news-card">
                    <div class="b4-news-image">
                        <img src="{{ asset('images/beranda/berita-workshop.png') }}" alt="Workshop penguatan kelembagaan BKK SMK 4 Tarakan">
                    </div>
                    <div class="b4-news-body">
                        <p class="b4-news-date">
                            <svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="1.8"/><path d="M12 7v5l3.2 2" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
                            <time datetime="2024-07-22">22 Juli 2024</time>
                        </p>
                        <h3>WORKSHOP PENGUATAN KELEMBAGAAN BKK SMK 4 TARAKAN</h3>
                        <p class="b4-news-description">
                            SMK 4 Tarakan mengadakan workshop penguatan kelembagaan BKK, mengundang narasumber
                            dari dinas tenaga kerja dan perindustrian oleh Bapak M. Taufik, S.Hut., M.A.P.
                        </p>
                        {{-- Ganti URL /berita dengan route detail berita jika halaman tersebut sudah tersedia. --}}
                        <a class="b4-news-link" href="{{ url('/berita') }}">
                            <span>Baca Selengkapnya</span>
                            <svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M4 12h15m-6-6 6 6-6 6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </a>
                    </div>
                </article>

                <article class="b4-news-card">
                    <div class="b4-news-image">
                        <img src="{{ asset('images/beranda/berita-hut.png') }}" alt="Perayaan HUT ke-4 SMK Negeri 4 Tarakan">
                    </div>
                    <div class="b4-news-body">
                        <p class="b4-news-date">
                            <svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="1.8"/><path d="M12 7v5l3.2 2" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
                            <time datetime="2024-05-18">18 Mei 2024</time>
                        </p>
                        <h3>HUT SMK NEGERI 4 TARAKAN YANG KE - 4 TAHUN</h3>
                        <p class="b4-news-description">
                            Perayaan ulang tahun ke-4 SMK Negeri 4 Tarakan pada 18 Mei 2024 berlangsung meriah
                            dengan berbagai lomba antarguru, staf tata usaha, dan siswa. Acara ditutup dengan
                            pemotongan tumpeng sebagai simbol rasa syukur dan harapan untuk kemajuan sekolah
                            di masa depan.
                        </p>
                        <a class="b4-news-link" href="{{ url('/berita') }}">
                            <span>Baca Selengkapnya</span>
                            <svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M4 12h15m-6-6 6 6-6 6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </a>
                    </div>
                </article>

                <article class="b4-news-card">
                    <div class="b4-news-image">
                        <img src="{{ asset('images/beranda/berita-kelulusan.png') }}" alt="Pengumuman kelulusan siswa kelas XII SMKN 4 Tarakan">
                    </div>
                    <div class="b4-news-body">
                        <p class="b4-news-date">
                            <svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="1.8"/><path d="M12 7v5l3.2 2" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
                            <time datetime="2024-05-05">5 Mei 2024</time>
                        </p>
                        <h3>PENGUMUMAN KELULUSAN SISWA KELAS XII SMKN 4 TARAKAN TAHUN PELAJARAN 2023/2024</h3>
                        <p class="b4-news-description">
                            Dengan bangga dan rahmat Tuhan Yang Maha Kuasa, pihak SMK NEGERI 4 TARAKAN
                            menyampaikan hasil rapat pleno dewan guru terkait kelulusan kelas 12 angkatan ke II
                            tahun pelajaran 2023/2024.
                        </p>
                        <a class="b4-news-link" href="{{ url('/berita') }}">
                            <span>Baca Selengkapnya</span>
                            <svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M4 12h15m-6-6 6 6-6 6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </a>
                    </div>
                </article>
            </div>
        </section>

        {{-- PIALA & PENGHARGAAN --}}
        <section class="b4-awards" aria-labelledby="b4-awards-title">
            <div class="b4-awards-heading">
                <h2 id="b4-awards-title">Piala &amp; Penghargaan</h2>
                <p>Bukti nyata dedikasi dan keterampilan siswa SMKN 4 Tarakan di berbagai ajang kompetisi kejuruan</p>
            </div>

            <div class="b4-awards-grid">
                <article class="b4-award-card">
                    <span class="b4-award-year">Tahun 2023</span>
                    <h3>Prestasi LKS Tingkat Provinsi Tahun 2024</h3>
                    <p>
                        LKS (Lomba Kompetensi Siswa) Tingkat Provinsi Tahun 2024 merupakan ajang kompetisi
                        untuk menguji keterampilan, kreativitas, dan kompetensi siswa SMK sesuai bidang keahliannya.
                    </p>
                </article>

                <article class="b4-award-card">
                    <span class="b4-award-year">Tahun 2023</span>
                    <h3>Prestasi O2SN Tahun 2024</h3>
                    <p>
                        O2SN (Olimpiade Olahraga Siswa Nasional) Tahun 2024 merupakan ajang kompetisi olahraga
                        bagi siswa untuk mengembangkan bakat, kemampuan, dan sportivitas tingkat kota.
                    </p>
                </article>

                <article class="b4-award-card">
                    <span class="b4-award-year">Tahun 2024</span>
                    <h3>Prestasi FLS2N Tahun 2024</h3>
                    <p>
                        FLS2N merupakan ajang kompetisi seni bagi siswa untuk mengembangkan kreativitas, bakat,
                        dan potensi di bidang seni. Pada tahun 2024 di tingkat kota.
                    </p>
                </article>
            </div>
        </section>

        {{-- STATISTIK --}}
        <section class="b4-statistics" aria-label="Statistik kunjungan website">
            <div class="b4-statistics-grid">
                <article class="b4-stat-card">
                    <span class="b4-stat-label">HARI INI (DAILY)</span>
                    <strong class="b4-stat-value">1,842</strong>
                    <p class="b4-stat-note"><span class="b4-stat-positive">↗ +14.2%</span> vs kemarin</p>
                    <div class="b4-stat-footer"><span>Tayangan Halaman:</span><strong>4,920</strong></div>
                </article>

                <article class="b4-stat-card">
                    <span class="b4-stat-label">MINGGU INI</span>
                    <strong class="b4-stat-value">12,580</strong>
                    <p class="b4-stat-note"><span class="b4-stat-positive">↗ +8.7%</span> pertumbuhan</p>
                    <div class="b4-stat-footer"><span>Rata-rata/Hari:</span><strong>1,797</strong></div>
                </article>

                <article class="b4-stat-card">
                    <span class="b4-stat-label">BULAN INI</span>
                    <strong class="b4-stat-value">48,230</strong>
                    <p class="b4-stat-note">Puncak: Gelombang PPDB &amp; UKK</p>
                    <div class="b4-stat-footer"><span>Target Bulanan:</span><strong class="b4-green">107% Tercapai</strong></div>
                </article>

                <article class="b4-stat-card">
                    <span class="b4-stat-label">TOTAL KUMULATIF</span>
                    <strong class="b4-stat-value b4-stat-value--blue">348,720</strong>
                    <p class="b4-stat-note">Sejak Revitalisasi Portal IT</p>
                    <div class="b4-stat-footer"><span>Status Server:</span><strong class="b4-blue">99.98% Uptime</strong></div>
                </article>

                <article class="b4-stat-card b4-stat-card--online">
                    <span class="b4-stat-label">ONLINE SEKARANG</span>
                    <div class="b4-online-row">
                        <strong class="b4-stat-value">47</strong>
                        <span>User Aktif</span>
                    </div>
                    <p>Berada di 14 laman berbeda saat ini.</p>
                </article>
            </div>
        </section>
    </main>
</body>
</html>
