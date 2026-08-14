<?php
get_header();
?>

<div class="hero" style="padding: 4rem 0 3rem 0;">
    <div class="container" style="text-align: center;">
        <h1 class="hero-title"><?php single_post_title(); ?></h1>
    </div>
</div>

<section class="section">
    <div class="container" style="max-width: 800px;">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                ?>
                <article class="card" style="margin-bottom: 2rem;">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div style="color: var(--color-text-muted); font-size: 0.9rem; margin-bottom: 1rem;"><?php echo get_the_date(); ?></div>
                    <div><?php the_excerpt(); ?></div>
                </article>
            <?php
            endwhile;
        endif;
        ?>
    </div>
</section>

<?php
get_footer();
