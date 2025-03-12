# 📚 Sistem Pengelolaan Data Dosen

Aplikasi pengelolaan data dosen berbasis web yang dibangun dengan konsep OOP (Object-Oriented Programming) dan arsitektur MVC (Model-View-Controller) menggunakan PHP Native.

![alt text](https://i.ibb.co.com/PZ8CRnYb/Hasil.png?raw=true)


## 🌟 Fitur Utama

- **Create**: Tambah data dosen baru
- **Read**: Tampilkan dan lihat data dosen
- **Update**: Edit data dosen yang sudah ada
- **Delete**: Hapus data dosen dari database
- **Responsive Design**: Tampilan yang menyesuaikan dengan berbagai ukuran layar
- **Clean Architecture**: Menggunakan pola MVC untuk organisasi kode yang rapi

## 📂 Struktur Proyek

```
oop_php/
├── app/
│   ├── controllers/       # Pengendali untuk menangani request
│   │   └── DosenController.php
│   ├── models/           # Model untuk interaksi dengan database
│   │   └── Dosen.php
│   └── views/            # Tampilan antarmuka pengguna
│       ├── dosen_edit.php
│       ├── dosen_tambah.php
│       └── dosen.php
├── public/               # Aset publik
│   ├── css/
│   │   └── style.css
│   ├── favicon/
│   └── index.php         # Entry point aplikasi
├── dosen.sql             # File SQL untuk database
└── README.md             # Dokumentasi proyek
```

## 🔧 Teknologi yang Digunakan

- **PHP Native**: Bahasa pemrograman utama
- **MySQL**: Sistem manajemen database
- **HTML5 & CSS3**: Untuk struktur dan tampilan frontend
- **Bootstrap**: Framework CSS untuk tampilan responsif
- **JavaScript**: Untuk interaksi pengguna

## 🚀 Cara Instalasi

1. **Clone repositori ini**
   ```bash
   git clone https://github.com/Miftakhulr/oop_php.git
   cd oop_php
   ```

2. **Import database**
   - Buat database baru dengan nama `dosen_db`
   - Import file `dosen.sql` ke database tersebut

3. **Konfigurasi koneksi database**
   - Buka file `app/models/Dosen.php`
   - Sesuaikan pengaturan koneksi database

4. **Jalankan aplikasi**
   - Letakkan folder proyek di dalam direktori web server (htdocs untuk XAMPP / www untuk laragon)
   - Akses aplikasi melalui `http://localhost/oop_php/public`

## 🧩 Konsep Implementasi

### 🔵 Object-Oriented Programming (OOP)
- **Encapsulation**: Membungkus data dan method dalam kelas
- **Inheritance**: Pewarisan properti dan method antar kelas
- **Polymorphism**: Fleksibilitas dalam penggunaan method

### 🔵 Model-View-Controller (MVC)
- **Model**: Menangani logika bisnis dan interaksi dengan database
- **View**: Menampilkan data dan antarmuka kepada pengguna
- **Controller**: Menangani permintaan pengguna dan menghubungkan Model dan View

## 👥 Tim / Kelompok 1

**Ketua:**
- **Miftakhul Rahman** (2255202048)

**Anggota:**
- **Dwi Prayitno** (2255202032)
- **Femas Adi Prakasa** (2255202083)
- **Rayza Lintang Putri Harjanti** (2255202012)

## 🏫 Informasi Akademik

- **Kelas**: C02
- **Semester**: 6
- **Mata Kuliah**: Pemrograman Web III
- **Dosen Pengampu**: Uli Rizky, M.Kom.

## 🏢 Institusi

**PROGRAM STUDI INFORMATIKA**  
**FAKULTAS SAINS DAN TEKNOLOGI**  
**UNIVERSITAS NURUL HUDA**  
**2025**



*Dibuat untuk memenuhi tugas Mata Kuliah Pemrograman Web III*
