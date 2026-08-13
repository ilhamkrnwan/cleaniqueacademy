<?php
/**
 * Template Name: Custom Front Page Landing Page
 */
get_header();

// Customizer values
$promo_image_url  = get_theme_mod( 'cleanique_promo_banner_image', get_template_directory_uri() . '/assets/images/promo-banner.jpeg' );
$promo_text       = get_theme_mod( 'cleanique_promo_text', 'Dapatkan Promo Pelatihan Terbatas berlaku bagi yang melakukan registrasi bulan ini, terbatas hanya untuk 10 pendaftar pertama.' );
$promo_btn_label  = get_theme_mod( 'cleanique_promo_btn_label', 'Ambil Promo' );
$video_url        = get_theme_mod( 'cleanique_youtube_video_url', 'https://www.youtube.com/embed/TwVdCpcpOzo' );
?>

<!-- 1. Hero Section with Title & Static Gallery -->
<section class="hero-static">
    <div class="container">
        <h1 class="hero-static-title">
            <span class="hero-title-green">Langsung dari Produsennya,</span><br>
            <span class="hero-title-blue">Produk Terbukti, Ilmu Teruji!</span>
        </h1>

        <!-- 6 Image Static Gallery Grid -->
        <div class="hero-gallery-grid">
            <div class="hero-gallery-item">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/gallery-1.webp' ); ?>" alt="Pembuatan Kimia Cleanique Academy" width="400" height="220" loading="eager">
            </div>
            <div class="hero-gallery-item">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/gallery-2.webp' ); ?>" alt="Produk Kimia Cleanique Academy" width="400" height="220" loading="eager">
            </div>
            <div class="hero-gallery-item">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/gallery-3.webp' ); ?>" alt="Pelatihan Kimia Cleanique Academy" width="400" height="220" loading="eager">
            </div>
            <div class="hero-gallery-item">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/gallery-4.webp' ); ?>" alt="Household Chemical Cleanique Academy" width="400" height="220" loading="eager">
            </div>
            <div class="hero-gallery-item">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/gallery-5.webp' ); ?>" alt="Laundry Chemical Cleanique Academy" width="400" height="220" loading="eager">
            </div>
            <div class="hero-gallery-item">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/gallery-6.webp' ); ?>" alt="Automotive Chemical Cleanique Academy" width="400" height="220" loading="eager">
            </div>
        </div>

        <!-- 3 Highlight Cards -->
        <div class="highlight-cards-row">
            <div class="highlight-card highlight-card-green">
                Digunakan kebutuhan harian di rumah, laundry, hotel resto dll.
            </div>
            <div class="highlight-card highlight-card-yellow">
                Lebih dari <strong>1.000.000 produk terjual</strong>, baik online maupun offline
            </div>
            <div class="highlight-card highlight-card-green">
                Disusun berdasarkan <strong>pengalaman lapangan & standar industri</strong> sejak tahun 2011
            </div>
        </div>

        <!-- Fully Admin-Editable Promo Section (Image + Text + Pill Button) -->
        <?php if ( $promo_image_url ) : ?>
            <div class="promo-banner-container">
                <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya mau registrasi: ' . $promo_text ) ); ?>" target="_blank" class="promo-banner-link">
                    <img src="<?php echo esc_url( $promo_image_url ); ?>" alt="Spesial Promo Pelatihan Cleanique Academy" class="promo-banner-image" width="800" height="350">
                </a>

                <?php if ( $promo_text ) : ?>
                    <p class="promo-banner-text"><?php echo wp_kses_post( $promo_text ); ?></p>
                <?php endif; ?>

                <?php if ( $promo_btn_label ) : ?>
                    <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya mau ambil promo pelatihan.' ) ); ?>" target="_blank" class="btn btn-pill-promo">
                        <?php echo esc_html( $promo_btn_label ); ?>
                    </a>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- 2. Overview Section with YouTube Video Embed -->
<section class="section section-alt">
    <div class="container">
        <div class="overview-grid">
            <div>
                <span class="section-subtitle">Profil Singkat</span>
                <h2 class="section-title" style="text-align: left; margin-bottom: 1.25rem;">Tentang Cleanique Academy</h2>
                <p style="font-size: 1.08rem; color: var(--color-text-main); line-height: 1.8;">
                    <strong>Cleanique Academy</strong> merupakan program unggulan dari <strong>PT Indotech Berkah Abadi</strong>, salah satu perusahaan lokal dari Yogyakarta. Melalui brand nya <strong>Cleanique Lab</strong> kami memberikan pelatihan, pembinaan pembuatan produk chemical kebersihan serta cara menggunakannya. Bagi calon mitra Cleanique Academy nantinya akan dibimbing oleh mentor sampai menguasai.
                </p>
                <div style="margin-top: 2rem;">
                    <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya mau konsultasi pendaftaran.' ) ); ?>" target="_blank" class="btn btn-whatsapp">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.157 4.228 4.228-1.157zm12.339-6.495c-.068-.113-.25-.181-.523-.317-.272-.136-1.61-.795-1.86-.886-.25-.091-.432-.136-.613.136-.182.272-.704.886-.863 1.067-.159.182-.318.204-.59.068-.272-.136-1.151-.424-2.193-1.353-.81-.723-1.357-1.616-1.516-1.888-.159-.272-.017-.419.119-.554.122-.122.272-.318.408-.477.136-.159.182-.272.272-.454.091-.182.045-.341-.023-.477-.068-.136-.613-1.477-.84-2.023-.222-.534-.447-.461-.613-.469-.159-.008-.341-.01-.523-.01s-.477.068-.727.341c-.25.272-.954.932-.954 2.273s.977 2.636 1.114 2.818c.136.182 1.923 2.936 4.659 4.116.65.281 1.158.448 1.554.573.653.207 1.247.178 1.716.108.523-.078 1.61-.658 1.838-1.295.227-.636.227-1.181.159-1.295z"/></svg>
                        <span>Hubungi Kami</span>
                    </a>
                </div>
            </div>

            <!-- YouTube Video iFrame Embed -->
            <div>
                <div class="responsive-video-wrapper">
                    <iframe src="<?php echo esc_url( $video_url ); ?>" title="Pelatihan Bikin Sabun Cleanique Academy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3. Siapa yang Cocok Mengikuti Pelatihan Ini? -->
<section id="siapa-cocok" class="section" style="background-color: #f8fafc; padding: 3.25rem 0;">
    <div class="container" style="max-width: 1140px;">
        
        <!-- Section Header -->
        <div class="section-header" style="text-align: center; margin-bottom: 2rem;">
            <h2 class="section-title" style="font-size: 2.1rem; font-weight: 800; color: #0f172a; margin-bottom: 0.5rem; line-height: 1.3;">
                Siapa yang Cocok<br>
                <span style="color: #1e3a8a;">Mengikuti Pelatihan Kimia Ini?</span>
            </h2>
        </div>

        <!-- 2-Column Section Layout -->
        <div class="siapa-cocok-grid" style="display: grid; grid-template-columns: 270px 1fr; gap: 2rem; align-items: start;">
            
            <!-- LEFT COLUMN: Image Collage Illustration Card -->
            <div style="background: #ffffff; border-radius: 12px; padding: 1.5rem 1rem; box-shadow: 0 10px 25px rgba(0,0,0,0.05); border: 1px solid #e2e8f0; display: flex; flex-direction: column; align-items: center; position: relative;">
                <!-- Logo -->
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo.webp' ); ?>" alt="Cleanique Academy" style="height: 36px; width: auto; margin-bottom: 1.25rem; display: block;">
                
                <!-- Photo Collage Stack -->
                <div style="display: flex; flex-direction: column; gap: 0.75rem; width: 100%; position: relative;">
                    <div style="transform: rotate(-2deg); border-radius: 8px; overflow: hidden; box-shadow: 0 4px 10px rgba(0,0,0,0.06); border: 2px solid #ffffff;">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/gallery-1.webp' ); ?>" alt="Praktikum Pelatihan" style="width: 100%; height: 100px; object-fit: cover; display: block;">
                    </div>
                    <div style="transform: rotate(2deg); border-radius: 8px; overflow: hidden; box-shadow: 0 4px 10px rgba(0,0,0,0.06); border: 2px solid #ffffff;">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/gallery-2.webp' ); ?>" alt="Praktikum Pelatihan" style="width: 100%; height: 100px; object-fit: cover; display: block;">
                    </div>
                    <div style="transform: rotate(-2deg); border-radius: 8px; overflow: hidden; box-shadow: 0 4px 10px rgba(0,0,0,0.06); border: 2px solid #ffffff;">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/gallery-3.webp' ); ?>" alt="Praktikum Pelatihan" style="width: 100%; height: 100px; object-fit: cover; display: block;">
                    </div>
                    <div style="transform: rotate(2deg); border-radius: 8px; overflow: hidden; box-shadow: 0 4px 10px rgba(0,0,0,0.06); border: 2px solid #ffffff;">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/gallery-4.webp' ); ?>" alt="Praktikum Pelatihan" style="width: 100%; height: 100px; object-fit: cover; display: block;">
                    </div>
                </div>
            </div>

            <!-- RIGHT COLUMN: 2-Column Grid of Target Items with Blue Vector Icons -->
            <div class="siapa-cocok-items" style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 1.5rem 1.25rem;">
                
                <!-- Item 1: Facility Management -->
                <div style="display: flex; gap: 0.85rem; align-items: flex-start;">
                    <div style="width: 44px; height: 44px; min-width: 44px; background: #e0f2fe; color: #0284c7; border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
                    </div>
                    <div>
                        <h3 style="font-size: 0.92rem; font-weight: 700; color: #0f172a; margin-bottom: 0.25rem; line-height: 1.35;">Manajemen Fasilitas / Facility Management</h3>
                        <p style="font-size: 0.83rem; color: #64748b; line-height: 1.5; margin: 0;">Untuk pelatihan internal tim cleaning agar lebih efisien dan hemat penggunaan chemical.</p>
                    </div>
                </div>

                <!-- Item 2: Owner Jasa Kebersihan -->
                <div style="display: flex; gap: 0.85rem; align-items: flex-start;">
                    <div style="width: 44px; height: 44px; min-width: 44px; background: #e0f2fe; color: #0284c7; border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="3" width="15" height="13" rx="1"/><path d="M16 8h4l3 3v5h-7V8z"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg>
                    </div>
                    <div>
                        <h3 style="font-size: 0.92rem; font-weight: 700; color: #0f172a; margin-bottom: 0.25rem; line-height: 1.35;">Owner Jasa Kebersihan / Cleaning Service</h3>
                        <p style="font-size: 0.83rem; color: #64748b; line-height: 1.5; margin: 0;">Ingin membekali timnya agar lebih profesional dan mengurangi risiko kerusakan akibat salah pakai chemical.</p>
                    </div>
                </div>

                <!-- Item 3: Pelaku Usaha Laundry -->
                <div style="display: flex; gap: 0.85rem; align-items: flex-start;">
                    <div style="width: 44px; height: 44px; min-width: 44px; background: #e0f2fe; color: #0284c7; border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                    </div>
                    <div>
                        <h3 style="font-size: 0.92rem; font-weight: 700; color: #0f172a; margin-bottom: 0.25rem; line-height: 1.35;">Pelaku Usaha Laundry (Kiloan / Hotel / Industri)</h3>
                        <p style="font-size: 0.83rem; color: #64748b; line-height: 1.5; margin: 0;">Perlu memahami perbedaan chemical dan cara pakainya agar hasil cucian maksimal dan peralatan awet.</p>
                    </div>
                </div>

                <!-- Item 4: Distributor / Reseller -->
                <div style="display: flex; gap: 0.85rem; align-items: flex-start;">
                    <div style="width: 44px; height: 44px; min-width: 44px; background: #e0f2fe; color: #0284c7; border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 2v7.527l-5.32 8.512C4.108 19.011 4.793 20 5.967 20h12.066c1.174 0 1.859-.989 1.287-1.961L14 9.527V2h-4z"/><line x1="8.5" y1="2" x2="15.5" y2="2"/></svg>
                    </div>
                    <div>
                        <h3 style="font-size: 0.92rem; font-weight: 700; color: #0f172a; margin-bottom: 0.25rem; line-height: 1.35;">Distributor / Reseller Produk Chemical</h3>
                        <p style="font-size: 0.83rem; color: #64748b; line-height: 1.5; margin: 0;">Agar lebih paham produk yang dijual dan bisa memberikan edukasi ke klien.</p>
                    </div>
                </div>

                <!-- Item 5: Staf Housekeeping -->
                <div style="display: flex; gap: 0.85rem; align-items: flex-start;">
                    <div style="width: 44px; height: 44px; min-width: 44px; background: #e0f2fe; color: #0284c7; border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="2" width="16" height="20" rx="2" ry="2"/><line x1="9" y1="6" x2="9" y2="6.01"/><line x1="15" y1="6" x2="15" y2="6.01"/><line x1="9" y1="10" x2="9" y2="10.01"/><line x1="15" y1="10" x2="15" y2="10.01"/><line x1="9" y1="14" x2="9" y2="14.01"/><line x1="15" y1="14" x2="15" y2="14.01"/><line x1="9" y1="18" x2="15" y2="18"/></svg>
                    </div>
                    <div>
                        <h3 style="font-size: 0.92rem; font-weight: 700; color: #0f172a; margin-bottom: 0.25rem; line-height: 1.35;">Staf Housekeeping Hotel / Apartemen / Gedung</h3>
                        <p style="font-size: 0.83rem; color: #64748b; line-height: 1.5; margin: 0;">Butuh skill teknis dalam pembersihan dengan chemical di berbagai jenis permukaan.</p>
                    </div>
                </div>

                <!-- Item 6: UMKM Produk Homecare -->
                <div style="display: flex; gap: 0.85rem; align-items: flex-start;">
                    <div style="width: 44px; height: 44px; min-width: 44px; background: #e0f2fe; color: #0284c7; border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/><polyline points="3.27 6.96 12 12.01 20.73 6.96"/><line x1="12" y1="22.08" x2="12" y2="12"/></svg>
                    </div>
                    <div>
                        <h3 style="font-size: 0.92rem; font-weight: 700; color: #0f172a; margin-bottom: 0.25rem; line-height: 1.35;">UMKM Produk Homecare / Cleaning</h3>
                        <p style="font-size: 0.83rem; color: #64748b; line-height: 1.5; margin: 0;">Ingin memahami bahan aktif dan cara meracik produk dengan aman dan legal.</p>
                    </div>
                </div>

                <!-- Item 7: Tim Maintenance -->
                <div style="display: flex; gap: 0.85rem; align-items: flex-start;">
                    <div style="width: 44px; height: 44px; min-width: 44px; background: #e0f2fe; color: #0284c7; border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                    </div>
                    <div>
                        <h3 style="font-size: 0.92rem; font-weight: 700; color: #0f172a; margin-bottom: 0.25rem; line-height: 1.35;">Tim Maintenance Bangunan / Office Boy Perusahaan</h3>
                        <p style="font-size: 0.83rem; color: #64748b; line-height: 1.5; margin: 0;">Kursus ini membantu tim internal seperti maintenance dan OB memahami cara penggunaan chemical yang benar, aman, dan hemat.</p>
                    </div>
                </div>

                <!-- Item 8: Individu / Karir -->
                <div style="display: flex; gap: 0.85rem; align-items: flex-start;">
                    <div style="width: 44px; height: 44px; min-width: 44px; background: #e0f2fe; color: #0284c7; border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                    </div>
                    <div>
                        <h3 style="font-size: 0.92rem; font-weight: 700; color: #0f172a; margin-bottom: 0.25rem; line-height: 1.35;">Individu yang Ingin Berkarier di Bidang Cleaning atau Housekeeping</h3>
                        <p style="font-size: 0.83rem; color: #64748b; line-height: 1.5; margin: 0;">Peluang kerja lebih terbuka jika memiliki skill dan sertifikat training chemical.</p>
                    </div>
                </div>

                <!-- Item 9: Pensiunan & Wirausaha -->
                <div class="siapa-cocok-item-full" style="display: flex; gap: 0.85rem; align-items: flex-start; grid-column: span 2;">
                    <div style="width: 44px; height: 44px; min-width: 44px; background: #e0f2fe; color: #0284c7; border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="5" r="2"/><path d="M12 7v10"/><path d="M8 11h8"/><path d="M10 22l2-5 2 5"/></svg>
                    </div>
                    <div>
                        <h3 style="font-size: 0.92rem; font-weight: 700; color: #0f172a; margin-bottom: 0.25rem; line-height: 1.35;">Pensiunan yang Ingin Membuka Usaha</h3>
                        <p style="font-size: 0.83rem; color: #64748b; line-height: 1.5; margin: 0;">Pelatihan kimia ini bisa menjadi langkah awal memulai usaha laundry, cleaning service, industri atau distribusi chemical dengan pemahaman produk yang benar dan prospek usaha yang nyata.</p>
                    </div>
                </div>

            </div>

        </div>

        <!-- Bottom Yellow CTA Button -->
        <div style="text-align: center; margin-top: 2.25rem;">
            <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya ingin konsultasi seputar pelatihan kimia.' ) ); ?>" target="_blank" style="display: inline-block; background: #ffd000; color: #0f172a; font-weight: 800; font-size: 0.98rem; padding: 0.75rem 2.5rem; border-radius: 8px; text-decoration: none; box-shadow: 0 6px 16px rgba(255, 208, 0, 0.3); transition: all 0.2s ease;">
                Hubungi Kami
            </a>
        </div>

    </div>
</section>

<style>
@media (max-width: 900px) {
  .siapa-cocok-grid {
    grid-template-columns: 1fr !important;
  }
  .siapa-cocok-items {
    grid-template-columns: 1fr !important;
  }
  .siapa-cocok-item-full {
    grid-column: span 1 !important;
  }
}
</style>

<!-- 4. 6 Alasan Mengapa Harus Memilih Cleanique Academy (ACCORDION DROPDOWN) -->
<section id="alasan-memilih" class="section" style="background: #ffffff; padding: 3.25rem 0;">
    <div class="container" style="max-width: 980px;">
        <div class="section-header" style="text-align: center; margin-bottom: 2.25rem;">
            <span class="section-subtitle" style="color: #0284c7; font-weight: 700; text-transform: uppercase; letter-spacing: 0.1em; font-size: 0.82rem; display: block; margin-bottom: 0.4rem;">Keunggulan Pelatihan</span>
            <h2 class="section-title" style="font-size: 2rem; font-weight: 800; color: #0f172a; margin: 0;">
                6 Alasan Mengapa Harus Memilih Pelatihan Kimia Cleanique Academy
            </h2>
        </div>

        <div class="reasons-accordion-group" style="display: flex; flex-direction: column; gap: 1rem;">
            
            <!-- Item 1 -->
            <details class="accordion-item reason-accordion-item" open>
                <summary class="accordion-header reason-accordion-header" style="padding: 1.15rem 1.35rem; display: flex; align-items: center; justify-content: space-between; gap: 1rem; cursor: pointer; list-style: none; user-select: none;">
                    <div style="display: flex; flex-direction: column; align-items: flex-start; gap: 0.35rem; flex: 1;">
                        <span style="display: inline-block; background: #e0f2fe; color: #0369a1; font-size: 0.72rem; font-weight: 800; text-transform: uppercase; padding: 0.2rem 0.6rem; border-radius: 6px;">Eksis Sejak 2011</span>
                        <span style="font-size: 1.05rem; font-weight: 800; color: #0f172a;">1. Belajar Langsung dari Produsen Yang Berpengalaman</span>
                    </div>
                    <div class="toggle-plus-minus" style="width: 28px; height: 28px; border-radius: 50%; background: #f0f9ff; display: flex; align-items: center; justify-content: center; flex-shrink: 0; transition: all 0.2s ease;">
                        <svg class="plus-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#0284c7" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                        <svg class="minus-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#0284c7" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="display: none;"><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    </div>
                </summary>
                <div class="accordion-content reason-accordion-content" style="padding: 1.25rem 1.35rem; border-top: 1px solid #f1f5f9; background: #fafafa;">
                    <div style="display: flex; gap: 1.5rem; flex-wrap: wrap; align-items: center;">
                        <div style="width: 190px; min-width: 170px; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.08);">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/gallery-1.webp' ); ?>" alt="Belajar dari Produsen Berpengalaman" style="width: 100%; height: 135px; object-fit: cover; display: block;">
                        </div>
                        <div style="flex: 1; min-width: 240px;">
                            <p style="font-size: 0.92rem; color: #475569; line-height: 1.65; margin: 0;">Kami Perusahaan Chemical yang berdiri sejak 2011, dan dari awal berdiri sampai saat ini kami telah melewati banyak sekali trial and error, dan sekarang kamu ngga perlu lagi mengalami masa-masa itu, jika kamu mengikuti pelatihan dari kami. Jadi masa sulit kami telah lewat, kini kamu tinggal menikmati hasilnya dengan ikut pelatihan dari kami.</p>
                        </div>
                    </div>
                </div>
            </details>

            <!-- Item 2 -->
            <details class="accordion-item reason-accordion-item">
                <summary class="accordion-header reason-accordion-header" style="padding: 1.15rem 1.35rem; display: flex; align-items: center; justify-content: space-between; gap: 1rem; cursor: pointer; list-style: none; user-select: none;">
                    <div style="display: flex; flex-direction: column; align-items: flex-start; gap: 0.35rem; flex: 1;">
                        <span style="display: inline-block; background: #dcfce7; color: #15803d; font-size: 0.72rem; font-weight: 800; text-transform: uppercase; padding: 0.2rem 0.6rem; border-radius: 6px;">Dominan Praktikum</span>
                        <span style="font-size: 1.05rem; font-weight: 800; color: #0f172a;">2. Lengkap, Pelatihan Meliputi Teori dan Juga Praktek</span>
                    </div>
                    <div class="toggle-plus-minus" style="width: 28px; height: 28px; border-radius: 50%; background: #f0f9ff; display: flex; align-items: center; justify-content: center; flex-shrink: 0; transition: all 0.2s ease;">
                        <svg class="plus-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#0284c7" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                        <svg class="minus-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#0284c7" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="display: none;"><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    </div>
                </summary>
                <div class="accordion-content reason-accordion-content" style="padding: 1.25rem 1.35rem; border-top: 1px solid #f1f5f9; background: #fafafa;">
                    <div style="display: flex; gap: 1.5rem; flex-wrap: wrap; align-items: center;">
                        <div style="width: 190px; min-width: 170px; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.08);">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/gallery-2.webp' ); ?>" alt="Lengkap Teori dan Praktek" style="width: 100%; height: 135px; object-fit: cover; display: block;">
                        </div>
                        <div style="flex: 1; min-width: 240px;">
                            <p style="font-size: 0.92rem; color: #475569; line-height: 1.65; margin: 0;">Teori itu biasa dilakukan oleh si pembuat pelatihan bahkan sampai panjang lebar sampai pada akhirnya yang diajarkan hanya mendapatkan teori banyak minim praktek. Kami mengedepankan training dengan metode Praktek diperbanyak ketimbang teori, saat teori yang didapat itu kurang, kamu bisa bertanya sampai kamu bisa memahaminya.</p>
                        </div>
                    </div>
                </div>
            </details>

            <!-- Item 3 -->
            <details class="accordion-item reason-accordion-item">
                <summary class="accordion-header reason-accordion-header" style="padding: 1.15rem 1.35rem; display: flex; align-items: center; justify-content: space-between; gap: 1rem; cursor: pointer; list-style: none; user-select: none;">
                    <div style="display: flex; flex-direction: column; align-items: flex-start; gap: 0.35rem; flex: 1;">
                        <span style="display: inline-block; background: #fef3c7; color: #b45309; font-size: 0.72rem; font-weight: 800; text-transform: uppercase; padding: 0.2rem 0.6rem; border-radius: 6px;">Terbukti Laku di Pasar</span>
                        <span style="font-size: 1.05rem; font-weight: 800; color: #0f172a;">3. Produk Chemical Kami Sudah Terjual Lebih dari 1 Juta Unit</span>
                    </div>
                    <div class="toggle-plus-minus" style="width: 28px; height: 28px; border-radius: 50%; background: #f0f9ff; display: flex; align-items: center; justify-content: center; flex-shrink: 0; transition: all 0.2s ease;">
                        <svg class="plus-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#0284c7" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                        <svg class="minus-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#0284c7" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="display: none;"><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    </div>
                </summary>
                <div class="accordion-content reason-accordion-content" style="padding: 1.25rem 1.35rem; border-top: 1px solid #f1f5f9; background: #fafafa;">
                    <div style="display: flex; gap: 1.5rem; flex-wrap: wrap; align-items: center;">
                        <div style="width: 190px; min-width: 170px; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.08);">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/gallery-3.webp' ); ?>" alt="Produk Terjual 1 Juta Unit" style="width: 100%; height: 135px; object-fit: cover; display: block;">
                        </div>
                        <div style="flex: 1; min-width: 240px;">
                            <p style="font-size: 0.92rem; color: #475569; line-height: 1.65; margin: 0;">Banyak kursus yang menawarkan produk chemical, dengan penawaran menggiurkan yang biasanya lebih murah. Tapi Cek dulu sebelum mengambil penawaran itu, punyakah produk yang dijual di pasaran atau hanya sekelompok orang yang hanya tahu-tahu saja tanpa ada bukti produk yang dia jual atau dipasarkan. Buktikan dulu INGAT!!! Kami bukan distributor parfum, deterjen, pelembut dan pembersih lain.</p>
                        </div>
                    </div>
                </div>
            </details>

            <!-- Item 4 -->
            <details class="accordion-item reason-accordion-item">
                <summary class="accordion-header reason-accordion-header" style="padding: 1.15rem 1.35rem; display: flex; align-items: center; justify-content: space-between; gap: 1rem; cursor: pointer; list-style: none; user-select: none;">
                    <div style="display: flex; flex-direction: column; align-items: flex-start; gap: 0.35rem; flex: 1;">
                        <span style="display: inline-block; background: #f3e8ff; color: #7e22ce; font-size: 0.72rem; font-weight: 800; text-transform: uppercase; padding: 0.2rem 0.6rem; border-radius: 6px;">Trainer &amp; Praktisi Senior</span>
                        <span style="font-size: 1.05rem; font-weight: 800; color: #0f172a;">4. Tim Ahli, Trainer Sudah Berpengalaman di Dunia Produksi Chemical</span>
                    </div>
                    <div class="toggle-plus-minus" style="width: 28px; height: 28px; border-radius: 50%; background: #f0f9ff; display: flex; align-items: center; justify-content: center; flex-shrink: 0; transition: all 0.2s ease;">
                        <svg class="plus-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#0284c7" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                        <svg class="minus-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#0284c7" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="display: none;"><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    </div>
                </summary>
                <div class="accordion-content reason-accordion-content" style="padding: 1.25rem 1.35rem; border-top: 1px solid #f1f5f9; background: #fafafa;">
                    <div style="display: flex; gap: 1.5rem; flex-wrap: wrap; align-items: center;">
                        <div style="width: 190px; min-width: 170px; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.08);">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/gallery-4.webp' ); ?>" alt="Tim Ahli Berpengalaman" style="width: 100%; height: 135px; object-fit: cover; display: block;">
                        </div>
                        <div style="flex: 1; min-width: 240px;">
                            <div style="font-size: 0.9rem; color: #475569; line-height: 1.6;">
                                1. Kami BUKAN pemain baru di dunia bisnis laundry, Kami telah berdiri dan eksis sejak tahun 2011 dengan website pertama kami <a href="https://www.peluangusahalaundry.com" target="_blank" style="color: #0284c7; font-weight: 700; text-decoration: underline;">peluangusahalaundry.com</a>.<br>
                                2. Untuk website inipun Kami sudah ada sejak tahun 2013.<br>
                                3. Kami telah melahirkan banyak pengusaha-pengusaha laundry sejak tahun 2012, baik itu sebagai pelaku jasa laundry yang membuka outlet laundry maupun sebagai produsen chemical / pewangi / deterjen laundry yang mungkin produknya juga sudah pernah Anda beli.
                            </div>
                        </div>
                    </div>
                </div>
            </details>

            <!-- Item 5 -->
            <details class="accordion-item reason-accordion-item">
                <summary class="accordion-header reason-accordion-header" style="padding: 1.15rem 1.35rem; display: flex; align-items: center; justify-content: space-between; gap: 1rem; cursor: pointer; list-style: none; user-select: none;">
                    <div style="display: flex; flex-direction: column; align-items: flex-start; gap: 0.35rem; flex: 1;">
                        <span style="display: inline-block; background: #ffe4e6; color: #be123c; font-size: 0.72rem; font-weight: 800; text-transform: uppercase; padding: 0.2rem 0.6rem; border-radius: 6px;">Cepat &amp; Praktis</span>
                        <span style="font-size: 1.05rem; font-weight: 800; color: #0f172a;">5. Efisien, Tidak Harus Kuliah Jurusan Kimia untuk Bisa Membuat Produk Chemical</span>
                    </div>
                    <div class="toggle-plus-minus" style="width: 28px; height: 28px; border-radius: 50%; background: #f0f9ff; display: flex; align-items: center; justify-content: center; flex-shrink: 0; transition: all 0.2s ease;">
                        <svg class="plus-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#0284c7" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                        <svg class="minus-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#0284c7" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="display: none;"><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    </div>
                </summary>
                <div class="accordion-content reason-accordion-content" style="padding: 1.25rem 1.35rem; border-top: 1px solid #f1f5f9; background: #fafafa;">
                    <div style="display: flex; gap: 1.5rem; flex-wrap: wrap; align-items: center;">
                        <div style="width: 190px; min-width: 170px; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.08);">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/gallery-5.webp' ); ?>" alt="Efisien Tanpa Kuliah Kimia" style="width: 100%; height: 135px; object-fit: cover; display: block;">
                        </div>
                        <div style="flex: 1; min-width: 240px;">
                            <p style="font-size: 0.9rem; color: #475569; line-height: 1.6; margin: 0 0 0.5rem 0;">Sadar nggak sih? Banyak orang mengira harus kuliah jurusan kimia dulu untuk bisa membuat produk chemical sendiri. Padahal, untuk kebutuhan usaha laundry, Anda bisa mempelajari dasar-dasar formulasi, fungsi bahan, hingga cara pembuatannya hanya dalam waktu 1–2 hari melalui pelatihan ini.</p>
                            <div style="font-size: 0.88rem; font-weight: 700; color: #334155; margin-bottom: 0.25rem;">Setelah mengikuti pelatihan, Anda bisa:</div>
                            <ol style="margin: 0; padding-left: 1.2rem; font-size: 0.85rem; color: #475569; line-height: 1.5;">
                                <li>Membuka jasa cleaning service rumahan atau profesional.</li>
                                <li>Menjadi reseller atau agen produk chemical.</li>
                                <li>Menawarkan layanan konsultasi atau training ke komunitas Anda.</li>
                                <li>Menambah layanan baru di usaha laundry, office cleaning, atau homecare.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </details>

            <!-- Item 6 -->
            <details class="accordion-item reason-accordion-item">
                <summary class="accordion-header reason-accordion-header" style="padding: 1.15rem 1.35rem; display: flex; align-items: center; justify-content: space-between; gap: 1rem; cursor: pointer; list-style: none; user-select: none;">
                    <div style="display: flex; flex-direction: column; align-items: flex-start; gap: 0.35rem; flex: 1;">
                        <span style="display: inline-block; background: #ccfbf1; color: #0f766e; font-size: 0.72rem; font-weight: 800; text-transform: uppercase; padding: 0.2rem 0.6rem; border-radius: 6px;">Bimbingan Berkelanjutan</span>
                        <span style="font-size: 1.05rem; font-weight: 800; color: #0f172a;">6. Ekosistem Bisnis dan Bimbingan Jangka Panjang</span>
                    </div>
                    <div class="toggle-plus-minus" style="width: 28px; height: 28px; border-radius: 50%; background: #f0f9ff; display: flex; align-items: center; justify-content: center; flex-shrink: 0; transition: all 0.2s ease;">
                        <svg class="plus-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#0284c7" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                        <svg class="minus-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#0284c7" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="display: none;"><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    </div>
                </summary>
                <div class="accordion-content reason-accordion-content" style="padding: 1.25rem 1.35rem; border-top: 1px solid #f1f5f9; background: #fafafa;">
                    <div style="display: flex; gap: 1.5rem; flex-wrap: wrap; align-items: center;">
                        <div style="width: 190px; min-width: 170px; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.08);">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/gallery-6.webp' ); ?>" alt="Ekosistem Bisnis dan Bimbingan Jangka Panjang" style="width: 100%; height: 135px; object-fit: cover; display: block;">
                        </div>
                        <div style="flex: 1; min-width: 240px;">
                            <p style="font-size: 0.92rem; color: #475569; line-height: 1.65; margin: 0;">Kami tidak membiarkan Anda berjuang sendirian setelah kelas selesai. Kami menyediakan akses jaringan ke sesama pengusaha dan mitra yang sudah berhasil di lapangan. Anda langsung masuk ke dalam ekosistem di mana Anda bisa scale up, mencari partner distribusi, dan merancang strategi komersial. Fokusnya bukan sekadar produksi, tapi percepatan meraih keuntungan bisnis berkelanjutan.</p>
                        </div>
                    </div>
                </div>
            </details>

        </div>
    </div>
</section>

<style>
.reason-card:hover {
  transform: translateY(-2px);
  box-shadow: 0 12px 24px rgba(0,0,0,0.08) !important;
}
.reason-card:hover .reason-img-wrap img {
  transform: scale(1.05);
}
.reason-img-wrap img {
  transition: transform 0.4s ease;
}
@media (max-width: 900px) {
  .reasons-grid {
    grid-template-columns: 1fr !important;
  }
}
@media (max-width: 640px) {
  .reason-card {
    flex-direction: column !important;
  }
  .reason-img-wrap {
    width: 100% !important;
    height: 150px !important;
  }
}
</style>

<!-- 5. Yang Anda Dapatkan Dari Pelatihan Ini -->
<section id="yang-didapat" class="section" style="background: #f8fafc; padding: 3.25rem 0;">
    <div class="container" style="max-width: 1040px;">
        
        <!-- Section Header -->
        <div class="section-header" style="text-align: center; margin-bottom: 2rem;">
            <h2 class="section-title" style="font-size: 2rem; font-weight: 800; color: #0f172a; margin: 0; line-height: 1.3;">
                Yang <span style="color: #1e3a8a;">Anda Dapatkan</span><br>
                Dari Pelatihan Kimia ini
            </h2>
        </div>

        <!-- TOP HERO CARD: Modul Pelatihan Lengkap (Cetak) -->
        <div class="get-item-card" style="background: #ffffff; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 6px 18px rgba(0,0,0,0.04); padding: 1.25rem; margin-bottom: 1.25rem; transition: all 0.3s ease;">
            <div style="width: 100%; height: 280px; border-radius: 8px; overflow: hidden; position: relative; margin-bottom: 1.25rem;">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-lab.png' ); ?>" alt="Modul Pelatihan Lengkap (Cetak)" style="width: 100%; height: 100%; object-fit: cover; display: block;">
            </div>
            <div style="text-align: center; max-width: 800px; margin: 0 auto; padding: 0.25rem 0.5rem 0.5rem 0.5rem;">
                <h3 style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin-bottom: 0.5rem;">Modul Pelatihan Lengkap (Cetak)</h3>
                <p style="font-size: 0.88rem; color: #64748b; line-height: 1.6; margin: 0;">Setiap peserta akan mendapatkan modul pelatihan cetak eksklusif yang disusun langsung oleh tim ahli dan praktisi di bidang chemical. Modul ini dirancang untuk menjadi panduan praktis, bukan hanya saat pelatihan, tapi juga bisa digunakan sebagai referensi kerja dan operasional di lapangan.</p>
            </div>
        </div>

        <!-- 2x2 GRID CARDS -->
        <div class="get-items-grid" style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 1.25rem;">
            
            <!-- Card 2: Pemahaman Mendalam Tentang Chemical -->
            <div class="get-item-card" style="background: #ffffff; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 6px 18px rgba(0,0,0,0.04); padding: 1rem; display: flex; flex-direction: column; transition: all 0.3s ease;">
                <div style="width: 100%; height: 190px; border-radius: 8px; overflow: hidden; margin-bottom: 1rem;">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/gallery-2.webp' ); ?>" alt="Pemahaman Mendalam Tentang Chemical" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                </div>
                <div style="text-align: center; padding: 0 0.4rem 0.5rem 0.4rem; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="font-size: 1.05rem; font-weight: 800; color: #0f172a; margin-bottom: 0.4rem;">Pemahaman Mendalam Tentang Chemical</h3>
                    <p style="font-size: 0.84rem; color: #64748b; line-height: 1.55; margin: 0;">Mengenal berbagai jenis bahan kimia (alkali, asam, netral), fungsi, cara pengenceran, serta standar penggunaannya di lapangan.</p>
                </div>
            </div>

            <!-- Card 3: Studi Kasus & Solusi Lapangan -->
            <div class="get-item-card" style="background: #ffffff; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 6px 18px rgba(0,0,0,0.04); padding: 1rem; display: flex; flex-direction: column; transition: all 0.3s ease;">
                <div style="width: 100%; height: 190px; border-radius: 8px; overflow: hidden; margin-bottom: 1rem;">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/gallery-3.webp' ); ?>" alt="Studi Kasus & Solusi Lapangan" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                </div>
                <div style="text-align: center; padding: 0 0.4rem 0.5rem 0.4rem; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="font-size: 1.05rem; font-weight: 800; color: #0f172a; margin-bottom: 0.4rem;">Studi Kasus & Solusi Lapangan</h3>
                    <p style="font-size: 0.84rem; color: #64748b; line-height: 1.55; margin: 0;">Belajar dari kasus nyata di dunia cleaning service dan laundry agar Anda tidak mengulangi kesalahan umum yang sering terjadi.</p>
                </div>
            </div>

            <!-- Card 4: Sertifikat Pelatihan Resmi -->
            <div class="get-item-card" style="background: #ffffff; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 6px 18px rgba(0,0,0,0.04); padding: 1rem; display: flex; flex-direction: column; transition: all 0.3s ease;">
                <div style="width: 100%; height: 190px; border-radius: 8px; overflow: hidden; margin-bottom: 1rem;">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/gallery-4.webp' ); ?>" alt="Sertifikat Pelatihan Resmi" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                </div>
                <div style="text-align: center; padding: 0 0.4rem 0.5rem 0.4rem; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="font-size: 1.05rem; font-weight: 800; color: #0f172a; margin-bottom: 0.4rem;">Sertifikat Pelatihan Resmi</h3>
                    <p style="font-size: 0.84rem; color: #64748b; line-height: 1.55; margin: 0;">Bukti kompetensi resmi dari Cleanique Academy untuk meningkatkan kredibilitas usaha & portofolio Anda.</p>
                </div>
            </div>

            <!-- Card 5: Bonus Formula & Pendampingan -->
            <div class="get-item-card" style="background: #ffffff; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 6px 18px rgba(0,0,0,0.04); padding: 1rem; display: flex; flex-direction: column; transition: all 0.3s ease;">
                <div style="width: 100%; height: 190px; border-radius: 8px; overflow: hidden; margin-bottom: 1rem;">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/gallery-6.webp' ); ?>" alt="Bonus Formula & Support Group" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                </div>
                <div style="text-align: center; padding: 0 0.4rem 0.5rem 0.4rem; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="font-size: 1.05rem; font-weight: 800; color: #0f172a; margin-bottom: 0.4rem;">Bonus Formula & Pendampingan</h3>
                    <p style="font-size: 0.84rem; color: #64748b; line-height: 1.55; margin: 0;">Akses ke grup alumni, konsultasi berkelanjutan pasca pelatihan, dan bonus resep formulasi tambahan siap pakai.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
.get-item-card:hover {
  transform: translateY(-2px);
  box-shadow: 0 12px 24px rgba(0,0,0,0.07) !important;
}
@media (max-width: 768px) {
  .get-items-grid {
    grid-template-columns: 1fr !important;
  }
}
</style>

<!-- 7. Testimonial Alumni Section -->
<section id="testimoni" class="section section-alt" style="padding: 3.25rem 0;">
    <div class="container">
        <div class="section-header" style="margin-bottom: 2rem;">
            <span class="section-subtitle">Apa Kata Mereka</span>
            <h2 class="section-title">Testimoni Alumni & Peserta Pelatihan</h2>
            <p class="section-description">Kesan dan pengalaman nyata dari para pengusaha dan praktisi setelah mengikuti pelatihan.</p>
        </div>

        <div class="grid grid-3" style="gap: 1.25rem;">
            <?php
            $testi_query = new WP_Query( array(
                'post_type'      => 'testimoni',
                'posts_per_page' => 9,
            ) );

            if ( $testi_query->have_posts() ) :
                while ( $testi_query->have_posts() ) : $testi_query->the_post();
                    $profesi = get_post_meta( get_the_ID(), '_cac_profesi', true );
                    $kota    = get_post_meta( get_the_ID(), '_cac_kota', true );
                    ?>
                    <div class="card" style="border-radius: 10px; padding: 1.25rem;">
                        <div class="star-rating" style="color: #f59e0b; margin-bottom: 0.75rem; display:flex; gap:0.25rem;">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        </div>
                        <div class="card-text" style="font-style: italic; line-height: 1.6;">"<?php echo esc_html( get_the_content() ); ?>"</div>
                        <div style="margin-top: auto; padding-top: 1rem; border-top: 1px solid var(--color-border);">
                            <strong style="display: block; color: var(--color-secondary);"><?php the_title(); ?></strong>
                            <span style="font-size: 0.85rem; color: var(--color-text-muted);"><?php echo esc_html( $profesi ? $profesi : 'Peserta' ); ?> <?php echo $kota ? '(' . esc_html( $kota ) . ')' : ''; ?></span>
                        </div>
                    </div>
                <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
    </div>
</section>

<!-- 8. Galeri Dokumentasi & Kegiatan Terbaru -->
<section class="section" style="padding: 3.25rem 0;">
    <div class="container">
        <div class="section-header" style="margin-bottom: 2rem;">
            <span class="section-subtitle">Dokumentasi & Event</span>
            <h2 class="section-title">Kegiatan Pelatihan Terbaru</h2>
            <p class="section-description">Bukti dokumentasi pelaksanaan kelas pelatihan di berbagai kota.</p>
        </div>

        <div class="grid grid-3" style="gap: 1.25rem;">
            <?php
            $kegiatan_query = new WP_Query( array(
                'post_type'      => 'kegiatan',
                'posts_per_page' => 9,
            ) );

            if ( $kegiatan_query->have_posts() ) :
                while ( $kegiatan_query->have_posts() ) : $kegiatan_query->the_post();
                    $tanggal   = get_post_meta( get_the_ID(), '_cac_tanggal_kegiatan', true );
                    $lokasi    = get_post_meta( get_the_ID(), '_cac_lokasi_detail', true );
                    $img_url   = cleanique_get_kegiatan_thumbnail_url( get_the_ID() );
                    $title_txt = get_the_title();
                    ?>
                    <div class="gallery-overlay-card" data-img-src="<?php echo esc_url( $img_url ); ?>" data-title="<?php echo esc_attr( $title_txt ); ?>" onclick="cleaniqueOpenLightboxFromCard(this)" style="cursor: pointer; border-radius: 10px;">
                        <div class="gallery-card-image-wrap">
                            <img src="<?php echo esc_url( $img_url ); ?>" alt="<?php echo esc_attr( $title_txt ); ?>">
                            <div class="gallery-card-badge-top">
                                <?php echo $tanggal ? esc_html( $tanggal ) : 'Kegiatan Academy'; ?>
                            </div>
                        </div>
                        <div class="gallery-card-overlay">
                            <div class="gallery-card-content">
                                <span class="gallery-card-lokasi"><?php echo $lokasi ? esc_html( $lokasi ) : 'Indonesia'; ?></span>
                                <h3 class="gallery-card-title" style="color: #ffffff;"><?php the_title(); ?></h3>
                                <p class="gallery-card-desc"><?php echo esc_html( wp_trim_words( get_the_excerpt() ? get_the_excerpt() : get_the_content(), 15 ) ); ?></p>
                            </div>
                        </div>
                    </div>
                <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
    </div>
</section>

<!-- 9. Promo Investasi Pelatihan (Program Section) -->
<section id="program-unggulan" class="section" style="background-color: #11262d; color: #ffffff; padding: 3.5rem 0; overflow: hidden;">
    <div class="container" style="max-width: 1080px;">
        
        <!-- Header Promo Section -->
        <div style="text-align: center; max-width: 800px; margin: 0 auto 2.25rem auto;">
            <h2 style="font-family: var(--font-heading); font-size: 2rem; font-weight: 800; color: #ffffff; margin-bottom: 0.75rem;">
                Promo Investasi Pelatihan Bulan <?php echo date_i18n('F Y'); ?>
            </h2>
            <p style="font-size: 0.92rem; line-height: 1.65; color: #94a3b8; margin: 0;">
                Training diadakan di Jogja setiap akhir pekan, <strong>Sabtu - Minggu</strong>. Materi pelatihan pembuatan chemical laundry mengacu pada formula baku yang biasa dibuat oleh para produsen chemical laundry, baik formula yang kompleks maupun yang sangat sederhana. Formula telah kami riset berdasarkan efisiensi, kegunaan, dan kepentingan yang dipandang dari berbagai sisi. Ada dua kelas utama yang dapat Anda pilih:
            </p>
        </div>

        <!-- GRID UTAMA BARIS 1: KELAS KOLEKTIF & KELAS PRIVAT -->
        <div class="grid grid-2" style="gap: 1.5rem; margin-bottom: 1.5rem; align-items: stretch;">
            
            <!-- KELAS KOLEKTIF -->
            <div class="program-card-box">
                <div style="text-align: center; margin-bottom: 1.25rem;">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo.webp' ); ?>" alt="Cleanique Academy" style="height: 38px; margin: 0 auto 0.85rem auto; display: block;">
                    <h3 style="font-family: var(--font-heading); font-size: 1.25rem; font-weight: 800; letter-spacing: 0.05em; color: #0f172a; text-transform: uppercase;">KELAS KOLEKTIF</h3>
                </div>

                <p style="font-size: 0.86rem; line-height: 1.55; color: #475569; text-align: center; margin-bottom: 1.25rem;">
                    Kelas terdiri dari minimal 2 orang sampai dengan 4 orang, merupakan pilihan ekonomis bagi Anda yang memiliki biaya terbatas tetapi ingin memiliki kemampuan meracik bahan kimia laundry. Pelatihan dilaksanakan selama <strong>1 hari</strong>. Biaya pelatihan sebesar:
                </p>

                <div style="text-align: center; margin-bottom: 1.5rem;">
                    <span style="display: block; color: #dc2626; font-weight: 700; font-size: 0.82rem; font-style: italic; margin-bottom: 0.15rem;">*Harga Promo</span>
                    <div style="text-decoration: line-through; color: #64748b; font-weight: 700; font-size: 1rem;">Rp 6.500.000,-</div>
                    <div style="font-size: 1.95rem; font-weight: 800; color: #15803d; margin-top: 0.15rem;">Rp 4.300.000,-</div>
                </div>

                <!-- Checklist Fasilitas -->
                <ul style="list-style: none; padding: 0; margin: 0 0 1.5rem 0; display: flex; flex-direction: column; gap: 0.5rem; font-size: 0.85rem; color: #334155;">
                    <li style="display: flex; align-items: center; gap: 0.6rem; background: #f8fafc; padding: 0.45rem 0.75rem; border-radius: 6px;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Akomodasi penginapan</span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 0.6rem; background: #f1f5f9; padding: 0.45rem 0.75rem; border-radius: 6px;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Makan siang (lunch)</span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 0.6rem; background: #f8fafc; padding: 0.45rem 0.75rem; border-radius: 6px;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Coffee break</span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 0.6rem; background: #f1f5f9; padding: 0.45rem 0.75rem; border-radius: 6px;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Sertifikat pelatihan</span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 0.6rem; background: #f8fafc; padding: 0.45rem 0.75rem; border-radius: 6px;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>4 formula</span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 0.6rem; background: #f1f5f9; padding: 0.45rem 0.75rem; border-radius: 6px;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Modul materi pelatihan</span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 0.6rem; background: #fef08a; padding: 0.5rem 0.75rem; border-radius: 6px; font-weight: 800; color: #854d0e;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#ca8a04" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Mystery Box</span>
                    </li>
                </ul>

                <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya berminat mendaftar Kelas Kolektif promo Rp 4.300.000.' ) ); ?>" target="_blank" class="btn btn-whatsapp" style="margin-top: auto; width: 100%; justify-content: center; padding: 0.8rem; font-weight: 800; border-radius: 8px;">
                    Daftar Kelas Kolektif
                </a>
            </div>

            <!-- KELAS PRIVAT -->
            <div class="program-card-box">
                
                <!-- Sleek Top Badge Pill (Non-overflowing) -->
                <div style="background: #dc2626; color: #ffffff; font-size: 0.72rem; font-weight: 800; text-transform: uppercase; padding: 0.3rem 0.75rem; border-radius: 6px; width: fit-content; margin: 0 auto 0.75rem auto; box-shadow: 0 4px 8px rgba(220, 38, 38, 0.25); letter-spacing: 0.04em;">
                    Bonus Cara Menghitung HPP
                </div>

                <div style="text-align: center; margin-bottom: 1.25rem;">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo.webp' ); ?>" alt="Cleanique Academy" style="height: 38px; margin: 0 auto 0.85rem auto; display: block;">
                    <h3 style="font-family: var(--font-heading); font-size: 1.25rem; font-weight: 800; letter-spacing: 0.05em; color: #0f172a; text-transform: uppercase;">KELAS PRIVAT</h3>
                </div>

                <p style="font-size: 0.86rem; line-height: 1.55; color: #475569; text-align: center; margin-bottom: 1.25rem;">
                    Bagi Anda yang menginginkan privasi dan keleluasaan, kelas ini akan menjadi kelas pribadi Anda dengan waktu yang lebih lega. Waktu penyelenggaraan kelas privat fleksibel sesuai dengan kesepakatan dengan durasi maksimal <strong>2 hari</strong>. Biaya pelatihan sebesar:
                </p>

                <div style="text-align: center; margin-bottom: 1.5rem;">
                    <span style="display: block; color: #dc2626; font-weight: 700; font-size: 0.82rem; font-style: italic; margin-bottom: 0.15rem;">*Harga Promo</span>
                    <div style="text-decoration: line-through; color: #64748b; font-weight: 700; font-size: 1rem;">Rp 15.000.000,-</div>
                    <div style="font-size: 1.95rem; font-weight: 800; color: #15803d; margin-top: 0.15rem;">Rp 9.700.000,-</div>
                </div>

                <!-- Checklist Fasilitas Privat -->
                <ul style="list-style: none; padding: 0; margin: 0 0 1.5rem 0; display: flex; flex-direction: column; gap: 0.5rem; font-size: 0.85rem; color: #334155;">
                    <li style="display: flex; align-items: center; gap: 0.6rem; background: #f8fafc; padding: 0.45rem 0.75rem; border-radius: 6px;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Fasilitas antar jemput stasiun/hotel/lokasi</span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 0.6rem; background: #f1f5f9; padding: 0.45rem 0.75rem; border-radius: 6px;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Akomodasi hotel berbintang 1 kamar 1 orang</span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 0.6rem; background: #f8fafc; padding: 0.45rem 0.75rem; border-radius: 6px;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Makan siang (lunch) & Coffee break</span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 0.6rem; background: #f1f5f9; padding: 0.45rem 0.75rem; border-radius: 6px;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Wisata kuliner (Dinner)</span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 0.6rem; background: #f8fafc; padding: 0.45rem 0.75rem; border-radius: 6px;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Sertifikat pelatihan & Modul materi</span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 0.6rem; background: #f1f5f9; padding: 0.45rem 0.75rem; border-radius: 6px;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Bebas pilih 6 formula</span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 0.6rem; background: #fef08a; padding: 0.5rem 0.75rem; border-radius: 6px; font-weight: 800; color: #854d0e;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#ca8a04" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Mystery Box</span>
                    </li>
                </ul>

                <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya berminat mendaftar Kelas Privat promo Rp 9.700.000.' ) ); ?>" target="_blank" class="btn btn-whatsapp" style="margin-top: auto; width: 100%; justify-content: center; padding: 0.8rem; font-weight: 800; border-radius: 8px;">
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
                <p style="font-size: 0.86rem; line-height: 1.55; color: #475569; margin-bottom: 1.25rem;">
                    Ingin belajar membuat 1 jenis produk chemical sesuai kebutuhan Anda? Kelas ini cocok untuk Anda yang ingin belajar lebih fokus pada produk tanpa mengambil paket lengkap. <strong>Konsultasikan kebutuhan Anda</strong> dengan CS untuk mengetahui produk yang tersedia dan penawaran terbaik.
                </p>
                <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya ingin tanya info Kelas 1 Produk.' ) ); ?>" target="_blank" style="margin-top: auto; background: #facc15; color: #0f172a; font-weight: 800; font-size: 0.9rem; padding: 0.75rem 1.25rem; border-radius: 8px; text-decoration: none; display: block; transition: all 0.2s ease;">
                    Tanya CS Sekarang
                </a>
            </div>

            <!-- KELAS CUSTOM -->
            <div class="program-card-box" style="text-align: center;">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo.webp' ); ?>" alt="Cleanique Academy" style="height: 34px; margin: 0 auto 0.85rem auto; display: block;">
                <h3 style="font-family: var(--font-heading); font-size: 1.15rem; font-weight: 800; letter-spacing: 0.05em; color: #0f172a; text-transform: uppercase; margin-bottom: 0.75rem;">KELAS CUSTOM</h3>
                <p style="font-size: 0.86rem; line-height: 1.55; color: #475569; margin-bottom: 1.25rem;">
                    Punya kebutuhan khusus? Ingin mempelajari beberapa produk atau formula tertentu? Kami menyediakan kelas yang dapat disesuaikan dengan kebutuhan bisnis, jumlah peserta, hingga materi pelatihan. <strong>Diskusikan kebutuhan Anda</strong> bersama tim kami untuk mendapatkan rekomendasi kelas dan penawaran terbaik.
                </p>
                <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya ingin konsultasi Kelas Custom.' ) ); ?>" target="_blank" style="margin-top: auto; background: #facc15; color: #0f172a; font-weight: 800; font-size: 0.9rem; padding: 0.75rem 1.25rem; border-radius: 8px; text-decoration: none; display: block; transition: all 0.2s ease;">
                    Tanya CS Sekarang
                </a>
            </div>

        </div>

        <!-- ADD-ON BANNER -->
        <div style="text-align: center; margin-bottom: 1.75rem; background: rgba(255, 255, 255, 0.06); border: 1px dashed rgba(255, 255, 255, 0.25); border-radius: 10px; padding: 1rem 1.25rem;">
            <h4 style="font-size: 1.05rem; font-weight: 800; color: #ffffff; margin-bottom: 0.35rem;">Add On : Tambah materi 1 juta per-formula</h4>
            <div style="display: flex; align-items: center; justify-content: center; gap: 0.6rem; flex-wrap: wrap;">
                <span style="text-decoration: line-through; color: #94a3b8; font-size: 0.95rem; font-weight: 700;">Rp 1.500.000,-</span>
                <span style="font-size: 1.5rem; font-weight: 800; color: #38bdf8;">Rp 1.000.000,-</span>
            </div>
        </div>

        <!-- QUOTE CALLOUT BOX (IPHONE QUOTE) -->
        <div style="max-width: 820px; margin: 0 auto 2rem auto; border: 1px solid rgba(255, 255, 255, 0.25); border-radius: 12px; padding: 1.35rem 1.25rem; background: rgba(15, 23, 42, 0.5); text-align: center; position: relative;">
            <p style="font-style: italic; font-size: 0.9rem; line-height: 1.65; color: #e2e8f0; margin-bottom: 0.65rem;">
                “Investasi terbaik bukanlah barang, melainkan ilmu. Dengan Rp9 juta, Anda bisa membeli satu iPhone nilainya akan terus menurun. Namun dengan Rp9 juta untuk mengikuti pelatihan pembuatan sabun kami, Anda mendapatkan bekal ilmu dan keterampilan yang bisa menghasilkan, bahkan membuka jalan untuk membeli 10 iPhone atau lebih.”
            </p>
            <strong style="color: #facc15; font-size: 0.9rem; display: block;">
                Ilmu tidak habis dipakai, justru terus bertambah nilainya.
            </strong>
        </div>

        <!-- MAIN BOTTOM CTA BUTTON -->
        <div style="text-align: center;">
            <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya berminat ambil promo investasi pelatihan.' ) ); ?>" target="_blank" style="display: inline-block; background: #ffffff; color: #0f172a; font-weight: 800; font-size: 0.95rem; padding: 0.85rem 2rem; border-radius: 8px; text-decoration: none; box-shadow: 0 8px 20px rgba(255,255,255,0.12); transition: all 0.2s ease;">
                Dapatkan Promo Pelatihan <?php echo date('Y'); ?>!
            </a>
        </div>

    </div>
</section>

<style>
.program-card-box {
  background: #ffffff;
  border-radius: 12px;
  padding: 1.75rem 1.5rem;
  color: #1e293b;
  display: flex;
  flex-direction: column;
  position: relative;
  box-shadow: 0 15px 30px rgba(0,0,0,0.2);
  width: 100%;
  box-sizing: border-box;
}
@media (max-width: 768px) {
  .program-card-box {
    padding: 1.25rem 1rem !important;
  }
  #program-unggulan h2 {
    font-size: 1.5rem !important;
  }
  #program-unggulan .container {
    padding-left: 1rem !important;
    padding-right: 1rem !important;
  }
}
</style>

<?php
get_footer();

