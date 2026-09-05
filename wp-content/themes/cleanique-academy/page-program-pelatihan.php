<?php
/**
 * Template Name: Halaman Program Pelatihan
 *
 * Cleanique Academy - Training Programs & Course Catalog
 * Design Style: Modern Swiss Design (International Typographic Style)
 * Aesthetic: High-contrast Grotesque typography, Hairline modular grids, Monospace metadata, Authentic photography
 */

get_header();
?>

<!-- ==========================================================================
     00. SWISS ASYMMETRICAL HERO SECTION
     ========================================================================== -->
<section class="swiss-hero" aria-label="Hero Program Pelatihan">
    <div class="container">
        
        <!-- Running Top Rail / Monospace Stamp -->
        <div class="swiss-running-rail">
            <div class="swiss-rail-left">
                <span class="swiss-tag-index">[ 00 // PROGRAM CATALOG ]</span>
                <span class="swiss-tag-sep">/</span>
                <span class="swiss-tag-corp">PT INDOTECH BERKAH ABADI</span>
            </div>
            <div class="swiss-rail-right">
                <span class="swiss-status-bullet"></span>
                <span>TRAINING &amp; RES-LAB // SLEMAN, YOGYAKARTA // BATCH <?php echo esc_html( date_i18n('F Y') ); ?></span>
            </div>
        </div>

        <div class="swiss-grid-split">
            
            <!-- Left Editorial Column -->
            <div class="swiss-hero-content">
                <div class="swiss-badge-group">
                    <span class="swiss-live-dot"></span>
                    <span class="swiss-badge-text">KATALOG KELAS &amp; INVESTASI RESMI</span>
                    <span class="swiss-badge-code">EDISI <?php echo esc_html( date('Y') ); ?></span>
                </div>

                <h1 class="swiss-hero-headline">
                    Katalog Program Pelatihan &amp; Investasi Formulasi Kimia Industri.
                </h1>

                <p class="swiss-hero-lead">
                    Kurikulum praktikum intensif pembuatan produk chemical pembersih komersial, laundry, autocare, dan homecare di Sleman, D.I. Yogyakarta. Dibimbing langsung dari skala pengenalan bahan aktif hingga mandiri memproduksi produk berstandar pabrik dengan efisiensi HPP terukur.
                </p>

                <!-- Key Quick Highlights Grid -->
                <div class="swiss-stat-grid" style="margin-bottom: 2.25rem;">
                    <div class="swiss-stat-cell">
                        <span class="swiss-stat-number">1-on-1</span>
                        <span class="swiss-stat-label">Opsi Pendampingan Privat</span>
                    </div>
                    <div class="swiss-stat-cell">
                        <span class="swiss-stat-number">100%</span>
                        <span class="swiss-stat-label">Praktik Formulasi Mandiri</span>
                    </div>
                    <div class="swiss-stat-cell">
                        <span class="swiss-stat-number">60%+</span>
                        <span class="swiss-stat-label">Efisiensi Penghematan HPP</span>
                    </div>
                    <div class="swiss-stat-cell">
                        <span class="swiss-stat-number">&infin;</span>
                        <span class="swiss-stat-label">Konsultasi Seumur Hidup</span>
                    </div>
                </div>

                <!-- CTA Actions -->
                <div class="swiss-hero-actions">
                    <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya ingin konsultasi pendaftaran kelas pelatihan batch ' . date_i18n('F Y') . '.' ) ); ?>" target="_blank" class="btn btn-whatsapp swiss-cta-btn">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.157 4.228 4.228-1.157zm12.339-6.495c-.068-.113-.25-.181-.523-.317-.272-.136-1.61-.795-1.86-.886-.25-.091-.432-.136-.613.136-.182.272-.704.886-.863 1.067-.159.182-.318.204-.59.068-.272-.136-1.151-.424-2.193-1.353-.81-.723-1.357-1.616-1.516-1.888-.159-.272-.017-.419.119-.554.122-.122.272-.318.408-.477.136-.159.182-.272.272-.454.091-.182.045-.341-.023-.477-.068-.136-.613-1.477-.84-2.023-.222-.534-.447-.461-.613-.469-.159-.008-.341-.01-.523-.01s-.477.068-.727.341c-.25.272-.954.932-.954 2.273s.977 2.636 1.114 2.818c.136.182 1.923 2.936 4.659 4.116.65.281 1.158.448 1.554.573.653.207 1.247.178 1.716.108.523-.078 1.61-.658 1.838-1.295.227-.636.227-1.181.159-1.295z"/></svg>
                        <span>Daftar Batch <?php echo esc_html( date_i18n('F Y') ); ?></span>
                    </a>
                    <a href="#struktur-investasi" class="btn btn-outline swiss-cta-btn">
                        <span>Pilih Paket Kelas &darr;</span>
                    </a>
                </div>
            </div>

            <!-- Right Architectural Media Frame -->
            <div class="swiss-hero-visual">
                <div class="swiss-frame-card">
                    <div class="swiss-frame-header">
                        <span class="swiss-frame-label">FIG. 00.1 // WORKSHOP APPARATUS &amp; RES-LAB</span>
                        <span class="swiss-frame-code">FAC-YOGYA-01</span>
                    </div>
                    <div class="swiss-frame-media">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-lab-practical.jpg' ); ?>" alt="Suasana Praktikum Laboratorium Formulasi Kimia Cleanique Academy di Sleman Yogyakarta" loading="eager" width="800" height="533">
                        <div class="swiss-live-tag">
                            <span class="swiss-live-pulse"></span>
                            <span>PELATIHAN TATAP MUKA BERKALA</span>
                        </div>
                    </div>
                    <div class="swiss-frame-footer">
                        <div class="swiss-frame-caption">
                            <strong>Laboratorium &amp; Training Center Sleman</strong>
                            <span>Praktikum hands-on menggunakan instrumen formulasi, bahan aktif surfaktan industri, serta pengujian pH dan kestabilan emulsi standar pabrik.</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- ==========================================================================
     01. STRUKTUR INVESTASI & PAKET PELATIHAN UTAMA
     ========================================================================== -->
<section id="struktur-investasi" class="section swiss-section" style="background: #ffffff; border-bottom: 1px solid var(--color-border);" aria-label="Struktur Investasi Kelas">
    <div class="container">
        
        <!-- Section Header Marker -->
        <div class="swiss-section-marker">
            <span class="swiss-marker-num">01</span>
            <h2 class="swiss-marker-title">STRUKTUR INVESTASI &amp; PAKET PELATIHAN</h2>
            <div class="swiss-marker-line"></div>
            <span class="swiss-marker-tag">BATCH <?php echo esc_html( strtoupper( date_i18n('F Y') ) ); ?></span>
        </div>

        <div class="swiss-section-intro">
            <h3 class="swiss-headline-lg">Pilihan Paket Pelatihan Sesuai Skala Bisnis Anda</h3>
            <p class="swiss-lead-text">
                Seluruh materi pelatihan mengacu pada formula kimia pembersih komersial siap edar yang telah teruji kestabilan, daya bersih, dan efisiensi biayanya di pasar industri nyata.
            </p>
        </div>

        <!-- 2 PRIMARY HIGH-PROFILE PRICING CARDS -->
        <div class="grid grid-2 swiss-pricing-grid" style="gap: 2rem; margin-bottom: 2.5rem; align-items: stretch;">
            
            <!-- CARD 1: KELAS KOLEKTIF -->
            <div class="swiss-price-card">
                <div class="swiss-price-card-header">
                    <div class="swiss-price-meta">
                        <span class="swiss-card-code">PAKET.01 // REGULER</span>
                        <span class="swiss-card-badge">2 - 4 PESERTA</span>
                    </div>
                    <h4 class="swiss-price-title">KELAS KOLEKTIF</h4>
                    <p class="swiss-price-subtitle">
                        Pilihan paling efisien untuk memulai usaha kimia kebersihan secara terarah bersama peserta lain.
                    </p>
                </div>

                <div class="swiss-price-amount-box">
                    <div class="swiss-price-tag-badge">PROMO TERBATAS BATCH INI</div>
                    <div class="swiss-price-slash">Rp 6.500.000,-</div>
                    <div class="swiss-price-main">Rp 4.300.000<span class="swiss-price-suffix">/ peserta</span></div>
                    <div class="swiss-price-duration">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                        <span>Durasi: 1 Hari Intensif (09.00 - 17.00 WIB)</span>
                    </div>
                </div>

                <div class="swiss-price-body">
                    <div class="swiss-price-facility-title">FASILITAS &amp; MATERI TERMASUK:</div>
                    <ul class="swiss-price-checklist">
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--color-primary-green)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            <span><strong>Akomodasi Penginapan</strong> (disediakan untuk peserta luar kota)</span>
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--color-primary-green)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            <span><strong>Konsumsi Lengkap</strong> (Makan Siang &amp; Coffee Break saat workshop)</span>
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--color-primary-green)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            <span><strong>4 Formula Produk Komersial</strong> siap produksi &amp; jual</span>
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--color-primary-green)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            <span><strong>Buku Modul Materi &amp; SOP</strong> pembuatan terstandar</span>
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--color-primary-green)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            <span><strong>Sertifikat Pelatihan Resmi</strong> dari PT Indotech Berkah Abadi</span>
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--color-primary-green)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            <span><strong>Konsultasi &amp; Akses Rantai Pasok</strong> bahan kimia seumur hidup</span>
                        </li>
                        <li class="swiss-bonus-item">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#ca8a04" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            <span><strong>BONUS:</strong> Mystery Box Sampel Bahan Baku Eksklusif</span>
                        </li>
                    </ul>
                </div>

                <div class="swiss-price-card-footer">
                    <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya berminat mendaftar Kelas Kolektif promo Rp 4.300.000 untuk batch ' . date_i18n('F Y') . '.' ) ); ?>" target="_blank" class="btn btn-whatsapp swiss-btn-full">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.157 4.228 4.228-1.157zm12.339-6.495c-.068-.113-.25-.181-.523-.317-.272-.136-1.61-.795-1.86-.886-.25-.091-.432-.136-.613.136-.182.272-.704.886-.863 1.067-.159.182-.318.204-.59.068-.272-.136-1.151-.424-2.193-1.353-.81-.723-1.357-1.616-1.516-1.888-.159-.272-.017-.419.119-.554.122-.122.272-.318.408-.477.136-.159.182-.272.272-.454.091-.182.045-.341-.023-.477-.068-.136-.613-1.477-.84-2.023-.222-.534-.447-.461-.613-.469-.159-.008-.341-.01-.523-.01s-.477.068-.727.341c-.25.272-.954.932-.954 2.273s.977 2.636 1.114 2.818c.136.182 1.923 2.936 4.659 4.116.65.281 1.158.448 1.554.573.653.207 1.247.178 1.716.108.523-.078 1.61-.658 1.838-1.295.227-.636.227-1.181.159-1.295z"/></svg>
                        <span>Daftar Kelas Kolektif</span>
                    </a>
                </div>
            </div>

            <!-- CARD 2: KELAS PRIVAT (FEATURED) -->
            <div class="swiss-price-card swiss-price-featured">
                <div class="swiss-featured-ribbon">
                    <span>RECOMMENDED FOR FACTORY LAUNCH</span>
                </div>

                <div class="swiss-price-card-header">
                    <div class="swiss-price-meta">
                        <span class="swiss-card-code">PAKET.02 // INTENSIF PRIVAT</span>
                        <span class="swiss-card-badge swiss-badge-highlight">1-ON-1 VIP</span>
                    </div>
                    <h4 class="swiss-price-title">KELAS PRIVAT EKSKLUSIF</h4>
                    <p class="swiss-price-subtitle">
                        Bimbingan intensif privat 1-on-1 bersama instruktur senior dengan jadwal fleksibel dan kurikulum custom.
                    </p>
                </div>

                <div class="swiss-price-amount-box swiss-amount-featured">
                    <div class="swiss-price-tag-badge" style="background: #ffffff; color: #dc2626;">HEMAT RP 5.300.000,-</div>
                    <div class="swiss-price-slash" style="color: rgba(255,255,255,0.75);">Rp 15.000.000,-</div>
                    <div class="swiss-price-main" style="color: #ffffff;">Rp 9.700.000<span class="swiss-price-suffix" style="color: rgba(255,255,255,0.85);">/ paket privat</span></div>
                    <div class="swiss-price-duration" style="color: #cbd5e1;">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                        <span>Durasi: 2 Hari Fleksibel (Jadwal Ditentukan Peserta)</span>
                    </div>
                </div>

                <div class="swiss-price-body">
                    <div class="swiss-price-facility-title">SEMUA FASILITAS KOLEKTIF DITAMBAH:</div>
                    <ul class="swiss-price-checklist">
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--color-primary-green)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            <span><strong>Antar-Jemput VIP</strong> (Stasiun / Bandara / Hotel di Yogyakarta)</span>
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--color-primary-green)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            <span><strong>Hotel Berbintang 1 Kamar 1 Orang</strong> (Akomodasi private nyaman)</span>
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--color-primary-green)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            <span><strong>Bebas Pilih 6 Formula Produk</strong> dari katalog spesialisasi</span>
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--color-primary-green)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            <span><strong>Wisata Kuliner Malam</strong> (Exclusive networking dinner di Yogyakarta)</span>
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--color-primary-green)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            <span><strong>Bedah Strategi HPP &amp; Penetapan Harga Jual</strong> secara mendalam</span>
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--color-primary-green)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            <span><strong>Asistensi Regulasi &amp; Izin Edar</strong> PKRT / Kemenkes</span>
                        </li>
                        <li class="swiss-bonus-item">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#ca8a04" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            <span><strong>BONUS:</strong> VIP Mystery Box + Formulasi Custom Spesifik</span>
                        </li>
                    </ul>
                </div>

                <div class="swiss-price-card-footer">
                    <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya berminat mendaftar Kelas Privat Eksklusif promo Rp 9.700.000.' ) ); ?>" target="_blank" class="btn btn-whatsapp swiss-btn-full">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.157 4.228 4.228-1.157zm12.339-6.495c-.068-.113-.25-.181-.523-.317-.272-.136-1.61-.795-1.86-.886-.25-.091-.432-.136-.613.136-.182.272-.704.886-.863 1.067-.159.182-.318.204-.59.068-.272-.136-1.151-.424-2.193-1.353-.81-.723-1.357-1.616-1.516-1.888-.159-.272-.017-.419.119-.554.122-.122.272-.318.408-.477.136-.159.182-.272.272-.454.091-.182.045-.341-.023-.477-.068-.136-.613-1.477-.84-2.023-.222-.534-.447-.461-.613-.469-.159-.008-.341-.01-.523-.01s-.477.068-.727.341c-.25.272-.954.932-.954 2.273s.977 2.636 1.114 2.818c.136.182 1.923 2.936 4.659 4.116.65.281 1.158.448 1.554.573.653.207 1.247.178 1.716.108.523-.078 1.61-.658 1.838-1.295.227-.636.227-1.181.159-1.295z"/></svg>
                        <span>Daftar Kelas Privat Sekarang</span>
                    </a>
                </div>
            </div>

        </div>

        <!-- 3 MINI BENTO CARDS (KELAS 1 PRODUK, CUSTOM IN-HOUSE, ADD-ON) -->
        <div class="grid grid-3 swiss-mini-bento-grid" style="gap: 1.5rem;">
            
            <!-- MINI 1: KELAS 1 PRODUK -->
            <div class="swiss-mini-card">
                <div class="swiss-mini-card-head">
                    <span class="swiss-card-code">MODUL.01</span>
                    <span class="swiss-pill-small">FOKUS TUNGGAL</span>
                </div>
                <h5 class="swiss-mini-card-title">Kelas 1 Formula Spesifik</h5>
                <p class="swiss-mini-card-desc">
                    Hanya ingin mempelajari 1 resep formula spesifik (misal: hanya Deterjen Matik atau Sabun Cuci Piring)? Pilihan praktis tanpa mengambil paket penuh.
                </p>
                <div class="swiss-mini-card-action">
                    <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya ingin tanya info Kelas 1 Produk spesifik.' ) ); ?>" target="_blank" class="btn btn-outline swiss-btn-sm">
                        <span>Tanya CS via WA &rarr;</span>
                    </a>
                </div>
            </div>

            <!-- MINI 2: KELAS CUSTOM & IN-HOUSE -->
            <div class="swiss-mini-card">
                <div class="swiss-mini-card-head">
                    <span class="swiss-card-code">MODUL.02</span>
                    <span class="swiss-pill-small">B2B &amp; CORPORATE</span>
                </div>
                <h5 class="swiss-mini-card-title">In-House Training &amp; Custom</h5>
                <p class="swiss-mini-card-desc">
                    Kurikulum khusus untuk tim pabrik, hotel, rumah sakit, instansi pemerintah, atau korporasi dengan materi dan lokasi yang dapat disesuaikan.
                </p>
                <div class="swiss-mini-card-action">
                    <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya ingin konsultasi program In-House Training Corporate.' ) ); ?>" target="_blank" class="btn btn-outline swiss-btn-sm">
                        <span>Konsultasi In-House &rarr;</span>
                    </a>
                </div>
            </div>

            <!-- MINI 3: ADD-ON FORMULA -->
            <div class="swiss-mini-card swiss-addon-card">
                <div class="swiss-mini-card-head">
                    <span class="swiss-card-code">MODUL.03</span>
                    <span class="swiss-pill-small" style="background: #fef08a; color: #854d0e;">HEMAT RP 500.000</span>
                </div>
                <h5 class="swiss-mini-card-title">Add-On: Tambah Formula</h5>
                <p class="swiss-mini-card-desc">
                    Ingin menambah resep formula di luar paket yang dipilih? Tambahan formula dengan harga spesial diskon:
                </p>
                <div class="swiss-addon-price">
                    <span class="swiss-addon-old">Rp 1.500.000</span>
                    <span class="swiss-addon-now">Rp 1.000.000,- / formula</span>
                </div>
                <div class="swiss-mini-card-action">
                    <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya ingin info add-on penambahan formula pelatihan.' ) ); ?>" target="_blank" class="btn btn-outline swiss-btn-sm">
                        <span>Pilih Tambahan &rarr;</span>
                    </a>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- ==========================================================================
     02. MATRIKS KOMPARASI FASILITAS LENGKAP
     ========================================================================== -->
<section class="section swiss-section" style="background: #f8fafc; border-bottom: 1px solid var(--color-border);" aria-label="Matriks Komparasi Paket">
    <div class="container">
        
        <!-- Section Header Marker -->
        <div class="swiss-section-marker">
            <span class="swiss-marker-num">02</span>
            <h2 class="swiss-marker-title">MATRIKS KOMPARASI FASILITAS LENGKAP</h2>
            <div class="swiss-marker-line"></div>
            <span class="swiss-marker-tag">DATA KOMPARASI</span>
        </div>

        <div class="swiss-section-intro">
            <h3 class="swiss-headline-lg">Bandingkan Fitur dan Fasilitas Setiap Program</h3>
            <p class="swiss-lead-text">
                Transparansi penuh fasilitas yang Anda dapatkan saat mengikuti pelatihan tatap muka di Cleanique Academy.
            </p>
        </div>

        <!-- SWISS COMPARISON TABLE -->
        <div class="swiss-table-wrapper">
            <table class="swiss-matrix-table">
                <thead>
                    <tr>
                        <th style="width: 38%;">Komponen Fasilitas &amp; Fitur</th>
                        <th style="width: 31%;">Kelas Kolektif</th>
                        <th style="width: 31%; background: #072338; color: #ffffff;" class="swiss-th-highlight">Kelas Privat Eksklusif</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Investasi Biaya Pelatihan</strong></td>
                        <td><span class="swiss-td-price">Rp 4.300.000,-</span></td>
                        <td class="swiss-td-highlight"><span class="swiss-td-price" style="color: #20A86B;">Rp 9.700.000,-</span></td>
                    </tr>
                    <tr>
                        <td><strong>Format Bimbingan</strong></td>
                        <td>Kelompok Kecil (2 - 4 Peserta)</td>
                        <td class="swiss-td-highlight"><strong>1-on-1 Eksklusif</strong> (Instruktur Khusus)</td>
                    </tr>
                    <tr>
                        <td><strong>Durasi Waktu Pelatihan</strong></td>
                        <td>1 Hari Penuh (09.00 - 17.00 WIB)</td>
                        <td class="swiss-td-highlight"><strong>2 Hari Fleksibel</strong> (Sesuai Request)</td>
                    </tr>
                    <tr>
                        <td><strong>Jumlah Formula Produk</strong></td>
                        <td>4 Formula Siap Produksi</td>
                        <td class="swiss-td-highlight"><strong>6 Formula Bebas Pilih</strong></td>
                    </tr>
                    <tr>
                        <td><strong>Fasilitas Penginapan</strong></td>
                        <td>Akomodasi Standar Peserta</td>
                        <td class="swiss-td-highlight"><strong>Hotel Berbintang</strong> (1 Kamar 1 Orang)</td>
                    </tr>
                    <tr>
                        <td><strong>Transportasi Antar-Jemput</strong></td>
                        <td>Mandiri ke Training Center</td>
                        <td class="swiss-td-highlight"><strong>VIP Pickup &amp; Drop</strong> (Stasiun/Bandara)</td>
                    </tr>
                    <tr>
                        <td><strong>Konsumsi &amp; Wisata Kuliner</strong></td>
                        <td>Lunch &amp; Coffee Break</td>
                        <td class="swiss-td-highlight">Lunch, Coffee Break + <strong>Dinner Kuliner Jogja</strong></td>
                    </tr>
                    <tr>
                        <td><strong>Buku Modul SOP &amp; Sertifikat</strong></td>
                        <td>Fisik Modul &amp; Sertifikat Resmi</td>
                        <td class="swiss-td-highlight">Fisik Modul, Sertifikat + <strong>File Digital SOP</strong></td>
                    </tr>
                    <tr>
                        <td><strong>Bedah HPP &amp; Asistensi Izin PKRT</strong></td>
                        <td>Pengantar Dasar HPP</td>
                        <td class="swiss-td-highlight"><strong>Bedah Tuntas HPP &amp; Asistensi Izin Edar</strong></td>
                    </tr>
                    <tr>
                        <td><strong>Konsultasi Pasca-Pelatihan</strong></td>
                        <td>Grup Alumni Selamanya</td>
                        <td class="swiss-td-highlight"><strong>Grup Alumni + Jalur Khusus Instruktur</strong></td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</section>

<!-- ==========================================================================
     03. SPESIALISASI FORMULA & ANALISIS EFISIENSI HPP
     ========================================================================== -->
<section class="section swiss-section" style="background: #ffffff; border-bottom: 1px solid var(--color-border);" aria-label="Analisis Finansial dan HPP">
    <div class="container">
        
        <!-- Section Header Marker -->
        <div class="swiss-section-marker">
            <span class="swiss-marker-num">03</span>
            <h2 class="swiss-marker-title">FORMULA KOMERSIAL &amp; EFISIENSI HPP</h2>
            <div class="swiss-marker-line"></div>
            <span class="swiss-marker-tag">STUDI FINANSIAL</span>
        </div>

        <div class="swiss-grid-split" style="align-items: center; margin-bottom: 3.5rem;">
            
            <!-- Left Info -->
            <div>
                <span class="swiss-card-code" style="display: block; margin-bottom: 0.75rem;">STANDAR INDUSTRI KOMERSIAL</span>
                <h3 class="swiss-headline-lg" style="margin-bottom: 1.25rem;">Formulasi Berdaya Bersih Tinggi dengan Efisiensi Modal Maksimal</h3>
                <p class="swiss-lead-text" style="font-size: 1rem; margin-bottom: 1.5rem;">
                    Seluruh formula yang dipraktikkan telah melalui riset kestabilan fase emulsi, pengujian derajat keasaman (pH balance), serta efisiensi surfaktan aktif agar menghasilkan busa dan daya angkat noda terbaik dengan harga pokok produksi (HPP) paling hemat.
                </p>

                <div class="swiss-formula-pills">
                    <div class="swiss-formula-pill">
                        <span class="swiss-pill-dot"></span>
                        <span>Deterjen Cair Rendah Busa Front-Load &amp; Top-Load</span>
                    </div>
                    <div class="swiss-formula-pill">
                        <span class="swiss-pill-dot"></span>
                        <span>Softener Pakaian Mikroenkapsulasi Fiksatif Parfum</span>
                    </div>
                    <div class="swiss-formula-pill">
                        <span class="swiss-pill-dot"></span>
                        <span>Sabun Cuci Piring Busa Tebal Anti-Minyak</span>
                    </div>
                    <div class="swiss-formula-pill">
                        <span class="swiss-pill-dot"></span>
                        <span>Pembersih Lantai Karbol Sereh Antiseptik</span>
                    </div>
                    <div class="swiss-formula-pill">
                        <span class="swiss-pill-dot"></span>
                        <span>Sampo Mobil / Motor Touchless &amp; Semir Ban Silikon</span>
                    </div>
                </div>
            </div>

            <!-- Right Showcase Frame -->
            <div>
                <div class="swiss-frame-card">
                    <div class="swiss-frame-header">
                        <span class="swiss-frame-label">FIG. 03.1 // PRODUK HASIL PRAKTIKUM ALUMNI</span>
                        <span class="swiss-frame-code">READY-TO-SELL</span>
                    </div>
                    <div class="swiss-frame-media">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/chemical-product-showcase.jpg' ); ?>" alt="Hasil Racikan Produk Chemical Kebersihan Siap Pakai Alumni Cleanique Academy" loading="lazy" width="800" height="533">
                    </div>
                    <div class="swiss-frame-footer">
                        <div class="swiss-frame-caption">
                            <strong>Produk Siap Edar Standar Pabrik</strong>
                            <span>Kekentalan presisi, tidak memisah dalam penyimpanan jangka panjang, dan aroma fiksatif wangi tahan lama.</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- HPP COMPARISON TABLE -->
        <div class="swiss-hpp-box">
            <div class="swiss-hpp-header">
                <span class="swiss-card-code" style="color: #087FC1;">ANALISIS MARGIN PROFIT</span>
                <h4 class="swiss-hpp-title">Simulasi HPP: Produksi Mandiri vs Beli Jadi Pasaran</h4>
                <p class="swiss-hpp-sub">Perhitungan riil penghematan biaya bahan baku untuk operasional laundry komersial atau usaha distributor kimia:</p>
            </div>

            <div class="swiss-table-wrapper" style="margin-top: 1.5rem;">
                <table class="swiss-matrix-table swiss-table-white">
                    <thead>
                        <tr style="background: #072338; color: #ffffff;">
                            <th style="width: 32%;">Item Komparasi Finansial</th>
                            <th style="width: 34%;">Membeli Produk Jadi (Pasaran)</th>
                            <th style="width: 34%; background: #087FC1; color: #ffffff;">Produksi Mandiri Pasca Pelatihan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>HPP Deterjen Cair / Liter</strong></td>
                            <td style="color: #dc2626; font-weight: 700;">Rp 10.000 - Rp 15.000 / L</td>
                            <td style="color: #16a34a; font-weight: 800; background: #f0fdf4;">Rp 3.500 - Rp 4.500 / L</td>
                        </tr>
                        <tr>
                            <td><strong>Biaya Produksi 1.000 Liter</strong></td>
                            <td style="color: #dc2626; font-weight: 700;">Rp 10.000.000 s/d Rp 15.000.000,-</td>
                            <td style="color: #16a34a; font-weight: 800; background: #f0fdf4;">Rp 3.800.000 s/d Rp 4.500.000,-</td>
                        </tr>
                        <tr>
                            <td><strong>Potensi Penghematan / Laba</strong></td>
                            <td style="color: #64748b;">Terbatas margin reseller (10% - 20%)</td>
                            <td style="color: #087FC1; font-weight: 800; background: #f0fdf4;"><strong>Hemat hingga 65% (Margin Profit 150%+)</strong></td>
                        </tr>
                        <tr>
                            <td><strong>Kontrol Formula &amp; Varian Aroma</strong></td>
                            <td style="color: #64748b;">Tergantung stok pihak ketiga</td>
                            <td style="color: #16a34a; font-weight: 800; background: #f0fdf4;">100% Bebas Atur Grade &amp; Fiksasi Aroma Sendiri</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</section>

<!-- ==========================================================================
     04. METODOLOGI & 4 LANGKAH PROSEDUR REGISTRASI
     ========================================================================== -->
<section class="section swiss-section" style="background: #f8fafc; border-bottom: 1px solid var(--color-border);" aria-label="Alur Pendaftaran">
    <div class="container">
        
        <!-- Section Header Marker -->
        <div class="swiss-section-marker">
            <span class="swiss-marker-num">04</span>
            <h2 class="swiss-marker-title">PROSEDUR REGISTRASI &amp; PELAKSANAAN</h2>
            <div class="swiss-marker-line"></div>
            <span class="swiss-marker-tag">4 LANGKAH MUDAH</span>
        </div>

        <div class="swiss-section-intro">
            <h3 class="swiss-headline-lg">Alur Mudah Mengikuti Pelatihan Kimia Cleanique Academy</h3>
            <p class="swiss-lead-text">
                Proses registrasi yang transparan, terstruktur, dan langsung didampingi tim penasihat akademik kami.
            </p>
        </div>

        <!-- 4-STEP HORIZONTAL SWISS CARDS -->
        <div class="grid grid-4 swiss-steps-grid" style="gap: 1.5rem;">
            
            <div class="swiss-step-card">
                <div class="swiss-step-num">01</div>
                <div class="swiss-step-badge">KONSULTASI AWAL</div>
                <h4 class="swiss-step-title">Konsultasi Kebutuhan</h4>
                <p class="swiss-step-desc">
                    Hubungi tim konsultan melalui WhatsApp untuk mendiskusikan latar belakang bisnis, target formula, dan pemilihan paket kelas yang tepat.
                </p>
            </div>

            <div class="swiss-step-card">
                <div class="swiss-step-num">02</div>
                <div class="swiss-step-badge">KURIKULUM</div>
                <h4 class="swiss-step-title">Pilih Daftar Formula</h4>
                <p class="swiss-step-desc">
                    Tentukan resep spesialisasi kimia yang ingin dipelajari (Laundry, Pembersih Rumah Tangga, Autocare, atau Sanitasi).
                </p>
            </div>

            <div class="swiss-step-card">
                <div class="swiss-step-num">03</div>
                <div class="swiss-step-badge">LOCKING JADWAL</div>
                <h4 class="swiss-step-title">Konfirmasi DP &amp; Slot</h4>
                <p class="swiss-step-desc">
                    Lakukan pembayaran uang muka (Down Payment) untuk mengamankan slot batch pelatihan dan pemesanan akomodasi penginapan.
                </p>
            </div>

            <div class="swiss-step-card">
                <div class="swiss-step-num">04</div>
                <div class="swiss-step-badge">PRAKTIKUM &amp; KELULUSAN</div>
                <h4 class="swiss-step-title">Hadir Workshop Sleman</h4>
                <p class="swiss-step-desc">
                    Hadir di Training Center Sleman Yogyakarta, lakukan praktikum mandiri meracik formula kimia, dan terima sertifikat kompetensi resmi.
                </p>
            </div>

        </div>

    </div>
</section>

<!-- ==========================================================================
     05. FASILITAS & SARANA WORKSHOP NYATA
     ========================================================================== -->
<section class="section swiss-section" style="background: #ffffff; border-bottom: 1px solid var(--color-border);" aria-label="Fasilitas Workshop">
    <div class="container">
        
        <!-- Section Header Marker -->
        <div class="swiss-section-marker">
            <span class="swiss-marker-num">05</span>
            <h2 class="swiss-marker-title">FASILITAS &amp; SARANA WORKSHOP NYATA</h2>
            <div class="swiss-marker-line"></div>
            <span class="swiss-marker-tag">INFRASTRUKTUR PELATIHAN</span>
        </div>

        <div class="swiss-section-intro">
            <h3 class="swiss-headline-lg">Sarana Lengkap untuk Menjamin Kelancaran Belajar</h3>
            <p class="swiss-lead-text">
                Kami menyediakan lingkungan belajar yang aman, kondusif, dan dilengkapi sarana standar industri manufaktur.
            </p>
        </div>

        <div class="grid grid-2 swiss-facility-grid" style="gap: 2rem;">
            
            <div class="swiss-facility-card">
                <div class="swiss-facility-index">01</div>
                <div class="swiss-facility-content">
                    <h4 class="swiss-facility-title">Laboratorium Formulasi &amp; Reaktor Uji Nyata</h4>
                    <p class="swiss-facility-desc">
                        Ruang workshop ber-AC dengan meja praktikum luas, timbangan digital presisi tinggi, instrumen uji pH digital, alat ukur viskositas, serta reaktor pengaduk simulasi batch pabrik.
                    </p>
                </div>
            </div>

            <div class="swiss-facility-card">
                <div class="swiss-facility-index">02</div>
                <div class="swiss-facility-content">
                    <h4 class="swiss-facility-title">Akomodasi Penginapan &amp; Konsumsi Terjamin</h4>
                    <p class="swiss-facility-desc">
                        Peserta dari luar kota tidak perlu khawatir mengenai akomodasi. Kami menyediakan fasilitas kamar inap yang nyaman, makan siang lezat, dan coffee break berkualitas selama pelatihan.
                    </p>
                </div>
            </div>

            <div class="swiss-facility-card">
                <div class="swiss-facility-index">03</div>
                <div class="swiss-facility-content">
                    <h4 class="swiss-facility-title">Sertifikat Kelulusan &amp; Buku SOP Resmi</h4>
                    <p class="swiss-facility-desc">
                        Setiap peserta menerima dokumen sertifikat kompetensi resmi berbadan hukum dari PT Indotech Berkah Abadi serta buku panduan SOP takaran kimia terlengkap sebagai aset seumur hidup.
                    </p>
                </div>
            </div>

            <div class="swiss-facility-card">
                <div class="swiss-facility-index">04</div>
                <div class="swiss-facility-content">
                    <h4 class="swiss-facility-title">Akses Jaringan Distributor Rantai Pasok</h4>
                    <p class="swiss-facility-desc">
                        Alumni terhubung langsung ke jejaring distributor resmi bahan baku kimia (surfaktan, builder, parfum, pewarna) skala pabrik dengan harga tangan pertama tanpa perantara.
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- ==========================================================================
     06. NAVIGASI EKOSISTEM & DOKUMENTASI
     ========================================================================== -->
<section class="section swiss-section" style="background: #f8fafc; border-bottom: 1px solid var(--color-border);" aria-label="Navigasi Ekosistem">
    <div class="container">
        
        <!-- Section Header Marker -->
        <div class="swiss-section-marker">
            <span class="swiss-marker-num">06</span>
            <h2 class="swiss-marker-title">EKSPLORASI EKOSISTEM CLEANIQUE</h2>
            <div class="swiss-marker-line"></div>
            <span class="swiss-marker-tag">NAVIGASI TERPADU</span>
        </div>

        <div class="grid grid-3" style="gap: 1.5rem;">
            
            <a href="<?php echo esc_url( home_url( '/tentang-kami/' ) ); ?>" class="swiss-nav-card">
                <div class="swiss-nav-card-head">
                    <span class="swiss-card-code">HALAMAN // 01</span>
                    <span class="swiss-nav-arrow">&rarr;</span>
                </div>
                <h4 class="swiss-nav-title">Profil &amp; Legalitas PT Indotech</h4>
                <p class="swiss-nav-desc">Pelajari sejarah 14+ tahun, landasan visi korporasi, legalitas Kemenkumham, dan fasilitas riset Sleman.</p>
            </a>

            <a href="<?php echo esc_url( home_url( '/dokumentasi-event/' ) ); ?>" class="swiss-nav-card">
                <div class="swiss-nav-card-head">
                    <span class="swiss-card-code">HALAMAN // 02</span>
                    <span class="swiss-nav-arrow">&rarr;</span>
                </div>
                <h4 class="swiss-nav-title">Galeri Dokumentasi Pelatihan</h4>
                <p class="swiss-nav-desc">Lihat foto nyata suasana praktikum, peserta meracik formula, dan penyerahan sertifikat kelulusan.</p>
            </a>

            <a href="<?php echo esc_url( home_url( '/kontak/' ) ); ?>" class="swiss-nav-card">
                <div class="swiss-nav-card-head">
                    <span class="swiss-card-code">HALAMAN // 03</span>
                    <span class="swiss-nav-arrow">&rarr;</span>
                </div>
                <h4 class="swiss-nav-title">Lokasi &amp; Kontak Resmi</h4>
                <p class="swiss-nav-desc">Peta petunjuk arah Google Maps menuju Training Center Sleman dan kanal komunikasi WhatsApp resmi.</p>
            </a>

        </div>

    </div>
</section>

<!-- ==========================================================================
     07. FAQ KHUSUS PROGRAM PELATIHAN
     ========================================================================== -->
<section class="section swiss-section" style="background: #ffffff; border-bottom: 1px solid var(--color-border);" aria-label="FAQ Program">
    <div class="container" style="max-width: 960px;">
        
        <!-- Section Header Marker -->
        <div class="swiss-section-marker">
            <span class="swiss-marker-num">07</span>
            <h2 class="swiss-marker-title">FREQUENTLY ASKED QUESTIONS (FAQ)</h2>
            <div class="swiss-marker-line"></div>
            <span class="swiss-marker-tag">TANYA JAWAB</span>
        </div>

        <div class="swiss-section-intro">
            <h3 class="swiss-headline-lg">Pertanyaan Seputar Program Pelatihan</h3>
            <p class="swiss-lead-text">
                Jawaban atas pertanyaan umum seputar biaya, jadwal, latar belakang pendidikan peserta, dan jaminan purna-kelas.
            </p>
        </div>

        <div class="swiss-accordion-list">
            
            <details class="swiss-accordion-item" open>
                <summary class="swiss-accordion-header">
                    <span class="swiss-faq-index">Q1</span>
                    <span class="swiss-faq-q">Apakah orang awam tanpa latar belakang kimia bisa mengikuti pelatihan?</span>
                    <span class="swiss-faq-icon"></span>
                </summary>
                <div class="swiss-accordion-body">
                    <p>
                        <strong>Sangat bisa.</strong> Kurikulum Cleanique Academy dirancang secara aplikatif tanpa rumus kimia teoritis yang rumit. Materi difokuskan pada pemahaman fungsi bahan aktif, proporsi takaran persentase presisi, teknik pengadukan emulsi, dan pengujian kualitas fisik produk secara mudah dipahami.
                    </p>
                </div>
            </details>

            <details class="swiss-accordion-item">
                <summary class="swiss-accordion-header">
                    <span class="swiss-faq-index">Q2</span>
                    <span class="swiss-faq-q">Bagaimana bila setelah pulang ke daerah saya mengalami kendala formulasi?</span>
                    <span class="swiss-faq-icon"></span>
                </summary>
                <div class="swiss-accordion-body">
                    <p>
                        Seluruh alumni mendapatkan <strong>bimbingan konsultasi seumur hidup</strong>. Anda dapat berdiskusi langsung dengan instruktur melalui grup alumni WhatsApp maupun jalur pribadi untuk konsultasi bahan baku lokal, penyesuaian pH, atau optimalisasi biaya produksi.
                    </p>
                </div>
            </details>

            <details class="swiss-accordion-item">
                <summary class="swiss-accordion-header">
                    <span class="swiss-faq-index">Q3</span>
                    <span class="swiss-faq-q">Apakah hasil racikan produk aman untuk dipasarkan dan digunakan konsumen?</span>
                    <span class="swiss-faq-icon"></span>
                </summary>
                <div class="swiss-accordion-body">
                    <p>
                        Ya, seluruh formula mengacu pada standar keamanan edar Kemenkes RI (izin edar PKRT). Peserta diajarkan penggunaan bahan surfaktan biodegradable ramah lingkungan yang aman bagi kulit dan tidak merusak serat kain mesin cuci.
                    </p>
                </div>
            </details>

            <details class="swiss-accordion-item">
                <summary class="swiss-accordion-header">
                    <span class="swiss-faq-index">Q4</span>
                    <span class="swiss-faq-q">Di mana lokasi workshop dan bagaimana jadwal pelaksanaannya?</span>
                    <span class="swiss-faq-icon"></span>
                </summary>
                <div class="swiss-accordion-body">
                    <p>
                        Pelatihan tatap muka diadakan di <strong>Training Center Cleanique Academy (PT Indotech Berkah Abadi)</strong>, Jongke Tengah No. 30, Mlati, Sleman, D.I. Yogyakarta. Untuk Kelas Kolektif jadwal batch dibuka setiap bulan, sedangkan Kelas Privat jadwal dapat disesuaikan dengan ketersediaan Anda.
                    </p>
                </div>
            </details>

            <details class="swiss-accordion-item">
                <summary class="swiss-accordion-header">
                    <span class="swiss-faq-index">Q5</span>
                    <span class="swiss-faq-q">Bagaimana cara mengamankan kuota pendaftaran batch bulan ini?</span>
                    <span class="swiss-faq-icon"></span>
                </summary>
                <div class="swiss-accordion-body">
                    <p>
                        Hubungi admin resmi Cleanique Academy via WhatsApp di <code>+62 822-1584-0088</code> untuk memeriksa ketersediaan kursi batch terdekat dan melakukan konfirmasi uang muka (DP).
                    </p>
                </div>
            </details>

        </div>

    </div>
</section>

<!-- ==========================================================================
     08. HIGH-CONTRAST SWISS CALL TO ACTION & STAMP KANTOR
     ========================================================================== -->
<section class="swiss-cta-section" aria-label="Pendaftaran Kelas">
    <div class="container">
        
        <div class="swiss-cta-box">
            <div class="swiss-badge-group" style="justify-content: center; margin-bottom: 1.25rem;">
                <span class="swiss-live-dot"></span>
                <span class="swiss-badge-text">KONSULTASI AKADEMIK &amp; PENDAFTARAN BATCH AKTIF</span>
            </div>

            <h2 class="swiss-cta-headline">
                Amankan Slot Pelatihan Formulasi Kimia Anda Sekarang.
            </h2>

            <p class="swiss-cta-desc">
                Investasikan modal usaha Anda pada keterampilan formulasi mandiri yang menghasilkan margin keuntungan puluhan hingga ratusan persen seumur hidup. Diskusikan jadwal dan paket pilihan Anda bersama penasihat akademik kami.
            </p>

            <div class="swiss-cta-actions">
                <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya ingin mendaftar pelatihan formulasi kimia batch ' . date_i18n('F Y') . '.' ) ); ?>" target="_blank" class="btn btn-whatsapp swiss-cta-btn-xl">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.157 4.228 4.228-1.157zm12.339-6.495c-.068-.113-.25-.181-.523-.317-.272-.136-1.61-.795-1.86-.886-.25-.091-.432-.136-.613.136-.182.272-.704.886-.863 1.067-.159.182-.318.204-.59.068-.272-.136-1.151-.424-2.193-1.353-.81-.723-1.357-1.616-1.516-1.888-.159-.272-.017-.419.119-.554.122-.122.272-.318.408-.477.136-.159.182-.272.272-.454.091-.182.045-.341-.023-.477-.068-.136-.613-1.477-.84-2.023-.222-.534-.447-.461-.613-.469-.159-.008-.341-.01-.523-.01s-.477.068-.727.341c-.25.272-.954.932-.954 2.273s.977 2.636 1.114 2.818c.136.182 1.923 2.936 4.659 4.116.65.281 1.158.448 1.554.573.653.207 1.247.178 1.716.108.523-.078 1.61-.658 1.838-1.295.227-.636.227-1.181.159-1.295z"/></svg>
                    <span>Hubungi CS via WhatsApp</span>
                </a>
            </div>

            <!-- Monospace Technical Stamp -->
            <div class="swiss-cta-stamp">
                <span class="swiss-stamp-title">KANTOR PUSAT &amp; TRAINING CENTER:</span>
                <span class="swiss-stamp-address">Jongke Tengah No. 30, RT.01/RW.23, Sendangadi, Kec. Mlati, Kab. Sleman, D.I. Yogyakarta 55285</span>
                <span class="swiss-stamp-phone">TELEPON / WA RESMI: +62 822-1584-0088</span>
            </div>
        </div>

    </div>
</section>

<!-- Schema.org Data Structuring (JSON-LD) for Course -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Course",
  "name": "Pelatihan Formulasi Kimia Kebersihan, Laundry & Industri Komersial",
  "description": "Kursus praktikum intensif meracik deterjen cair pekat, softener pakaian, sabun cuci piring, pembersih lantai, dan kimia autocare skala pabrik di Sleman Yogyakarta.",
  "provider": {
    "@type": "EducationalOrganization",
    "name": "Cleanique Academy - PT Indotech Berkah Abadi",
    "url": "<?php echo esc_url( home_url( '/' ) ); ?>"
  },
  "offers": [
    {
      "@type": "Offer",
      "name": "Kelas Kolektif (4 Formula Siap Jual)",
      "price": "4300000",
      "priceCurrency": "IDR",
      "availability": "https://schema.org/InStock",
      "validFrom": "<?php echo esc_attr( date('Y-01-01') ); ?>"
    },
    {
      "@type": "Offer",
      "name": "Kelas Privat Eksklusif (6 Formula Bebas Pilih + Hotel Berbintang)",
      "price": "9700000",
      "priceCurrency": "IDR",
      "availability": "https://schema.org/InStock",
      "validFrom": "<?php echo esc_attr( date('Y-01-01') ); ?>"
    }
  ]
}
</script>

<?php
get_footer();
