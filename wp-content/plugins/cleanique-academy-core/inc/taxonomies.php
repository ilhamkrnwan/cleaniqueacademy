<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function cac_register_taxonomies() {
    // 1. Jenis Kegiatan
    register_taxonomy(
        'jenis_kegiatan',
        'kegiatan',
        array(
            'labels'            => array(
                'name'              => 'Jenis Kegiatan',
                'singular_name'     => 'Jenis Kegiatan',
                'search_items'      => 'Cari Jenis Kegiatan',
                'all_items'         => 'Semua Jenis Kegiatan',
                'edit_item'         => 'Edit Jenis Kegiatan',
                'update_item'       => 'Perbarui Jenis Kegiatan',
                'add_new_item'      => 'Tambah Jenis Kegiatan Baru',
                'new_item_name'     => 'Nama Jenis Kegiatan Baru',
                'menu_name'         => 'Jenis Kegiatan',
            ),
            'hierarchical'      => true,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite'           => array( 'slug' => 'jenis-kegiatan' ),
            'show_in_rest'      => true,
        )
    );

    // 2. Lokasi Kegiatan
    register_taxonomy(
        'lokasi_kegiatan',
        'kegiatan',
        array(
            'labels'            => array(
                'name'              => 'Lokasi Kegiatan',
                'singular_name'     => 'Lokasi',
                'search_items'      => 'Cari Lokasi',
                'all_items'         => 'Semua Lokasi',
                'edit_item'         => 'Edit Lokasi',
                'update_item'       => 'Perbarui Lokasi',
                'add_new_item'      => 'Tambah Lokasi Baru',
                'new_item_name'     => 'Nama Lokasi Baru',
                'menu_name'         => 'Lokasi Kegiatan',
            ),
            'hierarchical'      => true,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite'           => array( 'slug' => 'lokasi-kegiatan' ),
            'show_in_rest'      => true,
        )
    );
}
add_action( 'init', 'cac_register_taxonomies' );
