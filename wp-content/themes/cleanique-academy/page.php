<?php
/**
 * Generic Page Template
 *
 * Follows DESAIN.md: Modern Professional Academy x Luxury Editorial Corporate
 */
get_header();

while ( have_posts() ) : the_post();
?>

<!-- 1. BESPOKE LUXURY EDITORIAL HERO SECTION -->
<section class="about-hero-section" style="background-image: linear-gradient(145deg, rgba(7, 35, 56, 0.94) 0%, rgba(11, 93, 143, 0.90) 60%, rgba(8, 127, 193, 0.86) 100%), url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-lab-practical.jpg' ); ?>');">
    <div class="container about-hero-container">
        <div class="hero-editorial-pill">
            <span class="pill-pulse-dot"></span>
            <span>CLEANIQUE ACADEMY</span>
        </div>

        <h1 class="about-hero-title">
            <?php the_title(); ?>
        </h1>

        <?php if ( has_excerpt() ) : ?>
            <p class="about-hero-subtitle">
                <?php echo esc_html( get_the_excerpt() ); ?>
            </p>
        <?php endif; ?>

        <nav class="about-hero-breadcrumbs" aria-label="Breadcrumb">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Beranda</a>
            <span class="breadcrumb-separator">&rsaquo;</span>
            <span><?php the_title(); ?></span>
        </nav>
    </div>
</section>

<!-- 2. PAGE CONTENT -->
<section class="section section-decorated" style="padding-top: 3.5rem;">
    <div class="container" style="max-width: 920px;">
        <div style="background: #ffffff; border-radius: var(--radius-xl); padding: 3rem 2.5rem; border: 1px solid var(--color-border); box-shadow: var(--shadow-sm);">
            <article id="post-<?php the_ID(); ?>" <?php post_class( 'article-body' ); ?> style="font-size: 1.05rem; line-height: 1.85; color: #334155;">
                <?php the_content(); ?>
            </article>
        </div>
    </div>
</section>

<?php
endwhile;
get_footer();
