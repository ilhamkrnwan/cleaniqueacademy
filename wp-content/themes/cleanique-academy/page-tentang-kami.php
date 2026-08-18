<?php
/**
 * Template Name: Halaman Tentang Kami
 */
get_header();

cleanique_render_page_hero( array(
    'title'    => 'Tentang PT Indotech Berkah Abadi',
    'badge'    => 'Profil Perusahaan',
    'subtitle' => 'Pusat Pelatihan Profesional &amp; Bimbingan Formulasi Kimia Kebersihan Terpercaya Sejak 2011.',
    'theme'    => 'light',
) );
?>

<!-- 1. SEJARAH & PROFIL PERUSAHAAN -->
<section class="section">
    <div class="container" style="max-width: 1040px;">
        
        <div class="grid grid-2" style="gap: 2.5rem; align-items: center; margin-bottom: 3rem;">
            <div>
                <span class="section-subtitle">Sejarah &amp; Rekam Jejak</span>
                <h2 class="section-title" style="text-align: left; font-size: 2rem; margin-bottom: 1rem;">Perjalanan Kami Sejak Tahun 2011</h2>
                <p style="font-size: 1.05rem; line-height: 1.75; color: var(--color-text-main); margin-bottom: 1rem;">
                    <strong>Cleanique Academy</strong> merupakan divisi edukasi dan pelatihan resmi di bawah naungan <strong>PT Indotech Berkah Abadi</strong> yang berpusat di Yogyakarta. Berdiri sejak tahun 2011, kami mengawali langkah sebagai produsen dan pusat riset formulasi bahan kimia pembersih (cleaning chemical) untuk sektor industri laundry, housekeeping hotel, restoran, serta produk kebutuhan rumah tangga (<em>homecare</em>).
                </p>
                <p style="font-size: 1.05rem; line-height: 1.75; color: var(--color-text-muted); margin-bottom: 1.5rem;">
                    Melalui brand <strong>Cleanique Lab</strong> dan <strong>Orchid Care</strong>, produk-produk kimia hasil formulasi kami telah digunakan secara luas di pasaran. Melalui Cleanique Academy, kami membagikan resep formulasi, standar operasional produksi, dan strategi bisnis kepada para pengusaha di Indonesia.
                </p>
            </div>

            <!-- HERO PRACTICAL LAB IMAGE -->
            <div>
                <div class="about-hero-img-wrap">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-lab-practical.jpg' ); ?>" alt="Instruktur Cleanique Academy memandu praktikum formulasi kimia di laboratorium" loading="lazy">
                    <div class="about-hero-badge-overlay">
                        <div class="about-hero-badge-title">Suasana Praktikum Formulasi Kimia Kebersihan</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- VIDEO PENJELASAN CLEANIQUE ACADEMY -->
        <div class="video-profile-card">
            <span class="video-profile-badge">Video Profil Academy</span>
            <h3 class="video-profile-title">Pengenalan &amp; Suasana Pelatihan Cleanique Academy</h3>
            <div class="video-profile-frame">
                <iframe src="https://www.youtube.com/embed/TwVdCpcpOzo" title="Cleanique Academy Video Penjelasan" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>

        <!-- VISI & MISI CARDS -->
        <div class="grid grid-2" style="margin-bottom: 2.5rem;">
            <div class="card card-vision">
                <span class="card-vision-badge">Visi Perusahaan</span>
                <h3 class="card-title">Visi</h3>
                <p class="card-text">Menjadi pusat pelatihan dan penyedia solusi formulasi kimia pembersih terdepan di Indonesia yang melahirkan pengusaha mandiri, efisien, dan berdaya saing tinggi dalam memproduksi kimia kebersihan skala industri maupun komersial.</p>
            </div>
            <div class="card card-mission">
                <span class="card-mission-badge">Misi Utama Kami</span>
                <h3 class="card-title">Misi</h3>
                <ul class="mission-list">
                    <li><span class="mission-bullet">1</span> <span>Menyediakan materi praktikum formulasi kimia yang praktis, aplikatif, &amp; siap pakai.</span></li>
                    <li><span class="mission-bullet">2</span> <span>Mengedukasi cara penggunaan bahan kimia aktif yang aman &amp; efisien di lapangan.</span></li>
                    <li><span class="mission-bullet">3</span> <span>Memberikan pendampingan usaha jangka panjang seumur hidup bagi alumni pengusaha laundry &amp; homecare.</span></li>
                </ul>
            </div>
        </div>

    </div>
</section>

<!-- 2. INFOGRAFIS WORKFLOW ALUR MEMBANGUN USAHA CHEMICAL -->
<section class="section section-alt section-decorated">
    <div class="container" style="max-width: 1040px;">
        
        <div class="section-header">
            <span class="section-subtitle">Panduan Wirausaha Kimia</span>
            <h2 class="section-title">Roadmap Membangun Pabrik &amp; Usaha Chemical Mandiri dari Nol</h2>
            <div class="section-accent-bar"></div>
            <p class="section-description">
                Membangun industri pembuatan sabun cuci, pelembut pakaian, dan produk pembersih rumah tangga tidak memerlukan modal miliaran rupiah. Di Cleanique Academy, kami membimbing peserta dengan tahapan terstruktur:
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
                <h3 class="roadmap-step-title">Pemahaman Bahan Aktif &amp; Surfaktan</h3>
                <p class="roadmap-step-desc">Mengenali karakteristik bahan pembersih (LAS, SLES, Texapon), penstabil pH, agen pengental, serta fiksatif aroma parfum agar hasil racikan berkualitas tinggi.</p>
            </div>

            <div class="roadmap-step-item">
                <div class="roadmap-step-header">
                    <span class="roadmap-step-num">02</span>
                    <span class="roadmap-step-line"></span>
                </div>
                <h3 class="roadmap-step-title">Praktikum Uji Stabilitas Formulasi</h3>
                <p class="roadmap-step-desc">Praktik meracik langsung di laboratorium untuk memastikan emulsi tidak memisah, kekentalan pas, busa melimpah, dan produk tahan disimpan berbulan-bulan.</p>
            </div>

            <div class="roadmap-step-item">
                <div class="roadmap-step-header">
                    <span class="roadmap-step-num">03</span>
                    <span class="roadmap-step-line"></span>
                </div>
                <h3 class="roadmap-step-title">Perhitungan HPP &amp; Profit Margin</h3>
                <p class="roadmap-step-desc">Menganalisis Biaya Pokok Produksi per liter agar Anda bisa menentukan harga jual kompetitif dengan margin keuntungan hingga 200% - 300%.</p>
            </div>

            <div class="roadmap-step-item">
                <div class="roadmap-step-header">
                    <span class="roadmap-step-num">04</span>
                    <span class="roadmap-step-line"></span>
                </div>
                <h3 class="roadmap-step-title">Penetrasi Pasar &amp; Jaringan Mitra Distributor</h3>
                <p class="roadmap-step-desc">Mengakses rekomendasi supplier bahan baku kimia skala pabrik serta strategi penetrasi pasar B2B (hotel, restoran, laundry) dan B2C (rumah tangga).</p>
            </div>

        </div>

    </div>
</section>

<!-- 3. CERTIFICATE & LEGALITY SHOWCASE -->
<section class="section">
    <div class="container" style="max-width: 1040px;">
        <div class="grid grid-2" style="gap: 2.5rem; align-items: center;">
            <div class="legal-cert-img-wrap">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/certificate-module-mockup.jpg' ); ?>" alt="Mockup Sertifikat Pelatihan Resmi Cleanique Academy dan Modul Panduan Praktikum" loading="lazy">
            </div>
            <div>
                <span class="section-subtitle">Legalitas &amp; Sertifikasi Resmi</span>
                <h2 class="section-title" style="text-align: left; font-size: 1.85rem; margin-bottom: 1rem;">Sertifikat Pelatihan &amp; Modul Praktikum Resmi</h2>
                <div class="section-accent-bar" style="margin: 0 0 1rem 0;"></div>
                <p class="legal-cert-desc">
                    Setiap alumni Cleanique Academy yang telah menyelesaikan program pelatihan akan mendapatkan <strong>Sertifikat Pelatihan Resmi</strong> yang diterbitkan oleh <strong>PT Indotech Berkah Abadi</strong>.
                </p>
                <p class="legal-cert-subdesc">
                    Sertifikat ini menjadi bukti kompetensi teknis dalam pembuatan produk chemical kebersihan dan dapat digunakan sebagai dokumen penunjang kelengkapan pengajuan izin edar usaha komersial Anda.
                </p>
                <div class="legal-cert-pills">
                    <div class="legal-pill"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#0284c7" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Terakreditasi PT Indotech</div>
                    <div class="legal-pill"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#0284c7" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Modul Panduan Lengkap</div>
                    <div class="legal-pill"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#0284c7" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Grup Komunitas Alumni</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4. KATALOG KELAS FORMULASI PRODUK KEBERSIHAN -->
<section id="katalog-kategori" class="section section-alt">
    <div class="container" style="max-width: 1040px;">
        
        <div class="section-header">
            <span class="section-subtitle">Kategori Pelatihan Lengkap</span>
            <h2 class="section-title">Kategori Formulasi Produk Kebersihan</h2>
            <div class="section-accent-bar"></div>
            <p class="section-description">Kami menyediakan beragam varian kelas pembuatan chemical kebersihan skala industri &amp; rumah tangga untuk meningkatkan daya saing usaha Anda.</p>
        </div>

        <div class="category-row-list">
            
            <!-- Row 1: Laundry Chemical -->
            <div class="category-row-card category-row-reverse">
                <div class="category-img-col">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Pelatihan Chemical kategori laundry.png' ); ?>" alt="Pelatihan Chemical Kategori Laundry">
                </div>
                <div class="category-info-col">
                    <span class="category-badge-pill pill-laundry">Kategori Laundry</span>
                    <h3 class="category-row-title">Pelatihan Chemical Kategori Laundry</h3>
                    <p class="category-row-desc">
                        Pelajari standar pembuatan produk pembersih pakaian profesional untuk laundry koin, hotel, dan usaha laundry kiloan/satuan dengan biaya produksi efisien:
                    </p>
                    <ul class="category-item-list">
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#0284c7" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Deterjen Cair Pekat &amp; Deterjen Matik</li>
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#0284c7" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Softener Parfum Tahan Lama &amp; Pelicin Pakaian</li>
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#0284c7" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Alkali Booster &amp; Emulsifier Lemak Pekat</li>
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#0284c7" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Pemutih Serat Kain &amp; Anti Noda Karat/Darah</li>
                    </ul>
                    <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya ingin tanya detail Pelatihan Kategori Laundry.' ) ); ?>" target="_blank" class="btn btn-whatsapp category-cta-btn">Konsultasi Kelas Laundry</a>
                </div>
            </div>

            <!-- Row 2: Household Chemical -->
            <div class="category-row-card">
                <div class="category-img-col">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Pelatihan Chemical kategori household.png' ); ?>" alt="Pelatihan Chemical Kategori Household Home Care">
                </div>
                <div class="category-info-col">
                    <span class="category-badge-pill pill-household">Kategori Household</span>
                    <h3 class="category-row-title">Pelatihan Chemical Kategori Household &amp; Home Care</h3>
                    <p class="category-row-desc">
                        Kuasai resep produk pembersih rumah tangga terlaris dengan formulasi ramah lingkungan dan kesat seketika:
                    </p>
                    <ul class="category-item-list">
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Sabun Cuci Piring Ekstra Busa Formula Kesat</li>
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Pembersih Lantai Kilap &amp; Anti Bakteri</li>
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Pembersih Kaca Anti Embun &amp; Anti Bercak</li>
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Karbol Wangi Pinus &amp; Disinfektan Ruangan</li>
                    </ul>
                    <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya ingin tanya detail Pelatihan Kategori Household.' ) ); ?>" target="_blank" class="btn btn-whatsapp category-cta-btn">Konsultasi Kelas Household</a>
                </div>
            </div>

            <!-- Row 3: Autocare Chemical -->
            <div class="category-row-card category-row-reverse">
                <div class="category-img-col">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Pelatihan Chemical kategori autocare.png' ); ?>" alt="Pelatihan Chemical Kategori Autocare">
                </div>
                <div class="category-info-col">
                    <span class="category-badge-pill pill-autocare">Kategori Autocare</span>
                    <h3 class="category-row-title">Pelatihan Chemical Kategori Autocare / Otomotif</h3>
                    <p class="category-row-desc">
                        Peluang bisnis tinggi di bidang pembersih kendaraan untuk salon mobil, tempat cuci motor/mobil, dan toko sparepart:
                    </p>
                    <ul class="category-item-list">
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#d97706" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Shampo Mobil/Motor Busa Salju (Snow Wash)</li>
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#d97706" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Semir Ban Wet-Look Formula Silicone Pekat</li>
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#d97706" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Pembersih Jamur Kaca &amp; Kerak Mesin Acid-Safe</li>
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#d97706" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Pengilap Bodi Kendaraan Quick Detailer</li>
                    </ul>
                    <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya ingin tanya detail Pelatihan Kategori Autocare.' ) ); ?>" target="_blank" class="btn btn-whatsapp category-cta-btn">Konsultasi Kelas Autocare</a>
                </div>
            </div>

            <!-- Row 4: Sanitasi Chemical -->
            <div class="category-row-card">
                <div class="category-img-col">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Pelatihan Chemical kategori sanitasi.png' ); ?>" alt="Pelatihan Chemical Kategori Sanitasi">
                </div>
                <div class="category-info-col">
                    <span class="category-badge-pill pill-sanitasi">Kategori Sanitasi</span>
                    <h3 class="category-row-title">Pelatihan Chemical Kategori Sanitasi &amp; Personal Care</h3>
                    <p class="category-row-desc">
                        Formulasi higienis bersertifikat untuk fasilitas umum, rumah sakit, kantor, dan penggunaan sehari-hari:
                    </p>
                    <ul class="category-item-list">
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#9333ea" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Handsoap Antiseptik Lembut di Tangan</li>
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#9333ea" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Hand Sanitizer Gel &amp; Spray Standar WHO</li>
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#9333ea" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Disinfektan Ruangan Hospital-Grade</li>
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#9333ea" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Pembersih Kerak Toilet Pekat Bebas Bau Menyengat</li>
                    </ul>
                    <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya ingin tanya detail Pelatihan Kategori Sanitasi.' ) ); ?>" target="_blank" class="btn btn-whatsapp category-cta-btn">Konsultasi Kelas Sanitasi</a>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- INTERNAL NAVIGATION LINKS GRID -->
<section class="section" style="background: #ffffff;">
    <div class="container" style="max-width: 1040px;">
        <div class="section-header">
            <span class="section-subtitle">Navigasi Halaman Utama</span>
            <h2 class="section-title">Eksplorasi Cleanique Academy</h2>
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
                <p class="internal-link-desc">Lihat pilihan kelas kolektif, kelas privat, dan investasi promo pelatihan bulan ini.</p>
            </a>
            <a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>" class="internal-link-card">
                <div class="internal-link-icon-box">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                </div>
                <div class="internal-link-title">
                    <span>Pertanyaan Sering Diajukan (FAQ)</span>
                    <span class="internal-link-arrow">&rarr;</span>
                </div>
                <p class="internal-link-desc">Temukan jawaban seputar fasilitas, lokasi training center, dan bimbingan pasca pelatihan.</p>
            </a>
            <a href="<?php echo esc_url( home_url( '/dokumentasi-event/' ) ); ?>" class="internal-link-card">
                <div class="internal-link-icon-box">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg>
                </div>
                <div class="internal-link-title">
                    <span>Galeri Dokumentasi Event</span>
                    <span class="internal-link-arrow">&rarr;</span>
                </div>
                <p class="internal-link-desc">Lihat dokumentasi kelas praktikum tatap muka peserta Cleanique Academy di berbagai kota.</p>
            </a>
        </div>
    </div>
</section>

<!-- 5. SEKSI FAQ (PERTANYAAN SERING DIAJUKAN - INTERACTIVE DROPDOWN) -->
<section id="faq" class="section section-alt">
    <div class="container" style="max-width: 850px;">
        
        <div class="section-header">
            <span class="section-subtitle">Pusat Informasi</span>
            <h2 class="section-title">Pertanyaan Sering Diajukan (FAQ)</h2>
            <div class="section-accent-bar"></div>
            <p class="section-description">Klik pertanyaan di bawah ini untuk melihat jawaban lengkap seputar pelatihan kami.</p>
        </div>

        <div style="margin-bottom: 2.5rem;">
            
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
                    <span>Mengapa pelatihan diselenggarakan secara Tatap Muka (Offline)?</span>
                </summary>
                <div class="accordion-body">
                    Pelatihan tatap muka memungkinkan Anda untuk menyentuh, mencium aroma, mengamati kekentalan emulsi, dan mengenali sifat fisik bahan kimia secara nyata sehingga Anda tidak akan salah saat membeli bahan baku di pasaran.
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
                    <span>Dimana lokasi pelatihan tatap muka diselenggarakan?</span>
                </summary>
                <div class="accordion-body">
                    Pelatihan rutin diselenggarakan di Laboratorium &amp; Training Center Cleanique Academy di Yogyakarta, serta event kelas privat / khusus sesuai kesepakatan lokasi peserta.
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

<!-- 6. SEKSI KONTAK KANTOR PUSAT & CALL TO ACTION -->
<section id="kontak" class="section section-dark-cta">
    <div class="container" style="max-width: 850px;">
        <div class="contact-cta-box">
            <span class="contact-cta-subtitle">KONTAK KANTOR PUSAT</span>
            <h3 class="contact-cta-title">Konsultasikan Pendaftaran Pelatihan Anda</h3>
            <p class="contact-cta-desc">Tim customer service &amp; konsultan Cleanique Academy (PT Indotech Berkah Abadi) siap melayani pertanyaan Anda.</p>
            <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya ingin konsultasi pendaftaran dari halaman Tentang Kami.' ) ); ?>" target="_blank" class="btn btn-whatsapp btn-cta-large">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.157 4.228 4.228-1.157zm12.339-6.495c-.068-.113-.25-.181-.523-.317-.272-.136-1.61-.795-1.86-.886-.25-.091-.432-.136-.613.136-.182.272-.704.886-.863 1.067-.159.182-.318.204-.59.068-.272-.136-1.151-.424-2.193-1.353-.81-.723-1.357-1.616-1.516-1.888-.159-.272-.017-.419.119-.554.122-.122.272-.318.408-.477.136-.159.182-.272.272-.454.091-.182.045-.341-.023-.477-.068-.136-.613-1.477-.84-2.023-.222-.534-.447-.461-.613-.469-.159-.008-.341-.01-.523-.01s-.477.068-.727.341c-.25.272-.954.932-.954 2.273s.977 2.636 1.114 2.818c.136.182 1.923 2.936 4.659 4.116.65.281 1.158.448 1.554.573.653.207 1.247.178 1.716.108.523-.078 1.61-.658 1.838-1.295.227-.636.227-1.181.159-1.295z"/></svg>
                <span>Hubungi Kami via WA</span>
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
  "description": "Pusat Pelatihan Profesional & Bimbingan Formulasi Kimia Kebersihan Terpercaya Sejak 2011.",
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
?>
