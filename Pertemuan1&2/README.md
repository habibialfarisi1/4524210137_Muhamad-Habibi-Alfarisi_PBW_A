# Laporan Praktikum Pemrograman Berbasis Web

## Identitas Mahasiswa

| Keterangan | Informasi |
|---|---|
| **Nama** | Muhamad Habibi Alfarisi |
| **NPM** | 4524210137 |
| **Mata Kuliah** | Praktikum Pemrograman Berbasis Web |
| **Praktikum** | Pertemuan 1 |
| **Program Studi** | Teknik Informatika |

---

# Hasil Praktikum: Kalkulator Sederhana dan Profil Mahasiswa

Praktikum ini berisi pembuatan dua halaman web menggunakan PHP. Halaman pertama merupakan **Kalkulator Sederhana** yang digunakan untuk melakukan empat operasi matematika dasar. Halaman kedua merupakan **Profil Mahasiswa** yang menampilkan identitas serta ringkasan informasi akademik dalam bentuk kartu informasi dan indikator visual.

Pembuatan kedua halaman ini menjadi latihan untuk memahami dasar pemrograman web, penggunaan PHP sebagai bahasa pemrograman server-side, pengolahan input, serta penyajian hasil melalui halaman web.

## 📋 Daftar Isi

- [Gambaran Umum](#-gambaran-umum)
- [Fitur Aplikasi](#-fitur-aplikasi)
- [Teknologi yang Digunakan](#️-teknologi-yang-digunakan)
- [Persyaratan Sistem](#-persyaratan-sistem)
- [Instalasi dan Menjalankan Aplikasi](#-instalasi-dan-menjalankan-aplikasi)
- [Dokumentasi Tampilan](#-dokumentasi-tampilan)
- [Penjelasan Bagian Penting Program](#-penjelasan-bagian-penting-program)
- [Pengujian](#-pengujian)
- [Catatan Pengembangan](#-catatan-pengembangan)

## 🎯 Gambaran Umum

### 1. Kalkulator Sederhana

Kalkulator Sederhana merupakan halaman web untuk menghitung dua angka menggunakan empat operasi matematika dasar, yaitu penjumlahan, pengurangan, perkalian, dan pembagian. Pengguna memasukkan angka pertama dan angka kedua, memilih operasi yang ingin digunakan, kemudian menekan tombol **Hitung Hasil** untuk memproses perhitungan.

Aplikasi juga memberikan perhatian pada kondisi pembagian dengan nol. Pembagian dengan angka nol perlu ditolak agar tidak menghasilkan perhitungan yang tidak valid.

### 2. Profil Mahasiswa

Profil Mahasiswa merupakan halaman web yang menampilkan identitas mahasiswa dan ringkasan akademik. Informasi disusun dalam beberapa bagian agar mudah dibaca, yaitu identitas pada panel samping, informasi mahasiswa, serta ringkasan Indeks Prestasi Kumulatif (IPK).

Halaman ini menampilkan data mahasiswa berikut:

- Nama lengkap: **Muhamad Habibi Alfarisi**
- NPM: **4524210137**
- Program studi: **Teknik Informatika**
- Semester: **5**
- Tahun informasi: **2026**
- IPK: **3,65 dari 4,00**
- Persentase IPK: **91,25%**
- Predikat yang ditampilkan: **Sangat Memuaskan**

## Fitur Aplikasi

### Kalkulator Sederhana

- **Input angka pertama dan kedua** untuk menentukan nilai yang akan dihitung.
- **Penjumlahan (+)** untuk menjumlahkan dua angka.
- **Pengurangan (−)** untuk mencari selisih dua angka.
- **Perkalian (×)** untuk mengalikan dua angka.
- **Pembagian (÷)** untuk membagi angka pertama dengan angka kedua.
- **Tombol Hitung Hasil** untuk menjalankan proses perhitungan.
- **Validasi pembagian dengan nol** agar pembagian yang tidak valid ditolak.
- **Tampilan responsif dan sederhana** dengan susunan input serta tombol operasi yang mudah dipahami.

### Profil Mahasiswa

- **Identitas mahasiswa** yang menampilkan nama dan NPM.
- **Informasi akademik** yang mencakup program studi dan semester.
- **Ringkasan IPK** dengan skala maksimum 4,00.
- **Predikat akademik** yang ditampilkan dalam label “Sangat Memuaskan”.
- **Indikator progres IPK** berupa progress bar dan persentase.
- **Tata letak dua bagian** yang memisahkan panel identitas dengan informasi akademik utama.
- **Informasi pengelolaan halaman** yang menjelaskan bahwa data pada halaman dikelola menggunakan PHP.

## 🛠️ Teknologi yang Digunakan

Berdasarkan materi praktikum dan tampilan aplikasi, teknologi yang digunakan atau menjadi dasar pengerjaan adalah:

| Teknologi | Kegunaan |
|---|---|
| **PHP** | Memproses data dan logika aplikasi pada sisi server. |
| **HTML** | Menyusun struktur elemen halaman web, seperti judul, formulir, teks, dan bagian informasi. |
| **CSS** | Mengatur warna, ukuran, jarak, tata letak, tombol, kartu, dan tampilan halaman. |
| **XAMPP** | Menyediakan lingkungan server lokal untuk menjalankan aplikasi PHP melalui Apache. |
| **Visual Studio Code** | Digunakan sebagai editor untuk menulis dan mengelola kode program. |

> **Catatan:** README ini tidak mencantumkan database atau framework tertentu karena kedua hal tersebut tidak dapat dipastikan hanya dari materi dan screenshot yang diberikan.

## Persyaratan Sistem

Sesuai materi praktikum, persiapan lingkungan pengembangan meliputi:

- PHP versi **8.2 atau lebih baru**.
- XAMPP sebagai server lokal (Apache).
- Visual Studio Code atau editor kode lainnya.
- Browser, seperti Google Chrome atau Microsoft Edge.

Composer dan MySQL/MariaDB juga tercantum dalam requirement materi praktikum untuk lingkungan pembelajaran. Namun, keduanya tidak dinyatakan sebagai kebutuhan khusus untuk menjalankan dua halaman yang didokumentasikan di README ini.

## Instalasi dan Menjalankan Aplikasi

### 1. Persiapkan XAMPP

1. Instal XAMPP pada laptop.
2. Buka XAMPP Control Panel.
3. Jalankan layanan **Apache**.
4. Pastikan PHP dapat digunakan melalui terminal dengan perintah:

   ```bash
   php -v
   ```

### 2. Clone Repository

Ganti alamat repository di bawah dengan URL repository GitHub milik sendiri.

```bash
git clone https://github.com/USERNAME/REPOSITORY.git
```

### 3. Pindahkan Folder ke htdocs

Letakkan folder project di dalam direktori `htdocs` milik XAMPP. Contohnya:

```text
C:\xampp\htdocs\nama-project
```

### 4. Buka Project di Visual Studio Code

Buka folder project melalui Visual Studio Code, kemudian periksa file PHP yang digunakan untuk halaman kalkulator dan profil mahasiswa.

### 5. Jalankan Aplikasi

Pastikan Apache sudah aktif, kemudian buka browser dan akses alamat lokal berikut. Sesuaikan nama folder dan nama file dengan struktur project yang sebenarnya.

```text
http://localhost/nama-project/
```

Jika halaman utama tidak langsung terbuka, akses file PHP yang ingin dijalankan, misalnya:

```text
http://localhost/nama-project/kalkulator.php
http://localhost/nama-project/profil.php
```

> **Catatan:** `kalkulator.php` dan `profil.php` di atas merupakan contoh penamaan alamat. Sesuaikan dengan nama file yang benar-benar ada di repository.

## Dokumentasi Tampilan

Bagian ini menampilkan dua hasil halaman web yang dibuat pada praktikum.

### 1. Halaman Kalkulator Sederhana

![Tampilan Kalkulator Sederhana](docs/images/kalkulator-sederhana.png)

**Penjelasan tampilan:**

Halaman Kalkulator Sederhana memiliki bagian header berwarna gelap dengan judul **Kalkulator Sederhana** dan keterangan singkat mengenai fungsi aplikasi. Pada bagian input perhitungan, terdapat dua kolom untuk memasukkan angka pertama dan angka kedua.

Di antara kedua input tersebut tersedia empat tombol operasi, yaitu penjumlahan (+), pengurangan (−), perkalian (×), dan pembagian (÷). Tombol operasi yang dipilih ditandai dengan warna oranye. Setelah angka dan operasi ditentukan, pengguna dapat menekan tombol **Hitung Hasil** untuk menjalankan perhitungan.

Pada bagian bawah terdapat kotak informasi yang menjelaskan operasi yang didukung serta pemberitahuan bahwa pembagian dengan nol akan ditolak. Tampilan dibuat sederhana agar pengguna dapat memahami alur penggunaan kalkulator dengan mudah.

### 2. Halaman Profil Mahasiswa

![Tampilan Profil Mahasiswa](docs/images/profil-mahasiswa.png)

**Penjelasan tampilan:**

Halaman Profil Mahasiswa menggunakan desain dengan kombinasi warna hijau tua, putih, dan hijau muda. Tampilan dibagi menjadi dua bagian utama.

- **Panel identitas di sebelah kiri:** menampilkan inisial “MH”, nama Muhamad Habibi Alfarisi, program studi Teknik Informatika, NPM, serta kalimat singkat “Terus bertumbuh.”
- **Bagian informasi akademik di sebelah kanan:** menampilkan judul “Ringkasan Akademik”, tahun 2026, dan informasi mahasiswa berupa nama lengkap, NPM, program studi, serta semester.
- **Kartu Indeks Prestasi Kumulatif:** menampilkan IPK sebesar **3,65 / 4,00**, predikat **Sangat Memuaskan**, persentase **91,25%**, dan progress bar sebagai gambaran capaian IPK.
- **Bagian tentang profil:** memberikan keterangan bahwa halaman menampilkan identitas dan informasi akademik mahasiswa yang dikelola menggunakan PHP.

Susunan informasi dibuat dalam bentuk kartu agar data mudah dibaca. Penggunaan progress bar juga membantu memberikan gambaran visual mengenai nilai IPK dibandingkan skala maksimum 4,00.

## 🧩 Penjelasan Bagian Penting Program

Berikut lima bagian konsep program yang penting dalam pembuatan aplikasi ini.

### 1. Struktur HTML

HTML digunakan untuk membangun struktur halaman, seperti judul, paragraf, label, formulir input, tombol, dan bagian informasi. Struktur yang tersusun dengan baik membantu browser menampilkan halaman sesuai rancangan.

### 2. Pengolahan Input Pengguna

Pada halaman kalkulator, pengguna memasukkan dua nilai melalui kolom input. Nilai tersebut menjadi data awal yang akan diproses oleh program. Input perlu diperiksa agar program dapat mengolah nilai yang sesuai.

### 3. Logika Kondisi Operasi Matematika

Program perlu menentukan operasi yang dipilih pengguna. Setiap pilihan memiliki proses berbeda: penjumlahan menggunakan operator `+`, pengurangan menggunakan `-`, perkalian menggunakan `*`, dan pembagian menggunakan `/`.

Contoh logika dasar PHP:

```php
switch ($operator) {
    case '+':
        $hasil = $angka1 + $angka2;
        break;
    case '-':
        $hasil = $angka1 - $angka2;
        break;
    case '*':
        $hasil = $angka1 * $angka2;
        break;
    case '/':
        if ($angka2 == 0) {
            $error = "Pembagian dengan nol tidak diperbolehkan.";
        } else {
            $hasil = $angka1 / $angka2;
        }
        break;
}
```

Potongan kode tersebut merupakan ilustrasi logika operasi kalkulator. Penyesuaian tetap diperlukan agar sesuai dengan nama variabel dan struktur kode pada project sebenarnya.

### 4. PHP sebagai Pemroses di Sisi Server

PHP merupakan bahasa pemrograman server-side. Artinya, kode PHP diproses pada server sebelum hasilnya dikirimkan kepada browser. Pada aplikasi ini, PHP menjadi dasar pengolahan perhitungan kalkulator dan pengelolaan informasi yang ditampilkan pada halaman profil.

### 5. CSS untuk Tampilan Antarmuka

CSS digunakan untuk mengatur tampilan halaman, termasuk warna latar belakang, tipografi, ukuran elemen, jarak antarkomponen, tombol, kartu informasi, dan progress bar. Pada kalkulator, CSS membantu membuat tombol operasi dan tombol hitung lebih jelas. Pada profil mahasiswa, CSS membantu membentuk panel identitas dan ringkasan akademik agar terlihat rapi.

## 🧪 Pengujian

Pengujian dilakukan untuk memastikan tampilan dan fungsi utama aplikasi berjalan sesuai tujuan.

### Pengujian Kalkulator

| No. | Skenario Pengujian | Hasil yang Diharapkan |
|---|---|---|
| 1 | Memasukkan dua angka dan memilih penjumlahan | Program menampilkan hasil penjumlahan. |
| 2 | Memasukkan dua angka dan memilih pengurangan | Program menampilkan hasil pengurangan. |
| 3 | Memasukkan dua angka dan memilih perkalian | Program menampilkan hasil perkalian. |
| 4 | Memasukkan dua angka dan memilih pembagian dengan pembagi bukan nol | Program menampilkan hasil pembagian. |
| 5 | Memilih pembagian dengan angka kedua bernilai nol | Program menolak pembagian dan menampilkan informasi kesalahan. |
| 6 | Membuka halaman melalui browser lokal | Halaman kalkulator dapat ditampilkan melalui server lokal. |

### Pengujian Profil Mahasiswa

| No. | Skenario Pengujian | Hasil yang Diharapkan |
|---|---|---|
| 1 | Membuka halaman profil mahasiswa | Halaman profil tampil dengan susunan yang benar. |
| 2 | Memeriksa nama dan NPM | Nama dan NPM sesuai dengan identitas mahasiswa. |
| 3 | Memeriksa informasi akademik | Program studi dan semester ditampilkan dengan benar. |
| 4 | Memeriksa ringkasan IPK | Nilai IPK 3,65 dari 4,00 ditampilkan. |
| 5 | Memeriksa persentase dan progress bar | Persentase 91,25% dan indikator progres terlihat. |

> Tabel di atas merupakan skenario pengujian dan hasil yang diharapkan berdasarkan fungsi yang didokumentasikan. Isi dengan hasil aktual setelah setiap skenario benar-benar dijalankan.

## 📝 Catatan Pengembangan

README ini disusun berdasarkan materi praktikum, contoh README, dan dua screenshot aplikasi yang diberikan. Agar dokumentasi di GitHub dapat menampilkan gambar dengan benar, simpan kedua screenshot ke dalam folder berikut:

```text
nama-project/
├── README.md
└── docs/
    └── images/
        ├── kalkulator-sederhana.png
        └── profil-mahasiswa.png
```

Nama file gambar harus sama persis dengan yang digunakan pada bagian dokumentasi README. Jika nama file atau lokasi gambar berbeda, sesuaikan alamat gambar pada README.

---

<p align="center">
  <strong>Praktikum Pemrograman Berbasis Web</strong><br>
  Muhamad Habibi Alfarisi · 4524210137<br>
  Teknik Informatika
</p>
