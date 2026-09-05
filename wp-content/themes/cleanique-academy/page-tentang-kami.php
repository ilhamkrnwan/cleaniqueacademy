<?php
/**
 * Template Name: Halaman Tentang Kami
 *
 * Cleanique Academy - About Page Template
 * Design System: Modern Swiss Style (International Typographic Style) x Clean Industrial x Editorial Corporate
 * Strictly Follows: No system icons/emojis, Official SVG icons, Real Photographic Assets, 70/20/10 Color Harmony
 */
get_header();
?>

<!-- ==========================================================================
     00. SWISS EDITORIAL HERO SECTION (ASYMMETRICAL TYPOGRAPHIC LAYOUT)
     ========================================================================== -->
<section class="swiss-hero">
    <div class="container">
        
        <!-- Swiss Top Running Bar -->
        <div class="swiss-running-bar">
            <div class="swiss-running-left">
                <span class="swiss-mono-tag">[ 00 // INSTITUTION PROFILE ]</span>
                <span class="swiss-bar-sep">/</span>
                <span class="swiss-bar-entity">PT INDOTECH BERKAH ABADI</span>
            </div>
            <div class="swiss-running-right">
                <span class="swiss-status-dot"></span>
                <span class="swiss-mono-meta">TRAINING &amp; RES-LAB // SLEMAN, YOGYAKARTA // EST. 2011</span>
            </div>
        </div>

        <!-- Asymmetrical Hero Grid (Text Powerhouse + Technical Photo Frame) -->
        <div class="swiss-hero-grid">
            
            <!-- Left Column: High-Impact Creative Typography -->
            <div class="swiss-hero-col-text">
                <div class="swiss-badge-technical">
                    <span class="badge-dot"></span>
                    <span class="badge-label">PUSAT RISET &amp; INKUBASI CHEMICAL</span>
                    <span class="badge-code">IDT-ACADEMY</span>
                </div>

                <h1 class="swiss-hero-title">
                    Pusat Riset Formulasi Kimia Kebersihan &amp; Inkubasi Industri Mandiri.
                </h1>

                <p class="swiss-hero-manifesto">
                    Membimbing wirausaha &amp; pelaku industri manufaktur chemical dari skala dasar pemahaman bahan aktif hingga mandiri memproduksi produk pembersih komersial berstandar nasional dan berdaya saing tinggi.
                </p>

                <!-- Swiss Metrics Data Rail -->
                <div class="swiss-hero-metrics">
                    <div class="swiss-metric-item">
                        <span class="swiss-metric-num">14+</span>
                        <span class="swiss-metric-label">Tahun Riset &amp; Manufaktur</span>
                    </div>
                    <div class="swiss-metric-item">
                        <span class="swiss-metric-num">1M+</span>
                        <span class="swiss-metric-label">Unit Chemical Terjual</span>
                    </div>
                    <div class="swiss-metric-item">
                        <span class="swiss-metric-num">18+</span>
                        <span class="swiss-metric-label">Formulasi Komersial</span>
                    </div>
                    <div class="swiss-metric-item">
                        <span class="swiss-metric-num">100%</span>
                        <span class="swiss-metric-label">Praktikum Formulasi Mandiri</span>
                    </div>
                </div>

                <!-- Action CTA & Breadcrumb -->
                <div class="swiss-hero-actions">
                    <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya ingin konsultasi pendaftaran dari halaman Tentang Kami.' ) ); ?>" target="_blank" class="btn btn-whatsapp swiss-btn-cta">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.157 4.228 4.228-1.157zm12.339-6.495c-.068-.113-.25-.181-.523-.317-.272-.136-1.61-.795-1.86-.886-.25-.091-.432-.136-.613.136-.182.272-.704.886-.863 1.067-.159.182-.318.204-.59.068-.272-.136-1.151-.424-2.193-1.353-.81-.723-1.357-1.616-1.516-1.888-.159-.272-.017-.419.119-.554.122-.122.272-.318.408-.477.136-.159.182-.272.272-.454.091-.182.045-.341-.023-.477-.068-.136-.613-1.477-.84-2.023-.222-.534-.447-.461-.613-.469-.159-.008-.341-.01-.523-.01s-.477.068-.727.341c-.25.272-.954.932-.954 2.273s.977 2.636 1.114 2.818c.136.182 1.923 2.936 4.659 4.116.65.281 1.158.448 1.554.573.653.207 1.247.178 1.716.108.523-.078 1.61-.658 1.838-1.295.227-.636.227-1.181.159-1.295z"/></svg>
                        <span>Konsultasi Program Pelatihan</span>
                    </a>
                    <a href="#katalog-kategori" class="btn btn-outline swiss-btn-anchor">
                        <span>Lihat Spesialisasi Formula</span>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
                    </a>
                </div>

                <nav class="swiss-hero-breadcrumb" aria-label="Breadcrumb">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Beranda</a>
                    <span class="bc-sep">/</span>
                    <span>Profil Institusi</span>
                    <span class="bc-sep">/</span>
                    <span class="bc-current">Tentang Cleanique Academy</span>
                </nav>
            </div>

            <!-- Right Column: Architectural Photo Showcase -->
            <div class="swiss-hero-col-photo">
                <div class="swiss-frame-card">
                    <div class="swiss-frame-topbar">
                        <span class="swiss-frame-tag">FIG. 00.1 // DOKUMENTASI WORKSHOP SLEMAN</span>
                        <span class="swiss-frame-code">LAB-RES-01</span>
                    </div>
                    <div class="swiss-frame-image">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-lab-practical.jpg' ); ?>" alt="Instruktur Cleanique Academy memandu praktikum formulasi kimia kebersihan" loading="eager">
                        <div class="swiss-frame-overlay-badge">
                            <span class="overlay-badge-dot"></span>
                            <span>WORKSHOP &amp; RES-LAB TATAP MUKA</span>
                        </div>
                    </div>
                    <div class="swiss-frame-caption">
                        <div class="caption-title">Suasana Praktikum Formulasi Kimia Kebersihan</div>
                        <div class="caption-desc">Laboratorium Cleanique Academy (PT Indotech Berkah Abadi), Sleman, D.I. Yogyakarta. Praktikum langsung 1-on-1 &amp; kelas kolektif dengan bahan baku industri.</div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- ==========================================================================
     01. SEJARAH & REKAM JEJAK (EDITORIAL MANIFESTO & CORPORATE PILLARS)
     ========================================================================== -->
<section class="section swiss-section-white">
    <div class="container">
        
        <!-- Swiss Section Header -->
        <div class="swiss-section-marker">
            <span class="marker-index">01</span>
            <h2 class="marker-title">SEJARAH, REKAM JEJAK &amp; MANIFESTO</h2>
            <span class="marker-rule"></span>
            <span class="marker-code">DNA KORPORASI</span>
        </div>

        <div class="swiss-grid-split">
            
            <!-- Left Side: Bold Typographic Manifesto -->
            <div class="swiss-manifesto-col">
                <div class="swiss-quote-large">
                    &ldquo;Kami tidak hanya mengajarkan cara mencampur bahan. Kami membekali Anda dengan standar operasional pabrik, optimasi HPP, dan akses rantai pasok kimia industri agar Anda mampu berdiri mandiri.&rdquo;
                </div>
                
                <div class="swiss-attribution-box">
                    <div class="attr-title">PT Indotech Berkah Abadi</div>
                    <div class="attr-sub">Divisi Edukasi &amp; Riset Formulasi &bull; Sleman, D.I. Yogyakarta</div>
                </div>

                <div class="swiss-lead-editorial">
                    <strong>Cleanique Academy</strong> didirikan sebagai jawaban atas kesenjangan antara teori kimia akademis dan kebutuhan industri pembersih aplikatif di Indonesia. Berakar dari pengalaman manufaktur lebih dari satu dekade, kami merancang kurikulum praktis yang dapat dikuasai siapapun tanpa latar belakang pendidikan kimia formal.
                </div>
            </div>

            <!-- Right Side: 3 Industrial Pillars List -->
            <div class="swiss-pillars-col">
                
                <div class="swiss-pillar-card">
                    <div class="pillar-num-badge">01</div>
                    <div class="pillar-content">
                        <h3 class="pillar-heading">Riset &amp; Manufaktur Nyata Sejak 2011</h3>
                        <p class="pillar-paragraph">
                            Mengawali langkah sebagai produsen mandiri melalui merek Cleanique Lab dan Orchid Care yang telah dipercaya oleh ratusan hotel, restoran, rumah sakit, dan ratusan wirausaha laundry komersial di Indonesia.
                        </p>
                        <div class="pillar-subtag">PENGALAMAN LAPANGAN NYATA</div>
                    </div>
                </div>

                <div class="swiss-pillar-card">
                    <div class="pillar-num-badge">02</div>
                    <div class="pillar-content">
                        <h3 class="pillar-heading">Standard Operating Procedure (SOP) Industri</h3>
                        <p class="pillar-paragraph">
                            Setiap formula melewati pengujian kestabilan fase, uji derajat keasaman (pH balance), serta efisiensi takaran surfaktan aktif. Peserta diajarkan teknik produksi presisi yang konsisten dan hemat biaya modal.
                        </p>
                        <div class="pillar-subtag">FORMULASI TERUJI &amp; STABIL</div>
                    </div>
                </div>

                <div class="swiss-pillar-card">
                    <div class="pillar-num-badge">03</div>
                    <div class="pillar-content">
                        <h3 class="pillar-heading">Inkubasi Wirausaha &amp; Akses Rantai Pasok</h3>
                        <p class="pillar-paragraph">
                            Bukan sekadar pelatihan satu hari. Seluruh alumni mendapatkan bimbingan seumur hidup, asistensi perizinan edar PKRT/Kemenkes, serta koneksi langsung ke supplier distributor bahan baku kimia skala pabrikan.
                        </p>
                        <div class="pillar-subtag">JARINGAN SUPPLIER &amp; IZIN EDAR</div>
                    </div>
                </div>

            </div>

        </div>

        <!-- Swiss Metric Stat Matrix -->
        <div class="swiss-stat-matrix">
            <div class="stat-matrix-cell">
                <div class="matrix-cell-header">
                    <span class="matrix-cell-index">METRIC // 01</span>
                    <span class="matrix-cell-dot"></span>
                </div>
                <div class="matrix-cell-value">14+</div>
                <div class="matrix-cell-title">TAHUN RISET &amp; MANUFAKTUR</div>
                <div class="matrix-cell-desc">Pengalaman konsisten dalam memproduksi formula kimia pembersih komersial sejak 2011.</div>
            </div>

            <div class="stat-matrix-cell">
                <div class="matrix-cell-header">
                    <span class="matrix-cell-index">METRIC // 02</span>
                    <span class="matrix-cell-dot"></span>
                </div>
                <div class="matrix-cell-value">1.000.000+</div>
                <div class="matrix-cell-title">UNIT CHEMICAL TERDISTRIBUSI</div>
                <div class="matrix-cell-desc">Volume produk pembersih yang terbukti diterima oleh pasar industri B2B maupun konsumen akhir.</div>
            </div>

            <div class="stat-matrix-cell">
                <div class="matrix-cell-header">
                    <span class="matrix-cell-index">METRIC // 03</span>
                    <span class="matrix-cell-dot"></span>
                </div>
                <div class="matrix-cell-value">18+</div>
                <div class="matrix-cell-title">FORMULA INDUSTRI SIAP EDAR</div>
                <div class="matrix-cell-desc">Koleksi resep presisi: laundry, household, autocare, hingga cairan sanitasi antiseptik.</div>
            </div>

            <div class="stat-matrix-cell">
                <div class="matrix-cell-header">
                    <span class="matrix-cell-index">METRIC // 04</span>
                    <span class="matrix-cell-dot"></span>
                </div>
                <div class="matrix-cell-value">100%</div>
                <div class="matrix-cell-title">BIMBINGAN KONSULTASI SEUMUR HIDUP</div>
                <div class="matrix-cell-desc">Dukungan teknis purna-kelas untuk menjamin kelancaran produksi mandiri mitra di daerah masing-masing.</div>
            </div>
        </div>

    </div>
</section>

<!-- ==========================================================================
     02. LANDASAN NILAI: VISI & MISI KORPORASI (BENTO ASYMMETRICAL POSTER)
     ========================================================================== -->
<section class="section swiss-section-light">
    <div class="container">
        
        <!-- Swiss Section Header -->
        <div class="swiss-section-marker">
            <span class="marker-index">02</span>
            <h2 class="marker-title">LANDASAN NILAI &amp; KOMITMEN</h2>
            <span class="marker-rule"></span>
            <span class="marker-code">VISI &amp; MISI KORPORASI</span>
        </div>

        <div class="swiss-bento-vm">
            
            <!-- Left Bento: Visi Poster Card (Deep Corporate Slate #072338) -->
            <div class="swiss-card-vision">
                <div class="vision-top-meta">
                    <span class="vision-tag">[ VISI UTAMA KORPORASI ]</span>
                    <span class="vision-dot"></span>
                </div>

                <div class="vision-quote-display">
                    &ldquo;Menjadi pusat riset formulasi kimia aplikatif dan inkubasi wirausaha chemical terdepan di Indonesia yang melahirkan produsen mandiri berdaya saing nasional.&rdquo;
                </div>

                <div class="vision-footer-note">
                    <div class="vision-accent-line"></div>
                    <p>
                        Bertekad memperkuat ketahanan ekonomi nasional dengan mencetak wirausaha lokal yang menguasai resep formulasi bernilai tambah tinggi tanpa ketergantungan pada produk impor.
                    </p>
                </div>
            </div>

            <!-- Right Bento: 3 Misi Strategis (Modular Structured Panels) -->
            <div class="swiss-cards-mission">
                
                <div class="swiss-mission-panel">
                    <div class="mission-num">01</div>
                    <div class="mission-body">
                        <div class="mission-header-tag">KURIKULUM APLIKATIF</div>
                        <h4 class="mission-title">Materi Praktikum Formulasi Aplikatif &amp; Siap Produksi</h4>
                        <p class="mission-text">Menyajikan kurikulum formulasi kimia yang praktis, mudah dipahami pemula tanpa rumus rumit, dan dapat langsung diproduksi dengan peralatan sederhana.</p>
                    </div>
                </div>

                <div class="swiss-mission-panel">
                    <div class="mission-num">02</div>
                    <div class="mission-body">
                        <div class="mission-header-tag">STANDAR REGULASI</div>
                        <h4 class="mission-title">Optimalisasi Bahan Aktif &amp; Kepatuhan Regulasi Kemenkes</h4>
                        <p class="mission-text">Mengedukasi teknik penggunaan bahan aktif (surfaktan, pengental, pewangi fiksatif) yang tepat takaran, aman bagi kulit, ramah lingkungan, dan sesuai izin edar PKRT.</p>
                    </div>
                </div>

                <div class="swiss-mission-panel">
                    <div class="mission-num">03</div>
                    <div class="mission-body">
                        <div class="mission-header-tag">EKOSISTEM BISNIS</div>
                        <h4 class="mission-title">Inkubasi Usaha Mandiri &amp; Akses Rantai Pasok Pabrik</h4>
                        <p class="mission-text">Memberikan bimbingan seumur hidup bagi seluruh alumni dan menyediakan akses langsung ke distributor supplier bahan kimia skala pabrikan dengan harga tangan pertama.</p>
                    </div>
                </div>

            </div>

        </div>

        <!-- Swiss Technical Video Showcase -->
        <div class="swiss-video-block">
            <div class="video-block-top">
                <div class="video-marker-tag">
                    <span class="tag-dot"></span>
                    <span>VIDEO DOKUMENTASI RES-LAB // SLEMAN, YOGYAKARTA</span>
                </div>
                <div class="video-block-title">Pengenalan Program &amp; Suasana Pelatihan Cleanique Academy</div>
            </div>

            <div class="video-block-frame">
                <iframe src="https://www.youtube.com/embed/TwVdCpcpOzo" title="Cleanique Academy Video Profil Pelatihan" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

            <!-- Facility Chips Strip -->
            <div class="swiss-facility-strip">
                <span class="facility-pill">Laboratorium Formulasi</span>
                <span class="facility-pill">Peralatan Batch Produksi</span>
                <span class="facility-pill">Instrumen Uji pH &amp; Viskositas</span>
                <span class="facility-pill">Modul SOP Terstandarisasi</span>
                <span class="facility-pill">Ruang Konsultasi 1-on-1</span>
            </div>
        </div>

    </div>
</section>

<!-- ==========================================================================
     03. METODOLOGI & ALUR RISET (4 TAHAP MEMBANGUN USAHA CHEMICAL)
     ========================================================================== -->
<section class="section swiss-section-white">
    <div class="container">
        
        <!-- Swiss Section Header -->
        <div class="swiss-section-marker">
            <span class="marker-index">03</span>
            <h2 class="marker-title">METODOLOGI &amp; ALUR RISET</h2>
            <span class="marker-rule"></span>
            <span class="marker-code">4 TAHAP WIRAUSAHA CHEMICAL</span>
        </div>

        <div class="swiss-roadmap-intro">
            <h3 class="roadmap-intro-heading">
                Kurikulum Sistematis dari Karakteristik Molekul hingga Komersialisasi Produk
            </h3>
            <p class="roadmap-intro-p">
                Membangun industri pembuatan sabun cuci, pelembut pakaian, dan cairan pembersih tidak memerlukan modal miliaran rupiah. Di Cleanique Academy, peserta dibimbing melalui 4 tahapan metodologi teruji:
            </p>
        </div>

        <!-- Infographic Image Integration -->
        <div class="swiss-infographic-box">
            <div class="infographic-top-tag">
                <span>SKEMA ALUR WORKFLOW FORMULASI // PT INDOTECH</span>
                <span class="infographic-code">FIG. 03.1</span>
            </div>
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/infographic-workflow.jpg' ); ?>" alt="Infografis 4 Tahapan Pembuatan Chemical Industri sampai Komersialisasi" loading="lazy">
        </div>

        <!-- 4-Stage Swiss Flow Grid -->
        <div class="swiss-flow-grid">
            
            <div class="swiss-flow-step">
                <div class="step-top-line">
                    <span class="step-num">01</span>
                    <span class="step-phase">FASE TEORI DASAR</span>
                </div>
                <h4 class="step-title">Karakteristik Bahan Aktif</h4>
                <p class="step-desc">
                    Mengenali fungsi surfaktan (anionic, nonionic, amphoteric), builder, emulsifier, preservative, dan zat fiksatif aroma untuk menentukan formula tepat sasaran.
                </p>
                <div class="step-badge">FONDASI KIMIA DASAR</div>
            </div>

            <div class="swiss-flow-step">
                <div class="step-top-line">
                    <span class="step-num">02</span>
                    <span class="step-phase">FASE PRAKTIK</span>
                </div>
                <h4 class="step-title">Praktikum Formulasi Nyata</h4>
                <p class="step-desc">
                    Teknik meracik langsung di laboratorium training center agar emulsi stabil, tidak memisah, kental merata, dan memiliki daya bersih optimal sesuai standar mutu.
                </p>
                <div class="step-badge">PRAKTIKUM LABORATORIUM</div>
            </div>

            <div class="swiss-flow-step">
                <div class="step-top-line">
                    <span class="step-num">03</span>
                    <span class="step-phase">FASE BISNIS &amp; BIAYA</span>
                </div>
                <h4 class="step-title">Analisis HPP &amp; Profit Margin</h4>
                <p class="step-desc">
                    Kalkulasi biaya pokok produksi per liter dan penentuan strategi penetapan harga jual kompetitif dengan potensi margin keuntungan 200% hingga 350%.
                </p>
                <div class="step-badge">EFISIENSI BIAYA PRODUKSI</div>
            </div>

            <div class="swiss-flow-step">
                <div class="step-top-line">
                    <span class="step-num">04</span>
                    <span class="step-phase">FASE EKOSISTEM</span>
                </div>
                <h4 class="step-title">Rantai Pasok &amp; Distribusi</h4>
                <p class="step-desc">
                    Mendapatkan akses supplier distributor bahan kimia skala pabrik, panduan izin edar PKRT/Kemenkes, dan strategi penetrasi pasar B2B laundry, hotel, dan B2C.
                </p>
                <div class="step-badge">KOMERSIALISASI USAHA</div>
            </div>

        </div>

    </div>
</section>

<!-- ==========================================================================
     04. PORTFOLIO SPESIALISASI FORMULASI (MODULAR CATALOG)
     ========================================================================== -->
<section id="katalog-kategori" class="section swiss-section-light">
    <div class="container">
        
        <!-- Swiss Section Header -->
        <div class="swiss-section-marker">
            <span class="marker-index">04</span>
            <h2 class="marker-title">SPESIALISASI FORMULASI PRODUK</h2>
            <span class="marker-rule"></span>
            <span class="marker-code">4 PILIHAN SPESIALISASI</span>
        </div>

        <div class="swiss-catalog-intro">
            <h3 class="catalog-intro-title">Empat Bidang Formulasi Komersial Berstandar Industri</h3>
            <p class="catalog-intro-p">Pilih spesialisasi yang relevan dengan target pasar dan rencana bisnis yang ingin Anda bangun:</p>
        </div>

        <div class="swiss-modular-catalog">
            
            <!-- Module 01: Laundry Chemical -->
            <div class="swiss-catalog-card">
                <div class="catalog-card-image">
                    <div class="cat-image-tag">CAT.01 // LAUNDRY</div>
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Pelatihan Chemical kategori laundry.png' ); ?>" alt="Pelatihan Chemical Kategori Laundry" loading="lazy">
                </div>
                <div class="catalog-card-content">
                    <div class="cat-badge cat-badge-blue">KATEGORI LAUNDRY PROFESSIONAL</div>
                    <h3 class="cat-title">Pelatihan Formulasi Chemical Laundry</h3>
                    <p class="cat-desc">
                        Standar formulasi produk pembersih pakaian komersial untuk operasional laundry koin, perhotelan, dan usaha laundry kiloan/satuan dengan biaya produksi terukur:
                    </p>
                    <div class="cat-formula-tags">
                        <span class="f-tag">Deterjen Matik Rendah Busa</span>
                        <span class="f-tag">Softener Mikroenkapsulasi</span>
                        <span class="f-tag">Pelicin Setrika Anti Kusut</span>
                        <span class="f-tag">Parfum Fiksatif Tahan Lama</span>
                        <span class="f-tag">Alkali Booster Noda Minyak</span>
                    </div>
                    <ul class="cat-feature-list">
                        <li>
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                            <span>Deterjen Cair Pekat &amp; Deterjen Matik Rendah Busa Mesin Cuci Front Load</span>
                        </li>
                        <li>
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                            <span>Softener Pelembut Pakaian &amp; Pelicin Setrika Bebas Noda Bercak</span>
                        </li>
                        <li>
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                            <span>Formula Khusus Anti Noda Darah, Karat, Minyak, &amp; Oksigen Bleach</span>
                        </li>
                    </ul>
                    <div class="cat-card-actions">
                        <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya ingin tanya detail Pelatihan Kategori Laundry.' ) ); ?>" target="_blank" class="btn btn-whatsapp cat-action-btn">
                            <span>Konsultasi Kelas Laundry</span>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Module 02: Household Chemical -->
            <div class="swiss-catalog-card swiss-catalog-card-reverse">
                <div class="catalog-card-image">
                    <div class="cat-image-tag">CAT.02 // HOUSEHOLD</div>
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Pelatihan Chemical kategori household.png' ); ?>" alt="Pelatihan Chemical Kategori Household" loading="lazy">
                </div>
                <div class="catalog-card-content">
                    <div class="cat-badge cat-badge-green">KATEGORI HOUSEHOLD &amp; HOME CARE</div>
                    <h3 class="cat-title">Pelatihan Formulasi Household &amp; Home Care</h3>
                    <p class="cat-desc">
                        Kuasai resep produk pembersih rumah tangga terlaris dengan formulasi ramah lingkungan, aroma segar mewah, dan kesat seketika:
                    </p>
                    <div class="cat-formula-tags">
                        <span class="f-tag">Sabun Cuci Piring Jeruk Nipis</span>
                        <span class="f-tag">Pembersih Lantai Kilap Anti Bakteri</span>
                        <span class="f-tag">Pembersih Kaca Anti Embun</span>
                        <span class="f-tag">Karbol Wangi Minyak Pinus</span>
                    </div>
                    <ul class="cat-feature-list">
                        <li>
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                            <span>Sabun Cuci Piring Ekstra Busa Formula Kesat Lembut di Tangan</span>
                        </li>
                        <li>
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                            <span>Pembersih Lantai Kilap Harum Mewah dengan Anti Bakteri Efektif</span>
                        </li>
                        <li>
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                            <span>Pembersih Kaca Cepat Kering Anti Gores &amp; Karbol Pinus Asli</span>
                        </li>
                    </ul>
                    <div class="cat-card-actions">
                        <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya ingin tanya detail Pelatihan Kategori Household.' ) ); ?>" target="_blank" class="btn btn-whatsapp cat-action-btn">
                            <span>Konsultasi Kelas Household</span>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Module 03: Autocare Chemical -->
            <div class="swiss-catalog-card">
                <div class="catalog-card-image">
                    <div class="cat-image-tag">CAT.03 // AUTOCARE</div>
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Pelatihan Chemical kategori autocare.png' ); ?>" alt="Pelatihan Chemical Kategori Autocare" loading="lazy">
                </div>
                <div class="catalog-card-content">
                    <div class="cat-badge cat-badge-amber">KATEGORI AUTOCARE / OTOMOTIF</div>
                    <h3 class="cat-title">Pelatihan Formulasi Autocare &amp; Detailing</h3>
                    <p class="cat-desc">
                        Peluang bisnis bernilai margin tinggi di bidang perawatan kendaraan untuk salon mobil, car wash busa salju, bengkel, dan reseller:
                    </p>
                    <div class="cat-formula-tags">
                        <span class="f-tag">Shampo Mobil Snow Wash pH Netral</span>
                        <span class="f-tag">Semir Ban Wet-Look Silicone</span>
                        <span class="f-tag">Pembersih Jamur Kaca Acid-Safe</span>
                        <span class="f-tag">Quick Detailer Paint Sealant</span>
                    </div>
                    <ul class="cat-feature-list">
                        <li>
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                            <span>Shampo Kendaraan Busa Salju Tebal pH 7.0 Netral Aman untuk Cat</span>
                        </li>
                        <li>
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                            <span>Semir Ban Wet-Look Berbahan Dasar Emulsi Silikon Tahan Cuci Hujan</span>
                        </li>
                        <li>
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                            <span>Pembersih Jamur Kaca &amp; Kerak Mesin Acid-Safe Tanpa Mengikis Kaca</span>
                        </li>
                    </ul>
                    <div class="cat-card-actions">
                        <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya ingin tanya detail Pelatihan Kategori Autocare.' ) ); ?>" target="_blank" class="btn btn-whatsapp cat-action-btn">
                            <span>Konsultasi Kelas Autocare</span>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Module 04: Sanitasi Chemical -->
            <div class="swiss-catalog-card swiss-catalog-card-reverse">
                <div class="catalog-card-image">
                    <div class="cat-image-tag">CAT.04 // SANITASI</div>
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Pelatihan Chemical kategori sanitasi.png' ); ?>" alt="Pelatihan Chemical Kategori Sanitasi" loading="lazy">
                </div>
                <div class="catalog-card-content">
                    <div class="cat-badge cat-badge-purple">KATEGORI SANITASI &amp; PERSONAL CARE</div>
                    <h3 class="cat-title">Pelatihan Formulasi Sanitasi &amp; Higiene</h3>
                    <p class="cat-desc">
                        Formulasi cairan higienis untuk kebutuhan rumah sakit, klinik kesehatan, instansi perkantoran, fasilitas publik, dan komersial:
                    </p>
                    <div class="cat-formula-tags">
                        <span class="f-tag">Handsoap Busa Lembut Antiseptik</span>
                        <span class="f-tag">Hand Sanitizer Standar WHO</span>
                        <span class="f-tag">Disinfektan Hospital-Grade</span>
                        <span class="f-tag">Pembersih Kerak Toilet Pekat</span>
                    </div>
                    <ul class="cat-feature-list">
                        <li>
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                            <span>Handsoap Antiseptik Busa Lembut, Harum Mewah, &amp; Tidak Kering di Kulit</span>
                        </li>
                        <li>
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                            <span>Hand Sanitizer Gel &amp; Spray Formulasi Presisi Standar Lembaga Kesehatan</span>
                        </li>
                        <li>
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                            <span>Pembersih Kerak Porselen Cepat Larut Bebas Asap &amp; Bau Menyengat</span>
                        </li>
                    </ul>
                    <div class="cat-card-actions">
                        <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya ingin tanya detail Pelatihan Kategori Sanitasi.' ) ); ?>" target="_blank" class="btn btn-whatsapp cat-action-btn">
                            <span>Konsultasi Kelas Sanitasi</span>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
                        </a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- ==========================================================================
     05. LEGALITAS, MODUL & SERTIFIKASI RESMI
     ========================================================================== -->
<section class="section swiss-section-white">
    <div class="container">
        
        <!-- Swiss Section Header -->
        <div class="swiss-section-marker">
            <span class="marker-index">05</span>
            <h2 class="marker-title">LEGALITAS &amp; SERTIFIKASI RESMI</h2>
            <span class="marker-rule"></span>
            <span class="marker-code">AKREDITASI PT INDOTECH</span>
        </div>

        <div class="swiss-legal-grid">
            
            <!-- Left: Mockup Photo Framing -->
            <div class="swiss-legal-photo">
                <div class="legal-frame-top">
                    <span class="frame-dot"></span>
                    <span>DOC REF // CERT-IDT-2025 // AKREDITASI KOMPETENSI</span>
                </div>
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/certificate-module-mockup.jpg' ); ?>" alt="Mockup Sertifikat Resmi Cleanique Academy dan Modul SOP Praktikum" loading="lazy">
                <div class="legal-frame-caption">
                    <span>DOKUMEN RESMI PELATIHAN</span>
                    <p>Sertifikat Pelatihan Kompetensi &amp; Buku Panduan Modul SOP Manufaktur terbitan resmi PT Indotech Berkah Abadi.</p>
                </div>
            </div>

            <!-- Right: Text & Accreditations -->
            <div class="swiss-legal-info">
                <div class="swiss-badge-technical">
                    <span class="badge-dot"></span>
                    <span>JAMINAN KOMPETENSI MITRA</span>
                    <span class="badge-code">TERAKREDITASI</span>
                </div>

                <h3 class="legal-main-heading">
                    Sertifikat Kompetensi &amp; Modul Panduan SOP Standar Industri
                </h3>

                <p class="legal-lead-p">
                    Setiap alumni Cleanique Academy yang telah menyelesaikan program pelatihan berhak menerima <strong>Sertifikat Kompetensi Pelatihan Resmi</strong> yang diterbitkan oleh <strong>PT Indotech Berkah Abadi</strong>.
                </p>

                <p class="legal-sub-p">
                    Sertifikat dan Modul SOP ini menjadi bukti kompetensi teknis dalam pembuatan produk chemical kebersihan serta menjadi dokumen pendukung untuk kelengkapan administrasi perizinan usaha dan izin edar komersial Anda.
                </p>

                <!-- 4 Capability Cards -->
                <div class="swiss-legal-capabilities">
                    <div class="cap-card">
                        <div class="cap-icon">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                        </div>
                        <div class="cap-text">
                            <div class="cap-title">Terakreditasi PT Indotech</div>
                            <div class="cap-desc">Sertifikat resmi bernomor register korporasi berbadan hukum.</div>
                        </div>
                    </div>

                    <div class="cap-card">
                        <div class="cap-icon">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                        </div>
                        <div class="cap-text">
                            <div class="cap-title">Buku Modul SOP Lengkap</div>
                            <div class="cap-desc">Panduan takaran gramasi, urutan mixing, dan uji kestabilan.</div>
                        </div>
                    </div>

                    <div class="cap-card">
                        <div class="cap-icon">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                        </div>
                        <div class="cap-text">
                            <div class="cap-title">Grup Bimbingan Alumni Seumur Hidup</div>
                            <div class="cap-desc">Akses konsultasi langsung kendala formulasi purna-pelatihan.</div>
                        </div>
                    </div>

                    <div class="cap-card">
                        <div class="cap-icon">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                        </div>
                        <div class="cap-text">
                            <div class="cap-title">Rekomendasi Supplier Pabrik</div>
                            <div class="cap-desc">Daftar kontak distributor bahan baku kimia tangan pertama.</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- ==========================================================================
     06. DOKUMENTASI WORKSHOP & PELATIHAN NYATA (REAL PHOTO MOSAIC)
     ========================================================================== -->
<section class="section swiss-section-light">
    <div class="container">
        
        <!-- Swiss Section Header -->
        <div class="swiss-section-marker">
            <span class="marker-index">06</span>
            <h2 class="marker-title">DOKUMENTASI WORKSHOP &amp; RES-LAB</h2>
            <span class="marker-rule"></span>
            <span class="marker-code">FOTO KEGIATAN NYATA</span>
        </div>

        <div class="swiss-gallery-intro">
            <h3 class="gallery-intro-heading">Dokumentasi Nyata Praktikum Peserta di Yogyakarta</h3>
            <p class="gallery-intro-p">Kami memprioritaskan dokumentasi nyata dibanding ilustrasi generik. Seluruh materi dipraktikkan langsung di training center:</p>
        </div>

        <!-- 6-Item Swiss Photo Grid -->
        <div class="swiss-photo-mosaic">
            
            <div class="mosaic-photo-item">
                <div class="mosaic-photo-stamp">DOK.01 // PRAKTIKUM FORMULASI</div>
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/gallery-1.webp' ); ?>" alt="Peserta mempraktikkan pencampuran formula kimia di laboratorium" loading="lazy">
                <div class="mosaic-caption">
                    <span>PRAKTIK MANDIRI</span>
                    <p>Pencampuran bahan aktif surfaktan dan zat penstabil viskositas.</p>
                </div>
            </div>

            <div class="mosaic-photo-item">
                <div class="mosaic-photo-stamp">DOK.02 // UJI KESTABILAN PH</div>
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/gallery-2.webp' ); ?>" alt="Pengujian derajat keasaman pH formula chemical" loading="lazy">
                <div class="mosaic-caption">
                    <span>QUALITY CONTROL</span>
                    <p>Pengukuran derajat keasaman (pH) agar produk aman bagi serat dan kulit.</p>
                </div>
            </div>

            <div class="mosaic-photo-item">
                <div class="mosaic-photo-stamp">DOK.03 // BATCH PRODUKSI</div>
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/gallery-3.webp' ); ?>" alt="Simulasi batch produksi skala usaha di workshop" loading="lazy">
                <div class="mosaic-caption">
                    <span>SIMULASI PABRIKASI</span>
                    <p>Teknik pengadukan batch besar agar emulsi tidak memisah saat disimpan lama.</p>
                </div>
            </div>

            <div class="mosaic-photo-item">
                <div class="mosaic-photo-stamp">DOK.04 // KELAS PRIVAT 1-ON-1</div>
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/gallery-4.webp' ); ?>" alt="Instruktur mendampingi peserta secara intensif" loading="lazy">
                <div class="mosaic-caption">
                    <span>MENTORING INTENSIF</span>
                    <p>Bimbingan tatap muka 1-on-1 bersama instruktur riset Cleanique Academy.</p>
                </div>
            </div>

            <div class="mosaic-photo-item">
                <div class="mosaic-photo-stamp">DOK.05 // UJI DAYA ANGKAT NODA</div>
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/gallery-5.webp' ); ?>" alt="Pengujian daya bersih formula deterjen" loading="lazy">
                <div class="mosaic-caption">
                    <span>UJI EFEKTIVITAS</span>
                    <p>Uji komparasi daya bersih formula deterjen terhadap berbagai jenis noda membandel.</p>
                </div>
            </div>

            <div class="mosaic-photo-item">
                <div class="mosaic-photo-stamp">DOK.06 // PENYERAHAN SERTIFIKAT</div>
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/gallery-6.webp' ); ?>" alt="Penyerahan sertifikat kelulusan pelatihan resmi" loading="lazy">
                <div class="mosaic-caption">
                    <span>KELULUSAN RESMI</span>
                    <p>Peserta menerima sertifikat kompetensi resmi dari PT Indotech Berkah Abadi.</p>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- ==========================================================================
     07. EKSPLORASI LAYANAN TERKAIT (PLATFORM NAVIGATION)
     ========================================================================== -->
<section class="section swiss-section-white">
    <div class="container">
        
        <div class="swiss-section-marker">
            <span class="marker-index">07</span>
            <h2 class="marker-title">EKSPLORASI PLATFORM &amp; LAYANAN</h2>
            <span class="marker-rule"></span>
            <span class="marker-code">NAVIGASI TERKAIT</span>
        </div>

        <div class="swiss-nav-cards-grid">
            
            <a href="<?php echo esc_url( home_url( '/program-pelatihan/' ) ); ?>" class="swiss-nav-card">
                <div class="nav-card-top">
                    <span class="nav-card-code">PAGE // 01</span>
                    <span class="nav-card-arrow">&rarr;</span>
                </div>
                <h4 class="nav-card-title">Katalog Program Pelatihan</h4>
                <p class="nav-card-desc">Pilihan kelas reguler kolektif, kelas privat eksklusif 1-on-1, dan jadwal pelatihan batch terdekat.</p>
                <div class="nav-card-cta">Buka Katalog Program</div>
            </a>

            <a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>" class="swiss-nav-card">
                <div class="nav-card-top">
                    <span class="nav-card-code">PAGE // 02</span>
                    <span class="nav-card-arrow">&rarr;</span>
                </div>
                <h4 class="nav-card-title">Pusat Tanya Jawab (FAQ)</h4>
                <p class="nav-card-desc">Pertanyaan umum seputar lokasi training center, legalitas usaha, bahan baku, dan konsultasi purna kelas.</p>
                <div class="nav-card-cta">Buka Pusat Bantuan</div>
            </a>

            <a href="<?php echo esc_url( home_url( '/dokumentasi-event/' ) ); ?>" class="swiss-nav-card">
                <div class="nav-card-top">
                    <span class="nav-card-code">PAGE // 03</span>
                    <span class="nav-card-arrow">&rarr;</span>
                </div>
                <h4 class="nav-card-title">Galeri Dokumentasi Event</h4>
                <p class="nav-card-desc">Rekam jejak foto dan arsip kegiatan pelatihan peserta Cleanique Academy dari berbagai daerah di Indonesia.</p>
                <div class="nav-card-cta">Lihat Seluruh Arsip</div>
            </a>

        </div>

    </div>
</section>

<!-- ==========================================================================
     08. PERTANYAAN SERING DIAJUKAN (SWISS MINIMALIST ACCORDION FAQ)
     ========================================================================== -->
<section id="faq" class="section swiss-section-light">
    <div class="container" style="max-width: 900px;">
        
        <!-- Swiss Section Header -->
        <div class="swiss-section-marker">
            <span class="marker-index">08</span>
            <h2 class="marker-title">PUSAT INFORMASI &amp; FAQ</h2>
            <span class="marker-rule"></span>
            <span class="marker-code">TANYA JAWAB UMUM</span>
        </div>

        <div class="swiss-faq-intro">
            <h3 class="faq-intro-title">Pertanyaan yang Sering Diajukan Seputar Pelatihan</h3>
            <p class="faq-intro-desc">Informasi praktis seputar materi, syarat pendaftaran, dan fasilitas di Cleanique Academy.</p>
        </div>

        <div class="swiss-faq-list">
            
            <details class="swiss-accordion-item" open>
                <summary class="swiss-accordion-summary">
                    <span class="faq-q-num">Q1</span>
                    <span class="faq-q-text">Apakah pemula tanpa latar belakang pendidikan kimia bisa mengikuti pelatihan ini?</span>
                    <span class="faq-q-toggle"></span>
                </summary>
                <div class="swiss-accordion-content">
                    <p>Sangat bisa! Kurikulum pelatihan Cleanique Academy dirancang aplikatif dari nol. Peserta dibimbing mengenal karakteristik fungsional bahan aktif, takaran persentase aman, hingga cara meracik produk pembersih mandiri tanpa perlu rumus reaksi kimia yang rumit.</p>
                </div>
            </details>

            <details class="swiss-accordion-item">
                <summary class="swiss-accordion-summary">
                    <span class="faq-q-num">Q2</span>
                    <span class="faq-q-text">Fasilitas apa saja yang didapatkan oleh setiap peserta pelatihan?</span>
                    <span class="faq-q-toggle"></span>
                </summary>
                <div class="swiss-accordion-content">
                    <p>Setiap peserta mendapatkan buku modul SOP formulasi lengkap (fisik &amp; digital), bahan baku praktikum meracik di kelas, sertifikat kompetensi resmi dari Cleanique Academy (PT Indotech Berkah Abadi), kontak distributor supplier pabrik, dan akses seumur hidup ke grup konsultasi mitra.</p>
                </div>
            </details>

            <details class="swiss-accordion-item">
                <summary class="swiss-accordion-summary">
                    <span class="faq-q-num">Q3</span>
                    <span class="faq-q-text">Dimana lokasi pelaksanaan pelatihan tatap muka diselenggarakan?</span>
                    <span class="faq-q-toggle"></span>
                </summary>
                <div class="swiss-accordion-content">
                    <p>Pelatihan tatap muka diselenggarakan di Training Center &amp; Research Lab Cleanique Academy yang berlokasi di Sleman, D.I. Yogyakarta. Kami juga melayani program privat khusus atau in-house training sesuai kesepakatan lokasi mitra di luar kota.</p>
                </div>
            </details>

            <details class="swiss-accordion-item">
                <summary class="swiss-accordion-summary">
                    <span class="faq-q-num">Q4</span>
                    <span class="faq-q-text">Bagaimana bentuk pendampingan setelah pelatihan selesai?</span>
                    <span class="faq-q-toggle"></span>
                </summary>
                <div class="swiss-accordion-content">
                    <p>Kami menyediakan saluran konsultasi WhatsApp langsung bersama tim instruktur dan riset. Jika Anda mengalami kendala teknis saat produksi mandiri di rumah atau pabrik (seperti emulsi pecah, aroma kurang fiksatif, atau penyesuaian HPP), tim kami siap membantu menganalisis dan memberi solusi solutif.</p>
                </div>
            </details>

            <details class="swiss-accordion-item">
                <summary class="swiss-accordion-summary">
                    <span class="faq-q-num">Q5</span>
                    <span class="faq-q-text">Bagaimana cara mendaftar dan memilih jadwal kelas yang tersedia?</span>
                    <span class="faq-q-toggle"></span>
                </summary>
                <div class="swiss-accordion-content">
                    <p>Pendaftaran dilakukan langsung melalui WhatsApp Customer Support Cleanique Academy. Tim kami akan menginformasikan ketersediaan kuota batch reguler terdekat atau mengatur jadwal kelas privat 1-on-1 sesuai fleksibilitas waktu Anda.</p>
                </div>
            </details>

        </div>

    </div>
</section>

<!-- ==========================================================================
     09. KONSULTASI & HUBUNGI KANTOR PUSAT (SWISS HIGH-CONTRAST CTA)
     ========================================================================== -->
<section id="kontak" class="section swiss-section-cta">
    <div class="container" style="max-width: 960px;">
        
        <div class="swiss-cta-card">
            <div class="swiss-cta-marker">
                <span class="cta-dot"></span>
                <span>KONSULTASI LANGSUNG // PT INDOTECH BERKAH ABADI</span>
            </div>

            <h2 class="swiss-cta-heading">
                Siap Membangun Usaha Manufaktur Chemical Pembersih Sendiri?
            </h2>

            <p class="swiss-cta-p">
                Diskusikan rencana bisnis, pilihan paket formulasi, dan jadwal pelatihan tatap muka langsung bersama tim instruktur dan konsultan Cleanique Academy.
            </p>

            <div class="swiss-cta-actions">
                <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya ingin konsultasi pendaftaran dari halaman Tentang Kami.' ) ); ?>" target="_blank" class="btn btn-whatsapp btn-cta-large swiss-btn-wa">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.157 4.228 4.228-1.157zm12.339-6.495c-.068-.113-.25-.181-.523-.317-.272-.136-1.61-.795-1.86-.886-.25-.091-.432-.136-.613.136-.182.272-.704.886-.863 1.067-.159.182-.318.204-.59.068-.272-.136-1.151-.424-2.193-1.353-.81-.723-1.357-1.616-1.516-1.888-.159-.272-.017-.419.119-.554.122-.122.272-.318.408-.477.136-.159.182-.272.272-.454.091-.182.045-.341-.023-.477-.068-.136-.613-1.477-.84-2.023-.222-.534-.447-.461-.613-.469-.159-.008-.341-.01-.523-.01s-.477.068-.727.341c-.25.272-.954.932-.954 2.273s.977 2.636 1.114 2.818c.136.182 1.923 2.936 4.659 4.116.65.281 1.158.448 1.554.573.653.207 1.247.178 1.716.108.523-.078 1.61-.658 1.838-1.295.227-.636.227-1.181.159-1.295z"/></svg>
                    <span>Hubungi Kami via WhatsApp</span>
                </a>
            </div>

            <div class="swiss-cta-office-meta">
                <div class="office-meta-row">
                    <span class="office-tag">KANTOR PUSAT &amp; WORKSHOP:</span>
                    <span class="office-val">Jongke Tengah No. 30, RT.01/RW.23, Sendangadi, Kec. Mlati, Kab. Sleman, D.I. Yogyakarta 55285</span>
                </div>
                <div class="office-meta-row">
                    <span class="office-tag">TELEPON / WA RESMI:</span>
                    <span class="office-val">+62 822-1584-0088</span>
                </div>
            </div>
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
  "hasMap": "https://share.google/T7jYkSurqjN4cRd5T",
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
