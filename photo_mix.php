<?php

$file_me = "/home/ec2-user/me.jpg";
$file_ss = "/home/ec2-user/IMG_5272_processed.jpg";
$file_out = "/home/ec2-user/IMG_mix.jpg";

#$size = getimagesize($file_me);

$im_src = imagecreatefromjpeg($file_me);
$im_src_2 = imagecreatefromjpeg($file_ss);

$im = imagecreatetruecolor(600, 900);

$color = imagecolorallocate($im, 255,255,255);

imagefill($im, 1, 1, $color);

imagecopyresampled($im, $im_src, 0, 0, 0, 0, 300, 300, 300, 300 );
imagecopyresampled($im, $im_src, 0, 300, 0, 0, 300, 300, 300, 300 );
imagecopyresampled($im, $im_src, 0, 600, 0, 0, 300, 300, 300, 300 );
imagecopyresampled($im, $im_src_2, 300, 0, 0, 0, 300, 300, 591, 591 );
imagecopyresampled($im, $im_src_2, 300, 300, 0, 0, 300, 300, 591, 591 );
imagecopyresampled($im, $im_src_2, 300, 600, 0, 0, 300, 300, 591, 591 );

imagejpeg($im, $file_out, 100);

#fwrite(STDOUT, $size[0]);
#fwrite(STDOUT, $size[1]);



?>
