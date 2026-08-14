<?php
/**
 * Taxonomy Archive Template - Lokasi Kegiatan
 * Displays kegiatan posts filtered by taxonomy term (lokasi_kegiatan).
 */
get_header();

$term = get_queried_object();

cleanique_render_page_hero( array(
    'title'    => single_term_title( '', false ),
    'badge'    => 'Lokasi Kegiatan',
    'subtitle' => term_description() ? wp_strip_all_tags( term_description() ) : sprintf( 'Daftar kegiatan Cleanique Academy yang diselenggarakan di %s.', single_term_title( '', false ) ),
    'theme'    => 'light',
) );
?>

<section class="section">
    <div class="container">

        <!-- Lokasi Term Navigation -->
        <?php
        $all_terms = get_terms( array(
            'taxonomy'   => 'lokasi_kegiatan',
            'hide_empty' => true,
        ) );

        if ( ! is_wp_error( $all_terms ) && ! empty( $all_terms ) ) : ?>
            <div style="display: flex; gap: 0.5rem; flex-wrap: wrap; margin-bottom: 2.5rem; justify-content: center;">
                <a href="<?php echo esc_url( get_post_type_archive_link( 'kegiatan' ) ); ?>"
                   class="btn btn-outline"
                   style="padding: 0.4rem 1rem; font-size: 0.85rem;">
                    Semua Kegiatan
                </a>
                <?php foreach ( $all_terms as $t ) : ?>
                    <a href="<?php echo esc_url( get_term_link( $t ) ); ?>"
                       class="btn btn-outline"
                       style="padding: 0.4rem 1rem; font-size: 0.85rem; <?php echo ( is_tax( 'lokasi_kegiatan', $t->slug ) ) ? 'background: var(--color-primary); color: #fff; border-color: var(--color-primary);' : ''; ?>">
                        <?php echo esc_html( $t->name ); ?>
                    </a>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <div class="grid grid-3">
            <?php
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();
                    $tanggal = get_post_meta( get_the_ID(), '_cac_tanggal_kegiatan', true );
                    $lokasi  = get_post_meta( get_the_ID(), '_cac_lokasi_detail', true );
                    ?>
                    <div class="card article-card">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="article-card-image-wrap" style="height: 200px;">
                                <?php the_post_thumbnail( 'medium_large' ); ?>
                            </div>
                        <?php endif; ?>

                        <div class="article-card-body">
                            <?php
                            $jenis_terms = get_the_terms( get_the_ID(), 'jenis_kegiatan' );
                            $jenis_label = ( $jenis_terms && ! is_wp_error( $jenis_terms ) ) ? $jenis_terms[0]->name : '';
                            ?>
                            <span class="card-badge" style="margin-bottom: 0.75rem; width: fit-content;"><?php echo $tanggal ? esc_html( $tanggal ) : esc_html( $jenis_label ? $jenis_label : 'Kegiatan Academy' ); ?></span>
                            <h3 class="card-title" style="font-size: 1.15rem; margin-bottom: 0.5rem;"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <?php if ( $lokasi ) : ?>
                                <p style="font-size: 0.85rem; color: var(--color-primary); font-weight: 600; margin-bottom: 0.5rem;"><?php echo esc_html( $lokasi ); ?></p>
                            <?php endif; ?>
                            <div class="card-text" style="font-size: 0.88rem; margin-bottom: 1.25rem; flex: 1;"><?php echo esc_html( wp_trim_words( get_the_excerpt() ? get_the_excerpt() : get_the_content(), 15 ) ); ?></div>
                            <a href="<?php the_permalink(); ?>" class="btn btn-outline" style="align-self: flex-start; padding: 0.4rem 0.9rem; font-size: 0.85rem; margin-top: auto;">Detail Kegiatan &rarr;</a>
                        </div>
                    </div>
                <?php
                endwhile;
            else :
                ?>
                <div style="text-align: center; grid-column: 1/-1; padding: 3rem 0;">
                    <p style="color: var(--color-text-muted); margin-bottom: 1.5rem;">Belum ada kegiatan di lokasi ini.</p>
                    <a href="<?php echo esc_url( get_post_type_archive_link( 'kegiatan' ) ); ?>" class="btn btn-primary">Lihat Semua Kegiatan</a>
                </div>
            <?php endif; ?>
        </div>

        <div style="margin-top: 3rem; text-align: center;">
            <?php the_posts_pagination( array(
                'mid_size'  => 2,
                'prev_text' => __( '&laquo; Sebelumnya', 'cleanique-academy' ),
                'next_text' => __( 'Berikutnya &raquo;', 'cleanique-academy' ),
            ) ); ?>
        </div>

    </div>
</section>

<?php
get_footer();
