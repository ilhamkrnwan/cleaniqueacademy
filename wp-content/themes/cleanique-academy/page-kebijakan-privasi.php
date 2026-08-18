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

<section class="section section-decorated">
    <div class="container" style="max-width: 900px;">
        
        <!-- LEGAL TOC BOX -->
        <div class="legal-toc-box">
            <div style="font-size: 0.82rem; font-weight: 800; text-transform: uppercase; letter-spacing: 0.05em; color: var(--color-primary); margin-bottom: 0.6rem;">Daftar Isi Dokumen</div>
            <ul class="legal-toc-list">
                <li><a href="#sec-1">1. Informasi yang Kami Kumpulkan</a></li>
                <li><a href="#sec-2">2. Penggunaan Informasi</a></li>
                <li><a href="#sec-3">3. Perlindungan &amp; Keamanan Data</a></li>
                <li><a href="#sec-4">4. Hak Pengguna atas Data</a></li>
                <li><a href="#sec-5">5. Kontak Pengaduan Privasi</a></li>
            </ul>
        </div>

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
                
                <div id="sec-1">
                    <h2 style="font-size: 1.35rem; font-weight: 700; color: var(--color-secondary); margin-bottom: 0.75rem;">1. Informasi yang Kami Kumpulkan</h2>
                    <p style="margin-bottom: 0.75rem;">Kami mengumpulkan beberapa jenis informasi dari dan tentang pengguna situs web kami, termasuk:</p>
                    <ul style="padding-left: 1.5rem; margin-bottom: 1rem;">
                        <li><strong>Data Pendaftaran Pelatihan:</strong> Nama lengkap, nomor telepon/WhatsApp, alamat email, kota asal, dan riwayat pendaftaran kelas pelatihan.</li>
                        <li><strong>Komunikasi Konsultasi:</strong> Pesan atau pertanyaan yang Anda kirimkan melalui formulir kontak atau aplikasi percakapan WhatsApp official kami.</li>
                        <li><strong>Data Akses Teknis:</strong> Alamat IP, jenis peramban (browser), halaman yang dikunjungi, dan durasi sesi untuk keperluan analisis analitik anonim.</li>
                    </ul>
                </div>

                <div id="sec-2">
                    <h2 style="font-size: 1.35rem; font-weight: 700; color: var(--color-secondary); margin-bottom: 0.75rem;">2. Penggunaan Informasi</h2>
                    <p style="margin-bottom: 0.75rem;">Informasi yang kami kumpulkan digunakan secara eksklusif untuk kepentingan layanan berikut:</p>
                    <ul style="padding-left: 1.5rem; margin-bottom: 1rem;">
                        <li>Memproses pendaftaran, pengiriman jadwal, modul pelatihan, dan penerbitan sertifikat kepesertaan.</li>
                        <li>Menghubungi Anda terkait konfirmasi pembayaran, pengingat jadwal kelas, atau informasi teknis pelatihan.</li>
                        <li>Memberikan dukungan konsultasi pasca-pelatihan melalui grup mitra WhatsApp.</li>
                        <li>Meningkatkan kualitas konten materi pelatihan dan kenyamanan navigasi situs web Cleanique Academy.</li>
                    </ul>
                </div>

                <div id="sec-3">
                    <h2 style="font-size: 1.35rem; font-weight: 700; color: var(--color-secondary); margin-bottom: 0.75rem;">3. Perlindungan &amp; Keamanan Data</h2>
                    <p>
                        PT Indotech Berkah Abadi menerapkan standar keamanan teknis dan organisasional untuk mencegah akses yang tidak sah, pengungkapan, atau penyalahgunaan data pribadi Anda. Kami <strong>tidak pernah menjual, menyewakan, atau membagikan</strong> informasi pribadi Anda kepada pihak ketiga mana pun untuk tujuan pemasaran tanpa persetujuan eksplisit Anda.
                    </p>
                </div>

                <div id="sec-4">
                    <h2 style="font-size: 1.35rem; font-weight: 700; color: var(--color-secondary); margin-bottom: 0.75rem;">4. Hak Pengguna atas Data</h2>
                    <p style="margin-bottom: 0.75rem;">Sebagai pemilik data pribadi, Anda memiliki hak untuk:</p>
                    <ul style="padding-left: 1.5rem; margin-bottom: 1rem;">
                        <li>Meminta akses ke data pribadi yang kami simpan tentang Anda.</li>
                        <li>Meminta koreksi atau pembaruan atas data pribadi yang tidak akurat.</li>
                        <li>Meminta penghapusan data kontak Anda dari milis komunikasi non-transaksional kami.</li>
                    </ul>
                </div>

                <div id="sec-5">
                    <h2 style="font-size: 1.35rem; font-weight: 700; color: var(--color-secondary); margin-bottom: 0.75rem;">5. Kontak Pengaduan Privasi</h2>
                    <p>
                        Jika Anda memiliki pertanyaan, saran, atau permintaan terkait Kebijakan Privasi ini, silakan hubungi tim legal &amp; layanan pelanggan kami di:
                    </p>
                    <div style="background: var(--color-primary-light); border: 1px solid var(--color-primary-border); padding: 1.25rem; border-radius: var(--radius-md); margin-top: 1rem;">
                        <strong style="color: var(--color-primary); display: block; margin-bottom: 0.35rem;">PT Indotech Berkah Abadi - Cleanique Academy</strong>
                        <p style="font-size: 0.9rem; margin: 0;">Email: <a href="mailto:indotechberkahabadi@gmail.com" style="color: var(--color-primary); font-weight: 600;">indotechberkahabadi@gmail.com</a></p>
                        <p style="font-size: 0.9rem; margin: 0.25rem 0 0 0;">WhatsApp: <a href="https://wa.me/6282215840088" target="_blank" style="color: var(--color-primary); font-weight: 600;">+62 822-1584-0088</a></p>
                    </div>
                </div>

            </article>

        </div>

        <!-- INTERNAL NAVIGATION LINKS GRID -->
        <div style="margin-top: 3.5rem;">
            <div class="section-header">
                <span class="section-subtitle">Navigasi Halaman Utama</span>
                <h3 style="font-size: 1.4rem; font-weight: 800; color: #0f172a;">Jelajahi Informasi Lainnya</h3>
                <div class="section-accent-bar"></div>
            </div>
            <div class="internal-links-grid">
                <a href="<?php echo esc_url( home_url( '/kebijakan-cookie/' ) ); ?>" class="internal-link-card">
                    <div class="internal-link-icon-box">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M12 2a10 10 0 0 0-10 10c0 5.52 4.48 10 10 10s10-4.48 10-10A10 10 0 0 0 12 2zm0 18a8 8 0 1 1 0-16 8 8 0 0 1 0 16z"></path></svg>
                    </div>
                    <div class="internal-link-title">
                        <span>Kebijakan Cookie</span>
                        <span class="internal-link-arrow">&rarr;</span>
                    </div>
                    <p class="internal-link-desc">Informasi penggunaan cookie dan teknologi pelacakan anonim di peramban Anda.</p>
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
                    <p class="internal-link-desc">Kontak alamat kantor pusat Yogyakarta dan permohonan data pribadi.</p>
                </a>
            </div>
        </div>

    </div>
</section>

<!-- Schema.org Data Structuring (JSON-LD) for Privacy Policy -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "name": "Kebijakan Privasi - Cleanique Academy",
  "url": "<?php echo esc_url( get_permalink() ); ?>",
  "description": "Komitmen PT Indotech Berkah Abadi dalam melindungi dan menjaga kerahasiaan data pribadi Anda.",
  "publisher": {
    "@type": "Organization",
    "name": "PT Indotech Berkah Abadi"
  }
}
</script>

<?php
get_footer();
