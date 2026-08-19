<?php
/**
 * Archive Program Template
 *
 * Follows DESAIN.md: Modern Professional Academy x Luxury Editorial Corporate
 */
get_header();
?>

<!-- 1. BESPOKE LUXURY EDITORIAL HERO SECTION -->
<section class="about-hero-section" style="background-image: linear-gradient(145deg, rgba(7, 35, 56, 0.94) 0%, rgba(11, 93, 143, 0.90) 60%, rgba(8, 127, 193, 0.86) 100%), url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-lab-practical.jpg' ); ?>');">
    <div class="container about-hero-container">
        <div class="hero-editorial-pill">
            <span class="pill-pulse-dot"></span>
            <span>KATALOG KELAS &amp; WORKSHOP</span>
        </div>

        <h1 class="about-hero-title">
            Program Pelatihan Cleanique Academy
        </h1>

        <p class="about-hero-subtitle">
            Pilihan program praktikum formulasi kimia kebersihan dan laundry terlengkap di Sleman Yogyakarta untuk mencetak wirausaha mandiri berdaya saing.
        </p>

        <nav class="about-hero-breadcrumbs" aria-label="Breadcrumb">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Beranda</a>
            <span class="breadcrumb-separator">&rsaquo;</span>
            <span>Program Pelatihan</span>
        </nav>
    </div>
</section>

<section class="section section-decorated">
    <div class="container" style="max-width: 1100px;">
        <div class="grid grid-3" style="gap: 1.5rem;">
            <?php
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();
                    $durasi = get_post_meta( get_the_ID(), '_cac_durasi_program', true );
                    $harga  = get_post_meta( get_the_ID(), '_cac_harga_program', true );
                    $target = get_post_meta( get_the_ID(), '_cac_target_peserta', true );
                    ?>
                    <div class="card article-card">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="article-card-image-wrap">
                                <?php the_post_thumbnail( 'medium_large' ); ?>
                            </div>
                        <?php endif; ?>
                        <div class="article-card-body">
                            <span class="card-badge" style="margin-bottom: 0.75rem; width: fit-content;"><?php echo $durasi ? esc_html( $durasi ) : 'Program Pelatihan'; ?></span>
                            <h3 class="card-title" style="font-size: 1.15rem; margin-bottom: 0.5rem;"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <?php if ( $target ) : ?>
                                <p style="font-size: 0.85rem; color: var(--color-primary); font-weight: 600; margin-bottom: 0.5rem;">Target: <?php echo esc_html( $target ); ?></p>
                            <?php endif; ?>
                            <div class="card-text" style="font-size: 0.88rem; margin-bottom: 1.25rem; flex: 1;"><?php echo esc_html( wp_trim_words( get_the_excerpt() ? get_the_excerpt() : get_the_content(), 18 ) ); ?></div>
                            <div style="margin-top: auto; padding-top: 1rem; border-top: 1px solid var(--color-border); display: flex; align-items: center; justify-content: space-between;">
                                <span style="font-weight: 800; color: var(--color-primary-dark); font-size: 1rem;"><?php echo $harga ? esc_html( $harga ) : 'Hubungi CS'; ?></span>
                                <a href="<?php the_permalink(); ?>" class="btn btn-outline" style="padding: 0.4rem 0.9rem; font-size: 0.85rem;">Detail Program &rarr;</a>
                            </div>
                        </div>
                    </div>
                <?php
                endwhile;
            else :
                ?>
                <div style="text-align: center; grid-column: 1/-1; padding: 3.5rem 0; background: #ffffff; border-radius: var(--radius-lg); border: 1px solid var(--color-border);">
                    <p style="color: var(--color-text-muted); margin-bottom: 1.5rem; font-size: 1.05rem;">Belum ada program pelatihan yang dipublikasikan.</p>
                    <a href="<?php echo esc_url( home_url( '/program-pelatihan/' ) ); ?>" class="btn btn-primary">Lihat Katalog Promo</a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php
get_footer();
