<?php
header("Content-Type: image/png");

// Load a TTF font (make sure the font file exists)
$fontPath = "fonts/arialbd.ttf"; // Create a folder named fonts and put arial.ttf inside

$image = imagecreatetruecolor(400, 100);

// Colors
$gray = imagecolorallocate($image, 220, 220, 220);
$black = imagecolorallocate($image, 0, 0, 0);
imagefill($image, 0, 0, $gray);

// Text with TTF
imagettftext($image, 20, 0, 80, 60, $black, $fontPath, "Hello, User!");

imagepng($image);
imagedestroy($image);
?>
