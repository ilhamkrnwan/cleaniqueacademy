<?php
/**
 * Generic Archive Template
 *
 * Follows DESAIN.md: Modern Professional Academy x Luxury Editorial Corporate
 */
get_header();

$archive_title = get_the_archive_title();
$archive_desc  = get_the_archive_description() ? get_the_archive_description() : 'Kumpulan tulisan, panduan formulasi, dan dokumentasi pelatihan kimia Cleanique Academy.';
?>

<!-- 1. BESPOKE LUXURY EDITORIAL HERO SECTION -->
<section class="about-hero-section" style="background-image: linear-gradient(145deg, rgba(7, 35, 56, 0.94) 0%, rgba(11, 93, 143, 0.90) 60%, rgba(8, 127, 193, 0.86) 100%), url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-lab-practical.jpg' ); ?>');">
    <div class="container about-hero-container">
        <div class="hero-editorial-pill">
            <span class="pill-pulse-dot"></span>
            <span>ARSIP KONTEN &amp; EDUKASI</span>
        </div>

        <h1 class="about-hero-title">
            <?php echo esc_html( $archive_title ); ?>
        </h1>

        <p class="about-hero-subtitle">
            <?php echo esc_html( wp_strip_all_tags( $archive_desc ) ); ?>
        </p>

        <nav class="about-hero-breadcrumbs" aria-label="Breadcrumb">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Beranda</a>
            <span class="breadcrumb-separator">&rsaquo;</span>
            <span>Arsip</span>
        </nav>
    </div>
</section>

<!-- 2. ARCHIVE GRID -->
<section class="section section-decorated" style="padding-top: 3.5rem;">
    <div class="container" style="max-width: 1100px;">
        <div class="grid grid-3" style="gap: 1.5rem;">
            <?php
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();
                    ?>
                    <article class="card article-card">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="article-card-image-wrap">
                                <?php the_post_thumbnail( 'medium_large' ); ?>
                            </div>
                        <?php endif; ?>

                        <div class="article-card-body">
                            <span class="article-card-cat" style="margin-bottom: 0.75rem;">
                                <?php echo get_the_date(); ?>
                            </span>

                            <h3 class="card-title" style="font-size: 1.15rem; margin-bottom: 0.5rem;"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <div class="article-card-excerpt"><?php echo esc_html( wp_trim_words( get_the_excerpt() ? get_the_excerpt() : get_the_content(), 16 ) ); ?></div>
                            <a href="<?php the_permalink(); ?>" class="btn btn-outline article-card-cta">Baca Selengkapnya &rarr;</a>
                        </div>
                    </article>
                <?php
                endwhile;
            else :
                ?>
                <div style="text-align: center; grid-column: 1/-1; padding: 3.5rem 0; background: #ffffff; border-radius: var(--radius-lg); border: 1px solid var(--color-border);">
                    <p style="color: var(--color-text-muted); margin-bottom: 1.5rem; font-size: 1.05rem;">Belum ada konten pada arsip ini.</p>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary">Kembali ke Beranda</a>
                </div>
            <?php endif; ?>
        </div>

        <div style="margin-top: 3.5rem; text-align: center;">
            <?php the_posts_pagination( array(
                'mid_size'  => 2,
                'prev_text' => '&larr; Sebelumnya',
                'next_text' => 'Berikutnya &rarr;',
            ) ); ?>
        </div>
    </div>
</section>

<?php
get_footer();
