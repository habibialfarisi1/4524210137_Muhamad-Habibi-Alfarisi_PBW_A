# LaraPress — Laravel Web Praktikum

**Muhamad Habibi Alfarisi**  
**NPM:** 4524210137  
**Praktikum:** Pertemuan 3  
**Mata Kuliah:** Pemrograman Berbasis Web

---

## 1. Deskripsi Proyek

LaraPress merupakan proyek website sederhana yang dikembangkan menggunakan framework Laravel. Proyek ini dibuat sebagai latihan awal untuk memahami cara kerja routing, pengelolaan halaman menggunakan Blade, dan proses menampilkan respons web melalui browser.

Website memiliki navigasi yang menghubungkan beberapa halaman sehingga pengguna dapat berpindah dari satu bagian ke bagian lainnya dengan mudah.

## 2. Halaman Website

### Beranda

Halaman utama menjadi titik awal ketika pengguna membuka website. Bagian ini menampilkan pengenalan LaraPress, deskripsi singkat, serta navigasi menuju halaman lainnya.

### Tentang Kami

Halaman ini menjelaskan latar belakang dan tujuan pengembangan LaraPress sebagai proyek pembelajaran pembuatan aplikasi web.

### Kontak

Halaman kontak menyediakan informasi komunikasi contoh, seperti alamat email, nomor telepon, dan lokasi. Halaman ini juga menjadi penerapan tugas mandiri pada praktikum.

## 3. Teknologi Pengembangan

- **Laravel 12** — framework utama aplikasi.
- **PHP 8.2 atau lebih baru** — bahasa pemrograman sisi server.
- **Blade** — sistem template untuk menyusun halaman.
- **HTML dan CSS** — membangun struktur serta tampilan website.
- **Composer** — mengelola dependensi PHP.
- **XAMPP** — lingkungan pengembangan lokal.
- **Visual Studio Code** — editor untuk menulis dan mengelola kode.

## 4. Penerapan Konsep Laravel

### Routing

Routing digunakan untuk menghubungkan alamat URL dengan halaman yang sesuai. Rute web didefinisikan pada file `routes/web.php`.

Contoh rute yang digunakan:

```php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tentang-kami', function () {
    return view('about');
});

Route::get('/kontak', function () {
    return view('contact');
});
```

Nama view di atas merupakan contoh. Pastikan nama file Blade sesuai dengan proyek yang sebenarnya.

### Blade View

File Blade digunakan untuk menampilkan konten halaman. Pada proyek ini, halaman diletakkan di direktori `resources/views/`.

Contoh pemetaan halaman:

| URL | View |
|---|---|
| `/` | `welcome.blade.php` |
| `/tentang-kami` | `about.blade.php` |
| `/kontak` | `contact.blade.php` |

### Navigasi Ant halaman

Setiap halaman menyediakan tautan navigasi agar pengguna dapat berpindah halaman tanpa harus mengetik URL secara manual.

## 5. Struktur Direktori

```text
LaraPress/
├── app/
├── bootstrap/
├── config/
├── database/
├── public/
├── resources/
│   └── views/
│       ├── welcome.blade.php
│       ├── about.blade.php
│       └── contact.blade.php
├── routes/
│   └── web.php
├── storage/
├── tests/
├── .env.example
├── artisan
├── composer.json
└── README.md
```

Struktur ini merupakan gambaran direktori utama Laravel. File tambahan dan nama view dapat berbeda mengikuti implementasi proyek.

## 6. Menjalankan Proyek

Pastikan PHP, Composer, dan dependensi Laravel sudah tersedia.

Buka terminal pada direktori utama proyek, kemudian jalankan:

```bash
composer install
```

Jika file `.env` belum tersedia, salin `.env.example` menjadi `.env`, lalu buat application key:

```bash
php artisan key:generate
```

Setelah konfigurasi selesai, jalankan server pengembangan:

```bash
php artisan serve
```

Buka alamat berikut pada browser:

```text
http://127.0.0.1:8000
```

Halaman lainnya dapat diuji melalui:

```text
http://127.0.0.1:8000/tentang-kami
http://127.0.0.1:8000/kontak
```

## 7. Dokumentasi Tampilan

Berikut dokumentasi antarmuka LaraPress.

### Beranda

![Tampilan Beranda LaraPress1](screenshots/larapress-beranda.png)

### Tentang Kami

![Tampilan Tentang Kami1](screenshots/larapress-tentang.png)

### Kontak

![Tampilan Kontak LaraPress1](screenshots/larapress-kontak.png)

Simpan screenshot ke folder `screenshots` pada direktori yang sama dengan README. Sesuaikan nama file pada Markdown apabila nama gambar yang digunakan berbeda.

## 8. Pengujian Aplikasi

Pengujian dilakukan untuk memeriksa fungsi dasar website.

| Skenario | Hasil yang diharapkan |
|---|---|
| Membuka `/` | Halaman Beranda tampil |
| Membuka `/tentang-kami` | Halaman Tentang Kami tampil |
| Membuka `/kontak` | Halaman Kontak tampil |
| Mengeklik menu navigasi | Pengguna diarahkan ke halaman tujuan |
| Menggunakan tautan kembali | Pengguna dapat kembali ke Beranda |

## 9. Hasil Pembelajaran

Melalui praktikum ini, konsep dasar Laravel mulai diterapkan dalam bentuk website dengan beberapa halaman yang saling terhubung. Praktikum membantu memahami hubungan antara request dari browser, pencocokan rute, pemanggilan view, dan respons yang dikirimkan kembali kepada pengguna.

## 10. Penutup

LaraPress menjadi latihan awal untuk membangun website menggunakan Laravel. Dengan membuat halaman Beranda, Tentang Kami, dan Kontak, konsep routing dan Blade dapat dipraktikkan secara langsung. Struktur ini juga dapat dikembangkan lebih lanjut menjadi aplikasi blog sederhana dengan fitur tambahan.

---

**Disusun oleh:** Muhamad Habibi Alfarisi  
**NPM:** 4524210137  
**Program Studi:** Teknik Informatika
