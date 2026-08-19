<?php
/**
 * 404 Error Page Template
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
            <span>ERROR 404 &bull; HALAMAN TIDAK DITEMUKAN</span>
        </div>

        <h1 class="about-hero-title" style="font-size: clamp(2.5rem, 6vw, 4.5rem); margin-bottom: 0.5rem;">
            404
        </h1>

        <p class="about-hero-subtitle">
            Maaf, tautan yang Anda tuju tidak tersedia atau telah dipindahkan ke alamat baru.
        </p>

        <nav class="about-hero-breadcrumbs" aria-label="Breadcrumb">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Beranda</a>
            <span class="breadcrumb-separator">&rsaquo;</span>
            <span>404 Error</span>
        </nav>
    </div>
</section>

<!-- 2. 404 CONTENT & HELPFUL LINKS -->
<section class="section section-decorated" style="padding: 5rem 0;">
    <div class="container" style="max-width: 800px; text-align: center;">
        <div style="background: #ffffff; border-radius: var(--radius-xl); padding: 3.5rem 2.5rem; border: 1px solid var(--color-border); box-shadow: var(--shadow-sm);">
            <div class="editorial-badge" style="margin-bottom: 1.25rem;">
                <span class="badge-dot"></span>
                <span>PANDUAN NAVIGASI</span>
            </div>
            <h2 style="font-size: 1.75rem; font-weight: 800; color: #0f172a; margin-bottom: 0.75rem;">Mencari Informasi Tertentu?</h2>
            <p style="color: var(--color-text-muted); font-size: 1rem; line-height: 1.65; max-width: 540px; margin: 0 auto 2.25rem auto;">
                Gunakan pencarian di bawah atau kembali ke halaman utama untuk melihat katalog program pelatihan kami.
            </p>

            <form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" style="max-width: 460px; margin: 0 auto 2.25rem auto; display: flex; gap: 0.5rem;">
                <input type="search" placeholder="Cari materi formulasi atau artikel..." value="" name="s" style="padding: 0.65rem 1rem; border: 1px solid var(--color-border); border-radius: var(--radius-md); font-size: 0.92rem; width: 100%;">
                <button type="submit" class="btn btn-primary" style="padding: 0.65rem 1.25rem; font-size: 0.92rem; border-radius: var(--radius-md);">Cari</button>
            </form>

            <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary" style="padding: 0.75rem 1.6rem; border-radius: var(--radius-md);">Kembali ke Beranda</a>
                <a href="<?php echo esc_url( home_url( '/program-pelatihan/' ) ); ?>" class="btn btn-outline" style="padding: 0.75rem 1.6rem; border-radius: var(--radius-md);">Katalog Program Pelatihan &rarr;</a>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
