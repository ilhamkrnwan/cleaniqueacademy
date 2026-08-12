<?php
/**
 * Template Name: Halaman Artikel & Edukasi
 */
get_header();

cleanique_render_page_hero( array(
    'title'    => 'Artikel & Edukasi Kimia Kebersihan',
    'badge'    => 'Pusat Informasi',
    'subtitle' => 'Kumpulan panduan praktis, resep formulasi, dan tips bisnis cleaning products dari praktisi berpengalaman.',
    'theme'    => 'light',
) );
?>

<section class="section">
    <div class="container">
        
        <div class="grid grid-3" style="margin-bottom: 4rem;">
            <?php
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            $blog_query = new WP_Query( array(
                'post_type'      => 'post',
                'posts_per_page' => 9,
                'paged'          => $paged,
            ) );

            if ( $blog_query->have_posts() ) :
                while ( $blog_query->have_posts() ) : $blog_query->the_post();
                    $thumb_url = cleanique_get_post_thumbnail_url( get_the_ID(), 'medium_large' );
                    ?>
                    <div class="card">
                        <div style="margin: -2rem -2rem 1.25rem -2rem; overflow: hidden; border-radius: var(--radius-md) var(--radius-md) 0 0;">
                            <img src="<?php echo esc_url( $thumb_url ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>" style="width:100%; height:180px; object-fit:cover;">
                        </div>

                        <span style="display:inline-block; padding:0.25rem 0.75rem; border-radius:var(--radius-full); background:var(--color-primary-light); color:var(--color-primary); font-size:0.8rem; font-weight:700; margin-bottom:0.75rem; width:fit-content;">
                            <?php echo get_the_date(); ?>
                        </span>

                        <h3 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <div class="card-text"><?php echo esc_html( wp_trim_words( get_the_excerpt() ? get_the_excerpt() : get_the_content(), 18 ) ); ?></div>
                        <a href="<?php the_permalink(); ?>" class="btn btn-outline" style="align-self: flex-start; padding: 0.4rem 0.9rem; font-size: 0.85rem;">Baca Artikel</a>
                    </div>
                <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p style="color: var(--color-text-muted);">Belum ada artikel yang dipublikasikan.</p>';
            endif;
            ?>
        </div>

    </div>
</section>

<?php
get_footer();
