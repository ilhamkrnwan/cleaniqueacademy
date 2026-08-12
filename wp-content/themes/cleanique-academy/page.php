<?php
get_header();

while ( have_posts() ) : the_post();
    cleanique_render_page_hero( array(
        'title'    => get_the_title(),
        'badge'    => 'Cleanique Academy',
        'subtitle' => get_the_excerpt() ? get_the_excerpt() : '',
        'theme'    => 'light',
    ) );
?>

<section class="section">
    <div class="container" style="max-width: 900px;">
        <article id="post-<?php the_ID(); ?>" <?php post_class( 'article-body' ); ?>>
            <?php the_content(); ?>
        </article>
    </div>
</section>

<?php
endwhile;
get_footer();
