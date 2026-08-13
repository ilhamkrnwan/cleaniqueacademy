<?php
get_header();
?>

<div class="hero" style="padding: 4rem 0 3rem 0;">
    <div class="container" style="text-align: center;">
        <span class="section-subtitle">Katalog Pelatihan</span>
        <h1 class="hero-title" style="margin-bottom: 0.5rem;">Program <span>Pelatihan</span> Cleanique Academy</h1>
        <p class="hero-description" style="max-width: 600px; margin: 0 auto;">Pilih program pelatihan terbaik untuk meningkatkan skala bisnis kimia dan cleaning produk Anda.</p>
    </div>
</div>

<section class="section">
    <div class="container">
        <div class="grid grid-3">
            <?php
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();
                    $durasi = get_post_meta( get_the_ID(), '_cac_durasi_program', true );
                    $harga  = get_post_meta( get_the_ID(), '_cac_harga_program', true );
                    $target = get_post_meta( get_the_ID(), '_cac_target_peserta', true );
                    ?>
                    <div class="card">
                        <span class="card-badge"><?php echo $durasi ? esc_html( $durasi ) : 'Program Pelatihan'; ?></span>
                        <h3 class="card-title"><?php the_title(); ?></h3>
                        <?php if ( $target ) : ?>
                            <p style="font-size: 0.85rem; color: var(--color-primary); font-weight: 600; margin-bottom: 0.5rem;">Target: <?php echo esc_html( $target ); ?></p>
                        <?php endif; ?>
                        <div class="card-text"><?php echo esc_html( wp_trim_words( get_the_excerpt() ? get_the_excerpt() : get_the_content(), 20 ) ); ?></div>
                        <div style="margin-top: auto; padding-top: 1rem; border-top: 1px solid var(--color-border); display: flex; align-items: center; justify-content: space-between;">
                            <span style="font-weight: 700; color: var(--color-secondary);"><?php echo $harga ? esc_html( $harga ) : 'Hubungi Kami'; ?></span>
                            <a href="<?php the_permalink(); ?>" class="btn btn-outline" style="padding: 0.4rem 0.9rem; font-size: 0.85rem;">Detail Program</a>
                        </div>
                    </div>
                <?php
                endwhile;
            else :
                ?>
                <p style="text-align: center; grid-column: 1/-1;">Belum ada program pelatihan yang dipublikasikan.</p>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php
get_footer();
