<?php

header("Content-Type: image/png");

$image = imagecreate(256, 256);

$red = imagecolorallocate($image, 255, 0, 0);
$black = imagecolorallocate($image, 0, 0, 0);

imagestring($image, 5, 120, 120, "Curso de PHP", $red);

imagepng($image);

imagedestroy($image);

?>