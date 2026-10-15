<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tentang Kami | LaraPress</title>

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
            background: white;
        }

        /* NAVBAR */

        .navbar {
            position: sticky;
            top: 0;
            z-index: 999;

            display: flex;
            justify-content: space-between;
            align-items: center;

            padding: 18px 7%;

            background: rgba(9,15,35,.96);

            backdrop-filter: blur(15px);
        }

        .logo {
            color: white;

            font-size: 25px;

            font-weight: 800;
        }

        .logo span {
            color: #67e8f9;
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
            color: #67e8f9;
        }

        /* HERO */

        .hero {
            padding: 110px 20px;

            text-align: center;

            color: white;

            background:
                linear-gradient(
                    120deg,
                    rgba(15,23,42,.94),
                    rgba(37,99,235,.85),
                    rgba(124,58,237,.82)
                ),
                url('/images/about.jpg');

            background-size: cover;

            background-position: center;
        }

        .hero .tag {
            display: inline-block;

            padding: 8px 16px;

            border-radius: 30px;

            background: rgba(255,255,255,.12);

            color: #a5f3fc;

            margin-bottom: 20px;

            font-size: 13px;
        }

        .hero h1 {
            font-size: clamp(40px,6vw,62px);

            margin-bottom: 18px;
        }

        .hero p {
            max-width: 720px;

            margin: auto;

            color: #dbeafe;

            line-height: 1.8;

            font-size: 17px;
        }

        /* GENERAL */

        .container {
            width: 86%;

            max-width: 1150px;

            margin: auto;
        }

        .section {
            padding: 95px 0;
        }

        /* STORY */

        .story {
            display: grid;

            grid-template-columns:
                1fr 1fr;

            gap: 70px;

            align-items: center;
        }

        .story-image {
            min-height: 500px;

            border-radius: 25px;

            background:
                linear-gradient(
                    rgba(37,99,235,.1),
                    rgba(124,58,237,.1)
                ),
                url('/images/about.jpg');

            background-size: cover;

            background-position: center;

            box-shadow:
                0 25px 50px rgba(15,23,42,.15);
        }

        .story-content .small {
            color: #4f46e5;

            font-size: 13px;

            font-weight: 800;

            letter-spacing: 1.5px;
        }

        .story-content h2 {
            font-size: 42px;

            margin: 12px 0 20px;
        }

        .story-content p {
            color: #64748b;

            line-height: 1.85;

            margin-bottom: 18px;
        }

        .highlight {
            margin-top: 25px;

            padding: 22px;

            border-left: 4px solid #4f46e5;

            background:
                linear-gradient(
                    90deg,
                    #eef2ff,
                    #f8faff
                );

            border-radius: 10px;

            color: #334155;

            line-height: 1.7;
        }

        /* STATS */

        .stats {
            background:
                linear-gradient(
                    135deg,
                    #111827,
                    #1e1b4b
                );

            color: white;
        }

        .stats-grid {
            display: grid;

            grid-template-columns:
                repeat(4,1fr);

            gap: 20px;

            text-align: center;
        }

        .stat h3 {
            font-size: 40px;

            color: #67e8f9;

            margin-bottom: 8px;
        }

        .stat p {
            color: #cbd5e1;
        }

        /* SECTION TITLE */

        .section-title {
            text-align: center;

            margin-bottom: 55px;
        }

        .section-title .small {
            color: #4f46e5;

            font-size: 13px;

            font-weight: 800;

            letter-spacing: 1.5px;
        }

        .section-title h2 {
            font-size: 42px;

            margin: 10px 0;
        }

        .section-title p {
            max-width: 650px;

            margin: auto;

            color: #64748b;

            line-height: 1.8;
        }

        /* VISION */

        .vision {
            background: #f8faff;
        }

        .vision-grid {
            display: grid;

            grid-template-columns:
                repeat(2,1fr);

            gap: 25px;
        }

        .vision-card {
            padding: 35px;

            border-radius: 20px;

            background: white;

            border: 1px solid #edf2f7;

            transition: .3s;
        }

        .vision-card:hover {
            transform: translateY(-7px);

            box-shadow:
                0 20px 40px rgba(37,99,235,.10);
        }

        .vision-icon {
            font-size: 35px;

            margin-bottom: 18px;
        }

        .vision-card h3 {
            font-size: 24px;

            margin-bottom: 12px;
        }

        .vision-card p {
            color: #64748b;

            line-height: 1.8;
        }

        /* VALUES */

        .values-grid {
            display: grid;

            grid-template-columns:
                repeat(3,1fr);

            gap: 25px;
        }

        .value {
            text-align: center;

            padding: 35px 25px;

            border-radius: 18px;

            border: 1px solid #e5e7eb;

            transition: .3s;
        }

        .value:hover {
            transform: translateY(-7px);

            border-color: #a5b4fc;

            box-shadow:
                0 20px 40px rgba(79,70,229,.10);
        }

        .value-icon {
            width: 65px;

            height: 65px;

            margin: auto auto 20px;

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 18px;

            background:
                linear-gradient(
                    135deg,
                    #dbeafe,
                    #ede9fe
                );

            font-size: 28px;
        }

        .value h3 {
            margin-bottom: 10px;
        }

        .value p {
            color: #64748b;

            line-height: 1.7;
        }

        /* TIMELINE */

        .timeline {
            position: relative;

            max-width: 850px;

            margin: auto;
        }

        .timeline::before {
            content: "";

            position: absolute;

            left: 50%;

            top: 0;

            bottom: 0;

            width: 2px;

            background: #dbeafe;
        }

        .timeline-item {
            width: 50%;

            padding: 15px 35px;

            position: relative;
        }

        .timeline-item:nth-child(odd) {
            left: 0;

            text-align: right;
        }

        .timeline-item:nth-child(even) {
            left: 50%;
        }

        .timeline-dot {
            position: absolute;

            width: 14px;

            height: 14px;

            border-radius: 50%;

            background: #4f46e5;

            top: 30px;

            box-shadow:
                0 0 0 5px #eef2ff;
        }

        .timeline-item:nth-child(odd)
        .timeline-dot {
            right: -7px;
        }

        .timeline-item:nth-child(even)
        .timeline-dot {
            left: -7px;
        }

        .timeline-content {
            padding: 25px;

            background: white;

            border-radius: 15px;

            box-shadow:
                0 10px 30px rgba(15,23,42,.07);
        }

        .timeline-content span {
            color: #4f46e5;

            font-weight: bold;

            font-size: 13px;
        }

        .timeline-content h3 {
            margin: 8px 0;
        }

        .timeline-content p {
            color: #64748b;

            line-height: 1.7;
        }

        /* TEAM */

        .team {
            background: #f8faff;
        }

        .team-grid {
            display: grid;

            grid-template-columns:
                repeat(3,1fr);

            gap: 25px;
        }

        .team-card {
            background: white;

            border-radius: 20px;

            overflow: hidden;

            box-shadow:
                0 10px 30px rgba(15,23,42,.06);

            transition: .3s;
        }

        .team-card:hover {
            transform: translateY(-8px);

            box-shadow:
                0 20px 40px rgba(37,99,235,.12);
        }

        .team-photo {
            height: 310px;

            background-size: cover;

            background-position: center;
        }

        .team-1 {
            background-image:
                url('/images/team-1.jpg');
        }

        .team-2 {
            background-image:
                url('/images/team-2.jpg');
        }

        .team-3 {
            background-image:
                url('/images/team-3.jpg');
        }

        .team-info {
            padding: 25px;

            text-align: center;
        }

        .team-info h3 {
            margin-bottom: 8px;
        }

        .team-info p {
            color: #4f46e5;

            font-size: 14px;
        }

        /* FAQ */

        .faq-grid {
            max-width: 850px;

            margin: auto;
        }

        .faq {
            margin-bottom: 15px;

            padding: 22px 25px;

            border: 1px solid #e5e7eb;

            border-radius: 14px;

            cursor: pointer;

            transition: .3s;
        }

        .faq:hover {
            border-color: #a5b4fc;

            background: #fafaff;
        }

        .faq summary {
            font-weight: bold;

            cursor: pointer;

            color: #1e293b;
        }

        .faq p {
            color: #64748b;

            line-height: 1.7;

            margin-top: 15px;
        }

        /* CTA */

        .cta {
            padding: 100px 20px;

            text-align: center;

            color: white;

            background:
                linear-gradient(
                    135deg,
                    #2563eb,
                    #7c3aed
                );
        }

        .cta h2 {
            font-size: 42px;

            margin-bottom: 15px;
        }

        .cta p {
            max-width: 650px;

            margin: auto auto 30px;

            color: #e0e7ff;

            line-height: 1.8;
        }

        .btn {
            display: inline-block;

            padding: 14px 25px;

            background: white;

            color: #4338ca;

            border-radius: 10px;

            text-decoration: none;

            font-weight: bold;

            transition: .3s;
        }

        .btn:hover {
            transform: translateY(-3px);
        }

        /* FOOTER */

        footer {
            background: #090f23;

            color: #94a3b8;

            text-align: center;

            padding: 30px;
        }

        /* RESPONSIVE */

        @media(max-width:850px) {

            .navbar {
                flex-direction: column;

                gap: 15px;
            }

            .story {
                grid-template-columns: 1fr;
            }

            .stats-grid,
            .values-grid,
            .team-grid {
                grid-template-columns:
                    repeat(2,1fr);
            }

            .vision-grid {
                grid-template-columns: 1fr;
            }

        }

        @media(max-width:600px) {

            .stats-grid,
            .values-grid,
            .team-grid {
                grid-template-columns: 1fr;
            }

            .timeline::before {
                left: 10px;
            }

            .timeline-item {
                width: 100%;

                left: 0 !important;

                text-align: left !important;

                padding-left: 40px;
            }

            .timeline-item .timeline-dot {
                left: 3px !important;

                right: auto !important;
            }

        }

    </style>

</head>

<body>


<!-- NAVBAR -->

<nav class="navbar">

    <div class="logo">
        Lara<span>Press</span>
    </div>

    <ul class="nav-menu">

        <li>
            <a href="{{ route('home') }}">
                Beranda
            </a>
        </li>

        <li>
            <a href="{{ route('about') }}" class="active">
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


<!-- HERO -->

<section class="hero">

    <div class="tag">
        ✦ Mengenal LaraPress
    </div>

    <h1>
        Kami Membangun Lebih dari Sekadar Teknologi.
    </h1>

    <p>
        LaraPress hadir untuk menciptakan pengalaman digital
        yang sederhana, modern, dan memberikan manfaat nyata
        bagi penggunanya.
    </p>

</section>


<!-- STORY -->

<section class="section">

    <div class="container">

        <div class="story">

            <div class="story-image"></div>

            <div class="story-content">

                <span class="small">
                    CERITA KAMI
                </span>

                <h2>
                    Sebuah Ide yang Berkembang Menjadi Perjalanan.
                </h2>

                <p>
                    LaraPress bermula dari sebuah gagasan sederhana:
                    bagaimana teknologi dapat dibuat lebih mudah
                    digunakan dan lebih dekat dengan kebutuhan manusia.
                </p>

                <p>
                    Dari gagasan tersebut, kami terus belajar,
                    bereksperimen, dan mengembangkan berbagai solusi
                    digital yang mengutamakan pengalaman pengguna.
                </p>

                <p>
                    Kami percaya bahwa teknologi yang baik bukan
                    hanya tentang seberapa canggih sebuah sistem,
                    tetapi juga tentang seberapa besar manfaat
                    yang dapat diberikan.
                </p>

                <div class="highlight">
                    <strong>
                        "Teknologi terbaik adalah teknologi
                        yang membuat kehidupan menjadi lebih mudah."
                    </strong>
                </div>

            </div>

        </div>

    </div>

</section>


<!-- STATS -->

<section class="section stats">

    <div class="container">

        <div class="stats-grid">

            <div class="stat">
                <h3>1K+</h3>
                <p>Pengguna</p>
            </div>

            <div class="stat">
                <h3>50+</h3>
                <p>Project</p>
            </div>

            <div class="stat">
                <h3>10+</h3>
                <p>Partner</p>
            </div>

            <div class="stat">
                <h3>99%</h3>
                <p>Kepuasan</p>
            </div>

        </div>

    </div>

</section>


<!-- VISI MISI -->

<section class="section vision">

    <div class="container">

        <div class="section-title">

            <span class="small">
                ARAH KAMI
            </span>

            <h2>
                Visi & Misi
            </h2>

            <p>
                Prinsip yang menjadi dasar perjalanan LaraPress.
            </p>

        </div>


        <div class="vision-grid">

            <div class="vision-card">

                <div class="vision-icon">
                    🎯
                </div>

                <h3>
                    Visi
                </h3>

                <p>
                    Menjadi platform digital yang inovatif,
                    terpercaya, dan mampu menghadirkan pengalaman
                    teknologi yang sederhana serta bermanfaat
                    bagi masyarakat.
                </p>

            </div>


            <div class="vision-card">

                <div class="vision-icon">
                    🚀
                </div>

                <h3>
                    Misi
                </h3>

                <p>
                    Mengembangkan solusi digital berkualitas,
                    mengutamakan kebutuhan pengguna, serta terus
                    melakukan inovasi mengikuti perkembangan teknologi.
                </p>

            </div>

        </div>

    </div>

</section>


<!-- VALUES -->

<section class="section">

    <div class="container">

        <div class="section-title">

            <span class="small">
                CORE VALUES
            </span>

            <h2>
                Nilai yang Kami Pegang
            </h2>

            <p>
                Tiga prinsip utama yang menjadi bagian
                dari cara kami bekerja.
            </p>

        </div>


        <div class="values-grid">

            <div class="value">

                <div class="value-icon">
                    💡
                </div>

                <h3>
                    Inovasi
                </h3>

                <p>
                    Terus mencari ide baru untuk menciptakan
                    solusi yang lebih baik.
                </p>

            </div>


            <div class="value">

                <div class="value-icon">
                    🤝
                </div>

                <h3>
                    Kolaborasi
                </h3>

                <p>
                    Membangun hubungan dan bekerja bersama
                    untuk mencapai hasil terbaik.
                </p>

            </div>


            <div class="value">

                <div class="value-icon">
                    ⭐
                </div>

                <h3>
                    Kualitas
                </h3>

                <p>
                    Mengutamakan kualitas dalam setiap
                    detail produk dan layanan.
                </p>

            </div>

        </div>

    </div>

</section>


<!-- TIMELINE -->

<section class="section vision">

    <div class="container">

        <div class="section-title">

            <span class="small">
                PERJALANAN
            </span>

            <h2>
                Perjalanan LaraPress
            </h2>

            <p>
                Beberapa tahapan dalam perjalanan kami.
            </p>

        </div>


        <div class="timeline">

            <div class="timeline-item">

                <div class="timeline-dot"></div>

                <div class="timeline-content">

                    <span>2023</span>

                    <h3>
                        Awal Perjalanan
                    </h3>

                    <p>
                        LaraPress dimulai dari sebuah ide
                        sederhana untuk membuat solusi digital
                        yang lebih mudah digunakan.
                    </p>

                </div>

            </div>


            <div class="timeline-item">

                <div class="timeline-dot"></div>

                <div class="timeline-content">

                    <span>2024</span>

                    <h3>
                        Pengembangan
                    </h3>

                    <p>
                        Mulai mengembangkan berbagai fitur
                        dan membangun identitas LaraPress.
                    </p>

                </div>

            </div>


            <div class="timeline-item">

                <div class="timeline-dot"></div>

                <div class="timeline-content">

                    <span>2025</span>

                    <h3>
                        Pertumbuhan
                    </h3>

                    <p>
                        Memperluas layanan dan mulai bekerja
                        sama dengan lebih banyak pengguna.
                    </p>

                </div>

            </div>


            <div class="timeline-item">

                <div class="timeline-dot"></div>

                <div class="timeline-content">

                    <span>2026</span>

                    <h3>
                        Melangkah Lebih Jauh
                    </h3>

                    <p>
                        Terus melakukan inovasi dan menciptakan
                        pengalaman digital yang lebih baik.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- TEAM -->

<section class="section team">

    <div class="container">

        <div class="section-title">

            <span class="small">
                OUR TEAM
            </span>

            <h2>
                Orang di Balik LaraPress
            </h2>

            <p>
                Sebuah tim kecil dengan semangat besar
                untuk menciptakan sesuatu yang bermanfaat.
            </p>

        </div>


        <div class="team-grid">

            <div class="team-card">

                <div class="team-photo team-1"></div>

                <div class="team-info">

                    <h3>
                        Andi Pratama
                    </h3>

                    <p>
                        Project Manager
                    </p>

                </div>

            </div>


            <div class="team-card">

                <div class="team-photo team-2"></div>

                <div class="team-info">

                    <h3>
                        Sinta Maharani
                    </h3>

                    <p>
                        UI/UX Designer
                    </p>

                </div>

            </div>


            <div class="team-card">

                <div class="team-photo team-3"></div>

                <div class="team-info">

                    <h3>
                        Rizky Ramadhan
                    </h3>

                    <p>
                        Software Developer
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- FAQ -->

<section class="section">

    <div class="container">

        <div class="section-title">

            <span class="small">
                FAQ
            </span>

            <h2>
                Pertanyaan yang Sering Ditanyakan
            </h2>

        </div>


        <div class="faq-grid">

            <details class="faq">

                <summary>
                    Apa itu LaraPress?
                </summary>

                <p>
                    LaraPress merupakan konsep platform digital
                    yang dirancang untuk memberikan pengalaman
                    teknologi yang sederhana dan modern.
                </p>

            </details>


            <details class="faq">

                <summary>
                    Apa tujuan LaraPress?
                </summary>

                <p>
                    Tujuan LaraPress adalah menghadirkan solusi
                    digital yang mudah digunakan dan memberikan
                    manfaat bagi pengguna.
                </p>

            </details>


            <details class="faq">

                <summary>
                    Bagaimana cara menghubungi LaraPress?
                </summary>

                <p>
                    Kamu dapat mengunjungi halaman Kontak untuk
                    melihat email, nomor telepon, alamat, dan
                    informasi lainnya.
                </p>

            </details>


            <details class="faq">

                <summary>
                    Apakah LaraPress terus dikembangkan?
                </summary>

                <p>
                    Ya. LaraPress dirancang untuk terus dikembangkan
                    mengikuti kebutuhan pengguna dan perkembangan
                    teknologi.
                </p>

            </details>

        </div>

    </div>

</section>


<!-- CTA -->

<section class="cta">

    <h2>
        Ingin Mengenal Kami Lebih Dekat?
    </h2>

    <p>
        Jangan ragu untuk menghubungi kami.
        Kami dengan senang hati akan membantu.
    </p>

    <a
        href="{{ route('contact') }}"
        class="btn"
    >
        Hubungi LaraPress →
    </a>

</section>


<!-- FOOTER -->

<footer>

    <p>
        &copy; 2026 LaraPress.
        All Rights Reserved.
    </p>

</footer>


</body>

</html>