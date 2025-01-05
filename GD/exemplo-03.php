<?php

$image = imagecreatefromjpeg("certificado.jpg");

if (!$image) {
    die("Failed to load image.");
}

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

$fontPathBevan = "fonts" . DIRECTORY_SEPARATOR . "Bevan" . DIRECTORY_SEPARATOR . "Bevan-Regular.ttf";
$fontPathPlayball = "fonts" . DIRECTORY_SEPARATOR . "Playball" . DIRECTORY_SEPARATOR . "Playball-Regular.ttf";

if (!file_exists($fontPathBevan) || !file_exists($fontPathPlayball)) {
    imagedestroy($image);
    die("Font files not found.");
}

imagettftext($image, 32, 0, 320, 250, $titleColor, $fontPathBevan, "CERTIFICADO");
imagettftext($image, 32, 0, 375, 350, $titleColor, $fontPathPlayball, "Divanei Aparecido");
imagestring($image, 3, 440, 370, utf8_decode("Concluído em: ") . date("d/m/Y"), $titleColor);

header("Content-type: image/jpeg");

imagejpeg($image);

imagedestroy($image);

?>