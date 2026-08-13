<?php
/**
 * Category Archive Template
 * Displays posts filtered by WordPress built-in category taxonomy.
 */
get_header();

cleanique_render_page_hero( array(
    'title'    => single_cat_title( '', false ),
    'badge'    => 'Kategori Artikel',
    'subtitle' => category_description() ? wp_strip_all_tags( category_description() ) : sprintf( 'Kumpulan artikel dan tulisan dalam kategori %s.', single_cat_title( '', false ) ),
    'theme'    => 'light',
) );
?>

<section class="section">
    <div class="container">

        <!-- Category Navigation -->
        <?php
        $categories = get_categories( array(
            'hide_empty' => true,
            'exclude'    => 1, // Exclude "Uncategorized"
        ) );

        if ( ! empty( $categories ) ) : ?>
            <div style="display: flex; gap: 0.5rem; flex-wrap: wrap; margin-bottom: 2.5rem; justify-content: center;">
                <a href="<?php echo esc_url( home_url( '/artikel/' ) ); ?>"
                   class="btn btn-outline"
                   style="padding: 0.4rem 1rem; font-size: 0.85rem;">
                    Semua Artikel
                </a>
                <?php foreach ( $categories as $cat ) : ?>
                    <a href="<?php echo esc_url( get_category_link( $cat->term_id ) ); ?>"
                       class="btn btn-outline"
                       style="padding: 0.4rem 1rem; font-size: 0.85rem; <?php echo ( is_category( $cat->slug ) ) ? 'background: var(--color-primary); color: #fff; border-color: var(--color-primary);' : ''; ?>">
                        <?php echo esc_html( $cat->name ); ?>
                    </a>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <div class="grid grid-3">
            <?php
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();
                    ?>
                    <article class="card">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div style="margin: -2rem -2rem 1.25rem -2rem; overflow: hidden; border-radius: var(--radius-md) var(--radius-md) 0 0;">
                                <?php the_post_thumbnail( 'medium_large', array( 'style' => 'width:100%; height:180px; object-fit:cover;' ) ); ?>
                            </div>
                        <?php endif; ?>

                        <span style="display:inline-block; padding:0.25rem 0.75rem; border-radius:var(--radius-full); background:var(--color-primary-light); color:var(--color-primary); font-size:0.78rem; font-weight:700; margin-bottom:0.75rem; width:fit-content;">
                            <?php echo get_the_date(); ?>
                        </span>

                        <h3 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <div class="card-text"><?php echo esc_html( wp_trim_words( get_the_excerpt() ? get_the_excerpt() : get_the_content(), 18 ) ); ?></div>
                        <a href="<?php the_permalink(); ?>" class="btn btn-outline" style="align-self: flex-start; padding: 0.4rem 0.9rem; font-size: 0.85rem;">Baca Artikel</a>
                    </article>
                <?php
                endwhile;
            else :
                ?>
                <div style="text-align: center; grid-column: 1/-1; padding: 3rem 0;">
                    <p style="color: var(--color-text-muted); margin-bottom: 1.5rem;">Belum ada artikel dalam kategori ini.</p>
                    <a href="<?php echo esc_url( home_url( '/artikel/' ) ); ?>" class="btn btn-primary">Lihat Semua Artikel</a>
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
