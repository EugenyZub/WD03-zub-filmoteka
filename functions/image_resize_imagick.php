<?php 

function createThumbnail($imagePath, $cropWidth = 100, $cropHeight = 100){

	/*Чтение изображения*/
	$imagick = new Imagick($imagePath);
	$width  = $imagick->getImageWidth();
	$height = $imagick->getImageHeight();

	//if( $width > $height) {
	//	$imagick->thumbnailImage(0, $cropHeight);
	//} else {
	//	$imagick->thumbnailImage($cropWidth, 0);
	//}

	$imagick->thumbnailImage($cropWidth,$cropHeight);

	//размеры полученной миниатюры
	$width  = $imagick->getImageWidth();
	$height = $imagick->getImageHeight();

	//Центр изображения
	$centreX = round($width / 2);
	$centreY = round($height / 2);

	//Точка дляя обрезки по центру
	$cropWidthHalf 	= round($cropWidth / 2);
	$cropHeightHalf = round($cropHeight / 2);

	//Координаты для старта обрезки
	$startX = max(0, $centreX - $cropWidthHalf);
	$startY = max(0, $centreY - $cropHeightHalf);

	$imagick->cropImage($cropWidth, $cropHeight, $startX, $startY);

	//Возвращаем готове изображение
	return $imagick;

}

 ?>