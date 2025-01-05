<?php

// Load the image
$image = imagecreatefromjpeg("wallpaper.jpg");
if (!$image) {
    die("Failed to load image");
}

// Allocate colors
$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

// Set the path to the font file
$fontPath = __DIR__ . '/path/to/font.ttf';

// Add text to the image using TrueType fonts
imagettftext($image, 36, 0, 450, 150, $titleColor, $fontPath, "CERTIFICADO");
imagettftext($image, 36, 0, 440, 350, $titleColor, $fontPath, "Luiz Paulo Moura");
imagettftext($image, 20, 0, 440, 370, $titleColor, $fontPath, "Concluído em: " . date("d/m/Y"));

// Output the image
header("Content-type: image/jpeg");
imagejpeg($image, "certificado-" . date("Y-m-d") . ".jpg", 10);

// Free up memory
imagedestroy($image);

?>