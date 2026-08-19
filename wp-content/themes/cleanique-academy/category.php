<?php
/**
 * Category Archive Template
 * Displays posts filtered by WordPress built-in category taxonomy.
 * Follows DESAIN.md: Modern Professional Academy x Luxury Editorial Corporate
 */
get_header();

$cat_title = single_cat_title( '', false );
$cat_desc  = category_description() ? wp_strip_all_tags( category_description() ) : sprintf( 'Kumpulan artikel dan panduan formulasi dalam topik kategori %s.', $cat_title );
?>

<!-- 1. BESPOKE LUXURY EDITORIAL HERO SECTION -->
<section class="about-hero-section" style="background-image: linear-gradient(145deg, rgba(7, 35, 56, 0.94) 0%, rgba(11, 93, 143, 0.90) 60%, rgba(8, 127, 193, 0.86) 100%), url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-lab-practical.jpg' ); ?>');">
    <div class="container about-hero-container">
        <div class="hero-editorial-pill">
            <span class="pill-pulse-dot"></span>
            <span>KATEGORI ARTIKEL &bull; <?php echo esc_html( strtoupper( $cat_title ) ); ?></span>
        </div>

        <h1 class="about-hero-title">
            Topik: <?php echo esc_html( $cat_title ); ?>
        </h1>

        <p class="about-hero-subtitle">
            <?php echo esc_html( $cat_desc ); ?>
        </p>

        <nav class="about-hero-breadcrumbs" aria-label="Breadcrumb">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Beranda</a>
            <span class="breadcrumb-separator">&rsaquo;</span>
            <a href="<?php echo esc_url( home_url( '/artikel/' ) ); ?>">Artikel</a>
            <span class="breadcrumb-separator">&rsaquo;</span>
            <span><?php echo esc_html( $cat_title ); ?></span>
        </nav>
    </div>
</section>

<section class="section section-decorated">
    <div class="container" style="max-width: 1100px;">

        <!-- Category Navigation Bar -->
        <?php
        $categories = get_categories( array(
            'hide_empty' => true,
            'exclude'    => 1, // Exclude "Uncategorized"
        ) );

        if ( ! empty( $categories ) ) : ?>
            <div style="display: flex; gap: 0.6rem; flex-wrap: wrap; margin-bottom: 2.75rem; justify-content: center;">
                <a href="<?php echo esc_url( home_url( '/artikel/' ) ); ?>"
                   class="btn btn-outline"
                   style="padding: 0.45rem 1.1rem; font-size: 0.85rem; border-radius: var(--radius-full);">
                    Semua Artikel
                </a>
                <?php foreach ( $categories as $cat ) : ?>
                    <a href="<?php echo esc_url( get_category_link( $cat->term_id ) ); ?>"
                       class="btn btn-outline"
                       style="padding: 0.45rem 1.1rem; font-size: 0.85rem; border-radius: var(--radius-full); <?php echo ( is_category( $cat->slug ) ) ? 'background: var(--color-primary); color: #fff; border-color: var(--color-primary);' : ''; ?>">
                        <?php echo esc_html( $cat->name ); ?>
                    </a>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <?php
        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
        if ( have_posts() ) :
            if ( $paged == 1 ) :
                // Render 1st post as Featured Article Highlight
                the_post();
                $featured_thumb    = cleanique_get_post_thumbnail_url( get_the_ID(), 'full' );
                $featured_cats     = get_the_category();
                $featured_cat_name = ! empty( $featured_cats ) ? $featured_cats[0]->name : 'Edukasi';
                $featured_author   = get_the_author() ? get_the_author() : 'Tim Riset Cleanique';
                $featured_readtime = cleanique_get_reading_time( get_the_content() );
                ?>
                <!-- ARTIKEL SOROTAN UTAMA KATEGORI -->
                <div class="featured-article-card">
                    <div class="featured-article-image-wrap">
                        <img src="<?php echo esc_url( $featured_thumb ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>">
                        <span class="featured-badge-top">ARTIKEL PILIHAN</span>
                    </div>
                    <div class="featured-article-content">
                        <div class="featured-article-meta-header">
                            <span class="featured-category-badge">
                                <?php echo esc_html( $featured_cat_name ); ?>
                            </span>
                            <span class="featured-reading-time">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#087FC1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                                <span><?php echo esc_html( $featured_readtime ); ?></span>
                            </span>
                        </div>

                        <h2 class="featured-article-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>

                        <div class="featured-article-meta">
                            <span class="article-card-meta-item">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#087FC1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                <span><?php echo esc_html( $featured_author ); ?></span>
                            </span>
                            <span style="color: #cbd5e1;">&bull;</span>
                            <span class="article-card-meta-item">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#087FC1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                <span><?php echo get_the_date(); ?></span>
                            </span>
                        </div>

                        <p class="featured-article-excerpt">
                            <?php echo esc_html( wp_trim_words( get_the_excerpt() ? get_the_excerpt() : get_the_content(), 28 ) ); ?>
                        </p>

                        <div class="featured-article-action">
                            <a href="<?php the_permalink(); ?>" class="btn btn-primary" style="padding: 0.65rem 1.35rem; font-size: 0.92rem; border-radius: var(--radius-md);">
                                Baca Panduan Lengkap &rarr;
                            </a>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if ( have_posts() ) : ?>
                <div class="grid grid-3" style="margin-bottom: 3.5rem; gap: 1.5rem;">
                    <?php
                    while ( have_posts() ) : the_post();
                        $thumb_url    = cleanique_get_post_thumbnail_url( get_the_ID(), 'medium_large' );
                        $cats         = get_the_category();
                        $card_cat_name= ! empty( $cats ) ? $cats[0]->name : 'Edukasi';
                        $author_name  = get_the_author() ? get_the_author() : 'Tim Riset Cleanique';
                        $reading_time = cleanique_get_reading_time( get_the_content() );
                        ?>
                        <article class="card article-card">
                            <div class="article-card-image-wrap">
                                <img src="<?php echo esc_url( $thumb_url ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>">
                            </div>

                            <div class="article-card-body">
                                <!-- Category Badge & Reading Time Icon -->
                                <div class="article-card-header">
                                    <span class="article-card-cat">
                                        <?php echo esc_html( $card_cat_name ); ?>
                                    </span>
                                    <span class="article-card-readingtime">
                                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#087FC1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                                        <span><?php echo esc_html( $reading_time ); ?></span>
                                    </span>
                                </div>

                                <h3 class="card-title" style="font-size: 1.15rem; line-height: 1.4; margin-bottom: 0.6rem;"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

                                <!-- Author & Date Metadata with SVG Icons -->
                                <div class="article-card-meta">
                                    <span class="article-card-meta-item">
                                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#087FC1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <span><?php echo esc_html( $author_name ); ?></span>
                                    </span>
                                    <span style="color: #cbd5e1;">&bull;</span>
                                    <span class="article-card-meta-item">
                                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#087FC1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                        <span><?php echo get_the_date(); ?></span>
                                    </span>
                                </div>

                                <div class="article-card-excerpt"><?php echo esc_html( wp_trim_words( get_the_excerpt() ? get_the_excerpt() : get_the_content(), 15 ) ); ?></div>
                                
                                <a href="<?php the_permalink(); ?>" class="btn btn-outline article-card-cta">Baca Selengkapnya &rarr;</a>
                            </div>
                        </article>
                    <?php
                    endwhile;
                    ?>
                </div>
            <?php endif; ?>
        <?php else : ?>
            <div style="text-align: center; grid-column: 1/-1; padding: 3.5rem 0; background: #ffffff; border-radius: var(--radius-lg); border: 1px solid var(--color-border);">
                <p style="color: var(--color-text-muted); margin-bottom: 1.5rem; font-size: 1.05rem;">Belum ada artikel dalam kategori ini.</p>
                <a href="<?php echo esc_url( home_url( '/artikel/' ) ); ?>" class="btn btn-primary">Lihat Semua Artikel</a>
            </div>
        <?php endif; ?>

        <div style="margin-top: 3rem; text-align: center;">
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
