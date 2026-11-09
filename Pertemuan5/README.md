# Website SMP Mentari

## Praktikum Pemrograman Berbasis Web

### Identitas Mahasiswa

| Keterangan | Informasi |
|---|---|
| Nama | Muhamad Habibi Alfarisi |
| NPM | 4524210137 |
| Mata Kuliah | Praktikum Pemrograman Berbasis Web |
| Nama Project | Website SMP Mentari |
| Framework | Laravel |

---

## 1. Deskripsi Project

Website SMP Mentari merupakan sebuah aplikasi berbasis web yang dikembangkan menggunakan framework Laravel. Aplikasi ini dibuat untuk membantu pengelolaan informasi dan kegiatan sekolah secara digital.

Website ini memiliki dua bagian utama, yaitu halaman **Frontend (halaman pengunjung)** dan **Backend (halaman administrator)**.

Pada bagian frontend, pengunjung dapat melihat informasi kegiatan terbaru yang dipublikasikan oleh sekolah serta mengakses halaman buku tamu untuk menyampaikan pesan.

Sementara itu, bagian backend digunakan oleh administrator untuk mengelola data kegiatan, melihat pesan dari pengunjung, serta mengatur konfigurasi tampilan website.

Aplikasi ini juga dilengkapi dengan sistem autentikasi berupa login dan register untuk membatasi akses ke halaman administrator.

## 2. Tujuan Pembuatan

Tujuan dari pembuatan aplikasi Website SMP Mentari adalah:

1. Menerapkan penggunaan framework Laravel dalam pengembangan aplikasi berbasis web.
2. Memahami proses autentikasi pengguna menggunakan fitur login dan register.
3. Mempelajari pengelolaan data melalui fitur CRUD (Create, Read, Update, Delete).
4. Membuat halaman administrator untuk mengelola informasi website.
5. Mengimplementasikan sistem buku tamu sebagai media komunikasi pengunjung dengan pihak sekolah.
6. Mempelajari pengaturan konfigurasi website melalui halaman administrator.

## 3. Teknologi yang Digunakan

Teknologi yang digunakan dalam pengembangan aplikasi ini meliputi:

- **Laravel** – Framework PHP yang digunakan untuk membangun aplikasi web.
- **PHP** – Bahasa pemrograman untuk mengembangkan sisi server.
- **MySQL** – Database untuk menyimpan data aplikasi.
- **HTML** – Digunakan untuk membangun struktur halaman website.
- **CSS** – Digunakan untuk mengatur tampilan dan desain website.
- **Bootstrap** – Digunakan untuk membantu membuat tampilan antarmuka yang responsif.
- **JavaScript** – Digunakan untuk mendukung interaksi pada halaman website.

## 4. Tampilan dan Penjelasan Aplikasi

### A. Halaman Login

Halaman login merupakan halaman autentikasi yang digunakan administrator untuk masuk ke dalam sistem.

Pada halaman ini terdapat beberapa komponen, yaitu:

- **Email:** Digunakan untuk memasukkan alamat email akun yang telah terdaftar.
- **Password:** Digunakan untuk memasukkan kata sandi akun.
- **Remember Me:** Fitur untuk mengingat sesi login pengguna.
- **Forgot Your Password?:** Tautan untuk membantu pengguna apabila lupa kata sandi.
- **Log In:** Tombol untuk melakukan proses autentikasi dan masuk ke halaman administrator.

Halaman ini berfungsi sebagai pintu masuk sebelum administrator dapat mengakses fitur pengelolaan website SMP Mentari.

**Gambar Halaman Login:**

![Halaman Login](docs/images/login.png)

### B. Halaman Register

Halaman register digunakan untuk membuat akun pengguna baru agar dapat mengakses sistem.

Pada halaman ini terdapat empat kolom input, yaitu:

- **Name:** Digunakan untuk memasukkan nama pengguna.
- **Email:** Digunakan untuk memasukkan alamat email pengguna.
- **Password:** Digunakan untuk membuat kata sandi akun.
- **Confirm Password:** Digunakan untuk mengulangi kata sandi agar sesuai dengan password yang dimasukkan sebelumnya.
- **Already Registered?:** Tautan untuk pengguna yang sudah memiliki akun agar dapat kembali ke halaman login.
- **Register:** Tombol untuk mengirimkan data pendaftaran akun.

Setelah proses pendaftaran berhasil, pengguna dapat menggunakan akun tersebut untuk masuk ke dalam sistem.

**Gambar Halaman Register:**

![Halaman Register](docs/images/register.png)

### C. Halaman Dashboard Admin

Halaman dashboard merupakan halaman utama yang ditampilkan setelah administrator berhasil melakukan login.

Pada bagian atas terdapat navigasi website dengan nama SMP Mentari, menu Home, Buku Tamu, dan informasi akun pengguna.

Di bagian utama terdapat beberapa komponen:

- **Dashboard:** Menunjukkan halaman yang sedang diakses administrator.
- **Section Master:** Merupakan menu navigasi utama untuk mengakses fitur pengelolaan website.
- **Dashboard:** Digunakan untuk kembali ke halaman utama administrator.
- **Kegiatan:** Digunakan untuk mengelola data kegiatan sekolah.
- **Buku Tamu:** Digunakan untuk melihat pesan yang dikirimkan oleh pengunjung.
- **Pengaturan:** Bagian untuk mengakses konfigurasi website.
- **Konfigurasi Website:** Digunakan untuk mengatur jumlah kegiatan yang ditampilkan pada halaman utama.

Pada bagian konten terdapat ucapan selamat datang kepada administrator serta informasi bahwa dashboard merupakan pusat kendali website SMP Mentari.

**Gambar Halaman Dashboard Admin:**

![Dashboard Admin](docs/images/dashboard.png)

### D. Halaman Kelola Kegiatan

Halaman kelola kegiatan merupakan fitur administrator yang digunakan untuk mengelola informasi kegiatan sekolah.

Pada halaman ini terdapat beberapa komponen utama:

- **Daftar Kegiatan:** Menampilkan data kegiatan yang telah dimasukkan ke dalam sistem.
- **Tambah Kegiatan:** Tombol untuk menambahkan data kegiatan baru.
- **Judul:** Kolom yang menampilkan judul kegiatan.
- **Deskripsi:** Kolom yang menampilkan penjelasan mengenai kegiatan.
- **Aksi:** Bagian yang digunakan untuk melakukan tindakan terhadap data kegiatan, seperti mengedit dan menghapus data.
- **Notifikasi:** Menampilkan informasi ketika suatu proses berhasil dilakukan.

Pada tampilan yang ditampilkan, terdapat notifikasi "Kegiatan berhasil dihapus." dan tabel yang menunjukkan bahwa belum terdapat data kegiatan.

Fitur ini menerapkan konsep CRUD (Create, Read, Update, Delete), yaitu:

1. **Create:** Menambahkan data kegiatan baru.
2. **Read:** Menampilkan daftar kegiatan yang tersimpan.
3. **Update:** Mengubah informasi kegiatan yang sudah ada.
4. **Delete:** Menghapus data kegiatan dari sistem.

Dengan adanya fitur ini, administrator dapat mengelola informasi kegiatan sekolah dengan lebih mudah.

**Gambar Halaman Kelola Kegiatan:**

![Kelola Kegiatan](docs/images/kegiatan.png)

### E. Halaman Kelola Buku Tamu

Halaman kelola buku tamu digunakan administrator untuk melihat pesan atau tanggapan yang dikirimkan oleh pengunjung melalui fitur buku tamu.

Pada halaman ini terdapat beberapa bagian:

- **Section Master:** Menampilkan menu navigasi administrator.
- **Dashboard:** Menu untuk kembali ke halaman utama administrator.
- **Kegiatan:** Menu untuk mengelola informasi kegiatan sekolah.
- **Buku Tamu:** Menu untuk membuka halaman pengelolaan pesan pengunjung.
- **Daftar Pesan dari Pengunjung:** Bagian utama yang menampilkan pesan-pesan yang dikirimkan oleh pengunjung.

Pada tampilan yang ditampilkan terdapat notifikasi "Belum ada pesan dari pengunjung." Hal tersebut menunjukkan bahwa belum terdapat pesan yang masuk melalui buku tamu.

Fitur ini bertujuan untuk memudahkan pihak sekolah dalam melihat dan memantau pesan atau tanggapan dari pengunjung website.

**Gambar Halaman Kelola Buku Tamu:**

![Kelola Buku Tamu](docs/images/buku-tamu.png)

### F. Halaman Pengaturan Website

Halaman pengaturan website merupakan fitur yang digunakan administrator untuk mengatur konfigurasi tertentu pada website SMP Mentari.

Pada halaman ini terdapat bagian konfigurasi website dengan beberapa komponen:

- **Home Kegiatan Per Page:** Pengaturan jumlah kegiatan yang ditampilkan dalam satu halaman pada halaman utama website.
- **Jumlah kegiatan yang ditampilkan per halaman di home:** Keterangan yang menjelaskan fungsi pengaturan tersebut.
- **Input Jumlah Kegiatan:** Kolom untuk menentukan jumlah kegiatan yang ingin ditampilkan.
- **Simpan Perubahan:** Tombol untuk menyimpan konfigurasi yang telah diubah.

Pada tampilan yang diberikan, nilai konfigurasi yang digunakan adalah 6. Artinya, website diatur untuk menampilkan maksimal enam kegiatan pada setiap halaman utama.

Fitur ini memberikan kemudahan kepada administrator dalam mengatur jumlah informasi kegiatan yang ditampilkan kepada pengunjung.

**Gambar Halaman Pengaturan Website:**

![Pengaturan Website](docs/images/pengaturan.png)

### G. Halaman Home (Frontend)

Halaman Home merupakan halaman utama website SMP Mentari yang dapat diakses oleh pengunjung.

Halaman ini berfungsi sebagai media penyampaian informasi mengenai kegiatan yang telah dilaksanakan oleh sekolah.

Pada bagian navigasi terdapat beberapa menu:

- **SMP Mentari:** Nama atau identitas website sekolah.
- **Home:** Menu untuk kembali ke halaman utama website.
- **Buku Tamu:** Menu untuk mengakses halaman buku tamu.
- **Nama Pengguna:** Menampilkan akun pengguna yang sedang login.

Pada bagian konten utama terdapat:

- **Kegiatan Terbaru di SMP Mentari:** Judul utama yang menunjukkan informasi kegiatan terbaru sekolah.
- **Deskripsi Website:** Berisi sambutan kepada pengunjung dan penjelasan mengenai informasi kegiatan sekolah.
- **Belum Ada Kegiatan:** Notifikasi yang ditampilkan apabila belum terdapat kegiatan yang dipublikasikan.

Pada tampilan yang diberikan, website menampilkan informasi bahwa belum ada kegiatan yang dipublikasikan. Pengunjung dapat kembali mengakses website untuk melihat informasi kegiatan apabila sudah tersedia.

Halaman ini menjadi bagian frontend yang berfungsi sebagai media informasi bagi pengunjung website SMP Mentari.

**Gambar Halaman Home:**

![Halaman Home](docs/images/home.png)

---

## 5. Fitur Utama Aplikasi

Berikut merupakan rangkuman fitur yang terdapat pada Website SMP Mentari:

| No. | Fitur | Keterangan |
|---|---|---|
| 1 | Login | Autentikasi untuk masuk ke sistem. |
| 2 | Register | Pendaftaran akun pengguna baru. |
| 3 | Dashboard | Halaman utama administrator. |
| 4 | Kelola Kegiatan | Mengelola data kegiatan sekolah. |
| 5 | CRUD Kegiatan | Menambah, melihat, mengubah, dan menghapus kegiatan. |
| 6 | Kelola Buku Tamu | Melihat pesan dari pengunjung. |
| 7 | Pengaturan Website | Mengatur jumlah kegiatan pada halaman utama. |
| 8 | Halaman Home | Menampilkan informasi kegiatan sekolah kepada pengunjung. |

## 6. Alur Penggunaan Aplikasi

Berikut merupakan alur penggunaan Website SMP Mentari:

1. Pengguna membuka aplikasi melalui browser.
2. Pengguna melakukan login menggunakan akun yang telah terdaftar.
3. Setelah berhasil login, pengguna diarahkan menuju halaman dashboard administrator.
4. Administrator dapat memilih menu kegiatan untuk mengelola informasi kegiatan sekolah.
5. Administrator dapat membuka menu buku tamu untuk melihat pesan dari pengunjung.
6. Administrator dapat membuka menu konfigurasi website untuk mengatur jumlah kegiatan yang ditampilkan pada halaman Home.
7. Pengunjung dapat membuka halaman Home untuk melihat informasi kegiatan yang telah dipublikasikan.

## 7. Cara Menjalankan Project

Berikut merupakan langkah-langkah untuk menjalankan aplikasi secara lokal:

**1. Clone Repository**

```bash
git clone https://github.com/username/nama-repository.git
```

**2. Masuk ke Folder Project**

```bash
cd nama-repository
```

**3. Install Dependency Laravel**

```bash
composer install
```

**4. Salin File Environment**

```bash
cp .env.example .env
```

**5. Generate Application Key**

```bash
php artisan key:generate
```

**6. Konfigurasi Database**

Atur konfigurasi database pada file `.env` sesuai dengan database lokal yang digunakan.

**7. Jalankan Migrasi Database**

```bash
php artisan migrate
```

**8. Jalankan Aplikasi**

```bash
php artisan serve
```

Setelah itu, buka browser dan akses:

```text
http://127.0.0.1:8000
```



```

## 8. Kesimpulan

Berdasarkan praktikum Pemrograman Berbasis Web yang telah dilakukan, Website SMP Mentari merupakan aplikasi berbasis web yang memiliki fungsi untuk menampilkan informasi kegiatan sekolah serta menyediakan fitur pengelolaan konten melalui halaman administrator.

Melalui pembuatan aplikasi ini, mahasiswa dapat memahami penerapan framework Laravel, proses autentikasi pengguna, pengelolaan database, konsep CRUD, serta pembuatan halaman frontend dan backend.

Dengan adanya aplikasi ini, pengelolaan informasi kegiatan sekolah dan komunikasi dengan pengunjung dapat dilakukan melalui satu sistem website yang terintegrasi.

---

## Identitas Pembuat

**Muhamad Habibi Alfarisi**

**NPM: 4524210137**

Praktikum Pemrograman Berbasis Web.
