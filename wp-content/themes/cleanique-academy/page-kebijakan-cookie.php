<?php
/**
 * Template Name: Kebijakan Cookie
 * 
 * Template untuk halaman Kebijakan Cookie (Cookie Policy) Cleanique Academy
 */
get_header();

cleanique_render_page_hero( array(
    'title'    => 'Kebijakan Cookie',
    'badge'    => 'Penggunaan Cookie',
    'subtitle' => 'Penjelasan mengenai penggunaan cookie dan teknologi pelacakan untuk mengoptimalkan pengalaman navigasi di situs Cleanique Academy.',
    'theme'    => 'light',
) );
?>

<section class="section section-decorated">
    <div class="container" style="max-width: 900px;">
        
        <!-- LEGAL TOC BOX -->
        <div class="legal-toc-box">
            <div style="font-size: 0.82rem; font-weight: 800; text-transform: uppercase; letter-spacing: 0.05em; color: var(--color-primary); margin-bottom: 0.6rem;">Daftar Isi Dokumen</div>
            <ul class="legal-toc-list">
                <li><a href="#sec-1">1. Apa Itu Cookie?</a></li>
                <li><a href="#sec-2">2. Jenis Cookie yang Kami Gunakan</a></li>
                <li><a href="#sec-3">3. Pengaturan &amp; Pengelolaan Cookie</a></li>
                <li><a href="#sec-4">4. Hubungi Kami</a></li>
            </ul>
        </div>

        <div style="background: #ffffff; border-radius: var(--radius-md); padding: 3rem 2.5rem; box-shadow: var(--shadow-sm); border: 1px solid var(--color-border); line-height: 1.8; color: var(--color-text);">
            
            <div style="margin-bottom: 2.5rem; padding-bottom: 1.5rem; border-bottom: 1px solid var(--color-border);">
                <p style="font-size: 0.9rem; color: var(--color-text-muted);">
                    Terakhir diperbarui: <strong><?php echo date_i18n( 'j F Y' ); ?></strong>
                </p>
                <p style="font-size: 1.05rem; color: var(--color-text);">
                    Situs web <strong>Cleanique Academy</strong> mengoperasikan teknologi <em>cookie</em> dan sistem penyimpanan lokal peramban untuk memastikan fungsi situs berjalan dengan optimal dan memberikan pengalaman pengguna yang responsif.
                </p>
            </div>

            <article class="legal-content" style="display: flex; flex-direction: column; gap: 2rem;">
                
                <div id="sec-1">
                    <h2 style="font-size: 1.35rem; font-weight: 700; color: var(--color-secondary); margin-bottom: 0.75rem;">1. Apa Itu Cookie?</h2>
                    <p>
                        <em>Cookie</em> adalah berkas teks kecil yang disimpan di perangkat atau komputer Anda oleh peramban (<em>browser</em>) saat Anda mengunjungi situs web. Cookie membantu situs mengenali perangkat Anda pada kunjungan berikutnya serta menyimpan preferensi pengaturan navigasi.
                    </p>
                </div>

                <div id="sec-2">
                    <h2 style="font-size: 1.35rem; font-weight: 700; color: var(--color-secondary); margin-bottom: 0.75rem;">2. Jenis Cookie yang Kami Gunakan</h2>
                    <ul style="padding-left: 1.5rem; margin-bottom: 1rem;">
                        <li><strong>Cookie Esensial:</strong> Diperlukan agar fitur utama situs web dapat berfungsi dengan normal (misalnya sesi pendaftaran dan keamanan).</li>
                        <li><strong>Cookie Performa &amp; Analitik:</strong> Membantu kami memahami bagaimana pengunjung berinteraksi dengan halaman situs web agar kami dapat terus meningkatkan kecepatan dan kenyamanan navigasi.</li>
                        <li><strong>Cookie Fungsionalitas:</strong> Memungkinkan situs mengingat pilihan preferensi Anda seperti bahasa dan riwayat tampilan galeri.</li>
                    </ul>
                </div>

                <div id="sec-3">
                    <h2 style="font-size: 1.35rem; font-weight: 700; color: var(--color-secondary); margin-bottom: 0.75rem;">3. Pengaturan &amp; Pengelolaan Cookie</h2>
                    <p style="margin-bottom: 0.75rem;">
                        Anda memiliki kendali penuh untuk menolak atau menghapus cookie melalui pengaturan peramban Anda (seperti Google Chrome, Mozilla Firefox, atau Safari).
                    </p>
                    <p style="font-size: 0.9rem; color: var(--color-text-muted);">
                        <em>Catatan: Mengnonaktifkan cookie esensial dapat mempengaruhi berjalannya beberapa fungsi dasar pada situs web kami.</em>
                    </p>
                </div>

                <div id="sec-4">
                    <h2 style="font-size: 1.35rem; font-weight: 700; color: var(--color-secondary); margin-bottom: 0.75rem;">4. Hubungi Kami</h2>
                    <p>
                        Jika Anda memiliki pertanyaan mengenai penggunaan cookie di situs Cleanique Academy, silakan hubungi kami via email di <a href="mailto:indotechberkahabadi@gmail.com" style="color: var(--color-primary); font-weight: 600;">indotechberkahabadi@gmail.com</a> atau WhatsApp <a href="https://wa.me/6282215840088" target="_blank" style="color: var(--color-primary); font-weight: 600;">+62 822-1584-0088</a>.
                    </p>
                </div>

            </article>

        </div>

        <!-- INTERNAL NAVIGATION LINKS GRID -->
        <div style="margin-top: 3.5rem;">
            <div class="section-header">
                <span class="section-subtitle">Navigasi Halaman Utama</span>
                <h3 style="font-size: 1.4rem; font-weight: 800; color: #0f172a;">Jelajahi Informasi Lainnya</h3>
                <div class="section-accent-bar"></div>
            </div>
            <div class="internal-links-grid">
                <a href="<?php echo esc_url( home_url( '/kebijakan-privasi/' ) ); ?>" class="internal-link-card">
                    <div class="internal-link-title">Kebijakan Privasi &rarr;</div>
                    <div class="internal-link-desc">Komitmen PT Indotech Berkah Abadi dalam melindungi data pribadi Anda.</div>
                </a>
                <a href="<?php echo esc_url( home_url( '/syarat-ketentuan/' ) ); ?>" class="internal-link-card">
                    <div class="internal-link-title">Syarat &amp; Ketentuan &rarr;</div>
                    <div class="internal-link-desc">Ketentuan pendaftaran, hak cipta modul, dan kebijakan kelas pelatihan.</div>
                </a>
                <a href="<?php echo esc_url( home_url( '/kontak/' ) ); ?>" class="internal-link-card">
                    <div class="internal-link-title">Hubungi Layanan Legal &rarr;</div>
                    <div class="internal-link-desc">Kontak alamat kantor pusat Yogyakarta dan permohonan data pribadi.</div>
                </a>
            </div>
        </div>

    </div>
</section>

<!-- Schema.org Data Structuring (JSON-LD) for Cookie Policy -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "name": "Kebijakan Cookie - Cleanique Academy",
  "url": "<?php echo esc_url( get_permalink() ); ?>",
  "description": "Penjelasan mengenai penggunaan cookie dan teknologi pelacakan untuk mengoptimalkan pengalaman navigasi di situs Cleanique Academy.",
  "publisher": {
    "@type": "Organization",
    "name": "PT Indotech Berkah Abadi"
  }
}
</script>

<?php
get_footer();
