<?php
get_header();

cleanique_render_page_hero( array(
    'title'    => get_the_archive_title(),
    'badge'    => 'Arsip Artikel & Event',
    'subtitle' => get_the_archive_description() ? get_the_archive_description() : 'Kumpulan tulisan dan dokumentasi pelatihan kimia Cleanique Academy.',
    'theme'    => 'light',
) );
?>

<section class="section">
    <div class="container">
        <div class="grid grid-3">
            <?php
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();
                    ?>
                    <div class="card article-card">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="article-card-image-wrap">
                                <?php the_post_thumbnail( 'medium_large' ); ?>
                            </div>
                        <?php endif; ?>

                        <div class="article-card-body">
                            <span style="display:inline-block; padding:0.25rem 0.75rem; border-radius:var(--radius-full); background:var(--color-primary-light); color:var(--color-primary); font-size:0.8rem; font-weight:700; margin-bottom:0.75rem; width:fit-content;">
                                <?php echo get_the_date(); ?>
                            </span>

                            <h3 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <div class="card-text" style="flex:1; margin-bottom: 1rem;"><?php echo esc_html( wp_trim_words( get_the_excerpt() ? get_the_excerpt() : get_the_content(), 18 ) ); ?></div>
                            <a href="<?php the_permalink(); ?>" class="btn btn-outline" style="align-self: flex-start; padding: 0.4rem 0.9rem; font-size: 0.85rem; margin-top: auto;">Baca Artikel</a>
                        </div>
                    </div>
                <?php
                endwhile;
                the_posts_navigation();
            else :
                echo '<p style="color: var(--color-text-muted);">Belum ada konten pada arsip ini.</p>';
            endif;
            ?>
        </div>
    </div>
</section>

<?php
get_footer();
