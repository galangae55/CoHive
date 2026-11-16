# CoHive — Enterprise Workspace, Inventory & Financial Management Platform

![Laravel](https://img.shields.io/badge/Laravel-10.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.2-777BB4?style=for-the-badge&logo=php&logoColor=white)
![SQLite](https://img.shields.io/badge/SQLite-Portable_Database-003B57?style=for-the-badge&logo=sqlite&logoColor=white)
![Status](https://img.shields.io/badge/Status-Production_Ready-success?style=for-the-badge)

**CoHive** adalah platform manajemen operasional terintegrasi yang dirancang untuk co-working space, kafe/artisan hub, dan unit usaha modern. Sistem ini mengonsolidasikan pengelolaan inventaris bahan baku & merchandise, pencatatan arus kas multi-rekening, serta koordinasi agenda tim operasional dalam satu antarmuka yang elegan, responsif, dan ergonomis.

---

## 📸 Dokumentasi Antarmuka & Tangkapan Layar

### 1. Executive Dashboard & Ikhtisar Operasional
Ringkasan metrik inventaris, indikator stok rendah, arus kas bulanan, dan agenda kerja mendatang.
![CoHive Dashboard](file:///d:/CV/portfolio-assets/08-cohive/cohive_dashboard.png)

### 2. Manajemen Stok Barang & Inventaris
Katalog produk komprehensif mencakup ID barang, varian, kuantitas real-time, tanggal kadaluarsa, harga beli/jual, serta kontrol barang masuk/keluar.
![CoHive Stok Barang](file:///d:/CV/portfolio-assets/08-cohive/cohive_stok_barang.png)

### 3. Pembukuan Keuangan & Multi-Rekening
Pelacakan saldo kasir, perbankan bisnis, dan e-wallet QRIS secara transparan dengan riwayat debit/kredit per kategori.
![CoHive Keuangan](file:///d:/CV/portfolio-assets/08-cohive/cohive_keuangan.png)

### 4. Gerbang Autentikasi Modern
Formulir masuk dan registrasi karyawan dengan desain terpadu.
![CoHive Login](file:///d:/CV/portfolio-assets/08-cohive/cohive_login.png)

---

## 🌟 Modul & Fitur Unggulan

| Modul | Deskripsi Fungsi |
| :--- | :--- |
| **Workspace Dashboard** | Visualisasi KPI (total varian produk, stok unit tersedia, peringatan stok menipis, arus kas bulanan, dan jadwal terdekat). |
| **Inventory Control** | Pencatatan SKU barang, varian ukuran/berat, pergerakan stok keluar/masuk, pelacakan tanggal kadaluarsa, dan histori transaksi fisik. |
| **Multi-Account Finance** | Pengelolaan rekening terpisah (Kas Kecil, Rekening Bank Operasional, QRIS Settlement), pencatatan pendapatan & pengeluaran, serta tagging kategori transaksi. |
| **Team Calendar & Events** | Penjadwalan shift, rapat operasional, evaluasi berkala, serta workshop publik dengan visibilitas internal/publik. |
| **Role & Member Management** | Pembagian hak akses antara Administrator dan Karyawan operasional dengan verifikasi sesi aman. |

---

## 🛠️ Arsitektur & Teknologi

- **Backend Framework**: Laravel 10.x (MVC Architecture)
- **Language**: PHP 8.2+
- **Database Support**: SQLite (zero-config local portable) & MySQL / MariaDB
- **Frontend & Styling**: Blade Templating Engine, Vanilla CSS Custom Theming, SweetAlert2
- **Authentication**: Session-based with SHA-256 hashed password verification

---

## 🚀 Panduan Instalasi & Menjalankan Proyek

### 1. Prasyarat Sistem
- PHP >= 8.2 dengan ekstensi `pdo_sqlite`, `mbstring`, `openssl`, `tokenizer`, `xml`, `ctype`, `json`
- Composer 2.x
- Git

### 2. Kloning & Pemasangan Dependensi
```bash
# Masuk ke direktori proyek
cd d:/CV/CoHive

# Pemasangan dependensi composer
composer install
```

### 3. Konfigurasi Lingkungan (.env)
Salin berkas contoh atau konfigurasi berkas `.env`:
```ini
APP_NAME=CoHive
APP_ENV=local
APP_KEY=base64:...
APP_DEBUG=true
APP_URL=http://localhost:8002

DB_CONNECTION=sqlite
# Database otomatis membaca database/database.sqlite
```

### 4. Migrasi & Pengisian Data Awal (Seeding)
Jalankan migrasi bersih beserta seeder data komprehensif:
```bash
# Pastikan database sqlite tersedia
touch database/database.sqlite

# Migrasi dan jalankan database seeder
php artisan migrate:fresh --seed --force
```

### 5. Menjalankan Server Pengembangan
```bash
php artisan serve --port=8002
```
Akses sistem di peramban web: **`http://localhost:8002`**

---

## 🔑 Kredensial Akun Bawaan

| Role | Username | Password | Deskripsi |
| :--- | :--- | :--- | :--- |
| **Administrator** | `admin` | `admin123` | Akses menyeluruh ke seluruh modul manajemen, stok, dan keuangan. |
| **Karyawan** | `budi` | `karyawan123` | Akses operasional harian dan pembaruan stok barang. |
| **Karyawan** | `siti` | `karyawan123` | Akses pencatatan penjualan dan transaksi operasional kasir. |

---

## 📁 Struktur Direktori Utama

```
CoHive/
├── app/
│   ├── Http/
│   │   ├── Controllers/     # AuthController, BarangController, RouteController, KeuanganController
│   │   └── Middleware/      # LoginMiddleware, HarusLogoutMiddleware
│   └── Models/              # Barang, Event, KeuanganAccount, KeuanganTransaction, Profile, User
├── database/
│   ├── migrations/          # 13 migrasi skema tabel operasional
│   └── seeders/             # DatabaseSeeder lengkap (akun, inventaris, transaksi, agenda)
├── resources/
│   ├── views/               # Blade templates (dashboard, stok-barang, keuangan, dll)
│   └── css/                 # Custom stylesheet & theme definition
├── routes/
│   └── web.php              # Definisi rute aplikasi
└── portfolio-assets/        # Dokumentasi visual terkurasi
```

---

*CoHive — Empowering modern collaborative business operations with seamless management.*
