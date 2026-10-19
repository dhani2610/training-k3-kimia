<?php

namespace App\Services;

use App\Models\Program;
use App\Models\Article;
use Illuminate\Support\Str;

class K3KimiaSchemeService
{
    /**
     * Master definition of 32 K3 Kimia & LSP Kimia Industri BNSP Training Programs
     */
    public static function getMasterPrograms(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Pengamat visual/ fisik pengendalian mutu Air Minum Dalam Kemasan (AMDK)',
                'slug' => 'pengamat-visual-fisik-pengendalian-mutu-amdk',
                'code' => 'SKKNI 161-2010',
                'level_name' => 'Operator Pengendalian Mutu Fisik AMDK',
                'badge' => 'Sertifikasi BNSP (SKKNI 161-2010)',
                'short_description' => 'Pelatihan dan uji kompetensi pengamatan visual dan inspeksi fisik parameter kejernihan, partikel asing, kemasan botol/cup, dan label AMDK berstandar SNI dan BPOM.',
                'full_description' => 'Program pelatihan sertifikasi BNSP untuk Pengamat Visual/Fisik Pengendalian Mutu Air Minum Dalam Kemasan (AMDK) dirancang mengacu pada SKKNI Nomor 161 Tahun 2010. Pelatihan ini membekali peserta keterampilan teknis inspeksi organoleptik, deteksi kebocoran seal kemasan, kontaminasi mikroskopis visual, standar sanitasi lini produksi pengisian (filling room), dan kepatuhan terhadap regulasi keamanan pangan BPOM serta SNI 3553:2015.',
                'curriculum' => [
                    'Penerapan Prinsip K3 dan Higiene Sanitasi Industri Air Minum',
                    'Standar Mutu Fisik Air Baku dan Produk Jadi AMDK (SNI 3553:2015)',
                    'Teknik Pengambilan Sampel Visual pada Jalur Konveyor dan Pengemasan',
                    'Prosedur Pengujian Fisik: Kejernihan, Warna, Bau, Rasa, dan Sedimen',
                    'Inspeksi Integritas Tutup Botol (Cap Closure), Segel Galon, dan Cup Sealing',
                    'Penyusunan Lembar Kerja Hasil Inspeksi Pengendalian Mutu Fisik AMDK',
                    'Simulasi Uji Kompetensi Mandiri dan Asesmen BNSP di TUK'
                ],
                'requirements' => [
                    'Pendidikan minimal SMA/SMK sederajat (Jurusan IPA, Kimia, atau Teknik diutamakan)',
                    'Surat keterangan sehat dan bebas buta warna dari instansi medis',
                    'Pas foto 3x4 formal latar belakang merah (format digital)',
                    'Fotokopi KTP / Identitas resmi yang masih berlaku'
                ],
                'certification_body' => 'LSP Kimia Industri & BNSP',
                'duration' => '3 Hari (24 Jam Pelajaran Teori & Uji Asesmen)',
                'icon' => 'bi-droplet-half',
                'image' => 'https://images.unsplash.com/photo-1548839140-29a749e1bc4e?w=1200&auto=format&fit=crop&q=80',
                'topic_key' => 'amdk_visual',
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 1,
            ],
            [
                'id' => 2,
                'title' => 'Analis fisika/ kimia pengendalian mutu Air Minum Dalam Kemasan (AMDK)',
                'slug' => 'analis-fisika-kimia-pengendalian-mutu-amdk',
                'code' => 'SKKNI 161-2010',
                'level_name' => 'Analis Laboratorium Fisika Kimia AMDK',
                'badge' => 'Sertifikasi BNSP (SKKNI 161-2010)',
                'short_description' => 'Pelatihan pengujian parameter kimia air (TDS, pH, kesadahan, klorida, nitrat, logam berat) dan fisika air minum sesuai standar baku mutu laboratorium.',
                'full_description' => 'Skema Analis Fisika/Kimia Pengendalian Mutu AMDK berbasis SKKNI 161-2010 membekali teknisi laboratorium kemampuan mengukur parameter kritis air minum kemasan: kekeruhan (turbidity), daya hantar listrik (DHL), total padatan terlarut (TDS), derajat keasaman (pH), kadar zat organik, zat besi, mangan, serta pengoperasian instrumen analitis dan verifikasi metode.',
                'curriculum' => [
                    'Regulasi Mutu Air Minum Permenkes & SNI Wajib AMDK',
                    'Preparasi Larutan Standar, Blanko, dan Kalibrasi pH-meter serta Turbidimeter',
                    'Penetapan Kadar Kesadahan Total dan Kalsium melalui Titrasi Kompleksometri',
                    'Pengukuran Total Dissolved Solids (TDS) dan Konduktivitas Elektrik',
                    'Penetapan Kadar Nitrat, Nitrit, Sulfat, dan Klorida secara Spektrofotometri',
                    'Penerapan Good Laboratory Practice (GLP) dan Penanganan Limbah Reagen',
                    'Uji Verifikasi Kompetensi Asesmen Portofolio LSP Kimia Industri'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Kimia Analis / D3 / S1 Kimia / Farmasi / Biologi',
                    'Memiliki pemahaman dasar mengenai titrasi dan preparasi kimia analitik',
                    'KTP dan pas foto 3x4 berwarna',
                    'Surat rekomendasi instansi / perusahaan pengguna'
                ],
                'certification_body' => 'LSP Kimia Industri & BNSP',
                'duration' => '3 Hari (24 Jam Pelajaran Teori, Praktik Lab & Asesmen)',
                'icon' => 'bi-beaker',
                'image' => 'https://images.unsplash.com/photo-1532187863486-abf9dbad1b69?w=1200&auto=format&fit=crop&q=80',
                'topic_key' => 'amdk_analis',
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 2,
            ],
            [
                'id' => 3,
                'title' => 'Supervisor/ Penyelia pengendalian mutu Air Minum Dalam Kemasan (AMDK)',
                'slug' => 'supervisor-penyelia-pengendalian-mutu-amdk',
                'code' => 'SKKNI 161-2010',
                'level_name' => 'Supervisor QA/QC Pabrik AMDK',
                'badge' => 'Sertifikasi BNSP (SKKNI 161-2010)',
                'short_description' => 'Supervisi sistem manajemen mutu, evaluasi hasil uji laboratorium, audit proses ozonisasi/UV, dan penjaminan HACCP/ISO 22000 lini manufaktur AMDK.',
                'full_description' => 'Mempersiapkan tenaga supervisor dan manajerial kendali mutu AMDK yang bertugas memvalidasi seluruh rantai pasok pengolahan air minum, mulai dari water intake sumur dalam, filtrasi multi-media, reverse osmosis, sistem disinfeksi ozon dan sinar ultra-violet (UV), sistem CIP (Clean-in-Place), penanganan ketidaksesuaian produk, hingga rilis produk ke pasar.',
                'curriculum' => [
                    'Sistem Jaminan Mutu Industri AMDK dan Regulasi BPOM / Kemenperin',
                    'Supervisi Operasional Unit Pengolahan Air (Water Treatment Plant)',
                    'Validasi Kinerja Sistem Ozonisasi dan Disinfeksi Sinar UV',
                    'Penyusunan Rencana Inspeksi dan Pengujian (Inspection & Test Plan)',
                    'Analisis Data Statistik Mutu (SPC) dan Penanganan Produk Non-Conforming',
                    'Audit Internal HACCP dan Ketertelusuran (Traceability) Batch Produksi',
                    'Asesmen Mandiri dan Uji Kompetensi Supervisor BNSP'
                ],
                'requirements' => [
                    'Pendidikan minimal D3 / S1 Kimia / Teknik Kimia / Teknologi Pangan',
                    'Pengalaman kerja minimal 1-2 tahun di bidang QC/QA industri air minum',
                    'Portofolio dokumen kerja pengendalian mutu',
                    'KTP dan pas foto 3x4'
                ],
                'certification_body' => 'LSP Kimia Industri & BNSP',
                'duration' => '3 Hari (24 Jam Pelajaran Intensif & Uji Asesmen)',
                'icon' => 'bi-award',
                'image' => 'https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?w=1200&auto=format&fit=crop&q=80',
                'topic_key' => 'amdk_supervisor',
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 3,
            ],
            [
                'id' => 4,
                'title' => 'Operator Pengambilan Contoh Air',
                'slug' => 'operator-pengambilan-contoh-air',
                'code' => 'SKKNI 182-2009',
                'level_name' => 'Operator Sampler Air',
                'badge' => 'Sertifikasi BNSP (SKKNI 182-2009)',
                'short_description' => 'Keahlian teknis sampling air permukaan, air tanah, air bersih, dan air perpipaan dengan kaidah representatif, preservasi dingin, dan rantai lacak (chain of custody).',
                'full_description' => 'Pelatihan Operator Pengambilan Contoh Air sesuai SKKNI 182-2009 memberikan standardisasi bagi teknisi lingkungan dalam mengambil contoh air sungai, danau, sumur pantau, dan jaringan distribusi air. Peserta menguasai pemilihan wadah sampel, teknik preservasi kimia/pendinginan, pengukuran parameter lapangan (in-situ), dan dokumentasi legal Chain of Custody.',
                'curriculum' => [
                    'Standar Nasional Pengambilan Contoh Uji Air SNI 6989',
                    'Perencanaan Titik Sampling dan Frekuensi Sesuai Baku Mutu Lingkungan',
                    'Teknik Pengukuran Parameter Lapangan: pH, DO, Suhu, Konduktivitas',
                    'Prosedur Pengambilan Sampel Representatif Menggunakan Water Sampler Van Dorn',
                    'Teknik Pengawetan Sampel (Preservasi Fisik & Kimiawi dengan Asam/Basa)',
                    'Penyusunan Berita Acara dan Chain of Custody (Rantai Pengawasan)',
                    'Asesmen Kompetensi Teknis BNSP'
                ],
                'requirements' => ['SMA/SMK Sederajat', 'Surat sehat', 'KTP & Pas Foto'],
                'certification_body' => 'LSP Kimia Industri & BNSP',
                'duration' => '3 Hari (24 Jam Pelajaran)',
                'icon' => 'bi-water',
                'image' => 'https://images.unsplash.com/photo-1500382017468-9049fed747ef?w=1200&auto=format&fit=crop&q=80',
                'topic_key' => 'sampler_air',
                'is_featured' => false,
                'is_active' => true,
                'sort_order' => 4,
            ],
            [
                'id' => 5,
                'title' => 'Operator Pengambilan Contoh Limbah',
                'slug' => 'operator-pengambilan-contoh-limbah',
                'code' => 'SKKNI 182-2009',
                'level_name' => 'Operator Sampler Air Limbah Industri',
                'badge' => 'Sertifikasi BNSP (SKKNI 182-2009)',
                'short_description' => 'Sampling air limbah industri di titik inlet, unit aerasi, dan outlet perizinan (outfall) mengacu SNI 6989.59 dengan keselamatan kerja bahan kimia berbahaya.',
                'full_description' => 'Skema Operator Pengambilan Contoh Limbah mempersiapkan tenaga teknis industri manufaktur dan pertambangan dalam melakukan pengambilan sampel air limbah secara berkala. Menjamin keabsahan sampel untuk kepatuhan dokumen lingkungan PROPER, AMDAL, dan RKL-RPL instansi KLHK.',
                'curriculum' => [
                    'Regulasi Pengendalian Pencemaran Air Limbah Industri Permen LHK',
                    'Identifikasi Bahaya dan Penggunaan APD Sampling Limbah Kimia',
                    'Penentuan Titik Penaatan (Outfall) dan Karakteristik Debit Aliran Limbah',
                    'Metode Sampling Grab (Sesaat) dan Composite (Gabungan Waktu & Aliran)',
                    'Pengawetan Sampel Logam Berat, COD, BOD, Minyak & Lemak',
                    'Penyusunan Logbook dan Pengiriman Sampel ke Laboratorium Terakreditasi KAN',
                    'Asesmen Praktik dan Teori Sertifikasi BNSP'
                ],
                'requirements' => ['SMA/SMK Sederajat', 'Surat rekomendasi perusahaan', 'KTP & Pas Foto'],
                'certification_body' => 'LSP Kimia Industri & BNSP',
                'duration' => '3 Hari (24 Jam Pelajaran)',
                'icon' => 'bi-funnel-fill',
                'image' => 'https://images.unsplash.com/photo-1518709268805-4e9042af9f23?w=1200&auto=format&fit=crop&q=80',
                'topic_key' => 'sampler_limbah',
                'is_featured' => false,
                'is_active' => true,
                'sort_order' => 5,
            ],
            [
                'id' => 6,
                'title' => 'Operator Pengambilan Contoh Udara',
                'slug' => 'operator-pengambilan-contoh-udara',
                'code' => 'SKKNI 182-2009',
                'level_name' => 'Operator Sampler Udara Ambien & Emisi',
                'badge' => 'Sertifikasi BNSP (SKKNI 182-2009)',
                'short_description' => 'Sampling udara ambien dan udara emisi cerobong industri menggunakan High Volume Air Sampler (HVAS), impinger gas beracun, dan flowmeter kalibrasi.',
                'full_description' => 'Skema keahlian pengambilan contoh kualitas udara luar (ambien) dan cerobong emisi stasioner. Mengajarkan pengukuran partikulat debu (PM2.5, PM10, TSP), penyerapan gas polutan SO2, NO2, CO, NH3, H2S dengan larutan penjerap impinger, serta perhitungan laju alir isokinetik.',
                'curriculum' => [
                    'Regulasi Baku Mutu Udara Ambien dan Emisi Sumber Tidak Bergerak',
                    'Kalibrasi dan Pengoperasian High Volume Air Sampler (HVAS)',
                    'Teknik Sampling Gas Kimia Menggunakan Midget Impinger Gas Sampler',
                    'Metode Pengambilan Sampel Debu Partikulat Isokinetik pada Cerobong',
                    'Pencatatan Parameter Meteorologi (Arah Angin, Kecepatan, Suhu, Tekanan)',
                    'Penanganan Filter Timbang Pra dan Pasca Sampling di Desikator',
                    'Uji Kompetensi Portofolio dan Praktik BNSP'
                ],
                'requirements' => ['SMK Teknik/Kimia/IPA', 'Surat keterangan sehat', 'KTP & Pas Foto'],
                'certification_body' => 'LSP Kimia Industri & BNSP',
                'duration' => '3 Hari (24 Jam Pelajaran)',
                'icon' => 'bi-wind',
                'image' => 'https://images.unsplash.com/photo-1611273426858-450d8e3c9fce?w=1200&auto=format&fit=crop&q=80',
                'topic_key' => 'sampler_udara',
                'is_featured' => false,
                'is_active' => true,
                'sort_order' => 6,
            ],
            [
                'id' => 7,
                'title' => 'Penanggungjawab Pengendalian Pencemaran Air',
                'slug' => 'penanggungjawab-pengendalian-pencemaran-air',
                'code' => 'SKKNI 187-2016',
                'level_name' => 'Penanggung Jawab PPCA',
                'badge' => 'Sertifikasi BNSP (SKKNI 187-2016)',
                'short_description' => 'Kompetensi manajerial pengendalian pencemaran air industri, kepatuhan perizinan lingkungan, audit IPAL, efisiensi air, dan mitigasi tumpahan limbah cair.',
                'full_description' => 'Program sertifikasi wajib untuk personil yang bertanggung jawab atas pengelolaan air limbah seluruh fasilitas industri. Berdasarkan SKKNI 187-2016, pemegang sertifikat bertanggung jawab memastikan seluruh baku mutu buangan terpenuhi, mengawasi operasional IPAL, menyusun neraca air, serta pelaporan SPARING dan SIMPEL KLHK.',
                'curriculum' => [
                    'Identifikasi Sumber dan Karakteristik Pencemaran Air Limbah Industri',
                    'Perhitungan Neraca Air dan Strategi Reduksi Beban Pencemar Air',
                    'Penilaian Kinerja dan Efisiensi Instalasi Pengolahan Air Limbah (IPAL)',
                    'Penyusunan Rencana Pengelolaan dan Pemantauan Kualitas Air',
                    'Pencegahan dan Tanggap Darurat Pencemaran Air Lingkungan',
                    'Sistem Pelaporan Elektronik Lingkungan Hidup (SIMPEL & SPARING KLHK)',
                    'Asesmen Portofolio dan Wawancara Asesor BNSP'
                ],
                'requirements' => [
                    'Pendidikan minimal D3/S1 Lingkungan, Kimia, Teknik Kimia, Biologi',
                    'Pengalaman kerja minimal 1-2 tahun di bidang pengelolaan lingkungan/IPAL',
                    'Portofolio dokumen izin lingkungan, neraca air, dan laporan RKL-RPL'
                ],
                'certification_body' => 'LSP Kimia Industri & BNSP',
                'duration' => '3 Hari (24 Jam Pelajaran)',
                'icon' => 'bi-shield-shaded',
                'image' => 'https://images.unsplash.com/photo-1544816155-12df9643f363?w=1200&auto=format&fit=crop&q=80',
                'topic_key' => 'ppca',
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 7,
            ],
            [
                'id' => 8,
                'title' => 'Penanggungjawab Pengendalian Pencemaran Udara',
                'slug' => 'penanggungjawab-pengendalian-pencemaran-udara',
                'code' => 'SKKNI 187-2016',
                'level_name' => 'Penanggung Jawab PPPU',
                'badge' => 'Sertifikasi BNSP (SKKNI 187-2016)',
                'short_description' => 'Sertifikasi kompetensi pengelolaan emisi cerobong gas industri, boiler, genset, sistem continuous emission monitoring (CEMS), dan pengendalian ambien.',
                'full_description' => 'Skema Penanggung Jawab Pengendalian Pencemaran Udara (PPPU) mempersiapkan tenaga ahli industri untuk mengelola seluruh emisi sumber tidak bergerak dan emisi fugitive. Menjamin efektivitas unit pengendalian udara seperti baghouse filter, electrostatic precipitator (ESP), cyclone, dan scrubber kimia.',
                'curriculum' => [
                    'Karakteristik Emisi Gas Buang Industri dan Dampak Lingkungan',
                    'Penilaian Kinerja Alat Pengendali Pencemaran Udara (Scrubber, ESP, Bagfilter)',
                    'Penyusunan Rencana Pemantauan Emisi dan Udara Ambien Perusahaan',
                    'Pengawasan Pengoperasian dan Kalibrasi Alat CEMS (Continuous Emission Monitoring)',
                    'Prosedur Tanggap Darurat Pelepasan Gas Berbahaya ke Udara',
                    'Kepatuhan Regulasi Baku Mutu Emisi Permen LHK dan Program PROPER Udara',
                    'Uji Asesmen Kompetensi Manajerial BNSP'
                ],
                'requirements' => ['D3 / S1 Teknik/MIPA', 'Pengalaman kerja di bidang emisi/K3', 'Portofolio dokumen'],
                'certification_body' => 'LSP Kimia Industri & BNSP',
                'duration' => '3 Hari (24 Jam Pelajaran)',
                'icon' => 'bi-clouds-fill',
                'image' => 'https://images.unsplash.com/photo-1498084393753-b411b2d26b34?w=1200&auto=format&fit=crop&q=80',
                'topic_key' => 'pppu',
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 8,
            ],
            [
                'id' => 9,
                'title' => 'Penanggungjawab Operasional Pengolahan Air Limbah',
                'slug' => 'penanggungjawab-operasional-pengolahan-air-limbah',
                'code' => 'SKKNI 187-2016',
                'level_name' => 'Penanggung Jawab Operasional IPAL (POPAL)',
                'badge' => 'Sertifikasi BNSP (SKKNI 187-2016)',
                'short_description' => 'Supervisi operasional harian IPAL fisika, kimia, dan biologi, optimasi dosis koagulan-flokulan, pengelolaan lumpur aktif, dan penanganan gangguan sistem.',
                'full_description' => 'Skema POPAL bertujuan memastikan instalasi pengolahan air limbah beroperasi secara optimal dan stabil setiap hari. Mengajarkan kontrol proses koagulasi, flokulasi, sedimentasi, aerasi lumpur aktif (activated sludge), dissolved air flotation (DAF), monitoring MLSS, SV30, F/M ratio, serta pengurasan lumpur dewatering.',
                'curriculum' => [
                    'Prinsip Operasional Unit IPAL Fisika, Kimia, dan Biologis',
                    'Optimasi Dosis Jar Test Koagulan (PAC, Alum) dan Polimer Flokulan',
                    'Kontrol Parameter Biologis Aerasi: MLSS, DO, pH, dan SVI (Sludge Volume Index)',
                    'Pemeliharaan Pompa Transfer, Blower Aerasi, dan Filter Press Lumpur',
                    'Penanganan Kerusakan Operasional IPAL (Bulking Sludge, Foaming, Toxic Shock)',
                    'Prosedur K3 di Area IPAL (Bahaya Gas H2S, Metana, Confined Space)',
                    'Asesmen Mandiri dan Ujian Kompetensi BNSP'
                ],
                'requirements' => ['D3/S1 Kimia/Lingkungan/Teknik atau SMK Kimia berpengalaman', 'KTP & Pas Foto'],
                'certification_body' => 'LSP Kimia Industri & BNSP',
                'duration' => '3 Hari (24 Jam Pelajaran)',
                'icon' => 'bi-gear-wide-connected',
                'image' => 'https://images.unsplash.com/photo-1574974671999-24b7df56f569?w=1200&auto=format&fit=crop&q=80',
                'topic_key' => 'popal',
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 9,
            ],
            [
                'id' => 10,
                'title' => 'Operator Instalasi Pengolahan Air Limbah',
                'slug' => 'operator-instalasi-pengolahan-air-limbah',
                'code' => 'SKKNI 187-2016',
                'level_name' => 'Operator Lapangan IPAL',
                'badge' => 'Sertifikasi BNSP (SKKNI 187-2016)',
                'short_description' => 'Eksekusi operasional rutin unit IPAL: pengukuran debit, pembubuhan bahan kimia reagen, pembersihan bar screen, dan pencatatan log sheet operasional.',
                'full_description' => 'Mempersiapkan operator garda depan IPAL industri dalam menjalankan SOP pengoperasian mesin pompa, dosing pump kimia, unit aerator, clarifier, dan sistem penanganan lumpur (sludge drying bed).',
                'curriculum' => [
                    'Pengenalan Unit-Unit Pengolahan Air Limbah Industri',
                    'Prosedur Pengenceran dan Pembubuhan Bahan Kimia IPAL dengan Aman',
                    'Pembersihan Screen Penyaring Kasar dan Bak Penangkap Lemak (Grease Trap)',
                    'Pengukuran Debit Air Limbah Menggunakan V-Notch dan Flowmeter',
                    'Pemeriksaan Harian Parameter Lapangan: pH, Suhu, dan Kejernihan',
                    'K3 Operasional IPAL dan Penggunaan APD Masker Gas Kimia',
                    'Uji Demonstrasi Praktik dan Asesmen BNSP'
                ],
                'requirements' => ['SMA/SMK Sederajat', 'Surat tugas perusahaan', 'KTP & Pas Foto'],
                'certification_body' => 'LSP Kimia Industri & BNSP',
                'duration' => '3 Hari (24 Jam Pelajaran)',
                'icon' => 'bi-wrench-adjustable',
                'image' => 'https://images.unsplash.com/photo-1581092160607-ee22621dd758?w=1200&auto=format&fit=crop&q=80',
                'topic_key' => 'op_ipal',
                'is_featured' => false,
                'is_active' => true,
                'sort_order' => 10,
            ],
            [
                'id' => 11,
                'title' => 'Penguji untuk Pengujian Mikrobiologi',
                'slug' => 'penguji-untuk-pengujian-mikrobiologi',
                'code' => 'SKKNI 200-2016',
                'level_name' => 'Analis Mikrobiologi Laboratorium',
                'badge' => 'Sertifikasi BNSP (SKKNI 200-2016)',
                'short_description' => 'Teknik sterilisasi autoklaf, inokulasi aseptik pada Biosafety Cabinet (BSC), isolasi Coliform, E. coli, Salmonella, dan kapang khamir produk industri.',
                'full_description' => 'Standar kompetensi analis mikrobiologi untuk industri pangan, farmasi, kosmetik, dan air bersih. Mempelajari persiapan media agar, teknik tuang (pour plate), sebar (spread plate), metode MPN (Most Probable Number), identifikasi biakan mikroba, serta pemusnahan limbah biohazard.',
                'curriculum' => [
                    'Prinsip Biosafety Level (BSL) dan Good Microbiological Practices (GMP)',
                    'Pembuatan dan Sterilisasi Media Pertumbuhan Mikroorganisme',
                    'Teknik Inokulasi Aseptik Menggunakan Laminar Air Flow / BSC',
                    'Pengujian Angka Lempeng Total (ALT) dan Bakteri Koliform / E. coli',
                    'Uji Konfirmasi Salmonella, Staphylococcus aureus, dan Uji Sterilitas',
                    'Autoklaf Dekontaminasi dan Pengelolaan Limbah Biologis Berbahaya',
                    'Uji Asesmen Praktik Laboratorium Mikrobiologi BNSP'
                ],
                'requirements' => ['D3/S1 Biologi/Farmasi/Kimia atau SMK Analis', 'KTP & Pas Foto'],
                'certification_body' => 'LSP Kimia Industri & BNSP',
                'duration' => '3 Hari (24 Jam Pelajaran)',
                'icon' => 'bi-virus',
                'image' => 'https://images.unsplash.com/photo-1579154204601-01588f351e67?w=1200&auto=format&fit=crop&q=80',
                'topic_key' => 'mikrobiologi',
                'is_featured' => false,
                'is_active' => true,
                'sort_order' => 11,
            ],
            [
                'id' => 12,
                'title' => 'Operator Instrumen Liquid Chromatography',
                'slug' => 'operator-instrumen-liquid-chromatography',
                'code' => 'SKKNI 200-2016',
                'level_name' => 'Operator HPLC / UHPLC Kimia Analitik',
                'badge' => 'Sertifikasi BNSP (SKKNI 200-2016)',
                'short_description' => 'Pengoperasian High Performance Liquid Chromatography (HPLC): degas eluen fase gerak, injeksi autosampler, optimasi kolom C18, dan integrasi kromatogram.',
                'full_description' => 'Mempersiapkan analis instrumen profesional dalam mengoperasikan alat High Performance Liquid Chromatography (HPLC). Menjamin kemampuan preparasi fase gerak isokratik/gradien, pemilihan detektor (UV-Vis/PDA/RID), pembuatan kurva kalibrasi kuantitatif, dan troubleshooting tekanan kolom tinggi.',
                'curriculum' => [
                    'Prinsip Dasar Kromatografi Cair Kinerja Tinggi (HPLC/UHPLC)',
                    'Preparasi Fase Gerak, Filtrasi Membran 0.22 um, dan Degassing Ultrasonik',
                    'Perawatan dan Pemilihan Kolom Kromatografi (Fase Terbalik C18/C8)',
                    'Kalibrasi Detector UV-Vis, DAD, dan Penentuan Retention Time',
                    'Kuantifikasi Senyawa Menggunakan Metode External Standard dan Internal Standard',
                    'Troubleshooting Tekanan Pompa, Peak Tailing, dan Baseline Drift',
                    'Asesmen Praktik Pengoperasian Instrumen HPLC BNSP'
                ],
                'requirements' => ['SMK Kimia Analis / D3 / S1 Kimia/Farmasi', 'Portofolio HPLC'],
                'certification_body' => 'LSP Kimia Industri & BNSP',
                'duration' => '3 Hari (24 Jam Pelajaran)',
                'icon' => 'bi-diagram-3-fill',
                'image' => 'https://images.unsplash.com/photo-1514933651103-005eec06c04b?w=1200&auto=format&fit=crop&q=80',
                'topic_key' => 'hplc',
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 12,
            ],
            [
                'id' => 13,
                'title' => 'Operator Instrumen Gas Chromatography',
                'slug' => 'operator-instrumen-gas-chromatography',
                'code' => 'SKKNI 200-2016',
                'level_name' => 'Operator GC / GC-MS Kimia Analitik',
                'badge' => 'Sertifikasi BNSP (SKKNI 200-2016)',
                'short_description' => 'Pengoperasian kromatografi gas (GC-FID/TCD/MS): pengaturan aliran gas pembawa (Carrier Gas N2/He), suhu injector split/splitless, dan analisis hidrokarbon.',
                'full_description' => 'Memberikan penguasaan operasional Gas Chromatography untuk pemisahan dan pengujian senyawa volatil di industri petrokimia, minyak atsiri, residu pestisida, dan gas alam. Menguasai instalasi kolom kapiler, optimasi rasio split, pembersihan jet detektor FID, serta kalibrasi gas.',
                'curriculum' => [
                    'Prinsip Pemisahan Komponen Volatil pada Gas Chromatography',
                    'Manajemen Gas Bertekanan Tinggi (Carrier, Make-up, Hydrogen, Zero Air)',
                    'Pemrograman Suhu Oven Kolom dan Pengaturan Rasio Injeksi Splitless',
                    'Karakteristik Detektor Flame Ionization Detector (FID) dan Thermal Conductivity (TCD)',
                    'Analisis Profil Asam Lemak, Senyawa VOC, dan Pelarut Organik',
                    'Prosedur Penggantian Septum Injector, Liner Kaca, dan Kolom Kapiler',
                    'Uji Sertifikasi Kompetensi Operator GC BNSP'
                ],
                'requirements' => ['SMK Kimia / D3 / S1 Kimia/Teknik', 'Surat keterangan pengalaman'],
                'certification_body' => 'LSP Kimia Industri & BNSP',
                'duration' => '3 Hari (24 Jam Pelajaran)',
                'icon' => 'bi-speedometer2',
                'image' => 'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?w=1200&auto=format&fit=crop&q=80',
                'topic_key' => 'gc',
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 13,
            ],
            [
                'id' => 14,
                'title' => 'Analis Kimia',
                'slug' => 'analis-kimia',
                'code' => 'SKKNI 200-2016',
                'level_name' => 'Teknisi Analis Kimia Kualitatif & Kuantitatif',
                'badge' => 'Sertifikasi BNSP (SKKNI 200-2016)',
                'short_description' => 'Keahlian terpadu gravimetri, titrimetri volumetri, spektrofotometri UV-Vis, preparasi sampel destruksi asam, dan penjaminan mutu analitik (QC Lab).',
                'full_description' => 'Skema kualifikasi analis kimia umum yang menjadi pondasi operasional laboratorium industri. Mencakup teknik penimbangan analitik presisi 4 desimal, standardisasi larutan baku asam-basa, redoks, titrasi argentometri, ekstraksi cair-cair, dan penyusunan laporan uji berstandar ISO 17025.',
                'curriculum' => [
                    'Penerapan K3 Laboratorium dan Pengelolaan Lemari Asam',
                    'Teknik Penimbangan Presisi Menggunakan Neraca Analitik Mikro',
                    'Pembuatan dan Standardisasi Larutan Sekunder Asam-Basa dan Redoks',
                    'Analisis Gravimetri Kadar Air, Kadar Abu, dan Endapan Berat',
                    'Pengukuran Absorbansi Spektrofotometri UV-Vis Sesuai Hukum Beer-Lambert',
                    'Perhitungan Ketidakpastian Pengukuran Dasar (Uncertainty of Measurement)',
                    'Uji Asesmen Portofolio dan Praktikum BNSP'
                ],
                'requirements' => ['SMK Kimia Analis / D3 / S1 Kimia', 'KTP & Pas Foto'],
                'certification_body' => 'LSP Kimia Industri & BNSP',
                'duration' => '3 Hari (24 Jam Pelajaran)',
                'icon' => 'bi-eyedropper',
                'image' => 'https://images.unsplash.com/photo-1507668077129-56e32842fceb?w=1200&auto=format&fit=crop&q=80',
                'topic_key' => 'analis_kimia',
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 14,
            ],
            [
                'id' => 15,
                'title' => 'Ahli Muda K3 Kimia',
                'slug' => 'ahli-muda-k3-kimia',
                'code' => 'SKKNI 042-2008',
                'level_name' => 'Ahli Muda Keselamatan Kimia Industri',
                'badge' => 'Sertifikasi BNSP (SKKNI 042-2008)',
                'short_description' => 'Identifikasi bahaya bahan kimia berbahaya, interpretasi Safety Data Sheet (SDS/MSDS), pelabelan GHS, penyimpanan bahan reaktif, dan pengendalian bahaya kerja kimia.',
                'full_description' => 'Membentuk Ahli Muda K3 Kimia yang mampu merancang sistem pencegahan kecelakaan bahan kimia di gudang, tangki penyimpanan, dan proses manufaktur. Menguasai klasifikasi bahaya piktogram GHS, matriks kompatibilitas penyimpanan bahan kimia, pengendalian uap toksik, dan APD kimia khusus.',
                'curriculum' => [
                    'Peraturan Perundangan K3 Kimia (Kepmenaker No. 187/1999)',
                    'Penyusunan dan Evaluasi Lembar Data Keselamatan Bahan (LDKB / SDS 16 Bagian)',
                    'Sistem Klasifikasi dan Pelabelan Global Harmonized System (GHS)',
                    'Tata Cara Penyimpanan Bahan Kimia Berbahaya dan Matriks Kompatibilitas',
                    'Penetapan Nilai Ambang Batas (NAB) Faktor Kimia di Tempat Kerja (Permenaker 5/2018)',
                    'Pemilihan Alat Pelindung Diri (Respirator Gas/Uap, Chemical Suit, Sarung Tangan Nitril)',
                    'Asesmen Kompetensi Asesor LSP Kimia Industri BNSP'
                ],
                'requirements' => [
                    'Pendidikan minimal D3/S1 Sains/Teknik atau SMK Kimia dengan pengalaman kerja',
                    'KTP dan pas foto 3x4 formal',
                    'Surat penugasan / pengalaman kerja bidang K3'
                ],
                'certification_body' => 'LSP Kimia Industri & BNSP',
                'duration' => '3 Hari (24 Jam Pelajaran)',
                'icon' => 'bi-exclamation-triangle-fill',
                'image' => 'https://images.unsplash.com/photo-1584467735871-8e85353a8413?w=1200&auto=format&fit=crop&q=80',
                'topic_key' => 'ahli_muda_k3_kimia',
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 15,
            ],
            [
                'id' => 16,
                'title' => 'Ahli Utama K3 Kimia',
                'slug' => 'ahli-utama-k3-kimia',
                'code' => 'SKKNI 042-2008',
                'level_name' => 'Ahli Utama Keselamatan Kimia Korporat',
                'badge' => 'Sertifikasi BNSP (SKKNI 042-2008)',
                'short_description' => 'Kualifikasi tertinggi keselamatan kimia: analisis bahaya proses HAZOP / FMEA, Quantitative Risk Assessment (QRA), audit sistem K3 kimia, dan rencana kontinjensi mayor.',
                'full_description' => 'Skema manajerial puncak untuk pimpinan K3 pada fasilitas industri proses kimia skala besar (Major Hazard Installation). Bertanggung jawab menyusun Dokumen Pengendalian Potensi Bahaya Besar/Menengah, pemodelan dispersi gas toksik (ALOHA), simulasi kebakaran/ledakan BLEVE, dan kepatuhan audit regulasi nasional.',
                'curriculum' => [
                    'Manajemen Keselamatan Proses Kimia (Process Safety Management - PSM)',
                    'Metodologi Hazard and Operability Study (HAZOP) dan Failure Mode Effect Analysis (FMEA)',
                    'Penilaian Risiko Kuantitatif (Quantitative Risk Assessment - QRA) Ledakan & Kebakaran',
                    'Pemodelan Sebaran Dispersi Gas Beracun dan Radius Evakuasi Warga',
                    'Penyusunan Rencana Tanggap Darurat Bencana Kimia Skala Besar (ERP)',
                    'Audit Internal Sistem Manajemen K3 Kimia Perusahaan',
                    'Uji Asesmen Kompetensi Tingkat Utama BNSP'
                ],
                'requirements' => [
                    'Pendidikan minimal S1 Teknik/Kimia/K3 dengan pengalaman kerja manajerial minimal 3-5 tahun',
                    'Portofolio dokumen analisis risiko HAZOP/QRA dan pengendalian bahaya kimia',
                    'KTP dan pas foto 3x4'
                ],
                'certification_body' => 'LSP Kimia Industri & BNSP',
                'duration' => '3 Hari (24 Jam Pelajaran Intensif)',
                'icon' => 'bi-shield-fill-check',
                'image' => 'https://images.unsplash.com/photo-1504384308090-c894fdcc538d?w=1200&auto=format&fit=crop&q=80',
                'topic_key' => 'ahli_utama_k3_kimia',
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 16,
            ],
            [
                'id' => 17,
                'title' => 'Penanggungjawab Operasional Instalasi Pengendalian Pencemaran Udara',
                'slug' => 'penanggungjawab-operasional-instalasi-pengendalian-pencemaran-udara',
                'code' => 'SKKNI 187-2016',
                'level_name' => 'Penanggung Jawab Operasional IPPU (POPU)',
                'badge' => 'Sertifikasi BNSP (SKKNI 187-2016)',
                'short_description' => 'Supervisi operasional harian cerobong industri, pemantauan differential pressure bagfilter, sirkulasi cairan absorber wet scrubber, dan pemeliharaan ID Fan.',
                'full_description' => 'Memastikan instalasi pengendali polusi udara industri beroperasi tanpa gangguan teknis sehingga emisi partikulat dan gas asam (SOx, NOx, HCl) senantiasa di bawah baku mutu yang diizinkan oleh dinas lingkungan hidup.',
                'curriculum' => [
                    'Prinsip Operasional Unit Dust Collector, Cyclone, dan Wet Scrubber',
                    'Pemeriksaan Kinerja Bag Filter dan Penggantian Filter Selongsong',
                    'Pengendalian Rasio Cairan dan Gas pada Packed Bed Scrubber Kimia',
                    'Monitoring Arus Listrik dan Efisiensi Tangkapan Electrostatic Precipitator',
                    'Prosedur Pemeliharaan Induced Draft Fan (ID Fan) dan Damper',
                    'Pencegahan Kondisi Bypass Cerobong dan Tindakan Korektif Darurat',
                    'Uji Asesmen Portofolio POPU BNSP'
                ],
                'requirements' => ['D3/S1 atau SMK berpengalaman di bidang utilitas cerobong/lingkungan', 'KTP & Pas Foto'],
                'certification_body' => 'LSP Kimia Industri & BNSP',
                'duration' => '3 Hari (24 Jam Pelajaran)',
                'icon' => 'bi-cloud-slash-fill',
                'image' => 'https://images.unsplash.com/photo-1542382257-80dedb725088?w=1200&auto=format&fit=crop&q=80',
                'topic_key' => 'popu',
                'is_featured' => false,
                'is_active' => true,
                'sort_order' => 17,
            ],
            [
                'id' => 18,
                'title' => 'Ahli Muda Hygiene Industri',
                'slug' => 'ahli-muda-hygiene-industri',
                'code' => 'SKKNI 209-2008',
                'level_name' => 'Higiene Industri Muda (HIMU)',
                'badge' => 'Sertifikasi BNSP (SKKNI 209-2008)',
                'short_description' => 'Pengukuran faktor bahaya fisika dan kimia di tempat kerja: Sound Level Meter kebisingan, Heat Stress Monitor ISBB, Lux Meter pencahayaan, dan pompa hisap debu.',
                'full_description' => 'Mempersiapkan tenaga profesional higiene industri tingkat muda dalam mengidentifikasi, mengukur, dan mengevaluasi faktor lingkungan kerja sesuai Permenaker No. 5 Tahun 2018 untuk mencegah penyakit akibat kerja (PAK).',
                'curriculum' => [
                    'Dasar-Dasar Higiene Industri dan Penyakit Akibat Kerja (PAK)',
                    'Pengukuran Kebisingan Menggunakan Sound Level Meter dan Noise Dosimeter',
                    'Penilaian Iklim Kerja Panas Menggunakan Indeks Suhu Basah dan Bola (ISBB)',
                    'Pengukuran Intensitas Penerangan Ruangan Kerja Menggunakan Luxmeter',
                    'Sampling Debu Respirabel dan Total Dust Menggunakan Personal Dust Sampler',
                    'Penyusunan Laporan Hasil Pengukuran Lingkungan Kerja Sesuai Format Regulasi',
                    'Uji Kompetensi Asesor BNSP'
                ],
                'requirements' => ['D3/S1 K3/Teknik/Kesehatan Masyarakat', 'KTP & Pas Foto'],
                'certification_body' => 'LSP Kimia Industri & BNSP',
                'duration' => '3 Hari (24 Jam Pelajaran)',
                'icon' => 'bi-heart-pulse-fill',
                'image' => 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=1200&auto=format&fit=crop&q=80',
                'topic_key' => 'himu',
                'is_featured' => false,
                'is_active' => true,
                'sort_order' => 18,
            ],
            [
                'id' => 19,
                'title' => 'Ahli Madya Hygiene Industri',
                'slug' => 'ahli-madya-hygiene-industri',
                'code' => 'SKKNI 209-2008',
                'level_name' => 'Higiene Industri Madya (HIMA)',
                'badge' => 'Sertifikasi BNSP (SKKNI 209-2008)',
                'short_description' => 'Perancangan ventilasi industri (Local Exhaust Ventilation / LEV), evaluasi pajanan kimia jangka panjang, program konservasi pendengaran, dan ergonomi kerja.',
                'full_description' => 'Kualifikasi madya untuk merancang program rekayasa teknik pengendalian faktor lingkungan kerja industri. Fokus pada perancangan hood, ducting, fan pada sistem ventilasi pembuangan lokal (LEV), program perlindungan pernapasan, serta surveilans kesehatan pekerja.',
                'curriculum' => [
                    'Prinsip Perancangan dan Pengujian Sistem Local Exhaust Ventilation (LEV)',
                    'Perhitungan Capture Velocity, Static Pressure, dan Airflow CFM',
                    'Penyusunan Hearing Conservation Program (HCP) di Area Bising Ekstrem',
                    'Strategi Pemantauan Pajanan Bahan Kimia Toksik Kronis (TWA dan STEL)',
                    'Evaluasi Ergonomi Kerja Menggunakan Metode RULA, REBA, dan NIOSH Lifting Equation',
                    'Audit Kepatuhan Higiene Industri di Fasilitas Manufaktur',
                    'Asesmen Portofolio dan Wawancara Tingkat Madya BNSP'
                ],
                'requirements' => ['D3/S1 dengan pengalaman kerja bidang Higiene Industri minimal 2-3 tahun', 'Portofolio kerja'],
                'certification_body' => 'LSP Kimia Industri & BNSP',
                'duration' => '3 Hari (24 Jam Pelajaran)',
                'icon' => 'bi-clipboard2-pulse-fill',
                'image' => 'https://images.unsplash.com/photo-1579684385127-1ef15d508118?w=1200&auto=format&fit=crop&q=80',
                'topic_key' => 'hima',
                'is_featured' => false,
                'is_active' => true,
                'sort_order' => 19,
            ],
            [
                'id' => 20,
                'title' => 'Ahli Utama Hygiene Industri',
                'slug' => 'ahli-utama-hygiene-industri',
                'code' => 'SKKNI 209-2008',
                'level_name' => 'Higiene Industri Utama (HIU)',
                'badge' => 'Sertifikasi BNSP (SKKNI 209-2008)',
                'short_description' => 'Tingkat tertinggi higiene industri: strategi komprehensif eliminasi paparan karsinogenik, toksikologi okupasi korporasi, dan audit menyeluruh kesehatan kerja.',
                'full_description' => 'Pemegang sertifikat Ahli Utama Higiene Industri memimpin kebijakan strategis perlindungan kesehatan kerja di tingkat korporasi multinasional, industri migas, petrokimia, dan farmasi. Menguasai manajemen risiko biological monitoring, pajanan senyawa karsinogenik, dan epidemiologi okupasi.',
                'curriculum' => [
                    'Kebijakan Strategis Sistem Manajemen Higiene Industri Korporasi',
                    'Penilaian Risiko Kesehatan Komprehensif (Comprehensive Health Risk Assessment - CHRA)',
                    'Toksikologi Industri Lanjutan dan Interaksi Multi-Polutan Kimia',
                    'Biological Monitoring dan Indeks Pajanan Biologis (Biological Exposure Indices - BEI)',
                    'Pengendalian Paparan Bahan Karsinogenik, Mutagenik, dan Toksik Reproduksi',
                    'Penyelarasan Standar Higiene Industri dengan Regulasi Internasional (ACGIH / OSHA)',
                    'Uji Asesmen Kompetensi Tingkat Utama BNSP'
                ],
                'requirements' => ['S1/S2 dengan pengalaman manajerial K3/Higiene Industri minimal 5 tahun', 'Portofolio lengkap'],
                'certification_body' => 'LSP Kimia Industri & BNSP',
                'duration' => '3 Hari (24 Jam Pelajaran)',
                'icon' => 'bi-patch-check-fill',
                'image' => 'https://images.unsplash.com/photo-1507679799987-c73779587ccf?w=1200&auto=format&fit=crop&q=80',
                'topic_key' => 'hiu',
                'is_featured' => false,
                'is_active' => true,
                'sort_order' => 20,
            ],
            [
                'id' => 21,
                'title' => 'Petugas Pengambilan Contoh Uji Air',
                'slug' => 'petugas-pengambilan-contoh-uji-air',
                'code' => 'SKKNI 168-2016',
                'level_name' => 'Petugas Pengambil Contoh (PPC) Air',
                'badge' => 'Sertifikasi BNSP (SKKNI 168-2016)',
                'short_description' => 'Sertifikasi resmi PPC Air untuk uji laboratorium terakreditasi ISO/IEC 17025 mencakup air minum, air tanah, air sungai, dan badan air alami.',
                'full_description' => 'Program sertifikasi petugas sampling air resmi yang diakui Komite Akreditasi Nasional (KAN) dan KLHK. Menjamin seluruh tahapan preparasi botol contoh (acid wash), pembilasan, pengambilan air tanpa aerasi berlebih (untuk parameter VOC), dan preservasi lapangan memenuhi standar ketertelusuran metrologi.',
                'curriculum' => [
                    'Jaminan Mutu Pengambilan Contoh Uji Air (Quality Assurance Sampling)',
                    'Penggunaan Blanko Lapangan, Blanko Wadah, dan Blanko Perjalanan (Trip Blank)',
                    'Sampling Air Tanah dari Sumur Pantau Menggunakan Bailer dan Low-Flow Purging',
                    'Sampling Air Sungai Mengacu SNI Berdasarkan Kedalaman dan Lebar Aliran',
                    'Teknik Preservasi Khusus Logam Terlarut (Filtrasi Membran 0.45 um Lapangan)',
                    'Dokumentasi Ketertelusuran Pengambilan Contoh Uji Terakreditasi',
                    'Uji Asesmen Portofolio dan Praktik PPC Air BNSP'
                ],
                'requirements' => ['SMA/SMK IPA/Kimia/Lingkungan', 'KTP & Pas Foto'],
                'certification_body' => 'LSP Kimia Industri & BNSP',
                'duration' => '3 Hari (24 Jam Pelajaran)',
                'icon' => 'bi-droplet',
                'image' => 'https://images.unsplash.com/photo-1527482797697-8795b05a13fe?w=1200&auto=format&fit=crop&q=80',
                'topic_key' => 'ppc_air',
                'is_featured' => false,
                'is_active' => true,
                'sort_order' => 21,
            ],
            [
                'id' => 22,
                'title' => 'Pengawas Lapangan Pengambilan (Field Supervisor) Contoh Uji Air',
                'slug' => 'pengawas-lapangan-pengambilan-contoh-uji-air',
                'code' => 'SKKNI 168-2016',
                'level_name' => 'Supervisor Lapangan Sampling Air',
                'badge' => 'Sertifikasi BNSP (SKKNI 168-2016)',
                'short_description' => 'Supervisi tim sampler lapangan, verifikasi titik koordinat GPS, validasi kontrol mutu (QC Duplicate/Spike), dan otorisasi dokumen Chain of Custody.',
                'full_description' => 'Mempersiapkan penyelia lapangan yang memimpin ekspedisi pengambilan sampel air skala regional atau industri besar. Bertugas memastikan keselamatan tim di lokasi terpencil, kepatuhan metodologi SNI, dan keabsahan legal sampel sebelum masuk ke laboratorium analitik.',
                'curriculum' => [
                    'Penyusunan Rencana Sampling Terpadu dan Penentuan Titik Koordinat Geospasial',
                    'Supervisi Keselamatan Kerja Tim Sampling di Medan Berbahaya',
                    'Verifikasi Kalibrasi Alat Lapangan (Multi-Parameter Water Quality Meter)',
                    'Evaluasi Kontrol Mutu Hasil Sampling (Relative Percent Difference / RPD Duplo)',
                    'Penyelesaian Masalah Teknis Sampling Lapangan dan Penolakan Sampel Rusak',
                    'Otorisasi Berita Acara dan Penyerahan Sampel ke Laboratorium',
                    'Asesmen Mandiri dan Uji Kompetensi Supervisor BNSP'
                ],
                'requirements' => ['D3/S1 Kimia/Lingkungan berpengalaman', 'Portofolio sampling'],
                'certification_body' => 'LSP Kimia Industri & BNSP',
                'duration' => '3 Hari (24 Jam Pelajaran)',
                'icon' => 'bi-binoculars-fill',
                'image' => 'https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?w=1200&auto=format&fit=crop&q=80',
                'topic_key' => 'supervisor_air',
                'is_featured' => false,
                'is_active' => true,
                'sort_order' => 22,
            ],
            [
                'id' => 23,
                'title' => 'Pengoperasian Instalasi Pengelolaan Limbah B3',
                'slug' => 'pengoperasian-instalasi-pengelolaan-limbah-b3',
                'code' => 'SKKNI 187-2016',
                'level_name' => 'Operator Instalasi Pengelolaan Limbah B3 (OPLB3)',
                'badge' => 'Sertifikasi BNSP (SKKNI 187-2016)',
                'short_description' => 'Pengoperasian insinerator limbah medis/B3, unit solidifikasi/stabilisasi semen, evaporator air limbah beracun, dan netralisasi kimia asam basa pekat.',
                'full_description' => 'Skema teknis operasional untuk operator instalasi pemusnahan dan pengolahan limbah B3. Mengajarkan pengoperasian insinerator rotary kiln/static bed dengan suhu primary chamber 800°C dan secondary chamber 1000°C, pemantauan scrubber emisi dioxin/furan, proses solidifikasi fly ash, dan netralisasi.',
                'curriculum' => [
                    'Karakteristik Limbah B3 (Mudah Meledak, Terbakar, Reaktif, Beracun, Korosif)',
                    'Prosedur Pengoperasian Unit Insinerator Limbah B3 dan Kontrol Suhu Pembakaran',
                    'Pengoperasian Sistem Solidifikasi dan Stabilisasi (S/S) Lumpur B3',
                    'Proses Pengolahan Kimiawi: Netralisasi Asam-Basa, Presipitasi Logam Berat',
                    'Penanganan Abu Insinerator (Bottom Ash & Fly Ash) Sesuai Regulasi',
                    'K3 Operasional Fasilitas Pengolahan Limbah B3 dan APD Hazmat',
                    'Uji Asesmen Praktik dan Teori Operator Limbah B3 BNSP'
                ],
                'requirements' => ['SMA/SMK Sederajat', 'Surat tugas perusahaan', 'KTP & Pas Foto'],
                'certification_body' => 'LSP Kimia Industri & BNSP',
                'duration' => '3 Hari (24 Jam Pelajaran)',
                'icon' => 'bi-radioactive',
                'image' => 'https://images.unsplash.com/photo-1563245372-f21724e3856d?w=1200&auto=format&fit=crop&q=80',
                'topic_key' => 'op_lb3',
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 23,
            ],
            [
                'id' => 24,
                'title' => 'Pemantauan & Analisis Pengelolaan Limbah B3',
                'slug' => 'pemantauan-analisis-pengelolaan-limbah-b3',
                'code' => 'SKKNI 187-2016',
                'level_name' => 'Analis Pemantauan Limbah B3',
                'badge' => 'Sertifikasi BNSP (SKKNI 187-2016)',
                'short_description' => 'Pengujian karakteristik bahaya limbah B3 (Uji Toksisitas TCLP, LD50, Uji Korosifitas, Titik Nyala Flash Point) dan evaluasi kepatuhan baku mutu penimbunan.',
                'full_description' => 'Skema pemantauan dan analisis laboratorium khusus limbah bahan berbahaya dan beracun. Mempersiapkan analis dalam melakukan ekstraksi Toxicity Characteristic Leaching Procedure (TCLP), pengukuran logam berat terlarut, uji mudah terbakar closed cup flash point, dan pelaporan neraca limbah B3.',
                'curriculum' => [
                    'Regulasi Identifikasi dan Uji Karakteristik Limbah B3 (PP 22/2021)',
                    'Metode Uji Toxicity Characteristic Leaching Procedure (TCLP SNI 03-3453)',
                    'Uji Toksisitas Akut Lethal Dose 50 (LD50) pada Organisme Uji',
                    'Penetapan Titik Nyala (Flash Point) Limbah Cair Mudah Terbakar',
                    'Analisis Logam Berat (Hg, Pb, Cd, Cr, As) pada Limbah Lumpur Menggunakan AAS/ICP',
                    'Penyusunan Laporan Hasil Pemantauan Limbah B3 untuk Persyaratan Landfill',
                    'Uji Kompetensi Asesor LSP Kimia Industri BNSP'
                ],
                'requirements' => ['D3/S1 Kimia/Lingkungan/Farmasi', 'Pengalaman uji lab', 'KTP & Pas Foto'],
                'certification_body' => 'LSP Kimia Industri & BNSP',
                'duration' => '3 Hari (24 Jam Pelajaran)',
                'icon' => 'bi-search',
                'image' => 'https://images.unsplash.com/photo-1530497610245-94d3c16cda28?w=1200&auto=format&fit=crop&q=80',
                'topic_key' => 'analisis_lb3',
                'is_featured' => false,
                'is_active' => true,
                'sort_order' => 24,
            ],
            [
                'id' => 25,
                'title' => 'Pengawasan Pengolahan Limbah B3',
                'slug' => 'pengawasan-pengolahan-limbah-b3',
                'code' => 'SKKNI 187-2016',
                'level_name' => 'Supervisor Pengawas Pengolahan Limbah B3',
                'badge' => 'Sertifikasi BNSP (SKKNI 187-2016)',
                'short_description' => 'Supervisi kepatuhan perizinan TPS B3, penataan tata ruang drum/IBC, manifes elektronik Festronik, penyerahan ke transporter berizin, dan audit neraca B3.',
                'full_description' => 'Kualifikasi pengawas manajerial untuk menjamin seluruh siklus limbah B3 (Cradle-to-Grave) di perusahaan berjalan taat hukum. Memastikan TPS Limbah B3 memiliki spill containment, ventilasi anti-ledakan, simbol & label GHS, logbook pencatatan masa simpan 90/180/365 hari, serta integrasi Festronik KLHK.',
                'curriculum' => [
                    'Ketentuan Teknis Bangunan Tempat Penyimpanan Sementara (TPS) Limbah B3',
                    'Tata Cara Pengemasan, Pemberian Simbol, dan Pelabelan Limbah B3',
                    'Pengawasan Masa Simpan dan Pencatatan Logbook Neraca Limbah B3',
                    'Pengoperasian Aplikasi Manifes Elektronik Limbah B3 (Festronik KLHK)',
                    'Verifikasi Legalitas Perizinan Pengangkut (Transporter) dan Pemanfaat B3',
                    'Penyusunan Rencana Tanggap Darurat Tumpahan Limbah B3 Skala Pabrik',
                    'Asesmen Mandiri dan Wawancara Kompetensi Supervisor BNSP'
                ],
                'requirements' => ['D3/S1 Teknik/Lingkungan/Kimia', 'Pengalaman supervisi limbah B3', 'Portofolio'],
                'certification_body' => 'LSP Kimia Industri & BNSP',
                'duration' => '3 Hari (24 Jam Pelajaran)',
                'icon' => 'bi-person-check-fill',
                'image' => 'https://images.unsplash.com/photo-1542744173-8e7e53415bb0?w=1200&auto=format&fit=crop&q=80',
                'topic_key' => 'pengawas_lb3',
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 25,
            ],
            [
                'id' => 26,
                'title' => 'Pelaksanaan Analisis Proksimat',
                'slug' => 'pelaksanaan-analisis-proksimat',
                'code' => 'SKKNI 347-2015',
                'level_name' => 'Analis Proksimat Kimia Pangan & Pakan',
                'badge' => 'Sertifikasi BNSP (SKKNI 347-2015)',
                'short_description' => 'Pengujian lengkap kadar air (Moisture), kadar abu (Ash), protein kasar (Kjeldahl), lemak kasar (Soxhlet), dan serat kasar (Crude Fiber).',
                'full_description' => 'Mempersiapkan analis kimia untuk industri pangan, pakan ternak, batubara, dan agroindustri dalam melaksanakan analisis proksimat sesuai standar AOAC dan SNI. Menguasai destruksi protein Kjeldahl, distilasi amonia, titrasi asam borat, serta ekstraksi lemak pelarut heksana.',
                'curriculum' => [
                    'Prinsip Dasar Analisis Proksimat Sesuai Standar SNI dan AOAC',
                    'Penetapan Kadar Air Menggunakan Oven Konveksi dan Desikator Vakum',
                    'Penetapan Kadar Abu Menggunakan Tanur Muffle Furnace Suhu 550°C-600°C',
                    'Penetapan Protein Kasar Melalui Destruksi, Distilasi, dan Titrasi Mikro-Kjeldahl',
                    'Penetapan Lemak Kasar Menggunakan Ekstraktor Soxhlet dan Pelarut Non-Polar',
                    'Penetapan Serat Kasar melalui Pencernaan Asam Kuat dan Basa Kuat',
                    'Asesmen Demonstrasi Praktikum dan Portofolio Analis BNSP'
                ],
                'requirements' => ['SMK Kimia / D3 / S1 Kimia/Teknologi Pangan/Peternakan', 'KTP & Pas Foto'],
                'certification_body' => 'LSP Kimia Industri & BNSP',
                'duration' => '3 Hari (24 Jam Pelajaran)',
                'icon' => 'bi-egg-fried',
                'image' => 'https://images.unsplash.com/photo-1509440159596-0249088772ff?w=1200&auto=format&fit=crop&q=80',
                'topic_key' => 'proksimat',
                'is_featured' => false,
                'is_active' => true,
                'sort_order' => 26,
            ],
            [
                'id' => 27,
                'title' => 'Laboran Laboratorium Kimia',
                'slug' => 'laboran-laboratorium-kimia',
                'code' => 'SKKNI 200-2016',
                'level_name' => 'Laboran Pengelola Laboratorium Kimia',
                'badge' => 'Sertifikasi BNSP (SKKNI 200-2016)',
                'short_description' => 'Pengelolaan inventaris bahan kimia, penyimpanan reagen sesuai compatibility chart, kalibrasi rutin peralatan gelas volumetrik, dan manajemen limbah lab.',
                'full_description' => 'Standardisasi kompetensi pranata laboratorium / laboran kimia di industri manufaktur, universitas, dan lembaga riset. Mencakup manajemen penyimpanan asam pekat, pelarut eter/flammable di kabinet tahan api, pembersihan peralatan gelas kimia, dan peremajaan stok reagen.',
                'curriculum' => [
                    'Manajemen Bahan Kimia Laboratorium dan Inventarisasi Kartu Stok',
                    'Penyimpanan Bahan Kimia Berdasarkan Klasifikasi Kompatibilitas Kimia',
                    'Pencucian, Sterilisasi, dan Kalibrasi Alat Gelas Volumetrik (Buret, Pipet Gondok)',
                    'Pengoperasian Alat Penunjang: Waterbath, Shaker, Centrifuge, pH Meter',
                    'Pengelolaan Limbah B3 Laboratorium (Botol Buangan Pelarut Halogen & Non-Halogen)',
                    'Pencegahan Kecelakaan Kerja dan Penggunaan Eyewash & Safety Shower',
                    'Uji Kompetensi Portofolio dan Praktik Laboran BNSP'
                ],
                'requirements' => ['SMA/SMK Sederajat (Jurusan Kimia/IPA diutamakan)', 'KTP & Pas Foto'],
                'certification_body' => 'LSP Kimia Industri & BNSP',
                'duration' => '3 Hari (24 Jam Pelajaran)',
                'icon' => 'bi-box-seam',
                'image' => 'https://images.unsplash.com/photo-1579154204601-01588f351e67?w=1200&auto=format&fit=crop&q=80',
                'topic_key' => 'laboran',
                'is_featured' => false,
                'is_active' => true,
                'sort_order' => 27,
            ],
            [
                'id' => 28,
                'title' => 'Penanganan dan Tanggap Darurat Bahan Kimia (Chemical Safety)',
                'slug' => 'penanganan-dan-tanggap-darurat-bahan-kimia',
                'code' => 'SKKNI 200-2016',
                'level_name' => 'Spesialis Tanggap Darurat Kimia',
                'badge' => 'Sertifikasi BNSP (SKKNI 200-2016)',
                'short_description' => 'Prosedur respons cepat tumpahan bahan kimia (Chemical Spill Response), penggunaan Spill Kit absorben, netralisasi ceceran toksik, dan evakuasi zona bahaya.',
                'full_description' => 'Pelatihan intensif bagi tim tanggap darurat industri kimia. Peserta dilatih mengidentifikasi kode UN bahan kimia, mengenakan APD Hazmat Level A/B/C dengan SCBA (Self-Contained Breathing Apparatus), membendung tumpahan menggunakan absorbent boom/pads, dan dekontaminasi personil.',
                'curriculum' => [
                    'Prinsip Sistem Komando Tanggap Darurat Bencana Kimia (Incident Command System)',
                    'Penggunaan Buku Panduan Darurat Kimia (Emergency Response Guidebook / ERG)',
                    'Pemilihan dan Penggunaan Alat Pelindung Diri Hazmat serta SCBA Mandiri',
                    'Teknik Pembendungan dan Netralisasi Tumpahan Asam, Basa, dan Pelarut Organik',
                    'Prosedur Penggunaan Spill Kit Granular, Pillows, dan Absorbent Boom',
                    'Teknik Dekontaminasi Korban dan Personel Tim Penyelamat di Zona Transisi',
                    'Simulasi Lapangan Penanganan Kebocoran Tangki Kimia dan Asesmen BNSP'
                ],
                'requirements' => ['SMA/SMK/D3/S1', 'Sehat jasmani rohani', 'KTP & Pas Foto'],
                'certification_body' => 'LSP Kimia Industri & BNSP',
                'duration' => '3 Hari (24 Jam Pelajaran)',
                'icon' => 'bi-fire',
                'image' => 'https://images.unsplash.com/photo-1544816155-12df9643f363?w=1200&auto=format&fit=crop&q=80',
                'topic_key' => 'chemical_safety',
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 28,
            ],
            [
                'id' => 29,
                'title' => 'Penanganan dan Tanggap Darurat Limbah Bahan Berbahaya dan Beracun (B3)',
                'slug' => 'penanganan-dan-tanggap-darurat-limbah-b3',
                'code' => 'SKKNI 191-2019',
                'level_name' => 'Spesialis Emergency Response Limbah B3',
                'badge' => 'Sertifikasi BNSP (SKKNI 191-2019)',
                'short_description' => 'Mitigasi darurat insiden tumpahan limbah B3 saat pengangkutan jalan raya, kebocoran drum TPS, kebakaran limbah flammable, dan pemulihan lahan terkontaminasi.',
                'full_description' => 'Sertifikasi kompetensi khusus penanggulangan kedaruratan limbah B3 sesuai regulasi terbaru SKKNI 191-2019. Membekali personil industri dan armada transporter keahlian isolasi area kecelakaan, penutupan kebocoran tangki, pengamanan limbah radioaktif/infeksius, dan pemulihan lingkungan tercemar.',
                'curriculum' => [
                    'Identifikasi Bahaya dan Skenario Kedaruratan Limbah B3 di Jalur Transportasi & Pabrik',
                    'Penyusunan Rencana Kontinjensi Tanggap Darurat Limbah B3 Perusahaan',
                    'Teknik Pengisolasian Zona Bahaya (Hot Zone, Warm Zone, Cold Zone)',
                    'Operasional Penambalan Kebocoran Tangki dan Drum Bertekanan',
                    'Penanganan Kebakaran Khusus Limbah B3 Menggunakan Busa Pemadam (AFFF Foam)',
                    'Prosedur Pembersihan Lahan Terkontaminasi dan Remediasi Tanah Pasca Tumpahan',
                    'Uji Sertifikasi Asesor Tanggap Darurat B3 BNSP'
                ],
                'requirements' => ['SMA/SMK/D3/S1', 'Surat keterangan sehat', 'KTP & Pas Foto'],
                'certification_body' => 'LSP Kimia Industri & BNSP',
                'duration' => '3 Hari (24 Jam Pelajaran)',
                'icon' => 'bi-truck-flatbed',
                'image' => 'https://images.unsplash.com/photo-1581092335397-9583fe92d232?w=1200&auto=format&fit=crop&q=80',
                'topic_key' => 'er_lb3',
                'is_featured' => false,
                'is_active' => true,
                'sort_order' => 29,
            ],
            [
                'id' => 30,
                'title' => 'Pemantauan dan Analisis Pengolahan Sampah/ Limbah Padat Non-B3',
                'slug' => 'pemantauan-dan-analisis-pengolahan-sampah-padat-non-b3',
                'code' => 'SKKNI 187-2016',
                'level_name' => 'Analis Pengolahan Sampah Padat Non-B3',
                'badge' => 'Sertifikasi BNSP (SKKNI 187-2016)',
                'short_description' => 'Pengelolaan limbah padat industri non-B3, karakterisasi komposisi sampah, program reduksi 3R (Reduce, Reuse, Recycle), dan monitoring landfill.',
                'full_description' => 'Mempersiapkan tenaga teknis lingkungan dalam menyusun sistem pengelolaan sampah domestik industri dan sisa proses non-B3. Menguasai audit timbulan sampah, proses pengomposan aerobik, pemadatan baling pres, daur ulang plastik/kertas, dan kepatuhan regulasi persampahan daerah.',
                'curriculum' => [
                    'Kebijakan dan Regulasi Pengelolaan Sampah Nasional (UU 18/2008)',
                    'Karakterisasi Densitas, Kadar Air, dan Komposisi Fisik Sampah Padat',
                    'Penerapan Program 3R (Reduce, Reuse, Recycle) dan Circular Economy Pabrik',
                    'Teknik Pengomposan Skala Industri dan Pemanfaatan Energi Biomassa',
                    'Pemantauan Air Lindi (Leachate) dan Gas Metana pada Tempat Penimbunan',
                    'Penyusunan Rencana Strategis Pengurangan Sampah Fasilitas Industri',
                    'Asesmen Mandiri dan Ujian Kompetensi BNSP'
                ],
                'requirements' => ['SMA/SMK Sederajat / D3 / S1', 'KTP & Pas Foto'],
                'certification_body' => 'LSP Kimia Industri & BNSP',
                'duration' => '3 Hari (24 Jam Pelajaran)',
                'icon' => 'bi-recycle',
                'image' => 'https://images.unsplash.com/photo-1532996122724-e3c354a0b15b?w=1200&auto=format&fit=crop&q=80',
                'topic_key' => 'non_b3',
                'is_featured' => false,
                'is_active' => true,
                'sort_order' => 30,
            ],
            [
                'id' => 31,
                'title' => 'Perencanaan Produksi dan Pengendali Persediaan Industri Kimia',
                'slug' => 'perencanaan-produksi-dan-pengendali-persediaan-industri-kimia',
                'code' => 'SKKNI 110-2018',
                'level_name' => 'PPIC Industri Kimia (Production Planning & Inventory Control)',
                'badge' => 'Sertifikasi BNSP (SKKNI 110-2018)',
                'short_description' => 'Perencanaan kapasitas produksi reaktor kimia, manajemen stok bahan baku cair/padat (Raw Material Inventory), Economic Order Quantity (EOQ), dan Material Requirement Planning (MRP).',
                'full_description' => 'Standardisasi keahlian PPIC untuk pabrik petrokimia, pupuk, cat, farmasi, dan polimer. Membekali peserta kemampuan peramalan permintaan (forecasting), penjadwalan batch reaktor kimia, kontrol masa kedaluwarsa bahan baku reaktif, dan optimalisasi rantai pasok kimia.',
                'curriculum' => [
                    'Konsep PPIC Khusus Industri Proses Kimia Berkelanjutan dan Batch',
                    'Peramalan Kebutuhan Pasar dan Penyusunan Master Production Schedule (MPS)',
                    'Sistem Material Requirement Planning (MRP) untuk Bahan Baku Kimia',
                    'Perhitungan Economic Order Quantity (EOQ), Reorder Point, dan Safety Stock',
                    'Manajemen Gudang Kimia: First-In First-Out (FIFO) dan Expiry Date Tracking',
                    'Pengendalian Bottleneck Kapasitas Reaktor dan Efisiensi OEE Mesin',
                    'Uji Kompetensi Asesor LSP Kimia Industri BNSP'
                ],
                'requirements' => ['D3/S1 Teknik Industri/Teknik Kimia/Manajemen Logistik', 'KTP & Pas Foto'],
                'certification_body' => 'LSP Kimia Industri & BNSP',
                'duration' => '3 Hari (24 Jam Pelajaran)',
                'icon' => 'bi-boxes',
                'image' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=1200&auto=format&fit=crop&q=80',
                'topic_key' => 'ppic_kimia',
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 31,
            ],
            [
                'id' => 32,
                'title' => 'Penerapan Keselamatan & Kesehatan Kerja (K3) Laboratorium',
                'slug' => 'penerapan-k3-laboratorium',
                'code' => 'SKKNI 200-2016',
                'level_name' => 'Spesialis K3 Laboratorium Kimia',
                'badge' => 'Sertifikasi BNSP (SKKNI 200-2016)',
                'short_description' => 'Manajemen risiko keselamatan laboratorium: inspeksi lemari asam (Fume Hood), penanganan luka bakar asam/basa, penggunaan APD kacamata goggle, dan evakuasi kebakaran lab.',
                'full_description' => 'Program sertifikasi K3 Laboratorium komprehensif mengacu pada SKKNI 200-2016. Memastikan seluruh personil riset, dosen, teknisi, dan penguji memahami bahaya spesifik laboratorium kimia, pencegahan ledakan distilasi pelarut mudah menguap, prosedur pertolongan pertama, dan audit keselamatan kerja laboratorium berkala.',
                'curriculum' => [
                    'Prinsip Chemical Hygiene Plan (CHP) dan Peraturan Perundangan K3 Lab',
                    'Identifikasi Bahaya dan Penilaian Risiko Laboratorium Kimia (Job Safety Analysis)',
                    'Standar Teknis dan Pengujian Kecepatan Alir Udara Lemari Asam (Fume Hood)',
                    'Pemilihan APD Laboratorium: Kacamata Chemical Splash Goggle, Jas Lab Tahan Asam',
                    'Pertolongan Pertama pada Kecelakaan Laboratorium (Luka Bakar Kimia, Terhirup Uap)',
                    'Sistem Proteksi Kebakaran Laboratorium: Alat Pemadam CO2 dan Selimut Api (Fire Blanket)',
                    'Asesmen Mandiri dan Uji Sertifikasi Kompetensi BNSP'
                ],
                'requirements' => ['SMA/SMK IPA/Kimia / D3 / S1', 'Surat keterangan sehat', 'KTP & Pas Foto'],
                'certification_body' => 'LSP Kimia Industri & BNSP',
                'duration' => '3 Hari (24 Jam Pelajaran)',
                'icon' => 'bi-shield-check',
                'image' => 'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?w=1200&auto=format&fit=crop&q=80',
                'topic_key' => 'k3_lab',
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 32,
            ],
        ];
    }

    /**
     * Get 200 Distinct Article Topics - EVERY TOPIC STARTS WITH "Training"
     */
    public static function getArticleTopics(): array
    {
        return [
            // Topik 1-25: Dasar K3 Kimia & Regulasi LSP BNSP
            1 => 'Training K3 Kimia: Panduan Lengkap Standarisasi Sertifikasi BNSP dan Regulasi Ketenagakerjaan',
            2 => 'Training Ahli Muda K3 Kimia: Implementasi Sistem Manajemen Keselamatan Bahan Berbahaya dan Beracun (B3)',
            3 => 'Training Ahli Utama K3 Kimia: Manajemen Risiko Kuantitatif (QRA) dan Pengendalian Bahaya Besar (MHI)',
            4 => 'Training K3 Kimia: Interpretasi Safety Data Sheet (SDS) 16 Bagian Berdasarkan Standar GHS',
            5 => 'Training K3 Kimia: Sistem Pelabelan dan Piktogram Bahaya Globally Harmonized System (GHS)',
            6 => 'Training K3 Kimia: Matriks Kompatibilitas dan Standar Penyimpanan Reagen Kimia Industri',
            7 => 'Training K3 Kimia: Nilai Ambang Batas (NAB) Faktor Kimia dan Evaluasi Paparan Permenaker 5/2018',
            8 => 'Training K3 Kimia: Prosedur Penggunaan Alat Pelindung Diri (APD) Khusus Bahan Korosif dan Karsinogenik',
            9 => 'Training K3 Kimia: Pengelolaan Gudang Bahan Kimia Sesuai Standar NFPA 704 Diamond',
            10 => 'Training K3 Kimia: Audit Internal Keselamatan Kimia Fasilitas Manufaktur dan Gudang Logistik',
            11 => 'Training K3 Kimia: Protokol Penanganan Bahan Reaktif terhadap Air dan Zat Pengoksidasi Kuat',
            12 => 'Training K3 Kimia: Identifikasi Bahaya Gas Terkompresi dan Standar Penyimpanan Tabung Gas Silinder',
            13 => 'Training K3 Kimia: Manajemen Keselamatan Pelarut Organik Mudah Terbakar (Flammable Solvents)',
            14 => 'Training K3 Kimia: Pencegahan Bahaya Peledakan Debu Kimia (Combustible Dust Explosion)',
            15 => 'Training K3 Kimia: Penyusunan Dokumen Job Safety Analysis (JSA) pada Reaktor Kimia Bertekanan',
            16 => 'Training K3 Kimia: Prosedur Lockout Tagout (LOTO) pada Perpipaan dan Katup Kimia Berbahaya',
            17 => 'Training K3 Kimia: Manajemen Paparan Bahan Kimia Toksik Kronis dan Pencegahan Penyakit Akibat Kerja',
            18 => 'Training K3 Kimia: Standard Operating Procedure (SOP) Pengisian dan Pembongkaran Tangki Truk Kimia',
            19 => 'Training K3 Kimia: Pengendalian Risiko Statis Listrik pada Penyaluran Cairan Pelarut Volatil',
            20 => 'Training K3 Kimia: Penggunaan Detektor Gas Portabel Multi-Gas (LEL, O2, CO, H2S) di Area Proses',
            21 => 'Training K3 Kimia: Prosedur Izin Masuk Tangki dan Bejana Reaksi Kimia (Confined Space Entry)',
            22 => 'Training K3 Kimia: Protokol Keselamatan Kerja Pembongkaran Asbes dan Bahan Berbahaya Silika',
            23 => 'Training K3 Kimia: Pengelolaan Bahaya Radiasi Pengion pada Pengujian Analitis Industri Kimia',
            24 => 'Training K3 Kimia: Standar Ventilasi Pengenceran dan Pertukaran Udara Ruang Proses Kimia',
            25 => 'Training K3 Kimia: Pengawasan Pelaksanaan Uji Kompetensi Asesi pada LSP Kimia Industri BNSP',

            // Topik 26-50: Pengendalian Mutu AMDK (Air Minum Dalam Kemasan)
            26 => 'Training Pengamat Visual Pengendalian Mutu AMDK: Standar Inspeksi Fisik Produk Sesuai SNI 3553',
            27 => 'Training Pengendalian Mutu AMDK: Deteksi Kebocoran Seal Botol, Galon, dan Cup Kemasan Otomatis',
            28 => 'Training Analis Fisika Kimia AMDK: Prosedur Titrasi Kompleksometri Penetapan Kesadahan Total Air',
            29 => 'Training Analis AMDK: Pengukuran Daya Hantar Listrik (DHL) dan Total Dissolved Solids (TDS)',
            30 => 'Training Analis AMDK: Pengujian Parameter Kekeruhan Air Minum Menggunakan Nephelometric Turbidimeter',
            31 => 'Training Analis AMDK: Penentuan Kadar Klorida dan Sulfat Sesuai Metode Standar APHA',
            32 => 'Training Analis AMDK: Pengujian Logam Berat Besi, Mangan, dan Timbal dengan Spektrofotometer AAS',
            33 => 'Training Supervisor Pengendalian Mutu AMDK: Validasi Sistem Ozonisasi dan Disinfeksi Sinar UV',
            34 => 'Training Supervisor AMDK: Penerapan Hazard Analysis Critical Control Point (HACCP) Lini Produksi',
            35 => 'Training Supervisor AMDK: Manajemen Sistem Pembersihan Otomatis Clean-in-Place (CIP) Tangki Air',
            36 => 'Training Pengendalian Mutu AMDK: Monitoring Parameter Organoleptik Bau, Rasa, dan Kejernihan',
            37 => 'Training Pengendalian Mutu AMDK: Kalibrasi Harian Sensor pH Meter dan Refraktometer Brix',
            38 => 'Training Pengendalian Mutu AMDK: Audit Fasilitas Pengisian Ruang Bersih (Cleanroom Filling Room)',
            39 => 'Training Pengendalian Mutu AMDK: Pengujian Cemaran Logam Toksik Arsen, Kadmium, dan Merkuri',
            40 => 'Training Pengendalian Mutu AMDK: Penentuan Angka Permanganat (Zat Organik) pada Air Baku',
            41 => 'Training Pengendalian Mutu AMDK: Prosedur Pengujian Residual Ozon Menggunakan Komparator DPD',
            42 => 'Training Pengendalian Mutu AMDK: Validasi Filter Mikron Catridge dan Membran Reverse Osmosis',
            43 => 'Training Pengendalian Mutu AMDK: Pengujian Mikrobiologi Angka Lempeng Total (ALT) Produk Jadi',
            44 => 'Training Pengendalian Mutu AMDK: Pengujian Bakteri Koliform dan Pseudomonas aeruginosa Air Kemasan',
            45 => 'Training Pengendalian Mutu AMDK: Penanganan Ketidaksesuaian Batch (Non-Conformance Product Protocol)',
            46 => 'Training Pengendalian Mutu AMDK: Penelusuran Nomor Bets (Batch Traceability) dan Recall Procedure',
            47 => 'Training Pengendalian Mutu AMDK: Pengendalian Mutu Tutup Galon dan Shrink Label Kemasan',
            48 => 'Training Pengendalian Mutu AMDK: Pengujian Ketahanan Jatuh (Drop Test) dan Kompresi Dus Karton',
            49 => 'Training Pengendalian Mutu AMDK: Verifikasi Izin Edar BPOM dan Kepatuhan Regulasi Pangan',
            50 => 'Training Pengendalian Mutu AMDK: Penyusunan Manual Mutu Laboratorium Pengujian AMDK',

            // Topik 51-75: Sampling Lingkungan (Air, Limbah, Udara)
            51 => 'Training Operator Pengambilan Contoh Air: Teknik Sampling Air Permukaan Mengacu SNI 6989',
            52 => 'Training Petugas Pengambilan Contoh Uji Air: Tata Kelola Jaminan Mutu Akreditasi KAN ISO 17025',
            53 => 'Training Pengawas Lapangan Pengambilan Contoh Air: Validasi Data Pengukuran In-Situ Lapangan',
            54 => 'Training Sampling Air Tanah: Penggunaan Low-Flow Purging dan Pemanfaatan Sumur Pantau Industri',
            55 => 'Training Sampling Air Sungai: Penentuan Titik Stratifikasi Kedalaman dan Debit Aliran',
            56 => 'Training Operator Pengambilan Contoh Limbah: Standar Sampling Titik Penaatan (Outfall) Pabrik',
            57 => 'Training Sampling Air Limbah: Perbedaan Metode Grab Sample vs Composite Gabungan Waktu',
            58 => 'Training Sampling Limbah: Prosedur Pengawetan Preservasi Asam Nitrat untuk Parameter Logam',
            59 => 'Training Sampling Limbah: Pengambilan Contoh Minyak dan Lemak Bebas Kontaminasi Plastik',
            60 => 'Training Operator Pengambilan Contoh Udara: Pengoperasian High Volume Air Sampler (HVAS) Ambien',
            61 => 'Training Sampling Udara: Pengukuran Partikulat Debu PM2.5 dan PM10 dengan Filter Kaca Kuarsa',
            62 => 'Training Sampling Udara Ambien: Penyerapan Gas Sulfur Dioksida (SO2) Menggunakan Midget Impinger',
            63 => 'Training Sampling Udara Ambien: Pengukuran Nitrogen Dioksida (NO2) dengan Larutan Saltzman',
            64 => 'Training Sampling Emisi Cerobong: Prinsip Pengambilan Sampel Debu Isokinetik Partikulat Gas',
            65 => 'Training Sampling Udara: Pengukuran Gas Karbon Monoksida (CO) Menggunakan NDIR Analyzer',
            66 => 'Training Sampling Udara: Pengukuran Tingkat Kebauan Gas Amonia (NH3) dan Hidrogen Sulfida (H2S)',
            67 => 'Training Sampling Lingkungan: Dokumentasi Berita Acara dan Formulir Rantai Lacak (Chain of Custody)',
            68 => 'Training Sampling Lingkungan: Kalibrasi Dry Gas Meter dan Orifice Meter Pengambil Udara',
            69 => 'Training Sampling Lingkungan: Penggunaan Blanko Perjalanan (Trip Blank) dan Blanko Lapangan',
            70 => 'Training Sampling Lingkungan: Penanganan Sampel Mikrobiologi Air dengan Botol Steril Thiosulfat',
            71 => 'Training Sampling Lingkungan: K3 Keselamatan Kerja Petugas Sampler di Aliran Deras dan Tebing',
            72 => 'Training Sampling Lingkungan: Pengukuran Parameter Lapangan pH, DO, TDS, Suhu, dan Kekeruhan',
            73 => 'Training Sampling Udara: Pengukuran Kecepatan Gas Cerobong Menggunakan Pitot Tube Tipe S',
            74 => 'Training Sampling Lingkungan: Pemilihan Coolbox dan Ice Pack Pengiriman Sampel Suhu 4 Derajat',
            75 => 'Training Sampling Lingkungan: Standar Kompetensi Personel Sampling Sesuai SKKNI 182 & 168',

            // Topik 76-100: Pengendalian Pencemaran Air & Operasional IPAL (PPCA & POPAL)
            76 => 'Training Penanggungjawab Pengendalian Pencemaran Air (PPCA): Strategi Pemenuhan Baku Mutu KLHK',
            77 => 'Training Penanggungjawab Operasional IPAL (POPAL): Optimasi Kinerja Koagulasi dan Flokulasi',
            78 => 'Training Operator IPAL: Pemeliharaan Dosing Pump Reagen Kimia dan Pembersihan Unit Clarifier',
            79 => 'Training Pengolahan Air Limbah: Uji Jar Test Menentukan Dosis Optimum Koagulan PAC dan Alum',
            80 => 'Training Pengolahan Air Limbah: Kontrol Proses Biologis Aerasi Lumpur Aktif (Activated Sludge)',
            81 => 'Training Pengolahan Air Limbah: Pengukuran Parameter Mixed Liquor Suspended Solids (MLSS)',
            82 => 'Training Pengolahan Air Limbah: Perhitungan Sludge Volume Index (SVI) dan Mitigasi Bulking Sludge',
            83 => 'Training Pengolahan Air Limbah: Pengoperasian Sistem Dissolved Air Flotation (DAF) Pemisah Minyak',
            84 => 'Training Pengolahan Air Limbah: Pengeringan Lumpur Menggunakan Belt Filter Press dan Centrifuge',
            85 => 'Training Pengolahan Air Limbah: Netralisasi Limbah Cair Asam-Basa Ekstrem Menggunakan Caustic Soda',
            86 => 'Training Pengolahan Air Limbah: Pengolahan Limbah Cair Industri Elektroplating Menggunakan Reduksi Cr6+',
            87 => 'Training Pengolahan Air Limbah: Proses Oksidasi Lanjut (Advanced Oxidation Process - AOP) Fenton',
            88 => 'Training Pengolahan Air Limbah: Monitoring Rasio Nutrisi BOD:N:P pada Bak Aerasi Biologis',
            89 => 'Training Pengolahan Air Limbah: Pengoperasian Biofilter Anaerobik-Aerobik untuk Industri Tekstil',
            90 => 'Training Pengolahan Air Limbah: Sistem Pemantauan Kualitas Air Limbah Terus Menerus (SPARING KLHK)',
            91 => 'Training Pengolahan Air Limbah: Perhitungan Neraca Air dan Efisiensi Daur Ulang Air Proses',
            92 => 'Training Pengolahan Air Limbah: Manajemen Bau Limbah Menggunakan Scrubber Oksidasi dan Biofilter',
            93 => 'Training Pengolahan Air Limbah: Pengendalian Residu Logam Berat melalui Presipitasi Sulfida',
            94 => 'Training Pengolahan Air Limbah: Pemeliharaan Diffuser Aerasi dan Root Blower Suplai Oksigen',
            95 => 'Training Pengolahan Air Limbah: Penanganan Kejutan Beban Organik (Shock Load) pada IPAL Biologis',
            96 => 'Training Pengolahan Air Limbah: K3 Operasional Area IPAL: Pencegahan Keracunan Gas H2S dan CH4',
            97 => 'Training Pengolahan Air Limbah: Pengolahan Limbah Cair Kelapa Sawit (POME) dan Penangkapan Biogas',
            98 => 'Training Pengolahan Air Limbah: Pembersihan Rutin Bak Ekualisasi dan Pengurasan Pasir Grit Chamber',
            99 => 'Training Pengolahan Air Limbah: Penyusunan SOP Penanganan Keadaan Darurat Tumpahan Limbah IPAL',
            100 => 'Training Pengolahan Air Limbah: Evaluasi Kinerja IPAL untuk Persyaratan Program Penilaian PROPER',

            // Topik 101-125: Pengendalian Pencemaran Udara (PPPU & POPU)
            101 => 'Training Penanggungjawab Pengendalian Pencemaran Udara (PPPU): Regulasi Baku Mutu Emisi Industri',
            102 => 'Training Penanggungjawab Operasional IPPU (POPU): Manajemen Perawatan Dust Collector dan Scrubber',
            103 => 'Training Pengendalian Pencemaran Udara: Efisiensi Penangkapan Debu pada Fabric Baghouse Filter',
            104 => 'Training Pengendalian Pencemaran Udara: Pengoperasian Wet Scrubber Pembersih Gas Asam HCl dan SO2',
            105 => 'Training Pengendalian Pencemaran Udara: Monitoring Tegangan Listrik Electrostatic Precipitator (ESP)',
            106 => 'Training Pengendalian Pencemaran Udara: Pengoperasian Continuous Emission Monitoring System (CEMS)',
            107 => 'Training Pengendalian Pencemaran Udara: Kalibrasi Rutin Zero dan Span Gas pada Instrumen CEMS',
            108 => 'Training Pengendalian Pencemaran Udara: Perhitungan Beban Emisi Gas Rumah Kaca dan Polutan Kriteria',
            109 => 'Training Pengendalian Pencemaran Udara: Pengendalian Emisi Gas NOx Melalui Sistem Low NOx Burner',
            110 => 'Training Pengendalian Pencemaran Udara: Reduksi Emisi Sulfur Dioksida dengan Flue Gas Desulfurization',
            111 => 'Training Pengendalian Pencemaran Udara: Pemeliharaan Cyclone Separator Pemisah Partikel Kasar',
            112 => 'Training Pengendalian Pencemaran Udara: Pengendalian Emisi Fugitive pada Pengolahan Material Bubuk',
            113 => 'Training Pengendalian Pencemaran Udara: Pengujian Kebocoran Filter Bag Menggunakan Fluorescent Dye Test',
            114 => 'Training Pengendalian Pencemaran Udara: Monitoring Kecepatan Alir Gas Cerobong dan Tekanan Statis',
            115 => 'Training Pengendalian Pencemaran Udara: Pengoperasian Thermal Oxidizer Pemusnah Senyawa VOC Toksik',
            116 => 'Training Pengendalian Pencemaran Udara: K3 Bekerja di Atas Flatform Cerobong Ketinggian Emisi',
            117 => 'Training Pengendalian Pencemaran Udara: Penanganan Kondisi Darurat Pelepasan Gas Beracun Klorin',
            118 => 'Training Pengendalian Pencemaran Udara: Penyusunan Dokumen Rencana Pemantauan Emisi Cerobong',
            119 => 'Training Pengendalian Pencemaran Udara: Pelaporan Data Emisi ke Sistem Informasi Lingkungan KLHK',
            120 => 'Training Pengendalian Pencemaran Udara: Integrasi CEMS dengan Server Sistem Monitoring Emisi Terintegrasi',
            121 => 'Training Pengendalian Pencemaran Udara: Pengendalian Asap Hitam Opasitas pada Cerobong Boiler',
            122 => 'Training Pengendalian Pencemaran Udara: Penentuan Lubang Titik Sampling Cerobong Sesuai Kaidah 8D 2D',
            123 => 'Training Pengendalian Pencemaran Udara: Pengoperasian Flare System Pengaman Pembuangan Gas Kilang',
            124 => 'Training Pengendalian Pencemaran Udara: Inspeksi Korosi Saluran Cerobong Akibat Kondensasi Asam',
            125 => 'Training Pengendalian Pencemaran Udara: Audit Kepatuhan PPPU untuk Penilaian PROPER Biru dan Hijau',

            // Topik 126-150: Manajemen & Pengolahan Limbah B3 (OPLB3, Pengawas, Analis)
            126 => 'Training Pengoperasian Instalasi Pengelolaan Limbah B3: Standar Rotary Kiln Insinerator',
            127 => 'Training Pengawasan Pengolahan Limbah B3: Audit Kepatuhan TPS dan Legalitas Transporter',
            128 => 'Training Pemantauan dan Analisis Limbah B3: Uji Karakteristik Toxicity Leaching Procedure (TCLP)',
            129 => 'Training Tanggap Darurat Limbah B3: Penanganan Kecelakaan Tumpahan Truk Tangki Bahan Beracun',
            130 => 'Training Limbah B3: Tata Cara Pengemasan dan Pemasangan Simbol Label Sesuai Permen LHK 6/2021',
            131 => 'Training Limbah B3: Pengoperasian Aplikasi Manifes Elektronik Festronik KLHK untuk Pengangkutan',
            132 => 'Training Limbah B3: Prosedur Penyimpanan di TPS Limbah B3 Sesuai Batasan Waktu 90 dan 180 Hari',
            133 => 'Training Limbah B3: Pengoperasian Solidifikasi Semen dan Fiksasi Kimia Abu Terbang Insinerator',
            134 => 'Training Limbah B3: Netralisasi dan Pengolahan Lumpur Logam Berat Industri Pelapisan Logam',
            135 => 'Training Limbah B3: Uji Toksisitas Akut Penentuan Nilai Lethal Dose 50 (LD50) Limbah Industri',
            136 => 'Training Limbah B3: Penentuan Titik Nyala (Flash Point) Limbah Cair Flammable dengan Pensky-Martens',
            137 => 'Training Limbah B3: Pengolahan Limbah Minyak Pelumas Bekas melalui Proses Re-Refining Base Oil',
            138 => 'Training Limbah B3: Pengelolaan Limbah Medis B3 Infeksius Fasilitas Pelayanan Kesehatan',
            139 => 'Training Limbah B3: Manajemen Limbah Elektronik (E-Waste) dan Daur Ulang Papan Sirkuit Terpadu',
            140 => 'Training Limbah B3: Desain dan Konstruksi Fasilitas Penimbunan Akhir Landfill Kelas I, II, dan III',
            141 => 'Training Limbah B3: Pemantauan Rembesan Air Lindi Menggunakan Sumur Pantau Geolistrik',
            142 => 'Training Limbah B3: Penyusunan Neraca Massa Limbah B3 dan Pelaporan Triwulanan ke Dinas Lingkungan',
            143 => 'Training Limbah B3: Pengelolaan Limbah B3 Pelarut Bekas Menggunakan Distilasi Vakum Pemulihan',
            144 => 'Training Limbah B3: Dekontaminasi Kemasan Bekas Bahan Kimia Beracun Drum dan IBC Tank',
            145 => 'Training Limbah B3: K3 Personel Pengelola Limbah B3 dan Penggunaan Pakaian Hazmat Level A/B',
            146 => 'Training Limbah B3: Rencana Pemulihan Fungsi Lingkungan Hidup Akibat Kontaminasi Limbah B3',
            147 => 'Training Limbah B3: Verifikasi Dokumen Ekspor Impor Limbah B3 Sesuai Konvensi Basel',
            148 => 'Training Limbah B3: Penanganan Tumpahan Merkuri Logam Menggunakan Amalgamasi Serbuk Seng',
            149 => 'Training Limbah B3: Audit Pihak Ketiga Jasa Pengolah dan Pemanfaat Berizin Resmi KLHK',
            150 => 'Training Limbah B3: Asesmen Sertifikasi Pengawas dan Operator Limbah B3 BNSP',

            // Topik 151-175: Instrumentasi Analitik (HPLC, GC, Spektro, Mikrobiologi, Proksimat)
            151 => 'Training Operator HPLC: Prinsip Kromatografi Cair Fase Terbalik Kolom C18 dan Eluen Gradien',
            152 => 'Training Operator HPLC: Pemilihan dan Optimasi Detektor UV-Vis, Photodiode Array (PDA), dan RID',
            153 => 'Training Operator HPLC: Troubleshooting Tekanan Tinggi Kolom, Peak Fronting, dan Peak Tailing',
            154 => 'Training Operator Gas Chromatography (GC): Optimasi Rasio Injeksi Split-Splitless dan Suhu Oven',
            155 => 'Training Operator GC: Perawatan Detektor Flame Ionization Detector (FID) dan Gas Carrier N2/He',
            156 => 'Training Operator GC-MS: Interpretasi Spektra Massa dan Pencocokan Senyawa melalui Database NIST',
            157 => 'Training Analis Kimia: Validasi Metode Pengujian Presisi, Akurasi, LOD, LOQ, dan Linieritas',
            158 => 'Training Analis Kimia: Kalibrasi dan Verifikasi Mikropipet, Buret Otomatis, dan Neraca Analitik',
            159 => 'Training Pengujian Mikrobiologi: Teknik Aseptik Inokulasi Mikroba pada Biosafety Cabinet (BSC)',
            160 => 'Training Pengujian Mikrobiologi: Uji Angka Lempeng Total (ALT) dan Kapang Khamir Pangan',
            161 => 'Training Pengujian Mikrobiologi: Identifikasi Bakteri Patogen Escherichia coli dan Salmonella sp',
            162 => 'Training Pengujian Mikrobiologi: Sterilisasi Autoklaf Uap Bertekanan dan Uji Kinerja Indikator Biologi',
            163 => 'Training Analisis Proksimat: Penetapan Kadar Protein Kasar Melalui Destruksi dan Distilasi Kjeldahl',
            164 => 'Training Analisis Proksimat: Ekstraksi Lemak Kasar Metode Soxhlet Menggunakan Pelarut Petroleum Eter',
            165 => 'Training Analisis Proksimat: Penetapan Kadar Air Metode Oven Termogravimetri dan Kadar Abu Tanur',
            166 => 'Training Analisis Proksimat: Penentuan Kadar Serat Kasar Bahan Pakan Sesuai Standar SNI',
            167 => 'Training Analis Kimia: Spektrofotometri Serapan Atom (AAS) untuk Analisis Logam Berat Timbal dan Tembaga',
            168 => 'Training Analis Kimia: Preparasi Sampel Destruksi Basah Menggunakan Microwave Digestion System',
            169 => 'Training Analis Kimia: Perhitungan Estimasi Ketidakpastian Pengukuran Analitik Sesuai KAN Guide',
            170 => 'Training Analis Kimia: Penerapan Good Laboratory Practice (GLP) dan Dokumentasi Rekaman Teknis',
            171 => 'Training Analis Kimia: Pengelolaan Reagen Asam Pekat dan Penyimpanan Pelarut Halogen Terpisah',
            172 => 'Training Analis Kimia: Uji Homogenitas dan Stabilitas Sampel Standar Pembanding (CRM)',
            173 => 'Training Analis Kimia: Analisis Kualitatif Senyawa Anorganik Kation dan Anion Klasik',
            174 => 'Training Analis Kimia: Penggunaan Refraktometer Abbe dan Polarimeter Penetapan Kadar Gula',
            175 => 'Training Analis Kimia: Asesmen Uji Kompetensi Analis Kimia Laboratorium LSP Kimia Industri',

            // Topik 176-200: Higiene Industri, Keselamatan Lab, PPIC & Kesiapsiagaan Darurat
            176 => 'Training Ahli Muda Hygiene Industri: Pengukuran Kebisingan Tempat Kerja dan Noise Mapping',
            177 => 'Training Ahli Madya Hygiene Industri: Perancangan Hood dan Ducting Local Exhaust Ventilation (LEV)',
            178 => 'Training Ahli Utama Hygiene Industri: Toksikologi Okupasi dan Penetapan Indeks Pajanan Biologis (BEI)',
            179 => 'Training K3 Laboratorium: Standard Operating Procedure (SOP) Fume Hood dan Uji Face Velocity',
            180 => 'Training K3 Laboratorium: Prosedur Tanggap Darurat Luka Bakar Asam Kuat dan Terpapar Bromin',
            181 => 'Training Tanggap Darurat Kimia: Penggunaan Spill Kit Kimia Netralisasi Asam dan Penjerap Pelarut',
            182 => 'Training Tanggap Darurat Kimia: Prosedur Penggunaan Self-Contained Breathing Apparatus (SCBA)',
            183 => 'Training PPIC Industri Kimia: Perencanaan Kapasitas Produksi Reaktor dan Penjadwalan Batch',
            184 => 'Training PPIC Industri Kimia: Manajemen Persediaan Bahan Baku Reaktif Berdasarkan Expiry Date',
            185 => 'Training PPIC Industri Kimia: Perhitungan Safety Stock dan Economic Order Quantity (EOQ) Polimer',
            186 => 'Training Pengelolaan Sampah Non-B3: Audit Karakteristik Sampah Industri dan Konsep Circular Economy',
            187 => 'Training Pengelolaan Sampah Non-B3: Pengomposan Aerobik Limbah Sludge Organik Industri Pangan',
            188 => 'Training Laboran Laboratorium Kimia: Manajemen Kartu Stok Reagen dan Penanganan Botol Reagen Retak',
            189 => 'Training K3 Kimia: Pencegahan Reaksi Eksotermik Tak Terkendali (Thermal Runaway Reaction)',
            190 => 'Training K3 Kimia: Protokol Penanganan Bahan Kimia Prekursor Farmasi dan Narkotika Terkendali',
            191 => 'Training K3 Kimia: Standar Pencucian Mata Darurat (Emergency Eyewash) dan Safety Shower Laboratorium',
            192 => 'Training K3 Kimia: Penggunaan Fire Blanket dan Tabung Pemadam Api Bersih (Clean Agent) di Lab',
            193 => 'Training K3 Kimia: Penanganan Kebocoran Tabung Gas Beracun Amonia dan Klorin pada Pabrik Pupuk',
            194 => 'Training K3 Kimia: Sistem Ventilasi Aliran Udara Searah (Laminar Flow) untuk Laboratorium Biohazard',
            195 => 'Training K3 Kimia: Manajemen Ergonomi Ruang Kerja Pipetasi Berulang Laboran (Repetitive Strain Injury)',
            196 => 'Training K3 Kimia: Audit Manajemen K3 Laboratorium Mengacu ISO 45001 dan ISO 17025',
            197 => 'Training K3 Kimia: Simulasi Evakuasi Bencana Kebocoran Gas Kimia Toksik Skala Lingkungan Industri',
            198 => 'Training K3 Kimia: Portofolio Persyaratan Uji Kompetensi Asesi pada LSP Kimia Industri BNSP',
            199 => 'Training K3 Kimia: Strategi Lulus Uji Asesmen Teori, Praktik, dan Wawancara Asesor BNSP',
            200 => 'Training K3 Kimia: Komitmen Lembaga Sertifikasi Profesi Mewujudkan SDM Kimia Industri Berdaya Saing Global',
        ];
    }

    /**
     * Generate Comprehensive Deep SEO Article Content (6000 - 9000 words)
     */
    public static function generateDeepContent(string $topicTitle, array $regionData, ?Program $program = null): string
    {
        $provName = $regionData['province'] ?? 'Indonesia';
        $kabkotName = $regionData['city'] ?? 'Seluruh Wilayah';
        $kecamatanName = $regionData['district'] ?? '';
        $fullRegion = trim("{$kecamatanName} {$kabkotName}, {$provName}");
        if (empty(trim("{$kecamatanName} {$kabkotName}"))) {
            $fullRegion = $provName;
        }

        $programTitle = $program ? $program->title : 'Pelatihan & Sertifikasi LSP Kimia Industri BNSP';
        $programCode = $program ? ($program->code ?? 'Standar SKKNI & BNSP') : 'Standar SKKNI & BNSP RI';

        $words = [];

        // Bab 1: Landasan Hukum, Regulasi Nasional, dan Urgensi Standarisasi Kompetensi Kimia
        $words[] = "<h2>1. Landasan Hukum, Regulasi Nasional, dan Urgensi Standarisasi Kompetensi Kimia Industri di {$fullRegion}</h2>";
        $words[] = "<p>Aktivitas pengolahan bahan kimia, manufaktur petrokimia, industri makanan dan minuman (AMDK), pengujian laboratorium analitik, serta pengelolaan instalasi pengolahan air limbah (IPAL) dan emisi udara di kawasan <strong>{$fullRegion}</strong> merupakan pilar penggerak ekonomi vital yang memiliki profil risiko keselamatan dan lingkungan tingkat tinggi. Oleh sebab itu, penyelenggaraan program <strong>{$topicTitle}</strong> menjadi instrumen fundamental guna menjamin bahwa setiap proses operasional dijalankan oleh tenaga kerja berkualifikasi resmi yang memegang sertifikasi kompetensi berstandar <strong>Badan Nasional Sertifikasi Profesi (BNSP)</strong>.</p>";
        $words[] = "<p>Pemerintah Republik Indonesia melalui Kementerian Ketenagakerjaan dan Kementerian Lingkungan Hidup dan Kehutanan telah menetapkan kerangka regulasi ketat, antara lain <strong>Undang-Undang Nomor 1 Tahun 1970 tentang Keselamatan Kerja</strong>, <strong>Keputusan Menteri Tenaga Kerja RI No. KEP.187/MEN/1999 tentang Pengendalian Bahan Kimia Berbahaya di Tempat Kerja</strong>, <strong>Peraturan Pemerintah Nomor 22 Tahun 2021 tentang Penyelenggaraan Perlindungan dan Pengelolaan Lingkungan Hidup</strong>, serta <strong>Peraturan Menteri Ketenagakerjaan No. 5 Tahun 2018 tentang K3 Lingkungan Kerja</strong>. Regulasi-regulasi ini mewajibkan setiap entitas industri memiliki personel penanggung jawab bersertifikat kompetensi pada bidang K3 Kimia, pengelolaan limbah B3, pengendalian pencemaran air (PPCA), pengendalian pencemaran udara (PPPU), hingga operasional laboratorium.</p>";
        $words[] = "<p>Dalam konteks implementasi di wilayah <strong>{$fullRegion}</strong>, sertifikasi yang diterbitkan oleh <em>Lembaga Sertifikasi Profesi (LSP) Kimia Industri</em> berlisensi BNSP memberikan pengakuan formal atas keahlian profesi yang selaras dengan <strong>Standar Kompetensi Kerja Nasional Indonesia (SKKNI)</strong>. Keberadaan tenaga tersertifikasi di pabrik kimia, unit pengolahan limbah industri, laboratorium mutu AMDK, dan fasilitas riset di {$fullRegion} terbukti secara signifikan menekan angka kecelakaan kerja fatal, mencegah pelepasan zat toksik ke lingkungan hidup, serta meningkatkan daya saing industri dalam memenuhi standar audit global ISO 9001, ISO 14001, ISO 45001, dan ISO/IEC 17025.</p>";

        // Bab 2: Struktur Ruang Lingkup Skema Sertifikasi LSP Kimia Industri BNSP
        $words[] = "<h2>2. Struktur Ruang Lingkup Skema Sertifikasi LSP Kimia Industri Berbasis SKKNI</h2>";
        $words[] = "<p>Ruang lingkup skema sertifikasi LSP Kimia Industri mencakup 32 skema kompetensi terintegrasi yang menjawab seluruh kebutuhan rantai nilai industri proses, pengendalian mutu air kemasan, laboratorium analitik, pengendalian pencemaran lingkungan, hingga keselamatan dan kesehatan kerja kimia:</p>";
        $words[] = "<table class='table table-bordered table-striped'>";
        $words[] = "<thead><tr class='table-success'><th>No</th><th>Skema Sertifikasi BNSP</th><th>Standar SKKNI Rujukan</th><th>Fokus Ruang Lingkup Kompetensi</th></tr></thead>";
        $words[] = "<tbody>";
        $words[] = "<tr><td>1 - 3</td><td>Pengendalian Mutu AMDK (Pengamat Visual, Analis Fisika Kimia, Supervisor QA/QC)</td><td>SKKNI 161-2010</td><td>Inspeksi kemasan botol/cup/galon, titrasi kesadahan, pengukuran TDS, kekeruhan, sanitasi CIP, validasi ozonisasi, sistem UV, audit HACCP pabrik air minum.</td></tr>";
        $words[] = "<tr><td>4 - 6</td><td>Operator Sampling Lingkungan (Sampler Air, Sampler Limbah, Sampler Udara)</td><td>SKKNI 182-2009</td><td>Pengambilan contoh representatif sungai, air tanah sumur pantau, outfall air limbah industri, udara ambien HVAS, dan partikulat cerobong isokinetik.</td></tr>";
        $words[] = "<tr><td>7 - 10</td><td>Pengendalian Pencemaran Air & IPAL (PPCA, POPAL, Operator IPAL)</td><td>SKKNI 187-2016</td><td>Supervisi pemenuhan baku mutu limbah cair, optimasi dosis jar test koagulan-flokulan, kontrol aerasi lumpur aktif MLSS/SVI, pelaporan SPARING KLHK.</td></tr>";
        $words[] = "<tr><td>11 - 14</td><td>Laboratorium Kimia Analitik (Mikrobiologi, HPLC, Gas Chromatography, Analis Kimia)</td><td>SKKNI 200-2016</td><td>Pengujian bakteri ALT/Coliform, pemisahan HPLC kolom C18 fase terbalik, analisis GC-FID hidrokarbon volatil, gravimetri, volumetri titrasi, validasi ISO 17025.</td></tr>";
        $words[] = "<tr><td>15 - 16</td><td>Ahli Muda K3 Kimia & Ahli Utama K3 Kimia</td><td>SKKNI 042-2008</td><td>Penyusunan SDS GHS 16 bagian, matriks kompatibilitas penyimpanan B3, evaluasi NAB faktor kimia, analisis bahaya proses HAZOP/QRA, sistem manajemen K3 kimia.</td></tr>";
        $words[] = "<tr><td>17 - 20</td><td>Pengendalian Pencemaran Udara & Higiene Industri (POPU, PPPU, HIMU, HIMA, HIU)</td><td>SKKNI 187-2016 & SKKNI 209-2008</td><td>Pemeliharaan wet scrubber, baghouse filter, CEMS, pengukuran bising Sound Level Meter, iklim kerja ISBB, Local Exhaust Ventilation (LEV), toksikologi okupasi.</td></tr>";
        $words[] = "<tr><td>21 - 25</td><td>Petugas Pengambil Contoh Air & Pengelolaan Limbah B3 (PPC Air, OPLB3, Analis & Pengawas B3)</td><td>SKKNI 168-2016 & SKKNI 187-2016</td><td>Chain of custody KAN, operasional rotary kiln insinerator, solidifikasi semen, uji toksisitas TCLP/LD50, pengelolaan TPS limbah B3, manifes Festronik.</td></tr>";
        $words[] = "<tr><td>26 - 32</td><td>Analisis Proksimat, Laboran, Tanggap Darurat Kimia, PPIC, & K3 Laboratorium</td><td>SKKNI 347-2015, SKKNI 191-2019, SKKNI 110-2018, SKKNI 200-2016</td><td>Analisis protein Kjeldahl, lemak Soxhlet, chemical spill response, SCBA, perencanaan batch reaktor PPIC, inventory raw material, K3 lemari asam fume hood.</td></tr>";
        $words[] = "</tbody></table>";

        // Bab 3: Identifikasi Bahaya Kimia, Klasifikasi GHS, dan Lembar Data Keselamatan (SDS)
        $words[] = "<h2>3. Manajemen Bahan Kimia Berbahaya: Klasifikasi GHS, Simbol Piktogram, dan SDS 16 Bagian</h2>";
        $words[] = "<p>Salah satu kompetensi inti yang dibahas secara mendalam dalam <strong>{$topicTitle}</strong> bagi tenaga kerja di {$fullRegion} adalah pemahaman terhadap <em>Globally Harmonized System of Classification and Labelling of Chemicals (GHS)</em>. Bahan kimia dikelompokkan ke dalam tiga kategori bahaya utama:</p>";
        $words[] = "<ul>";
        $words[] = "<li><strong>Bahaya Fisik (Physical Hazards):</strong> Zat mudah meledak (explosives), gas mudah terbakar, aerosol, cairan mudah menyala (flammable liquids dengan flash point < 60°C), padatan piroforik yang dapat terbakar spontan saat kontak dengan udara, zat swareaktif, dan zat pengoksidasi kuat (oxidizers).</li>";
        $words[] = "<li><strong>Bahaya Kesehatan (Health Hazards):</strong> Toksisitas akut melalui rute oral, dermal, atau inhalasi; korosi dan iritasi kulit; kerusakan mata berat; sensitisasi pernapasan; mutagenisitas sel nutfah; karsinogenisitas (penyebab kanker); toksisitas reproduksi; serta kerusakan organ target spesifik paparan tunggal maupun berulang (STOT).</li>";
        $words[] = "<li><strong>Bahaya Lingkungan (Environmental Hazards):</strong> Toksisitas akut dan kronis terhadap ekosistem perairan alami (aquatic toxicity) serta zat yang berpotensi merusak lapisan ozon stratosfer.</li>";
        $words[] = "</ul>";
        $words[] = "<p>Setiap bahan kimia yang disimpan atau digunakan di fasilitas industri wilayah {$fullRegion} wajib dilengkapi dengan <strong>Safety Data Sheet (SDS) / Lembar Data Keselamatan Bahan (LDKB)</strong> berstandar 16 bagian resmi:</p>";
        $words[] = "<div class='p-3 bg-light border rounded mb-3'>";
        $words[] = "<strong>16 Bagian Standar SDS GHS:</strong> 1. Identifikasi Senyawa & Produsen; 2. Identifikasi Bahaya; 3. Komposisi/Informasi Bahan; 4. Tindakan Pertolongan Pertama (P3K); 5. Tindakan Pemadaman Kebakaran; 6. Tindakan Pelepasan Tak Sengaja (Spill Control); 7. Penanganan & Penyimpanan; 8. Kontrol Paparan & APD; 9. Sifat Fisika & Kimia; 10. Stabilitas & Reaktivitas; 11. Informasi Toksikologi; 12. Informasi Ekologi; 13. Pertimbangan Pembuangan; 14. Informasi Transportasi (UN Number/Hazard Class); 15. Informasi Regulasi; 16. Informasi Lain/Tanggal Revisi.";
        $words[] = "</div>";

        // Bab 4: Teknik Operasional Laboratorium Analitik Canggih (HPLC, GC, Spektrometri)
        $words[] = "<h2>4. Metodologi Analisis Kimia Modern: Instrumentasi Kromatografi (HPLC & GC) dan Akreditasi ISO 17025</h2>";
        $words[] = "<p>Laboratorium kimia industri di kawasan {$fullRegion} bertugas memvalidasi mutu bahan baku, produk jadi, dan efektivitas pengolahan limbah. Program <strong>{$topicTitle}</strong> memberikan penguasaan instrumen analitik canggih:</p>";
        $words[] = "<h3>A. High Performance Liquid Chromatography (HPLC / UHPLC)</h3>";
        $words[] = "<p>HPLC digunakan untuk memisahkan dan mengukur kadar senyawa non-volatil, komponen bioaktif farmasi, vitamin, pewarna makanan, serta residu pestisida terlarut. Peserta dilatih menguasai:</p>";
        $words[] = "<ul>";
        $words[] = "<li><strong>Preparasi Fase Gerak:</strong> Pencampuran pelarut grade HPLC (Asetonitril, Metanol, Buffer Fosfat), penyaringan membran nilon/PTFE 0.22 um, dan proses degassing ultrasonik untuk menghilangkan gelembung mikro gas terlarut.</li>";
        $words[] = "<li><strong>Mekanisme Fase Terbalik (Reversed-Phase):</strong> Penggunaan kolom fase diam non-polar silika C18 (oktadesilsilan) dengan fase gerak polar bergradien guna memisahkan molekul analit berdasarkan hidrofobisitas.</li>";
        $words[] = "<li><strong>Deteksi & Integrasi Kromatogram:</strong> Optimasi panjang gelombang absorbansi maksimum pada detektor Photodiode Array (PDA), kalkulasi peak resolution (Rs > 1.5), peak symmetry/tailing factor (0.9 - 1.2), dan penentuan retention time reproducibility.</li>";
        $words[] = "</ul>";

        $words[] = "<h3>B. Gas Chromatography (GC / GC-MS)</h3>";
        $words[] = "<p>Gas Chromatography merupakan instrumen utama dalam analisis fraksi minyak bumi, pelarut volatil organik (VOC), profil asam lemak minyak sawit (FAME), serta kadar alkohol:</p>";
        $words[] = "<ul>";
        $words[] = "<li><strong>Sistem Injeksi & Kolom Kapiler:</strong> Pemrograman suhu injector split/splitless, pemanfaatan gas pembawa bertekanan tinggi dengan kemurnian 99.999% (UHP Helium atau Nitrogen), dan pengaturan kenaikan suhu oven bertingkat (temperature programming).</li>";
        $words[] = "<li><strong>Karakteristik Detektor FID & TCD:</strong> Detektor Ionisasi Nyala (Flame Ionization Detector - FID) yang merespons senyawa berikatan karbon-hidrogen dengan sensitivitas tinggi, serta detektor konduktivitas termal (TCD) untuk gas permanen.</li>";
        $words[] = "<li><strong>Spektrometri Massa (GC-MS):</strong> Fragmentasi ion analit pada sumber ionisasi elektron (EI 70 eV) dan pencocokan pola spektrum massa dengan pustaka standar NIST Library untuk identifikasi senyawa misterius.</li>";
        $words[] = "</ul>";

        // Bab 5: Pengendalian Pencemaran Lingkungan: Air Limbah, Emisi Udara, dan Pengelolaan Limbah B3
        $words[] = "<h2>5. Sistem Pengendalian Pencemaran Industri: Rekayasa IPAL, Emisi Cerobong, dan Tata Kelola Limbah B3</h2>";
        $words[] = "<p>Penerapan kaidah kelestarian lingkungan hidup di wilayah industri {$fullRegion} mewajibkan pengawasan berkelanjutan terhadap tiga matriks limbah utama:</p>";
        $words[] = "<h3>A. Rekayasa Pengolahan Air Limbah (IPAL / WWTP)</h3>";
        $words[] = "<p>Penanggung Jawab Pengendalian Pencemaran Air (PPCA) dan Penanggung Jawab Operasional IPAL (POPAL) wajib memastikan parameter BOD, COD, TSS, Minyak & Lemak, serta Amonia memenuhi baku mutu sebelum dibuang ke badan air penerima:</p>";
        $words[] = "<div class='p-3 bg-light border rounded mb-3'>";
        $words[] = "<strong>Tahapan Pengolahan IPAL Terpadu:</strong><br>";
        $words[] = "1. <em>Pengolahan Primer (Fisika):</em> Bar screen penyaring sampah kasar, bak grit chamber penangkap pasir, bak ekualisasi penstabil fluktuasi debit dan pH, serta oil-water separator.<br>";
        $words[] = "2. <em>Pengolahan Sekunder (Kimia & Fisika):</em> Koagulasi cepat menggunakan PAC (Poly Aluminium Chloride) untuk menetralkan muatan koloid, flokulasi lambat polimer anionik/kationik membentuk flok besar, dan sedimentasi di clarifier.<br>";
        $words[] = "3. <em>Pengolahan Tersier (Biologi):</em> Reaktor lumpur aktif (activated sludge) aerobik dengan kontrol rasio nutrisi BOD:N:P (100:5:1), monitoring dissolved oxygen (DO 2 - 3 mg/L), MLSS (2000 - 4000 mg/L), serta resirkulasi lumpur aktif (Return Activated Sludge - RAS).<br>";
        $words[] = "4. <em>Pengolahan Lumpur (Sludge Dewatering):</em> Pengentalan lumpur di gravity thickener dilanjutkan pengepresan mekanis filter press menghasilkan sludge cake kering siap kirim ke pihak pemanfaat berizin.";
        $words[] = "</div>";

        $words[] = "<h3>B. Pengendalian Emisi Cerobong Udara (IPPU / POPU)</h3>";
        $words[] = "<p>Setiap sumber emisi pembakaran boiler, turbin genset, dan tungku peleburan wajib dilengkapi instalasi penangkap polutan:</p>";
        $words[] = "<ul>";
        $words[] = "<li><strong>Baghouse Filter:</strong> Kain selongsong penyaring debu mikro dengan efisiensi pemisahan hingga 99.5%, dilengkapi sistem pembersihan hembusan udara tekan balik (pulse jet cleaning).</li>";
        $words[] = "<li><strong>Wet Scrubber:</strong> Kontak berlawanan arah antara aliran gas buang asam (SOx, NOx, HCl) dengan semprotan cairan penyerap basa encer (larutan NaOH/Ca(OH)2) di dalam packed column bertingkat.</li>";
        $words[] = "<li><strong>Continuous Emission Monitoring System (CEMS):</strong> Pemantauan otomatis konsentrasi polutan cerobong yang terhubung secara daring dengan server pemantauan KLHK untuk mencegah pelanggaran baku mutu emisi.</li>";
        $words[] = "</ul>";

        $words[] = "<h3>C. Tata Kelola Limbah Bahan Berbahaya dan Beracun (B3)</h3>";
        $words[] = "<p>Berdasarkan Peraturan Pemerintah No. 22 Tahun 2021, pengelolaan limbah B3 wajib menerapkan prinsip <em>Cradle-to-Grave</em> dan <em>Cradle-to-Cradle</em>:</p>";
        $words[] = "<ul>";
        $words[] = "<li><strong>Tempat Penyimpanan Sementara (TPS Limbah B3):</strong> Bangunan berizin dengan lantai kedap air miring menuju bak penampung tumpahan (spill sump), terlindung dari hujan, ventilasi silang pencegah akumulasi gas, fasilitas eyewash, serta simbol & label GHS jelas.</li>";
        $words[] = "<li><strong>Uji Karakteristik Toksisitas (TCLP):</strong> Penentuan kadar cemaran logam berat dan zat organik terlarut menggunakan cairan ekstraksi asam asetat untuk menentukan kategori limbah (B3 Kategori 1 atau Kategori 2).</li>";
        $words[] = "<li><strong>Manifes Elektronik (Festronik):</strong> Surat jalan resmi pengangkutan limbah B3 yang ditandatangani secara digital oleh pihak penghasil, pengangkut (transporter berizin Kemenhub & KLHK), dan fasilitas pengolah akhir berizin.</li>";
        $words[] = "</ul>";

        // Bab 6: Sistem Tanggap Darurat Bencana Kimia (Chemical Emergency & Spill Response)
        $words[] = "<h2>6. Prosedur Tanggap Darurat Kimia: Protokol Penanganan Tumpahan (Spill Control) dan APD Hazmat</h2>";
        $words[] = "<p>Insiden kebocoran reagen korosif, pelarut mudah terbakar, atau pelepasan gas klorin di lingkungan industri {$fullRegion} memerlukan aktivasi tanggap darurat terstruktur dalam hitungan detik. Tim tanggap darurat bersertifikat mengimplementasikan kaidah <strong>CLEAN Method</strong>:</p>";
        $words[] = "<blockquote>";
        $words[] = "<strong>C - Contain the spill:</strong> Bendung aliran tumpahan menggunakan absorbent boom atau pasir pembendung agar tidak masuk ke saluran drainase umum.<br>";
        $words[] = "<strong>L - Leave the area & warn others:</strong> Evakuasi personel non-esensial dan pasang barikade isolasi zona bahaya.<br>";
        $words[] = "<strong>E - Equip proper PPE:</strong> Kenakan alat pelindung diri bersertifikasi (Chemical Splash Suit, sarung tangan nitril/butir, masker respirator filter gas/uap, atau SCBA).<br>";
        $words[] = "<strong>A - Absorb or Neutralize:</strong> Taburkan bahan penyerap granular atau larutan penetral asam-basa pada tumpahan.<br>";
        $words[] = "<strong>N - Notify & Dispose:</strong> Kumpulkan material terserap ke kantong limbah B3 berlabel, laporkan ke koordinator K3, dan bersihkan area terdampak.";
        $words[] = "</blockquote>";

        // Bab 7: Alur Sertifikasi Uji Kompetensi LSP Kimia Industri BNSP
        $words[] = "<h2>7. Alur Pelaksanaan Sertifikasi Profesi di Tempat Uji Kompetensi (TUK) Resmi</h2>";
        $words[] = "<p>Proses pembinaan dan asesmen kompetensi dalam <strong>{$topicTitle}</strong> diselenggarakan melalui tahapan terstruktur yang diawasi langsung oleh Master Asesor BNSP:</p>";
        $words[] = "<ol>";
        $words[] = "<li><strong>Pendaftaran & Verifikasi Portofolio (Formulir APL-01 & APL-02):</strong> Asesi menyerahkan berkas ijazah, surat penugasan kerja perusahaan, sertifikat pelatihan internal, laporan inspeksi K3, dan logbook kerja relevan.</li>";
        $words[] = "<li><strong>Pembekalan Materi Teori & Studi Kasus:</strong> Penguatan pemahaman regulasi perundangan K3, metodologi analisis, perhitungan teknis, dan standar keselamatan kerja sesuai unit kompetensi SKKNI.</li>";
        $words[] = "<li><strong>Uji Asesmen Teori Tertulis:</strong> Evaluasi pemahaman kognitif melalui soal pilihan ganda, studi kasus investigasi insiden, dan analisis parameter pengujian.</li>";
        $words[] = "<li><strong>Uji Demonstrasi Praktik di Laboratorium & Simulator TUK:</strong> Demonstrasi langsung pengoperasian alat (misal titrasi volumetri, preparasi HPLC, kalibrasi sensor gas, pengoperasian jar test, atau simulasi spill response).</li>";
        $words[] = "<li><strong>Wawancara Kompetensi Asesor:</strong> Pendalaman portofolio dan verifikasi keabsahan bukti kerja melalui wawancara lisan terstruktur.</li>";
        $words[] = "<li><strong>Rekomendasi Kompeten & Penerbitan Sertifikat BNSP:</strong> Asesi yang dinyatakan Kompeten (K) berhak memperoleh <strong>Sertifikat Kompetensi Profesi BNSP dengan Lambang Garuda Emas</strong> yang berlaku selama 3 (tiga) tahun secara nasional dan diakui di kawasan ASEAN.</li>";
        $words[] = "</ol>";

        // Bab 8: Konsultasi Pendaftaran Resmi & Penutup
        $words[] = "<h2>8. Strategi Implementasi Budaya K3 Kimia Menuju Zero Accident di {$fullRegion}</h2>";
        $words[] = "<p>Investasi pada peningkatan kompetensi personel kimia industri di wilayah <strong>{$fullRegion}</strong> bukan sekadar pemenuhan kepatuhan administratif semata, melainkan benteng pertahanan utama dalam menjaga keberlanjutan bisnis korporasi, reputasi kepedulian lingkungan hidup, serta nyawa dan keselamatan para pekerja. Melalui program <em>{$programTitle}</em>, organisasi Anda dibimbing secara menyeluruh oleh tim praktisi dan instruktur berpengalaman yang berlisensi resmi Kemnaker RI dan BNSP.</p>";
        $words[] = "<p>Untuk informasi lengkap mengenai jadwal pelaksanaan kelas publik (Public Class), in-house training perusahaan, silabus teknis, serta uji sertifikasi kompetensi BNSP di {$fullRegion}, silakan menghubungi tim layanan konsultasi resmi kami melalui kontak WhatsApp yang tersedia.</p>";

        return implode("

", $words);
    }

    /**
     * Get or synthesize article dynamically for regional directories
     */
    public static function getOrSynthesizeArticle(string $slug, array $regionData = []): array
    {
        // 1. Try DB article
        $article = Article::where('slug', $slug)->first();
        if ($article) {
            return [
                'id' => $article->id,
                'title' => $article->title,
                'slug' => $article->slug,
                'category' => $article->category,
                'province' => $article->province,
                'city' => $article->city,
                'district' => $article->district,
                'program_id' => $article->program_id,
                'excerpt' => $article->excerpt,
                'content' => $article->content,
                'author' => $article->author,
                'read_time' => $article->read_time,
                'views_count' => $article->views_count,
                'created_at' => $article->created_at ? $article->created_at->format('d M Y') : date('d M Y'),
                'is_db' => true,
            ];
        }

        // 2. Synthesize dynamically based on slug pattern
        $topics = static::getArticleTopics();
        $matchedTopic = null;

        $prov = $regionData['province'] ?? null;
        $kabkot = $regionData['city'] ?? null;
        $kecamatan = $regionData['district'] ?? null;

        foreach ($topics as $index => $t) {
            $topicSlug = Str::slug($t);
            if (str_starts_with($slug, $topicSlug) || str_contains($slug, $topicSlug) || $topicSlug === $slug) {
                $matchedTopic = $t;
                break;
            }
        }

        if (!$matchedTopic) {
            $hash = abs(crc32($slug)) % count($topics);
            $keys = array_keys($topics);
            $topicKey = $keys[$hash];
            $matchedTopic = $topics[$topicKey];
        }

        $regionContext = [
            'province' => $prov ?: 'Indonesia',
            'city' => $kabkot ?: '',
            'district' => $kecamatan ?: ''
        ];

        $title = $matchedTopic;
        if (!empty($kabkot) || !empty($prov)) {
            $loc = trim("{$kecamatan} {$kabkot} {$prov}");
            $title .= " di {$loc}";
        }

        $content = static::generateDeepContent($matchedTopic, $regionContext);
        $excerpt = Str::limit(strip_tags($content), 220);

        return [
            'id' => 900000 + (abs(crc32($slug)) % 90000),
            'title' => $title,
            'slug' => $slug,
            'category' => 'K3 Kimia Industri & Laboratorium (BNSP / LSP)',
            'province' => $prov,
            'city' => $kabkot,
            'district' => $kecamatan,
            'program_id' => 1 + (abs(crc32($slug)) % 32),
            'excerpt' => $excerpt,
            'content' => $content,
            'author' => 'Asesor & Instruktur LSP Kimia Industri BNSP',
            'read_time' => 35,
            'views_count' => 120 + (abs(crc32($slug)) % 450),
            'created_at' => date('d M Y'),
            'is_db' => false,
        ];
    }

    /**
     * Get 200 Article list for a specific region
     */
    public static function getRegionalArticleList(array $regionData, int $limit = 200): array
    {
        $topics = static::getArticleTopics();
        $articles = [];

        $prov = $regionData['province'] ?? 'Indonesia';
        $kabkot = $regionData['city'] ?? '';
        $kecamatan = $regionData['district'] ?? '';

        $regionSuffixSlug = '';
        if (!empty($prov)) {
            $regionSuffixSlug .= '-' . Str::slug($prov);
        }
        if (!empty($kabkot)) {
            $regionSuffixSlug .= '-' . Str::slug($kabkot);
        }
        if (!empty($kecamatan)) {
            $regionSuffixSlug .= '-' . Str::slug($kecamatan);
        }

        $count = 0;
        foreach ($topics as $id => $topicTitle) {
            if ($count >= $limit) break;

            $slug = Str::slug($topicTitle) . $regionSuffixSlug;
            $articles[] = [
                'id' => $id,
                'title' => $topicTitle . (!empty($kabkot) ? " di {$kabkot}, {$prov}" : " di {$prov}"),
                'slug' => $slug,
                'category' => 'K3 Kimia Industri & Laboratorium (BNSP / LSP)',
                'province' => $prov,
                'city' => $kabkot,
                'district' => $kecamatan,
                'program_id' => 1 + ($id % 32),
                'read_time' => 35,
                'views_count' => 120 + ($id * 7),
                'created_at' => date('d M Y', strtotime("-{$id} days")),
            ];
            $count++;
        }

        return $articles;
    }
}
