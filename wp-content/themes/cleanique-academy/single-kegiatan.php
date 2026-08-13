<?php
get_header();

while ( have_posts() ) : the_post();
    $tanggal = get_post_meta( get_the_ID(), '_cac_tanggal_kegiatan', true );
    $lokasi  = get_post_meta( get_the_ID(), '_cac_lokasi_detail', true );
    $peserta = get_post_meta( get_the_ID(), '_cac_jumlah_peserta', true );
    $materi  = get_post_meta( get_the_ID(), '_cac_materi_singkat', true );
?>

<div class="hero" style="padding: 4rem 0 3rem 0;">
    <div class="container" style="max-width: 900px;">
        <span class="section-subtitle">Dokumentasi Kegiatan</span>
        <h1 class="hero-title" style="margin-bottom: 1rem;"><?php the_title(); ?></h1>
        <div style="display: flex; gap: 1.5rem; flex-wrap: wrap; color: var(--color-text-muted); font-weight: 600;">
            <?php if ( $tanggal ) : ?><span>Tanggal: <?php echo esc_html( $tanggal ); ?></span><?php endif; ?>
            <?php if ( $lokasi ) : ?><span>Lokasi: <?php echo esc_html( $lokasi ); ?></span><?php endif; ?>
            <?php if ( $peserta ) : ?><span>Peserta: <?php echo esc_html( $peserta ); ?></span><?php endif; ?>
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

        <?php if ( $materi ) : ?>
            <div class="card" style="margin-bottom: 2.5rem; background-color: var(--color-primary-light); border-color: #bae6fd;">
                <h3 style="font-size: 1.2rem; color: var(--color-primary-hover); margin-bottom: 0.5rem;">Materi & Pokok Bahasan</h3>
                <p><?php echo nl2br( esc_html( $materi ) ); ?></p>
            </div>
        <?php endif; ?>

        <div class="entry-content" style="font-size: 1.05rem; line-height: 1.8;">
            <?php the_content(); ?>
        </div>

        <div style="margin-top: 3.5rem; padding: 2.5rem; background: var(--color-bg-surface); border: 1px solid var(--color-border); border-radius: var(--radius-lg); text-align: center;">
            <h3 style="margin-bottom: 0.75rem;">Tertarik Mengikuti Kegiatan Serupa?</h3>
            <p style="color: var(--color-text-muted); margin-bottom: 1.5rem;">Dapatkan informasi jadwal terdekat dan penawaran pelatihan berikutnya.</p>
            <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo, saya tertarik dengan kegiatan: ' . get_the_title() ) ); ?>" target="_blank" class="btn btn-whatsapp">
                Tanya Jadwal via WhatsApp
            </a>
        </div>
    </div>
</section>

<?php
endwhile;
get_footer();
