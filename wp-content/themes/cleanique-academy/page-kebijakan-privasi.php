<?php
/**
 * Template Name: Kebijakan Privasi
 * 
 * Template untuk halaman Kebijakan Privasi (Privacy Policy) Cleanique Academy
 */
get_header();

cleanique_render_page_hero( array(
    'title'    => 'Kebijakan Privasi',
    'badge'    => 'Dokumen Legal',
    'subtitle' => 'Komitmen PT Indotech Berkah Abadi dalam melindungi dan menjaga kerahasiaan data pribadi Anda.',
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
                    Di <strong>Cleanique Academy</strong> (PT Indotech Berkah Abadi), kami menghargai privasi setiap pengunjung situs web dan peserta pelatihan kami. Dokumen Kebijakan Privasi ini menjelaskan jenis informasi yang kami kumpulkan, bagaimana informasi tersebut digunakan, dan langkah-langkah yang kami ambil untuk melindungi data Anda.
                </p>
            </div>

            <article class="legal-content" style="display: flex; flex-direction: column; gap: 2rem;">
                
                <div>
                    <h2 style="font-size: 1.35rem; font-weight: 700; color: var(--color-secondary); margin-bottom: 0.75rem;">1. Informasi yang Kami Kumpulkan</h2>
                    <p style="margin-bottom: 0.75rem;">Kami mengumpulkan beberapa jenis informasi dari dan tentang pengguna situs web kami, termasuk:</p>
                    <ul style="padding-left: 1.5rem; margin-bottom: 1rem;">
                        <li><strong>Data Pendaftaran Pelatihan:</strong> Nama lengkap, nomor telepon/WhatsApp, alamat email, kota asal, dan riwayat pendaftaran kelas pelatihan.</li>
                        <li><strong>Komunikasi Konsultasi:</strong> Pesan atau pertanyaan yang Anda kirimkan melalui formulir kontak atau aplikasi percakapan WhatsApp official kami.</li>
                        <li><strong>Data Akses Teknis:</strong> Alamat IP, jenis peramban (browser), halaman yang dikunjungi, dan durasi sesi untuk keperluan analisis analitik anonim.</li>
                    </ul>
                </div>

                <div>
                    <h2 style="font-size: 1.35rem; font-weight: 700; color: var(--color-secondary); margin-bottom: 0.75rem;">2. Penggunaan Informasi</h2>
                    <p style="margin-bottom: 0.75rem;">Informasi yang kami kumpulkan digunakan secara eksklusif untuk kepentingan layanan berikut:</p>
                    <ul style="padding-left: 1.5rem; margin-bottom: 1rem;">
                        <li>Memproses pendaftaran, pengiriman jadwal, modul pelatihan, dan penerbitan sertifikat kepesertaan.</li>
                        <li>Menghubungi Anda terkait konfirmasi pembayaran, pengingat jadwal kelas, atau informasi teknis pelatihan.</li>
                        <li>Memberikan dukungan konsultasi pasca-pelatihan melalui grup mitra WhatsApp.</li>
                        <li>Meningkatkan kualitas konten materi pelatihan dan kenyamanan navigasi situs web Cleanique Academy.</li>
                    </ul>
                </div>

                <div>
                    <h2 style="font-size: 1.35rem; font-weight: 700; color: var(--color-secondary); margin-bottom: 0.75rem;">3. Perlindungan & Keamanan Data</h2>
                    <p>
                        PT Indotech Berkah Abadi menerapkan standar keamanan teknis dan organisasional untuk mencegah akses yang tidak sah, pengungkapan, atau penyalahgunaan data pribadi Anda. Kami <strong>tidak pernah menjual, menyewakan, atau membagikan</strong> informasi pribadi Anda kepada pihak ketiga mana pun untuk tujuan pemasaran tanpa persetujuan eksplisit Anda.
                    </p>
                </div>

                <div>
                    <h2 style="font-size: 1.35rem; font-weight: 700; color: var(--color-secondary); margin-bottom: 0.75rem;">4. Hak Pengguna atas Data</h2>
                    <p style="margin-bottom: 0.75rem;">Sebagai pemilik data pribadi, Anda memiliki hak untuk:</p>
                    <ul style="padding-left: 1.5rem; margin-bottom: 1rem;">
                        <li>Meminta akses ke data pribadi yang kami simpan tentang Anda.</li>
                        <li>Meminta koreksi atau pembaruan atas data pribadi yang tidak akurat.</li>
                        <li>Meminta penghapusan data kontak Anda dari milis komunikasi non-transaksional kami.</li>
                    </ul>
                </div>

                <div>
                    <h2 style="font-size: 1.35rem; font-weight: 700; color: var(--color-secondary); margin-bottom: 0.75rem;">5. Kontak Pengaduan Privasi</h2>
                    <p>
                        Jika Anda memiliki pertanyaan, saran, atau permintaan terkait Kebijakan Privasi ini, silakan hubungi tim legal & layanan pelanggan kami di:
                    </p>
                    <div style="background: var(--color-primary-light); border-left: 4px solid var(--color-primary); padding: 1.25rem; border-radius: 0 var(--radius-sm) var(--radius-sm) 0; margin-top: 1rem;">
                        <strong style="color: var(--color-primary); display: block; margin-bottom: 0.35rem;">PT Indotech Berkah Abadi - Cleanique Academy</strong>
                        <p style="font-size: 0.9rem; margin: 0;">Email: <a href="mailto:indotechberkahabadi@gmail.com" style="color: var(--color-primary); font-weight: 600;">indotechberkahabadi@gmail.com</a></p>
                        <p style="font-size: 0.9rem; margin: 0.25rem 0 0 0;">WhatsApp: <a href="https://wa.me/6282215840088" target="_blank" style="color: var(--color-primary); font-weight: 600;">+62 822-1584-0088</a></p>
                    </div>
                </div>

            </article>

        </div>
    </div>
</section>

<?php
get_footer();
