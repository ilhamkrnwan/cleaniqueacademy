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

<section class="section">
    <div class="container">
        
        <div class="section-header">
            <span class="section-subtitle">Katalog Lengkap</span>
            <h2 class="section-title">Pilihan Kelas & Program Training</h2>
            <p class="section-description">Setiap program dilengkapi dengan modul panduan praktis, sampel bahan praktikum, serta sertifikat resmi.</p>
        </div>

        <div class="grid grid-3" style="margin-bottom: 4rem;">
            <?php
            $program_query = new WP_Query( array(
                'post_type'      => 'program',
                'posts_per_page' => 12,
            ) );

            if ( $program_query->have_posts() ) :
                while ( $program_query->have_posts() ) : $program_query->the_post();
                    $durasi = get_post_meta( get_the_ID(), '_cac_durasi_program', true );
                    $harga  = get_post_meta( get_the_ID(), '_cac_harga_program', true );
                    ?>
                    <div class="card">
                        <span style="display:inline-block; padding:0.25rem 0.75rem; border-radius:var(--radius-full); background:var(--color-primary-light); color:var(--color-primary); font-size:0.8rem; font-weight:700; margin-bottom:1rem; width:fit-content;">
                            <?php echo $durasi ? esc_html( $durasi ) : 'Intensive Class'; ?>
                        </span>
                        <h3 class="card-title"><?php the_title(); ?></h3>
                        <div class="card-text"><?php echo esc_html( wp_trim_words( get_the_excerpt() ? get_the_excerpt() : get_the_content(), 22 ) ); ?></div>
                        <div style="margin-top: auto; padding-top: 1rem; border-top: 1px solid var(--color-border); display: flex; align-items: center; justify-content: space-between;">
                            <span style="font-weight: 700; color: var(--color-secondary); font-size: 1.1rem;"><?php echo $harga ? esc_html( $harga ) : 'Hubungi Kami'; ?></span>
                            <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya mau tanya pendaftaran program: ' . get_the_title() ) ); ?>" target="_blank" class="btn btn-whatsapp" style="padding: 0.45rem 1rem; font-size: 0.85rem;">
                                Daftar WA
                            </a>
                        </div>
                    </div>
                <?php
                endwhile;
                wp_reset_postdata();
            else :
                // Default Static Program Cards if CPT posts not added yet
                ?>
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
                    <p class="card-text">Formulasi khusus pembersih kerak kamar mandi, glass cleaner, semir ban silikon emulsi, dan shampoo mobil busa melimpah.</p>
                    <div style="margin-top: auto; padding-top: 1rem; border-top: 1px solid var(--color-border); display: flex; align-items: center; justify-content: space-between;">
                        <span style="font-weight: 700; color: var(--color-secondary); font-size: 1.1rem;">Rp 3.000.000</span>
                        <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya minat kelas Housekeeping & Otomotif.' ) ); ?>" target="_blank" class="btn btn-whatsapp" style="padding: 0.45rem 1rem; font-size: 0.85rem;">Daftar WA</a>
                    </div>
                </div>
            <?php endif; ?>
        </div>

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
