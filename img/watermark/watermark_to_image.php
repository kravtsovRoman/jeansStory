<?php
$img = $_GET['src'];
$watermark = imagecreatefrompng('watermark.png');
$watermark_width = imagesx($watermark);
$watermark_height = imagesy($watermark);
$img_path = $img;
if (strstr($img_path, '.jpg')) $img = imagecreatefromjpeg($img_path);
elseif (strstr($img_path, '.png')) $img = imagecreatefrompng($img_path);
if ($img === false) { return false; }

$size = getimagesize($img_path);
$dest_x = $size[0] - $watermark_width - 100;
$dest_y = $size[1] - $watermark_height - 150;

imagealphablending($img, true);
imagealphablending($watermark, true);
imagecopy($img,$watermark,$dest_x,$dest_y,0,0,$watermark_width,$watermark_height);

if (strstr($img_path, '.jpg')) imagejpeg($img);
elseif (strstr($img_path, '.png')) imagepng($img);

imagedestroy($img);
imagedestroy($watermark);
?>