<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Register Meta Boxes
function cac_add_custom_meta_boxes() {
    add_meta_box(
        'cac_kegiatan_details',
        'Detail Kegiatan',
        'cac_kegiatan_meta_box_html',
        'kegiatan',
        'normal',
        'high'
    );

    add_meta_box(
        'cac_program_details',
        'Detail Program Pelatihan',
        'cac_program_meta_box_html',
        'program',
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
    $tanggal = get_post_meta( $post->ID, '_cac_tanggal_kegiatan', true );
    $lokasi = get_post_meta( $post->ID, '_cac_lokasi_detail', true );
    $peserta = get_post_meta( $post->ID, '_cac_jumlah_peserta', true );
    $materi = get_post_meta( $post->ID, '_cac_materi_singkat', true );
    ?>
    <p>
        <label for="cac_tanggal_kegiatan"><strong>Tanggal Kegiatan:</strong></label><br>
        <input type="text" id="cac_tanggal_kegiatan" name="cac_tanggal_kegiatan" value="<?php echo esc_attr( $tanggal ); ?>" class="widefat" placeholder="Contoh: 15-16 Februari 2026">
    </p>
    <p>
        <label for="cac_lokasi_detail"><strong>Detail Lokasi / Venue:</strong></label><br>
        <input type="text" id="cac_lokasi_detail" name="cac_lokasi_detail" value="<?php echo esc_attr( $lokasi ); ?>" class="widefat" placeholder="Contoh: Hotel Grand Rohan, Yogyakarta">
    </p>
    <p>
        <label for="cac_jumlah_peserta"><strong>Jumlah Peserta:</strong></label><br>
        <input type="text" id="cac_jumlah_peserta" name="cac_jumlah_peserta" value="<?php echo esc_attr( $peserta ); ?>" class="widefat" placeholder="Contoh: 35 Peserta">
    </p>
    <p>
        <label for="cac_materi_singkat"><strong>Materi Utama (pisahkan koma):</strong></label><br>
        <textarea id="cac_materi_singkat" name="cac_materi_singkat" class="widefat" rows="3" placeholder="Formulasi Deterjen, Teknik Spoting Stain, Operasional Laundry"><?php echo esc_textarea( $materi ); ?></textarea>
    </p>
    <p>
        <label for="cac_gallery_urls"><strong>Galeri Foto Dokumentasi (URL Gambar, pisahkan baris baru):</strong></label><br>
        <textarea id="cac_gallery_urls" name="cac_gallery_urls" class="widefat" rows="4" placeholder="https://domain.com/foto1.jpg&#10;https://domain.com/foto2.jpg"><?php echo esc_textarea( get_post_meta( $post->ID, '_cac_gallery_urls', true ) ); ?></textarea>
        <span class="description">Masukkan URL foto dokumentasi kegiatan (1 URL per baris). Foto ini akan ditampilkan sebagai grid galeri interaktif dengan lightbox.</span>
    </p>
    <?php
}

// 2. Program Meta Box HTML
function cac_program_meta_box_html( $post ) {
    wp_nonce_field( 'cac_save_program_meta', 'cac_program_nonce' );
    $target = get_post_meta( $post->ID, '_cac_target_peserta', true );
    $durasi = get_post_meta( $post->ID, '_cac_durasi_program', true );
    $harga = get_post_meta( $post->ID, '_cac_harga_program', true );
    $fasilitas = get_post_meta( $post->ID, '_cac_fasilitas_program', true );
    ?>
    <p>
        <label for="cac_target_peserta"><strong>Target Peserta:</strong></label><br>
        <input type="text" id="cac_target_peserta" name="cac_target_peserta" value="<?php echo esc_attr( $target ); ?>" class="widefat" placeholder="Contoh: Pemilik Laundry, Pengusaha Kimia Homecare, Pemula">
    </p>
    <p>
        <label for="cac_durasi_program"><strong>Durasi Pelatihan:</strong></label><br>
        <input type="text" id="cac_durasi_program" name="cac_durasi_program" value="<?php echo esc_attr( $durasi ); ?>" class="widefat" placeholder="Contoh: 2 Hari (Full Day Intensive)">
    </p>
    <p>
        <label for="cac_harga_program"><strong>Informasi Biaya / Investasi:</strong></label><br>
        <input type="text" id="cac_harga_program" name="cac_harga_program" value="<?php echo esc_attr( $harga ); ?>" class="widefat" placeholder="Contoh: Rp 2.500.000 / Peserta">
    </p>
    <p>
        <label for="cac_fasilitas_program"><strong>Fasilitas yang Didapat:</strong></label><br>
        <textarea id="cac_fasilitas_program" name="cac_fasilitas_program" class="widefat" rows="3" placeholder="Modul Praktikum, Bahan Formula Kimia, Sertifikat, Konsultasi Lanjutan"><?php echo esc_textarea( $fasilitas ); ?></textarea>
    </p>
    <?php
}

// 3. Testimoni Meta Box HTML
function cac_testimoni_meta_box_html( $post ) {
    wp_nonce_field( 'cac_save_testimoni_meta', 'cac_testimoni_nonce' );
    $profesi = get_post_meta( $post->ID, '_cac_profesi', true );
    $kota = get_post_meta( $post->ID, '_cac_kota', true );
    $rating = get_post_meta( $post->ID, '_cac_rating', true );
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
    // Kegiatan
    if ( isset( $_POST['cac_kegiatan_nonce'] ) && wp_verify_nonce( $_POST['cac_kegiatan_nonce'], 'cac_save_kegiatan_meta' ) ) {
        if ( isset( $_POST['cac_tanggal_kegiatan'] ) ) update_post_meta( $post_id, '_cac_tanggal_kegiatan', sanitize_text_field( $_POST['cac_tanggal_kegiatan'] ) );
        if ( isset( $_POST['cac_lokasi_detail'] ) ) update_post_meta( $post_id, '_cac_lokasi_detail', sanitize_text_field( $_POST['cac_lokasi_detail'] ) );
        if ( isset( $_POST['cac_jumlah_peserta'] ) ) update_post_meta( $post_id, '_cac_jumlah_peserta', sanitize_text_field( $_POST['cac_jumlah_peserta'] ) );
        if ( isset( $_POST['cac_materi_singkat'] ) ) update_post_meta( $post_id, '_cac_materi_singkat', sanitize_textarea_field( $_POST['cac_materi_singkat'] ) );
        if ( isset( $_POST['cac_gallery_urls'] ) ) update_post_meta( $post_id, '_cac_gallery_urls', sanitize_textarea_field( $_POST['cac_gallery_urls'] ) );
    }

    // Program
    if ( isset( $_POST['cac_program_nonce'] ) && wp_verify_nonce( $_POST['cac_program_nonce'], 'cac_save_program_meta' ) ) {
        if ( isset( $_POST['cac_target_peserta'] ) ) update_post_meta( $post_id, '_cac_target_peserta', sanitize_text_field( $_POST['cac_target_peserta'] ) );
        if ( isset( $_POST['cac_durasi_program'] ) ) update_post_meta( $post_id, '_cac_durasi_program', sanitize_text_field( $_POST['cac_durasi_program'] ) );
        if ( isset( $_POST['cac_harga_program'] ) ) update_post_meta( $post_id, '_cac_harga_program', sanitize_text_field( $_POST['cac_harga_program'] ) );
        if ( isset( $_POST['cac_fasilitas_program'] ) ) update_post_meta( $post_id, '_cac_fasilitas_program', sanitize_textarea_field( $_POST['cac_fasilitas_program'] ) );
    }

    // Testimoni
    if ( isset( $_POST['cac_testimoni_nonce'] ) && wp_verify_nonce( $_POST['cac_testimoni_nonce'], 'cac_save_testimoni_meta' ) ) {
        if ( isset( $_POST['cac_profesi'] ) ) update_post_meta( $post_id, '_cac_profesi', sanitize_text_field( $_POST['cac_profesi'] ) );
        if ( isset( $_POST['cac_kota'] ) ) update_post_meta( $post_id, '_cac_kota', sanitize_text_field( $_POST['cac_kota'] ) );
        if ( isset( $_POST['cac_rating'] ) ) update_post_meta( $post_id, '_cac_rating', sanitize_text_field( $_POST['cac_rating'] ) );
    }
}
add_action( 'save_post', 'cac_save_meta_boxes' );
