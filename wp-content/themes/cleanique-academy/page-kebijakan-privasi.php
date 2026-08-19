<?php
/**
 * Template Name: Kebijakan Privasi
 * 
 * Template untuk halaman Kebijakan Privasi (Privacy Policy) Cleanique Academy
 * Follows DESAIN.md: Modern Professional Academy x Luxury Editorial Corporate
 */
get_header();
?>

<!-- 1. BESPOKE LUXURY EDITORIAL HERO SECTION -->
<section class="about-hero-section" style="background-image: linear-gradient(145deg, rgba(7, 35, 56, 0.94) 0%, rgba(11, 93, 143, 0.90) 60%, rgba(8, 127, 193, 0.86) 100%), url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-lab-practical.jpg' ); ?>');">
    <div class="container about-hero-container">
        <div class="hero-editorial-pill">
            <span class="pill-pulse-dot"></span>
            <span>DOKUMEN LEGAL &amp; TATA KELOLA DATA</span>
        </div>

        <h1 class="about-hero-title">
            Kebijakan Privasi
        </h1>

        <p class="about-hero-subtitle">
            Komitmen PT Indotech Berkah Abadi dalam melindungi, mengelola, dan menjaga kerahasiaan data pribadi pengunjung serta alumni peserta pelatihan.
        </p>

        <nav class="about-hero-breadcrumbs" aria-label="Breadcrumb">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Beranda</a>
            <span class="breadcrumb-separator">&rsaquo;</span>
            <span>Kebijakan Privasi</span>
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
                <li><a href="#sec-1">1. Informasi yang Kami Kumpulkan</a></li>
                <li><a href="#sec-2">2. Penggunaan Informasi</a></li>
                <li><a href="#sec-3">3. Perlindungan &amp; Keamanan Data</a></li>
                <li><a href="#sec-4">4. Hak Pengguna atas Data</a></li>
                <li><a href="#sec-5">5. Kontak Pengaduan Privasi</a></li>
            </ul>
        </div>

        <div style="background: #ffffff; border-radius: var(--radius-xl); padding: 3rem 2.5rem; box-shadow: var(--shadow-sm); border: 1px solid var(--color-border); line-height: 1.8; color: var(--color-text-main);">
            
            <div style="margin-bottom: 2.5rem; padding-bottom: 1.5rem; border-bottom: 1px solid var(--color-border);">
                <p style="font-size: 0.9rem; color: var(--color-text-muted); margin-bottom: 0.5rem;">
                    Terakhir diperbarui: <strong><?php echo date_i18n( 'j F Y' ); ?></strong>
                </p>
                <p style="font-size: 1.02rem; color: var(--color-text-main); margin: 0;">
                    Di <strong>Cleanique Academy</strong> (PT Indotech Berkah Abadi), kami menghargai privasi setiap pengunjung situs web dan peserta pelatihan kami. Dokumen Kebijakan Privasi ini menjelaskan jenis informasi yang kami kumpulkan, bagaimana informasi tersebut digunakan, dan langkah-langkah yang kami ambil untuk melindungi data Anda.
                </p>
            </div>

            <article class="legal-content" style="display: flex; flex-direction: column; gap: 2rem;">
                
                <div id="sec-1">
                    <h2 style="font-size: 1.35rem; font-weight: 800; color: var(--color-primary-dark); margin-bottom: 0.75rem;">1. Informasi yang Kami Kumpulkan</h2>
                    <p style="margin-bottom: 0.75rem;">Kami mengumpulkan beberapa jenis informasi dari dan tentang pengguna situs web kami, termasuk:</p>
                    <ul style="padding-left: 1.5rem; margin-bottom: 1rem;">
                        <li><strong>Data Pendaftaran Pelatihan:</strong> Nama lengkap, nomor telepon/WhatsApp, alamat email, kota asal, dan riwayat pendaftaran kelas pelatihan.</li>
                        <li><strong>Komunikasi Konsultasi:</strong> Pesan atau pertanyaan yang Anda kirimkan melalui formulir kontak atau aplikasi percakapan WhatsApp official kami.</li>
                        <li><strong>Data Akses Teknis:</strong> Alamat IP, jenis peramban (browser), halaman yang dikunjungi, dan durasi sesi untuk keperluan analisis analitik anonim.</li>
                    </ul>
                </div>

                <div id="sec-2">
                    <h2 style="font-size: 1.35rem; font-weight: 800; color: var(--color-primary-dark); margin-bottom: 0.75rem;">2. Penggunaan Informasi</h2>
                    <p style="margin-bottom: 0.75rem;">Informasi yang kami kumpulkan digunakan secara eksklusif untuk kepentingan layanan berikut:</p>
                    <ul style="padding-left: 1.5rem; margin-bottom: 1rem;">
                        <li>Memproses pendaftaran, pengiriman jadwal, modul pelatihan, dan penerbitan sertifikat kepesertaan.</li>
                        <li>Menghubungi Anda terkait konfirmasi pembayaran, pengingat jadwal kelas, atau informasi teknis pelatihan.</li>
                        <li>Memberikan dukungan konsultasi pasca-pelatihan melalui grup mitra WhatsApp.</li>
                        <li>Meningkatkan kualitas konten materi pelatihan dan kenyamanan navigasi situs web Cleanique Academy.</li>
                    </ul>
                </div>

                <div id="sec-3">
                    <h2 style="font-size: 1.35rem; font-weight: 800; color: var(--color-primary-dark); margin-bottom: 0.75rem;">3. Perlindungan &amp; Keamanan Data</h2>
                    <p>
                        PT Indotech Berkah Abadi menerapkan standar keamanan teknis dan organisasional untuk mencegah akses yang tidak sah, pengungkapan, atau penyalahgunaan data pribadi Anda. Kami <strong>tidak pernah menjual, menyewakan, atau membagikan</strong> informasi pribadi Anda kepada pihak ketiga mana pun untuk tujuan pemasaran tanpa persetujuan eksplisit Anda.
                    </p>
                </div>

                <div id="sec-4">
                    <h2 style="font-size: 1.35rem; font-weight: 800; color: var(--color-primary-dark); margin-bottom: 0.75rem;">4. Hak Pengguna atas Data</h2>
                    <p style="margin-bottom: 0.75rem;">Sebagai pemilik data pribadi, Anda memiliki hak untuk:</p>
                    <ul style="padding-left: 1.5rem; margin-bottom: 1rem;">
                        <li>Meminta akses ke data pribadi yang kami simpan tentang Anda.</li>
                        <li>Meminta koreksi atau pembaruan atas data pribadi yang tidak akurat.</li>
                        <li>Meminta penghapusan data kontak Anda dari milis komunikasi non-transaksional kami.</li>
                    </ul>
                </div>

                <div id="sec-5">
                    <h2 style="font-size: 1.35rem; font-weight: 800; color: var(--color-primary-dark); margin-bottom: 0.75rem;">5. Kontak Pengaduan Privasi</h2>
                    <p>
                        Jika Anda memiliki pertanyaan, saran, atau permintaan terkait Kebijakan Privasi ini, silakan hubungi tim legal &amp; layanan pelanggan kami di:
                    </p>
                    <div style="background: var(--color-primary-light); border: 1px solid #bae6fd; padding: 1.25rem 1.5rem; border-radius: var(--radius-lg); margin-top: 1rem;">
                        <strong style="color: var(--color-primary-dark); display: block; margin-bottom: 0.35rem;">PT Indotech Berkah Abadi - Cleanique Academy</strong>
                        <p style="font-size: 0.9rem; margin: 0;">Email: <a href="mailto:indotechberkahabadi@gmail.com" style="color: var(--color-primary); font-weight: 600;">indotechberkahabadi@gmail.com</a></p>
                        <p style="font-size: 0.9rem; margin: 0.25rem 0 0 0;">WhatsApp: <a href="https://wa.me/6282215840088" target="_blank" style="color: var(--color-primary); font-weight: 600;">+62 822-1584-0088</a></p>
                    </div>
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
                <a href="<?php echo esc_url( home_url( '/syarat-ketentuan/' ) ); ?>" class="internal-link-card">
                    <div class="internal-link-icon-box">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                    </div>
                    <div class="internal-link-title">
                        <span>Syarat &amp; Ketentuan</span>
                        <span class="internal-link-arrow">&rarr;</span>
                    </div>
                    <p class="internal-link-desc">Ketentuan pendaftaran, hak cipta resep formula, dan aturan kelas pelatihan.</p>
                </a>
                <a href="<?php echo esc_url( home_url( '/kebijakan-cookie/' ) ); ?>" class="internal-link-card">
                    <div class="internal-link-icon-box">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path><path d="M2 12h20"></path></svg>
                    </div>
                    <div class="internal-link-title">
                        <span>Kebijakan Cookie</span>
                        <span class="internal-link-arrow">&rarr;</span>
                    </div>
                    <p class="internal-link-desc">Penjelasan penggunaan cookie dan analitik peramban web Cleanique Academy.</p>
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
