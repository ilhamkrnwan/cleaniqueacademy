<?php
require_once 'c:/laragon/www/cleaniqueacademy/wp-load.php';

$users = get_users( array( 'role' => 'administrator' ) );

if ( empty( $users ) ) {
    $all_users = get_users();
    echo "Found " . count( $all_users ) . " total users.\n";
    foreach ( $all_users as $u ) {
        echo "ID: {$u->ID} | Login: {$u->user_login} | Email: {$u->user_email} | Display Name: {$u->display_name}\n";
    }
} else {
    echo "Found " . count( $users ) . " admin users:\n";
    foreach ( $users as $u ) {
        echo "ID: {$u->ID} | Login: {$u->user_login} | Email: {$u->user_email} | Display Name: {$u->display_name}\n";
    }
}
