<?php
/**
 * Template Name: Custom Front Page Landing Page
 */
get_header();

// Customizer values
$promo_image_url  = get_theme_mod( 'cleanique_promo_banner_image', get_template_directory_uri() . '/assets/images/promo-banner.jpeg' );
$promo_text       = get_theme_mod( 'cleanique_promo_text', 'Dapatkan Promo Pelatihan Terbatas berlaku bagi yang melakukan registrasi bulan ini, terbatas hanya untuk 10 pendaftar pertama.' );
$promo_btn_label  = get_theme_mod( 'cleanique_promo_btn_label', 'Ambil Promo' );
$video_url        = get_theme_mod( 'cleanique_youtube_video_url', 'https://www.youtube.com/embed/ONlKuDzdCkE' );
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
<section id="siapa-cocok" class="section">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">Target Peserta</span>
            <h2 class="section-title">Siapa yang Cocok Mengikuti Pelatihan Kimia Ini?</h2>
            <p class="section-description">Pelatihan ini dirancang untuk berbagai latar belakang usaha dan profesi.</p>
        </div>

        <div class="grid grid-3">
            <div class="card">
                <span class="card-number">01</span>
                <h3 class="card-title">Facility Management</h3>
                <p class="card-text">Pelatihan internal tim cleaning agar lebih efisien dan hemat dalam penggunaan chemical di gedung/instansi.</p>
            </div>

            <div class="card">
                <span class="card-number">02</span>
                <h3 class="card-title">Owner Cleaning Service</h3>
                <p class="card-text">Membekali tim agar lebih profesional & mengurangi risiko kerusakan permukaan akibat salah pakai chemical.</p>
            </div>

            <div class="card">
                <span class="card-number">03</span>
                <h3 class="card-title">Pelaku Usaha Laundry</h3>
                <p class="card-text">Memahami fungsi chemical & formulasi agar hasil cucian maksimal, wangi tahan lama, & mesin awet.</p>
            </div>

            <div class="card">
                <span class="card-number">04</span>
                <h3 class="card-title">Distributor & Reseller</h3>
                <p class="card-text">Memahami spesifikasi produk yang dijual agar mampu memberikan konsutasi dan edukasi terbaik ke klien.</p>
            </div>

            <div class="card">
                <span class="card-number">05</span>
                <h3 class="card-title">Staf Housekeeping</h3>
                <p class="card-text">Menguasai skill teknis pembersihan chemical untuk hotel, apartemen, atau gedung perkantoran.</p>
            </div>

            <div class="card">
                <span class="card-number">06</span>
                <h3 class="card-title">UMKM Produk Homecare</h3>
                <p class="card-text">Memahami bahan aktif & cara meracik sabun cuci piring, karbol, & deterjen secara aman & legal.</p>
            </div>

            <div class="card">
                <span class="card-number">07</span>
                <h3 class="card-title">Maintenance & Office Boy</h3>
                <p class="card-text">Memahami takaran dan cara penggunaan chemical yang benar, aman untuk kesehatan, & hemat biaya.</p>
            </div>

            <div class="card">
                <span class="card-number">08</span>
                <h3 class="card-title">Pencari Kerja / Karier</h3>
                <p class="card-text">Peluang kerja di industri cleaning/housekeeping lebih terbuka dengan memiliki sertifikat pelatihan resmi.</p>
            </div>

            <div class="card">
                <span class="card-number">09</span>
                <h3 class="card-title">Pensiunan & Calon Wirausaha</h3>
                <p class="card-text">Langkah awal memulai usaha produksi & distribusi chemical laundry/homecare dengan prospek usaha yang nyata.</p>
            </div>
        </div>
    </div>
</section>

<!-- 4. 6 Alasan Mengapa Harus Memilih Cleanique Academy -->
<section id="alasan-memilih" class="section section-alt">
    <div class="container" style="max-width: 900px;">
        <div class="section-header">
            <span class="section-subtitle">Keunggulan Pelatihan</span>
            <h2 class="section-title">6 Alasan Mengapa Harus Memilih Pelatihan Kimia Cleanique Academy</h2>
        </div>

        <div>
            <div class="accordion-item">
                <div class="accordion-header">
                    <span>1. Belajar Langsung dari Produsen Berpengalaman (Sejak 2011)</span>
                </div>
                <div class="accordion-body">
                    Kami adalah perusahaan chemical yang berdiri sejak 2011. Dari awal berdiri, kami telah melewati ribuan riset dan <i>trial and error</i>. Anda tidak perlu lagi mengulangi masa-masa sulit itu, cukup ikuti pelatihan kami dan nikmati formula siap pakai.
                </div>
            </div>

            <div class="accordion-item">
                <div class="accordion-header">
                    <span>2. Lengkap: Teori & Praktikum Langsung di Lapangan</span>
                </div>
                <div class="accordion-body">
                    Kami mengedepankan metode <strong>Praktik Langsung (Hands-on)</strong> diperbanyak ketimbang sekadar teori panjang lebar. Anda meracik sendiri bahan kimia hingga menjadi produk jadi.
                </div>
            </div>

            <div class="accordion-item">
                <div class="accordion-header">
                    <span>3. Produk Chemical Kami Terbukti Terjual > 1 Juta Unit</span>
                </div>
                <div class="accordion-body">
                    Produk formulasi kami terbukti diterima pasar dan laku keras. Kami bukan penyedia kursus teoritis tanpa bukti produk nyata di pasaran.
                </div>
            </div>

            <div class="accordion-item">
                <div class="accordion-header">
                    <span>4. Tim Ahli & Praktisi Berpengalaman Ribuan Alumni</span>
                </div>
                <div class="accordion-body">
                    Eksis sejak 2011, kami telah melahirkan ribuan pengusaha laundry dan produsen chemical di seluruh Indonesia yang produknya telah beredar luas.
                </div>
            </div>

            <div class="accordion-item">
                <div class="accordion-header">
                    <span>5. Efisien: Tidak Harus Kuliah Kimia Berbulan-bulan</span>
                </div>
                <div class="accordion-body">
                    Anda bisa mempelajari dasar formulasi, fungsi bahan aktif, dan cara meracik produk pembersih secara efisien hanya dalam 1–2 hari pelatihan intensive.
                </div>
            </div>

            <div class="accordion-item">
                <div class="accordion-header">
                    <span>6. Ekosistem Bisnis & Bimbingan Jangka Panjang</span>
                </div>
                <div class="accordion-body">
                    Setelah kelas selesai, Anda tidak ditinggalkan. Anda bergabung dalam jaringan ekosistem alumni, mitra bahan baku, serta grup konsultasi berkelanjutan.
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5. Yang Anda Dapatkan Dari Pelatihan Ini -->
<section id="yang-didapat" class="section">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">Fasilitas Peserta</span>
            <h2 class="section-title">Yang Anda Dapatkan Dari Pelatihan Kimia Ini</h2>
        </div>

        <div class="grid grid-3">
            <div class="card">
                <span class="card-number">A</span>
                <h3 class="card-title">Modul Pelatihan Lengkap (Cetak)</h3>
                <p class="card-text">Panduan praktis eksklusif berisi resep formula, petunjuk keselamatan, & operasional produksi yang bisa dijadikan referensi kerja selamanya.</p>
            </div>

            <div class="card">
                <span class="card-number">B</span>
                <h3 class="card-title">Pemahaman Mendalam Bahan Kimia</h3>
                <p class="card-text">Mengenal jenis bahan kimia (alkali, asam, netral, surfactant), pengenceran tepat, & standar penggunaan profesional.</p>
            </div>

            <div class="card">
                <span class="card-number">C</span>
                <h3 class="card-title">Studi Kasus & Solusi Lapangan</h3>
                <p class="card-text">Studi kasus nyata dunia laundry & cleaning service agar Anda terhindar dari kesalahan mahal saat berproduksi.</p>
            </div>

            <div class="card">
                <span class="card-number">D</span>
                <h3 class="card-title">Sertifikat Pelatihan Resmi</h3>
                <p class="card-text">Bukti kompetensi resmi dari Cleanique Academy untuk meningkatkan kredibilitas usaha & portofolio Anda.</p>
            </div>

            <div class="card">
                <span class="card-number">E</span>
                <h3 class="card-title">Bonus Formula & Pendampingan</h3>
                <p class="card-text">Akses grup alumni, konsultasi pasca pelatihan, & bonus resep formulasi tambahan siap pakai.</p>
            </div>
        </div>
    </div>
</section>

<!-- 6. FAQ Accordion Section -->
<section id="faq" class="section">
    <div class="container" style="max-width: 850px;">
        <div class="section-header">
            <span class="section-subtitle">FAQ</span>
            <h2 class="section-title">Pertanyaan Sering Diajukan</h2>
        </div>

        <div>
            <div class="accordion-item">
                <div class="accordion-header">
                    <span>Apakah pemula tanpa latar belakang kimia bisa mengikuti?</span>
                </div>
                <div class="accordion-body">
                    Bisa. Seluruh materi dirancang secara praktis dan mudah dipahami, langsung dilengkapi dengan formula praktikum siap pakai untuk pemula maupun praktisi.
                </div>
            </div>

            <div class="accordion-item">
                <div class="accordion-header">
                    <span>Apakah peserta mendapatkan bahan dan modul pelatihan?</span>
                </div>
                <div class="accordion-body">
                    Ya, setiap peserta mendapatkan modul fisik/digital lengkap, sampel bahan kimia untuk praktikum, serta sertifikat kepesertaan resmi.
                </div>
            </div>

            <div class="accordion-item">
                <div class="accordion-header">
                    <span>Mengapa pelatihan diselenggarakan secara langsung (Tatap Muka)?</span>
                </div>
                <div class="accordion-body">
                    Agar peserta dapat menyentuh, mencium aromanya, dan mengenali bahan-bahan kimia secara langsung sehingga tidak salah memilih saat membeli bahan baku di pasaran.
                </div>
            </div>

            <div class="accordion-item">
                <div class="accordion-header">
                    <span>Bagaimana jika ingin berkonsultasi setelah pelatihan selesai?</span>
                </div>
                <div class="accordion-body">
                    Cleanique Academy menyediakan grup alumni dan layanan pendampingan lanjutan untuk berkonsultasi seputar kendala produksi maupun formula.
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 7. Testimonial Alumni Section -->
<section id="testimoni" class="section section-alt">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">Apa Kata Mereka</span>
            <h2 class="section-title">Testimoni Alumni & Peserta Pelatihan</h2>
            <p class="section-description">Kesan dan pengalaman nyata dari para pengusaha dan praktisi setelah mengikuti pelatihan.</p>
        </div>

        <div class="grid grid-3">
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
                    <div class="card">
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
<section class="section">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">Dokumentasi & Event</span>
            <h2 class="section-title">Kegiatan Pelatihan Terbaru</h2>
            <p class="section-description">Bukti dokumentasi pelaksanaan kelas pelatihan di berbagai kota.</p>
        </div>

        <div class="grid grid-3">
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
                    <div class="gallery-overlay-card" data-img-src="<?php echo esc_url( $img_url ); ?>" data-title="<?php echo esc_attr( $title_txt ); ?>" onclick="cleaniqueOpenLightboxFromCard(this)" style="cursor: pointer;">
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
<section id="program-unggulan" class="section" style="background-color: #11262d; color: #ffffff; padding: 4.5rem 0;">
    <div class="container" style="max-width: 1080px;">
        
        <!-- Header Promo Section -->
        <div style="text-align: center; max-width: 800px; margin: 0 auto 3.5rem auto;">
            <h2 style="font-family: var(--font-heading); font-size: 2.1rem; font-weight: 800; color: #ffffff; margin-bottom: 1rem;">
                Promo Investasi Pelatihan Bulan <?php echo date_i18n('F Y'); ?>
            </h2>
            <p style="font-size: 0.95rem; line-height: 1.7; color: #94a3b8;">
                Training diadakan di Jogja setiap akhir pekan, <strong>Sabtu - Minggu</strong>. Materi pelatihan pembuatan chemical laundry mengacu pada formula baku yang biasa dibuat oleh para produsen chemical laundry, baik formula yang kompleks maupun yang sangat sederhana. Formula telah kami riset berdasarkan efisiensi, kegunaan, dan kepentingan yang dipandang dari berbagai sisi. Ada dua kelas utama yang dapat Anda pilih:
            </p>
        </div>

        <!-- GRID UTAMA BARIS 1: KELAS KOLEKTIF & KELAS PRIVAT -->
        <div class="grid grid-2" style="gap: 2rem; margin-bottom: 2.5rem; align-items: stretch;">
            
            <!-- KELAS KOLEKTIF -->
            <div style="background: #ffffff; border-radius: 20px; padding: 2.5rem 2rem; color: #1e293b; display: flex; flex-direction: column; position: relative; box-shadow: 0 20px 40px rgba(0,0,0,0.25);">
                <div style="text-align: center; margin-bottom: 1.5rem;">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo.webp' ); ?>" alt="Cleanique Academy" style="height: 42px; margin: 0 auto 1rem auto; display: block;">
                    <h3 style="font-family: var(--font-heading); font-size: 1.35rem; font-weight: 800; letter-spacing: 0.05em; color: #0f172a; text-transform: uppercase;">KELAS KOLEKTIF</h3>
                </div>

                <p style="font-size: 0.88rem; line-height: 1.6; color: #475569; text-align: center; margin-bottom: 1.5rem;">
                    Kelas terdiri dari minimal 2 orang sampai dengan 4 orang, merupakan pilihan ekonomis bagi Anda yang memiliki biaya terbatas tetapi ingin memiliki kemampuan meracik bahan kimia laundry. Pelatihan dilaksanakan selama <strong>1 hari</strong>. Biaya pelatihan sebesar:
                </p>

                <div style="text-align: center; margin-bottom: 1.75rem;">
                    <span style="display: block; color: #dc2626; font-weight: 700; font-size: 0.85rem; font-style: italic; margin-bottom: 0.2rem;">*Harga Promo</span>
                    <div style="text-decoration: line-through; color: #64748b; font-weight: 700; font-size: 1.05rem;">Rp 6.500.000,-</div>
                    <div style="font-size: 2.1rem; font-weight: 800; color: #15803d; margin-top: 0.2rem;">Rp 4.300.000,-</div>
                </div>

                <!-- Checklist Fasilitas -->
                <ul style="list-style: none; padding: 0; margin: 0 0 2rem 0; display: flex; flex-direction: column; gap: 0.65rem; font-size: 0.88rem; color: #334155;">
                    <li style="display: flex; align-items: center; gap: 0.65rem; background: #f8fafc; padding: 0.5rem 0.85rem; border-radius: 8px;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Akomodasi penginapan</span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 0.65rem; background: #f1f5f9; padding: 0.5rem 0.85rem; border-radius: 8px;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Makan siang (lunch)</span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 0.65rem; background: #f8fafc; padding: 0.5rem 0.85rem; border-radius: 8px;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Coffee break</span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 0.65rem; background: #f1f5f9; padding: 0.5rem 0.85rem; border-radius: 8px;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Sertifikat pelatihan</span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 0.65rem; background: #f8fafc; padding: 0.5rem 0.85rem; border-radius: 8px;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>4 formula</span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 0.65rem; background: #f1f5f9; padding: 0.5rem 0.85rem; border-radius: 8px;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Modul materi pelatihan</span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 0.65rem; background: #fef08a; padding: 0.6rem 0.85rem; border-radius: 8px; font-weight: 800; color: #854d0e;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#ca8a04" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Mystery Box</span>
                    </li>
                </ul>

                <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya berminat mendaftar Kelas Kolektif promo Rp 4.300.000.' ) ); ?>" target="_blank" class="btn btn-whatsapp" style="margin-top: auto; width: 100%; justify-content: center; padding: 0.85rem; font-weight: 800; border-radius: 9999px;">
                    Daftar Kelas Kolektif
                </a>
            </div>

            <!-- KELAS PRIVAT -->
            <div style="background: #ffffff; border-radius: 20px; padding: 2.5rem 2rem; color: #1e293b; display: flex; flex-direction: column; position: relative; box-shadow: 0 20px 40px rgba(0,0,0,0.25); overflow: hidden;">
                
                <!-- Ribbon Corner Badge -->
                <div style="position: absolute; top: 22px; right: -35px; background: #dc2626; color: #ffffff; font-size: 0.72rem; font-weight: 800; text-transform: uppercase; padding: 0.4rem 2.8rem; transform: rotate(40deg); box-shadow: 0 4px 8px rgba(0,0,0,0.15); letter-spacing: 0.05em; z-index: 10;">
                    Bonus Cara Menghitung HPP
                </div>

                <div style="text-align: center; margin-bottom: 1.5rem;">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo.webp' ); ?>" alt="Cleanique Academy" style="height: 42px; margin: 0 auto 1rem auto; display: block;">
                    <h3 style="font-family: var(--font-heading); font-size: 1.35rem; font-weight: 800; letter-spacing: 0.05em; color: #0f172a; text-transform: uppercase;">KELAS PRIVAT</h3>
                </div>

                <p style="font-size: 0.88rem; line-height: 1.6; color: #475569; text-align: center; margin-bottom: 1.5rem;">
                    Bagi Anda yang menginginkan privasi dan keleluasaan, kelas ini akan menjadi kelas pribadi Anda dengan waktu yang lebih lega. Waktu penyelenggaraan kelas privat fleksibel sesuai dengan kesepakatan dengan durasi maksimal <strong>2 hari</strong>. Biaya pelatihan sebesar:
                </p>

                <div style="text-align: center; margin-bottom: 1.75rem;">
                    <span style="display: block; color: #dc2626; font-weight: 700; font-size: 0.85rem; font-style: italic; margin-bottom: 0.2rem;">*Harga Promo</span>
                    <div style="text-decoration: line-through; color: #64748b; font-weight: 700; font-size: 1.05rem;">Rp 15.000.000,-</div>
                    <div style="font-size: 2.1rem; font-weight: 800; color: #15803d; margin-top: 0.2rem;">Rp 9.700.000,-</div>
                </div>

                <!-- Checklist Fasilitas Privat -->
                <ul style="list-style: none; padding: 0; margin: 0 0 2rem 0; display: flex; flex-direction: column; gap: 0.65rem; font-size: 0.88rem; color: #334155;">
                    <li style="display: flex; align-items: center; gap: 0.65rem; background: #f8fafc; padding: 0.5rem 0.85rem; border-radius: 8px;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Fasilitas antar jemput dari stasiun/terminal, hotel, dan lokasi training</span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 0.65rem; background: #f1f5f9; padding: 0.5rem 0.85rem; border-radius: 8px;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Akomodasi hotel berbintang satu kamar untuk satu orang, termasuk makan pagi</span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 0.65rem; background: #f8fafc; padding: 0.5rem 0.85rem; border-radius: 8px;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Makan siang (lunch) & Coffee break</span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 0.65rem; background: #f1f5f9; padding: 0.5rem 0.85rem; border-radius: 8px;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Wisata kuliner (Dinner)</span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 0.65rem; background: #f8fafc; padding: 0.5rem 0.85rem; border-radius: 8px;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Sertifikat pelatihan & Modul materi</span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 0.65rem; background: #f1f5f9; padding: 0.5rem 0.85rem; border-radius: 8px;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Bebas pilih 6 formula</span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 0.65rem; background: #fef08a; padding: 0.6rem 0.85rem; border-radius: 8px; font-weight: 800; color: #854d0e;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#ca8a04" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Mystery Box</span>
                    </li>
                </ul>

                <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya berminat mendaftar Kelas Privat promo Rp 9.700.000.' ) ); ?>" target="_blank" class="btn btn-whatsapp" style="margin-top: auto; width: 100%; justify-content: center; padding: 0.85rem; font-weight: 800; border-radius: 9999px;">
                    Daftar Kelas Privat
                </a>
            </div>

        </div>

        <!-- GRID UTAMA BARIS 2: KELAS 1 PRODUK & KELAS CUSTOM -->
        <div class="grid grid-2" style="gap: 2rem; margin-bottom: 3.5rem; align-items: stretch;">
            
            <!-- KELAS 1 PRODUK -->
            <div style="background: #ffffff; border-radius: 20px; padding: 2.25rem 2rem; color: #1e293b; display: flex; flex-direction: column; text-align: center; box-shadow: 0 15px 30px rgba(0,0,0,0.2);">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo.webp' ); ?>" alt="Cleanique Academy" style="height: 38px; margin: 0 auto 1rem auto; display: block;">
                <h3 style="font-family: var(--font-heading); font-size: 1.25rem; font-weight: 800; letter-spacing: 0.05em; color: #0f172a; text-transform: uppercase; margin-bottom: 1rem;">KELAS 1 PRODUK</h3>
                <p style="font-size: 0.88rem; line-height: 1.6; color: #475569; margin-bottom: 1.5rem;">
                    Ingin belajar membuat 1 jenis produk chemical sesuai kebutuhan Anda? Kelas ini cocok untuk Anda yang ingin belajar lebih fokus pada produk tanpa mengambil paket lengkap. <strong>Konsultasikan kebutuhan Anda</strong> dengan CS untuk mengetahui produk yang tersedia dan penawaran terbaik.
                </p>
                <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya ingin tanya info Kelas 1 Produk.' ) ); ?>" target="_blank" style="margin-top: auto; background: #facc15; color: #0f172a; font-weight: 800; font-size: 0.95rem; padding: 0.85rem 1.5rem; border-radius: 9999px; text-decoration: none; display: block; transition: all 0.2s ease; box-shadow: 0 4px 12px rgba(250, 204, 21, 0.3);">
                    Tanya CS Sekarang
                </a>
            </div>

            <!-- KELAS CUSTOM -->
            <div style="background: #ffffff; border-radius: 20px; padding: 2.25rem 2rem; color: #1e293b; display: flex; flex-direction: column; text-align: center; box-shadow: 0 15px 30px rgba(0,0,0,0.2);">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo.webp' ); ?>" alt="Cleanique Academy" style="height: 38px; margin: 0 auto 1rem auto; display: block;">
                <h3 style="font-family: var(--font-heading); font-size: 1.25rem; font-weight: 800; letter-spacing: 0.05em; color: #0f172a; text-transform: uppercase; margin-bottom: 1rem;">KELAS CUSTOM</h3>
                <p style="font-size: 0.88rem; line-height: 1.6; color: #475569; margin-bottom: 1.5rem;">
                    Punya kebutuhan khusus? Ingin mempelajari beberapa produk atau formula tertentu? Kami menyediakan kelas yang dapat disesuaikan dengan kebutuhan bisnis, jumlah peserta, hingga materi pelatihan. <strong>Diskusikan kebutuhan Anda</strong> bersama tim kami untuk mendapatkan rekomendasi kelas dan penawaran terbaik.
                </p>
                <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya ingin konsultasi Kelas Custom.' ) ); ?>" target="_blank" style="margin-top: auto; background: #facc15; color: #0f172a; font-weight: 800; font-size: 0.95rem; padding: 0.85rem 1.5rem; border-radius: 9999px; text-decoration: none; display: block; transition: all 0.2s ease; box-shadow: 0 4px 12px rgba(250, 204, 21, 0.3);">
                    Tanya CS Sekarang
                </a>
            </div>

        </div>

        <!-- ADD-ON BANNER -->
        <div style="text-align: center; margin-bottom: 3.5rem; background: rgba(255, 255, 255, 0.06); border: 1px dashed rgba(255, 255, 255, 0.25); border-radius: 16px; padding: 1.75rem;">
            <h4 style="font-size: 1.2rem; font-weight: 800; color: #ffffff; margin-bottom: 0.5rem;">Add On : Tambah materi 1 juta per-formula</h4>
            <div style="display: flex; align-items: center; justify-content: center; gap: 0.75rem;">
                <span style="text-decoration: line-through; color: #94a3b8; font-size: 1.1rem; font-weight: 700;">Rp 1.500.000,-</span>
                <span style="font-size: 1.9rem; font-weight: 800; color: #38bdf8;">Rp 1.000.000,-</span>
            </div>
        </div>

        <!-- QUOTE CALLOUT BOX (IPHONE QUOTE) -->
        <div style="max-width: 820px; margin: 0 auto 3.5rem auto; border: 1px solid rgba(255, 255, 255, 0.3); border-radius: 16px; padding: 2.25rem; background: rgba(15, 23, 42, 0.5); text-align: center; position: relative;">
            <span style="position: absolute; top: -18px; left: 24px; background: #11262d; padding: 0 10px; color: #94a3b8; font-size: 2.2rem; font-family: serif; line-height: 1;">“</span>
            
            <p style="font-style: italic; font-size: 0.95rem; line-height: 1.7; color: #e2e8f0; margin-bottom: 1rem;">
                Investasi terbaik bukanlah barang, melainkan ilmu. Dengan Rp9 juta, Anda bisa membeli satu iPhone nilainya akan terus menurun. Namun dengan Rp9 juta untuk mengikuti pelatihan pembuatan sabun kami, Anda mendapatkan bekal ilmu dan keterampilan yang bisa menghasilkan, bahkan membuka jalan untuk membeli 10 iPhone atau lebih.
            </p>
            
            <strong style="color: #facc15; font-size: 1rem; display: block;">
                Ilmu tidak habis dipakai, justru terus bertambah nilainya.
            </strong>
            
            <span style="position: absolute; bottom: -28px; right: 24px; background: #11262d; padding: 0 10px; color: #94a3b8; font-size: 2.2rem; font-family: serif; line-height: 1;">”</span>
        </div>

        <!-- MAIN BOTTOM CTA BUTTON -->
        <div style="text-align: center;">
            <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya berminat ambil promo investasi pelatihan.' ) ); ?>" target="_blank" style="display: inline-block; background: #ffffff; color: #0f172a; font-weight: 800; font-size: 1.05rem; padding: 1.1rem 2.75rem; border-radius: 9999px; text-decoration: none; box-shadow: 0 10px 25px rgba(255,255,255,0.15); transition: all 0.2s ease;">
                Dapatkan Promo Pelatihan <?php echo date('Y'); ?>!
            </a>
        </div>

    </div>
</section>

<?php
get_footer();
