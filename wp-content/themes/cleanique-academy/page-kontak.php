<?php
/**
 * Template Name: Halaman Kontak
 * Dedicated Contact Page Template inspired by indotech.id & orchidbrand.id
 */
get_header();

cleanique_render_page_hero( array(
    'title'    => 'Kontak & Customer Care',
    'badge'    => 'Hubungi Kami',
    'subtitle' => 'Pusat Layanan Informasi, Konsultasi Pelatihan, dan Layanan Pelanggan PT Indotech Berkah Abadi.',
    'theme'    => 'light',
) );
?>

<!-- 1. KARTU INFORMASI KONTAK 3 KOLOM -->
<section class="section">
    <div class="container">
        
        <div class="grid grid-3" style="margin-bottom: 3.5rem;">
            
            <!-- Kartu 1: Kantor Pusat -->
            <div class="card" style="height: 100%;">
                <span class="section-subtitle" style="font-size: 0.75rem; margin-bottom: 1rem; width: fit-content;">KANTOR PUSAT</span>
                <h3 class="card-title" style="font-size: 1.3rem; margin-bottom: 1rem;">PT Indotech Berkah Abadi</h3>
                
                <p style="margin-bottom: 1rem; font-size: 0.95rem; line-height: 1.6; color: var(--color-text-main);">
                    <strong>Alamat Training Center:</strong><br>
                    <a href="https://share.google/7QVmis9RdpoMHwldZ" target="_blank" style="color: var(--color-primary); font-weight: 600; text-decoration: underline;">
                        Jongke Tengah No. 30, RT.01/RW.23, Sendangadi, Kec. Mlati, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55285
                    </a>
                </p>

                <p style="margin-bottom: 1rem; font-size: 0.95rem; line-height: 1.6; color: var(--color-text-main);">
                    <strong>Jam Operasional Kantor:</strong><br>
                    <span style="color: var(--color-text-muted);">Senin - Sabtu | 08.00 - 17.00 WIB</span><br>
                    <span style="font-size: 0.82rem; color: #94a3b8;">(Minggu & Hari Libur Nasional Tutup)</span>
                </p>

                <div>
                    <a href="https://share.google/7QVmis9RdpoMHwldZ" target="_blank" class="btn btn-outline" style="padding: 0.45rem 0.9rem; font-size: 0.82rem; display: inline-flex; align-items: center; gap: 0.4rem; border-radius: 8px;">
                        Petunjuk Arah Google Maps &rarr;
                    </a>
                </div>
            </div>

            <!-- Kartu 2: Saluran WhatsApp CS Resmi -->
            <div class="card" style="height: 100%; background: var(--color-primary-light); border-color: #bae6fd;">
                <span class="section-subtitle" style="font-size: 0.75rem; margin-bottom: 1rem; width: fit-content; background: #e0f2fe; color: #0369a1;">WHATSAPP OFFICIAL</span>
                <h3 class="card-title" style="font-size: 1.3rem; margin-bottom: 1rem; color: #0369a1;">Saluran Chat Respon Cepat</h3>
                
                <div style="display: flex; flex-direction: column; gap: 0.85rem; font-size: 0.92rem;">
                    <div>
                        <strong style="color: var(--color-secondary); display: block; margin-bottom: 0.5rem;">WhatsApp Official Customer Care:</strong>
                        <p style="color: var(--color-text-muted); font-size: 0.88rem; margin-bottom: 0.75rem;">Layanan informasi pendaftaran pelatihan, konsultasi formulasi, dan kemitraan.</p>
                        <div>
                            <a href="<?php echo esc_url( cleanique_get_whatsapp_url( 'Halo Cleanique Academy, saya mau konsultasi pendaftaran pelatihan.' ) ); ?>" target="_blank" class="btn btn-whatsapp" style="font-size: 0.9rem; padding: 0.6rem 1.2rem; display: inline-flex; width: 100%; justify-content: center;">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.157 4.228 4.228-1.157zm12.339-6.495c-.068-.113-.25-.181-.523-.317-.272-.136-1.61-.795-1.86-.886-.25-.091-.432-.136-.613.136-.182.272-.704.886-.863 1.067-.159.182-.318.204-.59.068-.272-.136-1.151-.424-2.193-1.353-.81-.723-1.357-1.616-1.516-1.888-.159-.272-.017-.419.119-.554.122-.122.272-.318.408-.477.136-.159.182-.272.272-.454.091-.182.045-.341-.023-.477-.068-.136-.613-1.477-.84-2.023-.222-.534-.447-.461-.613-.469-.159-.008-.341-.01-.523-.01s-.477.068-.727.341c-.25.272-.954.932-.954 2.273s.977 2.636 1.114 2.818c.136.182 1.923 2.936 4.659 4.116.65.281 1.158.448 1.554.573.653.207 1.247.178 1.716.108.523-.078 1.61-.658 1.838-1.295.227-.636.227-1.181.159-1.295z"/></svg>
                                <span>+62 822-1584-0088</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kartu 3: Email & Media Sosial -->
            <div class="card" style="height: 100%;">
                <span class="section-subtitle" style="font-size: 0.75rem; margin-bottom: 1rem; width: fit-content;">EMAIL & SOSMED</span>
                <h3 class="card-title" style="font-size: 1.3rem; margin-bottom: 1rem;">Surat Elektronik & Komunitas</h3>
                
                <p style="margin-bottom: 1rem; font-size: 0.95rem; line-height: 1.6;">
                    <strong>Email Resmi:</strong><br>
                    <a href="mailto:indotechberkahabadi@gmail.com" style="color: var(--color-primary);">indotechberkahabadi@gmail.com</a>
                </p>

                <div>
                    <strong style="font-size: 0.95rem; display: block; margin-bottom: 0.5rem;">Ikuti Media Sosial Kami:</strong>
                    <div style="display: flex; gap: 0.65rem; align-items: center;">
                        <a href="https://instagram.com/cleaniqueacademy" target="_blank" class="social-icon-link" aria-label="Instagram">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        </a>
                        <a href="https://www.youtube.com/@orchidcareofficial" target="_blank" class="social-icon-link" aria-label="YouTube">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                        </a>
                        <a href="https://facebook.com/cleaniqueacademy" target="_blank" class="social-icon-link" aria-label="Facebook">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        </a>
                        <a href="https://wa.me/6282215840088" target="_blank" class="social-icon-link" aria-label="WhatsApp">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.157 4.228 4.228-1.157zm12.339-6.495c-.068-.113-.25-.181-.523-.317-.272-.136-1.61-.795-1.86-.886-.25-.091-.432-.136-.613.136-.182.272-.704.886-.863 1.067-.159.182-.318.204-.59.068-.272-.136-1.151-.424-2.193-1.353-.81-.723-1.357-1.616-1.516-1.888-.159-.272-.017-.419.119-.554.122-.122.272-.318.408-.477.136-.159.182-.272.272-.454.091-.182.045-.341-.023-.477-.068-.136-.613-1.477-.84-2.023-.222-.534-.447-.461-.613-.469-.159-.008-.341-.01-.523-.01s-.477.068-.727.341c-.25.272-.954.932-.954 2.273s.977 2.636 1.114 2.818c.136.182 1.923 2.936 4.659 4.116.65.281 1.158.448 1.554.573.653.207 1.247.178 1.716.108.523-.078 1.61-.658 1.838-1.295.227-.636.227-1.181.159-1.295z"/></svg>
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <!-- 2. PETA LOKASI TRAINING CENTER YOGYAKARTA -->
        <div class="contact-map-card">
            <div class="section-header" style="text-align: center; margin-bottom: 2rem;">
                <span class="section-subtitle">Lokasi Penyelenggaraan</span>
                <h2 class="section-title" style="font-size: 1.8rem; margin-bottom: 0.5rem;">Peta Training Center Yogyakarta</h2>
                <p class="section-description">Kunjungi Laboratorium & Pusat Pelatihan Tatap Muka Cleanique Academy.</p>
            </div>

            <div class="contact-map-iframe-wrap">
                <iframe 
                    title="Peta Lokasi Cleanique Academy PT Indotech Berkah Abadi"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.279785023908!2d110.4244585!3d-7.7601142!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5996f01c808f%3A0xb35a0f670732890!2sSleman%2C%20Special%20Region%20of%20Yogyakarta!5e0!3m2!1sen!2sid!4v1700000000000!5m2!1sen!2sid" 
                    width="100%" 
                    height="100%" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

            <div style="text-align: center; margin-top: 1.5rem;">
                <a href="https://share.google/7QVmis9RdpoMHwldZ" target="_blank" class="btn btn-primary" style="padding: 0.65rem 1.4rem; font-size: 0.92rem; border-radius: 10px; display: inline-flex; align-items: center; gap: 0.5rem;">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                    <span>Buka Lokasi di Google Maps &rarr;</span>
                </a>
            </div>
        </div>

    </div>
</section>

<?php
get_footer();
