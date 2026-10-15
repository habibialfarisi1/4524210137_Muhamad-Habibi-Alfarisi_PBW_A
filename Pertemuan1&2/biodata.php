<?php
// biodata.php

function statusKelulusan(float $ipk): string
{
    if ($ipk >= 3.50) return 'Sangat Memuaskan';
    if ($ipk >= 3.00) return 'Memuaskan';
    return 'Perlu Peningkatan';
}

$mahasiswa = [
    'npm' => '4524210137',
    'nama' => 'Muhamad Habibi Alfarisi',
    'prodi' => 'Teknik Informatika',
    'semester' => 5,
    'ipk' => 3.65
];

function e(mixed $nilai): string
{
    return htmlspecialchars((string) $nilai, ENT_QUOTES, 'UTF-8');
}

$predikat = statusKelulusan((float) $mahasiswa['ipk']);
$persentase = min(100, max(0, ($mahasiswa['ipk'] / 4) * 100));
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mahasiswa | Habibi</title>
    <style>
        * { box-sizing: border-box; }

        :root {
            --forest: #173f35;
            --forest-dark: #102e28;
            --green: #2f725d;
            --mint: #dceee5;
            --lime: #d8f078;
            --ink: #24342e;
            --muted: #748179;
            --paper: #f4f5ef;
            --line: #e3e8df;
            --white: #ffffff;
        }

        body {
            margin: 0;
            min-height: 100vh;
            padding: 38px 18px;
            display: grid;
            place-items: center;
            background:
                radial-gradient(circle at 8% 8%, rgba(216, 240, 120, .28), transparent 26%),
                radial-gradient(circle at 95% 92%, rgba(47, 114, 93, .13), transparent 28%),
                var(--paper);
            color: var(--ink);
            font-family: "Segoe UI", Arial, sans-serif;
        }

        .page {
            width: min(100%, 980px);
        }

        .masthead {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            margin-bottom: 18px;
            padding: 0 4px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 11px;
            color: var(--forest);
            font-size: 13px;
            font-weight: 900;
            letter-spacing: 1.6px;
        }

        .brand-mark {
            width: 38px;
            height: 38px;
            display: grid;
            place-items: center;
            border-radius: 13px;
            background: var(--forest);
            color: var(--lime);
            font-size: 18px;
        }

        .masthead-note {
            color: var(--muted);
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 1.3px;
            text-transform: uppercase;
        }

        .sheet {
            overflow: hidden;
            display: grid;
            grid-template-columns: 310px minmax(0, 1fr);
            border: 1px solid rgba(23, 63, 53, .08);
            border-radius: 28px;
            background: var(--white);
            box-shadow: 0 26px 70px rgba(25, 57, 43, .12);
        }

        .sidebar {
            position: relative;
            overflow: hidden;
            padding: 34px 28px;
            background: var(--forest);
            color: var(--white);
        }

        .sidebar::before,
        .sidebar::after {
            position: absolute;
            content: "";
            border: 1px solid rgba(216, 240, 120, .18);
            border-radius: 50%;
            pointer-events: none;
        }

        .sidebar::before {
            width: 280px;
            height: 280px;
            right: -165px;
            top: -100px;
        }

        .sidebar::after {
            width: 220px;
            height: 220px;
            right: -125px;
            top: -70px;
        }

        .sidebar-content {
            position: relative;
            z-index: 1;
        }

        .profile-tag {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 7px 10px;
            border: 1px solid rgba(255,255,255,.18);
            border-radius: 30px;
            color: #e4f0e8;
            font-size: 10px;
            font-weight: 800;
            letter-spacing: 1.2px;
            text-transform: uppercase;
        }

        .profile-tag::before {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: var(--lime);
            content: "";
        }

        .avatar-wrap {
            margin: 35px 0 22px;
        }

        .avatar {
            width: 108px;
            height: 108px;
            display: grid;
            place-items: center;
            border: 1px solid rgba(255,255,255,.32);
            border-radius: 30px;
            background: linear-gradient(145deg, #3d8068, #245748);
            box-shadow: 0 12px 30px rgba(0,0,0,.15);
            color: var(--lime);
            font-size: 35px;
            font-weight: 900;
            letter-spacing: -2px;
        }

        .sidebar h1 {
            margin: 0;
            max-width: 250px;
            font-size: 28px;
            line-height: 1.18;
            letter-spacing: -.8px;
            overflow-wrap: anywhere;
        }

        .role {
            margin: 12px 0 0;
            color: #c1d8cd;
            font-size: 13px;
            line-height: 1.7;
        }

        .sidebar-divider {
            height: 1px;
            margin: 28px 0 22px;
            background: rgba(255,255,255,.16);
        }

        .side-label {
            margin-bottom: 8px;
            color: #a7c5b5;
            font-size: 10px;
            font-weight: 800;
            letter-spacing: 1.5px;
            text-transform: uppercase;
        }

        .side-value {
            color: white;
            font-size: 14px;
            font-weight: 700;
            overflow-wrap: anywhere;
        }

        .sidebar-bottom {
            margin-top: 28px;
            padding: 15px;
            border: 1px solid rgba(216,240,120,.2);
            border-radius: 16px;
            background: rgba(255,255,255,.06);
        }

        .sidebar-bottom strong {
            display: block;
            margin-bottom: 5px;
            color: var(--lime);
            font-size: 12px;
        }

        .sidebar-bottom span {
            color: #c1d8cd;
            font-size: 11px;
            line-height: 1.6;
        }

        .main {
            min-width: 0;
            padding: 35px;
        }

        .main-heading {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 15px;
            margin-bottom: 27px;
        }

        .eyebrow {
            margin: 0 0 8px;
            color: var(--green);
            font-size: 10px;
            font-weight: 900;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .main-heading h2 {
            margin: 0;
            color: var(--forest-dark);
            font-size: clamp(23px, 3vw, 30px);
            letter-spacing: -.8px;
        }

        .main-heading p {
            margin: 9px 0 0;
            color: var(--muted);
            font-size: 13px;
            line-height: 1.6;
        }

        .year-stamp {
            flex-shrink: 0;
            padding: 9px 11px;
            border-radius: 12px;
            background: var(--mint);
            color: var(--forest);
            font-size: 11px;
            font-weight: 900;
        }

        .section-heading {
            display: flex;
            align-items: center;
            gap: 10px;
            margin: 0 0 15px;
            color: var(--forest-dark);
            font-size: 13px;
            font-weight: 900;
        }

        .section-heading::before {
            width: 4px;
            height: 17px;
            border-radius: 5px;
            background: #8bbf9e;
            content: "";
        }

        .details {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 12px;
        }

        .detail {
            min-width: 0;
            padding: 17px;
            border: 1px solid var(--line);
            border-radius: 16px;
            background: #fcfdf9;
            transition: transform .2s ease, border-color .2s ease;
        }

        .detail:hover {
            transform: translateY(-2px);
            border-color: #a8cdb5;
        }

        .detail-label {
            margin-bottom: 9px;
            color: var(--muted);
            font-size: 10px;
            font-weight: 800;
            letter-spacing: 1.2px;
            text-transform: uppercase;
        }

        .detail-value {
            color: var(--ink);
            font-size: 15px;
            font-weight: 800;
            line-height: 1.45;
            overflow-wrap: anywhere;
        }

        .academic-card {
            margin-top: 25px;
            padding: 22px;
            border-radius: 20px;
            background: #f0f6ed;
        }

        .academic-top {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 15px;
        }

        .academic-title {
            margin: 0 0 6px;
            color: var(--forest-dark);
            font-size: 14px;
            font-weight: 900;
        }

        .academic-subtitle {
            margin: 0;
            color: var(--muted);
            font-size: 11px;
            line-height: 1.6;
        }

        .ipk {
            color: var(--forest);
            font-size: 35px;
            font-weight: 900;
            letter-spacing: -1.5px;
            white-space: nowrap;
        }

        .ipk small {
            color: var(--muted);
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 0;
        }

        .achievement-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            margin-top: 18px;
        }

        .badge {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            padding: 9px 12px;
            border-radius: 10px;
            background: var(--forest);
            color: var(--lime);
            font-size: 11px;
            font-weight: 800;
        }

        .percentage-text {
            color: var(--green);
            font-size: 11px;
            font-weight: 900;
            white-space: nowrap;
        }

        .progress {
            height: 8px;
            margin-top: 15px;
            overflow: hidden;
            border-radius: 20px;
            background: #dbe6d8;
        }

        .progress span {
            display: block;
            width: <?= $persentase ?>%;
            height: 100%;
            border-radius: inherit;
            background: linear-gradient(90deg, #2f725d, #91bf78);
        }

        .note {
            display: flex;
            gap: 12px;
            align-items: flex-start;
            margin-top: 18px;
            padding: 15px 16px;
            border: 1px solid #edf0e8;
            border-radius: 15px;
            background: #fff;
        }

        .note-icon {
            flex-shrink: 0;
            width: 30px;
            height: 30px;
            display: grid;
            place-items: center;
            border-radius: 10px;
            background: var(--mint);
            color: var(--forest);
            font-weight: 900;
        }

        .note strong {
            display: block;
            margin: 1px 0 4px;
            color: var(--forest-dark);
            font-size: 12px;
        }

        .note p {
            margin: 0;
            color: var(--muted);
            font-size: 11px;
            line-height: 1.65;
        }

        footer {
            margin-top: 25px;
            padding-top: 17px;
            border-top: 1px solid var(--line);
            color: #89948b;
            font-size: 10px;
            line-height: 1.8;
            text-align: center;
        }

        @media (max-width: 720px) {
            body { padding: 20px 12px; }
            .sheet { grid-template-columns: 1fr; }
            .sidebar { padding: 27px 25px; }
            .avatar-wrap { margin: 25px 0 18px; }
            .avatar { width: 82px; height: 82px; border-radius: 24px; font-size: 29px; }
            .sidebar h1 { max-width: 100%; font-size: 25px; }
            .sidebar-divider { margin: 20px 0 17px; }
            .sidebar-bottom { margin-top: 20px; }
            .main { padding: 27px 23px; }
        }

        @media (max-width: 420px) {
            .masthead-note { display: none; }
            .main-heading { flex-direction: column; }
            .details { grid-template-columns: 1fr; }
            .academic-top { align-items: flex-start; flex-direction: column; }
            .achievement-row { align-items: flex-start; flex-direction: column; }
            .ipk { font-size: 32px; }
        }
    </style>
</head>
<body>
<div class="page">
    <header class="masthead">
        <div class="brand">
            <div class="brand-mark">H</div>
            <span>HABIBI / PROFILE</span>
        </div>
        <div class="masthead-note">Student identity card</div>
    </header>

    <main class="sheet">
        <aside class="sidebar">
            <div class="sidebar-content">
                <span class="profile-tag">Profil Mahasiswa</span>

                <div class="avatar-wrap">
                    <div class="avatar">MH</div>
                </div>

                <h1><?= e($mahasiswa['nama']) ?></h1>
                <p class="role">
                    Mahasiswa Program Studi<br>
                    <strong><?= e($mahasiswa['prodi']) ?></strong>
                </p>

                <div class="sidebar-divider"></div>

                <div class="side-label">Nomor Pokok Mahasiswa</div>
                <div class="side-value"><?= e($mahasiswa['npm']) ?></div>

                <div class="sidebar-bottom">
                    <strong>Terus bertumbuh.</strong>
                    <span>
                        Membangun pengetahuan, mengembangkan keterampilan,
                        dan melangkah menuju masa depan.
                    </span>
                </div>
            </div>
        </aside>

        <section class="main">
            <div class="main-heading">
                <div>
                    <p class="eyebrow">Student overview</p>
                    <h2>Ringkasan Akademik</h2>
                    <p>Informasi diri dan pencapaian akademik mahasiswa.</p>
                </div>
                <div class="year-stamp"><?= date('Y') ?></div>
            </div>

            <h3 class="section-heading">Informasi Mahasiswa</h3>

            <div class="details">
                <div class="detail">
                    <div class="detail-label">Nama Lengkap</div>
                    <div class="detail-value"><?= e($mahasiswa['nama']) ?></div>
                </div>

                <div class="detail">
                    <div class="detail-label">NPM</div>
                    <div class="detail-value"><?= e($mahasiswa['npm']) ?></div>
                </div>

                <div class="detail">
                    <div class="detail-label">Program Studi</div>
                    <div class="detail-value"><?= e($mahasiswa['prodi']) ?></div>
                </div>

                <div class="detail">
                    <div class="detail-label">Semester</div>
                    <div class="detail-value"><?= e($mahasiswa['semester']) ?></div>
                </div>
            </div>

            <section class="academic-card">
                <div class="academic-top">
                    <div>
                        <h3 class="academic-title">Indeks Prestasi Kumulatif</h3>
                        <p class="academic-subtitle">
                            Gambaran capaian akademik saat ini
                        </p>
                    </div>

                    <div class="ipk">
                        <?= number_format((float) $mahasiswa['ipk'], 2, ',', '.') ?>
                        <small>/ 4,00</small>
                    </div>
                </div>

                <div class="achievement-row">
                    <span class="badge">✦ <?= e($predikat) ?></span>
                    <span class="percentage-text">
                        <?= number_format($persentase, 2, ',', '.') ?>% dari skala 4,00
                    </span>
                </div>

                <div
                    class="progress"
                    role="progressbar"
                    aria-label="Persentase IPK"
                    aria-valuenow="<?= $persentase ?>"
                    aria-valuemin="0"
                    aria-valuemax="100"
                >
                    <span></span>
                </div>
            </section>

            <div class="note">
                <div class="note-icon">i</div>
                <div>
                    <strong>Tentang profil ini</strong>
                    <p>
                        Halaman ini menampilkan identitas dan informasi akademik
                        mahasiswa yang dikelola menggunakan PHP.
                    </p>
                </div>
            </div>

            <footer>
                © <?= date('Y') ?> Habibi Profile · Dibuat dengan PHP & CSS
            </footer>
        </section>
    </main>
</div>
</body>
</html>
