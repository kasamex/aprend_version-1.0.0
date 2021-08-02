<?php 

if(stripos($_GET['image'],'.png')){
	$img = imagecreatefrompng($_GET['image']);
}elseif (stripos($_GET['image'],'.jpg') or stripos($_GET['image'],'.jpeg')){
	$img = imagecreatefromjpeg($_GET['image']);
}else{
	$img = imagecreatefromgif($_GET['image']);
}

$imageResized= imagescale($img,$_GET['width'],$_GET['height']);

header('Content-Type:image/jpeg');
imagejpeg($imageResized);
imagedestroy($img);
imagedestroy($imageResized); 

?>
