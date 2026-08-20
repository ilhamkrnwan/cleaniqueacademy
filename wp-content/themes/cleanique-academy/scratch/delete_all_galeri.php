<?php
require_once __DIR__ . '/../../../../wp-load.php';

// Hapus semua post bertipe 'kegiatan'
$posts = get_posts(array(
    'post_type'      => 'kegiatan',
    'numberposts'    => -1,
    'post_status'    => 'any',
));

echo "Memulai penghapusan " . count($posts) . " data galeri/kegiatan lama...\n";

$deleted_count = 0;
foreach ($posts as $p) {
    $title = $p->post_title;
    $id    = $p->ID;
    $res   = wp_delete_post($id, true); // true = bypass trash (force delete)
    if ($res) {
        $deleted_count++;
        echo "[DELETED] ID: {$id} | Title: {$title}\n";
    } else {
        echo "[FAILED] ID: {$id} | Title: {$title}\n";
    }
}

echo "\nSelesai. Total data galeri yang berhasil dihapus: {$deleted_count} item.\n";

// Verifikasi sisa data
$remaining = get_posts(array(
    'post_type'   => 'kegiatan',
    'numberposts' => -1,
    'post_status' => 'any',
));
echo "Sisa kegiatan di database: " . count($remaining) . " item.\n";
