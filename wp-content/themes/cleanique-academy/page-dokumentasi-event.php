<?php
/**
 * Template Name: Halaman Dokumentasi Event
 */
get_header();

cleanique_render_page_hero( array(
    'title'    => 'Dokumentasi Event & Pelatihan Mitra',
    'badge'    => 'Galeri Mitra',
    'subtitle' => 'Rekam foto dan pelaksanaan kelas praktikum pelatihan kimia tatap muka di berbagai kota di Indonesia.',
    'theme'    => 'light',
) );
?>

<section class="section">
    <div class="container">
        
        <?php
        $paged        = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
        $search_query = isset( $_GET['s'] ) ? sanitize_text_field( $_GET['s'] ) : '';
        $sort_by      = isset( $_GET['sort'] ) ? sanitize_text_field( $_GET['sort'] ) : 'date_desc';

        $args = array(
            'post_type'      => 'kegiatan',
            'posts_per_page' => 9,
            'paged'          => $paged,
        );

        if ( ! empty( $search_query ) ) {
            $args['s'] = $search_query;
        }

        switch ( $sort_by ) {
            case 'date_asc':
                $args['orderby'] = 'date';
                $args['order']   = 'ASC';
                break;
            case 'title_asc':
                $args['orderby'] = 'title';
                $args['order']   = 'ASC';
                break;
            case 'title_desc':
                $args['orderby'] = 'title';
                $args['order']   = 'DESC';
                break;
            case 'date_desc':
            default:
                $args['orderby'] = 'date';
                $args['order']   = 'DESC';
                break;
        }

        $kegiatan_query = new WP_Query( $args );
        ?>

        <!-- SEARCH DAN SORTING BAR -->
        <div class="archive-filter-bar" style="margin-bottom: 2.5rem; background: #ffffff; border: 1px solid var(--color-border); border-radius: 16px; padding: 1.25rem 1.5rem; box-shadow: 0 4px 16px rgba(0,0,0,0.04);">
            <form method="GET" action="<?php echo esc_url( get_permalink() ); ?>" style="display: flex; flex-wrap: wrap; gap: 1rem; align-items: center; justify-content: space-between;">
                
                <!-- Search Input -->
                <div style="flex: 1; min-width: 250px; position: relative;">
                    <input type="text" name="s" value="<?php echo esc_attr( $search_query ); ?>" placeholder="Cari galeri event, kota, atau judul pelatihan..." class="filter-search-input" style="width: 100%; padding: 0.65rem 1rem 0.65rem 2.4rem; border: 1px solid #cbd5e1; border-radius: 10px; font-size: 0.9rem;">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#64748b" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" style="position: absolute; left: 12px; top: 50%; transform: translateY(-50%);"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                </div>

                <!-- Sorting -->
                <div style="min-width: 180px;">
                    <select name="sort" onchange="this.form.submit()" class="filter-select" style="width: 100%; padding: 0.65rem 1rem; border: 1px solid #cbd5e1; border-radius: 10px; font-size: 0.9rem; background: #ffffff; color: #1e293b; font-weight: 600;">
                        <option value="date_desc" <?php selected( $sort_by, 'date_desc' ); ?>>Terbaru</option>
                        <option value="date_asc" <?php selected( $sort_by, 'date_asc' ); ?>>Terlama</option>
                        <option value="title_asc" <?php selected( $sort_by, 'title_asc' ); ?>>Judul (A - Z)</option>
                        <option value="title_desc" <?php selected( $sort_by, 'title_desc' ); ?>>Judul (Z - A)</option>
                    </select>
                </div>

                <!-- Tombol Cari -->
                <div>
                    <button type="submit" class="btn btn-primary" style="padding: 0.65rem 1.25rem; font-size: 0.9rem; border-radius: 10px;">Cari Event</button>
                </div>

            </form>
        </div>

        <div class="grid grid-3" style="margin-bottom: 3.5rem;">
            <?php
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
                echo '<div style="grid-column: 1 / -1; text-align: center; padding: 3rem; background: #ffffff; border-radius: 12px; border: 1px solid var(--color-border);"><p style="color: var(--color-text-muted); font-size: 1.05rem; margin: 0;">Tidak ditemukan dokumentasi galeri yang sesuai dengan pencarian Anda.</p></div>';
            endif;
            ?>
        </div>

        <!-- PAGINATION NUMERIK -->
        <?php if ( $kegiatan_query->max_num_pages > 1 ) : ?>
            <div class="pagination-wrapper" style="margin-top: 2rem; text-align: center;">
                <?php
                echo paginate_links( array(
                    'total'     => $kegiatan_query->max_num_pages,
                    'current'   => $paged,
                    'prev_text' => '&larr; Sebelumnya',
                    'next_text' => 'Selanjutnya &rarr;',
                    'type'      => 'plain',
                ) );
                ?>
            </div>
        <?php endif; ?>

    </div>
</section>

<!-- Premium Call to Action Section for Gallery Page -->
<section style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%); padding: 3.5rem 0; color: #ffffff;">
    <div class="container" style="max-width: 900px; text-align: center;">
        <span style="display: inline-block; background: rgba(34, 197, 94, 0.15); color: #4ade80; border: 1px solid rgba(34, 197, 94, 0.3); font-size: 0.82rem; font-weight: 700; padding: 0.3rem 0.85rem; border-radius: 9999px; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 1rem;">
            Pelatihan Tatap Muka
        </span>
        <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff; margin-bottom: 0.85rem; line-height: 1.3;">
            Ingin Mengadakan / Mengikuti Kelas Pelatihan di Kota Anda?
        </h2>
        <p style="font-size: 1.02rem; color: #94a3b8; max-width: 680px; margin: 0 auto 2rem auto; line-height: 1.6;">
            Cleanique Academy menyelenggarakan pelatihan praktikum langsung di berbagai kota di Indonesia. Hubungi kami untuk mendaftar kelas berikutnya atau mengadakan in-house training.
        </p>
        <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya tertarik mengikuti/mengadakan pelatihan di kota saya.' ) ); ?>" target="_blank" class="btn btn-whatsapp" style="padding: 0.85rem 1.8rem; font-size: 1rem; border-radius: 12px; display: inline-flex; align-items: center; gap: 0.6rem; text-decoration: none;">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.157 4.228 4.228-1.157zm12.339-6.495c-.068-.113-.25-.181-.523-.317-.272-.136-1.61-.795-1.86-.886-.25-.091-.432-.136-.613.136-.182.272-.704.886-.863 1.067-.159.182-.318.204-.59.068-.272-.136-1.151-.424-2.193-1.353-.81-.723-1.357-1.616-1.516-1.888-.159-.272-.017-.419.119-.554.122-.122.272-.318.408-.477.136-.159.182-.272.272-.454.091-.182.045-.341-.023-.477-.068-.136-.613-1.477-.84-2.023-.222-.534-.447-.461-.613-.469-.159-.008-.341-.01-.523-.01s-.477.068-.727.341c-.25.272-.954.932-.954 2.273s.977 2.636 1.114 2.818c.136.182 1.923 2.936 4.659 4.116.65.281 1.158.448 1.554.573.653.207 1.247.178 1.716.108.523-.078 1.61-.658 1.838-1.295.227-.636.227-1.181.159-1.295z"/></svg>
            Tanya Jadwal Pelatihan via WhatsApp
        </a>
    </div>
</section>

<?php
get_footer();
