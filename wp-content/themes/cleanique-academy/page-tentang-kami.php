<?php
/**
 * Template Name: Halaman Tentang Kami
 */
get_header();

cleanique_render_page_hero( array(
    'title'    => 'Tentang PT Indotech Berkah Abadi',
    'badge'    => 'Profil Perusahaan',
    'subtitle' => 'Pusat Pelatihan Profesional & Bimbingan Formulasi Kimia Kebersihan Terpercaya Sejak 2011.',
    'theme'    => 'light',
) );
?>

<!-- 1. SEJARAH & PROFIL PERUSAHAAN -->
<section class="section">
    <div class="container" style="max-width: 950px;">
        
        <div style="margin-bottom: 3.5rem;">
            <span class="section-subtitle">Sejarah & Rekam Jejak</span>
            <h2 class="section-title" style="text-align: left; font-size: 2.2rem; margin-bottom: 1.25rem;">Perjalanan Kami Sejak Tahun 2011</h2>
            <p style="font-size: 1.1rem; line-height: 1.8; color: var(--color-text-main); margin-bottom: 1.25rem;">
                <strong>Cleanique Academy</strong> merupakan divisi edukasi dan pelatihan resmi di bawah naungan <strong>PT Indotech Berkah Abadi</strong> yang berpusat di Yogyakarta. Berdiri sejak tahun 2011, kami mengawali langkah sebagai produsen dan pusat riset formulasi bahan kimia pembersih (cleaning chemical) untuk sektor industri laundry, housekeeping hotel, restoran, serta produk kebutuhan rumah tangga (*homecare*).
            </p>
            <p style="font-size: 1.1rem; line-height: 1.8; color: var(--color-text-muted);">
                Melalui brand <strong>Cleanique Lab</strong> dan <strong>Orchid Care</strong>, produk-produk kimia hasil formulasi kami telah terbukti di pasaran dan terjual lebih dari <strong>1.000.000 unit</strong> di seluruh Indonesia. Melalui Cleanique Academy, kami membagikan resep formulasi, standar operasional produksi, dan strategi bisnis kepada ribuan pengusaha di Indonesia.
            </p>
        </div>

        <div class="grid grid-2" style="margin-bottom: 3.5rem;">
            <div class="card">
                <span class="card-number">Visi</span>
                <h3 class="card-title">Visi Perusahaan</h3>
                <p class="card-text">Menjadi pusat pelatihan dan penyedia solusi formulasi kimia pembersih terdepan di Indonesia yang melahirkan pengusaha mandiri, efisien, dan berdaya saing tinggi.</p>
            </div>
            <div class="card">
                <span class="card-number">Misi</span>
                <h3 class="card-title">Misi Utama Kami</h3>
                <p class="card-text">1. Menyediakan materi praktikum formulasi kimia yang praktis & siap pakai.<br>2. Mengedukasi cara penggunaan chemical yang aman & efisien di lapangan.<br>3. Memberikan pendampingan jangka panjang bagi alumni pengusaha laundry & homecare.</p>
            </div>
        </div>

    </div>
</section>

<!-- 2. PROGRAM PELATIHAN UNGGULAN INTEGRASI -->
<section id="program" class="section section-alt">
    <div class="container">
        
        <div class="section-header">
            <span class="section-subtitle">Program Kami</span>
            <h2 class="section-title">Program Pelatihan Kimia Kebersihan</h2>
            <p class="section-description">Pilihan program praktikum tatap muka langsung bimbingan instruktur berpengalaman.</p>
        </div>

        <div class="grid grid-3" style="margin-bottom: 2.5rem;">
            <div class="card">
                <span style="display:inline-block; padding:0.25rem 0.75rem; border-radius:var(--radius-full); background:var(--color-primary-light); color:var(--color-primary); font-size:0.8rem; font-weight:700; margin-bottom:1rem; width:fit-content;">
                    2 Hari Intensive
                </span>
                <h3 class="card-title">Formulasi Deterjen & Softener Laundry</h3>
                <p class="card-text">Pelatihan meracik deterjen cair, softener parfum tahan lama, alkali booster, dan pemutih ramah serat kain.</p>
                <div style="margin-top: auto; padding-top: 1rem; border-top: 1px solid var(--color-border); display: flex; align-items: center; justify-content: space-between;">
                    <span style="font-weight: 700; color: var(--color-secondary); font-size: 1.1rem;">Rp 2.500.000</span>
                    <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya minat kelas Formulasi Deterjen Laundry.' ) ); ?>" target="_blank" class="btn btn-whatsapp" style="padding: 0.45rem 1rem; font-size: 0.85rem;">Daftar WA</a>
                </div>
            </div>

            <div class="card">
                <span style="display:inline-block; padding:0.25rem 0.75rem; border-radius:var(--radius-full); background:var(--color-primary-light); color:var(--color-primary); font-size:0.8rem; font-weight:700; margin-bottom:1rem; width:fit-content;">
                    1 Hari Practical
                </span>
                <h3 class="card-title">Pembuatan Sabun Homecare & Handsoap</h3>
                <p class="card-text">Pelatihan pembuatan sabun cuci piring pekat, sabun cuci tangan anti-bakteri, karbol wangi, dan pemersih lantai.</p>
                <div style="margin-top: auto; padding-top: 1rem; border-top: 1px solid var(--color-border); display: flex; align-items: center; justify-content: space-between;">
                    <span style="font-weight: 700; color: var(--color-secondary); font-size: 1.1rem;">Rp 1.850.000</span>
                    <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya minat kelas Sabun Homecare.' ) ); ?>" target="_blank" class="btn btn-whatsapp" style="padding: 0.45rem 1rem; font-size: 0.85rem;">Daftar WA</a>
                </div>
            </div>

            <div class="card">
                <span style="display:inline-block; padding:0.25rem 0.75rem; border-radius:var(--radius-full); background:var(--color-primary-light); color:var(--color-primary); font-size:0.8rem; font-weight:700; margin-bottom:1rem; width:fit-content;">
                    2 Hari Advanced
                </span>
                <h3 class="card-title">Chemical Housekeeping & Otomotif Care</h3>
                <p class="card-text">Formulasi khusus pembersih kerak keramik, glass cleaner, semir ban silikon emulsi, dan shampoo mobil busa melimpah.</p>
                <div style="margin-top: auto; padding-top: 1rem; border-top: 1px solid var(--color-border); display: flex; align-items: center; justify-content: space-between;">
                    <span style="font-weight: 700; color: var(--color-secondary); font-size: 1.1rem;">Rp 3.000.000</span>
                    <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya minat kelas Housekeeping & Otomotif.' ) ); ?>" target="_blank" class="btn btn-whatsapp" style="padding: 0.45rem 1rem; font-size: 0.85rem;">Daftar WA</a>
                </div>
            </div>
        </div>

        <div style="text-align: center;">
            <a href="<?php echo esc_url( home_url( '/program-pelatihan/' ) ); ?>" class="btn btn-primary">Lihat Seluruh Katalog Program</a>
        </div>

    </div>
</section>

<!-- 3. SEKSI FAQ (PERTANYAAN SERING DIAJUKAN) INTEGRASI -->
<section id="faq" class="section">
    <div class="container" style="max-width: 850px;">
        
        <div class="section-header">
            <span class="section-subtitle">Pusat Informasi</span>
            <h2 class="section-title">Pertanyaan Sering Diajukan (FAQ)</h2>
            <p class="section-description">Jawaban lengkap seputar pelaksanaan pelatihan, fasilitas, dan bimbingan pasca kelas.</p>
        </div>

        <div style="margin-bottom: 2.5rem;">
            <div class="accordion-item">
                <div class="accordion-header">
                    <span>Apakah pemula tanpa latar belakang kimia bisa mengikuti?</span>
                </div>
                <div class="accordion-body">
                    Sangat bisa! Seluruh materi pelatihan dirancang praktis dari dasar. Peserta diajarkan mengenal fungsi bahan aktif, takaran persentase aman, hingga cara meracik produk pembersih secara mandiri.
                </div>
            </div>

            <div class="accordion-item">
                <div class="accordion-header">
                    <span>Fasilitas apa saja yang didapatkan oleh peserta pelatihan?</span>
                </div>
                <div class="accordion-body">
                    Setiap peserta akan mendapatkan modul praktikum fisik/digital, sampel bahan kimia untuk meracik langsung di kelas, sertifikat pelatihan resmi dari Cleanique Academy, serta akses ke grup konsultasi alumni.
                </div>
            </div>

            <div class="accordion-item">
                <div class="accordion-header">
                    <span>Mengapa pelatihan diselenggarakan secara Tatap Muka (Offline)?</span>
                </div>
                <div class="accordion-body">
                    Pelatihan tatap muka memungkinkan peserta untuk menyentuh, mencium aroma, dan mengenali sifat fisik bahan kimia secara nyata sehingga tidak salah saat membeli bahan baku di pasaran.
                </div>
            </div>

            <div class="accordion-item">
                <div class="accordion-header">
                    <span>Apakah ada bimbingan atau konsultasi setelah pelatihan selesai?</span>
                </div>
                <div class="accordion-body">
                    Ada. Kami menyediakan grup alumni WhatsApp dan saluran konsultasi langsung dengan mentor untuk membantu peserta apabila mengalami kendala produksi di lapangan.
                </div>
            </div>

            <div class="accordion-item">
                <div class="accordion-header">
                    <span>Dimana lokasi pelatihan tatap muka diselenggarakan?</span>
                </div>
                <div class="accordion-body">
                    Pelatihan rutin diselenggarakan di Laboratorium & Training Center Cleanique Academy di Yogyakarta, serta event pelatihan berkala di berbagai kota besar di Indonesia.
                </div>
            </div>
        </div>

    </div>
</section>

<!-- 4. SEKSI KONTAK KANTOR PUSAT & CALL TO ACTION -->
<section id="kontak" class="section section-alt">
    <div class="container" style="max-width: 850px;">
        <div style="background: linear-gradient(135deg, var(--color-secondary) 0%, #1e293b 100%); color: #ffffff; border-radius: var(--radius-md); padding: 3rem; text-align: center;">
            <span style="display: inline-block; background: rgba(2, 132, 199, 0.25); color: #7dd3fc; padding: 0.3rem 0.9rem; border-radius: var(--radius-full); font-size: 0.8rem; font-weight: 700; text-transform: uppercase; margin-bottom: 1rem;">KONTAK KANTOR PUSAT</span>
            <h3 style="color:#ffffff; font-size: 1.8rem; margin-bottom: 1rem;">Konsultasikan Pendaftaran Pelatihan Anda</h3>
            <p style="color: #cbd5e1; font-size: 1.05rem; margin-bottom: 1.75rem;">Tim customer service & konsultan Cleanique Academy (PT Indotech Berkah Abadi) siap melayani pertanyaan Anda.</p>
            <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya ingin konsultasi pendaftaran dari halaman Tentang Kami.' ) ); ?>" target="_blank" class="btn btn-whatsapp">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.157 4.228 4.228-1.157zm12.339-6.495c-.068-.113-.25-.181-.523-.317-.272-.136-1.61-.795-1.86-.886-.25-.091-.432-.136-.613.136-.182.272-.704.886-.863 1.067-.159.182-.318.204-.59.068-.272-.136-1.151-.424-2.193-1.353-.81-.723-1.357-1.616-1.516-1.888-.159-.272-.017-.419.119-.554.122-.122.272-.318.408-.477.136-.159.182-.272.272-.454.091-.182.045-.341-.023-.477-.068-.136-.613-1.477-.84-2.023-.222-.534-.447-.461-.613-.469-.159-.008-.341-.01-.523-.01s-.477.068-.727.341c-.25.272-.954.932-.954 2.273s.977 2.636 1.114 2.818c.136.182 1.923 2.936 4.659 4.116.65.281 1.158.448 1.554.573.653.207 1.247.178 1.716.108.523-.078 1.61-.658 1.838-1.295.227-.636.227-1.181.159-1.295z"/></svg>
                <span>Hubungi Kami via WA</span>
            </a>
        </div>
    </div>
</section>

<?php
get_footer();
