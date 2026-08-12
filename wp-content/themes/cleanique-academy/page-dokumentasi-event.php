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
                    <div class="card">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div style="margin: -2rem -2rem 1.25rem -2rem; overflow: hidden; border-radius: var(--radius-md) var(--radius-md) 0 0;">
                                <?php the_post_thumbnail( 'medium_large', array( 'style' => 'width:100%; height:200px; object-fit:cover;' ) ); ?>
                            </div>
                        <?php endif; ?>

                        <span style="display:inline-block; padding:0.25rem 0.75rem; border-radius:var(--radius-full); background:var(--color-primary-light); color:var(--color-primary); font-size:0.8rem; font-weight:700; margin-bottom:0.75rem; width:fit-content;">
                            <?php echo $tanggal ? esc_html( $tanggal ) : 'Kegiatan Academy'; ?>
                        </span>

                        <h3 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <p style="font-size: 0.85rem; color: var(--color-primary); font-weight: 600; margin-bottom: 0.5rem;"><?php echo $lokasi ? esc_html( $lokasi ) : 'Indonesia'; ?></p>
                        <div class="card-text"><?php echo esc_html( wp_trim_words( get_the_excerpt() ? get_the_excerpt() : get_the_content(), 18 ) ); ?></div>
                    </div>
                <?php
                endwhile;
                wp_reset_postdata();
            else :
                // Default Static Documentation Cards if CPT posts not populated
                ?>
                <div class="card">
                    <div style="margin: -2rem -2rem 1.25rem -2rem; overflow: hidden; border-radius: var(--radius-md) var(--radius-md) 0 0;">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/gallery-1.webp' ); ?>" alt="Dokumentasi Pelatihan Kimia" style="width:100%; height:200px; object-fit:cover;">
                    </div>
                    <span style="display:inline-block; padding:0.25rem 0.75rem; border-radius:var(--radius-full); background:var(--color-primary-light); color:var(--color-primary); font-size:0.8rem; font-weight:700; margin-bottom:0.75rem; width:fit-content;">
                        Yogyakarta
                    </span>
                    <h3 class="card-title">Pelatihan Formulasi Kimia Laundry Batch Intensive</h3>
                    <p class="card-text">Dokumentasi praktikum meracik deterjen dan softener parfum tahan lama bersama alumni dari DIY & Jawa Tengah.</p>
                </div>

                <div class="card">
                    <div style="margin: -2rem -2rem 1.25rem -2rem; overflow: hidden; border-radius: var(--radius-md) var(--radius-md) 0 0;">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/gallery-2.webp' ); ?>" alt="Dokumentasi Produk Kimia" style="width:100%; height:200px; object-fit:cover;">
                    </div>
                    <span style="display:inline-block; padding:0.25rem 0.75rem; border-radius:var(--radius-full); background:var(--color-primary-light); color:var(--color-primary); font-size:0.8rem; font-weight:700; margin-bottom:0.75rem; width:fit-content;">
                        Jakarta
                    </span>
                    <h3 class="card-title">Workshop Pembuatan Sabun Homecare & Handsoap</h3>
                    <p class="card-text">Praktikum pembuatan sabun cuci piring dan pembersih lantai instansi bersama pengusaha UMKM Jabodetabek.</p>
                </div>

                <div class="card">
                    <div style="margin: -2rem -2rem 1.25rem -2rem; overflow: hidden; border-radius: var(--radius-md) var(--radius-md) 0 0;">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/gallery-3.webp' ); ?>" alt="Pelatihan Chemical Housekeeping" style="width:100%; height:200px; object-fit:cover;">
                    </div>
                    <span style="display:inline-block; padding:0.25rem 0.75rem; border-radius:var(--radius-full); background:var(--color-primary-light); color:var(--color-primary); font-size:0.8rem; font-weight:700; margin-bottom:0.75rem; width:fit-content;">
                        Surabaya
                    </span>
                    <h3 class="card-title">Pelatihan Kimia Housekeeping & Cleaning Service</h3>
                    <p class="card-text">Pendampingan teknis pembersihan kerak keramik dan perawatan lantai gedung perkantoran di Jawa Timur.</p>
                </div>
            <?php endif; ?>
        </div>

    </div>
</section>

<?php
get_footer();
