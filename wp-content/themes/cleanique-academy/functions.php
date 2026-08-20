<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Theme Setup
function cleanique_academy_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo', array(
        'height'      => 60,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ) );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'cleanique-academy' ),
        'footer'  => __( 'Footer Menu', 'cleanique-academy' ),
    ) );
}
add_action( 'after_setup_theme', 'cleanique_academy_setup' );

// Enqueue Scripts and Styles
function cleanique_academy_scripts() {
    // Google Fonts: Outfit & Inter
    wp_enqueue_style( 'cleanique-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Outfit:wght@600;700;800&display=swap', array(), null );

    // Theme Stylesheet
    wp_enqueue_style( 'cleanique-style', get_stylesheet_uri(), array( 'cleanique-fonts' ), '1.5.0' );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'cleanique_academy_scripts' );

// Helper for WhatsApp Link
function cleanique_get_whatsapp_url( $message = 'Halo Cleanique Academy, saya ingin bertanya mengenai program pelatihan.' ) {
    $phone = '6282215840088'; // Official Phone Number
    return 'https://api.whatsapp.com/send/?phone=' . $phone . '&text=' . rawurlencode( $message ) . '&type=phone_number&app_absent=0';
}

// Register WP Customizer settings for Promo Banner (Image, Text, Button Text, Video)
function cleanique_customize_register( $wp_customize ) {
    $wp_customize->add_section( 'cleanique_landing_options', array(
        'title'    => __( 'Pengaturan Promo & Video', 'cleanique-academy' ),
        'priority' => 30,
    ) );

    // 1. Promo Banner Image URL
    $wp_customize->add_setting( 'cleanique_promo_banner_image', array(
        'default'   => get_template_directory_uri() . '/assets/images/promo-banner.jpeg',
        'type'      => 'theme_mod',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cleanique_promo_banner_image', array(
        'label'    => __( 'Gambar Promo Banner', 'cleanique-academy' ),
        'section'  => 'cleanique_landing_options',
        'settings' => 'cleanique_promo_banner_image',
    ) ) );

    // 2. Promo Description Text
    $wp_customize->add_setting( 'cleanique_promo_text', array(
        'default'   => 'Dapatkan Promo Pelatihan Terbatas berlaku bagi yang melakukan registrasi bulan ini, terbatas hanya untuk 10 pendaftar pertama.',
        'type'      => 'theme_mod',
        'sanitize_callback' => 'sanitize_textarea_field',
    ) );
    $wp_customize->add_control( 'cleanique_promo_text', array(
        'label'    => __( 'Teks Deskripsi Promo', 'cleanique-academy' ),
        'section'  => 'cleanique_landing_options',
        'type'     => 'textarea',
        'settings' => 'cleanique_promo_text',
    ) );

    // 3. Promo Button Label Text
    $wp_customize->add_setting( 'cleanique_promo_btn_label', array(
        'default'   => 'Ambil Promo',
        'type'      => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'cleanique_promo_btn_label', array(
        'label'    => __( 'Teks Tombol Promo', 'cleanique-academy' ),
        'section'  => 'cleanique_landing_options',
        'type'     => 'text',
        'settings' => 'cleanique_promo_btn_label',
    ) );

    // 4. YouTube Video URL / Embed Code
    $wp_customize->add_setting( 'cleanique_youtube_video_url', array(
        'default'   => 'https://www.youtube.com/embed/TwVdCpcpOzo',
        'type'      => 'theme_mod',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( 'cleanique_youtube_video_url', array(
        'label'    => __( 'URL Embed YouTube Video (iframe)', 'cleanique-academy' ),
        'section'  => 'cleanique_landing_options',
        'type'     => 'url',
        'settings' => 'cleanique_youtube_video_url',
    ) );
}
add_action( 'customize_register', 'cleanique_customize_register' );

// Helper function to render Page Hero
function cleanique_render_page_hero( $args = array() ) {
    get_template_part( 'template-parts/page-hero', null, $args );
}

// Calculate estimated reading time
function cleanique_get_reading_time( $content = '' ) {
    $word_count = str_word_count( strip_tags( $content ) );
    $reading_time = ceil( $word_count / 200 );
    return max( 1, $reading_time ) . ' Menit Baca';
}

// Generate Table of Contents (TOC) from Content H2 & H3 (Collapsible Accordion Dropdown)
function cleanique_generate_toc_and_content( $content ) {
    if ( ! is_single() ) {
        return array( 'toc' => '', 'content' => $content );
    }

    preg_match_all( '/<h([2-3])([^>]*)>(.*?)<\/h[2-3]>/i', $content, $matches, PREG_SET_ORDER );
    if ( empty( $matches ) ) {
        return array( 'toc' => '', 'content' => $content );
    }

    $toc_html  = '<details class="toc-box toc-details" open>';
    $toc_html .= '<summary class="toc-summary">';
    $toc_html .= '<span class="toc-title">Daftar Isi Artikel</span>';
    $toc_html .= '<svg class="toc-chevron" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>';
    $toc_html .= '</summary>';
    $toc_html .= '<ul class="toc-list">';

    $index = 0;
    foreach ( $matches as $match ) {
        $index++;
        $level = $match[1];
        $text  = strip_tags( $match[3] );
        $slug  = 'toc-heading-' . $index;

        // Replace heading in content with ID attribute
        $new_heading = '<h' . $level . ' id="' . $slug . '"' . $match[2] . '>' . $match[3] . '</h' . $level . '>';
        $content     = str_replace( $match[0], $new_heading, $content );

        $indent_class = ( '3' === $level ) ? ' class="toc-sub"' : '';
        $toc_html    .= '<li' . $indent_class . '><a href="#' . $slug . '">' . esc_html( $text ) . '</a></li>';
    }

    $toc_html .= '</ul></details>';

    return array( 'toc' => $toc_html, 'content' => $content );
}

// Helper to get Post Thumbnail URL with Placeholder Fallback
function cleanique_get_post_thumbnail_url( $post_id = null, $size = 'full' ) {
    $post_id = $post_id ? $post_id : get_the_ID();
    if ( has_post_thumbnail( $post_id ) ) {
        $url = get_the_post_thumbnail_url( $post_id, $size );
        if ( ! empty( $url ) ) {
            return $url;
        }
    }
    return get_template_directory_uri() . '/assets/images/article-placeholder.png';
}

// Helper to get YouTube video ID
function cleanique_get_youtube_id( $url = '' ) {
    if ( empty( $url ) ) {
        return '';
    }
    if ( preg_match( '/youtube\.com\/shorts\/([a-zA-Z0-9_-]+)/i', $url, $matches ) ) {
        return $matches[1];
    }
    if ( preg_match( '/[?&]v=([a-zA-Z0-9_-]+)/i', $url, $matches ) ) {
        return $matches[1];
    }
    if ( preg_match( '/youtu\.be\/([a-zA-Z0-9_-]+)/i', $url, $matches ) ) {
        return $matches[1];
    }
    return '';
}

// Helper to get Kegiatan / Event Gallery Thumbnail
function cleanique_get_kegiatan_thumbnail_url( $post_id = null, $size = 'medium_large' ) {
    $post_id = $post_id ? $post_id : get_the_ID();
    
    // 1. Featured image
    if ( has_post_thumbnail( $post_id ) ) {
        $url = get_the_post_thumbnail_url( $post_id, $size );
        if ( ! empty( $url ) ) {
            return $url;
        }
    }

    // 2. Custom gallery meta (_cac_gallery_urls)
    $gallery_raw = get_post_meta( $post_id, '_cac_gallery_urls', true );
    if ( ! empty( $gallery_raw ) ) {
        $lines = explode( "\n", str_replace( "\r", "", $gallery_raw ) );
        foreach ( $lines as $line ) {
            $trimmed = trim( $line );
            if ( ! empty( $trimmed ) ) {
                return $trimmed;
            }
        }
    }

    // 3. YouTube Video Thumbnail from video meta if present
    $video_url = get_post_meta( $post_id, '_cac_video_url', true );
    if ( empty( $video_url ) ) {
        $video_url = get_post_meta( $post_id, '_cac_testimoni_video_url', true );
    }
    if ( ! empty( $video_url ) ) {
        $yt_id = cleanique_get_youtube_id( $video_url );
        if ( ! empty( $yt_id ) ) {
            return 'https://img.youtube.com/vi/' . $yt_id . '/hqdefault.jpg';
        }
    }

    // 4. Default Cleanique Academy Brand Placeholder
    return get_template_directory_uri() . '/assets/images/hero-lab-practical.jpg';
}

// Helper to convert YouTube / Shorts / Standard URL to Embed URL
function cleanique_get_youtube_embed_url( $url = '' ) {
    if ( empty( $url ) ) {
        return '';
    }
    // YouTube Shorts: https://youtube.com/shorts/VIDEO_ID or with params
    if ( preg_match( '/youtube\.com\/shorts\/([a-zA-Z0-9_-]+)/i', $url, $matches ) ) {
        return 'https://www.youtube.com/embed/' . $matches[1];
    }
    // YouTube Standard: https://www.youtube.com/watch?v=VIDEO_ID
    if ( preg_match( '/[?&]v=([a-zA-Z0-9_-]+)/i', $url, $matches ) ) {
        return 'https://www.youtube.com/embed/' . $matches[1];
    }
    // YouTube Shortened: https://youtu.be/VIDEO_ID
    if ( preg_match( '/youtu\.be\/([a-zA-Z0-9_-]+)/i', $url, $matches ) ) {
        return 'https://www.youtube.com/embed/' . $matches[1];
    }
    // Already an embed URL
    if ( strpos( $url, 'youtube.com/embed/' ) !== false ) {
        return $url;
    }
    return $url;
}

