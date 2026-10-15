<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>LaraPress | Digital Experience</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            color: #172033;
            background: #ffffff;
            overflow-x: hidden;
        }

        /* =========================
           NAVBAR
        ========================= */

        .navbar {
            position: sticky;
            top: 0;
            z-index: 999;

            display: flex;
            justify-content: space-between;
            align-items: center;

            padding: 18px 7%;

            background: rgba(9, 15, 35, 0.95);
            backdrop-filter: blur(15px);
        }

        .logo {
            color: white;
            font-size: 25px;
            font-weight: 800;
        }

        .logo span {
            color: #6ee7ff;
        }

        .nav-menu {
            display: flex;
            gap: 30px;
            list-style: none;
        }

        .nav-menu a {
            color: #dbeafe;
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
            transition: .3s;
        }

        .nav-menu a:hover,
        .nav-menu .active {
            color: #6ee7ff;
        }

        /* =========================
           HERO
        ========================= */

        .hero {
            min-height: 680px;

            display: flex;
            align-items: center;

            position: relative;

            background:
                linear-gradient(
                    120deg,
                    rgba(8, 15, 35, .97),
                    rgba(29, 78, 216, .85),
                    rgba(124, 58, 237, .78)
                ),
                url('/images/hero.jpg');

            background-size: cover;
            background-position: center;

            color: white;
        }

        .hero::after {
            content: "";

            position: absolute;

            width: 400px;
            height: 400px;

            right: -100px;
            bottom: -150px;

            background: rgba(103, 232, 249, .2);

            filter: blur(80px);

            border-radius: 50%;
        }

        .hero-content {
            position: relative;
            z-index: 2;

            width: 86%;
            max-width: 1150px;

            margin: auto;
        }

        .badge {
            display: inline-block;

            padding: 9px 16px;

            border-radius: 30px;

            background: rgba(255,255,255,.12);

            border: 1px solid rgba(255,255,255,.2);

            color: #a5f3fc;

            font-size: 13px;

            margin-bottom: 25px;
        }

        .hero h1 {
            max-width: 850px;

            font-size: clamp(42px, 6vw, 72px);

            line-height: 1.05;

            margin-bottom: 25px;
        }

        .hero h1 span {
            background: linear-gradient(
                90deg,
                #67e8f9,
                #c4b5fd
            );

            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero p {
            max-width: 700px;

            color: #dbeafe;

            font-size: 18px;

            line-height: 1.8;

            margin-bottom: 35px;
        }

        .buttons {
            display: flex;
            gap: 14px;

            flex-wrap: wrap;
        }

        .btn {
            display: inline-block;

            padding: 14px 24px;

            border-radius: 10px;

            text-decoration: none;

            font-weight: 700;

            transition: .3s;
        }

        .btn-primary {
            color: white;

            background:
                linear-gradient(
                    135deg,
                    #2563eb,
                    #7c3aed
                );

            box-shadow:
                0 10px 30px rgba(37,99,235,.35);
        }

        .btn-primary:hover {
            transform: translateY(-3px);

            box-shadow:
                0 15px 35px rgba(37,99,235,.45);
        }

        .btn-light {
            color: white;

            border: 1px solid rgba(255,255,255,.35);

            background: rgba(255,255,255,.08);
        }

        .btn-light:hover {
            background: white;
            color: #1e3a8a;
        }

        /* =========================
           CONTAINER
        ========================= */

        .container {
            width: 86%;
            max-width: 1150px;
            margin: auto;
        }

        .section {
            padding: 95px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 55px;
        }

        .section-title .small {
            color: #4f46e5;

            font-size: 13px;

            font-weight: 800;

            text-transform: uppercase;

            letter-spacing: 1.5px;
        }

        .section-title h2 {
            font-size: 42px;

            margin: 10px 0;

            color: #10182d;
        }

        .section-title p {
            max-width: 650px;

            margin: auto;

            color: #64748b;

            line-height: 1.8;
        }

        /* =========================
           STATS
        ========================= */

        .stats {
            margin-top: -60px;

            position: relative;

            z-index: 5;
        }

        .stats-box {
            display: grid;

            grid-template-columns:
                repeat(4, 1fr);

            background: white;

            border-radius: 20px;

            box-shadow:
                0 20px 50px rgba(15,23,42,.12);

            overflow: hidden;
        }

        .stat {
            text-align: center;

            padding: 30px;

            border-right: 1px solid #e5e7eb;
        }

        .stat:last-child {
            border-right: none;
        }

        .stat h3 {
            font-size: 32px;

            background:
                linear-gradient(
                    90deg,
                    #2563eb,
                    #7c3aed
                );

            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .stat p {
            color: #64748b;

            margin-top: 7px;

            font-size: 14px;
        }

        /* =========================
           FEATURES
        ========================= */

        .features {
            background: #f8faff;
        }

        .feature-grid {
            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 25px;
        }

        .feature-card {
            padding: 32px;

            background: white;

            border-radius: 18px;

            border: 1px solid #edf2f7;

            transition: .3s;
        }

        .feature-card:hover {
            transform: translateY(-8px);

            border-color: #c7d2fe;

            box-shadow:
                0 20px 40px rgba(37,99,235,.10);
        }

        .icon {
            width: 58px;
            height: 58px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 15px;

            background:
                linear-gradient(
                    135deg,
                    #dbeafe,
                    #ede9fe
                );

            font-size: 25px;

            margin-bottom: 22px;
        }

        .feature-card h3 {
            margin-bottom: 12px;
        }

        .feature-card p {
            color: #64748b;

            line-height: 1.8;
        }

        /* =========================
           SERVICES
        ========================= */

        .service-grid {
            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 25px;
        }

        .service {
            padding: 30px;

            border-radius: 18px;

            background:
                linear-gradient(
                    135deg,
                    #0f172a,
                    #1e293b
                );

            color: white;

            position: relative;

            overflow: hidden;
        }

        .service::after {
            content: "";

            position: absolute;

            width: 150px;
            height: 150px;

            right: -50px;
            bottom: -70px;

            border-radius: 50%;

            background: rgba(96,165,250,.15);
        }

        .service h3 {
            margin-bottom: 13px;
        }

        .service p {
            color: #cbd5e1;

            line-height: 1.7;
        }

        /* =========================
           ABOUT
        ========================= */

        .about-section {
            display: grid;

            grid-template-columns:
                1fr 1fr;

            gap: 70px;

            align-items: center;
        }

        .about-image {
            min-height: 470px;

            border-radius: 25px;

            background:
                linear-gradient(
                    rgba(37,99,235,.15),
                    rgba(124,58,237,.15)
                ),
                url('/images/about.jpg');

            background-size: cover;

            background-position: center;

            box-shadow:
                0 25px 50px rgba(15,23,42,.15);
        }

        .about-content .small {
            color: #4f46e5;

            font-size: 13px;

            font-weight: 800;

            letter-spacing: 1px;
        }

        .about-content h2 {
            font-size: 42px;

            margin: 12px 0 20px;
        }

        .about-content p {
            color: #64748b;

            line-height: 1.8;

            margin-bottom: 18px;
        }

        .check-list {
            list-style: none;

            margin: 25px 0;
        }

        .check-list li {
            margin-bottom: 12px;

            color: #334155;
        }

        .check-list li::before {
            content: "✓";

            color: #4f46e5;

            font-weight: bold;

            margin-right: 10px;
        }

        /* =========================
           TESTIMONIAL
        ========================= */

        .testimonials {
            background: #f8faff;
        }

        .testimonial-grid {
            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 25px;
        }

        .testimonial {
            background: white;

            padding: 30px;

            border-radius: 18px;

            box-shadow:
                0 10px 30px rgba(15,23,42,.06);
        }

        .stars {
            color: #f59e0b;

            margin-bottom: 15px;
        }

        .testimonial p {
            color: #64748b;

            line-height: 1.8;

            margin-bottom: 20px;
        }

        .person {
            font-weight: bold;
        }

        .person small {
            display: block;

            color: #94a3b8;

            margin-top: 5px;
        }

        /* =========================
           CTA
        ========================= */

        .cta {
            padding: 100px 20px;

            text-align: center;

            background:
                linear-gradient(
                    135deg,
                    #1d4ed8,
                    #7c3aed
                );

            color: white;
        }

        .cta h2 {
            font-size: 42px;

            margin-bottom: 15px;
        }

        .cta p {
            max-width: 650px;

            margin: 0 auto 30px;

            color: #e0e7ff;

            line-height: 1.8;
        }

        /* =========================
           FOOTER
        ========================= */

        footer {
            background: #090f23;

            color: #94a3b8;

            text-align: center;

            padding: 30px;
        }

        /* =========================
           RESPONSIVE
        ========================= */

        @media(max-width: 850px) {

            .stats-box {
                grid-template-columns:
                    repeat(2,1fr);
            }

            .stat:nth-child(2) {
                border-right: none;
            }

            .feature-grid,
            .service-grid,
            .testimonial-grid {
                grid-template-columns: 1fr;
            }

            .about-section {
                grid-template-columns: 1fr;
            }

        }

        @media(max-width: 600px) {

            .navbar {
                flex-direction: column;

                gap: 15px;
            }

            .nav-menu {
                gap: 15px;
            }

            .hero {
                min-height: 600px;
            }

            .stats-box {
                grid-template-columns: 1fr;
            }

            .stat {
                border-right: none;

                border-bottom: 1px solid #e5e7eb;
            }

            .section-title h2,
            .about-content h2 {
                font-size: 32px;
            }

        }

    </style>

</head>

<body>


<!-- ================= NAVBAR ================= -->

<nav class="navbar">

    <div class="logo">
        Lara<span>Press</span>
    </div>

    <ul class="nav-menu">

        <li>
            <a href="{{ route('home') }}" class="active">
                Beranda
            </a>
        </li>

        <li>
            <a href="{{ route('about') }}">
    Tentang Kami
</a>
        </li>

        <li>
            <a href="{{ route('contact') }}">
                Kontak
            </a>
        </li>

    </ul>

</nav>


<!-- ================= HERO ================= -->

<section class="hero">

    <div class="hero-content">

        <div class="badge">
            ✦ Welcome to LaraPress
        </div>

        <h1>
            Membangun Pengalaman
            <span>Digital yang Lebih Baik.</span>
        </h1>

        <p>
            LaraPress menghadirkan solusi digital modern yang
            mengutamakan kemudahan, kecepatan, keamanan,
            dan pengalaman pengguna.
        </p>

        <div class="buttons">

            <a
                href="{{ route('about') }}"
                class="btn btn-primary"
            >
                Jelajahi LaraPress →
            </a>

            <a
                href="{{ route('contact') }}"
                class="btn btn-light"
            >
                Hubungi Kami
            </a>

        </div>

    </div>

</section>


<!-- ================= STATS ================= -->

<section class="stats">

    <div class="container">

        <div class="stats-box">

            <div class="stat">
                <h3>1K+</h3>
                <p>Pengguna</p>
            </div>

            <div class="stat">
                <h3>50+</h3>
                <p>Project Selesai</p>
            </div>

            <div class="stat">
                <h3>99%</h3>
                <p>Kepuasan</p>
            </div>

            <div class="stat">
                <h3>24/7</h3>
                <p>Dukungan</p>
            </div>

        </div>

    </div>

</section>


<!-- ================= FEATURES ================= -->

<section class="section features">

    <div class="container">

        <div class="section-title">

            <span class="small">
                Keunggulan
            </span>

            <h2>
                Kenapa LaraPress?
            </h2>

            <p>
                Kami menggabungkan teknologi modern dengan
                pendekatan yang sederhana agar setiap pengguna
                mendapatkan pengalaman terbaik.
            </p>

        </div>


        <div class="feature-grid">

            <div class="feature-card">

                <div class="icon">
                    ⚡
                </div>

                <h3>
                    Cepat
                </h3>

                <p>
                    Sistem dirancang agar proses berjalan
                    cepat dan efisien tanpa membuat pengguna
                    merasa kesulitan.
                </p>

            </div>


            <div class="feature-card">

                <div class="icon">
                    🔐
                </div>

                <h3>
                    Aman
                </h3>

                <p>
                    Keamanan dan privasi menjadi bagian penting
                    dalam setiap solusi yang kami kembangkan.
                </p>

            </div>


            <div class="feature-card">

                <div class="icon">
                    ✨
                </div>

                <h3>
                    Modern
                </h3>

                <p>
                    Menggunakan pendekatan desain modern yang
                    responsif dan nyaman digunakan di berbagai
                    perangkat.
                </p>

            </div>

        </div>

    </div>

</section>


<!-- ================= SERVICES ================= -->

<section class="section">

    <div class="container">

        <div class="section-title">

            <span class="small">
                Layanan
            </span>

            <h2>
                Apa yang Kami Tawarkan?
            </h2>

            <p>
                Beberapa solusi yang menjadi bagian dari
                ekosistem LaraPress.
            </p>

        </div>


        <div class="service-grid">

            <div class="service">

                <div class="icon">
                    💻
                </div>

                <h3>
                    Digital Platform
                </h3>

                <p>
                    Membangun platform digital yang mudah
                    digunakan dan memiliki performa baik.
                </p>

            </div>


            <div class="service">

                <div class="icon">
                    🎨
                </div>

                <h3>
                    UI / UX Design
                </h3>

                <p>
                    Merancang pengalaman pengguna yang menarik,
                    intuitif, dan nyaman digunakan.
                </p>

            </div>


            <div class="service">

                <div class="icon">
                    🚀
                </div>

                <h3>
                    Digital Innovation
                </h3>

                <p>
                    Mengembangkan ide menjadi solusi digital
                    yang dapat memberikan manfaat nyata.
                </p>

            </div>

        </div>

    </div>

</section>


<!-- ================= ABOUT ================= -->

<section class="section">

    <div class="container">

        <div class="about-section">

            <div class="about-image"></div>

            <div class="about-content">

                <span class="small">
                    TENTANG KAMI
                </span>

                <h2>
                    Teknologi yang Dibuat untuk Manusia.
                </h2>

                <p>
                    LaraPress dibangun dengan sebuah tujuan:
                    membuat teknologi menjadi lebih sederhana,
                    mudah dipahami, dan bermanfaat.
                </p>

                <p>
                    Kami percaya bahwa teknologi terbaik bukan
                    hanya yang canggih, tetapi juga yang mampu
                    memberikan pengalaman yang baik bagi manusia.
                </p>

                <ul class="check-list">

                    <li>
                        Desain modern dan responsif
                    </li>

                    <li>
                        Pengalaman pengguna yang sederhana
                    </li>

                    <li>
                        Solusi yang terus dikembangkan
                    </li>

                </ul>

                <a
                    href="{{ route('about') }}"
                    class="btn btn-primary"
                >
                    Kenal Lebih Dekat →
                </a>

            </div>

        </div>

    </div>

</section>


<!-- ================= TESTIMONIAL ================= -->

<section class="section testimonials">

    <div class="container">

        <div class="section-title">

            <span class="small">
                Testimonial
            </span>

            <h2>
                Apa Kata Mereka?
            </h2>

            <p>
                Pengalaman pengguna menjadi salah satu hal
                yang terus kami perhatikan.
            </p>

        </div>


        <div class="testimonial-grid">

            <div class="testimonial">

                <div class="stars">
                    ★★★★★
                </div>

                <p>
                    "Tampilannya sederhana tetapi sangat nyaman
                    digunakan. Informasinya juga mudah ditemukan."
                </p>

                <div class="person">
                    Andi Pratama

                    <small>
                        Pengguna LaraPress
                    </small>
                </div>

            </div>


            <div class="testimonial">

                <div class="stars">
                    ★★★★★
                </div>

                <p>
                    "Desainnya modern dan terasa profesional.
                    Sangat mudah dipahami bahkan untuk pengguna baru."
                </p>

                <div class="person">
                    Sinta Maharani

                    <small>
                        Pengguna LaraPress
                    </small>
                </div>

            </div>


            <div class="testimonial">

                <div class="stars">
                    ★★★★★
                </div>

                <p>
                    "Informasi yang diberikan lengkap dan navigasinya
                    sangat mudah digunakan."
                </p>

                <div class="person">
                    Rizky Ramadhan

                    <small>
                        Pengguna LaraPress
                    </small>
                </div>

            </div>

        </div>

    </div>

</section>


<!-- ================= CTA ================= -->

<section class="cta">

    <h2>
        Siap Terhubung dengan LaraPress?
    </h2>

    <p>
        Punya pertanyaan atau ingin mengetahui lebih banyak
        mengenai LaraPress? Kami siap membantu.
    </p>

    <a
        href="{{ route('contact') }}"
        class="btn btn-light"
    >
        Hubungi Kami →
    </a>

</section>


<!-- ================= FOOTER ================= -->

<footer>

    <p>
        &copy; 2026 LaraPress.
        All Rights Reserved.
    </p>

</footer>


</body>

</html>