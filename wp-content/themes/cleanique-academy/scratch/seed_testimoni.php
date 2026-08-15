<?php
/**
 * Testimonial Seeder for Cleanique Academy
 * Usage CLI: php wp-content/themes/cleanique-academy/scratch/seed_testimoni.php
 * Or on VPS (Docker/Native): docker exec -it cleaniqueacademy_app php /var/www/html/wp-content/themes/cleanique-academy/scratch/seed_testimoni.php
 */

if ( ! defined( 'FS_METHOD' ) ) {
    define( 'FS_METHOD', 'direct' );
}
if ( ! defined( 'WP_USE_THEMES' ) ) {
    define( 'WP_USE_THEMES', false );
}

$possible_paths = array(
    __DIR__ . '/../../../../wp-load.php',
    __DIR__ . '/../../../wp-load.php',
    'c:/laragon/www/cleaniqueacademy/wp-load.php',
    '/var/www/html/wp-load.php',
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

add_filter( 'filesystem_method', function() { return 'direct'; } );
if ( function_exists( 'wp_suspend_cache_invalidation' ) ) {
    wp_suspend_cache_invalidation( true );
}

echo "===============================================\n";
echo "  CLEANIQUE ACADEMY TESTIMONIAL SEEDER         \n";
echo "===============================================\n\n";

$testimonials = array(
    array(
        'title'   => 'Bpk. Rahmat Hidayat',
        'profesi' => 'Owner Fresh Laundry & Chemical',
        'kota'    => 'Surabaya',
        'rating'  => '5',
        'content' => 'Materi formulasi deterjen dan fiksatif parfum dari Cleanique Academy sangat praktis. Sekarang usaha laundry saya bisa buat chemical sendiri dan menekan HPP hingga 40%! Sukses terus untuk tim Cleanique.',
    ),
    array(
        'title'   => 'Ibu Hesty Wahyuni',
        'profesi' => 'Owner Sparkling Homecare',
        'kota'    => 'Bandung',
        'rating'  => '5',
        'content' => 'Awalnya ragu bisa buat sabun cuci piring dan karbol sendiri. Setelah ikutan kelas tatap muka, instruktur membimbing dari nol sampai paham derajat pH dan emulsi. Produk saya sekarang sudah punya puluhan langganan.',
    ),
    array(
        'title'   => 'Ahmad Fauzi, S.T.',
        'profesi' => 'General Manager Housekeeping Hotel',
        'kota'    => 'Jakarta Selatan',
        'rating'  => '5',
        'content' => 'Modul pelatihan standarisasi kebersihan dan formulasi chemical komersial sangat berbobot. Staf kami jadi paham cara menghilangkan noda bandel tanpa merusak kain linen hotel.',
    ),
    array(
        'title'   => 'Bpk. Deni Kurniawan',
        'profesi' => 'Distributor Chemical Kebersihan',
        'kota'    => 'Medan',
        'rating'  => '5',
        'content' => 'Bimbingan pasca pelatihan luar biasa aktif! Konsultasi perizinan PKRT dan konsultasi resep chemical selalu direspon cepat oleh tim Cleanique. Bisnis maklon chemical saya berkembang pesat.',
    ),
    array(
        'title'   => 'Hj. Ratna Sarumpaet',
        'profesi' => 'Pengusaha Laundry Kiloan & Satuan',
        'kota'    => 'Yogyakarta',
        'rating'  => '5',
        'content' => 'Parfum fiksatif racikan hasil racikan praktikum aromanya tahan sampai 1 bulan di lemari pelanggan. Pelanggan laundry pada repeat order karena wangi khas yang tidak ada di pasaran.',
    ),
    array(
        'title'   => 'Budi Santoso',
        'profesi' => 'Praktisi Cleaning Service Industri',
        'kota'    => 'Semarang',
        'rating'  => '5',
        'content' => 'Pelatihan ini membuka wawasan saya bahwa membuat pembersih lantai & karbol sereh kualitas tinggi tidak serumit yang dibayangkan. Modal kecil hasil maksimal!',
    ),
    array(
        'title'   => 'Dewi Lestari',
        'profesi' => 'Owner Royale Laundry & Dry Clean',
        'kota'    => 'Denpasar',
        'rating'  => '5',
        'content' => 'Sangat direkomendasikan bagi pemilik bisnis kebersihan. Selain belajar formulasi kimia, dibekali juga dengan hitung-hitungan HPP dan strategi pemasaran B2B.',
    ),
    array(
        'title'   => 'Eko Prasetyo',
        'profesi' => 'Produsen Chemical Homecare',
        'kota'    => 'Malang',
        'rating'  => '5',
        'content' => 'Dulu sering gagal saat eksperimen pengentalan sabun cair. Setelah belajar teknik pencampuran dan fungsi surfaktan di Cleanique Academy, produksi sabun cair selalu stabil.',
    ),
    array(
        'title'   => 'Riki Subagja',
        'profesi' => 'Owner Clean & Fresh Laundry',
        'kota'    => 'Makassar',
        'rating'  => '5',
        'content' => 'Investasi pelatihan terbaik untuk kemajuan bisnis. Sekarang tidak bergantung lagi pada supplier chemical mahal karena bisa produksi sendiri secara mandiri.',
    ),
);

$count = 0;
foreach ($testimonials as $item) {
    $existing = get_page_by_title($item['title'], OBJECT, 'testimoni');
    if (!$existing) {
        $post_id = wp_insert_post(array(
            'post_title'   => $item['title'],
            'post_content' => $item['content'],
            'post_status'  => 'publish',
            'post_type'    => 'testimoni',
        ));

        if ($post_id && !is_wp_error($post_id)) {
            update_post_meta($post_id, '_cac_profesi', $item['profesi']);
            update_post_meta($post_id, '_cac_kota', $item['kota']);
            update_post_meta($post_id, '_cac_rating', $item['rating']);
            echo "[+] Testimonial Created: {$item['title']} ({$item['profesi']} - {$item['kota']}) (ID: {$post_id})\n";
            $count++;
        } else {
            echo "[!] Error creating testimonial for {$item['title']}\n";
        }
    } else {
        update_post_meta($existing->ID, '_cac_profesi', $item['profesi']);
        update_post_meta($existing->ID, '_cac_kota', $item['kota']);
        update_post_meta($existing->ID, '_cac_rating', $item['rating']);
        echo "[=] Testimonial Updated/Exists: {$item['title']} (ID: {$existing->ID})\n";
    }
}

echo "\n===============================================\n";
echo "  TESTIMONIAL SEEDING COMPLETED! Total: {$count} new. \n";
echo "===============================================\n";
