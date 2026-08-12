<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function cac_register_cpt_program() {
    $labels = array(
        'name'               => 'Program Pelatihan',
        'singular_name'      => 'Program',
        'menu_name'          => 'Program Pelatihan',
        'name_admin_bar'     => 'Program',
        'add_new'            => 'Tambah Program Baru',
        'add_new_item'       => 'Tambah Program Baru',
        'new_item'           => 'Program Baru',
        'edit_item'          => 'Edit Program',
        'view_item'          => 'Lihat Program',
        'all_items'          => 'Semua Program',
        'search_items'       => 'Cari Program',
        'not_found'          => 'Tidak ada program ditemukan.',
        'not_found_in_trash' => 'Tidak ada program di tempat sampah.',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'program', 'with_front' => false ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 6,
        'menu_icon'          => 'dashicons-welcome-learn-more',
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
        'show_in_rest'       => true,
    );

    register_post_type( 'program', $args );
}
add_action( 'init', 'cac_register_cpt_program' );
