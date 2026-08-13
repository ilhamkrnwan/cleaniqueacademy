<?php
/**
 * Template Name: Syarat & Ketentuan
 * 
 * Template untuk halaman Syarat & Ketentuan (Terms & Conditions) Cleanique Academy
 */
get_header();

cleanique_render_page_hero( array(
    'title'    => 'Syarat & Ketentuan',
    'badge'    => 'Aturan Pelatihan',
    'subtitle' => 'Ketentuan resmi partisipasi kelas pelatihan, pembayaran, serta hak kekayaan intelektual formula Cleanique Academy.',
    'theme'    => 'light',
) );
?>

<section class="section">
    <div class="container" style="max-width: 900px;">
        <div style="background: #ffffff; border-radius: var(--radius-md); padding: 3rem 2.5rem; box-shadow: var(--shadow-sm); border: 1px solid var(--color-border); line-height: 1.8; color: var(--color-text);">
            
            <div style="margin-bottom: 2.5rem; padding-bottom: 1.5rem; border-bottom: 1px solid var(--color-border);">
                <p style="font-size: 0.9rem; color: var(--color-text-muted);">
                    Terakhir diperbarui: <strong><?php echo date_i18n( 'j F Y' ); ?></strong>
                </p>
                <p style="font-size: 1.05rem; color: var(--color-text);">
                    Selamat datang di <strong>Cleanique Academy</strong>. Dengan mendaftar, mengakses, atau mengikuti program pelatihan yang diselenggarakan oleh <strong>PT Indotech Berkah Abadi</strong>, Anda dianggap telah membaca, memahami, dan menyetujui seluruh Syarat & Ketentuan berikut ini.
                </p>
            </div>

            <article class="legal-content" style="display: flex; flex-direction: column; gap: 2rem;">
                
                <div>
                    <h2 style="font-size: 1.35rem; font-weight: 700; color: var(--color-secondary); margin-bottom: 0.75rem;">1. Ketentuan Pendaftaran & Ketertiban Kelas</h2>
                    <ul style="padding-left: 1.5rem; margin-bottom: 1rem;">
                        <li>Peserta wajib mengisi data pendaftaran yang benar dan valid saat mengonfirmasi kepesertaan.</li>
                        <li>Pelatihan diselenggarakan secara tatap muka (*offline*) sesuai lokasi dan jadwal yang telah disepakati bersama.</li>
                        <li>Peserta diwajibkan mematuhi standar keselamatan praktikum bahan kimia selama sesi laboratorium berlangsung.</li>
                    </ul>
                </div>

                <div>
                    <h2 style="font-size: 1.35rem; font-weight: 700; color: var(--color-secondary); margin-bottom: 0.75rem;">2. Pembayaran & Pembatalan</h2>
                    <ul style="padding-left: 1.5rem; margin-bottom: 1rem;">
                        <li>Pembayaran uang muka (*DP*) atau pelunasan biaya pelatihan dilakukan melalui rekening resmi PT Indotech Berkah Abadi.</li>
                        <li>Perubahan jadwal (*reschedule*) dapat diajukan paling lambat 3 (tiga) hari sebelum tanggal pelaksanaan pelatihan.</li>
                        <li>Uang pendaftaran yang telah masuk bersifat *non-refundable* kecuali terjadi pembatalan sepihak dari pihak penyelenggara.</li>
                    </ul>
                </div>

                <div>
                    <h2 style="font-size: 1.35rem; font-weight: 700; color: var(--color-secondary); margin-bottom: 0.75rem;">3. Hak Kekayaan Intelektual & Lisensi Formula</h2>
                    <p style="margin-bottom: 0.75rem;">
                        Seluruh modul pelatihan, resep formulasi kimia, materi presentasi, dan media pembelajaran yang diberikan adalah hak milik intelektual PT Indotech Berkah Abadi.
                    </p>
                    <ul style="padding-left: 1.5rem; margin-bottom: 1rem;">
                        <li>Peserta diberikan lisensi penuh untuk mempergunakan formula tersebut untuk **produksi dan komersialisasi usaha pribadi**.</li>
                        <li>Dilarang keras menyebarluaskan, memperjualbelikan ulang, atau mengunggah modul dan resep formula Cleanique Academy ke media publik tanpa izin tertulis dari manajemen.</li>
                    </ul>
                </div>

                <div>
                    <h2 style="font-size: 1.35rem; font-weight: 700; color: var(--color-secondary); margin-bottom: 0.75rem;">4. Pembatasan Tanggung Jawab</h2>
                    <p>
                        Penyelenggara bertanggung jawab memberikan pendampingan praktikum secara aman. Namun, hasil akhir kualitas produk yang dibuat di luar laboratorium pelatihan tergantung pada kepatuhan peserta terhadap takaran, kualitas bahan baku lokal, dan standar operasional produksi mandiri masing-masing.
                    </p>
                </div>

                <div>
                    <h2 style="font-size: 1.35rem; font-weight: 700; color: var(--color-secondary); margin-bottom: 0.75rem;">5. Kontak Layanan Bantuan</h2>
                    <p>
                        Apabila terdapat hal yang ingin ditanyakan seputar ketentuan pendaftaran dan pelaksanaan kelas, silakan hubungi tim kami melalui WhatsApp resmi di:
                    </p>
                    <div style="background: var(--color-primary-light); border-left: 4px solid var(--color-primary); padding: 1.25rem; border-radius: 0 var(--radius-sm) var(--radius-sm) 0; margin-top: 1rem;">
                        <strong style="color: var(--color-primary); display: block; margin-bottom: 0.35rem;">Customer Care Cleanique Academy</strong>
                        <p style="font-size: 0.9rem; margin: 0;">WhatsApp CS: <a href="https://wa.me/6282215840088" target="_blank" style="color: var(--color-primary); font-weight: 600;">+62 822-1584-0088</a></p>
                        <p style="font-size: 0.9rem; margin: 0.25rem 0 0 0;">Email: <a href="mailto:indotechberkahabadi@gmail.com" style="color: var(--color-primary); font-weight: 600;">indotechberkahabadi@gmail.com</a></p>
                    </div>
                </div>

            </article>

        </div>
    </div>
</section>

<?php
get_footer();
