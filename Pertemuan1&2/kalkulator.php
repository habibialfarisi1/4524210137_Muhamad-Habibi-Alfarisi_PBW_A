```php
<?php
// kalkulator.php

$hasil = null;
$pesan = '';
$a = '';
$b = '';
$operator = '+';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $aInput = trim((string) ($_POST['a'] ?? ''));
    $bInput = trim((string) ($_POST['b'] ?? ''));
    $operatorInput = (string) ($_POST['operator'] ?? '+');

    $a = $aInput;
    $b = $bInput;

    if (
        $aInput === '' ||
        $bInput === '' ||
        !is_numeric($aInput) ||
        !is_numeric($bInput)
    ) {
        $pesan = 'Masukkan dua angka yang valid.';
    } elseif (!in_array($operatorInput, ['+', '-', '*', '/'], true)) {
        $pesan = 'Operator tidak valid.';
    } else {
        $aAngka = (float) $aInput;
        $bAngka = (float) $bInput;
        $operator = $operatorInput;

        switch ($operator) {
            case '+':
                $hasil = $aAngka + $bAngka;
                break;

            case '-':
                $hasil = $aAngka - $bAngka;
                break;

            case '*':
                $hasil = $aAngka * $bAngka;
                break;

            case '/':
                if ($bAngka == 0.0) {
                    $pesan = 'Tidak dapat membagi angka dengan nol.';
                } else {
                    $hasil = $aAngka / $bAngka;
                }
                break;
        }
    }
}

function e(mixed $nilai): string
{
    return htmlspecialchars(
        (string) $nilai,
        ENT_QUOTES,
        'UTF-8'
    );
}

function formatHasil(float $nilai): string
{
    if (!is_finite($nilai)) {
        return 'Hasil di luar jangkauan.';
    }

    return rtrim(
        rtrim(number_format($nilai, 8, '.', ''), '0'),
        '.'
    );
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kalkulator | Habibi</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            padding: 30px 16px;
            display: grid;
            place-items: center;
            font-family: "Segoe UI", Arial, sans-serif;
            color: #252525;
            background: #f1f0ed;
        }

        .calculator {
            width: min(100%, 430px);
            overflow: hidden;
            border-radius: 25px;
            background: #ffffff;
            box-shadow: 0 22px 65px rgba(35, 32, 25, 0.12);
        }

        .top {
            padding: 28px 28px 24px;
            background: #252525;
            color: #ffffff;
        }

        .top-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 12px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 12px;
            font-weight: 800;
            letter-spacing: 1.5px;
        }

        .brand-icon {
            display: grid;
            place-items: center;
            width: 38px;
            height: 38px;
            border-radius: 12px;
            background: #ff9f43;
            color: #252525;
            font-size: 23px;
            font-weight: 900;
        }

        .version {
            color: #b9b9b9;
            font-size: 11px;
        }

        .eyebrow {
            margin: 30px 0 8px;
            color: #ffad5b;
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        h1 {
            margin: 0;
            font-size: 30px;
            letter-spacing: -1px;
        }

        .subtitle {
            margin: 10px 0 0;
            color: #c4c4c4;
            font-size: 13px;
            line-height: 1.7;
        }

        .body-content {
            padding: 26px 28px 28px;
        }

        .section-heading {
            margin: 0 0 18px;
            color: #777777;
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 1.5px;
            text-transform: uppercase;
        }

        label {
            display: block;
            margin: 17px 0 9px;
            font-size: 13px;
            font-weight: 700;
        }

        input,
        select {
            width: 100%;
            min-height: 51px;
            padding: 13px 14px;
            border: 1px solid #e4e1db;
            border-radius: 12px;
            outline: none;
            background: #faf9f6;
            color: #252525;
            font: inherit;
            transition: border-color .2s, box-shadow .2s;
        }

        input:focus,
        select:focus {
            border-color: #ff9f43;
            box-shadow: 0 0 0 3px rgba(255, 159, 67, .15);
        }

        .operator-heading {
            margin: 24px 0 12px;
            font-size: 13px;
            font-weight: 700;
        }

        .operators {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 9px;
        }

        .operator-option {
            position: relative;
        }

        .operator-option input {
            position: absolute;
            width: 1px;
            height: 1px;
            opacity: 0;
        }

        .operator-option span {
            display: grid;
            place-items: center;
            min-height: 49px;
            border: 1px solid #e7e3dc;
            border-radius: 12px;
            background: #f7f6f2;
            color: #444444;
            font-size: 21px;
            font-weight: 700;
            cursor: pointer;
            transition: .2s;
        }

        .operator-option input:checked + span {
            border-color: #ff9f43;
            background: #ff9f43;
            color: #252525;
        }

        .operator-option input:focus-visible + span {
            outline: 3px solid #ffd1a0;
            outline-offset: 2px;
        }

        .operator-option span:hover {
            border-color: #ff9f43;
        }

        .calculate {
            width: 100%;
            min-height: 53px;
            margin-top: 25px;
            padding: 14px;
            border: 0;
            border-radius: 13px;
            background: #ff9f43;
            color: #252525;
            font: inherit;
            font-weight: 800;
            cursor: pointer;
            transition: transform .2s, background .2s;
        }

        .calculate:hover {
            transform: translateY(-2px);
            background: #ffb15f;
        }

        .result {
            margin-top: 22px;
            padding: 22px;
            border-radius: 17px;
            background: #252525;
            color: #ffffff;
            overflow-wrap: anywhere;
        }

        .result-label {
            color: #bdbdbd;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 1.5px;
            text-transform: uppercase;
        }

        .result-expression {
            margin-top: 13px;
            color: #d0d0d0;
            font-size: 14px;
        }

        .result-value {
            margin-top: 7px;
            color: #ffad5b;
            font-size: clamp(28px, 8vw, 38px);
            font-weight: 800;
            letter-spacing: -1px;
        }

        .error {
            margin-top: 20px;
            padding: 15px;
            border: 1px solid #f1c4bb;
            border-radius: 12px;
            background: #fff1ed;
            color: #a33c2c;
            font-size: 13px;
            line-height: 1.6;
        }

        .history-note {
            margin-top: 22px;
            padding: 14px;
            border-radius: 12px;
            background: #f6f4ef;
            color: #77736b;
            font-size: 12px;
            line-height: 1.7;
        }

        .history-note strong {
            color: #333333;
        }

        footer {
            padding: 18px 10px 0;
            color: #92908b;
            text-align: center;
            font-size: 11px;
            line-height: 1.8;
        }

        @media (max-width: 380px) {
            .top,
            .body-content {
                padding-right: 20px;
                padding-left: 20px;
            }

            .version {
                display: none;
            }

            .operators {
                gap: 6px;
            }
        }
    </style>
</head>

<body>
<main class="calculator">

    <header class="top">
        <div class="top-row">
            <div class="brand">
                <div class="brand-icon">±</div>
                <span>HABIBI CALC</span>
            </div>

            <span class="version">PHP PROJECT / 01</span>
        </div>

        <p class="eyebrow">Simple Math Tool</p>
        <h1>Kalkulator Sederhana</h1>

        <p class="subtitle">
            Hitung angka dengan mudah melalui empat
            operasi matematika dasar.
        </p>
    </header>

    <section class="body-content">
        <h2 class="section-heading">Input Perhitungan</h2>

        <form method="post" action="">
            <label for="a">Angka pertama</label>

            <input
                id="a"
                type="number"
                step="any"
                name="a"
                value="<?= e($a) ?>"
                placeholder="Masukkan angka..."
                required
            >

            <p class="operator-heading">Pilih operasi</p>

            <div class="operators">
                <?php
                $daftarOperator = [
                    '+' => '+',
                    '-' => '−',
                    '*' => '×',
                    '/' => '÷'
                ];
                ?>

                <?php foreach ($daftarOperator as $simbol => $tampilan): ?>
                    <label class="operator-option">
                        <input
                            type="radio"
                            name="operator"
                            value="<?= e($simbol) ?>"
                            <?= $operator === $simbol ? 'checked' : '' ?>
                        >
                        <span><?= e($tampilan) ?></span>
                    </label>
                <?php endforeach; ?>
            </div>

            <label for="b">Angka kedua</label>

            <input
                id="b"
                type="number"
                step="any"
                name="b"
                value="<?= e($b) ?>"
                placeholder="Masukkan angka..."
                required
            >

            <button class="calculate" type="submit">
                Hitung Hasil &nbsp; →
            </button>
        </form>

        <?php if ($pesan !== ''): ?>

            <div class="error" role="alert">
                ⚠ <?= e($pesan) ?>
            </div>

        <?php elseif ($hasil !== null): ?>

            <div class="result" aria-live="polite">
                <div class="result-label">Hasil Perhitungan</div>

                <div class="result-expression">
                    <?= e($a) ?>
                    <?= e(
                        $operator === '*' ? '×' :
                        ($operator === '/' ? '÷' : $operator)
                    ) ?>
                    <?= e($b) ?> =
                </div>

                <div class="result-value">
                    <?= e(formatHasil($hasil)) ?>
                </div>
            </div>

        <?php endif; ?>

        <div class="history-note">
            <strong>Informasi</strong><br>
            Kalkulator mendukung penjumlahan, pengurangan,
            perkalian, dan pembagian. Pembagian dengan nol
            akan ditolak.
        </div>

        <footer>
            © <?= date('Y') ?> Habibi Calc<br>
            Built with PHP & CSS
        </footer>
    </section>

</main>
</body>
</html>
```