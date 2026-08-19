<?php
/**
 * Template Name: Halaman FAQ
 *
 * Cleanique Academy - FAQ Page Template
 * Follows DESAIN.md: Modern Professional Academy x Luxury Editorial Corporate
 */
get_header();
?>

<!-- 1. BESPOKE LUXURY EDITORIAL HERO SECTION -->
<section class="about-hero-section" style="background-image: linear-gradient(145deg, rgba(7, 35, 56, 0.94) 0%, rgba(11, 93, 143, 0.90) 60%, rgba(8, 127, 193, 0.86) 100%), url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-lab-practical.jpg' ); ?>');">
    <div class="container about-hero-container">
        <div class="hero-editorial-pill">
            <span class="pill-pulse-dot"></span>
            <span>PUSAT INFORMASI &amp; BANTUAN AKADEMI</span>
        </div>

        <h1 class="about-hero-title">
            Pertanyaan Sering Diajukan (FAQ)
        </h1>

        <p class="about-hero-subtitle">
            Temukan jawaban komprehensif seputar pendaftaran kelas, materi praktikum formulasi, fasilitas training center Sleman, hingga pendampingan bisnis seumur hidup.
        </p>

        <nav class="about-hero-breadcrumbs" aria-label="Breadcrumb">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Beranda</a>
            <span class="breadcrumb-separator">&rsaquo;</span>
            <span>Pusat Tanya Jawab (FAQ)</span>
        </nav>
    </div>
</section>

<!-- 2. FAQ CONTENT SECTION -->
<section class="section section-decorated" style="padding-top: 3.5rem;">
    <div class="container" style="max-width: 920px;">
        
        <!-- VISUAL BANNER CLEANIQUE FAQ CONSULTATION -->
        <div style="margin-bottom: 3rem; text-align: center; border-radius: var(--radius-xl); overflow: hidden; box-shadow: var(--shadow-md); border: 1px solid var(--color-border);">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/faq-consultation.jpg' ); ?>" alt="Konsultasi Formulasi Kimia Cleanique Academy" style="width: 100%; height: auto; display: block;" loading="lazy">
        </div>

        <!-- CATEGORY 1: INFORMASI UMUM & PENDAFTARAN -->
        <div class="faq-category-block" style="margin-bottom: 3.5rem;">
            <div class="section-header" style="text-align: left; margin-bottom: 1.5rem;">
                <div class="editorial-badge">
                    <span class="badge-dot"></span>
                    <span>KATEGORI 01</span>
                    <span class="badge-code">PENDAFTARAN &amp; KELAS</span>
                </div>
                <h2 style="font-size: 1.45rem; font-weight: 800; color: #0f172a; margin: 0 0 0.5rem 0;">Informasi Umum &amp; Pendaftaran</h2>
                <div class="section-accent-bar" style="margin: 0;"></div>
            </div>

            <div class="accordion-group">
                
                <details class="accordion-item" open>
                    <summary class="accordion-header">
                        <span>Apakah saya harus memiliki latar belakang pendidikan kimia untuk bisa ikut pelatihan ini?</span>
                    </summary>
                    <div class="accordion-body">
                        Tidak perlu. Seluruh silabus dan materi di Cleanique Academy dirancang khusus agar mudah dipahami oleh pemula dari berbagai latar belakang. Instruktur kami mengajarkan formulasi dari dasar langkah demi langkah dengan takaran gramasi presisi tanpa hitungan rumus kimia yang rumit.
                    </div>
                </details>

                <details class="accordion-item">
                    <summary class="accordion-header">
                        <span>Apa saja fasilitas yang akan saya dapatkan selama pelatihan?</span>
                    </summary>
                    <div class="accordion-body">
                        Anda akan mendapatkan modul materi SOP lengkap, seluruh bahan baku untuk praktik langsung, alat pelindung diri (masker dan sarung tangan), sertifikat pelatihan resmi Cleanique Academy (PT Indotech Berkah Abadi), hasil racikan produk yang bisa langsung dibawa pulang, serta akses bimbingan seumur hidup.
                    </div>
                </details>

                <details class="accordion-item">
                    <summary class="accordion-header">
                        <span>Apakah kelasnya tersedia secara online atau hanya tatap muka (offline)?</span>
                    </summary>
                    <div class="accordion-body">
                        Pelatihan utama kami diselenggarakan secara Tatap Muka (Offline) di Training Center Sleman Yogyakarta agar peserta mendapatkan pengalaman praktikum nyata mencium aroma, menguji kekentalan emulsi, dan mengenali sifat fisik bahan baku secara akurat. Kami juga menyediakan modul panduan digital dan layanan konsultasi privat jarak jauh.
                    </div>
                </details>

                <details class="accordion-item">
                    <summary class="accordion-header">
                        <span>Dimana lokasi pelatihan tatap muka diselenggarakan?</span>
                    </summary>
                    <div class="accordion-body">
                        Pelatihan rutin diselenggarakan di Workshop &amp; Training Center Cleanique Academy (PT Indotech Berkah Abadi) di Jongke Tengah No. 30, Sendangadi, Kec. Mlati, Kabupaten Sleman, D.I. Yogyakarta 55285, serta penyelenggaraan event workshop khusus di berbagai kota besar Indonesia.
                    </div>
                </details>

                <details class="accordion-item">
                    <summary class="accordion-header">
                        <span>Apakah ada syarat batas usia atau kualifikasi khusus untuk mendaftar?</span>
                    </summary>
                    <div class="accordion-body">
                        Tidak ada syarat batas usia khusus. Pelatihan terbuka untuk umum dari usia 17 tahun ke atas yang memiliki minat membangun usaha produk kebersihan, laundry, homecare, atau pengembang produk chemical komersial.
                    </div>
                </details>

            </div>
        </div>

        <!-- CATEGORY 2: DETAIL MATERI & FORMULASI PRODUK -->
        <div class="faq-category-block" style="margin-bottom: 3.5rem;">
            <div class="section-header" style="text-align: left; margin-bottom: 1.5rem;">
                <div class="editorial-badge">
                    <span class="badge-dot"></span>
                    <span>KATEGORI 02</span>
                    <span class="badge-code">FORMULASI &amp; PRODUK</span>
                </div>
                <h2 style="font-size: 1.45rem; font-weight: 800; color: #0f172a; margin: 0 0 0.5rem 0;">Detail Materi &amp; Formulasi Produk</h2>
                <div class="section-accent-bar" style="margin: 0;"></div>
            </div>

            <div class="accordion-group">
                
                <details class="accordion-item">
                    <summary class="accordion-header">
                        <span>Untuk Pelatihan Sabun, jenis sabun apa saja yang akan diajarkan?</span>
                    </summary>
                    <div class="accordion-body">
                        Anda akan belajar membuat berbagai jenis produk sabun komersial, seperti sabun cuci piring pekat busa melimpah, sabun cuci tangan (handwash), sabun mandi cair, hingga formula pembersih khusus industri.
                    </div>
                </details>

                <details class="accordion-item">
                    <summary class="accordion-header">
                        <span>Apakah pada Pelatihan Pembuatan Parfum diajarkan cara agar wangi parfum tahan lama?</span>
                    </summary>
                    <div class="accordion-body">
                        Tentu saja. Selain pengenalan bibit dan pelarut, Anda akan belajar tentang komposisi piramida aroma (top, middle, base notes), persentase konsentrat ideal, dan teknik fiksatif agar aroma parfum memiliki ketahanan fiksasi yang kuat dan tahan lama.
                    </div>
                </details>

                <details class="accordion-item">
                    <summary class="accordion-header">
                        <span>Pada Pelatihan Kimia Industri / Home Care, produk apa yang akan dipraktikkan?</span>
                    </summary>
                    <div class="accordion-body">
                        Kami fokus pada produk pembersih yang memiliki permintaan pasar harian tinggi: deterjen cair matik, pelembut pakaian (softener), pelicin pakaian, sabun cuci piring, pembersih lantai, karbol wangi, hingga pembersih kaca.
                    </div>
                </details>

                <details class="accordion-item">
                    <summary class="accordion-header">
                        <span>Apakah diajarkan cara mengatasi produk gagal saat produksi (encer, memisah, atau keruh)?</span>
                    </summary>
                    <div class="accordion-body">
                        Ya. Kami memberikan modul troubleshooting produksi lengkap. Anda diajarkan penyebab emulsi memisah, cara menyesuaikan pH ideal, cara menaikkan viskositas (kekentalan) yang tepat, serta teknik memperbaiki batch produk yang kurang sempurna agar tidak terbuang.
                    </div>
                </details>

                <details class="accordion-item">
                    <summary class="accordion-header">
                        <span>Apakah resep formulasi yang diajarkan aman dan memenuhi standar pasaran?</span>
                    </summary>
                    <div class="accordion-body">
                        Sangat aman. Semua resep formula yang disusun di Cleanique Academy telah melalui pengujian kestabilan mutu dan telah diproduksi secara komersial oleh jaringan alumni wirausaha mandiri kami di berbagai daerah sejak 2011.
                    </div>
                </details>

            </div>
        </div>

        <!-- CATEGORY 3: PASCA PELATIHAN & DUKUNGAN USAHA -->
        <div class="faq-category-block" style="margin-bottom: 3.5rem;">
            <div class="section-header" style="text-align: left; margin-bottom: 1.5rem;">
                <div class="editorial-badge">
                    <span class="badge-dot"></span>
                    <span>KATEGORI 03</span>
                    <span class="badge-code">KEMITRAAN &amp; BISNIS</span>
                </div>
                <h2 style="font-size: 1.45rem; font-weight: 800; color: #0f172a; margin: 0 0 0.5rem 0;">Pasca Pelatihan &amp; Dukungan Usaha</h2>
                <div class="section-accent-bar" style="margin: 0;"></div>
            </div>

            <div class="accordion-group">
                
                <details class="accordion-item">
                    <summary class="accordion-header">
                        <span>Apakah saya akan diajarkan cara menghitung Harga Pokok Penjualan (HPP) untuk berbisnis?</span>
                    </summary>
                    <div class="accordion-body">
                        Ya. Cleanique Academy membekali dasar manajemen bisnis kimia. Kami memandu Anda cara menghitung HPP per liter secara presisi agar Anda bisa menetapkan harga jual grosir/eceran yang bersaing dengan margin profit optimal.
                    </div>
                </details>

                <details class="accordion-item">
                    <summary class="accordion-header">
                        <span>Apakah Cleanique Academy memberikan informasi supplier bahan baku kimia?</span>
                    </summary>
                    <div class="accordion-body">
                        Pasti. Ini adalah salah satu fasilitas utama kami. Semua alumni mendapatkan daftar rekomendasi supplier bahan baku aktif, bibit parfum, botol/jerigen kemasan tangan pertama dengan harga pabrik yang kompetitif.
                    </div>
                </details>

                <details class="accordion-item">
                    <summary class="accordion-header">
                        <span>Bagaimana jika saya mengalami kendala saat praktik mandiri di rumah?</span>
                    </summary>
                    <div class="accordion-body">
                        Kami menyediakan grup WhatsApp alumni dan bimbingan konsultasi pasca-pelatihan. Anda bebas berdiskusi dan berkonsultasi mengenai kendala formulasi langsung dengan instruktur kami kapan pun dibutuhkan.
                    </div>
                </details>

                <details class="accordion-item">
                    <summary class="accordion-header">
                        <span>Apakah Cleanique Academy membantu arahan perizinan edar PKRT Kemenkes?</span>
                    </summary>
                    <div class="accordion-body">
                        Ya. Kami memberikan arahan alur prosedur pengurusan sertifikasi izin edar PKRT (Perbekalan Kesehatan Rumah Tangga) agar produk komersial Anda siap dipasarkan secara legal di supermarket atau pengadaan instansi.
                    </div>
                </details>

            </div>
        </div>

        <!-- FEATURE CARDS: 3 KEUNGGULAN CLEANIQUE -->
        <div style="margin-bottom: 3.5rem;">
            <div class="section-header">
                <div class="editorial-badge">
                    <span class="badge-dot"></span>
                    <span>STANDAR KUALITAS</span>
                    <span class="badge-code">NILAI UTAMA</span>
                </div>
                <h3 class="section-title" style="font-size: 1.6rem; margin-bottom: 0.5rem;">3 Keunggulan Pelatihan di Cleanique Academy</h3>
                <div class="section-accent-bar"></div>
            </div>

            <div class="grid grid-3" style="gap: 1.25rem;">
                <div class="feature-icon-card">
                    <div class="feature-card-icon-box">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path></svg>
                    </div>
                    <h4 style="font-size: 1.05rem; font-weight: 800; color: #0f172a; margin-bottom: 0.4rem;">Praktikum Langsung 100%</h4>
                    <p style="font-size: 0.86rem; color: #64748b; margin: 0; line-height: 1.55;">Bukan sekadar teori presentasi, Anda meracik sendiri bahan kimia aktif dari nol hingga menghasilkan produk siap pakai.</p>
                </div>
                <div class="feature-icon-card">
                    <div class="feature-card-icon-box accent-green-bg">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                    </div>
                    <h4 style="font-size: 1.05rem; font-weight: 800; color: #0f172a; margin-bottom: 0.4rem;">Bimbingan Seumur Hidup</h4>
                    <p style="font-size: 0.86rem; color: #64748b; margin: 0; line-height: 1.55;">Akses seumur hidup ke grup WhatsApp alumni untuk bertanya dan berdiskusi kapan pun saat memproduksi mandiri.</p>
                </div>
                <div class="feature-icon-card">
                    <div class="feature-card-icon-box accent-amber-bg">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
                    </div>
                    <h4 style="font-size: 1.05rem; font-weight: 800; color: #0f172a; margin-bottom: 0.4rem;">Jejaring Supplier Pabrik</h4>
                    <p style="font-size: 0.86rem; color: #64748b; margin: 0; line-height: 1.55;">Mendapatkan koneksi supplier bahan baku kimia dan bibit parfum tangan pertama dengan harga industri terbaik.</p>
                </div>
            </div>
        </div>

        <!-- INTERNAL NAVIGATION LINKS GRID -->
        <div style="margin-bottom: 3rem; padding-top: 2.5rem; border-top: 1px solid var(--color-border);">
            <div class="section-header">
                <div class="editorial-badge">
                    <span class="badge-dot"></span>
                    <span>NAVIGASI WEBSITE</span>
                    <span class="badge-code">INFORMASI PENTING</span>
                </div>
                <h3 class="section-title" style="font-size: 1.6rem; margin-bottom: 0.5rem;">Jelajahi Halaman Lainnya</h3>
                <div class="section-accent-bar"></div>
            </div>
            <div class="internal-links-grid">
                <a href="<?php echo esc_url( home_url( '/program-pelatihan/' ) ); ?>" class="internal-link-card">
                    <div class="internal-link-icon-box">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                    </div>
                    <div class="internal-link-title">
                        <span>Katalog Program Pelatihan</span>
                        <span class="internal-link-arrow">&rarr;</span>
                    </div>
                    <p class="internal-link-desc">Pilihan paket kelas kolektif, kelas privat, dan investasi promo pelatihan.</p>
                </a>
                <a href="<?php echo esc_url( home_url( '/tentang-kami/' ) ); ?>" class="internal-link-card">
                    <div class="internal-link-icon-box">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                    </div>
                    <div class="internal-link-title">
                        <span>Profil PT Indotech</span>
                        <span class="internal-link-arrow">&rarr;</span>
                    </div>
                    <p class="internal-link-desc">Legalitas resmi, sejarah 13+ tahun, dan rekam jejak tim pengajar.</p>
                </a>
                <a href="<?php echo esc_url( home_url( '/kontak/' ) ); ?>" class="internal-link-card">
                    <div class="internal-link-icon-box">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                    </div>
                    <div class="internal-link-title">
                        <span>Hubungi Customer Care</span>
                        <span class="internal-link-arrow">&rarr;</span>
                    </div>
                    <p class="internal-link-desc">Konsultasi pendaftaran dan informasi alamat training center Sleman Yogyakarta.</p>
                </a>
            </div>
        </div>

    </div>
</section>

<!-- 3. SEKSI KONTAK & CALL TO ACTION (DEEP BLUE) -->
<section id="kontak" class="section section-dark-cta">
    <div class="container" style="max-width: 880px;">
        <div class="contact-cta-box">
            <span class="contact-cta-subtitle">KONSULTASI &amp; CUSTOMER CARE</span>
            <h2 class="contact-cta-title">Punya Pertanyaan Lain Yang Belum Terjawab?</h2>
            <p class="contact-cta-desc">Tim Customer Care Cleanique Academy siap memberikan penjelasan lengkap seputar pendaftaran, materi kelas, dan jadwal batch terdekat.</p>
            <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya ingin bertanya seputar jadwal dan materi pelatihan.' ) ); ?>" target="_blank" class="btn btn-whatsapp btn-cta-large">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.157 4.228 4.228-1.157zm12.339-6.495c-.068-.113-.25-.181-.523-.317-.272-.136-1.61-.795-1.86-.886-.25-.091-.432-.136-.613.136-.182.272-.704.886-.863 1.067-.159.182-.318.204-.59.068-.272-.136-1.151-.424-2.193-1.353-.81-.723-1.357-1.616-1.516-1.888-.159-.272-.017-.419.119-.554.122-.122.272-.318.408-.477.136-.159.182-.272.272-.454.091-.182.045-.341-.023-.477-.068-.136-.613-1.477-.84-2.023-.222-.534-.447-.461-.613-.469-.159-.008-.341-.01-.523-.01s-.477.068-.727.341c-.25.272-.954.932-.954 2.273s.977 2.636 1.114 2.818c.136.182 1.923 2.936 4.659 4.116.65.281 1.158.448 1.554.573.653.207 1.247.178 1.716.108.523-.078 1.61-.658 1.838-1.295.227-.636.227-1.181.159-1.295z"/></svg>
                <span>Konsultasi Langsung via WhatsApp</span>
            </a>
        </div>
    </div>
</section>

<!-- Schema.org Data Structuring (JSON-LD) for FAQPage Rich Snippets -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "Apakah pemula tanpa latar belakang kimia bisa mengikuti pelatihan ini?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Sangat bisa! Seluruh materi pelatihan dirancang praktis dari dasar. Peserta diajarkan mengenal fungsi bahan aktif, takaran persentase aman, hingga cara meracik produk pembersih secara mandiri tanpa perlu rumus kimia yang rumit."
      }
    },
    {
      "@type": "Question",
      "name": "Apa saja fasilitas yang akan didapatkan oleh setiap peserta pelatihan?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Setiap peserta akan mendapatkan modul materi lengkap, seluruh bahan baku praktik, alat pelindung diri, sertifikat pelatihan resmi Cleanique Academy (PT Indotech Berkah Abadi), hasil racikan produk, dan akses grup bimbingan alumni."
      }
    },
    {
      "@type": "Question",
      "name": "Apakah diajarkan cara mengatasi produk gagal saat produksi?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Ya, kami memberikan modul troubleshooting produksi lengkap untuk mengatasi emulsi memisah, menyesuaikan pH ideal, dan menaikkan viskositas kekentalan secara tepat."
      }
    },
    {
      "@type": "Question",
      "name": "Apakah Cleanique Academy membantu arahan pendaftaran izin edar PKRT / BPOM?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Ya, kami memberikan arahan mengenai prosedur sertifikasi legalitas usaha dan pengurusan izin edar Perbekalan Kesehatan Rumah Tangga (PKRT) Kemenkes."
      }
    }
  ]
}
</script>

<?php
get_footer();
