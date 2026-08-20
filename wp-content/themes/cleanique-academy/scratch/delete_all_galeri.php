<?php
if (!defined('FS_METHOD')) {
    define('FS_METHOD', 'direct');
}

require_once __DIR__ . '/../../../../wp-load.php';

global $wpdb;

// Ambil ID semua post bertipe 'kegiatan'
$kegiatan_ids = $wpdb->get_col( "SELECT ID FROM {$wpdb->posts} WHERE post_type = 'kegiatan'" );
$total_found  = count( $kegiatan_ids );

echo "Memulai penghapusan {$total_found} data galeri/kegiatan lama secara langsung di database...\n";

if ( ! empty( $kegiatan_ids ) ) {
    $ids_imploded = implode( ',', array_map( 'intval', $kegiatan_ids ) );
    
    // Hapus postmeta & relasi term terkait
    $wpdb->query( "DELETE FROM {$wpdb->postmeta} WHERE post_id IN ({$ids_imploded})" );
    $wpdb->query( "DELETE FROM {$wpdb->term_relationships} WHERE object_id IN ({$ids_imploded})" );
    
    // Hapus data post kegiatan
    $deleted_rows = $wpdb->query( "DELETE FROM {$wpdb->posts} WHERE ID IN ({$ids_imploded})" );
    
    echo "Selesai. Total data galeri yang berhasil dihapus dari database: {$deleted_rows} item.\n";
} else {
    echo "Tidak ada data galeri/kegiatan yang ditemukan untuk dihapus.\n";
}

// Verifikasi sisa data
$remaining_count = (int) $wpdb->get_var( "SELECT COUNT(*) FROM {$wpdb->posts} WHERE post_type = 'kegiatan'" );
echo "Sisa kegiatan di database: {$remaining_count} item.\n";
