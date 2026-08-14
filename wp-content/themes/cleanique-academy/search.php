<?php
/**
 * Search Results Template
 * Displays search results from WordPress search queries.
 */
get_header();

cleanique_render_page_hero( array(
    'title'    => sprintf( 'Hasil Pencarian: "%s"', get_search_query() ),
    'badge'    => 'Pencarian',
    'subtitle' => sprintf( 'Menampilkan hasil pencarian untuk kata kunci "%s" di seluruh konten Cleanique Academy.', get_search_query() ),
    'theme'    => 'light',
) );
?>

<section class="section">
    <div class="container">
        <?php if ( have_posts() ) : ?>

            <p style="color: var(--color-text-muted); margin-bottom: 2rem; font-size: 0.95rem;">
                Ditemukan <?php echo esc_html( $wp_query->found_posts ); ?> hasil untuk "<strong><?php echo esc_html( get_search_query() ); ?></strong>"
            </p>

            <div class="grid grid-3">
                <?php while ( have_posts() ) : the_post(); ?>
                    <article class="card article-card">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="article-card-image-wrap">
                                <?php the_post_thumbnail( 'medium_large' ); ?>
                            </div>
                        <?php endif; ?>

                        <div class="article-card-body">
                            <span style="display:inline-block; padding:0.25rem 0.75rem; border-radius:var(--radius-full); background:var(--color-primary-light); color:var(--color-primary); font-size:0.78rem; font-weight:700; margin-bottom:0.75rem; width:fit-content; text-transform:uppercase;">
                                <?php
                                $post_type_obj = get_post_type_object( get_post_type() );
                                echo esc_html( $post_type_obj ? $post_type_obj->labels->singular_name : 'Konten' );
                                ?>
                            </span>

                            <h3 class="card-title" style="font-size: 1.15rem; margin-bottom: 0.5rem;"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <div class="card-text" style="font-size: 0.88rem; line-height: 1.55; margin-bottom: 1.25rem; flex: 1;"><?php echo esc_html( wp_trim_words( get_the_excerpt() ? get_the_excerpt() : get_the_content(), 18 ) ); ?></div>
                            <a href="<?php the_permalink(); ?>" class="btn btn-outline" style="align-self: flex-start; padding: 0.4rem 0.9rem; font-size: 0.85rem; margin-top: auto;">Lihat Detail &rarr;</a>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>

            <div style="margin-top: 3rem; text-align: center;">
                <?php the_posts_pagination( array(
                    'mid_size'  => 2,
                    'prev_text' => __( '&laquo; Sebelumnya', 'cleanique-academy' ),
                    'next_text' => __( 'Berikutnya &raquo;', 'cleanique-academy' ),
                ) ); ?>
            </div>

        <?php else : ?>

            <div style="text-align: center; padding: 4rem 0;">
                <h2 style="font-size: 1.8rem; margin-bottom: 1rem; color: var(--color-text-main);">Tidak Ditemukan Hasil</h2>
                <p style="color: var(--color-text-muted); margin-bottom: 2rem; max-width: 500px; margin-left: auto; margin-right: auto;">
                    Maaf, tidak ditemukan konten yang cocok dengan kata kunci "<strong><?php echo esc_html( get_search_query() ); ?></strong>". Silakan coba kata kunci lain atau kembali ke beranda.
                </p>
                <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary">Kembali ke Beranda</a>
                    <a href="<?php echo esc_url( home_url( '/program-pelatihan/' ) ); ?>" class="btn btn-outline">Lihat Program</a>
                </div>
            </div>

        <?php endif; ?>
    </div>
</section>

<?php
get_footer();
