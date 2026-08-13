<?php
/**
 * Template Name: Halaman Dokumentasi Event
 */
get_header();

cleanique_render_page_hero( array(
    'title'    => 'Dokumentasi Event & Pelatihan Alumni',
    'badge'    => 'Galeri Alumni',
    'subtitle' => 'Rekam foto dan pelaksanaan kelas praktikum pelatihan kimia tatap muka di berbagai kota di Indonesia.',
    'theme'    => 'light',
) );
?>

<section class="section">
    <div class="container">
        
        <div class="grid grid-3" style="margin-bottom: 4rem;">
            <?php
            $kegiatan_query = new WP_Query( array(
                'post_type'      => 'kegiatan',
                'posts_per_page' => 9,
            ) );

            if ( $kegiatan_query->have_posts() ) :
                while ( $kegiatan_query->have_posts() ) : $kegiatan_query->the_post();
                    $tanggal = get_post_meta( get_the_ID(), '_cac_tanggal_kegiatan', true );
                    $lokasi  = get_post_meta( get_the_ID(), '_cac_lokasi_detail', true );
                    ?>
                    <div class="gallery-overlay-card">
                        <div class="gallery-card-image-wrap">
                            <img src="<?php echo esc_url( cleanique_get_kegiatan_thumbnail_url( get_the_ID() ) ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>">
                            <div class="gallery-card-badge-top">
                                <?php echo $tanggal ? esc_html( $tanggal ) : 'Kegiatan Academy'; ?>
                            </div>
                        </div>
                        <div class="gallery-card-overlay">
                            <div class="gallery-card-content">
                                <span class="gallery-card-lokasi"><?php echo $lokasi ? esc_html( $lokasi ) : 'Indonesia'; ?></span>
                                <h3 class="gallery-card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <p class="gallery-card-desc"><?php echo esc_html( wp_trim_words( get_the_excerpt() ? get_the_excerpt() : get_the_content(), 16 ) ); ?></p>
                                <div class="gallery-card-actions">
                                    <a href="<?php the_permalink(); ?>" class="gallery-card-btn">Lihat Detail Event &rarr;</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                endwhile;
                wp_reset_postdata();
            else :
                // Default Static Documentation Cards if CPT posts not populated
                ?>
                <div class="gallery-overlay-card">
                    <div class="gallery-card-image-wrap">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/gallery-1.webp' ); ?>" alt="Dokumentasi Pelatihan Kimia">
                        <div class="gallery-card-badge-top">15 Jan 2026</div>
                    </div>
                    <div class="gallery-card-overlay">
                        <div class="gallery-card-content">
                            <span class="gallery-card-lokasi">Yogyakarta</span>
                            <h3 class="gallery-card-title">Pelatihan Formulasi Kimia Laundry Batch Intensive</h3>
                            <p class="gallery-card-desc">Dokumentasi praktikum meracik deterjen dan softener parfum tahan lama bersama alumni dari DIY & Jawa Tengah.</p>
                            <div class="gallery-card-actions">
                                <a href="<?php echo esc_url( home_url( '/program-pelatihan/' ) ); ?>" class="gallery-card-btn">Lihat Detail Event &rarr;</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="gallery-overlay-card">
                    <div class="gallery-card-image-wrap">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/gallery-2.webp' ); ?>" alt="Dokumentasi Produk Kimia">
                        <div class="gallery-card-badge-top">24 Jan 2026</div>
                    </div>
                    <div class="gallery-card-overlay">
                        <div class="gallery-card-content">
                            <span class="gallery-card-lokasi">Jakarta</span>
                            <h3 class="gallery-card-title">Workshop Pembuatan Sabun Homecare & Handsoap</h3>
                            <p class="gallery-card-desc">Praktikum pembuatan sabun cuci piring dan pembersih lantai instansi bersama pengusaha UMKM Jabodetabek.</p>
                            <div class="gallery-card-actions">
                                <a href="<?php echo esc_url( home_url( '/program-pelatihan/' ) ); ?>" class="gallery-card-btn">Lihat Detail Event &rarr;</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="gallery-overlay-card">
                    <div class="gallery-card-image-wrap">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/gallery-3.webp' ); ?>" alt="Pelatihan Chemical Housekeeping">
                        <div class="gallery-card-badge-top">05 Feb 2026</div>
                    </div>
                    <div class="gallery-card-overlay">
                        <div class="gallery-card-content">
                            <span class="gallery-card-lokasi">Surabaya</span>
                            <h3 class="gallery-card-title">Pelatihan Kimia Housekeeping & Cleaning Service</h3>
                            <p class="gallery-card-desc">Pendampingan teknis pembersihan kerak keramik dan perawatan lantai gedung perkantoran di Jawa Timur.</p>
                            <div class="gallery-card-actions">
                                <a href="<?php echo esc_url( home_url( '/program-pelatihan/' ) ); ?>" class="gallery-card-btn">Lihat Detail Event &rarr;</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>

    </div>
</section>

<?php
get_footer();
