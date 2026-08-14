<?php
/**
 * Master Content & Page Seeder for Cleanique Academy
 * Usage CLI: php seed_all_data.php
 */

if ( ! defined( 'FS_METHOD' ) ) {
    define( 'FS_METHOD', 'direct' );
}
if ( ! defined( 'WP_USE_THEMES' ) ) {
    define( 'WP_USE_THEMES', false );
}

// Find wp-load.php dynamically
$possible_paths = array(
    __DIR__ . '/../../../../wp-load.php',
    'c:/laragon/www/cleaniqueacademy/wp-load.php',
    '/home/cleaniqueacademy.com/public_html/wp-load.php',
);

$loaded = false;
foreach ($possible_paths as $path) {
    if (file_exists($path)) {
        require_once $path;
        $loaded = true;
        break;
    }
}

if (!$loaded) {
    die("Error: wp-load.php not found.\n");
}

// Prevent FTP filesystem errors and suspend cache invalidation during CLI seeding
add_filter( 'filesystem_method', function() { return 'direct'; } );
if ( function_exists( 'wp_suspend_cache_invalidation' ) ) {
    wp_suspend_cache_invalidation( true );
}

require_once ABSPATH . 'wp-admin/includes/taxonomy.php';

echo "===============================================\n";
echo "  CLEANIQUE ACADEMY AUTOMATIC CONTENT SEEDER  \n";
echo "===============================================\n\n";

// 1. CREATE ALL STATIC PAGES WITH CUSTOM TEMPLATES
$pages = array(
    array(
        'title'    => 'Beranda',
        'slug'     => 'beranda',
        'template' => 'front-page.php',
        'content'  => 'Selamat datang di Cleanique Academy.',
        'is_home'  => true,
    ),
    array(
        'title'    => 'Artikel & Edukasi',
        'slug'     => 'artikel',
        'template' => 'page-artikel.php',
        'content'  => 'Pusat informasi artikel, tips formulasi kimia, dan panduan bisnis kebersihan.',
        'is_blog'  => true,
    ),
    array(
        'title'    => 'Galeri & Dokumentasi Event',
        'slug'     => 'dokumentasi-event',
        'template' => 'page-dokumentasi-event.php',
        'content'  => 'Rekam foto kegiatan pelatihan kimia tatap muka di berbagai kota di Indonesia.',
    ),
    array(
        'title'    => 'Program Pelatihan',
        'slug'     => 'program-pelatihan',
        'template' => 'page-program-pelatihan.php',
        'content'  => 'Katalog program pelatihan kimia kebersihan laundry, homecare, dan housekeeping.',
    ),
    array(
        'title'    => 'Tentang Kami',
        'slug'     => 'tentang-kami',
        'template' => 'page-tentang-kami.php',
        'content'  => 'Profil resmi PT Indotech Berkah Abadi dan pusat edukasi Cleanique Academy.',
    ),
    array(
        'title'    => 'FAQ',
        'slug'     => 'faq',
        'template' => 'page-faq.php',
        'content'  => 'Pertanyaan umum seputar jadwal, fasilitas, dan bimbingan alumni.',
    ),
    array(
        'title'    => 'Kontak',
        'slug'     => 'kontak',
        'template' => 'page-kontak.php',
        'content'  => 'Hubungi konsultan resmi Cleanique Academy via WhatsApp dan email resmi.',
    ),
    array(
        'title'    => 'Kebijakan Privasi',
        'slug'     => 'kebijakan-privasi',
        'template' => 'page-kebijakan-privasi.php',
        'content'  => 'Kebijakan perlindungan data pribadi pengunjung dan alumni Cleanique Academy.',
    ),
    array(
        'title'    => 'Syarat & Ketentuan',
        'slug'     => 'syarat-ketentuan',
        'template' => 'page-syarat-ketentuan.php',
        'content'  => 'Ketentuan pendaftaran, kepemilikan resep formulasi, dan aturan pelatihan.',
    ),
);

$home_id = 0;
$blog_id = 0;

foreach ($pages as $p) {
    $existing = get_page_by_path($p['slug']);
    if (!$existing) {
        $existing = get_page_by_title($p['title']);
    }

    if (!$existing) {
        $page_id = wp_insert_post(array(
            'post_title'   => $p['title'],
            'post_name'    => $p['slug'],
            'post_content' => $p['content'],
            'post_status'  => 'publish',
            'post_type'    => 'page',
        ));
        if ($p['template']) {
            update_post_meta($page_id, '_wp_page_template', $p['template']);
        }
        echo "[+] Page Created: {$p['title']} (ID: {$page_id})\n";
    } else {
        $page_id = $existing->ID;
        if ($p['template']) {
            update_post_meta($page_id, '_wp_page_template', $p['template']);
        }
        echo "[=] Page Exists: {$p['title']} (ID: {$page_id})\n";
    }

    if (!empty($p['is_home'])) {
        $home_id = $page_id;
    }
    if (!empty($p['is_blog'])) {
        $blog_id = $page_id;
    }
}

// Update Reading Settings & Permalinks
if ($home_id && $blog_id) {
    update_option('show_on_front', 'page');
    update_option('page_on_front', $home_id);
    update_option('page_for_posts', $blog_id);
    echo "[✓] Reading Settings set: Homepage -> Beranda, Posts -> Artikel\n";
}

update_option('permalink_structure', '/%postname%/');
flush_rewrite_rules();
echo "[✓] Permalinks set to /%postname%/\n\n";

// 2. CREATE SAMPLE PROGRAM CPT ITEMS
$programs = array(
    array(
        'title'     => 'Pelatihan Formulasi Chemical Laundry Intensive',
        'durasi'    => '1 Hari Intensive',
        'harga'     => 'Rp 1.500.000 / Peserta',
        'target'    => 'Pengusaha Laundry Kiloan & Komersial',
        'fasilitas' => "Modul Resep Formulasi Lengkap\nBahan Kimia Praktikum & Sampel Hasil\nSertifikat Kelulusan\nBimbingan Konsultasi Alumni Gratis",
        'content'   => '<p>Program pelatihan tatap muka dirancang khusus untuk Anda yang ingin memproduksi deterjen cair, softener, dan parfum laundry secara mandiri dengan HPP rendah dan kualitas standar pabrik.</p>',
    ),
    array(
        'title'     => 'Pelatihan Industri Homecare & Household Chemical',
        'durasi'    => '2 Hari Intensive',
        'harga'     => 'Rp 2.500.000 / Peserta',
        'target'    => 'Calon Produsen Sabun & Produk Kebersihan Rumah Tangga',
        'fasilitas' => "Buku Resep Formulasi 10+ Produk\nPeralatan & Bahan Praktikum\nSertifikat Kelulusan\nPanduan Perizinan PKRT Kemenkes",
        'content'   => '<p>Kuasai formulasi sabun cuci piring, pembersih lantai, pembersih kaca, pembersih keramik kamar mandi, hingga hand sanitizer gel/spray dengan standar uji laboratorium.</p>',
    ),
    array(
        'title'     => 'Pelatihan Formulasi Autocare & Shampo Mobil/Motor',
        'durasi'    => '1 Hari Intensive',
        'harga'     => 'Rp 1.800.000 / Peserta',
        'target'    => 'Pengusaha Salon Mobil, Carwash & Detailer',
        'fasilitas' => "Resep Formulasi Shampo Touchless & Semi-Coating\nPeralatan Praktikum\nSertifikat Kelulusan\nPanduan Bisnis Suplier Carwash",
        'content'   => '<p>Belajar meracik shampo mobil busa salju, semir ban tahan lama, pengilap bodi mobil (detailer spray), dan pembersih interior kulit/bludru.</p>',
    ),
    array(
        'title'     => 'Pelatihan Formulasi Housekeeping & Sanitasi Disinfektan',
        'durasi'    => '1 Hari Intensive',
        'harga'     => 'Rp 2.000.000 / Peserta',
        'target'    => 'Supplier Hotel, Rumah Sakit, & Restaurant (HOREKA)',
        'fasilitas' => "Resep Formulasi Disinfektan & Karbol Sereh\nBahan Praktikum\nSertifikat Kelulusan\nBimbingan Tender HOREKA",
        'content'   => '<p>Program khusus penyedia produk sanitasi komersial untuk kebutuhan rumah sakit, hotel, dan fasilitas umum sesuai standar baku mutu Kemenkes.</p>',
    ),
);

foreach ($programs as $prog) {
    $existing = get_page_by_title($prog['title'], OBJECT, 'program');
    if (!$existing) {
        $pid = wp_insert_post(array(
            'post_title'   => $prog['title'],
            'post_content' => $prog['content'],
            'post_status'  => 'publish',
            'post_type'    => 'program',
        ));
        update_post_meta($pid, '_cac_durasi_program', $prog['durasi']);
        update_post_meta($pid, '_cac_harga_program', $prog['harga']);
        update_post_meta($pid, '_cac_target_peserta', $prog['target']);
        update_post_meta($pid, '_cac_fasilitas_program', $prog['fasilitas']);
        echo "[+] Program Created: {$prog['title']} (ID: {$pid})\n";
    } else {
        echo "[=] Program Exists: {$prog['title']}\n";
    }
}
echo "\n";

// 3. CREATE SAMPLE KEGIATAN / GALERI EVENT CPT ITEMS
$kegiatan_list = array(
    array(
        'title'   => 'Pelatihan Formulasi Kimia Tatap Muka Yogyakarta',
        'tanggal' => '12 Juli 2026',
        'lokasi'  => 'Yogyakarta, DIY',
        'peserta' => '25 Peserta',
        'materi'  => 'Praktikum Deterjen Cair, Softener Sekali Bilas, dan Parfum Laundry Fiksatif.',
        'content' => '<p>Pelaksanaan kelas praktikum tatap muka batch Yogyakarta berlangsung antusias. Peserta secara langsung meracik bahan kimia, melakukan uji viskositas, dan menguji ketahanan aroma parfum.</p>',
    ),
    array(
        'title'   => 'Workshop Praktikum Chemical Laundry Komersial Jakarta',
        'tanggal' => '28 Juni 2026',
        'lokasi'  => 'Jakarta Selatan, DKI Jakarta',
        'peserta' => '30 Peserta',
        'materi'  => 'Formulasi Deterjen Kiloan, Alkali Booster, dan Pembersih Noda Membandel.',
        'content' => '<p>Workshop intensif bersama pengusaha laundry se-Jabodetabek membedah rahasia formulasi chemical laundry hemat biaya produksi namun ramah lingkungan.</p>',
    ),
    array(
        'title'   => 'Pelatihan Industri Homecare & Deterjen Surabaya',
        'tanggal' => '15 Mei 2026',
        'lokasi'  => 'Surabaya, Jawa Timur',
        'peserta' => '20 Peserta',
        'materi'  => 'Formulasi Sabun Cuci Piring Busa Melimpah & Pembersih Keramik Kamar Mandi.',
        'content' => '<p>Dokumentasi praktikum pembuatan produk rumah tangga siap edar di Surabaya. Seluruh peserta mempraktikkan pengujian derajat keasaman (pH) dan pengemasan produk.</p>',
    ),
    array(
        'title'   => 'Praktikum Formulasi Chemical & Parfum Laundry Solo',
        'tanggal' => '04 April 2026',
        'lokasi'  => 'Surakarta (Solo), Jawa Tengah',
        'peserta' => '18 Peserta',
        'materi'  => 'Teknik Pengikatan Aroma Fiksatif Parfum & Deterjen Rendah Busa Mesin Front Load.',
        'content' => '<p>Kegiatan bimbingan praktikum skala kecil untuk memastikan setiap peserta menguasai teknik penimbangan presisi dan proses emulsifikasi sabun cair.</p>',
    ),
    array(
        'title'   => 'Workshop Formulasi Sabun Cuci Piring & Karbol Bandung',
        'tanggal' => '22 Maret 2026',
        'lokasi'  => 'Bandung, Jawa Barat',
        'peserta' => '22 Peserta',
        'materi'  => 'Formulasi Karbol Sereh Alami, Disinfektan Sanitasi, dan Sabun Piring Busa Kental.',
        'content' => '<p>Suasana kelas praktikum interaktif di Bandung. Peserta dibimbing langsung oleh instruktur dalam membuat pembersih lantai berbasis minyak sereh alami.</p>',
    ),
    array(
        'title'   => 'Event Pelatihan Praktikum Kimia Kebersihan Medan',
        'tanggal' => '10 Februari 2026',
        'lokasi'  => 'Medan, Sumatera Utara',
        'peserta' => '28 Peserta',
        'materi'  => 'Strategi Usaha Suplier Chemical, Perizinan PKRT, dan Formulasi Lengkap.',
        'content' => '<p>Dokumentasi event pelatihan luar pulau Jawa di Kota Medan. Penyerahan sertifikat kelulusan dan sesi konsultasi strategi bisnis pemasaran produk lokal.</p>',
    ),
);

foreach ($kegiatan_list as $keg) {
    $existing = get_page_by_title($keg['title'], OBJECT, 'kegiatan');
    if (!$existing) {
        $kid = wp_insert_post(array(
            'post_title'   => $keg['title'],
            'post_content' => $keg['content'],
            'post_status'  => 'publish',
            'post_type'    => 'kegiatan',
        ));
        update_post_meta($kid, '_cac_tanggal_kegiatan', $keg['tanggal']);
        update_post_meta($kid, '_cac_lokasi_detail', $keg['lokasi']);
        update_post_meta($kid, '_cac_jumlah_peserta', $keg['peserta']);
        update_post_meta($kid, '_cac_materi_singkat', $keg['materi']);
        echo "[+] Kegiatan Created: {$keg['title']} (ID: {$kid})\n";
    } else {
        echo "[=] Kegiatan Exists: {$keg['title']}\n";
    }
}
echo "\n";

// 4. CREATE SAMPLE ARTICLES / POSTS
$articles = array(
    array(
        'title'    => 'Panduan Formulasi Deterjen Cair Laundry Industri untuk Pemula',
        'category' => 'Edukasi Kimia',
        'content'  => '<h2>Pengenalan Surfaktan & Emulsi Deterjen</h2><p>Deterjen cair merupakan salah satu produk kebersihan dengan tingkat pemakaian tertinggi di industri laundry maupun rumah tangga. Untuk membuat deterjen cair berkualitas tinggi, penentuan jenis surfaktan primer dan sekunder sangat menentukan daya angkat noda dan busa.</p><h2>Bahan-Bahan Utama Formulasi Deterjen</h2><p>Bahan utama yang dibutuhkan meliputi LABS/Texapon sebagai surfaktan pelarut lemak, Sodium Sulfat sebagai pembangun viskositas, Fixative pengikat aroma, serta EDTA sebagai pengkelat kesadahan air.</p><h2>Langkah Praktikum Meracik Deterjen</h2><p>Pelajari takaran persentase aman dan urutan pencampuran zat aditif agar larutan homogen, stabil, dan tidak mengalami pengendapan saat disimpan dalam kemasan botol.</p>',
    ),
    array(
        'title'    => 'Cara Mengatasi Sabun Cair Mengendap atau Memisah Saat Produksi',
        'category' => 'Edukasi Kimia',
        'content'  => '<h2>Penyebab Utama Emulsi Sabun Memisah</h2><p>Proses emulsi yang gagal biasanya disebabkan oleh ketidakseimbangan rasio air dan minyak, suhu pencampuran yang terlalu panas, atau penggunaan garam pengental secara berlebihan.</p><h2>Solusi Troubleshooting di Lapangan</h2><p>Gunakan pengadukan dengan kecepatan konstan, atur pH larutan pada rentang 7-8, dan tambahkan agen pemantap emulsi seperti CAPB untuk menjaga kestabilan larutan.</p>',
    ),
    array(
        'title'    => 'Rahasia Formulasi Parfum Laundry Tahan Lama dengan Fiksatif',
        'category' => 'Formulasi Produk',
        'content'  => '<h2>Memahami Komposisi Aroma Parfum</h2><p>Parfum berkualitas terdiri dari Top Notes yang muncul di awal, Middle Notes sebagai karakter utama, dan Base Notes yang bertahan lama di serat kain.</p><h2>Fungsi Fiksatif Pengikat Aroma</h2><p>Penggunaan fiksatif berkualitas tinggi mencegah evaporasi alkohol terlalu cepat, sehingga keharuman pakaian terjaga hingga 30 hari dalam plastik laundry.</p>',
    ),
    array(
        'title'    => 'Teknik Pembuatan Sabun Cuci Piring Ekstra Busa & Lembut di Tangan',
        'category' => 'Formulasi Produk',
        'content'  => '<h2>Komposisi Formula Sabun Cuci Piring</h2><p>Kombinasi asam sulfonat dan NaCl menghasilkan viskositas kental dengan karakter busa melimpah namun tetap mudah dibilas tanpa meninggalkan residu.</p><h2>Penambahan Bahan Pelindung Kulit (Emollient)</h2><p>Tambahkan Gliserin atau Aloe Vera extract untuk menjaga kelembapan kulit tangan pengguna selama mencuci peralatan dapur.</p>',
    ),
    array(
        'title'    => 'Panduan Menghitung HPP & Strategi Penetapan Harga Jual Chemical',
        'category' => 'Tips Bisnis',
        'content'  => '<h2>Pengertian HPP dalam Industri Chemical</h2><p>HPP menghitung modal bersih per liter produk, meliputi biaya bahan baku, botol kemasan, stiker label, serta alokasi penyusutan alat dan listrik.</p><h2>Menentukan Margin Keuntungan Komersial</h2><p>Dapatkan persentase profit margin yang ideal untuk pasar B2B laundry komersial maupun B2C eceran rumah tangga.</p>',
    ),
    array(
        'title'    => 'Syarat & Alur Pendaftaran Izin Edar PKRT Kemenkes RI',
        'category' => 'Tips Bisnis',
        'content'  => '<h2>Pentingnya Izin Edar PKRT</h2><p>Izin Edar Perbekalan Kesehatan Rumah Tangga (PKRT) menjamin keabsahan dan keamanan produk pembersih Anda saat dijual secara luas di supermarket dan marketplace.</p><h2>Tahapan Pengurusan Berkas & Uji Stabilitas</h2><p>Persiapkan dokumen formula, lembar MSDS bahan, serta sampel uji laboratorium terakreditasi.</p>',
    ),
);

foreach ($articles as $art) {
    $existing = get_page_by_title($art['title'], OBJECT, 'post');
    if (!$existing) {
        $cat_obj = get_category_by_slug(sanitize_title($art['category']));
        $cat_id  = $cat_obj ? $cat_obj->term_id : wp_create_category($art['category']);

        $post_id = wp_insert_post(array(
            'post_title'    => $art['title'],
            'post_content'  => $art['content'],
            'post_status'   => 'publish',
            'post_type'     => 'post',
            'post_category' => array($cat_id),
            'post_excerpt'  => wp_strip_all_tags(mb_substr($art['content'], 0, 140)) . '...',
        ));
        echo "[+] Article Created: {$art['title']} (ID: {$post_id})\n";
    } else {
        echo "[=] Article Exists: {$art['title']}\n";
    }
}

echo "\n===============================================\n";
echo "  ALL DATA & PAGES INSERTED SUCCESSFULLY! 🎉  \n";
echo "===============================================\n";
