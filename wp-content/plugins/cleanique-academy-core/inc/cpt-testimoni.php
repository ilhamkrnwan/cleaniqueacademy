<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function cac_register_cpt_testimoni() {
    $labels = array(
        'name'               => 'Testimoni',
        'singular_name'      => 'Testimoni',
        'menu_name'          => 'Testimoni',
        'name_admin_bar'     => 'Testimoni',
        'add_new'            => 'Tambah Testimoni Baru',
        'add_new_item'       => 'Tambah Testimoni Baru',
        'new_item'           => 'Testimoni Baru',
        'edit_item'          => 'Edit Testimoni',
        'view_item'          => 'Lihat Testimoni',
        'all_items'          => 'Semua Testimoni',
        'search_items'       => 'Cari Testimoni',
        'not_found'          => 'Tidak ada testimoni ditemukan.',
        'not_found_in_trash' => 'Tidak ada testimoni di tempat sampah.',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => false,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => false,
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 7,
        'menu_icon'          => 'dashicons-format-quote',
        'supports'           => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
        'show_in_rest'       => true,
    );

    register_post_type( 'testimoni', $args );
}
add_action( 'init', 'cac_register_cpt_testimoni' );
