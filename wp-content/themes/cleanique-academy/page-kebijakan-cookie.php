<?php
/**
 * Template Name: Kebijakan Cookie
 * 
 * Template untuk halaman Kebijakan Cookie (Cookie Policy) Cleanique Academy
 * Follows DESAIN.md: Modern Professional Academy x Luxury Editorial Corporate
 */
get_header();
?>

<!-- 1. BESPOKE LUXURY EDITORIAL HERO SECTION -->
<section class="about-hero-section" style="background-image: linear-gradient(145deg, rgba(7, 35, 56, 0.94) 0%, rgba(11, 93, 143, 0.90) 60%, rgba(8, 127, 193, 0.86) 100%), url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-lab-practical.jpg' ); ?>');">
    <div class="container about-hero-container">
        <div class="hero-editorial-pill">
            <span class="pill-pulse-dot"></span>
            <span>PENGGUNAAN TEKNOLOGI &amp; COOKIE</span>
        </div>

        <h1 class="about-hero-title">
            Kebijakan Cookie
        </h1>

        <p class="about-hero-subtitle">
            Penjelasan mengenai penggunaan cookie dan teknologi pelacakan anonim untuk mengoptimalkan kenyamanan serta performa navigasi di platform Cleanique Academy.
        </p>

        <nav class="about-hero-breadcrumbs" aria-label="Breadcrumb">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Beranda</a>
            <span class="breadcrumb-separator">&rsaquo;</span>
            <span>Kebijakan Cookie</span>
        </nav>
    </div>
</section>

<!-- 2. LEGAL CONTENT SECTION -->
<section class="section section-decorated" style="padding-top: 3.5rem;">
    <div class="container" style="max-width: 900px;">
        
        <!-- LEGAL TOC BOX -->
        <div class="legal-toc-box" style="border-radius: var(--radius-lg); margin-bottom: 2rem;">
            <div style="font-size: 0.82rem; font-weight: 800; text-transform: uppercase; letter-spacing: 0.05em; color: var(--color-primary-dark); margin-bottom: 0.6rem;">Daftar Isi Dokumen</div>
            <ul class="legal-toc-list">
                <li><a href="#sec-1">1. Apa Itu Cookie?</a></li>
                <li><a href="#sec-2">2. Jenis Cookie yang Kami Gunakan</a></li>
                <li><a href="#sec-3">3. Pengaturan &amp; Pengelolaan Cookie</a></li>
                <li><a href="#sec-4">4. Hubungi Kami</a></li>
            </ul>
        </div>

        <div style="background: #ffffff; border-radius: var(--radius-xl); padding: 3rem 2.5rem; box-shadow: var(--shadow-sm); border: 1px solid var(--color-border); line-height: 1.8; color: var(--color-text-main);">
            
            <div style="margin-bottom: 2.5rem; padding-bottom: 1.5rem; border-bottom: 1px solid var(--color-border);">
                <p style="font-size: 0.9rem; color: var(--color-text-muted); margin-bottom: 0.5rem;">
                    Terakhir diperbarui: <strong><?php echo date_i18n( 'j F Y' ); ?></strong>
                </p>
                <p style="font-size: 1.02rem; color: var(--color-text-main); margin: 0;">
                    Situs web <strong>Cleanique Academy</strong> mengoperasikan teknologi <em>cookie</em> dan sistem penyimpanan lokal peramban untuk memastikan fungsi situs berjalan dengan optimal dan memberikan pengalaman navigasi yang responsif.
                </p>
            </div>

            <article class="legal-content" style="display: flex; flex-direction: column; gap: 2rem;">
                
                <div id="sec-1">
                    <h2 style="font-size: 1.35rem; font-weight: 800; color: var(--color-primary-dark); margin-bottom: 0.75rem;">1. Apa Itu Cookie?</h2>
                    <p>
                        <em>Cookie</em> adalah berkas teks kecil yang disimpan di perangkat atau komputer Anda oleh peramban (<em>browser</em>) saat Anda mengunjungi situs web. Cookie membantu situs mengenali perangkat Anda pada kunjungan berikutnya serta menyimpan preferensi pengaturan navigasi.
                    </p>
                </div>

                <div id="sec-2">
                    <h2 style="font-size: 1.35rem; font-weight: 800; color: var(--color-primary-dark); margin-bottom: 0.75rem;">2. Jenis Cookie yang Kami Gunakan</h2>
                    <ul style="padding-left: 1.5rem; margin-bottom: 1rem;">
                        <li><strong>Cookie Esensial:</strong> Diperlukan agar fitur utama situs web dapat berfungsi dengan normal (misalnya sesi pendaftaran dan keamanan).</li>
                        <li><strong>Cookie Performa &amp; Analitik:</strong> Membantu kami memahami bagaimana pengunjung berinteraksi dengan halaman situs web agar kami dapat terus meningkatkan kecepatan dan kenyamanan navigasi.</li>
                        <li><strong>Cookie Fungsionalitas:</strong> Memungkinkan situs mengingat pilihan preferensi Anda seperti riwayat pencarian dan tampilan galeri.</li>
                    </ul>
                </div>

                <div id="sec-3">
                    <h2 style="font-size: 1.35rem; font-weight: 800; color: var(--color-primary-dark); margin-bottom: 0.75rem;">3. Pengaturan &amp; Pengelolaan Cookie</h2>
                    <p style="margin-bottom: 0.75rem;">
                        Anda memiliki kendali penuh untuk menolak atau menghapus cookie melalui pengaturan peramban Anda (seperti Google Chrome, Mozilla Firefox, atau Safari).
                    </p>
                    <p style="font-size: 0.9rem; color: var(--color-text-muted);">
                        <em>Catatan: Menonaktifkan cookie esensial dapat mempengaruhi berjalannya beberapa fungsi dasar pada situs web kami.</em>
                    </p>
                </div>

                <div id="sec-4">
                    <h2 style="font-size: 1.35rem; font-weight: 800; color: var(--color-primary-dark); margin-bottom: 0.75rem;">4. Hubungi Kami</h2>
                    <p>
                        Jika Anda memiliki pertanyaan mengenai penggunaan cookie di situs Cleanique Academy, silakan hubungi kami via email di <a href="mailto:indotechberkahabadi@gmail.com" style="color: var(--color-primary); font-weight: 600;">indotechberkahabadi@gmail.com</a> atau WhatsApp <a href="https://wa.me/6282215840088" target="_blank" style="color: var(--color-primary); font-weight: 600;">+62 822-1584-0088</a>.
                    </p>
                </div>

            </article>

        </div>

        <!-- INTERNAL NAVIGATION LINKS GRID -->
        <div style="margin-top: 3.5rem;">
            <div class="section-header">
                <div class="editorial-badge">
                    <span class="badge-dot"></span>
                    <span>NAVIGASI DOKUMEN</span>
                    <span class="badge-code">INFORMASI LEGAL</span>
                </div>
                <h3 class="section-title" style="font-size: 1.6rem; margin-bottom: 0.5rem;">Dokumen Legalitas Terkait</h3>
                <div class="section-accent-bar"></div>
            </div>
            <div class="internal-links-grid">
                <a href="<?php echo esc_url( home_url( '/kebijakan-privasi/' ) ); ?>" class="internal-link-card">
                    <div class="internal-link-icon-box">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                    </div>
                    <div class="internal-link-title">
                        <span>Kebijakan Privasi</span>
                        <span class="internal-link-arrow">&rarr;</span>
                    </div>
                    <p class="internal-link-desc">Komitmen PT Indotech Berkah Abadi dalam melindungi data pribadi Anda.</p>
                </a>
                <a href="<?php echo esc_url( home_url( '/syarat-ketentuan/' ) ); ?>" class="internal-link-card">
                    <div class="internal-link-icon-box">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                    </div>
                    <div class="internal-link-title">
                        <span>Syarat &amp; Ketentuan</span>
                        <span class="internal-link-arrow">&rarr;</span>
                    </div>
                    <p class="internal-link-desc">Ketentuan pendaftaran, hak cipta modul, dan kebijakan kelas pelatihan.</p>
                </a>
                <a href="<?php echo esc_url( home_url( '/kontak/' ) ); ?>" class="internal-link-card">
                    <div class="internal-link-icon-box">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                    </div>
                    <div class="internal-link-title">
                        <span>Hubungi Layanan Legal</span>
                        <span class="internal-link-arrow">&rarr;</span>
                    </div>
                    <p class="internal-link-desc">Kontak alamat kantor pusat Sleman Yogyakarta dan permohonan data pribadi.</p>
                </a>
            </div>
        </div>

    </div>
</section>

<?php
get_footer();
