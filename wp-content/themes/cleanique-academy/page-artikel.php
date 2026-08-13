<?php
/**
 * Template Name: Halaman Artikel & Edukasi
 */
get_header();

cleanique_render_page_hero( array(
    'title'    => 'Artikel & Edukasi Kimia Kebersihan',
    'badge'    => 'Pusat Informasi',
    'subtitle' => 'Kumpulan panduan praktis, resep formulasi, dan tips bisnis cleaning products dari praktisi berpengalaman.',
    'theme'    => 'light',
) );
?>

<section class="section">
    <div class="container">
        
        <?php
        $paged        = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
        $search_query = isset( $_GET['s'] ) ? sanitize_text_field( $_GET['s'] ) : '';
        $cat_id       = isset( $_GET['cat'] ) ? intval( $_GET['cat'] ) : 0;
        $sort_by      = isset( $_GET['sort'] ) ? sanitize_text_field( $_GET['sort'] ) : 'date_desc';

        $args = array(
            'post_type'      => 'post',
            'posts_per_page' => 6,
            'paged'          => $paged,
        );

        if ( ! empty( $search_query ) ) {
            $args['s'] = $search_query;
        }

        if ( $cat_id > 0 ) {
            $args['cat'] = $cat_id;
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

        $blog_query = new WP_Query( $args );
        ?>

        <!-- SEARCH, FILTER KATEGORI, DAN SORTING BAR -->
        <div class="archive-filter-bar" style="margin-bottom: 2.5rem; background: #ffffff; border: 1px solid var(--color-border); border-radius: 16px; padding: 1.25rem 1.5rem; box-shadow: 0 4px 16px rgba(0,0,0,0.04);">
            <form method="GET" action="<?php echo esc_url( get_permalink() ); ?>" style="display: flex; flex-wrap: wrap; gap: 1rem; align-items: center; justify-content: space-between;">
                
                <!-- Search Input -->
                <div style="flex: 1; min-width: 250px; position: relative;">
                    <input type="text" name="s" value="<?php echo esc_attr( $search_query ); ?>" placeholder="Cari artikel, panduan, formulasi..." class="filter-search-input" style="width: 100%; padding: 0.65rem 1rem 0.65rem 2.4rem; border: 1px solid #cbd5e1; border-radius: 10px; font-size: 0.9rem;">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#64748b" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" style="position: absolute; left: 12px; top: 50%; transform: translateY(-50%);"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                </div>

                <!-- Filter Kategori -->
                <div style="min-width: 180px;">
                    <select name="cat" onchange="this.form.submit()" class="filter-select" style="width: 100%; padding: 0.65rem 1rem; border: 1px solid #cbd5e1; border-radius: 10px; font-size: 0.9rem; background: #ffffff; color: #1e293b; font-weight: 600;">
                        <option value="0">Semua Kategori</option>
                        <?php
                        $categories = get_categories( array( 'hide_empty' => false ) );
                        foreach ( $categories as $category ) :
                            $selected = ( $cat_id == $category->term_id ) ? 'selected' : '';
                            echo '<option value="' . esc_attr( $category->term_id ) . '" ' . $selected . '>' . esc_html( $category->name ) . ' (' . $category->count . ')</option>';
                        endforeach;
                        ?>
                    </select>
                </div>

                <!-- Sorting -->
                <div style="min-width: 170px;">
                    <select name="sort" onchange="this.form.submit()" class="filter-select" style="width: 100%; padding: 0.65rem 1rem; border: 1px solid #cbd5e1; border-radius: 10px; font-size: 0.9rem; background: #ffffff; color: #1e293b; font-weight: 600;">
                        <option value="date_desc" <?php selected( $sort_by, 'date_desc' ); ?>>Terbaru</option>
                        <option value="date_asc" <?php selected( $sort_by, 'date_asc' ); ?>>Terlama</option>
                        <option value="title_asc" <?php selected( $sort_by, 'title_asc' ); ?>>Judul (A - Z)</option>
                        <option value="title_desc" <?php selected( $sort_by, 'title_desc' ); ?>>Judul (Z - A)</option>
                    </select>
                </div>

                <!-- Tombol Cari -->
                <div>
                    <button type="submit" class="btn btn-primary" style="padding: 0.65rem 1.25rem; font-size: 0.9rem; border-radius: 10px;">Cari</button>
                </div>

            </form>
        </div>

        <div class="grid grid-3" style="margin-bottom: 3.5rem;">
            <?php
            if ( $blog_query->have_posts() ) :
                while ( $blog_query->have_posts() ) : $blog_query->the_post();
                    $thumb_url    = cleanique_get_post_thumbnail_url( get_the_ID(), 'medium_large' );
                    $cats         = get_the_category();
                    $card_cat_name= ! empty( $cats ) ? $cats[0]->name : 'Edukasi';
                    $author_name  = get_the_author() ? get_the_author() : 'Tim Cleanique';
                    $reading_time = cleanique_get_reading_time( get_the_content() );
                    ?>
                    <div class="card" style="display: flex; flex-direction: column;">
                        <div style="margin: -2rem -2rem 1.25rem -2rem; overflow: hidden; border-radius: var(--radius-md) var(--radius-md) 0 0;">
                            <img src="<?php echo esc_url( $thumb_url ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>" style="width:100%; height:180px; object-fit:cover;">
                        </div>

                        <!-- Category Badge & Reading Time Icon -->
                        <div style="display: flex; align-items: center; justify-content: space-between; gap: 0.5rem; margin-bottom: 0.75rem;">
                            <span style="display:inline-block; padding:0.25rem 0.65rem; border-radius:var(--radius-full); background:var(--color-primary-light); color:var(--color-primary); font-size:0.75rem; font-weight:700;">
                                <?php echo esc_html( $card_cat_name ); ?>
                            </span>
                            <span style="display:inline-flex; align-items:center; gap:0.3rem; color:#64748b; font-size:0.78rem; font-weight:600;">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#0284c7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                                <span><?php echo esc_html( $reading_time ); ?></span>
                            </span>
                        </div>

                        <h3 class="card-title" style="font-size: 1.15rem; margin-bottom: 0.5rem;"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

                        <!-- Author & Date Metadata with SVG Icons -->
                        <div style="display: flex; align-items: center; gap: 0.75rem; color: #64748b; font-size: 0.8rem; margin-bottom: 0.85rem;">
                            <span style="display: inline-flex; align-items: center; gap: 0.3rem;">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#0284c7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                <span><?php echo esc_html( $author_name ); ?></span>
                            </span>
                            <span style="color: #cbd5e1;">•</span>
                            <span style="display: inline-flex; align-items: center; gap: 0.3rem;">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#0284c7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                <span><?php echo get_the_date(); ?></span>
                            </span>
                        </div>

                        <div class="card-text" style="font-size: 0.88rem; line-height: 1.55; margin-bottom: 1.25rem; flex: 1;"><?php echo esc_html( wp_trim_words( get_the_excerpt() ? get_the_excerpt() : get_the_content(), 16 ) ); ?></div>
                        
                        <a href="<?php the_permalink(); ?>" class="btn btn-outline" style="align-self: flex-start; padding: 0.4rem 0.9rem; font-size: 0.85rem; margin-top: auto;">Baca Artikel &rarr;</a>
                    </div>
                <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<div style="grid-column: 1 / -1; text-align: center; padding: 3rem; background: #ffffff; border-radius: 12px; border: 1px solid var(--color-border);"><p style="color: var(--color-text-muted); font-size: 1.05rem; margin: 0;">Tidak ditemukan artikel yang sesuai dengan pencarian/kategori Anda.</p></div>';
            endif;
            ?>
        </div>

        <!-- PAGINATION NUMERIK -->
        <?php if ( $blog_query->max_num_pages > 1 ) : ?>
            <div class="pagination-wrapper" style="margin-top: 2rem; text-align: center;">
                <?php
                echo paginate_links( array(
                    'total'     => $blog_query->max_num_pages,
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

<?php
get_footer();

