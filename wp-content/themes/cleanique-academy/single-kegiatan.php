<?php
/**
 * Single Kegiatan Template (Detail Galeri & Dokumentasi Event)
 *
 * Follows DESAIN.md: Modern Professional Academy x Luxury Editorial Corporate
 */
get_header();

while ( have_posts() ) : the_post();
    $tanggal      = get_post_meta( get_the_ID(), '_cac_tanggal_kegiatan', true );
    $lokasi       = get_post_meta( get_the_ID(), '_cac_lokasi_detail', true );
    $peserta      = get_post_meta( get_the_ID(), '_cac_jumlah_peserta', true );
    $materi       = get_post_meta( get_the_ID(), '_cac_materi_singkat', true );
    $gallery_raw  = get_post_meta( get_the_ID(), '_cac_gallery_urls', true );

    // Parse gallery URLs from meta or provide rich fallback gallery images
    $gallery_urls = array();
    if ( ! empty( $gallery_raw ) ) {
        $lines = explode( "\n", str_replace( "\r", "", $gallery_raw ) );
        foreach ( $lines as $line ) {
            $trimmed = trim( $line );
            if ( ! empty( $trimmed ) ) {
                $gallery_urls[] = $trimmed;
            }
        }
    }

    // Fallback default gallery images if custom meta is not set yet
    if ( empty( $gallery_urls ) ) {
        $theme_dir = get_template_directory_uri();
        $gallery_urls = array(
            $theme_dir . '/assets/images/gallery-1.webp',
            $theme_dir . '/assets/images/gallery-2.webp',
            $theme_dir . '/assets/images/gallery-3.webp',
            $theme_dir . '/assets/images/gallery-4.webp',
            $theme_dir . '/assets/images/gallery-5.webp',
            $theme_dir . '/assets/images/gallery-6.webp',
            $theme_dir . '/assets/images/hero-lab-practical.jpg',
        );
    }
?>

<!-- 1. BESPOKE LUXURY EDITORIAL HERO SECTION -->
<section class="about-hero-section" style="background-image: linear-gradient(145deg, rgba(7, 35, 56, 0.94) 0%, rgba(11, 93, 143, 0.90) 60%, rgba(8, 127, 193, 0.86) 100%), url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-lab-practical.jpg' ); ?>');">
    <div class="container about-hero-container">
        <div class="hero-editorial-pill">
            <span class="pill-pulse-dot"></span>
            <span>DOKUMENTASI PELATIHAN MITRA</span>
        </div>

        <h1 class="about-hero-title" style="font-size: clamp(1.85rem, 3.5vw, 2.75rem); max-width: 900px; margin: 0 auto 1.25rem auto;">
            <?php the_title(); ?>
        </h1>

        <!-- Metadata Strip -->
        <div style="display: flex; align-items: center; justify-content: center; flex-wrap: wrap; gap: 1.25rem; margin-bottom: 1.5rem; color: #bae6fd; font-weight: 600; font-size: 0.92rem;">
            <?php if ( $lokasi ) : ?>
                <span style="display: inline-flex; align-items: center; gap: 0.4rem;">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#38bdf8" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                    <span><?php echo esc_html( $lokasi ); ?></span>
                </span>
                <span style="color: rgba(255,255,255,0.4);">&bull;</span>
            <?php endif; ?>

            <?php if ( $tanggal ) : ?>
                <span style="display: inline-flex; align-items: center; gap: 0.4rem;">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#38bdf8" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                    <span><?php echo esc_html( $tanggal ); ?></span>
                </span>
                <span style="color: rgba(255,255,255,0.4);">&bull;</span>
            <?php endif; ?>

            <?php if ( $peserta ) : ?>
                <span style="display: inline-flex; align-items: center; gap: 0.4rem;">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#38bdf8" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                    <span><?php echo esc_html( $peserta ); ?> Peserta</span>
                </span>
                <span style="color: rgba(255,255,255,0.4);">&bull;</span>
            <?php endif; ?>

            <span style="display: inline-flex; align-items: center; gap: 0.4rem;">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#38bdf8" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg>
                <span><?php echo count( $gallery_urls ); ?> Foto Dokumentasi</span>
            </span>
        </div>

        <nav class="about-hero-breadcrumbs" aria-label="Breadcrumb">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Beranda</a>
            <span class="breadcrumb-separator">&rsaquo;</span>
            <a href="<?php echo esc_url( home_url( '/dokumentasi-event/' ) ); ?>">Galeri Kegiatan</a>
            <span class="breadcrumb-separator">&rsaquo;</span>
            <span><?php echo esc_html( wp_trim_words( get_the_title(), 5 ) ); ?></span>
        </nav>
    </div>
</section>

<!-- 2. DETAIL DOKUMENTASI CONTENT -->
<section class="section" style="padding-top: 3.5rem;">
    <div class="container" style="max-width: 980px;">
        
        <!-- Main Featured Image -->
        <?php if ( has_post_thumbnail() ) : ?>
            <div style="margin-bottom: 2.75rem; border-radius: var(--radius-xl); overflow: hidden; box-shadow: var(--shadow-md); border: 1px solid var(--color-border);">
                <?php the_post_thumbnail( 'full', array( 'style' => 'width:100%; height:auto; display:block;' ) ); ?>
            </div>
        <?php endif; ?>

        <!-- Brief Material Section -->
        <?php if ( $materi ) : ?>
            <div class="editorial-quote-box" style="margin-bottom: 2.5rem; background: var(--color-primary-light); border-color: #bae6fd;">
                <div class="editorial-badge" style="margin-bottom: 0.75rem;">
                    <span class="badge-dot"></span>
                    <span>POKOK MATERI</span>
                    <span class="badge-code">PRAKTIKUM FORMULASI</span>
                </div>
                <p class="editorial-quote-text" style="color: var(--color-primary-dark); font-size: 1.05rem; font-style: normal; font-weight: 500; line-height: 1.65;">
                    <?php echo nl2br( esc_html( $materi ) ); ?>
                </p>
            </div>
        <?php endif; ?>

        <!-- Post Content -->
        <div class="entry-content" style="font-size: 1.05rem; line-height: 1.85; margin-bottom: 3.5rem; color: #334155;">
            <?php the_content(); ?>
        </div>

        <!-- MULTI-IMAGE GALLERY GRID SECTION -->
        <div style="margin-top: 3.5rem; margin-bottom: 3.5rem;">
            <div class="section-header" style="text-align: left; margin-bottom: 2rem;">
                <div class="editorial-badge">
                    <span class="badge-dot"></span>
                    <span>FOTO DOKUMENTASI</span>
                    <span class="badge-code">ALBUM KEGIATAN</span>
                </div>
                <h2 class="section-title" style="font-size: 1.85rem; margin-bottom: 0.5rem;">Foto Suasana &amp; Aktivitas Peserta</h2>
                <div class="section-accent-bar" style="margin: 0 0 1rem 0;"></div>
                <p class="section-description" style="margin: 0; max-width: 100%;">Klik pada foto untuk memperbesar tampilan dan melihat album lengkap.</p>
            </div>

            <div class="grid grid-3" style="gap: 1.25rem;">
                <?php foreach ( $gallery_urls as $index => $img_url ) : ?>
                    <div class="gallery-item-card" onclick="openGalleryLightbox(<?php echo $index; ?>)" style="position: relative; border-radius: var(--radius-lg); overflow: hidden; height: 220px; cursor: pointer; border: 1px solid var(--color-border); box-shadow: var(--shadow-sm); transition: transform 0.25s ease, box-shadow 0.25s ease;">
                        <img src="<?php echo esc_url( $img_url ); ?>" alt="Dokumentasi <?php echo esc_attr( get_the_title() ); ?>" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.35s ease;">
                        <div class="gallery-overlay-hover" style="position: absolute; inset: 0; background: rgba(7, 35, 56, 0.6); display: flex; align-items: center; justify-content: center; opacity: 0; transition: opacity 0.25s ease;">
                            <span style="background: #ffffff; color: var(--color-primary-dark); padding: 0.45rem 1rem; border-radius: var(--radius-full); font-size: 0.8rem; font-weight: 700; display: inline-flex; align-items: center; gap: 0.35rem; box-shadow: var(--shadow-md);">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
                                <span>Perbesar Foto</span>
                            </span>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- SHARE BUTTONS SOSIAL MEDIA RESMI -->
        <div class="share-section-card" style="margin-top: 3.5rem; margin-bottom: 3rem;">
            <div class="share-title-group">
                <svg class="share-header-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path>
                    <polyline points="16 6 12 2 8 6"></polyline>
                    <line x1="12" y1="2" x2="12" y2="15"></line>
                </svg>
                <span class="share-title-text">Bagikan Dokumentasi Ini:</span>
            </div>

            <div class="share-buttons-wrapper">
                <!-- WhatsApp -->
                <a href="https://api.whatsapp.com/send?text=<?php echo rawurlencode( get_the_title() . ' ' . get_permalink() ); ?>" target="_blank" class="share-circle-btn share-wa" data-tooltip="WhatsApp" aria-label="Bagikan ke WhatsApp">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.157 4.228 4.228-1.157zm12.339-6.495c-.068-.113-.25-.181-.523-.317-.272-.136-1.61-.795-1.86-.886-.25-.091-.432-.136-.613.136-.182.272-.704.886-.863 1.067-.159.182-.318.204-.59.068-.272-.136-1.151-.424-2.193-1.353-.81-.723-1.357-1.616-1.516-1.888-.159-.272-.017-.419.119-.554.122-.122.272-.318.408-.477.136-.159.182-.272.272-.454.091-.182.045-.341-.023-.477-.068-.136-.613-1.477-.84-2.023-.222-.534-.447-.461-.613-.469-.159-.008-.341-.01-.523-.01s-.477.068-.727.341c-.25.272-.954.932-.954 2.273s.977 2.636 1.114 2.818c.136.182 1.923 2.936 4.659 4.116.65.281 1.158.448 1.554.573.653.207 1.247.178 1.716.108.523-.078 1.61-.658 1.838-1.295.227-.636.227-1.181.159-1.295z"/></svg>
                </a>

                <!-- Facebook -->
                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo rawurlencode( get_permalink() ); ?>" target="_blank" class="share-circle-btn share-fb" data-tooltip="Facebook" aria-label="Bagikan ke Facebook">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                </a>

                <!-- LinkedIn -->
                <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo rawurlencode( get_permalink() ); ?>" target="_blank" class="share-circle-btn share-li" data-tooltip="LinkedIn" aria-label="Bagikan ke LinkedIn">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.28 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.75M6.46 10.9v8.37H9.25V10.9H6.46M7.86 6.74a1.65 1.65 0 1 0 0 3.3 1.65 1.65 0 0 0 0-3.3z"/></svg>
                </a>

                <!-- X (Twitter) -->
                <a href="https://twitter.com/intent/tweet?url=<?php echo rawurlencode( get_permalink() ); ?>&text=<?php echo rawurlencode( get_the_title() ); ?>" target="_blank" class="share-circle-btn share-x" data-tooltip="X (Twitter)" aria-label="Bagikan ke X">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                </a>

                <!-- Copy Link Button with Tooltip -->
                <button id="copyShareBtnKegiatan" class="share-circle-btn share-copy" data-tooltip="Salin Link" onclick="cleaniqueCopyArticleLink(this, '<?php echo esc_js( get_permalink() ); ?>')" aria-label="Salin Link Galeri">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path></svg>
                </button>
            </div>
        </div>

        <!-- NAVIGASI GALERI SEBELUMNYA & GALERI SELANJUTNYA -->
        <div class="post-navigation-grid" style="margin-top: 3.5rem; margin-bottom: 3.5rem;">
            <?php
            $prev_kegiatan = get_previous_post();
            $next_kegiatan = get_next_post();
            ?>
            <?php if ( ! empty( $prev_kegiatan ) ) : ?>
                <a href="<?php echo esc_url( get_permalink( $prev_kegiatan->ID ) ); ?>" class="nav-card nav-card-prev">
                    <span class="nav-card-label">&larr; Galeri Sebelumnya</span>
                    <h4 class="nav-card-title"><?php echo esc_html( get_the_title( $prev_kegiatan->ID ) ); ?></h4>
                </a>
            <?php else : ?>
                <div></div>
            <?php endif; ?>

            <?php if ( ! empty( $next_kegiatan ) ) : ?>
                <a href="<?php echo esc_url( get_permalink( $next_kegiatan->ID ) ); ?>" class="nav-card nav-card-next" style="text-align: right;">
                    <span class="nav-card-label">Galeri Selanjutnya &rarr;</span>
                    <h4 class="nav-card-title"><?php echo esc_html( get_the_title( $next_kegiatan->ID ) ); ?></h4>
                </a>
            <?php endif; ?>
        </div>

        <!-- GALERI SERUPA (RELATED GALLERY POSTS) -->
        <div class="related-kegiatan-section" style="margin-top: 3.5rem; border-top: 1px solid var(--color-border); padding-top: 3rem;">
            <div class="section-header" style="text-align: left; margin-bottom: 1.75rem;">
                <div class="editorial-badge">
                    <span class="badge-dot"></span>
                    <span>DOKUMENTASI LAINNYA</span>
                    <span class="badge-code">ALBUM SERUPA</span>
                </div>
                <h2 class="section-title" style="font-size: 1.65rem; margin-bottom: 0.5rem;">Dokumentasi Pelatihan Lainnya</h2>
                <div class="section-accent-bar" style="margin: 0 0 1rem 0;"></div>
                <p class="section-description" style="margin: 0; max-width: 100%;">Lihat foto pelaksanaan kelas praktikum dan pelatihan mitra Cleanique Academy di kota-kota lainnya.</p>
            </div>

            <div class="grid grid-3" style="gap: 1.25rem;">
                <?php
                $related_kegiatan = new WP_Query( array(
                    'post_type'      => 'kegiatan',
                    'posts_per_page' => 3,
                    'post__not_in'   => array( get_the_ID() ),
                ) );

                if ( $related_kegiatan->have_posts() ) :
                    while ( $related_kegiatan->have_posts() ) : $related_kegiatan->the_post();
                        $r_tanggal = get_post_meta( get_the_ID(), '_cac_tanggal_kegiatan', true );
                        $r_lokasi  = get_post_meta( get_the_ID(), '_cac_lokasi_detail', true );
                        ?>
                        <div class="gallery-overlay-card">
                            <div class="gallery-card-image-wrap">
                                <img src="<?php echo esc_url( cleanique_get_kegiatan_thumbnail_url( get_the_ID() ) ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>">
                                <div class="gallery-card-badge-top">
                                    <?php echo $r_tanggal ? esc_html( $r_tanggal ) : 'Kegiatan Academy'; ?>
                                </div>
                            </div>
                            <div class="gallery-card-overlay">
                                <div class="gallery-card-content">
                                    <span class="gallery-card-lokasi"><?php echo $r_lokasi ? esc_html( $r_lokasi ) : 'Training Center Sleman'; ?></span>
                                    <h3 class="gallery-card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    <p class="gallery-card-desc"><?php echo esc_html( wp_trim_words( get_the_excerpt() ? get_the_excerpt() : get_the_content(), 14 ) ); ?></p>
                                    <div class="gallery-card-actions">
                                        <a href="<?php the_permalink(); ?>" class="gallery-card-btn">Detail Event &rarr;</a>
                                    </div>
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

    </div>
</section>

<!-- SEKSI KONTAK KANTOR PUSAT & CALL TO ACTION (DEEP BLUE) -->
<section id="kontak" class="section section-dark-cta">
    <div class="container" style="max-width: 880px;">
        <div class="contact-cta-box">
            <span class="contact-cta-subtitle">KONSULTASI &amp; JADWAL BATCH</span>
            <h2 class="contact-cta-title">Tertarik Mengikuti Kegiatan Praktikum Pelatihan Serupa?</h2>
            <p class="contact-cta-desc">Dapatkan informasi jadwal terdekat kelas tatap muka Sleman Yogyakarta atau konsultasi kelas in-house training bersama instruktur profesional.</p>
            <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya tertarik mengikuti pelatihan seperti pada dokumentasi: ' . get_the_title() ) ); ?>" target="_blank" class="btn btn-whatsapp btn-cta-large">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.157 4.228 4.228-1.157zm12.339-6.495c-.068-.113-.25-.181-.523-.317-.272-.136-1.61-.795-1.86-.886-.25-.091-.432-.136-.613.136-.182.272-.704.886-.863 1.067-.159.182-.318.204-.59.068-.272-.136-1.151-.424-2.193-1.353-.81-.723-1.357-1.616-1.516-1.888-.159-.272-.017-.419.119-.554.122-.122.272-.318.408-.477.136-.159.182-.272.272-.454.091-.182.045-.341-.023-.477-.068-.136-.613-1.477-.84-2.023-.222-.534-.447-.461-.613-.469-.159-.008-.341-.01-.523-.01s-.477.068-.727.341c-.25.272-.954.932-.954 2.273s.977 2.636 1.114 2.818c.136.182 1.923 2.936 4.659 4.116.65.281 1.158.448 1.554.573.653.207 1.247.178 1.716.108.523-.078 1.61-.658 1.838-1.295.227-.636.227-1.181.159-1.295z"/></svg>
                <span>Konsultasi via WhatsApp</span>
            </a>
        </div>
    </div>
</section>

<!-- Lightbox Modal for Gallery Photos -->
<div id="galleryLightbox" style="display: none; position: fixed; inset: 0; background: rgba(7, 35, 56, 0.95); backdrop-filter: blur(8px); z-index: 999999; align-items: center; justify-content: center; padding: 1.5rem;">
    <button onclick="closeGalleryLightbox()" style="position: absolute; top: 1.5rem; right: 1.5rem; background: rgba(255,255,255,0.15); border: 1px solid rgba(255,255,255,0.25); color: #fff; width: 44px; height: 44px; border-radius: 50%; cursor: pointer; font-size: 1.4rem; display: flex; align-items: center; justify-content: center; transition: background 0.2s ease;">&times;</button>
    <button onclick="prevGalleryImage()" style="position: absolute; left: 1.5rem; background: rgba(255,255,255,0.15); border: 1px solid rgba(255,255,255,0.25); color: #fff; width: 48px; height: 48px; border-radius: 50%; cursor: pointer; font-size: 1.8rem; display: flex; align-items: center; justify-content: center; transition: background 0.2s ease;">&lsaquo;</button>
    <img id="lightboxImage" src="" style="max-width: 90vw; max-height: 85vh; border-radius: var(--radius-lg); object-fit: contain; box-shadow: 0 25px 50px -12px rgba(0,0,0,0.6); border: 1px solid rgba(255,255,255,0.2);">
    <button onclick="nextGalleryImage()" style="position: absolute; right: 1.5rem; background: rgba(255,255,255,0.15); border: 1px solid rgba(255,255,255,0.25); color: #fff; width: 48px; height: 48px; border-radius: 50%; cursor: pointer; font-size: 1.8rem; display: flex; align-items: center; justify-content: center; transition: background 0.2s ease;">&rsaquo;</button>
</div>

<style>
.gallery-item-card:hover {
  transform: translateY(-4px);
  box-shadow: var(--shadow-md);
}
.gallery-item-card:hover img {
  transform: scale(1.06);
}
.gallery-item-card:hover .gallery-overlay-hover {
  opacity: 1;
}
</style>

<script>
var galleryImages = <?php echo json_encode( array_values( $gallery_urls ) ); ?>;
var currentImageIndex = 0;

function openGalleryLightbox(index) {
    if (galleryImages[index]) {
        currentImageIndex = index;
        document.getElementById('lightboxImage').src = galleryImages[currentImageIndex];
        document.getElementById('galleryLightbox').style.display = 'flex';
        document.body.style.overflow = 'hidden';
    }
}

function closeGalleryLightbox() {
    document.getElementById('galleryLightbox').style.display = 'none';
    document.body.style.overflow = '';
}

function prevGalleryImage() {
    currentImageIndex = (currentImageIndex - 1 + galleryImages.length) % galleryImages.length;
    document.getElementById('lightboxImage').src = galleryImages[currentImageIndex];
}

function nextGalleryImage() {
    currentImageIndex = (currentImageIndex + 1) % galleryImages.length;
    document.getElementById('lightboxImage').src = galleryImages[currentImageIndex];
}

document.addEventListener('keydown', function(e) {
    var lightbox = document.getElementById('galleryLightbox');
    if (lightbox && lightbox.style.display === 'flex') {
        if (e.key === 'Escape') closeGalleryLightbox();
        if (e.key === 'ArrowLeft') prevGalleryImage();
        if (e.key === 'ArrowRight') nextGalleryImage();
    }
});

function cleaniqueCopyArticleLink(btn, url) {
    if (navigator.clipboard) {
        navigator.clipboard.writeText(url).then(function() {
            btn.setAttribute('data-tooltip', 'Berhasil Disalin!');
            btn.classList.add('tooltip-active');
            setTimeout(function() {
                btn.setAttribute('data-tooltip', 'Salin Link');
                btn.classList.remove('tooltip-active');
            }, 2200);
        });
    } else {
        var tempInput = document.createElement('input');
        tempInput.value = url;
        document.body.appendChild(tempInput);
        tempInput.select();
        document.execCommand('copy');
        document.body.removeChild(tempInput);
        btn.setAttribute('data-tooltip', 'Berhasil Disalin!');
        btn.classList.add('tooltip-active');
        setTimeout(function() {
            btn.setAttribute('data-tooltip', 'Salin Link');
            btn.classList.remove('tooltip-active');
        }, 2200);
    }
}
</script>

<?php
endwhile;
get_footer();
