# LAPORAN PRAKTIKUM PEMROGRAMAN BERBASIS WEB

## Implementasi Autentikasi Login dan Register Menggunakan Laravel Breeze

### Identitas Mahasiswa

| Keterangan | Informasi |
|---|---|
| Nama | Muhamad Habibi Alfarisi |
| NPM | 4524210137 |
| Program Studi | Teknik Informatika |
| Mata Kuliah | Praktikum Pemrograman Berbasis Web |
| Pertemuan | 4 |
| Judul Praktikum | Autentikasi Login |
| Nama Proyek | LaraPress |
| Framework | Laravel 12 |
| Paket Autentikasi | Laravel Breeze |

---

## 1. Deskripsi Praktikum

Pada praktikum pertemuan keempat ini, dilakukan pengembangan lanjutan terhadap proyek **LaraPress** yang telah dibuat pada praktikum sebelumnya. Jika pada pertemuan sebelumnya website LaraPress sudah memiliki halaman Beranda, Tentang Kami, dan Kontak, maka pada pertemuan ini dilakukan penambahan sistem autentikasi menggunakan Laravel Breeze.

Autentikasi merupakan proses untuk memverifikasi identitas pengguna sebelum diberikan akses ke dalam aplikasi. Dengan adanya sistem autentikasi, pengguna dapat membuat akun melalui halaman Register, masuk ke aplikasi melalui halaman Login, dan keluar dari akun menggunakan fitur Logout.

Dalam praktikum ini, Laravel Breeze digunakan untuk menyediakan berbagai kebutuhan autentikasi, seperti halaman Login, Register, pengelolaan Session, Cookie, Controller, serta Route yang berhubungan dengan proses autentikasi.

Selain itu, praktikum ini juga mempelajari cara mengamankan fitur CRUD (Create, Read, Update, Delete) menggunakan middleware `auth`. Dengan demikian, halaman yang berhubungan dengan pengelolaan postingan hanya dapat diakses oleh pengguna yang sudah berhasil melakukan Login.

## 2. Tujuan Praktikum

Tujuan dari praktikum ini adalah:

1. Memahami konsep dasar autentikasi dan otorisasi dalam aplikasi web.
2. Memahami proses registrasi dan login pengguna.
3. Mengetahui cara kerja password hashing untuk menjaga keamanan password.
4. Memahami fungsi Session dan Cookie dalam mempertahankan status login pengguna.
5. Menginstal dan mengonfigurasi Laravel Breeze pada proyek LaraPress.
6. Membuat sistem autentikasi menggunakan Laravel Breeze.
7. Memahami struktur file autentikasi yang dihasilkan oleh Laravel Breeze.
8. Mengenal fungsi Controller, Route, dan View dalam sistem autentikasi.
9. Mengamankan halaman dan fitur CRUD menggunakan middleware `auth`.
10. Menguji proses Register, Login, Logout, serta perlindungan halaman yang membutuhkan autentikasi.

## 3. Konsep Dasar Autentikasi

### A. Pengertian Autentikasi

Autentikasi adalah proses verifikasi identitas pengguna untuk memastikan bahwa seseorang benar-benar merupakan pengguna yang sah sebelum dapat mengakses aplikasi.

Pada aplikasi LaraPress, autentikasi dilakukan menggunakan email dan password. Pengguna harus memasukkan informasi tersebut melalui halaman Login untuk membuktikan identitasnya.

Autentikasi dapat dianalogikan seperti menunjukkan kartu mahasiswa ketika memasuki lingkungan kampus. Petugas akan memeriksa identitas untuk memastikan bahwa orang tersebut memang memiliki hak untuk masuk.

### B. Perbedaan Autentikasi dan Otorisasi

Autentikasi dan otorisasi merupakan dua konsep keamanan yang berbeda.

| Autentikasi | Otorisasi |
|---|---|
| Memastikan identitas pengguna. | Menentukan hak akses pengguna. |
| Menjawab pertanyaan "Siapa Anda?". | Menjawab pertanyaan "Apa yang boleh Anda lakukan?". |
| Menggunakan email dan password untuk Login. | Menggunakan aturan atau hak akses tertentu. |
| Memastikan pengguna telah terverifikasi. | Membatasi fitur sesuai izin pengguna. |

Contohnya, ketika pengguna berhasil Login ke LaraPress, berarti proses autentikasi berhasil. Namun, hak pengguna untuk membuat, mengedit, atau menghapus postingan merupakan bagian dari otorisasi.

### C. Alur Kerja Login

Proses login pada aplikasi LaraPress memiliki beberapa tahapan:

1. **Pengguna Mengirim Kredensial**

   Pengguna memasukkan email dan password pada halaman Login, kemudian menekan tombol Log In.

2. **Aplikasi Mencari Pengguna**

   Laravel menerima data yang dikirimkan dan mencari akun berdasarkan email yang dimasukkan.

3. **Verifikasi Password**

   Laravel memverifikasi password yang dimasukkan dengan password hash yang tersimpan di database.

4. **Autentikasi Berhasil**

   Jika email dan password sesuai, pengguna berhasil melewati proses autentikasi.

5. **Pembuatan Session**

   Laravel membuat Session untuk mengingat status pengguna yang sudah Login.

6. **Pengiriman Cookie**

   Browser menerima Cookie yang berisi identitas Session sehingga pengguna tidak perlu melakukan Login berulang kali pada setiap perpindahan halaman.

### D. Password Hashing

Password hashing merupakan proses mengubah password asli menjadi rangkaian karakter yang tidak dapat dikembalikan secara langsung ke bentuk password semula.

Laravel menggunakan algoritma hashing seperti Bcrypt dan Argon2 untuk melindungi password pengguna.

Dengan adanya hashing, password asli tidak disimpan secara langsung di database.

### E. CSRF Protection

CSRF (Cross-Site Request Forgery) merupakan jenis serangan yang berusaha membuat browser pengguna mengirimkan permintaan tanpa sepengetahuan pengguna.

Laravel menyediakan perlindungan CSRF untuk form yang menggunakan mekanisme tersebut.

Pada Blade, perlindungan CSRF dapat digunakan dengan:

```php
@csrf
```

Token tersebut membantu memastikan bahwa permintaan form berasal dari aplikasi yang benar.

### F. Peran Session dan Cookie

Session dan Cookie digunakan untuk mempertahankan status login pengguna.

Prosesnya adalah:

1. Setelah pengguna berhasil Login, Laravel membuat Session pada server.
2. Laravel mengirimkan identitas Session melalui Cookie ke browser.
3. Ketika pengguna membuka halaman lain, browser mengirimkan kembali Cookie tersebut.
4. Laravel memeriksa Session berdasarkan identitas yang diterima.
5. Jika Session masih valid, Laravel mengenali pengguna sebagai pengguna yang sudah Login.

Dengan demikian, pengguna dapat berpindah halaman tanpa harus memasukkan email dan password kembali.

##  4. Teknologi dan Perangkat yang Digunakan

| Teknologi | Fungsi |
|---|---|
| Laravel 12 | Framework utama untuk membangun aplikasi web LaraPress. |
| Laravel Breeze | Paket yang menyediakan sistem autentikasi. |
| PHP 8.2+ | Bahasa pemrograman utama Laravel. |
| Composer | Mengelola instalasi paket dan dependensi PHP. |
| Blade | Template engine untuk membuat halaman Login dan Register. |
| Tailwind CSS | Mengatur tampilan antarmuka autentikasi. |
| Alpine.js | Mendukung interaksi sederhana pada antarmuka. |
| Node.js dan NPM | Mengelola dependensi frontend dan kompilasi aset. |
| Artisan CLI | Menjalankan perintah pengelolaan aplikasi Laravel. |
| MySQL / Database | Menyimpan informasi akun pengguna. |
| Visual Studio Code | Editor untuk mengelola kode program. |
| Web Browser | Menampilkan dan menguji halaman aplikasi. |

##  5. Langkah-Langkah Instalasi Laravel Breeze

Pada praktikum ini, Laravel Breeze dipasang ke dalam proyek LaraPress yang sudah tersedia dari praktikum sebelumnya.

### A. Membuka Folder Proyek LaraPress

Buka terminal atau Command Prompt, kemudian masuk ke direktori proyek LaraPress.

Jika menggunakan Laragon:

```bash
cd C:\laragon\www\LaraPress
```

Jika menggunakan XAMPP:

```bash
cd C:\xampp\htdocs\LaraPress
```

Pastikan terminal sudah berada di dalam folder utama proyek Laravel.

### B. Menginstal Laravel Breeze

Jalankan perintah berikut:

```bash
composer require laravel/breeze --dev
```

Perintah tersebut digunakan untuk mengunduh Laravel Breeze beserta dependensi yang diperlukan.

### C. Menjalankan Instalasi Breeze

Setelah instalasi paket selesai, jalankan:

```bash
php artisan breeze:install
```

Pada proses instalasi, pilih konfigurasi sesuai petunjuk modul praktikum:

1. Pilih **Blade with Alpine** dengan pilihan nomor 0.
2. Pilih **No** untuk dukungan Dark Mode.
3. Pilih **Pest** sebagai testing framework jika belum memiliki pilihan lain.

Laravel Breeze kemudian akan menambahkan file yang diperlukan untuk sistem autentikasi.

### D. Menginstal Dependensi Frontend

Jalankan perintah:

```bash
npm install
```

Perintah ini digunakan untuk menginstal dependensi JavaScript yang dibutuhkan oleh proyek.

### E. Mengompilasi Aset Frontend

Jalankan:

```bash
npm run dev
```

Perintah tersebut digunakan untuk menjalankan proses kompilasi aset CSS dan JavaScript agar dapat digunakan oleh browser selama pengembangan.

Biarkan proses ini berjalan pada terminal tersendiri.

### F. Menjalankan Migrasi Database

Sebelum menjalankan migrasi, pastikan konfigurasi database pada file `.env` sudah sesuai dengan database yang digunakan.

Kemudian jalankan:

```bash
php artisan migrate
```

Migrasi digunakan untuk membuat atau memperbarui struktur tabel database yang dibutuhkan Laravel Breeze, termasuk kebutuhan autentikasi pengguna.

### G. Menjalankan Server Laravel

Buka terminal lain di dalam folder proyek LaraPress, kemudian jalankan:

```bash
php artisan serve
```

Setelah server berjalan, buka browser dan akses:

```text
http://127.0.0.1:8000
```

Laravel Breeze akan menyediakan halaman autentikasi seperti Login dan Register.

##  6. Struktur File Autentikasi Laravel Breeze

Setelah Laravel Breeze berhasil diinstal, terdapat beberapa file dan direktori baru yang perlu dipahami.

### A. File Routes

Lokasi:

```text
routes/
├── web.php
└── auth.php
```

File `web.php` digunakan untuk mengatur rute utama aplikasi LaraPress.

File `auth.php` berisi kumpulan rute yang berhubungan dengan autentikasi, seperti:

- Login.
- Register.
- Logout.
- Forgot Password.
- Reset Password.
- Verifikasi Email.

Pada file `web.php` terdapat pemanggilan file autentikasi:

```php
require __DIR__.'/auth.php';
```

Baris tersebut digunakan untuk mendaftarkan rute autentikasi yang telah disediakan oleh Laravel Breeze.

### B. Folder Controller

Lokasi:

```text
app/Http/Controllers/Auth/
```

Folder tersebut berisi Controller yang mengatur proses autentikasi.

Salah satu file penting adalah:

`AuthenticatedSessionController.php`

Controller tersebut menangani proses login dan logout pengguna.

### C. Folder View

Lokasi:

```text
resources/views/auth/
```

Folder ini menyimpan tampilan halaman autentikasi yang digunakan oleh Laravel Breeze.

Beberapa tampilan yang tersedia meliputi:

- `login.blade.php` untuk halaman Login.
- `register.blade.php` untuk halaman Register.
- `forgot-password.blade.php` untuk permintaan reset password.
- `reset-password.blade.php` untuk pengaturan ulang password.

File-file tersebut menggunakan Blade sebagai template engine.

##  7. Implementasi Sistem Autentikasi

### A. Halaman Login

Halaman Login digunakan oleh pengguna yang sudah memiliki akun untuk masuk ke dalam aplikasi LaraPress.

Pengguna harus memasukkan email dan password yang telah terdaftar.

Proses login dilakukan melalui sistem autentikasi Laravel Breeze yang memverifikasi kredensial pengguna.

### B. Halaman Register

Halaman Register digunakan untuk membuat akun pengguna baru.

Pengguna harus mengisi beberapa informasi, yaitu:

- Name: nama pengguna.
- Email: alamat email pengguna.
- Password: kata sandi akun.
- Confirm Password: konfirmasi kata sandi untuk memastikan kesesuaian password.

Setelah formulir dikirimkan dan validasi berhasil, Laravel akan memproses pembuatan akun baru dan menyimpan informasi pengguna ke database.

### C. Halaman Logout

Logout merupakan proses mengakhiri sesi login pengguna.

Ketika pengguna melakukan Logout, Laravel akan mengakhiri Session autentikasi sehingga pengguna tidak lagi dianggap sebagai pengguna yang sedang Login.

##  8. Mengamankan Rute CRUD Menggunakan Middleware Auth

Setelah sistem autentikasi berhasil dipasang, tahap berikutnya adalah mengamankan rute yang berhubungan dengan pengelolaan postingan.

Middleware `auth` digunakan untuk membatasi akses sehingga hanya pengguna yang sudah Login yang dapat membuka rute tertentu.

### A. Rute Sebelum Diamankan

Contoh rute CRUD yang belum dilindungi:

```php
Route::get('/posts/create', [PostController::class, 'create']);

Route::post('/posts', [PostController::class, 'store']);
```

Pada kondisi tersebut, rute belum menggunakan middleware autentikasi.

### B. Rute Setelah Diamankan

Rute dapat dikelompokkan menggunakan middleware `auth` seperti berikut:

```php
Route::middleware('auth')->group(function () {

    Route::get('/posts/create', [PostController::class, 'create'])
        ->name('posts.create');

    Route::post('/posts', [PostController::class, 'store'])
        ->name('posts.store');

    Route::get('/posts/{post}/edit', [PostController::class, 'edit'])
        ->name('posts.edit');

    Route::put('/posts/{post}', [PostController::class, 'update'])
        ->name('posts.update');

    Route::delete('/posts/{post}', [PostController::class, 'destroy'])
        ->name('posts.destroy');

});
```

**Penjelasan:**

- `Route::middleware('auth')` digunakan untuk menerapkan middleware autentikasi.
- `group()` digunakan untuk mengelompokkan beberapa rute dalam satu aturan middleware.
- `posts.create` digunakan untuk menampilkan halaman pembuatan postingan.
- `posts.store` digunakan untuk menyimpan postingan baru.
- `posts.edit` digunakan untuk menampilkan halaman pengeditan postingan.
- `posts.update` digunakan untuk memperbarui postingan.
- `posts.destroy` digunakan untuk menghapus postingan.

Dengan konfigurasi tersebut, pengguna yang belum Login akan diarahkan ke halaman Login ketika mencoba mengakses rute CRUD yang dilindungi.

**Catatan:** Contoh kode tersebut digunakan apabila `PostController` dan fitur CRUD postingan sudah tersedia di dalam proyek. Nama Controller dan rute perlu disesuaikan dengan implementasi proyek yang sebenarnya.

##  9. Dokumentasi Tampilan Website

Berikut dokumentasi hasil implementasi autentikasi Laravel Breeze pada proyek LaraPress.

### A. Tampilan Halaman Login

![Tampilan Halaman Login LaraPress](docs/images/login.png)

**Penjelasan Tampilan:**

Gambar di atas merupakan tampilan halaman Login yang disediakan oleh Laravel Breeze setelah proses instalasi berhasil dilakukan.

Halaman ini memiliki desain sederhana dengan latar belakang abu-abu muda dan sebuah kartu formulir berwarna putih yang diletakkan di bagian tengah halaman.

Pada bagian atas terdapat logo Laravel yang menjadi identitas framework yang digunakan dalam pengembangan aplikasi.

Di dalam kartu formulir terdapat beberapa komponen utama:

1. **Email**

   Bagian ini digunakan untuk memasukkan alamat email pengguna yang telah terdaftar pada aplikasi.

   Pada screenshot terlihat alamat email yang dimasukkan adalah `habibi22@gmail.com`.

2. **Password**

   Bagian ini digunakan untuk memasukkan kata sandi akun pengguna.

   Karakter password ditampilkan dalam bentuk titik-titik sehingga kata sandi tidak terlihat secara langsung.

3. **Remember Me**

   Bagian ini berupa checkbox yang dapat dipilih oleh pengguna apabila ingin mengaktifkan fitur mengingat sesi login.

4. **Forgot Your Password?**

   Tautan ini digunakan untuk menuju halaman pemulihan password apabila pengguna lupa kata sandi akunnya.

5. **Tombol Log In**

   Tombol ini digunakan untuk mengirimkan email dan password yang telah dimasukkan agar diproses oleh sistem autentikasi Laravel.

Selain itu, terlihat garis berwarna ungu pada kolom Password yang menunjukkan bahwa kolom tersebut sedang mendapatkan fokus input.

Secara keseluruhan, halaman Login berfungsi sebagai pintu masuk pengguna yang telah memiliki akun untuk mengakses aplikasi LaraPress.

### B. Tampilan Halaman Register

![Tampilan Halaman Register LaraPress](docs/images/register.png)

**Penjelasan Tampilan:**

Gambar di atas merupakan tampilan halaman Register yang digunakan untuk membuat akun pengguna baru pada aplikasi LaraPress.

Halaman ini menggunakan desain yang konsisten dengan halaman Login, yaitu latar belakang abu-abu muda, logo Laravel pada bagian atas, dan kartu formulir berwarna putih dengan sudut membulat.

Pada halaman ini terdapat empat komponen input utama:

1. **Name**

   Digunakan untuk memasukkan nama pengguna yang akan didaftarkan.

   Pada screenshot terlihat nama yang dimasukkan adalah `habibi`.

2. **Email**

   Digunakan untuk memasukkan alamat email yang akan menjadi identitas akun pengguna.

   Pada screenshot terlihat alamat email yang dimasukkan adalah `habibi22@gmail.com`.

3. **Password**

   Digunakan untuk memasukkan kata sandi yang akan digunakan ketika pengguna melakukan Login.

   Karakter password ditampilkan dalam bentuk titik-titik untuk menjaga privasi pengguna.

4. **Confirm Password**

   Digunakan untuk memasukkan ulang kata sandi yang sebelumnya telah dimasukkan pada kolom Password.

   Bagian ini bertujuan memastikan bahwa kedua password yang dimasukkan sesuai.

Selain komponen input, terdapat dua elemen tambahan:

- **Already Registered?** merupakan tautan yang mengarahkan pengguna yang sudah memiliki akun kembali ke halaman Login.
- **Tombol Register** digunakan untuk mengirimkan data pendaftaran dan memproses pembuatan akun baru.

Pada screenshot terlihat kolom Confirm Password sedang mendapatkan fokus input yang ditandai dengan garis ungu.

Secara keseluruhan, halaman Register berfungsi sebagai sarana bagi pengguna baru untuk membuat akun agar dapat menggunakan sistem autentikasi LaraPress.

##  10. Pengujian Sistem Autentikasi

Pengujian dilakukan untuk memastikan fitur autentikasi yang disediakan Laravel Breeze dapat digunakan sesuai fungsinya.

| No. | Skenario Pengujian | Hasil yang Diharapkan |
|---|---|---|
| 1 | Membuka halaman Register | Form pendaftaran ditampilkan. |
| 2 | Mengisi Name, Email, Password, dan Confirm Password | Data diterima untuk proses validasi. |
| 3 | Mendaftarkan akun baru dengan data valid | Akun pengguna berhasil dibuat. |
| 4 | Membuka halaman Login | Form login ditampilkan. |
| 5 | Memasukkan email dan password yang benar | Pengguna berhasil melakukan Login. |
| 6 | Memasukkan kredensial yang salah | Sistem menolak proses Login. |
| 7 | Memilih Remember Me | Sistem menggunakan mekanisme pengingat sesi sesuai pengaturan. |
| 8 | Melakukan Logout | Sesi autentikasi pengguna diakhiri. |
| 9 | Mengakses rute CRUD tanpa Login | Pengguna diarahkan ke halaman Login. |
| 10 | Mengakses rute CRUD setelah Login | Pengguna yang terautentikasi dapat melewati middleware `auth`. |

Pengujian tersebut merupakan skenario pengujian berdasarkan fitur yang dipelajari dalam praktikum. Hasil aktual setiap skenario perlu disesuaikan dengan pengujian langsung pada aplikasi.

##  11. Perbedaan Praktikum Pertemuan 3 dan 4

Praktikum pertemuan keempat merupakan pengembangan dari proyek LaraPress yang dibuat pada pertemuan sebelumnya.

| Pertemuan 3 | Pertemuan 4 |
|---|---|
| Instalasi Laravel 12. | Instalasi Laravel Breeze. |
| Pengenalan struktur Laravel. | Pengenalan struktur autentikasi. |
| Membuat halaman Beranda. | Membuat sistem Login. |
| Membuat halaman Tentang Kami. | Membuat sistem Register. |
| Membuat halaman Kontak. | Mempelajari Logout. |
| Mengenal Route dan View. | Mempelajari Session dan Cookie. |
| Membuat tampilan website sederhana. | Mengamankan rute menggunakan middleware `auth`. |

Dengan demikian, seluruh fitur pada pertemuan keempat merupakan penambahan kemampuan pada proyek LaraPress yang sama, bukan pembuatan proyek Laravel baru.

##  12. Kesimpulan

Berdasarkan praktikum pertemuan keempat, dapat disimpulkan bahwa sistem autentikasi merupakan bagian penting dalam pengembangan aplikasi web karena digunakan untuk memverifikasi identitas pengguna sebelum diberikan akses ke dalam aplikasi.

Melalui Laravel Breeze, proses pembuatan sistem autentikasi menjadi lebih mudah karena telah tersedia berbagai komponen seperti halaman Login, Register, Controller, Route, dan mekanisme pengelolaan Session.

Praktikum ini juga memberikan pemahaman mengenai keamanan password melalui hashing, perlindungan CSRF, serta fungsi Cookie dan Session dalam mempertahankan status login pengguna.

Selain itu, penggunaan middleware `auth` memungkinkan pengembang membatasi akses terhadap fitur tertentu, seperti pengelolaan postingan, sehingga hanya pengguna yang telah berhasil melakukan autentikasi yang dapat mengaksesnya.

Hasil praktikum ini merupakan pengembangan dari proyek LaraPress pada pertemuan sebelumnya. Dengan penambahan autentikasi Laravel Breeze, LaraPress memiliki dasar sistem login dan registrasi yang dapat dikembangkan lebih lanjut untuk mendukung fitur otorisasi dan pengelolaan hak akses pengguna.

---

<p align="center">
  <strong> PRAKTIKUM PEMROGRAMAN BERBASIS WEB </strong><br>
  Pertemuan 4 – Autentikasi Login Menggunakan Laravel Breeze<br><br>
  <strong>Muhamad Habibi Alfarisi</strong><br>
  NPM: 4524210137<br>
  Program Studi Teknik Informatika
</p>
