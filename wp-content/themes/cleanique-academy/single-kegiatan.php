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
            $theme_dir . '/assets/images/hero-lab.png',
            $theme_dir . '/assets/images/promo-banner.jpeg',
        );
    }
?>

<div class="hero" style="padding: 4rem 0 3rem 0;">
    <div class="container" style="max-width: 950px;">
        <span class="section-subtitle">Dokumentasi & Galeri Kegiatan</span>
        <h1 class="hero-title" style="margin-bottom: 1rem;"><?php the_title(); ?></h1>
        <div style="display: flex; gap: 1.5rem; flex-wrap: wrap; color: var(--color-text-muted); font-weight: 600;">
            <?php if ( $tanggal ) : ?><span>Tanggal: <?php echo esc_html( $tanggal ); ?></span><?php endif; ?>
            <?php if ( $lokasi ) : ?><span>Lokasi: <?php echo esc_html( $lokasi ); ?></span><?php endif; ?>
            <?php if ( $peserta ) : ?><span>Peserta: <?php echo esc_html( $peserta ); ?></span><?php endif; ?>
            <span>Dokumentasi: <?php echo count( $gallery_urls ); ?> Foto</span>
        </div>
    </div>
</div>

<section class="section">
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
                <p><?php echo nl2br( esc_html( $materi ) ); ?></p>
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
