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
                    <div class="card">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div style="margin: -2rem -2rem 1.25rem -2rem; overflow: hidden; border-radius: var(--radius-md) var(--radius-md) 0 0;">
                                <?php the_post_thumbnail( 'medium_large', array( 'style' => 'width:100%; height:200px; object-fit:cover;' ) ); ?>
                            </div>
                        <?php endif; ?>
                        <span class="card-badge"><?php echo $tanggal ? esc_html( $tanggal ) : 'Kegiatan Academy'; ?></span>
                        <h3 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <p style="font-size: 0.85rem; color: var(--color-primary); font-weight: 600; margin-bottom: 0.5rem;">📍 <?php echo $lokasi ? esc_html( $lokasi ) : 'Indonesia'; ?></p>
                        <div class="card-text"><?php echo esc_html( wp_trim_words( get_the_excerpt() ? get_the_excerpt() : get_the_content(), 15 ) ); ?></div>
                        <a href="<?php the_permalink(); ?>" class="btn btn-outline" style="align-self: flex-start; padding: 0.4rem 0.9rem; font-size: 0.85rem;">Detail Kegiatan</a>
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
