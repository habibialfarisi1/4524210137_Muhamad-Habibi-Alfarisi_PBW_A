<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Kontak | LaraPress</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;

            color: #172033;

            background: #f8faff;
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

            background:
                rgba(9,15,35,.96);

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
        }

        .nav-menu a:hover,
        .nav-menu .active {
            color: #67e8f9;
        }

        /* HERO */

        .hero {
            padding: 100px 20px;

            text-align: center;

            color: white;

            background:
                linear-gradient(
                    120deg,
                    rgba(15,23,42,.94),
                    rgba(37,99,235,.85),
                    rgba(124,58,237,.82)
                );
        }

        .hero h1 {
            font-size: 52px;

            margin-bottom: 18px;
        }

        .hero p {
            max-width: 700px;

            margin: auto;

            color: #dbeafe;

            line-height: 1.8;
        }

        /* CONTAINER */

        .container {
            width: 86%;

            max-width: 1150px;

            margin: auto;
        }

        .section {
            padding: 80px 0;
        }

        /* CONTACT CARDS */

        .contact-grid {
            display: grid;

            grid-template-columns:
                repeat(3,1fr);

            gap: 20px;

            margin-top: -40px;

            position: relative;
        }

        .contact-card {
            background: white;

            padding: 30px;

            border-radius: 18px;

            text-align: center;

            box-shadow:
                0 15px 35px rgba(15,23,42,.10);

            transition: .3s;
        }

        .contact-card:hover {
            transform: translateY(-7px);

            box-shadow:
                0 20px 45px rgba(37,99,235,.14);
        }

        .contact-icon {
            width: 60px;

            height: 60px;

            margin: auto auto 18px;

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 17px;

            background:
                linear-gradient(
                    135deg,
                    #dbeafe,
                    #ede9fe
                );

            font-size: 26px;
        }

        .contact-card h3 {
            margin-bottom: 10px;
        }

        .contact-card p {
            color: #64748b;

            line-height: 1.7;
        }

        /* MAIN */

        .main-grid {
            display: grid;

            grid-template-columns:
                1fr 1fr;

            gap: 30px;

            align-items: stretch;
        }

        .box {
            background: white;

            padding: 35px;

            border-radius: 20px;

            box-shadow:
                0 10px 30px rgba(15,23,42,.06);
        }

        .box h2 {
            font-size: 28px;

            margin-bottom: 25px;
        }

        /* FORM */

        .form-group {
            margin-bottom: 18px;
        }

        .form-group label {
            display: block;

            font-size: 14px;

            font-weight: bold;

            margin-bottom: 8px;
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;

            padding: 13px 15px;

            border: 1px solid #dbe2ea;

            border-radius: 9px;

            outline: none;

            font-family: inherit;

            transition: .3s;
        }

        .form-group textarea {
            min-height: 130px;

            resize: vertical;
        }

        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {
            border-color: #6366f1;

            box-shadow:
                0 0 0 3px #eef2ff;
        }

        .submit-btn {
            width: 100%;

            border: none;

            padding: 14px;

            border-radius: 10px;

            background:
                linear-gradient(
                    135deg,
                    #2563eb,
                    #7c3aed
                );

            color: white;

            font-weight: bold;

            cursor: pointer;
        }

        /* INFO */

        .info-item {
            display: flex;

            gap: 15px;

            margin-bottom: 25px;
        }

        .info-icon {
            width: 45px;

            height: 45px;

            min-width: 45px;

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 12px;

            background: #eef2ff;
        }

        .info-item h4 {
            margin-bottom: 5px;
        }

        .info-item p {
            color: #64748b;

            line-height: 1.6;
        }

        /* FAQ */

        .faq {
            max-width: 850px;

            margin: auto;
        }

        details {
            background: white;

            margin-bottom: 12px;

            padding: 20px 23px;

            border-radius: 12px;

            border: 1px solid #e5e7eb;
        }

        summary {
            font-weight: bold;

            cursor: pointer;
        }

        details p {
            color: #64748b;

            line-height: 1.7;

            margin-top: 12px;
        }

        /* FOOTER */

        footer {
            background: #090f23;

            color: #94a3b8;

            text-align: center;

            padding: 30px;
        }

        @media(max-width:850px) {

            .navbar {
                flex-direction: column;

                gap: 15px;
            }

            .contact-grid,
            .main-grid {
                grid-template-columns: 1fr;
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
            <a href="{{ route('about') }}">
                Tentang Kami
            </a>
        </li>

        <li>
            <a href="{{ route('contact') }}"
               class="active">
                Kontak
            </a>
        </li>

    </ul>

</nav>


<!-- HERO -->

<section class="hero">

    <h1>
        Mari Terhubung
    </h1>

    <p>
        Punya pertanyaan, ide, atau ingin mengetahui lebih banyak
        tentang LaraPress? Kami siap mendengarkan.
    </p>

</section>


<!-- CONTACT CARDS -->

<section class="container">

    <div class="contact-grid">

        <div class="contact-card">

            <div class="contact-icon">
                📧
            </div>

            <h3>
                Email
            </h3>

            <p>
                info@larapress.test
            </p>

        </div>


        <div class="contact-card">

            <div class="contact-icon">
                📱
            </div>

            <h3>
                Telepon
            </h3>

            <p>
                +62 812-3456-7890
            </p>

        </div>


        <div class="contact-card">

            <div class="contact-icon">
                📍
            </div>

            <h3>
                Lokasi
            </h3>

            <p>
                Jakarta, Indonesia
            </p>

        </div>

    </div>

</section>


<!-- FORM + INFORMATION -->

<section class="section">

    <div class="container">

        <div class="main-grid">


            <!-- FORM -->

            <div class="box">

                <h2>
                    Kirim Pesan
                </h2>

                <form>

                    <div class="form-group">

                        <label>
                            Nama
                        </label>

                        <input
                            type="text"
                            placeholder="Masukkan nama Anda"
                        >

                    </div>


                    <div class="form-group">

                        <label>
                            Email
                        </label>

                        <input
                            type="email"
                            placeholder="nama@email.com"
                        >

                    </div>


                    <div class="form-group">

                        <label>
                            Subjek
                        </label>

                        <select>

                            <option>
                                Pertanyaan Umum
                            </option>

                            <option>
                                Informasi Layanan
                            </option>

                            <option>
                                Kerja Sama
                            </option>

                            <option>
                                Saran
                            </option>

                        </select>

                    </div>


                    <div class="form-group">

                        <label>
                            Pesan
                        </label>

                        <textarea
                            placeholder="Tuliskan pesan Anda..."
                        ></textarea>

                    </div>


                    <button
                        type="button"
                        class="submit-btn"
                        onclick="alert('Terima kasih! Pesan Anda berhasil disiapkan.')"
                    >
                        Kirim Pesan →
                    </button>

                </form>

            </div>


            <!-- INFO -->

            <div class="box">

                <h2>
                    Informasi Kami
                </h2>


                <div class="info-item">

                    <div class="info-icon">
                        📧
                    </div>

                    <div>

                        <h4>
                            Email
                        </h4>

                        <p>
                            info@larapress.test
                        </p>

                    </div>

                </div>


                <div class="info-item">

                    <div class="info-icon">
                        📞
                    </div>

                    <div>

                        <h4>
                            Telepon
                        </h4>

                        <p>
                            +62 812-3456-7890
                        </p>

                    </div>

                </div>


                <div class="info-item">

                    <div class="info-icon">
                        🕐
                    </div>

                    <div>

                        <h4>
                            Jam Operasional
                        </h4>

                        <p>
                            Senin - Jumat<br>
                            08.00 - 17.00 WIB
                        </p>

                    </div>

                </div>


                <div class="info-item">

                    <div class="info-icon">
                        📍
                    </div>

                    <div>

                        <h4>
                            Alamat
                        </h4>

                        <p>
                            Jl. Teknologi No. 10<br>
                            Jakarta, Indonesia
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- FAQ -->

<section class="section">

    <div class="container">

        <div style="text-align:center;margin-bottom:40px;">

            <span style="
                color:#4f46e5;
                font-size:13px;
                font-weight:bold;
                letter-spacing:1px;
            ">
                FAQ
            </span>

            <h2 style="
                font-size:38px;
                margin-top:10px;
            ">
                Ada Pertanyaan?
            </h2>

        </div>


        <div class="faq">

            <details>

                <summary>
                    Kapan kami dapat menghubungi LaraPress?
                </summary>

                <p>
                    Kamu dapat menghubungi kami pada hari Senin
                    sampai Jumat, pukul 08.00 hingga 17.00 WIB.
                </p>

            </details>


            <details>

                <summary>
                    Apakah LaraPress menerima kerja sama?
                </summary>

                <p>
                    Untuk informasi kerja sama, silakan gunakan
                    form kontak dan pilih kategori "Kerja Sama".
                </p>

            </details>


            <details>

                <summary>
                    Bagaimana cara mendapatkan informasi lebih lanjut?
                </summary>

                <p>
                    Silakan menghubungi kami melalui email,
                    telepon, atau form yang tersedia di halaman ini.
                </p>

            </details>

        </div>

    </div>

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