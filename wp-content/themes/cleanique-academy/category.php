<?php
/**
 * Category Archive Template
 * Displays posts filtered by WordPress built-in category taxonomy.
 */
get_header();

cleanique_render_page_hero( array(
    'title'    => single_cat_title( '', false ),
    'badge'    => 'Kategori Artikel',
    'subtitle' => category_description() ? wp_strip_all_tags( category_description() ) : sprintf( 'Kumpulan artikel dan tulisan dalam kategori %s.', single_cat_title( '', false ) ),
    'theme'    => 'light',
) );
?>

<section class="section">
    <div class="container">

        <!-- Category Navigation -->
        <?php
        $categories = get_categories( array(
            'hide_empty' => true,
            'exclude'    => 1, // Exclude "Uncategorized"
        ) );

        if ( ! empty( $categories ) ) : ?>
            <div style="display: flex; gap: 0.5rem; flex-wrap: wrap; margin-bottom: 2.5rem; justify-content: center;">
                <a href="<?php echo esc_url( home_url( '/artikel/' ) ); ?>"
                   class="btn btn-outline"
                   style="padding: 0.4rem 1rem; font-size: 0.85rem;">
                    Semua Artikel
                </a>
                <?php foreach ( $categories as $cat ) : ?>
                    <a href="<?php echo esc_url( get_category_link( $cat->term_id ) ); ?>"
                       class="btn btn-outline"
                       style="padding: 0.4rem 1rem; font-size: 0.85rem; <?php echo ( is_category( $cat->slug ) ) ? 'background: var(--color-primary); color: #fff; border-color: var(--color-primary);' : ''; ?>">
                        <?php echo esc_html( $cat->name ); ?>
                    </a>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <?php
        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
        if ( have_posts() ) :
            if ( $paged == 1 ) :
                // Render 1st post as Featured Article Highlight
                the_post();
                $featured_thumb    = cleanique_get_post_thumbnail_url( get_the_ID(), 'full' );
                $featured_cats     = get_the_category();
                $featured_cat_name = ! empty( $featured_cats ) ? $featured_cats[0]->name : 'Edukasi';
                $featured_author   = get_the_author() ? get_the_author() : 'Tim Cleanique';
                $featured_readtime = cleanique_get_reading_time( get_the_content() );
                ?>
                <!-- ARTIKEL SOROTAN UTAMA KATEGORI -->
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
                            <span style="display: inline-flex; align-items: center; gap: 0.3rem;">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#0284c7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                <span><?php echo esc_html( $featured_author ); ?></span>
                            </span>
                            <span style="color: #cbd5e1;">•</span>
                            <span style="display: inline-flex; align-items: center; gap: 0.3rem;">
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

            <?php if ( have_posts() ) : ?>
                <div class="grid grid-3" style="margin-bottom: 3.5rem;">
                    <?php
                    while ( have_posts() ) : the_post();
                        $thumb_url    = cleanique_get_post_thumbnail_url( get_the_ID(), 'medium_large' );
                        $cats         = get_the_category();
                        $card_cat_name= ! empty( $cats ) ? $cats[0]->name : 'Edukasi';
                        $author_name  = get_the_author() ? get_the_author() : 'Tim Cleanique';
                        $reading_time = cleanique_get_reading_time( get_the_content() );
                        ?>
                        <article class="card" style="display: flex; flex-direction: column;">
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
                        </article>
                    <?php
                    endwhile;
                    ?>
                </div>
            <?php endif; ?>
        <?php else : ?>
            <div style="text-align: center; grid-column: 1/-1; padding: 3rem 0;">
                <p style="color: var(--color-text-muted); margin-bottom: 1.5rem;">Belum ada artikel dalam kategori ini.</p>
                <a href="<?php echo esc_url( home_url( '/artikel/' ) ); ?>" class="btn btn-primary">Lihat Semua Artikel</a>
            </div>
        <?php endif; ?>

        <div style="margin-top: 3rem; text-align: center;">
            <?php the_posts_pagination( array(
                'mid_size'  => 2,
                'prev_text' => __( '&laquo; Sebelumnya', 'cleanique-academy' ),
                'next_text' => __( 'Berikutnya &raquo;', 'cleanique-academy' ),
            ) ); ?>
        </div>

    </div>
</section>

<?php
get_footer();
