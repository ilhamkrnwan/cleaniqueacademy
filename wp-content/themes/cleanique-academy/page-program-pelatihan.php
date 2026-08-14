<?php
/**
 * Template Name: Halaman Program Pelatihan
 */
get_header();

cleanique_render_page_hero( array(
    'title'    => 'Katalog Program Pelatihan Formulasi Kimia',
    'badge'    => 'Program Unggulan',
    'subtitle' => 'Pilih paket pelatihan kimia industri, laundry, dan homecare sesuai dengan skala dan tujuan usaha Anda.',
    'theme'    => 'light',
) );
?>

<!-- SECTION PROMO INVESTASI PELATIHAN -->
<section id="program-unggulan" class="section" style="background-color: #11262d; color: #ffffff; padding: 3.25rem 0; overflow: hidden; margin-bottom: 3rem;">
    <div class="container" style="max-width: 1080px;">
        
        <!-- Header Promo Section -->
        <div style="text-align: center; max-width: 800px; margin: 0 auto 2rem auto;">
            <h2 style="font-family: var(--font-heading); font-size: 2rem; font-weight: 800; color: #ffffff; margin-bottom: 0.75rem;">
                Promo Investasi Pelatihan Bulan <?php echo date_i18n('F Y'); ?>
            </h2>
            <p style="font-size: 0.92rem; line-height: 1.65; color: #94a3b8; margin: 0;">
                Training diadakan di Jogja setiap akhir pekan, <strong>Sabtu - Minggu</strong>. Materi pelatihan pembuatan chemical laundry mengacu pada formula baku yang biasa dibuat oleh para produsen chemical laundry, baik formula yang kompleks maupun yang sangat sederhana. Formula telah kami riset berdasarkan efisiensi, kegunaan, dan kepentingan yang dipandang dari berbagai sisi. Ada dua kelas utama yang dapat Anda pilih:
            </p>
        </div>

        <!-- GRID UTAMA BARIS 1: KELAS KOLEKTIF & KELAS PRIVAT -->
        <div class="grid grid-2" style="gap: 1.25rem; margin-bottom: 1.25rem; align-items: stretch;">
            
            <!-- KELAS KOLEKTIF -->
            <div class="program-card-box">
                <div style="text-align: center; margin-bottom: 1.25rem;">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo.webp' ); ?>" alt="Cleanique Academy" style="height: 38px; margin: 0 auto 0.85rem auto; display: block;">
                    <h3 style="font-family: var(--font-heading); font-size: 1.25rem; font-weight: 800; letter-spacing: 0.05em; color: #0f172a; text-transform: uppercase;">KELAS KOLEKTIF</h3>
                </div>

                <p style="font-size: 0.86rem; line-height: 1.55; color: #475569; text-align: center; margin-bottom: 1.25rem;">
                    Kelas terdiri dari minimal 2 orang sampai dengan 4 orang, merupakan pilihan ekonomis bagi Anda yang memiliki biaya terbatas tetapi ingin memiliki kemampuan meracik bahan kimia laundry. Pelatihan dilaksanakan selama <strong>1 hari</strong>. Biaya pelatihan sebesar:
                </p>

                <div style="text-align: center; margin-bottom: 1.5rem;">
                    <span style="display: block; color: #dc2626; font-weight: 700; font-size: 0.82rem; font-style: italic; margin-bottom: 0.15rem;">*Harga Promo</span>
                    <div style="text-decoration: line-through; color: #64748b; font-weight: 700; font-size: 1rem;">Rp 6.500.000,-</div>
                    <div style="font-size: 1.95rem; font-weight: 800; color: #15803d; margin-top: 0.15rem;">Rp 4.300.000,-</div>
                </div>

                <!-- Checklist Fasilitas -->
                <ul style="list-style: none; padding: 0; margin: 0 0 1.5rem 0; display: flex; flex-direction: column; gap: 0.5rem; font-size: 0.85rem; color: #334155;">
                    <li style="display: flex; align-items: center; gap: 0.6rem; background: #f8fafc; padding: 0.45rem 0.75rem; border-radius: 6px;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Akomodasi penginapan</span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 0.6rem; background: #f1f5f9; padding: 0.45rem 0.75rem; border-radius: 6px;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Makan siang (lunch)</span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 0.6rem; background: #f8fafc; padding: 0.45rem 0.75rem; border-radius: 6px;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Coffee break</span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 0.6rem; background: #f1f5f9; padding: 0.45rem 0.75rem; border-radius: 6px;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Sertifikat pelatihan</span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 0.6rem; background: #f8fafc; padding: 0.45rem 0.75rem; border-radius: 6px;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>4 formula</span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 0.6rem; background: #f1f5f9; padding: 0.45rem 0.75rem; border-radius: 6px;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Modul materi pelatihan</span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 0.6rem; background: #fef08a; padding: 0.5rem 0.75rem; border-radius: 6px; font-weight: 800; color: #854d0e;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#ca8a04" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Mystery Box</span>
                    </li>
                </ul>

                <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya berminat mendaftar Kelas Kolektif promo Rp 4.300.000.' ) ); ?>" target="_blank" class="btn btn-whatsapp" style="margin-top: auto; width: 100%; justify-content: center; padding: 0.8rem; font-weight: 800; border-radius: 8px;">
                    Daftar Kelas Kolektif
                </a>
            </div>

            <!-- KELAS PRIVAT -->
            <div class="program-card-box">
                
                <!-- Sleek Top Badge Pill (Non-overflowing) -->
                <div style="background: #dc2626; color: #ffffff; font-size: 0.72rem; font-weight: 800; text-transform: uppercase; padding: 0.3rem 0.75rem; border-radius: 6px; width: fit-content; margin: 0 auto 0.75rem auto; box-shadow: 0 4px 8px rgba(220, 38, 38, 0.25); letter-spacing: 0.04em;">
                    Bonus Cara Menghitung HPP
                </div>

                <div style="text-align: center; margin-bottom: 1.25rem;">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo.webp' ); ?>" alt="Cleanique Academy" style="height: 38px; margin: 0 auto 0.85rem auto; display: block;">
                    <h3 style="font-family: var(--font-heading); font-size: 1.25rem; font-weight: 800; letter-spacing: 0.05em; color: #0f172a; text-transform: uppercase;">KELAS PRIVAT</h3>
                </div>

                <p style="font-size: 0.86rem; line-height: 1.55; color: #475569; text-align: center; margin-bottom: 1.25rem;">
                    Bagi Anda yang menginginkan privasi dan keleluasaan, kelas ini akan menjadi kelas pribadi Anda dengan waktu yang lebih lega. Waktu penyelenggaraan kelas privat fleksibel sesuai dengan kesepakatan dengan durasi maksimal <strong>2 hari</strong>. Biaya pelatihan sebesar:
                </p>

                <div style="text-align: center; margin-bottom: 1.5rem;">
                    <span style="display: block; color: #dc2626; font-weight: 700; font-size: 0.82rem; font-style: italic; margin-bottom: 0.15rem;">*Harga Promo</span>
                    <div style="text-decoration: line-through; color: #64748b; font-weight: 700; font-size: 1rem;">Rp 15.000.000,-</div>
                    <div style="font-size: 1.95rem; font-weight: 800; color: #15803d; margin-top: 0.15rem;">Rp 9.700.000,-</div>
                </div>

                <!-- Checklist Fasilitas Privat -->
                <ul style="list-style: none; padding: 0; margin: 0 0 1.5rem 0; display: flex; flex-direction: column; gap: 0.5rem; font-size: 0.85rem; color: #334155;">
                    <li style="display: flex; align-items: center; gap: 0.6rem; background: #f8fafc; padding: 0.45rem 0.75rem; border-radius: 6px;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Fasilitas antar jemput stasiun/hotel/lokasi</span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 0.6rem; background: #f1f5f9; padding: 0.45rem 0.75rem; border-radius: 6px;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Akomodasi hotel berbintang 1 kamar 1 orang</span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 0.6rem; background: #f8fafc; padding: 0.45rem 0.75rem; border-radius: 6px;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Makan siang (lunch) & Coffee break</span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 0.6rem; background: #f1f5f9; padding: 0.45rem 0.75rem; border-radius: 6px;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Wisata kuliner (Dinner)</span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 0.6rem; background: #f8fafc; padding: 0.45rem 0.75rem; border-radius: 6px;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Sertifikat pelatihan & Modul materi</span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 0.6rem; background: #f1f5f9; padding: 0.45rem 0.75rem; border-radius: 6px;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Bebas pilih 6 formula</span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 0.6rem; background: #fef08a; padding: 0.5rem 0.75rem; border-radius: 6px; font-weight: 800; color: #854d0e;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#ca8a04" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Mystery Box</span>
                    </li>
                </ul>

                <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya berminat mendaftar Kelas Privat promo Rp 9.700.000.' ) ); ?>" target="_blank" class="btn btn-whatsapp" style="margin-top: auto; width: 100%; justify-content: center; padding: 0.8rem; font-weight: 800; border-radius: 8px;">
                    Daftar Kelas Privat
                </a>
            </div>

        </div>

        <!-- GRID UTAMA BARIS 2: KELAS 1 PRODUK & KELAS CUSTOM -->
        <div class="grid grid-2" style="gap: 1.25rem; margin-bottom: 1.25rem; align-items: stretch;">
            
            <!-- KELAS 1 PRODUK -->
            <div class="program-card-box" style="text-align: center;">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo.webp' ); ?>" alt="Cleanique Academy" style="height: 34px; margin: 0 auto 0.85rem auto; display: block;">
                <h3 style="font-family: var(--font-heading); font-size: 1.15rem; font-weight: 800; letter-spacing: 0.05em; color: #0f172a; text-transform: uppercase; margin-bottom: 0.75rem;">KELAS 1 PRODUK</h3>
                <p style="font-size: 0.86rem; line-height: 1.55; color: #475569; margin-bottom: 1.25rem;">
                    Ingin belajar membuat 1 jenis produk chemical sesuai kebutuhan Anda? Kelas ini cocok untuk Anda yang ingin belajar lebih fokus pada produk tanpa mengambil paket lengkap. <strong>Konsultasikan kebutuhan Anda</strong> dengan CS untuk mengetahui produk yang tersedia dan penawaran terbaik.
                </p>
                <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya ingin tanya info Kelas 1 Produk.' ) ); ?>" target="_blank" style="margin-top: auto; background: #facc15; color: #0f172a; font-weight: 800; font-size: 0.9rem; padding: 0.75rem 1.25rem; border-radius: 8px; text-decoration: none; display: block; transition: all 0.2s ease;">
                    Tanya CS Sekarang
                </a>
            </div>

            <!-- KELAS CUSTOM -->
            <div class="program-card-box" style="text-align: center;">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo.webp' ); ?>" alt="Cleanique Academy" style="height: 34px; margin: 0 auto 0.85rem auto; display: block;">
                <h3 style="font-family: var(--font-heading); font-size: 1.15rem; font-weight: 800; letter-spacing: 0.05em; color: #0f172a; text-transform: uppercase; margin-bottom: 0.75rem;">KELAS CUSTOM</h3>
                <p style="font-size: 0.86rem; line-height: 1.55; color: #475569; margin-bottom: 1.25rem;">
                    Punya kebutuhan khusus? Ingin mempelajari beberapa produk atau formula tertentu? Kami menyediakan kelas yang dapat disesuaikan dengan kebutuhan bisnis, jumlah peserta, hingga materi pelatihan. <strong>Diskusikan kebutuhan Anda</strong> bersama tim kami untuk mendapatkan rekomendasi kelas dan penawaran terbaik.
                </p>
                <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya ingin konsultasi Kelas Custom.' ) ); ?>" target="_blank" style="margin-top: auto; background: #facc15; color: #0f172a; font-weight: 800; font-size: 0.9rem; padding: 0.75rem 1.25rem; border-radius: 8px; text-decoration: none; display: block; transition: all 0.2s ease;">
                    Tanya CS Sekarang
                </a>
            </div>

        </div>

        <!-- ADD-ON BANNER -->
        <div style="text-align: center; margin-bottom: 1.5rem; background: rgba(255, 255, 255, 0.06); border: 1px dashed rgba(255, 255, 255, 0.25); border-radius: 10px; padding: 1rem 1.25rem;">
            <h4 style="font-size: 1.05rem; font-weight: 800; color: #ffffff; margin-bottom: 0.35rem;">Add On : Tambah materi 1 juta per-formula</h4>
            <div style="display: flex; align-items: center; justify-content: center; gap: 0.6rem; flex-wrap: wrap;">
                <span style="text-decoration: line-through; color: #94a3b8; font-size: 0.95rem; font-weight: 700;">Rp 1.500.000,-</span>
                <span style="font-size: 1.5rem; font-weight: 800; color: #38bdf8;">Rp 1.000.000,-</span>
            </div>
        </div>

        <!-- QUOTE CALLOUT BOX (IPHONE QUOTE) -->
        <div style="max-width: 820px; margin: 0 auto 1.75rem auto; border: 1px solid rgba(255, 255, 255, 0.25); border-radius: 12px; padding: 1.25rem 1rem; background: rgba(15, 23, 42, 0.5); text-align: center; position: relative;">
            <p style="font-style: italic; font-size: 0.9rem; line-height: 1.65; color: #e2e8f0; margin-bottom: 0.65rem;">
                “Investasi terbaik bukanlah barang, melainkan ilmu. Dengan Rp9 juta, Anda bisa membeli satu iPhone nilainya akan terus menurun. Namun dengan Rp9 juta untuk mengikuti pelatihan pembuatan sabun kami, Anda mendapatkan bekal ilmu keterampilan yang bisa menghasilkan, bahkan membuka jalan untuk membeli 10 iPhone atau lebih.”
            </p>
            <strong style="color: #facc15; font-size: 0.9rem; display: block;">
                Ilmu tidak habis dipakai, justru terus bertambah nilainya.
            </strong>
        </div>

        <!-- MAIN BOTTOM CTA BUTTON -->
        <div style="text-align: center;">
            <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya berminat ambil promo investasi pelatihan.' ) ); ?>" target="_blank" style="display: inline-block; background: #ffffff; color: #0f172a; font-weight: 800; font-size: 0.95rem; padding: 0.85rem 2rem; border-radius: 8px; text-decoration: none; box-shadow: 0 8px 20px rgba(255,255,255,0.12); transition: all 0.2s ease;">
                Dapatkan Promo Pelatihan <?php echo date('Y'); ?>!
            </a>
        </div>

    </div>
</section>

<!-- BANNER KONSULTASI PENDAFTARAN -->
<section class="section" style="padding: 2.5rem 0 3.5rem 0;">
    <div class="container" style="max-width: 1080px;">
        <div style="background: linear-gradient(135deg, var(--color-secondary) 0%, #1e293b 100%); color: #ffffff; border-radius: 12px; padding: 2.25rem 1.5rem; text-align: center;">
            <h3 style="color: #ffffff; font-size: 1.6rem; margin-bottom: 0.6rem;">Ingin Konsultasi Pemilihan Program Pelatihan?</h3>
            <p style="color: #cbd5e1; font-size: 0.95rem; margin-bottom: 1.5rem; max-width: 650px; margin-left: auto; margin-right: auto;">Tim penasihat kami siap membantu menyesuaikan program pelatihan dengan target bisnis Anda.</p>
            <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya ingin konsultasi program pelatihan terbaik.' ) ); ?>" target="_blank" class="btn btn-whatsapp" style="padding: 0.75rem 1.75rem; border-radius: 8px;">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.157 4.228 4.228-1.157zm12.339-6.495c-.068-.113-.25-.181-.523-.317-.272-.136-1.61-.795-1.86-.886-.25-.091-.432-.136-.613.136-.182.272-.704.886-.863 1.067-.159.182-.318.204-.59.068-.272-.136-1.151-.424-2.193-1.353-.81-.723-1.357-1.616-1.516-1.888-.159-.272-.017-.419.119-.554.122-.122.272-.318.408-.477.136-.159.182-.272.272-.454.091-.182.045-.341-.023-.477-.068-.136-.613-1.477-.84-2.023-.222-.534-.447-.461-.613-.469-.159-.008-.341-.01-.523-.01s-.477.068-.727.341c-.25.272-.954.932-.954 2.273s.977 2.636 1.114 2.818c.136.182 1.923 2.936 4.659 4.116.65.281 1.158.448 1.554.573.653.207 1.247.178 1.716.108.523-.078 1.61-.658 1.838-1.295.227-.636.227-1.181.159-1.295z"/></svg>
                <span>Konsultasi WA Sekarang</span>
            </a>
        </div>
    </div>
</section>

<style>
.program-card-box {
  background: #ffffff;
  border-radius: 12px;
  padding: 1.75rem 1.5rem;
  color: #1e293b;
  display: flex;
  flex-direction: column;
  position: relative;
  box-shadow: 0 15px 30px rgba(0,0,0,0.2);
  width: 100%;
  box-sizing: border-box;
}
@media (max-width: 768px) {
  .program-card-box {
    padding: 1.25rem 1rem !important;
  }
  #program-unggulan h2 {
    font-size: 1.5rem !important;
  }
  #program-unggulan .container {
    padding-left: 1rem !important;
    padding-right: 1rem !important;
  }
}
</style>

<!-- Schema.org Data Structuring (JSON-LD) for Course -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Course",
  "name": "Pelatihan Formulasi Kimia Kebersihan, Laundry & Homecare",
  "description": "Kursus praktikum meracik deterjen cair, pelembut pakaian, sabun cuci piring, dan produk pembersih komersial skala pabrik.",
  "provider": {
    "@type": "EducationalOrganization",
    "name": "Cleanique Academy - PT Indotech Berkah Abadi",
    "sameAs": "<?php echo esc_url( home_url( '/' ) ); ?>"
  },
  "offers": [
    {
      "@type": "Offer",
      "name": "Kelas Kolektif (4 Formula)",
      "price": "4300000",
      "priceCurrency": "IDR",
      "availability": "https://schema.org/InStock"
    },
    {
      "@type": "Offer",
      "name": "Kelas Privat (6 Formula)",
      "price": "9700000",
      "priceCurrency": "IDR",
      "availability": "https://schema.org/InStock"
    }
  ]
}
</script>

<?php
get_footer();
