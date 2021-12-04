<?php 


require "../vendor/autoload.php" ; 

use Spatie\Browsershot\Browsershot;

$pathToImage = getcwd() .'/image.pdf' ;
// an image will be saved
Browsershot::url('https://www.google.com')->save($pathToImage);
?>