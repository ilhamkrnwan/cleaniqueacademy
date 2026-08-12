<?php
/**
 * Reusable Page Hero Header Component
 * Usage: get_template_part( 'template-parts/page-hero', null, $args );
 * or call: cleanique_render_page_hero( $args );
 */

$title    = isset( $args['title'] ) ? $args['title'] : get_the_title();
$subtitle = isset( $args['subtitle'] ) ? $args['subtitle'] : '';
$badge    = isset( $args['badge'] ) ? $args['badge'] : '';
$theme    = isset( $args['theme'] ) ? $args['theme'] : 'light'; // 'light' or 'dark'

$hero_class = ( 'dark' === $theme ) ? 'page-hero page-hero-dark' : 'page-hero page-hero-light';
?>

<section class="<?php echo esc_attr( $hero_class ); ?>">
    <div class="container page-hero-container">
        <?php if ( ! empty( $badge ) ) : ?>
            <span class="page-hero-badge"><?php echo esc_html( $badge ); ?></span>
        <?php endif; ?>

        <h1 class="page-hero-title"><?php echo esc_html( $title ); ?></h1>

        <?php if ( ! empty( $subtitle ) ) : ?>
            <p class="page-hero-subtitle"><?php echo esc_html( $subtitle ); ?></p>
        <?php endif; ?>

        <!-- Breadcrumb Navigation -->
        <nav class="page-hero-breadcrumbs" aria-label="Breadcrumb">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Beranda</a>
            <span class="breadcrumb-separator">&rsaquo;</span>
            <span class="breadcrumb-current"><?php echo esc_html( wp_strip_all_tags( $title ) ); ?></span>
        </nav>
    </div>
</section>
