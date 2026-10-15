
# 🏫 SMP Mentari — Sistem Informasi Sekolah

**Nama:** Muhamad Habibi Alfarisi  
**NPM:** 4524210137  
**Mata Kuliah:** Pemrograman Berbasis Web  
**Praktikum:** Pertemuan 5  
**Program Studi:** Teknik Informatika

---

## 1. Gambaran Proyek

SMP Mentari merupakan proyek website berbasis Laravel yang dikembangkan sebagai latihan pembuatan aplikasi web dengan halaman dashboard untuk pengelolaan informasi sekolah.

Dashboard dirancang sebagai halaman utama administrator untuk mengakses menu dan mengelola konten website secara lebih terstruktur.

## 2. Fitur yang Ditampilkan

### Dashboard Admin
Menampilkan halaman awal setelah pengguna masuk ke area pengelolaan website, lengkap dengan pesan sambutan dan menu navigasi.

### Kegiatan
Menu untuk mengakses bagian pengelolaan informasi kegiatan sekolah.

### Buku Tamu
Menu untuk membuka fitur buku tamu sebagai sarana pencatatan kunjungan atau pesan pengunjung.

### Konfigurasi Website
Bagian pengaturan yang disediakan untuk mengakses konfigurasi website.

### Navigasi Pengguna
Navbar menampilkan nama website, menu Home dan Buku Tamu, serta menu akun pengguna.

## 3. Teknologi yang Digunakan

- **Laravel** — framework pengembangan aplikasi web.
- **PHP** — pemrosesan aplikasi pada sisi server.
- **Blade** — template untuk menampilkan halaman.
- **HTML dan CSS** — menyusun struktur dan tampilan antarmuka.
- **Database** — penyimpanan data aplikasi sesuai konfigurasi proyek.
- **Composer** — pengelolaan dependensi PHP.
- **Visual Studio Code** — editor kode program.

## 4. Struktur Halaman

Dashboard memiliki dua bagian utama:

1. **Navbar:** berisi identitas SMP Mentari dan navigasi utama.
2. **Area konten:** terdiri atas panel menu di sisi kiri dan informasi sambutan di sisi kanan.

Desain menggunakan latar abu-abu muda, panel berwarna putih, sudut membulat, dan bayangan ringan agar informasi mudah dibaca.

## 5. Dokumentasi Tampilan

### Dashboard SMP Mentari

Simpan screenshot dashboard ke folder `screenshots` dengan nama `dashboard-smp-mentari.png`.

![Dashboard SMP Mentari](dashboard-smp-mentari.png)

### Buku tamu SMP Mentari
![Dashboard SMP Mentari](screenshots/dashboard-smp-mentari.png)
> Pastikan file gambar sudah dimasukkan ke folder tersebut agar tampil pada halaman GitHub.

## 6. Cara Menjalankan Aplikasi

1. Buka terminal pada folder utama proyek SMP Mentari.
2. Pasang dependensi jika belum tersedia:

   ```bash
   composer install
   ```

3. Jika file `.env` belum ada, salin `.env.example` menjadi `.env`, kemudian sesuaikan konfigurasi database.
4. Buat application key jika belum tersedia:

   ```bash
   php artisan key:generate
   ```

5. Jalankan migrasi database jika diperlukan dan konfigurasi database sudah benar:

   ```bash
   php artisan migrate
   ```

6. Jalankan server Laravel:

   ```bash
   php artisan serve
   ```

7. Buka `http://127.0.0.1:8000` melalui browser.

**Catatan:** Menu dan halaman yang membutuhkan login atau database harus dijalankan sesuai konfigurasi serta akun yang tersedia pada proyek.

## 7. Tujuan Praktikum

- Memahami pengembangan website menggunakan Laravel.
- Mengenal penyusunan dashboard dan navigasi halaman.
- Memahami penggunaan template Blade.
- Mempelajari struktur aplikasi web yang lebih terorganisasi.
- Melatih pengembangan antarmuka untuk kebutuhan pengelolaan website.

## 8. Kesimpulan

Melalui proyek SMP Mentari, konsep pengembangan aplikasi web diterapkan dalam bentuk dashboard dengan navigasi yang terstruktur. Proyek ini menjadi latihan untuk memahami penyusunan antarmuka, pengorganisasian halaman, serta pengembangan fitur pengelolaan informasi sekolah.

---

**Disusun oleh:** Muhamad Habibi Alfarisi  
**NPM:** 4524210137  
**Mata Kuliah:** Pemrograman Berbasis Web
