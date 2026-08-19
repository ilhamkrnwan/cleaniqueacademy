<?php
/**
 * Taxonomy Archive Template - Lokasi Kegiatan
 * Displays kegiatan posts filtered by taxonomy term (lokasi_kegiatan).
 * Follows DESAIN.md: Modern Professional Academy x Luxury Editorial Corporate
 */
get_header();

$term_title = single_term_title( '', false );
$term_desc  = term_description() ? wp_strip_all_tags( term_description() ) : sprintf( 'Daftar dokumentasi workshop dan pelatihan Cleanique Academy di %s.', $term_title );
?>

<!-- 1. BESPOKE LUXURY EDITORIAL HERO SECTION -->
<section class="about-hero-section" style="background-image: linear-gradient(145deg, rgba(7, 35, 56, 0.94) 0%, rgba(11, 93, 143, 0.90) 60%, rgba(8, 127, 193, 0.86) 100%), url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-lab-practical.jpg' ); ?>');">
    <div class="container about-hero-container">
        <div class="hero-editorial-pill">
            <span class="pill-pulse-dot"></span>
            <span>LOKASI KEGIATAN &bull; <?php echo esc_html( strtoupper( $term_title ) ); ?></span>
        </div>

        <h1 class="about-hero-title">
            Pelatihan di <?php echo esc_html( $term_title ); ?>
        </h1>

        <p class="about-hero-subtitle">
            <?php echo esc_html( $term_desc ); ?>
        </p>

        <nav class="about-hero-breadcrumbs" aria-label="Breadcrumb">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Beranda</a>
            <span class="breadcrumb-separator">&rsaquo;</span>
            <a href="<?php echo esc_url( home_url( '/dokumentasi-event/' ) ); ?>">Dokumentasi</a>
            <span class="breadcrumb-separator">&rsaquo;</span>
            <span><?php echo esc_html( $term_title ); ?></span>
        </nav>
    </div>
</section>

<section class="section section-decorated">
    <div class="container" style="max-width: 1100px;">

        <!-- Lokasi Term Navigation -->
        <?php
        $all_terms = get_terms( array(
            'taxonomy'   => 'lokasi_kegiatan',
            'hide_empty' => true,
        ) );

        if ( ! is_wp_error( $all_terms ) && ! empty( $all_terms ) ) : ?>
            <div style="display: flex; gap: 0.6rem; flex-wrap: wrap; margin-bottom: 2.75rem; justify-content: center;">
                <a href="<?php echo esc_url( home_url( '/dokumentasi-event/' ) ); ?>"
                   class="btn btn-outline"
                   style="padding: 0.45rem 1.1rem; font-size: 0.85rem; border-radius: var(--radius-full);">
                    Semua Kegiatan
                </a>
                <?php foreach ( $all_terms as $t ) : ?>
                    <a href="<?php echo esc_url( get_term_link( $t ) ); ?>"
                       class="btn btn-outline"
                       style="padding: 0.45rem 1.1rem; font-size: 0.85rem; border-radius: var(--radius-full); <?php echo ( is_tax( 'lokasi_kegiatan', $t->slug ) ) ? 'background: var(--color-primary); color: #fff; border-color: var(--color-primary);' : ''; ?>">
                        <?php echo esc_html( $t->name ); ?>
                    </a>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <div class="grid grid-3" style="margin-bottom: 3.5rem; gap: 1.5rem;">
            <?php
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();
                    $tanggal = get_post_meta( get_the_ID(), '_cac_tanggal_kegiatan', true );
                    $lokasi  = get_post_meta( get_the_ID(), '_cac_lokasi_detail', true );
                    ?>
                    <div class="gallery-overlay-card">
                        <div class="gallery-card-image-wrap">
                            <img src="<?php echo esc_url( cleanique_get_kegiatan_thumbnail_url( get_the_ID() ) ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>">
                            <div class="gallery-card-badge-top">
                                <?php echo $tanggal ? esc_html( $tanggal ) : 'Workshop Pelatihan'; ?>
                            </div>
                        </div>
                        <div class="gallery-card-overlay">
                            <div class="gallery-card-content">
                                <span class="gallery-card-lokasi"><?php echo $lokasi ? esc_html( $lokasi ) : 'Training Center Sleman'; ?></span>
                                <h3 class="gallery-card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <p class="gallery-card-desc"><?php echo esc_html( wp_trim_words( get_the_excerpt() ? get_the_excerpt() : get_the_content(), 15 ) ); ?></p>
                                <div class="gallery-card-actions">
                                    <a href="<?php the_permalink(); ?>" class="gallery-card-btn">Lihat Detail Event &rarr;</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                endwhile;
            else :
                ?>
                <div style="text-align: center; grid-column: 1/-1; padding: 3.5rem 0; background: #ffffff; border-radius: var(--radius-lg); border: 1px solid var(--color-border);">
                    <p style="color: var(--color-text-muted); margin-bottom: 1.5rem; font-size: 1.05rem;">Belum ada kegiatan di lokasi ini.</p>
                    <a href="<?php echo esc_url( home_url( '/dokumentasi-event/' ) ); ?>" class="btn btn-primary">Lihat Semua Kegiatan</a>
                </div>
            <?php endif; ?>
        </div>

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
