<?php
/**
 * Template Name: Halaman Tentang Kami
 *
 * Cleanique Academy - About Page Template
 * Follows DESAIN.md: Modern Professional Academy x Luxury Editorial Corporate x Clean Industrial
 */
get_header();
?>

<!-- 1. BESPOKE LUXURY EDITORIAL HERO SECTION -->
<section class="about-hero-section" style="background-image: linear-gradient(145deg, rgba(7, 35, 56, 0.94) 0%, rgba(11, 93, 143, 0.90) 60%, rgba(8, 127, 193, 0.86) 100%), url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-lab-practical.jpg' ); ?>');">
    <div class="container about-hero-container">
        <div class="hero-editorial-pill">
            <span class="pill-pulse-dot"></span>
            <span>PT INDOTECH BERKAH ABADI</span>
        </div>

        <h1 class="about-hero-title">
            Pusat Riset Formulasi Kimia Kebersihan &amp; Inkubasi Wirausaha Mandiri di Indonesia
        </h1>

        <p class="about-hero-subtitle">
            Membimbing calon pengusaha &amp; pelaku industri manufaktur chemical dari skala dasar formulasi hingga mandiri memproduksi produk pembersih komersial berstandar nasional dan berdaya saing tinggi.
        </p>

        <nav class="about-hero-breadcrumbs" aria-label="Breadcrumb">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Beranda</a>
            <span class="breadcrumb-separator">&rsaquo;</span>
            <span>Tentang Cleanique Academy</span>
        </nav>
    </div>
</section>

<!-- 2. SEJARAH, REKAM JEJAK & EDITORIAL CORPORATE PILLARS -->
<section class="section">
    <div class="container" style="max-width: 1100px;">
        
        <div class="grid grid-2" style="gap: 3.5rem; align-items: flex-start;">
            <div>
                <div class="editorial-badge">
                    <span class="badge-dot"></span>
                    <span>SEJARAH &amp; REKAM JEJAK</span>
                    <span class="badge-code">PROFIL KORPORASI</span>
                </div>

                <h2 class="section-title" style="text-align: left; font-size: 2.2rem; line-height: 1.25; margin-bottom: 1.25rem; color: var(--color-primary-dark);">
                    Transformasi Riset Kimia Industri Menjadi Ekosistem Bisnis Mandiri
                </h2>
                
                <p class="editorial-lead-p">
                    <strong>Cleanique Academy</strong> adalah divisi edukasi, riset, dan pelatihan resmi di bawah naungan <strong>PT Indotech Berkah Abadi</strong> yang berpusat di Kabupaten Sleman, D.I. Yogyakarta.
                </p>

                <!-- 3 Feature Pillars -->
                <div class="editorial-pillars-list">
                    <div class="editorial-pillar-item">
                        <div class="pillar-icon-box">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                        </div>
                        <div>
                            <div class="pillar-title">Riset &amp; Manufaktur Nyata Sejak 2011</div>
                            <div class="pillar-desc">Mengawali perjalanan sebagai produsen bahan kimia pembersih komersial melalui brand Cleanique Lab dan Orchid Care yang dipercaya ratusan hotel, resto, dan usaha laundry.</div>
                        </div>
                    </div>

                    <div class="editorial-pillar-item">
                        <div class="pillar-icon-box">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
                        </div>
                        <div>
                            <div class="pillar-title">Standard Operating Procedure (SOP) Industri</div>
                            <div class="pillar-desc">Resep formulasi presisi yang teruji kestabilan mutunya, berdaya bersih maksimal, aman digunakan, serta efisien dari sisi biaya produksi (HPP).</div>
                        </div>
                    </div>

                    <div class="editorial-pillar-item">
                        <div class="pillar-icon-box">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                        </div>
                        <div>
                            <div class="pillar-title">Inkubasi Wirausaha &amp; Akses Rantai Pasok</div>
                            <div class="pillar-desc">Bukan sekadar seminar teori. Peserta didampingi seumur hidup, dibekali panduan legalitas izin edar, serta dihubungkan langsung ke supplier distributor bahan baku skala pabrik.</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- COMPOSITE HERO WORKSHOP IMAGE SHOWCASE & QUOTE BOX -->
            <div>
                <div class="about-hero-img-wrap">
                    <div class="img-tech-stamp">
                        <span class="img-tech-dot"></span>
                        <span>DOKUMENTASI WORKSHOP // SLEMAN, YOGYAKARTA</span>
                    </div>
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-lab-practical.jpg' ); ?>" alt="Instruktur Cleanique Academy memandu praktikum formulasi kimia di training center" loading="lazy">
                    <div class="about-hero-badge-overlay">
                        <span class="about-hero-badge-tag">WORKSHOP &amp; TRAINING CENTER</span>
                        <div class="about-hero-badge-title">Suasana Praktikum Formulasi Kimia Kebersihan Tatap Muka di Yogyakarta</div>
                    </div>
                </div>

                <!-- Editorial Quote Callout Box (Positioned directly under image) -->
                <div class="editorial-quote-box" style="margin-top: 1.5rem;">
                    <p class="editorial-quote-text">"Visi terbesar kami adalah mendemokratisasi keahlian formulasi kimia agar siapapun mampu memproduksi sabun &amp; chemical berkualitas pabrikan dengan modal terjangkau."</p>
                    <span class="editorial-quote-author">PT Indotech Berkah Abadi &bull; Sleman, D.I. Yogyakarta</span>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- 3. VISI & MISI PERUSAHAAN (ASYMMETRICAL BENTO GRID) -->
<section class="section section-decorated">
    <div class="container" style="max-width: 1100px;">
        
        <div class="section-header">
            <div class="editorial-badge">
                <span class="badge-dot"></span>
                <span>LANDASAN NILAI</span>
                <span class="badge-code">KREDIBILITAS &amp; KOMITMEN</span>
            </div>
            <h2 class="section-title">Visi &amp; Misi PT Indotech Berkah Abadi</h2>
            <div class="section-accent-bar"></div>
            <p class="section-description">
                Fondasi komitmen kami dalam menghadirkan edukasi formulasi kimia aplikatif dan pendampingan bisnis berkelanjutan bagi kemandirian industri lokal.
            </p>
        </div>

        <div class="bento-vm-grid">
            
            <!-- Left Bento: Visi Utama Card (Deep Blue Corporate) -->
            <div class="card-vision-bento">
                <div>
                    <div class="vision-header-tag">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="4"/></svg>
                        <span>VISI UTAMA KORPORASI</span>
                    </div>
                    <div class="vision-headline">
                        "Menjadi pusat pelatihan dan penyedia solusi formulasi kimia pembersih terdepan di Indonesia yang melahirkan pengusaha mandiri, efisien, dan berdaya saing tinggi."
                    </div>
                </div>
                <div>
                    <div style="width: 40px; height: 3px; background: var(--color-accent); border-radius: 2px; margin-bottom: 1rem;"></div>
                    <p class="vision-desc">
                        Bertekad memperkuat kemandirian ekonomi nasional dengan mencetak ribuan produsen chemical lokal yang mampu bersaing dengan produk multinasional.
                    </p>
                </div>
            </div>

            <!-- Right Bento: 3 Misi Strategis (Interactive Panels) -->
            <div class="card-mission-bento">
                
                <div class="mission-panel-item">
                    <div class="mission-panel-num">01</div>
                    <div class="mission-panel-content">
                        <h4>Materi Praktikum Formulasi Aplikatif &amp; Siap Produksi</h4>
                        <p>Menyajikan kurikulum formulasi kimia yang praktis, mudah dipahami pemula tanpa rumus rumit, dan dapat langsung diproduksi dengan alat sederhana.</p>
                    </div>
                </div>

                <div class="mission-panel-item">
                    <div class="mission-panel-num">02</div>
                    <div class="mission-panel-content">
                        <h4>Optimalisasi Bahan Aktif &amp; Standar Regulasi Kemenkes</h4>
                        <p>Mengedukasi teknik penggunaan bahan aktif (surfaktan, pengental, pewangi) yang tepat takaran, aman bagi kulit, ramah lingkungan, dan sesuai izin edar PKRT.</p>
                    </div>
                </div>

                <div class="mission-panel-item">
                    <div class="mission-panel-num">03</div>
                    <div class="mission-panel-content">
                        <h4>Pendampingan Usaha &amp; Ekosistem Rantai Pasok Bahan Baku</h4>
                        <p>Memberikan bimbingan seumur hidup bagi seluruh alumni dan menyediakan akses langsung ke distributor supplier bahan kimia skala pabrikan.</p>
                    </div>
                </div>

            </div>

        </div>

        <!-- VIDEO PENJELASAN & FASILITAS TRAINING CENTER -->
        <div class="video-profile-card">
            <div class="editorial-badge" style="margin-bottom: 0.75rem;">
                <span class="badge-dot"></span>
                <span>VIDEO DOKUMENTASI</span>
                <span class="badge-code">TRAINING CENTER SLEMAN</span>
            </div>
            <h3 class="video-profile-title">Pengenalan Program &amp; Suasana Pelatihan Cleanique Academy</h3>
            
            <div class="video-profile-frame" style="margin-bottom: 0;">
                <iframe src="https://www.youtube.com/embed/TwVdCpcpOzo" title="Cleanique Academy Video Profil Pelatihan" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>

    </div>
</section>

<!-- 4. ROADMAP ALUR MEMBANGUN USAHA CHEMICAL (PROCESS PIPELINE - BLUE DECORATIVE BACKGROUND) -->
<section class="section section-roadmap-dark">
    <!-- Subtle Decorative Background Wave / Grid Elements -->
    <div class="roadmap-bg-decor" aria-hidden="true">
        <svg class="roadmap-decor-svg roadmap-decor-top" viewBox="0 0 1440 280" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 192L48 181.3C96 170.7 192 149.3 288 154.7C384 160 480 192 576 197.3C672 202.7 768 181.3 864 160C960 138.7 1056 117.3 1152 122.7C1248 128 1344 160 1392 176L1440 192V0H1392C1344 0 1248 0 1152 0C1056 0 960 0 864 0C768 0 672 0 576 0C480 0 384 0 288 0C192 0 96 0 48 0H0V192Z" fill="rgba(255, 255, 255, 0.04)"/>
        </svg>
        <svg class="roadmap-decor-svg roadmap-decor-bottom" viewBox="0 0 1440 280" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 96L60 112C120 128 240 160 360 165.3C480 170.7 600 149.3 720 128C840 106.7 960 85.3 1080 96C1200 106.7 1320 149.3 1380 170.7L1440 192V280H1380C1320 280 1200 280 1080 280C960 280 840 280 720 280C600 280 480 280 360 280C240 280 120 280 60 280H0V96Z" fill="rgba(255, 255, 255, 0.04)"/>
        </svg>
    </div>

    <div class="container" style="max-width: 1100px; position: relative; z-index: 2;">
        
        <div class="section-header">
            <div class="editorial-badge editorial-badge-dark">
                <span class="badge-dot" style="background-color: var(--color-accent);"></span>
                <span>PANDUAN WIRAUSAHA KIMIA</span>
                <span class="badge-code" style="color: #bae6fd; border-color: rgba(255,255,255,0.2); background: rgba(255,255,255,0.1);">ALUR 4 TAHAP</span>
            </div>
            <h2 class="section-title" style="color: #ffffff;">Roadmap Membangun Usaha Chemical Mandiri dari Nol</h2>
            <div class="section-accent-bar" style="background: linear-gradient(90deg, #20A86B 0%, #38bdf8 100%);"></div>
            <p class="section-description" style="color: #e2e8f0;">
                Membangun industri pembuatan sabun cuci, pelembut pakaian, dan produk pembersih tidak memerlukan modal miliaran rupiah. Di Cleanique Academy, kami membimbing peserta melalui 4 tahapan sistematis:
            </p>
        </div>

        <!-- INFOGRAPHIC VISUAL IMAGE BANNER -->
        <div class="infographic-banner-wrap">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/infographic-workflow.jpg' ); ?>" alt="Infografis 4 Tahapan Pembuatan Chemical Industri sampai Komersialisasi" loading="lazy">
        </div>

        <div class="roadmap-timeline-flow">
            
            <div class="roadmap-step-item">
                <div class="roadmap-step-header">
                    <span class="roadmap-step-num">01</span>
                    <span class="roadmap-step-line"></span>
                </div>
                <span class="step-phase-tag">TAHAP I &bull; TEORI DASAR</span>
                <h3 class="roadmap-step-title">Karakteristik Bahan Aktif</h3>
                <p class="roadmap-step-desc">Mengenali fungsi surfaktan (anionic, nonionic, amphoteric), builder, emulsifier, preservative, dan fragrance untuk menentukan formula tepat sasaran.</p>
            </div>

            <div class="roadmap-step-item">
                <div class="roadmap-step-header">
                    <span class="roadmap-step-num">02</span>
                    <span class="roadmap-step-line"></span>
                </div>
                <span class="step-phase-tag">TAHAP II &bull; PRAKTIK</span>
                <h3 class="roadmap-step-title">Praktikum Formulasi Nyata</h3>
                <p class="roadmap-step-desc">Teknik meracik langsung di workshop training center agar emulsi stabil, tidak memisah, kental alami, dan memiliki daya bersih maksimal.</p>
            </div>

            <div class="roadmap-step-item">
                <div class="roadmap-step-header">
                    <span class="roadmap-step-num">03</span>
                    <span class="roadmap-step-line"></span>
                </div>
                <span class="step-phase-tag">TAHAP III &bull; BISNIS</span>
                <h3 class="roadmap-step-title">Analisis HPP &amp; Profit</h3>
                <p class="roadmap-step-desc">Kalkulasi biaya pokok produksi per liter dan penentuan strategi penetapan harga jual kompetitif dengan margin keuntungan 200% hingga 350%.</p>
            </div>

            <div class="roadmap-step-item">
                <div class="roadmap-step-header">
                    <span class="roadmap-step-num">04</span>
                    <span class="roadmap-step-line"></span>
                </div>
                <span class="step-phase-tag">TAHAP IV &bull; EKOSISTEM</span>
                <h3 class="roadmap-step-title">Rantai Pasok &amp; Distribusi</h3>
                <p class="roadmap-step-desc">Mendapatkan akses jaringan supplier bahan kimia skala pabrik, panduan izin edar PKRT/Kemenkes, dan strategi penetrasi pasar B2B laundry/hotel/B2C.</p>
            </div>

        </div>

    </div>
</section>

<!-- 5. LEGALITAS & SERTIFIKASI RESMI PT INDOTECH BERKAH ABADI -->
<section class="section section-decorated">
    <div class="container" style="max-width: 1100px;">
        <div class="grid grid-2" style="gap: 3.5rem; align-items: center;">
            <div class="legal-cert-img-wrap">
                <div class="img-tech-stamp">
                    <span class="img-tech-dot"></span>
                    <span>LEGALITAS RESMI // PT INDOTECH</span>
                </div>
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/certificate-module-mockup.jpg' ); ?>" alt="Mockup Sertifikat Pelatihan Resmi Cleanique Academy dan Modul Panduan Praktikum" loading="lazy">
            </div>
            <div>
                <div class="editorial-badge">
                    <span class="badge-dot"></span>
                    <span>LEGALITAS &amp; SERTIFIKASI RESMI</span>
                    <span class="badge-code">AKREDITASI RESMI</span>
                </div>
                <h2 class="section-title" style="text-align: left; font-size: 2.1rem; line-height: 1.25; margin-bottom: 1rem; color: var(--color-primary-dark);">
                    Sertifikat Pelatihan &amp; Modul Praktikum Resmi
                </h2>
                <div class="section-accent-bar" style="margin: 0 0 1.25rem 0;"></div>
                <p class="legal-cert-desc">
                    Setiap alumni Cleanique Academy yang telah menyelesaikan program pelatihan berhak menerima <strong>Sertifikat Kompetensi Pelatihan Resmi</strong> yang diterbitkan oleh <strong>PT Indotech Berkah Abadi</strong>.
                </p>
                <p class="legal-cert-subdesc">
                    Sertifikat dan Modul SOP ini menjadi bukti kompetensi teknis dalam pembuatan produk chemical kebersihan serta menjadi dokumen pendukung untuk kelengkapan administrasi izin edar usaha komersial Anda.
                </p>
                <div class="legal-cert-pills">
                    <div class="legal-pill">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#087FC1" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Terakreditasi PT Indotech</span>
                    </div>
                    <div class="legal-pill">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#087FC1" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Buku Modul SOP Lengkap</span>
                    </div>
                    <div class="legal-pill">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#087FC1" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Grup Bimbingan Alumni Seumur Hidup</span>
                    </div>
                    <div class="legal-pill">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#087FC1" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Rekomendasi Supplier Pabrik</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 6. KATALOG KELAS FORMULASI PRODUK KEBERSIHAN (PRODUCT MATRIX) -->
<section id="katalog-kategori" class="section">
    <div class="container" style="max-width: 1100px;">
        
        <div class="section-header">
            <div class="editorial-badge">
                <span class="badge-dot"></span>
                <span>BIDANG FORMULASI</span>
                <span class="badge-code">4 PILIHAN SPESIALISASI</span>
            </div>
            <h2 class="section-title">Kategori Formulasi Produk Kebersihan</h2>
            <div class="section-accent-bar"></div>
            <p class="section-description">Kami menyediakan 4 bidang formulasi utama skala industri &amp; komersial untuk memperluas jangkauan pasar bisnis Anda.</p>
        </div>

        <div class="category-row-list">
            
            <!-- Row 1: Laundry Chemical -->
            <div class="category-row-card category-row-reverse">
                <div class="category-img-col">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Pelatihan Chemical kategori laundry.png' ); ?>" alt="Pelatihan Chemical Kategori Laundry" loading="lazy">
                </div>
                <div class="category-info-col">
                    <span class="category-badge-pill pill-laundry">KATEGORI LAUNDRY</span>
                    <h3 class="category-row-title">Pelatihan Chemical Kategori Laundry</h3>
                    <p class="category-row-desc">
                        Pelajari standar pembuatan produk pembersih pakaian profesional untuk laundry koin, hotel, dan usaha laundry kiloan/satuan dengan biaya produksi efisien:
                    </p>
                    <div class="category-product-tags">
                        <span class="prod-tag">Deterjen Cair Matik</span>
                        <span class="prod-tag">Softener Parfum Mikroenkapsulasi</span>
                        <span class="prod-tag">Alkali Booster &amp; Emulsifier</span>
                        <span class="prod-tag">Anti Noda Karat/Darah/Lemak</span>
                    </div>
                    <ul class="category-item-list">
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#087FC1" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg> Deterjen Cair Pekat &amp; Deterjen Matik Rendah Busa Mesin Cuci</li>
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#087FC1" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg> Softener Parfum Tahan Lama &amp; Pelicin Pakaian Setrika Anti Kusut</li>
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#087FC1" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg> Alkali Booster &amp; Emulsifier Pengangkat Noda Minyak/Lemak Berat</li>
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#087FC1" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg> Oksigen Bleach Pemutih Serat Kain &amp; Formula Khusus Anti Noda Karat/Darah</li>
                    </ul>
                    <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya ingin tanya detail Pelatihan Kategori Laundry.' ) ); ?>" target="_blank" class="btn btn-whatsapp category-cta-btn">
                        <span>Konsultasi Kelas Laundry</span>
                    </a>
                </div>
            </div>

            <!-- Row 2: Household Chemical -->
            <div class="category-row-card">
                <div class="category-img-col">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Pelatihan Chemical kategori household.png' ); ?>" alt="Pelatihan Chemical Kategori Household Home Care" loading="lazy">
                </div>
                <div class="category-info-col">
                    <span class="category-badge-pill pill-household">KATEGORI HOUSEHOLD</span>
                    <h3 class="category-row-title">Pelatihan Chemical Kategori Household &amp; Home Care</h3>
                    <p class="category-row-desc">
                        Kuasai resep produk pembersih rumah tangga terlaris dengan formulasi ramah lingkungan, wangi segar, dan kesat seketika:
                    </p>
                    <div class="category-product-tags">
                        <span class="prod-tag">Sabun Cuci Piring Jeruk Nipis</span>
                        <span class="prod-tag">Pembersih Lantai Harum</span>
                        <span class="prod-tag">Pembersih Kaca Anti Embun</span>
                        <span class="prod-tag">Karbol Pinus Alami</span>
                    </div>
                    <ul class="category-item-list">
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#20A86B" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg> Sabun Cuci Piring Ekstra Busa Formula Kesat Ekstrak Jeruk Nipis</li>
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#20A86B" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg> Pembersih Lantai Kilap, Harum Mewah &amp; Anti Bakteri Efektif</li>
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#20A86B" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg> Pembersih Kaca Anti Embun, Cepat Kering &amp; Anti Bercak Debu</li>
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#20A86B" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg> Karbol Wangi Minyak Pinus Asli &amp; Disinfektan Sanitasi Ruangan</li>
                    </ul>
                    <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya ingin tanya detail Pelatihan Kategori Household.' ) ); ?>" target="_blank" class="btn btn-whatsapp category-cta-btn">
                        <span>Konsultasi Kelas Household</span>
                    </a>
                </div>
            </div>

            <!-- Row 3: Autocare Chemical -->
            <div class="category-row-card category-row-reverse">
                <div class="category-img-col">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Pelatihan Chemical kategori autocare.png' ); ?>" alt="Pelatihan Chemical Kategori Autocare" loading="lazy">
                </div>
                <div class="category-info-col">
                    <span class="category-badge-pill pill-autocare">KATEGORI AUTOCARE</span>
                    <h3 class="category-row-title">Pelatihan Chemical Kategori Autocare / Otomotif</h3>
                    <p class="category-row-desc">
                        Peluang bisnis bernilai tinggi di bidang perawatan kendaraan untuk salon mobil, car wash salju, dan bengkel:
                    </p>
                    <div class="category-product-tags">
                        <span class="prod-tag">Shampo Mobil Snow Wash</span>
                        <span class="prod-tag">Semir Ban Silicone Emulsion</span>
                        <span class="prod-tag">Pembersih Jamur Kaca Acid-Safe</span>
                        <span class="prod-tag">Quick Detailer Sealant</span>
                    </div>
                    <ul class="category-item-list">
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#d97706" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg> Shampo Kendaraan Busa Salju Tebal (Snow Wash) pH Netral Anti Kusam</li>
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#d97706" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg> Semir Ban Wet-Look Formula Emulsi Silicone Pekat Tahan Cuci Air</li>
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#d97706" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg> Pembersih Jamur Kaca &amp; Kerak Blok Mesin Acid-Safe Tidak Merusak Cat</li>
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#d97706" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg> Pengilap Bodi Kendaraan Hydrophobic Quick Detailer &amp; Paint Sealant</li>
                    </ul>
                    <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya ingin tanya detail Pelatihan Kategori Autocare.' ) ); ?>" target="_blank" class="btn btn-whatsapp category-cta-btn">
                        <span>Konsultasi Kelas Autocare</span>
                    </a>
                </div>
            </div>

            <!-- Row 4: Sanitasi Chemical -->
            <div class="category-row-card">
                <div class="category-img-col">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Pelatihan Chemical kategori sanitasi.png' ); ?>" alt="Pelatihan Chemical Kategori Sanitasi" loading="lazy">
                </div>
                <div class="category-info-col">
                    <span class="category-badge-pill pill-sanitasi">KATEGORI SANITASI</span>
                    <h3 class="category-row-title">Pelatihan Chemical Kategori Sanitasi &amp; Personal Care</h3>
                    <p class="category-row-desc">
                        Formulasi higienis bersertifikasi untuk fasilitas umum, rumah sakit, instansi perkantoran, dan kebutuhan komersial:
                    </p>
                    <div class="category-product-tags">
                        <span class="prod-tag">Handsoap Antiseptik</span>
                        <span class="prod-tag">Hand Sanitizer Standar WHO</span>
                        <span class="prod-tag">Disinfektan Hospital-Grade</span>
                        <span class="prod-tag">Pembersih Kerak Toilet Pekat</span>
                    </div>
                    <ul class="category-item-list">
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#9333ea" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg> Handsoap Antiseptik Busa Lembut, Harum &amp; Tidak Kering di Tangan</li>
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#9333ea" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg> Hand Sanitizer Gel &amp; Liquid Spray Formulasi Presisi Standar WHO</li>
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#9333ea" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg> Disinfektan Permukaan Hospital-Grade Efektif Basmi Virus &amp; Kuman</li>
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#9333ea" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg> Pembersih Kerak Toilet &amp; Porselen Pekat Cepat Larut Bebas Bau Menyengat</li>
                    </ul>
                    <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya ingin tanya detail Pelatihan Kategori Sanitasi.' ) ); ?>" target="_blank" class="btn btn-whatsapp category-cta-btn">
                        <span>Konsultasi Kelas Sanitasi</span>
                    </a>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- 7. NAVIGASI INTERNAL EKSPLORASI -->
<section class="section">
    <div class="container" style="max-width: 1100px;">
        <div class="section-header">
            <div class="editorial-badge">
                <span class="badge-dot"></span>
                <span>EKSPLORASI PLATFORM</span>
                <span class="badge-code">LAYANAN LAINNYA</span>
            </div>
            <h2 class="section-title">Informasi Lanjutan Cleanique Academy</h2>
            <div class="section-accent-bar"></div>
        </div>
        <div class="internal-links-grid">
            <a href="<?php echo esc_url( home_url( '/program-pelatihan/' ) ); ?>" class="internal-link-card">
                <div class="internal-link-icon-box">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                </div>
                <div class="internal-link-title">
                    <span>Katalog Program Pelatihan</span>
                    <span class="internal-link-arrow">&rarr;</span>
                </div>
                <p class="internal-link-desc">Pilihan kelas reguler kolektif, kelas privat eksklusif, dan jadwal pelatihan bulan ini.</p>
            </a>
            <a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>" class="internal-link-card">
                <div class="internal-link-icon-box">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                </div>
                <div class="internal-link-title">
                    <span>Pusat Tanya Jawab (FAQ)</span>
                    <span class="internal-link-arrow">&rarr;</span>
                </div>
                <p class="internal-link-desc">Pertanyaan umum seputar lokasi training center, legalitas usaha, dan konsultasi pasca kelas.</p>
            </a>
            <a href="<?php echo esc_url( home_url( '/dokumentasi-event/' ) ); ?>" class="internal-link-card">
                <div class="internal-link-icon-box">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg>
                </div>
                <div class="internal-link-title">
                    <span>Galeri Dokumentasi Event</span>
                    <span class="internal-link-arrow">&rarr;</span>
                </div>
                <p class="internal-link-desc">Dokumentasi foto kegiatan workshop tatap muka peserta Cleanique Academy di berbagai kota.</p>
            </a>
        </div>
    </div>
</section>

<!-- 9. SEKSI FAQ (PERTANYAAN SERING DIAJUKAN - NATIVE ACCORDION) -->
<section id="faq" class="section section-decorated">
    <div class="container" style="max-width: 880px;">
        
        <div class="section-header">
            <div class="editorial-badge">
                <span class="badge-dot"></span>
                <span>PUSAT INFORMASI</span>
                <span class="badge-code">KONSULTASI &amp; JAWABAN</span>
            </div>
            <h2 class="section-title">Pertanyaan Sering Diajukan (FAQ)</h2>
            <div class="section-accent-bar"></div>
            <p class="section-description">Informasi praktis seputar bimbingan teknis dan pendaftaran kelas di Cleanique Academy.</p>
        </div>

        <div style="margin-bottom: 2rem;">
            
            <details class="accordion-item" open>
                <summary class="accordion-header">
                    <span>Apakah pemula tanpa latar belakang kimia bisa mengikuti pelatihan?</span>
                </summary>
                <div class="accordion-body">
                    Sangat bisa! Seluruh materi pelatihan dirancang praktis dari dasar. Peserta diajarkan mengenal fungsi bahan aktif, takaran persentase aman, hingga cara meracik produk pembersih secara mandiri tanpa perlu rumus kimia yang rumit.
                </div>
            </details>

            <details class="accordion-item">
                <summary class="accordion-header">
                    <span>Fasilitas apa saja yang didapatkan oleh setiap peserta pelatihan?</span>
                </summary>
                <div class="accordion-body">
                    Setiap peserta akan mendapatkan modul praktikum fisik &amp; digital, sampel bahan kimia untuk meracik langsung di kelas, sertifikat pelatihan resmi dari Cleanique Academy (PT Indotech Berkah Abadi), serta akses seumur hidup ke grup bimbingan mitra.
                </div>
            </details>

            <details class="accordion-item">
                <summary class="accordion-header">
                    <span>Dimana lokasi pelatihan tatap muka diselenggarakan?</span>
                </summary>
                <div class="accordion-body">
                    Pelatihan rutin diselenggarakan di Training Center Cleanique Academy di Sleman, D.I. Yogyakarta, serta event kelas privat / khusus sesuai kesepakatan lokasi peserta.
                </div>
            </details>

            <details class="accordion-item">
                <summary class="accordion-header">
                    <span>Apakah ada bimbingan atau konsultasi setelah pelatihan selesai?</span>
                </summary>
                <div class="accordion-body">
                    Ya, tentu saja! Kami menyediakan grup bimbingan mitra WhatsApp dan saluran konsultasi langsung dengan tim instruktur/riset untuk membantu Anda jika mengalami kendala saat produksi mandiri di lapangan.
                </div>
            </details>

            <details class="accordion-item">
                <summary class="accordion-header">
                    <span>Bagaimana cara mendaftar dan menentukan jadwal kelas?</span>
                </summary>
                <div class="accordion-body">
                    Anda dapat menghubungi CS kami via WhatsApp. Kami akan membantu mencocokkan jadwal pelatihan akhir pekan (Sabtu - Minggu) atau mengatur jadwal kelas privat sesuai fleksibilitas waktu Anda.
                </div>
            </details>

        </div>

    </div>
</section>

<!-- 10. SEKSI KONTAK KANTOR PUSAT & CALL TO ACTION (DEEP BLUE #0B5D8F) -->
<section id="kontak" class="section section-dark-cta">
    <div class="container" style="max-width: 880px;">
        <div class="contact-cta-box">
            <span class="contact-cta-subtitle">KANTOR PUSAT &amp; LAYANAN MITRA</span>
            <h2 class="contact-cta-title">Konsultasikan Kebutuhan Pelatihan Anda Bersama Kami</h2>
            <p class="contact-cta-desc">Tim konsultan dan instruktur Cleanique Academy (PT Indotech Berkah Abadi) siap melayani pertanyaan seputar jadwal, kurikulum formulasi, dan peluang kemitraan usaha.</p>
            <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya ingin konsultasi pendaftaran dari halaman Tentang Kami.' ) ); ?>" target="_blank" class="btn btn-whatsapp btn-cta-large">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.157 4.228 4.228-1.157zm12.339-6.495c-.068-.113-.25-.181-.523-.317-.272-.136-1.61-.795-1.86-.886-.25-.091-.432-.136-.613.136-.182.272-.704.886-.863 1.067-.159.182-.318.204-.59.068-.272-.136-1.151-.424-2.193-1.353-.81-.723-1.357-1.616-1.516-1.888-.159-.272-.017-.419.119-.554.122-.122.272-.318.408-.477.136-.159.182-.272.272-.454.091-.182.045-.341-.023-.477-.068-.136-.613-1.477-.84-2.023-.222-.534-.447-.461-.613-.469-.159-.008-.341-.01-.523-.01s-.477.068-.727.341c-.25.272-.954.932-.954 2.273s.977 2.636 1.114 2.818c.136.182 1.923 2.936 4.659 4.116.65.281 1.158.448 1.554.573.653.207 1.247.178 1.716.108.523-.078 1.61-.658 1.838-1.295.227-.636.227-1.181.159-1.295z"/></svg>
                <span>Hubungi Kami via WhatsApp</span>
            </a>
        </div>
    </div>
</section>

<!-- Schema.org Data Structuring (JSON-LD) for EducationalOrganization -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "EducationalOrganization",
  "name": "Cleanique Academy - PT Indotech Berkah Abadi",
  "url": "<?php echo esc_url( home_url( '/tentang-kami/' ) ); ?>",
  "logo": "<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo.webp' ); ?>",
  "description": "Pusat Riset, Edukasi & Bimbingan Formulasi Kimia Kebersihan Terpercaya Sejak 2011 di Indonesia.",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Jongke Tengah No. 30, RT.01/RW.23, Sendangadi, Kec. Mlati",
    "addressLocality": "Kabupaten Sleman",
    "addressRegion": "D.I. Yogyakarta",
    "postalCode": "55285",
    "addressCountry": "ID"
  },
  "parentOrganization": {
    "@type": "Organization",
    "name": "PT Indotech Berkah Abadi",
    "url": "https://indotech.id/"
  }
}
</script>

<?php
get_footer();

