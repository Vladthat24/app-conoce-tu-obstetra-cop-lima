<?php
session_start();
$random_alpha = md5(rand());

$captcha_code = substr($random_alpha, 0, 6);

$_SESSION['captcha_code'] = sha1($captcha_code);

header('Content-Type: image/png');

$image = imagecreatetruecolor(200, 38);

$background_color = imagecolorallocate($image, 129, 23, 45);

$text_color = imagecolorallocate($image, 255, 255, 255);

imagefilledrectangle($image, 0, 0, 200, 38, $background_color);

$font = dirname(__FILE__) . '/arial.ttf';

imagettftext($image, 20, 0, 60, 28, $text_color, $font, $captcha_code);

imagepng($image);

imagedestroy($image);


/* header('Content-Type: image/png');

$image = imagecreate(90, 50);
$color_fondo = imagecolorallocate($image, 129, 23, 45);
$color_text = imagecolorallocate($image, 255, 255, 255);

function generar_caracteres($chars, $length)
{

    $captcha = null;
    for ($i = 0; $i < $length; $i++) {
        $rand = rand(0, count($chars) - 1);
        $captcha .= $chars[$rand];
    }
    return $captcha;
}

$captcha = generar_caracteres(array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h'), 4);


$font = dirname(__FILE__) . '/arial.ttf';

setcookie('captcha', sha1($captcha), time() + 60 * 3);
imagettftext($image, 20, 13, 30, 35, $color_text, $font, $captcha_code);
imagepng($image); */
