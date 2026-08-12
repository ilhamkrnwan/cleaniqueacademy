<?php
/**
 * Plugin Name: Cleanique Academy Core
 * Plugin URI:  https://cleaniqueacademy.com
 * Description: Core plugin for Cleanique Academy - Registers Custom Post Types (Kegiatan, Program, Testimoni) and Taxonomies.
 * Version:     1.0.0
 * Author:      Cleanique Academy Team
 * Text Domain: cleanique-academy-core
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

define( 'CAC_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'CAC_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

// Load CPTs & Taxonomies
require_once CAC_PLUGIN_DIR . 'inc/cpt-kegiatan.php';
require_once CAC_PLUGIN_DIR . 'inc/cpt-program.php';
require_once CAC_PLUGIN_DIR . 'inc/cpt-testimoni.php';
require_once CAC_PLUGIN_DIR . 'inc/taxonomies.php';
require_once CAC_PLUGIN_DIR . 'inc/meta-boxes.php';

// Flush rewrite rules on activation
register_activation_hook( __FILE__, function() {
    cac_register_cpt_kegiatan();
    cac_register_cpt_program();
    cac_register_cpt_testimoni();
    cac_register_taxonomies();
    flush_rewrite_rules();
} );

register_deactivation_hook( __FILE__, function() {
    flush_rewrite_rules();
} );
