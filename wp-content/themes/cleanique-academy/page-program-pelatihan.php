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

<!-- SECTION PROMO INVESTASI PELATIHANG -->
<section class="section" style="background-color: #11262d; color: #ffffff; padding: 4.5rem 0; margin-bottom: 3rem;">
    <div class="container" style="max-width: 1080px;">
        
        <!-- Header Promo Section -->
        <div style="text-align: center; max-width: 800px; margin: 0 auto 3.5rem auto;">
            <h2 style="font-family: var(--font-heading); font-size: 2.1rem; font-weight: 800; color: #ffffff; margin-bottom: 1rem;">
                Promo Investasi Pelatihan Bulan <?php echo date_i18n('F Y'); ?>
            </h2>
            <p style="font-size: 0.95rem; line-height: 1.7; color: #94a3b8;">
                Training diadakan di Jogja setiap akhir pekan, <strong>Sabtu - Minggu</strong>. Materi pelatihan pembuatan chemical laundry mengacu pada formula baku yang biasa dibuat oleh para produsen chemical laundry, baik formula yang kompleks maupun yang sangat sederhana. Formula telah kami riset berdasarkan efisiensi, kegunaan, dan kepentingan yang dipandang dari berbagai sisi. Ada dua kelas utama yang dapat Anda pilih:
            </p>
        </div>

        <!-- GRID UTAMA BARIS 1: KELAS KOLEKTIF & KELAS PRIVAT -->
        <div class="grid grid-2" style="gap: 2rem; margin-bottom: 2.5rem; align-items: stretch;">
            
            <!-- KELAS KOLEKTIF -->
            <div style="background: #ffffff; border-radius: 20px; padding: 2.5rem 2rem; color: #1e293b; display: flex; flex-direction: column; position: relative; box-shadow: 0 20px 40px rgba(0,0,0,0.25);">
                <div style="text-align: center; margin-bottom: 1.5rem;">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo.webp' ); ?>" alt="Cleanique Academy" style="height: 42px; margin: 0 auto 1rem auto; display: block;">
                    <h3 style="font-family: var(--font-heading); font-size: 1.35rem; font-weight: 800; letter-spacing: 0.05em; color: #0f172a; text-transform: uppercase;">KELAS KOLEKTIF</h3>
                </div>

                <p style="font-size: 0.88rem; line-height: 1.6; color: #475569; text-align: center; margin-bottom: 1.5rem;">
                    Kelas terdiri dari minimal 2 orang sampai dengan 4 orang, merupakan pilihan ekonomis bagi Anda yang memiliki biaya terbatas tetapi ingin memiliki kemampuan meracik bahan kimia laundry. Pelatihan dilaksanakan selama <strong>1 hari</strong>. Biaya pelatihan sebesar:
                </p>

                <div style="text-align: center; margin-bottom: 1.75rem;">
                    <span style="display: block; color: #dc2626; font-weight: 700; font-size: 0.85rem; font-style: italic; margin-bottom: 0.2rem;">*Harga Promo</span>
                    <div style="text-decoration: line-through; color: #64748b; font-weight: 700; font-size: 1.05rem;">Rp 6.500.000,-</div>
                    <div style="font-size: 2.1rem; font-weight: 800; color: #15803d; margin-top: 0.2rem;">Rp 4.300.000,-</div>
                </div>

                <!-- Checklist Fasilitas -->
                <ul style="list-style: none; padding: 0; margin: 0 0 2rem 0; display: flex; flex-direction: column; gap: 0.65rem; font-size: 0.88rem; color: #334155;">
                    <li style="display: flex; align-items: center; gap: 0.65rem; background: #f8fafc; padding: 0.5rem 0.85rem; border-radius: 8px;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Akomodasi penginapan</span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 0.65rem; background: #f1f5f9; padding: 0.5rem 0.85rem; border-radius: 8px;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Makan siang (lunch)</span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 0.65rem; background: #f8fafc; padding: 0.5rem 0.85rem; border-radius: 8px;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Coffee break</span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 0.65rem; background: #f1f5f9; padding: 0.5rem 0.85rem; border-radius: 8px;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Sertifikat pelatihan</span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 0.65rem; background: #f8fafc; padding: 0.5rem 0.85rem; border-radius: 8px;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>4 formula</span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 0.65rem; background: #f1f5f9; padding: 0.5rem 0.85rem; border-radius: 8px;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Modul materi pelatihan</span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 0.65rem; background: #fef08a; padding: 0.6rem 0.85rem; border-radius: 8px; font-weight: 800; color: #854d0e;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#ca8a04" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Mystery Box</span>
                    </li>
                </ul>

                <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya berminat mendaftar Kelas Kolektif promo Rp 4.300.000.' ) ); ?>" target="_blank" class="btn btn-whatsapp" style="margin-top: auto; width: 100%; justify-content: center; padding: 0.85rem; font-weight: 800; border-radius: 9999px;">
                    Daftar Kelas Kolektif
                </a>
            </div>

            <!-- KELAS PRIVAT -->
            <div style="background: #ffffff; border-radius: 20px; padding: 2.5rem 2rem; color: #1e293b; display: flex; flex-direction: column; position: relative; box-shadow: 0 20px 40px rgba(0,0,0,0.25); overflow: hidden;">
                
                <!-- Ribbon Corner Badge -->
                <div style="position: absolute; top: 22px; right: -35px; background: #dc2626; color: #ffffff; font-size: 0.72rem; font-weight: 800; text-transform: uppercase; padding: 0.4rem 2.8rem; transform: rotate(40deg); box-shadow: 0 4px 8px rgba(0,0,0,0.15); letter-spacing: 0.05em; z-index: 10;">
                    Bonus Cara Menghitung HPP
                </div>

                <div style="text-align: center; margin-bottom: 1.5rem;">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo.webp' ); ?>" alt="Cleanique Academy" style="height: 42px; margin: 0 auto 1rem auto; display: block;">
                    <h3 style="font-family: var(--font-heading); font-size: 1.35rem; font-weight: 800; letter-spacing: 0.05em; color: #0f172a; text-transform: uppercase;">KELAS PRIVAT</h3>
                </div>

                <p style="font-size: 0.88rem; line-height: 1.6; color: #475569; text-align: center; margin-bottom: 1.5rem;">
                    Bagi Anda yang menginginkan privasi dan keleluasaan, kelas ini akan menjadi kelas pribadi Anda dengan waktu yang lebih lega. Waktu penyelenggaraan kelas privat fleksibel sesuai dengan kesepakatan dengan durasi maksimal <strong>2 hari</strong>. Biaya pelatihan sebesar:
                </p>

                <div style="text-align: center; margin-bottom: 1.75rem;">
                    <span style="display: block; color: #dc2626; font-weight: 700; font-size: 0.85rem; font-style: italic; margin-bottom: 0.2rem;">*Harga Promo</span>
                    <div style="text-decoration: line-through; color: #64748b; font-weight: 700; font-size: 1.05rem;">Rp 15.000.000,-</div>
                    <div style="font-size: 2.1rem; font-weight: 800; color: #15803d; margin-top: 0.2rem;">Rp 9.700.000,-</div>
                </div>

                <!-- Checklist Fasilitas Privat -->
                <ul style="list-style: none; padding: 0; margin: 0 0 2rem 0; display: flex; flex-direction: column; gap: 0.65rem; font-size: 0.88rem; color: #334155;">
                    <li style="display: flex; align-items: center; gap: 0.65rem; background: #f8fafc; padding: 0.5rem 0.85rem; border-radius: 8px;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Fasilitas antar jemput dari stasiun/terminal, hotel, dan lokasi training</span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 0.65rem; background: #f1f5f9; padding: 0.5rem 0.85rem; border-radius: 8px;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Akomodasi hotel berbintang satu kamar untuk satu orang, termasuk makan pagi</span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 0.65rem; background: #f8fafc; padding: 0.5rem 0.85rem; border-radius: 8px;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Makan siang (lunch) & Coffee break</span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 0.65rem; background: #f1f5f9; padding: 0.5rem 0.85rem; border-radius: 8px;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Wisata kuliner (Dinner)</span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 0.65rem; background: #f8fafc; padding: 0.5rem 0.85rem; border-radius: 8px;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Sertifikat pelatihan & Modul materi</span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 0.65rem; background: #f1f5f9; padding: 0.5rem 0.85rem; border-radius: 8px;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Bebas pilih 6 formula</span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 0.65rem; background: #fef08a; padding: 0.6rem 0.85rem; border-radius: 8px; font-weight: 800; color: #854d0e;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#ca8a04" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Mystery Box</span>
                    </li>
                </ul>

                <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya berminat mendaftar Kelas Privat promo Rp 9.700.000.' ) ); ?>" target="_blank" class="btn btn-whatsapp" style="margin-top: auto; width: 100%; justify-content: center; padding: 0.85rem; font-weight: 800; border-radius: 9999px;">
                    Daftar Kelas Privat
                </a>
            </div>

        </div>

        <!-- GRID UTAMA BARIS 2: KELAS 1 PRODUK & KELAS CUSTOM -->
        <div class="grid grid-2" style="gap: 2rem; margin-bottom: 3.5rem; align-items: stretch;">
            
            <!-- KELAS 1 PRODUK -->
            <div style="background: #ffffff; border-radius: 20px; padding: 2.25rem 2rem; color: #1e293b; display: flex; flex-direction: column; text-align: center; box-shadow: 0 15px 30px rgba(0,0,0,0.2);">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo.webp' ); ?>" alt="Cleanique Academy" style="height: 38px; margin: 0 auto 1rem auto; display: block;">
                <h3 style="font-family: var(--font-heading); font-size: 1.25rem; font-weight: 800; letter-spacing: 0.05em; color: #0f172a; text-transform: uppercase; margin-bottom: 1rem;">KELAS 1 PRODUK</h3>
                <p style="font-size: 0.88rem; line-height: 1.6; color: #475569; margin-bottom: 1.5rem;">
                    Ingin belajar membuat 1 jenis produk chemical sesuai kebutuhan Anda? Kelas ini cocok untuk Anda yang ingin belajar lebih fokus pada produk tanpa mengambil paket lengkap. <strong>Konsultasikan kebutuhan Anda</strong> dengan CS untuk mengetahui produk yang tersedia dan penawaran terbaik.
                </p>
                <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya ingin tanya info Kelas 1 Produk.' ) ); ?>" target="_blank" style="margin-top: auto; background: #facc15; color: #0f172a; font-weight: 800; font-size: 0.95rem; padding: 0.85rem 1.5rem; border-radius: 9999px; text-decoration: none; display: block; transition: all 0.2s ease; box-shadow: 0 4px 12px rgba(250, 204, 21, 0.3);">
                    Tanya CS Sekarang
                </a>
            </div>

            <!-- KELAS CUSTOM -->
            <div style="background: #ffffff; border-radius: 20px; padding: 2.25rem 2rem; color: #1e293b; display: flex; flex-direction: column; text-align: center; box-shadow: 0 15px 30px rgba(0,0,0,0.2);">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo.webp' ); ?>" alt="Cleanique Academy" style="height: 38px; margin: 0 auto 1rem auto; display: block;">
                <h3 style="font-family: var(--font-heading); font-size: 1.25rem; font-weight: 800; letter-spacing: 0.05em; color: #0f172a; text-transform: uppercase; margin-bottom: 1rem;">KELAS CUSTOM</h3>
                <p style="font-size: 0.88rem; line-height: 1.6; color: #475569; margin-bottom: 1.5rem;">
                    Punya kebutuhan khusus? Ingin mempelajari beberapa produk atau formula tertentu? Kami menyediakan kelas yang dapat disesuaikan dengan kebutuhan bisnis, jumlah peserta, hingga materi pelatihan. <strong>Diskusikan kebutuhan Anda</strong> bersama tim kami untuk mendapatkan rekomendasi kelas dan penawaran terbaik.
                </p>
                <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya ingin konsultasi Kelas Custom.' ) ); ?>" target="_blank" style="margin-top: auto; background: #facc15; color: #0f172a; font-weight: 800; font-size: 0.95rem; padding: 0.85rem 1.5rem; border-radius: 9999px; text-decoration: none; display: block; transition: all 0.2s ease; box-shadow: 0 4px 12px rgba(250, 204, 21, 0.3);">
                    Tanya CS Sekarang
                </a>
            </div>

        </div>

        <!-- ADD-ON BANNER -->
        <div style="text-align: center; margin-bottom: 3.5rem; background: rgba(255, 255, 255, 0.06); border: 1px dashed rgba(255, 255, 255, 0.25); border-radius: 16px; padding: 1.75rem;">
            <h4 style="font-size: 1.2rem; font-weight: 800; color: #ffffff; margin-bottom: 0.5rem;">Add On : Tambah materi 1 juta per-formula</h4>
            <div style="display: flex; align-items: center; justify-content: center; gap: 0.75rem;">
                <span style="text-decoration: line-through; color: #94a3b8; font-size: 1.1rem; font-weight: 700;">Rp 1.500.000,-</span>
                <span style="font-size: 1.9rem; font-weight: 800; color: #38bdf8;">Rp 1.000.000,-</span>
            </div>
        </div>

        <!-- QUOTE CALLOUT BOX (IPHONE QUOTE) -->
        <div style="max-width: 820px; margin: 0 auto 3.5rem auto; border: 1px solid rgba(255, 255, 255, 0.3); border-radius: 16px; padding: 2.25rem; background: rgba(15, 23, 42, 0.5); text-align: center; position: relative;">
            <span style="position: absolute; top: -18px; left: 24px; background: #11262d; padding: 0 10px; color: #94a3b8; font-size: 2.2rem; font-family: serif; line-height: 1;">“</span>
            
            <p style="font-style: italic; font-size: 0.95rem; line-height: 1.7; color: #e2e8f0; margin-bottom: 1rem;">
                Investasi terbaik bukanlah barang, melainkan ilmu. Dengan Rp9 juta, Anda bisa membeli satu iPhone nilainya akan terus menurun. Namun dengan Rp9 juta untuk mengikuti pelatihan pembuatan sabun kami, Anda mendapatkan bekal ilmu dan keterampilan yang bisa menghasilkan, bahkan membuka jalan untuk membeli 10 iPhone atau lebih.
            </p>
            
            <strong style="color: #facc15; font-size: 1rem; display: block;">
                Ilmu tidak habis dipakai, justru terus bertambah nilainya.
            </strong>
            
            <span style="position: absolute; bottom: -28px; right: 24px; background: #11262d; padding: 0 10px; color: #94a3b8; font-size: 2.2rem; font-family: serif; line-height: 1;">”</span>
        </div>

        <!-- MAIN BOTTOM CTA BUTTON -->
        <div style="text-align: center;">
            <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya berminat ambil promo investasi pelatihan.' ) ); ?>" target="_blank" style="display: inline-block; background: #ffffff; color: #0f172a; font-weight: 800; font-size: 1.05rem; padding: 1.1rem 2.75rem; border-radius: 9999px; text-decoration: none; box-shadow: 0 10px 25px rgba(255,255,255,0.15); transition: all 0.2s ease;">
                Dapatkan Promo Pelatihan <?php echo date('Y'); ?>!
            </a>
        </div>

    </div>
</section>

        <!-- Banner Konsultasi Pendaftaran -->
        <div style="background: linear-gradient(135deg, var(--color-secondary) 0%, #1e293b 100%); color: #ffffff; border-radius: var(--radius-md); padding: 3rem; text-align: center;">
            <h3 style="color: #ffffff; font-size: 1.8rem; margin-bottom: 0.75rem;">Ingin Konsultasi Pemilihan Program Pelatihan?</h3>
            <p style="color: #cbd5e1; font-size: 1.05rem; margin-bottom: 1.75rem; max-width: 650px; margin-left: auto; margin-right: auto;">Tim penasihat kami siap membantu menyesuaikan program pelatihan dengan target bisnis Anda.</p>
            <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya ingin konsultasi program pelatihan terbaik.' ) ); ?>" target="_blank" class="btn btn-whatsapp">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.157 4.228 4.228-1.157zm12.339-6.495c-.068-.113-.25-.181-.523-.317-.272-.136-1.61-.795-1.86-.886-.25-.091-.432-.136-.613.136-.182.272-.704.886-.863 1.067-.159.182-.318.204-.59.068-.272-.136-1.151-.424-2.193-1.353-.81-.723-1.357-1.616-1.516-1.888-.159-.272-.017-.419.119-.554.122-.122.272-.318.408-.477.136-.159.182-.272.272-.454.091-.182.045-.341-.023-.477-.068-.136-.613-1.477-.84-2.023-.222-.534-.447-.461-.613-.469-.159-.008-.341-.01-.523-.01s-.477.068-.727.341c-.25.272-.954.932-.954 2.273s.977 2.636 1.114 2.818c.136.182 1.923 2.936 4.659 4.116.65.281 1.158.448 1.554.573.653.207 1.247.178 1.716.108.523-.078 1.61-.658 1.838-1.295.227-.636.227-1.181.159-1.295z"/></svg>
                <span>Konsultasi WA Sekarang</span>
            </a>
        </div>

    </div>
</section>

<?php
get_footer();
