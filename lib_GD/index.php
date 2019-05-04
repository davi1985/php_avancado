<?php
// Biblioteca GD - manipulação de imagens
// https://www.php.net/manual/pt_BR/intro.image.php
// REDIMENSIONANDO IMAGEM

$fileName = "php.png";

// Tamanho final da imagem
$width = 200;
$height = 200;

// Tamanho real da imagem
list($origin_width, $origin_height) = getimagesize($fileName);

// Propoção entre altura e largura
$ratio = $origin_width / $origin_height;
// echo $ratio;
if ($width/$height > $ratio) {
	$width = $height * $ratio;
} else {
	$height = $width/$ratio;
}
($width/$height > $ratio) ? $width=$height *$ratio : $height = $width/$ratio ;

// echo 'Tamanho Original: '.$origin_width.' - '.$origin_height;
// echo '<br/>';	
// echo $width.' - '.$height;

// Nova imagen com php
$new_image = imagecreatetruecolor($width, $height);
$origin_img = imagecreatefrompng($fileName);

// Criando a imagem 
imagecopyresampled($new_image, $origin_img, 0, 0, 0, 0, $width, $height, $origin_width, $origin_height);

// Mostar imagem no navegador:
// header("Content-type: image/png");
// imagepng($new_image, null);


// Salvar imagem

imagepng($new_image, 'php-mini.png');

echo 'Imagem redimensionada com sucesso';
