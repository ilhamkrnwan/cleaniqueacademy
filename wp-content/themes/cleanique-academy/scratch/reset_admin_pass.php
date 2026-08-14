<?php
require_once 'c:/laragon/www/cleaniqueacademy/wp-load.php';

$user = get_user_by( 'login', 'admin' );
if ( $user ) {
    wp_set_password( 'admin123', $user->ID );
    echo "Successfully updated admin password to: admin123\n";
} else {
    echo "Admin user not found.\n";
}
