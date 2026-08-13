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

<section class="section">
    <div class="container" style="max-width: 900px;">
        <div style="background: #ffffff; border-radius: var(--radius-md); padding: 3rem 2.5rem; box-shadow: var(--shadow-sm); border: 1px solid var(--color-border); line-height: 1.8; color: var(--color-text);">
            
            <div style="margin-bottom: 2.5rem; padding-bottom: 1.5rem; border-bottom: 1px solid var(--color-border);">
                <p style="font-size: 0.9rem; color: var(--color-text-muted);">
                    Terakhir diperbarui: <strong><?php echo date_i18n( 'j F Y' ); ?></strong>
                </p>
                <p style="font-size: 1.05rem; color: var(--color-text);">
                    Situs web <strong>Cleanique Academy</strong> mengoperasikan teknologi *cookie* dan sistem penyimpanan lokal peramban untuk memastikan fungsi situs berjalan dengan optimal dan memberikan pengalaman pengguna yang responsif.
                </p>
            </div>

            <article class="legal-content" style="display: flex; flex-direction: column; gap: 2rem;">
                
                <div>
                    <h2 style="font-size: 1.35rem; font-weight: 700; color: var(--color-secondary); margin-bottom: 0.75rem;">1. Apa Itu Cookie?</h2>
                    <p>
                        *Cookie* adalah berkas teks kecil yang disimpan di perangkat atau komputer Anda oleh peramban (*browser*) saat Anda mengunjungi situs web. Cookie membantu situs mengenali perangkat Anda pada kunjungan berikutnya serta menyimpan preferensi pengaturan navigasi.
                    </p>
                </div>

                <div>
                    <h2 style="font-size: 1.35rem; font-weight: 700; color: var(--color-secondary); margin-bottom: 0.75rem;">2. Jenis Cookie yang Kami Gunakan</h2>
                    <ul style="padding-left: 1.5rem; margin-bottom: 1rem;">
                        <li><strong>Cookie Esensial:</strong> Diperlukan agar fitur utama situs web dapat berfungsi dengan normal (misalnya sesi pendaftaran dan keamanan).</li>
                        <li><strong>Cookie Performa & Analitik:</strong> Membantu kami memahami bagaimana pengunjung berinteraksi dengan halaman situs web agar kami dapat terus meningkatkan kecepatan dan kenyamanan navigasi.</li>
                        <li><strong>Cookie Fungsionalitas:</strong> Memungkinkan situs mengingat pilihan preferensi Anda seperti bahasa dan riwayat tampilan galeri.</li>
                    </ul>
                </div>

                <div>
                    <h2 style="font-size: 1.35rem; font-weight: 700; color: var(--color-secondary); margin-bottom: 0.75rem;">3. Pengaturan & Pengelolaan Cookie</h2>
                    <p style="margin-bottom: 0.75rem;">
                        Anda memiliki kendali penuh untuk menolak atau menghapus cookie melalui pengaturan peramban Anda (seperti Google Chrome, Mozilla Firefox, atau Safari).
                    </p>
                    <p style="font-size: 0.9rem; color: var(--color-text-muted);">
                        *Catatan: Mengnonaktifkan cookie esensial dapat mempengaruhi berjalannya beberapa fungsi dasar pada situs web kami.*
                    </p>
                </div>

                <div>
                    <h2 style="font-size: 1.35rem; font-weight: 700; color: var(--color-secondary); margin-bottom: 0.75rem;">4. Hubungi Kami</h2>
                    <p>
                        Jika Anda memiliki pertanyaan mengenai penggunaan cookie di situs Cleanique Academy, silakan hubungi kami via email di <a href="mailto:indotechberkahabadi@gmail.com" style="color: var(--color-primary); font-weight: 600;">indotechberkahabadi@gmail.com</a> atau WhatsApp <a href="https://wa.me/6282215840088" target="_blank" style="color: var(--color-primary); font-weight: 600;">+62 822-1584-0088</a>.
                    </p>
                </div>

            </article>

        </div>
    </div>
</section>

<?php
get_footer();
