<?php

header('Content-type: image/jpeg');

$filename = 'img/gallery/nophoto.jpg';
if ( ! empty($_GET['file']) && file_exists($_GET['file'])){
    $filename = $_GET['file'];
}

image_resize( $filename , null, 753, 396);


function image_resize($src, $dst, $width, $height, $crop=0){

  if(!list($w, $h) = getimagesize($src)) return "Unsupported picture type!";

  $type = strtolower(substr(strrchr($src,"."),1));
  if($type == 'jpeg') $type = 'jpg';
  switch($type){
    case 'bmp': $img = imagecreatefromwbmp($src); break;
    case 'gif': $img = imagecreatefromgif($src); break;
    case 'jpg': $img = imagecreatefromjpeg($src); break;
    case 'png': $img = imagecreatefrompng($src); break;
    default : return "Unsupported picture type!";
  }

  // resize
    $ratio = min($width/$w, $height/$h);
    $n_width = $w * $ratio;
    $n_height = $h * $ratio;
    $x = ($width-$n_width)/2;
  
    $new = imagecreatetruecolor($width, $height);

  // preserve transparency
  /*
    if($type == "gif" or $type == "png"){
        imagecolortransparent($new, imagecolorallocatealpha($new, 0, 0, 0, 127));
        imagealphablending($new, false);
        imagesavealpha($new, true);
    }
    */
    
  imagecopyresized($new, $img, $x, 0, 0, 0, $n_width, $n_height, $w, $h);
  imagejpeg( $new );

  return true;
}

?>