<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php if ( is_front_page() ) : ?>

    <!-- 1. Simple Landing Page Header for Front Page (Rule 3 - Perfectly Responsive) -->
    <header class="site-header site-header-landing">
        <div class="container header-container">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo" title="Beranda Cleanique Academy">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo.webp' ); ?>" alt="Cleanique Academy" class="logo-image">
            </a>

            <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya ingin konsultasi pendaftaran.' ) ); ?>" target="_blank" class="btn btn-whatsapp btn-sm btn-header-wa">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.157 4.228 4.228-1.157zm12.339-6.495c-.068-.113-.25-.181-.523-.317-.272-.136-1.61-.795-1.86-.886-.25-.091-.432-.136-.613.136-.182.272-.704.886-.863 1.067-.159.182-.318.204-.59.068-.272-.136-1.151-.424-2.193-1.353-.81-.723-1.357-1.616-1.516-1.888-.159-.272-.017-.419.119-.554.122-.122.272-.318.408-.477.136-.159.182-.272.272-.454.091-.182.045-.341-.023-.477-.068-.136-.613-1.477-.84-2.023-.222-.534-.447-.461-.613-.469-.159-.008-.341-.01-.523-.01s-.477.068-.727.341c-.25.272-.954.932-.954 2.273s.977 2.636 1.114 2.818c.136.182 1.923 2.936 4.659 4.116.65.281 1.158.448 1.554.573.653.207 1.247.178 1.716.108.523-.078 1.61-.658 1.838-1.295.227-.636.227-1.181.159-1.295z"/></svg>
                <span>Konsultasi WhatsApp</span>
            </a>
        </div>
    </header>

<?php else : ?>

    <!-- 2. Company Profile Header with Desktop Nav & Mobile Drawer Menu -->
    <header class="site-header site-header-company">
        <div class="container header-container">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo" title="Beranda Cleanique Academy">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo.webp' ); ?>" alt="Cleanique Academy" class="logo-image">
            </a>

            <!-- Desktop Navigation Menu -->
            <nav class="main-navigation desktop-nav">
                <ul class="nav-menu">
                    <li><a href="<?php echo esc_url( home_url( '/tentang-kami/' ) ); ?>">Tentang Kami</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/program-pelatihan/' ) ); ?>">Program</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/dokumentasi-event/' ) ); ?>">Galeri</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/artikel/' ) ); ?>">Artikel</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/kontak/' ) ); ?>">Kontak</a></li>
                </ul>
            </nav>

            <!-- Header Right Group (WhatsApp Button + Mobile Hamburger Toggle) -->
            <div class="header-right-group" style="display: flex; align-items: center; gap: 0.6rem;">
                <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya ingin konsultasi pendaftaran.' ) ); ?>" target="_blank" class="btn btn-whatsapp btn-sm btn-header-wa">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.157 4.228 4.228-1.157zm12.339-6.495c-.068-.113-.25-.181-.523-.317-.272-.136-1.61-.795-1.86-.886-.25-.091-.432-.136-.613.136-.182.272-.704.886-.863 1.067-.159.182-.318.204-.59.068-.272-.136-1.151-.424-2.193-1.353-.81-.723-1.357-1.616-1.516-1.888-.159-.272-.017-.419.119-.554.122-.122.272-.318.408-.477.136-.159.182-.272.272-.454.091-.182.045-.341-.023-.477-.068-.136-.613-1.477-.84-2.023-.222-.534-.447-.461-.613-.469-.159-.008-.341-.01-.523-.01s-.477.068-.727.341c-.25.272-.954.932-.954 2.273s.977 2.636 1.114 2.818c.136.182 1.923 2.936 4.659 4.116.65.281 1.158.448 1.554.573.653.207 1.247.178 1.716.108.523-.078 1.61-.658 1.838-1.295.227-.636.227-1.181.159-1.295z"/></svg>
                    <span>WhatsApp</span>
                </a>

                <!-- Mobile Hamburger Toggle Button -->
                <button class="mobile-toggle-btn" id="mobileMenuToggle" aria-label="Toggle Navigation Menu">
                    <svg class="icon-hamburger" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="3" y1="12" x2="21" y2="12"></line>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <line x1="3" y1="18" x2="21" y2="18"></line>
                    </svg>
                </button>
            </div>
        </div>
    </header>

    <!-- Mobile Drawer Overlay & Panel -->
    <div class="mobile-drawer-overlay" id="mobileDrawerOverlay"></div>
    <div class="mobile-drawer-panel" id="mobileDrawerPanel">
        
        <!-- Drawer Header -->
        <div class="mobile-drawer-header">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo.webp' ); ?>" alt="Cleanique Academy" style="height: 36px; width: auto; display: block;">
            </a>

            <div style="display: flex; align-items: center; gap: 0.5rem;">
                <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya ingin konsultasi pendaftaran.' ) ); ?>" target="_blank" class="btn btn-whatsapp btn-sm">
                    <span>WhatsApp</span>
                </a>
                <button class="mobile-drawer-close" id="mobileDrawerClose" aria-label="Close Menu">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Vertical Menu Items -->
        <ul class="mobile-menu-list">
            <li><a href="<?php echo esc_url( home_url( '/tentang-kami/' ) ); ?>">Tentang Kami</a></li>
            <li><a href="<?php echo esc_url( home_url( '/program-pelatihan/' ) ); ?>">Program</a></li>
            <li><a href="<?php echo esc_url( home_url( '/dokumentasi-event/' ) ); ?>">Galeri</a></li>
            <li><a href="<?php echo esc_url( home_url( '/artikel/' ) ); ?>">Artikel</a></li>
            <li><a href="<?php echo esc_url( home_url( '/kontak/' ) ); ?>">Kontak</a></li>
        </ul>

        <!-- Drawer Footer Info Section -->
        <div class="mobile-drawer-footer">
            <span class="drawer-footer-title">HUBUNGI KAMI</span>
            <p class="drawer-footer-item"><strong>+62 822-1584-0088</strong></p>
            <p class="drawer-footer-item">indotechberkahabadi@gmail.com</p>

            <div class="drawer-social-icons">
                <a href="https://instagram.com/cleaniqueacademy" target="_blank" aria-label="Instagram" class="social-icon-box">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                </a>
                <a href="https://www.youtube.com/@orchidcareofficial" target="_blank" aria-label="YouTube" class="social-icon-box">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                </a>
                <a href="https://facebook.com/cleaniqueacademy" target="_blank" aria-label="Facebook" class="social-icon-box">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                </a>
                <a href="https://wa.me/6282215840088" target="_blank" aria-label="WhatsApp" class="social-icon-box">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.157 4.228 4.228-1.157zm12.339-6.495c-.068-.113-.25-.181-.523-.317-.272-.136-1.61-.795-1.86-.886-.25-.091-.432-.136-.613.136-.182.272-.704.886-.863 1.067-.159.182-.318.204-.59.068-.272-.136-1.151-.424-2.193-1.353-.81-.723-1.357-1.616-1.516-1.888-.159-.272-.017-.419.119-.554.122-.122.272-.318.408-.477.136-.159.182-.272.272-.454.091-.182.045-.341-.023-.477-.068-.136-.613-1.477-.84-2.023-.222-.534-.447-.461-.613-.469-.159-.008-.341-.01-.523-.01s-.477.068-.727.341c-.25.272-.954.932-.954 2.273s.977 2.636 1.114 2.818c.136.182 1.923 2.936 4.659 4.116.65.281 1.158.448 1.554.573.653.207 1.247.178 1.716.108.523-.078 1.61-.658 1.838-1.295.227-.636.227-1.181.159-1.295z"/></svg>
                </a>
            </div>
        </div>
    </div>

    <!-- Lightweight Vanilla JS for Mobile Drawer Toggle -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var toggleBtn = document.getElementById('mobileMenuToggle');
        var closeBtn  = document.getElementById('mobileDrawerClose');
        var overlay   = document.getElementById('mobileDrawerOverlay');
        var drawer    = document.getElementById('mobileDrawerPanel');

        function openDrawer() {
            if (drawer && overlay) {
                drawer.classList.add('active');
                overlay.classList.add('active');
                document.body.style.overflow = 'hidden';
            }
        }

        function closeDrawer() {
            if (drawer && overlay) {
                drawer.classList.remove('active');
                overlay.classList.remove('active');
                document.body.style.overflow = '';
            }
        }

        if (toggleBtn) toggleBtn.addEventListener('click', openDrawer);
        if (closeBtn)  closeBtn.addEventListener('click', closeDrawer);
        if (overlay)   overlay.addEventListener('click', closeDrawer);
    });
    </script>

<?php endif; ?>
