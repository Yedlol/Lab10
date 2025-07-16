<?php
header("Content-Type: image/png");

$image = imagecreate(300, 80);

// Colors
$yellow = imagecolorallocate($image, 255, 255, 0);
$black = imagecolorallocate($image, 0, 0, 0);

// Bold text
imagestring($image, 5, 80, 30, "100 Items Sold", $black);

imagepng($image);
imagedestroy($image);
?>
