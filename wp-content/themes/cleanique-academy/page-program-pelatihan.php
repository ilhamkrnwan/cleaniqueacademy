<?php
/**
 * Template Name: Halaman Program Pelatihan
 *
 * Cleanique Academy - Training Programs & Course Catalog
 * Follows DESAIN.md: Modern Professional Academy x Luxury Editorial Corporate
 */
get_header();
?>

<!-- 1. BESPOKE LUXURY EDITORIAL HERO SECTION -->
<section class="about-hero-section" style="background-image: linear-gradient(145deg, rgba(7, 35, 56, 0.94) 0%, rgba(11, 93, 143, 0.90) 60%, rgba(8, 127, 193, 0.86) 100%), url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-lab-practical.jpg' ); ?>');">
    <div class="container about-hero-container">
        <div class="hero-editorial-pill">
            <span class="pill-pulse-dot"></span>
            <span>PROGRAM &amp; INVESTASI FORMULASI CHEMICAL</span>
        </div>

        <h1 class="about-hero-title">
            Katalog Program Pelatihan Formulasi Kimia
        </h1>

        <p class="about-hero-subtitle">
            Pilihan paket pelatihan praktikum kimia industri, laundry, dan homecare terlengkap di Sleman Yogyakarta sesuai dengan skala dan tujuan wirausaha mandiri Anda.
        </p>

        <nav class="about-hero-breadcrumbs" aria-label="Breadcrumb">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Beranda</a>
            <span class="breadcrumb-separator">&rsaquo;</span>
            <span>Program Pelatihan</span>
        </nav>
    </div>
</section>

<!-- 2. SECTION PROMO INVESTASI PELATIHAN (DEEP BLUE LUXURY) -->
<section id="program-unggulan" class="section section-roadmap-dark" style="position: relative; overflow: hidden; padding: 4.5rem 0 5rem 0;">
    <!-- SVG Background Wave Decor -->
    <div class="roadmap-bg-decor" aria-hidden="true">
        <svg class="roadmap-decor-svg" viewBox="0 0 1440 600" fill="none" preserveAspectRatio="none">
            <path d="M0,160 C320,300 420,40 720,180 C1020,320 1200,80 1440,200 L1440,600 L0,600 Z" fill="rgba(255, 255, 255, 0.03)" />
            <path d="M0,280 C280,120 540,360 880,220 C1140,100 1320,260 1440,180 L1440,600 L0,600 Z" fill="rgba(2, 132, 199, 0.05)" />
        </svg>
    </div>

    <div class="container" style="max-width: 1080px; position: relative; z-index: 2;">
        
        <!-- Header Promo Section -->
        <div style="text-align: center; max-width: 820px; margin: 0 auto 2.5rem auto;">
            <div class="editorial-badge-dark" style="margin-bottom: 0.85rem;">
                <span class="badge-dot-dark"></span>
                <span>PILIHAN PAKET KELAS</span>
                <span class="badge-code-dark">BATCH <?php echo date_i18n('F Y'); ?></span>
            </div>
            <h2 style="font-family: var(--font-heading); font-size: clamp(1.75rem, 3.5vw, 2.35rem); font-weight: 800; color: #ffffff; margin-bottom: 0.85rem; line-height: 1.25;">
                Promo Investasi Pelatihan Bulan <?php echo date_i18n('F Y'); ?>
            </h2>
            <p style="font-size: 0.95rem; line-height: 1.7; color: #cbd5e1; margin: 0;">
                Training diadakan di Training Center Sleman Yogyakarta setiap akhir pekan, <strong>Sabtu - Minggu</strong>. Materi pelatihan mengacu pada standar formula industri komersial siap jual yang efisien dan telah teruji.
            </p>
        </div>

        <!-- GRID UTAMA BARIS 1: KELAS KOLEKTIF & KELAS PRIVAT -->
        <div class="grid grid-2" style="gap: 1.5rem; margin-bottom: 1.5rem; align-items: stretch;">
            
            <!-- KELAS KOLEKTIF -->
            <div class="program-card-box">
                <div style="text-align: center; margin-bottom: 1.25rem;">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo.webp' ); ?>" alt="Cleanique Academy" style="height: 38px; margin: 0 auto 0.85rem auto; display: block;">
                    <h3 style="font-family: var(--font-heading); font-size: 1.25rem; font-weight: 800; letter-spacing: 0.05em; color: #0f172a; text-transform: uppercase; margin: 0;">KELAS KOLEKTIF</h3>
                </div>

                <p style="font-size: 0.88rem; line-height: 1.6; color: #475569; text-align: center; margin-bottom: 1.25rem;">
                    Kelas terdiri dari minimal 2 sampai 4 peserta, merupakan pilihan paling ekonomis bagi Anda yang ingin memiliki keahlian meracik bahan kimia laundry &amp; kebersihan. Dilaksanakan intensif selama <strong>1 hari</strong>.
                </p>

                <div style="text-align: center; margin-bottom: 1.5rem; background: #f8fafc; padding: 1rem; border-radius: var(--radius-md); border: 1px solid var(--color-border);">
                    <span style="display: block; color: #dc2626; font-weight: 800; font-size: 0.8rem; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 0.2rem;">*Investasi Promo Terbatas</span>
                    <div style="text-decoration: line-through; color: #94a3b8; font-weight: 700; font-size: 0.95rem;">Rp 6.500.000,-</div>
                    <div style="font-size: 2rem; font-weight: 800; color: #15803d; margin-top: 0.15rem; font-family: var(--font-heading);">Rp 4.300.000,-</div>
                </div>

                <!-- Checklist Fasilitas -->
                <ul style="list-style: none; padding: 0; margin: 0 0 1.5rem 0; display: flex; flex-direction: column; gap: 0.5rem; font-size: 0.85rem; color: #334155;">
                    <li style="display: flex; align-items: center; gap: 0.6rem; background: #f8fafc; padding: 0.5rem 0.75rem; border-radius: 6px;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Akomodasi penginapan</span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 0.6rem; background: #f1f5f9; padding: 0.5rem 0.75rem; border-radius: 6px;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Makan siang (lunch)</span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 0.6rem; background: #f8fafc; padding: 0.5rem 0.75rem; border-radius: 6px;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Coffee break</span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 0.6rem; background: #f1f5f9; padding: 0.5rem 0.75rem; border-radius: 6px;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Sertifikat pelatihan resmi</span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 0.6rem; background: #f8fafc; padding: 0.5rem 0.75rem; border-radius: 6px;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>4 formula produk siap jual</span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 0.6rem; background: #f1f5f9; padding: 0.5rem 0.75rem; border-radius: 6px;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Modul materi SOP pelatihan</span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 0.6rem; background: #fef08a; padding: 0.55rem 0.75rem; border-radius: 6px; font-weight: 800; color: #854d0e;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#ca8a04" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Mystery Box Eksklusif</span>
                    </li>
                </ul>

                <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya berminat mendaftar Kelas Kolektif promo Rp 4.300.000.' ) ); ?>" target="_blank" class="btn btn-whatsapp" style="margin-top: auto; width: 100%; justify-content: center; padding: 0.85rem; font-weight: 800; border-radius: var(--radius-md);">
                    Daftar Kelas Kolektif
                </a>
            </div>

            <!-- KELAS PRIVAT -->
            <div class="program-card-box">
                
                <!-- Top Badge Pill -->
                <div style="background: #dc2626; color: #ffffff; font-size: 0.75rem; font-weight: 800; text-transform: uppercase; padding: 0.3rem 0.85rem; border-radius: var(--radius-full); width: fit-content; margin: 0 auto 0.75rem auto; letter-spacing: 0.04em;">
                    Bonus Cara Menghitung HPP
                </div>

                <div style="text-align: center; margin-bottom: 1.25rem;">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo.webp' ); ?>" alt="Cleanique Academy" style="height: 38px; margin: 0 auto 0.85rem auto; display: block;">
                    <h3 style="font-family: var(--font-heading); font-size: 1.25rem; font-weight: 800; letter-spacing: 0.05em; color: #0f172a; text-transform: uppercase; margin: 0;">KELAS PRIVAT</h3>
                </div>

                <p style="font-size: 0.88rem; line-height: 1.6; color: #475569; text-align: center; margin-bottom: 1.25rem;">
                    Bagi Anda yang menginginkan fleksibilitas maksimal dan bimbingan 1-on-1 bersama instruktur. Waktu fleksibel sesuai kesepakatan dengan durasi maksimal <strong>2 hari</strong>.
                </p>

                <div style="text-align: center; margin-bottom: 1.5rem; background: #f8fafc; padding: 1rem; border-radius: var(--radius-md); border: 1px solid var(--color-border);">
                    <span style="display: block; color: #dc2626; font-weight: 800; font-size: 0.8rem; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 0.2rem;">*Investasi Promo Terbatas</span>
                    <div style="text-decoration: line-through; color: #94a3b8; font-weight: 700; font-size: 0.95rem;">Rp 15.000.000,-</div>
                    <div style="font-size: 2rem; font-weight: 800; color: #15803d; margin-top: 0.15rem; font-family: var(--font-heading);">Rp 9.700.000,-</div>
                </div>

                <!-- Checklist Fasilitas Privat -->
                <ul style="list-style: none; padding: 0; margin: 0 0 1.5rem 0; display: flex; flex-direction: column; gap: 0.5rem; font-size: 0.85rem; color: #334155;">
                    <li style="display: flex; align-items: center; gap: 0.6rem; background: #f8fafc; padding: 0.5rem 0.75rem; border-radius: 6px;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Fasilitas antar jemput stasiun/hotel/lokasi</span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 0.6rem; background: #f1f5f9; padding: 0.5rem 0.75rem; border-radius: 6px;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Akomodasi hotel berbintang 1 kamar 1 orang</span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 0.6rem; background: #f8fafc; padding: 0.5rem 0.75rem; border-radius: 6px;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Makan siang &amp; Coffee break</span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 0.6rem; background: #f1f5f9; padding: 0.5rem 0.75rem; border-radius: 6px;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Wisata kuliner (Dinner eksklusif)</span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 0.6rem; background: #f8fafc; padding: 0.5rem 0.75rem; border-radius: 6px;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Sertifikat pelatihan &amp; Modul materi</span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 0.6rem; background: #f1f5f9; padding: 0.5rem 0.75rem; border-radius: 6px;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Bebas pilih 6 formula produk</span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 0.6rem; background: #fef08a; padding: 0.55rem 0.75rem; border-radius: 6px; font-weight: 800; color: #854d0e;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#ca8a04" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Mystery Box Eksklusif</span>
                    </li>
                </ul>

                <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya berminat mendaftar Kelas Privat promo Rp 9.700.000.' ) ); ?>" target="_blank" class="btn btn-whatsapp" style="margin-top: auto; width: 100%; justify-content: center; padding: 0.85rem; font-weight: 800; border-radius: var(--radius-md);">
                    Daftar Kelas Privat
                </a>
            </div>

        </div>

        <!-- GRID UTAMA BARIS 2: KELAS 1 PRODUK & KELAS CUSTOM -->
        <div class="grid grid-2" style="gap: 1.5rem; margin-bottom: 1.5rem; align-items: stretch;">
            
            <!-- KELAS 1 PRODUK -->
            <div class="program-card-box" style="text-align: center;">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo.webp' ); ?>" alt="Cleanique Academy" style="height: 34px; margin: 0 auto 0.85rem auto; display: block;">
                <h3 style="font-family: var(--font-heading); font-size: 1.15rem; font-weight: 800; letter-spacing: 0.05em; color: #0f172a; text-transform: uppercase; margin-bottom: 0.75rem;">KELAS 1 PRODUK</h3>
                <p style="font-size: 0.88rem; line-height: 1.6; color: #475569; margin-bottom: 1.25rem;">
                    Ingin belajar membuat 1 jenis produk chemical tertentu sesuai fokus pasar Anda? Kelas ini cocok bagi Anda yang ingin menguasai satu formula spesifik tanpa mengambil paket penuh.
                </p>
                <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya ingin tanya info Kelas 1 Produk.' ) ); ?>" target="_blank" class="btn btn-primary" style="margin-top: auto; width: 100%; justify-content: center; padding: 0.75rem; border-radius: var(--radius-md);">
                    Tanya CS via WhatsApp
                </a>
            </div>

            <!-- KELAS CUSTOM -->
            <div class="program-card-box" style="text-align: center;">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo.webp' ); ?>" alt="Cleanique Academy" style="height: 34px; margin: 0 auto 0.85rem auto; display: block;">
                <h3 style="font-family: var(--font-heading); font-size: 1.15rem; font-weight: 800; letter-spacing: 0.05em; color: #0f172a; text-transform: uppercase; margin-bottom: 0.75rem;">KELAS CUSTOM &amp; IN-HOUSE</h3>
                <p style="font-size: 0.88rem; line-height: 1.6; color: #475569; margin-bottom: 1.25rem;">
                    Punya kebutuhan khusus untuk institusi, pabrik, atau tim bisnis Anda? Kami menyediakan kurikulum kustom yang dapat disesuaikan dengan jumlah peserta, materi, hingga lokasi pelatihan.
                </p>
                <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya ingin konsultasi Kelas Custom / In-House.' ) ); ?>" target="_blank" class="btn btn-primary" style="margin-top: auto; width: 100%; justify-content: center; padding: 0.75rem; border-radius: var(--radius-md);">
                    Konsultasi Kebutuhan Khusus
                </a>
            </div>

        </div>

        <!-- ADD-ON BANNER -->
        <div style="text-align: center; margin-bottom: 1.75rem; background: rgba(255, 255, 255, 0.07); border: 1px dashed rgba(255, 255, 255, 0.25); border-radius: var(--radius-lg); padding: 1.25rem 1.5rem;">
            <h4 style="font-size: 1.05rem; font-weight: 800; color: #ffffff; margin-bottom: 0.35rem;">Add On : Tambah materi Rp 1 Juta per formula</h4>
            <div style="display: flex; align-items: center; justify-content: center; gap: 0.6rem; flex-wrap: wrap;">
                <span style="text-decoration: line-through; color: #94a3b8; font-size: 0.95rem; font-weight: 700;">Rp 1.500.000,-</span>
                <span style="font-size: 1.5rem; font-weight: 800; color: #38bdf8; font-family: var(--font-heading);">Rp 1.000.000,-</span>
            </div>
        </div>

        <!-- QUOTE CALLOUT BOX -->
        <div style="max-width: 820px; margin: 0 auto 2rem auto; border: 1px solid rgba(255, 255, 255, 0.2); border-radius: var(--radius-lg); padding: 1.5rem 1.25rem; background: rgba(7, 35, 56, 0.6); text-align: center; backdrop-filter: blur(8px);">
            <p style="font-style: italic; font-size: 0.92rem; line-height: 1.7; color: #e2e8f0; margin-bottom: 0.75rem;">
                &ldquo;Investasi terbaik bukanlah barang habis pakai, melainkan keterampilan dan resep formula. Keterampilan formulasi kimia mandiri adalah aset seumur hidup yang membuka peluang produksi tak terbatas.&rdquo;
            </p>
            <strong style="color: #38bdf8; font-size: 0.9rem; display: block;">
                Ilmu tidak habis dipakai, justru terus melipatgandakan nilai usaha Anda.
            </strong>
        </div>

        <!-- MAIN BOTTOM CTA BUTTON -->
        <div style="text-align: center;">
            <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya berminat ambil promo investasi pelatihan.' ) ); ?>" target="_blank" class="btn btn-whatsapp btn-cta-large" style="display: inline-flex; align-items: center; gap: 0.6rem;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.157 4.228 4.228-1.157zm12.339-6.495c-.068-.113-.25-.181-.523-.317-.272-.136-1.61-.795-1.86-.886-.25-.091-.432-.136-.613.136-.182.272-.704.886-.863 1.067-.159.182-.318.204-.59.068-.272-.136-1.151-.424-2.193-1.353-.81-.723-1.357-1.616-1.516-1.888-.159-.272-.017-.419.119-.554.122-.122.272-.318.408-.477.136-.159.182-.272.272-.454.091-.182.045-.341-.023-.477-.068-.136-.613-1.477-.84-2.023-.222-.534-.447-.461-.613-.469-.159-.008-.341-.01-.523-.01s-.477.068-.727.341c-.25.272-.954.932-.954 2.273s.977 2.636 1.114 2.818c.136.182 1.923 2.936 4.659 4.116.65.281 1.158.448 1.554.573.653.207 1.247.178 1.716.108.523-.078 1.61-.658 1.838-1.295.227-.636.227-1.181.159-1.295z"/></svg>
                <span>Dapatkan Promo Pelatihan <?php echo date('Y'); ?> &rarr;</span>
            </a>
        </div>

    </div>
</section>

<!-- 3. SECTION PRODUCT SHOWCASE & HPP COMPARISON TABLE -->
<section class="section" style="padding: 4.5rem 0; background: #ffffff;">
    <div class="container" style="max-width: 1080px;">
        
        <div class="grid grid-2" style="gap: 2.5rem; align-items: center; margin-bottom: 3.5rem;">
            <div>
                <div class="editorial-badge" style="margin-bottom: 0.75rem;">
                    <span class="badge-dot"></span>
                    <span>STANDAR INDUSTRI</span>
                    <span class="badge-code">FORMULASI SIAP JUAL</span>
                </div>
                <h2 class="section-title" style="text-align: left; font-size: 1.85rem; margin-bottom: 1rem;">Formulasi Produk Standar Industri Komersial</h2>
                <div class="section-accent-bar" style="margin: 0 0 1rem 0;"></div>
                <p style="font-size: 0.98rem; line-height: 1.7; color: var(--color-text-main); margin-bottom: 1.25rem;">
                    Seluruh formula yang dipraktikkan di Cleanique Academy telah melalui pengujian kestabilan emulsi, pengujian derajat keasaman (pH), dan daya tahan fiksasi aroma parfum.
                </p>
                <ul style="list-style: none; padding: 0; margin: 0 0 1.5rem 0; display: flex; flex-direction: column; gap: 0.6rem; font-size: 0.9rem; color: #334155;">
                    <li style="display: flex; align-items: center; gap: 0.6rem;"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Deterjen Cair Pekat Matik &amp; Manual</li>
                    <li style="display: flex; align-items: center; gap: 0.6rem;"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Softener Pakaian Fiksatif Parfum Tahan Lama</li>
                    <li style="display: flex; align-items: center; gap: 0.6rem;"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Sabun Cuci Piring Kesat Busa Pekat</li>
                    <li style="display: flex; align-items: center; gap: 0.6rem;"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Pembersih Kaca, Lantai &amp; Antiseptik Sanitasi</li>
                </ul>
            </div>
            <div>
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/chemical-product-showcase.jpg' ); ?>" alt="Hasil Racikan Produk Chemical Kebersihan Siap Pakai Alumni Cleanique Academy" style="width: 100%; height: auto; border-radius: var(--radius-xl); box-shadow: var(--shadow-md); border: 1px solid var(--color-border);" loading="lazy">
            </div>
        </div>

        <!-- TABEL COMPARISON EFISIENSI HPP PRODUKSI MANDIRI -->
        <div style="background: #f8fafc; border: 1px solid var(--color-border); border-radius: var(--radius-xl); padding: 2.25rem; box-shadow: var(--shadow-sm);">
            <div style="text-align: center; margin-bottom: 1.75rem;">
                <div class="editorial-badge" style="margin-bottom: 0.75rem;">
                    <span class="badge-dot"></span>
                    <span>STUDI FINANSIAL</span>
                    <span class="badge-code">EFISIENSI HPP</span>
                </div>
                <h3 style="font-family: var(--font-heading); font-size: 1.6rem; font-weight: 800; color: #0f172a; margin: 0;">Analisis Efisiensi HPP: Produksi Mandiri vs Beli Jadi</h3>
            </div>
            
            <div style="overflow-x: auto;">
                <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.92rem;">
                    <thead>
                        <tr style="background: #072338; color: #ffffff;">
                            <th style="padding: 0.9rem 1.1rem; border-radius: 8px 0 0 0;">Item Komparasi</th>
                            <th style="padding: 0.9rem 1.1rem;">Membeli Produk Jadi (Pasaran)</th>
                            <th style="padding: 0.9rem 1.1rem; border-radius: 0 8px 0 0; background: #087FC1;">Produksi Mandiri Pasca Pelatihan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="border-bottom: 1px solid #e2e8f0;">
                            <td style="padding: 0.9rem 1.1rem; font-weight: 700; color: #334155;">HPP Deterjen Cair / Liter</td>
                            <td style="padding: 0.9rem 1.1rem; color: #dc2626; font-weight: 700;">Rp 10.000 - Rp 15.000</td>
                            <td style="padding: 0.9rem 1.1rem; color: #16a34a; font-weight: 800; background: #f0fdf4;">Rp 3.500 - Rp 4.500</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #e2e8f0;">
                            <td style="padding: 0.9rem 1.1rem; font-weight: 700; color: #334155;">Biaya Produksi 1.000 Liter</td>
                            <td style="padding: 0.9rem 1.1rem; color: #dc2626; font-weight: 700;">Rp 10.000.000,-</td>
                            <td style="padding: 0.9rem 1.1rem; color: #16a34a; font-weight: 800; background: #f0fdf4;">Rp 4.000.000,-</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #e2e8f0;">
                            <td style="padding: 0.9rem 1.1rem; font-weight: 700; color: #334155;">Potensi Penghematan / Profit Margin</td>
                            <td style="padding: 0.9rem 1.1rem; color: #64748b;">Terbatas pada margin reseller (10-20%)</td>
                            <td style="padding: 0.9rem 1.1rem; color: #087FC1; font-weight: 800; background: #f0fdf4;">Hemat hingga 60% (Profit 150-200%)</td>
                        </tr>
                        <tr>
                            <td style="padding: 0.9rem 1.1rem; font-weight: 700; color: #334155;">Kontrol Formula &amp; Aroma</td>
                            <td style="padding: 0.9rem 1.1rem; color: #64748b;">Bergantung distributor pihak ketiga</td>
                            <td style="padding: 0.9rem 1.1rem; color: #16a34a; font-weight: 800; background: #f0fdf4;">100% Bebas Custom Sesuai Selera Pasar</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</section>

<!-- 4. SECTION 4 TAHAP ALUR PENDAFTARAN & PELAKSANAAN -->
<section class="section section-alt section-decorated" style="padding: 4.5rem 0;">
    <div class="container" style="max-width: 1080px;">
        <div class="section-header">
            <div class="editorial-badge">
                <span class="badge-dot"></span>
                <span>PROSES MUDAH</span>
                <span class="badge-code">ALUR REGISTRASI</span>
            </div>
            <h2 class="section-title">4 Langkah Mudah Mengikuti Pelatihan</h2>
            <div class="section-accent-bar"></div>
            <p class="section-description">Proses pendaftaran cepat, fleksibel, dan langsung didampingi konsultan akademik Cleanique Academy.</p>
        </div>

        <div class="grid grid-4" style="grid-template-columns: repeat(4, 1fr); gap: 1.25rem;">
            <div class="card" style="text-align: center; position: relative; padding: 1.75rem 1.25rem;">
                <div style="width: 44px; height: 44px; background: #087FC1; color: #ffffff; font-weight: 800; font-size: 1.2rem; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem auto;">1</div>
                <h4 style="font-size: 1.05rem; font-weight: 700; margin-bottom: 0.5rem; color: #0f172a;">Konsultasi CS</h4>
                <p style="font-size: 0.85rem; color: #64748b; margin: 0; line-height: 1.55;">Hubungi WhatsApp untuk konsultasi pemilihan paket kelas &amp; cek ketersediaan jadwal batch.</p>
            </div>
            <div class="card" style="text-align: center; position: relative; padding: 1.75rem 1.25rem;">
                <div style="width: 44px; height: 44px; background: #16a34a; color: #ffffff; font-weight: 800; font-size: 1.2rem; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem auto;">2</div>
                <h4 style="font-size: 1.05rem; font-weight: 700; margin-bottom: 0.5rem; color: #0f172a;">Pilih Formula</h4>
                <p style="font-size: 0.85rem; color: #64748b; margin: 0; line-height: 1.55;">Pilih resep formulasi produk kimia yang ingin diajarkan sesuai target pasar bisnis Anda.</p>
            </div>
            <div class="card" style="text-align: center; position: relative; padding: 1.75rem 1.25rem;">
                <div style="width: 44px; height: 44px; background: #d97706; color: #ffffff; font-weight: 800; font-size: 1.2rem; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem auto;">3</div>
                <h4 style="font-size: 1.05rem; font-weight: 700; margin-bottom: 0.5rem; color: #0f172a;">Konfirmasi DP</h4>
                <p style="font-size: 0.85rem; color: #64748b; margin: 0; line-height: 1.55;">Lakukan pembayaran uang muka (DP) untuk mengamankan slot kelas &amp; fasilitas penginapan.</p>
            </div>
            <div class="card" style="text-align: center; position: relative; padding: 1.75rem 1.25rem;">
                <div style="width: 44px; height: 44px; background: #072338; color: #ffffff; font-weight: 800; font-size: 1.2rem; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem auto;">4</div>
                <h4 style="font-size: 1.05rem; font-weight: 700; margin-bottom: 0.5rem; color: #0f172a;">Hadir Praktikum</h4>
                <p style="font-size: 0.85rem; color: #64748b; margin: 0; line-height: 1.55;">Hadir di Training Center Sleman, praktik meracik langsung &amp; terima sertifikat kelulusan resmi.</p>
            </div>
        </div>
    </div>
</section>

<!-- 5. INTERNAL NAVIGATION LINKS GRID -->
<section class="section" style="padding: 3.5rem 0; background: #ffffff;">
    <div class="container" style="max-width: 1080px;">
        <div class="section-header">
            <div class="editorial-badge">
                <span class="badge-dot"></span>
                <span>INFORMASI LAINNYA</span>
                <span class="badge-code">EKSPLORASI PLATFORM</span>
            </div>
            <h3 class="section-title" style="font-size: 1.8rem; margin-bottom: 0.5rem;">Pelajari Ekosistem Cleanique Academy</h3>
            <div class="section-accent-bar"></div>
        </div>
        <div class="internal-links-grid">
            <a href="<?php echo esc_url( home_url( '/tentang-kami/' ) ); ?>" class="internal-link-card">
                <div class="internal-link-icon-box">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                </div>
                <div class="internal-link-title">
                    <span>Tentang PT Indotech</span>
                    <span class="internal-link-arrow">&rarr;</span>
                </div>
                <p class="internal-link-desc">Profil perusahaan, legalitas resmi, dan sejarah 13+ tahun Cleanique Academy.</p>
            </a>
            <a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>" class="internal-link-card">
                <div class="internal-link-icon-box">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                </div>
                <div class="internal-link-title">
                    <span>FAQ Pelatihan</span>
                    <span class="internal-link-arrow">&rarr;</span>
                </div>
                <p class="internal-link-desc">Jawaban lengkap pertanyaan seputar fasilitas, akomodasi, dan grup bimbingan.</p>
            </a>
            <a href="<?php echo esc_url( home_url( '/kontak/' ) ); ?>" class="internal-link-card">
                <div class="internal-link-icon-box">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                </div>
                <div class="internal-link-title">
                    <span>Hubungi Customer Care</span>
                    <span class="internal-link-arrow">&rarr;</span>
                </div>
                <p class="internal-link-desc">Kontak alamat training center Sleman Yogyakarta, peta lokasi, dan WhatsApp official.</p>
            </a>
        </div>
    </div>
</section>

<!-- 6. SEKSI KONTAK & CALL TO ACTION (DEEP BLUE) -->
<section id="kontak" class="section section-dark-cta">
    <div class="container" style="max-width: 880px;">
        <div class="contact-cta-box">
            <span class="contact-cta-subtitle">KONSULTASI KEBUTUHAN KELAS</span>
            <h2 class="contact-cta-title">Ingin Konsultasi Pemilihan Program Pelatihan?</h2>
            <p class="contact-cta-desc">Tim penasihat akademik kami siap membantu menyesuaikan program pelatihan dengan target kapasitas produksi &amp; skala bisnis Anda.</p>
            <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya ingin konsultasi program pelatihan terbaik.' ) ); ?>" target="_blank" class="btn btn-whatsapp btn-cta-large">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.157 4.228 4.228-1.157zm12.339-6.495c-.068-.113-.25-.181-.523-.317-.272-.136-1.61-.795-1.86-.886-.25-.091-.432-.136-.613.136-.182.272-.704.886-.863 1.067-.159.182-.318.204-.59.068-.272-.136-1.151-.424-2.193-1.353-.81-.723-1.357-1.616-1.516-1.888-.159-.272-.017-.419.119-.554.122-.122.272-.318.408-.477.136-.159.182-.272.272-.454.091-.182.045-.341-.023-.477-.068-.136-.613-1.477-.84-2.023-.222-.534-.447-.461-.613-.469-.159-.008-.341-.01-.523-.01s-.477.068-.727.341c-.25.272-.954.932-.954 2.273s.977 2.636 1.114 2.818c.136.182 1.923 2.936 4.659 4.116.65.281 1.158.448 1.554.573.653.207 1.247.178 1.716.108.523-.078 1.61-.658 1.838-1.295.227-.636.227-1.181.159-1.295z"/></svg>
                <span>Konsultasi WA Sekarang</span>
            </a>
        </div>
    </div>
</section>

<style>
.program-card-box {
  background: #ffffff;
  border-radius: var(--radius-xl);
  padding: 2rem 1.75rem;
  color: #1e293b;
  display: flex;
  flex-direction: column;
  position: relative;
  box-shadow: 0 15px 35px rgba(0,0,0,0.18);
  width: 100%;
  box-sizing: border-box;
  border: 1px solid rgba(255, 255, 255, 0.4);
}
@media (max-width: 768px) {
  .program-card-box {
    padding: 1.5rem 1.25rem !important;
  }
}
</style>

<!-- Schema.org Data Structuring (JSON-LD) for Course -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Course",
  "name": "Pelatihan Formulasi Kimia Kebersihan, Laundry & Homecare",
  "description": "Kursus praktikum meracik deterjen cair, pelembut pakaian, sabun cuci piring, dan produk pembersih komersial skala pabrik.",
  "provider": {
    "@type": "EducationalOrganization",
    "name": "Cleanique Academy - PT Indotech Berkah Abadi",
    "sameAs": "<?php echo esc_url( home_url( '/' ) ); ?>"
  },
  "offers": [
    {
      "@type": "Offer",
      "name": "Kelas Kolektif (4 Formula)",
      "price": "4300000",
      "priceCurrency": "IDR",
      "availability": "https://schema.org/InStock"
    },
    {
      "@type": "Offer",
      "name": "Kelas Privat (6 Formula)",
      "price": "9700000",
      "priceCurrency": "IDR",
      "availability": "https://schema.org/InStock"
    }
  ]
}
</script>

<?php
get_footer();
