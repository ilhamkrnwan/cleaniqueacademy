<?php
require_once __DIR__ . '/../../../../wp-load.php';

$posts = get_posts(array(
    'post_type'   => 'kegiatan',
    'numberposts' => -1,
    'post_status' => 'any',
));

echo "Found " . count($posts) . " kegiatan/galeri posts:\n";
foreach ($posts as $p) {
    echo "- ID: {$p->ID} | Title: {$p->post_title} | Status: {$p->post_status}\n";
}
