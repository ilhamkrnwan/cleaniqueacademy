<?php
/**
 * Pure Video Lightbox Modal
 * Cleanique Academy Theme
 */
?>
<div id="kegiatanDetailModal" class="kegiatan-modal-wrapper" style="display: none;" aria-hidden="true">
    <div class="kegiatan-modal-backdrop" onclick="cleaniqueCloseKegiatanModal()"></div>
    
    <!-- Floating Close Button -->
    <button type="button" class="kegiatan-modal-close" onclick="cleaniqueCloseKegiatanModal()" aria-label="Tutup Video">&times;</button>

    <div id="kegiatanModalCard" class="kegiatan-modal-card">
        <!-- Video Player Wrapper -->
        <div id="kegiatanModalVideoWrap" class="kegiatan-modal-media-wrap" style="display: none;">
            <iframe id="kegiatanModalIframe" src="" title="Video Pelatihan Cleanique Academy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>

        <!-- Image Fallback Wrapper -->
        <div id="kegiatanModalImgWrap" class="kegiatan-modal-media-wrap" style="display: none;">
            <img id="kegiatanModalImg" src="" alt="Dokumentasi Pelatihan" class="kegiatan-modal-img">
        </div>
    </div>
</div>

<style>
.kegiatan-modal-wrapper {
  position: fixed;
  inset: 0;
  z-index: 999999;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 1rem;
}
.kegiatan-modal-backdrop {
  position: absolute;
  inset: 0;
  background: rgba(15, 23, 42, 0.92);
  backdrop-filter: blur(10px);
  -webkit-backdrop-filter: blur(10px);
}
.kegiatan-modal-close {
  position: absolute;
  top: 1.5rem;
  right: 1.5rem;
  z-index: 1000000;
  background: rgba(255, 255, 255, 0.2);
  border: 1px solid rgba(255, 255, 255, 0.4);
  color: #ffffff;
  width: 44px;
  height: 44px;
  border-radius: 50%;
  font-size: 1.8rem;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.2s ease;
  line-height: 1;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
}
.kegiatan-modal-close:hover {
  background: rgba(239, 68, 68, 0.9);
  border-color: #ef4444;
  transform: scale(1.1);
}
.kegiatan-modal-card {
  position: relative;
  z-index: 2;
  width: 100%;
  max-width: 880px;
  background: #000000;
  border-radius: 16px;
  box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.7);
  overflow: hidden;
  display: flex;
  align-items: center;
  justify-content: center;
  max-height: 85vh;
  aspect-ratio: 16 / 9;
  animation: kegiatanModalPop 0.3s cubic-bezier(0.16, 1, 0.3, 1);
}
@keyframes kegiatanModalPop {
  from { opacity: 0; transform: scale(0.95); }
  to { opacity: 1; transform: scale(1); }
}
.kegiatan-modal-media-wrap {
  width: 100%;
  height: 100%;
  background: #000000;
  display: flex;
  align-items: center;
  justify-content: center;
}
.kegiatan-modal-media-wrap iframe {
  width: 100%;
  height: 100%;
  border: none;
}
.kegiatan-modal-img {
  width: 100%;
  height: 100%;
  object-fit: contain;
  display: block;
}
.kegiatan-card-play-btn {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 54px;
  height: 54px;
  background: rgba(11, 93, 143, 0.88);
  backdrop-filter: blur(6px);
  -webkit-backdrop-filter: blur(6px);
  border: 2px solid rgba(255, 255, 255, 0.9);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.35);
  transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
  z-index: 3;
}
.gallery-overlay-card:hover .kegiatan-card-play-btn {
  transform: translate(-50%, -50%) scale(1.12);
  background: #0284c7;
  border-color: #ffffff;
  box-shadow: 0 12px 30px rgba(2, 132, 199, 0.5);
}
.video-pill-tag {
  display: inline-flex;
  align-items: center;
  gap: 0.25rem;
  font-size: 0.68rem;
  font-weight: 800;
  letter-spacing: 0.05em;
  background: #dc2626;
  color: #ffffff;
  padding: 0.15rem 0.5rem;
  border-radius: 4px;
  text-transform: uppercase;
}
@media (max-width: 640px) {
  .kegiatan-modal-close {
    top: 1rem;
    right: 1rem;
    width: 38px;
    height: 38px;
    font-size: 1.5rem;
  }
}
</style>

<script>
function cleaniqueOpenKegiatanModal(cardEl) {
    if (!cardEl) return;
    var modal = document.getElementById('kegiatanDetailModal');
    if (!modal) return;

    var videoEmbed = cardEl.getAttribute('data-video-embed');
    var imgSrc     = cardEl.getAttribute('data-img-src');

    var cardBox    = document.getElementById('kegiatanModalCard');
    var iframe     = document.getElementById('kegiatanModalIframe');
    var videoWrap  = document.getElementById('kegiatanModalVideoWrap');
    var imgWrap    = document.getElementById('kegiatanModalImgWrap');
    var imgEl      = document.getElementById('kegiatanModalImg');

    if (videoEmbed && videoEmbed.trim() !== '') {
        var autoplaySrc = videoEmbed;
        if (autoplaySrc.indexOf('?') !== -1) {
            autoplaySrc += '&autoplay=1';
        } else {
            autoplaySrc += '?autoplay=1';
        }
        if (iframe) iframe.src = autoplaySrc;
        if (videoWrap) videoWrap.style.display = 'flex';
        if (imgWrap) imgWrap.style.display = 'none';

        if (cardBox) {
            if (videoEmbed.indexOf('/shorts/') !== -1) {
                cardBox.style.maxWidth = '440px';
                cardBox.style.aspectRatio = '9 / 16';
            } else {
                cardBox.style.maxWidth = '880px';
                cardBox.style.aspectRatio = '16 / 9';
            }
        }
    } else {
        if (iframe) iframe.src = '';
        if (videoWrap) videoWrap.style.display = 'none';
        if (imgEl && imgSrc) imgEl.src = imgSrc;
        if (imgWrap) imgWrap.style.display = 'flex';
        if (cardBox) {
            cardBox.style.maxWidth = '880px';
            cardBox.style.aspectRatio = '16 / 9';
        }
    }

    modal.style.display = 'flex';
    modal.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';
}

function cleaniqueCloseKegiatanModal() {
    var modal = document.getElementById('kegiatanDetailModal');
    var iframe = document.getElementById('kegiatanModalIframe');
    if (iframe) {
        iframe.src = ''; // Instantly stops video playback
    }
    if (modal) {
        modal.style.display = 'none';
        modal.setAttribute('aria-hidden', 'true');
    }
    document.body.style.overflow = '';
}

document.addEventListener('keydown', function(e) {
    var modal = document.getElementById('kegiatanDetailModal');
    if (modal && modal.style.display === 'flex') {
        if (e.key === 'Escape') {
            cleaniqueCloseKegiatanModal();
        }
    }
});
</script>
