<?php
header("Content-Type: image/png");

// Create 400x100 image
$image = imagecreate(400, 100);

// Colors
$blue = imagecolorallocate($image, 0, 0, 255); // background
$white = imagecolorallocate($image, 255, 255, 255); // text

// Draw text
imagestring($image, 5, 80, 40, "Welcome to Our Shop!", $white);

// Output
imagepng($image);
imagedestroy($image);
?>
