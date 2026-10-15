# Praktikum PBW — Pertemuan 4
## Implementasi Autentikasi Pengguna pada Laravel

**Nama:** Muhamad Habibi Alfarisi  
**NPM:** 4524210137  
**Mata Kuliah:** Pemrograman Berbasis Web

---

## Ringkasan Praktikum

Pada praktikum pertemuan keempat ini, dilakukan penerapan fitur autentikasi pengguna menggunakan Laravel. Fitur yang dikembangkan mencakup halaman pendaftaran akun dan halaman masuk untuk pengguna yang telah terdaftar.

Antarmuka menggunakan desain minimalis dengan formulir yang mudah dipahami, sehingga pengguna dapat mengisi data akun secara terstruktur.

## Fitur yang Dikembangkan

### 1. Registrasi Pengguna

Halaman registrasi digunakan untuk membuat akun baru. Pengguna diminta mengisi beberapa informasi, yaitu:

- Nama pengguna.
- Alamat email.
- Kata sandi.
- Konfirmasi kata sandi.

Formulir menyediakan tombol **Register** untuk mengirimkan data pendaftaran serta tautan menuju halaman login bagi pengguna yang telah memiliki akun.

### 2. Login Pengguna

Halaman login berfungsi sebagai pintu masuk ke aplikasi bagi pengguna terdaftar. Formulir terdiri atas:

- Input email.
- Input password.
- Opsi *Remember me*.
- Tautan pemulihan password.
- Tombol **Log In**.

Fitur tersebut memberikan pengalaman masuk yang sederhana dan menyediakan akses ke proses pemulihan akun apabila diperlukan.

## Teknologi yang Digunakan

| Teknologi | Kegunaan |
|---|---|
| Laravel | Framework aplikasi web |
| PHP | Memproses permintaan dan logika aplikasi |
| Blade | Menyusun tampilan halaman |
| HTML | Membentuk struktur formulir |
| CSS / Tailwind CSS | Mengatur tata letak dan desain antarmuka |
| SQLite / MySQL | Menyimpan data pengguna sesuai konfigurasi proyek |
| Composer | Mengelola dependensi Laravel |

## Dokumentasi Tampilan

### Halaman Pendaftaran

Halaman ini menampilkan formulir pembuatan akun dengan empat kolom input dan tombol registrasi.

![Halaman Registrasi(2)](screenshots/registrasi.png)

### Halaman Login

Halaman masuk menyediakan kolom email dan password, opsi untuk mengingat sesi, serta tautan pemulihan kata sandi.

![Halaman Login](screenshots/login.png)

## Konsep yang Dipelajari

Melalui implementasi ini, beberapa konsep pengembangan web dipraktikkan, antara lain:

1. Penggunaan formulir untuk menerima data dari pengguna.
2. Penerapan autentikasi melalui proses registrasi dan login.
3. Validasi data yang dikirimkan melalui formulir.
4. Pengelolaan sesi pengguna setelah proses login.
5. Penerapan komponen antarmuka yang konsisten pada halaman autentikasi.

## Cara Menjalankan Aplikasi

1. Pastikan PHP, Composer, dan dependensi proyek telah tersedia.
2. Buka terminal pada direktori utama proyek Laravel.
3. Jalankan perintah berikut untuk memasang dependensi jika diperlukan:

   ```bash
   composer install
   ```

4. Pastikan file `.env` tersedia dan konfigurasi database sudah sesuai.
5. Jika aplikasi menggunakan database yang belum memiliki tabel, jalankan migrasi setelah konfigurasi database siap:

   ```bash
   php artisan migrate
   ```

6. Jalankan server pengembangan:

   ```bash
   php artisan serve
   ```

7. Buka alamat `http://127.0.0.1:8000` pada browser dan akses halaman autentikasi sesuai rute yang tersedia.

## Kesimpulan

Praktikum pertemuan keempat memberikan pemahaman mengenai penerapan halaman autentikasi pada aplikasi berbasis Laravel. Halaman registrasi dan login menjadi bagian penting dalam membangun aplikasi yang dapat membedakan pengguna serta mengelola akses akun.

Pengembangan selanjutnya dapat mencakup validasi yang lebih lengkap, pemberitahuan kesalahan input, fitur reset password, dan pembatasan akses halaman berdasarkan status autentikasi.

---

**Disusun oleh:** Muhamad Habibi Alfarisi  
**NPM:** 4524210137  
**Program Studi:** Teknik Informatika
