<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Enqueue WordPress Media Scripts in Admin for Kegiatan CPT
function cac_admin_enqueue_scripts( $hook ) {
    global $post;
    if ( in_array( $hook, array( 'post.php', 'post-new.php' ), true ) ) {
        if ( isset( $post ) && 'kegiatan' === $post->post_type ) {
            wp_enqueue_media();
        }
    }
}
add_action( 'admin_enqueue_scripts', 'cac_admin_enqueue_scripts' );

// Register Meta Boxes
function cac_add_custom_meta_boxes() {
    add_meta_box(
        'cac_kegiatan_details',
        'Detail & Media Kegiatan',
        'cac_kegiatan_meta_box_html',
        'kegiatan',
        'normal',
        'high'
    );

    add_meta_box(
        'cac_testimoni_details',
        'Detail Peserta Testimoni',
        'cac_testimoni_meta_box_html',
        'testimoni',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'cac_add_custom_meta_boxes' );

// 1. Kegiatan Meta Box HTML
function cac_kegiatan_meta_box_html( $post ) {
    wp_nonce_field( 'cac_save_kegiatan_meta', 'cac_kegiatan_nonce' );
    $tanggal       = get_post_meta( $post->ID, '_cac_tanggal_kegiatan', true );
    $lokasi        = get_post_meta( $post->ID, '_cac_lokasi_detail', true );
    $peserta       = get_post_meta( $post->ID, '_cac_jumlah_peserta', true );
    $materi        = get_post_meta( $post->ID, '_cac_materi_singkat', true );
    $video_url     = get_post_meta( $post->ID, '_cac_video_url', true );
    $testimoni_url = get_post_meta( $post->ID, '_cac_testimoni_video_url', true );
    $gallery_urls  = get_post_meta( $post->ID, '_cac_gallery_urls', true );
    ?>
    <div class="cac-metabox-wrapper" style="padding: 5px 0;">
        <p>
            <label for="cac_tanggal_kegiatan"><strong>Tanggal Kegiatan:</strong></label><br>
            <input type="text" id="cac_tanggal_kegiatan" name="cac_tanggal_kegiatan" value="<?php echo esc_attr( $tanggal ); ?>" class="widefat" placeholder="Contoh: 15-16 Februari 2026">
        </p>

        <p>
            <label for="cac_lokasi_detail"><strong>Detail Lokasi / Venue:</strong></label><br>
            <input type="text" id="cac_lokasi_detail" name="cac_lokasi_detail" value="<?php echo esc_attr( $lokasi ); ?>" class="widefat" placeholder="Contoh: Sleman, D.I. Yogyakarta">
        </p>

        <p>
            <label for="cac_jumlah_peserta"><strong>Jumlah Peserta:</strong></label><br>
            <input type="text" id="cac_jumlah_peserta" name="cac_jumlah_peserta" value="<?php echo esc_attr( $peserta ); ?>" class="widefat" placeholder="Contoh: 1 Peserta atau 35 Peserta">
        </p>

        <p>
            <label for="cac_materi_singkat"><strong>Materi Utama (pisahkan koma / baris baru):</strong></label><br>
            <textarea id="cac_materi_singkat" name="cac_materi_singkat" class="widefat" rows="3" placeholder="Deterjen Matic, Pelicin Setrika, Parfum Laundry"><?php echo esc_textarea( $materi ); ?></textarea>
        </p>

        <hr style="margin: 18px 0; border: 0; border-top: 1px solid #e2e8f0;">

        <!-- INPUT URL YOUTUBE -->
        <p>
            <label for="cac_video_url"><strong>Link Video YouTube (Dokumentasi / Praktikum Kegiatan):</strong></label><br>
            <input type="url" id="cac_video_url" name="cac_video_url" value="<?php echo esc_attr( $video_url ); ?>" class="widefat" placeholder="https://www.youtube.com/watch?v=TwVdCpcpOzo atau https://youtube.com/shorts/...">
            <span class="description" style="color: #64748b; font-size: 12px; display: block; margin-top: 4px;">
                Masukkan link video YouTube kegiatan atau rekaman praktikum (mendukung URL standar, link singkat youtu.be, maupun YouTube Shorts). Video ini otomatis diputar di modal lightbox dan halaman detail kegiatan.
            </span>
        </p>

        <p>
            <label for="cac_testimoni_video_url"><strong>Link Video Testimoni Peserta (YouTube - Opsional):</strong></label><br>
            <input type="url" id="cac_testimoni_video_url" name="cac_testimoni_video_url" value="<?php echo esc_attr( $testimoni_url ); ?>" class="widefat" placeholder="https://www.youtube.com/watch?v=...">
            <span class="description" style="color: #64748b; font-size: 12px; display: block; margin-top: 4px;">
                (Opsional) Masukkan link video YouTube ulasan / testimoni peserta mengenai pelatihan ini.
            </span>
        </p>

        <hr style="margin: 18px 0; border: 0; border-top: 1px solid #e2e8f0;">

        <!-- BULK IMAGE GALLERY UPLOADER -->
        <div>
            <label><strong>Galeri Foto Dokumentasi Kegiatan (Upload Bulk / File):</strong></label>
            <p style="margin: 6px 0 12px 0; color: #475569; font-size: 13px;">
                Unggah banyak foto langsung dari komputer atau pilih foto yang sudah ada di Media Library WordPress.
            </p>

            <div style="margin-bottom: 12px; display: flex; align-items: center; gap: 10px; flex-wrap: wrap;">
                <button type="button" class="button button-primary button-large" id="cac_btn_upload_gallery" style="display: inline-flex; align-items: center; gap: 6px;">
                    <span class="dashicons dashicons-format-gallery" style="line-height: 1.3;"></span>
                    <span>Unggah / Pilih Foto Galeri (Bisa Banyak Sekaligus)</span>
                </button>
                <button type="button" class="button button-secondary" id="cac_btn_clear_gallery" style="color: #b91c1c;">
                    Hapus Semua Foto
                </button>
                <span id="cac_gallery_count_badge" style="font-weight: 600; font-size: 12px; color: #0284c7; background: #e0f2fe; padding: 4px 10px; border-radius: 12px;">
                    0 foto terpilih
                </span>
            </div>

            <!-- Preview Container -->
            <div id="cac_gallery_preview_grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(110px, 1fr)); gap: 12px; padding: 14px; background: #f8fafc; border: 1px dashed #cbd5e1; border-radius: 8px; min-height: 100px;">
                <!-- Dynamically populated by JS -->
            </div>

            <!-- Fallback / Raw Textarea Sync -->
            <details style="margin-top: 12px; font-size: 12px;">
                <summary style="cursor: pointer; color: #64748b; font-weight: 600;">Lihat / Edit URL Gambar Manual (Teks)</summary>
                <div style="margin-top: 8px;">
                    <textarea id="cac_gallery_urls" name="cac_gallery_urls" class="widefat" rows="4" placeholder="https://domain.com/foto1.jpg&#10;https://domain.com/foto2.jpg"><?php echo esc_textarea( $gallery_urls ); ?></textarea>
                    <span class="description" style="color: #64748b;">Daftar URL foto dokumentasi (1 baris per URL). Terhubung otomatis dengan visual uploader di atas.</span>
                </div>
            </details>
        </div>
    </div>

    <!-- JavaScript Media Uploader Logic -->
    <style>
        .cac-gal-card {
            position: relative;
            height: 105px;
            border-radius: 6px;
            overflow: hidden;
            border: 1px solid #cbd5e1;
            background: #ffffff;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
            transition: transform 0.2s ease;
        }
        .cac-gal-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 6px rgba(0,0,0,0.15);
        }
        .cac-gal-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }
        .cac-gal-remove {
            position: absolute;
            top: 4px;
            right: 4px;
            width: 22px;
            height: 22px;
            background: rgba(220, 38, 38, 0.9);
            color: #ffffff;
            border: none;
            border-radius: 50%;
            font-size: 14px;
            line-height: 1;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.2s ease;
        }
        .cac-gal-remove:hover {
            background: #b91c1c;
        }
        .cac-gal-empty {
            grid-column: 1 / -1;
            text-align: center;
            color: #94a3b8;
            padding: 24px 10px;
            font-size: 13px;
        }
    </style>

    <script>
    (function() {
        var textarea = document.getElementById('cac_gallery_urls');
        var previewGrid = document.getElementById('cac_gallery_preview_grid');
        var countBadge = document.getElementById('cac_gallery_count_badge');
        var uploadBtn = document.getElementById('cac_btn_upload_gallery');
        var clearBtn = document.getElementById('cac_btn_clear_gallery');

        function getImages() {
            if (!textarea || !textarea.value) return [];
            var lines = textarea.value.split('\n');
            var urls = [];
            for (var i = 0; i < lines.length; i++) {
                var trimmed = lines[i].trim();
                if (trimmed !== '') {
                    urls.push(trimmed);
                }
            }
            return urls;
        }

        function setImages(urls) {
            if (textarea) {
                textarea.value = urls.join('\n');
            }
            renderPreview(urls);
        }

        function renderPreview(urls) {
            if (!previewGrid) return;
            urls = urls || getImages();
            previewGrid.innerHTML = '';

            if (countBadge) {
                countBadge.textContent = urls.length + ' foto terpilih';
            }

            if (urls.length === 0) {
                previewGrid.innerHTML = '<div class="cac-gal-empty"><span class="dashicons dashicons-format-gallery" style="font-size: 32px; width: 32px; height: 32px; opacity: 0.5; margin-bottom: 6px; display: inline-block;"></span><br>Belum ada foto galeri kegiatan.<br>Klik tombol <strong>"Unggah / Pilih Foto Galeri"</strong> di atas untuk menambah foto.</div>';
                return;
            }

            urls.forEach(function(url, idx) {
                var card = document.createElement('div');
                card.className = 'cac-gal-card';

                var img = document.createElement('img');
                img.src = url;
                img.alt = 'Galeri ' + (idx + 1);

                var removeBtn = document.createElement('button');
                removeBtn.type = 'button';
                removeBtn.className = 'cac-gal-remove';
                removeBtn.innerHTML = '&times;';
                removeBtn.title = 'Hapus foto ini';
                removeBtn.onclick = function(e) {
                    e.preventDefault();
                    var current = getImages();
                    current.splice(idx, 1);
                    setImages(current);
                };

                card.appendChild(img);
                card.appendChild(removeBtn);
                previewGrid.appendChild(card);
            });
        }

        // Initial render
        renderPreview();

        // Listen for manual textarea changes
        if (textarea) {
            textarea.addEventListener('input', function() {
                renderPreview();
            });
        }

        // WP Media Uploader Frame
        var mediaFrame;
        if (uploadBtn) {
            uploadBtn.addEventListener('click', function(e) {
                e.preventDefault();

                if (mediaFrame) {
                    mediaFrame.open();
                    return;
                }

                mediaFrame = wp.media({
                    title: 'Pilih atau Unggah Foto Galeri Kegiatan',
                    button: {
                        text: 'Tambahkan ke Galeri'
                    },
                    multiple: true,
                    library: {
                        type: 'image'
                    }
                });

                mediaFrame.on('select', function() {
                    var selection = mediaFrame.state().get('selection');
                    var currentUrls = getImages();

                    selection.each(function(attachment) {
                        var attData = attachment.toJSON();
                        var imgUrl = attData.url;
                        if (attData.sizes && attData.sizes.large) {
                            imgUrl = attData.sizes.large.url;
                        }
                        if (imgUrl && currentUrls.indexOf(imgUrl) === -1) {
                            currentUrls.push(imgUrl);
                        }
                    });

                    setImages(currentUrls);
                });

                mediaFrame.open();
            });
        }

        // Clear all button
        if (clearBtn) {
            clearBtn.addEventListener('click', function(e) {
                e.preventDefault();
                if (confirm('Yakin ingin menghapus semua foto dari galeri kegiatan ini?')) {
                    setImages([]);
                }
            });
        }
    })();
    </script>
    <?php
}

// 2. Testimoni Meta Box HTML
function cac_testimoni_meta_box_html( $post ) {
    wp_nonce_field( 'cac_save_testimoni_meta', 'cac_testimoni_nonce' );
    $profesi = get_post_meta( $post->ID, '_cac_profesi', true );
    $kota    = get_post_meta( $post->ID, '_cac_kota', true );
    $rating  = get_post_meta( $post->ID, '_cac_rating', true );
    ?>
    <p>
        <label for="cac_profesi"><strong>Profesi / Nama Usaha:</strong></label><br>
        <input type="text" id="cac_profesi" name="cac_profesi" value="<?php echo esc_attr( $profesi ); ?>" class="widefat" placeholder="Contoh: Owner Berkah Laundry">
    </p>
    <p>
        <label for="cac_kota"><strong>Kota Asal:</strong></label><br>
        <input type="text" id="cac_kota" name="cac_kota" value="<?php echo esc_attr( $kota ); ?>" class="widefat" placeholder="Contoh: Pekanbaru, Riau">
    </p>
    <p>
        <label for="cac_rating"><strong>Rating (1-5):</strong></label><br>
        <select id="cac_rating" name="cac_rating">
            <option value="5" <?php selected( $rating, '5' ); ?>>5 Star - Sangat Puas</option>
            <option value="4" <?php selected( $rating, '4' ); ?>>4 Star - Puas</option>
        </select>
    </p>
    <?php
}

// Save Meta Values
function cac_save_meta_boxes( $post_id ) {
    // Avoid autosave
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    // Kegiatan
    if ( isset( $_POST['cac_kegiatan_nonce'] ) && wp_verify_nonce( $_POST['cac_kegiatan_nonce'], 'cac_save_kegiatan_meta' ) ) {
        if ( isset( $_POST['cac_tanggal_kegiatan'] ) ) {
            update_post_meta( $post_id, '_cac_tanggal_kegiatan', sanitize_text_field( $_POST['cac_tanggal_kegiatan'] ) );
        }
        if ( isset( $_POST['cac_lokasi_detail'] ) ) {
            update_post_meta( $post_id, '_cac_lokasi_detail', sanitize_text_field( $_POST['cac_lokasi_detail'] ) );
        }
        if ( isset( $_POST['cac_jumlah_peserta'] ) ) {
            update_post_meta( $post_id, '_cac_jumlah_peserta', sanitize_text_field( $_POST['cac_jumlah_peserta'] ) );
        }
        if ( isset( $_POST['cac_materi_singkat'] ) ) {
            update_post_meta( $post_id, '_cac_materi_singkat', sanitize_textarea_field( $_POST['cac_materi_singkat'] ) );
        }
        if ( isset( $_POST['cac_video_url'] ) ) {
            update_post_meta( $post_id, '_cac_video_url', esc_url_raw( trim( $_POST['cac_video_url'] ) ) );
        }
        if ( isset( $_POST['cac_testimoni_video_url'] ) ) {
            update_post_meta( $post_id, '_cac_testimoni_video_url', esc_url_raw( trim( $_POST['cac_testimoni_video_url'] ) ) );
        }
        if ( isset( $_POST['cac_gallery_urls'] ) ) {
            update_post_meta( $post_id, '_cac_gallery_urls', sanitize_textarea_field( $_POST['cac_gallery_urls'] ) );
        }
    }

    // Testimoni
    if ( isset( $_POST['cac_testimoni_nonce'] ) && wp_verify_nonce( $_POST['cac_testimoni_nonce'], 'cac_save_testimoni_meta' ) ) {
        if ( isset( $_POST['cac_profesi'] ) ) {
            update_post_meta( $post_id, '_cac_profesi', sanitize_text_field( $_POST['cac_profesi'] ) );
        }
        if ( isset( $_POST['cac_kota'] ) ) {
            update_post_meta( $post_id, '_cac_kota', sanitize_text_field( $_POST['cac_kota'] ) );
        }
        if ( isset( $_POST['cac_rating'] ) ) {
            update_post_meta( $post_id, '_cac_rating', sanitize_text_field( $_POST['cac_rating'] ) );
        }
    }
}
add_action( 'save_post', 'cac_save_meta_boxes' );
