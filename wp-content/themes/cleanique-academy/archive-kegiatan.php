<?php
get_header();
?>

<div class="hero" style="padding: 4rem 0 3rem 0;">
    <div class="container" style="text-align: center;">
        <span class="section-subtitle">Dokumentasi & Event</span>
        <h1 class="hero-title" style="margin-bottom: 0.5rem;">Seluruh <span>Kegiatan</span> Cleanique Academy</h1>
        <p class="hero-description" style="max-width: 600px; margin: 0 auto;">Riwayat kegiatan pelatihan, workshop, dan seminar yang telah dan akan datang.</p>
    </div>
</div>

<section class="section">
    <div class="container">
        <div class="grid grid-3">
            <?php
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();
                    $tanggal = get_post_meta( get_the_ID(), '_cac_tanggal_kegiatan', true );
                    $lokasi  = get_post_meta( get_the_ID(), '_cac_lokasi_detail', true );
                    ?>
                    <div class="gallery-overlay-card">
                        <div class="gallery-card-image-wrap">
                            <img src="<?php echo esc_url( cleanique_get_kegiatan_thumbnail_url( get_the_ID() ) ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>">
                            <div class="gallery-card-badge-top">
                                <?php echo $tanggal ? esc_html( $tanggal ) : 'Kegiatan Academy'; ?>
                            </div>
                        </div>
                        <div class="gallery-card-overlay">
                            <div class="gallery-card-content">
                                <span class="gallery-card-lokasi"><?php echo $lokasi ? esc_html( $lokasi ) : 'Indonesia'; ?></span>
                                <h3 class="gallery-card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <p class="gallery-card-desc"><?php echo esc_html( wp_trim_words( get_the_excerpt() ? get_the_excerpt() : get_the_content(), 15 ) ); ?></p>
                                <div class="gallery-card-actions">
                                    <a href="<?php the_permalink(); ?>" class="gallery-card-btn">Detail Kegiatan &rarr;</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                endwhile;
            else :
                ?>
                <p style="text-align: center; grid-column: 1/-1;">Belum ada kegiatan yang tersedia.</p>
            <?php endif; ?>
        </div>

        <div style="margin-top: 3rem; text-align: center;">
            <?php the_posts_pagination( array(
                'mid_size'  => 2,
                'prev_text' => __( '« Sebelumnya', 'cleanique-academy' ),
                'next_text' => __( 'Berikutnya »', 'cleanique-academy' ),
            ) ); ?>
        </div>
    </div>
</section>

<?php
get_footer();
