<?php
/**
 * Taxonomy Archive Template - Kategori Program
 * Displays program posts filtered by taxonomy term (kategori_program).
 */
get_header();

$term = get_queried_object();

cleanique_render_page_hero( array(
    'title'    => single_term_title( '', false ),
    'badge'    => 'Kategori Program',
    'subtitle' => term_description() ? wp_strip_all_tags( term_description() ) : sprintf( 'Daftar program pelatihan Cleanique Academy dalam kategori %s.', single_term_title( '', false ) ),
    'theme'    => 'light',
) );
?>

<section class="section">
    <div class="container">

        <!-- Kategori Program Navigation -->
        <?php
        $all_terms = get_terms( array(
            'taxonomy'   => 'kategori_program',
            'hide_empty' => true,
        ) );

        if ( ! is_wp_error( $all_terms ) && ! empty( $all_terms ) ) : ?>
            <div style="display: flex; gap: 0.5rem; flex-wrap: wrap; margin-bottom: 2.5rem; justify-content: center;">
                <a href="<?php echo esc_url( get_post_type_archive_link( 'program' ) ); ?>"
                   class="btn btn-outline"
                   style="padding: 0.4rem 1rem; font-size: 0.85rem;">
                    Semua Program
                </a>
                <?php foreach ( $all_terms as $t ) : ?>
                    <a href="<?php echo esc_url( get_term_link( $t ) ); ?>"
                       class="btn btn-outline"
                       style="padding: 0.4rem 1rem; font-size: 0.85rem; <?php echo ( is_tax( 'kategori_program', $t->slug ) ) ? 'background: var(--color-primary); color: #fff; border-color: var(--color-primary);' : ''; ?>">
                        <?php echo esc_html( $t->name ); ?>
                    </a>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <div class="grid grid-3">
            <?php
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();
                    $durasi = get_post_meta( get_the_ID(), '_cac_durasi_program', true );
                    $harga  = get_post_meta( get_the_ID(), '_cac_harga_program', true );
                    $target = get_post_meta( get_the_ID(), '_cac_target_peserta', true );
                    ?>
                    <div class="card article-card">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="article-card-image-wrap" style="height: 200px;">
                                <?php the_post_thumbnail( 'medium_large' ); ?>
                            </div>
                        <?php endif; ?>
                        <div class="article-card-body">
                            <span class="card-badge" style="margin-bottom: 0.75rem; width: fit-content;"><?php echo $durasi ? esc_html( $durasi ) : 'Program Pelatihan'; ?></span>
                            <h3 class="card-title" style="font-size: 1.15rem; margin-bottom: 0.5rem;"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <?php if ( $target ) : ?>
                                <p style="font-size: 0.85rem; color: var(--color-primary); font-weight: 600; margin-bottom: 0.5rem;">Target: <?php echo esc_html( $target ); ?></p>
                            <?php endif; ?>
                            <div class="card-text" style="font-size: 0.88rem; margin-bottom: 1.25rem; flex: 1;"><?php echo esc_html( wp_trim_words( get_the_excerpt() ? get_the_excerpt() : get_the_content(), 20 ) ); ?></div>
                            <div style="margin-top: auto; padding-top: 1rem; border-top: 1px solid var(--color-border); display: flex; align-items: center; justify-content: space-between;">
                                <span style="font-weight: 700; color: var(--color-secondary);"><?php echo $harga ? esc_html( $harga ) : 'Hubungi Kami'; ?></span>
                                <a href="<?php the_permalink(); ?>" class="btn btn-outline" style="padding: 0.4rem 0.9rem; font-size: 0.85rem;">Detail Program &rarr;</a>
                            </div>
                        </div>
                    </div>
                <?php
                endwhile;
            else :
                ?>
                <div style="text-align: center; grid-column: 1/-1; padding: 3rem 0;">
                    <p style="color: var(--color-text-muted); margin-bottom: 1.5rem;">Belum ada program dalam kategori ini.</p>
                    <a href="<?php echo esc_url( get_post_type_archive_link( 'program' ) ); ?>" class="btn btn-primary">Lihat Semua Program</a>
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
