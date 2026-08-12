<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function cac_register_cpt_kegiatan() {
    $labels = array(
        'name'               => 'Kegiatan',
        'singular_name'      => 'Kegiatan',
        'menu_name'          => 'Kegiatan',
        'name_admin_bar'     => 'Kegiatan',
        'add_new'            => 'Tambah Kegiatan Baru',
        'add_new_item'       => 'Tambah Kegiatan Baru',
        'new_item'           => 'Kegiatan Baru',
        'edit_item'          => 'Edit Kegiatan',
        'view_item'          => 'Lihat Kegiatan',
        'all_items'          => 'Semua Kegiatan',
        'search_items'       => 'Cari Kegiatan',
        'not_found'          => 'Tidak ada kegiatan ditemukan.',
        'not_found_in_trash' => 'Tidak ada kegiatan di tempat sampah.',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'kegiatan', 'with_front' => false ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-calendar-alt',
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
        'show_in_rest'       => true,
    );

    register_post_type( 'kegiatan', $args );
}
add_action( 'init', 'cac_register_cpt_kegiatan' );
