@extends('layouts.front')

@section('title', 'Tentang Kami | Sejarah, Visi, Misi & Legalitas Training K3 Kimia')
@section('meta_description', 'Profil lengkap, sejarah pendirian, visi, misi, dan legalitas pembinaan K3 Kimia Industri BNSP (K3 Kimia Industri & Laboratorium) resmi berstandar BNSP & LSP Kimia Industri dan BNSP.')

@section('content')

    <!-- HERO ABOUT -->
    <section class="hero-section" style="padding: 56px 0 50px;">
        <div class="container">
            <div class="hero-badge">
                <i class="bi bi-building-check"></i>
                Profil Lembaga Pelatihan K3 Resmi
            </div>

            <h1 class="hero-title" style="font-size: 2.35rem;">
                Membangun Budaya Keselamatan <span>K3 Kimia Industri & Laboratorium</span> di Seluruh Indonesia
            </h1>

            <p class="hero-lead" style="max-width: 780px;">
                Mendedikasikan diri untuk melindungi keselamatan jiwa tenaga kerja di area berisiko tinggi melalui pembinaan kompetensi teknis, sertifikasi resmi LSP Kimia Industri & BNSP, serta penyediaan standar operasional prosedur yang teruji di industri.
            </p>
        </div>
    </section>

    <!-- SEJARAH, VISI & MISI SECTION -->
    <section class="section-py">
        <div class="container">
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 36px; margin-bottom: 56px; align-items: center;">
                <div>
                    <span class="section-tag">Sejarah Kami</span>
                    <h2 class="section-title" style="font-size: 1.85rem; margin-bottom: 18px;">
                        Pusat Unggulan Pelatihan & Sertifikasi Profesi Kimia Industri Nasional
                    </h2>
                    <p style="font-size: 0.92rem; color: #475569; line-height: 1.7; margin-bottom: 14px;">
                        Industri proses kimia, petrokimia, farmasi, AMDK, pengolahan limbah B3, dan operasional laboratorium di Indonesia membutuhkan tenaga kerja berkualifikasi tinggi yang menguasai standar keselamatan kerja dan kepatuhan lingkungan hidup. Kebutuhan akan analis laboratorium bersertifikasi, petugas sampling lingkungan, penanggung jawab IPAL (PPCA/POPAL), penanggung jawab emisi udara (PPPU/POPU), hingga Ahli K3 Kimia terus meningkat secara signifikan.
                    </p>
                    <p style="font-size: 0.92rem; color: #475569; line-height: 1.7; margin-bottom: 20px;">
                        Didirikan oleh para profesional keselamatan kerja, auditor lingkungan, dan asesor kompetensi berlisensi BNSP, <strong>Training K3 Kimia Indonesia</strong> hadir menyelenggarakan 32 skema sertifikasi terakreditasi berbasis SKKNI. Kami menyediakan pembinaan berstandar industri dengan fasilitas praktikum instrumen modern, simulasi penanganan tumpahan kimia, hingga validasi metode uji laboratorium.
                    </p>
                    <div style="display: flex; gap: 18px; flex-wrap: wrap;">
                        <div style="background: #f0f9ff; border-left: 4px solid #0284c7; padding: 12px 18px; border-radius: 0 8px 8px 0;">
                            <div style="font-size: 1.3rem; font-weight: 800; color: #0284c7;">32 Skema</div>
                            <div style="font-size: 0.78rem; color: #0369a1; font-weight: 600;">Sertifikasi Resmi BNSP</div>
                        </div>
                        <div style="background: #f0f9ff; border-left: 4px solid #0284c7; padding: 12px 18px; border-radius: 0 8px 8px 0;">
                            <div style="font-size: 1.3rem; font-weight: 800; color: #0284c7;">38 Provinsi</div>
                            <div style="font-size: 0.78rem; color: #0369a1; font-weight: 600;">Jangkauan Layanan Pelatihan</div>
                        </div>
                    </div>
                </div>

                <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: var(--radius-xl); padding: 32px; box-shadow: 0 8px 24px rgba(2,132,199,0.06);">
                    <div style="margin-bottom: 28px;">
                        <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 12px;">
                            <div style="width: 38px; height: 38px; background: #f0f9ff; color: #0369a1; border-radius: 8px; display: flex; align-items: center; justify-content: center; font-size: 1.25rem;">
                                <i class="bi bi-eye-fill"></i>
                            </div>
                            <h3 style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin: 0;">Visi Lembaga</h3>
                        </div>
                        <p style="font-size: 0.9rem; color: #475569; line-height: 1.65; margin: 0;">
                            Menjadi lembaga pembinaan dan sertifikasi kompetensi K3 Kimia Industri, Pengendalian Mutu Laboratorium, dan Pengelolaan Lingkungan Industri nomor satu di Indonesia yang terpercaya, profesional, dan berdaya saing global.
                        </p>
                    </div>

                    <div style="border-top: 1px solid #f1f5f9; padding-top: 24px;">
                        <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 14px;">
                            <div style="width: 38px; height: 38px; background: #f0f9ff; color: #0369a1; border-radius: 8px; display: flex; align-items: center; justify-content: center; font-size: 1.25rem;">
                                <i class="bi bi-bullseye"></i>
                            </div>
                            <h3 style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin: 0;">Misi Utama</h3>
                        </div>
                        <ul style="list-style: none; display: flex; flex-direction: column; gap: 10px; font-size: 0.88rem; color: #475569; padding: 0;">
                            <li style="display: flex; align-items: flex-start; gap: 10px;">
                                <i class="bi bi-check-circle-fill" style="color: #0284c7; margin-top: 2px;"></i>
                                <span>Menyelenggarakan pelatihan dan uji kompetensi profesi 32 skema sertifikasi berstandar SKKNI dan lisensi resmi BNSP RI.</span>
                            </li>
                            <li style="display: flex; align-items: flex-start; gap: 10px;">
                                <i class="bi bi-check-circle-fill" style="color: #0284c7; margin-top: 2px;"></i>
                                <span>Membekali praktisi industri dengan keahlian teknis operasional: pengendalian mutu AMDK, sampling air & udara, instrumen HPLC/GC, operasional IPAL, dan manajemen limbah B3.</span>
                            </li>
                            <li style="display: flex; align-items: flex-start; gap: 10px;">
                                <i class="bi bi-check-circle-fill" style="color: #0284c7; margin-top: 2px;"></i>
                                <span>Mendukung dunia usaha mewujudkan tempat kerja yang aman, minim risiko paparan zat kimia berbahaya, serta patuh terhadap regulasi KLHK dan Kemnaker RI.</span>
                            </li>
                            <li style="display: flex; align-items: flex-start; gap: 10px;">
                                <i class="bi bi-check-circle-fill" style="color: #0284c7; margin-top: 2px;"></i>
                                <span>Menyediakan layanan konsultasi teknis respon cepat serta program In-House Training fleksibel di seluruh 38 provinsi Indonesia.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- 4 HOTLINE WHATSAPP -->
            <div class="wa-hotlines-box">
                <div class="wa-hotlines-header">
                    <h3><i class="bi bi-whatsapp" style="color: var(--accent-sky); margin-right: 8px;"></i> Kontak WhatsApp Resmi Lembaga Training K3 Kimia</h3>
                    <p>Silakan berkonsultasi langsung dengan konsultan kami mengenai jadwal pelatihan, modul silabus, atau proposal penawaran perusahaan:</p>
                </div>

                <div class="wa-hotlines-grid">
                    @foreach($waNumbers as $hotline)
                        <a href="{{ $hotline['url'] }}" target="_blank" class="wa-hotline-card">
                            <div class="wa-hotline-top">
                                <div class="wa-hotline-icon">
                                    <i class="bi {{ $hotline['icon'] }}"></i>
                                </div>
                                <span class="wa-hotline-badge">{{ $hotline['badge'] }}</span>
                            </div>
                            <div class="wa-hotline-title">{{ $hotline['title'] }}</div>
                            <div class="wa-hotline-desc">{{ $hotline['desc'] }}</div>
                            <div class="wa-hotline-phone">
                                <i class="bi bi-whatsapp"></i> {{ $hotline['number'] }}
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection
