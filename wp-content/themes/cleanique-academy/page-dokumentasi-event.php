<?php
/**
 * Template Name: Halaman Dokumentasi Event
 *
 * Cleanique Academy - Documentation & Gallery Page Template
 * Follows DESAIN.md: Modern Professional Academy x Luxury Editorial Corporate
 */
get_header();
?>

<!-- 1. BESPOKE LUXURY EDITORIAL HERO SECTION -->
<section class="about-hero-section" style="background-image: linear-gradient(145deg, rgba(7, 35, 56, 0.94) 0%, rgba(11, 93, 143, 0.90) 60%, rgba(8, 127, 193, 0.86) 100%), url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-lab-practical.jpg' ); ?>');">
    <div class="container about-hero-container">
        <div class="hero-editorial-pill">
            <span class="pill-pulse-dot"></span>
            <span>DOKUMENTASI WORKSHOP &amp; PELATIHAN MITRA</span>
        </div>

        <h1 class="about-hero-title">
            Galeri Kegiatan &amp; Praktikum Pelatihan
        </h1>

        <p class="about-hero-subtitle">
            Rekam foto nyata pelaksanaan kelas praktikum formulasi kimia tatap muka bersama peserta wirausaha mandiri di Sleman Yogyakarta dan berbagai kota di Indonesia.
        </p>

        <nav class="about-hero-breadcrumbs" aria-label="Breadcrumb">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Beranda</a>
            <span class="breadcrumb-separator">&rsaquo;</span>
            <span>Dokumentasi Event</span>
        </nav>
    </div>
</section>

<!-- 2. SECTION DOKUMENTASI & GALERI EVENT -->
<section class="section section-decorated">
    <div class="container" style="max-width: 1100px;">
        
        <?php
        $paged        = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
        $search_query = isset( $_GET['s'] ) ? sanitize_text_field( $_GET['s'] ) : '';
        $sort_by      = isset( $_GET['sort'] ) ? sanitize_text_field( $_GET['sort'] ) : 'date_desc';

        // 7 posts on page 1 (1 featured + 6 grid items), 6 posts on page 2+
        $posts_per_page = ( $paged == 1 ) ? 7 : 6;

        $args = array(
            'post_type'      => 'kegiatan',
            'posts_per_page' => $posts_per_page,
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
        <div class="archive-filter-bar" style="margin-bottom: 2.5rem;">
            <form method="GET" action="<?php echo esc_url( get_permalink() ); ?>" class="archive-filter-form">
                
                <!-- Search Input -->
                <div class="filter-search-wrap">
                    <input type="text" name="s" value="<?php echo esc_attr( $search_query ); ?>" placeholder="Cari galeri event, kota, atau judul pelatihan..." class="filter-search-input">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" class="filter-search-icon"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
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
                    <button type="submit" class="btn btn-primary filter-submit-btn">Cari Event</button>
                </div>

            </form>
        </div>

        <?php
        if ( $kegiatan_query->have_posts() ) :
            if ( $paged == 1 ) :
                // Render 1st post as Featured Gallery Highlight
                $kegiatan_query->the_post();
                $featured_tanggal = get_post_meta( get_the_ID(), '_cac_tanggal_kegiatan', true );
                $featured_lokasi  = get_post_meta( get_the_ID(), '_cac_lokasi_detail', true );
                $featured_img     = cleanique_get_kegiatan_thumbnail_url( get_the_ID(), 'full' );
                ?>
                <!-- DOKUMENTASI SOROTAN UTAMA -->
                <div class="featured-gallery-card">
                    <div class="featured-gallery-image-wrap">
                        <img src="<?php echo esc_url( $featured_img ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>">
                        <div class="featured-gallery-badge-top">DOKUMENTASI SOROTAN</div>
                    </div>
                    <div class="featured-gallery-content">
                        <div class="featured-gallery-meta-top">
                            <span class="featured-gallery-lokasi">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#087FC1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                <span><?php echo $featured_lokasi ? esc_html( $featured_lokasi ) : 'Training Center Sleman'; ?></span>
                            </span>
                            <span style="color: #cbd5e1;">&bull;</span>
                            <span class="featured-gallery-tanggal">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#087FC1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                <span><?php echo $featured_tanggal ? esc_html( $featured_tanggal ) : get_the_date(); ?></span>
                            </span>
                        </div>

                        <h2 class="featured-gallery-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>

                        <p class="featured-gallery-desc">
                            <?php echo esc_html( wp_trim_words( get_the_excerpt() ? get_the_excerpt() : get_the_content(), 28 ) ); ?>
                        </p>

                        <div class="featured-gallery-actions">
                            <a href="<?php the_permalink(); ?>" class="btn btn-primary" style="padding: 0.65rem 1.35rem; font-size: 0.92rem; border-radius: var(--radius-md);">
                                Lihat Galeri Lengkap &rarr;
                            </a>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if ( $kegiatan_query->have_posts() ) : ?>
                <div class="grid grid-3" style="margin-bottom: 3.5rem; gap: 1.5rem;">
                    <?php
                    while ( $kegiatan_query->have_posts() ) : $kegiatan_query->the_post();
                        $tanggal = get_post_meta( get_the_ID(), '_cac_tanggal_kegiatan', true );
                        $lokasi  = get_post_meta( get_the_ID(), '_cac_lokasi_detail', true );
                        ?>
                        <div class="gallery-overlay-card">
                            <div class="gallery-card-image-wrap">
                                <img src="<?php echo esc_url( cleanique_get_kegiatan_thumbnail_url( get_the_ID() ) ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>">
                                <div class="gallery-card-badge-top">
                                    <?php echo $tanggal ? esc_html( $tanggal ) : 'Workshop Pelatihan'; ?>
                                </div>
                            </div>
                            <div class="gallery-card-overlay">
                                <div class="gallery-card-content">
                                    <span class="gallery-card-lokasi"><?php echo $lokasi ? esc_html( $lokasi ) : 'Training Center Sleman'; ?></span>
                                    <h3 class="gallery-card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    <p class="gallery-card-desc"><?php echo esc_html( wp_trim_words( get_the_excerpt() ? get_the_excerpt() : get_the_content(), 15 ) ); ?></p>
                                    <div class="gallery-card-actions">
                                        <a href="<?php the_permalink(); ?>" class="gallery-card-btn">Lihat Detail Event &rarr;</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    endwhile;
                    ?>
                </div>
            <?php endif; ?>
            <?php
            wp_reset_postdata();
        else :
            echo '<div style="grid-column: 1 / -1; text-align: center; padding: 3rem; background: #ffffff; border-radius: var(--radius-lg); border: 1px solid var(--color-border);"><p style="color: var(--color-text-muted); font-size: 1.05rem; margin: 0;">Tidak ditemukan dokumentasi galeri yang sesuai dengan pencarian Anda.</p></div>';
        endif;
        ?>

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

        <!-- INTERNAL NAVIGATION LINKS GRID -->
        <div style="margin-top: 4rem; padding-top: 3rem; border-top: 1px solid var(--color-border);">
            <div class="section-header">
                <div class="editorial-badge">
                    <span class="badge-dot"></span>
                    <span>EKSPLORASI PLATFORM</span>
                    <span class="badge-code">INFORMASI LAINNYA</span>
                </div>
                <h3 class="section-title" style="font-size: 1.8rem; margin-bottom: 0.5rem;">Jelajahi Ekosistem Cleanique Academy</h3>
                <div class="section-accent-bar"></div>
            </div>
            <div class="internal-links-grid">
                <a href="<?php echo esc_url( home_url( '/program-pelatihan/' ) ); ?>" class="internal-link-card">
                    <div class="internal-link-icon-box">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                    </div>
                    <div class="internal-link-title">
                        <span>Katalog Program Pelatihan</span>
                        <span class="internal-link-arrow">&rarr;</span>
                    </div>
                    <p class="internal-link-desc">Pilihan paket kelas kolektif, kelas privat, dan investasi promo pelatihan.</p>
                </a>
                <a href="<?php echo esc_url( home_url( '/tentang-kami/' ) ); ?>" class="internal-link-card">
                    <div class="internal-link-icon-box">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                    </div>
                    <div class="internal-link-title">
                        <span>Profil PT Indotech</span>
                        <span class="internal-link-arrow">&rarr;</span>
                    </div>
                    <p class="internal-link-desc">Legalitas resmi, sejarah 13+ tahun, dan rekam jejak tim instruktur riset Sleman.</p>
                </a>
                <a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>" class="internal-link-card">
                    <div class="internal-link-icon-box">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                    </div>
                    <div class="internal-link-title">
                        <span>Pusat Tanya Jawab (FAQ)</span>
                        <span class="internal-link-arrow">&rarr;</span>
                    </div>
                    <p class="internal-link-desc">Jawaban lengkap pertanyaan seputar fasilitas, akomodasi penginapan, dan grup bimbingan.</p>
                </a>
            </div>
        </div>

    </div>
</section>

<!-- SEKSI KONTAK KANTOR PUSAT & CALL TO ACTION (DEEP BLUE) -->
<section id="kontak" class="section section-dark-cta">
    <div class="container" style="max-width: 880px;">
        <div class="contact-cta-box">
            <span class="contact-cta-subtitle">JADWAL PELATIHAN &amp; WORKSHOP</span>
            <h2 class="contact-cta-title">Ingin Mengadakan / Mengikuti Kelas Pelatihan di Kota Anda?</h2>
            <p class="contact-cta-desc">Cleanique Academy menyelenggarakan pelatihan praktikum langsung di Sleman Yogyakarta dan kota-kota besar di Indonesia. Hubungi kami untuk reservasi kuota batch berikutnya.</p>
            <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya tertarik mengikuti/mengadakan pelatihan di kota saya.' ) ); ?>" target="_blank" class="btn btn-whatsapp btn-cta-large">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.157 4.228 4.228-1.157zm12.339-6.495c-.068-.113-.25-.181-.523-.317-.272-.136-1.61-.795-1.86-.886-.25-.091-.432-.136-.613.136-.182.272-.704.886-.863 1.067-.159.182-.318.204-.59.068-.272-.136-1.151-.424-2.193-1.353-.81-.723-1.357-1.616-1.516-1.888-.159-.272-.017-.419.119-.554.122-.122.272-.318.408-.477.136-.159.182-.272.272-.454.091-.182.045-.341-.023-.477-.068-.136-.613-1.477-.84-2.023-.222-.534-.447-.461-.613-.469-.159-.008-.341-.01-.523-.01s-.477.068-.727.341c-.25.272-.954.932-.954 2.273s.977 2.636 1.114 2.818c.136.182 1.923 2.936 4.659 4.116.65.281 1.158.448 1.554.573.653.207 1.247.178 1.716.108.523-.078 1.61-.658 1.838-1.295.227-.636.227-1.181.159-1.295z"/></svg>
                <span>Tanya Jadwal Pelatihan via WhatsApp</span>
            </a>
        </div>
    </div>
</section>

<!-- Schema.org Data Structuring (JSON-LD) for Gallery & Events -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "EducationalOrganization",
  "name": "Dokumentasi Event Pelatihan Cleanique Academy",
  "url": "<?php echo esc_url( get_permalink() ); ?>",
  "description": "Galeri foto dan rekaman pelaksanaan kelas praktikum formulasi kimia kebersihan tatap muka di berbagai kota.",
  "parentOrganization": {
    "@type": "Organization",
    "name": "PT Indotech Berkah Abadi",
    "url": "https://indotech.id/"
  }
}
</script>

<?php
get_footer();
