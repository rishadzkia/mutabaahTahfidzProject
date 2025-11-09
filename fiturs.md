# 🚀 PROYEK: [Web Mutabaah Tahfidz Internal Sekolah]

---

## 1. Ikhtisar Proyek

-   **Tujuan Utama:**  
    [Tujuan utama proyek, misal: Mempermudah pencatatan dan pemantauan hafalan siswa sekaligus meningkatkan efisiensi bagi guru atau pembimbing, Proses mutabaah menjadi lebih menarik dan interaktif sehingga dapat meningkatkan motivasi siswa dalam menghafal, Dengan adanya sistem ini, pondok atau sekolah juga didukung menuju digitalisasi agar administrasi hafalan menjadi lebih modern dan terstruktur.]

-   **Tumpukan Teknologi:**  
    **TALL Stack (Laravel 12, Livewire 3/Volt, Alpine.js, Tailwind CSS versi 4, Vite)**  
    Laravel 12 membawa beberapa perubahan besar dari Laravel 10, termasuk:

    -   **Pemindahan struktur service provider & middleware:** Banyak pendaftaran default kini diatur otomatis oleh kernel baru `@bootstrap/app.php` tanpa perlu deklarasi manual di `@config/app.php`.
    -   **Registrasi Service Provider Otomatis:** Tidak perlu lagi menambahkan provider bawaan ke `@config/app.php`; sistem autodiscovery kini lebih pintar dan efisien.
    -   **Routing & Middleware Modernized:** Middleware pipeline kini lebih modular, mendukung deklarasi berbasis class closure dan auto-injection yang lebih bersih.
    -   **Fitur Bootstrap Application:** Laravel kini memisahkan bootstrap logic agar startup aplikasi lebih cepat dan lebih mudah di-custom.
    -   **Peningkatan performa di container dan serialization**, membuat aplikasi microservice dan job queue lebih efisien.

    Sementara itu, **Tailwind CSS versi 4** memperkenalkan:

    -   **Zero-runtime CSS:** Build engine baru sepenuhnya menggantikan PostCSS, menghasilkan CSS 30–40% lebih kecil.
    -   **Mode `design tokens` bawaan:** Token warna, spacing, dan typography kini dideklarasikan secara global tanpa konfigurasi manual.
    -   **Peningkatan Theme API:** Bisa override skema warna atau varian mode (light/dark/system) langsung di file konfigurasi.
    -   **Auto-class pruning:** Tailwind otomatis menghapus class yang tidak digunakan saat proses build tanpa konfigurasi tambahan.
    -   **Integrasi native dengan Vite:** Kompilasi lebih cepat dengan caching yang lebih efisien untuk proyek TALL Stack.

-   **Arsitektur:**  
    Service Layer, Form Objects, Volt (untuk komponen kecil), Class Livewire (untuk komponen besar)

## 2. Peran Pengguna (Aktor)

-   **[Peran Publik: Siswa]:**  
    [Deskripsi singkat peran publik: Mencatat dan memantau hafalan harian mereka. Siswa dapat melakukan input setoran hafalan, mendengarkan murottal sebagai panduan bacaan, serta melihat pengumuman dari guru dan memberikan komentar. Selain itu, siswa juga dapat melihat slide motivasi untuk menambah semangat menghafal. Sistem ini dilengkapi fitur pendukung seperti login, tampilan jam real-time, dan tombol kembali ke atas agar penggunaan lebih nyaman dan interaktif..]

-   **[Peran Internal: Guru]:**  
    [Deskripsi singkat peran internal: Guru berperan sebagai pengelola dan pembimbing hafalan siswa. Guru dapat membuat dan mengelola pengumuman, melakukan verifikasi serta pembaruan data setoran hafalan, memberi tanda (bookmark) pada hafalan tertentu yang perlu diperhatikan, serta mengekspor laporan progres hafalan siswa ke dalam bentuk PDF. Guru juga dapat mencari dan memfilter riwayat setoran hafalan, serta melihat data komentar dari siswa. Sama seperti siswa, guru juga memiliki akses ke fitur login, jam real-time, dan tombol kembali ke atas untuk mempermudah navigasi dalam sistem..]

---

## 3. Fitur Wajib (Core/Pondasi)

-   **Login & Registrasi (Guru dan Siswa):**Akses masuk ke sistem sesuai peran pengguna. 
-   **Dashboard Siswa (Siswa):** Menampilkan progres hafalan dan akses ke fitur utama.
-   **Input Data Hafalan Siswa (Siswa):** Form untuk mencatat setoran hafalan harian.
-   **Dashboard Guru (Guru):** Menampilkan data hafalan siswa dan kontrol verifikasi.
-   **Halaman Profil:** Menampilkan dan mengedit data pribadi pengguna.
-   **Daftar Riwayat Setoran Siswa hasil inputan data hafalan siswa yang dilakukan oleh siswa (Guru):** Melihat dan memverifikasi setoran hafalan siswa.
-   **Data Siswa yang Ditandai (Guru):** Menandai siswa atau hafalan yang perlu perhatian khusus.
-   **Data Komentar (Guru):** Melihat komentar siswa pada pengumuman.
-   **Sidebar Navigasi:** Menu utama untuk berpindah antarhalaman dengan mudah.
 
---

## 4. Fitur Unik (10 Fitur Utama)

1. **Laporan Data Siswa (Export PDF):**  
   Mencetak laporan progres hafalan siswa dalam periode tertentu.

2. **Search Nama Siswa:**  
   Guru dapat mencari data siswa tertentu dengan cepat.

3. **Tampilan Waktu Relatif:**  
   Menampilkan waktu input asli dengan tampilan kecil dan informatif.

4. **Pengumuman Guru & Komentar Siswa:**  
   Guru dapat membuat pengumuman, dan siswa bisa memberikan komentar.

5. **Jam Digital Real-Time:**  
   Menampilkan jam digital yang terus berjalan di dashboard guru dan siswa.

6. **Tombol “Kembali ke Atas”:**  
   Memudahkan pengguna untuk langsung menggulir halaman ke bagian atas.

7. **Bookmark Hafalan:**  
   Guru dapat menandai hafalan siswa yang perlu diperbaiki atau diperhatikan.

8. **Murottal Audio:**  
   Memutar audio bacaan Al-Qur’an sebagai panduan hafalan dan muroja’ah.

9. **Slide Kutipan Motivasi:**  
   Menampilkan kutipan islami dalam bentuk slide untuk menambah semangat siswa.

10. **Filter Berdasarkan Tanggal:**  
    Menyaring data hafalan sesuai tanggal tertentu agar pencarian lebih mudah.


---

## 5. Skema Database (ERD - DBML)

> Ini adalah sumber kebenaran untuk semua query dan model, jika ada tambahan migrasi atau perubahan skema DB pastikan untuk memperbarui skema DBML ini.

```dbml
// --- Skema Database untuk [Web Mutabaah Tahfidz Internal Sekolah] ---

//======================================
// Skema Database: Mutabaah Tahfidz
// Arsitek: Gemini
// Versi: 2.1 (Relasi Profil Terintegrasi)
//======================================

// Enum untuk Peran Pengguna (Siswa & Guru)
Enum enum_user_role {
  guru
  siswa
}

// Enum untuk Status Setoran Hafalan
Enum enum_hafalan_status {
  disetor
  lulus
  perbaikan
}

//======================================
// TABEL UTAMA PENGGUNA
//======================================
Table user {
  id int [pk, increment]
  name varchar(255) [not null] // Mendukung fitur 'Search Nama Siswa'
  email varchar(255) [not null, unique] // Untuk Login
  password_hash varchar(255) [not null]
  role enum_user_role [not null, default: 'siswa']

  

  created_at timestamp [default: `now()`, not null]
  updated_at timestamp [default: `now()`, not null]
}

//======================================
// PROFIL GURU & SISWA (One-to-One ke USERS)
//======================================

Table guru {
  id int [pk, increment]
  user_id int [ref: - user.id, unique, not null]

  foto_url varchar(255)
  mapel_diampu varchar(255)
  mulai_kerja date

  created_at timestamp [default: `now()`, not null]
  updated_at timestamp [default: `now()`, not null]
}

Table siswa {
  id int [pk, increment]
  user_id int [ref: - user.id, unique, not null]

  kelas varchar(50)
  angkatan int
  guru_id int [ref: > guru.id]  

  created_at timestamp [default: `now()`, not null]
  updated_at timestamp [default: `now()`, not null]
}

//======================================
// TABEL HAFALAN
//======================================
Table hafalan {
  id int [pk, increment]
  siswa_id int [ref: > siswa.id, not null] // Revisi: FK ke siswa_profiles
  guru_id int [ref: > guru.id]             // Revisi: FK ke guru_profiles

  surah varchar(100) [not null]
  juz int [not null]
  ayat varchar(50) [not null]
  
  status enum_hafalan_status

  created_at timestamp [default: `now()`, not null]
  updated_at timestamp [default: `now()`, not null]
}

//======================================
// TABEL PENGUMUMAN
//======================================
Table pengumuman {
  id int [pk, increment]
  guru_id int [ref: > guru.id, not null] // Revisi: FK ke guru_profiles

  judul varchar(255) [not null]
  isi text [not null]

  created_at timestamp [default: `now()`, not null]
  updated_at timestamp [default: `now()`, not null]
}

//======================================
// TABEL KOMENTAR PENGUMUMAN
//======================================
Table komentar_pengumuman {
  id int [pk, increment]
  pengumuman_id int [ref: > pengumuman.id, not null]
  siswa_id int [ref: > siswa.id, not null] // Revisi: FK ke siswa_profiles

  komentar text [not null]

  created_at timestamp [default: `now()`, not null]
  updated_at timestamp [default: `now()`, not null]
}

//======================================
// TABEL MUROTTAL AUDIO
//======================================
Table murottal { 
  id int [pk, increment]
  qari_name varchar(255) [not null]
  surah varchar(100) [not null]
  file_url varchar(255) [not null, unique]

  created_at timestamp [default: `now()`, not null]
  updated_at timestamp [default: `now()`, not null]
}

//======================================
// TABEL KUTIPAN MOTIVASI
//======================================
Table kutipan_motivasi {
  id int [pk, increment]
  image_url varchar(255)
  teks_kutipan text [not null]
  sumber varchar(255)

  created_at timestamp [default: `now()`, not null]
  updated_at timestamp [default: `now()`, not null]
}

//======================================
// TABEL BOOKMARK (Many-to-Many)
//======================================
Table guru_mark_siswa {
  guru_id int [ref: > guru.id, not null]  // Revisi: FK ke guru_profiles
  siswa_id int [ref: > siswa.id, not null] // Revisi: FK ke siswa_profiles

  indexes {
    (guru_id, siswa_id) [unique]
  }
}

```
