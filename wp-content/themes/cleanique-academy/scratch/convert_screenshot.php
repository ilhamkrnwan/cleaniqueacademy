<?php
$im = imagecreatefromwebp(__DIR__ . '/../screenshot.webp');
if ($im) {
    imagepng($im, __DIR__ . '/../screenshot.png');
    imagedestroy($im);
    echo "screenshot.png created successfully!\n";
} else {
    echo "Failed to load webp\n";
}
