<?php
get_header();
?>

<section class="section" style="padding: 8rem 0; text-align: center;">
    <div class="container" style="max-width: 600px;">
        <h1 style="font-size: 5rem; color: var(--color-primary); margin-bottom: 1rem;">404</h1>
        <h2 style="margin-bottom: 1rem;">Halaman Tidak Ditemukan</h2>
        <p style="color: var(--color-text-muted); margin-bottom: 2rem;">Maaf, halaman yang Anda cari tidak tersedia atau telah dipindahkan.</p>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary">Kembali ke Beranda</a>
    </div>
</section>

<?php
get_footer();
