<?php
/**
 * Single Post Template (Detail Artikel & Edukasi)
 *
 * Follows DESAIN.md: Modern Professional Academy x Luxury Editorial Corporate
 */
get_header();

while ( have_posts() ) : the_post();
    $raw_content     = get_the_content();
    $toc_data        = cleanique_generate_toc_and_content( apply_filters( 'the_content', $raw_content ) );
    $toc_html        = $toc_data['toc'];
    $main_content    = $toc_data['content'];
    $reading_time    = cleanique_get_reading_time( $raw_content );
    $post_permalink  = get_permalink();
    $post_title      = get_the_title();
    $categories      = get_the_category();
    $cat_name        = ! empty( $categories ) ? $categories[0]->name : 'Artikel & Edukasi';
    $featured_img    = cleanique_get_post_thumbnail_url( get_the_ID(), 'full' );
    
    // Get Admin-Configured Promo Banner Settings from Customizer
    $promo_image_url = get_theme_mod( 'cleanique_promo_banner_image', get_template_directory_uri() . '/assets/images/promo-banner.jpeg' );
    $promo_text      = get_theme_mod( 'cleanique_promo_text', 'Dapatkan Promo Pelatihan Terbatas berlaku bagi yang melakukan registrasi bulan ini, terbatas hanya untuk 10 pendaftar pertama.' );
    $promo_btn_label = get_theme_mod( 'cleanique_promo_btn_label', 'Ambil Promo' );

    $author_name = get_the_author();
    if ( empty( $author_name ) ) {
        $author_name = 'Tim Riset Cleanique';
    }
?>

<!-- 1. BESPOKE LUXURY EDITORIAL HERO SECTION -->
<section class="about-hero-section" style="background-image: linear-gradient(145deg, rgba(7, 35, 56, 0.94) 0%, rgba(11, 93, 143, 0.90) 60%, rgba(8, 127, 193, 0.86) 100%), url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-lab-practical.jpg' ); ?>');">
    <div class="container about-hero-container">
        <div class="hero-editorial-pill">
            <span class="pill-pulse-dot"></span>
            <span><?php echo esc_html( strtoupper( $cat_name ) ); ?></span>
        </div>

        <h1 class="about-hero-title" style="font-size: clamp(1.85rem, 3.5vw, 2.75rem); max-width: 900px; margin: 0 auto 1.25rem auto;">
            <?php the_title(); ?>
        </h1>

        <!-- Metadata Strip -->
        <div style="display: flex; align-items: center; justify-content: center; flex-wrap: wrap; gap: 1.25rem; margin-bottom: 1.5rem; color: #bae6fd; font-weight: 600; font-size: 0.92rem;">
            <span style="display: inline-flex; align-items: center; gap: 0.4rem;">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#38bdf8" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                <span>Oleh <?php echo esc_html( $author_name ); ?></span>
            </span>
            <span style="color: rgba(255,255,255,0.4);">&bull;</span>
            <span style="display: inline-flex; align-items: center; gap: 0.4rem;">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#38bdf8" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                <span><?php echo esc_html( get_the_date() ); ?></span>
            </span>
            <span style="color: rgba(255,255,255,0.4);">&bull;</span>
            <span style="display: inline-flex; align-items: center; gap: 0.4rem;">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#38bdf8" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                <span><?php echo esc_html( $reading_time ); ?></span>
            </span>
        </div>

        <nav class="about-hero-breadcrumbs" aria-label="Breadcrumb">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Beranda</a>
            <span class="breadcrumb-separator">&rsaquo;</span>
            <a href="<?php echo esc_url( home_url( '/artikel/' ) ); ?>">Artikel</a>
            <span class="breadcrumb-separator">&rsaquo;</span>
            <span><?php echo esc_html( wp_trim_words( get_the_title(), 5 ) ); ?></span>
        </nav>
    </div>
</section>

<!-- 2. ARTICLE CONTENT LAYOUT -->
<section class="section" style="padding-top: 3.5rem;">
    <div class="container" style="max-width: 1100px;">
        <div class="article-layout">
            
            <!-- MAIN ARTICLE COLUMN -->
            <main class="article-main">
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    
                    <!-- Featured Image -->
                    <div class="featured-image-wrapper">
                        <img src="<?php echo esc_url( $featured_img ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>">
                    </div>

                    <!-- 1. Daftar Isi Konten (TOC) -->
                    <?php if ( ! empty( $toc_html ) ) : ?>
                        <?php echo $toc_html; ?>
                    <?php endif; ?>

                    <!-- 2. Body Content & Contextual Backlinks -->
                    <div class="article-body">
                        <?php echo $main_content; ?>
                    </div>

                    <!-- 3. Fully Admin-Editable Promo Section (Image + Text + Pill Button) -->
                    <?php if ( $promo_image_url ) : ?>
                        <div class="promo-banner-container" style="margin: 3.5rem 0;">
                            <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya membaca artikel "' . $post_title . '" dan mau registrasi: ' . $promo_text ) ); ?>" target="_blank" class="promo-banner-link">
                                <img src="<?php echo esc_url( $promo_image_url ); ?>" alt="Promo Pelatihan Cleanique Academy" class="promo-banner-image" width="800" height="350">
                            </a>

                            <?php if ( $promo_text ) : ?>
                                <p class="promo-banner-text"><?php echo wp_kses_post( $promo_text ); ?></p>
                            <?php endif; ?>

                            <?php if ( $promo_btn_label ) : ?>
                                <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya mau ambil promo pelatihan.' ) ); ?>" target="_blank" class="btn btn-pill-promo">
                                    <?php echo esc_html( $promo_btn_label ); ?>
                                </a>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>

                    <!-- 4. Share Buttons dengan Icon Sosmed Resmi & Circle Buttons -->
                    <div class="share-section-card">
                        <div class="share-title-group">
                            <svg class="share-header-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path>
                                <polyline points="16 6 12 2 8 6"></polyline>
                                <line x1="12" y1="2" x2="12" y2="15"></line>
                            </svg>
                            <span class="share-title-text">Bagikan Artikel:</span>
                        </div>

                        <div class="share-buttons-wrapper">
                            <!-- WhatsApp -->
                            <a href="https://api.whatsapp.com/send?text=<?php echo rawurlencode( $post_title . ' ' . $post_permalink ); ?>" target="_blank" class="share-circle-btn share-wa" data-tooltip="WhatsApp" aria-label="Bagikan ke WhatsApp">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.157 4.228 4.228-1.157zm12.339-6.495c-.068-.113-.25-.181-.523-.317-.272-.136-1.61-.795-1.86-.886-.25-.091-.432-.136-.613.136-.182.272-.704.886-.863 1.067-.159.182-.318.204-.59.068-.272-.136-1.151-.424-2.193-1.353-.81-.723-1.357-1.616-1.516-1.888-.159-.272-.017-.419.119-.554.122-.122.272-.318.408-.477.136-.159.182-.272.272-.454.091-.182.045-.341-.023-.477-.068-.136-.613-1.477-.84-2.023-.222-.534-.447-.461-.613-.469-.159-.008-.341-.01-.523-.01s-.477.068-.727.341c-.25.272-.954.932-.954 2.273s.977 2.636 1.114 2.818c.136.182 1.923 2.936 4.659 4.116.65.281 1.158.448 1.554.573.653.207 1.247.178 1.716.108.523-.078 1.61-.658 1.838-1.295.227-.636.227-1.181.159-1.295z"/></svg>
                            </a>

                            <!-- Facebook -->
                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo rawurlencode( $post_permalink ); ?>" target="_blank" class="share-circle-btn share-fb" data-tooltip="Facebook" aria-label="Bagikan ke Facebook">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                            </a>

                            <!-- LinkedIn -->
                            <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo rawurlencode( $post_permalink ); ?>" target="_blank" class="share-circle-btn share-li" data-tooltip="LinkedIn" aria-label="Bagikan ke LinkedIn">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.28 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.75M6.46 10.9v8.37H9.25V10.9H6.46M7.86 6.74a1.65 1.65 0 1 0 0 3.3 1.65 1.65 0 0 0 0-3.3z"/></svg>
                            </a>

                            <!-- X (Twitter) -->
                            <a href="https://twitter.com/intent/tweet?url=<?php echo rawurlencode( $post_permalink ); ?>&text=<?php echo rawurlencode( $post_title ); ?>" target="_blank" class="share-circle-btn share-x" data-tooltip="X (Twitter)" aria-label="Bagikan ke X">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                            </a>

                            <!-- Copy Link Button with Tooltip -->
                            <button id="copyShareBtn" class="share-circle-btn share-copy" data-tooltip="Salin Link" onclick="cleaniqueCopyArticleLink(this, '<?php echo esc_js( $post_permalink ); ?>')" aria-label="Salin Link Artikel">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path></svg>
                            </button>
                        </div>
                    </div>

                    <!-- 5. Artikel Selanjutnya & Artikel Sebelumnya -->
                    <div class="post-navigation-grid">
                        <?php
                        $prev_post = get_previous_post();
                        if ( ! empty( $prev_post ) ) :
                        ?>
                            <a href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>" class="nav-card nav-card-prev">
                                <span class="nav-card-label">&larr; Artikel Sebelumnya</span>
                                <h4 class="nav-card-title"><?php echo esc_html( get_the_title( $prev_post->ID ) ); ?></h4>
                            </a>
                        <?php else : ?>
                            <div></div>
                        <?php endif; ?>

                        <?php
                        $next_post = get_next_post();
                        if ( ! empty( $next_post ) ) :
                        ?>
                            <a href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>" class="nav-card nav-card-next" style="text-align: right;">
                                <span class="nav-card-label">Artikel Selanjutnya &rarr;</span>
                                <h4 class="nav-card-title"><?php echo esc_html( get_the_title( $next_post->ID ) ); ?></h4>
                            </a>
                        <?php endif; ?>
                    </div>

                    <!-- 6. Artikel Terkait Grid -->
                    <div class="related-articles-section">
                        <div class="section-header" style="text-align: left; margin-bottom: 1.5rem;">
                            <div class="editorial-badge">
                                <span class="badge-dot"></span>
                                <span>REKOMENDASI</span>
                                <span class="badge-code">TOPIK SERUPA</span>
                            </div>
                            <h3 class="section-title" style="font-size: 1.6rem; margin-bottom: 0.25rem;">Artikel Terkait Lainnya</h3>
                            <div class="section-accent-bar" style="margin: 0 0 1rem 0;"></div>
                        </div>

                        <div class="grid grid-3" style="gap: 1.25rem;">
                            <?php
                            $related_query = new WP_Query( array(
                                'post_type'      => 'post',
                                'posts_per_page' => 3,
                                'post__not_in'   => array( get_the_ID() ),
                                'category__in'   => wp_get_post_categories( get_the_ID() ),
                            ) );

                            if ( $related_query->have_posts() ) :
                                while ( $related_query->have_posts() ) : $related_query->the_post();
                                    $rel_thumb = cleanique_get_post_thumbnail_url( get_the_ID(), 'medium_large' );
                                    $rel_cats  = get_the_category();
                                    $rel_cat   = ! empty( $rel_cats ) ? $rel_cats[0]->name : 'Edukasi';
                                    ?>
                                    <article class="card article-card" style="padding: 0; overflow: hidden;">
                                        <div class="article-card-image-wrap" style="height: 140px;">
                                            <img src="<?php echo esc_url( $rel_thumb ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>">
                                        </div>
                                        <div class="article-card-body" style="padding: 1.15rem;">
                                            <span class="article-card-cat" style="margin-bottom: 0.4rem;"><?php echo esc_html( $rel_cat ); ?></span>
                                            <h4 style="font-size: 1.02rem; line-height: 1.35; margin-bottom: 0.5rem;"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                            <p style="font-size: 0.8rem; color: var(--color-text-muted); margin-bottom: 0.75rem;"><?php echo get_the_date(); ?></p>
                                            <a href="<?php the_permalink(); ?>" class="btn btn-outline" style="padding: 0.35rem 0.8rem; font-size: 0.8rem;">Baca Selengkapnya &rarr;</a>
                                        </div>
                                    </article>
                                <?php
                                endwhile;
                                wp_reset_postdata();
                            else :
                                echo '<p style="color: var(--color-text-muted);">Belum ada artikel terkait lainnya.</p>';
                            endif;
                            ?>
                        </div>
                    </div>

                    <!-- 7. Komentar (Comments Section) -->
                    <?php
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;
                    ?>

                </article>
            </main>

            <!-- 8. SIDE PANEL (SIDEBAR) -->
            <aside class="article-sidebar">
                
                <!-- Search Widget -->
                <div class="sidebar-widget">
                    <h3 class="widget-title">Cari Artikel</h3>
                    <form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <div style="display: flex; gap: 0.5rem;">
                            <input type="search" placeholder="Cari kata kunci..." value="<?php echo get_search_query(); ?>" name="s" style="width: 100%; padding: 0.65rem 0.85rem; border: 1px solid var(--color-border); border-radius: var(--radius-sm); font-size: 0.9rem;">
                            <button type="submit" class="btn btn-primary" style="padding: 0.65rem 1rem;">Cari</button>
                        </div>
                    </form>
                </div>

                <!-- CARD CTA PROMO WIDGET -->
                <div class="sidebar-widget" style="background: linear-gradient(145deg, #072338 0%, #0B5D8F 100%); color: #ffffff; padding: 1.5rem; text-align: center; border-radius: var(--radius-lg); border: 1px solid rgba(255,255,255,0.15);">
                    <span style="display: inline-block; background: rgba(255, 255, 255, 0.15); color: #bae6fd; padding: 0.25rem 0.75rem; border-radius: var(--radius-full); font-size: 0.75rem; font-weight: 800; text-transform: uppercase; margin-bottom: 0.75rem; border: 1px solid rgba(255,255,255,0.2);">PROMO BULAN INI</span>
                    
                    <h3 style="color: #ffffff; font-size: 1.18rem; margin-bottom: 0.75rem; line-height: 1.3;">Pelatihan Formulasi Cleanique Academy</h3>
                    
                    <?php if ( $promo_image_url ) : ?>
                        <div style="margin-bottom: 1rem; border-radius: var(--radius-sm); overflow: hidden; box-shadow: var(--shadow-sm); border: 1px solid rgba(255,255,255,0.2);">
                            <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya berminat dengan promo di sidebar artikel.' ) ); ?>" target="_blank">
                                <img src="<?php echo esc_url( $promo_image_url ); ?>" alt="Promo Cleanique Academy" style="width: 100%; height: auto; display: block;">
                            </a>
                        </div>
                    <?php endif; ?>

                    <p style="color: #e2e8f0; font-size: 0.88rem; margin-bottom: 1.25rem; line-height: 1.5;">
                        <?php echo esc_html( wp_strip_all_tags( $promo_text ) ); ?>
                    </p>
                    
                    <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya membaca artikel dan mau konsultasi promo pelatihan.' ) ); ?>" target="_blank" class="btn btn-whatsapp" style="width: 100%; font-size: 0.9rem; padding: 0.75rem 1rem;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.157 4.228 4.228-1.157zm12.339-6.495c-.068-.113-.25-.181-.523-.317-.272-.136-1.61-.795-1.86-.886-.25-.091-.432-.136-.613.136-.182.272-.704.886-.863 1.067-.159.182-.318.204-.59.068-.272-.136-1.151-.424-2.193-1.353-.81-.723-1.357-1.616-1.516-1.888-.159-.272-.017-.419.119-.554.122-.122.272-.318.408-.477.136-.159.182-.272.272-.454.091-.182.045-.341-.023-.477-.068-.136-.613-1.477-.84-2.023-.222-.534-.447-.461-.613-.469-.159-.008-.341-.01-.523-.01s-.477.068-.727.341c-.25.272-.954.932-.954 2.273s.977 2.636 1.114 2.818c.136.182 1.923 2.936 4.659 4.116.65.281 1.158.448 1.554.573.653.207 1.247.178 1.716.108.523-.078 1.61-.658 1.838-1.295.227-.636.227-1.181.159-1.295z"/></svg>
                        <span><?php echo esc_html( $promo_btn_label ); ?></span>
                    </a>
                </div>

                <!-- Artikel Terbaru Widget -->
                <div class="sidebar-widget">
                    <h3 class="widget-title">Artikel Terbaru</h3>
                    <ul class="recent-posts-list">
                        <?php
                        $recent_posts = get_posts( array(
                            'numberposts' => 5,
                            'post_status' => 'publish',
                        ) );
                        foreach ( $recent_posts as $post ) :
                            setup_postdata( $post );
                            ?>
                            <li>
                                <a href="<?php the_permalink(); ?>" class="recent-post-link"><?php the_title(); ?></a>
                                <span class="recent-post-date"><?php echo get_the_date(); ?></span>
                            </li>
                        <?php
                        endforeach;
                        wp_reset_postdata();
                        ?>
                    </ul>
                </div>

                <!-- Kategori Widget -->
                <div class="sidebar-widget">
                    <h3 class="widget-title">Kategori Artikel</h3>
                    <ul class="widget-categories">
                        <?php
                        $cats = get_categories();
                        foreach ( $cats as $cat ) :
                        ?>
                            <li>
                                <a href="<?php echo esc_url( get_category_link( $cat->term_id ) ); ?>">
                                    <span><?php echo esc_html( $cat->name ); ?></span>
                                    <span style="color: var(--color-text-muted); font-size: 0.85rem;">(<?php echo esc_html( $cat->count ); ?>)</span>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

            </aside>

        </div>
    </div>
</section>

<script>
function cleaniqueCopyArticleLink(btn, url) {
    if (navigator.clipboard) {
        navigator.clipboard.writeText(url).then(function() {
            btn.setAttribute('data-tooltip', 'Berhasil Disalin!');
            btn.classList.add('tooltip-active');
            setTimeout(function() {
                btn.setAttribute('data-tooltip', 'Salin Link');
                btn.classList.remove('tooltip-active');
            }, 2200);
        });
    } else {
        var tempInput = document.createElement('input');
        tempInput.value = url;
        document.body.appendChild(tempInput);
        tempInput.select();
        document.execCommand('copy');
        document.body.removeChild(tempInput);
        btn.setAttribute('data-tooltip', 'Berhasil Disalin!');
        btn.classList.add('tooltip-active');
        setTimeout(function() {
            btn.setAttribute('data-tooltip', 'Salin Link');
            btn.classList.remove('tooltip-active');
        }, 2200);
    }
}
</script>

<?php
endwhile;
get_footer();
