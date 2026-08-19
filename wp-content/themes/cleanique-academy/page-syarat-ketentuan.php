<?php
/**
 * Template Name: Syarat & Ketentuan
 * 
 * Template untuk halaman Syarat & Ketentuan (Terms & Conditions) Cleanique Academy
 * Follows DESAIN.md: Modern Professional Academy x Luxury Editorial Corporate
 */
get_header();
?>

<!-- 1. BESPOKE LUXURY EDITORIAL HERO SECTION -->
<section class="about-hero-section" style="background-image: linear-gradient(145deg, rgba(7, 35, 56, 0.94) 0%, rgba(11, 93, 143, 0.90) 60%, rgba(8, 127, 193, 0.86) 100%), url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-lab-practical.jpg' ); ?>');">
    <div class="container about-hero-container">
        <div class="hero-editorial-pill">
            <span class="pill-pulse-dot"></span>
            <span>KETENTUAN RESMI &amp; HAK INTELEKTUAL</span>
        </div>

        <h1 class="about-hero-title">
            Syarat &amp; Ketentuan
        </h1>

        <p class="about-hero-subtitle">
            Ketentuan resmi partisipasi kelas pelatihan, alur pembayaran, tata tertib praktikum, serta lisensi hak kekayaan intelektual formula Cleanique Academy.
        </p>

        <nav class="about-hero-breadcrumbs" aria-label="Breadcrumb">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Beranda</a>
            <span class="breadcrumb-separator">&rsaquo;</span>
            <span>Syarat &amp; Ketentuan</span>
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
                <li><a href="#sec-1">1. Ketentuan Pendaftaran &amp; Kelas</a></li>
                <li><a href="#sec-2">2. Pembayaran &amp; Pembatalan</a></li>
                <li><a href="#sec-3">3. Hak Intelektual &amp; Lisensi Formula</a></li>
                <li><a href="#sec-4">4. Pembatasan Tanggung Jawab</a></li>
                <li><a href="#sec-5">5. Kontak Layanan Bantuan</a></li>
            </ul>
        </div>

        <div style="background: #ffffff; border-radius: var(--radius-xl); padding: 3rem 2.5rem; box-shadow: var(--shadow-sm); border: 1px solid var(--color-border); line-height: 1.8; color: var(--color-text-main);">
            
            <div style="margin-bottom: 2.5rem; padding-bottom: 1.5rem; border-bottom: 1px solid var(--color-border);">
                <p style="font-size: 0.9rem; color: var(--color-text-muted); margin-bottom: 0.5rem;">
                    Terakhir diperbarui: <strong><?php echo date_i18n( 'j F Y' ); ?></strong>
                </p>
                <p style="font-size: 1.02rem; color: var(--color-text-main); margin: 0;">
                    Selamat datang di <strong>Cleanique Academy</strong>. Dengan mendaftar, mengakses, atau mengikuti program pelatihan yang diselenggarakan oleh <strong>PT Indotech Berkah Abadi</strong>, Anda dianggap telah membaca, memahami, dan menyetujui seluruh Syarat &amp; Ketentuan berikut ini.
                </p>
            </div>

            <article class="legal-content" style="display: flex; flex-direction: column; gap: 2rem;">
                
                <div id="sec-1">
                    <h2 style="font-size: 1.35rem; font-weight: 800; color: var(--color-primary-dark); margin-bottom: 0.75rem;">1. Ketentuan Pendaftaran &amp; Ketertiban Kelas</h2>
                    <ul style="padding-left: 1.5rem; margin-bottom: 1rem;">
                        <li>Peserta wajib mengisi data pendaftaran yang benar dan valid saat mengonfirmasi kepesertaan.</li>
                        <li>Pelatihan diselenggarakan secara tatap muka (<em>offline</em>) sesuai lokasi Training Center Sleman atau jadwal event yang disepakati.</li>
                        <li>Peserta diwajibkan mematuhi standar keselamatan praktikum bahan kimia dan menggunakan APD selama sesi berlangsung.</li>
                    </ul>
                </div>

                <div id="sec-2">
                    <h2 style="font-size: 1.35rem; font-weight: 800; color: var(--color-primary-dark); margin-bottom: 0.75rem;">2. Pembayaran &amp; Pembatalan</h2>
                    <ul style="padding-left: 1.5rem; margin-bottom: 1rem;">
                        <li>Pembayaran uang muka (<em>DP</em>) atau pelunasan biaya pelatihan dilakukan melalui rekening bank resmi PT Indotech Berkah Abadi.</li>
                        <li>Perubahan jadwal (<em>reschedule</em>) dapat diajukan paling lambat 3 (tiga) hari sebelum tanggal pelaksanaan pelatihan.</li>
                        <li>Uang muka pendaftaran yang telah masuk bersifat <em>non-refundable</em> kecuali terjadi pembatalan sepihak dari pihak penyelenggara.</li>
                    </ul>
                </div>

                <div id="sec-3">
                    <h2 style="font-size: 1.35rem; font-weight: 800; color: var(--color-primary-dark); margin-bottom: 0.75rem;">3. Hak Kekayaan Intelektual &amp; Lisensi Formula</h2>
                    <p style="margin-bottom: 0.75rem;">
                        Seluruh modul pelatihan SOP, resep formulasi kimia, materi presentasi, dan media pembelajaran yang diberikan adalah hak milik intelektual PT Indotech Berkah Abadi.
                    </p>
                    <ul style="padding-left: 1.5rem; margin-bottom: 1rem;">
                        <li>Peserta diberikan lisensi penuh untuk mempergunakan formula tersebut untuk <strong>produksi mandiri dan komersialisasi usaha pribadi</strong>.</li>
                        <li>Dilarang keras menyebarluaskan, memperjualbelikan ulang, atau mengunggah modul dan resep formula Cleanique Academy ke media publik tanpa izin tertulis dari manajemen.</li>
                    </ul>
                </div>

                <div id="sec-4">
                    <h2 style="font-size: 1.35rem; font-weight: 800; color: var(--color-primary-dark); margin-bottom: 0.75rem;">4. Pembatasan Tanggung Jawab</h2>
                    <p>
                        Penyelenggara bertanggung jawab memberikan pendampingan praktikum secara aman. Namun, hasil akhir kualitas produk yang dibuat di luar workshop pelatihan tergantung pada kepatuhan peserta terhadap takaran gramasi, kualitas bahan baku lokal, dan standar operasional produksi mandiri masing-masing.
                    </p>
                </div>

                <div id="sec-5">
                    <h2 style="font-size: 1.35rem; font-weight: 800; color: var(--color-primary-dark); margin-bottom: 0.75rem;">5. Kontak Layanan Bantuan</h2>
                    <p>
                        Apabila terdapat hal yang ingin ditanyakan seputar ketentuan pendaftaran dan pelaksanaan kelas, silakan hubungi tim kami melalui WhatsApp resmi di:
                    </p>
                    <div style="background: var(--color-primary-light); border: 1px solid #bae6fd; padding: 1.25rem 1.5rem; border-radius: var(--radius-lg); margin-top: 1rem;">
                        <strong style="color: var(--color-primary-dark); display: block; margin-bottom: 0.35rem;">Customer Care Cleanique Academy</strong>
                        <p style="font-size: 0.9rem; margin: 0;">WhatsApp CS: <a href="https://wa.me/6282215840088" target="_blank" style="color: var(--color-primary); font-weight: 600;">+62 822-1584-0088</a></p>
                        <p style="font-size: 0.9rem; margin: 0.25rem 0 0 0;">Email: <a href="mailto:indotechberkahabadi@gmail.com" style="color: var(--color-primary); font-weight: 600;">indotechberkahabadi@gmail.com</a></p>
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
