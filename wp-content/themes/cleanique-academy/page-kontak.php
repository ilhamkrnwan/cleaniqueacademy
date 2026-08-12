<?php
/**
 * Template Name: Halaman Kontak
 */
get_header();
?>

<div class="hero" style="padding: 4rem 0 3rem 0;">
    <div class="container" style="text-align: center;">
        <span class="section-subtitle">Kontak & Layanan</span>
        <h1 class="hero-title" style="margin-bottom: 0.5rem;">Hubungi <span>Kami</span></h1>
        <p class="hero-description" style="max-width: 600px; margin: 0 auto;">Kami siap membantu kebutuhan konsultasi dan informasi program pelatihan Anda.</p>
    </div>
</div>

<section class="section">
    <div class="container" style="max-width: 900px;">
        <div class="grid grid-2">
            <div class="card">
                <h3 style="font-size: 1.35rem; margin-bottom: 1rem;">Informasi Kontak</h3>
                <p style="margin-bottom: 0.75rem;"><strong>📍 Alamat Penyelenggaraan:</strong><br><span style="color: var(--color-text-muted);">Yogyakarta & Kota-kota Besar Indonesia</span></p>
                <p style="margin-bottom: 0.75rem;"><strong>📱 WhatsApp Official:</strong><br><span style="color: var(--color-text-muted);">0812-3456-7890</span></p>
                <p style="margin-bottom: 0.75rem;"><strong>✉️ Email:</strong><br><span style="color: var(--color-text-muted);">info@cleaniqueacademy.com</span></p>
                <p style="margin-bottom: 0.75rem;"><strong>🕒 Jam Operasional:</strong><br><span style="color: var(--color-text-muted);">Senin - Sabtu (08.00 - 17.00 WIB)</span></p>
            </div>

            <div class="card" style="background-color: var(--color-bg-surface);">
                <h3 style="font-size: 1.35rem; margin-bottom: 1rem;">Konsultasi Cepat</h3>
                <p style="color: var(--color-text-muted); margin-bottom: 1.5rem;">Dapatkan respons cepat mengenai jadwal pelatihan terdekat atau pendaftaran privat training via WhatsApp.</p>
                <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya ingin berkonsultasi mengenai pelatihan.' ) ); ?>" target="_blank" class="btn btn-whatsapp" style="width: 100%;">
                    Chat via WhatsApp Sekarang
                </a>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
