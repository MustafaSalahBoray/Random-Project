<?php 
   header('Content-type:image/jpeg');
   $image=imagecreatefromjpeg('cer.png');
   $color=imagecolorallocate($image, 51, 51, 102);
   $name='mostafa ';
   imagettftext($image,18,0,100,100,$color,$name);
   imagejpeg($image);
   imagedestroy($image);


?>