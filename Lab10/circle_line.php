<?php
header("Content-Type: image/png");

$image = imagecreate(300, 150);

// Colors
$white = imagecolorallocate($image, 255, 255, 255);
$green = imagecolorallocate($image, 0, 255, 0);
$purple = imagecolorallocate($image, 128, 0, 128);

// Draw a green circle
imageellipse($image, 150, 75, 100, 100, $green);

// Draw a purple line
imageline($image, 50, 50, 250, 100, $purple);

imagepng($image);
imagedestroy($image);
?>
