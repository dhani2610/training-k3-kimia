# Training K3 Kimia Indonesia - Web Pelatihan & Sertifikasi BNSP

Platform resmi informasi, bimbingan teknis, dan sertifikasi profesi **K3 Kimia Industri, Pengendalian Mutu AMDK, Sampling Lingkungan, IPAL, Emisi Udara, dan Limbah B3** berbasis Standar Kompetensi Kerja Nasional Indonesia (SKKNI) dan Badan Nasional Sertifikasi Profesi (BNSP).

---

## 🔬 32 Skema Sertifikasi Resmi BNSP (LSP Kimia Industri)
1. **Pengamat visual/ fisik pengendalian mutu Air Minum Dalam Kemasan (AMDK)** *(SKKNI 161-2010)*
2. **Analis fisika/ kimia pengendalian mutu Air Minum Dalam Kemasan (AMDK)** *(SKKNI 161-2010)*
3. **Supervisor/ Penyelia pengendalian mutu Air Minum Dalam Kemasan (AMDK)** *(SKKNI 161-2010)*
4. **Operator Pengambilan Contoh Air** *(SKKNI 182-2009)*
5. **Operator Pengambilan Contoh Limbah** *(SKKNI 182-2009)*
6. **Operator Pengambilan Contoh Udara** *(SKKNI 182-2009)*
7. **Penanggungjawab Pengendalian Pencemaran Air (PPCA)** *(SKKNI 187-2016)*
8. **Penanggungjawab Pengendalian Pencemaran Udara (PPPU)** *(SKKNI 187-2016)*
9. **Penanggungjawab Operasional Pengolahan Air Limbah (POPAL)** *(SKKNI 187-2016)*
10. **Operator Instalasi Pengolahan Air Limbah (OP IPAL)** *(SKKNI 187-2016)*
11. **Penguji untuk Pengujian Mikrobiologi** *(SKKNI 200-2016)*
12. **Operator Instrumen Liquid Chromatography (HPLC / UHPLC)** *(SKKNI 200-2016)*
13. **Operator Instrumen Gas Chromatography (GC / GC-MS)** *(SKKNI 200-2016)*
14. **Analis Kimia** *(SKKNI 200-2016)*
15. **Ahli Muda K3 Kimia** *(SKKNI 042-2008)*
16. **Ahli Utama K3 Kimia** *(SKKNI 042-2008)*
17. **Penanggungjawab Operasional Instalasi Pengendalian Pencemaran Udara (POPU)** *(SKKNI 187-2016)*
18. **Ahli Muda Hygiene Industri (HIMU)** *(SKKNI 209-2008)*
19. **Ahli Madya Hygiene Industri (HIMA)** *(SKKNI 209-2008)*
20. **Ahli Utama Hygiene Industri (HIU)** *(SKKNI 209-2008)*
21. **Petugas Pengambilan Contoh Uji Air (PPC Air)** *(SKKNI 168-2016)*
22. **Pengawas Lapangan Pengambilan (Field Supervisor) Contoh Uji Air** *(SKKNI 168-2016)*
23. **Pengoperasian Instalasi Pengelolaan Limbah B3 (OPLB3)** *(SKKNI 187-2016)*
24. **Pemantauan & Analisis Pengelolaan Limbah B3** *(SKKNI 187-2016)*
25. **Pengawasan Pengolahan Limbah B3** *(SKKNI 187-2016)*
26. **Pelaksanaan Analisis Proksimat** *(SKKNI 347-2015)*
27. **Laboran Laboratorium Kimia** *(SKKNI 200-2016)*
28. **Penanganan dan Tanggap Darurat Bahan Kimia (Chemical Safety)** *(SKKNI 200-2016)*
29. **Penanganan dan Tanggap Darurat Limbah B3** *(SKKNI 191-2019)*
30. **Pemantauan dan Analisis Pengolahan Sampah/ Limbah Padat Non-B3** *(SKKNI 187-2016)*
31. **Perencanaan Produksi dan Pengendali Persediaan Industri Kimia (PPIC)** *(SKKNI 110-2018)*
32. **Penerapan Keselamatan & Kesehatan Kerja (K3) Laboratorium** *(SKKNI 200-2016)*

---

## 🚀 Fitur Unggulan Sistem
- **Website Publik**:
  - Tema Modern & Elegan dengan aksen dominan **Hijau Muda / Mint Emerald** yang responsif dan user-friendly.
  - Floating WhatsApp multi-agent dengan 4 nomor resmi (Hotline Utama `081399810272` disorot).
  - Direktori Wilayah Nasional lengkap mencakup **38 Provinsi, Seluruh Kabupaten/Kota, dan Kecamatan**.
  - On-the-Fly Regional Article Engine: 200 topik artikel per wilayah (panjang 6.000–9.000 kata per artikel dengan kata "Training" dan format HTML terstruktur rapi).
- **Admin Panel**:
  - Desain modern bertema **Biru Muda / Sky Blue** yang rapi dan full responsif.
  - CMS Lengkap: Program Pelatihan (32 Skema), Artikel, Kontak Masuk, Pengaturan WhatsApp & Sistem.
  - Akses Admin: `/admin/login`

---

## 🛠️ Persyaratan Sistem
- PHP >= 8.2 (Ekstensi: `pdo_mysql`, `mbstring`, `openssl`, `tokenizer`, `xml`, `ctype`, `json`)
- Composer
- MySQL >= 5.7 / MariaDB >= 10.3

---

## 📦 Panduan Instalasi Lokal
1. **Clone Repository**:
   ```bash
   git clone https://github.com/dhani2610/training-k3-kimia.git
   cd training-k3-kimia
   ```
2. **Install Dependencies**:
   ```bash
   composer install
   ```
3. **Konfigurasi Environment**:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
   Sesuaikan konfigurasi database di file `.env`:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=db_training_k3_kimia
   DB_USERNAME=root
   DB_PASSWORD=
   ```
4. **Migrasi dan Seeder**:
   ```bash
   php artisan migrate --seed
   ```
5. **Jalankan Aplikasi**:
   ```bash
   php artisan serve
   ```
   Buka di browser: `http://127.0.0.1:8000`

---

## 👤 Kredensial Default Admin
- **URL**: `http://127.0.0.1:8000/admin/login`
- **Email**: `admin@trainingk3kimia.id`
- **Password**: `admin123`

---

## 📞 Layanan Konsultasi & WhatsApp Resmi
- **Hotline Utama (Pendaftaran & Lisensi)**: 0813-9981-0272
- **CS 2 (Jadwal & Kuota)**: 0811-8500-177
- **CS 3 (Silabus & Teknis)**: 0878-9458-0806
- **CS 4 (In-House & B2B Corporate)**: 0878-9458-0649

---
*Lembaga Sertifikasi Profesi Kimia Industri - Badan Nasional Sertifikasi Profesi (BNSP).*
