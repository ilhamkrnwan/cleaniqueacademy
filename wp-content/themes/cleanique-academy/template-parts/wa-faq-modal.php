<?php
/**
 * WhatsApp Assistant FAQ Modal Component
 * Displays an interactive WhatsApp assistant popup modal with welcome card, clean list items, and typing effect.
 * Target WhatsApp Number: 6282215840088
 */
?>

<!-- WhatsApp FAQ Modal Container -->
<div class="wa-modal-overlay" id="waFaqModalOverlay" aria-hidden="true">
    <div class="wa-modal-card" role="dialog" aria-modal="true" aria-labelledby="waModalTitle">
        
        <!-- Modal Header -->
        <div class="wa-modal-header">
            <button type="button" class="wa-back-btn" id="waBackBtn" aria-label="Kembali" style="display: none;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="19" y1="12" x2="5" y2="12"></line>
                    <polyline points="12 19 5 12 12 5"></polyline>
                </svg>
            </button>

            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo.webp' ); ?>" alt="Cleanique Academy" class="wa-avatar">
            
            <div class="wa-header-info">
                <h3 class="wa-header-title" id="waModalTitle">Cleanique Academy</h3>
                <span class="wa-header-subtitle" id="waHeaderSubtitle">Asisten Pelatihan</span>
            </div>

            <button type="button" class="wa-close-btn" id="waCloseBtn" aria-label="Tutup Modal">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>
        </div>

        <!-- Modal Body -->
        <div class="wa-modal-body">
            
            <!-- LIST VIEW: WELCOME MESSAGE & PILIH PERTANYAAN -->
            <div class="wa-view-list" id="waFaqListView">
                
                <!-- Welcome Message Card -->
                <div class="wa-welcome-card">
                    <h4 class="wa-welcome-title">Selamat datang di Cleanique Academy</h4>
                    <p class="wa-welcome-desc">Kami dapat membantu menjawab pertanyaan seputar pelatihan pembuatan produk kimia laundry & homecare sebelum Anda terhubung dengan admin.</p>
                    <div class="wa-welcome-footer">
                        Produsen &amp; Pusat Riset Chemical Sejak 2011
                    </div>
                </div>

                <span class="wa-section-label">PILIH PERTANYAAN</span>
                <div class="wa-faq-items-group">
                    
                    <!-- 1. Biaya & Promo Pelatihan -->
                    <div class="wa-faq-item" data-faq-id="biaya-promo">
                        <span class="wa-item-title">Biaya & Promo Pelatihan</span>
                        <svg class="wa-item-chevron" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>

                    <!-- 2. Jadwal Pelatihan -->
                    <div class="wa-faq-item" data-faq-id="jadwal-pelatihan">
                        <span class="wa-item-title">Jadwal Pelatihan</span>
                        <svg class="wa-item-chevron" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>

                    <!-- 3. Lokasi Pelatihan -->
                    <div class="wa-faq-item" data-faq-id="lokasi-pelatihan">
                        <span class="wa-item-title">Lokasi Pelatihan</span>
                        <svg class="wa-item-chevron" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>

                    <!-- 4. Sertifikat & Fasilitas -->
                    <div class="wa-faq-item" data-faq-id="sertifikat-fasilitas">
                        <span class="wa-item-title">Sertifikat & Fasilitas</span>
                        <svg class="wa-item-chevron" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>

                    <!-- 5. Apakah Bisa Online? -->
                    <div class="wa-faq-item" data-faq-id="bisa-online">
                        <span class="wa-item-title">Apakah Bisa Online?</span>
                        <svg class="wa-item-chevron" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>

                    <!-- 6. Cara Pendaftaran -->
                    <div class="wa-faq-item" data-faq-id="cara-pendaftaran">
                        <span class="wa-item-title">Cara Pendaftaran</span>
                        <svg class="wa-item-chevron" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>

                    <!-- 7. Pertanyaan lainnya -->
                    <div class="wa-faq-item" data-faq-id="pertanyaan-lainnya">
                        <span class="wa-item-title">Pertanyaan lainnya</span>
                        <svg class="wa-item-chevron" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>

                </div>
            </div>

            <!-- DETAIL VIEW: JAWABAN FAQ & TYPING EFFECT -->
            <div class="wa-view-detail" id="waFaqDetailView" style="display: none;">
                <div class="wa-detail-card">
                    
                    <!-- Detail Header -->
                    <div class="wa-detail-header" style="margin-bottom: 0.85rem;">
                        <h4 class="wa-detail-title" id="waDetailTitle">Judul Pertanyaan</h4>
                    </div>

                    <!-- Typing Effect Indicator Box -->
                    <div class="wa-typing-box" id="waTypingBox">
                        <span class="wa-typing-text">Asisten sedang mengetik</span>
                        <div class="wa-typing-dots">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>

                    <!-- Answer Content (Injected by JS after typing effect) -->
                    <div class="wa-answer-body" id="waAnswerBody" style="display: none;">
                        <!-- Injected by JS -->
                    </div>

                    <!-- Action WA Button -->
                    <a href="https://wa.me/6282215840088" target="_blank" class="btn btn-whatsapp wa-action-btn" id="waActionButton" style="display: none;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.157 4.228 4.228-1.157zm12.339-6.495c-.068-.113-.25-.181-.523-.317-.272-.136-1.61-.795-1.86-.886-.25-.091-.432-.136-.613.136-.182.272-.704.886-.863 1.067-.159.182-.318.204-.59.068-.272-.136-1.151-.424-2.193-1.353-.81-.723-1.357-1.616-1.516-1.888-.159-.272-.017-.419.119-.554.122-.122.272-.318.408-.477.136-.159.182-.272.272-.454.091-.182.045-.341-.023-.477-.068-.136-.613-1.477-.84-2.023-.222-.534-.447-.461-.613-.469-.159-.008-.341-.01-.523-.01s-.477.068-.727.341c-.25.272-.954.932-.954 2.273s.977 2.636 1.114 2.818c.136.182 1.923 2.936 4.659 4.116.65.281 1.158.448 1.554.573.653.207 1.247.178 1.716.108.523-.078 1.61-.658 1.838-1.295.227-.636.227-1.181.159-1.295z"/>
                        </svg>
                        <span id="waActionButtonText">Tanya Admin via WhatsApp</span>
                    </a>

                </div>
            </div>

        </div>

        <!-- Modal Footer -->
        <div class="wa-modal-footer">
            <span>Terhubung langsung ke admin resmi via WhatsApp</span>
        </div>

    </div>
</div>

<!-- Inline Styles for WA Modal & Typing Animation -->
<style>
.wa-modal-overlay {
  position: fixed;
  inset: 0;
  background: rgba(15, 23, 42, 0.4);
  backdrop-filter: blur(3px);
  z-index: 999999;
  display: none;
  align-items: flex-end;
  justify-content: flex-end;
  opacity: 0;
  transition: opacity 0.25s ease;
  padding: 1.5rem;
}

.wa-modal-overlay.active {
  display: flex !important;
  opacity: 1 !important;
}

.wa-modal-card {
  width: 100%;
  max-width: 400px;
  max-height: 82vh;
  background: #ffffff;
  border-radius: 20px;
  box-shadow: 0 20px 45px -10px rgba(0, 0, 0, 0.25), 0 0 0 1px rgba(0, 0, 0, 0.08);
  overflow: hidden;
  display: flex;
  flex-direction: column;
  transform: translateY(20px) scale(0.96);
  transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1);
}

.wa-modal-overlay.active .wa-modal-card {
  transform: translateY(0) scale(1);
}

/* Header */
.wa-modal-header {
  background: linear-gradient(135deg, #0b1f31 0%, #0f2d47 100%);
  padding: 1.15rem 1.25rem;
  color: #ffffff;
  display: flex;
  align-items: center;
  gap: 0.85rem;
  position: relative;
}

.wa-back-btn, .wa-close-btn {
  background: rgba(255, 255, 255, 0.12);
  border: none;
  color: #ffffff;
  width: 34px;
  height: 34px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  transition: background 0.2s ease;
}

.wa-back-btn:hover, .wa-close-btn:hover {
  background: rgba(255, 255, 255, 0.25);
}

.wa-close-btn {
  margin-left: auto;
}

.wa-avatar {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  object-fit: cover;
  background: #ffffff;
  padding: 2px;
}

.wa-header-info {
  display: flex;
  flex-direction: column;
}

.wa-header-title {
  font-family: var(--font-heading, sans-serif);
  font-size: 1.05rem;
  font-weight: 700;
  color: #ffffff;
  margin: 0;
  line-height: 1.2;
}

.wa-header-subtitle {
  font-size: 0.78rem;
  color: #94a3b8;
  margin-top: 2px;
}

/* Body */
.wa-modal-body {
  padding: 1.15rem;
  overflow-y: auto;
  flex: 1;
  max-height: 65vh;
}

/* Welcome Card Above Questions */
.wa-welcome-card {
  background: #ffffff;
  border: 1px solid #e2e8f0;
  border-radius: 14px;
  padding: 1.15rem;
  margin-bottom: 1.25rem;
  box-shadow: 0 4px 14px rgba(0, 0, 0, 0.04);
}

.wa-welcome-title {
  font-family: var(--font-heading, sans-serif);
  font-size: 1.05rem;
  font-weight: 800;
  color: #0f172a;
  margin: 0 0 0.45rem 0;
  line-height: 1.3;
}

.wa-welcome-desc {
  font-size: 0.88rem;
  line-height: 1.6;
  color: #475569;
  margin: 0 0 0.85rem 0;
}

.wa-welcome-footer {
  padding-top: 0.65rem;
  border-top: 1px dashed #e2e8f0;
  font-size: 0.78rem;
  color: #64748b;
  font-weight: 500;
}

.wa-section-label {
  font-size: 0.72rem;
  font-weight: 800;
  color: #64748b;
  text-transform: uppercase;
  letter-spacing: 0.06em;
  margin-bottom: 0.75rem;
  display: block;
}

/* FAQ Item List (No Icon, Sleek Buttons) */
.wa-faq-item {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 0.9rem 1.15rem;
  background: #ffffff;
  border: 1px solid #e2e8f0;
  border-radius: 12px;
  margin-bottom: 0.65rem;
  cursor: pointer;
  transition: all 0.2s ease;
}

.wa-faq-item:hover {
  border-color: #0284c7;
  background: #f8fafc;
  transform: translateX(3px);
  box-shadow: 0 4px 12px rgba(2, 132, 199, 0.08);
}

.wa-item-title {
  font-size: 0.92rem;
  font-weight: 600;
  color: #1e293b;
}

.wa-item-chevron {
  color: #94a3b8;
  flex-shrink: 0;
  transition: transform 0.2s ease, color 0.2s ease;
}

.wa-faq-item:hover .wa-item-chevron {
  color: #0284c7;
  transform: translateX(2px);
}

/* Detail Card */
.wa-detail-card {
  background: #ffffff;
  border: 1px solid #e2e8f0;
  border-radius: 14px;
  padding: 1.15rem;
}

.wa-detail-title {
  font-size: 1.1rem;
  font-weight: 700;
  color: #0f172a;
  margin: 0;
}

/* Typing Indicator Animation */
.wa-typing-box {
  display: flex;
  align-items: center;
  gap: 0.6rem;
  padding: 1.25rem 0;
  font-size: 0.88rem;
  color: #64748b;
  font-weight: 500;
}

.wa-typing-dots {
  display: flex;
  align-items: center;
  gap: 4px;
}

.wa-typing-dots span {
  width: 6px;
  height: 6px;
  background-color: var(--color-primary, #0284c7);
  border-radius: 50%;
  display: inline-block;
  animation: waPulse 1.4s infinite ease-in-out both;
}

.wa-typing-dots span:nth-child(1) { animation-delay: -0.32s; }
.wa-typing-dots span:nth-child(2) { animation-delay: -0.16s; }

@keyframes waPulse {
  0%, 80%, 100% { transform: scale(0.6); opacity: 0.4; }
  40% { transform: scale(1.1); opacity: 1; }
}

.wa-answer-body {
  font-size: 0.92rem;
  line-height: 1.68;
  color: #334155;
  margin-bottom: 1.25rem;
}

.wa-answer-body p {
  margin-bottom: 0.75rem;
}

.wa-answer-body p:last-child {
  margin-bottom: 0;
}

.wa-action-btn {
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 0.5rem;
  padding: 0.8rem 1.15rem;
  background: #16a34a !important;
  color: #ffffff !important;
  border-radius: 10px;
  font-weight: 700;
  font-size: 0.92rem;
  text-decoration: none;
  box-shadow: 0 4px 12px rgba(22, 163, 74, 0.25);
  transition: background 0.2s ease, transform 0.2s ease;
}

.wa-action-btn:hover {
  background: #15803d !important;
  transform: translateY(-2px);
}

/* Footer */
.wa-modal-footer {
  background: #f8fafc;
  padding: 0.75rem 1rem;
  border-top: 1px solid #e2e8f0;
  text-align: center;
  font-size: 0.76rem;
  color: #64748b;
  font-weight: 500;
}

@media (max-width: 640px) {
  .wa-modal-overlay {
    align-items: center !important;
    justify-content: center !important;
    padding: 1rem !important;
    background: rgba(15, 23, 42, 0.6) !important;
  }
  .wa-modal-card {
    max-height: 88vh !important;
  }
}
</style>

<!-- JavaScript Logic for WA FAQ Modal -->
<script>
(function() {
    function initWaFaqModal() {
        var modalOverlay = document.getElementById('waFaqModalOverlay');
        var closeBtn     = document.getElementById('waCloseBtn');
        var backBtn      = document.getElementById('waBackBtn');
        
        var listView     = document.getElementById('waFaqListView');
        var detailView   = document.getElementById('waFaqDetailView');
        
        var headerSubtitle   = document.getElementById('waHeaderSubtitle');
        var detailTitle      = document.getElementById('waDetailTitle');
        var typingBox        = document.getElementById('waTypingBox');
        var answerBody       = document.getElementById('waAnswerBody');
        var actionButton     = document.getElementById('waActionButton');
        var actionButtonText = document.getElementById('waActionButtonText');

        var waTargetPhone = '6282215840088';

        var faqData = {
            'biaya-promo': {
                title: 'Biaya & Promo Pelatihan',
                answer: '<p>Investasi pelatihan di Cleanique Academy berkisar antara <strong>Rp 1.850.000 hingga Rp 3.000.000</strong> sesuai jenis program praktikum yang dipilih.</p><p>Dapatkan promo potongan biaya spesial berlaku bagi yang melakukan registrasi bulan ini, terbatas hanya untuk 10 pendaftar pertama.</p>',
                btnText: 'Tanya Biaya & Promo',
                waMessage: 'Halo Cleanique Academy, saya ingin konsul rincian biaya dan promo pelatihan bulan ini.'
            },
            'jadwal-pelatihan': {
                title: 'Jadwal Pelatihan',
                answer: '<p>Pelatihan praktikum tatap muka diselenggarakan secara berkala setiap bulan pada akhir pekan (Sabtu & Minggu) mulai pukul 08.00 - 16.00 WIB.</p><p>Hubungi tim admin kami untuk mendapatkan kalender jadwal terdekat serta informasi kuota peserta yang masih tersedia.</p>',
                btnText: 'Cek Jadwal Terdekat',
                waMessage: 'Halo Cleanique Academy, saya ingin tanya jadwal pelatihan terdekat yang masih tersedia.'
            },
            'lokasi-pelatihan': {
                title: 'Lokasi Pelatihan',
                answer: '<p>Pelatihan tatap muka utama diselenggarakan di <strong>Laboratorium & Training Center Cleanique Academy (PT Indotech Berkah Abadi) di Yogyakarta</strong>.</p><p>Kami juga menyelenggarakan event roadshow pelatihan berkala di kota-kota besar Indonesia seperti Jakarta, Bandung, Surabaya, dan Pekanbaru.</p>',
                btnText: 'Tanya Lokasi Pelatihan',
                waMessage: 'Halo Cleanique Academy, saya ingin bertanya info lokasi pelatihan dan rekomendasi penginapan.'
            },
            'sertifikat-fasilitas': {
                title: 'Sertifikat & Fasilitas',
                answer: '<p>Setiap peserta mendapatkan sertifikat pelatihan resmi, modul cetak eksklusif, pemahaman jenis bahan kimia (alkali, asam, netral) beserta cara pengencerannya, studi kasus lapangan, dan mystery box.</p><p>Peserta juga dibimbing langsung oleh mentor berpengalaman sejak 2011.</p>',
                btnText: 'Tanya Fasilitas Lengkap',
                waMessage: 'Halo Cleanique Academy, saya ingin konsultasi fasilitas dan modul sertifikat pelatihan.'
            },
            'bisa-online': {
                title: 'Apakah Bisa Online?',
                answer: '<p>Pelatihan berfokus pada metode <strong>Tatap Muka (Offline)</strong> agar peserta dapat merasakan langsung tekstur, aroma, serta takaran bahan aktif kimia saat praktikum.</p><p>Namun untuk bimbingan awal dan sesi privat formulasi produk, kami juga menyediakan layanan konsultasi secara daring (online).</p>',
                btnText: 'Konsultasi Kelas Online',
                waMessage: 'Halo Cleanique Academy, saya ingin bertanya ketersediaan sesi online / privat.'
            },
            'cara-pendaftaran': {
                title: 'Cara Pendaftaran',
                answer: '<p>Cara pendaftaran sangat mudah: cukup mendaftar via WhatsApp, memilih jadwal kelas yang diinginkan, dan mengisi form konfirmasi identitas peserta.</p><p>Kuota kelas dibatasi hanya 10-15 peserta per angkatan untuk menjamin efektivitas praktikum.</p>',
                btnText: 'Daftar Pelatihan Sekarang',
                waMessage: 'Halo Cleanique Academy, saya ingin mendaftar pelatihan, mohon panduan caranya.'
            },
            'pertanyaan-lainnya': {
                title: 'Pertanyaan lainnya',
                answer: '<p>Memiliki pertanyaan khusus mengenai operasional laundry, bisnis produk pembersih rumah tangga (homecare), atau formulasi khusus?</p><p>Tim admin konsultan kami siap melayani dan memberikan jawaban langsung via WhatsApp.</p>',
                btnText: 'Chat Admin WhatsApp',
                waMessage: 'Halo Cleanique Academy, saya punya pertanyaan khusus seputar pelatihan.'
            }
        };

        window.openWaFaqModal = function(specificFaqId) {
            if (modalOverlay) {
                modalOverlay.classList.add('active');
                modalOverlay.setAttribute('aria-hidden', 'false');
                document.body.style.overflow = 'hidden';
                if (specificFaqId && faqData[specificFaqId]) {
                    showDetailView(specificFaqId);
                } else {
                    showListView();
                }
            }
        };

        window.closeWaFaqModal = function() {
            if (modalOverlay) {
                modalOverlay.classList.remove('active');
                modalOverlay.setAttribute('aria-hidden', 'true');
                document.body.style.overflow = '';
            }
        };

        function showListView() {
            if (listView && detailView && backBtn && headerSubtitle) {
                listView.style.display = 'block';
                detailView.style.display = 'none';
                backBtn.style.display = 'none';
                headerSubtitle.textContent = 'Asisten Pelatihan';
            }
        }

        function showDetailView(faqId) {
            var data = faqData[faqId];
            if (!data) return;

            if (listView && detailView && backBtn && headerSubtitle) {
                listView.style.display = 'none';
                detailView.style.display = 'block';
                backBtn.style.display = 'flex';

                headerSubtitle.textContent = 'Sedang mengetik...';
                
                typingBox.style.display = 'flex';
                answerBody.style.display = 'none';
                actionButton.style.display = 'none';

                detailTitle.textContent = data.title;

                setTimeout(function() {
                    headerSubtitle.textContent = 'Asisten Pelatihan';
                    typingBox.style.display = 'none';

                    answerBody.innerHTML = data.answer;
                    answerBody.style.display = 'block';

                    actionButtonText.textContent = data.btnText;
                    actionButton.href = 'https://api.whatsapp.com/send/?phone=' + waTargetPhone + '&text=' + encodeURIComponent(data.waMessage) + '&type=phone_number&app_absent=0';
                    actionButton.style.display = 'flex';
                }, 600);
            }
        }

        // Bind FAQ item clicks
        var faqItems = document.querySelectorAll('.wa-faq-item');
        faqItems.forEach(function(item) {
            item.addEventListener('click', function() {
                var faqId = this.getAttribute('data-faq-id');
                showDetailView(faqId);
            });
        });

        if (backBtn)  backBtn.addEventListener('click', showListView);
        if (closeBtn) closeBtn.addEventListener('click', window.closeWaFaqModal);
        if (modalOverlay) {
            modalOverlay.addEventListener('click', function(e) {
                if (e.target === modalOverlay) window.closeWaFaqModal();
            });
        }

        // Bind trigger strictly to floating WA button & floating bubble
        document.querySelectorAll('.btn-wa-float').forEach(function(btn) {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                window.openWaFaqModal();
            });
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initWaFaqModal);
    } else {
        initWaFaqModal();
    }
})();
</script>

