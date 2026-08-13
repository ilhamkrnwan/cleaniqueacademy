<?php
get_header();

while ( have_posts() ) : the_post();
    $target    = get_post_meta( get_the_ID(), '_cac_target_peserta', true );
    $durasi    = get_post_meta( get_the_ID(), '_cac_durasi_program', true );
    $harga     = get_post_meta( get_the_ID(), '_cac_harga_program', true );
    $fasilitas = get_post_meta( get_the_ID(), '_cac_fasilitas_program', true );
?>

<div class="hero" style="padding: 4rem 0 3rem 0;">
    <div class="container" style="max-width: 900px;">
        <span class="section-subtitle">Detail Program Pelatihan</span>
        <h1 class="hero-title" style="margin-bottom: 1rem;"><?php the_title(); ?></h1>
        <div style="display: flex; gap: 1.5rem; flex-wrap: wrap; color: var(--color-text-muted); font-weight: 600;">
            <?php if ( $durasi ) : ?><span>Durasi: <?php echo esc_html( $durasi ); ?></span><?php endif; ?>
            <?php if ( $harga ) : ?><span>Investasi: <?php echo esc_html( $harga ); ?></span><?php endif; ?>
            <?php if ( $target ) : ?><span>Target: <?php echo esc_html( $target ); ?></span><?php endif; ?>
        </div>
    </div>
</div>

<section class="section">
    <div class="container" style="max-width: 900px;">
        <?php if ( has_post_thumbnail() ) : ?>
            <div style="margin-bottom: 2.5rem; border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-md);">
                <?php the_post_thumbnail( 'full', array( 'style' => 'width:100%; height:auto;' ) ); ?>
            </div>
        <?php endif; ?>

        <?php if ( $fasilitas ) : ?>
            <div class="card" style="margin-bottom: 2.5rem; background-color: var(--color-primary-light); border-color: #bae6fd;">
                <h3 style="font-size: 1.2rem; color: var(--color-primary-hover); margin-bottom: 0.5rem;">Fasilitas Pelatihan</h3>
                <p><?php echo nl2br( esc_html( $fasilitas ) ); ?></p>
            </div>
        <?php endif; ?>

        <div class="entry-content" style="font-size: 1.05rem; line-height: 1.8;">
            <?php the_content(); ?>
        </div>

        <div style="margin-top: 3.5rem; padding: 2.5rem; background: var(--color-bg-surface); border: 1px solid var(--color-border); border-radius: var(--radius-lg); text-align: center;">
            <h3 style="margin-bottom: 0.75rem;">Siap Bergabung Dalam Program Ini?</h3>
            <p style="color: var(--color-text-muted); margin-bottom: 1.5rem;">Konsultasikan kebutuhan pelatihan Anda dengan tim konsultan kami via WhatsApp.</p>
            <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya ingin mendaftar program: ' . get_the_title() ) ); ?>" target="_blank" class="btn btn-whatsapp">
                Daftar Program via WhatsApp
            </a>
        </div>
    </div>
</section>

<?php
endwhile;
get_footer();
