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

<section class="section section-decorated">
    <div class="container">
        
        <!-- TOPIK EDUKASI POPULER PILLS -->
        <div style="text-align: center; margin-bottom: 1.5rem;">
            <span style="font-size: 0.78rem; font-weight: 800; text-transform: uppercase; letter-spacing: 0.05em; color: #0284c7; display: block; margin-bottom: 0.5rem;">Topik Edukasi Populer</span>
            <div class="topic-pills-wrap">
                <a href="<?php echo esc_url( get_permalink() . '?s=laundry' ); ?>" class="topic-pill">Kimia Laundry</a>
                <a href="<?php echo esc_url( get_permalink() . '?s=deterjen' ); ?>" class="topic-pill">Formulasi Deterjen</a>
                <a href="<?php echo esc_url( get_permalink() . '?s=parfum' ); ?>" class="topic-pill">Tips Parfum Tahan Lama</a>
                <a href="<?php echo esc_url( get_permalink() . '?s=hpp' ); ?>" class="topic-pill">Hitung HPP Produksi</a>
                <a href="<?php echo esc_url( get_permalink() . '?s=pkrt' ); ?>" class="topic-pill">Izin Edar PKRT</a>
                <a href="<?php echo esc_url( get_permalink() . '?s=troubleshooting' ); ?>" class="topic-pill">Troubleshooting Formulasi</a>
            </div>
        </div>

        <?php
        $paged        = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
        $search_query = isset( $_GET['s'] ) ? sanitize_text_field( $_GET['s'] ) : '';
        $cat_id       = isset( $_GET['cat'] ) ? intval( $_GET['cat'] ) : 0;
        $sort_by      = isset( $_GET['sort'] ) ? sanitize_text_field( $_GET['sort'] ) : 'date_desc';

        // 7 posts on page 1 (1 featured + 6 grid items), 6 posts on page 2+
        $posts_per_page = ( $paged == 1 ) ? 7 : 6;

        $args = array(
            'post_type'      => 'post',
            'posts_per_page' => $posts_per_page,
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
        <div class="archive-filter-bar">
            <form method="GET" action="<?php echo esc_url( get_permalink() ); ?>" class="archive-filter-form">
                
                <!-- Search Input -->
                <div class="filter-search-wrap">
                    <input type="text" name="s" value="<?php echo esc_attr( $search_query ); ?>" placeholder="Cari artikel, panduan, formulasi..." class="filter-search-input">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" class="filter-search-icon"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                </div>

                <!-- Filter Kategori -->
                <div class="filter-select-wrap">
                    <select name="cat" onchange="this.form.submit()" class="filter-select">
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
                <div class="filter-select-wrap">
                    <select name="sort" onchange="this.form.submit()" class="filter-select">
                        <option value="date_desc" <?php selected( $sort_by, 'date_desc' ); ?>>Terbaru</option>
                        <option value="date_asc" <?php selected( $sort_by, 'date_asc' ); ?>>Terlama</option>
                        <option value="title_asc" <?php selected( $sort_by, 'title_asc' ); ?>>Judul (A - Z)</option>
                        <option value="title_desc" <?php selected( $sort_by, 'title_desc' ); ?>>Judul (Z - A)</option>
                    </select>
                </div>

                <!-- Tombol Cari -->
                <div>
                    <button type="submit" class="btn btn-primary filter-submit-btn">Cari</button>
                </div>

            </form>
        </div>

        <?php
        if ( $blog_query->have_posts() ) :
            if ( $paged == 1 ) :
                // Render 1st post as Featured Article Highlight
                $blog_query->the_post();
                $featured_thumb    = cleanique_get_post_thumbnail_url( get_the_ID(), 'full' );
                $featured_cats     = get_the_category();
                $featured_cat_name = ! empty( $featured_cats ) ? $featured_cats[0]->name : 'Edukasi';
                $featured_author   = get_the_author() ? get_the_author() : 'Tim Cleanique';
                $featured_readtime = cleanique_get_reading_time( get_the_content() );
                ?>
                <!-- ARTIKEL SOROTAN UTAMA -->
                <div class="featured-article-card">
                    <div class="featured-article-image-wrap">
                        <img src="<?php echo esc_url( $featured_thumb ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>">
                        <span class="featured-badge-top">Artikel Sorotan</span>
                    </div>
                    <div class="featured-article-content">
                        <div class="featured-article-meta-header">
                            <span class="featured-category-badge">
                                <?php echo esc_html( $featured_cat_name ); ?>
                            </span>
                            <span class="featured-reading-time">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#0284c7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                                <span><?php echo esc_html( $featured_readtime ); ?></span>
                            </span>
                        </div>

                        <h2 class="featured-article-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>

                        <div class="featured-article-meta">
                            <span class="article-card-meta-item">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#0284c7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                <span><?php echo esc_html( $featured_author ); ?></span>
                            </span>
                            <span style="color: #cbd5e1;">•</span>
                            <span class="article-card-meta-item">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#0284c7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                <span><?php echo get_the_date(); ?></span>
                            </span>
                        </div>

                        <p class="featured-article-excerpt">
                            <?php echo esc_html( wp_trim_words( get_the_excerpt() ? get_the_excerpt() : get_the_content(), 30 ) ); ?>
                        </p>

                        <div class="featured-article-action">
                            <a href="<?php the_permalink(); ?>" class="btn btn-primary" style="padding: 0.65rem 1.35rem; font-size: 0.92rem; border-radius: 10px;">
                                Baca Artikel Sorotan &rarr;
                            </a>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if ( $blog_query->have_posts() ) : ?>
                <div class="grid grid-3" style="margin-bottom: 3.5rem;">
                    <?php
                    while ( $blog_query->have_posts() ) : $blog_query->the_post();
                        $thumb_url    = cleanique_get_post_thumbnail_url( get_the_ID(), 'medium_large' );
                        $cats         = get_the_category();
                        $card_cat_name= ! empty( $cats ) ? $cats[0]->name : 'Edukasi';
                        $author_name  = get_the_author() ? get_the_author() : 'Tim Cleanique';
                        $reading_time = cleanique_get_reading_time( get_the_content() );
                        ?>
                        <article class="card article-card">
                            <div class="article-card-image-wrap">
                                <img src="<?php echo esc_url( $thumb_url ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>">
                            </div>

                            <div class="article-card-body">
                                <!-- Category Badge & Reading Time Icon -->
                                <div class="article-card-header">
                                    <span class="article-card-cat">
                                        <?php echo esc_html( $card_cat_name ); ?>
                                    </span>
                                    <span class="article-card-readingtime">
                                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#0284c7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                                        <span><?php echo esc_html( $reading_time ); ?></span>
                                    </span>
                                </div>

                                <h3 class="card-title" style="font-size: 1.15rem; margin-bottom: 0.5rem;"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

                                <!-- Author & Date Metadata with SVG Icons -->
                                <div class="article-card-meta">
                                    <span class="article-card-meta-item">
                                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#0284c7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <span><?php echo esc_html( $author_name ); ?></span>
                                    </span>
                                    <span style="color: #cbd5e1;">•</span>
                                    <span class="article-card-meta-item">
                                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#0284c7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                        <span><?php echo get_the_date(); ?></span>
                                    </span>
                                </div>

                                <div class="article-card-excerpt"><?php echo esc_html( wp_trim_words( get_the_excerpt() ? get_the_excerpt() : get_the_content(), 16 ) ); ?></div>
                                
                                <a href="<?php the_permalink(); ?>" class="btn btn-outline article-card-cta">Baca Artikel &rarr;</a>
                            </div>
                        </article>
                    <?php
                    endwhile;
                    ?>
                </div>
            <?php endif; ?>
            <?php
            wp_reset_postdata();
        else :
            echo '<div style="grid-column: 1 / -1; text-align: center; padding: 3rem; background: #ffffff; border-radius: 12px; border: 1px solid var(--color-border);"><p style="color: var(--color-text-muted); font-size: 1.05rem; margin: 0;">Tidak ditemukan artikel yang sesuai dengan pencarian/kategori Anda.</p></div>';
        endif;
        ?>

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

        <!-- INTERNAL NAVIGATION LINKS GRID -->
        <div style="margin-top: 3.5rem; padding-top: 2.5rem; border-top: 1px solid #e2e8f0;">
            <div class="section-header">
                <span class="section-subtitle">Tautan Penting</span>
                <h3 style="font-size: 1.4rem; font-weight: 800; color: #0f172a;">Jelajahi Informasi Lainnya</h3>
                <div class="section-accent-bar"></div>
            </div>
            <div class="internal-links-grid">
                <a href="<?php echo esc_url( home_url( '/program-pelatihan/' ) ); ?>" class="internal-link-card">
                    <div class="internal-link-title">Katalog Program Pelatihan &rarr;</div>
                    <div class="internal-link-desc">Pilihan paket kelas kolektif, kelas privat, dan investasi promo pelatihan.</div>
                </a>
                <a href="<?php echo esc_url( home_url( '/tentang-kami/' ) ); ?>" class="internal-link-card">
                    <div class="internal-link-title">Profil PT Indotech &rarr;</div>
                    <div class="internal-link-desc">Legalitas resmi, sejarah 13+ tahun, dan rekam jejak tim pengajar.</div>
                </a>
                <a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>" class="internal-link-card">
                    <div class="internal-link-title">Pertanyaan Sering Diajukan (FAQ) &rarr;</div>
                    <div class="internal-link-desc">Jawaban lengkap pertanyaan seputar fasilitas, akomodasi, dan grup bimbingan.</div>
                </a>
            </div>
        </div>

    </div>
</section>

<!-- Premium Call to Action Section -->
<section class="section-dark-cta">
    <div class="container" style="max-width: 900px; text-align: center;">
        <span class="contact-cta-subtitle">
            Konsultasi Gratis
        </span>
        <h2 class="contact-cta-title">
            Ingin Menguasai Formulasi Kimia Kebersihan &amp; Bisnis Laundry?
        </h2>
        <p class="contact-cta-desc">
            Dapatkan bimbingan langsung dari tim konsultan profesional Cleanique Academy. Diskusi produk, resep formulasi, dan jadwal pelatihan tatap muka terdekat.
        </p>
        <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya membaca artikel edukasi dan ingin konsultasi program pelatihan.' ) ); ?>" target="_blank" class="btn btn-whatsapp btn-cta-large">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.157 4.228 4.228-1.157zm12.339-6.495c-.068-.113-.25-.181-.523-.317-.272-.136-1.61-.795-1.86-.886-.25-.091-.432-.136-.613.136-.182.272-.704.886-.863 1.067-.159.182-.318.204-.59.068-.272-.136-1.151-.424-2.193-1.353-.81-.723-1.357-1.616-1.516-1.888-.159-.272-.017-.419.119-.554.122-.122.272-.318.408-.477.136-.159.182-.272.272-.454.091-.182.045-.341-.023-.477-.068-.136-.613-1.477-.84-2.023-.222-.534-.447-.461-.613-.469-.159-.008-.341-.01-.523-.01s-.477.068-.727.341c-.25.272-.954.932-.954 2.273s.977 2.636 1.114 2.818c.136.182 1.923 2.936 4.659 4.116.65.281 1.158.448 1.554.573.653.207 1.247.178 1.716.108.523-.078 1.61-.658 1.838-1.295.227-.636.227-1.181.159-1.295z"/></svg>
            <span>Konsultasi WhatsApp</span>
        </a>
    </div>
</section>

<!-- Schema.org Data Structuring (JSON-LD) for Educational Blog -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Blog",
  "name": "Pusat Artikel & Edukasi Kimia Kebersihan",
  "url": "<?php echo esc_url( get_permalink() ); ?>",
  "description": "Panduan praktis, tips formulasi kimia pembersih, dan strategi wirausaha produk homecare dari praktisi Cleanique Academy.",
  "publisher": {
    "@type": "EducationalOrganization",
    "name": "Cleanique Academy - PT Indotech Berkah Abadi",
    "logo": "<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo.webp' ); ?>"
  }
}
</script>

<?php
get_footer();
?>
