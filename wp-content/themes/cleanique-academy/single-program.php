<?php
/**
 * Single Program Template (Detail Program Pelatihan)
 *
 * Follows DESAIN.md: Modern Professional Academy x Luxury Editorial Corporate
 */
get_header();

while ( have_posts() ) : the_post();
    $target    = get_post_meta( get_the_ID(), '_cac_target_peserta', true );
    $durasi    = get_post_meta( get_the_ID(), '_cac_durasi_program', true );
    $harga     = get_post_meta( get_the_ID(), '_cac_harga_program', true );
    $fasilitas = get_post_meta( get_the_ID(), '_cac_fasilitas_program', true );
?>

<!-- 1. BESPOKE LUXURY EDITORIAL HERO SECTION -->
<section class="about-hero-section" style="background-image: linear-gradient(145deg, rgba(7, 35, 56, 0.94) 0%, rgba(11, 93, 143, 0.90) 60%, rgba(8, 127, 193, 0.86) 100%), url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-lab-practical.jpg' ); ?>');">
    <div class="container about-hero-container">
        <div class="hero-editorial-pill">
            <span class="pill-pulse-dot"></span>
            <span>DETAIL PROGRAM PELATIHAN</span>
        </div>

        <h1 class="about-hero-title" style="font-size: clamp(1.85rem, 3.5vw, 2.75rem); max-width: 900px; margin: 0 auto 1.25rem auto;">
            <?php the_title(); ?>
        </h1>

        <!-- Metadata Strip -->
        <div style="display: flex; align-items: center; justify-content: center; flex-wrap: wrap; gap: 1.25rem; margin-bottom: 1.5rem; color: #bae6fd; font-weight: 600; font-size: 0.92rem;">
            <?php if ( $durasi ) : ?>
                <span style="display: inline-flex; align-items: center; gap: 0.4rem;">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#38bdf8" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                    <span>Durasi: <?php echo esc_html( $durasi ); ?></span>
                </span>
                <span style="color: rgba(255,255,255,0.4);">&bull;</span>
            <?php endif; ?>

            <?php if ( $harga ) : ?>
                <span style="display: inline-flex; align-items: center; gap: 0.4rem;">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#38bdf8" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                    <span>Investasi: <?php echo esc_html( $harga ); ?></span>
                </span>
                <span style="color: rgba(255,255,255,0.4);">&bull;</span>
            <?php endif; ?>

            <?php if ( $target ) : ?>
                <span style="display: inline-flex; align-items: center; gap: 0.4rem;">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#38bdf8" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                    <span>Target: <?php echo esc_html( $target ); ?></span>
                </span>
            <?php endif; ?>
        </div>

        <nav class="about-hero-breadcrumbs" aria-label="Breadcrumb">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Beranda</a>
            <span class="breadcrumb-separator">&rsaquo;</span>
            <a href="<?php echo esc_url( home_url( '/program-pelatihan/' ) ); ?>">Program Pelatihan</a>
            <span class="breadcrumb-separator">&rsaquo;</span>
            <span><?php echo esc_html( wp_trim_words( get_the_title(), 5 ) ); ?></span>
        </nav>
    </div>
</section>

<!-- 2. DETAIL PROGRAM CONTENT -->
<section class="section" style="padding-top: 3.5rem;">
    <div class="container" style="max-width: 900px;">
        
        <?php if ( has_post_thumbnail() ) : ?>
            <div style="margin-bottom: 2.75rem; border-radius: var(--radius-xl); overflow: hidden; box-shadow: var(--shadow-md); border: 1px solid var(--color-border);">
                <?php the_post_thumbnail( 'full', array( 'style' => 'width:100%; height:auto; display:block;' ) ); ?>
            </div>
        <?php endif; ?>

        <?php if ( $fasilitas ) : ?>
            <div class="editorial-quote-box" style="margin-bottom: 2.5rem; background: var(--color-primary-light); border-color: #bae6fd;">
                <div class="editorial-badge" style="margin-bottom: 0.75rem;">
                    <span class="badge-dot"></span>
                    <span>FASILITAS RESMI</span>
                    <span class="badge-code">PAKET PELATIHAN</span>
                </div>
                <div style="color: var(--color-primary-dark); font-size: 1.05rem; font-weight: 500; line-height: 1.7;">
                    <?php echo nl2br( esc_html( $fasilitas ) ); ?>
                </div>
            </div>
        <?php endif; ?>

        <div class="entry-content" style="font-size: 1.05rem; line-height: 1.85; margin-bottom: 3.5rem; color: #334155;">
            <?php the_content(); ?>
        </div>

    </div>
</section>

<!-- 3. SEKSI KONTAK & CALL TO ACTION (DEEP BLUE) -->
<section id="kontak" class="section section-dark-cta">
    <div class="container" style="max-width: 880px;">
        <div class="contact-cta-box">
            <span class="contact-cta-subtitle">KONSULTASI &amp; JADWAL BATCH</span>
            <h2 class="contact-cta-title">Siap Bergabung Dalam Program Ini?</h2>
            <p class="contact-cta-desc">Konsultasikan kebutuhan pelatihan, ketersediaan jadwal batch terdekat di Sleman Yogyakarta, dan penawaran investasi bersama konsultan kami.</p>
            <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya ingin mendaftar program: ' . get_the_title() ) ); ?>" target="_blank" class="btn btn-whatsapp btn-cta-large">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.157 4.228 4.228-1.157zm12.339-6.495c-.068-.113-.25-.181-.523-.317-.272-.136-1.61-.795-1.86-.886-.25-.091-.432-.136-.613.136-.182.272-.704.886-.863 1.067-.159.182-.318.204-.59.068-.272-.136-1.151-.424-2.193-1.353-.81-.723-1.357-1.616-1.516-1.888-.159-.272-.017-.419.119-.554.122-.122.272-.318.408-.477.136-.159.182-.272.272-.454.091-.182.045-.341-.023-.477-.068-.136-.613-1.477-.84-2.023-.222-.534-.447-.461-.613-.469-.159-.008-.341-.01-.523-.01s-.477.068-.727.341c-.25.272-.954.932-.954 2.273s.977 2.636 1.114 2.818c.136.182 1.923 2.936 4.659 4.116.65.281 1.158.448 1.554.573.653.207 1.247.178 1.716.108.523-.078 1.61-.658 1.838-1.295.227-.636.227-1.181.159-1.295z"/></svg>
                <span>Daftar Program via WhatsApp</span>
            </a>
        </div>
    </div>
</section>

<?php
endwhile;
get_footer();
