<?php
/**
 * Search Results Template
 * Displays search results from WordPress search queries.
 * Follows DESAIN.md: Modern Professional Academy x Luxury Editorial Corporate
 */
get_header();

$search_term = get_search_query();
?>

<!-- 1. BESPOKE LUXURY EDITORIAL HERO SECTION -->
<section class="about-hero-section" style="background-image: linear-gradient(145deg, rgba(7, 35, 56, 0.94) 0%, rgba(11, 93, 143, 0.90) 60%, rgba(8, 127, 193, 0.86) 100%), url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-lab-practical.jpg' ); ?>');">
    <div class="container about-hero-container">
        <div class="hero-editorial-pill">
            <span class="pill-pulse-dot"></span>
            <span>PENCARIAN KONTEN &bull; <?php echo esc_html( strtoupper( $search_term ) ); ?></span>
        </div>

        <h1 class="about-hero-title">
            Hasil Pencarian: &ldquo;<?php echo esc_html( $search_term ); ?>&rdquo;
        </h1>

        <p class="about-hero-subtitle">
            Menampilkan hasil temuan artikel, materi formulasi kimia, dan galeri pelatihan untuk kata kunci &ldquo;<?php echo esc_html( $search_term ); ?>&rdquo;.
        </p>

        <nav class="about-hero-breadcrumbs" aria-label="Breadcrumb">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Beranda</a>
            <span class="breadcrumb-separator">&rsaquo;</span>
            <span>Pencarian</span>
        </nav>
    </div>
</section>

<!-- 2. SEARCH RESULTS GRID -->
<section class="section section-decorated" style="padding-top: 3.5rem;">
    <div class="container" style="max-width: 1100px;">
        <?php if ( have_posts() ) : ?>

            <div style="margin-bottom: 2.5rem; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 1rem; border-bottom: 1px solid var(--color-border); padding-bottom: 1rem;">
                <p style="color: var(--color-text-muted); margin: 0; font-size: 0.95rem;">
                    Ditemukan <strong style="color: var(--color-primary-dark);"><?php echo esc_html( $wp_query->found_posts ); ?></strong> konten yang relevan:
                </p>
                
                <form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" style="display: flex; gap: 0.5rem; min-width: 260px;">
                    <input type="search" placeholder="Cari kata kunci lain..." value="<?php echo get_search_query(); ?>" name="s" style="padding: 0.45rem 0.85rem; border: 1px solid var(--color-border); border-radius: var(--radius-sm); font-size: 0.85rem; width: 100%;">
                    <button type="submit" class="btn btn-primary" style="padding: 0.45rem 0.85rem; font-size: 0.85rem;">Cari</button>
                </form>
            </div>

            <div class="grid grid-3" style="gap: 1.5rem;">
                <?php while ( have_posts() ) : the_post(); ?>
                    <article class="card article-card">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="article-card-image-wrap">
                                <?php the_post_thumbnail( 'medium_large' ); ?>
                            </div>
                        <?php endif; ?>

                        <div class="article-card-body">
                            <span class="article-card-cat" style="margin-bottom: 0.75rem;">
                                <?php
                                $post_type_obj = get_post_type_object( get_post_type() );
                                echo esc_html( $post_type_obj ? $post_type_obj->labels->singular_name : 'Konten' );
                                ?>
                            </span>

                            <h3 class="card-title" style="font-size: 1.15rem; margin-bottom: 0.5rem;"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <div class="article-card-excerpt"><?php echo esc_html( wp_trim_words( get_the_excerpt() ? get_the_excerpt() : get_the_content(), 16 ) ); ?></div>
                            <a href="<?php the_permalink(); ?>" class="btn btn-outline article-card-cta">Lihat Detail &rarr;</a>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>

            <div style="margin-top: 3.5rem; text-align: center;">
                <?php the_posts_pagination( array(
                    'mid_size'  => 2,
                    'prev_text' => '&larr; Sebelumnya',
                    'next_text' => 'Berikutnya &rarr;',
                ) ); ?>
            </div>

        <?php else : ?>

            <div style="text-align: center; padding: 4rem 2rem; background: #ffffff; border-radius: var(--radius-xl); border: 1px solid var(--color-border); box-shadow: var(--shadow-sm); max-width: 700px; margin: 0 auto;">
                <div class="editorial-badge" style="margin-bottom: 1rem;">
                    <span class="badge-dot"></span>
                    <span>HASIL NIHIL</span>
                </div>
                <h2 style="font-size: 1.6rem; margin-bottom: 0.75rem; color: var(--color-primary-dark);">Tidak Ditemukan Hasil yang Cocok</h2>
                <p style="color: var(--color-text-muted); margin-bottom: 2rem; line-height: 1.6;">
                    Maaf, tidak ditemukan konten atau panduan formulasi yang cocok dengan kata kunci &ldquo;<strong><?php echo esc_html( get_search_query() ); ?></strong>&rdquo;. Silakan coba dengan kata kunci lain atau pilih program pelatihan kami.
                </p>
                <div style="display: flex; gap: 0.75rem; justify-content: center; flex-wrap: wrap;">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary" style="padding: 0.65rem 1.35rem; border-radius: var(--radius-md);">Kembali ke Beranda</a>
                    <a href="<?php echo esc_url( home_url( '/program-pelatihan/' ) ); ?>" class="btn btn-outline" style="padding: 0.65rem 1.35rem; border-radius: var(--radius-md);">Lihat Katalog Program &rarr;</a>
                </div>
            </div>

        <?php endif; ?>
    </div>
</section>

<?php
get_footer();
