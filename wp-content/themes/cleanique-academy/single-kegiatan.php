<?php
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

<div class="hero" style="padding: 3.5rem 0 2.5rem 0;">
    <div class="container" style="max-width: 950px;">
        
        <!-- BREADCRUMBS NAVIGASI -->
        <div class="breadcrumbs-nav" style="margin-bottom: 1.25rem; font-size: 0.88rem; color: var(--color-text-muted); display: flex; align-items: center; gap: 0.5rem; flex-wrap: wrap;">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="color: #64748b; font-weight: 600; text-decoration: none;">Beranda</a>
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#94a3b8" stroke-width="2.2"><polyline points="9 18 15 12 9 6"></polyline></svg>
            <a href="<?php echo esc_url( home_url( '/dokumentasi-event/' ) ); ?>" style="color: #64748b; font-weight: 600; text-decoration: none;">Galeri Kegiatan</a>
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#94a3b8" stroke-width="2.2"><polyline points="9 18 15 12 9 6"></polyline></svg>
            <span style="color: #0f172a; font-weight: 700; max-width: 320px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><?php the_title(); ?></span>
        </div>

        <span class="section-subtitle">Dokumentasi & Galeri Kegiatan</span>
        <h1 class="hero-title" style="margin-bottom: 1rem; font-size: 2.2rem;"><?php the_title(); ?></h1>
        <div style="display: flex; gap: 1.5rem; flex-wrap: wrap; color: var(--color-text-muted); font-weight: 600; font-size: 0.92rem;">
            <?php if ( $tanggal ) : ?><span>Tanggal: <?php echo esc_html( $tanggal ); ?></span><?php endif; ?>
            <?php if ( $lokasi ) : ?><span>Lokasi: <?php echo esc_html( $lokasi ); ?></span><?php endif; ?>
            <?php if ( $peserta ) : ?><span>Peserta: <?php echo esc_html( $peserta ); ?></span><?php endif; ?>
            <span>Dokumentasi: <?php echo count( $gallery_urls ); ?> Foto</span>
        </div>
    </div>
</div>

<section class="section" style="padding-top: 2.5rem;">
    <div class="container" style="max-width: 950px;">
        
        <!-- Main Featured Image -->
        <?php if ( has_post_thumbnail() ) : ?>
            <div style="margin-bottom: 2.5rem; border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-md);">
                <?php the_post_thumbnail( 'full', array( 'style' => 'width:100%; height:auto; display:block;' ) ); ?>
            </div>
        <?php endif; ?>

        <!-- Brief Material Section -->
        <?php if ( $materi ) : ?>
            <div class="card" style="margin-bottom: 2.5rem; background-color: var(--color-primary-light); border-color: #bae6fd;">
                <h3 style="font-size: 1.2rem; color: var(--color-primary-hover); margin-bottom: 0.5rem;">Materi & Pokok Bahasan Praktikum</h3>
                <p style="margin: 0; line-height: 1.7;"><?php echo nl2br( esc_html( $materi ) ); ?></p>
            </div>
        <?php endif; ?>

        <!-- Post Content -->
        <div class="entry-content" style="font-size: 1.05rem; line-height: 1.8; margin-bottom: 3rem;">
            <?php the_content(); ?>
        </div>

        <!-- MULTI-IMAGE GALLERY GRID SECTION -->
        <div style="margin-top: 3.5rem; margin-bottom: 3.5rem;">
            <div class="section-header" style="text-align: left; margin-bottom: 1.75rem;">
                <span class="section-subtitle">Galeri Dokumentasi Praktikum</span>
                <h2 class="section-title" style="font-size: 1.8rem; margin-bottom: 0.5rem;">Foto Suasana & Aktivitas Peserta</h2>
                <p class="section-description" style="margin: 0; max-width: 100%;">Dokumentasi foto kegiatan praktikum formulasi kimia dan peragaan langsung di lapangan.</p>
            </div>

            <div class="grid grid-3" style="gap: 1.25rem;">
                <?php foreach ( $gallery_urls as $index => $img_url ) : ?>
                    <div class="gallery-item-card" onclick="openGalleryLightbox(<?php echo $index; ?>)" style="position: relative; border-radius: var(--radius-md); overflow: hidden; height: 210px; cursor: pointer; border: 1px solid var(--color-border); box-shadow: var(--shadow-sm); transition: transform 0.25s ease, box-shadow 0.25s ease;">
                        <img src="<?php echo esc_url( $img_url ); ?>" alt="Dokumentasi <?php echo esc_attr( get_the_title() ); ?>" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.35s ease;">
                        <div class="gallery-overlay-hover" style="position: absolute; inset: 0; background: rgba(15, 23, 42, 0.4); display: flex; align-items: center; justify-content: center; opacity: 0; transition: opacity 0.25s ease;">
                            <span style="background: rgba(255, 255, 255, 0.95); color: var(--color-secondary); padding: 0.4rem 0.9rem; border-radius: var(--radius-full); font-size: 0.8rem; font-weight: 700;">Perbesar Foto</span>
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
                <span class="share-title-text">Bagikan Galeri Event Ini:</span>
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
                <span class="section-subtitle">Galeri Lainnya</span>
                <h2 class="section-title" style="font-size: 1.6rem; margin-bottom: 0.5rem;">Dokumentasi Galeri Serupa</h2>
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
                                    <span class="gallery-card-lokasi"><?php echo $r_lokasi ? esc_html( $r_lokasi ) : 'Indonesia'; ?></span>
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

        <!-- Call to Action Box -->
        <div style="margin-top: 3.5rem; padding: 2.5rem; background: var(--color-bg-surface); border: 1px solid var(--color-border); border-radius: var(--radius-lg); text-align: center;">
            <h3 style="margin-bottom: 0.75rem;">Tertarik Mengikuti Kegiatan Pelatihan Serupa?</h3>
            <p style="color: var(--color-text-muted); margin-bottom: 1.5rem;">Dapatkan informasi jadwal terdekat dan penawaran pelatihan berikutnya.</p>
            <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo, saya tertarik dengan kegiatan: ' . get_the_title() ) ); ?>" target="_blank" class="btn btn-whatsapp">
                Tanya Jadwal via WhatsApp
            </a>
        </div>

    </div>
</section>

<!-- Lightbox Modal for Gallery Photos -->
<div id="galleryLightbox" style="display: none; position: fixed; inset: 0; background: rgba(15, 23, 42, 0.9); z-index: 999999; align-items: center; justify-content: center; padding: 1.5rem;">
    <button onclick="closeGalleryLightbox()" style="position: absolute; top: 1.5rem; right: 1.5rem; background: rgba(255,255,255,0.2); border: none; color: #fff; width: 40px; height: 40px; border-radius: 50%; cursor: pointer; font-size: 1.2rem; display: flex; align-items: center; justify-content: center;">&times;</button>
    <button onclick="prevGalleryImage()" style="position: absolute; left: 1.5rem; background: rgba(255,255,255,0.2); border: none; color: #fff; width: 44px; height: 44px; border-radius: 50%; cursor: pointer; font-size: 1.5rem;">&lsaquo;</button>
    <img id="lightboxImage" src="" style="max-width: 90vw; max-height: 85vh; border-radius: 12px; object-fit: contain; box-shadow: 0 25px 50px -12px rgba(0,0,0,0.5);">
    <button onclick="nextGalleryImage()" style="position: absolute; right: 1.5rem; background: rgba(255,255,255,0.2); border: none; color: #fff; width: 44px; height: 44px; border-radius: 50%; cursor: pointer; font-size: 1.5rem;">&rsaquo;</button>
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
</script>

<?php
endwhile;
get_footer();
