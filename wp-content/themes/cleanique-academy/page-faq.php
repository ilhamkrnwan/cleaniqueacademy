<?php
/**
 * Template Name: Halaman FAQ
 */
get_header();

cleanique_render_page_hero( array(
    'title'    => 'Pertanyaan Sering Diajukan (FAQ)',
    'badge'    => 'Pusat Bantuan',
    'subtitle' => 'Temukan jawaban lengkap seputar pelaksanaan pelatihan, materi, dan sertifikasi Cleanique Academy.',
    'theme'    => 'light',
) );
?>

<section class="section">
    <div class="container" style="max-width: 850px;">
        
        <div style="margin-bottom: 3.5rem;">
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

        <div style="background: linear-gradient(135deg, var(--color-secondary) 0%, #1e293b 100%); color: #ffffff; border-radius: var(--radius-md); padding: 2.5rem; text-align: center;">
            <h3 style="color:#ffffff; font-size: 1.5rem; margin-bottom: 0.75rem;">Punya Pertanyaan Lain yang Belum Terjawab?</h3>
            <p style="color: #cbd5e1; font-size: 1rem; margin-bottom: 1.5rem;">Tim support kami siap membantu memberikan informasi detail seputar kelas pelatihan.</p>
            <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya ada pertanyaan seputar pelatihan yang ingin ditanyakan.' ) ); ?>" target="_blank" class="btn btn-whatsapp">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.157 4.228 4.228-1.157zm12.339-6.495c-.068-.113-.25-.181-.523-.317-.272-.136-1.61-.795-1.86-.886-.25-.091-.432-.136-.613.136-.182.272-.704.886-.863 1.067-.159.182-.318.204-.59.068-.272-.136-1.151-.424-2.193-1.353-.81-.723-1.357-1.616-1.516-1.888-.159-.272-.017-.419.119-.554.122-.122.272-.318.408-.477.136-.159.182-.272.272-.454.091-.182.045-.341-.023-.477-.068-.136-.613-1.477-.84-2.023-.222-.534-.447-.461-.613-.469-.159-.008-.341-.01-.523-.01s-.477.068-.727.341c-.25.272-.954.932-.954 2.273s.977 2.636 1.114 2.818c.136.182 1.923 2.936 4.659 4.116.65.281 1.158.448 1.554.573.653.207 1.247.178 1.716.108.523-.078 1.61-.658 1.838-1.295.227-.636.227-1.181.159-1.295z"/></svg>
                <span>Tanya via WhatsApp</span>
            </a>
        </div>

    </div>
</section>

<?php
get_footer();
