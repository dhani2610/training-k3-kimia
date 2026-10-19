<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Setting;
use App\Models\Statistic;
use App\Models\HeroSlide;
use App\Models\Program;
use App\Models\Article;
use App\Models\Testimonial;
use App\Models\Faq;
use App\Services\K3KimiaSchemeService;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        // 1. Super Admin User
        User::updateOrCreate(
            ['email' => 'admin@trainingk3kimia.id'],
            [
                'name' => 'Administrator K3 Kimia Indonesia',
                'password' => Hash::make('admin123'),
                'email_verified_at' => now(),
            ]
        );

        // 2. Settings (Includes official WhatsApp numbers requested by client)
        $settings = [
            'site_name' => 'Training K3 Kimia Indonesia',
            'site_tagline' => 'Pusat Pembinaan & Sertifikasi Profesi Kimia Industri BNSP & Kemnaker RI',
            'company_name' => 'Lembaga Pelatihan & Sertifikasi K3 Kimia Industri Indonesia',
            'license_info' => 'Sertifikasi Resmi BNSP Berdasarkan SKKNI Kimia Industri & Standar K3 Ketenagakerjaan',
            'whatsapp' => '081399810272', // Main WA Utama
            'whatsapp_detail_1' => '08118500177',
            'whatsapp_detail_2' => '081399810272',
            'whatsapp_detail_3' => '087894580806',
            'whatsapp_detail_4' => '087894580649',
            'email' => 'kontak@trainingk3kimia.id',
            'email_secondary' => 'sekretariat.k3kimia@gmail.com',
            'phone' => '081399810272',
            'address' => 'Gedung Pusat Kompetensi Kimia Industri Indonesia, Kawasan Sains & Teknologi Terpadu, Jakarta',
            'maps_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126920.28298835848!2d106.759478!3d-6.2297465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e498c0a531%3A0x7d87f7b2c0e86b0a!2sJakarta%2C%20Indonesia!5e0!3m2!1sen!2sid!4v1700000000000!5m2!1sen!2sid',
            'office_hours' => 'Senin - Jumat: 08.00 - 17.00 WIB | Layanan Konsultasi WA: 24 Jam',
            'hero_title' => 'Pusat Pelatihan & Sertifikasi Profesi K3 Kimia Industri BNSP',
            'hero_description' => 'Membentuk tenaga profesional kimia industri yang kompeten, berlisensi BNSP resmi, dan menguasai standar SKKNI untuk QC AMDK, Sampling Lingkungan, IPAL, Emisi Udara, Limbah B3, Laboratorium, dan K3 Kimia.',
            'about_history' => 'Lembaga Training K3 Kimia didirikan sebagai wadah pembinaan dan uji kompetensi profesi terkemuka di sektor industri proses kimia, petrokimia, makanan-minuman, pengujian analitik, dan pengelolaan lingkungan hidup. Berkolaborasi dengan LSP Kimia Industri berlisensi Badan Nasional Sertifikasi Profesi (BNSP), kami telah meluluskan lebih dari 18.500 tenaga kerja kompeten bersertifikasi Garuda Emas di seluruh Indonesia.',
            'about_vision' => 'Menjadi pusat rujukan unggulan pelatihan, riset aplikatif, dan sertifikasi kompetensi K3 Kimia Industri dan Pengelolaan Lingkungan terpercaya berstandar internasional di Indonesia.',
            'about_mission' => "1. Menyelenggarakan pelatihan dan uji kompetensi berbasis SKKNI untuk 32 skema profesi kimia industri berlisensi resmi BNSP.\n2. Menyediakan sarana laboratorium analitik instrumen modern (HPLC, GC, Spektrofotometri) dan simulator IPAL yang lengkap.\n3. Membimbing perusahaan dalam pemenuhan regulasi keselamatan bahan kimia (GHS/SDS), pengendalian pencemaran air, udara, dan limbah B3.\n4. Mewujudkan sumber daya manusia industri kimia yang kompeten, berintegritas, dan berdaya saing global.",
            'floating_wa_text' => 'Halo Admin, saya ingin konsultasi mengenai pendaftaran dan jadwal Pelatihan & Uji Sertifikasi BNSP K3 Kimia Industri.',
        ];

        foreach ($settings as $key => $val) {
            Setting::updateOrCreate(['key' => $key], ['value' => $val, 'group' => 'general']);
        }

        // 3. Statistics
        $statistics = [
            [
                'key' => 'peserta_tersertifikasi',
                'label' => 'Personel Tersertifikasi BNSP',
                'value' => '18.500',
                'unit' => '+',
                'icon' => 'bi-people-fill',
                'description' => 'Alumni kompeten dari berbagai sektor petrokimia, pabrik AMDK, laboratorium, dan IPAL industri.',
                'sort_order' => 1,
            ],
            [
                'key' => 'perusahaan_mitra',
                'label' => 'Perusahaan Mitra & Industri',
                'value' => '840',
                'unit' => '+',
                'icon' => 'bi-building-check',
                'description' => 'BUMN Industri Kimia, Produsen Makanan-Minuman, Farmasi, Pertambangan, dan Manufaktur.',
                'sort_order' => 2,
            ],
            [
                'key' => 'skema_sertifikasi',
                'label' => 'Skema Sertifikasi BNSP',
                'value' => '32',
                'unit' => 'Skema',
                'icon' => 'bi-patch-check-fill',
                'description' => 'Ruang lingkup skema lengkap terdaftar resmi di LSP Kimia Industri berbasis SKKNI.',
                'sort_order' => 3,
            ],
            [
                'key' => 'jangkauan_provinsi',
                'label' => 'Jangkauan Wilayah',
                'value' => '38',
                'unit' => 'Provinsi',
                'icon' => 'bi-geo-alt-fill',
                'description' => 'Layanan in-house training dan uji kompetensi di seluruh kawasan industri se-Indonesia.',
                'sort_order' => 4,
            ]
        ];

        Statistic::truncate();
        foreach ($statistics as $stat) {
            Statistic::create($stat);
        }

        // 4. Hero Slides
        $slides = [
            [
                'title' => 'Training & Sertifikasi Profesi Kimia Industri Resmi BNSP',
                'subtitle' => 'Tingkatkan kompetensi kerja bersertifikat Garuda Emas untuk 32 skema: K3 Kimia, Analis AMDK, Operator IPAL, Sampling Lingkungan, Limbah B3, dan Instrumen HPLC/GC.',
                'badge' => 'Sertifikasi Resmi LSP Kimia Industri & BNSP',
                'cta_text' => 'Lihat 32 Skema Pelatihan',
                'cta_link' => '#program',
                'cta2_text' => 'Konsultasi WhatsApp',
                'cta2_link' => 'https://api.whatsapp.com/send?phone=6281399810272',
                'image' => 'https://images.unsplash.com/photo-1532187863486-abf9dbad1b69?w=1600&auto=format&fit=crop&q=80',
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'Kuasai Standar K3 Laboratorium & Pengendalian Lingkungan Industri',
                'subtitle' => 'Pelatihan berbasis praktik intensif: penanganan tumpahan kimia, interpretasi SDS GHS, validasi metode ISO 17025, dan manajemen limbah B3.',
                'badge' => 'Standar Kompetensi Kerja Nasional Indonesia (SKKNI)',
                'cta_text' => 'Pelajari Kurikulum',
                'cta_link' => '#program',
                'cta2_text' => 'Daftar Sekarang',
                'cta2_link' => '#kontak',
                'image' => 'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?w=1600&auto=format&fit=crop&q=80',
                'sort_order' => 2,
                'is_active' => true,
            ]
        ];

        HeroSlide::truncate();
        foreach ($slides as $slide) {
            HeroSlide::create($slide);
        }

        // 5. Seed 32 Programs from LSP Kimia Industri Scheme
        Program::truncate();
        $masterPrograms = K3KimiaSchemeService::getMasterPrograms();
        foreach ($masterPrograms as $prog) {
            Program::create($prog);
        }

        // 6. Initial DB Articles (3 featured articles for home page)
        Article::truncate();
        $initialArticles = [
            [
                'title' => 'Training K3 Kimia: Panduan Lengkap Standarisasi Sertifikasi BNSP dan Regulasi Ketenagakerjaan',
                'slug' => 'training-k3-kimia-panduan-lengkap-standarisasi-sertifikasi-bnsp-dan-regulasi-ketenagakerjaan',
                'category' => 'Regulasi K3 Kimia Industri',
                'province' => 'DKI Jakarta',
                'province_slug' => 'dki-jakarta',
                'city' => 'Kota Jakarta Pusat',
                'city_slug' => 'kota-jakarta-pusat',
                'district' => 'Gambir',
                'district_slug' => 'gambir',
                'program_id' => 15,
                'excerpt' => 'Kajian komprehensif implementasi K3 Kimia industri berlandaskan Kepmenaker No. 187/1999 dan SKKNI BNSP. Mengupas hierarki pengendalian bahan beracun, penyusunan SDS GHS 16 bagian, dan kewajiban sertifikasi profesi.',
                'content' => K3KimiaSchemeService::generateDeepContent(
                    'Training K3 Kimia: Panduan Lengkap Standarisasi Sertifikasi BNSP dan Regulasi Ketenagakerjaan',
                    ['province' => 'DKI Jakarta', 'city' => 'Kota Jakarta Pusat', 'district' => 'Gambir'],
                    Program::where('slug', 'ahli-muda-k3-kimia')->first()
                ),
                'author' => 'Asesor & Instruktur LSP Kimia Industri BNSP',
                'read_time' => 30,
                'views_count' => 1650,
                'featured_image' => 'https://images.unsplash.com/photo-1532187863486-abf9dbad1b69?w=1200&auto=format&fit=crop&q=80',
                'is_featured' => true,
                'is_published' => true,
                'meta_title' => 'Training K3 Kimia Panduan Lengkap Sertifikasi BNSP & Regulasi',
                'meta_description' => 'Pelajari regulasi resmi K3 Kimia industri, syarat sertifikasi BNSP Ahli K3 Kimia, SDS GHS, dan keselamatan laboratorium.',
                'created_at' => now()->subDays(2),
            ],
            [
                'title' => 'Training Penanggungjawab Pengendalian Pencemaran Air (PPCA): Strategi Pemenuhan Baku Mutu KLHK',
                'slug' => 'training-penanggungjawab-pengendalian-pencemaran-air-ppca-strategi-pemenuhan-baku-mutu-klhk',
                'category' => 'Pengendalian Lingkungan Hidup',
                'province' => 'Jawa Barat',
                'province_slug' => 'jawa-barat',
                'city' => 'Kota Bandung',
                'city_slug' => 'kota-bandung',
                'district' => 'Coblong',
                'district_slug' => 'coblong',
                'program_id' => 7,
                'excerpt' => 'Standar operasional prosedur pengelolaan air limbah industri, optimasi koagulasi-flokulasi, aerasi biologi lumpur aktif, integrasi SPARING KLHK, dan kepatuhan dokumen lingkungan PROPER.',
                'content' => K3KimiaSchemeService::generateDeepContent(
                    'Training Penanggungjawab Pengendalian Pencemaran Air (PPCA): Strategi Pemenuhan Baku Mutu KLHK',
                    ['province' => 'Jawa Barat', 'city' => 'Kota Bandung', 'district' => 'Coblong'],
                    Program::where('slug', 'penanggungjawab-pengendalian-pencemaran-air')->first()
                ),
                'author' => 'Tenaga Ahli Lingkungan Hidup & Asesor BNSP',
                'read_time' => 35,
                'views_count' => 1340,
                'featured_image' => 'https://images.unsplash.com/photo-1574974671999-24b7df56f569?w=1200&auto=format&fit=crop&q=80',
                'is_featured' => true,
                'is_published' => true,
                'meta_title' => 'Training PPCA Sertifikasi BNSP Pengendalian Pencemaran Air',
                'meta_description' => 'Kuasai rekayasa IPAL industri, neraca air, dan kepatuhan baku mutu lingkungan dengan sertifikasi resmi BNSP PPCA.',
                'created_at' => now()->subDays(5),
            ],
            [
                'title' => 'Training Operator HPLC: Prinsip Kromatografi Cair Fase Terbalik Kolom C18 dan Eluen Gradien',
                'slug' => 'training-operator-hplc-prinsip-kromatografi-cair-fase-terbalik-kolom-c18-dan-eluen-gradien',
                'category' => 'Instrumentasi Analitik',
                'province' => 'Jawa Timur',
                'province_slug' => 'jawa-timur',
                'city' => 'Kota Surabaya',
                'city_slug' => 'kota-surabaya',
                'district' => 'Gubeng',
                'district_slug' => 'gubeng',
                'program_id' => 12,
                'excerpt' => 'Panduan teknis pengoperasian High Performance Liquid Chromatography (HPLC): teknik degassing eluen, injeksi autosampler, optimasi kolom C18 fase terbalik, dan pemecahan masalah baseline drift.',
                'content' => K3KimiaSchemeService::generateDeepContent(
                    'Training Operator HPLC: Prinsip Kromatografi Cair Fase Terbalik Kolom C18 dan Eluen Gradien',
                    ['province' => 'Jawa Timur', 'city' => 'Kota Surabaya', 'district' => 'Gubeng'],
                    Program::where('slug', 'operator-instrumen-liquid-chromatography')->first()
                ),
                'author' => 'Spesialis Kimia Analitik & Kromatografi Laboratorium',
                'read_time' => 28,
                'views_count' => 1120,
                'featured_image' => 'https://images.unsplash.com/photo-1514933651103-005eec06c04b?w=1200&auto=format&fit=crop&q=80',
                'is_featured' => true,
                'is_published' => true,
                'meta_title' => 'Training Operator HPLC Sertifikasi Kompetensi Analis Kimia BNSP',
                'meta_description' => 'Pelatihan operasional alat HPLC/UHPLC laboratorium farmasi dan kimia analitik standar ISO/IEC 17025.',
                'created_at' => now()->subDays(7),
            ],
        ];

        foreach ($initialArticles as $art) {
            Article::create($art);
        }

        // 7. Testimonials
        $testimonials = [
            [
                'name' => 'Dr. Ir. Hendra Gunawan, M.T.',
                'role' => 'QA/QC General Manager',
                'company' => 'PT Mayora Indah Tbk (Divisi Beverage & AMDK)',
                'content' => 'Pelatihan skema Pengendalian Mutu AMDK dan Analis Laboratorium dari lembaga ini sangat komprehensif. Instrukturnya asesor BNSP aktif dengan pengalaman industri mendalam. Tim QC kami lulus 100% dan langsung menerapkan pemantauan mutu berstandar SNI.',
                'rating' => 5,
                'program_name' => 'Supervisor Pengendalian Mutu AMDK (SKKNI 161-2010)',
                'sort_order' => 1,
            ],
            [
                'name' => 'Dewi Safitri, S.Si.',
                'role' => 'Head of Environmental & WWTP Department',
                'company' => 'PT Chandra Asri Petrochemical Tbk',
                'content' => 'Materi PPCA, POPAL, dan Pengelolaan Limbah B3 dibahas sangat mendalam dengan studi kasus nyata. Dokumen kepatuhan lingkungan dan sistem pemantauan SPARING kami kini tertata jauh lebih rapi dan compliant terhadap regulasi KLHK.',
                'rating' => 5,
                'program_name' => 'Penanggungjawab Pengendalian Pencemaran Air (SKKNI 187-2016)',
                'sort_order' => 2,
            ],
            [
                'name' => 'Budi Santoso, S.T.',
                'role' => 'HSE & Chemical Safety Specialist',
                'company' => 'PT Unilever Indonesia Tbk',
                'content' => 'Skema Ahli Muda K3 Kimia dan Tanggap Darurat B3 sangat praktis. Pelatihan spill kit response dan penyusunan matriks kompatibilitas bahan kimia sangat membantu dalam audit keselamatan berkala korporat kami.',
                'rating' => 5,
                'program_name' => 'Ahli Muda K3 Kimia (SKKNI 042-2008)',
                'sort_order' => 3,
            ]
        ];

        Testimonial::truncate();
        foreach ($testimonials as $t) {
            Testimonial::create($t);
        }

        // 8. FAQs
        $faqs = [
            [
                'question' => 'Apa dasar hukum dan keabsahan sertifikat BNSP LSP Kimia Industri?',
                'answer' => 'Sertifikat kompetensi diterbitkan secara resmi oleh Badan Nasional Sertifikasi Profesi (BNSP) melalui Lembaga Sertifikasi Profesi (LSP) Kimia Industri berlisensi. Sertifikat berlambang Garuda Emas ini diakui secara legal di seluruh wilayah Indonesia dan diakui secara internasional di tingkat ASEAN (MRA).',
                'category' => 'regulasi',
                'sort_order' => 1,
            ],
            [
                'question' => 'Berapa banyak skema pelatihan sertifikasi yang tersedia?',
                'answer' => 'Tersedia 32 skema sertifikasi lengkap yang mencakup Pengendalian Mutu AMDK, Sampling Lingkungan (Air, Limbah, Udara), Pengendalian Pencemaran Air (PPCA/POPAL), Pengendalian Pencemaran Udara (PPPU/POPU), Laboratorium Analitik (Mikrobiologi, HPLC, GC), Ahli Muda & Utama K3 Kimia, Higiene Industri (HIMU/HIMA/HIU), Pengelolaan Limbah B3, Analisis Proksimat, Tanggap Darurat Kimia, PPIC Kimia, dan K3 Laboratorium.',
                'category' => 'program',
                'sort_order' => 2,
            ],
            [
                'question' => 'Berapa lama masa berlaku Sertifikat Kompetensi BNSP?',
                'answer' => 'Sertifikat Kompetensi BNSP berlaku selama 3 (tiga) tahun sejak tanggal diterbitkan, dan dapat diperpanjang (re-sertifikasi) melalui pemeliharaan kompetensi portofolio di LSP Kimia Industri.',
                'category' => 'sertifikasi',
                'sort_order' => 3,
            ],
            [
                'question' => 'Apakah tersedia pelatihan secara In-House Training di lokasi perusahaan?',
                'answer' => 'Ya, kami melayani penyelenggaraan In-House Training langsung di pabrik, kawasan industri, maupun Tempat Uji Kompetensi (TUK) mandiri perusahaan di 38 provinsi seluruh Indonesia dengan jadwal dan studi kasus yang disesuaikan kebutuhan internal klien.',
                'category' => 'jadwal',
                'sort_order' => 4,
            ],
            [
                'question' => 'Bagaimana alur pendaftaran dan nomor WhatsApp yang bisa dihubungi?',
                'answer' => 'Pendaftaran dapat dilakukan secara online melalui formulir kontak web ini atau langsung menghubungi 4 Hotline WhatsApp Resmi kami: Hotline Utama di 081399810272, CS 2 di 08118500177, CS 3 di 087894580806, atau CS 4 di 087894580649 untuk konfirmasi kuota dan silabus.',
                'category' => 'pendaftaran',
                'sort_order' => 5,
            ]
        ];

        Faq::truncate();
        foreach ($faqs as $f) {
            Faq::create($f);
        }

        Schema::enableForeignKeyConstraints();
    }
}
