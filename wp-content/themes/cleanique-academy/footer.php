<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>

<!-- Rich Full Company Profile Footer (Customized for Cleanique Academy) -->
<footer class="site-footer">
    <div class="container">
        <div class="footer-grid">
            
            <!-- Col 1: Logo (Original Full Color), Entity Name, Description & Socials -->
            <div class="footer-brand">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="display: block; margin-bottom: 1rem;" title="Beranda Cleanique Academy">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo.webp' ); ?>" alt="Cleanique Academy" style="height: 46px; width: auto; display: block;">
                </a>
                
                <h4 style="color: #ffffff; font-size: 0.95rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 0.75rem;">PT INDOTECH BERKAH ABADI</h4>
                
                <p style="font-size: 0.88rem; line-height: 1.6; color: #94a3b8; margin-bottom: 1.5rem;">
                    Pusat pelatihan profesional dan bimbingan formulasi kimia kebersihan, laundry, dan homecare terpercaya di Indonesia. Melahirkan pengusaha mandiri dan wirausahawan sejak 2011.
                </p>

                <!-- Official Social Media SVG Icons -->
                <div class="social-icons">
                    <a href="https://instagram.com/cleaniqueacademy" target="_blank" aria-label="Instagram" class="social-icon-link">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    </a>
                    <a href="https://facebook.com/cleaniqueacademy" target="_blank" aria-label="Facebook" class="social-icon-link">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    </a>
                    <a href="https://wa.me/6282215840088" target="_blank" aria-label="WhatsApp" class="social-icon-link">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.157 4.228 4.228-1.157zm12.339-6.495c-.068-.113-.25-.181-.523-.317-.272-.136-1.61-.795-1.86-.886-.25-.091-.432-.136-.613.136-.182.272-.704.886-.863 1.067-.159.182-.318.204-.59.068-.272-.136-1.151-.424-2.193-1.353-.81-.723-1.357-1.616-1.516-1.888-.159-.272-.017-.419.119-.554.122-.122.272-.318.408-.477.136-.159.182-.272.272-.454.091-.182.045-.341-.023-.477-.068-.136-.613-1.477-.84-2.023-.222-.534-.447-.461-.613-.469-.159-.008-.341-.01-.523-.01s-.477.068-.727.341c-.25.272-.954.932-.954 2.273s.977 2.636 1.114 2.818c.136.182 1.923 2.936 4.659 4.116.65.281 1.158.448 1.554.573.653.207 1.247.178 1.716.108.523-.078 1.61-.658 1.838-1.295.227-.636.227-1.181.159-1.295z"/></svg>
                    </a>
                </div>
            </div>

            <!-- Col 2: NAVIGASI -->
            <div>
                <h4 class="footer-heading" style="font-size: 0.85rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.08em; color: #cbd5e1;">NAVIGASI</h4>
                <ul class="footer-links">
                    <li><a href="<?php echo esc_url( home_url( '/tentang-kami/' ) ); ?>">Tentang Kami</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/program-pelatihan/' ) ); ?>">Program Pelatihan</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/dokumentasi-event/' ) ); ?>">Dokumentasi Galeri</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/artikel/' ) ); ?>">Artikel & Edukasi</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/kontak/' ) ); ?>">Kontak Perusahaan</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>">FAQ & Pertanyaan</a></li>
                </ul>
            </div>

            <!-- Col 3: BRAND KAMI -->
            <div>
                <h4 class="footer-heading" style="font-size: 0.85rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.08em; color: #cbd5e1;">BRAND KAMI</h4>
                <ul class="footer-links">
                    <li><a href="#">Orchid Care</a></li>
                    <li><a href="#">Depo Cleanique</a></li>
                    <li><a href="#">Malabeez</a></li>
                    <li><a href="#">Cleanique Lab</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="color: #38bdf8; font-weight: 700;">Cleanique Academy</a></li>
                    <li><a href="#">Cleanique Mart</a></li>
                </ul>
            </div>

            <!-- Col 4: HUBUNGI KAMI -->
            <div>
                <h4 class="footer-heading" style="font-size: 0.85rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.08em; color: #cbd5e1;">HUBUNGI KAMI</h4>
                
                <div style="margin-bottom: 1rem;">
                    <span style="display: block; font-size: 0.75rem; font-weight: 700; text-transform: uppercase; color: #64748b; margin-bottom: 0.2rem;">EMAIL</span>
                    <a href="mailto:indotechberkahabadi@gmail.com" style="color: #94a3b8; font-size: 0.88rem;">indotechberkahabadi@gmail.com</a>
                </div>

                <div style="margin-bottom: 1rem;">
                    <span style="display: block; font-size: 0.75rem; font-weight: 700; text-transform: uppercase; color: #64748b; margin-bottom: 0.2rem;">ALAMAT</span>
                    <p style="font-size: 0.85rem; color: #94a3b8; line-height: 1.5;">
                        Jongke Tengah No. 30, RT.01/RW.23, Sendangadi, Kec. Mlati, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55285
                    </p>
                </div>

                <div>
                    <span style="display: block; font-size: 0.75rem; font-weight: 700; text-transform: uppercase; color: #64748b; margin-bottom: 0.3rem;">WHATSAPP</span>
                    <ul style="list-style: none; font-size: 0.85rem; color: #94a3b8; line-height: 1.7;">
                        <li><a href="https://wa.me/6282215840088" target="_blank" style="color: #94a3b8; font-weight: 600;">+62 822-1584-0088 <span style="color: #64748b;">( Official WhatsApp CS )</span></a></li>
                    </ul>
                </div>
            </div>

        </div>

        <!-- Footer Bottom Bar -->
        <div class="footer-bottom" style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1rem; padding-top: 2rem; border-top: 1px solid #1e293b; font-size: 0.85rem;">
            <p style="color: #64748b;">&copy; <?php echo date( 'Y' ); ?> PT Indotech Berkah Abadi. Hak cipta dilindungi undang-undang.</p>
            <div style="display: flex; gap: 1.5rem;">
                <a href="<?php echo esc_url( home_url( '/tentang-kami/#faq' ) ); ?>" style="color: #64748b;">Kebijakan Privasi</a>
                <a href="<?php echo esc_url( home_url( '/tentang-kami/#faq' ) ); ?>" style="color: #64748b;">Syarat & Ketentuan</a>
                <a href="<?php echo esc_url( home_url( '/tentang-kami/#faq' ) ); ?>" style="color: #64748b;">Kebijakan Cookie</a>
            </div>
        </div>
    </div>
</footer>

<!-- Floating Back-To-Top and WhatsApp Action Buttons -->
<div class="floating-actions">
    <button onclick="window.scrollTo({top: 0, behavior: 'smooth'});" class="floating-btn btn-top" aria-label="Back to Top">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M18 15l-6-6-6 6"/></svg>
    </button>
    
    <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya ingin tanya seputar pelatihan.' ) ); ?>" target="_blank" class="floating-btn btn-wa-float" onclick="if(window.openWaFaqModal){window.openWaFaqModal();return false;}" aria-label="Chat WhatsApp">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.157 4.228 4.228-1.157zm12.339-6.495c-.068-.113-.25-.181-.523-.317-.272-.136-1.61-.795-1.86-.886-.25-.091-.432-.136-.613.136-.182.272-.704.886-.863 1.067-.159.182-.318.204-.59.068-.272-.136-1.151-.424-2.193-1.353-.81-.723-1.357-1.616-1.516-1.888-.159-.272-.017-.419.119-.554.122-.122.272-.318.408-.477.136-.159.182-.272.272-.454.091-.182.045-.341-.023-.477-.068-.136-.613-1.477-.84-2.023-.222-.534-.447-.461-.613-.469-.159-.008-.341-.01-.523-.01s-.477.068-.727.341c-.25.272-.954.932-.954 2.273s.977 2.636 1.114 2.818c.136.182 1.923 2.936 4.659 4.116.65.281 1.158.448 1.554.573.653.207 1.247.178 1.716.108.523-.078 1.61-.658 1.838-1.295.227-.636.227-1.181.159-1.295z"/></svg>
    </a>
<?php get_template_part( 'template-parts/wa-faq-modal' ); ?>

<!-- Universal Image Lightbox Modal for Articles, Home, and Gallery -->
<div id="universalImageLightbox" class="univ-lightbox-modal" style="display: none;">
    <div class="univ-lightbox-backdrop" onclick="cleaniqueCloseUnivLightbox()"></div>
    <button type="button" class="univ-lightbox-close" onclick="cleaniqueCloseUnivLightbox()" aria-label="Tutup Lightbox">&times;</button>
    <button type="button" class="univ-lightbox-nav univ-lightbox-prev" id="univLightboxPrev" onclick="cleaniqueNavUnivLightbox(-1)" aria-label="Gambar Sebelumnya">&lsaquo;</button>
    <div class="univ-lightbox-container">
        <img id="univLightboxImg" src="" alt="Enlarged view">
        <div id="univLightboxCaption" class="univ-lightbox-caption"></div>
    </div>
    <button type="button" class="univ-lightbox-nav univ-lightbox-next" id="univLightboxNext" onclick="cleaniqueNavUnivLightbox(1)" aria-label="Gambar Selanjutnya">&rsaquo;</button>
</div>

<style>
.univ-lightbox-modal {
  position: fixed;
  inset: 0;
  z-index: 999999;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 1.5rem;
}
.univ-lightbox-backdrop {
  position: absolute;
  inset: 0;
  background: rgba(15, 23, 42, 0.92);
  backdrop-filter: blur(8px);
}
.univ-lightbox-container {
  position: relative;
  z-index: 2;
  max-width: 90vw;
  max-height: 85vh;
  display: flex;
  flex-direction: column;
  align-items: center;
}
#univLightboxImg {
  max-width: 90vw;
  max-height: 80vh;
  border-radius: 12px;
  object-fit: contain;
  box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.6);
  transition: transform 0.2s ease;
}
.univ-lightbox-caption {
  margin-top: 0.85rem;
  color: #f1f5f9;
  font-size: 0.9rem;
  font-weight: 500;
  text-align: center;
  max-width: 600px;
}
.univ-lightbox-close {
  position: absolute;
  top: 1.5rem;
  right: 1.5rem;
  z-index: 3;
  background: rgba(255, 255, 255, 0.15);
  border: none;
  color: #ffffff;
  width: 44px;
  height: 44px;
  border-radius: 50%;
  cursor: pointer;
  font-size: 1.8rem;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: background 0.2s ease;
}
.univ-lightbox-close:hover {
  background: rgba(255, 255, 255, 0.3);
}
.univ-lightbox-nav {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  z-index: 3;
  background: rgba(255, 255, 255, 0.15);
  border: none;
  color: #ffffff;
  width: 48px;
  height: 48px;
  border-radius: 50%;
  cursor: pointer;
  font-size: 2rem;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: background 0.2s ease;
}
.univ-lightbox-nav:hover {
  background: rgba(255, 255, 255, 0.3);
}
.univ-lightbox-prev {
  left: 1.5rem;
}
.univ-lightbox-next {
  right: 1.5rem;
}

/* Hover Zoom Pointer on Site Images */
.article-body img,
.featured-image-wrapper img,
.card img,
.grid img,
.hero img,
.gallery-grid img,
.promo-banner-image {
  cursor: zoom-in;
  transition: filter 0.2s ease, transform 0.2s ease;
}
</style>

<script>
var univLightboxImages = [];
var currentUnivIndex = 0;

function cleaniqueInitGlobalLightbox() {
    var images = document.querySelectorAll('img');
    var eligibleImages = [];

    images.forEach(function(img) {
        // Exclude site logos, tiny icons, SVG or share button avatars
        if (img.classList.contains('site-logo') || img.closest('.site-logo') || img.closest('.drawer-social-icons') || img.closest('.share-buttons-wrapper') || img.width < 50 || img.height < 50) {
            return;
        }

        img.style.cursor = 'zoom-in';

        var src = img.src;
        if (!src) return;

        var altText = img.alt || img.getAttribute('title') || '';
        var idx = eligibleImages.length;
        eligibleImages.push({ src: src, caption: altText });

        img.addEventListener('click', function(e) {
            // Check if user clicked on post title link wrapped around card text vs direct image
            if (img.closest('a') && !img.closest('.gallery-item-link')) {
                var parentLink = img.closest('a');
                var href = parentLink.getAttribute('href');
                if (href && (href.match(/\.(jpeg|jpg|gif|png|webp)$/i) || href.startsWith('javascript:'))) {
                    e.preventDefault();
                } else if (href && !href.startsWith('#')) {
                    // If image is inside a post link, open lightbox on direct image click
                    e.preventDefault();
                }
            } else {
                e.preventDefault();
            }
            e.stopPropagation();
            cleaniqueOpenUnivLightbox(idx, eligibleImages);
        });
    });
}

function cleaniqueOpenUnivLightbox(index, imagesList) {
    if (imagesList && imagesList.length > 0) {
        univLightboxImages = imagesList;
    }
    if (univLightboxImages[index]) {
        currentUnivIndex = index;
        var modal = document.getElementById('universalImageLightbox');
        var imgEl = document.getElementById('univLightboxImg');
        var capEl = document.getElementById('univLightboxCaption');

        imgEl.src = univLightboxImages[currentUnivIndex].src;
        capEl.textContent = univLightboxImages[currentUnivIndex].caption;
        modal.style.display = 'flex';
        document.body.style.overflow = 'hidden';

        var prevBtn = document.getElementById('univLightboxPrev');
        var nextBtn = document.getElementById('univLightboxNext');
        if (univLightboxImages.length <= 1) {
            prevBtn.style.display = 'none';
            nextBtn.style.display = 'none';
        } else {
            prevBtn.style.display = 'flex';
            nextBtn.style.display = 'flex';
        }
    }
}

function cleaniqueCloseUnivLightbox() {
    var modal = document.getElementById('universalImageLightbox');
    if (modal) {
        modal.style.display = 'none';
        document.body.style.overflow = '';
    }
}

function cleaniqueNavUnivLightbox(direction) {
    if (univLightboxImages.length === 0) return;
    currentUnivIndex = (currentUnivIndex + direction + univLightboxImages.length) % univLightboxImages.length;
    var imgEl = document.getElementById('univLightboxImg');
    var capEl = document.getElementById('univLightboxCaption');
    imgEl.src = univLightboxImages[currentUnivIndex].src;
    capEl.textContent = univLightboxImages[currentUnivIndex].caption;
}

document.addEventListener('keydown', function(e) {
    var modal = document.getElementById('universalImageLightbox');
    if (modal && modal.style.display === 'flex') {
        if (e.key === 'Escape') cleaniqueCloseUnivLightbox();
        if (e.key === 'ArrowLeft') cleaniqueNavUnivLightbox(-1);
        if (e.key === 'ArrowRight') cleaniqueNavUnivLightbox(1);
    }
});

document.addEventListener('DOMContentLoaded', function() {
    cleaniqueInitGlobalLightbox();
});
</script>

<?php wp_footer(); ?>
</body>
</html>
