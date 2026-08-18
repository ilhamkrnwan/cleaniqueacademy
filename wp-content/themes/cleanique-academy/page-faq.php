<?php
/**
 * Template Name: Halaman FAQ
 */
get_header();

cleanique_render_page_hero( array(
    'title'    => 'Pertanyaan Sering Diajukan (FAQ)',
    'badge'    => 'Pusat Informasi & Bantuan',
    'subtitle' => 'Temukan jawaban lengkap seputar pendaftaran, materi formulasi, fasilitas praktikum, hingga pendampingan bisnis Cleanique Academy.',
    'theme'    => 'light',
) );
?>

<section class="section section-decorated" style="padding-top: 2.5rem;">
    <div class="container" style="max-width: 900px;">
        
        <!-- VISUAL BANNER CLEANIQUE FAQ CONSULTATION -->
        <div style="margin-bottom: 2.5rem; text-align: center; border-radius: 16px; overflow: hidden; box-shadow: 0 12px 30px rgba(0,0,0,0.08); border: 1px solid #cbd5e1;">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/faq-consultation.jpg' ); ?>" alt="Konsultasi Formulasi Kimia Cleanique Academy" style="width: 100%; height: auto; display: block;" loading="lazy">
        </div>

        <!-- CATEGORY 1: INFORMASI UMUM & PENDAFTARAN -->
        <div class="faq-category-block" style="margin-bottom: 3rem;">
            <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1.25rem; padding-bottom: 0.75rem; border-bottom: 2px solid #e0f2fe;">
                <span style="background: #0284c7; color: #ffffff; font-size: 0.75rem; font-weight: 800; text-transform: uppercase; padding: 0.25rem 0.65rem; border-radius: 6px;">Kategori 1</span>
                <h2 style="font-size: 1.4rem; font-weight: 800; color: #0f172a; margin: 0;">Informasi Umum &amp; Pendaftaran</h2>
            </div>

            <div class="accordion-group">
                
                <details class="accordion-item" open>
                    <summary class="accordion-header">
                        <span>Apakah saya harus memiliki latar belakang pendidikan kimia untuk bisa ikut pelatihan ini?</span>
                    </summary>
                    <div class="accordion-body">
                        Tidak perlu. Seluruh silabus dan materi di Cleanique Academy dirancang khusus agar mudah dipahami oleh pemula, mahasiswa, ibu rumah tangga, hingga calon pengusaha. Kami akan mengajarkan formulasi dari dasar langkah demi langkah.
                    </div>
                </details>

                <details class="accordion-item">
                    <summary class="accordion-header">
                        <span>Apa saja fasilitas yang akan saya dapatkan selama pelatihan?</span>
                    </summary>
                    <div class="accordion-body">
                        Anda akan mendapatkan modul materi lengkap (teori dan resep formulasi), seluruh bahan baku untuk praktik langsung, alat pelindung diri (masker dan sarung tangan), sertifikat pelatihan resmi Cleanique Academy (PT Indotech Berkah Abadi), serta hasil produk praktik yang bisa langsung Anda bawa pulang.
                    </div>
                </details>

                <details class="accordion-item">
                    <summary class="accordion-header">
                        <span>Apakah kelasnya tersedia secara online atau hanya tatap muka (offline)?</span>
                    </summary>
                    <div class="accordion-body">
                        Pelatihan utama kami diselenggarakan secara Tatap Muka (Offline) di Laboratorium &amp; Training Center Yogyakarta agar peserta mendapatkan pengalaman praktikum nyata mencium aroma, menguji kekentalan emulsi, dan mengenali sifat fisik bahan baku. Namun, kami juga menyediakan modul panduan digital dan layanan konsultasi privat jarak jauh bagi peserta dari luar kota/pulau.
                    </div>
                </details>

                <details class="accordion-item">
                    <summary class="accordion-header">
                        <span>Dimana lokasi pelatihan tatap muka diselenggarakan?</span>
                    </summary>
                    <div class="accordion-body">
                        Pelatihan rutin diselenggarakan di Laboratorium &amp; Training Center Cleanique Academy (PT Indotech Berkah Abadi) di Jongke Tengah No. 30, Sendangadi, Kec. Mlati, Kabupaten Sleman, D.I. Yogyakarta 55285, serta penyelenggaraan event pelatihan khusus di berbagai kota besar Indonesia.
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
        <div class="faq-category-block" style="margin-bottom: 3rem;">
            <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1.25rem; padding-bottom: 0.75rem; border-bottom: 2px solid #dcfce7;">
                <span style="background: #16a34a; color: #ffffff; font-size: 0.75rem; font-weight: 800; text-transform: uppercase; padding: 0.25rem 0.65rem; border-radius: 6px;">Kategori 2</span>
                <h2 style="font-size: 1.4rem; font-weight: 800; color: #0f172a; margin: 0;">Detail Materi &amp; Formulasi Produk</h2>
            </div>

            <div class="accordion-group">
                
                <details class="accordion-item">
                    <summary class="accordion-header">
                        <span>Untuk Pelatihan Sabun, jenis sabun apa saja yang akan diajarkan?</span>
                    </summary>
                    <div class="accordion-body">
                        Anda akan belajar membuat berbagai jenis produk sabun komersial dan kosmetik. Ini meliputi sabun padat (metode cold process &amp; melt and pour), sabun cair mandi, sabun cuci tangan (handwash), hingga sabun untuk kebutuhan spesifik seperti kulit sensitif.
                    </div>
                </details>

                <details class="accordion-item">
                    <summary class="accordion-header">
                        <span>Apakah pada Pelatihan Pembuatan Parfum diajarkan cara agar wangi parfum bisa tahan lama?</span>
                    </summary>
                    <div class="accordion-body">
                        Tentu saja. Selain pengenalan bahan dasar, Anda akan belajar tentang komposisi aroma (top, middle, base notes), cara menghitung persentase konsentrat (bibit parfum) dengan pelarut, dan rahasia fiksatif agar parfum memiliki sillage (jejak wangi) yang kuat dan tahan lama.
                    </div>
                </details>

                <details class="accordion-item">
                    <summary class="accordion-header">
                        <span>Pada Pelatihan Kimia Industri / Home Care, produk apa yang akan dipraktikkan?</span>
                    </summary>
                    <div class="accordion-body">
                        Kami fokus pada produk pembersih rumah tangga yang memiliki nilai jual tinggi. Anda akan praktik membuat deterjen cair, pelembut pakaian (softener), sabun cuci piring, pembersih lantai, karbol, hingga pembersih kaca.
                    </div>
                </details>

                <details class="accordion-item">
                    <summary class="accordion-header">
                        <span>Apakah diajarkan cara mengatasi produk gagal saat produksi (encer, memisah, atau keruh)?</span>
                    </summary>
                    <div class="accordion-body">
                        Ya. Kami memberikan teknik troubleshooting produksi lengkap. Anda diajarkan penyebab emulsi memisah, cara menyesuaikan pH ideal, cara menaikkan viskositas (kekentalan) yang tepat, serta teknik memperbaiki batch produk yang kurang sempurna agar tidak terbuang.
                    </div>
                </details>

                <details class="accordion-item">
                    <summary class="accordion-header">
                        <span>Apakah resep formulasi yang diajarkan aman dan memenuhi standar pasaran?</span>
                    </summary>
                    <div class="accordion-body">
                        Sangat aman. Semua resep formula yang disusun di Cleanique Academy diuji stabilitasnya di laboratorium dan telah diproduksi secara komersial oleh jaringan usaha mitra kami sejak 2011.
                    </div>
                </details>

            </div>
        </div>


        <!-- CATEGORY 3: PASCA PELATIHAN & DUKUNGAN USAHA -->
        <div class="faq-category-block" style="margin-bottom: 3.5rem;">
            <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1.25rem; padding-bottom: 0.75rem; border-bottom: 2px solid #fef3c7;">
                <span style="background: #d97706; color: #ffffff; font-size: 0.75rem; font-weight: 800; text-transform: uppercase; padding: 0.25rem 0.65rem; border-radius: 6px;">Kategori 3</span>
                <h2 style="font-size: 1.4rem; font-weight: 800; color: #0f172a; margin: 0;">Pasca Pelatihan &amp; Dukungan Usaha</h2>
            </div>

            <div class="accordion-group">
                
                <details class="accordion-item">
                    <summary class="accordion-header">
                        <span>Apakah saya akan diajarkan cara menghitung Harga Pokok Penjualan (HPP) untuk berbisnis?</span>
                    </summary>
                    <div class="accordion-body">
                        Ya. Cleanique Academy tidak hanya mengajarkan cara produksi, tetapi juga memberikan pembekalan dasar kewirausahaan. Kami akan memandu Anda cara menghitung HPP agar Anda bisa menentukan harga jual yang tepat dan menguntungkan.
                    </div>
                </details>

                <details class="accordion-item">
                    <summary class="accordion-header">
                        <span>Apakah Cleanique Academy memberikan informasi lokasi pembelian bahan baku kimia?</span>
                    </summary>
                    <div class="accordion-body">
                        Pasti. Ini adalah salah satu keunggulan kami. Semua mitra akan mendapatkan daftar rekomendasi supplier bahan baku, bibit parfum, serta botol/kemasan tangan pertama yang terpercaya dan harganya terjangkau.
                    </div>
                </details>

                <details class="accordion-item">
                    <summary class="accordion-header">
                        <span>Bagaimana jika saya gagal saat praktik mandiri di rumah? Apakah masih bisa bertanya?</span>
                    </summary>
                    <div class="accordion-body">
                        Jangan khawatir. Kami menyediakan grup komunitas mitra dan layanan konsultasi pasca-pelatihan. Anda bebas berdiskusi, bertanya tentang kendala formulasi, atau berkonsultasi mengenai bisnis Anda langsung dengan instruktur kami.
                    </div>
                </details>

                <details class="accordion-item">
                    <summary class="accordion-header">
                        <span>Apakah Cleanique Academy membantu arahan pendaftaran izin edar PKRT / BPOM?</span>
                    </summary>
                    <div class="accordion-body">
                        Ya. Kami memberikan bimbingan dan arahan awal mengenai standar prosedur sertifikasi legalitas usaha, pengurusan izin edar PKRT (Perbekalan Kesehatan Rumah Tangga), atau sertifikasi industri terkait agar produk Anda siap dipasarkan secara legal.
                    </div>
                </details>

                <details class="accordion-item">
                    <summary class="accordion-header">
                        <span>Apakah mitra diperbolehkan mengonsultasikan pengembangan resep produk custom baru?</span>
                    </summary>
                    <div class="accordion-body">
                        Tentu saja. Setelah menguasai dasar-dasar fungsi surfaktan dan zat aditif, Anda dapat berdiskusi dengan tim instruktur kami untuk merancang variansi produk baru sesuai dengan peluang pasar di daerah Anda.
                    </div>
                </details>

            </div>
        </div>

        <!-- FEATURE CARDS: 3 KEUNGGULAN CLEANIQUE -->
        <div style="margin-bottom: 3.5rem;">
            <div class="section-header">
                <span class="section-subtitle">Jaminan Kualitas</span>
                <h3 style="font-size: 1.5rem; font-weight: 800; color: #0f172a; margin-bottom: 0.5rem;">3 Keunggulan Pelatihan di Cleanique Academy</h3>
                <div class="section-accent-bar"></div>
            </div>

            <div class="grid grid-3" style="gap: 1.25rem;">
                <div class="feature-icon-card">
                    <div class="feature-card-icon-box">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path></svg>
                    </div>
                    <h4 style="font-size: 1.05rem; font-weight: 800; color: #0f172a; margin-bottom: 0.4rem;">Praktikum Langsung 100%</h4>
                    <p style="font-size: 0.86rem; color: #64748b; margin: 0; line-height: 1.55;">Bukan hanya teori slide presentation, Anda meracik sendiri bahan kimia aktif dari nol hingga jadi produk.</p>
                </div>
                <div class="feature-icon-card">
                    <div class="feature-card-icon-box accent-green-bg">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                    </div>
                    <h4 style="font-size: 1.05rem; font-weight: 800; color: #0f172a; margin-bottom: 0.4rem;">Konsultasi Tanpa Batas</h4>
                    <p style="font-size: 0.86rem; color: #64748b; margin: 0; line-height: 1.55;">Akses seumur hidup ke grup WA alumni dan tim riset kami untuk bertanya kapan pun saat produksi mandiri.</p>
                </div>
                <div class="feature-icon-card">
                    <div class="feature-card-icon-box accent-amber-bg">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
                    </div>
                    <h4 style="font-size: 1.05rem; font-weight: 800; color: #0f172a; margin-bottom: 0.4rem;">Jaringan Supplier Pabrik</h4>
                    <p style="font-size: 0.86rem; color: #64748b; margin: 0; line-height: 1.55;">Mendapatkan akses rekomendasi supplier bahan baku kimia tangan pertama dengan harga terbaik.</p>
                </div>
            </div>
        </div>

        <!-- INTERNAL NAVIGATION LINKS GRID -->
        <div style="margin-bottom: 3rem;">
            <div class="section-header">
                <span class="section-subtitle">Tautan Penting</span>
                <h3 style="font-size: 1.4rem; font-weight: 800; color: #0f172a;">Jelajahi Informasi Lainnya</h3>
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
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
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
                        <span>Hubungi Kami via WA</span>
                        <span class="internal-link-arrow">&rarr;</span>
                    </div>
                    <p class="internal-link-desc">Konsultasi gratis pendaftaran dan alamat lokasi Training Center Jogja.</p>
                </a>
            </div>
        </div>

        <!-- WHATSAPP CTA SUPPORT CARD -->
        <div style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%); color: #ffffff; border-radius: 16px; padding: 2.5rem; text-align: center; box-shadow: 0 10px 30px rgba(0,0,0,0.12);">
            <h3 style="color:#ffffff; font-size: 1.5rem; font-weight: 800; margin-bottom: 0.75rem;">Punya Pertanyaan Lain Yang Belum Terjawab?</h3>
            <p style="color: #cbd5e1; font-size: 0.95rem; margin-bottom: 1.5rem; max-width: 580px; margin-left: auto; margin-right: auto; line-height: 1.6;">Tim Customer Care Cleanique Academy siap membantu memberikan penjelasan lengkap seputar pendaftaran dan jadwal kelas terdekat.</p>
            <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya ingin bertanya seputar jadwal dan materi pelatihan.' ) ); ?>" target="_blank" class="btn btn-whatsapp" style="padding: 0.75rem 1.6rem; font-size: 0.95rem; border-radius: 10px;">
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
