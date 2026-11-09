# LAPORAN PRAKTIKUM PEMROGRAMAN BERBASIS WEB

## Instalasi, Konfigurasi, dan Halaman Pertama Laravel

### Identitas Mahasiswa

| Keterangan | Informasi |
|---|---|
| Nama | Muhamad Habibi Alfarisi |
| NPM | 4524210137 |
| Program Studi | Teknik Informatika |
| Mata Kuliah | Praktikum Pemrograman Berbasis Web |
| Pertemuan | 3 |
| Judul Praktikum | Instalasi, Konfigurasi, dan Halaman Pertama Laravel |
| Nama Proyek | LaraPress |
| Framework | Laravel 12 |

---

## 1. Deskripsi Praktikum

Pada praktikum ini dilakukan proses instalasi, konfigurasi, dan pembuatan halaman pertama menggunakan framework Laravel 12. Praktikum bertujuan untuk memahami dasar pengembangan aplikasi web menggunakan Laravel, mulai dari persiapan lingkungan pengembangan, pembuatan project, pengenalan struktur folder, hingga pembuatan beberapa halaman website.

Project yang dibuat bernama **LaraPress**, yaitu sebuah website sederhana yang memiliki tiga halaman utama, yaitu Beranda, Tentang Kami, dan Kontak.

Website LaraPress dirancang menggunakan tampilan modern dengan kombinasi warna biru, ungu, dan putih. Setiap halaman memiliki fungsi dan informasi yang berbeda, tetapi tetap menggunakan navigasi yang sama sehingga pengguna dapat berpindah halaman dengan mudah.

Melalui praktikum ini, mahasiswa mempelajari penggunaan Composer untuk instalasi Laravel, Artisan untuk menjalankan server lokal, Route untuk mengatur alamat halaman, serta Blade sebagai template engine untuk menampilkan halaman website.

## 2. Tujuan Praktikum

Tujuan dari praktikum ini adalah:

1. Memahami proses instalasi framework Laravel 12.
2. Mengetahui persyaratan dan perangkat lunak yang dibutuhkan untuk menjalankan Laravel.
3. Memahami penggunaan Composer sebagai dependency manager.
4. Mengetahui cara menjalankan server Laravel menggunakan perintah Artisan.
5. Memahami struktur direktori dan file pada project Laravel.
6. Memahami konsep Route dan View dalam Laravel.
7. Membuat halaman website sederhana menggunakan Laravel.
8. Menghubungkan beberapa halaman website melalui navigasi.
9. Memahami alur kerja Laravel dari Request, Route, View, hingga Response.

## 3. Fitur dan Halaman Website

Website LaraPress memiliki tiga halaman utama dengan fungsi yang berbeda.

### A. Halaman Beranda (Home)

Halaman Beranda merupakan halaman utama yang pertama kali ditampilkan ketika pengguna membuka website LaraPress.

Halaman ini menggunakan desain hero section dengan latar belakang gradasi warna biru dan ungu. Tujuannya adalah memberikan kesan modern, menarik, dan profesional kepada pengunjung.

**Komponen dan fitur pada halaman Beranda:**

1. **Navigation Bar (Navbar)**

   Pada bagian atas halaman terdapat navbar yang menampilkan logo LaraPress dan tiga menu navigasi, yaitu Beranda, Tentang Kami, dan Kontak. Menu Beranda diberikan penanda warna biru muda untuk menunjukkan halaman yang sedang aktif.

2. **Welcome Label**

   Terdapat tulisan "Welcome to LaraPress" sebagai sambutan kepada pengunjung yang membuka website.

3. **Hero Section**

   Bagian utama halaman menampilkan judul besar:

   "Membangun Pengalaman Digital yang Lebih Baik."

   Judul ini menjadi pesan utama yang ingin disampaikan oleh LaraPress, yaitu menghadirkan pengalaman digital yang lebih baik bagi pengguna.

4. **Deskripsi Website**

   Di bawah judul terdapat penjelasan singkat mengenai LaraPress yang mengutamakan kemudahan, kecepatan, keamanan, dan pengalaman pengguna dalam menghadirkan solusi digital modern.

5. **Tombol Navigasi**

   Terdapat dua tombol utama:
   - **Jelajahi LaraPress**, sebagai tombol ajakan untuk mengenal lebih jauh mengenai LaraPress.
   - **Hubungi Kami**, sebagai akses untuk menuju informasi kontak.

6. **Kartu Statistik**

   Pada bagian bawah hero section terdapat empat kartu informasi yang menampilkan:
   - 1K+ Pengguna.
   - 50+ Project Selesai.
   - 99% Kepuasan.
   - 24/7 Dukungan.

   Kartu statistik tersebut berfungsi sebagai elemen informasi visual untuk memperkuat tampilan halaman Beranda.

### B. Halaman Tentang Kami (About Us)

Halaman Tentang Kami merupakan halaman yang memberikan informasi mengenai cerita, latar belakang, dan tujuan dari LaraPress.

Berbeda dengan halaman Beranda yang menggunakan latar belakang gradasi, halaman Tentang Kami menggunakan latar belakang putih dengan tata letak dua kolom agar informasi lebih nyaman dibaca.

**Komponen dan fitur pada halaman Tentang Kami:**

1. **Navigation Bar**

   Bagian atas halaman menampilkan logo LaraPress dan tiga menu navigasi. Menu Tentang Kami ditandai dengan warna biru muda sebagai indikator halaman aktif.

2. **Bagian Visual**

   Pada sisi kiri terdapat area visual berbentuk persegi panjang dengan sudut membulat dan kombinasi gradasi warna. Bagian ini berfungsi sebagai elemen pendukung desain halaman.

3. **Label Cerita Kami**

   Terdapat tulisan "CERITA KAMI" yang menjadi penanda bagian informasi mengenai LaraPress.

4. **Judul Utama**

   Halaman ini menampilkan judul:

   "Sebuah Ide yang Berkembang Menjadi Perjalanan."

   Judul tersebut menggambarkan bagaimana sebuah gagasan sederhana dapat berkembang menjadi sebuah proyek digital.

5. **Penjelasan Latar Belakang**

   Terdapat beberapa paragraf yang menjelaskan bahwa LaraPress berawal dari gagasan untuk membuat teknologi lebih mudah digunakan dan lebih dekat dengan kebutuhan manusia.

   Penjelasan selanjutnya menggambarkan semangat untuk terus belajar, melakukan eksperimen, serta mengembangkan solusi digital yang mengutamakan pengalaman pengguna.

   Selain itu, dijelaskan bahwa teknologi yang baik tidak hanya dinilai dari kecanggihannya, tetapi juga dari manfaat yang diberikan kepada manusia.

6. **Kutipan Penutup**

   Pada bagian akhir terdapat kutipan:

   "Teknologi terbaik adalah teknologi yang membuat kehidupan menjadi lebih mudah."

   Kutipan ini menjadi pesan utama yang menggambarkan filosofi LaraPress.

### C. Halaman Kontak (Contact)

Halaman Kontak merupakan halaman yang digunakan untuk memberikan informasi mengenai cara menghubungi LaraPress.

Halaman ini menggunakan latar belakang gradasi biru dan ungu, dengan tiga kartu informasi berwarna putih yang disusun secara horizontal.

**Komponen dan fitur pada halaman Kontak:**

1. **Navigation Bar**

   Menampilkan logo LaraPress serta menu Beranda, Tentang Kami, dan Kontak. Menu Kontak diberikan penanda warna biru muda untuk menunjukkan halaman yang sedang aktif.

2. **Judul Halaman**

   Bagian utama menampilkan tulisan "Mari Terhubung" sebagai ajakan kepada pengunjung untuk berkomunikasi dengan LaraPress.

3. **Deskripsi Kontak**

   Di bawah judul terdapat kalimat pengantar yang menjelaskan bahwa LaraPress terbuka terhadap pertanyaan, ide, maupun permintaan informasi lebih lanjut.

4. **Kartu Informasi Email**

   Menampilkan ikon email, judul Email, dan alamat:

   `info@larapress.test`

   Bagian ini memberikan informasi alamat email yang ditampilkan pada website.

5. **Kartu Informasi Telepon**

   Menampilkan ikon telepon, judul Telepon, dan nomor:

   `+62 812-3456-7890`

   Bagian ini memberikan informasi nomor telepon yang ditampilkan pada website.

6. **Kartu Informasi Lokasi**

   Menampilkan ikon lokasi, judul Lokasi, dan keterangan:

   `Jakarta, Indonesia`

   Bagian ini memberikan informasi lokasi LaraPress.

Ketiga kartu tersebut menggunakan latar putih, sudut membulat, dan bayangan lembut agar informasi mudah ditemukan serta dibaca oleh pengunjung.

## 4. Teknologi dan Perangkat yang Digunakan

Berikut teknologi dan perangkat yang digunakan dalam praktikum:

| Teknologi | Keterangan |
|---|---|
| Laravel 12 | Framework PHP untuk membangun aplikasi web. |
| PHP 8.2+ | Bahasa pemrograman utama yang digunakan Laravel. |
| Composer | Dependency manager untuk menginstal Laravel dan library pendukung. |
| Blade | Template engine Laravel untuk mengelola tampilan halaman. |
| HTML | Digunakan untuk menyusun struktur halaman website. |
| CSS | Digunakan untuk mengatur desain, warna, tata letak, dan tampilan website. |
| Artisan | Command Line Interface bawaan Laravel untuk menjalankan perintah aplikasi. |
| XAMPP / Laragon | Lingkungan server lokal untuk pengembangan aplikasi. |
| Visual Studio Code | Code editor untuk menulis dan mengelola kode program. |
| Web Browser | Digunakan untuk menampilkan dan menguji website. |

## 5. Persyaratan Sistem

Sebelum melakukan instalasi Laravel, terdapat beberapa kebutuhan perangkat lunak yang perlu dipersiapkan:

- PHP versi 8.2 atau lebih baru.
- Laravel versi 12.
- Composer versi 2.x.
- XAMPP atau Laragon.
- Visual Studio Code.
- Terminal atau Command Prompt.
- Browser seperti Google Chrome atau Mozilla Firefox.

## 6. Instalasi dan Konfigurasi Laravel

Berikut tahapan instalasi dan konfigurasi Laravel 12.

### A. Memeriksa PHP

Buka terminal atau Command Prompt, kemudian jalankan perintah:

```bash
php -v
```

Perintah ini digunakan untuk mengetahui versi PHP yang sudah terinstal pada komputer.

### B. Memeriksa Composer

Jalankan perintah:

```bash
composer -V
```

Perintah tersebut digunakan untuk memastikan Composer sudah terinstal dan dapat digunakan.

### C. Masuk ke Direktori Project

Jika menggunakan XAMPP:

```bash
cd C:\xampp\htdocs
```

Jika menggunakan Laragon:

```bash
cd C:\laragon\www
```

### D. Membuat Project Laravel 12

Jalankan perintah berikut:

```bash
composer create-project laravel/laravel:^12.0 LaraPress
```

Perintah tersebut digunakan untuk membuat project baru dengan nama LaraPress menggunakan Laravel versi 12.

Composer akan mengunduh Laravel beserta seluruh dependensi yang dibutuhkan.

### E. Masuk ke Folder Project

Setelah proses instalasi selesai, masuk ke folder project:

```bash
cd LaraPress
```

### F. Membuka Project di Visual Studio Code

Jalankan perintah:

```bash
code .
```

Perintah tersebut digunakan untuk membuka folder project Laravel melalui Visual Studio Code.

## 7. Menjalankan Project Laravel

Setelah proses instalasi selesai, project dapat dijalankan menggunakan perintah Artisan.

```bash
php artisan serve
```

Jika server berhasil dijalankan, terminal akan menampilkan alamat lokal.

Buka browser dan akses:

```text
http://127.0.0.1:8000
```

Untuk mengakses halaman lainnya:

**Halaman Beranda:**
```text
http://127.0.0.1:8000/
```

**Halaman Tentang Kami:**
```text
http://127.0.0.1:8000/tentang-kami
```

**Halaman Kontak:**
```text
http://127.0.0.1:8000/kontak
```

Pastikan server Laravel tetap berjalan ketika website sedang dibuka melalui browser.

## 8. Struktur Direktori Laravel

Laravel memiliki struktur direktori yang digunakan untuk mengatur berbagai bagian aplikasi.

Berikut beberapa direktori penting:

| Folder / File | Fungsi |
|---|---|
| `app/` | Menyimpan kode utama aplikasi seperti Model dan Controller. |
| `bootstrap/` | Menyimpan file untuk proses awal aplikasi Laravel. |
| `config/` | Menyimpan konfigurasi aplikasi. |
| `database/` | Menyimpan Migration, Factory, dan Seeder. |
| `public/` | Menyimpan file publik dan menjadi titik masuk aplikasi melalui `index.php`. |
| `resources/` | Menyimpan file View, aset, dan bahasa. |
| `resources/views/` | Menyimpan file tampilan Blade. |
| `routes/` | Menyimpan definisi URL atau Route aplikasi. |
| `routes/web.php` | Mengatur rute untuk halaman web. |
| `storage/` | Menyimpan file cache, log, dan file aplikasi lainnya. |
| `.env` | Menyimpan konfigurasi lingkungan aplikasi. |

## 9. Konsep Dasar Laravel

### A. Route

Route merupakan bagian Laravel yang digunakan untuk menentukan alamat URL dan mengatur halaman yang akan ditampilkan ketika pengguna mengakses alamat tersebut.

Pada project LaraPress, Route didefinisikan melalui file:

`routes/web.php`

Contoh konfigurasi Route:

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

Kode tersebut merupakan contoh pemetaan URL ke halaman View. Nama file View harus disesuaikan dengan file Blade yang tersedia pada project.

### B. View dan Blade

View merupakan bagian yang bertanggung jawab untuk menampilkan halaman kepada pengguna.

Laravel menggunakan Blade sebagai template engine untuk mengelola tampilan website.

Contoh lokasi file View:

```text
resources/
└── views/
    ├── welcome.blade.php
    ├── about.blade.php
    └── contact.blade.php
```

File View digunakan untuk menyusun tampilan Beranda, Tentang Kami, dan Kontak.

### C. Navigasi Antarhalaman

Navigasi digunakan untuk mempermudah pengguna berpindah dari satu halaman ke halaman lainnya.

Contoh penggunaan HTML:

```html
<a href="/">Beranda</a>
<a href="/tentang-kami">Tentang Kami</a>
<a href="/kontak">Kontak</a>
```

Dengan adanya navigasi, pengguna dapat membuka halaman yang diinginkan melalui menu yang tersedia pada website.

### D. Alur Kerja Laravel

Secara umum, alur kerja Laravel dapat dijelaskan sebagai berikut:

1. **Request:** pengguna membuka alamat website melalui browser.
2. **Entry Point:** permintaan masuk melalui `public/index.php`.
3. **Route:** Laravel memeriksa URL yang diminta dan mencocokkannya dengan Route.
4. **View:** Route menentukan tampilan yang akan ditampilkan.
5. **Rendering:** Laravel memproses file Blade menjadi HTML.
6. **Response:** hasil halaman dikirimkan kembali kepada browser untuk ditampilkan kepada pengguna.

Alur tersebut dikenal sebagai:

**Request → Route → View → Response**

##  10. Dokumentasi Tampilan Website

Berikut dokumentasi hasil implementasi website LaraPress berdasarkan tiga halaman yang telah dibuat.

### A. Tampilan Halaman Beranda

![Halaman Beranda LaraPress](docs/images/larapress-beranda.png)

**Penjelasan Tampilan:**

Pada gambar di atas terlihat halaman utama website LaraPress. Bagian paling atas menampilkan navbar dengan logo LaraPress pada sisi kiri dan tiga menu navigasi pada sisi kanan, yaitu Beranda, Tentang Kami, dan Kontak.

Menu Beranda ditandai dengan warna biru muda sebagai penanda bahwa pengguna sedang berada pada halaman utama.

Bagian utama halaman menggunakan desain hero section dengan latar belakang gradasi warna biru gelap, biru terang, dan ungu. Pada bagian ini terdapat tulisan "Welcome to LaraPress" sebagai sambutan kepada pengunjung.

Di bawahnya terdapat judul utama "Membangun Pengalaman Digital yang Lebih Baik." dengan ukuran tulisan besar dan beberapa bagian teks menggunakan warna aksen biru muda.

Selanjutnya terdapat deskripsi singkat mengenai tujuan LaraPress dalam menghadirkan solusi digital modern yang mengutamakan kemudahan, kecepatan, keamanan, dan pengalaman pengguna.

Terdapat dua tombol utama, yaitu "Jelajahi LaraPress" dan "Hubungi Kami", yang berfungsi sebagai elemen navigasi untuk mengarahkan pengunjung ke informasi lainnya.

Pada bagian bawah halaman terdapat empat kartu statistik yang menampilkan informasi 1K+ Pengguna, 50+ Project Selesai, 99% Kepuasan, dan 24/7 Dukungan.

Secara keseluruhan, halaman Beranda berfungsi sebagai halaman pengenalan utama LaraPress dengan tampilan modern, informatif, dan mudah dipahami.

### B. Tampilan Halaman Tentang Kami

![Halaman Tentang Kami LaraPress](docs/images/larapress-tentang-kami.png)

**Penjelasan Tampilan:**

Pada gambar di atas terlihat halaman Tentang Kami yang digunakan untuk memberikan informasi mengenai cerita dan latar belakang LaraPress.

Pada bagian atas terdapat navbar yang sama seperti halaman Beranda. Perbedaannya terletak pada menu Tentang Kami yang diberikan penanda warna biru muda untuk menunjukkan halaman yang sedang aktif.

Bagian utama halaman menggunakan latar belakang putih dengan tata letak dua kolom.

Pada sisi kiri terdapat area visual berbentuk persegi panjang dengan sudut membulat dan gradasi warna lembut. Area tersebut berfungsi sebagai elemen pendukung desain agar halaman tidak hanya berisi teks.

Pada sisi kanan terdapat label "CERITA KAMI" yang menjadi penanda bagian informasi mengenai LaraPress.

Di bawah label tersebut terdapat judul "Sebuah Ide yang Berkembang Menjadi Perjalanan." yang menjelaskan bagaimana LaraPress berawal dari sebuah gagasan sederhana dan berkembang menjadi proyek digital.

Selanjutnya terdapat beberapa paragraf yang menjelaskan pentingnya teknologi yang mudah digunakan, semangat untuk terus belajar dan bereksperimen, serta bagaimana teknologi seharusnya memberikan manfaat bagi manusia.

Pada bagian akhir terdapat kutipan "Teknologi terbaik adalah teknologi yang membuat kehidupan menjadi lebih mudah."

Secara keseluruhan, halaman Tentang Kami berfungsi untuk memperkenalkan latar belakang, gagasan, dan nilai yang ingin disampaikan melalui LaraPress.

### C. Tampilan Halaman Kontak

![Halaman Kontak LaraPress](docs/images/larapress-kontak.png)

**Penjelasan Tampilan:**

Pada gambar di atas terlihat halaman Kontak yang digunakan untuk menampilkan informasi mengenai cara menghubungi LaraPress.

Pada bagian paling atas terdapat navbar dengan logo LaraPress dan tiga menu navigasi. Menu Kontak diberikan penanda warna biru muda untuk menunjukkan bahwa pengguna sedang membuka halaman Kontak.

Bagian utama halaman menggunakan latar belakang gradasi warna biru hingga ungu.

Pada bagian tengah terdapat judul utama "Mari Terhubung" yang berfungsi sebagai ajakan kepada pengunjung untuk berkomunikasi dengan LaraPress.

Di bawah judul terdapat deskripsi singkat yang menjelaskan bahwa LaraPress terbuka untuk menerima pertanyaan, ide, maupun permintaan informasi lebih lanjut.

Pada bagian bawah terdapat tiga kartu informasi yang disusun secara horizontal dengan latar belakang putih.

Ketiga kartu tersebut terdiri dari:

1. **Email**

   Menampilkan ikon email dan alamat `info@larapress.test` sebagai informasi alamat email LaraPress.

2. **Telepon**

   Menampilkan ikon telepon dan nomor `+62 812-3456-7890` sebagai informasi nomor telepon.

3. **Lokasi**

   Menampilkan ikon lokasi dan keterangan `Jakarta, Indonesia` sebagai informasi lokasi LaraPress.

Setiap kartu memiliki desain sudut membulat, ikon pada bagian atas, judul informasi, dan detail keterangan di bawahnya.

Secara keseluruhan, halaman Kontak berfungsi memberikan informasi kepada pengunjung agar dapat mengetahui saluran komunikasi yang tersedia pada website LaraPress.

## 11. Pengujian Website

Pengujian dilakukan untuk memastikan setiap halaman dapat diakses melalui browser dan navigasi berfungsi sesuai dengan alamat yang telah ditentukan.

| No. | Pengujian | Hasil yang Diharapkan |
|---|---|---|
| 1 | Membuka halaman utama `/` | Halaman Beranda tampil dengan benar. |
| 2 | Membuka `/tentang-kami` | Halaman Tentang Kami tampil dengan benar. |
| 3 | Membuka `/kontak` | Halaman Kontak tampil dengan benar. |
| 4 | Memilih menu Beranda | Pengguna diarahkan ke halaman Beranda. |
| 5 | Memilih menu Tentang Kami | Pengguna diarahkan ke halaman Tentang Kami. |
| 6 | Memilih menu Kontak | Pengguna diarahkan ke halaman Kontak. |
| 7 | Memeriksa isi halaman | Informasi dan elemen visual tampil sesuai halaman masing-masing. |

Pengujian tersebut merupakan skenario pemeriksaan berdasarkan fitur yang didokumentasikan. Hasil aktual perlu disesuaikan dengan proses pengujian saat aplikasi dijalankan.

## 12. Kesimpulan

Berdasarkan praktikum yang telah dilakukan, dapat disimpulkan bahwa Laravel 12 merupakan framework PHP yang memiliki struktur dan fitur untuk membantu proses pengembangan aplikasi web.

Melalui praktikum ini, mahasiswa mempelajari proses instalasi Laravel menggunakan Composer, menjalankan server lokal menggunakan perintah Artisan, memahami struktur direktori, serta mengenal penggunaan Route dan View dengan Blade.

Hasil implementasi praktikum berupa website LaraPress yang memiliki tiga halaman utama, yaitu Beranda, Tentang Kami, dan Kontak. Ketiga halaman tersebut memiliki tampilan dan fungsi yang berbeda serta saling terhubung melalui navigasi.

Dengan adanya praktikum ini, mahasiswa memperoleh pemahaman dasar mengenai cara kerja framework Laravel dan proses pembuatan halaman website menggunakan konsep Request, Route, View, dan Response.

---

<p align="center">
  <strong>Praktikum Pemrograman Berbasis Web</strong><br>
  Pertemuan 3 – Laravel 12<br><br>
  **Muhamad Habibi Alfarisi**<br>
  NPM: 4524210137<br>
  Program Studi Teknik Informatika
</p>
