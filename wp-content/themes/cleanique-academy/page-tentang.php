<?php
/**
 * Template Name: Halaman Tentang Kami
 */
get_header();
?>

<div class="hero" style="padding: 4rem 0 3rem 0;">
    <div class="container" style="text-align: center;">
        <span class="section-subtitle">Tentang Kami</span>
        <h1 class="hero-title" style="margin-bottom: 0.5rem;">Tentang <span>Cleanique Academy</span></h1>
        <p class="hero-description" style="max-width: 650px; margin: 0 auto;">Pusat edukasi dan pelatihan profesional formulasi kimia, laundry, dan homecare di Indonesia.</p>
    </div>
</div>

<section class="section">
    <div class="container" style="max-width: 850px;">
        <div class="card" style="margin-bottom: 2rem;">
            <h2 style="font-size: 1.5rem; margin-bottom: 1rem;">Visi & Misi</h2>
            <p style="color: var(--color-text-muted); line-height: 1.8;">
                Cleanique Academy didirikan untuk memberikan edukasi terstruktur dan solusi praktis bagi para pelaku usaha kecil, menengah, hingga industri di bidang kimia pembersih (cleaning chemical), laundry, dan produk perawatan rumah tangga (homecare).
            </p>
        </div>

        <div class="grid grid-2" style="margin-bottom: 2rem;">
            <div class="card">
                <h3 style="font-size: 1.25rem; margin-bottom: 0.75rem;">Fokus Pelatihan</h3>
                <ul style="list-style-type: disc; padding-left: 1.2rem; color: var(--color-text-muted);">
                    <li>Formulasi Kimia Deterjen & Softerner</li>
                    <li>Sistem Operasional Laundry Profesional</li>
                    <li>Produk Pembersih Rumah Tangga & Industri</li>
                    <li>Manajemen Mutu & Kontrol Bahan Baku</li>
                </ul>
            </div>

            <div class="card">
                <h3 style="font-size: 1.25rem; margin-bottom: 0.75rem;">Metodologi Pembelajaran</h3>
                <ul style="list-style-type: disc; padding-left: 1.2rem; color: var(--color-text-muted);">
                    <li>Teori Praktis & Pemahaman Formula</li>
                    <li>Praktikum Langsung di Laboratorium/Class</li>
                    <li>Pengujian Kualitas Produk Hasil Praktikum</li>
                    <li>Konsultasi & Pendampingan Paska Pelatihan</li>
                </ul>
            </div>
        </div>

        <div style="text-align: center; margin-top: 3rem;">
            <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya ingin bertanya lebih lanjut seputar profil academy.' ) ); ?>" target="_blank" class="btn btn-whatsapp">
                Hubungi Tim Kami
            </a>
        </div>
    </div>
</section>

<?php
get_footer();
