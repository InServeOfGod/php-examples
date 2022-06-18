<?php
session_start();
header("Content-Type: image/png");

$length = 6;
$_SESSION['captcha_code'] = substr(md5(uniqid(rand(0, 6))), 0, $length);

$size = 5;

$width = imagefontwidth($size) * $length;
$height = imagefontheight($size);

$image = imagecreate($width, $height);
$bg = imagecolorallocate($image, 0, 0, 0);
$fg = imagecolorallocate($image, 255, 255, 255);

imagefill($image, 0, 0, $bg);
imagestring($image, $size, 0, 0, $_SESSION['captcha_code'], $fg);
imagepng($image);
